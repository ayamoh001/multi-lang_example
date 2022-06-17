<?php
include "../inc/frontend/languages/home_lang.php";

// include "../inc/backend/conn.php";
// include "../inc/backend/form.php";
// include "../inc/backend/close.php";

include "../inc/frontend/templates/header.php";
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
            <form class="col" action="../inc/backend/form.php" method="POST">
                <div>
                    <div class="input-group flex-nowrap">
                        <input type="text" class="form-control" placeholder="First name" aria-label="First name" aria-describedby="addon-wrapping">
                        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" aria-describedby="addon-wrapping">
                    </div>
                    <input type="text" class="form-control" placeholder="email" aria-label="email" aria-describedby="addon-wrapping">
                    <select class="form-select" id="inputGroupSelect01">
                        <option selected>Choose...</option>
                        <option value="1">Creat design</option>
                        <option value="2">Coding</option>
                        <option value="3">Securing</option>
                        <option value="3">Custom</option>
                    </select>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Message...</label>
                    </div>
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

<footer>
    <div class="container">
        <div class="row row-cols-5 py-5 my-5 border-top">
            <div class="col-4">
            <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                MAWEB
            </a>
            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero adipisci qui enim inventore deleniti nihil ex omnis doloremque eveniet similique numquam fugit eius, commodi saepe cumque suscipit fugiat quis officiis voluptatibus ipsum!</p>
            </div>

            

            <div class="col">
            <h5>Section</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
            </div>

            <div class="col">
            <h5>Section</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
            </div>

            <div class="col">
            <h5>Section</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
            
            </div>
            <div class="d-flex w-100 justify-content-between py-4 my-4 border-top">
            <p>© 2021 Company, Inc. All rights reserved.</p>
            <ul class="">
            </ul>
            </div>
        </div>
    </div>
</footer>

    <script src="./assests/js/bootstrap.bundle.min.js"></script>
    <script src="./assests/js/main.js"></script>
</body>
</html>