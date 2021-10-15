<?php include("includes/header.php");  ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include("includes/sidebar.php");  ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include("includes/top_menu.php");  ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <?php include("includes/page_heading.php");  ?>
                    <!-- End of Page Heading -->
                    <!-- Content Row Earnings Card Example -->
                    <div class="row">
                    <?php include("includes/home_info_boxes_earnings.php");  ?>
                    </div>
                    <!-- End of Content Row Earnings Card Example -->

                    <div class="row">

                        <!-- Area Chart -->
                        <?php include("includes/home_cards_earning_overview.php");  ?>
                        <!-- End of Area Chart -->
                        <!-- Pie Chart -->
                        <?php include("includes/home_cards_pie_charts.php");  ?>
                        <!-- End of Pie Chart -->                        
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <?php include("includes/home_cards_projects.php");  ?>
                            <!-- End of Project Card Example -->   
                            </div>

                            <!-- Color System -->
                            <?php include("includes/home_cards_color_system.php");  ?> 
                            <!-- End of Color System -->
                        </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <?php include("includes/home_cards_illustrations.php");  ?> 
                            <!-- End of Illustrations -->
                            <!-- Approach -->
                            <?php include("includes/home_cards_approach.php");  ?>  
                            <!-- End of Approach -->
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include("includes/footer.php");  ?>  
            <!-- End of Footer -->    
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php include("includes/logout_modal_form.php");  ?>  
    <!-- Javascript files -->
    <?php include("includes/javascripts.php");  ?>  

</body>

</html>