<?php

header("Status: 301 Moved Permanently");
header("Location: " . $_POST['back_url']);
exit;