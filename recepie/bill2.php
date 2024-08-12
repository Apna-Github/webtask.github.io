<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Menu with Image Buttons</title>
    <link rel="stylesheet" href="style10.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    

    <!-- <div class="navbar" > -->
        <!--nav Bar Section-->
        <nav>
            <a href="food1.html"><img src="../recepie/image/Developer Dude.png" alt=""><img src="../recepie/image/Rp name.png" alt=""></a>

            <div class="nav-links"  id="navLinks">
                <ul class="links">
                    <li><a href="../food1.php">HOME</a></li>
                    <li><a href="../About.php">ABOUT</a></li>
                    <li><a href="../food_menu.php">Food Menu</a></li>
                    <li><a href="../BookTable.php">Book Table</a></li>
                </ul>
            </div>



            <div class="Search_icon">
                <a href="#"><i class="fa-solid fa-house"></i></a>
                <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                <a href="#"><i class="fa-solid fa-user"></i></a>
            </div>
            <!-- <i  class="fa-solid fa-bars" ></i> -->
        </nav>
    <pre>
        <h1><b>MRUTUANJAY HOTEL</b></h1>
        <button class="back-button" onclick="goBack()">Back</button>
    </pre>   
    
    </div>

<div class="main">
    
    <h1>Select what you want</h1>

<div class="food_menu">
    <div class="image-buttons">
        <div class="menu_col">
            <img src="../recepie/image/pizza.jpeg" alt="classic_pizza" data-price="80" onclick="toggleSelection('classic_pizza', 80)">
            <h2>$80</h2>
            <p>classic_pizza</p>
        </div>
        <div class="menu_col">
            <img src="../recepie/image/pizza1.jpeg" alt="Special_pizza" data-price="120" onclick="toggleSelection('Special_pizza', 120)">
            <h2>$120</h2>
            <p>Special_pizza</p>
        </div>
        <div class="menu_col">
            <img src="../recepie/image/pizza6.jpeg" alt="jalapeno_pizza" data-price="150" onclick="toggleSelection('jalapeno_pizza', 150)">
            <h2>$150</h2>
            <p>jalapeno_pizza</p>
        </div>
        <div class="menu_col">
            <img src="../recepie/image/pizza3.jpeg" alt="Crispy_pizza" data-price="40" onclick="toggleSelection('Crispy_pizza', 40)">
            <h2>$40</h2>
            <p>Crispy_pizza</p>
        </div>
        <div class="menu_col">
            <img src="../recepie/image/pizza2.jpeg" alt="Truffle_pizza" data-price="20" onclick="toggleSelection('Truffle_pizza', 20)">
            <h2>$20</h2>
            <p>Truffle_pizza</p>
        </div>
    </div>
</div>
  

    <div id="selectedOptions" class="selected-options">
        <!-- Selected options will be displayed here -->
    </div>

    <div id="quantitySelectors" class="quantity-selector">
        <!-- Quantity selectors will be displayed here -->
    </div>

    <div id="totalBill" class="bill">
        <!-- Total bill will be displayed here -->
    </div>

    <div class="payment-options">
        <button onclick="pay('online')">Pay Online</button>
        <button onclick="pay('cash')">Pay Cash</button>
    </div>

    <button onclick="printBill()" class="bill_btn">Print Bill</button>

    <script src="bill.js"></script>
    <script>
        function goBack(){
            window.location.href="../food_menu.php";
        }

    </script>
</div>
</body>
</html>
