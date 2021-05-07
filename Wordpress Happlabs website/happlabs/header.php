<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.png">
<title><?php bloginfo( 'name'); ?></title>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139871079-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-139871079-1');
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156929586-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-156929586-1');
</script>-->
<?php wp_head(); ?>
</head>
<body>
	
<?php
if ( is_page( 'about' ) ) :
	get_header( 'about' );
elseif ( is_page( 'services' ) ) :
	get_header( 'services' );
elseif ( is_page( 'work' ) ) :
	get_header( 'work' );
elseif ( is_page( 'contact' ) ) :
	get_header( 'contact' );
else:
	?>
<section class="header banner-home">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
        <a href="/<?php echo explode('/', $_SERVER['REQUEST_URI'])[1] ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.png" width="100px"></a>
      </div>
      <div class="nav-div">
        <span class="hamberger" onclick="$('#mySidenav').width('250px');">&#9776;</span>
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="$('#mySidenav').width(0);">&times;</a>
          <?php include(get_template_directory().'/menu.php' ); ?>
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
        <img class="home-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/arrow.svg">
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
