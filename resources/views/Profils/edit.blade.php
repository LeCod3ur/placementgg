<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mettre a jour un profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/css/datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container py-5">
        <h1 class="mb-3">Mettre a jour le profil</h1>
        <div class="row">
            <form action="{{ route('updateProfil') }}" method="post">
                {{ csrf_field() }}
                @foreach ($profilDetail as $profil)
                <input type="hidden" id="idprofil" name="idprofil" value="{{ $profil->idProfil }}" />
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="courriel" name="courriel" required
                            placeholder="Courriel" value="{{ $profil->Courriel }}">
                        <label for="floatingInput">Courriel</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="motdepasse" name="motdepasse" required
                            placeholder="Mot de Passe" value="{{ $profil->MotDePasse }}">
                        <label for="floatingInput">Mot de Passe</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nom" name="nom" required
                            placeholder="Nom" value="{{ $profil->Nom }}">
                        <label for="floatingInput">Nom</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="prenom" name="prenom" required
                            placeholder="Prenom" value="{{ $profil->Prenom }}">
                        <label for="floatingInput">Prenom</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="telephone" name="telephone" required
                            placeholder="Telephone" value="{{ $profil->Telephone }}">
                        <label for="floatingInput">Telephone</label>
                    </div>
                    <a href="{{ route('profil') }}" class="btn btn-outline-secondary">Annuler</a>
                    <input class="mx-3 btn btn-primary" type="submit" value="Modifier le profil" />
                @endforeach
            </form>
        </div>
    </div>
</body>

</html>
