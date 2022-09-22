<?php
    $conn = mysqli_connect ('localhost', 'root', '', 'btth03web') or die ('<br/>Không thể kết nối tới database');
    mysqli_set_charset($conn, 'UTF8');

    if($conn === false){ 
        die("ERROR: Could not connect. " . mysqli_connect_error()); 
    }
    else {
        echo '<br/>Kết nối DB thành công!';
    }
?>