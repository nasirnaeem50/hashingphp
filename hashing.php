<?php
$pass="nasir";
$hash=password_hash($pass,PASSWORD_DEFAULT);
if(password_verify("nasir",$hash)){
    echo "you login";
}
else{
    echo "incorrect password";
}
?>