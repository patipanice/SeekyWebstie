<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $strTo = "patipan.roungsuwan@outlook.com";
    $strSubject = "Where is it gone?";
    $strHeader = "From: Where is it gone?";
    $strMessage = $_POST["cMessage"];
    $flgSend = @mail($strTo, $strSubject, $strMessage, $strHeader); // @ = No Show Error //
}
