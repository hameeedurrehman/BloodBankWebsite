<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation Center</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <style>
        * {
            padding: 0;
            margin: 0;
            text-decoration: none;
        }
        body {
            font-family: 'Poppins', sans-serif;
        }
        .container {
            max-width: 1140px;
            margin: 0 auto;
        }
        header .header {
            position: fixed;
            z-index: 1;
            width: 100%;
            padding: 30px 0 0 0;
        }
        .header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header .header-navbar nav ul {
            display: flex;
            justify-content: space-between;
            width: 600px;
        }
        .header .header-navbar nav ul li {
            list-style-type: none;
        }
        .header .header-navbar nav ul li a {
            color: #fff;
            font-size: 15px;
            line-height: 29px;
            font-family: 'Poppins', sans-serif;
            text-transform: uppercase;
        }
        .header .header-navbar nav ul li a:hover {
            color: rgb(150, 35, 20);
        }
        /* header ends here ------------- */
        /* Banner Starts here ----------- */
        .banner {
            height: 750px;
            background-image: url('https://mir-s3-cdn-cf.behance.net/project_modules/fs/e198fb74279931.5c29f908de9a5.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }
        .banner .container h1 {
            color: #fff;
            font-size: 40px;
            line-height: 29px;
            font-weight: 400;
            font-family: 'Poppins', sans-serif;
            position: relative;
            padding: 280px 0 0 0;
        }
        .banner .container .banner-text {
            color: #fff;
            font-size: 20px;
            line-height: 29px;
            font-weight: 400;
            padding: 10px 0 0 0;
            position: relative;
            display: block;
            font-family: 'Poppins', sans-serif;
        }
        .banner::before {
            background-color: rgba(0, 0, 0, 0.8);
            content: "";
            height: 100%;
            position: absolute;
            width: 100%;
        }
        .banner-reviews {
            padding: 10px 0 0 0;
            position: relative;
        }
        .banner-total-reviews {
            color: #fff;
            font-size: 11px;
            line-height: 29px;
            font-weight: 400;
            font-family: 'Poppins', sans-serif;
            position: relative;
        }
        .banner a {
            border: none;
            background-color: rgb(150, 35, 20);
            color: #000;
            padding: 12px 55px;
            font-size: 20px;
            line-height: 29px;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            border-radius: 12px;
            position: relative;
            transition: all ease 0.5s;
        }
        .banner-button a:hover {
            background-color: #fff;
            border: 3px solid rgb(150, 35, 20);
        }
        .banner .banner-button {
            padding: 42px 0 0 0;
        }
        /* Banner Ends here ------------- */
        /* Work Starts here --------------- */
        .work-row {
            padding: 100px 0 80px 0;
            color: rgb(150, 35, 20);
        }
        .tagline {
            font-size: 35px;
            line-height: 29px;
            text-align: center;
            font-weight: 500;
            font-family: 'Poppins', sans-serif;
        }
        .work-tagline {
            max-width: 750px;
            margin: 0 auto;
            font-size: 23px;
            line-height: 36px;
            text-align: center;
            display: block;
            padding: 40px 0 0 0;
            font-family: 'Poppins', sans-serif;
        }
        .work-row .work-box {
            height: 253px;
            width: 250px;
            padding: 50px 0 0 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .work-box .box-details {
            font-size: 15px;
            line-height: 22px;
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            text-align: center;
            padding: 40px 0 0 0;
        }
        .work-row .work-detail {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .work-box h2 {
            font-family: 'Vollkorn', serif;
        }
        /* footer starts here ------------ */
        footer .footer {
            padding: 60px 0 98px 0;
            color: rgb(150, 35, 20);
        }
        .footer-heading-before {
            font-size: 14px;
            line-height: 25px;
        }
        .footer-heading-after {
            font-size: 12px;
            line-height: 25px;
        }
        .footer-heading h2 {
            font-size: 24px;
            line-height: 29px;
        }
        .footer .footer-details {
            display: flex;
            justify-content: flex-start;
            gap: 20px;
        }

        .footer-paragraph {
            padding: 23px 0 0 0;
            font-family: 'Vollkorn', serif;
            font-size: 17px;
            line-height: 29px;
            color: rgb(150, 35, 20);
        }

        .footer-description {
            width: 418px;
            height: 229px;
        }
        .footer-information h2 {
            font-size: 24px;
            line-height: 29px;
            font-family: 'Vollkorn', serif;
            color: rgb(150, 35, 20);
            font-weight: 400;
            padding: 0 0 15px 0;
        }
        .footer-information ul li {
            list-style-type: none;
        }
        .footer-information ul li a {
            font-size: 16px;
            line-height: 33px;
            display: block;
            font-family: 'Vollkorn', serif;
            color: rgb(150, 35, 20);
        }
        .footer-row {
            display: flex;
            justify-content: space-between;
        }
        .footer-connect h2 {
            font-size: 24px;
            line-height: 29px;
            font-family: 'Vollkorn', serif;
            font-weight: 400;
        }
        .footer-connect span {
            font-size: 14px;
            line-height: 33px;
            font-family: 'Vollkorn', serif;
            padding: 15px 0 0 0;
            display: block;
        }
        .footer-icons {
            margin: 19px 0 0 0;
        }
        .footer-icons a i {
            color: rgb(150, 35, 20);
        }
        .footer-icons .fa-xl {
            margin: 2px;
        }

        .footer-bottom {
            background-color: rgb(150, 35, 20);
        }
        .footer-bottom .footer-text {
            display: block;
            padding: 25px 0;
            text-align: center;
            color: #fff;
            font-size: 12px;
            line-height: 33px;
        }
        /* footer ends here------- */
    </style>
</head>
<body>
    <!-- header starts here --------- -->
    <header>
        <div class="header">
            <div class="container">

                <div class="header-logo">
                    <a href=""><i class="fa-solid fa-hand-holding-medical fa-beat-fade fa-2xl" style="color: #ffffff;"></i></a>
                </div>
                <div class="header-navbar">
                    <nav>
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="create">Donate</a></li>
                            <li><a href="/Blood_Bank_Website/public/mail_form">Email Us</a></li>
                            <li><a href="/Blood_Bank_Website/public/file_upload">Upload Health Cert.</a></li>
                            <li><a href="/Blood_Bank_Website/public/login">Login</a></li>
                            <li><a href="/Blood_Bank_Website/public/register">Register</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- header ends here ------------------ -->
    <!-- banner starts here ---------------- -->
    <div class="banner">
        <div class="container">
            <h1>Blood Donation Center</h1>
            <span class="banner-text">Our Motto: Help People, Save Lives</span>
            <div class="banner-reviews">
                <i class="fa-solid fa-star fa-2xs" style="color: #f4da55;"></i>
                <i class="fa-solid fa-star fa-2xs" style="color: #f4da55;"></i>
                <i class="fa-solid fa-star fa-2xs" style="color: #f4da55;"></i>
                <i class="fa-solid fa-star fa-2xs" style="color: #f4da55;"></i>
                <i class="fa-solid fa-star fa-2xs" style="color: #f4da55;"></i>
                <span class="banner-total-reviews">10,000 Reviews</span>
            </div>
            <div class="banner-button">
                <a href="create">Donate Now</a>
            </div>
        </div>
    </div>
    <!-- banner ends here ------------------ -->
    <!-- Work Row Starts here ----------------- -->
    <div class="work-row">
        <div class="container">
            <h2 class="tagline">How it Works</h2>
            <span class="work-tagline">We entail fully equipped emergency care to attend urgent and emergency cases in various areas. The Blood Bank aims to provide safe blood and its components to those in need. </span>
            <div class="work-detail">
                <!-- work box starts here ----------- -->
                <div class="work-box">
                    <h2>ACCIDENTS</h2>
                    <div class="box-details">
                        <p>The delivered blood undergoes a process meeting international quality standards throughout blood collection, screening, storage, cross-matching and transfusion, using the technologically advanced equipment.</p>
                    </div>
                </div>
                <div class="work-box">
                    <h2>SURGERY</h2>
                    <div class="box-details">
                        <p>The delivered blood undergoes a process meeting international quality standards throughout blood collection, screening, storage, cross-matching and transfusion, using the technologically advanced equipment.</p>
                    </div>
                </div>
                <div class="work-box">
                    <h2>CANCER</h2>
                    <div class="box-details">
                        <p>The delivered blood undergoes a process meeting international quality standards throughout blood collection, screening, storage, cross-matching and transfusion, using the technologically advanced equipment.</p>
                    </div>
                </div>
                <div class="work-box">
                    <h2>EMERGENCY</h2>
                    <div class="box-details">
                        <p>The delivered blood undergoes a process meeting international quality standards throughout blood collection, screening, storage, cross-matching and transfusion, using the technologically advanced equipment.</p>
                    </div>
                </div>
                <!-- Work boxes ends here ------------- -->
            </div>
        </div>
    </div>
    <!-- work row ends here ------------ -->
    <!-- footer starts here ------------------ -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="footer-row">
                    <div class="footer-description">
                        <div class="footer-details">
                            <div class="footer-logo">
                                <img src="images/footerlogo.png" alt="">
                            </div>
                            <div class="footer-heading">
                                <span class="footer-heading-before">THE</span>
                                <h2>Blood Donation Center</h2>
                                <span class="footer-heading-after">Motto: Help People</span>
                            </div>
                        </div>
                        <div class="footer-paragraph">
                            <p>Blood Donation is on a mission to help people become their
                                Best Self. It was launched by two entrepreneurs on a journey of personal growth.</p>
                        </div>
                    </div>
                    <div class="footer-information">
                        <h2>Information</h2>
                        <ul>
                            <li><a href="create">Donate</a></li>
                            <li><a href="/Blood_Bank_Website/public/file_upload">Upload Health Cert.</a></li>
                            <li><a href="/Blood_Bank_Website/public/mail_form">Email Us</a></li>
                            <li><a href="/Blood_Bank_Website/public/mail_form">Contact Us</a></li>
                            <li><a href="/Blood_Bank_Website/public/mail_form">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="footer-connect">
                        <h2>Get Connected</h2>
                        <span>Join 70,000 + friends on their own Best Self</span>
                        <div class="">
                            <div class="footer-icons">
                                <a href="https://www.facebook.com/hameeedurrehman"><i class="fa-brands fa-facebook-f fa-xl"></i></a>
                                <a href="https://twitter.com/hameeedurrehman"><i class="fa-brands fa-twitter fa-xl"></i></a>
                                <a href="https://www.instagram.com/hameeedurrehman/"><i class="fa-brands fa-square-instagram fa-xl"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <span class="footer-text">Copyright@ 2017 The Blood Donation Center | Privacy Policy </span>
        </div>
    </footer>
    <!-- Footer Ends here ----------- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</body>
</html>