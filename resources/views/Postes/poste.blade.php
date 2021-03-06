<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des postes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid py-5 px-5">
        <h1 class="mb-3">Liste de tous les postes</h1>
        <a href="{{ route('createPoste') }}" class="btn btn-secondary btn-sm">Creer un nouveau poste</a>
        <hr/>
        <div class="row">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">idPoste</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Lieu du travail</th>
                    <th scope="col">Nbre de place</th>
                    <th scope="col">Type d'offre</th>
                    <th scope="col">Horaire</th>
                    <th scope="col">Lieu</th>
                    <th scope="col">Duree Emploi</th>
                    <th scope="col">Date de publication</th>
                    <th scope="col">Date fin d'inscription</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($listePostes as $poste)
                    <tr>
                        <th>{{ $poste->idPoste }}</th>
                        <td>{{ $poste->Titre }}</td>
                        <td>{{ $poste->LieuDeTravail }}</td>
                        <td>{{ $poste->NombreDePoste }}</td>
                        <td>{{ $poste->TypeOffre }}</td>
                        <td>{{ $poste->Horaire }}</td>
                        <td>{{ $poste->Lieu }}</td>
                        <td>{{ $poste->DureeEmploi }}</td>
                        <td>
                            <?php
                                $dateTime = strtotime($poste->DatePublication);
                                $datePublicateion = date('Y-m-d', $dateTime);
                            ?>
                            {{  $datePublicateion }}
                        </td>
                        <td>{{ $poste->DateFinOffre }}</td>
                        <td>{{ $poste->Description }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                <form action="{{ route('posteDetail') }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="idposte" id="idposte" value="{{ $poste->idPoste }}" />
                                    <input type="submit" class="btn btn-outline-secondary" value="Voir"/>
                                </form>
                                <form action="{{ route('editPoste') }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="idposte" id="idposte" value="{{ $poste->idPoste }}" />
                                    <input type="submit" class="btn btn-outline-primary" value="Editer"/>
                                </form>
                                <form action="{{ route('desactiverPoste') }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="idposte" id="idposte" value="{{ $poste->idPoste }}" />
                                    <input type="submit" class="btn btn-outline-danger" value="Effacer"/>
                                </form>
                            </div>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
      </div>
</body>
</html>
