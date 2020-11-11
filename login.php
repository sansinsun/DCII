<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="css/style.css" rel="stylesheet" id="bootstrap-css">

<script src="js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="img/logo.jpg" id="icon" alt="User Icon" />
    </div>
    <div class="fadeIn first">
        SIGN IN TO YOUR ACCOUNT
    </div>

    <!-- Login Form -->
    <form method="post">
      <div class="form-group">
       <input type="email" class="form-control form-control-user" id="form"  placeholder="example@email.com">
      </div>
      <div class="form-group">
        <input type="password" class="form-control form-control-user text-center" id="form" placeholder="Password" style="width:85%; margin-left:35px;">
      </div>
      <div id="formFooter">
  	      	<a class="underlineHover" href="#">Forgot Password?</a>
  	  </div>
      <input type="submit" class="fadeIn fourth" name="login" value="Log In">
    </form>

  </div>
</div>

<script>
      $('form').jsonForm{
      "url": "http://localhost:5000/api/users",
      "raw_url": "http://localhost:5000/api/users",
      "method": "get",
      "headers": {
        "accept": "application/json"
        }
      }
</script>

