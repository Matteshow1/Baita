<?php /* AVSBDMNG */

include "/membri/.dummy/subdomains.php";

switch(@GetSubdomain("iormat", $_SERVER['HTTP_HOST'])) {
	case "bici": Header("Location: /bici"); break;
	case "baita": Header("Location: /webcam/"); break;
	//default: Header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    	<title>HOME - Matteo Ioriatti</title>
        <?php require_once '/membri/iormat/header.php'; ?>
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#"><img width="50px" src="img\logo.png"/></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="webcam_Pag\index.php">Paganella</a></li>
                        <li class="nav-item"><a class="nav-link" href="bici\index.html">Bici</a></li>
                      </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container">
            <div class="text-center mt-5">
                <h1>Matteo Ioriatti</h1>
                <p class="lead">A private site</p>
            </div>
        </div>

        <div class="menu-container">
  
  <div class="hex-wrapper">
    
    <div class="hex-row">
      <div class="hexagon" id="nav-about" onclick="location.href='webcam/index.php';">
        Webcam
        <div class="face1"></div>
        <div class="face2"></div>
      </div>
      <div class="hexagon" id="nav-work" onclick="location.href='video/index.php';">
        Drone
        <div class="face1"></div>
        <div class="face2"></div>
      </div>
    </div>
    <div class="hex-row shift">
      <div class="hexagon" id="nav-contact" onclick="location.href='bici/index.html';">
        Bici
        <div class="face1"></div>
        <div class="face2"></div>
      </div>
    </div>
  </div>
</div>



    	<?php require_once '/membri/iormat/footer.php'; ?>

    </body>
</html>
