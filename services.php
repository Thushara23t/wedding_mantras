<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Services</title>
    <style>
        body {
            font-family: Papyrus, sans-serif;
            background-image: url('hand1.jpg');
  background-repeat: no-repeat;
  background-size: cover;
backdrop-filter: blur(5px);
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #f8f8f8;
            padding: 20px;
            text-align: center;
        }
       .navbar {
overflow: hidden;
background-color: white;
}

.navbar a {
float: Right;
display: block;
color: red;
display:soild;
text-align: center;
padding: 14px 16px;
text-decoration: none;
}

.navbar a:hover {
background-color: #ddd;
color: black;
} 

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
            image width: 200%
        }
        .service {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
        }
        
        .service-content {
            flex: 1;
        }
        h2 {
            color: #333;
        }
        p {
            color: #666;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
.container {
    background-color:white;
    width: 80%;
    margin: 0 auto;
}

header {
    background-color:white;
    padding: 20px 0;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

header h1 {
    font-family:Brush Script MT;
    color:black;
    margin: 0;
    font-size: 46px;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    text-decoration: none;
    color: Coral;
    font-weight: bold;
}


.logo {
            width: 200px; 
            height: auto; 
            display: block; 
            margin: 0 auto; 
	    align:right;
        }
.service img {
        width: 200px; 
        height:200;
    }


    </style>
</head>
<body>
    <header>
        <div class="container"><div class="logo">
        <center> <img src="logo1.jpg" alt="Logo" class="logo">
</center>
	 </div>	
            <nav>
                <ul>
                <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact.php">Contact Us</a></li>

                </ul>
            </nav>
        </div>
    </header>
</div>

    <div class="container">
       <center> <h2>Our Services</h2></center>
        <div class="service">
          
            <img src="plan1.jpg" alt="Wedding Planning">
            <div class="service-content">
                <h3>Wedding Planning</h3>
                <p>Let our experienced wedding planners handle every detail, from venue selection to catering.</p>
             <center>   <a href="planning.php">More Info</a></center>
            </div>
        </div>
        <div class="service">
            <img src="decor01.jpg" alt="Decoration">
            <div class="service-content">
                <h3>Decoration</h3>
                <p>We provide exquisite decorations that perfectly complement your wedding theme.</p>
               <center> <a href="decor.php">More Info</a></center>
            </div>
        </div>
        <div class="service">
            <img src="venueimage.jpg" alt="Decoration">
            <div class="service-content">
                <h3>Venue Selection</h3>
                <p>"Selecting the ideal wedding venue sets the tone for your unforgettable celebration".</p>
               <center> <a href="venue.php">More Info</a></center>
            </div>
        </div>
        <div class="service">
            <img src="dest1.jpg" alt="Decoration">
            <div class="service-content">
                <h3>Destination Wedding</h3>
                <p>"Two hearts, one journey, countless memories. Our destination wedding marks the beginning of your forever adventure together.".</p>
               <center> <a href="weddestin.php">More Info</a></center>
            </div>
        </div>
        <div class="service">
            <img src="cat.jpg" alt="Decoration">
            <div class="service-content">
                <h3>catering </h3>
                <p>"Catering services in wedding event management turn celebrations into memorable experiences with personalized menus and exceptional service.".</p>
               <center> <a href="catering.php">More Info</a></center>
            </div>
        </div>
        <div class="service">
            <img src="hos.jpg" alt="Decoration">
            <div class="service-content">
                <h3>Hospitality</h3>
                <p>"Hospitality services provided by wedding event management ensure a seamless and memorable celebration, offering personalized catering, exceptional guest care, and meticulous attention to detail.".</p>
               <center> <a href="hospitall.php">More Info</a></center>
</div>
        </div>
        <div class="service">
            <img src="makeup.jpg" alt="Decoration">
            <div class="service-content">
                <h3>Makeup Artist</h3>
                <p>"Makeup artist services provided by wedding event management ensure the bride and bridal party look their best, offering professional and personalized beauty solutions for a flawless and radiant appearance on the big day."
                </p>
               <center> <a href="makeup.php">More Info</a></center>
            </div>
        </div>
        <div class="service">
            <img src="photo.jpg" alt="Decoration">
            <div class="service-content">
                <h3>Wedding Photography and Videography</h3>
                <p>"Wedding photography and videography services capture every special moment, ensuring lasting memories of the big day."</p>
               <center> <a href="photovideo.php">More Info</a></center>
            </div>
        </div>
        <div class="service">
            <img src="invite.jpg" alt="Decoration">
            <div class="service-content">
                <h3>Wedding Invitation Card</h3>
                <p>"Wedding invitation card services by event management create personalized and elegant invitations, setting the perfect tone for the celebration."
                </p>
               <center> <a href="invite.php">More Info</a></center>
            </div>
        </div>
    </div>
    <footer>
    <p>&copy; 2024 Your Website. All rights reserved.</p>
</footer>
</body>
</html>
