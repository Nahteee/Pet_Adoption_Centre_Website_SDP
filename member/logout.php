<?php
<<<<<<< HEAD
$logout = $_POST[destroySession];
if ($logout == 1) {
    session_destroy();
    echo '<script type="text/JavaScript"> alert("logged out");</script>';
    echo '<script type="text/JavaScript"> window.location.href = "login.html"; </script>'; 
}
=======
session_start();
session_destroy();
echo '<script type="text/JavaScript"> alert("logged out");</script>';
echo '<script type="text/JavaScript"> window.location.href = "/sdp/index.php"; </script>'; 
>>>>>>> Ethan
?>