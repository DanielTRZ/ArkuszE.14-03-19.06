<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8">
<title>Biblioteka Miejska</title>
<meta name="description" content="Witryna biblioteki miejskiej w Książkowicach ">
<meta name="keywords" content="Biblioteka Miejska ,ksiązki,Książkowice">
<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="banner">
<h2>Miejska Biblioteka Publiczna w Książkowicach</h2> 
</div>
<div id="left">
<h3>W naszych zbiorach znajdziesz dzieła następujących autorów:</h3>
     
     <?php
      $connect=mysqli_connect('localhost','root','','biblioteka')or die ("Błąd połączenia :".mysqli_error());
      $q1=mysqli_query($connect,'SELECT imie,nazwisko FROM autorzy'); 
		
      echo'<table>
      <tr>
      </tr>';		
      while($data = mysqli_fetch_assoc($q1))
      {
      echo '<ul>
      <li>'.$data['imie'].' '.$data['nazwisko'].'</li>
      </ul>';
      }
      echo '</table>';
      ?>
     
  </div>
  
  <div id="center">
  <h3>Dodaj nowego czytelnika</h3>
  <form method="post" action="">
  imię<input type="text" name="imie" id="imie"><br>
  nazwisko<input type="text" name="nazwisko" id="nazwisko"><br>
  rok urodzenia<input type="number" name="rok" id="rok"><br>
  <input type="submit" value="Dodaj">  
  </form>
          <?php
            if(isset($_POST['imie']) && $_POST['nazwisko'])
            {
            $imie = $_POST['imie'];
            $nazwisko = $_POST['nazwisko'];
            $rok = $_POST['rok'];
            $kod =  strtoupper(substr($imie,0,2).substr($nazwisko,0,2)).substr($rok,-0,2);
            echo "<center>";
            echo "Czytelnik $imie $nazwisko został dodany do bazy danych.";
            echo  "</center>";
            $q1="INSERT INTO czytelnicy( imie, nazwisko, kod) VALUES ('$imie','$nazwisko','$kod')";
            $connect->query($q1);
            }
            mysqli_close($connect)
            ?>
  </div>
  
  <div id="right">
  <img src="biblioteka.png" alt="książki">
  <h4>
  ul.Czytelnicza 25<br>
  12-120 Książkowice<br>
  tel:123123123<br>
  e-mail: biuro@biblioteka.pl
  </h4>
  </div>
  
  <div id="footer">
      <a>Projekt strony:00000000000</a>
  </div>
  
  </body>
</html>





