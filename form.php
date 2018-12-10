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
                    <li class="active"><a href="pilih"> Buat Tulisan</a>
                    </li>
                    <li class="dropdown"><a href="bacaan"> Bacaan</a>               
                    </li>
                    <li class="dropdown"><a href="testimoni"> Testimonials</a>
                    </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Profil</a>
                        <ul class="dropdown-menu" role="menu">
                        <?php
                        $buku = mysqli_query($conn, "SELECT * FROM user WHERE username = '$usr' ");
      while ($fl = mysqli_fetch_array($buku))
      {
        $iduser = $fl['id_user'];

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
                    <a href="#">Pilih</a>
                </li>
                                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Upload</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Buat Tulisan
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

<SCRIPT type="text/javascript">
    function ValidateFileUpload() {
        var fuData = document.getElementById('fileChooser');
        var FileUploadPath = fuData.value;

//To check if user upload any file
        if (FileUploadPath == '') {
            alert("Please upload an image");

        } else {
            var Extension = FileUploadPath.substring(
                    FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

//The file uploaded is an image

if (Extension == "gif" || Extension == "png" || Extension == "bmp"
                    || Extension == "jpeg" || Extension == "jpg") {

// To Display
                if (fuData.files && fuData.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#blah').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(fuData.files[0]);
                }

            } 

//The file upload is NOT an image
else {
                alert("Mohon masukan file gambar dengan format GIF, PNG, JPG, JPEG atau BMP. ");
            window.location='form.php';

            }
        }
    }
        function ValidatePdfUpload() {
        var fuData = document.getElementById('PdfChooser');
        var FileUploadPath = fuData.value;

//To check if user upload any file
        if (FileUploadPath == '') {
            alert("Tolong upload file pdf");

        } else {
            var Extension = FileUploadPath.substring(
                    FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

//The file uploaded is an image

if (Extension == "pdf") {

// To Display
                if (fuData.files && fuData.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#blah2').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(fuData.files[0]);
                }

            } 

//The file upload is NOT an image
else {
                alert("Mohon masukan karyamu dengan format pdf");
            window.location='form.php';

            }
        }
    }
</SCRIPT>







    <div class="container">
        <!--Content Section Start -->
        <!-- Best Deal Section Start -->
        <div class="row">
            
        </div>
        <h3 class="text-primary">Buat Tulisan</h3>
        
            <form method="post" action='' enctype="multipart/form-data">
                <div class="form-group">
                    <label class="sr-only"></label>
                    <input type="text" class="form-control" name="judul" placeholder="Judul">
                </div>
                <div class="form-group">
                    <label class="sr-only"></label>
                    <select class="form-control" name="kategori">

                    <?php
                    $cek = mysqli_query($conn, "SELECT * FROM katagori");
                    while ($fl = mysqli_fetch_array($cek))
                    {
                        echo "
                                            <option value='$fl[id_katagori]'>$fl[nama_kata]</option>
                        ";
                    }
                    ?>
                
                </select>
                </div>
                <div class="form-group">
                    <label class="sr-only"></label>
                    <input type="text" name="depsing" class="form-control" placeholder="Deskripsi Singkat">
                </div>
                <div class="form-group">
                    <label class="sr-only"></label>
                    <textarea class="form-control" name="desk" placeholder="Deskripsi"></textarea>
                </div>
                <LABEL>Thumbnail</LABEL>
                <div class="form-group">
                <input type="file" class="form-control" value="Thumbnail" onchange="return ValidateFileUpload()" id="fileChooser" name="atc" accept="image/*">

                </div>
                                <LABEL>Bacaan</LABEL>
                                <div class="form-group">
                    <label class="sr-only">Book</label>
                                    <input type="file" class="form-control" value="Bacaan" id="PdfChooser" onchange="return ValidatePdfUpload()"  name="atc2" accept=".pdf">
                </div>
                <div class="form-group">
                    <label class="sr-only"></label>
                    <label class="radio-inline">
                        <input type="radio" name="umur" id="inlineRadio1" value="LB"> 18+
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="umur" id="inlineRadio2" value="SU"> Semua Umur
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" checked>  I accept <a href="#"> Terms and Conditions</a>
                    </label>
                </div>
                <input type="submit" name="baca" class="btn btn-block btn-primary" value="BUAT">
            </form>

            <?php
            if (isset($_POST['baca']))
             {

              $cek = mysqli_query($conn, "SELECT id_book FROM book WHERE id_user = '$iduser' ");
                while ($fl = mysqli_fetch_array($cek))
                {
                    $itung = $fl['id_book'] + 1;
                }

                $judul = $_POST['judul'];
                $kategori =  $_POST['kategori'];
                $desk =$_POST['desk'];
                $depsing = $_POST['depsing'];
                $umur = $_POST['umur'];

                    //----------------------Uploud ----------------------------
                    $atc = $_FILES ['atc']['tmp_name'];
                    $atc_name = $_FILES ['atc']['name'];
                    $atc_size = $_FILES ['atc']['size'];
                    $atc_type = $_FILES ['atc']['type'];

    $atc2 = $_FILES ['atc2']['tmp_name'];
    $atc2_name = $_FILES ['atc2']['name'];
    $atc2_size = $_FILES ['atc2']['size'];
    $atc2_type = $_FILES ['atc2']['type'];

    // menulis file pic ke harddisk server
    $yoi = date('d-M-Y');

    $oldmask = umask(0);
    mkdir("content", 0777);
    mkdir("content/$usr", 0777);
    mkdir("content/$usr/$itung-reid", 0777);
    umask($oldmask);
    $fileatc = "content/$usr/$itung-reid/$atc_name";
    copy($atc, $fileatc);

    //menulis file attachment ke harddisk server
    $oldmask1 = umask(0);
    umask($oldmask1);
    $fileatc2 = "content/$usr/$itung-reid/$atc2_name";
    copy($atc2, $fileatc2);
    //----------------------Finish Uploud----------------------


    $sql2 = mysqli_query($conn, "INSERT INTO book VALUES(DEFAULT,'$iduser','$desk','$judul','$fileatc2','$fileatc','$kategori','$depsing','$umur','pending')");

            if ($sql2) 
            {
                            echo"<script language='javascript'>window.alert('Berhasil, Menunggu persetujuan admin');
            window.location='form.php'</script>";
            }
            else
            {
                            echo"<script language='javascript'>window.alert('Gagal, Tolong masukan data dengan benar atau hubungi admin');
            window.location='form.php'</script>";
            }
            }
            ?>


            <h5><a href="#">More items</a></h5>
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
