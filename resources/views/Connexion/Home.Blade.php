<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <div class="container py-5">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <img src="https://c.tenor.com/GTOjnP3HjWoAAAAC/thumbs-up-animoji.gif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $userPrenomSession }} {{ $userNomSession }}</h5>
                        @if ($userTypeProfilSession == "Recruteur")
                            @foreach ( $activeUser as $user )
                                <h6 class="card-subtitle mb-2 text-muted">{{ $user->Poste }}</h6>
                                <p class="card-text">{{ $user->Description }}</p>
                        @endforeach
                        @endif
                    </div>
                    <ul class="list-group list-group-flush">
                        
                        <li class="list-group-item">{{ $userCourrielSession }}</li>
                        <li class="list-group-item">Type: {{ $userTypeProfilSession }}</li>
                        @if ($userTypeProfilSession == "Recruteur" || $userTypeProfilSession == "recruteur")

                            @foreach ( $activeUser as $user )
                                <li class="list-group-item">Entreprise: <b>{{ $user->NomEntreprise }}</b></li>
                            @endforeach
                        @endif
                    </ul>
                    <div class="card-body">
                        <a href="{{ route('logout') }}" class="card-link btn btn-outline-danger">Se déconnecter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
