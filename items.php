<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php'; ?>
</head>
<body>
    
    <!-- Navigation -->
    <?php $page = 'items'; include 'includes/navbar.php'; ?>
	<div id="splash"></div>
	
	<!-- Products FIX ME ON MOBILE VIEW-->
    <div class="container" id="items">
<?php

//$items = file("content/items.cnt");
$items = file('content/items.cnt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

	for($i = 0; $i < count($items); $i++){
		$item = $items[$i];
		$item = explode(";", $item);
		
		echo '<div class="row products mb-3">
				<div class="block">
					<div class="product">
						<img src="'.$item[0].'">
					</div>
				</div>
				
				<div class="info">
					<h4>'.$item[1].'</h4>
					<span class="description">'.$item[2].'</span>
					<span class="price">Ár: '.$item[3].' Ft / kg</span>
				</div>
			</div>';
	}
?>
		
	</div>
    
    <!-- Footer -->
	<?php include 'includes/footer.php'; ?>
	
    <!--- Script Source Files -->
    <?php include 'includes/scripts.php'; ?>
    
</body>
</html>