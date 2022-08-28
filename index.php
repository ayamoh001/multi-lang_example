<?php 
$_COOKIES["lang"] = isset($_GET["lang"]) ? $_GET["lang"] : "ar" ;
$lang = $_COOKIES["lang"];

include "./inc/frontend/languages/home_lang.php";

include "./inc/backend/conn.php";
include "./inc/backend/form.php";

include "./inc/frontend/templates/header.php"
?>


<article id="hero">
    <div class="container px-4">
        <div class="row flex-lg-row-reverse flex-lg-nowrap justify-content-center align-items-center gap-lg-5 gap-3 py-5">
            <section class="col-10 col-sm-10 col-lg-6">
                <figure>
                    <img src="./assests/images/me/me.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </figure>
            </section>
            <section class="col-lg-6 my-0">
                <h1 class="display-2 fw-bold lh-1 mb-lg-3 text-lg-start text-center text-uppercase"><?php echo $content[$lang]["hero"][0] ?></h1>
                <p class="lead py-md-3 text-lg-start text-center"><?php echo $content[$lang]["hero"][1] ?></p>
                <div class="d-grid gap-2 d-md-flex justify-content-lg-start justify-content-md-center">
                    <button type="button" class="btn btn-dark btn-lg px-5 me-md-2 fw-bold text-uppercase"><?php echo $content[$lang]["hero"][2] ?></button>
                    <button type="button" class="btn btn-outline-dark border-2 btn-lg px-5 fw-bold text-uppercase"><?php echo $content[$lang]["hero"][3] ?></button>
                </div>
            </section>
        </div>
    </div>
</article>

<article id="features">
        <div class="bg-dark">    
            <div class="container">
                <div class="py-5 row g-5 m-0 row-cols-1 row-cols-md-2 row-cols-lg-3">
                    <?php $icons=["bi bi-search","bi bi-globe","bi bi-shield-shaded","bi bi-eye-fill","bi bi-speedometer","bi bi-aspect-ratio-fill","bi bi-cpu-fill","bi bi-layout-text-sidebar","bi bi-award-fill"];
                    for($i=0;$i<count($icons);$i++): ?>
                        <div class="col my-3 px-0 px-md-3">
                            <div class="d-flex align-items-start">
                                <div class="border-end pe-3 w-25 m-auto">
                                    <div class=" ratio ratio-1x1 rounded-circle d-flex bg-light align-items-center justify-content-center">
                                        <div class="position-relative w-auto"><i class="<?php echo $icons[$i] ?> fs-1"></i></div>
                                    </div>
                                </div>
                                <div class="ps-3 w-75 ">
                                    <h2 class="text-light text-uppercase fw-bold h5 mb-2"><?php echo $content[$lang]["features"][1][$i][0] ?></h2>
                                    <p class="text-light lead fs-6"><?php echo $content[$lang]["features"][1][$i][1] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endfor ?>
                
                </div>
            </div>
        </div>
    
</article>

<article id="portfolio"> 
    <div>
        <h2 class="text-center m-0 py-5 display-5 fw-bold text-uppercase"><?php echo $content[$lang]["portfolio"][0] ?></h2>
        <div class="bg-dark p-lg-5 py-3">
            <div id="carouselExampleIndicators" class="carousel slide container" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php $works =["test_001.jpg","test_002.jpg","test_003.jpg","test_004.jpg","test_005.jpg"]; 
                    for($i = 0;$i<count($works);$i++): ?>
                        <figcaption class="carousel-item text-center <?php if($i==0){echo "active";}?>">
                            <img class="bg-dark w-100" src="./assests/images/portfolio/<?php echo $works[$i] ?>" class="d-block w-100" alt="...">
                        </figcaption>
                    <?php endfor ?>
                    <button class="carousel-control-prev opacity-100" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next opacity-100" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="carousel-indicators position-relative m-0 ">
                    <?php for($i = 0;$i<count($works);$i++): ?>
                        <div class="ratio ratio-16x9">
                            <img data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i-1 ?>" class="<?php if($i==0){echo "active";}?> border-0 h-100 w-100 m-0" aria-current="<?php if($i==0){echo "true";}?>" aria-label="Slide <?php echo $i?>" src="./assests/images/portfolio/<?php echo $works[$i] ?>">
                        </div>
                    <?php endfor ?>
                </div>
                
            </div>
        </div>
    </div>
