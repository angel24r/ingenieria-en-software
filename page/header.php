<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/new.css"> 
    <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="main.js"></script>
       
</head>
<body>
<script>
      window.addEventListener("scroll", function(){
        let menuArea = document.getElementById('menu-area');

        if(window.pageYOffset > 0){
          menuArea.classList.add("cus-nav");
        }else{
          menuArea.classList.remove("cus-nav")
        }
      });
    </script>
    <div id="menu-area">
      <div class="logo">
        <a href="index.php">
          <img src="resources/logo.png" alt="">
        </a>
      </div>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
    