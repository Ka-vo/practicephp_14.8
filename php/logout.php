<?php
session_start();
session_destroy();
header('Location: http://localhost/practicePHP14.8/php/login.php');
