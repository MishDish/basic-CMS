<div class="form">
<form method="POST" action="../root/index.php" class="form-signin" role="form">
    <h2 class="form-signin-heading">Please sign in !</h2>
    <input type="email" class="form-control" placeholder="Email address" name='email'required autofocus>
    <input type="password" class="form-control" placeholder="Password" name='password'required>
    <label class="checkbox">
      <input type="checkbox" value="remember-me"> Remember me
    </label>

    <button class="btn btn-lg btn-primary btn-block" type="submit" name='submit'>Sign in</button>
    <p class='p'>If you don't have an account please <a href='../root/registration.php'>register!</p>
    <p class='p'>If you are  administrator please log in <a style ='color:red;' href='../root/admin/index.php'>here!</a></p>
  </form>
  </div>