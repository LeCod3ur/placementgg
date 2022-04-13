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
                <td>{{ $poste->DatePublication }}</td>
                <td>{{ $poste->DateFinOffre }}</td>
                <td>{{ $poste->Description }}</td>
              </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>
