<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" role="img" fill="currentColor" class="bi bi-chat-right-quote-fill" viewBox="0 0 16 16">
          <path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM7.194 4.766c.087.124.163.26.227.401.428.948.393 2.377-.942 3.706a.446.446 0 0 1-.612.01.405.405 0 0 1-.011-.59c.419-.416.672-.831.809-1.22-.269.165-.588.26-.93.26C4.775 7.333 4 6.587 4 5.667 4 4.747 4.776 4 5.734 4c.271 0 .528.06.756.166l.008.004c.169.07.327.182.469.324.085.083.161.174.227.272zM11 7.073c-.269.165-.588.26-.93.26-.958 0-1.735-.746-1.735-1.666 0-.92.777-1.667 1.734-1.667.271 0 .528.06.756.166l.008.004c.17.07.327.182.469.324.085.083.161.174.227.272.087.124.164.26.228.401.428.948.392 2.377-.942 3.706a.446.446 0 0 1-.613.01.405.405 0 0 1-.011-.59c.42-.416.672-.831.81-1.22z"/>
          </svg>
        </a>
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <li class="nav-item">  <a class="nav-link px-2 link-dark" href="index.php">Home</a>  </li>
          <?
          if($_COOKIE['user']!=''):
          ?>
          <li class="nav-item">  <a class="nav-link px-2 link-dark" href="profile.php">Profile</a>  </li>
          <?
          endif;
          ?>
          <li class="nav-item">  <a class="nav-link px-2 link-dark" href="about.php">About</a></li>
        </ul>
        <div class="col-md-3 text-end">
          <?
          if($_COOKIE['user']!=''):
          ?>
          <button type="button" class="btn btn-outline-primary me-2"><a class="nav-link text-dark" href="exit.php">Exit</a></button>
          <?
        else:
          ?>
          <button type="button" class="btn btn-outline-primary me-2"><a class="nav-link px-2 link-dark" href="log_in.php">Login</a></button>
          <button type="button" class="btn btn-primary"><a class="nav-link px-2 link-dark" href="sign_up.php">Sign up</a></button>
          <?
          endif;
          ?>
        </div>

      </header>
      <main class="main ps-5 pe-5">
