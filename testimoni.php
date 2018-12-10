<?php
 session_start();

    include('conn.php');
    $usr = $_SESSION['usrxreidx'];
    if (empty($usr)) 
    {
        header('location:index');
    }

    $yogs = mysqli_query($conn, "SELECT nama,email FROM user WHERE username = '$usr'");
    while ($bt=mysqli_fetch_array($yogs)) 
    {
        $email = $bt['email'];
        $nama = $bt['nama'];
    }

    ?>

<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tulisan | Welcome to REID</title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/shopping.css">
    <!--end of global css-->
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
                    <li class="dropdown"><a href="bacaan"> Bacaan</a>               
                    </li>
                    <li class="active"><a href="testimoni"> Testimonials</a>
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
                    <a href="#">Testimonials</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Testimonials
            </div>
        </div>
    </div>
    <!-- //Breadcrumb Section End-->
    <!-- Container Section Start -->
    <div class="container">
        <!--Content Section Start -->
        <!-- Best Deal Section Start -->
        <div class="row">
            <h3>OUR TESTIMONIALS</h3><br><br>
            <div class="col-md-4">
                <div class="author">
                    <img src="images/org/alif.jpg" class="img-responsive img-circle pull-left">
                    <p class="text-right">
                        Alief Rizki
                        <br>
                        <small class="text-right">Mahasiswa</small>
                    </p>
                    <p>
                        <label>"Serius ini aplikasi ngebantu banget buat kita yang susah nyari bacaan yang pengen dibaca dan kita juga bisa nulis untuk dapetin uang, pokoknya kecee daahh!! :D salut gue sama developernya"</label>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="author">
                    <img src="images/org/dzaki.jpg" class="img-responsive img-circle pull-left">
                    <p class="text-right">
                        Renault Dzaky 
                        <br>
                        <small class="text-right">Mahasiswa</small>
                    </p>
                    <p>
                        <label>"Mantap sih ini GRATIS PULAA!!! SUKSESS REIDD!! semoga bisa jadi startup yang dapat meningkatkan literasi indonesia supaya kita bisa lebih baik dan lebih pinter"</label>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="author">
                    <img src="images/org/iqbal.jpg" class="img-responsive img-circle pull-left">
                    <p class="text-right">
                        Iqbal Nugroho
                        <br>
                        <small class="text-right">Mahasiswa</small>
                    </p>
                    <p>
                        <label>"Gue sebagai penulis baru ngerasa terbantu banget dengan ini karena gue bisa langsung dapet uang dan bisa ngisi kantong gue yang lagi kering kwkwkwk hehehe..."</label>
                    </p>
                </div>
                <br>
            </div>
        </div>
        <!-- //Best Deal Section End -->
        <!-- New Launches Section Start -->
        <div class="row">
            <div class="col-md-4">
                <div class="author">
                    <img src="images/org/bella.jpg" class="img-responsive img-circle pull-left">
                    <p class="text-right">
                        Bella Kusuma Wardhani
                        <br>
                        <small class="text-right">Pekerja</small>
                    </p>
                    <p>
                        <label>"Biasanya gue bingung kl udah selesai bikin tulisan mau taruh dimana supaya bisa menghasilkan
                        kl ada aplikasi ini bener-bener ngebantu sih"</label>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="author">
                    <img src="images/org/dwi.jpg" class="img-responsive img-circle pull-left">
                    <p class="text-right">
                        Dwi Satria
                        <br>
                        <small class="text-right">Mahasiswa</small>
                    </p>
                    <p>
                        <label>"Kalo gue liat-liat kedepannya ini mantep sih soalnya semua orang bisa masukin buku atau bacaan sesuai dengan apa yang dia mau dan bisa dapat uang. kaya youtube versi bacaan yaa"</label>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="author">
                    <img src="images/org/ami.jpg" class="img-responsive img-circle pull-left">
                    <p class="text-right">
                        Amirah Hudatullah
                        <br>
                        <small class="text-right">Mahasiswa</small>
                    </p>
                    <p>
                        <label>"Bener banget gue biasanya suka ngerjain tugas kalo udah selesai ya udah gitu aja biasanya ya kertas nya gue kumpulin atau gue buang. dengan adanya reid ngebantu banget sih jadinya"</label>
                    </p>
                </div>
                <br>
            </div>
        </div>
        <!-- //New Launches Section End -->
<h3>Berikan feedback/saran/komentar mu saat menggunakan REID</h3>
<form method="post" action='' enctype="multipart/form-data">
                <div class="form-group">
                    <label class="sr-only"></label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $nama;?>" placeholder="Nama" disabled>
                </div>
                                <div class="form-group">
                    <label class="sr-only"></label>
                    <input type="email" class="form-control" value="<?php echo $email;?>" name="email" placeholder="Email" disabled>
                </div>
                <div class="form-group">
                    <label class="sr-only"></label>
                    <select class="form-control" name="kerja">
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Pekerja">Pekerja</option>
                    <option value="Komedi">Siswa</option>
                    <option value="Penulis">Penulis</option>
                    <option value="Wirausaha">Wirausaha</option>
                </select>
                </div>
                <div class="form-group">
                    <label class="sr-only"></label>
                    <textarea class="form-control" name="desk" placeholder="feedback"></textarea>
                </div>
                
                <input type="submit" name="feed" class="btn btn-block btn-primary" value="Kirim">
            </form>
            <br>
            <br>
            <br>
            <br>
            <?php
            if (isset($_POST['feed'])) 
            {
                $kerja = $_POST['kerja'];
                $fb = $_POST['desk'];

            $sql2 = mysqli_query($conn, "INSERT INTO feedback VALUES(DEFAULT,'$nama','$kerja','$email','$fb')");

            if ($sql2) 
            {
            echo"<script language='javascript'>window.alert('Terima kasih sudah memberikan kami feedback :)');
            window.location='testimoni.php'</script>";
            }
            else
            {
            echo"<script language='javascript'>window.alert('Mohon untuk memasukan data feedback yang benar');
            window.location='testimoni.php'</script>";
            }

            }

            ?>

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
