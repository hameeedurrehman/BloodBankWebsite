<!DOCTYPE html>
<html>

<head>
    <title>BLOOD DONATION </title>
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
            padding: 30px 0 80px 0;
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
            font-size: 15px;
            line-height: 29px;
            font-family: 'Poppins', sans-serif;
            text-transform: uppercase;
            color: #fff;
        }

        .header .header-navbar nav ul li a:hover {
            color: rgb(150, 35, 20);
        }

        .banner form {
            padding: 100px;
            border-radius: 5px;
            background-color: #f2f2f2;
            max-width: 500px;
            width: 100%;
            margin: 0 auto;
            z-index: 10;
            position: relative;
            top: 150px;
        }

        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-left: 100px;
        }
        label {
            margin: 0 0 0 100px;
        }

        input[type=submit] {
            max-width: 300px;
            width: 100%;
            background-color: rgb(150, 35, 20);
            color: white;
            padding: 14px 20px;
            margin: 8px 100px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-transform: uppercase;
            font-size: 20px;
        }

        input[type=submit]:hover {
            background-color: rgba(150, 35, 20, 0.8);
            transition: all ease 0.4s;
        }
        .banner {
            height: 750px;
            background-image: url('https://mir-s3-cdn-cf.behance.net/project_modules/fs/e198fb74279931.5c29f908de9a5.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }
        .banner::before {
            background-color: rgba(0, 0, 0, 0.8);
            content: "";
            height: 100%;
            position: absolute;
            width: 100%;
        }
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
    </style>
</head>

<body class="body">
    <header>
        <div class="header">
            <div class="container">

                <div class="header-logo">
                    <a href=""><i class="fa-solid fa-hand-holding-medical fa-beat-fade fa-2xl" style="color: #ffffff;"></i></a>
                </div>
                <div class="header-navbar">
                    <nav>
                        <ul>
                            <li><a href="/Blood_Bank_Website/public/donor/main">Home</a></li>
                            <li><a href="/Blood_Bank_Website/public/donor/create">Donate</a></li>
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
    <div class="banner">
        <form action="{{ route ('bloodgroup.store') }}" method="POST">
            @csrf
            <h2 style="text-align: center; padding: 0 0 25px 0"> Blood Groups </h2>
            <label for="bloodgroupname ">Blood Group Name: </label>
            <input type="text" id="Bloodgroupname" name="Bloodgroupname" style="width: 200px;"><br><br>
            <a href="FORM.html">
                <input type="submit" value="Submit">
            </a>
            <br><br>
        </form>
    </div>
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