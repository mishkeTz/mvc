 <html>
<head></head>

<body>
<?php 
 echo $result;

?>
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
  <p>
   <label>Username</label>
   <input id="username" value="" name="username" type="text" required="required" /><br>
  </p>

  <p>
   <label>Password</label>
   <input id="password" name="password" type="password" required="required" />
  </p>
  <br />
  <p>

     <button type="submit" class="green big" name="login_btn"><span>Login</span></button> <button type="reset" class="grey big"><span>Cancle</span></button>
  </p>
 </form>

</body>
</html>