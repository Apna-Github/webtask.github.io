<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Table Page</title>
    <link rel="stylesheet" href="BookTable.css">
</head>
<body>
    <section class="Booktable"></section>
        <div class="contain">
            <div class="info2">
                <h1>Book Your Table</h1>
                <img src="../Restorent/restorent/cross2.jpeg" onclick="redirect()" alt="">
            </div>

            <form class="post-form" action="savedata.php" method="post" >

                <div class="name" class="form-group"><br>
                    <p>Name</p>
                    <input type="text" name="name" class="form-contrl1" placeholder="Full Name*" required>
                </div>
    
                <div class="email" class="form-group"><br>
                    <p>E-mail</p>
                    <input type="email" name="email"  class="form-contrl2" placeholder="E-mail*" required>
                </div>
    
                <div class="date" class="form-group"><br>
                    <p>Date</p>
                    <input type="date" name="date" class="form-contrl3" required placeholder="mm/dd/yyyy*">
                </div>
    
    
                <div class="time" class="form-group">
                    <p>Time</p>
                    <input type="time" name="time" class="form-contrl4" required placeholder="--:-- --">
                </div>

                <!-- <button class="btn">Book Now</button> -->

                <!-- <input class="submit" type="submit" value="Save"  /> -->
                <div class="container">
                <button onclick="openPopup()"  type="submit" value="Save"  class="btn" >Submit</button>
                <div class="popup" id="popup">
                    <img src="../Restorent/restorent/check1.jpeg" alt="">
                    <h2>thank you!</h2>
                    <p>Your Order hase been Booked. Thanks!</p>
                    <button type="button" onclick="closePopup()">OK</button>
                </div>
           

                
            </form>

            </div>  
        </div>
    
        <script>
            let popup = document.getElementById("popup");
    
            function openPopup(){
                popup.classList.add("open-popup");
            }
            function closePopup(){
                popup.classList.remove("open-popup");
            }

            
        </script>

        <script>
            function redirect(){
                window.location.href="food1.php";
            }
        </script>
</body>
</html>