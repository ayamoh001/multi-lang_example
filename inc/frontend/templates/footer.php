<footer>
    <div class="bg-dark">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-4 g-5 py-5 w-100 m-0">
                    <div class="col-lg-4 mt-0 col-12">
                        <a href="" class="d-flex h2 justify-content-md-start justify-content-center mb-3 link-light text-decoration-none">
                            MAWEB
                        </a>
                        <p class="text-muted text-md-start text-center"><?php echo $footer[$lang][0] ?></p>
                    </div>

                    <?php foreach($footer[$lang][1] as $section): ?>
                        <div class="col-lg-2 mt-0 col-12 border-start border-secondary text-center text-md-start">
                            <h5 class="text-light"><?php echo $section[0] ?></h5>
                            <ul class="nav flex-column ">
                                <?php foreach($section[1] as $navlink): ?>
                                    <li class="nav-item mb-2 text-nowrap">
                                        <a href="#" dir="auto" class="nav-link p-0 text-muted"><?php echo $navlink ?></a>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
            <hr class="dropdown-divider text-light m-0"></hr>
            <div class="container">
                <div class="text-light d-flex text-center text-md-start flex-column flex-md-row w-100 justify-content-between py-3">
                    <p class="mb-0">© 2021 Company, Inc. All rights reserved.</p>
                    <p class="mb-0">Terms & Condition's Agreement</p>
                </div>
            </div>
    </div>
</footer>
</main>

    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>
</html>