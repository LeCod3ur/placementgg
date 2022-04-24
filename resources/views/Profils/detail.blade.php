<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail du profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

     <div class="container-fluid px-5 py-5">
        @foreach ($profilDetail as $profil)
        <h2 class="mb-3">Detail Profil</h2>
            <hr />
            <div class="row">
                <div class="col">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">idProfil</div>
                            {{ $profil->Courriel }}
                        </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">MotDePasse</div>
                            {{ $profil->MotDePasse }}
                        </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Nom</div>
                            {{ $profil->Nom }}
                        </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Prenom</div>
                            {{ $profil->Prenom }}
                        </div>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Telephone</div>
                            {{ $profil->Telephone }}
                        </div>

                      </ul>
                </div>
            </div>

            <a href="{{ route('profil') }}" class="btn btn-link mt-4">Retour</a>
            <div class="btn-group mt-4" role="group" aria-label="Basic outlined example">



                <form action="{{ route('editProfil') }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="idprofil" id="idprofil" value="{{ $profil->idProfil }}" />
                    <input type="submit" class="btn btn-primary" value="Editer"/>
                </form>


                <form action="{{ route('desactiverProfil') }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="idprofil" id="idprofil" value="{{ $profil->idprofil }}" />
                    <input type="submit" class="btn btn-danger" value="Effacer"/>
                </form>
            </div>
            @endforeach
    </div>


</body>

</html>
