<?php
    session_start();

    $_SESSION['topping_price'] = null;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['topping1'])){
            $_SESSION['Cornflakes'] = "Cornflakes";
        }
        if(isset($_POST['topping2'])){
            $_SESSION['Almond'] = "Almond";
        }
        if(isset($_POST['topping3'])){
            $_SESSION['Granola'] = "Granola";
            
        }
        if(isset($_POST['topping4'])){
            $_SESSION['Cookie'] = "Cookie";
            
        }
        if(isset($_POST['topping5'])){
            $_SESSION['Red Jelly'] = "Red Jelly";
            
        }
        if(isset($_POST['topping6'])){
            $_SESSION['Bubble'] = "Bubble";
            
        }
        if(isset($_POST['topping7'])){
            $_SESSION['Brown Sugar Konjac'] = "Brown Sugar Konjac";
            
        }
        if(isset($_POST['topping8'])){
            $_SESSION['Marshmallow'] = "Marshmallow";
            
        }
        if(isset($_POST['topping9'])){
            $_SESSION['Oatmeal'] = "Oatmeal";
            
        }
        if(isset($_POST['topping10'])){
            $_SESSION['Cashew Nuts'] = "Cashew Nuts";
            
        }
        if(isset($_POST['topping11'])){
            $_SESSION['Raisin'] = "Raisin";
            
        }
        if(isset($_POST['topping12'])){
            $_SESSION['Pipo'] = "Pipo";
            
        }
        if(isset($_POST['topping13'])){
            $_SESSION['Cocoa Crunch'] = "Cocoa Crunch";
            
        }
        if(isset($_POST['topping14'])){
            $_SESSION['Kyoho Grape Konjac'] = "Kyoho Grape Konjac";
            $_SESSION['topping_price'] = 10;
        }
        if(isset($_POST['topping15'])){
            $_SESSION['Whipped Cream'] = "Whipped Cream";
            $_SESSION['topping_price'] = 10;

        }
        if(isset($_POST['topping16'])){
            $_SESSION['Kit Kat'] = "Kit Kat";
            $_SESSION['topping_price'] = 10;
            
        }
        if(isset($_POST['topping17'])){
            $_SESSION['Strawberry'] = "Strawberry";
        }
        if(isset($_POST['topping18'])){
            $_SESSION['Banana'] = "Banana";
        }
        if(isset($_POST['topping19'])){
            $_SESSION['Kiwi'] = "Kiwi";
        }
        if(isset($_POST['topping20'])){
            $_SESSION['Blueberry'] = "Blueberry";
        }
        if(isset($_POST['topping21'])){
            $_SESSION['Mulberry'] = "Mulberry";
        }
        if(isset($_POST['topping22'])){
            $_SESSION['Mango'] = "Mango";
        }
        if(isset($_POST['topping23'])){
            $_SESSION['Avocado'] = "Avocado";
        }
        if(isset($_POST['topping24'])){
            $_SESSION['Grape'] = "Grape";
        }
        if(isset($_POST['topping25'])){
            $_SESSION['Orange'] = "Orange";
        }
        if(isset($_POST['topping26'])){
            $_SESSION['Lychee'] = "Lychee";
        }
        if(isset($_POST['topping27'])){
            $_SESSION['Apple'] = "Apple";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toppings</title>
    <link rel="stylesheet" type="text/css" href="CSS/style_4_toppings.css">
    <link rel="icon" href="css/logo.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body>
    <div class="header">
        <h1>Toppings</h1>
    </div>
    <div class="home-container">
        <a href="1_home_page.html">
            <i class="fa-solid fa-house"></i>
        </a>
    </div>
    
    <form method="post">
    <div class="toppings-container">
        <div class="toppings-item">
            <i class="fa-solid fa-cart-shopping">
            <input type="checkbox" name="topping1" value="Cornflakes"></i>
            <img src="image/Conflakes.png" alt="Cornflakes">
        </div>
        <div class="toppings-item">
            <i class="fa-solid fa-cart-shopping">
            <input type="checkbox" name="topping2" value="Almond"></i>
            <img src="image/Almonds.png" alt="Almond">
        </div>
        <div class="toppings-item">
            <img src="image/Granola.png" alt="Granola">
            <i class="fa-solid fa-cart-shopping">
            <input type="checkbox" name="topping3" value="Granola"></i>
        </div>
        <div class="toppings-item">
            <i class="fa-solid fa-cart-shopping">
            <input type="checkbox" name="topping4" value="Cookie"></i>
            <img src="image/Cookie.png" alt="Cookie">
        </div>
        <div class="toppings-item">
            <i class="fa-solid fa-cart-shopping">
            <input type="checkbox" name="topping5" value="Red Jelly"></i>
            <img src="image/RedJelly.png" alt="Red Jelly">
        </div>
        <div class="toppings-item">
            <i class="fa-solid fa-cart-shopping">
            <input type="checkbox" name="topping6" value="Bubble"></i>
            <img src="image/Bubble.png" alt="Bubble">
        </div>

        <div class="toppings-item">
            <i class="fa-solid fa-cart-shopping">
            <input type="checkbox" name="topping7" value="Brown Sugar Konjac"></i>
            <img src="image/BubbleBrown.png" alt="Brown Sugar Konjac">
        </div>
        <div class="toppings-item">
            <i class="fa-solid fa-cart-shopping">
            <input type="checkbox" name="topping8" value="Marshmallow"></i>
            <img src="image/Marshmallow.png" alt="Marshmallow">
        </div>
        <div class="toppings-item">
            <i class="fa-solid fa-cart-shopping">
            <input type="checkbox" name="topping9" value="Oatmeal"></i>
            <img src="image/OatmealT.png" alt="Oatmeal">
        </div>
        <div class="toppings-item">
            <i class="fa-solid fa-cart-shopping">
            <input type="checkbox" name="topping10" value="Cashew Nuts"></i>
            <img src="image/Cashew-nut.png" alt="Cashew Nuts">
        </div>
        <div class="toppings-item">
            <i class="fa-solid fa-cart-shopping">
            <input type="checkbox" name="topping11" value="Raisin"></i>
            <img src="image/Raisin.png" alt="Raisin">
        </div>
        <div class="toppings-item">
            <i class="fa-solid fa-cart-shopping">
            <input type="checkbox" name="topping12" value="Pipo"></i>
            <img src="image/Pipo.png" alt="Pipo">
        </div>
        <div class="toppings-item">
            <i class="fa-solid fa-cart-shopping">
            <input type="checkbox" name="topping13" value="Cocoa Crunch"></i>
            <img src="image/CocoaCrunch.png" alt="Cocoa Crunch">
        </div>
        <div class="toppings-item">
            <i class="fa-solid fa-cart-shopping">
            <input type="checkbox" name="topping14" value="Kyoho Grape Konjac"></i>
            <img src="image/KyohoGrape.png" alt="Kyoho Grape Konjac">
        </div>
        <div class="toppings-item" data-price="10฿">
            <i class="fa-solid fa-cart-shopping">
            <input type="checkbox" name="topping15" value="Whipped Cream"></i>
            <img src="image/WhippedCream.png" alt="Whipped Cream">
        </div>
        <div class="toppings-item" data-price="10฿">
            <i class="fa-solid fa-cart-shopping">
            <input type="checkbox" name="topping16" value="Kit Kat"></i>
            <img src="image/KitKat.png" alt="Kit Kat">
        </div>
        <div class="toppings-item">
            <i class="fa-solid fa-cart-shopping">
            <input type="checkbox" name="topping17" value="Strawberry"></i>
            <img src="image/StrawberryT.png" alt="Strawberry">
        </div>
        <div class="toppings-item">
            <i class="fa-solid fa-cart-shopping">
            <input type="checkbox" name="topping18" value="Banana"></i>
            <img src="image/banana.png" alt="Banana">
        </div>
        <div class="toppings-item">
            <i class="fa-solid fa-cart-shopping">
            <input type="checkbox" name="topping19" value="Kiwi"></i>
            <img src="image/Kiwi.png" alt="Kiwi">
        </div>
        <div class="toppings-item">
            <i class="fa-solid fa-cart-shopping">
            <input type="checkbox" name="topping20" value="Blueberry"></i>
            <img src="image/Blueberry.png" alt="Blueberry">
        </div>
        <div class="toppings-item">
            <i class="fa-solid fa-cart-shopping">
            <input type="checkbox" name="topping21" value="Mulberry"></i>
            <img src="image/Mulberry.png" alt="Mulberry">
        </div>
        <div class="toppings-item">
            <i class="fa-solid fa-cart-shopping">
            <input type="checkbox" name="topping22" value="Mango"></i>
            <img src="image/Mango.png" alt="Mango">
        </div>
        <div class="toppings-item">
            <i class="fa-solid fa-cart-shopping">
            <input type="checkbox" name="topping23" value="Avocado"></i>
            <img src="image/Avocado.png" alt="Avocado">
        </div>
        <div class="toppings-item">
            <i class="fa-solid fa-cart-shopping">
            <input type="checkbox" name="topping24" value="Grape"></i>
            <img src="image/Grape.png" alt="Grape">
        </div>
        <div class="toppings-item">
            <i class="fa-solid fa-cart-shopping">
            <input type="checkbox" name="topping25" value="Orange"></i>
            <img src="image/Orange.png" alt="Orange">
        </div>
        <div class="toppings-item">
            <i class="fa-solid fa-cart-shopping">
            <input type="checkbox" name="topping26" value="Lychee"></i>
            <img src="image/Lychee.png" alt="Lychee">
        </div>
        <div class="toppings-item">
            <i class="fa-solid fa-cart-shopping">
            <input type="checkbox" name="topping27" value="Apple"></i>
            <img src="image/Apple.png" alt="Apple">
        </div>
    </div>

    <div class="button-back-next">
        <a href="3_toppings.php">
            <button id="backButton">BACK</button>
        </a>
        <a href="5_sauces.php">
            <button type="submit" id="nextButton">NEXT</button>
        </a>
    </div>
    </form>

    <script>
        document.querySelectorAll('.fa-cart-shopping').forEach(item => {
            item.addEventListener('click', event => {
                const toppingsItem = event.target.closest('.toppings-item');
                if (toppingsItem) {
                    toppingsItem.classList.add('added-to-cart');
                }
            });
        });
    </script>
</body>

</html>