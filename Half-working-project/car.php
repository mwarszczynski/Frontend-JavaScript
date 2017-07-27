<?php

	$host = "localhost";
	$db_user = "dbuser_name";
	$db_password = "pswd_";
	$db_name = "db_name";

  $car = mysql_query('SELECT * FROM car') or die('Błąd zapytania');

  echo "<div class='tab-content'>";
  if(mysql_num_rows($car) > 0) {

      echo "
      <div id='car' class='tab-pane fade in active'>
          <table class='table table-hover'>
            <thead>
              <tr>
                <th>#</th>
                <th>KONCERN</th>
                <th>MODEL</th>
                <th>KOLOR</th>
              </tr>
            </thead>
            <tbody>
      ";
      while($r = mysql_fetch_assoc($car)) {
          echo "<tr>";
          echo "<th scope='row'>".$r['id']."</th>";
          echo "<td>".$r['concern']."</td>";
          echo "<td>".$r['model']."</td>";
          echo "<td>".$r['color']."</td>";
          echo "</tr>";
      }
      echo "  </tbody></table></div>";
  }

  echo "  </div>";

?>
