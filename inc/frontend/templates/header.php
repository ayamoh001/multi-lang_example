<?php include "./inc/frontend/languages/static_lang.php" ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>" dir="<?php if($lang=="ar"){echo "rtl";}else{echo "ltr";}?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="...">
    <meta name="keywords" content="...">
    <meta name="author" content="Mohamed Ayaou">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- meta og -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar" content="..." />
    <meta name="theme-color" content="...">
    <meta rel="apple-touch-icon" href="./assests/images/logo_icons/192.png">
    <link rel="manifest" href="manifest.json">
    
    <link rel="icon" href="./assests/images/logo_icons/192.png">

    <link rel="stylesheet" href="./assests/css/bootstrap<?php echo ($lang=="ar") ? ".rtl" : "" ;?>.min.css">
    <!-- <link rel="stylesheet" href="./assests/css/sass/style_<?php echo $lang?>.css"> -->
    <title><?php echo $title[$lang] ?></title>
</head>

<body class="bg-light">
<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand text-dark fw-bold" href="#">MAWEB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav my-auto mb-2 mb-lg-0">
                    <?php foreach($header[$lang][0] as $nav): ?>
                        <li class="nav-item">
                        <a class="nav-link px-3" aria-current="page" href="#"><?php echo $nav ?></a>
                        </li>
                    <?php endforeach ?>
                </ul>
                <form action="./" method="POST"><button class="btn btn-dark text-light px-4" name="change-lang" type="submit" value="<?php echo ($lang=="en") ? "ar": "en" ; ?>"><?php echo $header[$lang][1] ?></button></form>
            </div>
        </div>
    </nav>
</header>