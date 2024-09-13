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
            <img src="https://via.placeholder.com/150" alt="Logo">
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="index.html">Page 1</a></li>
                <li><a href="page2.html">Page 2</a></li>
                <li><a href="form.php">Page 3</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="contact">
        <h1>Contact</h1>
        <div class="contact_container">
            <form action="connect.php" method="post">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="Your full name">
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" id="email" name="email" placeholder="Your email address">
                </div>

                <div class="form-group">
                    <label for="phone">Contact Number</label>
                    <input type="text" id="phone" name="phone" placeholder="Your contact number">
                </div>

                <div class="form-group">
                    <label for="message">Subject</label>
                    <textarea id="message" name="message" placeholder="Type your message here" style="height:200px"></textarea>
                </div>

                <div class="form-group submit-group">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>

    <footer>
        <div class="footer-links">
            <a href="#">Contact Us</a>
            <a href="#">Shipping</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms and Conditions</a>
        </div>
        <p>All prices are in NZD and include GST. Copyright © 2024 Jake Rutherford. All Rights Reserved.</p>
    </footer>
</body>
</html>
