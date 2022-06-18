<?php 
$_COOKIES["lang"] = "en";
if(empty($_COOKIES["lang"])){
    $_COOKIES["lang"] = "en";
}
$lang=$_COOKIES["lang"];

include "./inc/frontend/languages/home_lang.php";

include "./inc/backend/conn.php";
include "./inc/backend/form.php";

include "./inc/frontend/templates/header.php"
?>


<article>
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <section class="col-10 col-sm-8 col-lg-6">
                <figure>
                    <img src="./assests/images/me/me.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </figure>
            </section>
            <section class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3"><?php echo $content[$lang]["hero"][0] ?></h1>
                <p class="lead"><?php echo $content[$lang]["hero"][1] ?></p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-dark btn-lg px-5 me-md-2"><?php echo $content[$lang]["hero"][2] ?></button>
                <button type="button" class="btn btn-outline-dark btn-lg px-5"><?php echo $content[$lang]["hero"][3] ?></button>
                </div>
            </section>
        </div>
    </div>
</article>

<article>
    <div class="container px-4 py-5" id="hanging-icons">
        <h2 class="pb-2 text-center"><?php echo $content[$lang]["featuers"][0] ?></h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <?php for($i = 1;$i<count($content[$lang]["featuers"]);$i++): ?>
                <div class="col d-flex align-items-start">
                    <div class="w-25 bg-dark flex-shrink-0 me-3">
                    <img class="w-100" src="./assests/images/skill_icons/<?php echo $content[$lang]["featuers"][$i][0] ?>"></img>
                    </div>
                    <div>
                        <h2><?php echo $content[$lang]["featuers"][$i][1] ?></h2>
                        <p><?php echo $content[$lang]["featuers"][$i][2] ?></p>
                    </div>
                </div>
            <?php endfor ?>
        
        </div>
    </div>
</article>

<article> 
    <div class="container">
        <h1><?php echo $content[$lang]["portfolio"][0] ?></h1>
        <figure id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner w-100 bg-dark">
                <?php for($i = 1;$i<count($content[$lang]["portfolio"]);$i++): ?>
                    <figcaption class="carousel-item">
                        <img src="./assests/images/portfolio/<?php echo $content[$lang]["portfolio"][$i][0] ?>" class="d-block w-100" alt="...">
                        <h3><?php echo $content[$lang]["portfolio"][$i][1] ?></h3>
                        <p><?php echo $content[$lang]["portfolio"][$i][2] ?></p>
                        <button><?php echo $content[$lang]["portfolio"][$i][3] ?></button>
                    </figcaption>
                    
                <?php endfor ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </figure>
    </div>
</article>

<article>
    <div class="container">
        <h1><?php echo $content[$lang]["services"][0] ?></h1>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <?php for($i = 1;$i<count($content[$lang]["services"]);$i++): ?>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <img src="./assests/images/services/<?php echo $content[$lang]["services"][0] ?>" alt="">
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title"><?php echo $content[$lang]["services"][$i][1] ?></small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                            <p><?php echo $content[$lang]["services"][$i][2] ?></p>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-outline-primary"><?php echo $content[$lang]["services"][$i][3] ?></button>
                        </div>
                    </div>
                </div>
            <?php endfor ?>
        </div>
    </div>
</article>

<article>
    <div class="container">
        <div class="row">
            <h2><?php echo $content[$lang]["rates"][0] ?></h2>
            <?php
                $rates=mysqli_query($conn,"SELECT * FROM rates");
                $rates=mysqli_fetch_all($rates);
                foreach($rates as $rate): ?>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div>
                                <img src="./assests/images/clients/<?php echo $rate[4] ?>.png" class="card-img-top" alt="...">
                                <h3><?php echo $rate[1] ?></h3>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?php echo $rate[2] ?></p>
                                <h5><?php echo $rate[3] ?></h5>
                            </div>
                        </div>                
                    </div>
                <?php endforeach ?>
        </div>
        <div>
            <span><</span>
            <span>></span>
        </div>
    </div>
</article>

