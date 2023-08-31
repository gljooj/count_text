<?php
    if(isset($_REQUEST['submit']))
    {
      $text_len = strlen($_POST['text']);
      $message = $text_len > 0 ? "your text has lenght $text_len" : "Please fill the white space";
      echo $message;
    }
?>

<form action="" method="POST">
   
   <input type="text" name="text" placeholder="Put your text here">
   <input type="submit" value="submit" name="submit">
</form>