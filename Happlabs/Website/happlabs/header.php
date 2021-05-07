<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="./assets/images/common/logo.png">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<link href="./assets/css/bootstrap.min.css" rel="stylesheet">
<link href="./assets/css/mdb.min.css" rel="stylesheet">
<link href="./style.css" rel="stylesheet">
<script type="text/javascript" src="./assets/js/jquery.min.js"></script>
<script type="text/javascript" src="./assets/js/popper.min.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./assets/js/mdb.min.js"></script>
<script type="text/javascript" src="./assets/js/stepper.js"></script>
<title>Happlabs</title>
<!-- Global site tag (gtag.js) - Google Analytics -->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156929586-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-156929586-1');
</script>-->
</head>
<body>
	
<?php
$url =  explode('/', $_SERVER['REQUEST_URI'])[2];
if ( $url == 'about.php' ) :
	include( 'header-about.php' );
elseif ( $url == 'services.php' ) :
	include( 'header-services.php' );
elseif ( $url == 'work.php'  ) :
	include( 'header-work.php' );
elseif ( $url == 'contact.php' ) :
	include( 'header-contact.php' );
else:
	?>
<section class="header banner-home">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
        <a href="/<?php echo explode('/', $_SERVER['REQUEST_URI'])[1] ?>"><img class="logo" src="./assets/images/common/logo.png" width="100px"></a>
      </div>
      <div class="nav-div">
        <span class="hamberger" onclick="$('#mySidenav').width('250px');">&#9776;</span>
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="$('#mySidenav').width(0);">&times;</a>
          <?php include('./menu.php' ); ?>
        </div>    
      </div>
    </div>
    <div class="row">
      <div class="home-main-text font-oneday text-left template-base-text-color">
        <h1>We</h1>
        <h1>listen,</h1>
        <h1>envision,</h1>
        <h1>create</h1>
        <p class="mb-0 mt-4">That's How We Work</p>
        <img class="home-arrow" src="./assets/images/common/arrow.svg">
      </div>
    </div>
    <div class="container">
      <div class="row shift-right-bottom">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <p class="schedule-demo-p font-larsseit-bold text-right" data-toggle="modal" data-target="#modal-click"><b>SCHEDULE DEMO</b></p>
        </div>
      </div>
    </div>    
  </div>
</section>
<?php
endif;
?>
