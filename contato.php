<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <meta name="google-site-verification" content="">

    <title>Ecotec sistema sanitário | Banheiros químicos e sanitários portáteis.</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width">

    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,300,300italic,900,900italic' rel='stylesheet' type='text/css'>
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
    <?php require("header.php"); ?>

    <section class="banner">
        <img src="img/contato.jpg" alt="">
    </section>

    <section id="pageContent" class="center">
        <h1>Contato</h1>

        <h2>Selecione a região desejada:</h2>

        <ul class="unidades">
            <li><a href="#americana">Região Metropolitana de Campinas</a></li>
            <--!<li><a href="#agudos">Mesorregião de Bauru</a></li>-->
            <--!<li><a href="#jacarei">Região Metropolitana do Vale do Paraíba e Litoral Norte</a></li>-->
            <li><a href="#santo-andre">Grande ABC</a></li>
        </ul>
    </section>

    <div class="clearfix"></div>

    <?php require("footer.php"); ?>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script>
        var default_content="";

        $(document).ready(function(){
            checkURL();
            $('ul.unidades li a').click(function (e){
                    checkURL(this.hash)
            });

            default_content = $('#pageContent').html();        
            setInterval("checkURL()",250);
        });

        var lasturl="";

        function checkURL(hash) {
            if(!hash) hash=window.location.hash;
            if(hash != lasturl) {
                lasturl=hash;
                
                if(hash=="")
                $('#pageContent').html(default_content);
                
                else
                loadPage(hash);
            }
        }

        function loadPage(url) {
            url=url.replace('#','');
            
            $.ajax({
                type: "POST",
                url: "load_page.php",
                data: 'page='+url,
                dataType: "html",
                success: function(msg) {
                    
                    if(parseInt(msg)!=0) {
                        $('#pageContent').html(msg);
                    }
                }
            });
        }
    </script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        var _gaq=[['_setAccount','UA-44841959-1'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src='//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
</body>
</html>