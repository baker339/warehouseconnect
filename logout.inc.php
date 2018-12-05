<?php
session_start();
session_destroy();
header ('Location: ../Website%20Source%20Code/index.php?logout=success');