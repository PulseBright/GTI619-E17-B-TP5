<html>
	<head>
	<title>SUPER SITE ULTRA S&#201;CURE BRO</title>
	</head>

	<body>
		<div>
			Login : <input type="text" id="login"/>
			Password : <input type="text" />
			<input type="button" value="LOG THE FUCK IN BRO" onclick="runMyFunction()"/>
		</div>
	</body>


</html>


<?php

#use Illuminate\Support\Facades\DB;



function runMyFunction() {
    echo 'I just ran a php function';
  }

  if (isset($_GET['hello'])) {
    runMyFunction();
  }

?>