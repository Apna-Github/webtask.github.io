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
            <img src="../recepie/image/panir6.jpeg" alt="panir_tadka" data-price="30" onclick="toggleSelection('panir_tadka', 30)">
            <h2>$30</h2>
            <p>panir_tadka</p>
        </div>
        <div class="menu_col">
            <img src="../recepie/image/panir1.jpeg" alt="panir" data-price="40" onclick="toggleSelection('panir', 40)">
            <h2>$40</h2>
            <p>panir</p>
        </div>
        <div class="menu_col">
            <img src="../recepie/image/panir5.jpeg" alt="panir_cheez" data-price="50" onclick="toggleSelection('panir_cheez', 50)">
            <h2>$50</h2>
            <p>panir_cheez</p>
        </div>
        <div class="menu_col">
            <img src="../recepie/image/panir3.jpeg" alt="panir_tika" data-price="60" onclick="toggleSelection('panir_tika', 60)">
            <h2>$60</h2>
            <p>panir_tika</p>
        </div>
        <div class="menu_col">
            <img src="../recepie/image/panir4.jpeg" alt="panir_masala" data-price="80" onclick="toggleSelection('panir_masala', 80)">
            <h2>$80</h2>
            <p>panir_masala</p>
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
