<!DOCTYPE html>
<html>

<head>
    <title>Contact</title>
    <style>
        @font-face {
            font-family: quicksand;
            src: url("quicksand.otf");
        }

        @font-face {
            font-family: navBarFont;
            src: url("fonts/Kiona-Regular.ttf");
            font-style: bold;
        }

        @font-face {
            font-family: header;
            src: url(fonts/Ailerons-Typeface.otf);
        }

        @font-face {
            font-family: texts;
            src: url("fonts/Renner_ 400 Book.ttf");
        }

        @font-face {
            font-family: navBarFont;
            src: url("fonts/Kiona-Regular.ttf");
            font-style: bold;
        }

        body {
            font-family: texts;
            color: pink;
            background-image: url("images/contact2.jpg");
        }

        .judul {
            float: right;
            text-align: center;
            margin-top: 1%;
            margin-right: 45%;
        }

        .judul h1 {
            font-size: 250%;
        }

        .judul h2 {
            font-size: 125%;
        }

        li a:hover {
            color: rgb(107, 190, 218);
            transition: 0.5s;
        }

        img {
            height: 2vw;
            float: left;
            margin-left: 17%;
        }

        .contact {
            margin-top: 5%;
            margin-left: 27.5%;
            float: left;
            text-align: center;
        }

        .button {
            background-color: black;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 50px;
            transition: 0.5s;
        }

        .button:hover {
            background-color: grey;
            transition: 0.5s;
        }

        h5 {
            font-family: navBarFont;
            font-size: 20px;
            color: white;
        }
        
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: black;
            color: white;
            text-align: center;
        }
    </style>
</head>

<body>
    
    <div class="judul">
        <h1>Contact us</h1>
        <h2>Say Hello!</h2>
    </div>
    <br>

    <form>
        <div class="contact">
            <fieldset style="width:120%">
                <div class="isi">
                    <br>
                    <input type="text" name="name" placeholder="Your Name" required style="width: 70vh; height: 2.5vw">
                    <br>
                    <br>
                    <br>
                    <input type="text" name="email" placeholder="Your Email" required style="width: 70vh; height: 2.5vw">
                    <br>
                    <br>
                    <br>
                    <input type="text" name="message" placeholder="Your Message" required style="width: 70vh; height: 10vw">
                    <br>
                    <br>
                    <br>
                    <button onclick="location.href = 'CONTACT-COMPLETE.php'" class="button" style="color:pink; margin-right: 6%;">SEND</button>
                </div>
                <a href="OPERATOR-HOME.php" style="color:white;float: right;">Kembali ke halaman utama</a>
            </fieldset>
        </div>
    </form>

    <div class="footer">
        <p>Ruangku. Collaborate to Create</p>
    </div>

</body>

</html>