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
            <img src="../recepie/image/ice5.jpeg" alt="Nutty_Delight" data-price="50" onclick="toggleSelection('Nutty_Delight', 50)">
            <h2>$50</h2>
            <p>Nutty_Delight</p>
        </div>
        <div class="menu_col">
            <img src="../recepie/image/ice2.jpeg" alt="Mint_Magic" data-price="20" onclick="toggleSelection('Mint_Magic', 20)">
            <h2>$20</h2>
            <p>Mint_Magic</p>
        </div>
        <div class="menu_col">
            <img src="../recepie/image/ice.jpeg" alt="Vanilla_Bean_Delight" data-price="30" onclick="toggleSelection('Vanilla_Bean_Delight', 30)">
            <h2>$30</h2>
            <p>Vanilla_Bean_Delight</p>
        </div>
        <div class="menu_col">
            <img src="../recepie/image/ice6.jpeg" alt="Choco_Bliss" data-price="15" onclick="toggleSelection('Choco_Bliss', 15)">
            <h2>$15</h2>
            <p>Choco_Bliss</p>
        </div>
        <div class="menu_col">
            <img src="../recepie/image/ice4.jpeg" alt="Berry_Dream" data-price="20" onclick="toggleSelection('Berry_Dream', 20)">
            <h2>$20</h2>
            <p>Berry_Dream</p>
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
