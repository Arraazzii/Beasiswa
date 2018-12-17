<?php
include_once '../../includes/db_connect.php';
include_once '../../includes/psl-config.php'; 
$error_msg = ""; 
if (isset($_POST['username'], $_POST['email'], $_POST['p'], $_POST['tlpn'], $_POST['idu'])){
    // Sanitize and validate the data passed in
	$idu = filter_input(INPUT_POST, 'idu', FILTER_SANITIZE_STRING);	
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
	$tlpn = filter_input(INPUT_POST, 'tlpn', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Not a valid email
        $error_msg .= '<p class="error">The email address you entered is not valid</p>';
    }
 
    $password = filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING);
    if (strlen($password) != 128) {
        // The hashed pwd should be 128 characters long.
        // If it's not, something really odd has happened
        $error_msg .= '<p class="error">Invalid password configuration.</p>';
    }
 
    // Username validity and password validity have been checked client side.
    // This should should be adequate as nobody gains any advantage from
    // breaking these rules.
    //

 
    // check existing username
   // $prep_stmt = "SELECT id FROM members WHERE username = ? LIMIT 1";
//    $stmt = $mysqli->prepare($prep_stmt);
// 
//    if ($stmt) {
//        $stmt->bind_param('s', $username);
//        $stmt->execute();
//        $stmt->store_result();
 
                //if ($stmt->num_rows == 1) {
                        // A user with this username already exists
                        //$error_msg .= '<p class="error">A user with this username already exists</p>';
					//	$error_msg.=
						//'<div class="alert alert-warning alert-dismissible wow shake" role="alert">
//  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
//  <strong>Peringatan Username sudah terdaftar di dalam sistem!</strong>
//</div>';
                       // $stmt->close();
                //}
                //$stmt->close();
       // } else {
                //$error_msg .= '<p class="error">Database error line 55</p>';
		//		$error_msg.='<div class="alert alert-warning alert-dismissible" role="alert">
  //<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  //<strong>Database error line 55.</strong>
//</div>';
              // $stmt->close();
       // }
//    $prep_stmt = "SELECT id FROM members WHERE email = ? LIMIT 1";
//    $stmt = $mysqli->prepare($prep_stmt);
 
 //  // check existing email  
//    if ($stmt) {
//        $stmt->bind_param('s', $email);
//        $stmt->execute();
//        $stmt->store_result();
// 
//        if ($stmt->num_rows == 1) {
//            // A user with this email address already exists
//           // $error_msg .= '<p class="error">A user with this email address already exists.</p>';
//		   $error_msg.='<div class="alert alert-warning alert-dismissible wow shake" role="alert">
//  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
//  <strong>Peringatan! Email Sudah terdaftar di dalam sistem</strong>
//</div>';
//		   
//                        //$stmt->close();/////////////////////////////////////////////////////////////////
//        }
//                $stmt->close();
//    } else {
//        //$error_msg .= '<p class="error">Database error Line 39</p>';
//		$error_msg.='<div class="alert alert-warning alert-dismissible" role="alert">
//  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
//  <strong>Database error Line 39.</strong>
//</div>';
//                //$stmt->close();/////////////////////////////////////////////////////////////////
//    }		
		
		/* check existing tlp
    $prep_stmt = "SELECT id FROM members WHERE itlp = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);
 
    if ($stmt) {
        $stmt->bind_param('s', $tlpn);
        $stmt->execute();
        $stmt->store_result();
 
                if ($stmt->num_rows == 1) {
                         A user with this username already exists
                        $error_msg .= '<p class="error">A user with this tlpn already exists</p>';
                        $stmt->close();
                }
                $stmt->close();
        } else {
                $error_msg .= '<p class="error">Database error line 55</p>';
               $stmt->close();
        }*/
 
    // TODO: 
    // We'll also have to account for the situation where the user doesn't have
    // rights to do registration, by checking what type of user is attempting to
    // perform the operation.
 
    if (empty($error_msg)) {
        // Create a random salt
        //$random_salt = hash('sha512', uniqid(openssl_random_pseudo_bytes(16), TRUE)); // Did not work
        $random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
 
        // Create salted password 
        $password = hash('sha512', $password . $random_salt);
 
        // Insert the new user into the database 
       //if ($insert_stmt = $mysqli->prepare("INSERT INTO members (username, email, password, salt, itlp) VALUES (?, ?, ?, ?,?)")) {
		   
$sql = "UPDATE members SET password='".$password."', salt='".$random_salt."' WHERE id='".$idu."'";	

mysql_query($sql);
//$insert_stmt = $mysqli->prepare($sql); username='".$username."', email='".$email."', , itlp='".$tlpn."'
//$insert_stmt->execute();password='".$password."', salt='".$random_salt."',
	   
		   //if ($insert_stmt = $mysqli->prepare("UPDATE members SET username=:'asmo', email=:'mail', password=:'pwd1', salt=:'pwd2', itlp=:'tilpun' WHERE id=:'idu'")) {
            //$insert_stmt->bind_param('sssss', $username, $email, $password, $random_salt, $tlpn);
			//if($insert_stmt = $mysqli->prepare($sql)){
				
			//$insert_stmt->bind_param('idu', $idu);
//			$insert_stmt->bind_param('asmo', $username);
//			$insert_stmt->bind_param('mail', $email);
//			$insert_stmt->bind_param('pwd1', $password);
//			$insert_stmt->bind_param('pwd2', $random_salt);
//			$insert_stmt->bind_param('tilpun',$tlpn);
		//	$insert_stmt->execute();
            // Execute the prepared query.
          //  if (! $insert_stmt->execute()) {
           //     header('Location: ../error.php?err=Registration failure: INSERT');
            //}
       // }
        
		//header('Location: Pendaftaran_user.html');
		?>
		<script>
		 window.location.replace("Akun_user.html");
		</script>
		<?php 
    }
}