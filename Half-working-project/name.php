
<?php
require_once 'connect.php';

  if(isset($_POST['name']) && !empty($_POST['name'])){
      $name = trim($_POST['name']);
      $sql = "SELECT * FROM car WHERE name LIKE '%$name%'";
      $result = $conn->query($sql);
      if($result->num_rows > 0){
        while ($rowCar = $result->fetch_assoc()) {
                  echo "Marka: " . $rowCar['name'] . " , model: " .  $rowCar['model'] ;
            }

      }else{
        echo "Sorry nie ma takiego modelu w naszej bazie";
      }
  }

?>
