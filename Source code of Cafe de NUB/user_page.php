<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe de NUB</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <link rel="stylesheet"  href="style.css">
    

</head>
<body>

<!--Header starts-->
<header>

    <a href="#" class="logo"><img src="logo.jpg"></a>

        <nav class="navbar">
            <a class="active" href="#home">home</a>
            <a href="#menu">menu</a>
            <a href="#dishes">dishes</a>
            <a href="#order">order</a>
            <a href="#about">about</a>
            <a href="#logout">logout</a>

            
        </nav>
 
        <div class="icons">
            <i class="fas fa-bars" id="bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a class="fas fa-shopping-cart"></a>
            
        </div>




</header>

<!--header ends-->

<!-- search form-->

<form action="" id="search-form">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>
 





<!--Home section starts-->

<section>
    <section class= "home" id="home" >

        <div class="swiper-container home-slider">
    
            <div class="swiper-wrapper wrapper">
    
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish</span>
                        <h3>chow Mein</h3>
                       <p>Try this one.</p>
                       <span>TK 15.99</span>
                        
                            <a href="#" class="btn">order</a>
                    </div>
                        <div class="image">
                            <img src="chowmin.jpg" alt="">
                        </div>
                </div>
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish</span>
                        <h3>Fried Rice</h3>
                        <p>Try this one.</p>
                        <span>TK 15.99</span>
                            <a href="#" class="btn">order</a>
                    </div>
                        <div class="image">
                            <img src="friedrice3.jpg" alt="">
                        </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish</span>
                        <h3>kung pao chicken</h3>
                       <p>Try this one.</p>
                       <span>TK 15.99</span>
                        
                            <a href="#" class="btn">order</a>
                    </div>
                        <div class="image">
                            <img src="kung pao chicken.jpg" alt="">
                        </div>
                </div>
    
            
            </div>
        
         <div class="swiper-pagination"></div>

     </div>

    </section>
    
</section>
<!--Home section ends-->

<!--Menu section starts-->
<section class="menu" id="menu">

        <h3 class="sub-heading"> our menu </h3>
        <h3 class="heading"> special </h3>

        <div class="box-container">

           <div class="box">
                <div class="image">
                    <img src="special.jpg" alt="">
                   
                </div>
                <div class="content">
                    <h3>chicken</h3>
                    <p>Give it a shot</p>
                    <span class="price">TK 10.99</span>
                    <a href="#" class="btn">add to cart</a>
                    
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="special1.jpg" alt="">
                   
                </div>
                <div class="content">
                    <h3>momos</h3>
                    <p>Give it a shot</p>
                    <span class="price">TK 10.99</span>
                    <a href="#" class="btn">add to cart</a>
                    
                </div >
            </div>

            <div class="box">
                <div class="image">
                    <img src="special2.jpg" alt="">
                   
                </div>
                <div class="content">
                    <h3>chicken biriyani</h3>
                    <p>Give it a shot</p>
                    <span class="price">TK 10.99</span>
                    <a href="#" class="btn">add to cart</a>
                    
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="special3.jpg" alt="">
                   
                </div>
                <div class="content">
                    <h3>Pastry</h3>
                    <p>Give it a shot</p>
                    <span class="price">TK 10.99</span>
                    <a href="#" class="btn">add to cart</a>
                    
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="special5.jpg" alt="">
                   
                </div>
                <div class="content">
                    <h3>refreshment</h3>
                    <p>Give it a shot</p>
                    <span class="price">TK 10.99</span>
                    <a href="#" class="btn">add to cart</a>
                    
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="special6.jpg" alt="">
                   
                </div>
                <div class="content">
                    <h3>black tea</h3>
                    <p>Give it a shot</p>
                    <span class="price">TK 10.99</span>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="special7.jpg" alt="">

                </div>
                <div class="content">
                    <h3>hot chocolate coffee</h3>
                    <p>Give it a shot</p>
                    <span class="price">TK 10.99</span>
                    <a href="#" class="btn">add to cart</a>
                    
                </div>
            </div>

        </div>

    </section>

<!--Menu section ends-->


<!--Dishes section starts-->
<section class="dishes" id="dishes">

    <h3 class="sub-heading"> our dishes </h3>
    <h3 class="heading"> popular items </h3>

    <div class="box-container">

        <div class="box">
           
            <img src="burger.jpg" alt="">
            <h3>burger</h3>
            <span>TK 15.99</span>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box">
           
            <img src="Chicken-fry.jpg" alt="">
            <h3>chicken fry</h3>
            <span>TK 15.99</span>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box">
           
            <img src="chicken-drumsticks.jpg" alt="">
            <h3>spicy chicken</h3>
            <span>TK 15.99</span>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box">
           
            <img src="chicken-rice-bowl.jpg" alt="">
            <h3>chicken rice bowl</h3>
            <span>TK 15.99</span>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box">
          
            <img src="fries.jpg" alt="">
            <h3>fries</h3>
            <span>TK 15.99</span>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box">
           
            <img src="pasta.jpg" alt="">
            <h3>pasta</h3>
            <span>TK 15.99</span>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box">
        
            <img src="prawn-spicy-soup.jpg" alt="">
            <h3>prawn spicy soup</h3>
            <span>TK 15.99</span>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box">
            
            <img src="pizza.jpg" alt="">
            <h3>pizza</h3>
            <span>TK 15.99</span>
            <a href="#" class="btn">add to cart</a>

        </div>
    </div>
 </div>



</section>

<!--Dishes section ends-->


<!--Order section starts-->
    <section class="order" id="order">
        <h3 class="sub-heading"> order now</h3>
        <h3 class="heading"> free & fast </h3>

    <form action="">
        <div class="inputBox">
            <div class="input">
                <span>your name</span>
                <input type="text" placeholder="enter your name">
            </div>
            <div class="input">
                <span>your id</span>
                <input type="number" placeholder="enter your id">
            </div>
        </div>

        <div class="inputBox">
            <div class="input">
                <span>your order</span>
                <input type="text" placeholder="enter food name">
            </div>
            <div class="input">
                <span>additional food</span>
                <input type="test" placeholder="extra with food">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>how much</span>
                <input type="number" placeholder="how many orders">
            </div>
            <div class="input">
                <span>date and time</span>
                <input type="datetime-local">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>your address</span>
                <textarea name="" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="input">
                <span>your message</span>
                <textarea name="" placeholder="enter your massage" id="" cols="30" rows="10"></textarea>
            </div>
        </div>
        <input type="submit" value="order now" class="btn">
    </form>    

    </section>
<!--Order section ends-->


<!--About section starts-->
<section class="about" id="about">
    <h3 class="sub-heading"> about us</h3>
    <h3 class="heading"> why choose us </h3>

    <div class="row">

        <div class="image">
            <img src="about.jpg" alt="">
        </div>

        <div class="content">
            <h3>best food in the university area</h3>
            <p>Lorem</p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-dollar-sign"></i>
                    <span>easy payment</span>
                </div>
            </div>
            <a href="#" class="btn">learn more</a>
        </div>
    </div>

</section>

<!--About section ends-->

<!--Footer section starts-->
 <section class="footer">
    
    <div class="box-container">

        <div class="box">
            <h3>contact info</h3>
            <a href="#">+123-456-7890</a>
            <a href="#">asdads@gmail.com</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
        </div>
    </div>

 </section>   
<!--Footer section ends-->


<!--Logout section starts-->

<!--Logout section ends-->






<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script src="script.js">
    var swiper = new Swiper(".card_slider", {
      slidesPerView: 0,
      spaceBetween: 500,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    })
      

</script>


</body>    
</html>
    




