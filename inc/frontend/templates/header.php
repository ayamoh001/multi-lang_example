<?php include "./inc/frontend/languages/static_lang.php" ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>" dir="<?php if($lang=="ar"){echo "rtl";} else{echo "ltr";}?>">
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
    <meta rel="apple-touch-icon" href="./assets/images/logo_icons/192.png">
    <link rel="manifest" href="manifest.json">
    
    <link rel="icon" href="./assets/images/logo_icons/192.png">
    <link rel="stylesheet" href="./assets/css/bootstrap<?php echo ($lang=="ar") ? ".rtl" : "" ;?>.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title><?php echo $title[$lang] ?></title>
</head>

<body class="bg-light pt-5">
    <main>
        <header id="header">
            <nav class="w-100 bg-light fixed-top shadow-sm top navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <form class="d-lg-none d-block" action="./" method="GET">
                        <button class="btn btn-dark text-light px-md-4" name="lang" type="submit" value="<?php echo ($lang=="en") ? "ar": "en" ; ?>"><?php echo $header[$lang][1] ?></button>
                    </form>
                    <a class="navbar-brand text-dark fw-bold" href="#">MAWEB</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                        <ul class="navbar-nav  p-4 pb-0 p-lg-0 ps-lg-5  gap-3 my-auto mb-2 mb-lg-0">
                            <?php $links=["#home","#portfolio","#services","#rates","#contact","#about"];
                            for($i=0;$i<count($links);$i++): ?>
                                <li class="nav-item">
                                    <a class="nav-link text-dark border-bottom" aria-current="page" href="<?php echo $links[$i]; ?>"><?php echo $header[$lang][0][$i]; ?></a>
                                </li>
                            <?php endfor ?>
                        </ul>
                    </div>
                    <form class="d-lg-block d-none" action="./" method="GET">
                        <button class="btn btn-dark text-light px-md-4" name="lang" type="submit" value="<?php echo ($lang=="en") ? "ar": "en" ; ?>"><?php echo $header[$lang][1] ?></button>
                    </form>


                </div>
            </nav>
        </header>