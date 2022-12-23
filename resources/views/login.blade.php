<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="{{asset('asset/style.css')}}" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
<form class="form card">
  <div class="card_header">
    <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 0h24v24H0z" fill="none"></path>
      <path d="M4 15h2v5h12V4H6v5H4V3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6zm6-4V8l5 4-5 4v-3H2v-2h8z" fill="currentColor"></path>
    </svg>
    <h1 class="form_heading">Sign in</h1>
  </div>
  <div class="field">
    <label for="username">Username</label>
    <input id="username" placeholder="Username" type="text" name="username" class="input">
  </div>
  <div class="field">
    <label for="password">Password</label>
    <input id="password" placeholder="Password" type="password" name="user_password" class="input">
  </div>
  <div class="field">
    <button class="button">Login</button>
  </div>
</form>
</body>
</html>
