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

        body {
            font-family: navBarFont;
            color: pink;
            background-image: url("images/contact2.jpg");
        }

        .judul {
            float: right;
            text-align: center;
            margin-right: 40vw;
            margin-top: 8vh;
        }

        .judul h1 {
            font-size: 250%;
        }

        .judul h2 {
            font-size: 125%;
        }

        

        ul {
            text-decoration: none;
            list-style-type: none;
            float: left;
            background-color: white;
            width: 20%;
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: auto;
            position: fixed;
            text-align: center;
        }

        li a {
            text-decoration: none;
            color: white;
            color: black;
            font: bold;
            font-size: 125%;
            transition: 0.5s;
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
            margin-left: 30%;
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
                    <button class="button" style="color:pink; margin-right: 6%;">SEND REQUEST</button>
                </div>
            </fieldset>
        </div>
    </form>

</body>

</html>