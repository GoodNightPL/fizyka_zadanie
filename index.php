<?php 
  //Łączenie z bazą danych...
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/calculator.css">
    <link rel="icon" type="image/x-icon" href="/img/icon.ico">
    <script src="https://kit.fontawesome.com/6148c38128.js" crossorigin="anonymous"></script>


    <script>
      var nav = false;
      function nav_click() {
        if (nav) {
          document.getElementById("navbar").style.display = 'none';
          document.getElementById("credits").style.display = 'flex';
          document.getElementById("nav_button").style.backgroundColor = '#d9bb80';
          document.getElementById('body').style.overflowY = 'initial';
          nav = false;
        } 
        else {
          document.getElementById("navbar").style.display = 'flex';
          document.getElementById("credits").style.display = 'none';
          document.getElementById("nav_button").style.backgroundColor = '#be9c5a';
          document.getElementById('body').style.overflowY = 'hidden';
          nav=true;
        }
      }
      
      function loader() {
        document.getElementById('body').style.overflowY = 'initial';
        document.getElementById('loader').style.display = 'none';
        document.getElementById('nav_button').style.display = 'block';
      }


    </script>


    <title>Porównywarka kalorii</title>
</head>
<body id="body" onload="setTimeout(loader, 1000)">



<!--------------- LOADER ----------------->
  <div id="loader">
    <div class="centre_loader">
      <div class="preloader"></div>
      <p>Trwa ładowanie bazy danych...</p>
    </div>
  </div>
<!-------------------------------->


<!---------------- NAV BUTTON ---------------->
  <button id="nav_button" onclick="nav_click();"><i class="fa-solid fa-bars"></i></button>
<!-------------------------------->



<!-------------- NAVBAR ------------------>
  <nav id="navbar">
    <div class="categories">
      <a href="" title="Porównuje śmieciowe jedzenie ze wszystkimi zdrowymi znajdującymi się w bazie danych."><p><i class="fa-solid fa-calculator"></i> Kalkulator kalorii</p></a>
      <a href="" title="Porównuje śmieciowe jedzenie, z jedzeniem wybranym przez użytkownika."><p><i class="fa-solid fa-burger"></i> Porównywarka jedzenia</p></a>
      <a href="" title="Losuje zdrowe jedzenie do wybranego śmiechowego jedzenia."><p><i class="fa-solid fa-circle-question"></i> Losowanie</p></a>
    </div>
    <div class="nav_footer">
    <p>Strona stworzona przez: <a href="https://github.com/GoodNightPL" target="_blank" style="color: #303030; text-decoration: none;">Konrad Niemiec</a>, <a href="https://github.com/szymcz0k" target="_blank" style="color: #303030; text-decoration: none;">Szymon Leja</a></p>
      <a href="https://github.com/GoodNightPL" target="_blank" style="color: #414141; text-decoration: none;"><i class="fa-brands fa-github"></i></a>
    </div>
  </nav>

 <!-------------------------------->

<!-------------- MAIN ------------------>
<main>
<?php include('kal_kalorii.php'); ?>
</main>
<!-------------------------------->

<!--------------- FOOTER ----------------->
<footer id="credits">
      <p>Strona stworzona przez: <a href="https://github.com/GoodNightPL" target="_blank" style="color: #303030; text-decoration: none;">Konrad Niemiec</a>, <a href="https://github.com/szymcz0k" target="_blank" style="color: #303030; text-decoration: none;">Szymon Leja</a></p>
      <a href="https://github.com/GoodNightPL" target="_blank" style="color: #414141; text-decoration: none;"><i class="fa-brands fa-github"></i></a>
</footer>
<!-------------------------------->


<!-------------------------------->
<!-- STRONA STWORZONA PRZEZ KONRAD NIEMIEC, SZYMON LEJA - WSZELKIE PRAWA ZASTRZEŻONE -->
<!-------------------------------->
<!-------------------------------->
</body>
</html>

