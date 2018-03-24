 
 var sem =[];
   $(document).ready(function() {


            /* This would select all the divisions */
           // $("div").css("background-color", "yellow");
   var myTable = [];


for (var i = 0; i<9; i++) {

  myTable[i] = document.getElementById("t"+i).innerText;

}


if (typeof(Storage) !== "undefined") { 
   
    //localStorage["a"] = JSON.stringify(myTableArray);
    localStorage.setItem("w", JSON.stringify(myTable));
 
} else {
    document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
}
  






    var dt = new Date();
var s=dt.getMonth()+1;


if((s<=6)&&(s>1))
 { 	
    
     document.getElementById("demo").innerHTML = "Session:JAN-JUNE,"+dt.getFullYear(); 
    
 }
  else
    {
     document.getElementById("demo").innerHTML ="Session:JULY-DEC,"+dt.getFullYear();
     }







if((s<=6)&&(s>1))
 { 	
	for (var i = 0;i <= 5; i++) {
		
	     sem[i]=(2*i);
     }
      
 }
  else
    {
      for (var i = 0; i <= 5; i++) {
           		
            sem[i]=((2*i)+1);	       
	      
	     
	         }
     
     }
});

   function showbutton()
 {
 document.getElementById("s1").style.display="inline";  
 }

function showf(){
	var dt = new Date();
var s=dt.getMonth()+1;

 if((s<=6)&&(s>1))
 { 	
    
     document.getElementById("s21").innerHTML = "<h2>NOTE:</h2>Enter even semesters only in range.";
    
 }
  else
    {
     document.getElementById("s21").innerHTML ="<h2>NOTE:</h2>Enter odd semesters only in range.";
     }


     document.getElementById("s2").style.display="inline";
 }



function tdisplay(){
 	document.getElementById("tt").style.display="inline";
 	document.getElementById("s2").style.display="none";
 	 var textarr =[];
 	  	 	for (var i =1; i <= 3; i++) {
 	  	   textarr[i]=	document.getElementById(i).value;
 	       document.getElementById("t"+(i+5)).innerHTML =textarr[i]+" sem";
         }
 	}
 
    
     
var r =2;
var d= 5;
var h =2;



function NextFunc(){

        var myArray = [];


for (var i = 0; i<9; i++) {

  myArray[i] = document.getElementById("t"+i).innerText;

}


if (typeof(Storage) !== "undefined") { 
   
    //localStorage["a"] = JSON.stringify(myTableArray);
    localStorage.setItem("w", JSON.stringify(myArray));
 
} else {
    document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
}
  
   
    	   rearrange1();
    	   rearrange2();
    	   //rearrange3();
    }

function Prevfunc(){

  var retrievedData = localStorage.getItem("w");
var table = JSON.parse(retrievedData);
  for(var i=0;i<9;i++){
   document.getElementById("t"+i).innerHTML = table[i]; 
  }
  


}

function rearrange1(){

   for (var i=r ;i>=r;)
    {
        var temp = sem[i];
       sem[i]=sem[--i];
       sem[i]=temp;
     }
   
 //init();

    for (var i = 0; i <= 2; i++)
    {
    if(sem[i]===0)
    document.getElementById("t"+i).innerHTML ="Empty slot";
    else  
     document.getElementById("t"+i).innerHTML =sem[i]+" sem";
    }
 }




 function init()
 {
    
    if(d===4)
      d=5;
    else
      d--;

    if(r===1)
      r=2;
    else 
      r--;
  if(h===1)
      h=2;
    else 
      h--;
  }


function rearrange2()
{   
	
  
   for (var i=d ;i>=d;) 
   {
        var temp = sem[i];
       sem[i]=sem[--i];
       sem[i]=temp;
   }
   
   init();
  
   for (var i = 3; i <= 5; i++) 
   {  
     document.getElementById("t"+i).innerHTML =sem[i]+" sem";
   }
 }

/*function rearrange3(){
   for (var i=h ;i>=h;)
    {
        var temp = textarr[i];
       textarr[i]=textarr[--i];
       textarr[i]=temp;
     }
   
 //init();
    for (var i = 0; i <= 2; i++)
    {
    
     document.getElementById("t"+(i+6)).innerHTML =textarr[i]+" sem";
    }
 }
*/
function Okfunc(){
 var myTableArray = [];


for (var i = 0; i<9; i++) {

  myTableArray[i] = document.getElementById("t"+i).innerText;

}


if (typeof(Storage) !== "undefined") { 
   
    //localStorage["a"] = JSON.stringify(myTableArray);
    localStorage.setItem("q", JSON.stringify(myTableArray));
 
} else {
    document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
}
  

   }
