<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bookingphp.css">
    <title>The Astro Motel</title>
</head>
<body>
<!--FORMULAIRE-->
<section class="container">
<form method="post" action="bookingphp.php">
    <div class="row">
        <!--ADRESS-->
        <div class="col">
            <h3 class="title">billing address</h3>
            <div class="inputBox">
                <span>full name :</span>
                <input type="text" placeholder="Mohand amezien" name="fullname">
            </div>
            <div class="inputBox">
                <span>email :</span>
                <input type="email" placeholder="example@example.com" name="email">
            </div>
            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="room - street - locality" name="adress">
            </div>
            <div class="inputBox">
                <span>city :</span>
                <input type="text" placeholder="Beni Mered" name="city">
            </div>
            <div class="flex">
                <div class="inputBox">
                    <span>state :</span>
                    <input type="text" placeholder="algiers" name="state">
                </div>
                <div class="inputBox">
                    <span>zip code :</span>
                    <input type="text" placeholder="123 456" name="zipcode">
                </div>
            </div>
        </div>
        <!--PAYEMENT-->
        <div class="col">
            <h3 class="title">payment</h3>
            <div class="inputBox">
                <span>cards accepted :</span>
                <img src="../image/card_img.png" alt="">
            </div>
            <div class="inputBox">
                <span>name on card :</span>
                <input type="text" placeholder="Mohand amezien" name="nameoncard">
            </div>
            <div class="inputBox">
                <span>credit card number :</span>
                <input type="number" placeholder="1111-2222-3333-4444" name="cardnumber">
            </div>
            <div class="inputBox">
                <span>exp month :</span>
                <input type="text" placeholder="january" name="expmonth">
            </div>
            <div class="flex">
                <div class="inputBox">
                    <span>exp year :</span>
                    <input type="number" placeholder="2025" name="expyear">
                </div>
                <div class="inputBox">
                    <span>CVV :</span>
                    <input type="text" placeholder="1234" name="cvv">
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col">
                <!--OPTIONS-->
            <h3 class="title">Options</h3>
                <div class="options">
                    <span>Choose your room:</span>
                    <div class="choices room">
                    <label><input type="radio" name="room" value="1" onchange="calculatePrice()">Single</label>
                    <label><input type="radio" name="room" value="2" onchange="calculatePrice()">Double</label>
                    <label><input type="radio" name="room" value="3" onchange="calculatePrice()">Triple</label>
                    <label><input type="radio" name="room" value="4" onchange="calculatePrice()">Quad</label>
                </div>
                </div>
                <div class="options view">
                    <span>Choose your view:</span>
                    <div class="choices">
                    <input type="radio" name="view" value="Sea" onchange="calculatePrice()">Sea
                    <input type="radio" name="view" value="Montagne" onchange="calculatePrice()">Montagne
                    <input type="radio" name="view" value="Both" onchange="calculatePrice()">Both
                </div>
                </div>
                <div class="options">
                    <span>Activities you wanna try:</span>
                    <textarea name="activities"></textarea>
                </div>
        </div>
        <!--PRICE-->
        <div class="price">
            <h3>Total Price:</h3>
            <div class="tprice">
                <span id="total-price">0</span>
                <p>DZ</p>
            </div>
        </div>    
        </div>

    </div>
    <input type="submit" value="proceed to checkout" class="submit-btn">
</form>
</section> 
<script src="bookingphp.js"></script>   
</body>
</html>