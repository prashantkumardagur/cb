<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/basic.css">
    <link rel="stylesheet" href="/css/studio.css">
    <link rel="stylesheet" href="/css/elements.css">

    <title>CB Studios - Creative Beast - Home</title>
</head>
<body>

    <div class="container txt1">

        <?php include("../elements/navbar.html") ?>
        <script>document.getElementById("navId3").classList.add("activeNav");</script>

        <header class="pad bg2 rel">
            <h2 class="h2">An <span class="accent">open platform</span> to<br/><span class="accent">showcase your talents</span> to<br/>the open world.</h2>
            <p class="p3 txt2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ea doloribus culpa laboriosam repellendus, nesciunt omnis modi aliquid veritatis voluptates.</p>
            <a href="#" class="btn1">Participate Now</a>
            <a href="#" class="btn2">YouTube Page</a>
            
            <div class="images abs">
                <div class="image"></div>
                <div class="image"></div>
                <div class="image"></div>
                <div class="image"></div>
            </div>
        </header>

        <div class="viewSection pad">
            <div class="player bg3 flex vcenter center txt2" id="player"><i class="fas fa-play-circle"></i></div>
            <h2 class="h4 mar30" id="vidTitle">This is the title of the video.</h2>
            <p class="p2 txt2" id="vidBy">by Someone Anonymous</p>
            <p class="p2 txt2" id="vidDate">30 Feb 2050</p>
            <h6 class="h6 w500" id="vidGenre">Genre: Something</h6>
            <p class="p4 txt2" id="vidDiscription">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non nemo, eligendi tempore repellat aliquam officia provident obcaecati vero corporis rem natus iure aperiam, porro mollitia explicabo. Eligendi accusamus voluptas dolorem natus perferendis in aspernatur culpa laboriosam architecto obcaecati voluptates assumenda veritatis adipisci atque suscipit magnam ipsam quas, voluptatibus quasi ullam eius quam temporibus nemo id! Consequuntur numquam provident rerum quasi dicta quas hic quia cupiditate, veniam qui aliquid sed aliquam laboriosam ipsum quae corrupti fuga modi ad nam tenetur odio quam? Magnam id et laudantium. Quo, iure commodi nemo molestias id voluptatibus tempore minus! Earum magni tenetur cumque? Temporibus, doloribus?</p>
        </div>

        <main class="pad bg3">
            <h2 class="h3">Creative Beast Studio Releases<div class="hline"></h2>
            <div class="videos grid flexwrap mar60">
                <div class="video">
                    <img src="/resources/mainImg.jpg" alt="Thumbnail">
                    <h4>Video Title</h4>
                    <p>By Someone anonymous</p>
                    <p>30 Feb 2050</p>
                </div>
                <div class="video">
                    <img src="/resources/mainImg.jpg" alt="Thumbnail">
                    <h4>Video Title</h4>
                    <p>By Someone anonymous</p>
                    <p>30 Feb 2050</p>
                </div>
                <div class="video">
                    <img src="/resources/mainImg.jpg" alt="Thumbnail">
                    <h4>Video Title</h4>
                    <p>By Someone anonymous</p>
                    <p>30 Feb 2050</p>
                </div>
                <div class="video">
                    <img src="/resources/mainImg.jpg" alt="Thumbnail">
                    <h4>Video Title</h4>
                    <p>By Someone anonymous</p>
                    <p>30 Feb 2050</p>
                </div>
                <div class="video">
                    <img src="/resources/mainImg.jpg" alt="Thumbnail">
                    <h4>Video Title</h4>
                    <p>By Someone anonymous</p>
                    <p>30 Feb 2050</p>
                </div>
                <div class="video">
                    <img src="/resources/mainImg.jpg" alt="Thumbnail">
                    <h4>Video Title</h4>
                    <p>By Someone anonymous</p>
                    <p>30 Feb 2050</p>
                </div>
                <div class="video">
                    <img src="/resources/mainImg.jpg" alt="Thumbnail">
                    <h4>Video Title</h4>
                    <p>By Someone anonymous</p>
                    <p>30 Feb 2050</p>
                </div>
                <div class="video">
                    <img src="/resources/mainImg.jpg" alt="Thumbnail">
                    <h4>Video Title</h4>
                    <p>By Someone anonymous</p>
                    <p>30 Feb 2050</p>
                </div>
            </div>
        </main>

        <div class="perkSection pad">
            <h3 class="h3">A <span class="accent">leading stage for new talents</span><br/>to showcase themselves. <div class="hline"></div></h3>
            <div class="perks grid mar60">
                <div class="perk"></div>
                <div class="perk"></div>
                <div class="perk"></div>
                <div class="perk"></div>
            </div>
            <p class="p2 mar60">There is no need to wait for an oppurtunity to come when you can create one.</p>
            <p class="p2">CB Studio is always ready to assist you with fullest of its ability to bring out the talent within you.</p>
            <a href="#" class="btn1 mar30">Participate Now</a>
        </div>

        <?php include("../elements/footer.html") ?>

    </div>


</body>
</html>