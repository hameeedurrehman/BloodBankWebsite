<!DOCTYPE html>
 <html lang="en"> 
    <head> 
        <title>{{$data->filename}}</title> 
        <style> 
        .back_style{ 
            border-radius: 6px; 
            box-shadow: 5px 5px 5px 5px gray;
             background-color: lightgoldenrodyellow; 
             padding-left: 48%; } 
        body iframe {
            color: black;
            border: 1px solid red;
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
            color: #000;
        }

        .header .header-navbar nav ul li a:hover {
            color: rgb(150, 35, 20);
        }
        </style> 
    </head> 
    <body> 
    <header>
        <div class="header">
            <div class="container">

                <div class="header-logo">
                    <a href=""><i class="fa-solid fa-hand-holding-medical fa-beat-fade fa-2xl" "></i></a>
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
        <iframe height="500vh" width="100%" src="C:/xampp/htdocs/Blood_Bank_Website/public/uploads/{{$data->file}}" frameborder="2">

        </iframe> 
        <div class="back_style">
            <a href="/Blood_Bank_Website/public/show_data">BACK</a>
        </div>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" /> 
    </body> 
</html>