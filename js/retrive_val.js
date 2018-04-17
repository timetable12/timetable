var retrievedData = localStorage.getItem("q");
var table = JSON.parse(retrievedData);
  for(var i=0;i<9;i++){
   document.getElementById("t"+i).innerHTML = table[i]; 
  }