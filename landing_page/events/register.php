    <?php

include_once('db_connection.php');

    if(isset($_POST['register'])){

        // $user_id = $_POST['user_id'];
       
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $first_name = $_POST['first_name'];
		 $middle_name = $_POST['middle_name'];
        $last_name = $_POST['last_name'];
        $mobile_no = $_POST['mobile_no'];
        $email_add = $_POST['email_add'];
        $paypal = $_POST['paypal'];
        $date_registered = date("Y/m/d");
        /*	echo $username."<br>";
            echo $first_name."<br>";
            echo $middle_name."<br>";
            echo $last_name."<br>";
            echo $mobile_no."<br>";
            echo $address."<br>";
            echo $email_address."<br>";
            echo $paypal_account."<br>";
            echo $date_registered;*/


        if($password == $cpassword)
        {
            $query = $db->prepare("INSERT INTO users(`password`,`first_name`,`middle_name`,`last_name`,
				`mobile_no`,`email_add`,`paypal`,`date_registered`)
				VALUES( :password, :first_name, :middle_name, :last_name, :mobile_no, :email_add, :paypal, :date_registered)");
          
            $query->bindParam(':password',$password);
            $query->bindParam(':first_name',$first_name);
			$query->bindParam(':middle_name',$middle_name);
            $query->bindParam(':last_name',$last_name);
            $query->bindParam(':mobile_no',$mobile_no);
            $query->bindParam(':email_add',$email_add);
            $query->bindParam(':paypal',$paypal);
            $query->bindParam(':date_registered',$date_registered);
            $query->execute();

        }
        if($query){
            echo "<script>alert('Congratulations! You can now login your account.')</script>";
        }
        else

        {
            echo "<script>alert('Ops,Please try again. Try checking your password.')</script>";
        }

    }




    ?>	
		
		
		
		
