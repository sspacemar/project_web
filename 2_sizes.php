<?php
    session_start();

    $_SESSION['size'] = null;
    $_SESSION['size_price'] = null;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION['size'] = $_POST['size'];

        if($_SESSION['size'] != null){
            if($_SESSION['size'] == 'Size S') {
                echo $_SESSION['size_price'] = 29;
            } elseif ($_SESSION['size'] == 'Size M') {
                $_SESSION['size_price'] = 39;
            } elseif ($_SESSION['size'] == 'Size L') {
                $_SESSION['size_price'] = 49;
            } elseif ($_SESSION['size'] == 'Size XL') {
                $_SESSION['size_price'] = 59;
            }
        }else echo "ข้อมูลไม่เข้า";
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/style_2_sizes.css">
    <link rel="icon" href="css/logo.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <title>Cup Sizes</title>
</head>

<body>
    <div class="header">
        <h1>Sizes</h1>
    </div>
    <div class="home-container">
        <a href="1_home_page.html">
            <i class="fa-solid fa-house"></i>
        </a>
    </div>
    <form method="post">
    <div class="sizes-container">
        <div class="sizes-item" name="size_s" value="Size S">
            <i class="fa-solid fa-cart-shopping">
                <input type="radio" name="size" value="Size S">
            </i>
            <img src="image/IMG_6509.png" alt="Size S (+3 Toppings)">
        </div>
        <div class="sizes-item" name="size_m" value="Size M">
            <i class="fa-solid fa-cart-shopping">
                <input type="radio" name="size" value="Size M">
            </i>
            <img src="image/IMG_6509.png" alt="Size M (+5 Toppings)">
        </div>
        <div class="sizes-item" name="size_l" value="Size L">
            <i class="fa-solid fa-cart-shopping">
                <input type="radio" name="size" value="Size L">
            </i>
            <img src="image/IMG_6509.png" alt="Size L (+6 Toppings)">
        </div>
        <div class="sizes-item" name="size_xl" value="Size XL">
            <i class="fa-solid fa-cart-shopping">
                <input type="radio" name="size" value="Size XL">
            </i>
            <img src="image/IMG_6509.png" alt="Size XL (+7 Toppings)">
        </div>
    </div>
    <!-- ปุ่ม BACK และ NEXT -->
    <div class="button-back-next">
        <a href="1_home_page.php">
            <button id="backButton">BACK</button>
        </a>
        <a href="3_flavors.php">
            <button type="submit" id="nextButton" name="next">NEXT</button>
        </a>
    </div>
</form>

    <script>
        document.querySelectorAll('.fa-cart-shopping').forEach(item => {
            item.addEventListener('click', event => {
                const sizesItem = event.target.closest('.sizes-item');
                if (sizesItem) {
                    sizesItem.classList.add('added-to-cart');
                }
            });
        });
</script>

    </script>

</body>

</html>