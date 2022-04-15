<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail du poste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid px-5 py-5">
        @foreach ($posteDetail as $poste)
            <h2 class="mb-3"> {{ $poste->Titre }} </h2>
            <hr />
            <div class="row">
                <div class="col">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Titre</div>
                            {{ $poste->Titre }}
                        </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Lieu de travail</div>
                            {{ $poste->LieuDeTravail }}
                        </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Nombre de poste</div>
                            {{ $poste->NombreDePoste }}
                        </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                              <div class="fw-bold">Type de l'offre</div>
                              {{ $poste->TypeOffre }}
                            </div>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                              <div class="fw-bold">Entreprise</div>
                              {{ $poste->NomEntreprise }}
                            </div>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                              <div class="fw-bold">CreerPar</div>
                              {{ $poste->Nom }} {{ $poste->Prenom }}
                            </div>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                              <div class="fw-bold">Horaire</div>
                              {{ $poste->Horaire }}
                            </div>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                              <div class="fw-bold">Duree de l'emploi</div>
                              {{ $poste->DureeEmploi }}
                            </div>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                              <div class="fw-bold">Date de publication</div>
                              {{ $poste->DatePublication }}
                            </div>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                              <div class="fw-bold">Date debut du poste</div>
                              {{ $poste->DateDebutPoste }}
                            </div>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                              <div class="fw-bold">Date fin du poste</div>
                              {{ $poste->DateFinPoste }}
                            </div>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                              <div class="fw-bold">Date fin de l'offre</div>
                              {{ $poste->DateFinOffre }}
                            </div>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                              <div class="fw-bold">Lieu</div>
                              {{ $poste->Lieu }}
                            </div>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                              <div class="fw-bold">Description</div>
                              {{ $poste->descriptionPoste }}
                            </div>
                          </li>
                      </ul>
                </div>
            </div>
        @endforeach

        <a href="{{ route('poste') }}" class="btn btn-link mt-4">Retour à la liste</a>
        <div class="btn-group mt-4" role="group" aria-label="Basic outlined example">
            <form action="{{ route('editPoste') }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="idposte" id="idposte" value="{{ $poste->idPoste }}" />
                <input type="submit" class="btn btn-primary" value="Editer"/>
            </form>
            <form action="{{ route('desactiverPoste') }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="idposte" id="idposte" value="{{ $poste->idPoste }}" />
                <input type="submit" class="btn btn-danger" value="Effacer"/>
            </form>
        </div>
    </div>


</body>

</html>
