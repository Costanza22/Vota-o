<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<p>Hello World</p>'

<?php
	//Sample Database Connection Syntax for PHP and MySQL.
	
	//Connect To Database
	
	$hostname="your_hostname";
	$username="your_dbusername";
	$password="your_dbpassword";
	$dbname="your_dbusername";
	$usertable="your_tablename";
	$yourfield = "your_field";
	
	mysqli_connect($hostname,$username, $password) or die ("html>script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)/script>/html>");
	mysqli_select_db($dbname);
	
	# Check If Record Exists
	
	$query = "SELECT * FROM $usertable";
	
	$result = mysqli_query($query);
	
	if($result){
		while($row = mysqli_fetch_array($result)){
			$name = $row["$yourfield"];
			echo "Name: ".$name."br/>";
		}
	}
?>
    


    <h2>
      A Conexao foi somente usada como demonstração, por isso foi usado PHP.
      Para a conexao não dar erro foi necessario criar o banco no MYSQL Workbreach com o Xampp.
      
    </h2>
    
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>