<article>
    <div class="container">
        <div class="row">
            <h1><?php echo $content[$lang]["contact"][0] ?></h1>
            <section class="col">
                <figure class="d-flex w-100">
                    <figcaption><i class="">An Icon</i></figcaption>
                </figur>
                <figure class="d-flex">
                    <figcaption><i class="">An Icon</i></figcaption>
                </figur>
                <figure class="d-flex">
                    <figcaption><i class="">An Icon</i></figcaption>
                </figur>
                <figure class="d-flex">
                    <figcaption><i class="">An Icon</i></figcaption>
                </figur>
                <figure class="d-flex">
                    <figcaption><i class="">An Icon</i></figcaption>
                </figur>
                <figure class="d-flex">
                    <figcaption><i class="">An Icon</i></figcaption>
                </figur>
            </section>
            <form class="col" action="./" method="POST">
                <div>
                    <div class="input-group flex-nowrap">
                        <input name="name" type="text" class="form-control" placeholder="<?php echo $content[$lang]["contact"][1][0] ?>" aria-label="<?php echo $content[$lang]["contact"][1][0] ?>" aria-describedby="addon-wrapping">
                        <input name="phone" type="text" class="form-control" placeholder="<?php echo $content[$lang]["contact"][1][1] ?>" aria-label="<?php echo $content[$lang]["contact"][1][1] ?>" aria-describedby="addon-wrapping">
                    </div>
                    <?php echo $errors["name"] . $errors["phone"]; ?>
                    <input name="email" type="text" class="form-control" placeholder="<?php echo $content[$lang]["contact"][1][2] ?>" aria-label="<?php echo $content[$lang]["contact"][1][2] ?>" aria-describedby="addon-wrapping">
                    <?php echo $errors["email"]; ?>
                    <select name="option" class="form-select" id="inputGroupSelect01">
                        <option selected value="Creat design"><?php echo $content[$lang]["contact"][1][3][0] ?></option>
                        <option value="Coding"><?php echo $content[$lang]["contact"][1][3][1] ?></option>
                        <option value="Securing"><?php echo $content[$lang]["contact"][1][3][2] ?></option>
                        <option value="Custom"><?php echo $content[$lang]["contact"][1][3][3] ?></option>
                    </select>
                    <div class="form-floating">
                        <textarea name="message" class="form-control" placeholder="Leave a comment here" id="Textarea" style="height: 100px"></textarea>
                        <label for="Textarea"><?php echo $content[$lang]["contact"][1][4] ?></label>
                        <?php echo $errors["message"]; ?>
                    </div>
                    <input name="send" class="btn btn-dark" value="<?php echo $content[$lang]["contact"][1][5] ?>" type="submit">
                </div>

            </form>
        </div>
    </div>
</article>

<article>
    <div class="container">
        <h1><?php echo $content[$lang]["about"][0] ?></h1>
        <div>
            <figure><img src="./assests/images/me/me.png" alt="..."></figure>
            <section>
                <p><?php echo $content[$lang]["about"][1] ?></p>
                <button><a href=""><?php echo $content[$lang]["about"][2] ?></a></button>
            </section>
        </div>
    </div>
</article>

<article>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="w-100 bg-dark">
                    <h2>SEO in 2022: What a website shoild have to reach the top</h2>
                </div>
            </div>
            <div class="col-4">
                <div class="w-100 bg-dark">1</div>
                <div class="w-100 bg-dark">2</div>
            </div>
        </div>
    </div>
</article>

<article>
 <div class="container">
     <h2><?php echo $content[$lang]["policies"][0] ?></h2>
     <div class="container d-felx">
         <figure><img class="w-50" src="" alt="..."></figure>
         <div class="w-50">
            <p><?php echo $content[$lang]["policies"][1][0] ?></p>
            <ul>
                <li><?php echo $content[$lang]["policies"][1][1] ?></li>
                <li><?php echo $content[$lang]["policies"][1][2] ?></li>
                <li><?php echo $content[$lang]["policies"][1][3] ?></li>
            </ul>
         </div>
     </div>
 </div>
</article>

<?php 
include "./inc/frontend/templates/footer.php";
include "./inc/backend/close.php";
?>