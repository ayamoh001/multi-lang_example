<?php 
if(empty($_COOKIES["lang"])){
    $_COOKIES["lang"] = "ar";
}
$lang=$_COOKIES["lang"];

include "./inc/frontend/languages/about_lang.php";

include "./inc/frontend/templates/header.php"
?>


<?php include "./inc/frontend/templates/footer.php"; ?>