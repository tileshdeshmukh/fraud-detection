
<?php 
  
  header("Content-Type: application/json"); 
    
  $data = json.parse(file_get_contents("php://input")); 
    
  echo $data; 
    
  ?> 
  