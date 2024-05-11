<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="keywords"content="html,CSS,java Script,php,mysql">
<meta name="author"content="Rompicherla Likhitha Sree">
<meta name="viewport"content="Width=device-width,initial-scale=1.0">
<meta http-equip="referesh" content="5">
    <style>
        body {
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center center;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        ul {
            list-style-type: none;
            padding: 0;
            text-align: center;  
            font-size: 20px;
        }
        
        ul li {
            display: inline;
            margin-right: 20px;
        }
        
        ul li a {
            text-decoration: none;
            color: white; 
            font-family: Arial;
            font-weight: bold;
            transition: 0.4s ease-in-out;
        }
        
        ul li a:hover {
            color: #ff7200;
        }

        /* Menu styles */
        .menu {
            text-align: right;
        }

        .menu ul {
            list-style-type: none;
        }

        .menu li {
            display: inline;
            margin: 10px;
        }


        /* Content styles */
        .content {
            text-align: center;
            font-size: 50px;
            color: white;
            position: absolute;
            top: 47%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
 
        /* Footer styles */
        .footer {
            text-align: center;
			color:white;
            position: absolute;
            top: 60%; /* Adjust this value as needed */
            left: 50%;
            transform: translateX(-50%);
        }

        .footer-box {
            display: inline-block;
            margin: 10px;
        }

        /* Box styles for "Watch Here" and "Learn More" */
        .box {
            border: 2px dotted #000;
			border-color:white;
            padding: 10px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="menu">
            <ul>
                <li><a href="home.html"><u><i>Home</i></u></a></li>
                <li><a href="Gardenplants.html"><u>GardenPlants</u></a></li>
                <li><a href="psbook.html"><u>P.S Book</u></a></li>
                <li><a href="contactus.html"><u><i>Contact Us</i></u></a></li>
                <li><a href="feedback.html"><u><i>Feedback</i></u></a></li>
            </ul>
			
        </div>
		<script>
        // Array of background image URLs
        var images = [
            'pa.jpg',
            'wa.jpg',
            'p11.jpg'
        ];
        // Function to change the background image
        function changeBackground() {
            var randomIndex = Math.floor(Math.random() * images.length);
            document.body.style.backgroundImage = 'url(' + images[randomIndex] + ')';
        }
        // Change background every 5 seconds (5000 milliseconds)
        setInterval(changeBackground, 5000);
        // Initial background change
        changeBackground();
    </script>
        <div class="content">
            <h1>Welcome <br>LS Plant Store</h1>
        </div>
        <div class="footer">
            <div class="box">
                <p>Watch Here</p>
            </div>
            <div class="box">
                <p>Basic Skills</p>
            </div>
            <div class="box">
                <p>Learn More</p>
            </div>
        </div>
    </div>
</body>
</html>