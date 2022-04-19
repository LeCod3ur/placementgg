<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des recruteurs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div></div>
  <div class="container-fluid py-5 px-5">
    <h1 class="mb-3">Liste de tous les recruteurs</h1>
    <a href="{{ route('createRecruteur') }}" class="btn btn-secondary btn-sm">Creer un nouveau recruteur</a>
    <hr/>
    <div class="row">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">idProfil</th>
            <th scope="col">Poste</th>
            <th scope="col">Description</th>
            <th scope="col">EstActif</th>
            <th scope="col">idEntreprise</th>
           </tr>
        </thead>
        <tbody>
          @foreach ($listeRecruteurs as $recruteur)
              <tr>
                <td>{{ $recruteur->idProfil }}</td>
                <td>{{ $recruteur->Poste }}</td>
                <td>{{ $recruteur->Description }}</td>
                <td>{{ $recruteur->EstActif }}</td>
                <td>{{ $recruteur->idEntreprise }}</td>
                <td>
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                      <form action="{{ route('recruteurDetail') }}" method="post">
                          {{ csrf_field() }}
                          <input type="hidden" name="idprofil" id="idprofil" value="{{ $recruteur->idprofil }}" />
                          <input type="submit" class="btn btn-outline-secondary" value="Voir"/>
                      </form>
                      <form action="{{ route('editProfil') }}" method="post">
                          {{ csrf_field() }}
                          <input type="hidden" name="idprofil" id="idprofil" value="{{ $recruteur->idProfil }}" />
                          <input type="submit" class="btn btn-outline-primary" value="Editer"/>
                      </form>
                      <form action="{{ route('desactiverRecruteur') }}" method="post">
                          {{ csrf_field() }}
                          <input type="hidden" name="idprofil" id="idprofil" value="{{ $recruteur->idProfil }}" />
                          <input type="submit" class="btn btn-outline-danger" value="Effacer"/>
                      </form> 
                  </div>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>

