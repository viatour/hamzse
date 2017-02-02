<?php
  $log_file_name = 'lecso.log';
  $message = "\n---UJ OSSZETEVO (UZENET)---\n" . $_POST['message'];
  file_put_contents($log_file_name, $message, FILE_APPEND);
  header('Location: /'); // redirect
?>