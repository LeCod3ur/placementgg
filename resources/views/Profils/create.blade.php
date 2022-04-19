<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creer Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="container py-5">
        <h1 class="mb-3">Creer un nouveau profil</h1>
        <div class="row">
            <form action="{{ route('addNewProfil') }}" method="post">
                {{ csrf_field() }}
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="courriel" name="courriel" required placeholder="Courriel">
                    <label for="floatingInput">Courriel</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="motdepasse" name="motdepasse" required placeholder="Mot de Passe">
                    <label for="floatingInput">Mot de Passe</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nom" name="nom" required placeholder="Nom">
                    <label for="floatingInput">Nom</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="prenom" name="prenom" required placeholder="Prenom">
                    <label for="floatingInput">Prenom</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="telephone" name="telephone" required placeholder="Telephone">
                    <label for="floatingInput">Telephone</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="typeprofil" name="typeprofil" required aria-label="Floating label select example">
                      <option selected>Choisir le type du profil</option>
                      <option value="Etudiant">Etudiant</option>
                      <option value="Responsable">Responsable de stage</option>
                      <option value="Administrateur">Administrateur</option>
                      <option value="Recruteur">Recruteur</option>
                    </select>
                    <label for="floatingSelect">Type de profil</label>
                </div>
                    <a href="{{ route('profil') }}" class="btn btn-outline-secondary">Annuler</a>
                    <input class="mx-3 btn btn-secondary" type="submit" value="Creer le profil" />
            </form>
        </div>
      </div>


    
</body>
</html>
