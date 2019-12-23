<?php
// define variables and set to empty values
$nameErr = $usernameErr = $passErr = $conpassErr = $telErr = $emailErr = $name = $username = $password = $conpassword = $passformErr = "";
//set variable to false values
$namechk = $passchk = $conpasschk = $matchpasschk = $passformchk = $telchk = $emailchk = $emailformchk =
$usernamereqchk = $usernamesqlchk = $usernameformchk = $usernamechk = $usernamelongchk = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!$namechk) {
        if (empty($_POST["txtName"])) {
            $nameErr = "ต้องการชื่อจริง!";
        } else { 
          $namechk = true;
        }
    }
    if (!$usernamechk) {
        if (empty($_POST["txtUsername"])) {
            $usernameErr = "ต้องการชื่อผู้ใช้!";
        } else {
            $usernamereqchk = true; 
            $username = test_input($_POST["txtUsername"]);
            if (!preg_match('/\w{8,}/', $username)) { 
              $usernameErr = "ชื่อผู้ใช้งานต้องประกอบด้วยตัวอักขระ 8 ตัวขึ้นไปและไม่ใช้อักษรพิเศษ เช่น ^%&@_.<>?()";
            } else {
                $usernameformchk = true;
                //เช็ค Username ในระบบ
                $strSQL = "SELECT * FROM member WHERE Username = '$username'";
                $objQuery = mysqli_query($objCon, $strSQL);
                $objResult = mysqli_fetch_array($objQuery, MYSQLI_NUM);
                if ($objResult[1] == $username) {
                  $usernameErr = "มีชื่อผู้ใช้นี้ในระบบแล้ว!";
                } else {
                    $usernamechk = true;
                  } 
              } 
          }
    } 
    if (!$passchk) {
        if (empty($_POST["txtPassword"])) {
            $passErr = "ต้องการรหัสผ่าน!";
        } else {
            if (!$passformchk) {
              $password = test_input($_POST["txtPassword"]);
              if (!preg_match('/[0-9]{8,}/', $password)) {
                $passformErr = "รูปแบบรหัสผ่านผิดพลาด!";
              } else {
                  $passchk = true;
              }
            }
          }
    }   
    if (!$conpasschk) {
        if (empty($_POST["txtPassword"])) {
            $passErr = "ต้องการรหัสผ่าน";
        } else {
            if (!$matchpasschk) {
              if ($_POST["txtPassword"] != $_POST["txtConPassword"]) {
                $conpassErr = "รหัสผ่านไม่เหมือนกัน!";
              } else {
                  $conpasschk = true;
              }
            }
          }
    }
    if (!$telchk) {
        if (empty($_POST["txtTel"])) {
            $telErr = "ต้องการเบอร์โทรศัพท์!";
        } else {
            $telchk = true;
        }
    }
    if (!$emailchk) {
        if (empty($_POST["txtEmail"])) {
            $emailErr = "ต้องการอีเมลล์!";
        } else {           
            if (!$emailformchk) {
              $email = test_input($_POST["txtEmail"]);
              //check if e-mail address is well-formed
              if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "รูปแบบอีเมลล์ผิดพลาด!";
              } else {
                  $emailchk = true;
              }
            }
          }
    } 
}
//Test

/*if($usernamechk == TRUE) {
  echo "Username";
  echo ": TRUE";
  echo "&nbsp;";
} else { 
  echo "Username";
  echo ": FALSE"; 
  echo "&nbsp;";
}
if($passchk == TRUE) {
  echo "Password";
  echo ": TRUE";
  echo "&nbsp;";
} else { 
  echo "Password";
  echo ": FALSE"; 
  echo "&nbsp;";
}
if($conpasschk == TRUE) {
  echo "ConPassword";
  echo ": TRUE";
  echo "&nbsp;";
} else { 
  echo "ConPassword";
  echo ": FALSE"; 
  echo "&nbsp;";
}
if($namechk == TRUE) {
  echo "Name";
  echo ": TRUE";
  echo "&nbsp;";
} else { 
  echo "Name";
  echo ": FALSE"; 
  echo "&nbsp;";
}
if($telchk == TRUE) {
  echo "Tel";
  echo ": TRUE";
  echo "&nbsp;";
} else { 
  echo "Tel";
  echo ": FALSE"; 
  echo "&nbsp;";
}
if($emailchk == TRUE) {
  echo "Email";
  echo ": TRUE";
  echo "&nbsp;";
} else { 
  echo "Email";
  echo ": FALSE"; 
  echo "&nbsp;";
}
*/
//Fuction test 
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
