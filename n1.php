<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="n1.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<body>
  <script type="text/javascript">
    
  
function firstFunc(temp)
  { 

$.ajax({
        type: "POST",
        url: 'Ajax.php',
        data: { 'section': temp},
        success: function(data)
        {
            alert(data);
        }
    }); 

}

</script>
<div id="nav-bar">
    <ul >
  <li><a class="active" href="#home">Home</a></li>
 
  <li><a id="2" href="AjaxCall.php?id=2">SEM 2</a></li>
  
  <li><a id="4" href="AjaxCall.php?id=4">SEM 4</a></li>
  
  <li><a id="6" href="AjaxCall.php?id=6">SEM 6</a></li>
  
  <li><a id="8" href="AjaxCall.php?id=8">SEM 8 </a></li>
  
  <li><a id="10" href="AjaxCall.php?id=10">SEM 10</a></li>
  
</ul>
</div>



 
</body>
</html>