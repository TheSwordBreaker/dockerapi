
<!DOCTYPE html> 
<html> 
      
<head>  
    <title> 
        My Store
    </title> 
      
    <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> 
    </script> 
      
    <script> 
        $(document).ready(function() { 
            $("li:parent").css("background-color", "green"); 
        }); 
    </script> 
</head>  
  
<body>  
  
   <h2> Hii I am happy !!</h2>   
    <button>Click</button> 
    <p id="h11"></p>
      
   
    <script> 
        $(document).ready(function() { 
            $("button").click(function() { 
                $.ajax({url: "http://product-service/",  
                        success: function(result) { 
                    $("#h11").html(result); 
                }}); 
            }); 
        }); 
    </script> 
</body> 
  
</html> 
