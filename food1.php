<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restorent Food Ordering..</title>
    <link rel="stylesheet" href="food1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section class="header">
        <!--nav Bar Section-->
        <nav>
            <a href="food1.html"><img src="../Restorent/restorent/Developer Dude.png" alt=""><img src="../Restorent/restorent/Rp name.png" alt=""></a>

            <div class="nav-links"  id="navLinks">
                <ul class="links">
                    <li><a href="food1.php">HOME</a></li>
                    <li><a href="About.php">ABOUT</a></li>
                    <li><a href="food_menu.php">Food Menu</a></li>
                    <li><a href="BookTable.php">Book Table</a></li>
                </ul>
            </div>


            <div class="Search_icon">
                <a href="food1.php"><i class="fa-solid fa-house"></i></a>
                <a href="google.com"><i class="fa-solid fa-magnifying-glass"></i></a>
                <!-- <a href="#"><i class="fa-solid fa-user"></i></a> -->
                <a href="registration.php" style="color:red; text-decoration:none;">Log_Out</a>
            </div>
            <!-- <i  class="fa-solid fa-bars" ></i> -->
        </nav>



        <!-- Main Body Section-->

        <div class="content">
            <div class="left">
                <h1>Enjoy <span>Delicious<br> Food</span> in Your <br>Healthy Life</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam assumenda facere <br>laborum esse debitis odit nihil ipsam voluptas obcaecati praesentium dolor blanditiis, <br>rerum iusto accusantium? Obcaecati, modi qui! Distinctio, cupiditate?</p>
                <button class="btn"><a href="food_menu.php" style="text-decoration:none; color:#000;">Visit Now ></a></button>
            </div>
            <div class="right">
                <img src="../Restorent/restorent/food1.jpeg" alt="">
                 <!-- <img src="../Restorent/image/veg4.jpeg" alt=""> -->
            </div>
        </div>


    <!--Breack fasts Section-->
    <div class="items">
        <div class="item1">
            <img src="../Restorent/image/tea2.jpeg" alt="">
            <h3>Drinks</h3>
            <p>Lorem ipsum dolor sit amet <br>consectetur adipisicing <br>elit. Atque, sit.</p>
            <button class="btn" onclick="goNextMenu()">See Items</button>
        </div>
        <div class="item2">
            <img src="../Restorent/image/nashta1.jpeg" alt="">
            <h3>Break fast</h3>
            <p>Lorem ipsum dolor sit amet <br>consectetur adipisicing <br>elit. Atque, sit.</p>
            <button class="btn" onclick="goNextMenu1()">See Items</button>
        </div>
        <div class="item3">
            <img src="../Restorent/image/panir4.jpeg" alt="">
            <h3>Lunch</h3>
            <p>Lorem ipsum dolor sit amet <br>consectetur adipisicing <br>elit. Atque, sit.</p>
            <button class="btn">See Items</button>
        </div>
    </div>


    <!---third part   ==  why Peopele choose us-->
    <div class="facility">
        <div class="left">
            <img src="../Restorent/restorent/food1.jpeg" alt="">
        </div>
        <div class="right">
            <h1>Why People Choose Us?</h1>

            <div class="first">
                <img src="../Restorent/image/tea3.jpeg" alt="">
                <div class="content">
                    <h3>Choose Your Favorite</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum assumenda atque nulla sunt autem voluptas.</p>
                </div>
            </div>

            <div class="first">
                <img src="../Restorent/image/cake1.jpeg" alt="">
                <div class="content">
                    <h3>Choose Your Favorite</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum assumenda atque nulla sunt autem voluptas.</p>
                </div>
            </div>

            <div class="first">
                <img src="../Restorent/image/panir5.jpeg" alt="">
                <div class="content">
                    <h3>Choose Your Favorite</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum assumenda atque nulla sunt autem voluptas.</p>
                </div>
            </div>         
        </div>
    </div>

    <!-- Our Popular Food Items Section ==>Third part -->
     <section class="PopFood">
        <h2>Our Popular Food Items</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Quasi, illum adipisci! Error unde iusto eius.</p>

        <div class="row">

            <div class="PopFood_col" onclick="goNextMenu11()">
                <a href="#"><img src="../Restorent/image/tea.jpeg" alt=""></a>
                <h3>Green Tea</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, voluptatum!</p>
                <h4>$35.50</h4>
            </div>

            <div class="PopFood_col" onclick="goNextMenu22()">
                <a href="#"><img src="../Restorent/image/lassi6.jpeg" alt=""></a>
                <h3>Mastani Lassi</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, voluptatum!</p>
                <h4>$10.1</h4>
            </div>

            <div class="PopFood_col" onclick="goNextMenu33()">
                <a href="#"><img src="../Restorent/image/sweet4.jpeg" alt=""></a>
                <h3>Motichur_Laddu</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, voluptatum!</p>
                <h4>$40</h4>
            </div>

            <div class="PopFood_col" onclick="goNextMenu44()">
                <a href="#"><img src="../Restorent/image/panir5.jpeg" alt=""></a>
                <h3>Panir_Tikka</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, voluptatum!</p>
                <h4>$60.5</h4>
            </div>
        </div>
     </section>


     <!--Customer Feedback-->
     <section class="feedback">
        <div class="leftInfo">
            <h1>Customer <span>Feedback</span></h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus minus explicabo omnis quos <br>sapiente, iusto excepturi voluptas eligendi, mollitia delectus, inventore dolor illum tempora<br> quis. Dicta odio quo vitae commodi fuga, harum dolores dolorum voluptate vel obcaecati, <br>expedita quisquam voluptatem adipisci eveniet sequi nihil nemo nulla ipsam veritatis omnis ab <br>maiores earum? Ea inventore ratione praesentium iure ipsam veritatis quae molestiae vel. <br>Quasi corrupti id amet esse dolore velit provident!</p>
            <a href="food1.html"><img src="../Restorent/restorent/Developer Dude.png" alt=""><img src="../Restorent/restorent/Rp name.png" alt=""></a>
        </div>

        <div class="rightInfo">
            <img src="../Restorent/restorent/chef1.jpeg" alt="">
        </div>
     </section>

     <!--Footer Section-->
