<?php
 require_once 'cnn/cnn.php';

 $keyword = $_POST['keyword'];

   
// $sql = "SELECT end,route FROM price like '".$keyword."%' ORDER BY end ASC LIMIT 0, 10  ";
$sql = "SELECT id,end,route FROM price where end like '".$keyword."%' ORDER BY end ASC LIMIT 0, 10  ";
$result = $conn->query($sql);


//$row = $result->fetch_assoc();


//echo $row['model']." <br>";
//$row =  mysql_fetch_assoc($result);
 //$row = $result->fetch_assoc() ; 
 
 //$query->execute();
// $list = $query->fetchAll();
 $row = null; 

     while($row = $result->fetch_assoc()) {
         
         $id = $row['id'];
         $end = $row['end'];
         $route = $row['route'];
         
        
           //  echo   "<li onclick="set_item(\''.str_replace("'", "\'", $row['end']).'\')" >".$row['end']." </li>";
    
echo '<li onclick="set_item30(\''.str_replace("'", "\'", ucfirst(strtolower($end))."-".ucfirst(strtolower($route)) ).'\'); set_item32(\''.$id.'\')   ">'.ucfirst(strtolower($end)).'-'.ucfirst(strtolower($route)).'</li>';


     }

       
     
       
        
      $conn->close();  
            //  mysqli_free_result($result);

 // if (!$row) {
  //  throw new Exception("Database Error [{$this->database->errno}] {$this->database->error}");
//}
       
        
    
    
   
//if ($result->num_rows > 0) {  
//    
//    while($row = $result->fetch_assoc()) {
//        
//       $row['model']." <br>";
//
//    }
//     
//}
//else
//    
//{
//    echo "noresult";
//}

//echo $sql;
?>