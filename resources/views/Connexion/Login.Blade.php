<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container px-5 py-5">
        <h1 class="text-center">Connexion</h1>
        <hr class="mt-5"/>
        <div class="row align-items-center">
          <div class="col align-self-center">
            <form action="{{ route('loginForm') }}" method="post">
                {{ csrf_field() }}
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="nom@example.com">
                    <label for="floatingInput">Courriel</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                  </div>
                <button type="submit" class="btn btn-primary">Se connecter</button>
              </form>
          </div>
        </div>
      </div>
</body>
</html>
