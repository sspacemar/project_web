<?php
    session_start();

    $_SESSION['sauce'] = null;
    $_SESSION['sauce_price'] = null;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION['sauce'] = $_POST['sauce'];

    if (isset($_SESSION['sauce']) && $_SESSION['sauce'] != null) {
        if ($_SESSION['sauce'] == 'Sweetened Condensed Milk') {
        } elseif ($_SESSION['sauce'] == 'Chocolate') {

        } elseif ($_SESSION['sauce'] == 'Strawberry Jam') {

        } elseif ($_SESSION['sauce'] == 'Blueberry Jam') {

        } elseif ($_SESSION['sauce'] == 'Honey') {
            $_SESSION['sauce_price'] = 10;
        } elseif ($_SESSION['sauce'] == 'Caramel') {
            $_SESSION['sauce_price'] = 10;
        }
    } else {
        echo "ข้อมูลไม่เข้า";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/style_5_sauces.css">
    <link rel="icon" href="css/logo.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <title>Sauce</title>
</head>

<body>
    <div class="header">
        <h1>Sauce</h1>
    </div>
    <div class="home-container">
        <a href="1_home_page.html">
            <i class="fa-solid fa-house"></i>
        </a>
    </div>

    <form method="post">

    <div class="sauces-container">
        <div class="sauces-item">
            <i class="fa-solid fa-cart-shopping">
            <input type="radio" name="sauce" value="Sweetened Condensed Milk"></i>
            </i>
            <img src="image/milk.png" class="imgMilk">
        </div>
        <div class="sauces-item">
            <i class="fa-solid fa-cart-shopping">
            <input type="radio" name="sauce" value="Chocolate"></i>
            <img src="image/Chocolate.png"
                class="imgChoc">
        </div>
        <div class="sauces-item">
            <i class="fa-solid fa-cart-shopping">
            <input type="radio" name="sauce" value="Strawberry Jam"></i>
            </i>
            <img src="image/STjam.png"
                class="imgSTjam">
        </div>
        <div class="sauces-item">
            <i class="fa-solid fa-cart-shopping">
            <input type="radio" name="sauce" value="Blueberry Jam"></i>
            </i>
            <img src="image/BJam.png" class="imgBjam">
        </div>
        <div class="sauces-item">
            <i class="fa-solid fa-cart-shopping">
            <input type="radio" name="sauce" value="Honey"></i>
            </i>
            <img src="image/Honey.png"
                class="imgHoney">
        </div>
        <div class="sauces-item">
            <i class="fa-solid fa-cart-shopping">
            <input type="radio" name="sauce" value="Caramel"></i>
            </i>
            <img src="image/Caramel.png"
                class="imgCaramel">
        </div>
    </div>

    <div class="button-back-next">
        <a href="4_sauces.php">
            <button id="backButton">BACK</button>
        </a>
        <a href="6_cart.php">
            <button type="submit" id="nextButton">NEXT</button>
        </a>
    </div>
</form>
    <script>
        document.querySelectorAll('.fa-cart-shopping').forEach(item => {
            item.addEventListener('click', event => {
                const saucesItem = event.target.closest('.sauces-item');
                if (saucesItem) {
                    saucesItem.classList.add('added-to-cart');
                }
            });
        });
    </script>
</body>
</html>