</article>

<article id="services">
    <div class="container">
        <h2 class="text-center display-5 fw-bold text-uppercase m-0 py-5"><?php echo $content[$lang]["services"][0] ?></h2>
        <div class="row row-cols-1 row-cols-md-3 mb-3 g-4 text-center">
            <?php $services=["designing.png","coding.webp","securing.jpg"]; 
            for($i = 0;$i<count($services);$i++): ?>
                <div class="col">
                    <div class="card mb-4 rounded-3 overflow-hidden h-100 shadow-sm">
                        <img class="h-100 ratio-1x1" src="./assests/images/services/<?php echo $services[$i] ?>" alt="">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h1 class="card-title pricing-card-title"><?php echo $content[$lang]["services"][1][$i][0] ?></small></h1>
                            <p class="mt-3 mb-4"><?php echo $content[$lang]["services"][1][$i][1] ?></p>
                            <button type="button" class="w-100 btn btn-lg btn-primary"><?php echo $content[$lang]["services"][1][$i][2] ?></button>
                        </div>
                    </div>
                </div>
            <?php endfor ?>
        </div>
    </div>
</article>

<article id="rates">
    <div class="container">
        <h2 class="text-center display-5 fw-bold text-uppercase m-0 py-5"><?php echo $content[$lang]["rates"][0] ?></h2>
        <div class="row g-md-5 g-3">
            <?php
                $rates=mysqli_query($conn,"SELECT * FROM rates");
                $rates=mysqli_fetch_all($rates);
                foreach($rates as $rate): ?>
                    <div class="col col-12 col-lg-4 col-md-6">
                        <div class="card h-100" >
                            <div class="p-4">

                                <div class="d-flex gap-4 "> 
                                    <div class="ratio ratio-1x1  w-25">
                                        <img src="./assests/images/clients/client_001.jpg" class="card-img-top rounded-circle img-fluid" alt="...">
                                    </div>
                                    <div class="w-75">
                                        <h4 class="text-nowrap"><?php echo $rate[1] ?></h4>
                                        <h5 class="fs-6 lead text-muted"><?php echo $rate[3] ?></h5>
                                    </div>
                                </div>
                                <div class="card-body pt-3 p-0">
                                    <p class="card-text "><?php echo $rate[2] ?></p>
                                </div>
                            </div>
                        </div>                
                    </div>
                <?php endforeach ?>
        </div>
        <!-- <div>
            <span><</span>
            <span>></span>
        </div> -->
    </div>
</article>

