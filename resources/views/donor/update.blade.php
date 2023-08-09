<!DOCTYPE html>
<html>

<head>
    <title>BLOOD DONATION CENTER</title>
    <style>
        body {
            font-family: 'Lato', sans-serif;
            color: black;
        }
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
        .banner form {
            padding: 100px;
            border-radius: 5px;
            background-color: #f2f2f2;
            max-width: 500px;
            width: 100%;
            margin: 0 auto;
            z-index: 10;
            position: relative;
            top: 80px;
        }
        .banner {
            height: 1050px;
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
        input[type=text], input[type=tel], input[type=date] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-left: 10px;
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
        .create-form input {
            border-radius: 9px;
            border: none;
            padding: 10px 40px;
            font-size: 16px;
            font-weight: 400;
        }
        .create-form form label {
            font-size: 20px;
            font-weight: 600;
            float: left;
            margin-left: 20px;
            width: 25%;
        }
        .create-form h2 {
            padding-bottom: 25px;
        }
        .create-form form {
            text-align: center;
            background-color: rgba(150, 35, 20, 0.7);
            border: 1px solid red;
            color: antiquewhite;
            height: max-content;
            width: 40%;
            height: 750px;
            margin: 50px auto;
            -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
            box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
        }
        footer .footer {
            padding: 60px 0 98px 0;
            color: rgb(150, 35, 20);
            background-color: #fff;
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

<body>
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
    <form action="{{ route ('donor.update', $donor->cnic) }}" method="post">
        @csrf
        <h2 style="text-align: center; padding: 0 0 20px 0;">
        Update Donor Record
    </h2>
        <fieldset>
            <label for="name ">Name </label>
            <input type="text" id="name" name="name" value="{{$donor->name}}" style="width: 200px;"><br><br>
            <label for="fathername ">Father Name </label>
            <input type="text" id="fathername" name="fathername" value="{{$donor->fathername}}" style="width: 200px;"><br><br>
            <label for="address ">Address </label>
            <input type="text" id="address" name="address" value="{{$donor->address}}" style="width: 200px;"><br><br>
            <label for="phoneno ">Cell-No</label>
            <input type="tel" id="phoneno" name="phoneno" value="{{$donor->phoneno}}" style="width: 200px;"><br><br>
            <label for="cnic ">Cnic </label>
            <input type="text" id="cnic" name="cnic" value="{{$donor->cnic}}" style="width: 200px;"><br><br>
            <label for="dob ">DOB </label>
            <input type="date" id="dob" name="dob" value="{{$donor->dob}}" style="width: 200px;"><br><br>
            <label for="age ">Age </label>
            <input type="text" id="age" name="age" value="{{$donor->age}}" style="width: 200px;"><br><br>
            <label for="gender">Gender</label>
            <input type="text" id="gender" name="gender" value="{{$donor->gender}}" style="width: 200px;"><br><br>
            <input type="submit" value="Update" class="addButton">
        </fieldset>
    </form>
    </div>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</body>

</html>