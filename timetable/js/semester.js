$(document).ready(function() {
	var dt = new Date();
var s=dt.getMonth()+1;
if((s<=6)&&(s>1))
 {  
    for (var int = 1; int <6; int++) {
     document.getElementById("h"+int).innerHTML = 2*int; 
    
 }}
  else
    {
    	for (var int = 0; int <5; int++){
     document.getElementById("h"+i).innerHTML = 2*int+1;
     }
}});