<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mettre a jour un recruteur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/css/datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container py-5">
        <h1 class="mb-3">Mettre a jour le recruteur</h1>
        <div class="row">
            <form action="{{ route('updateRecruteur') }}" method="post">
                {{ csrf_field() }}
                @foreach ($recruteurDetail as $recruteur)
                <input type="hidden" id="idprofil" name="idprofil" value="{{ $recruteur->idProfil }}" />
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="poste" name="poste" required
                            placeholder="Poste" value="{{ $recruteur->Poste }}">
                        <label for="floatingInput">Poste</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="description" name="description" required
                            placeholder="Description" value="{{ $recruteur->Description }}">
                        <label for="floatingInput">Description</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="estactif" name="estactif" required
                            placeholder="Est Actif?" value="{{ $recruteur->EstActif }}">
                        <label for="floatingInput">Est Actif?</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="identreprise" name="identreprise" required
                            placeholder="id Entreprise" value="{{ $recruteur->idEntreprise }}">
                        <label for="floatingInput">id Entreprise</label>
                    </div>
                    
                    <a href="{{ route('recruteur') }}" class="btn btn-outline-secondary">Annuler</a>
                    <input class="mx-3 btn btn-primary" type="submit" value="Modifier le recruteur" />
                @endforeach
            </form>
        </div>
    </div>
</body>

</html>
