<?php 
if(empty($_COOKIES["lang"])){
    $_COOKIES["lang"] = "ar";
}
$lang=$_COOKIES["lang"];

include "./inc/frontend/languages/home_lang.php";

include "./inc/backend/conn.php";
include "./inc/backend/form.php";

include "./inc/frontend/templates/header.php"
?>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">MAWEB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
            </ul>
            <button class="btn btn-outline-success" type="submit">Search</button>
            </div>
        </div>
    </nav>
</header>

<article>
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <section class="col-10 col-sm-8 col-lg-6">
                <figure>
                    <img src="..." class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </figure>
            </section>
            <section class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Responsive left-aligned hero with image</h1>
                <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                </div>
            </section>
        </div>
    </div>
</article>

<article>
    <div class="container px-4 py-5" id="hanging-icons">
        <h2 class="pb-2 border-bottom">What is special</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <?php for($i = 1;$i<10;$i++): ?>
                <div class="col d-flex align-items-start">
                    <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <i class="bi" width="1em" height="1em"></i>
                    </div>
                    <div>
                    <h2>Featured title</h2>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                    </div>
                </div>
            <?php endfor ?>
        
        </div>
    </div>
</article>

<article> 
    <div class="container">
        <h1>Portfolio</h1>
        <figure id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner w-100 bg-dark">
                <figcaption class="carousel-item active">
                    <img src="..." class="d-block w-100" alt="...">
                </figcaption>
                <figcaption class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </figcaption>
                <figcaption class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </figcaption>
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
        <h1>Pricing</h1>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                    <li>10 users included</li>
                    <li>2 GB of storage</li>
                    <li>Email support</li>
                    <li>Help center access</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                    <li>10 users included</li>
                    <li>2 GB of storage</li>
                    <li>Email support</li>
                    <li>Help center access</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                    <li>10 users included</li>
                    <li>2 GB of storage</li>
                    <li>Email support</li>
                    <li>Help center access</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
                </div>
                </div>
            </div>
        </div>
    </div>
</article>

<article>
    <div class="container">
        <div class="row">
            <?php
                $rates=mysqli_query($conn,"SELECT * FROM rates");
                $rates=mysqli_fetch_all($rates);
                foreach($rates as $rate){
                    print_r( $rate);
                }
            ?>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div>
                        <img src="..." class="card-img-top" alt="...">
                        <h3>Client name</h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>                
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div>
                        <img src="..." class="card-img-top" alt="...">
                        <h3>Client name</h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>                
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div>
                        <img src="..." class="card-img-top" alt="...">
                        <h3>Client name</h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>                
            </div>

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
                        <input name="name" type="text" class="form-control" placeholder="Your name" aria-label="Your name" aria-describedby="addon-wrapping">
                        <input name="phone" type="text" class="form-control" placeholder="Phone number(optional)" aria-label="Phone number(optional)" aria-describedby="addon-wrapping">
                    </div>
                    <?php echo $errors["name"] . $errors["phone"]; ?>
                    <input name="email" type="text" class="form-control" placeholder="email" aria-label="email" aria-describedby="addon-wrapping">
                    <?php echo $errors["email"]; ?>
                    <select name="option" class="form-select" id="inputGroupSelect01">
                        <option selected value="Creat design">Creat design</option>
                        <option value="Coding">Coding</option>
                        <option value="Securing">Securing</option>
                        <option value="Custom">Custom</option>
                    </select>
                    <div class="form-floating">
                        <textarea name="message" class="form-control" placeholder="Leave a comment here" id="Textarea" style="height: 100px"></textarea>
                        <label for="Textarea">Message...</label>
                        <?php echo $errors["message"]; ?>
                    </div>
                    <input name="send" class="btn btn-dark" type="submit">
                </div>

            </form>
        </div>
    </div>
</article>

<article>
    <div class="container">
        <h1>About Me</h1>
        <div>
            <figure><img src="..." alt=""></figure>
            <section>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod odio illo iure eligendi! Culpa, unde cum ipsam, esse officiis numquam sint possimus qui explicabo neque laborum at blanditiis! Dolor, vitae. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia officiis odit assumenda eligendi? Quisquam incidunt nobis delectus itaque, beatae labore fugit aut iure sequi atque, eveniet ullam quos, accusantium modi quia consectetur porro tenetur quas enim quasi! Ipsa, at reprehenderit! </p>
                <button><a href="">MY CV</a></button>
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
     <h2>Payment & Policies</h2>
     <div class="container d-felx">
         <figure><img class="w-50" src="" alt="..."></figure>
         <div class="w-50">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus reiciendis mollitia voluptates consectetur suscipit cumque explicabo pariatur ipsa molestias voluptate!</p>
            <ul>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Lorem ipsum dolor sit amet</li>
            </ul>
         </div>
     </div>
 </div>
</article>

<?php 
include "./inc/frontend/templates/footer.php";
include "./inc/backend/close.php";
?>