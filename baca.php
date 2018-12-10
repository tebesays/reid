<?php
 session_start();

    include('conn.php');
    $usr = $_SESSION['usrxreidx'];

    if(empty($usr)) 
    {
        header('location:index');
    }
    ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Welcome to REID</title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <!--end of global css-->
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="css/tabbular.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.circliful.css">
    <link rel="stylesheet" type="text/css" href="vendors/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="vendors/owl-carousel/owl.theme.css">
    <!--end of page level css-->
<?php
    include('conn.php');
    ?>
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
                                <label class="hidden-xs"><a href="tel:" class="text-white">0822-6000-8484</a></label>
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
                <a class="navbar-brand" href="#">
                  <img src="logo/logo.png" width="35%" class="logo_position">
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
                    <a href="#">Products</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Products
            </div>
        </div>
    </div>
    <!-- //Breadcrumb Section End-->
    <!-- 
    class="dropdown-toggle" data-toggle="dropdown"
<ul class="dropdown-menu" role="menu">
                            <li><a href="products.html">Diskusi</a>
                            </li>
                        </ul>
     -->
     <style>
.pdfobject-container { height: 1150px;}
.pdfobject { border: 1px solid #666; }
</style>
    <script src='js/pdfobject.js'></script>

    <div class="container" >
        <!--Content Section Start -->
        <!-- Best Deal Section Start -->
        <div id="example1">

        </div>

        <?php

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))

 $cek ="mob";

?>

<?php
        
        $idbok = $_GET['bokid'];

        $buku = mysqli_query($conn,"SELECT * FROM book WHERE id_book = $idbok ");
        while ($fl = mysqli_fetch_array($buku))
        {

            $filepdf = $fl['file'];
            $aut = $fl['id_user'];
        }

        $cekusr = mysqli_query($conn,"SELECT username FROM user WHERE id_user = $aut");
        while ($fll = mysqli_fetch_array($cekusr))
        {
            $aut2 = $fll['username'];        
        }

if ($usr == $aut2) 
{
    goto langsung;
}
else
{
    $buku2 = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$aut'");
      while ($fl2 = mysqli_fetch_array($buku2))
      {
        $point = $fl2['uang'];
      }

      $hasil = $point + 5;

      $sql3 = mysqli_query($conn, "UPDATE `user` SET `uang`= '$hasil' WHERE id_user = '$aut'");
      if ($sql3) 
      {
  
      }
      else
      {

      }
}

 
langsung : 

if($cek == "mob")
{
    header("location:http://docs.google.com/gview?embedded=true&url=reid.ribrick.com/$filepdf");
}
else
{
    echo "<script>PDFObject.embed('$filepdf', '#example1');</script>";
}

?>

                 
            <h5><a href="category.html">More items</a></h5>
        </div>
        <!-- //Mens Section End -->
        <!-- //Content Section End -->

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
                    <li>35,Lorem Lis Street, Park Ave</li>
                    <li>Lis Street, India.</li>
                    <li><i class="livicon icon4 icon3" data-name="cellphone" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>Phone:9140 123 4588</li>
                    <li><i class="livicon icon4 icon3" data-name="printer" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i> Fax:400 423 1456</li>
                    <li><i class="livicon icon3" data-name="mail-alt" data-size="20" data-loop="true" data-c="#ccc" data-hc="#ccc"></i> Email:<span class="success">
                        <a href="mailto:">info@joshadmin.com</a></span>
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
                            <img class="media-object" src="images/c1.jpg" alt="image">
                        </a>
                    </div>
                    <div class="media-body">
                        <p class="media-heading"> Kampung Kambing Cileunyi
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
    <!-- Copy right Section Start -->
    <div class="copyright">
        <div class="container">
            <p>Copyright &copy; RiBrick tech, 2018</p>
        </div>
    </div>
    <!-- Copy right Section End -->
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
    <!-- page level js starts-->
    <script type="text/javascript" src="js/jquery.circliful.js"></script>
    <script type="text/javascript" src="vendors/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/carousel.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <!--page level js ends-->
</body>

</html>
