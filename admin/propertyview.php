<?php
session_start();
require("config.php");
////code
 
if(!isset($_SESSION['auser']))
{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Ventura - Data Tables</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		
		<!-- Datatables CSS -->
		<link rel="stylesheet" href="assets/plugins/datatables/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/responsive.bootstrap4.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/select.bootstrap4.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/buttons.bootstrap4.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
	
		<!-- Main Wrapper -->
		
		
			<!-- Header -->
				<?php include("header.php"); ?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Property</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Property</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					
					
					
					<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title mt-0 mb-4">Property View</h4>
										<?php 
											if(isset($_GET['msg']))	
											echo $_GET['msg'];	
										?>
                                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                                            <thead>
                                                <tr>
                                                    <th>P ID</th>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Type</th>
                                                    <th>BHK</th>
                                                    <th>Selling Type</th>
													<th>Bedroom</th>
                                                    <th>Bathroom</th>
                                                    <th>Balcony</th>
                                                    <th>Kitchen</th>
                                                    <th>Hall</th>
                                                    <th>Floor</th>
													<th>Area Size</th>
                                                    <th>Price</th>
                                                    <th>Location</th>
                                                    <th>City</th>
                                                    <th>State</th>
                                                    <th>Feature</th>
													<th>Image1</th>
                                                    <th>Image2</th>
                                                    <th>Image3</th>
                                                    <th>Image4</th>
                                                    <th>Image5</th>
                                                    <th>Uid</th>
													<th>Status</th>
                                                    <th>Floor Plan</th>
                                                    <th>Basement Plan</th>
													<th>Ground Floor Plan</th>
                                                    <th>Total Floor</th>
                                                    <th>Date</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                    
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
												<?php
													
													$query=mysqli_query($con,"select * from property");
													while($row=mysqli_fetch_row($query))
													{
												?>
											
                                                <tr>
                                                    <td><?php echo $row['0']; ?></td>
                                                    <td><?php echo $row['1']; ?></td>
                                                    <td><?php echo "property description"; ?></td>
                                                    <td><?php echo $row['3']; ?></td>
                                                    <td><?php echo $row['4']; ?></td>
                                                    <td><?php echo $row['5']; ?></td>
                                                    <td><?php echo $row['6']; ?></td>
                                                    <td><?php echo $row['7']; ?></td>
                                                    <td><?php echo $row['8']; ?></td>
                                                    <td><?php echo $row['9']; ?></td>
													<td><?php echo $row['10']; ?></td>
                                                    <td><?php echo $row['11']; ?></td>
                                                    <td><?php echo $row['12']; ?></td>
                                                    <td><?php echo $row['13']; ?></td>
                                                    <td><?php echo $row['14']; ?></td>
													<td><?php echo $row['15']; ?></td>
                                                    <td><?php echo $row['16']; ?></td>
                                                    <td><?php echo $row['17']; ?></td>
                                                    <td><img src="property/<?php echo $row['18']; ?>" alt="pimage" height="70px"width="70px"></td>
                                                    <td><img src="property/<?php echo $row['19']; ?>" alt="pimage" height="70px"width="70px"></td>
													<td><img src="property/<?php echo $row['20']; ?>" alt="pimage" height="70px"width="70px"></td>
                                                    <td><img src="property/<?php echo $row['21']; ?>" alt="pimage" height="70px"width="70px"></td>
                                                    <td><img src="property/<?php echo $row['22']; ?>" alt="pimage" height="70px"width="70px"></td>
                                                    <td><?php echo $row['23']; ?></td>
                                                    <td><?php echo $row['24']; ?></td>
													<td><img src="property/<?php echo $row['25']; ?>" alt="plan" height="70px"width="70px"></td>
                                                    <td><img src="property/<?php echo $row['26']; ?>" alt="plan" height="70px"width="70px"></td>
													<td><img src="property/<?php echo $row['27']; ?>" alt="plan" height="70px"width="70px"></td>
                                                    <td><?php echo $row['28']; ?></td>
                                                    <td><?php echo $row['29']; ?></td>
													<td><a href="propertyedit.php?id=<?php echo $row['0'];?>">Edit</a></td>
                                                    <td><a href="propertydelete.php?id=<?php echo $row['0'];?>">Delete</a></td>
                                                </tr>
                                               <?php
												} 
												?>
                                            </tbody>
                                        </table>
                                        
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->
					
				</div>			
			</div>
			<!-- /Main Wrapper -->

		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Datatables JS -->
		<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
		<script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
		<script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
		
		<script src="assets/plugins/datatables/dataTables.select.min.js"></script>
		
		<script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
		<script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
		<script src="assets/plugins/datatables/buttons.html5.min.js"></script>
		<script src="assets/plugins/datatables/buttons.flash.min.js"></script>
		<script src="assets/plugins/datatables/buttons.print.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>
</html>
