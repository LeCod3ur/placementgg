<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription Entreprise</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container py-5 col-6">
        <h1 class="mb-3">Inscription Recruteur</h1>
        <div class="row">
            <form action="{{ route('addNewInscription') }}" method="post">
                {{ csrf_field() }}
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="courriel" id="courriel" placeholder="Courriel" required>
                    <label for="floatingInput">Courriel</label>
                </div>
                @if (session()->has('message'))
                <h4 class="alert alert-danger">
                    {{ session()->get('message') }}</h4>
            @endif
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="motdepasse" id="motdepasse"
                        placeholder="Mot de Passe" required>
                    <label for="floatingInput">Mot de Passe</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" required>
                    <label for="floatingInput">Nom</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prenom" required>
                    <label for="floatingInput">Prenom</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Telephone" required>
                    <label for="floatingInput">Telephone</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="poste" id="poste" placeholder="Poste" required>
                    <label for="floatingInput">Poste</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Description" id="description" name="description" required
                        style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Description du recruteur et de son poste</label>
                </div>
                <select class="form-select" id="identreprise" name="identreprise" required
                    aria-label="Floating label select example">
                    <option selected>Choisir l'entreprise</option>
                    @foreach ($listeEntreprise as $entreprise)
                        <option value="{{ $entreprise->idEntreprise }}">{{ $entreprise->NomEntreprise }}</option>
                    @endforeach
                </select>


                <br />
                <a href="{{ route('login') }}" class="btn btn-outline-secondary">Annuler</a>
                <input class="mx-3 btn btn-secondary" type="submit" value="S'inscrire" />
            </form>
        </div>
    </div>
</body>

</html>
