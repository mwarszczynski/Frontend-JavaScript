
<?php
require_once 'connect.php';

  if(isset($_POST['name']) && !empty($_POST['name'])){
      $nameQuad = trim($_POST['name']);
      $sql = "SELECT * FROM quad WHERE name LIKE '%$nameQuad%'";
      $result = $conn->query($sql);
      if($result->num_rows > 0){
        while ($rowQuad = $result->fetch_assoc()) {
                  echo "nameQuad: " . $rowQuad['name'] . ", model: " .  $rowQuad['model'] ;
            }

      }else{
        echo "Sorry nie ma takiego modelu w naszej bazie";
      }
  }

?>

