<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket Hub Contact</title>
    <link rel="stylesheet" type="text/css" href="css/style3.css">
</head>
<body>

    <header>
            <div class="logo">
                <a href="index.html">
                    <img src="images/logo_01.png" alt="Cricket Hub Logo">
                </a>
            </div>
        <nav>
            <ul class="nav-links">
                <li><a href="index.html">Home</a></li>
                <li><a href="page2.html">Shop Gear</a></li>
                <li><a href="form.php">Contact</a></li>
            </ul>
            <div class="burger-menu" onclick="toggleMenu()">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </nav>
		
    </header>

    <div class="menu-items" id="menuItems">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="page2.html">Shop Gear</a></li>
            <li><a href="form.php">Contact</a></li>
        </ul>
    </div>
    <div class="contact">
        <h1>Contact</h1>
        <div class="contact_container">
            <form action="connect.php" method="post">
                <div class="row">
                    <div class="column">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="Your full name">
                    </div>
                </div>

                <div class="row">
                    <div class="column">
                        <label for="email">Email Address</label>
                        <input type="text" id="email" name="email" placeholder="Your email address">
                    </div>
                </div>

                <div class="row">
                    <div class="column">
                        <label for="contactnumber">Contact Number</label>
                        <input type="text" id="phone" name="phone" placeholder="Your contact number">
                    </div>
                </div>

                <div class="row">
                    <div class="column">
                        <label for="subject">Subject</label>
                        <textarea id="message" name="message" placeholder="Type your message here" style="height:200px"></textarea>
                    </div>
                </div>

                <div class="row">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>

   <footer>
        <div class="footer-links">
            <a href="form.php">Contact Us</a>
            <a href="#">Shipping</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms and Conditions</a>
        </div>
        <p>All prices are in NZD and include GST. Copyright © 2024 Jake Rutherford. All Rights Reserved.</p>
    </footer>
    <script>
        // Function to toggle the visibility of menu items
        function toggleMenu() {
            var menuItems = document.getElementById("menuItems");
            if (menuItems.style.display === "block") {
                menuItems.style.display = "none";
            } else {
                menuItems.style.display = "block";
            }
        }

        // Function to toggle menu visibility based on screen size
        function checkWindowSize() {
            var menuItems = document.getElementById("menuItems");
            var screenWidth = window.innerWidth;
            if (screenWidth > 768) {
                menuItems.style.display = "none";
            }
        }

        checkWindowSize();
        window.addEventListener("resize", checkWindowSize);
    </script>
</body>
</html>