<div class="last">
     <section class="footer">
        <div class="first-foot">
            <a href="">Privacy Policy  |</a>
            <a href="">Terms & Conditions |</a>
            <a href="">FAQ |</a>
            <a href=""><i class="fa-brands fa-facebook"></i> |</a>    
            <a href=""><i class="fa-brands fa-twitter"></i> |</a>   
            <a href=""><i class="fa-brands fa-square-instagram"></i> |</a>    
            <a href=""><i class="fa-brands fa-linkedin"></i></a>    
        </div>
        <div class="second-foot">
            <p>Copyright  2024 Mauli Cabs. All rights reserved. Developed by <br>Dexter Intelligence | Hosted By Urva Hosting</p>
        </div>
    </section>
</div>

</section>

    <!--JavaScript for Toggle Menu-------------->

    <script>

        //  var navLinks = document.getElementById("navLinks");
        //  function showMenu(){
        //     navLinks.style.right = "0";
        //  }
        //  function hideMenu(){
        //     navLinks.style.right = "-200px";
        //  }

        function goNextMenu(){
            window.location.href="../Restorent/recepie/bill5.php";
        }

        function goNextMenu1(){
            window.location.href="../Restorent/recepie/bill6.php";
        }

        function goNextMenu2(){
            window.location.href="../Restorent/recepie/bill4.php";
        }


        //Our Favourte Items
        function goNextMenu11(){
            window.location.href="../Restorent/recepie/bill5.php";
        }
        function goNextMenu22(){
            window.location.href="../Restorent/recepie/bill11.php";
        }
        function goNextMenu33(){
            window.location.href="../Restorent/recepie/bill10.php";
        }
        function goNextMenu44(){
            window.location.href="../Restorent/recepie/bill4.php";
        }


    </script>


</body>
</html>
