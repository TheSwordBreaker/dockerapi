
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
                $.ajax({url: "http://"+document.location.hostname+":8080/",  
//                     headers: {
//     // Set any custom headers here.
//     // If you set any non-simple headers, your server must include these
//     // headers in the 
//     'Access-Control-Allow-Headers' : "*"
//     // response header.
//   },
                        success: function(result) { 
                    $("#h11").html(result); 
                },error: function(result) { 
                    $("#h11").html("not working"); 
                }
                
                
                }); 
            }); 
        }); 

        
    </script> 
</body> 
  
</html> 
