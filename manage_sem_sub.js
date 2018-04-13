function updateFn(){
		document.getElementById("sem_table").style.display ="inline";
	    }
   function addFn(){
		document.getElementById("add").style.display ="inline";
	 }
    function addSub(){
	  var n =document.getElementById("textsub").value;
	   document.write('<form action="" method="POST"><table><tr><th>Subject ID</th><th>Subject Name</th><th>Semester</th></tr>');
	   	document.write('<input type="text" name="no" value="'+n+'" hidden>');
       for(var i=0;i<n;i++)
         { 
         	document.write('<td ><input type="text" name ="id'+i+'"></td>');
           document.write('<td><input type="text" name ="names'+i+'"></td>');
           document.write('<td><input type="text" name ="sem'+i+'"></td></tr>');
         }
        document.write('</table><br><input type="submit" value ="Submit"></form>');	
     }

function removeFn(){
		document.getElementById("rem_table").style.display ="inline";
	}
function r1(myid){//getting values for deletion
    $.ajax({
      type: "POST",
      url: 'AjaxCall.php',
      data: ({idValue:"myid"}),
      success: function(data) {
        alert(data);
      }
    });
}
function s1(myid,name,sem){//getting values for updation
    document.getElementById("text_box").style.display ="inline";
    document.getElementById("sid").value =myid;
    document.getElementById("sname").value =name;
    document.getElementById("sem").value =sem;
  }