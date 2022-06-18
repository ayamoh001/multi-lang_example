<?php 
if(empty($_COOKIES["lang"])){
    $_COOKIES["lang"] = "ar";
}
$lang=$_COOKIES["lang"];
include "./inc/frontend/languages/rates_lang.php";
include "./inc/backend/conn.php";
include "./inc/frontend/templates/header.php";
?>


<article>
    <div class="container">
        <div class="row">
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
                                <h4><?php echo $rate[3] ?></h4>
                            </div>
                        </div>                
                    </div>

            <?php endforeach ?>
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
<?php 
include "./inc/frontend/templates/footer.php";
include "./inc/backend/close.php";
?>