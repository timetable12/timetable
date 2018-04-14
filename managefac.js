function updateFn(){
		document.getElementById("fac_table").style.display ="inline";
	    }
   function addFn(){
		document.getElementById("add").style.display ="inline";
	 }
    function addFac(){
	  var n =document.getElementById("textfac").value;
	   document.write('<form action="" method="POST"><table><tr><th>Faculty Name</th><th>Lectures Allocated</th></tr>');
	   	document.write('<input type="text" name="no" value="'+n+'" hidden>');
       for(var i=0;i<n;i++)
         { 
           document.write('<td ><input type="text" name ="names'+i+'"></td>');
           document.write('<td ><input type="text" name ="lectures'+i+'"></td></tr>');
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


function f1(myid,name,Lectures){//getting values for updation
    document.getElementById("text_box").style.display ="inline";
    document.getElementById("id").value =myid;
    document.getElementById("name").value =name;
document.getElementById("lect").value =Lectures;
  }