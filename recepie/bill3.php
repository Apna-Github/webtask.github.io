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
            <img src="../recepie/image/drink.jpeg" alt="capetchino" data-price="40" onclick="toggleSelection('capetchino', 40)">
            <h2>$40</h2>
            <p>capetchino</p>
        </div>
        <div class="menu_col">
            <img src="../recepie/image/drink1.jpeg" alt="ice_cold" data-price="80" onclick="toggleSelection('ice_cold', 80)">
            <h2>$80</h2>
            <p>ice_cold</p>
        </div>
        <div class="menu_col">
            <img src="../recepie/image/drink2.jpeg" alt="Flavour" data-price="30" onclick="toggleSelection('Flavour', 30)">
            <h2>$30</h2>
            <p>Flavour</p>
        </div>
        <div class="menu_col">
            <img src="../recepie/image/drink3.jpeg" alt="Lemon_drink" data-price="50" onclick="toggleSelection('Lemon_drink', 50)">
            <h2>$50</h2>
            <p>Lemon_drink</p>
        </div>
        <div class="menu_col">
            <img src="../recepie/image/drink5.jpeg" alt="Pepsi" data-price="15" onclick="toggleSelection('Pepsi', 15)">
            <h2>$15</h2>
            <p>Pepsi</p>
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
