<?php
 session_start();

    include('conn.php');

    $usr = $_SESSION['usrxreidx'];

        if (empty($usr)) 
    {
        header('location:index');
    }

    $results_per_page = 8;

    if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
    $start_from = ($page-1) * $results_per_page;
    ?>
<!DOCTYPE html>
<html>
<?php
include('conn.php');
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bacaan | Welcome to REID</title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/shopping.css">
    <!--end of global css-->
</head>

<body>
    <!-- Header Start -->
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
        <!-- Nav bar Start -->
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
        <!-- Nav bar End -->
    </header>
    <!-- //Header End -->
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
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Bacaan
            </div>
        </div>
    </div>
    <!-- //Breadcrumb Section End-->
    <!-- Container Section Start -->
    <div class="container">
        <!--Content Section Start -->
        <!-- Best Deal Section Start -->
                    <h3>BACAAN</h3>
        <div class="row">
        <!-- SATU -->
        <?php        
        $i = 1;
      $buku = mysqli_query($conn,"SELECT * FROM ((book INNER JOIN user ON book.id_user = user.id_user) INNER JOIN katagori ON book.id_katagori = katagori.id_katagori) WHERE status = 'approved' LIMIT $start_from,$results_per_page");

      while ($fl = mysqli_fetch_array($buku))
      { 

        $kocak = $i % 5; 
        if($kocak == 0) 
        {
            echo "</div><div class='row'>";
            goto ini;
        }

        ini :

            $nicee = $fl['id_book'];

        echo "
        <div class='col-sm-6 col-md-3'>
                <div class='thumbnail text-center' >

                    <a href='single_product.html'><img src='$fl[gambar]' style='width:80%' class='img-responsive' alt='htc image'></a>
                    <br/>
                    <div  style='height:50%'>
                    <h5 class='text-primary'>$fl[title]</h5>
                                        
                      <p>$fl[desk_sing]</p>
                    
                    <ul>
                        <li><i class='livicon' data-name='check' data-size='18' data-loop='true' data-c='#787878' data-hc='787878'></i> 
                        $fl[nama_kata]</li>
                        <li><i class='livicon' data-name='check' data-size='18' data-loop='true' data-c='#787878' data-hc='787878'></i> 
                        by $fl[nama]</li>
                    </ul>
                    </div>
                    <a href='detail?id=$nicee' class='btn btn-danger btn-block text-white'>Baca</a>
                </div>
            </div>
        ";

        $i++;
            
        }
       ?>

               </div>
            <!-- SATU -->

<?php
$sql = "SELECT COUNT(*) AS total FROM book";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total_pages = ceil($row["total"] / $results_per_page); // calculate total pages with results

echo "                           <nav>
                <ul class='pagination pull-right'>
                <li class='disabled'>
<a href='#'' aria-label='Previous'>
<span aria-hidden='true'>&laquo;</span></a>
</li>";
  
for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages

echo "
     <li class='active'><a href='index.php?page=$i>$i<span class='sr-only'>$i</span></a></li>";
}; 
?>       
                    
                    <li><a href='#' aria-label='Previou'><span aria-hidden='true'>&raquo;</span></a></li>
                </ul>
            </nav> 
            <h5><a href="category.html">More items</a></h5>
        </div>
        <!-- //Mens Section End -->
        <!-- //Content Section End -->

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
            <p>Copyright &copy; RiBrick tech, 2018</p>
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
</body>

</html>
