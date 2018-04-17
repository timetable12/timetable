   var dt = new Date();
var s=dt.getMonth()+1;


if((s<=6)&&(s>1))
 { 	
    
     document.getElementById("demo").innerHTML = "Session : JAN-JUNE , "+dt.getFullYear(); 
    
 }
  else
    {
     document.getElementById("demo").innerHTML ="Session : JULY-DEC , "+dt.getFullYear();
     }

