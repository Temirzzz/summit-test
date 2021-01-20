<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <form class="my__form col-lg-6">
                <h2 class="mt-5 mb-5 text-center">Enter Form</h2>
                <div class="form-group">
                  <label for="email__input">Email address</label>
                  <input type="email" class="form-control email" id="email__input" aria-describedby="emailHelp" placeholder="Email" >
                </div>
                <div class="form-group">
                  <label for="login__input">Login</label>
                  <input type="text" class="form-control login" id="login__input" placeholder="Login" >
                </div>
                <div class="form-group">
                    <label for="password__login">Password</label>
                    <input type="password" class="form-control password" id="password__login" placeholder="Password"  >
                  </div>
                
                <button id="submitButton" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>

    <script type="module" src="./scripts/script.js"></script>
    <script type="module" src="./scripts/utils.js"></script>
</body>
</html>
