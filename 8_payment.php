<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="CSS/style_8_payment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body>
    <div class="home-container">
        <a href="1_home_page.html">
            <i class="fa-solid fa-house"></i>
        </a>
    </div>
    <div class="price">
        <h1>78฿</h1>
    </div>
    <div class="pay-container">
        <a href="9_cash.html">
            <div class="pay-item Cash">
                <img src="image/cash.png"
                    class="imgCash">
                <p>Cash</p>
            </div>
        </a>
        <a href="10_qrcode.html">
            <div class="pay-item Qrcode">
                <img src="image/qr-code.png"
                    class="imgQR">
                <p>ORcode</p>
            </div>
        </a>
        <a href="11_truemoney.php">
            <div class="pay-item Truemoney">
                <img src="image/truemoney.png"
                    class="imgTMN">
                <p>TrueMoney</p>
            </div>
        </a>
    </div>
    <div class="button-back">
        <a href="7_summary.php">
            <button id="backButton">BACK</button>
        </a>
    </div>
    <script src="JS/script.js"></script>
</body>

</html>
