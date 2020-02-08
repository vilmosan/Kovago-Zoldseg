<!--- Navigation -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="img/KZLOGO_2.png"></a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link <?php if($page=='home'){echo 'active';}?>" href="index.php">Főoldal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($page=='items'){echo 'active';}?>" href="items.php">Termékek</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($page=='recipes'){echo 'active';}?>" href="recipes.php">Receptek</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($page=='gallery'){echo 'active';}?>" href="gallery.php">Galéria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($page=='contact-us'){echo 'active';}?>" href="contact-us.php">Kapcsolat</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--- End Navigation -->