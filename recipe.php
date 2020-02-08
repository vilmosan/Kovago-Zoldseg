<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php'; ?>
</head>
<body>

    <!-- Navigation -->
    <?php $page = 'recipes'; include 'includes/navbar.php'; ?>
    <div id="splash"></div>
    
    <div class="container recipes">

<!-- Website Logo
================= -->
<section id="recipelogo">
  <div class="container text-center wow pulse">
    <img src="img/logo-white.svg" alt="logo" />
    <br />
    <h1>Receptkönyv</h1>
  </div>
</section>

<!-- Recipe Section
=================== -->
<section id="recipe">
  <div class="container">
    <div class="row">
      <!-- Title -->
      <div class="col-12">
        <h2>Pikáns zöldséges szójapörkölt</h2>
      </div>
    </div>
    <div class="row vertical-align">
      <div class="col-12">
        <!-- Picture -->
        <div class="col-md-8 pull-left wow swing">
          <img src="img/recipe1.jpg" alt="bbq-pork-ribs" class="recipe-picture" />
        </div>
        <!-- Info -->
        <div class="col-md-4 pull-right wow lightSpeedIn">
          <div class="recipe-info">
            <h3>Info</h3>
            <!-- Time -->
            <div class="row">
              <div class="col-2 text-center">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
              </div>
              <div class="col-6">Idő</div>
              <div class="col-4">1 óra</div>
            </div>
            <!-- Difficulty -->
            <div class="row">
              <div class="col-2 text-center">
                <i class="fa fa-area-chart" aria-hidden="true"></i>
              </div>
              <div class="col-6">Nehézség</div>
              <div class="col-4">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
              </div>
            </div>
            <!-- Serves -->
            <div class="row">
              <div class="col-2 text-center">
                <i class="fa fa-users" aria-hidden="true"></i>
              </div>
              <div class="col-6">Hány személyre</div>
              <div class="col-4">4</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Ingredients -->
    <div class="row wow slideInUp">
      <div class="col-12">
        <div class="recipe-ingredients">
          <h3>Hozzávalók a szójakocka főzéséhez</h3>
          <dl class="ingredients-list">
            <dt>20 dkg</dt> <dd>szója (kocka)</dd>
            <dt>1.5 l</dt> <dd>víz</dd>
            <dt>2</dt> <dd>gerezd fokhagyma</dd>
            <dt>í. sz.</dt> <dd>só</dd>
            <dt>í. sz.</dt> <dd>bors</dd>
            <dt>í. sz.</dt> <dd>kakukkfű</dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- Ingredients -->
    <div class="row wow slideInUp">
      <div class="col-12">
        <div class="recipe-ingredients">
          <h3>Hozzávalók a pörkölthöz</h3>
          <dl class="ingredients-list">
            <dt>6 </dt> <dd>gerezd fokhagyma</dd>
            <dt>1 db</dt> <dd>vöröshagyma</dd>
            <dt>1 db</dt> <dd>nagy paradicsom</dd>
            <dt>1 db</dt> <dd>zöldpaprika</dd>
            <dt>4 ek</dt> <dd>napraforgó olaj</dd>
            <dt>1.5 ek</dt> <dd>füstölt pirospaprika</dd>
            <dt>1 tk</dt> <dd>paprikakrém</dd>
            <dt>1 tk</dt> <dd>csípős paprikakrém</dd>
            <dt>2 dl</dt> <dd>víz</dd>
            <dt>í. sz.</dt> <dd>só</dd>
            <dt>í. sz.</dt> <dd>bors</dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- Directions -->
    <div class="row wow slideInUp">
      <div class="col-12">
        <div class="recipe-directions">
          <h3>Elkészítés</h3>
          <ol>
            <li>A szójakocka főzése:</li>
            <li>A szójakockát egy fazékba tesszük, rászórjuk a fűszereket, és hozzáadjuk a beirdalt fokhagymagerezdeket.</li>
            <li>Felöntjük a forró vízzel, 15 perc alatt megfőzzük, majd leszűrjük.</li>
            <li>A pörkölt elkészítése:</li>
            <li>Az aprított vöröshagymát az olajon megpirítjuk, majd az edényt félrehúzva rászórjuk a füstölt pirospaprikát. Elkeverjük, és hozzáadjuk a leszűrt, főtt szójakockát. </li>
            <li>Ízlés szerint sózzuk, és egy kis vízzel felöntve 10 percig pároljuk.</li>
            <li>Ezután hozzáadjuk a darabolt paradicsomot és a paprikákat, a zúzott fokhagymát, a fűszereket, a paprikakrémeket, borsozzuk, és ha szükséges, még sózzuk. </li>
            <li>Jól elkeverjük, és közepes lángon 20 perc alatt készre pároljuk a pörköltet.</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- Back to recipes -->
    <div class="row wow rollIn">
      <div class="col-12 text-center">
        <a href="recipes.php" class="btn btn-success">
          <i class="fa fa-backward" aria-hidden="true"></i>
          Vissza a receptekhez
        </a>
      </div>
    </div>
  </div>
</section>

    

    </div>

    <!-- Footer -->
	<?php include 'includes/footer.php'; ?>
	
    <!--- Script Source Files -->
    <?php include 'includes/scripts.php'; ?>
    
</body>
</html>