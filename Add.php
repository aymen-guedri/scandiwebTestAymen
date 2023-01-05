<?php
session_start();

include "inc/functions.php";





if(!empty($_POST)){

 if ($_POST['productType']=='DVD') {
  Addproduct1($_POST);
  header('location:index.php');
 }elseif ($_POST['productType']=='Furniture') {
  AddProduct2($_POST);
  header('location:index.php');
 }elseif ($_POST['productType']=='Book') {
  AddProduct3($_POST);
  header('location:index.php');
 }else {
  echo"Please select the type";
 }
      
}





 
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
  <form action="#" name="form" id="form" method="POST" >
    <section>
        <header>
            <div class="title">Product Add</div>
              <nav class="navbar">
               <ul class="nav-items">
                 <li class="nav-item"><input type="submit" id="submit" class="nav-link" value="Save"/></li>
                 <li class="nav-item" id="delete-product-btn"><input type="reset"class="nav-link" value="Cancel"/></li>
               </ul>
             </na>
         </header>
         <div>
          <hr/>
         </div>
        
      </section>

      <section> 
        
        <div class="grid-container">
          <div class="grid-item"><label for="SKU">SKU</label></div>
          <div class="grid-item"><input class="input" type="text" id="SKU" name="SKU" required="required"></div>
          <div class="grid-item"><label for="Name">Name</label></div>
          <div class="grid-item"><input class="input" type="text" id="Name" name="Name" required="required"></div>
          <div class="grid-item"><label for="Price">Price ($)</label></div>
          <div class="grid-item"><input class="input" type="number" id="Price" name="Price" required="required"> </div>
          <div class="grid-item"><label for="Switch">Type Switcher</label></div>

          <div class="grid-item">
            <select name="productType" id="productType" class="input" onchange="displaySelectInput(this);">
              <option id="" value="Type Switcher">Type Switcher</option>
              <option id="DVD" value="DVD">DVD</option>
              <option id="Furniture" value="Furniture">Furniture</option>
              <option id="Book" value="Book">Book</option>
            </select>
          </div>
          <div id="ifYes1" style="display: none;"class="grid-item"><label for="size">Size(BM)</label></div>
          <div id="ifYes2" style="display: none;" class="grid-item"><input class="input" type="text" id="size" name="size"  ></div>
          <span id="desc1" style="display: none;" class="description">Please provide Dimensions in MB format</span>
          
          




          <div id="ifYes3" style="display: none;"class="grid-item"><label for="fname">Hight(CM)</label></div>
          <div id="ifYes4" style="display: none;" class="grid-item"><input class="input" type="text" id="Hight" name="Hight" ></div>

          <div id="ifYes5" style="display: none;"class="grid-item"><label for="fname">Width(CM)</label></div>
          <div id="ifYes6" style="display: none;" class="grid-item"><input class="input" type="text" id="Width" name="Width"></div>

          <div id="ifYes7" style="display: none;"class="grid-item"><label for="fname">Length(CM)</label></div>
          <div id="ifYes8" style="display: none;" class="grid-item"><input class="input" type="text" id="Length" name="Length"></div>
          <span id="desc2" style="display: none;" class="description">Please provide Dimensions in CM format</span>
          


          <div id="ifYes9" style="display: none;"class="grid-item"><label for="fname">Weight(KG)</label></div>
          <div id="ifYes10" style="display: none;" class="grid-item"><input class="input" type="text" id="Weight" name="Weight"></div>
          <span id="desc3" style="display: none;" class="description">Please provide Dimensions in KG format</span>
          
        </div>
     
      </section>

  
     
      

      </form>



      <footer class="footer">
        <div>
            <hr/>
           </div>
           <div class="footer_text">Scandiweb Test Assignment</div>
    </footer>
</body>


</html>