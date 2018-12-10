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
    <meta keyword="reid" content="Share your paper">



    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <!--end of global css-->
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="css/reid.css">


    <link rel="stylesheet" type="text/css" href="css/jquery.circliful.css">
    <link rel="stylesheet" type="text/css" href="vendors/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="vendors/owl-carousel/owl.theme.css">
    <!--end of page level css-->
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
                    <li class="active"><a href="home"> Beranda</a>
                    </li>
                    <li class="dropdown"><a href="pilih"> Buat Tulisan</a>
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
    <!-- 
    class="dropdown-toggle" data-toggle="dropdown"
<ul class="dropdown-menu" role="menu">
                            <li><a href="products.html">Diskusi</a>
                            </li>
                        </ul>
     -->
    <!-- Carousel Start -->
    <div id="owl-demo" class="owl-carousel owl-theme">
        <div class="item"><img src="images/slide_1.jpg" alt="slider-image">
        </div>
        <div class="item"><img src="images/slide_2.jpg" alt="slider-image">
        </div>
        <div class="item"><img src="images/slide_3.jpg" alt="slider-image">
        </div>
    </div>

    <!-- //Carousel End
    <!-- Container Start -->
    <!-- //Carousel End -->
    <!-- Container Start -->
    <div class="container">
        <div class="row">
            <!-- Left Heading Section Start -->

            <div class="col-md-7 col-sm-12">
                <h2><label>Selamat Datang di REID</label></h2>
                <p>
                    REID adalah aplikasi yang dapat membantu pembaca untuk mendapatkan bacaan apapun yang sesuai dan dinginkan secara GRATIS.
                </p>
                <p>
                    REID juga membantu para penulis untuk mendapatkan uang secara langsung , semakin banyak yang baca karya mu maka semakin banyak juga uang yang akan kamu dapatkan.
                </p>
                <p>
                    REID memiliki misi untuk dapat meningkatkan literasi indonesia agar Indonesia dapat menjadi bangsa yang cerdas, kreativ dan inovatif. maju terus Indoneasia!!!.
                </p>
            </div>
            <!-- //Left Heaing Section End -->
            <!-- Slider Start -->
            <div class="col-md-5 col-sm-12">
                <!-- Tabbable-Panel Start -->
                <div class="tabbable-panel">
                    <!-- Tabbablw-line Start -->
                    <div class="tabbable-line"><center>
                    <p>
                    <br>
                    <br>
                    <br>
                                        <br>
                    

                     <img src="logo/logo.png" width="100%" class="logo_position">  
                     <center>
                    </div>
                    <!-- //Tabbablw-line End -->
                </div>
                <!-- Tabbable_panel End -->
            </div>
            <!-- //Slider End -->
        </div>
        <div class="row">
            <div class="text-center">
                <h3 class="border-danger"><span class="heading_border bg-danger" >Bacaan Trending</span></h3>
            </div><br><br>
            
            
            <div class="col-sm-6 col-md-3">
                <div class=" thumbnail text-center">
                    <a href="#"><img src="content/tebesays/19-Yang Terucap Yang Tertulis/ytyt.jpg" style="width:100%" class="img-responsive" alt="sony image"></a>
                    <br/>
                    <h5 class="text-primary">Yang Terucap Yang Tertulis</h5>
                    <ul>
                                        <p> 
                        Dari saya untuk anda</p>
                        <li><i class='livicon' data-name='check' data-size='18' data-loop='true' data-c='#787878' data-hc='787878'></i> 
                        Novel dan Cerita</li>
                        <li><i class='livicon' data-name='check' data-size='18' data-loop='true' data-c='#787878' data-hc='787878'></i> 
                        By Mas Wantik</li>
                    </ul> 
                    <a href="detail?id=19" class="btn btn-primary btn-block text-white">Baca</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class=" thumbnail text-center">
                    <a href="#"><img src="content/tebesays/15-Strategi Kewirausahaan Digital/Strategi_Kewirausahaan_Digital.jpg" style="width:100%" class="img-responsive" alt="karbon image"></a>
                    <br/>
                    <h5 class="text-primary">Strategi Kewirausahaan Digital</h5>
                    <ul>
                                        <p> 
                        Sebuah panduan untuk UMKM, Startup dan E- Commerce</p>
                        <li><i class='livicon' data-name='check' data-size='18' data-loop='true' data-c='#787878' data-hc='787878'></i> 
                        Ekonomi</li>
                        <li><i class='livicon' data-name='check' data-size='18' data-loop='true' data-c='#787878' data-hc='787878'></i> 
                        By Rudiantara CS</li>
                    </ul>
                    <a href="detail?id=15" class="btn btn-primary btn-block text-white">Baca</a>
                </div>
            </div>
                        <div class="col-sm-6 col-md-3">
                <div class="thumbnail text-center">
                    <a href="#"><img src="content/tebesays/14-Kuliner Mie Ayam/ebook-mie-ayam.jpg" style="width:100%" class="img-responsive" alt="trending"></a>
                    <br/>
                    <h5 class="text-primary">Kuliner Mie Ayam</h5> 
                        Buku tentang bagaimana cara menjual dan membuat mie ayam
                       <ul>
                        <li><i class='livicon' data-name='check' data-size='18' data-loop='true' data-c='#787878' data-hc='787878'></i> 
                        Ekonomi</li>
                        <li><i class='livicon' data-name='check' data-size='18' data-loop='true' data-c='#787878' data-hc='787878'></i> 
                        By Djoko Harmiawan</li>
                    </ul>

                    </h4>
                    <a href="detail?id=14" class="btn btn-primary btn-block text-white">Baca</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class=" thumbnail text-center">
                    <a href="#"><img src="content/tebesays/16-Sistem Operasi/sistemop.jpg" style="width:100%" class="img-responsive" alt="nokia image"></a>
                    <br/>
                    <h5 class="text-primary">Sistem Operasi</h5>
                    <ul> 
                        Penjelasan keseluruhan tentang sistem operasi</p>
                        <li><i class='livicon' data-name='check' data-size='18' data-loop='true' data-c='#787878' data-hc='787878'></i> 
                        Teknologi</li>
                        <li><i class='livicon' data-name='check' data-size='18' data-loop='true' data-c='#787878' data-hc='787878'></i> 
                        By Bondan Satrio</li>
                    </ul>
                    <a href="detail?id=16" class="btn btn-primary btn-block text-white">Baca</a>
                </div>
            </div>
        </div>
        <!-- //Best Deal Section End -->
        <!-- Testimonial Start -->
        <div class="row">
            <!-- Testimonial Section -->
            <div class="text-center">
                <h3 class="border-danger"><span class="heading_border bg-danger">Testimonials</span></h3>
                <br>
            </div>
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
                        <label>"Gue sebagai penulis baru ngerasa terbantu banget dengan ini karena gue bisa langsung dapet uang dan bisa ngisi kantong gue yang lagi kering kwkwkw hehehe..."</label>
                    </p>
                </div>
                <br>
            </div>

            <!-- Testimonial Section End -->
            <div class="row">
                <div class="text-center">
                <h3 class="border-danger"><span class="heading_border bg-danger">FAQ</span></h3>
                <br>
                </div>
                <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="panel-group panel-accordion faq-accordion">
                            <div id="faq">
                                <div class="mix category-1 col-lg-12 panel panel-default" data-value="1">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#question1">
                                                <strong class="c-gray-light">1.</strong>
                                                Apa perbedaan REID dengan yang lain ?
                                                <span class="pull-right">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    
                                    <div id="question1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                                Perbedaan REID dibandingkan yang lain adalah 
                                            </p>
                                            <ol>
                                                <li>Share karya langsung dapat uang</li>
                                                <li>Semua katagori bukan hanya cerita dan novel</li>
                                                <li>Mudah mencari bacaan yang sesuai dan tepat dengan apa yang diinginkan </li>
                                                <li>100% Buatan Anak Bangsa</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>

                                <div class="mix category-1 col-lg-12 panel panel-default" data-value="2">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#question2">
                                                <strong class="c-gray-light">2.</strong>
                                                Kalo tugas kuliah atau sekolah boleh di masukin??
                                                <span class="pull-right">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                            Bolehh bangett!!! asal emang dapat izin yaa dari dosen atau guru.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-1 col-lg-12 panel panel-default" data-value="3">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#question3">
                                                <strong class="c-gray-light">3.</strong>
                                                Cara dapat uang nya bagaimana ??
                                                <span class="pull-right">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ol>
                                                <li>
                                                    Registrasi
                                                </li>
                                                <li>
                                                     Upload tulisan kamu
                                                </li>
                                                <li>
                                                    Ketika tulisanmu dibaca oleh orang lain kamu akan mendapatkan point yang ditampilkan di profil mu
                                                </li>
                                                <li>
                                                    Point itu yang bisa kamu tukarkan dengan uang
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-2 col-lg-12 panel panel-default" data-value="4">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#question4">
                                                <strong class="c-gray-light">4.</strong>
                                                Belum Release ya ?
                                                <span class="pull-right">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                            Untuk saat ini kita belum release sepenuhnya tapi kita akan mmengusahakan untuk sesegera mungkin direlease.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-1 col-lg-12 panel panel-default" data-value="5">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#question5">
                                                <strong class="c-gray-light">5.</strong>
                                                Visi dan Misi
                                                <span class="pull-right">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question5" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                            <Strong>
                                            VISI
                                            </Strong>
                                            Meningkatkan minat baca di indonesia <br>
                                            <strong>
                                            MISI
                                            </strong>
                                            Mencerdaskan kehidupan bangsa dengan cara meningkatkan ilmu pengetahuan yang mereka miliki dengan cara membaca.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-1 col-lg-12 panel panel-default" data-value="6">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#question6">
                                                <strong class="c-gray-light">6.</strong>
                                                Fiture apa saja yang sedang dalam proses pembuatan ?
                                                <span class="pull-right">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question6" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ol>
                                                <li>
                                                    Fiture Tulis (User dapat menulis karyanya secara langsung)
                                                </li>
                                                <li>
                                                    Fiture Comment (Melakukan Komentar terhadap suatu tulisan/karya/buku)
                                                </li>
                                                <li>
                                                    Fiture Dibaca (User dapat melihat berapa kali orang membaca suatu tulisan)
                                                </li>
                                                                                                <li>
                                                    Fiture Boom (User dapat memberikan boom jika menyukai sebuah tulisan)
                                                </li>
                                                <li>
                                                    Fiture Buku saya (User dapat melakukan pengecekan buku yang sudah mereka buat dan mengedit beberapa deskrip dll)
                                                </li>
                                                <li>
                                                    Dan banyak lagi. 
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>


        <!-- Testimonial End -->
    </div>
    <!-- //Container End -->
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
