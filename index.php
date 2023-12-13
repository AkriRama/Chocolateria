<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<style>

  .logo-kecil{
    height: 100%;
    background: transparent; 
    border: 0;
  }

  .logo-kecil img {
    height: 5vh;
  }

  .tengah {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
  
  .tengah-navbar {
    display: flex;
    justify-content: center;
    margin-bottom: 3vh;
  }  

    /* Container grid */
    .container{
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* Tiga kolom dengan lebar yang sama */
    grid-gap: 10px; /* Jarak antar elemen dalam grid */
    }

    .container2 {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* Tiga kolom dengan lebar yang sama */
    grid-gap: 10px; /* Jarak antar elemen dalam grid */
    }

    /* Item dalam grid */
    .item {
      padding: 20px;
      text-align: center;
    }
    
    .item2 {
      padding: 20px;
      text-align: justify;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;

      width: 80%;
      font-size: 20px;
    }

    body {
    font-family: 'Poppins', sans-serif;
    }

    /* Menambahkan font Roboto ke elemen khusus dengan class "custom-element" */
    /* .custom-element {
    font-family: 'Poppins', sans-serif;
    } */

    .button-menu {
        background: #D5904E;
        border: 0;
        border-radius: 10px;
        height: 10vh;
        font-size: 24px;
        font-family: 'Poppins', sans-serif;
    }
    
    .tengah-navbar img {
        max-height: 8vh;
        font-size: 24px; 
    }

    .tengah-navbar a {
        margin: auto;
        font-size: 24px;
        text-decoration: none;
        color: #000;
    }

    .tengah-navbar h1 {
        font-size: 56px;
        font-weight: bold solid;
    }

    .tengah p {
        line-height: 30px;
        color: #707070;
        width: 40%; 
        text-align: center;
        font-size: 20px
    }

    .tengah h1{
        font-size: 56px;
        max-height: 5vh;
    }

    .tengah img {
        margin-bottom: 2vh;
    }

    .card-end {
        display: flex;
        justify-content: end;
        margin-bottom: auto;
    }

</style>

<body>
    <div class="tengah-navbar">

        <div class="tengah-navbar" style="width: 80vw;">
            <img src="images/Logo_Chocolateria (2).png" alt="">
            <a href="">Home</a>
            <a href="">About Us</a>
            <a href="">Menu</a>
            <a href="">Gallery</a>
            <a href="">Contact Us</a>
            <div style="background: #D5904E; border-radius: 10px; width: auto; height: 100%; margin-left: 10px; padding: 10px;">
                <a href="/www.facebook.com" class="logo-kecil"><img src="images/bxl_facebook-circle.png" alt=""></a>
                <button class="logo-kecil"><img src="images/bxl_instagram-alt 1.png" alt=""></button>
                <button class="logo-kecil"><img src="images/entypo-social_twitter-with-circle.png" alt=""></button>
            </div>
        </div>
    </div>

    <div class="tengah">
            <img src="images/Img.png" alt="" style="max-width: 80vw;">
            <div class="tengah-navbar">
                <div style="height: 4vh; width: 12vw; background: #D5904E; border: 2px solid #D5904E; border-radius: 20px;"></div>
                <div style="margin-left: 10px; height: 4vh; width: 6vw; border: 2px solid #000000; border-radius: 20px;"></div>
                <div style="margin-left: 10px; height: 4vh; width: 6vw; border: 2px solid #000000; border-radius: 20px;"></div>
            </div>        
    </div>

    <div class="tengah-navbar">
        <div class="container2 tengah-navbar" style="width: 80%;">
            <div class="item2">
                <h1>Cafe Favorit Dikala Ingin Nongki</h1>
                <p>Cafe kami merupakan tempat yang tepat bagi kamu yang mencari tempat nongki yang nyaman dan asik sekali.</p>
                <a href="" class="button-menu">Selengkapnya ></a>
            </div>
            <div class="item">
                <div class="card-end">
                    <img src="images/Group 2.png" alt="" style="max-height: 60vh;">
                </div>
            </div>
        </div>
    </div>

    <div class="tengah">
        <h1>Menu</h1>
        <p style="width: 40%; text-align: center;">Kami menyuguhkan  berbagai menu makanan ringan sampai dengan minuman yang segar dan enak.</p>
        <div class="container">
            <div class="item">
                <img src="images/Rectangle 7.png" alt=""  style="max-height: 40vh;">
            </div>
            <div class="item">
                <img src="images/Rectangle 8.png" alt=""  style="max-height: 40vh;">
            </div>
            <div class="item">
                <img src="images/Rectangle 9.png" alt=""  style="max-height: 40vh;">
            </div>
            <div class="item">
                <img src="images/Rectangle 11.png" alt=""  style="max-height: 40vh;">
            </div>
            <div class="item">
                <img src="images/Rectangle 12.png" alt=""  style="max-height: 40vh;">
            </div>
            <div class="item">
                <img src="images/Rectangle 13.png" alt=""  style="max-height: 40vh;">
            </div>
        </div>
        <button class="button-menu">Menu Lainnya ></button>
    </div>

    <div class="tengah">
        <h1 style="font-size: 56px; font-family: 'Poppins';">Our Services</h1>
        <p>Dengan layanan hasil kerja sama kami dengan mitra kami yang dibawah ini kalian dapat memesan menu melalui platform dibawah ini</p>
        <div class="container">
            <div class="item">
                <img src="images/Go-Food.png" alt=""  style="max-height: 20vh;">
            </div>
            <div class="item">
                <img src="images/Grab-Food.png" alt=""  style="max-height: 20vh;">
            </div>
            <div class="item">
                <img src="images/Shoope-Food.png" alt=""  style="max-height: 20vh;">
            </div>
        </div>
    </div>

    <div class="tengah-navbar">
        <div style="width: 80%;">
            <h1 style="font-size: 56px; font-family: 'Poppins';">Our Partner</h1>
            <div>

            </div>
        </div>

    </div>
</body>
</html>