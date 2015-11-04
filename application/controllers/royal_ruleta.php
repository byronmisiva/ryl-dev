<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Royal_ruleta extends CI_Controller
{

    public $data;
    var $folderView;
    var $controlador;
    var $idApp;
    var $secretApp;
    var $condiciones;
    var $dispositivo;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('royal_usuario', 'usuario_royal');
        $this->load->model('mdl_royal_ruleta', 'modelo');
        $this->load->helper('form');
        $this->folderView = "royal_ruleta";
        $this->data['controlador'] = "royal_ruleta";

        $this->data['condiciones'] = "<a href='" . base_url() . "archivos/REGLAMENTO-DE-TERMINOS-Y-CONDICIONES-PARA-EL-CONCURSO-Karaoke.pdf' target='_blank' >T�rminos y condiciones</a>";
    }

    function index()
    {


        if ($this->verificarDispositivo() == "1") {
            $this->movil();
        } else {

            $this->data['dispositivo'] = "normal";
            $this->load->view($this->folderView . '/index', array('data' => $this->data));
        }
    }


    function movil()
    {
        $this->data['dispositivo'] = "movil";
        $this->load->view($this->folderView . '/movil', array('data' => $this->data));
    }

    function verificarDispositivo()
    {
        $this->load->library('user_agent');
        $mobiles = array('Sony Ericsson', 'Apple iPhone', 'Ipad', 'Android', 'Windows CE', 'Symbian S60', 'Apple iPad', "LG", "Nokia", "BlackBerry");
        $isMobile = "0";
        if ($this->agent->is_mobile()) {
            $m = $this->agent->mobile();
            if ($m == "Android" and preg_match('/\bAndroid\b.*\bMobile/i', $this->agent->agent) == 0)
                $m = "Android Tablet";
            switch ($m) {
                case 'Apple iPad':
                    $isMobile = "2";
                    break;
                case 'Android Tablet':
                    $isMobile = "2";
                    break;
                case in_array($m, $mobiles):
                    $isMobile = "1";
                    break;
            }
        }
        return $isMobile;
    }


    function verificarParticipante()
    {
        $cedula = $_POST["cedula"];
        $participante = $this->usuario_royal->getUser($cedula);
        if ($participante == "0") {
            echo "F";
        } else {
            echo json_encode($participante);
        }
    }

    function validarCodigo()
    {
        if (isset ($_POST["codigo"])) {
            $codigo = $_POST["codigo"];
        } else {
            echo "F";
            return;
        }
        if (isset ($_POST["cedula"])) {
            $cedula = $_POST["cedula"];
        } else {
            echo "F";
            return;
        }


        $codData = $this->modelo->getCodigo($codigo);
        if ($codData == "0") {
            echo "F";
        } else {
            echo json_encode($codData);
            $this->insertarSeguimientoValidacion($codigo, $cedula, json_encode($codData));
        }
    }

    function insertarSeguimientoValidacion($codigo, $cedula, $resultado = "")
    {
        $ip = $_SERVER['REMOTE_ADDR'];

        $insertarMensaje = array("codigopremio" => $codigo,
            "cedula" => $cedula,
            "resultado" => $resultado,
            "ip" => $ip);
        $this->db->insert("royal_usuario_serial", $insertarMensaje);
        return;
    }

    function grabaEvento()
    {
        if (isset ($_POST["codigo"])) {
            $codigo = $_POST["codigo"];
        } else {
            echo "F";
            return;
        }
        if (isset ($_POST["cedula"])) {
            $cedula = $_POST["cedula"];
        } else {
            echo "F";
            return;
        }

        $codData = $this->modelo->getCodigo($codigo);
        if ($codData == "0") {
            echo "F";
        } else {

            echo json_encode($codData);
            $this->registraPremio($codigo, $cedula, $codData->id_premio);
        }
    }

    function registraPremio($codigo, $cedula, $premio)
    {
        //caso camiseta
        if ($premio == "2") {
            $this->envioEmailPremio("bherrera@misiva.com.ec");
            // actualizaPremio ($codigo);
        }
        if ($premio == "3") {

        }
        if ($premio == "4") {

        }
    }

    function envioEmailPremio()
    {
        $this->load->library('email');

        $this->email->from('your@example.com', 'Your Name');
        $this->email->to('someone@example.com');
        $this->email->cc('another@another-example.com');
        $this->email->bcc('them@their-example.com');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        $this->email->send();

       // echo $this->email->print_debugger();
        /*


        $this->load->library('email');
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = '69,64,85,167';
        $config['smtp_port'] = '25';
        $config['smtp_timeout'] = '4';
        $config['smtp_user'] = 'info@ganaconroyal.com';
        $config['smtp_pass'] = 'Fhtf48_4';
        $config['charset'] = 'utf-8';
        $config['newline'] = "\r\n";
        $config['mailtype'] = 'html';
        $config['validation'] = TRUE;
        $config['wordwrap'] = FALSE;

        $this->email->initialize($config);
        $this->email->from('info@ganaconroyal.com', 'Royal te informa:');
        $this->email->to('bherrera@misiva.com.ec');
        $data = array();
        $body = $this->load->view($this->folderView . '/email', $data, TRUE);
        $this->email->subject("ROYAL");
        $this->email->message($body);

        $error = $this->email->send();

        echo $error;*/
    }

    function register()
    {

        if (isset($_POST['nombre'])) {
            if ($this->usuario_royal->alreadyRegistrer('usuarios', array('cedula' => $_POST['cedula'])) == "y") {
                $updateUser = array(
                    'nombre' => $_POST['nombre'], 'apellido' => $_POST['apellido'],
                    'completo' => $_POST['nombre'] . " " . $_POST['apellido'],
                    'mail' => $_POST['mail'], 'ultima_app' => "Ruleta 2015",
                    'ciudad' => $_POST['ciudad'], 'cedula' => $_POST['cedula'],
                    'telefono' => $_POST['telefono']
                );
                $this->db->update('usuarios', $updateUser, array('cedula' => $_POST['cedula']));
                $resp = "1";
            } else {
                $insertUser = array(
                    'nombre' => $_POST['nombre'], 'apellido' => $_POST['apellido'],
                    'completo' => $_POST['nombre'] . " " . $_POST['apellido'],
                    'mail' => $_POST['mail'], 'ultima_app' => "Ruleta 2015",
                    'ciudad' => $_POST['ciudad'], 'cedula' => $_POST['cedula'],
                    'telefono' => $_POST['telefono'], 'fbid' => $_POST['fbid']
                );
                $this->db->insert('usuarios', $insertUser);
                $this->db->insert_id();
                $resp = "1";
            }
            $this->load->library('user_agent');
            $mobiles = array('Apple iPhone', 'Apple iPod Touch', 'Android', 'Apple iPad');
            if ($this->agent->is_mobile())
                $this->index();

            echo $resp;
        }


    }


    /*---------------------------*/

    function savePuntage()
    {
        if (isset($_POST['puntos'])) {
            $this->db->where("fbid", $_POST['participante']);
            $this->db->update("karaoke_galaxya_registro", array("puntaje" => $_POST['puntos']));

            $this->db->select('edad');
            $this->db->where("fbid", $_POST['participante']);
            $this->db->from("karaoke_galaxya_registro");
            $consulta = $this->db->get();
            $registro = current($consulta->result());
            echo $registro->edad;

        }
    }

    /**************************************************************/

    function ingresoActividad($sw = "0")
    {
        $this->data["dispositivo"] = $sw;
        $this->load->view($this->folderView . '/actividad');
    }


    function cargaEfectos()
    {
        $this->load->view($this->folderView . '/efectos');
    }

    function saveGenerado()
    {
        $participante = $_POST["participante"];
        $registro = $this->modelo->buscarUserFbid($_POST["participante"]);
        exec("chmod 777 /var/www/vhosts/misiva.com.ec/subdominios/appss/galaxy-a/generados/" . $_POST["imagenselfie"]);
        $this->modelo->guardarGaleria($registro->id_user, $_POST["imagenselfie"]);
    }


    function ingresoManifiesto()
    {
        if (isset($_POST["texto"])) {
            $registro = $this->modelo->buscarUserFbid($_POST["participante"]);
            $insertarMensaje = array("mensaje" => $_POST["texto"],
                "fbid" => $_POST["participante"],
                "id_user" => $registro->id);
            $this->db->insert("manifiesto_galaxy", $insertarMensaje);
        }
    }

    function obtenerManifiesto()
    {
        $this->data["manifiesto"] = $this->modelo->getManifiesto();
        $this->load->view($this->folderView . '/js-manifiesto', array('data' => $this->data));
    }

    function obtenergaleria($fbid)
    {
        $registro = $this->modelo->buscarUserFbid($fbid);
        $data["galeria"] = $this->modelo->getGaleria($registro->id_user);
        $this->load->view($this->folderView . '/js-galeria', $data);
    }

    function sumarCompartida($id)
    {
        $participante = $this->modelo->buscarUserFbid($id);
        $compartidos = (int)$participante->compartidos;
        $compartidos = $compartidos + 1;
        $this->db->where("id", $participante->id);
        $this->db->update("karaoke_galaxya_registro", array("compartidos" => $compartidos));
    }

    function sumarCompartidaPosteo($id)
    {
        $participante = $this->modelo->buscarUserFbid($id);
        $compartidos = (int)$participante->posteos;
        $compartidos = $compartidos + 1;
        $this->db->where("fbid", $id);
        $this->db->update("karaoke_galaxya_registro", array("posteos" => $compartidos));
    }

    function registrarInvitados($id)
    {
        $arreglo = json_decode($_POST['data']);
        $total = count($arreglo);
        $dato = $this->modelo->obtenerCampartidos($id);
        $data['user'] = $this->modelo->obtenerRegistro($id);

        $val_nuevo = $total + (int)$dato->compartido;
        $data_update = array(
            "compartido" => (string)$val_nuevo);
        $this->db->where(array('id_user' => $id));
        $this->db->update('halloween', $data_update);
        if ($val_nuevo % 5 == 0 || $total > 5)
            echo "C-0";
        else
            echo "I-" . ($val_nuevo % 5);
    }

    function agradecimiento()
    {
        $this->load->view($this->folderView . '/agradecimiento');
    }


}




























