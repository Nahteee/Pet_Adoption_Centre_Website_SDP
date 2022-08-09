<?php
$logout = $_POST[destroySession];
if ($logout == 1) {
    session_destroy();
    echo '<script type="text/JavaScript"> alert("logged out");</script>';
    echo '<script type="text/JavaScript"> window.location.href = "/sdp/login.html"; </script>'; 
}
?>