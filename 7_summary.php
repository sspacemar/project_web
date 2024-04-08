<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style_7_summary.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <title>Summary</title>
<body>
    <script>

    </script>
    <div class="left-layout">
        <img src="image/yogurt.jpg">
    </div>

    <div class="right-layout">
        <div class="home-container">
            <a href="1_home_page.html">
                <i class="fa-solid fa-house"></i>
            </a>
        </div>
        <div class="container">
            <div class="summary">
                <h1>Summary</h1>
            </div>

            <hr>

            <div class="order-details">
                <div class="order">
                    <i class="fa-solid fa-1"></i>
                    <p> Size S (+3 Toppings) <span class="order-price">34฿</span><br>
                        Banana, cornflakes, cookies<br>
                        Chocolate</p>
                </div>
                <div class="order">
                    <i class="fa-solid fa-2"></i>
                    <p>Size S (+3 Toppings) <span class="order-price">44฿</span><br>
                        Strawberry, Almond, Wipcream<br>
                        Honey</p>
                </div>
            </div>

            <div class="total">
                <p>Total</p>
                <div class="price">
                    <p>78฿</p>
                </div>
            </div>

            <div class="delivery-options">
                <input type="radio" id="dine-in" name="delivery-option" value="dine-in">
                <label for="dine-in">Dine In</label>
                
                <input type="radio" id="take-out" name="delivery-option" value="take-out">
                <label for="take-out">Take Out</label>
            </div>

            <div class="button-container">
                <a href="2_sizes.php">
                    <button class="button order-more">ORDER MORE</button>
                </a>
                <a href="8_payment.php">
                    <button class="button pay">PAY</button>
                </a>
            </div>
        </div>

        <div class="button-back">
            <a href="6_cart.php">
                <button id="backButton">BACK</button>
            </a>
        </div>
    </div>
    <script src="JS/script.js"></script>
</body>

</html>
