    <?php include("eventData.php") ?>
    <?php include("../elements/head.html") ?>

    <title>All Events by Creative Beast EMS - Event Management Services </title>
    <style>
        nav{ background-color: var(--bg3); box-shadow: none;}
    </style>
</head>
<body>

    <div class="container">
        <?php include("../elements/navbar.html"); ?>
        <script>document.getElementById("navId2").classList.add("activeNav");</script>

        <header class="pad">
            <h1 class="h2"><span class="accent">All Events</span> hosted by the <span class="accent">Creative Beast</span> EMS.</h1>
            <p class="p2 mar30">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil voluptatum beatae fugit corporis aut minima sunt reiciendis. Praesentium, a adipisci veritatis nesciunt quas maiores laboriosam ipsum suscipit temporibus. Nostrum, reiciendis.</p>
        </header>

        <div class="events pad bg2">
            <h2 class="h4"><span class="accent">Current</span> Events <div class="hline"></div></h2>
            <?php displayCards(array(14,13,11,12)) ?>

            <h3 class="h4 mar90">All Events <div class="hline"></div></h3>
            <?php displayAllCards() ?>
        </div>

        <?php include("../elements/offerSection.html") ?>

        <?php include("../elements/footer.html") ?>

    </div>
</body>
</html>