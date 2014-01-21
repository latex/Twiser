<?php
	//conexao bnco de dados
	function conect(){
		
		$conn=mysqli_connect("localhost","root","","twitts");
		if (mysqli_connect_errno())
  			{
 			 echo "Failed to connect to MySQL: " . mysqli_connect_error();
  			}

  		return $conn;
	}

	function select($tw){
		
		$result = mysqli_query($con,"SELECT * FROM texto");

		while($row = mysqli_fetch_array($result))
  		{
  			echo $row['texto'];
  		}

		mysqli_close($con);

	}
	function insert($tw)
	{
		$con = conect();
		mysqli_query($con,"INSERT INTO TWITTS (texto) VALUES ($tw)");
		return true;
	}


	function save($i){
		$conn= mysqli_connect("127.0.0.1","root","","TWITTS");
		if (mysqli_connect_errno())
  			{
 			 echo "Failed to connect to MySQL: " . mysqli_connect_error();
  			}

  			//$db_selected = mysql_select_db('TWITTS', $conn);
  			mysqli_query($conn,"INSERT INTO TWITTS.TWITTS (texto) VALUES ($i)");

  		return $conn;
	}
?>