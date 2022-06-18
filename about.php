<?php 
if(empty($_COOKIES["lang"])){
    $_COOKIES["lang"] = "ar";
}
$lang=$_COOKIES["lang"];

include "./inc/frontend/languages/about_lang.php";

include "./inc/frontend/templates/header.php"
?>

<article>
    <div class="container">
        <h1>About Me</h1>
        <div>
            <figure><img src="./assests/images/me/me.png" alt=""></figure>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus quia atque sed magnam minima doloribus vel eius quae corporis eos possimus, dicta eum tenetur quasi sit similique enim assumenda mollitia!</p>
        </div>
    </div>
</article>

<article>
    <div class="container">
        <h1><?php echo $content[$lang]["title"] ?></h1>
        <div>
            <?php for($i=0;$i<6;$i+=2): ?>
                <div><figure><img src="./assests/images/skill_icons/<?php echo $content[$lang]["images"][$i]?>" alt=""></figure></div>
            <?php endfor; ?>
        </div>
        <div>
                travling bar
        </div>
    </div>
</article>

<article>
    <div class="container">
        <div class="row">
            <div class="col">
                <div></div>
                <h1>Language</h1>
            </div>
            <div class="col">
                <div></div>
                <h1>Language</h1>
            </div>
            <div class="col">
                <div></div>
                <h1>Language</h1>
            </div>
            <div class="col">
                <div></div>
                <h1>Language</h1>
            </div>
        </div>
    </div>
</article>

<article>
    <div class="container">
        <div class="flex">
            <div class="w-50">
                <figure><img src="" alt=""></figure>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, fugit?Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="w-50">
                <figure><img src="" alt=""></figure>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, fugit?Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
    </div>
</article>

<?php include "./inc/frontend/templates/footer.php"; ?>