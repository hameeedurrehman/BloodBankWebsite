<!DOCTYPE html>
<html>

<head>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <title>BLOOD DONATION </title>
    <style>
        body {
            background-image: url('https://globalbloodfund.org/wp-content/uploads/2020/08/GBF-workbanner.jpg');
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
    <div class="create-form">
        <form action="{{ route ('donor.store') }}" method="POST">
            @csrf
            <h2 style="padding-top: 20px;"> DONOR DATA </h2>
            <label for="name ">Name</label>
            <input type="text" id="name" name="name" style="width: 200px;" placeholder="Your Name.."><br><br>
            <label for="fathername ">S/O</label>
            <input type="text" id="fathername" name="fathername" style="width: 200px;" placeholder="Fathers Name.."><br><br>
            <label for="address ">Address</label>
            <input type="text" id="address" name="address" style="width: 200px;" placeholder="Your Address.."><br><br>
            <label for="phoneno ">Cell-No</label>
            <input type="tel" id="phoneno" name="phoneno" style="width: 200px;" placeholder="Your Cell No.."><br><br>
            <label for="cnic ">Cnic</label>
            <input type="text" placeholder="Your CNIC.." id="cnic" name="cnic" style="width: 200px;"><br><br>
            <label for="dob ">DoB</label>
            <input type="date" id="dob" name="dob" style="width: 200px;"><br><br>
            <label for="age ">Age</label>
            <input type="number" placeholder="Your Age.." id="age" name="age" style="width: 200px;"><br><br>
            <label for="gender">Gender</label>
            <input type="text" placeholder="Your Gender.." id="gender" name="gender" style="width: 200px;"><br><br>
            <label for="Bloodgroup">BloodGroup:</label>
            <select name="Bloodgroup" id="Bloodgroup" style="width: 55%; padding: 10px 0; text-align:center; border-radius:9px;">
                @foreach ($Bloodgroup as $Bloodgroup)
                <option value="{{$Bloodgroup->id}}">
                    {{$Bloodgroup->bloodgroupname}}
                </option>
                @endforeach
            </select>
            <br><br>
            <label for="hospitalname"> Hospital: </label>
            <select name="hospitalname" id="hospitalname" style="width: 55%; padding: 10px 0; text-align:center; border-radius:9px;">
                @foreach ($Hospital as $Hospital)
                <option value="{{$Hospital->id}}">
                    {{$Hospital->hospitalname}}
                </option>
                @endforeach
            </select>
            <br><br>
            <a href="FORM.html">
                <input type="submit" value="Submit" style="cursor: pointer; font-size:22px; color: white; background-color:black; margin-top:20px;" >
            </a>
            <br><br>
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