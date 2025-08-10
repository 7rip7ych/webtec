<?php

include('../config/config.php');

destroySession();

// Redirect
header("Location: session.php");
exit();
