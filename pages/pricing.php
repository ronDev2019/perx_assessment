<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/yeti/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css">
    <link rel="shortcut icon" href="../img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Perx Pricing</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href=""><div class="logo"></div></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="float-right">
	            <div class="collapse navbar-collapse" id="navbarColor01">
	                <ul class="navbar-nav me-auto">
	                    <li class="nav-item">
	                        <a class="nav-link" href="#">The Perx Platform</a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link" href="#">Technology</a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link" href="#">Industry</a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link" href="#">Resources</a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link" href="#">Partners</a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link" href="#">Company</a>
	                    </li>
	                </ul>
	            </div>
	        </div>
        </div>
    </nav>
    <!-- End -->

    <!-- Main Content -->
    <div class="container-fluid pricing-page">	
    	<h1 class="text-center mt-5"> Broadcast Business to the World </h1><hr>	
    	<div class="row priceContainer">
			<?php require_once 'modules/pricingOutput.php'; ?>
    	</div>
    </div>
</body>
</html>