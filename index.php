    <?php include("elements/head.html") ?>

    <title>Creative Beast EMS - Event Management Services - Home Page </title>
    <style>
        <?php include("css/home.css"); include("css/achievement.css") ?>

        nav{background-color: #eee; box-shadow: none;}
    </style>
</head>
<body>

    <div class="container">

        <?php include("elements/navbar.html") ?>

        <header class="bg3 pad2 rel">
            <h1 class="h1 pad90">Have an <span class="accent">Event</span><br/>to be <span class="accent">organised</span>?</h1>
            <p class="p2">
                Implementing your Creative thoughts into real action to help society with a Beast like passion, 
                power and dedication by its spectacular work to remember forever.
            </p>
            <a href="#" class="btn1">Plan your event</a>
            <a href="#" class="btn2">View Events</a>

            <div class="images abs">
                <div class="image"></div>
                <div class="image"></div>
                <div class="image"></div>
                <div class="image"></div>
            </div>
        </header>

        <div class="services pad">
            <h4 class="h2">We organize <span class="accent">Everything</span><br/>that can bring You <span class="accent">Joy</span>!!!</h4>
            <div class="grid mar60">
                <div class="service"><h5 class="h4 abs">College Events</h5></div>
                <div class="service"><h5 class="h4 abs">Modelling Show</h5></div>
                <div class="service"><h5 class="h4 abs">Cultural Events</h5></div>
                <div class="service"><h5 class="h4 abs">Concert</h5></div>
                <div class="service"><h5 class="h4 abs">Wedding</h5></div>
                <div class="service"><h5 class="h4 abs">Anniversary</h5></div>
            </div>
        </div>

        <div class="recent pad bg2">
            <h2 class="h3"><span class="accent">Current</span> Events <div class="hline"></div></h2>
            <div class="grid mar90">
                <div>
                    <h4 class="h1">Event Name</h4>
                    <p class="p3 txt2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum esse ut tempora quod temporibus, illo ab explicabo odio dicta dolore repellendus quidem in distinctio eveniet odit quaerat quam quas excepturi sed eos voluptates adipisci. In tempore dolores laboriosam beatae molestiae dicta, similique expedita corrupti autem fugit ut, sunt placeat provident!</p>
                    <div class="p2 w500"><i class="fas fa-map-marker-alt accent"></i> Lovely Professional University</div>
                    <div class="p2 w500"><i class="fas fa-calendar-check accent"></i> 30 Feb 2050</div>
                    <a href="#" class="btn1 mar30">Know More</a>
                </div>
                <img class="rc2" src="/resources/mainImg.jpg" alt="Event Image">
            </div>

            <div class="other mar90">
                <h3 class="h4">Other <span class="accent">Recent</span> Events <div class="hline"></div></h3>
                
                <?php include("elements/eventCards.php") ?>

            </div>
        </div>

        <div class="perks pad">
            <h3 class="h2"><span class="accent">Perks</span> of working with <span class="accent">Us</span><div class="hline"></div></h3>
            <p class="p2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda debitis eos atque impedit. Natus, nostrum exercitationem quos magni temporibus tempora omnis laborum dolores. Corporis quas veniam dolorum voluptatum eum. Rem.</p>
            <div class="grid">
                <div class="perk"><i class="fas fa-hand-holding-usd"></i>Cost efficient</div>
                <div class="perk"><i class="fas fa-user-friends"></i>Support</div>
                <div class="perk"><i class="fas fa-award"></i>Experience</div>
                <div class="perk"><i class="fas fa-paint-brush"></i>Custom Theming</div>
                <div class="perk"><i class="fas fa-globe"></i>Media Coverage</div>
            </div>

            <div class="grid center w600 mar90">
                <div class="stats"><span>40+</span><br/>Projects</div>
                <div class="stats"><span>20+</span><br/>Clients</div>
                <div class="stats"><span>100+</span><br/>Team Strength</div>
                <div class="stats"><span>3+</span><br/>Years of Experience</div>
            </div>
        </div>

        <?php include("elements/achievements.html") ?>

        <div class="testimonials pad">
            <h4 class="h3">Few <span class="accent">Words</span> from our <span class="accent">precious clients</span> ... <div class="hline"></div></h4>
            <div class="outer hidden mar60">
                <div class="grid">
                    <div class="review">
                        <div class="grid">
                            <img src="/resources/mainImg.jpg" alt="Review">
                            <div>
                                <h6 class="h5">Someone Anonymous</h6>
                                <p class="p3">Client's Designation</p>
                            </div>
                        </div>
                        <p class="p3 w600" style="line-height: 110%;">It was a great experience working with them!</p>
                        <div class="accent">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="p4 txt2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, soluta quia consequatur consectetur animi enim inventore dolorum fugiat ipsum atque vitae? Quisquam quasi est quas, illo distinctio consectetur architecto repellat. Ipsa enim id inventore omnis ad voluptatum dignissimos quia. Harum totam atque asperiores numquam a quibusdam eaque nesciunt qui suscipit.</p>
                    </div>
                    <div class="review">
                        <div class="grid">
                            <img src="/resources/mainImg.jpg" alt="Review">
                            <div>
                                <h6 class="h5">Someone Anonymous</h6>
                                <p class="p3">Client's Designation</p>
                            </div>
                        </div>
                        <p class="p3 w600" style="line-height: 110%;">It was a great experience working with them!</p>
                        <div class="accent">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="p4 txt2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, soluta quia consequatur consectetur animi enim inventore dolorum fugiat ipsum atque vitae? Quisquam quasi est quas, illo distinctio consectetur architecto repellat. Ipsa enim id inventore omnis ad voluptatum dignissimos quia. Harum totam atque asperiores numquam a quibusdam eaque nesciunt qui suscipit.</p>
                    </div>
                    <div class="review">
                        <div class="grid">
                            <img src="/resources/mainImg.jpg" alt="Review">
                            <div>
                                <h6 class="h5">Someone Anonymous</h6>
                                <p class="p3">Client's Designation</p>
                            </div>
                        </div>
                        <p class="p3 w600" style="line-height: 110%;">It was a great experience working with them!</p>
                        <div class="accent">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="p4 txt2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, soluta quia consequatur consectetur animi enim inventore dolorum fugiat ipsum atque vitae? Quisquam quasi est quas, illo distinctio consectetur architecto repellat. Ipsa enim id inventore omnis ad voluptatum dignissimos quia. Harum totam atque asperiores numquam a quibusdam eaque nesciunt qui suscipit.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="topEvents pad bg2">
            <h3 class="h2">Our <span class="accent">Esteemed</span> Events <div class="hline"></div></h3>
            <div class="grid mar90">
                <article>
                    <img src="/resources/mainImg.jpg" alt="Event Image">
                    <h4 class="h3 mar30">Event Name</h4>
                    <p class="p4 txt2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo, iste nesciunt quia tempora dignissimos culpa, repellendus minima consequatur in laboriosam iusto odit explicabo voluptates enim maxime doloremque error? Minus placeat aliquam reiciendis suscipit assumenda velit eius ducimus quae temporibus! Odit eveniet, sunt sapiente dicta reiciendis repudiandae quidem debitis! Nobis, saepe.</p>
                    <div class="p3 w500"><i class="fas fa-map-marker-alt accent"></i> Lovely Professional University</div>
                    <div class="p3 w500"><i class="fas fa-calendar-check accent"></i> 30 Feb 2050</div>
                    <a href="#" class="btn3 mar30">Know More <i class="fas fa-arrow-right" style="margin-left: 5px;"></i></a>
                </article>
                <article>
                    <img src="/resources/mainImg.jpg" alt="Event Image">
                    <h4 class="h3 mar30">Event Name</h4>
                    <p class="p4 txt2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo, iste nesciunt quia tempora dignissimos culpa, repellendus minima consequatur in laboriosam iusto odit explicabo voluptates enim maxime doloremque error? Minus placeat aliquam reiciendis suscipit assumenda velit eius ducimus quae temporibus! Odit eveniet, sunt sapiente dicta reiciendis repudiandae quidem debitis! Nobis, saepe.</p>
                    <div class="p3 w500"><i class="fas fa-map-marker-alt accent"></i> Lovely Professional University</div>
                    <div class="p3 w500"><i class="fas fa-calendar-check accent"></i> 30 Feb 2050</div>
                    <a href="#" class="btn3 mar30">Know More <i class="fas fa-arrow-right" style="margin-left: 5px;"></i></a>
                </article>
            </div>

            <div class="other mar90">
                <h3 class="h4">Other <span class="accent">Great</span> Events <div class="hline"></div></h3>
                
                <?php include("elements/eventCards.php") ?>

            </div>
        </div>

        <div class="ending pad rel center">
            <h3 class="font2 abs">CREATIVE BEAST</h3>
            <div class="svgplace rel"></div>
            <h4 class="h2" style="margin: auto;"><span class="accent">Interested</span> in our company to <span class="accent">Organise</span> your <span class="accent">Event</span></h4>
            <p class="p2">There is no need to wait for the opportunity to come when you can create one.</p>
            <p class="p2">Creative Beast is always ready to assist you with fullest of our ability.</p>

            <div class="mar60">
                <a href="#" class="btn2">About Us</a>
                <a href="#" class="btn2">CB Studios</a>
                <a href="#" class="btn1">Plan Your Event</a>
                <a href="#" class="btn2">Hunar</a>
                <a href="#" class="btn2">All Events</a>
            </div>
        </div>

        <?php include("elements/footer.html") ?>

    </div>
    
</body>
</html>