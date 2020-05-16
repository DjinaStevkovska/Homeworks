<?php

setcookie('username', '', time() - 1);
header('Location: index.php');