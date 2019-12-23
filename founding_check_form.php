<?php //เช็คฟอร์ม
$txtObjectchk = $txtCatachk = $txtLocationchk = $Datechk = 0;
$txtObjecterr = $txtCataerr = $txtLocationerr = $Dateerr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (!$txtObjectchk) {
        if (empty($_POST["txtObject"])) {
            $txtObjecterr = "กรุณาระบุสิ่งที่ท่านพบ !";
        } else {
            $txtObject = test_input($_POST["txtObject"]);
            if (!preg_match('/[^A-Za-z]/', $txtObject)) {
                $txtObjecterr = "กรอกข้อมูลโดยใช้ภาษาไทยเท่านั้น !";
            } else {
                $txtObjectchk = 1;
            }
        }   
    }
    if (!$txtCatachk) {
        if ($_POST["txtCata"] == 000) {
            $txtCataerr = "เลือกประเภทสิ่งของ !";
        } else {
            $txtCatachk = 1;
        }
    }
    if (!$txtLocationchk) {
        if ($_POST["txtLocation"] == 000) {
            $txtLocationerr = "เลือกสถานที่พบ !";
        } else {
            $txtLocationchk = 1;
        }
    }
    if (!$Datechk) {
        if (empty($_POST["Date"])) {
            $Dateerr = "โปรดระบุวันที่พบ !";
        } else {
            $Datechk = 1;
        }
    }
}
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>