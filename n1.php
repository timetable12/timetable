<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="n1.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<body>
  <script type="text/javascript">
    
  var arr =[];
  var js1,yu;
function firstFunc(temp)
  { 

$.ajax({
        type: "POST",
        url: 'AjaxCall.php',
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
  <li><a id="1" href="AjaxCall.php?id=1">SEM 1</a></li>
  <li><a id="2" href="AjaxCall.php?id=2">SEM 2</a></li>
  <li><a id="3" href="AjaxCall.php?id=3">SEM 3</a></li>
  <li><a id="4" href="AjaxCall.php?id=4">SEM 4</a></li>
  <li><a id="5" href="AjaxCall.php?id=5">SEM 5</a></li>
  <li><a id="6" href="AjaxCall.php?id=6">SEM 6</a></li>
  <li><a id="7" href="AjaxCall.php?id=7">SEM 7</a></li>
  <li><a id="8" href="AjaxCall.php?id=8">SEM 8 </a></li>
  <li><a id="9" href="AjaxCall.php?id=9">SEM 9</a></li>
  <li><a id="10" href="AjaxCall.php?id=10">SEM 10</a></li>
  
</ul>
</div>



 
</body>
</html>