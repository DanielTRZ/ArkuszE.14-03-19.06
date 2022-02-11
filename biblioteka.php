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
      mysqli_close($connect)
      ?>
   
  </div>
  
  
  <div id="center">
     <h3>Dodaj nowego czytelnika</h3>
     <form method="post">
         imię<input type="text"><br>
         nazwisko<input type="text"><br>
         rok urodzenia<input type="number"><br>
         <input type="button" value="Dodaj">
         
         
         
     </form>
      
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