<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Home</title>
  <link rel="stylesheet" href="">
</head>
<body>
  <h1>HOME</h1>
  <h2>Welcome <span style="color: red;"><?php echo $username; ?></span>!</h2>
  <h3>Your ID is <span style="color:red;"><?php echo $id; ?></span></h3>

  <a href="home/logout">Log the fuck out!</a>

  <span style="color:grey"><h3>Change password</h3></span>
    <?php echo form_open('changepassword'); ?>
      <input type="hidden" value=" <?php echo $id; ?> " name="txtUserID">
     <input type="password" id="txtPasswordChange" name="txtPasswordChange">
     <input type="submit" value="Đổi mật khẩu">
    </form>

</body>
</html>