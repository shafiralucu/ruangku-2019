<!DOCTYPE html>
<html>

<head>
    <title>Contact</title>
    <style>
        @font-face {
            font-family: quicksand;
            src: url("quicksand.otf");
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

        body {
            font-family: quicksand;
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

        #produk {
            font-size: 300%;
            font-weight: bold;
        }

        img {
            height: 2vw;
            float: left;
            margin-left: 17%;
        }

        .contact {
            margin-top: 3vw;
            margin-left: 64vh;
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
        <h1>Contact Me</h1>
        <h2>Say Hello!</h2>
    </div>
    <br>

    <form>
        <div class="contact">
            <fieldset style="width:120%">
                <div class="isi">
                    <br>
                    <input type="text" name="name" value="Your Name" required style="width: 70vh; height: 2.5vw">
                    <br>
                    <br>
                    <br>
                    <input type="text" name="email" value="Your Email" required style="width: 70vh; height: 2.5vw">
                    <br>
                    <br>
                    <br>
                    <input type="text" name="message" value="Your Message" required style="width: 70vh; height: 10vw">
                    <br>
                    <br>
                    <br>
                    <button class="button">SEND REQUEST</button>
                </div>
            </fieldset>
        </div>
    </form>

            <div class="icon">
                <li>
                    <a href="https://web.facebook.com/giovanni.anggasta.73">
                        <img src="facebook.png">
                </li>
                <li>
                    <a href="https://twitter.com/giogoonanggasta">
                        <img src="twitter.png">
                </li>
                <li>
                    <a href="https://www.instagram.com/giogioanggasta/">
                        <img src="instagram.png">
                </li>
        </ul>
        </div>
</body>

</html>