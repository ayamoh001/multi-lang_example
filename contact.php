<?php 
if(empty($_COOKIES["lang"])){
    $_COOKIES["lang"] = "ar";
}
$lang=$_COOKIES["lang"];
include "./inc/frontend/languages/contact_lang.php";
include "./inc/backend/conn.php";
include "./inc/backend/form.php";
include "./inc/frontend/templates/header.php"
?>

<article>
    <div class="container">
        <form class="col" action="./" method="POST">
            <div>
                <div class="input-group flex-nowrap">
                    <input name="name" type="text" class="form-control" placeholder="Your name" aria-label="Your name" aria-describedby="addon-wrapping">
                    <input name="phone" type="text" class="form-control" placeholder="Phone number(optional)" aria-label="Phone number(optional)" aria-describedby="addon-wrapping">
                </div>
                <?php echo $errors["name"] . $errors["phone"]; ?>
                <input name="email" type="text" class="form-control" placeholder="email" aria-label="email" aria-describedby="addon-wrapping">
                <?php echo $errors["email"]; ?>
                <select name="option" class="form-select" id="inputGroupSelect01">
                    <option selected value="Creat design">Creat design</option>
                    <option value="Coding">Coding</option>
                    <option value="Securing">Securing</option>
                    <option value="Custom">Custom</option>
                </select>
                <div class="form-floating">
                    <textarea name="message" class="form-control" placeholder="Leave a comment here" id="Textarea" style="height: 100px"></textarea>
                    <label for="Textarea">Message...</label>
                    <?php echo $errors["message"]; ?>
                </div>
                <input name="send" class="btn btn-dark" type="submit">
            </div>

        </form>
    </div>    
</article>

<article>
    <div class="container">
        <h1>On Social media</h1>
        <div class="row">
            <div class="col-3">
                <div>
                    <figure><img src="" alt=""></figure>
                    <img src="" alt="">
                </div>
                <h3>Mohamed Ayaou</h3>
            </div>
            <div class="col-3">
                <div>
                    <figure><img src="" alt=""></figure>
                    <img src="" alt="">
                </div>
                <h3>Mohamed Ayaou</h3>
            </div>
            <div class="col-3">
                <div>
                    <figure><img src="" alt=""></figure>
                    <img src="" alt="">
                </div>
                <h3>Mohamed Ayaou</h3>
            </div>
            <div class="col-3">
                <div>
                    <figure><img src="" alt=""></figure>
                    <img src="" alt="">
                </div>
                <h3>Mohamed Ayaou</h3>
            </div>
        </div>
    </div>
</article>

<?php 
include "./inc/frontend/templates/footer.php";
include "./inc/backend/close.php";
 ?>