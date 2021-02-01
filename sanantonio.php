<?php
    $mac=$_POST['mac'];
    $ip=$_POST['ip'];
    $username=$_POST['username'];
    $linklogin=$_POST['link-login'];
    $linkorig=$_POST['link-orig'];
    $error=$_POST['error'];
    $trial=$_POST['trial'];
    $loginby=$_POST['login-by'];
    $chapid=$_POST['chap-id'];
    $chapchallenge=$_POST['chap-challenge'];
    $linkloginonly=$_POST['link-login-only'];
    $linkorigesc=$_POST['link-orig-esc'];
    $macesc=$_POST['mac-esc'];
    $identity=$_POST['identity'];
    $bytesinnice=$_POST['bytes-in-nice'];
    $bytesoutnice=$_POST['bytes-out-nice'];
    $sessiontimeleft=$_POST['session-time-left'];
    $uptime=$_POST['uptime'];
    $refreshtimeout=$_POST['refresh-timeout'];
    $linkstatus=$_POST['link-status'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mikrotik Hotspot | Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>


</head>
<body>


<div id="wrap">
    <div class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><?php echo $identity; ?></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="http://www.selpii.com">Login</a></li>
                    <li><a href="http://www.selpii.com/status">Status</a></li>
                    <li><a href="http://www.selpii.com/logout?erase-cookie=true">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div id="bottom-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-2 mylogo">
                    <a href="http://agratitudesign.blogspot.com/" ref="index.html"><img src="img/agratitudesignlogo2.png" alt="logo"></a>
                </div>
                <div class="col-xs-10 textlogo">
                    <h1>INTERNET </h1>
                    <h1> GRATIS</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-md-6 col-sm-12">

            <div class="row">
      <!--
                <?php if($error) : ?>
                    <div class="alert alert-danger"><?php echo $error; ?></div>
                <?php endif; ?>


                <?php if($trial == 'yes') : ?>
                    <div class="alert alert-info">
                        Free trial available, <a href="<?php echo $linkloginonly; ?>?dst=<?php echo $linkorigesc; ?>&amp;username=T-<?php echo $macesc; ?>">click here</a>.
                    </div>
                <?php endif; ?>
-->

                <div class="alert alert-info">

                <a>Obtenga 15 minutos</a>
                <a id='aLink' href="#openModal" class="btn btn-success">Gratis</a>
                <!--<a href='google.com' class="btn btn-success" id='aLink'>Google</a>-->

                </div>

                <div class="alert alert-info">Compra tu PIN</div>
            </div>

            <div class="row">
                <div class="panel panel-default">

                    <div class="panel-body">

                        <form id="loginForm" class="form-horizontal" role="form" action="<?php echo $linkloginonly; ?>" method="post">
                            <input type="hidden" name="dst" value="<?php echo $linkorig; ?>"/>
                            <input type="hidden" name="popup" value="true"/>

                            <div class="form-group">
                                <label for="inputLogin" class="col-sm-2 control-label">Login</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-lg" id="inputLogin" name="username"
                                           placeholder="Login" autofocus required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-sm-2 control-label">Password</label>

                                <div class="col-sm-10">
                                    <input type="password" class="form-control input-lg" id="inputPassword" name="password"
                                           placeholder="Password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary btn-block btn-lg">OK</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="card hovercard">
                        <div class="cardheader">
                        </div>
                        <div class="avatar">
                        <img alt="" src="img/agratitudesignlogo.png">
                        </div>

                      <!--
                        <div class="info">
                        <div class="title">
                        <a href="http://agratitudesign.blogspot.com/">Agratitudesign HighSpeed Hotspot</a>
                        </div>
                        <div class="desc">Website Hotspot Interface For Free</div>

                        <div class="desc">created by <a target="_blank" href="http://agratitudesign.blogspot.com/" title="Agratitudesign Hotspot Templates">agratitudesign.blogspot.com</a></div>
                        <div class="desc">supported by <a target="_blank" href="http://wiswaweb.com/" title="Agratitudesign Hotspot Templates">wiswaweb.com</a></div>
                        </div>
                        <div class="bottom">
                        <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/agratitudesign"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-danger btn-sm" rel="publisher" href="https://plus.google.com/+KetutAgusSuardika"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-primary btn-sm" rel="publisher" href="https://www.facebook.com/pages/Agratitudesign/451131721572773"><i class="fa fa-facebook"></i></a>
                        </div>
                      -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div id="footer">
    <div class="container">
        <!--
        <p class="text-muted">Powered by <a href="http://agratitudesign.blogspot.com/">Agratitudesign</a></p>
      -->

    </div>
</div>


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>


<?php if($chapid) : ?>
<script type="text/javascript" src="js/md5.js"></script>
<script type="text/javascript">
<!--
    function doLogin() {
    <?php if(strlen($chapid) < 1) echo "return true;\n"; ?>
    document.sendin.username.value = document.login.username.value;
    document.sendin.password.value = hexMD5('<?php echo $chapid; ?>' + document.login.password.value + '<?php echo $chapchallenge; ?>');
    document.sendin.submit();
    return false;
    }
//-->
</script>
<?php endif; ?>

<script type="text/javascript">
  document.login.username.focus();
</script>




<div id="openModal" class="modalDialog" style="overflow-y: scroll;">
	<div>
		<a href="#close" title="Close" class="close">X</a>
    <!--
		<h2>Mi modal</h2>
		<p>Este es un ejemplo de modal, creado gracias al poder de CSS3.</p>
		<p>Puedes hacer un montón de cosas aquí, como alertas o incluso crear un formulario de registro aquí mismo.</p>
-->

    <div id="htmlext" class="recargar">
        Aqui se cargará el contenido
    </div>

    <div align="center" class="content">
      <p>ESPERE -->   <span id="countdown"></span> </p>


    </div>
    <div align="center" class="content2">

      <div class="row">





          <?php if($trial == 'yes') : ?>
              <div class="alert alert-info">
                  Pruebalo, <a class="btn btn-warning" href="<?php echo $linkloginonly; ?>?dst=<?php echo $linkorigesc; ?>&amp;username=T-<?php echo $macesc; ?>">Gratis YA!</a>.
              </div>
            <?php else: ?>
           <div class="alert alert-danger">Espere 2 horas y obtenga Gratis nuevamente</div>
          <?php endif; ?>

          <?php if($error) : ?>
              <div class="alert alert-danger"><?php echo $error; ?></div>
          <?php endif; ?>



      </div>

    </div>


	</div>
</div>


<script>
    var direcciones = new Array( "public.php", "public2.php", "public3.php", "public4.php", "public5.php", "public6.php")
    function enlaceAleatorio(){
       aleat = Math.random() * direcciones.length
       aleat = Math.floor(aleat)

       $("#htmlext").load(direcciones[aleat]);

    }
</script>

<script type="text/javascript">


  var totalTime = 0;

  function updateClock() {
    document.getElementById('countdown').innerHTML = totalTime;
    if (totalTime==14){
      scroll(0, 100);
    }

    if(totalTime==0){
      $(".content").fadeOut(1500);
      $(".content2").fadeIn(2500);
      scroll(0, 100);
      console.log('Final');
    }else{
      totalTime-=1;
      setTimeout("updateClock()",1000);
    }
  }
  </script>

<script>
  document.getElementById('aLink').addEventListener('click',function(e){

    if(totalTime==0){
    totalTime = 15;
    updateClock();
    $(".content").fadeIn(1500);
    $(".content2").fadeOut(50);
   }
   totalTime = 15;

   enlaceAleatorio();
   //$("#htmlext").load('public2.php');

  });

  </script>

  <script type="text/javascript">
  window.reproducir = function() {
      document.getElementById("video").play();
  };

  window.pausar = function() {
      document.getElementById("video").pause();
  };

  </script>

</body>
</html>
