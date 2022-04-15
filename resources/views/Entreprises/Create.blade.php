<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creer une nouvelle entreprise</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container py-5">
        <h1 class="mb-3">Creer une nouvelle entreprise</h1>
        <div class="row">
            <form action="{{ route('addNewEntreprise') }}" method="post">
                {{ csrf_field() }}
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nomentreprise" name="nomentreprise" required
                        placeholder="Nom de l'entreprise">
                    <label for="floatingInput">Nom de l'entreprise</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="courriel" name="courriel" required
                        placeholder="Courriel">
                    <label for="floatingInput">Courriel</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="nombreemploye" name="nombreemploye" required
                        aria-label="Floating label select example">
                        <option selected>Choisir le nombre d'employe</option>
                        <option value="1-10">1-10</option>
                        <option value="11-50">11-50</option>
                        <option value="51-100">51-100</option>
                        <option value="101-500">101-500</option>
                        <option value="500 et plus">500 et plus</option>
                    </select>
                    <label for="floatingSelect">Nombre d'employé au sein de l'entreprise</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="adresse" name="adresse" required
                        placeholder="Adresse">
                    <label for="floatingInput">Adresse</label>
                </div>
                <div class="form-floating mb-3">
                    <?php
                    $currently_selected = date('Y');
                    $earliest_year = 1950;
                    $latest_year = date('Y');
                    ?>
                    <select class="form-select" id="anneecreation" name="anneecreation"
                        aria-label="Floating label select example">
                        <option selected>Choisir l'année de création</option>
                        @foreach (range($latest_year, $earliest_year) as $i)
                            <option value="{{ $i }}">{{ $i }}</option>';
                        @endforeach
                    </select>
                    <label for="floatingSelect">Année de création</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="siteweb" name="siteweb" required
                        placeholder="Site Web">
                    <label for="floatingInput">Site Web</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="secteuractivite" name="secteuractivite" required
                        placeholder="Secteur d'activité">
                    <label for="floatingInput">Secteur d'activité</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="ishiring" name="ishiring" required
                        aria-label="Floating label select example">
                        <option selected>Choisir une réponse</option>
                        <option value="1">Oui</option>
                        <option value="0">Non</option>
                    </select>
                    <label for="floatingSelect">Est-ce que l'entreprise embauche?</label>
                </div>
                <div class="form-floating mb-4">
                    <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description" required
                        style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Description</label>
                </div>
                <a href="{{ route('entreprise') }}" class="btn btn-outline-secondary">Annuler</a>
                <input class="mx-3 btn btn-secondary" type="submit" value="Creer l'entreprise" />
            </form>
        </div>
    </div>
</body>

</html>
