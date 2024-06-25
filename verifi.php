<?php
// See the password_hash() example to see where this came from.
$hash = $_GET['password'] ;

if (password_verify('1234', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
?>