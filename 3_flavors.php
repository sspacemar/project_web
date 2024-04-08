<?php
    session_start();

    $_SESSION['flavor'] = null;
    $_SESSION['flavor_price'] = null;


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION['flavor'] = $_POST['flavor'];

        if($_SESSION['flavor'] != null){
            if($_SESSION['flavor'] == 'Original') {
                
            } elseif ($_SESSION['flavor'] == 'Mixberry') {
                $_SESSION['flavor_price'] = 5;
            } elseif ($_SESSION['flavor'] == 'Strawberry') {
                $_SESSION['flavor_price'] = 5;
            } elseif ($_SESSION['flavor'] == 'Peach') {
                $_SESSION['flavor_price'] = 5;
            } elseif ($_SESSION['flavor'] == 'Greek Yogurt') {
                $_SESSION['flavor_price'] = 10;
            }
        }else echo "ข้อมูลไม่เข้า";
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/style_3_flavors.css">
    <link rel="icon" href="css/logo.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <title>Flavors</title>
</head>

<body>
    <div class="header">
        <h1>Flavors</h1>
    </div>
    <div class="home-container">
        <a href="1_home_page.html">
            <i class="fa-solid fa-house"></i>
        </a>
    </div>

    <form method="post">
    <div class="flavors-container">
        <div class="flavors-item">
            <i class="fa-solid fa-cart-shopping">
            <input type="radio" name="flavor" value="Original">
            </i>
            <img src="image/Original.png"
                class="imgOriginal">
        </div>
        <div class="flavors-item Mixberry">
            <i class="fa-solid fa-cart-shopping">
            <input type="radio" name="flavor" value="Mixberry">
            </i>
            <img src="image/Mixberry.png"
                class="imgMixberry">
        </div>
        <div class="flavors-item Strawberry">
            <i class="fa-solid fa-cart-shopping">
            <input type="radio" name="flavor" value="Strawberry">
            </i>
            <img src="image/Strawberry.png"
                class="imgStberry">
        </div>
        <div class="flavors-item Oatmeal">
            <i class="fa-solid fa-cart-shopping">
            <input type="radio" name="flavor" value="Oatmeal">
            </i>
            <img src="image/Oatmeal.png"
                class="imgOatmeal">
        </div>
        <div class="flavors-item Peach">
            <i class="fa-solid fa-cart-shopping">
            <input type="radio" name="flavor" value="Peach">
            </i>
            <img src="image/Peach.png"
                class="imgPeach">
        </div>
        <div class="flavors-item GreekYogurt">
            <i class="fa-solid fa-cart-shopping">
            <input type="radio" name="flavor" value="Greek Yogurt">
            </i>
            <img src="image/Original.png"
                class="imgOriginal">
        </div>
    </div>

    <div class="button-back-next">
        <a href="2_flavors.php">
            <button id="backButton">BACK</button>
        </a>
        <a href="4_toppings.php">
            <button type="submit" id="nextButton">NEXT</button>
        </a>
    </div>
</form>

    <script>
        document.querySelectorAll('.fa-cart-shopping').forEach(item => {
            item.addEventListener('click', event => {
                const flavorsItem = event.target.closest('.flavors-item');
                if (flavorsItem) {
                    flavorsItem.classList.add('added-to-cart');
                }
            });
        });
    </script>
</body>

</html>
