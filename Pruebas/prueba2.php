<!DOCTYPE html>
<html lang="en">
<head>
    <title>Animate.css</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, minimal-ui" />

    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link rel="dns-prefetch" href="//code.jquery.com" />

    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,400italic,700italic,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="animate.css" />
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<header class="site__header island">
    <div class="wrap">
        <span id="animationSandbox" style="display: block;"><img src="GelatinaMini.png"></span>
        <span class="beta subhead">Just-add-water CSS animations</span>
    </div>
</header><!-- /.site__header -->

<main class="site__content island" role="content">
    <div class="wrap">
        <form>
            <select class="input input--dropdown js--animations">
                <optgroup label="Lightspeed">
                    <option value="lightSpeedIn">lightSpeedIn</option>
                    <option value="lightSpeedOut">lightSpeedOut</option>

                </optgroup>
            </select>

            <button class="butt js--triggerAnimation">Animate it</button>
        </form>
        <hr />
        <p class="meta"><a href="https://raw.github.com/daneden/animate.css/master/animate.css" download="animate.css">Download Animate.css</a> or <a href="//github.com/daneden/animate.css">View on GitHub</a></p>
        <p><small>Another thing from <a href="//daneden.me">Daniel Eden</a>.</small></p>
    </div>
</main><!-- /.site__content -->

<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script>
    function testAnim(x) {
        $('#animationSandbox').removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
            $(this).removeClass();
        });
    };
    $(document).ready(function(){
        $('.js--triggerAnimation').click(function(e){
            e.preventDefault();
            var anim = $('.js--animations').val();
            testAnim(anim);
        });

        $('.js--animations').change(function(){
            var anim = $(this).val();
            testAnim(anim);
        });
    });

</script>

</body>
</html>
