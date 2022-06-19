<footer>
    <div class="container-fluid pt-5 bg-dark border-top">
        <div class="container">
            <div class="row row-cols-4 g-5">
                <div class="col-6">
                <a href="" class="d-flex h2 align-items-center mb-3 link-light text-decoration-none">
                    MAWEB
                </a>
                <p class="text-muted"><?php echo $footer[$lang][0] ?></p>
                </div>

                
                <?php foreach($footer[$lang][1] as $section): ?>
                <div class="col-2 border-start">
                    <h5 class="text-light"><?php echo $section[0] ?></h5>
                    <ul class="nav flex-column text">
                        <?php foreach($section[1] as $navlink): ?>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><?php echo $navlink ?></a></li>
                        <?php endforeach ?>
                    </ul>
                    </div>
                <?php endforeach ?>
                </div>
                <div class="text-light d-flex w-100 justify-content-between mt-4 border-top">
                <p class="my-3">© 2021 Company, Inc. All rights reserved.</p>
                <ul class="">
                </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

    <script src="./assests/js/bootstrap.bundle.min.js"></script>
    <script src="./assests/js/main.js"></script>
</body>
</html>