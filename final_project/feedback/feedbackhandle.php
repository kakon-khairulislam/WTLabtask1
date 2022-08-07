<?php include '../controller/checksession.php';
		
		if($_SERVER["REQUEST_METHOD"] == "POST"){

            if(!isset($_POST['feedback']) || empty($_POST['feedback'])){
              header("Location:feedback.php?error= Write Something before send! ");
            }
            
            else{
				if(file_exists('feedback.json')){
					$current_data = file_get_contents('feedback.json');
					$array_data=json_decode($current_data,true);
					$extra = array(
						'Message' => $_POST['feedback']
					);
					$array_data[] = $extra;
					$final_data = json_encode($array_data);
					if(file_put_contents('feedback.json',$final_data)){
			    echo "Thanks for your appreciation";
                echo "<a href='../index.php'> <br>Continue?</a>";
					}
				}
				
			}
		}

	?>


</body>
</html>