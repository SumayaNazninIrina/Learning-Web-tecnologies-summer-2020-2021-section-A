<?php
	session_start();
	if(isset($_POST['submit'])){
		$id = $_POST['id'];
		$password = $_POST['password'];
		if($id != '' && $password != ''){
			if($id=="0"&&$password="0"){
					$_SESSION['flag'] = 'true';
					setcookie('flag','true',time()+300,'/');
					if($reg[0]=$username && $reg[1]=$password){
						echo "done";
                    }
					header('location: ../view/home.php');
			}
			else{
				echo 'invlaid username/password';
			}
		}else{
			echo "null value found...";
		}
	}else{
		echo "invalid request...";
	}
?>