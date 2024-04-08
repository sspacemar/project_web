<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <link rel="stylesheet" href="CSS/style_6_cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body>
    <div class="header">
        <h1>My Cart</h1>
    </div>
    <div class="home-container">
        <a href="1_home_page.html">
            <i class="fa-solid fa-house"></i>
        </a>
    </div>
    <div class="container">
        <div class="cart-items">
            <div class="item-container">
                <?php
                    if($_SESSION['size'] == 'Size S'){
                        echo "<div class='item'>";
                        echo "<h3>Size S (+3 Toppings)</h3>";
                        echo "<p>29฿</p>";
                        echo "</div>";
                    } elseif($_SESSION['size'] == 'Size M') {
                        echo "<div class='item'>";
                        echo "<h3>Size M (+5 Toppings)</h3>";
                        echo "<p>39฿</p>";
                        echo "</div>";
                    } elseif($_SESSION['size'] == 'Size L') {
                        echo "<div class='item'>";
                        echo "<h3>Size L (+6 Toppings)</h3>";
                        echo "<p>49฿</p>";
                        echo "</div>";
                    } elseif($_SESSION['size'] == 'Size XL') {
                        echo "<div class='item'>";
                        echo "<h3>Size XL (+7 Toppings)</h3>";
                        echo "<p>49฿</p>";
                        echo "</div>";
                    }

                    if($_SESSION['flavor'] == 'Original') {
                        echo "<div class='item'>";
                        echo "<h3> Original </h3>";
                        echo "</div>";
                    } elseif($_SESSION['flavor'] == 'Mixberry') {
                        echo "<div class='item'>";
                        echo "<h3> Mixberry </h3>";
                        echo "<p>5฿</p>";
                        echo "</div>";
                    } elseif($_SESSION['flavor'] == 'Strawberry') {
                        echo "<div class='item'>";
                        echo "<h3> Strawberry </h3>";
                        echo "<p>5฿</p>";
                        echo "</div>";
                    } elseif($_SESSION['flavor'] == 'Peach') {
                        echo "<div class='item'>";
                        echo "<h3> Peach </h3>";
                        echo "<p>5฿</p>";
                        echo "</div>";
                    } elseif($_SESSION['flavor'] == 'Greek Yogurt') {
                        echo "<div class='item'>";
                        echo "<h3> Greek Yogurt </h3>";
                        echo "<p>10฿</p>";
                        echo "</div>";
                    }

                    if($_SESSION['topping1'] == 'Cornflakes') {
                        echo "<div class='item'>";
                        echo "<h3> 'Cornflakes' </h3>";
                        echo "</div>";
                    }
                    if($_SESSION['toppin2'] == 'Almond') {
                        echo "<div class='item'>";
                        echo "<h3> Almond </h3>";
                        echo "</div>";
                    }
                    if($_SESSION['topping3'] == 'Granola') {
                        echo "<div class='item'>";
                        echo "<h3> Granola </h3>";
                        echo "</div>";
                    }
                    if($_SESSION['topping4'] == 'Cookie') {
                        echo "<div class='item'>";
                        echo "<h3> Cookie </h3>";
                        echo "</div>";
                    }
                    if($_SESSION['topping5'] == 'Red Jelly') {
                        echo "<div class='item'>";
                        echo "<h3> Red Jelly </h3>";
                        echo "</div>";
                    }
                    if($_SESSION['topping6'] == 'Bubble') {
                        echo "<div class='item'>";
                        echo "<h3> Bubble </h3>";
                        echo "</div>";
                    }
                    if($_SESSION['topping7'] == 'Brown Sugar Konjac') {
                        echo "<div class='item'>";
                        echo "<h3> Brown Sugar Konjac </h3>";
                        echo "</div>";
                    }
                    if($_SESSION['topping8'] == 'Marshmallow') {
                        echo "<div class='item'>";
                        echo "<h3> Marshmallow </h3>";
                        echo "</div>";
                    }
                    if($_SESSION['topping9'] == 'Oatmeal') {
                        echo "<div class='item'>";
                        echo "<h3> Oatmeal </h3>";
                        echo "</div>";
                    }
                    if($_SESSION['topping10'] == 'Cashew Nuts') {
                        echo "<div class='item'>";
                        echo "<h3> Cashew Nuts </h3>";
                        echo "</div>";
                    }
                    if($_SESSION['topping11'] == 'Raisin') {
                        echo "<div class='item'>";
                        echo "<h3> Raisin </h3>";
                        echo "</div>";
                    }
                    if($_SESSION['topping12'] == 'Pipo') {
                        echo "<div class='item'>";
                        echo "<h3> Pipo </h3>";
                        echo "</div>";
                    }
                    if($_SESSION['topping13'] == 'Cocoa Crunch') {
                        echo "<div class='item'>";
                        echo "<h3> Cocoa Crunch </h3>";
                        echo "</div>";
                    }
                    if($_SESSION['topping14'] == 'Kyoho Grape Konjac') {
                        echo "<div class='item'>";
                        echo "<h3> Kyoho Grape Konjac </h3>";
                        echo "<p>10฿</p>";
                        echo "</div>";
                    }
                    if($_SESSION['topping15'] == 'Whipped Cream') {
                        echo "<div class='item'>";
                        echo "<h3> Whipped Cream </h3>";
                        echo "<p>10฿</p>";
                        echo "</div>";
                    }
                    if($_SESSION['topping16'] == 'Kit Kat') {
                        echo "<div class='item'>";
                        echo "<h3> Kit Kat </h3>";
                        echo "<p>10฿</p>";
                        echo "</div>";
                    }
                    if($_SESSION['topping17'] == 'Strawberry') {
                        echo "<div class='item'>";
                        echo "<h3> Strawberry </h3>";
                        echo "</div>";
                    }
                    if($_SESSION['topping18'] == 'Banana') {
                        echo "<div class='item'>";
                        echo "<h3> Banana </h3>";
                        echo "</div>";
                    }
                    if($_SESSION['topping19'] == 'Kiwi') {
                        echo "<div class='item'>";
                        echo "<h3> Kiwi </h3>";
                        echo "</div>";
                    }
                    if($_SESSION['topping20'] == 'Blueberry') {
                        echo "<div class='item'>";
                        echo "<h3> Blueberry </h3>";
                        echo "</div>";
                    }
                    if($_SESSION['topping21'] == 'Mulberry') {
                        echo "<div class='item'>";
                        echo "<h3> Mulberry </h3>";
                        echo "</div>";
                    }
                    if($_SESSION['topping22'] == 'Mango') {
                        echo "<div class='item'>";
                        echo "<h3> Mango </h3>";
                        echo "</div>";
                    }
                    if($_SESSION['topping23'] == 'Avocado') {
                        echo "<div class='item'>";
                        echo "<h3> Avocado </h3>";
                        echo "</div>";
                    }
                    if($_SESSION['topping24'] == 'Grape') {
                        echo "<div class='item'>";
                        echo "<h3> Grape </h3>";
                        echo "</div>";
                    }
                    if($_SESSION['topping25'] == 'Orange') {
                        echo "<div class='item'>";
                        echo "<h3> Orange </h3>";
                        echo "</div>";
                    }
                    if($_SESSION['topping26'] == 'Lychee') {
                        echo "<div class='item'>";
                        echo "<h3> Lychee </h3>";
                        echo "</div>";
                    }
                    if($_SESSION['topping27'] == 'Apple') {
                        echo "<div class='item'>";
                        echo "<h3> Apple </h3>";
                        echo "</div>";
                    }

                    if($_SESSION['sauce'] == 'Sweetened Condensed Milk') {
                        echo "<div class='item'>";
                        echo "<h3> Sweetened Condensed Milk </h3>";
                        echo "</div>";
                    } elseif($_SESSION['sauce'] == 'Chocolate') {
                        echo "<div class='item'>";
                        echo "<h3> Chocolate </h3>";
                        echo "</div>";
                    } elseif($_SESSION['sauce'] == 'Strawberry Jam') {
                        echo "<div class='item'>";
                        echo "<h3> Strawberry Jam </h3>";
                        echo "</div>";
                    } elseif($_SESSION['sauce'] == 'Blueberry Jam') {
                        echo "<div class='item'>";
                        echo "<h3> Blueberry Jam </h3>";
                        echo "</div>";
                    } elseif($_SESSION['sauce'] == 'Honet') {
                        echo "<div class='item'>";
                        echo "<h3> Blueberry Jam </h3>";
                        echo "<p>10฿</p>";
                        echo "</div>";
                    } elseif($_SESSION['sauce'] == 'Caramel') {
                        echo "<div class='item'>";
                        echo "<h3> Caramel </h3>";
                        echo "<p>10฿</p>";
                        echo "</div>";
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="total">
        <?php
            echo "<h3>Total</h3>"
            echo "<p id='total'>"
            if ($_SESSION['flavor'] == 'Mixberry') {
                echo $_SESSION['size'] + $_SESSION['flavor'] + $_SESSION['topping'] + $_SESSION['sauce'];

            } elseif ($_SESSION['flavor'] == 'Strawberry') {
                echo $_SESSION['size'] + $_SESSION['flavor'] + $_SESSION['topping'] + $_SESSION['sauce'];

            } elseif ($_SESSION['flavor'] == 'Peach') {
                echo $_SESSION['size'] + $_SESSION['flavor'] + $_SESSION['topping'] + $_SESSION['sauce'];
                
            } elseif ($_SESSION['flavor'] == 'Peach') {
                echo $_SESSION['size'] + $_SESSION['flavor'] + $_SESSION['topping'] + $_SESSION['sauce'];
                
            } elseif ($_SESSION['flavor'] == 'Peach') {
                echo $_SESSION['size'] + $_SESSION['flavor'] + $_SESSION['topping'] + $_SESSION['sauce'];
                
            }
            else {
                echo $_SESSION['size'] + $_SESSION['flavor'] + $_SESSION['topping'] + $_SESSION['sauce'];
            }
            </p>
        ?>
    </div>
    <div class="button-back-next">
        <a href="5_sauces.php">
            <button id="backButton">BACK</button>
        </a>
        <a href="7_summary.php">
            <button id="nextButton">ADD</button>
        </a>
    </div>
    <script src="JS/script.js"></script>
</body>

</html>