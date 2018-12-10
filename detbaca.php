<?php
 session_start();

    include('conn.php');

    $usr = $_SESSION['usrxreidx'];

    if (empty($usr)) 
    {
        header('location:index');
    }

    ?>
<!DOCTYPE html>
<html>
<head>
<?php
include('conn.php');
?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Baca dulu | Welcome to REID</title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <!--end of global css-->
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="css/cart.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/tabbular.css">
    <link rel="stylesheet" type="text/css" href="vendors/bootstrap-rating-master/bootstrap-rating.css">
    <!--end of page level css-->
</head>

<body>
    <!-- Header Section Start -->
    <header>
        <!-- Icon Section Start -->
        <div class="icon-section">
            <div class="container">
                <ul class="list-inline">
                    <li>
                        <a href="#"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="google-plus" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/reid.official/"> <i class="livicon" data-name="instagram" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="rss" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li class="pull-right">
                        <ul class="list-inline icon-position">
                            <li>
                                <a href="mailto:"><i class="livicon" data-name="mail" data-size="18" data-loop="true" data-c="#fff" data-hc="#fff"></i></a>
                                <label class="hidden-xs"><a href="mailto:" class="text-white">admin@reid.com</a></label>
                            </li>
                            <li>
                                <a href="tel:"><i class="livicon" data-name="phone" data-size="18" data-loop="true" data-c="#fff" data-hc="#fff"></i></a>
                                <label class="hidden-xs"><a href="tel:"class="text-white">0822-6000-8484</a></label>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- //Icon Section End -->
        <!-- Navbar Section Start -->
        <nav class="navbar navbar-default container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                    <span><a href="#"> <i class="livicon" data-name="responsive-menu" data-size="25" data-loop="true" data-c="#757b87" data-hc="#ccc"></i>
                    </a></span>
                </button>
                <a class="navbar-brand" href="#"><img src="logo/logo.png" width="35%" class="logo_position">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="collapse">
                <ul class="nav navbar-nav navbar-right">
