<footer>
    <div class="container-fluid pt-5 bg-dark border-top">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-4 g-5">
                <div class="col-md-6 col-12">
                    <a href="" class="d-flex h2 justify-content-md-start justify-content-center mb-3 link-light text-decoration-none">
                        MAWEB
                    </a>
                    <p class="text-muted text-md-start text-center"><?php echo $footer[$lang][0] ?></p>
                </div>

                <?php foreach($footer[$lang][1] as $section): ?>
                    <div class="col-md-2 col-12 border-start text-center">
                        <h5 class="text-light"><?php echo $section[0] ?></h5>
                        <ul class="nav flex-column ">
                            <?php foreach($section[1] as $navlink): ?>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><?php echo $navlink ?></a></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="text-light d-flex text-center text-md-start flex-column flex-md-row w-100 justify-content-between mt-4 border-top">
                <p class="my-3">© 2021 Company, Inc. All rights reserved.</p>
                <p class="my-3">Terms & Condition's Agreement</p>
            </div>
            </div>
        </div>
    </div>
</footer>

    <script src="./assests/js/bootstrap.bundle.min.js"></script>
    <script src="./assests/js/main.js"></script>
</body>
</html>