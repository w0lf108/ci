<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Đăng nhập</title>
  <link rel="stylesheet" href="">
</head>
<body>
  <h1>Đăng nhập</h1>
  <?php echo validation_errors(); ?>
  <?php echo form_open('verifylogin'); ?>
    <label for="username">Username:</label>
    <input type="text" size="20" id="username" name="username"/>
    <br/>
    <label for="password">Password:</label>
    <input type="password" size="20" id="password" name="password"/>
    <br/>
    <input type="submit" value="Login"/>
  </form>
  <a href="register"><h3>Đăng ký</h3></a>
</body>
</html>