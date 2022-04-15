<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creer un nouveau poste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/css/datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import 'path/to/node_modules/vanillajs-datepicker/sass/datepicker-bs5';
        @import 'path/to/node_modules/vanillajs-datepicker/sass/datepicker-foundation';

        .form-floating > .bi-calendar-date + .datepicker_input + label {
        padding-left: 3.5rem;
        z-index: 3;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <h1 class="mb-3">Creer un nouveau poste</h1>
        <div class="row">
            <form action="{{ route('addNewPoste') }}" method="post">
                {{ csrf_field() }}
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="titre" name="titre" required placeholder="Titre du poste">
                    <label for="floatingInput">Titre du poste</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="lieudetravail" name="lieudetravail" required placeholder="Lieu du travail">
                    <label for="floatingInput">Lieu du travail</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="nombredeposte" name="nombredeposte" required placeholder="Nombre du poste">
                    <label for="floatingInput">Nombre du poste</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="typeoffre" name="typeoffre" required aria-label="Floating label select example">
                      <option selected>Choisir le type de l'offre</option>
                      <option value="Emploi">Emploi</option>
                      <option value="Stage">Stage</option>
                    </select>
                    <label for="floatingSelect">Type de l'offre</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="lieu" name="lieu" required aria-label="Floating label select example">
                      <option selected>Choisir le type du lieu</option>
                      <option value="A distance">A distance</option>
                      <option value="Presentiel">Presentiel</option>
                      <option value="Hybride">Hybride</option>
                    </select>
                    <label for="floatingSelect">Type de lieu</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="identreprise" name="identreprise" required aria-label="Floating label select example">
                      <option selected>Choisir l'entreprise</option>
                      @foreach ($listeEntreprise as $entreprise)
                        <option value="{{ $entreprise->idEntreprise }}">{{ $entreprise->NomEntreprise }}</option>
                      @endforeach
                    </select>
                    <label for="floatingSelect">L'entreprise</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="creerpar" name="creerpar" required aria-label="Floating label select example">
                      <option selected>Choisir le nom du recruteur</option>
                      @foreach ($listeRecruteur as $profil)
                        <option value="{{ $profil->idProfil }}">{{ $profil->Nom }} {{ $profil->Prenom }}</option>
                      @endforeach
                    </select>
                    <label for="floatingSelect">Creer par</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="horaire" name="horaire" required aria-label="Floating label select example">
                      <option selected>Choisir le type d'horaire</option>
                      <option value="Temps Plein">Temps Plein</option>
                      <option value="Temps Partiel">Temps Partiel</option>
                    </select>
                    <label for="floatingSelect">Type d'horaire</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="dureeemploi" name="dureeemploi" required aria-label="Floating label select example">
                      <option selected>Choisir la durée de l'emploi</option>
                      <option value="Permanant">Permanant</option>
                      <option value="Temporaire">Temporaire</option>
                      <option value="A contrat">A contrat</option>
                    </select>
                    <label for="floatingSelect">Durée de l'emploi</label>
                </div>
                <div class="form-floating input-group mb-3">
                    <input type="text" id="datedebutposte" class="datepicker_input form-control" name="datedebutposte" required required placeholder="DD/MM/YYYY" required>
                    <label for="datepicker2">Date debut poste</label>
                  </div>

                  <div class="form-floating input-group mb-3">
                    <input type="text" id="datefinposte" class="datepicker_input form-control" name="datefinposte" placeholder="DD/MM/YYYY" >
                    <label for="datepicker2">Date Fin poste</label>
                  </div>

                  <div class="form-floating input-group mb-3">
                    <input type="text" id="datefinoffre" class="datepicker_input form-control" name="datefinoffre" required placeholder="DD/MM/YYYY" required>
                    <label for="datepicker2">Date Fin d'inscription</label>
                  </div>

                  <div class="form-floating mb-4">
                    <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description" required style="height: 150px"></textarea>
                    <label for="floatingTextarea2">Description</label>
                  </div>
                  <a href="{{ route('poste') }}" class="btn btn-outline-secondary">Annuler</a>
                  <input class="mx-3 btn btn-secondary" type="submit" value="Creer le poste" />


            </form>
        </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/js/datepicker-full.min.js"></script>

      <script>

            const getDatePickerTitle = elem => {
            // From the label or the aria-label
            const label = elem.nextElementSibling;
            let titleText = '';
            if (label && label.tagName === 'LABEL') {
                titleText = label.textContent;
            } else {
                titleText = elem.getAttribute('aria-label') || '';
            }
            return titleText;
            }

            const elems = document.querySelectorAll('.datepicker_input');
            for (const elem of elems) {
            const datepicker = new Datepicker(elem, {
                'format': 'yyyy-mm-dd', // UK format
                title: getDatePickerTitle(elem)
            });
            }

            const datepicker = new Datepicker(elem, {
            buttonClass: 'btn',
            });
      </script>
</body>
</html>
