<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NutriSnap</title>


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/styles.css">

    </head>
    <body>
        <header>
            <a href="#" class="logo">NutriSnap<span>.</span></a>
            <div class="menuToggle" onclick="toggleMenu();"></div>
            <ul class="navigation">
                <li><a href="#banner" onclick="toggleMenu();">Home</a></li>
                <li><a href="#about" onclick="toggleMenu();">About</a></li>
                <li><a href="#developer" onclick="toggleMenu();">Developers</a></li>
            </ul>
        </header>
        <section class="banner" id="banner">
            <div class="content">
                <h2>Snap. Scan. Thrive.</h2>
                <a href="#" class="btn" onclick="startCamera()" data-toggle="modal" data-target="#food_scanner">Take Photo</a>
            </div>
        </section>


        <section class="about" id="about">
            <div class="row">
                <div class="col50">
                    <h2 class="titleText"><span>A</span>bout The App</h2>
                    <p>NutriSnap is an image classification app that aims to help you in 
                    making healthier food choices when it comes to fruits and vegetables. 
                    Leveraging the advanced capabilities of Google Teachable Machines AI, 
                    NutriSnap excels at recognizing a diverse range of fruits and vegetables.
                    By simply capturing an image using your phone or desktop camera, NutriSnap 
                    analyzes the visual data and provides you with valuable information, 
                    including the name of the food item and its corresponding calorie amount.<br><br>
                    The app incorporates a database that encompasses a wide variety
                    of produce, along with their respective calorie information. 
                    This allows you to make informed decisions regarding your dietary choices, 
                    helping you maintain a balanced and healthy lifestyle.<br><br>
                    Whether you're at the grocery store, planning your meals, 
                    or even just curious about the calorie content of the food on your plate, 
                    NutriSnap is there to assist you every step of the way. 
                    Its intuitive interface ensures a smooth and seamless user experience, 
                    making it accessible to individuals of all levels of tech-savviness.</p>
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
                <h2 class="titleText"><span>M</span>embers</h2>
                <p>Members of NutriLabs</p>
            </div>
            <div class="content">
                <div class="box">
                    <div class="imgBx">
                        <img src="./css/images/ME 2.jpg">
                    </div>
                    <div class="text">
                        <h3>Sofia Macaludos</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <img src="./css/images/ledesma.jpg">
                    </div>
                    <div class="text">
                        <h3>Stephanie Kate Ledesma</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <img src="./css/images/ME 2.jpg">
                    </div>
                    <div class="text">
                        <h3>Ivan Kent Leybag</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <img src="./css/images/ME 2.jpg">
                    </div>
                    <div class="text">
                        <h3>Ruby Jane Facurib</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <img src="./css/images/ME 2.jpg">
                    </div>
                    <div class="text">
                        <h3>Evan Leonille Mariquit</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <img src="./css/images/ME 2.jpg">
                    </div>
                    <div class="text">
                        <h3>Carren Mae Yongco</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <img src="./css/images/dodog.jpg">
                    </div>
                    <div class="text">
                        <h3>Bai Nhor Dodog</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <img src="./css/images/ME 2.jpg">
                    </div>
                    <div class="text">
                        <h3>Nielmer Camintoy</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <img src="./css/images/rbangoy.jpg">
                    </div>
                    <div class="text">
                        <h3>Richard Joshua Bangoy</h3>
                    </div>
                </div>
            </div>
        </section>

        <div class="copyrightText">
            <p>Copyright 2023 <a href="#">NutriLabs</a>. All Rights Reserved</p>
        </div>


        <div class="modal" id="food_scanner">
            <div class="container-sm">
            <div class="d-flex justify-content-center align-items-center vh-100">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title">Food Calorie Scanner</h4>
                    </div>
                    <div class="modal-body d-flex flex-column justify-content-center align-items-center">
                    <div id="interactive" class="viewport d-flex flex-column align-content-center justify-content-center">
                        <div id="webcam-container"></div>
                        <div class="error">
                        <p class="text-danger" id="message-container"></p>
                        </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="stopCamera" onclick="stopCamera()">Close</button>
                    </div>
                </div> <!-- /.modal-content -->
                </div> <!-- /.modal-dialog -->
            </div> <!-- /.modal -->
            </div>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@latest/dist/tf.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@teachablemachine/image@latest/dist/teachablemachine-image.min.js"></script>
        <script src="javascript/app.js"></script>
    </body>

</html>