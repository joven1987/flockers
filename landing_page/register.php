    <?php

include_once('./db_connection/connection_PDO.php');

    if(isset($_POST['register'])){

        // $user_id = $_POST['user_id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $mobile_no = $_POST['mobile_no'];
        $address = $_POST['address'];
        $email_address = $_POST['email_address'];
        $paypal_account = $_POST['paypal_account'];
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
            $query = $dbConnection->prepare("INSERT INTO users(`username`,`password`,`first_name`,`last_name`,
				`mobile_no`,`address`,`email_address`,`paypal_account`,`date_registered`)
				VALUES(:username, :password, :first_name, :last_name, :mobile_no, :address, :email_address, :paypal_account, :date_registered)");
            $query->bindParam(':username',$username);
            $query->bindParam(':password',$password);
            $query->bindParam(':first_name',$first_name);
            $query->bindParam(':last_name',$last_name);
            $query->bindParam(':mobile_no',$mobile_no);
            $query->bindParam(':address',$address);
            $query->bindParam(':email_address',$email_address);
            $query->bindParam(':paypal_account',$paypal_account);
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
		
		
		
		
