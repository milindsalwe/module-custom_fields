<?php function custom_fields__install($x0b){global $x0c, $x0d;$x0e = true;$x0f = "";$x10 = isset($_POST["\x65\x6b"]) ? $_POST["\145\153"] : "";$x11= isset($_POST["\x6b"]) ? $_POST["\153"] : "";if (empty($x10) || empty($x11) || $x10 != crypt($x11, "\147\x77")){$x0e = false;}return array($x0e, $x0f);}