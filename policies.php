<?php 
if(empty($_COOKIES["lang"])){
    $_COOKIES["lang"] = "ar";
}
$lang=$_COOKIES["lang"];

include "./inc/frontend/languages/policies_lang.php";

include "./inc/frontend/templates/header.php"
?>

<article>
    <div class="container">
        <div class="row">
            <img src="" alt="">
            <h3>Payment system</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci ipsum id sunt possimus quibusdam aperiam exercitationem, accusantium recusandae dolore sapiente quidem, incidunt nesciunt ullam esse corporis quia, amet a facere.</p>
        </div>
        <div class="row">
            <img src="" alt="">
            <h3>Payment system</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci ipsum id sunt possimus quibusdam aperiam exercitationem, accusantium recusandae dolore sapiente quidem, incidunt nesciunt ullam esse corporis quia, amet a facere.</p>
        </div>
        <div class="row">
            <img src="" alt="">
            <h3>Payment system</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci ipsum id sunt possimus quibusdam aperiam exercitationem, accusantium recusandae dolore sapiente quidem, incidunt nesciunt ullam esse corporis quia, amet a facere.</p>
        </div>
        <div class="row">
            <img src="" alt="">
            <h3>Payment system</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci ipsum id sunt possimus quibusdam aperiam exercitationem, accusantium recusandae dolore sapiente quidem, incidunt nesciunt ullam esse corporis quia, amet a facere.</p>
        </div>
    </div>
</article>


<?php include "./inc/frontend/templates/footer.php"; ?>