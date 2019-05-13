<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Legion Servers Gaming Community hosting Roleplay servers since 2017 across multiple games">
    <meta name="author" content="HeathDW">
    <?php require("config.php"); ?>

    <title><?php echo $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <link rel="stylesheet" href="css/global.css">

    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <link href="css/sections.css" rel="stylesheet">
    <link href="css/servers.css" rel="stylesheet">
    
  </head> 

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><?php echo $trans['nav']['brand']; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li>
              <a class="nav-link js-scroll-trigger" href="#page-top"><?php echo $trans['nav']['home']; ?></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link js-scroll-trigger" href="#servers"><?php echo $trans['nav']['servers']; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#store"><?php echo $trans['nav']['shop']; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#discord"><?php echo $trans['nav']['discord']; ?></a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#forums"><?php echo $trans['nav']['forums']; ?></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="text-white">
      <div class="container text-center">
      <img class="img-fluid" src="img/logo.png" alt="" height="550" width="550">
        <h1><?php echo $trans['header']['title']; ?></h1>
        <p class="lead"><?php echo $trans['header']['description']; ?></p>
      </div>
    </header>
	
    <section id="servers">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-center"><?php echo $trans['servers']['heading']; ?></h2>
            <div class="border"></div>
            <p class="lead text-center"><?php echo $trans['servers']['description']; ?></p>
            <div style="overflow-x:auto;">
              <table class="table">
                <table class="table table-striped">	
	<thead>
    <tr>
      <th scope="col">Server Name</th>
      <th scope="col">IP/Port</th>
      <th scope="col">Players</th>
	  <th scope="col">Map</th>
    </tr>
  </thead>
        <tbody>
	<?php
		$servers = array("B56zVzgKEV9aOQLAYZSGOUqgyS08hx6Pw7g", "vcKkxCJsVGZdJ7meBZvTIOP27rRuDbX0B", "ApiKey3", "ApiKey4");
		$url = 'https://unturned-servers.net/api/?object=servers&element=detail&key=';
		
		foreach ($servers as $api) {
			$key = "$url$api";
			$key_json = file_get_contents($key);
			$key_array = json_decode($key_json);
			# This is an example use of the options to display data in simple Bootstrap4 table.
			echo "<tr><td>" .$key_array->{'name'}. "</td><td>" .$key_array->{'address'}. ":" .$key_array->{'port'}. "</td><td>" .$key_array->{'players'}. "/" .$key_array->{'maxplayers'}. "</td><td>" .$key_array->{'map'}. "</td></tr>";
		}
	?>
		</tbody>
              </table>
            </div>        
          </div>
        </div>
      </div>
    </section>
	
    <section id="store">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-center"><?php echo $trans['shop']['heading']; ?></h2>
            <div class="border"></div>
            <p class="lead text-center"><?php echo $trans['shop']['description']; ?></p><br><br>
            <div class="row ">
              <?php
                include('other/shops.php');              
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="discord">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
          <h2 class="text-center"><?php echo $trans['discord']['heading']; ?></h2>
            <div class="border"></div>
            <p class="lead text-center"><?php echo $trans['discord']['description']; ?></p><br><br>
            <div class="row">
              <?php
                include('other/discords.php');              
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>
	
	<section id="forums">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
          <h2 class="text-center"><?php echo $trans['forums']['heading']; ?></h2>
            <div class="border"></div>
            <p class="lead text-center"><?php echo $trans['forums']['description']; ?></p><br><br>
            <div class="row">
              <?php
                include('other/forums.php');              
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white"><?php echo $trans['footer']['copyright']; ?></p>
        <p class="m-0 text-center text-white"><?php echo $trans['footer']['credits']; ?></p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/bootstrap-growl/jquery.bootstrap-growl.min.js"></script>
	

    <!-- Pop up notification script -->
    <script src="js/scrolling-nav.js"></script>
    <script src="js/notifications.js"></script>
	
	<!-- Server list update script -->
	<script src="js/serverslistupdate.js"></script>
  </body>

</html>
