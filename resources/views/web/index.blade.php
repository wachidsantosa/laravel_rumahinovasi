<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Rumah Inovasi</title>
  <link rel="icon" type="image/x-icon" href="{{url('web/inovasi/assets/img/lampu.png')}}" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet"
    type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="{{url('web/inovasi/css/styles.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body id="page-top">

  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <img src="assets/img/logo RI.png" style="min-height: 50px; min-width: 150px;" alt="" /></a><button
        class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu<i class="fas fa-bars ml-1"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="profile.html">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#program">Program</a>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <a class=" dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown">
                Paket Pelatihan
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item nav-link" href="kursus.html">Kelas Online</a>
                <a class="dropdown-item nav-link" href="#">Pelatihan Full Stack</a>
                <a class="dropdown-item nav-link" href="#">Pelatihan Arduino</a>
                <a class="dropdown-item nav-link" href="#">Pelatihan Rasberry Pi</a>
                <a class="dropdown-item nav-link" href="#">Pelatihan Web Design</a>
                <a class="dropdown-item nav-link" href="#">Pelatihan Android</a>
                <a class="dropdown-item nav-link" href="#">Pelatihan jangka Pendek</a>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#project">Project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Masthead-->
  <header>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">

        <div class="carousel-item active">
          <!--illustration from https://www.drawkit.io/-->
          <img src="{{url('web/inovasi/assets/img/konten/1,2.jpg')}}" style="min-height: 150px;" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h2 class="section-heading text-uppercase text-left" style="color: black; ">Program</h2>
            <h3 class="section-subheading text-muted text-left">
              Lorem ipsum dolor sit amet consectetur.
            </h3>
          </div>
        </div>

        <div class="carousel-item">
          <!--illustration from https://www.drawkit.io/-->
          <img src="{{url('web/inovasi/assets/img/landing2.svg')}}" style="min-height: 150px;" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h3 class="section-heading text-uppercase text-left" style="color: black;"><a>Pelatihan Arduino yang
                menjanjikan</a>
            </h3>
            <h4 class="section-subheading text-muted text-left">Lorem ipsum dolor sit amet, consectetur adipisicing
              elit. Minima
              maxime quam architecto quo inventore harum ex magni, dicta
              impedit[....]</h4>
            <a class="read_more" href="#">Read
              More</a>
          </div>
        </div>

        <div class="carousel-item">
          <!--illustration from https://www.drawkit.io/-->
          <img src="{{url('web/inovasi/assets/img/landing--.svg')}}" style="min-height: 150px;" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h3 class="section-heading text-uppercase text-left" style="color: black;"><a>Pelatihan Arduino yang
                menjanjikan</a></h3>
            <h4 class="section-subheading text-muted text-left">Lorem ipsum dolor sit amet, consectetur adipisicing
              elit. Minima
              maxime quam architecto quo inventore harum ex magni, dicta
              impedit[....]</h4>
            <a class="read_more" href="#">Read
              More</a>
          </div>
        </div>

        <div class="carousel-item">
          <!--illustration from https://www.drawkit.io/-->
          <img src="{{url('web/inovasi/assets/img/landing1.svg')}}" style="min-height: 150px;" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h3 class="section-heading text-uppercase text-left" style="color: black;"><a>Pelatihan Arduino yang
                menjanjikan</a></h3>
            <h4 class="section-subheading text-muted text-left">Lorem ipsum dolor sit amet, consectetur adipisicing
              elit. Minima
              maxime quam architecto quo inventore harum ex magni, dicta
              impedit[....]</h4>
            <a class="read_more" href="#">Read
              More</a>
          </div>
        </div>

      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>
  <!-- Services-->
  <section class="page-section " id="program">
    <div class="container">
      <div class="text-center">

        <h2 class="section-heading text-uppercase">Program</h2>
        <h3 class="section-subheading text-muted">
          Lorem ipsum dolor sit amet consectetur.
        </h3>
      </div>

      <div class="row text-center">
        <div class="col-md-4">
          <div data-aos="fade-right" data-aos-delay="100">
            <img class="img-fluid" src="{{url('web/inovasi/assets/img/icon/net.png')}}" alt="" /></span>
            <h4 class="my-3">IoT</h4>
            <p class="text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima
              maxime quam architecto quo inventore harum ex magni, dicta
              impedit.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div data-aos="fade-right" data-aos-delay="200">
            <img class="img-fluid" src="{{url('web/inovasi/assets/img/icon/gear.png')}}" alt="" /></span>
            <h4 class="my-3">Hardware</h4>
            <p class="text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima
              maxime quam architecto quo inventore harum ex magni, dicta
              impedit.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div data-aos="fade-right" data-aos-delay="300">
            <img class="img-fluid" src="{{url('web/inovasi/assets/img/icon/and.png')}}" alt="" /></span>
            <h4 class="my-3">Software</h4>
            <p class="text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima
              maxime quam architecto quo inventore harum ex magni, dicta
              impedit.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- project Grid-->
  <section class="page-section" id="project">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Pelatihan Rumah Inovasi</h2>
        <h3 class="section-subheading text-muted">
          Lorem ipsum dolor sit amet consectetur.
        </h3>
      </div>
      <div class="row">
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="portfolio-item">
            <div data-aos="fade-up-right" data-aos-delay="100">
              <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                  </div>
                </div>
                <img class="img-fluid" src="{{url('web/inovasi/assets/img/konten/1 (1).jpeg')}}" alt="" style="min-height: 300px;" />
              </a>
              <div class="portfolio-caption">
                <div class="portfolio-caption-heading">Pelatihan SQL Injection</div>
                <div class="portfolio-caption-subheading text-muted">
                  Software
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="portfolio-item">
            <div data-aos="fade-up-right" data-aos-delay="200">
              <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                  </div>
                </div>
                <img class="img-fluid" src="{{url('web/inovasi/assets/img/konten/1 (3).jpeg')}}" alt="" style="min-height: 300px;" />
              </a>
              <div class=" portfolio-caption">
                <div class="portfolio-caption-heading">Pelatihan Android</div>
                <div class="portfolio-caption-subheading text-muted">
                  Software
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="portfolio-item">
            <div data-aos="fade-up-right" data-aos-delay="300">
              <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                  </div>
                </div>
                <img class="img-fluid" src="{{url('web/inovasi/assets/img/konten/1 (4).jpeg')}}" alt="" style="min-height: 300px;" />
              </a>
              <div class="portfolio-caption">
                <div class="portfolio-caption-heading">Pelatihan Website Dasar </div>
                <div class="portfolio-caption-subheading text-muted">
                  Sodtware
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
          <div class="portfolio-item">
            <div data-aos="fade-up-right" data-aos-delay="300">
              <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                  </div>
                </div>
                <img class="img-fluid" src="{{url('web/inovasi/assets/img/konten/1 (5).jpeg')}}" alt="" style="min-height: 300px;" />
              </a>
              <div class="portfolio-caption">
                <div class="portfolio-caption-heading">Pelatihan Jaringan Dasar</div>
                <div class="portfolio-caption-subheading text-muted">
                  Software
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
          <div class="portfolio-item">
            <div data-aos="fade-up-right" data-aos-delay="400">
              <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                  </div>
                </div>
                <img class="img-fluid" src="{{url('web/inovasi/assets/img/konten/1 (6).jpg')}}" alt="" style="min-height: 300px;" />
              </a>
              <div class="portfolio-caption">
                <div class="portfolio-caption-heading">Pelatihan Arduino</div>
                <div class="portfolio-caption-subheading text-muted">
                  Hardware
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="portfolio-item">
            <div data-aos="fade-up-right" data-aos-delay="600">
              <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                  </div>
                </div>
                <img class="img-fluid" src="{{url('web/inovasi/assets/img/konten/1 (6).jpg')}}" alt="" style="min-height: 300px;" />
              </a>
              <div class=" portfolio-caption">
                <div class="portfolio-caption-heading">Pelatihan Auto CAD</div>
                <div class="portfolio-caption-subheading text-muted">
                  Software
                </div>
              </div>
            </div>
          </div>
        </div>



      </div>
    </div>
  </section>




  <!-- contact-->
  <section class="page-section bg-light" id="contact">
    <div class="container">
      <div class="row">
        <div class=" col-lg-6 col-sm-6">
          <div class="portfolio-item">
            <h5 class="section-heading">Tentang Kami</h5>
            <p class="section-heading">
              <b>Karisma Academy</b> merupakan perusahaan profesional dibidang pelatihan software dan developer
              teknologi
              pembelajaran berbasis e-learning yang berada di kota Malang, Jawa Timur. Karisma Academy meluluskan
              lebih dari
              5000 alumni dan dipercaya ratusan perusahaan.
              <a href="https://www.karismaacademy.com/kursus-web-master-developer/tentang-kami"
                style="color:orange;">Selengkapnya...</a>
            </p>
            <p><b><a target="_blank" href="#"> Bekasi</a></b><a target="_blank"
                href="https://goo.gl/maps/XvCxQUv7o4F2">,
                Ketawanggede, Kecamatan Lowokwaru,
                Kota Malang, Jawa Timur 65145, Jawa Timur, Indonesia </a><br></p>
            <div class="row social">
              <div class="sosmed">
                <a class="btn btn-light btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-light btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-light btn-social mx-2" type="button" role="button"><i class="fab fa-youtube"></i></a>
                <a class="btn btn-light btn-social mx-2" type="button" role="button"><i class="fas fa-envelope"></i></a>
                <a class="btn btn-light btn-social mx-2" type="button" role="button"><i
                    class="fab fa-instagram"></i></a>
                <a class="btn btn-light btn-social mx-2" type="button" role="button"><i
                    class="fab fa-google-plus-g"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <p class="section-heading"><a>Berita Terkini</a></p>
          <div class="card">
            <div class="card-body">
              <ul class="list-group list-group-flush">
                <ul>
                  <li>
                    <a
                      href="http://mikti.id/memahami-istilah-dan-memilih-model-revenue-yang-tepat-pada-bisnis-startup-2/">Memahami
                      Istilah dan Memilih Model Revenue yang Tepat pada Bisnis Startup</a>
                  </li>
                  <li>
                    <a href="http://mikti.id/private-mentoring-for-your-startup-wadah-berdiskusi-dan-berdonasi/">“Private
                      Mentoring For Your Startup”: Wadah Berdiskusi dan Berdonasi</a>
                  </li>
                  <li>
                    <a href="http://mikti.id/tips-startupmu-bisa-bertahan-di-tengah-pandemi-covid-19/">Tips
                      Startupmu Bisa
                      Bertahan Di Tengah Pandemi Covid-19</a>
                  </li>
                  <li>
                    <a href="http://mikti.id/gathering-online-nusantara-berbagi-solusi-bersama-di-tengah-pandemi/">Gathering
                      Online Nusantara, Berbagi Solusi Bersama di Tengah Pandemi</a>
                  </li>
                  <li>
                    <a href="http://mikti.id/hambatan-seorang-guru-yang-mengajar-di-pelosok-negeri/">Hambatan
                      Seorang Guru
                      Yang Mengajar di Pelosok Negeri</a>
                  </li>
                </ul>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>


  </section>
  <!-- Footer-->
  <footer class="footer py-4">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 text-lg-left"></div>
        <div class="col-lg-4 my-3 my-lg-0">

          <a>Copyright © Rumah Inovasi 2020</a>

        </div>
        <div class="col-lg-4 text-lg-right"></div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
  <!-- Third party plugin JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <!-- Core theme JS-->
  <script src="{{url('web/inovasi/js/scripts.js')}}"></script>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>