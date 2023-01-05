function displaySelectInput(that) {
    if (that.value == "DVD") {
        document.getElementById("ifYes1").style.display = "block";
        document.getElementById("ifYes2").style.display = "block";
        document.getElementById("ifYes3").style.display = "none";
        document.getElementById("ifYes4").style.display = "none";
        document.getElementById("ifYes5").style.display = "none";
        document.getElementById("ifYes6").style.display = "none";
        document.getElementById("ifYes7").style.display = "none";
        document.getElementById("ifYes8").style.display = "none";
        document.getElementById("ifYes9").style.display = "none";
        document.getElementById("ifYes10").style.display = "none";
        document.getElementById("desc1").style.display = "block";
        document.getElementById("desc2").style.display = "none";
        document.getElementById("desc3").style.display = "none";
        
        

        

    } else if (that.value == "Furniture"){
        document.getElementById("ifYes1").style.display = "none";
        document.getElementById("ifYes2").style.display = "none";
        document.getElementById("ifYes3").style.display = "block";
        document.getElementById("ifYes4").style.display = "block";
        document.getElementById("ifYes5").style.display = "block";
        document.getElementById("ifYes6").style.display = "block";
        document.getElementById("ifYes7").style.display = "block";
        document.getElementById("ifYes8").style.display = "block"; 
        document.getElementById("ifYes9").style.display = "none";
        document.getElementById("ifYes10").style.display = "none";  
        document.getElementById("desc1").style.display = "none";
        document.getElementById("desc2").style.display = "block";
        document.getElementById("desc3").style.display = "none"; 
        
        




    }else if (that.value == "Book"){
        document.getElementById("ifYes1").style.display = "none";
        document.getElementById("ifYes2").style.display = "none";
        document.getElementById("ifYes3").style.display = "none";
        document.getElementById("ifYes4").style.display = "none";
        document.getElementById("ifYes5").style.display = "none";
        document.getElementById("ifYes6").style.display = "none";
        document.getElementById("ifYes7").style.display = "none";
        document.getElementById("ifYes8").style.display = "none";
        document.getElementById("ifYes9").style.display = "block";
        document.getElementById("ifYes10").style.display = "block";
        document.getElementById("desc1").style.display = "none";
        document.getElementById("desc2").style.display = "none";
        document.getElementById("desc3").style.display = "block";




    }else{
        document.getElementById("ifYes1").style.display = "none";
        document.getElementById("ifYes2").style.display = "none";
        document.getElementById("ifYes3").style.display = "none";
        document.getElementById("ifYes4").style.display = "none";
        document.getElementById("ifYes5").style.display = "none";
        document.getElementById("ifYes6").style.display = "none";
        document.getElementById("ifYes7").style.display = "none";
        document.getElementById("ifYes8").style.display = "none";
        document.getElementById("ifYes9").style.display = "none";
        document.getElementById("ifYes10").style.display = "none";
        document.getElementById("desc1").style.display = "none";
        document.getElementById("desc2").style.display = "none";
        document.getElementById("desc3").style.display = "none";




        
    }


  

}

