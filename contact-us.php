<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php'; ?>
</head>
<body>
    
    <!-- Navigation -->
    <?php $page = 'contact-us'; include 'includes/navbar.php'; ?>
    <div id="splash"></div>

    <!-- Contact Form -->
    <div class="container contact-form">
        <div class="contact-image pt-5">
            <img src="img/letter.png" alt="letter_picture"/>
        </div>
        <form method="post">
            <h3>Üzenetküldés számunkra:</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="txtName" class="form-control" placeholder="Név *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtEmail" class="form-control" placeholder="E-mail cím *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtPhone" class="form-control" placeholder="Telefonszám *" value="" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea name="txtMsg" class="form-control" placeholder="Üzenet... *" style="width: 100%; height: 150px;"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="btnSubmit" class="btn btn-outline-secondary btn-block" value="Üzenet küldése" />
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Footer -->
	<?php include 'includes/footer.php'; ?>
	
    <!--- Script Source Files -->
    <?php include 'includes/scripts.php'; ?>
    
</body>
</html>