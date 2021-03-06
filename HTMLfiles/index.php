
<php>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale=1.0>
    
    <link rel="stylesheet" href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" >
    <link rel="stylesheet" href="../CSSfiles/style.css">


</head>
<body>
    <header>
        <a href="#" class="logo"><span>Travel</span></a>

        <nav class ="navbar">
            <a href="#home">Home</a>
            <a href="../HTMLfiles/contact.php">Contact</a>
            <a href="../HTMLfiles/Login.php">Login</a>
            <a href="../HTMLfiles/Register.php">Register</a>
            <a href="../HTMLfiles/adminPage.php">Admin</a>
            <a href="../HTMLfiles/About us.html">About us</a>

            
        </nav>

        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            

        </div>
        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
            

        </form>

        
    </header>
    <section class="home" id="home">
        <div class="image">
            <img src="../images/a.jpg" alt="">
        </div>
        <div class="content">
            <h3>Travel is the only thing you buy that makes you richer</h3>
            <a href="#" class="btn">Explore now</a>
        </div>
    </section>

    <!--filter from section starts-->
    <section class="form-container">
        <from action="">
            <div class="inputBox">
                <span>Where to?</span>
                <input type="text" placeholder="search places">
            </div>

            <div class="inputBox">
                <span>Arrivals</span>
                <input type="date">
            </div>

            <div class="inputBox">
                <span>Leaving</span>
                <input type="date">

            <input type="submit" value="book now" class="btn">
            </div>

        </from>
    </section>
    <!-- packages section starts  -->

<section class="packages" id="packages">

    <h1 class="heading"> Our <span>Packages</span> </h1>

    <div class="box-container">

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="../images/p-1.jpg" alt="">
                <h3> <i class="fas fa-map-marker-alt"></i> Mumbai </h3>
            </div>
            <div class="content">
                <div class="price"> 290.99 <span>350.99</span> </div>
                <p>Here Vada Pav beats Mc Donalds !.</p>
                <a href="#" class="btn"> Book now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="../images/p-2.jpg" alt="">
                <h3> <i class="fas fa-map-marker-alt"></i> Hawaii </h3>
            </div>
            <div class="content">
                <div class="price"> 290.99 <span>350.99</span> </div>
                <p>Coming to Hawaii is like going from black and white to color.</p>
                <a href="#" class="btn"> Book now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="../images/p-3.jpg" alt="">
                <h3> <i class="fas fa-map-marker-alt"></i> Sydney </h3>
            </div>
            <div class="content">
                <div class="price"> 290.99 <span>350.99</span> </div>
                <p>The best things about Sydney are free: the sunshine's free, and the harbour's free, and the beach is free.</p>
                <a href="#" class="btn"> Book now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="../images/p-4.jpg" alt="">
                <h3> <i class="fas fa-map-marker-alt"></i> Paris </h3>
            </div>
            <div class="content">
                <div class="price"> 290.99 <span>350.99</span> </div>
                <p>Paris is not a city; it's a world.</p>
                <a href="#" class="btn"> Book now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="../images/p-5.jpg" alt="">
                <h3> <i class="fas fa-map-marker-alt"></i> Tokyo </h3>
            </div>
            <div class="content">
                <div class="price"> 290.99 <span>350.99</span> </div>
                <p>The best city for fashion is Tokyo. You see styles there you won't see in London, Paris, Milan or New York.</p>
                <a href="#" class="btn"> Book now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="../images/p-6.jpg" alt="">
                <h3> <i class="fas fa-map-marker-alt"></i> Egypt </h3>
            </div>
            <div class="content">
                <div class="price"> 290.99 <span>350.99</span> </div>
                <p>Egypt is full of dreams,mysteries and memories.</p>
                <a href="#" class="btn"> Book now</a>
            </div>
        </div>

    </div>

</section>

<!-- packages section ends -->
<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box" data-aos="zoom-in">
            <span>01</span>
            <i class="fas fa-hotel"></i>
            <h3>affordable hotels</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, rem.</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <span>02</span>
            <i class="fas fa-plane"></i>
            <h3>fastest travel</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, rem.</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <span>03</span>
            <i class="fas fa-utensils"></i>
            <h3>food and drinks</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, rem.</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <span>04</span>
            <i class="fas fa-globe"></i>
            <h3>around the world</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, rem.</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <span>05</span>
            <i class="fas fa-hiking"></i>
            <h3>new adventures</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, rem.</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <span>06</span>
            <i class="fas fa-bullhorn"></i>
            <h3>safety guide</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, rem.</p>
        </div>

    </div>

</section>

<!-- services section ends -->


<!-- pricing section starts  -->

<section class="pricing" id="pricing">

    <h1 class="heading"> our <span>pricing</span> </h1>

    <div class="box-container">

        <div class="box" data-aos="zoom-in-up">
            <h3> basic plan </h3>
            <div class="price">
                <span>$</span>
                <span class="amount">30</span>
                <span>/mo</span>
            </div>
            <ul>
                <li>10 days</li>
                <li>food and drinks</li>
                <li>safty guide</li>
                <li>insurance</li>
                <li>luxury hotel</li>
            </ul>
            <a href="#" class="btn">choose plan</a>
        </div>

        <div class="box" data-aos="zoom-in-up">
            <h3> standard plan </h3>
            <div class="price">
                <span>$</span>
                <span class="amount">50</span>
                <span>/mo</span>
            </div>
            <ul>
                <li>20 days</li>
                <li>food and drinks</li>
                <li>safty guide</li>
                <li>insurance</li>
                <li>luxury hotel</li>
            </ul>
            <a href="#" class="btn">choose plan</a>
        </div>

        <div class="box" data-aos="zoom-in-up">
            <h3> premium plan </h3>
            <div class="price">
                <span>$</span>
                <span class="amount">90</span>
                <span>/mo</span>
            </div>
            <ul>
                <li>30 days</li>
                <li>food and drinks</li>
                <li>safty guide</li>
                <li>insurance</li>
                <li>luxury hotel</li>
            </ul>
            <a href="#" class="btn">choose plan</a>
        </div>

    </div>

</section>
    
<script src="../JSFiles/script.js"></script>
</body>

</html>
</php>