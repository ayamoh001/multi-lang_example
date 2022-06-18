<?php 
if(empty($_COOKIES["lang"])){
    $_COOKIES["lang"] = "ar";
}
$lang=$_COOKIES["lang"];

include "./inc/frontend/languages/portfolio_lang.php";
include "./inc/frontend/templates/header.php";
?>

<article>
    <div class="container">
        <h1><?php echo $content[$lang]["title"] ?></h1>
        <?php for($i=0;$i<6;$i+=2): ?>
            <div class="d-flex">
                <div class="col w-50">
                    <figure><img src="<?php echo $content[$lang]["images"][$i] ?>" alt=""></figure>
                </div>
                <div class="col w-50">
                    <h2><?php echo $content[$lang]["titles"][$i] ?></h2>
                    <div><?php echo $content[$lang]["descriptions"][$i] ?></div>
                </div>
            </div>
            <div class="d-flex flex-row-reverse">
                <div class="col w-50">
                    <figure><img src="<?php echo $content[$lang]["images"][$i+1] ?>" alt=""></figure>
                </div>
                <div class="col w-50">
                    <h2><?php echo $content[$lang]["titles"][$i+1] ?></h2>
                    <div><?php echo $content[$lang]["descriptions"][$i+1] ?></div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</article>

<?php include "./inc/frontend/templates/footer.php"; ?>