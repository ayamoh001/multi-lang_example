<footer>
    <div class="container">
        <div class="row row-cols-5 py-5 my-5 border-top">
            <div class="col-4">
            <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                MAWEB
            </a>
            <p class="text-muted"><?php echo $footer[$lang][0] ?></p>
            </div>

            
            <?php foreach($footer[$lang][1] as $section): ?>
            <div class="col">
                <h5><?php echo $section[0] ?></h5>
                <ul class="nav flex-column">
                    <?php foreach($section[1] as $navlink): ?>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><?php echo $navlink ?></a></li>
                    <?php endforeach ?>
                </ul>
                </div>
            <?php endforeach ?>
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