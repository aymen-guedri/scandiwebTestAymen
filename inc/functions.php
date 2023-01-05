<?php
function connect(){
  // 1- connexion vers la BD

$servername = "localhost";
$DBuser="root";
$DBname = "scandiweb";
$DBpassword = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$DBname", $DBuser, $DBpassword);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
 // echo "Connection failed: " . $e->getMessage();
}
return $conn;
}

// product with zize MB

function getAllProducts(){
    $hostName = "localhost";
    $userName = "root";
    $password = "";
    $databaseName = "scandiweb";
    try {
        $conn = new PDO("mysql:host=$hostName;dbname=$databaseName", $userName, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
    
  
  
  // 2- creatation de la requtte
  $requette="SELECT * FROM product";
  
  // 3 - execution de la requtte
  $result=$conn->query($requette);
  
  // 4- resultat de la requtte
 
  $products =$result->fetchALL();


  return $products;
  

}




// product with Furniture
function getAllProductsF(){
    $hostName = "localhost";
    $userName = "root";
    $password = "";
    $databaseName = "scandiweb";
    try {
        $conn = new PDO("mysql:host=$hostName;dbname=$databaseName", $userName, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
    
  
  
  // 2- creatation de la requtte
  $requette="SELECT * FROM product2";
  
  // 3 - execution de la requtte
  $result=$conn->query($requette);
  
  // 4- resultat de la requtte
 
  $productsF =$result->fetchALL();


  return $productsF;
  

}













// product with Book
function getAllProductsBook(){
    $hostName = "localhost";
    $userName = "root";
    $password = "";
    $databaseName = "scandiweb";
    try {
        $conn = new PDO("mysql:host=$hostName;dbname=$databaseName", $userName, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
    
  
  
  // 2- creatation de la requtte
  $requette="SELECT * FROM product3";
  
  // 3 - execution de la requtte
  $result=$conn->query($requette);
  
  // 4- resultat de la requtte
 
  $productsB =$result->fetchALL();


  return $productsB;
  

}








function Addproduct1($data){
  $conn=connect();


  $requette="INSERT INTO product(SKU,Name,Price,size)VALUES('".$data['SKU']."','".$data['Name']."','".$data['Price']."','".$data['size']." ')";


  $resultat=$conn->query($requette);

  if($resultat){
    return true;
  }else{
    return false;
  }
}





function AddProduct2($data){
  $conn=connect();


  $requette="INSERT INTO product2(SKU,Name,Price,Width,Hight,Length)VALUES('".$data['SKU']."','".$data['Name']."','".$data['Price']."','".$data['Width']." ','".$data['Hight']." ','".$data['Length']." ')";


  $resultat=$conn->query($requette);

  if($resultat){
    return true;
  }else{
    return false;
  }
}

function Addproduct3($data){
  $conn=connect();


  $requette="INSERT INTO product3(SKU,Name,Price,Weight)VALUES('".$data['SKU']."','".$data['Name']."','".$data['Price']."','".$data['Weight']." ')";


  $resultat=$conn->query($requette);

  if($resultat){
    return true;
  }else{
    return false;
  }
}







?>
