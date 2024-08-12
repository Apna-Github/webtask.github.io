<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us Page</title>
    <link rel="stylesheet" href="food_menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section class="header">
        <!--nav Bar Section-->
        <nav>
            <a href="food_menu.html"><img src="../Restorent/restorent/Developer Dude.png" alt=""><img src="../Restorent/restorent/Rp name.png" alt=""></a>

            <div class="nav-links"  id="navLinks">
                <ul class="links">
                    <li><a href="food1.php">HOME</a></li>
                    <li><a href="About.php">ABOUT</a></li>
                    <li><a href="food_menu.php">Food Menu</a></li>
                    <li><a href="BookTable.php">Book Table</a></li>
                </ul>
            </div>



            <div class="Search_icon">
                <a href="#"><i class="fa-solid fa-house"></i></a>
                <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                <a href="#"><i class="fa-solid fa-user"></i></a>
            </div>
            <!-- <i  class="fa-solid fa-bars" ></i> -->
        </nav>

        <!---Food menu Section------------>

        
        <section class="food_menu">
            <h1>Food Menu</h1>

            <!---First row-->

            <div class="row">
                <div class="menu_col" onclick="goNextMenu()">
                    <img src="../Restorent/recepie/image/cake6.jpeg" alt="food item">
                    <h3>Cake's</h3>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <h2>$15.00</h2>
                </div>

                <div class="menu_col" onclick="goNextMenu2()">
                    <img src="../Restorent/recepie/image/pizza6.jpeg" alt="food item">
                    <h3>Pizza</h3>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <h2>$30.00</h2>
                </div>

                <div class="menu_col" onclick="goNextMenu3()">
                    <img src="../Restorent/recepie/image/drink3.jpeg" alt="food item">
                    <h3>Cold Drinks</h3>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <h2>$50.00</h2>
                </div>

                <div class="menu_col" onclick="goNextMenu4()">
                    <img src="../Restorent/recepie/image/panir5.jpeg" alt="food item">
                    <h3>Food</h3>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <h2>$5.00</h2>
                </div>
            </div>

            <!---second row-->
            
            <div class="row">
                <div class="menu_col" onclick="goNextMenu5()">
                    <img src="../Restorent/recepie/image/tea3.jpeg" alt="food item">
                    <h3>Tea</h3>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <h2>$20.00</h2>
                </div>

                <div class="menu_col" onclick="goNextMenu6()">
                    <img src="../Restorent/recepie/image/nashta1.jpeg" alt="food item">
                    <h3>Break Fast</h3>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <h2>$25.50</h2>
                </div>

                <div class="menu_col" onclick="goNextMenu7()">
                    <img src="../Restorent/recepie/image/n-veg6.jpeg" alt="food item">
                    <h3>Non-Veg</h3>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <h2>$10.00</h2>
                </div>

                <div class="menu_col" onclick="goNextMenu8()">
                    <img src="../Restorent/recepie/image/ice.jpeg" alt="food item">
                    <h3>Ice Cream</h3>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <h2>$Free</h2>
                </div>
            </div>


            <!---third row-->
            
            <div class="row">
                <div class="menu_col" onclick="goNextMenu9()">
                    <img src="../Restorent/recepie/image/wefers4.jpeg" alt="food item">
                    <h3>Wefair's</h3>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <h2>$18.00</h2>
                </div>

                <div class="menu_col" onclick="goNextMenu10()">
                    <img src="../Restorent/recepie/image/sweet.jpeg" alt="food item">
                    <h3>Sweet</h3>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <h2>$55.00</h2>
                </div>

                <div class="menu_col" onclick="goNextMenu11()">
                    <img src="../Restorent/recepie/image/lassi1.jpeg" alt="food item">
                    <h3>Lassi</h3>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <h2>$100.00</h2>
                </div>

                <div class="menu_col" onclick="goNextMenu12()">
                    <img src="../Restorent/recepie/image/juice3.jpeg" alt="food item">
                    <h3>Juice's</h3>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <h2>$19.00</h2>
                </div>
            </div>
        </section>

        <div class="shadowTable">
            <div class="foot">
               <div class="left">
                   <a href="food_menu.html"><img src="../Restorent/restorent/Developer Dude.png" alt=""><img src="../Restorent/restorent/Rp name.png" alt=""></a>
                   <p>G-mail: <a href="mailto:ramphapal03@gmail.com?cc=bansodesubodh358@gmail.com&subject=hello world &body=this is just testing">restorent@1728Gmail.com</a><br>pho_ no: 7482938374<br>Lorem ipsum, dolor sit<br> amet consectetur adipisicing<br> elit. Maxime, suscipit?</p>
               </div>
               <div class="right">
                   <a href="food_menu.html"><img src="../Restorent/restorent/Rp name.png" alt=""></a>
                   <h3>Powered By Rameshwar Phapal</h3>
               </div>
            </div>
        </div>
    </section>    

    <script>
    function goNextMenu(){
            window.location.href="../Restorent/recepie/bill.php";
    }

    function goNextMenu2(){
            window.location.href="../Restorent/recepie/bill2.php";
    }

    function goNextMenu3(){
            window.location.href="../Restorent/recepie/bill3.php";
    }

    function goNextMenu4(){
            window.location.href="../Restorent/recepie/bill4.php";
    }

    function goNextMenu5(){
            window.location.href="../Restorent/recepie/bill5.php";
    }

    function goNextMenu6(){
            window.location.href="../Restorent/recepie/bill6.php";
    }

    function goNextMenu7(){
            window.location.href="../Restorent/recepie/bill7.php";
    }

    function goNextMenu8(){
            window.location.href="../Restorent/recepie/bill8.php";
    }

    function goNextMenu9(){
            window.location.href="../Restorent/recepie/bill9.php";
    }

    function goNextMenu10(){
            window.location.href="../Restorent/recepie/bill10.php";
    }

    function goNextMenu11(){
            window.location.href="../Restorent/recepie/bill11.php";
    }

    function goNextMenu12(){
            window.location.href="../Restorent/recepie/bill12.php";
    }
    </script>
        
</body>
</html>