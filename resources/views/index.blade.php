<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">

    <title>Software Freedom Day</title>
    <!-- favicon -->

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Bootstrap external -->
    <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css')}}">
    <!-- Custom Fonts -->
    <link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
     <link href="{{asset('css/agency.min.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- style="color:#8D8D86" -->
    <style>
      #icon-color{
        color: black;
      }
      #rundown{
        background-color: #181735;
        color: #ffffff;
      }
      #detail{
        background-color: #ffffff;
      }
      #sponsor{
        background-color: #ffffff;
      }
      #footer{
        background-color: #ffffff;
      }
      .navbar-custom.affix{
        background-color: #403F60;
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4);
      }
      .btn-xl{
        color: #ef4b52;
      }
    </style>
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only"></span>Menu<i class="fa fa-bars"></i>
                </button>
                  
                <a class="page-scroll" href="#page-top">
                    
                    <img src="{{asset('img/favicon.png')}}" alt="">
                    
                    </a>
           <!-- <a class="navbar-brand page-scroll" href="#page-top">Software Freedom Day</a> -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                        
                    </li>

  
                    <!-- <a class="navbar-brand page-scroll" href="#page-top">Software Freedom Day</a> -->
          

                    <li>
                        <a class="page-scroll" href="#detail"><b>Detail Acara</b></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#rundown"><b>Rundown Acara</b></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#pembicara"><b>Pembicara</b></a>
                    </li>
                
                
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header style="background-color: #181735;">
        <div class="container">
            <div class="intro-text">
                <a href="#daftar" class="page-scroll btn btn-xl" style="margin-top:20ex;">Daftar</a>
                <h1>"We Share We Care"</h1>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Detail Acara</h2>
                    <h3 class="section-subheading">Berikut ini detail acara SFD</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                      <div class="timeline-image">
                        <img class="img-circle img-responsive" src="{{asset('img/icon/workshop.jpg')}}">
                      </div>
                    </span>
                    <h4 class="service-heading">WORKSHOP MOZVR</h4>
                    <p class="">
                        <b>MozVR</b> adalah sebuah Virtual Reality yang dikembangkan oleh Mozilla yang merupakan
                        project OpenSource berbasis website yang dibawa ke dunia Web menggunakan teknologi Web juga, seperti HTML, CSS dan JavaScript
                    </p>
                </div>
                <!-- <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                      <div class="timeline-image">
                        <img class="img-circle img-responsive" src="img/icon/speaker.png">
                      </div>
                    </span>
                    <h4 class="service-heading">TALKSHOW</h4>
                    <p class=" ">Talkshow yang akan diisi oleh teman-teman dari doscom yang kece-kece, mereka pernah menjadi firefox student ambasador </p>
                </div> -->
                <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                      <div class="timeline-image">
                        <img class="img-circle img-responsive" src="{{asset('img/icon/festival.png')}}">
                      </div>
                    </span>
                    <h4 class="service-heading">FESTIVAL FOSS</h4>
                    <p class="">Pameran software <b>Free and Open Source Software</b> yang akan diisi teman-teman kita dari doscom untuk langsung mendemokannya
                      secara langsung untuk semua pengunjung, selain itu akan ada gamification untuk mendapatkan poin yang bisa ditukar dengan berbagai sovenir yang sangat menarik</p>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section id="rundown">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Rundown Acara</h2>
                    <h3 class="section-subheading  ">Berikut rundown acara selama acara berlangsung</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                              <img class="img-circle img-responsive" src="{{asset('img/icon/workshop.jpg')}}">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Workshop</h3>
                                    <h4 class="subheading">Workshop MozVR</h4>
                                    <h6 class="subheading"><i>19 November 2017 di
                                    <a href="https://www.google.co.id/maps/place/Universitas+Dian+Nuswantoro,+Kampus+II/@-6.9809008,110.406704,17z/data=!3m1!4b1!4m5!3m4!1s0x2e708b4ea8021bc5:0x5a2d980b37fc0fe6!8m2!3d-6.9809008!4d110.4088927?hl=id" target="_blank">Gedung D.1.1</a></i></h6>
                                </div>
                                <div class="timeline-body">
                                  <p class=" ">Regis Ulang</p>
                                  <p class=" ">Pengenalan MozVR</p>
                                  <p class=" ">Live Code MozVR</p>
                                  <p class=" ">Bermain dengan VR Device</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                              <img class="img-circle img-responsive" src="{{asset('img/icon/charity.png')}}">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Charity</h3>
                                    <h4 class="subheading">Memberikan Donasi ke<br>Taman Anak-Anak AsaEdu</h4>
                                    <h6 class="subheading"><i>19 November 2017 di
                                    <a href="https://www.google.co.id/maps/place/Rumah+Baca+Seroja/@-6.9441347,110.4345173,17z/data=!3m1!4b1!4m5!3m4!1s0x2e70f37ab573e047:0xb96484fed2dc6cb7!8m2!3d-6.9441347!4d110.436706" target="_blank">Tambak Lorok</a></i></h6>
                                </div>
                                <div class="timeline-body">
                                  <p class=" ">Workshop Gambar</p>
                                  <p class=" ">Game</p>
                                  <p class=" ">Penyerahan Donasi</p>
                                  <p class=" ">Foto Bareng</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                              <img class="img-circle img-responsive" src="{{asset('img/icon/festival.png')}}">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Festival</h3>
                                    <h4 class="subheading">All About FOSS</h4>
                                    <h6 class="subheading"><i>20-21 November 2017 di
                                    <a href="https://www.google.co.id/maps/place/Universitas+Dian+Nuswantoro,+Kampus+II/@-6.9809008,110.406704,17z/data=!3m1!4b1!4m5!3m4!1s0x2e708b4ea8021bc5:0x5a2d980b37fc0fe6!8m2!3d-6.9809008!4d110.4088927?hl=id" target="_blank">Gedung H.1 (Gallery)</a></i></h6>
                                </div>
                                <div class="timeline-body">
                                  <p class=" ">Pembukaan</p>
                                  <p class=" ">Pameran</p>
                                  <p class=" ">Gamification</p>
                                  <p class=" ">Market Souvenir</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="pembicara" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Pembicara Workshop</h2><br>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="team-member">
                        <img width="200px" height="200px" src="{{asset('img/pembicara/dikyargabaru.jpg')}}" class="img-responsive img-circle" alt="">
                        <h4>Diky Arga Anggara</h4>
                        <br>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://twitter.com/dikyarga"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/dikyargaID"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://www.instagram.com/dikyargaid"><i class="fa fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="daftar" class="row text-center">
                  <div class="col-lg-12">
                    <h3>DAFTAR WORKSHOP DAN FESTIVAL</h3>
                  </div>
                  <div class="col-lg-12">
                      <a href="#" class="btn btn-xl">Daftar Workshop</a>&nbsp;&nbsp;&nbsp;&nbsp;
                      <a href="#" class="btn btn-xl">Daftar Festival</a>
                  </div>
                </div>
        </div>
    </section>
    <!-- <section id="register">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Register</h2>
                    <h3 class="section-subheading  ">Register form for Workshop</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nama" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Nomer Handphone" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Apa yang kamu ketahui tentang FOSS" id="message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Daftar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Clients Aside -->
    <aside id="sponsor" class="clients">
        <div class="container">
            <div class="row"><br>
                <div class="col-lg-12 text-center">
                    <h4 class="section-subheading">Acara keren ini didukung oleh</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="http://dinus.ac.id" target="_Blank">
                        <img style="width:150px;" src="{{asset('img/logos/dinus_fik.png')}}" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="https://www.mozilla.org/id/" target="_Blank">
                        <img style="width:250px;" src="{{asset('img/logos/mozilla2017.jpg')}}" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="https://www.bukalapak.com/" target="_Blank">
                        <img style="width:150px;" src="{{asset('img/logos/bukalapak.png')}}" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="http://moonshardstudio.com/" target="_Blank">
                        <img style="width:250px;" src="{{asset('img/logos/moonshard.png')}}" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="https://mailtarget.co/" target="_Blank">
                        <img style="width:300px;margin-top:85px;" src="{{asset('img/logos/mailtarget.jpg')}}" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="http://www.clowordistro.com/" target="_Blank">
                        <img style="width:150px;" src="{{asset('img/logos/clowor.png')}}" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="https://qampus.org/" target="_Blank">
                        <img style="width:250px;" src="{{asset('img/logos/qampus_studio.png')}}" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="http://tealinuxos.org" target="_Blank">
                        <img style="width:160px;" src="{{asset('img/logos/tealinux.jpg')}}" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Made with &hearts; by Dinus Open Source Community</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://twitter.com/doscomedia"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/doscomedia/"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com/doscomedia/"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="https://startbootstrap.com/" style="color : black">Thanks to Start Bootstrap</li>
                        <li><a href="http://www.freepik.com" style="color : black">Designed by Freepik</a></li>
                        <li><a href="http://protiumdesign.com "style="color : black">Protium Design</a></i>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{asset('js/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('js/contact_me.js')}}"></script>

    <!-- Theme JavaScript -->
    <script src="{{asset('js/agency.min.js')}}"></script>

</body>

</html>