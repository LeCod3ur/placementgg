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
            <th scope="col">idProfil</th>
            <th scope="col">Courriel</th>
            <th scope="col">MotDePasse</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Telephone</th>
            <th scope="col">TypeProfil</th>
         </tr>
        </thead>
        <tbody>
            @foreach ($listeProfils as $profil)
            <tr>
                <th>{{ $profil->idProfil }}</th>
                <td>{{ $profil->Courriel }}</td>
                <td>{{ $profil->MotDePasse }}</td>
                <td>{{ $profil->Nom }}</td>
                <td>{{ $profil->Prenom }}</td>
                <td>{{ $profil->Telephone }}</td>
                <td>{{ $profil->TypeProfil }}</td>
                
              </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>
