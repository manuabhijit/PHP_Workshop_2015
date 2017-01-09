<html>
<body>

<!-- Dont JUMP -->
ID<?php echo $_POST["id"]; ?><br>
Name<?php echo $_POST["name"]; ?><br>

Gender <?php echo $_POST["gender"]; ?>

<?php

		$host="localhost";
		$username="root";
		$password="";
		$database="workshop";

		$var1=$_POST["id"];
		$var2=$_POST["name"];
		$var3=$_POST["gender"];
		
		mysql_connect($host,$username,$password);
		@mysql_select_db($database) or die( "Unable to select database");
		
		mysql_query("INSERT INTO example1(id,name,gender) VALUES('$var1','var2','var3')") or die (mysql_error());

		mysql_close(mysql_connect($host,$username,$password));
		
		
?>		


</body>
</html>