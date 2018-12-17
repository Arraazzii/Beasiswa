
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Secure Login: Error</title>
        
    <?php include_once 'includes/header.php'; ?>
    <link href="" rel="stylesheet" type="text/css" />
    
<link rel="stylesheet" type="text/css" href="../bootstrap/dist/css/animate.min.css">
<link href="../bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../bootstrap/dist/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
<link href="../bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
<link href="../bpi.css" rel="stylesheet" type="text/css" />
    </head>
    <body background="../img/b.jpg" style="background-size:cover">
        <div class="container" style="margin-top:10%">
            <div class="row" >
                <div class="alert alert-warning error-page wow zoomIn" id="warnaabu2">
                    <h1 class="alert text-center text-danger">Anda Tidak Memiliki Hak Untuk Melihat Halaman Ini!</h1>
                        <div class="alert alert-info " id="warnaabutua">
                            <p align="center" class="text-primary" style="color:#FFF">Silahkan Login Dahulu!<br />
                            	<a href="<?php echo "index.php"; ?>" class="btn btn-primary wow fadeInDownBig">Log in</a>
                             </p>
                        </div>
                </div>  

            </div>
        </div> 
    </body>
</html>