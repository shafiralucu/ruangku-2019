<!DOCTYPE html>
<html>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="style/style.css">
        <title>Home - RUANGKU</title>
    <head>
        <style>

            /* https://www.retrosupply.co/blogs/retrosupply-blog/45740673-50-free-retro-and-vintage-fonts */

             @font-face {
                font-family: header;
                src: url(fonts/Ailerons-Typeface.otf);
              }

            @font-face {
                font-family: texts;
                src: url(fonts/Lato-Bold.ttf);
              }

              /* https://coolors.co/ffe4e6-ffbabe-373737-868b8e-e5e5e5 */

              #title1 {
                  font-family: header;
                  font-size: 130px;
                  color: #373737;
                  margin-bottom: 0px;
              }

               #title2 {
                  font-family: texts;
                  font-size: 25px;
                  color: grey;
                  margin-bottom: 50px;
              }

              #signInButton {
                  font-family: texts;
                  font-size: 25px;
                  color: white;
                  margin-bottom: 50px;
                  
              }

        </style>
           
    </head>
    <body>
                    <img src="images/cover.jpg" id = "home" width="100%" >
                    <div class="w3-display-middle w3-large w3-center" id = "title" >
                        <p id ="title1">Ruangku.com</p>
                        <p id = "title2"ss>SERVICED OFFICE | COWORKING | VIRTUAL OFFICE | MEETING ROOM</p>
                        <button class="w3-button w3-border w3-border-white" id ="signInButton" onclick="location.href='LOGIN.php'">LOGIN</button>
                    </div>       
    </body>
</html>