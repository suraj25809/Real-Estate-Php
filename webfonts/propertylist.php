<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
								
?>
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
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

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
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Property List</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Property List</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
         <!--	Banner   --->
        
        <!--	Property Grid
		===============================================================-->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
						
							<?php
							$query=mysqli_query($con,"SELECT property.*, user.uname,user.utype,user.uimage FROM `property`,`user` WHERE property.uid=user.uid");
								while($row=mysqli_fetch_array($query))
								{
							?>
						
                            <div class="col-md-12">
                                <div class="featured-thumb list hover-zoomer mb-4">
                                    <div class="overlay-black overflow-hidden position-relative image-area"> <img src="admin/property/<?php echo $row['18'];?>" alt="pimage">
                                        <div class="featured bg-primary text-white">Featured</div>
                                        <div class="sale bg-secondary text-white">For Sale</div>
                                        <div class="price text-primary">$352,000 <span class="text-white">$1200/Sqft</span></div>
                                        
                                    </div>
                                    <div class="featured-thumb-data shadow-one">
                                        <div class="p-4">
                                            <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Nirala Appartment</a></h5>
                                            <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                        <div class="bg-gray quantity px-4 pt-4">
                                            <ul>
                                                <li><span>3400</span> Sqft</li>
                                                <li><span>2</span> Beds</li>
                                                <li><span>3</span> Rooms</li>
                                                <li><span>3</span> Baths</li>
                                                <li><span>1</span> Garage</li>
                                            </ul>
                                        </div>
                                        <div class="p-4 d-inline-block w-100 author">
                                            <div class="float-left"><i class="fas fa-user text-primary mr-1"></i> Jeson Billiam</div>
                                            <div class="float-right"><i class="far fa-calendar-alt text-primary mr-1"></i> 6 Months Ago</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<?php } ?>
                            
                            
                            

                         <!--   <div class="col-md-12">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-center mt-4">
                                        <li class="page-item disabled"> <span class="page-link">Previous</span> </li>
                                        <li class="page-item active" aria-current="page"> <span class="page-link"> 1 <span class="sr-only">(current)</span> </span> </li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">...</li>
                                        <li class="page-item"><a class="page-link" href="#">45</a></li>
                                        <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
                                    </ul>
                                </nav>
                            </div>  -->
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar-widget mt-md-50">
                            <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Advance Search</h4>
                            <form method="post" action="#">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select class="form-control bg-gray">
                                                <option>Any Status</option>
                                                <option>For Rent</option>
                                                <option>For Sale</option>
                                                <option>For Lease</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select class="form-control bg-gray">
                                                <option>Any Type</option>
                                                <option>Appartment</option>
                                                <option>Condose</option>
                                                <option>Land</option>
                                                <option>Commercial</option>
                                                <option>Villah</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select class="form-control bg-gray">
                                                <option>Location</option>
                                                <option>USA</option>
                                                <option>Australia</option>
                                                <option>Russia</option>
                                                <option>France</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="py-4 mb-5">
                                            <label>Price Range :</label>
                                            <div class="price-range font-12 text-ordinary">
                                                <div class="price-filter"> <span class="price-slider">
                                                    <input class="filter-price" type="text" name="price" value="100000;900000" />
                                                    </span> </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group mt-4">
                                            <button type="submit" class="btn btn-primary w-100">Search Property</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="sidebar-widget mt-5">
                            <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Recent Property</h4>
                            <ul class="property_list_widget">
                                <li> <img src="images/thumbnaillist/01.jpg" alt="">
                                    <h6 class="text-secondary hover-text-primary"><a href="#">Nirala Appartment</a></h6>
                                    <span class="font-14"><i class="fas fa-map-marker-alt icon-primary icon-small"></i> Avenue South Burlington, Los Angles</span>
                                    <div class="mt-2 d-flex"> <span class="text-primary h6">$1280 <sub>/ Mo</sub></span> <span class="mx-2">|</span> <span class="text-secondary">Housing</span> </div>
                                </li>
                                <li> <img src="images/thumbnaillist/02.jpg" alt="">
                                    <h6 class="text-secondary hover-text-primary"><a href="#">New Luxury Condos</a></h6>
                                    <span class="font-14"><i class="fas fa-map-marker-alt icon-primary icon-small"></i> Avenue South Burlington, Los Angles</span>
                                    <div class="mt-2 d-flex"> <span class="text-primary h6">$1280 <sub>/ Mo</sub></span> <span class="mx-2">|</span> <span class="text-secondary">Housing</span> </div>
                                </li>
                                <li> <img src="images/thumbnaillist/03.jpg" alt="">
                                    <h6 class="text-secondary hover-text-primary"><a href="#">Zarafaloz Appartment</a></h6>
                                    <span class="font-14"><i class="fas fa-map-marker-alt icon-primary icon-small"></i> Avenue South Burlington, Los Angles</span>
                                    <div class="mt-2 d-flex"> <span class="text-primary h6">$1280 <sub>/ Mo</sub></span> <span class="mx-2">|</span> <span class="text-secondary">Housing</span> </div>
                                </li>
                                <li> <img src="images/thumbnaillist/04.jpg" alt="">
                                    <h6 class="text-secondary hover-text-primary"><a href="#">Monopuly Trade Center</a></h6>
                                    <span class="font-14"><i class="fas fa-map-marker-alt icon-primary icon-small"></i> Avenue South Burlington, Los Angles</span>
                                    <div class="mt-2 d-flex"> <span class="text-primary h6">$1280 <sub>/ Mo</sub></span> <span class="mx-2">|</span> <span class="text-secondary">Housing</span> </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
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