<article id="contact">
    <div class="overflow-hidden">
            <div class="py-5">
                <h2 class="text-center display-5 m-0 fw-bold text-uppercase"><?php echo $content[$lang]["contact"][0] ?></h2>
            </div>
            <div class="bg-dark py-5">
                <div class="container d-flex flex-md-row flex-column gap-5" >
                    <section class="w-100 text-white">
                        <form action="./" method="POST">
                            <div>
                                <div class="input-group flex-nowrap mb-2">
                                    <input name="name" type="text" class="form-control" placeholder="<?php echo $content[$lang]["contact"][1][0] ?>" aria-label="<?php echo $content[$lang]["contact"][1][0] ?>" aria-describedby="addon-wrapping">
                                    <input name="phone" type="text" class="form-control" placeholder="<?php echo $content[$lang]["contact"][1][1] ?>" aria-label="<?php echo $content[$lang]["contact"][1][1] ?>" aria-describedby="addon-wrapping">
                                </div>
                                <?php echo ($errors["name"] || $errors["phone"]) ? "<p class='p-1'>" . $errors["name"] . $errors["phone"] . "</p>" : ""; ?>
                                <input name="email" type="text" class="form-control mb-2" placeholder="<?php echo $content[$lang]["contact"][1][2] ?>" aria-label="<?php echo $content[$lang]["contact"][1][2] ?>" aria-describedby="addon-wrapping">
                                <?php echo ($errors["email"]) ? "<p class='p-1'>" . $errors["email"] . "</p>" : ""; ?>
                                <select name="option" class="form-select mb-2" id="inputGroupSelect01">
                                    <option selected value="Creat design"><?php echo $content[$lang]["contact"][1][3][0] ?></option>
                                    <option value="Coding"><?php echo $content[$lang]["contact"][1][3][1] ?></option>
                                    <option value="Securing"><?php echo $content[$lang]["contact"][1][3][2] ?></option>
                                    <option value="Custom"><?php echo $content[$lang]["contact"][1][3][3] ?></option>
                                </select>
                                <div class="form-floating mb-2">
                                    <textarea name="message" class="form-control" placeholder="Leave a comment here" id="Textarea" style="height: 100px"></textarea>
                                    <label for="Textarea"><?php echo $content[$lang]["contact"][1][4] ?></label>
                                    <?php echo ($errors["message"]) ?  "<p class='p-1'>" . $errors["message"] . "</p>" : ""; ?>
                                </div>
                                <div class="d-grid">
                                    <input name="send" class="btn btn-outline-light border-2 fw-bold" value="<?php echo $content[$lang]["contact"][1][5] ?>" type="submit">
                                </div>
                            </div>
                        </form>
                    </section>
                    <section class="w-100 overflow-hidden">
                        <div class="row row-cols-3 g-5">
                            <?php $media =["twitter.png","telegram.png","facebook.png","whatsapp.png","instagram.png","behance.png","youtube.png","messanger.png","pentrist.png"];
                            foreach($media as $m): ?>
                                    <div class="col d-flex justify-content-center"><img src="./assests/images/icons/<?php echo $m ?>" alt=""></div>
                            <?php endforeach ?>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</article>

<article id="about">
    <div class="container overflow-hidden">
        
        <div class="row py-5 g-5 overflow-hidden align-items-center justify-content-center">
            <div class="col-10 col-md-6 ">
                <figure >
                    <img src="./assests/images/me/me.png" class="w-100" alt="...">
                </figure>
            </div>
            <div class="col-12 col-md-6">
                <section class="h-100 d-flex flex-column justify-content-center">
                    <h2 class="display-1 fw-bold text-uppercase text-md-start text-center"><?php echo $content[$lang]["about"][0] ?></h2>
                    <p class="fs-5 my-lg-5 my-3 lh-lg text-md-start text-center"><?php echo $content[$lang]["about"][1] ?></p>
                    <div class="d-grid">
                        <button class="btn btn-outline-dark border-3 py-2 fw-bold "><?php echo $content[$lang]["about"][2] ?></button>
                    </div>
                </section>
            </div>
        </div>
    </div>
</article>

<article id="policies">
    <div class="container pb-5">
        <h2 class="h1 text-center py-5"><?php echo $content[$lang]["policies"][0] ?></h2>
        
        <div class="container d-flex flex-column flex-md-row justify-content-center align-items-center gap-5">
            <figure class=""><img width="250px" src="./assests/images/phone/Device.png" alt="..."></figure>
            <div class="mb-5">
                <p class="lead fw-normal fs-4 mb-4"><?php echo $content[$lang]["policies"][1][0] ?></p>
                <ul>
                    <li class="mb-2 lead ms-5"><?php echo $content[$lang]["policies"][1][1] ?></li>
                    <li class="mb-2 lead ms-5"><?php echo $content[$lang]["policies"][1][2] ?></li>
                    <li class="mb-2 lead ms-5"><?php echo $content[$lang]["policies"][1][3] ?></li>
                </ul>
            </div>
        </div>
    </div>
</article>

<?php 
include "./inc/frontend/templates/footer.php";
include "./inc/backend/close.php";
?>