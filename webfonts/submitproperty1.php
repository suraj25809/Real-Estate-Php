<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.ico">

<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/login.css">

<!--	Title
	=========================================================-->
<title>Homex - Real Estate Template</title>
</head>
<body>

<!--	Page Loader
=============================================================
<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div>
--> 


<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
        
        <!--	Banner   --->
        <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Submit Property</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Submit Property</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
         <!--	Banner   --->
		 
		 
		<!--	Submit property   -->
        <div class="full-row">
            <div class="container">
                    <div class="row">
						<div class="col-lg-12">
							<h2 class="text-secondary double-down-line text-center">Submit Property</h2>
                        </div>
					</div>
                    <div class="row p-5 bg-white">
                        <form>
                            <div class="description">
                                <h5 class="text-secondary">Basic Information</h5><hr>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Property Title</label>
                                            <span class="ml-2 fa-2x"></span>
                                            <input type="text" name="title" class="form-control">
                                        </div>
                                    </div>            
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Property Status</label>
                                            <select class="form-control">
                                                <option>Any Status</option>
                                                <option>Status 1</option>
                                                <option>Status 2</option>
                                                <option>Status 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Property Status</label>
                                            <select class="form-control">
                                                <option>Any Status</option>
                                                <option>Status 1</option>
                                                <option>Status 2</option>
                                                <option>Status 3</option>
                                            </select>
                                        </div>
                                    </div>            
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <span class="ml-2 fa-2x"></span>
                                            <input type="text" placeholder="USD" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <span class="ml-2 fa-2x"></span>
                                            <input type="text" placeholder="USD" class="form-control">
                                        </div>
                                    </div>
									<div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <span class="ml-2 fa-2x"></span>
                                            <input type="text" placeholder="USD" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="description mt-4">
                                <h5 class="text-secondary">Description</h5><hr>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" placeholder="Write Details..." rows="8"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                 
                            <div class="additional-feature mt-4">
                            <h5 class="text-secondary mb-3">Additional Features</h5>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <ul class="check-submit">
                                            <li>
                                                <i class="fas fa-check text-success" ></i> &nbsp;Garden Include
                                            </li>
                                            <li>
                                                <i class="fas fa-times text-danger"></i> &nbsp;Garden Include
                                            </li>
											<li>
                                                <i class="fas fa-check text-success" ></i> &nbsp;Garden Include
                                            </li>
                                            <li>
                                                <i class="fas fa-times text-danger"></i> &nbsp;Garden Include
                                            </li>
                                        </ul>
                                    </div>
									<div class="col-lg-3">
                                        <ul class="check-submit">
                                            <li>
                                                <i class="fas fa-check text-success" ></i> &nbsp;Garden Include
                                            </li>
                                            <li>
                                                <i class="fas fa-times text-danger"></i> &nbsp;Garden Include
                                            </li>
											<li>
                                                <i class="fas fa-check text-success" ></i> &nbsp;Garden Include
                                            </li>
                                            <li>
                                                <i class="fas fa-times text-danger"></i> &nbsp;Garden Include
                                            </li>
                                        </ul>
                                    </div>
									<div class="col-lg-3">
                                        <ul class="check-submit">
                                            <li>
                                                <i class="fas fa-check text-success" ></i> &nbsp;Garden Include
                                            </li>
                                            <li>
                                                <i class="fas fa-times text-danger"></i> &nbsp;Garden Include
                                            </li>
											<li>
                                                <i class="fas fa-check text-success" ></i> &nbsp;Garden Include
                                            </li>
                                            <li>
                                                <i class="fas fa-times text-danger"></i> &nbsp;Garden Include
                                            </li>
                                        </ul>
                                    </div>
									<div class="col-lg-3">
                                        <ul class="check-submit">
                                            <li>
                                                <i class="fas fa-check text-success" ></i> &nbsp;Garden Include
                                            </li>
                                            <li>
                                                <i class="fas fa-times text-danger"></i> &nbsp;Garden Include
                                            </li>
											<li>
                                                <i class="fas fa-check text-success" ></i> &nbsp;Garden Include
                                            </li>
                                            <li>
                                                <i class="fas fa-times text-danger"></i> &nbsp;Garden Include
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                             </div>
                                    
                            <div class="upload-media mt-5">
                            <h5 class="text-secondary">Add Photos and Videos</h5><hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="browse-submit">
                                            <input type="file" id="fileupload-example-1" class="d-none">
                                            <label class="fileupload-label text-center w-100" for="fileupload-example-1">Drag and Drop to Add Photo (770x390)</label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                                        
                        </form>
                    </div>            
            </div>
        </div>
	<!--	Submit property   -->
        
        
        <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

<!--	Js Link
============================================================--> 
<script src="js/jquery.min.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>