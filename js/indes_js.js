function getProducts(userinput)
{
    
    if (userinput=="")
        {
            
            document.getElementById("result").innerHTML ="";
        }
   
    
    else 
        {
            var xmlhttp =new XMLHttpRequest;
            
            xmlhttp.onreadystatechange=function() {
                
                
                if(this.readyState ==4 && this.status==200)
                    {
                        document.getElementById("result").innerHTML=this.responseText;
                    }
            }
            
            
            
            
            xmlhttp.open("get","test.php?q="+userinput);
            xmlhttp.send();
        }
    
    
}