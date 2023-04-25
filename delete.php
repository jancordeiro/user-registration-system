<?php

    if(!empty($_GET['id']))
    {
        
        include_once('config.php');
		
		$id = $_GET['id'];
		
		$sqlSelect = "SELECT * FROM user WHERE id=$id";
		
		$result = $conexao->query($sqlSelect);
		
		if($result->num_rows > 0)
		{
			$sqldelete = "DELETE FROM user WHERE id=$id";
			$resultdelete = $conexao->query($sqldelete);			
		}
		
	}	
	header('Location: dashboard.php');
?>