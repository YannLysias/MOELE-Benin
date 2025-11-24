<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MOELE-BENIN </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
<link rel="icon" href="/assets/img/Logo MOELE.jpg">

  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">
  <link href="/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
  .active {
    color:  #092390;
    border-bottom: 3px solid #092390;

  }
  </style>
</head>

<body>

  @include('layouts.header')

@if (session('success'))
    <script>
        window.onload = function() {
            alert('{{ session('success') }}');
        }
    </script>
@endif
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>MOELE-BENIN(ZOU)</h1>
      <h2>
        Dans la vérité nous travaillons pour la patrie !
      </h2>
      <a href="/inscrire/create" style="background-color: #092390; border: none;" class="btn-get-started">Adhérer</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{ ('img/MOELE.jpg') }}" class="img-fluid" alt="image" style=" width : 650px; height: 650px">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h2 style=" font-weight: bold;">Présentation</h3>
            <p class="fst-italic">
               Le Parti Mouvement des Élites Engagées pour l’Émancipation du Bénin (Moele-Bénin) est créé en juillet 2018 à Awaya sur les collines de Dassa-Zoumè. En février 2019, le Parti reçoit son certificat de conformité après publication de son récépissé au Journal Officiel. <br><br>
               Suscitant très rapidement admiration, respect et considération sur l’échiquier politique national en promouvant des valeurs de vérité, de justice, de patriotisme et de promotion de la jeunesse et des femmes, Moele-Bénin est rejoint par des dizaines de Partis, de Mouvements et de personnalités politiques. Le Parti est actuellement représenté dans toutes les 77 communes du Bénin avec des militants et sympathisants dans les 546 arrondissements du pays. Des hommes et des femmes de conviction qui partagent les mêmes valeurs de probité et d’engagement dans l’avenir du Bénin.
            </p>

            <p class="fst-italic">
               Au-delà des frontières béninoises, Moele-Bénin est également présente à travers l’installation de coordinations dans les grandes capitales d’Europe, d’Amériques et d’Asie. Plusieurs compatriotes béninois revendiquent leur appartenance au Parti et disposent de leur carte de membre. <br><br>
               Les militants de Moele-Bénin se donnent pour devoir de servir leur pays en le construisant par leurs efforts quotidiens et en participant à sa transformation positive. S’inspirant de la devise du Parti Vérité – Travail – Patrie, ils s’engagent à travailler dans la vérité pour la Patrie afin de contribuer à bâtir le Bénin conforme aux rêves de chaque Béninois. Un Bénin où chacun pourra mener une vie de fierté et de patriotisme.
            </p>
            <p class="fst-italic">
                Moele-Bénin est d’idéologie Social-démocratie dans le libéralisme participatif. Il a fait l’option du patriotisme économique consistant à consommer les produits locaux. L’objectif est de mettre la jeunesse au travail, enrichir le pays grâce à un autofinancement de l’essentiel de son développement. <br><br>
                Moele-Bénin est dirigé par un Bureau Directeur National dont l’actuel président est le Camarade Jacques O. H. S. AYADJI.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">
        <div class="row counters justify-content-center">
          <div class="col-lg-3 col-6 text-center mx-auto">
            <span data-purecounter-start="0" style="color: #092390;" data-purecounter-end="{{$totalAdherants}}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Adhérent{{$totalAdherants > 1 ? 's' : ''}}</p>
          </div>

          <div class="col-lg-3 col-6 text-center mx-auto">
            <span data-purecounter-start="0" style="color: #092390;" data-purecounter-end="{{$totalCoordonnateur}}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Coordonnateur{{$totalCoordonnateur > 1 ? 's' : ''}}</p>
          </div>

          <div class="col-lg-3 col-6 text-center mx-auto">
            <span data-purecounter-start="0" style="color: #092390;" data-purecounter-end="{{$totalDiaspora}}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Diaspora{{$totalDiaspora > 1 ? 's' : ''}}</p>
          </div>

          <div class="col-lg-3 col-6 text-center mx-auto">
            <span data-purecounter-start="0" style="color: #092390;" data-purecounter-end="{{$totalUser}}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Total d'enregistrement</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ======= Features Section ======= -->
    <section id="features" class="features mt-5">
      <h2 style="text-align: center; padding: 20px; font-weight: bold;">Les adhérents par département</h2>
      <div class="container" data-aos="fade-up">
          <div class="row" data-aos="zoom-in" data-aos-delay="100">
              @foreach($departements as $departement)
              <div class="col-md-3">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title">{{ $departement->libelle }}</h5>
                          <p class="card-text"> <span class="font-bold">{{ $departement->nombre_adherents }}</span> Adhérent{{$departement->nombre_adherents > 1 ? 's' : ''}}</p>
                      </div>
                  </div>
              </div>
              @endforeach
          </div>
      </div>
  </section>

  <style>
    .card {
        margin-bottom: 20px;
        border: 1px solid #092390;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease; /* Ajout d'une transition fluide pour l'effet de survol */
    }

    .font-bold {
        font-weight: 800;
    }

    .card-body {
        padding: 20px;
    }

    .card-title {
        font-size: 18px;
        font-weight: bold;
    }

    .card-text {
        font-size: 16px;
    }
</style>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container flex py-4">

      <div class="text-center">
        <div class="copyright">
          &copy; 2025 MOELE-BENIN (ZOU) <strong>https://moelebenin.bj/</strong>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center" style="background-color: #092390; color: #fff;"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
