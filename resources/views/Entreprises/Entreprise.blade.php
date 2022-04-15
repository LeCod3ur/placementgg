<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des entreprises</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid py-5 px-5">
        <h1 class="mb-3">Liste de toutes les Entrprises</h1>
        <a href="{{ route('createentreprise') }}" class="btn btn-secondary btn-sm">Creer une nouvelle entreprise</a>
        <hr/>
        <div class="row">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">idEntreprise</th>
                    <th scope="col">Nom de l'entreprise</th>
                    <th scope="col">Courriel</th>
                    <th scope="col">Nbre d'employe</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Année de création</th>
                    <th scope="col">Site Web</th>
                    <th scope="col">Secteur d'activité</th>
                    <th scope="col">isHiring</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($listeEntreprise as $entreprise)
                    <tr>
                        <th>{{ $entreprise->idEntreprise }}</th>
                        <td>{{ $entreprise->NomEntreprise }}</td>
                        <td>{{ $entreprise->Courriel }}</td>
                        <td>{{ $entreprise->NombreEmploye }}</td>
                        <td>{{ $entreprise->Adresse }}</td>
                        <td>{{ $entreprise->AnneeDeCreation }}</td>
                        <td>{{ $entreprise->SiteWeb }}</td>
                        <td>{{ $entreprise->SecteurActivite }}</td>
                        <td>{{ $entreprise->isHiring }}</td>
                        <td>{{ $entreprise->Description }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                <form action="{{ route('entrepriseDetail') }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="identreprise" id="identreprise" value="{{ $entreprise->idEntreprise }}" />
                                    <input type="submit" class="btn btn-outline-secondary" value="Voir"/>
                                </form>
                                <form action="{{ route('editentreprise') }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="identreprise" id="identreprise" value="{{ $entreprise->idEntreprise }}" />
                                    <input type="submit" class="btn btn-outline-primary" value="Editer"/>
                                </form>
                                <form action="{{ route('desactiverEntreprise') }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="identreprise" id="identreprise" value="{{ $entreprise->idEntreprise }}" />
                                    <input type="submit" class="btn btn-outline-danger" value="Effacer"/>
                                </form>
                            </div-->
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
      </div>
</body>
</html>
