<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galery</title>
    <link rel="icon" type="image/png" sizes="30x30" href="logo-kelas.png">
    <link rel="stylesheet" href="galery.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Irish+Grover">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inknut+Antiqua">

</head>
<body>
    <nav>
        <a class="left" href="dashboard.php">
            <img src="logo-kls.png" alt="Fitur 1" class="nav">
        </a>
        <a class="center" href="dashboard.php">2023-A</a>
        <a class="right" href="dashboard.php">
            <img src="logo-prodi.png" alt="Fitur 3" class="nav">
        </a>
    </nav>
    <div>
    <table class="tabel1">
        <tr>
          <td class="kotak2">
            <p class="teks">Memory Galery</p>
            <img src="bubble-gum-selfie.png" alt="" class="gambar">
            <p class="teks">Tetap Foto Meskipun Belum Pada Mandi :)</p>
        </td>
            <td class="kotak1">
                <div class="paragraf">
                    <p class="satu">HIASI SETIAP MOMEN</p>
                </div>
                <div class="paragraf">
                    <p class="satu">DENGAN BERFOTO</p>
                </div>
                <div class="paragraf">
                    <p class="satu">BERSAMA</p>
                </div>
            </td>
        </tr>
      </table>
    </div>
    <table class="tombol">
        <tr>
            <td>
        <div class="button-container">
        <button class="button" onclick="buttonClicked(1)">Home</button>
        <button class="button" onclick="buttonClicked(2)">Anonymous</button>
        <button class="button" onclick="buttonClicked(3)">Game</button>
        <button class="button" onclick="buttonClicked(4)">Profile Member</button>
        </div>
        </td>
        </tr>
    </table>
    <table class="widget">
        
        <tr>
            <td>
                <div class="rounded-image">
                    <img src="batik.jpg" alt="" class="galery-foto">
                    <p class="teks1">Hari Batik Pertama Di Perkuliahan</p>
                </div>
            </td>
            <td>
                <div class="rounded-image">
                    <img src="first-collage.jpg" alt="" class="galery-foto">
                    <p class="teks1">Hari Batik Pertama Di Perkuliahan</p>
                </div>
            </td>
        </tr>
        <tr>
            <div>
                <img src="all.jpg" alt="" class="all">
                <p class="teks2">First Time Memakai PDH (Pakaian Dinas Harian)</p>
            </div>
        </tr>
        <tr>
            <td>
                <div>
                    <img src="pbak.jpg" alt="" class="galery-foto">
                    <p class="teks2">PBAK 2023</p>
                </div>
            </td>
            <td>
                <div>
                    <img src="last-ing.jpg" alt="" class="galery-foto">
                    <p class="teks2">Hari Terakhir Matkul B.Inggris</p>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <h1 class="h1" style="color: white;">LAINNYA :</h1>
            </td>
        </tr>
    </table>
    <div class="Slide">
        <img class="mySlides" src="ciwi.jpg" style="width:100%">
        <img class="mySlides" src="pdh-all.jpg" style="width:100%">
        <img class="mySlides" src="ciwi2.JPG" style="width:100%">
        <img class="mySlides" src="sf.jpeg" style="width:100%">
        <img class="mySlides" src="monitor2.jpg" style="width:100%">

        <div class="button-container">
        <button class="Slide-button" onclick="plusDivs(-1)">&#10094;</button>
        <button class="Slide-button" onclick="plusDivs(1)">&#10095;</button>
        </div>
    </div>

    <div class="footer">
        <table>
          <tr>
            <td>
              <p class="fitur">Or</p>
              <a href="profile-member.html" class="fitur">Profile Member</a>
            </td>
            <td style="font-size: 20px;">
              <p>Entertaiment</p>
              <a href="game.html">Game</a><br>
              <a href="anonymous.html">Anonymous Massager</a>
            </td>
          </tr>
          <tr>
            <td >
              <p class="wm" style="margin-top: 7%;">&copy; 2023|| Teknologi Informasi</p>
              <p class="wm">Universitas Islam Negeri Walisongo Semarang</p>
            </td>
          </tr>
        </table>
      </div>
      <script src="galery.js"></script>
</body>
</html>