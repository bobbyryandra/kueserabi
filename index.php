<!DOCTYPE php>
<head>
    <link rel="stylesheet" type="text/css" href="css/cssModel.css">
    
    <title>Program UTS</title>
</head>
<body>
    <div class="header">
        <?php include"html/header.html";?>
    </div>
    <ul>
        <li class="home"><a href="index.php?page=home">Home</a></li>
            <li class="dropdown"><a href="#" class="dropbtn">About</a>
                <div class="dropdown-content">
                    <a href="index.php?page=sejarah">Sejarah</a>
                    <a href="index.php?page=visimisi">Visi dan Misi</a>
                    <a href="index.php?page=tujuan">Tujuan</a>
                    <a href="index.php?page=profil">Profil Pembuat Program</a>
                </div>
            </li>
            <li><a href="index.php?page=gallery">Gallery</a></li>
            <li><a href="index.php?page=kontak">Kontak</a></li>
            <li class="login"><a href="index.php?page=login" style="float:right">Login</a></li>
    </ul>
    <div class="topnav">
        
    </div>
    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <?php
                include"html/teksberjalan.html";
                $page=(isset($_GET['page']))?$_GET['page']:"main";
                switch ($page) {
                    case 'home': include "html/home.html";break;
                    case 'about': include "html/about.html";break;
                    case 'gallery': include "html/gallerykecil.html";break;
                    case 'login': include "html/login.html";break;
                    case 'main': default:include'html/error.html';
                }?>
            </div>
        </div>
      <div class="rightcolumn">
          <div class="card">
              <?php
              include"html/about.html";?>
          </div>
          <div class="card">
              <?php
              include"html/sosmed.html";?>
          </div>
      </div>
    </div>
    <div class="footer">
              <?php
              include"html/footer.html";?>
          </div>
</body>