<?php
session_start();

require_once "connection.php";

// //PHP Mailer Imports for Email Function
//   use PHPMailer\PHPMailer\PHPMailer;
//   use PHPMailer\PHPMailer\Exception;

//   require '../phpmailer/src/Exception.php';
//   require '../phpmailer/src/PHPMailer.php';
//   require '../phpmailer/src/SMTP.php';

//   // This function will return
// // A random string of specified length
// function random_strings($length_of_string) {
 
//     // random_bytes returns number of bytes
//     // bin2hex converts them into hexadecimal format
//     return substr(bin2hex(random_bytes($length_of_string)), 
//                                       0, $length_of_string);
// }


// if(isset($_POST['login']) && $_SERVER['REQUEST_METHOD'] === 'POST'){

//     $mod = $_POST['mod'];

//                 session_start(); 

// //Checking for Correct User Credentials When Logging In
//             if ($mod == 0) {
               
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//         $sql = "SELECT * FROM `users` WHERE `Email_Address`='$email'";

//         $query = mysqli_query($conn,$sql);

//         if(mysqli_num_rows($query) > 0){
//             $row = mysqli_fetch_assoc($query);

//             $pass = $row['Password'];
//             $fname = $row['Fullname'];
//             $_SESSION['type'] = $row['User_Type'];
//             $_SESSION['uid'] = $row['User_ID'];

//         if(md5($password) == $pass){
// //Generate OTP
// $otp = random_strings(16);

//   $sql2 = "INSERT INTO `2fa`(`OTP`) VALUES (md5('$otp'))";

//    mysqli_query($conn, $sql2);

//             //Compose and Send Email
//                 $mail = new PHPMailer(true);

//                 $mail->isSMTP();
//                 $mail->Host = 'smtp.gmail.com';
//                 $mail->SMTPAuth = 'true';
//                 $mail->Username = 'ian.otuoma@strathmore.edu'; //Your Gmail
//                 $mail->Password = 'fnjahlytczbydlcv'; //Your Gmail App Password
//                 $mail->SMTPSecure = 'ssl';
//                 $mail->Port = 465;

//                 $mail->setFrom('ian.otuoma@strathmore.edu'); //Your Gmail
//                 $mail->addAddress($email); //Receiver Address
//                 $mail->isHTML(true);
//                 $mail->Subject = 'Bata Shoes Order Management System Email Services - OTP Password for Login';
//                 $mail->Body = 'Dear Esteemed Client, '. $fname . ',

//                 We truly appreciate you for choosing Bata Shoes, as your trusted source for footware(s) and shoes. Below is your OTP for login attempt at ' .  date("Y-m-d h:i:s") . ', it expires in 3 minutes:
//                 <br>
//                 <br>
//                 <p><b>' . $otp . '</b></p>
//                 <br>
//                 <br>
//                 If you did not request this login attempt, kindly reach out to our IT Support Team & Security to resolve the matter.
//                 <br>
//                 <br>
//                 Kind Regards,
//                 Bata Shoes Order Management System Team.';

//                 $mail->send();

//                 header("Location: ../otp.php");

//             }else{
//                echo "An Error Occured: Incorrect Password."; 
//             }
//         }else{
//             echo "An Error Occured: User Not Found.";
//         }
//     }

// //Checking for Correct OTP When Logging In
//     else if ($mod == 1) {
//     $itp = $_POST['itp']; 

//                 session_start();  

// $sql = "SELECT `2FA_ID` FROM `2fa` WHERE `Expiry_Time` > NOW() AND `Status` = 'Active' AND `OTP` = md5('$itp')";

//         $query = mysqli_query($conn,$sql);

//         if(mysqli_num_rows($query) > 0){
//             $row = mysqli_fetch_assoc($query);

// $fid = $row['2FA_ID'];

//   $sql3 = "UPDATE `2fa` SET `Status` = 'Inactive' WHERE `2FA_ID` = '$fid'";

//    mysqli_query($conn, $sql3);

//         $type = $_POST['type'];
//         $uid = $_POST['uid'];

//         if ($type == "Administrator") {
//                 $_SESSION['adminname'] = $uid;
//                 header("Location: ../index.php");
//                 }else if ($type == "User") {

//                 $_SESSION['username'] = $uid;   

//                 header("Location: ../index1.php");
//                 }
//     }else{
//         echo "An Error Occured: OTP inputted is either wrong or has expired, kindly try again.";
//     }
// }

