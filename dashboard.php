<?php
include 'koneksi.php';
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit();
}
  ?><!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Selamat Datang</title>
      <link rel="stylesheet" href="dashboard.css">
      <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Irish+Grover">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lemon">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inknut+Antiqua">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sansita">
  </head>
  <body>
    <script src="dashboard.js"></script>
      <nav>
          <a class="left" href="dashboard.php">
              <img src="logo-kls.png" alt="Fitur 1" class="nav">
          </a>
          <a class="center" href="dashboard.php">2023-A</a>
          <a class="right" href="dashboard.php">
              <img src="logo-prodi.png" alt="Fitur 3" class="nav">
          </a>
      </nav>
      <div class="slider-container">
          <!-- Container untuk slide -->
          <div id="slideshow" class="slides">
              <!-- Gambar Slide -->
              <img class="slide" src="all.jpg" alt="Slide 1">
              <img class="slide" src="pbak2.jpg" alt="Slide 2">
              <img class="slide" src="batik2.jpg" alt="Slide 3">
              <img class="slide" src="lastpti.jpg" alt="Slide 4">
              <img class="slide" src="last-ing2.jpg" alt="Slide 5">
          </div>
      </div>
      <div class="welcome-container">
        <h1 class="usr"><?php $username = $_SESSION['username'];
        echo "Selamat datang, $username"; ?> !!!</h1>
          <p></p><br>
      </div>
  
      <div class="button-container">
        <button class="button"><a href="galery.php">Galery</a></button>
        <button class="button"><a href="anonim.php">Anonymous</a></button>
        <button class="button"><a href="">Game</a></button>
        <button class="button"><a href="profile-member.html">Profile Member</a></button>
      </div>
  
      <div>
        <h1 class="pembukaan">Selamat datang di portal kelas yang penuh
          inovasi, yang dimana kelas ini dihuni oleh 
          mahasiswa dari berbagai jenis kelamin, sifat, dan 
          kenormalannya masing - masing.
        <p></p></h1>
      </div>
  
      <div class="translucent-box">
        <div class="kotak">
          <p class="teks-besar">10</p>
          <p class="teks-kecil">Mata Kuliah</p>
        </div>
        <div class="kotak">
          <p class="teks-besar">39</p>
          <p class="teks-kecil">Member</p>
        </div>
        <div class="kotak">
          <p class="teks-besar">5</p>
          <p class="teks-kecil">Hari Kuliah</p>
        </div>
      </div>
  
      <div></div>
      <table>
        <tr>
          <td class="kotak2">
            <img src="Komting Kita (1).png" alt="" class="">
        </td>
            <td class="kotak1">
                <div>
                    <p class="yui">KOMANDAN TINGGI 2023-A</p>
                </div>
                <div class="paragraf">
                    <p class="satu">Komandan Tinggi 2023-A, yang dipilih saat PBAK hari ke-2 di ruang kelas 2.8  Fakultas Sains Dan Teknologi.</p>
                </div>
                <div class="paragraf">
                    <p class="satu">Tugasnya adalah mengatur dan menjaga kelas, sifat yang wajib dimikili beliau adalah memiliki kesabaran seluas samudra karena beliau harus mengurus anak orang yang memiliki beragam-ragam sifat dan kelakuannya</p>
                </div>
            </td>
        </tr>
      </table>
    </div>
    <div>
      <table>
        <tr>
          <td>
            <h1 style="color: white; text-align: center; margin-bottom: 5%; font-size: 60px; font-family: 'Sansita', sans-serif;">JIKA ANDA MENCARI KAMI</h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1500717891677!2d110.35124107379191!3d-6.991598968469683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708ab88e964b95%3A0xa4832095547d1e0c!2sFakultas%20Sains%20dan%20Teknologi%20FST%20UIN%20Walisongo!5e0!3m2!1sid!2sid!4v1702566507621!5m2!1sid!2sid" width="100%" height= 800" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </td>
        </tr>
      </table>
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
  </body>
  </html>
  
  