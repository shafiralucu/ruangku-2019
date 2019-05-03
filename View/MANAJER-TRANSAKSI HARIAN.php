<!DOCTYPE html>
<html>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>CUSTOMER - MANAJER</title>
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
              h1 {
                  font-family: header;
                  font-size: 70px;
                  color: #373737;
              }

              a {
                  font-family: texts;
                  font-size: 25px;
                  color: #868B8E;
                  font-style: bold;
              }


              h2 {
                  font-family: texts2;
                  font-size: 30px;
                  color: #373737;
                  margin-top: 75px;
                  margin-bottom: 75px;
              }

              h5 {
                font-family: texts;
                  font-size: 20px;
                  color: white;
              }

              #containerRuang {
                  font-family: texts2;
                  font-size: 20px;
                  color: #373737;
              }

              .text {
                font-family: texts2;
                  font-size: 25px;
                  color: white;
              }

              .tablecust {
                font-family: texts2;
                  font-size: 15px;
                  color: #373737;
              }


        </style>
    </head>
    <body>
        <!-- header -->
        <div class="w3-container w3-white">
        <h1>Ruangku</h1>
        </div>

        <!-- navigation bar -->
        <div class="w3-bar w3-white w3-border" id="menu">
            <a href="MANAJER-RUANGAN.php" class="w3-bar-item w3-button">LIST RUANGAN</a>
            <a href="MANAJER-BARANG.php" class="w3-bar-item w3-button">LIST BARANG</a>
            <a href="MANAJER-PENDAPATAN.php" class="w3-bar-item w3-button w3-dark-grey">PENDAPATAN</a>
            <a href="#" class="w3-bar-item w3-button" style="float: right;">LOGOUT</a>
          </div>

        <div class = "w3-container" style = "margin: 3%;">
          <table class="w3-table-all w3-center" id = "tabelcust" style="font-family: texts; font-size: 20px;">
            <thead>
              <tr class="w3-dark-grey">
                <th>ID Pelanggan </th>
                <th>Nama</th>
                <th>No. Handphone</th>
                <th>Alamat</th>
                <th>Tanggal Transaksi</th>
                <th>Total Transaksi</th>
              </tr>
            </thead>
            <tr>
              <td>1</td>
              <td>Shafira</td>
              <td>087743553397</td>
              <td>Jl. Rancabentang I No. 10a</td>
              <td>2019-01-11</td>
              <td>150.000</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Giovanni</td>
                <td>081224541830</td>
                <td>Jl. Rancabentang I No. 10D</td>
                <td>2019-10-17</td>
                <td>280.000</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Alif</td>
                <td>081506836583</td>
                <td>Jl. Bukit Jarian No. 12</td>
                <td>2019-10-13</td>
                <td>80.000</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Hashrul</td>
                <td>085639986247</td>
                <td>Jl. Bukit Resik No. 28</td>
                <td>2019-02-12</td>
                <td>170.000</td>
            </tr>
          </table>
        </div>
         
        <div class="w3-container w3-black" >
                <h5>Ruangku. Collaborate to create. </h5>
        </div>

        
    </body>
</html>

<!-- <?php
$koneksi     = mysqli_connect("localhost", "root", "", "latihan");
$bulan       = mysqli_query($koneksi, "SELECT bulan FROM penjualan WHERE tahun='2016' order by id asc");
$penghasilan = mysqli_query($koneksi, "SELECT hasil_penjualan FROM penjualan WHERE tahun='2016' order by id asc");
?>
