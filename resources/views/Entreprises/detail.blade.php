<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail de l'entreprise</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid px-5 py-5">
        @foreach ($entrepriseDetail as $entreprise)
            <h2 class="mb-3"> {{ $entreprise->NomEntreprise }} </h2>
            <hr />
            <div class="row">
                <div class="col">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Nom de l'entreprise</div>
                            {{ $entreprise->NomEntreprise }}
                        </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Courriel</div>
                            {{ $entreprise->Courriel }}
                        </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Nombre d'employé</div>
                            {{ $entreprise->NombreEmploye }}
                        </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                              <div class="fw-bold">Adresse</div>
                              {{ $entreprise->Adresse }}
                            </div>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                              <div class="fw-bold">Année de création</div>
                              {{ $entreprise->AnneeDeCreation }}
                            </div>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                              <div class="fw-bold">Site Web</div>
                              {{ $entreprise->SiteWeb }}
                            </div>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                              <div class="fw-bold">Secteur d'activité</div>
                              {{ $entreprise->SecteurActivite }}
                            </div>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                              <div class="fw-bold">Est-ce que l'entreprise embauche</div>
                              <?php
                                $isHiring = $entreprise->isHiring;
                              ?>
                              @if ($isHiring == 1)
                                Oui
                              @else
                                Non
                              @endif
                            </div>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                              <div class="fw-bold">Description</div>
                              {{ $entreprise->Description }}
                            </div>
                          </li>
                      </ul>
                </div>
            </div>
        @endforeach

        <a href="{{ route('entreprise') }}" class="btn btn-link mt-4">Retour à la liste</a>
        <div class="btn-group mt-4" role="group" aria-label="Basic outlined example">
            <form action="{{ route('editEntreprise') }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="identreprise" id="identreprise" value="{{ $entreprise->idEntreprise }}" />
                <input type="submit" class="btn btn-primary" value="Editer"/>
            </form>
            <form action="{{ route('desactiverEntreprise') }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="identreprise" id="identreprise" value="{{ $entreprise->idEntreprise }}" />
                <input type="submit" class="btn btn-danger" value="Effacer"/>
            </form>
        </div>
    </div>


</body>

</html>
