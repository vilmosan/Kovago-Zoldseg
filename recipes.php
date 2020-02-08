<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php'; ?>
</head>
<body>
    
    <!-- Navigation -->
    <?php $page = 'recipes'; include 'includes/navbar.php'; ?>
    <div id="splash"></div>

    <!-- Recipes -->
<div class="container recipes">


        <!-- Website Logo
        ================= -->
        <section id="recipelogo">
            <div class="container-fluid col-12 text-center wow pulse">
                <img src="img/logo-white.svg" alt="logo" />
                <br />
                <div class=recipeBookTitle>
                    Receptkönyv
                </div>  
            </div>
        </section>

        <!-- Recipes Items
        ================== -->
        <section id="items">
        <div class="container">
            <div class="row">
            <div class="col-12">
                <h2>Receptek</h2>
            </div>
            </div>
            <div class="row">
            <!-- First recipe item -->
            <div class="col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                <div class="recipe-item text-center">
                <a href="recipe.php">
                    <img src="img/recipe1.jpg" alt="" />
                </a>
                <br />
                <h3>Pikáns zöldséges szójapörkölt</h3>
                </div>
            </div>
            <!-- Second recipe item -->
            <div class="col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                <div class="recipe-item text-center">
                <a href="recipe.php">
                    <img src="img/recipe2.jpg" alt="" />
                </a>
                <br />
                <h3>Szűzpecsenye lecsós burgonyával</h3>
                </div>
            </div>
            <!-- Third recipe item -->
            <div class="col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                <div class="recipe-item text-center">
                <a href="recipe.php">
                    <img src="img/recipe3.jpg" alt="" />
                </a>
                <br />
                <h3>Káposztás-tojásos pirog</h3>
                </div>
            </div>
            <!-- Fourth recipe item -->
            <div class="col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                <div class="recipe-item text-center">
                <a href="recipe.php">
                    <img src="img/recipe4.jpg" alt="" />
                </a>
                <br />
                <h3>Libamájragus házi rétes</h3>
                </div>
            </div>
            <!-- Fifth recipe item -->
            <div class="col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                <div class="recipe-item text-center">
                <a href="recipe.php">
                    <img src="img/recipe5.jpg" alt="" />
                </a>
                <br />
                <h3>Csőben sült brokkoli hagymás besamellel</h3>
                </div>
            </div>
            <!-- Sixth recipe item -->
            <div class="col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                <div class="recipe-item text-center">
                <a href="recipe.php">
                    <img src="img/recipe6.jpg" alt="" />
                </a>
                <br />
                <h3>Töltött szőlőlevél</h3>
                </div>
            </div>
            <!-- Seventh recipe item -->
            <div class="col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                <div class="recipe-item text-center">
                <a href="recipe.php">
                    <img src="img/recipe7.jpg" alt="" />
                </a>
                <br />
                <h3>Kávéhabos profiterol</h3>
                </div>
            </div>
            <!-- Eight recipe item -->
            <div class="col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                <div class="recipe-item text-center">
                <a href="recipe.php">
                    <img src="img/recipe8.jpg" alt="" />
                </a>
                <br />
                <h3>Bordás pacsni</h3>
                </div>
            </div>
            <!-- Ninth recipe item -->
            <div class="col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                <div class="recipe-item text-center">
                <a href="recipe.php">
                    <img src="img/recipe9.jpg" alt="" />
                </a>
                <br />
                <h3>Ricottás-spenótos tortellini</h3>
                </div>
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