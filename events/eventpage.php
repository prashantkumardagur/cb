    <?php include("../elements/head.html") ?>

    <title> <?php echo $event["name"] ?> - Event by Creative Beast EMS - Event Management Services </title>
    <style>
        <?php include("../css/eventPage.css"); ?>
    </style>
</head>
<body>

    <div class="container">
        <?php include("../elements/navbar.html") ?>

        <header class="bg2 grid">
            <div class="eventImage"></div>
            <div class="pad">
                <h2 class="h5 accent"><?php echo $event["genre"] ?></h2>
                <h1 class="h1"><?php echo $event["name"] ?></h1>
                <p class="p2 w500 mar30"><i class="fas fa-map-marker-alt accent p1"></i> <?php echo $event["location"] ?></p>
                <p class="p2 w500"><i class="fas fa-calendar-check accent p1"></i> <?php echo $event["date"] ?></p>
                <p class="p3 txt2 mar30"><?php echo $event["description"] ?></p>
            </div>
        </header>

        <div class="additional pad">
            <h3 class="h3"><span class="accent">Related</span> Photos <div class="hline"></div></h3>
            <div class="photos grid mar30">
                <img src="/resources/mainImg.jpg" alt="Event Photo" class="photo">
                <img src="/resources/mainImg.jpg" alt="Event Photo" class="photo">
                <img src="/resources/mainImg.jpg" alt="Event Photo" class="photo">
                <img src="/resources/mainImg.jpg" alt="Event Photo" class="photo">
                <img src="/resources/mainImg.jpg" alt="Event Photo" class="photo">
                <img src="/resources/mainImg.jpg" alt="Event Photo" class="photo">
                <img src="/resources/mainImg.jpg" alt="Event Photo" class="photo">
                <img src="/resources/mainImg.jpg" alt="Event Photo" class="photo">
                <img src="/resources/mainImg.jpg" alt="Event Photo" class="photo">
                <img src="/resources/mainImg.jpg" alt="Event Photo" class="photo">
                <img src="/resources/mainImg.jpg" alt="Event Photo" class="photo">
                <img src="/resources/mainImg.jpg" alt="Event Photo" class="photo">
            </div>

            <h3 class="h3 mar90">Additional Information <div class="hline"></div></h3>
            <div class="additionalDiv pad bg4 mar30">Any additional information regarding winners, sponsers, guests etc.</div>
        </div>

        <div class="related pad bg2">
            <h3 class="h3"><span class="accent">Related</span> Events <div class="hline"></div></h3>
            <?php displayCards($relatedCards); ?>
        </div>

        <?php include("../elements/offerSection.html") ?>

        <?php include("../elements/footer.html") ?>

    </div>
</body>
</html>