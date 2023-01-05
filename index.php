<?php
session_start();
include "inc/functions.php";

$products=getAllProducts();
$productsF=getAllProductsF();
$productsB=getAllProductsBook();


$conn=connect();

if(isset($_POST['but_delete'])){

    if(isset($_POST['delete'])){
      foreach($_POST['delete'] as $deleteid){
  
        $deleteUser = "DELETE from product WHERE id=".$deleteid;
        $resultat=$conn->query($deleteUser);
        if($resultat){
            header('location:delete.php');
          }else{
            return false;
          }
      }
    }
   
}





if(isset($_POST['but_delete'])){

    if(isset($_POST['delete'])){
      foreach($_POST['delete'] as $deleteid){
  
        $deleteUser = "DELETE from product WHERE id=".$deleteid;
        $resultat=$conn->query($deleteUser);
        if($resultat){
            header('location:delete.php');
          }else{
            return false;
          }


        $deleteUser2 = "DELETE from product2 WHERE id=".$deleteid;
        $resultat2=$conn->query($deleteUser2);
        if($resultat2){
            header('location:delete.php');
          }else{
            return false;
          }



        $deleteUser3 = "DELETE from product3 WHERE id=".$deleteid;
        $resultat3=$conn->query($deleteUser3);
        if($resultat3){
            header('location:delete.php');
          }else{
            return false;
          }





      }
    }
   
}






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Assignment</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body >
<form action="#" method="post">
    <section>
      <header>
          <div class="title">Product List</div>
            <nav class="navbar">
             <ul class="nav-items">
               <li class="nav-item"><a href="Add.php" class="nav-link">ADD</a></li>
              
               <li class="nav-item" id="delete-product-btn"><input type="submit" id="delete-product-btn" name='but_delete' class="nav-link" value="MASS DELETE"/></li>
             </ul>
           </na>
       </header>
       <div>
        <hr/>
       </div>
      
    </section>


    <section>
    
        
   <div class="products"> 

   <?php
   foreach ($products as $product) {
    $id = $product['id'];
    print'
   

    

    <div class="product">
       <div class="loula">
        <form>
        <input type="checkbox" class="delete-checkbox" name="delete[]" value='.$id.' />
        </form>
              </div>

        <div class="thenya">
            <ul>
                <li>'.$product['SKU'].'</li>
                <li>'.$product['Name'].'</li>
                <li>'.$product['Price'].'$</li>
                <li>size:'.$product['size'].' MB</li>

                
                
            </ul>
        </div>
    </div>';

   }

   ?>



<?php
   foreach ($productsF as $product2) {
    $id = $product2['id'];
    print'
   

    

    <div class="product">
       <div class="loula">
        <form>
        <input type="checkbox" name="delete[]" value='.$id.' />
       
              </div>

        <div class="thenya">
            <ul>
                <li>'.$product2['SKU'].'</li>
                <li>'.$product2['Name'].'</li>
                <li>'.$product2['Price'].'$</li>
                <li>Dim:'.$product2['Hight'].' * '.$product2['Width'].' * '.$product2['Length'].'</li>

                
                
            </ul>
        </div>
    </div>';

   }

   ?>


<?php
   foreach ($productsB as $product3) {
    $id = $product3['id'];
    print'
   

    

    <div class="product">
       <div class="loula">
        
       <input type="checkbox" name="delete[]" value='.$id.' />
        
              </div>

        <div class="thenya">
            <ul>
                <li>'.$product3['SKU'].'</li>
                <li>'.$product3['Name'].'</li>
                <li>'.$product3['Price'].'$</li>
                <li>Weight:'.$product3['Weight'].' KG</li>

                
                
            </ul>
        </div>
    </div>';

   }

   ?>

   </div>
    
   
   </form>
</section>
 

<footer class="footer">
    <div>
        <hr/>
       </div>
       <div class="footer_text">Scandiweb Test Assignment</div>
</footer>

</body>
</html>