// //Checking for Correct User Email Address When Resetting Credentials
//             if ($mod == 2) {

//                 session_start();

//                     $email = $_POST['email'];
//     $password = $_POST['password'];
                
//         $sql = "SELECT * FROM `users` WHERE `Email_Address`='$email'";

//         $query = mysqli_query($conn,$sql);

//         if(mysqli_num_rows($query) > 0){
//             $row = mysqli_fetch_assoc($query);

//             $fname = $row['Fullname'];
//             $_SESSION['type1'] = $row['User_Type'];
//             $_SESSION['uid1'] = $row['User_ID'];

// //Generate OTP
// $otp = random_strings(16);

//   $sql2 = "INSERT INTO `2fa`(`OTP`) VALUES (md5('$otp'))";

//    mysqli_query($conn, $sql2);

//             //Compose and Send Email
//                 $mail = new PHPMailer(true);

//                 $mail->isSMTP();
//                 $mail->Host = 'smtp.gmail.com';
//                 $mail->SMTPAuth = 'true';
//                 $mail->Username = 'ian.otuoma@strathmore.edu'; //Your Gmail
//                 $mail->Password = 'fnjahlytczbydlcv'; //Your Gmail App Password
//                 $mail->SMTPSecure = 'ssl';
//                 $mail->Port = 465;

//                 $mail->setFrom('ian.otuoma@strathmore.edu'); //Your Gmail
//                 $mail->addAddress($email); //Receiver Address
//                 $mail->isHTML(true);
//                 $mail->Subject = 'Bata Shoes Order Management System Email Services - OTP Password for Reset Credentials';
//                 $mail->Body = 'Dear Esteemed Client, '. $fname . ',

//                 We truly appreciate you for choosing Bata Shoes, as your trusted source for footware(s) and shoes. Below is your OTP for resetting your credentials attempt at ' .  date("Y-m-d h:i:s") . ', it expires in 3 minutes:
//                 <br>
//                 <br>
//                 <p><b>' . $otp . '</b></p>
//                 <br>
//                 <br>
//                 If you did not request this Update My Details attempt, kindly reach out to our IT Support Team & Security to resolve the matter.
//                 <br>
//                 <br>
//                 Kind Regards,
//                 Bata Shoes Order Management System Team.';

//                 $mail->send();

//                 header("Location: ../otp1.php");
            
//         }else{
//             echo "An Error Occured: User Not Found.";
//         }
//     }

// //Checking for Correct OTP When Resetting Credentials
//     else if ($mod == 3) {

//                 session_start();

// $itp = $_POST['itp'];   

// $sql = "SELECT `2FA_ID` FROM `2fa` WHERE `Expiry_Time` > NOW() AND `Status` = 'Active' AND `OTP` = md5('$itp')";

//         $query = mysqli_query($conn,$sql);

//         if(mysqli_num_rows($query) > 0){
//             $row = mysqli_fetch_assoc($query);

// $fid = $row['2FA_ID'];

//   $sql3 = "UPDATE `2fa` SET `Status` = 'Inactive' WHERE `2FA_ID` = '$fid'";

//    mysqli_query($conn, $sql3);

//         $type = $_POST['type1'];
//         $uid = $_POST['uid1'];

//         if ($type == "Administrator") {
//                 $_SESSION['adminname1'] = $uid;
//                 header("Location: ../index_update.php");
//                 }else if ($type == "User") {

//                 $_SESSION['username1'] = $uid;   

//                 header("Location: ../index1_update.php");
//                 }
//     }else{
//         echo "An Error Occured: OTP inputted is either wrong or has expired, kindly try again.";
//     }
//     }

// }

if(isset($_POST['login']) && $_SERVER['REQUEST_METHOD'] === 'POST'){
               
    $email = $_POST['email'];
    $password = $_POST['password'];

        $sql = "SELECT * FROM `users` WHERE `Email_Address`='$email'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);

            $_SESSION['type'] = $row['User_Type'];
            $_SESSION['uid'] = $row['User_ID'];
            $pass = $row['Password'];
            $type = $row['User_Type'];
            $uid = $row['User_ID'];

        if(md5($password) == $pass){

        if ($type == "Administrator") {
                $_SESSION['adminname'] = $uid;
                header("Location: ../index.php");
                }else if ($type == "User") {

                $_SESSION['username'] = $uid;   

                header("Location: ../index1.php");
                }
}else{
    echo "Error Occured: Passwords do not match.";
}
}else{
    echo "Error Occured: User not found.";
}
}
         
?>