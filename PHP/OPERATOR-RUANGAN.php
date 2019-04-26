<!DOCTYPE html>
<html>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>RUANGAN1 - MANAJER</title>
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-dark-grey.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <head>
        <style>
            * {box-sizing:border-box}

            /* Slideshow container */
            .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
            }

            /* Hide the images by default */
            .mySlides {
            display: none;
            }

            /* Next & previous buttons */
            .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            }

            /* Position the "next button" to the right */
            .next {
            right: 0;
            border-radius: 3px 0 0 3px;
            }

            /* On hover, add a black background color with a little bit see-through */
            .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
            }

            /* Caption text */
            .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
            }

            /* Number text (1/3 etc) */
            .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
            }

            /* The dots/bullets/indicators */
            .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
            }

            .active, .dot:hover {
            background-color: #717171;
            }

            /* Fading animation */
            .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
            }

            @-webkit-keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
            }

            @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
            }

            h5 {
                text-align: center;
                
            }

            #alamat {
                float: right;
            }

            .imgTable {
                width: 50%;
                height: auto;
                text-align: center;
            }

            table {
                border: none;
            }

             @font-face {
                font-family: header;
                src: url("../fonts/Ailerons-Typeface.otf");
              }

            @font-face {
                font-family: texts;
                src: url("../fonts/Renner_ 400 Book.ttf");
              }
            
              @font-face {
                font-family: navBarFont;
                src: url("../fonts/Kiona-Regular.ttf");
                font-style: bold;
                
              }

              h1 {
                  font-family: header;
                  font-size: 70px;
                  color: #373737;
              }

              a {
                  font-family: navBarFont;
                  font-size: 25px;
                  color: #868B8E;
                  font-style: bold;
              }


              h2 {
                  font-family: navBarFont;
                  font-size: 30px;
                  color: white;
                  margin-top: 75px;
                  margin-bottom: 75px;
              }

              h5 {
                font-family: navBarFont;
                  font-size: 20px;
                  color: white;
              }

              #containerRuang {
                  font-family: texts;
                  font-size: 20px;
                  color: #373737;
              }

              .text {
                font-family: texts2;
                  font-size: 25px;
                  color: white;
              }

              #search {
                margin-left: 43%;
                margin-top: 0.5%;
                length: 30%;
              }
        </style>
    </head>
    <body>
        <!-- header -->
        <div class="w3-container w3-white">
                    <h1>Ruangku</h1>
        </div>

        <!-- navigation bar -->
        <div class="w3-bar w3-white w3-border " id="menu">
            <a href="#" class="w3-bar-item w3-button">Transaksi</a>
            <a href="OPERATOR-RUANGAN.html" class="w3-bar-item w3-button w3-dark-grey">LIST RUANGAN</a>
            <a href="OPERATOR-ALAT.html" class="w3-bar-item w3-button">LIST BARANG</a>
            <a href="OPERATOR-CUSTOMER.html" class="w3-bar-item w3-button">LIST CUSTOMER</a>
            <input type="text" id="search" placeholder="Search..">
            <a href="#" class="w3-bar-item w3-button" style="float: right;">LOGOUT</a>
          </div>

           <!-- Slideshow untuk ruangan -->
            <div class="slideshow-container" style="margin-top:30px;">
            <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    
                <img src="../images/1.jpg"style="width:100%">
                </div>
            
                <div class="mySlides fade">
                
                <img src="../images/2.jpg" style="width:100%">
                </div>
            
                <div class="mySlides fade">
                
                <img src="../images/3.png" style="width:100%">
                </div>

                <div class="mySlides fade">
        
                <img src="../images/4.jpg" style="width:100%">
                </div>

                <div class="mySlides fade">
                
                <img src="../images/5.jpg" style="width:100%">
                </div>

                <div class="mySlides fade">
                
                <img src="../images/6.jpg" style="width:100%">
                </div>

                <div class="mySlides fade">
                    
                    <img src="../images/7.jpg" style="width:100%">
                    </div>

                <div class="mySlides fade">
                    
                    <img src="../images/8.jpg" style="width:100%">
                    </div>

                    <div class="mySlides fade">
                 
                        <img src="../images/9.jpg" style="width:100%">
                        </div>
            
                <div class="mySlides fade">
                
                <img src="../images/10.jpg" style="width:100%">
                </a>
                </div>

                <div class="mySlides fade">
                
                <img src="../images/11.jpg" style="width:100%">
                </a>
                </div>

                <div class="mySlides fade">
                
                <img src="../images/12.jpg" style="width:100%">
                </a>
                </div>

                <div class="mySlides fade">
                
                <img src="../images/13.jpeg" style="width:100%">
                </a>
                </div>

                <div class="mySlides fade">
                
                <img src="../images/14.jpeg" style="width:100%">
                </a>
                </div>

                <div class="mySlides fade">
                
                <img src="../images/15.jpeg" style="width:100%">
                </a>
                </div>

                <div class="mySlides fade">
                
                <img src="../images/16.jpg" style="width:100%">
                </a>
                </div>

                <div class="mySlides fade">
                
                <img src="../images/17.jpeg" style="width:100%">
                </a>
                </div>

                <div class="../mySlides fade">
                
                <img src="../images/18.jpg" style="width:100%">
                </a>
                </div>
            
            
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        <br>
        <br>

        
        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span> 
            <span class="dot" onclick="currentSlide(5)"></span> 
            <span class="dot" onclick="currentSlide(6)"></span>  
            <span class="dot" onclick="currentSlide(7)"></span> 
            <span class="dot" onclick="currentSlide(8)"></span> 
            <span class="dot" onclick="currentSlide(9)"></span>  
            <span class="dot" onclick="currentSlide(10)"></span>  
            <span class="dot" onclick="currentSlide(11)"></span>  
            <span class="dot" onclick="currentSlide(12)"></span>  
            <span class="dot" onclick="currentSlide(13)"></span>  
            <span class="dot" onclick="currentSlide(14)"></span> 
            <span class="dot" onclick="currentSlide(15)"></span>  
            <span class="dot" onclick="currentSlide(16)"></span>  
            <span class="dot" onclick="currentSlide(17)"></span>  
            <span class="dot" onclick="currentSlide(18)"></span>   
        </div>

        <br>
        <br>

        <div class = "w3-container w3-center w3-dark-grey " >
            <h2>Ruangku. A place to collaborate and create. <br>
           SERVICED OFFICE. COWORKING. VIRTUAL OFFICE. MEETING ROOM.</h2>
        </div>

        <br>
        <br>


        <div class="w3-container" id = "containerRuang">
              
                <table class="w3-table w3-bordered w3-center">
                  <tr>
                    <th><center><img src="../images/1.jpg" class="imgTable" style="width:600px; height: 300px;"></center></th>
                    <th><center><img src="../images/2.jpg" class="imgTable"  style="width:600px; height: 300px;"></center></th>
                    <th><center><img src="../images/3.png" class="imgTable"  style="width:600px; height: 300px;" ></center></th>
                  </tr>
                  <tr>
                    <td><center>
                            Executive Room (Large)<br>
                            Kapasitas: 20pax <br>
                            Fasilitas: AC, Proyektor, Free Drinks and Snack <br>
                            Price: 400.000/hour <br>
                            Status Ruangan:<p id ="statusRuangan">Booked</p>
                            <a class="w3-btn w3-black w3-disabled" onclick="document.getElementById('id01').style.display='block'" style="width:auto;" href="#">Booking</a>  
                    </center>
                    </td>
                    
                    <td><center>
                            Executive Room (Medium)<br>
                            Kapasitas: 16pax <br>
                            Fasilitas: AC, Proyektor <br>
                            Price:300.000/hour <br>
                            Status Ruangan:<p id ="statusRuangan">Available</p>
                            <a class="w3-btn w3-black" onclick="document.getElementById('id01').style.display='block'" style="width:auto;" href="#">Booking</a>  
                    </center>
                    </td>
                    <td><center>
                            Public Room <br>
                            Kapasitas: - <br>
                            Fasilitas: AC <br>
                            Price: 50.0000/day/person <br>
                            Status Ruangan:<p id ="statusRuangan">Available</p>
                            <a class="w3-btn w3-black" onclick="document.getElementById('id01').style.display='block'" style="width:auto;" href="#">Booking</a>  
                    </center>
                    </td>
                  </tr>
                  <tr>
                    <td><center><img src="../images/4.jpg" class="imgTable" style="width:600px; height: 300px;"></center></td>
                    <td><center><img src="../images/5.jpg" class="imgTable" style="width:600px; height: 300px;"></center></td>
                    <td><center><img src="../images/6.jpg" class="imgTable" style="width:600px; height: 300px;" ></center></td>
                  </tr>
                  <tr>
                    <td><center>
                            Standard Room (Small) <br>
                            Kapasitas: 4pax<br>
                            Fasilitas: AC <br>
                            Price: 200.000/hour <br>
                            Status Ruangan:<p id ="statusRuangan">Available</p>
                            <a class="w3-btn w3-black" onclick="document.getElementById('id01').style.display='block'" style="width:auto;" href="#">Booking</a>  
                         </td>
                    </center>
                    <td><center>
                            Standard Room (Large) <br>
                            Kapasitas: 18pax<br>
                            Fasilitas: AC <br>
                            Price: 300.000/hour <br>
                            Status Ruangan:<p id ="statusRuangan">Available</p>
                            <a class="w3-btn w3-black" onclick="document.getElementById('id01').style.display='block'" style="width:auto;" href="#">Booking</a>  
                            
                        </center>
                     </td>
                    <td>
                        <center>
                                Standard Room (Medium) <br>
                                Kapasitas: 10pax<br>
                                Fasilitas: AC <br>
                                Price: 250.000/hour <br>
                                Status Ruangan:<p id ="statusRuangan">Booked</p>
                                <a class="w3-btn w3-black w3-disabled" onclick="document.getElementById('id01').style.display='block'" style="width:auto;" href="#">Booking</a>  
                        </center>
                    </td>
                  </tr>
                  <br>
                </table>
                <br>
                <div class="w3-container w3-center">
                  <div class="w3-bar">
                    <a href="#" class="w3-button w3-grey">1</a>
                    <a href="OPERATOR-RUANGAN2.html" class="w3-button">2</a>
                    <a href="OPERATOR-RUANGAN3.html" class="w3-button">3</a>
                  </div>

                  </div>
        </div>

          <!-- modal untuk daftar cust -->
          <div id="id01" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
        
              <div class="w3-center"><br>
                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
            
              </div>
        
              <form class="w3-container" action="/action_page.php">
                <div class="w3-section">
                 <label><b>Tanggal Transaksi</b></label> <br>
                 <p id="date"></p>

                  <label><b>Nama</b></label>
                  <input class="w3-input w3-border" type="text" placeholder="Enter Name" name="nama" required>
                  <label><b>Email</b></label>
                  <input class="w3-input w3-border" type="text" placeholder="Enter Email" name="email" required>
                  <label><b>No.Handphone</b></label>
                  <input class="w3-input w3-border" type="text" placeholder="Enter Phone Number" name="nohp" required>
                  <label><b>Alamat</b></label>
                  <input class="w3-input w3-border" type="text" placeholder="Enter Address" name="address" required>
                  <br>

                  
                  <label><b>Waktu Mulai</b></label>
                  <input type="time" id="mulai" name="mulai" min="9:00" max="22:00" required>
                  <label><b>Waktu Akhir</b></label>
                  <input type="time" id="akhir" name="akhir" min="9:00" max="22:00" required>
                  <br>
                  <br>


                  <center> 
                        <label><b>Total Transaksi: </b></label> 
                        <br>
                        <label id = "total" style="font-size: 30px">150.000</label>
                        <br>
                  </center>
                  

                </div>
              </form>
        
              <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                <button class="w3-button w3-block w3-dark-grey w3-section w3-padding" type="submit">Booking</button>

              </div>
        
            </div>
          </div>
       
         
        <div class="w3-container w3-black">
                <h5>Ruangku. Collaborate to create. </h5>
        </div>

        
        <script>
            //tampilkan carousel
            var slideIndex = 0;
            showSlides();

            function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
            }

            // tampilkan date
            n =  new Date();
            y = n.getFullYear();
            m = n.getMonth() + 1;
            d = n.getDate();
            document.getElementById("date").innerHTML = m + "/" + d + "/" + y;

                
            </script>
    </body>
</html>