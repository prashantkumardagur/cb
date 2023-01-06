    <?php include("../elements/head.html") ?>

    <title>Contact Us - Creative Beast EMS - Event Management Services</title>
    <style>
        <?php include("../css/contact.css"); ?>
    </style>
</head>
<body>

    <div class="container">

    <?php include("../elements/navbar.html") ?>

    <header class="bg3 pad">
        <div class="grid">
            <main>
                <h1 class="h2"><span class="accent">Contact Us</span> to explore more...</h1>
                <p class="p3 txt2 mar30">We are here to implement your Creative thoughts into real action to help you with a Beast like passion, power and dedication by a spectacular event to remember forever.</p>
                <p class="p3 txt2">Currently, If you want a event to be planned by us, you need to contact us through following mediams...</p>
                <a href="tel:+918360274102" class="contact mar30 block"><span class="iconHolder"><i class="fas fa-phone-alt p1"></i></span> +91 (IND) 8360274102</a>
                <a href="mailto:thecreativebeastlpu@gmail.com" class="contact mar30 block"><span class="iconHolder"><i class="fas fa-envelope p1"></i></span> thecreativebeastlpu@gmail.com</a>
                <a href="https://g.page/LPUUniversity?share" target="_blank" class="contact mar30 block"><span class="iconHolder"><i class="fas fa-map-marker-alt p1"></i></span> Lovely Professional University, Punjab</a>
                <h3 class="h5 mar90">Social Media Handles</h3>
                <div class="socialMedia pad15">
                    <a href="#" class="iconHolder" style="color: #00f;"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="iconHolder" style="color: #f0d;"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="iconHolder" style="color: #09f;"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="iconHolder" style="color: #04f;"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="iconHolder" style="color: #f00;"><i class="fab fa-youtube"></i></a>
                </div>
            </main>
            <form action="#" method="post" class="bg1 rc2">
                <h2><span class="accent">Or</span> leave us a <span class="accent">Message...</span></h2>
                <p class="p3 pad15">Just send us a message about your query or event request. We will try to respond to your message as soon as possible on your mail address.</p>
                <p class="p3">It can take upto 24 hrs. Have a good day...</p>

                <label for="name">Your Email</label>
                <input type="email" maxlength="40" name="email" placeholder="Enter your email here..." required>

                <label for="message">Your Message</label>
                <textarea name="message" id="message" placeholder="Write your message/query here..." maxlength="1020" required></textarea>

                <button type="submit" class="btn1 mar30">Send Message <i class="fas fa-paper-plane"></i></button>
            </form>
        </div>
    </header>

    <div class="bg1 pad more">
        <h5 class="h2">Some more content</h5>
    </div>

    <?php include("../elements/footer.html") ?>

    </div>
</body>
</html>