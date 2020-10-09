<?php
session_start();
unset($_SESSION['ID']);
unset($_SESSION['USERNAME']);
session_destroy();

header("Location: ../index.php?status=loged-out");
