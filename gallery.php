<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php'; ?>
</head>
<body> 

    <!-- Navigation -->
    <?php $page = 'pricing'; include 'includes/navbar.php'; ?>
    <div id="splash"></div>
    
    <!-- Gallery -->
	<div class="container">    
        <div class="row pt-6" id="showCasedPicture">
            <div class="col-12">
                <div id="gallery_1" class="picture" style="display:block">
                    <img class="img-fluid" src="img/gallery1.jpg"  alt="Village">
                </div>
                <div id="gallery_2" class="picture" style="display:none">
                    <img class="img-fluid" src="img/gallery2.jpg" alt="Women">
                </div>
                <div id="gallery_3" class="picture" style="display:none">
                    <img class="img-fluid" src="img/gallery3.jpeg" alt="Glass-house">
                </div>
                <div id="gallery_4" class="picture" style="display:none">
                    <img class="img-fluid" src="img/gallery4.jpg" alt="Workers">
                </div>
            </div>
        </div>
        <div class="row pt-0 pb-4 no-gutters">
            <div class="col">
                <a href="javascript:void(0)" class="myhover" onclick="openImg('gallery_1');">
                    <img class="img-fluid" src="img/gallery1.jpg" alt="Village">
                </a>
            </div>
            <div class="col">
                <a href="javascript:void(0)" class="myhover" onclick="openImg('gallery_2');">
                    <img class="img-fluid" src="img/gallery2.jpg" alt="Women">
                </a>
            </div>
            <div class="col">
                <a href="javascript:void(0)" class="myhover" onclick="openImg('gallery_3');">
                    <img class="img-fluid" src="img/gallery3.jpeg" alt="Glass-house">
                </a>
            </div>
            <div class="col">
                <a href="javascript:void(0)" class="myhover" onclick="openImg('gallery_4');">
                    <img class="img-fluid" src="img/gallery4.jpg" alt="Workers">
                </a>
            </div>
		</div>
	</div>

    
    
    <!-- Footer -->
	<?php include 'includes/footer.php'; ?>
	
    <!--- Script Source Files -->
    <?php include 'includes/scripts.php'; ?>
    
</body>
</html>


		
<script js>
	openImg("gallery_1");

	function openImg(imgName) {
		var i, x;
		x = document.getElementsByClassName("picture");
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";
		}
		document.getElementById(imgName).style.display = "block";
	}
</script>