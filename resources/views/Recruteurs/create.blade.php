<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creer Recruteur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="container py-5">
        <h1 class="mb-3">Creer un nouveau recruteur</h1>
        <div class="row">
            <form action="{{ route('addNewRecruteur') }}" method="post">
                {{ csrf_field() }}
                <div class="form-floating mb-3">
                    <select class="form-select" id="creerpar" name="creerpar" required aria-label="Floating label select example">
                      <option selected>Choisir le profil du recruteur</option>
                      @foreach ($listeProfil as $profil)
                        <option value="{{ $profil->idProfil }}">{{ $profil->Nom }} {{ $profil->Prenom }}</option>
                      @endforeach
                    </select>
                    <label for="floatingSelect">Creer par</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="poste" name="poste" required placeholder="Poste">
                    <label for="floatingInput">Poste</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="description" name="description" required placeholder="Description">
                    <label for="floatingInput">Description</label>
                </div>

                <div class="form-floating mb-3">
                    <select class="form-select" id="estactif" name="estactif" required
                        aria-label="Floating label select example">
                        <option selected>Est actif?</option>
                        <option value="oui">Oui</option>
                        <option value="non">Non</option>
                    </select>
                    <label for="floatingSelect">Est-ce que le recruteur est actif?</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="identreprise" name="identreprise" required aria-label="Floating label select example">
                      <option selected>Choisir l'entreprise</option>
                      @foreach ($listeEntreprise as $entreprise)
                        <option value="{{ $entreprise->idEntreprise }}">{{ $entreprise->NomEntreprise }}</option>
                      @endforeach
                    </select>
                    <label for="floatingSelect">L'entreprise</label>
                </div>
              
                    <a href="{{ route('recruteur') }}" class="btn btn-outline-secondary">Annuler</a>
                    <input class="mx-3 btn btn-secondary" type="submit" value="Creer le recruteur" />
            </form>
        </div>
      </div>


    
</body>
</html>