<li class="dropdown"><a href="home"> Beranda</a>
                    </li>
                    <li class="dropdown"><a href="pilih"> Buat Tulisan</a>
                    </li>
                    <li class="active"><a href="bacaan"> Bacaan</a>               
                    </li>
                    <li class="dropdown"><a href="testimoni"> Testimonials</a>
                    </li>
                    </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Profil</a>
                        <ul class="dropdown-menu" role="menu">
                        <?php
                        $buku = mysqli_query($conn, "SELECT * FROM user WHERE username = '$usr' ");
      while ($fl = mysqli_fetch_array($buku))
      {
        echo "
<li><center><img src='logo/male.png' width='50%'></center><br><br>
                            </li>
                            <li><a href='#'><center>$fl[nama]</center></a>
                            </li>
                            <li><a href='#'><center>$fl[username]</center></a></li>
                            <li><a href='#'><center>$fl[uang]</center></a>
                            <li><a href='#'><center>Setting</center></a>
                            </li>
                            <li><a href='logout.php'><center>Log out</center></a>
                            </li>
        ";
      }
                        ?>



                        </ul>
                        </li>  
                </ul>
            </div>
        </nav>
        <!-- //Navbar Section End -->
    </header>
    <!-- //Heaser Section End-->
    <!-- Breadcrumb Section Start -->
    <div class="breadcum">
        <div class="container">
            <ol class="breadcrumb">
                <li>
                    <a href="index.html"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                    </a>
                </li>
                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Bacaan</a>
                </li>
                                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">
                    <?php 

                    $idku = $_GET['id'];
                    $buku = mysqli_query($conn, "SELECT * FROM book INNER JOIN user ON book.id_user = user.id_user where id_book = $idku");
                    while ($fl = mysqli_fetch_array($buku))
                    {
                                $jdl = $fl['title'];
                                $gmbr = $fl['gambar'];
                                $nama = $fl['nama'];
                                $desk_sing =  $fl['desk_sing'];
                                $desk = $fl['desk'];
                    }

                    echo $jdl;

                     ?></a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Bacaan
            </div>
        </div>
    </div>
    <!-- //Breadcrumb Section End-->
    <!-- Container Section Start -->
    <div class="container">
        <!--item view start-->
        <div class="row">
            <div class="mart10">
      <?php        

        echo "  
                <div class='col-md-4'>
                    <div class='row'>
                        <div class='product_wrapper'>
                            <img src='$gmbr' class='img-responsive' />
                        </div>
                    </div>
                </div>
                    <div class='col-md-8'>
                    <h2 class='text-primary'>$jdl</h2>
                     By $nama<br>
                    <i class='fa fa-star text-primary'></i>
                    <i class='fa fa-star text-primary'></i>
                    <i class='fa fa-star text-primary'></i>
                    <i class='fa fa-star text-primary'></i>
                    <i class='fa fa-star-o text-primary'></i>
                    <h5>5 Review(s) | Add your Review</h5>
                    <p>$desk_sing</p>
                    <a href='baca?bokid=$idku' class='btn btn-danger btn-lg text-white'>Baca</a>
                </div>
            </div>"
            ;
        
    ?>



        </div>
        <!--item view end-->
        <!--item desciption start-->
        <div class="row">
            <div class="col-sm-12">
                <!-- Tabbable-Panel Start -->
                <div class="tabbable-panel">
                    <!-- Tabbablw-line Start -->
                    <div class="tabbable-line">
                        <!-- Nav Nav-tabs Start -->
                        <ul class="nav nav-tabs ">
                            <li class="active">
                                <a href="#tab_default_1" data-toggle="tab">
                                Description </a>
                            </li>
                            <li>
                                <a href="#tab_default_2" data-toggle="tab">
                                Reviews </a>
                            </li>
                        </ul>
                        <!-- //Nav Nav-tabs End -->
                        <!-- Tab-content Start -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_default_1">

      <?php   
        echo "
                                <prev>$desk</prev>
                                ";
                                ?>

                            </div>
                            <div class="tab-pane" id="tab_default_2">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <form>
                                            <div class="form-group">
                                                <label>Name:</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Email:</label>
                                                <input type="mail" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Review</label>
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="rating3" class="uname">Your Ratings:</label>
                                                <input type="hidden" id="rating3" class="rating form-control" data-filled="fa fa-star fa-1x" data-empty="fa fa-star-o fa-1x" />
                                            </div>
                                            <div class="form-group">
                                                <a href="#" class="btn btn-primary text-white">Submit</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-sm-8">
                                        <h3 class="text-primary">Reviews</h3>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star-o text-primary"></i>
                                        <h6>Jim J. Platz</h6>
                                        <h6>jan 31, 2015</h6>
                                        <strong>Trout Burrowing</strong>
                                        <p>Burbot yellow-eye mullet sailback scorpionfish sandroller snake mudhead limia sea chub Asiatic glassfish marblefish pikehead snook. Atlantic eel Rio Grande perch stingray longjaw mudsucker albacore northern sea robin spotted dogfish northern sea robin river stingray. </p>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star-half-empty text-primary"></i>
                                        <i class="fa fa-star-o text-primary"></i>
                                        <h6>Jim J. Platz</h6>
                                        <h6>feb 6, 2015</h6>
                                        <strong>Trout Burrowing</strong>
                                        <p>Burbot yellow-eye mullet sailback scorpionfish sandroller snake mudhead limia sea chub Asiatic glassfish marblefish pikehead snook. Atlantic eel Rio Grande perch stingray longjaw mudsucker albacore northern sea robin spotted dogfish northern sea robin river stingray. </p>
                                        <nav class="pull-right">
                                            <ul class="pagination">
                                                <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                                <li><a href="#">2 <span class="sr-only">(current)</span></a></li>
                                                <li><a href="#">3 <span class="sr-only">(current)</span></a></li>
                                                <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&raquo;</span></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!-- Tab-content End -->
                        </div>
                        <!-- //Tabbable-line End -->
                    </div>
                    <!-- Tabbable_panel End -->
                </div>
            </div>
        </div>
        <!--item desciption end-->
        <!--recently view item-->
        
        <!--recently view item end-->
    </div>
    <!-- //Container Section End -->
    <!-- Footer Section Start -->
    <footer>
        <!-- Footer Container Start -->
        <div class="container footer-text" style="padding-right: 60px; padding-left: 50px">
            <!-- About Us Section Start -->
            <div class="col-sm-4">
                <h4>Follow Us</h4>
                <ul class="list-inline">
                    <li>
                        <a href="#"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="google-plus" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="linkedin" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                        </a>
                    </li>
                </ul><br>
                <h4>Media Partner</h4>
                <a href="http://ribrick.com/">
                            <img class="mediaPart" src="images/ribrick.png" alt="">
                        </a>
            </div>
            <!-- //About Us Section End-->
            <!-- Contact Section Start -->
            <div class="col-sm-4">
                <h4>Contact Us</h4>
                <ul class="list-unstyled">
                    <li>Jakarta, Indonesia.</li>
                    <li><i class="livicon icon4 icon3" data-name="cellphone" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>Phone: 0822 6000 8484</li>
                    <li><i class="livicon icon3" data-name="mail-alt" data-size="20" data-loop="true" data-c="#ccc" data-hc="#ccc"></i> Email:<span class="success">
                        <a href="mailto:">admin@reid.com</a></span>
                    </li>
                </ul>

            </div>
            <!-- //Contact Section End -->
            <!-- Recent post Section Start -->
            <div class="col-sm-4">
                <h4>Youtube Channel</h4>
                <div class="media">
                    <div class="media-left media-top" style="padding-left: 20px;">
                        <a href="#">
                            <img class="media-object" src="logo/logoreid.png" alt="image">
                        </a>
                    </div>
                    <div class="media-body">
                        <p class="media-heading"> REID - Indonesia Membaca
                            <br /><br>
                            <div class="pull-right" >
                                    <button type="button" class="btn btn-responsive button-alignment btn-danger" data-toggle="button" aria-pressed="false">SUBSCRIBE!</button>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            <!-- //Recent Post Section End -->
        </div>
        <!-- Footer Container Section End -->
    </footer>
    <!-- //Footer Section End -->
    <div class="copyright">
        <div class="container">
            <p>Copyright &copy; Ribrick Tech, 2018</p>
        </div>
    </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <!--global js starts-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="js/style-switcher.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/raphael.js"></script>
    <script type="text/javascript" src="js/livicons-1.4.min.js"></script>
    <script type="text/javascript" src="js/josh_frontend.js"></script>
    <!--global js end-->
    <!--page level js start-->
    <script type="text/javascript" src="js/elevatezoom.js"></script>
    <script type="text/javascript" src="vendors/bootstrap-rating-master/bootstrap-rating.min.js"></script>
    <script type="text/javascript" src="js/cart.js"></script>
    <!--page level js start-->
</body>

</html>
