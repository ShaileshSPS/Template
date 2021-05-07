<section class="header banner-services">
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
			<div class="services-main-text font-oneday text-left template-base-text-color">
				<h1>Your</h1>
				<h1>one-stop</h1>
				<h1>shop</h1>
			</div>
		</div>
		<div class="container">
			<div class="row shift-right-bottom">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<p class="schedule-demo-p font-larsseit-bold text-right" data-toggle="modal" data-target="#modal-click">SCHEDULE DEMO</p>
				</div>
			</div>
		</div>	
	</div>
</section>
