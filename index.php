<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Food App</title>
        <link rel="stylesheet" href="./css/styles.css">
    </head>
    <body>
        <header>
            <a href="#" class="logo">FoodSnap<span>.</span></a>
            <div class="menuToggle" onclick="toggleMenu();"></div>
            <ul class="navigation">
                <li><a href="#banner" onclick="toggleMenu();">Home</a></li>
                <li><a href="#about" onclick="toggleMenu();">About</a></li>
                <li><a href="#developer" onclick="toggleMenu();">Developers</a></li>
                <li><a href="#contact" onclick="toggleMenu();">Contact</a></li>
            </ul>
        </header>
        <section class="banner" id="banner">
            <div class="content">
                <h2>Always Choose Good</h2>
                <p>AI project tas DOS ang grado</p>
                <a href="#" class="btn">Take Photo</a>
            </div>
        </section>


        <section class="about" id="about">
            <div class="row">
                <div class="col50">
                    <h2 class="titleText"><span>A</span>bout Us</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad soluta laboriosam inventore reiciendis nostrum officiis!
                    Cumque error quae, assumenda dicta natus cupiditate beatae ipsa, quia labore est tempore aliquid obcaecati?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad soluta laboriosam inventore reiciendis nostrum officiis!
                    Cumque error quae, assumenda dicta natus cupiditate beatae ipsa, quia labore est tempore aliquid obcaecati?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad soluta laboriosam inventore reiciendis nostrum officiis!
                    Cumque error quae, assumenda dicta natus cupiditate beatae ipsa, quia labore est tempore aliquid obcaecati?<br><br> 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio rem deserunt iure itaque magni? 
                    Corporis non exercitationem neque consequuntur quidem perferendis, voluptates repellat recusandae tempore sit earum minima officiis iure?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad soluta laboriosam inventore reiciendis nostrum officiis!
                    Cumque error quae, assumenda dicta natus cupiditate beatae ipsa, quia labore est tempore aliquid obcaecati?</p>
                </div>
                <div class="col50">
                    <div class="imgBx">
                        <img src="./css/images/img1.jpg">
                    </div>
                </div>
            </div>
        </section>


        <section class="developer" id="developer">
            <div class="title">
                <h2 class="titleText">The <span>D</span>evelopers</h2>
                <p>The Members of the group for this Project</p>
            </div>
            <div class="content">
                <div class="box">
                    <div class="imgBx">
                        <img src="./css/images/ME 2.jpg">
                    </div>
                    <div class="text">
                        <h3>Retsard Juswa</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <img src="./css/images/ME 2.jpg">
                    </div>
                    <div class="text">
                        <h3>Retsard Juswa</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <img src="./css/images/ME 2.jpg">
                    </div>
                    <div class="text">
                        <h3>Retsard Juswa</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <img src="./css/images/ME 2.jpg">
                    </div>
                    <div class="text">
                        <h3>Retsard Juswa</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <img src="./css/images/ME 2.jpg">
                    </div>
                    <div class="text">
                        <h3>Retsard Juswa</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <img src="./css/images/ME 2.jpg">
                    </div>
                    <div class="text">
                        <h3>Retsard Juswa</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <img src="./css/images/ME 2.jpg">
                    </div>
                    <div class="text">
                        <h3>Retsard Juswa</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <img src="./css/images/ME 2.jpg">
                    </div>
                    <div class="text">
                        <h3>Retsard Juswa</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <img src="./css/images/ME 2.jpg">
                    </div>
                    <div class="text">
                        <h3>Retsard Juswa</h3>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact" id="contact">
            <div class="title">
                <h2 class="titleText"><span>C</span>ontact Us</h2>
                <p>Send us your messages or feedback through Email</p>
            </div>
            <div class="contactForm">
                <h3>Send a message</h3>
                <div class="inputBox">
                    <input type="text" placeholder="Name">
                </div>
                <div class="inputBox">
                    <input type="text" placeholder="Email">
                </div>
                <div class="inputBox">
                    <textarea placeholder="Message"></textarea>
                </div>
                <div class="inputBox">
                    <input type="submit" value="Send">
                </div>
            </div>
        </section>

        <div class="copyrightText">
            <p>Copyright 2023 <a href="#">Richard Joshua Bangoy</a>. All Rights Reserved</p>
        </div>

        <script src="javascript/app.js"></script>
    </body>

</html>