<?php 

  require_once 'header.php';
?>
      <!-- List des professeurs -->
      <div class="mt-16 main flex px-8 py-4 gap-x-4">
        <div class="card bg-orange-500 p-16 rounded grid place-items-center">
          <div class="flex-col justify-items-center items-center text-white">
            <img
              src="https://img.icons8.com/?size=100&id=38HJBFwphJ3I&format=png&color=ffffff"
              alt="professeur"
            />
            <h3 class="text-2xl font-bold">3000</h3>
            <h3 class="text">Professeur inscrits</h3>
          </div>
        </div>

        <div class="card bg-pink-500 p-16 rounded grid place-items-center">
          <div class="flex-col justify-items-center items-center text-white">
            <img
              src="https://img.icons8.com/?size=100&id=38833&format=png&color=ffffff"
              alt="Etudiant"
            />
            <h3 class="text-2xl font-bold">10 000</h3>
            <h3 class="text">Etudiants Enregistrés</h3>
          </div>
        </div>

        <div class="card bg-green-500 p-16 rounded grid place-items-center">
          <div class="flex-col justify-items-center items-center text-white">
            <img
              src="https://img.icons8.com/?size=100&id=7846&format=png&color=ffffff"
              alt="Etudiant"
            />
            <h3 class="text-2xl font-bold">5 000</h3>
            <h3 class="text">Utilisateurs en ligne</h3>
          </div>
        </div>
      </div>

      <!-- List des Utilisateurs en ligne  -->
      <div class="border mx-8 bg-white rounded">
        <!-- Header -->
        <div class="flex p-4 justify-between items-center">
          <h3 class="text-xl">Liste des Utilisateurs en ligne</h3>

          <!-- Search button -->
          <div class="search-bar flex items-center bg-slate-100">
            <input
              type="text"
              class="bg-transparent pl-2"
              placeholder="Rechercher ... "
              name="search"
              id="search"
            />
            <button class="bg-blue-500 p-2">
              <img
                src="https://img.icons8.com/?size=100&id=132&format=png&color=ffffff"
                alt="search-icon"
                class="w-5"
              />
            </button>
          </div>
        </div>

        <!-- Nombre de resultat par table  -->
        <div class="flex px-4 pb-4 items-center justify-between">
          <div class="select">
            <label for="nombreParTable" class="pr-4">Afficher</label>
            <select name="affichage" id="nombreParTable">
              <option value="5">5</option>
              <option value="10">10</option>
              <option value="20">20</option>
              <option value="50">50</option>
            </select>
          </div>
          <button class="add-btn px-4 py-2 bg-green-500 text-white">
            Ajouter
          </button>
        </div>

        <!-- Tableau avec des listes  -->
        <table class="border-collapse w-full">
          <!-- Head -->
          <tr>
            <th class="border py-2 px-4 bg-slate-100 text-start">ID</th>
            <th class="border py-2 px-4 bg-slate-100 text-start">Nom</th>
            <th class="border py-2 px-4 bg-slate-100 text-start">Prénom</th>
            <th class="border py-2 px-4 bg-slate-100 text-start">
              Date de Naissance
            </th>
            <th class="border py-2 px-4 bg-slate-100 text-start">Télephone</th>
            <th class="border py-2 px-4 bg-slate-100 text-start">
              adresse é-mail
            </th>
            <th class="py-2 px-4 text-center" colspan="2">Action</th>
          </tr>

          <!-- body -->

          <!-- ligne 1  -->
          <tr>
            <td class="border py-2 px-4">test</td>
            <td class="border py-2 px-4">test</td>
            <td class="border py-2 px-4">test</td>
            <td class="border py-2 px-4">test</td>
            <td class="border py-2 px-4">test</td>
            <td class="border py-2 px-4">test</td>
            <td class="py-2 px-1 text-center">
              <button class="px-4 py-2 bg-blue-100 mr-2">
                <img
                  src="https://img.icons8.com/?size=100&id=49&format=png&color=000000"
                  alt="modify-icon"
                  class="w-4"
                />
              </button>
            </td>
            <td class="py-2 px-1">
              <button class="px-4 py-2 bg-red-200">
                <img
                  src="https://img.icons8.com/?size=100&id=67884&format=png&color=000000"
                  alt="delete-icon"
                  class="w-4"
                />
              </button>
            </td>
          </tr>

          <!-- Ligne 2  -->
          <tr>
            <td class="border py-2 px-4">test</td>
            <td class="border py-2 px-4">test</td>
            <td class="border py-2 px-4">test</td>
            <td class="border py-2 px-4">test</td>
            <td class="border py-2 px-4">test</td>
            <td class="border py-2 px-4">test</td>
            <td class="py-2 px-1 text-center">
              <button class="px-4 py-2 bg-blue-100 mr-2">
                <img
                  src="https://img.icons8.com/?size=100&id=49&format=png&color=000000"
                  alt="modify-icon"
                  class="w-4"
                />
              </button>
            </td>
            <td class="py-2 px-1">
              <button class="px-4 py-2 bg-red-200">
                <img
                  src="https://img.icons8.com/?size=100&id=67884&format=png&color=000000"
                  alt="delete-icon"
                  class="w-4"
                />
              </button>
            </td>
          </tr>

          <!-- Ligne 3 -->
          <tr>
            <td class="border py-2 px-4">test</td>
            <td class="border py-2 px-4">test</td>
            <td class="border py-2 px-4">test</td>
            <td class="border py-2 px-4">test</td>
            <td class="border py-2 px-4">test</td>
            <td class="border py-2 px-4">test</td>
            <td class="py-2 px-1 text-center">
              <button class="px-4 py-2 bg-blue-100 mr-2">
                <img
                  src="https://img.icons8.com/?size=100&id=49&format=png&color=000000"
                  alt="modify-icon"
                  class="w-4"
                />
              </button>
            </td>
            <td class="py-2 px-1">
              <button class="px-4 py-2 bg-red-200">
                <img
                  src="https://img.icons8.com/?size=100&id=67884&format=png&color=000000"
                  alt="delete-icon"
                  class="w-4"
                />
              </button>
            </td>
          </tr>
        </table>

        <!-- Pagination -->

        <div class="flex p-4 justify-between">
          <div>Affichage de 0-9 / 450</div>
          <div class="flex gap-x-1">
            <button class="px-4 py-2 bg-slate-100 text-slate-500">
              Précedant
            </button>
            <button
              class="px-4 py-2 bg-slate-100 hover:bg-blue-400 hover:text-white"
            >
              1
            </button>
            <button
              class="px-4 py-2 bg-slate-100 hover:bg-blue-400 hover:text-white"
            >
              2
            </button>
            <button
              class="px-4 py-2 bg-slate-100 hover:bg-blue-400 hover:text-white"
            >
              ....
            </button>
            <button
              class="px-4 py-2 bg-slate-100 hover:bg-blue-400 hover:text-white"
            >
              189
            </button>
            <button class="px-4 py-2 bg-blue-400 text-white">Next</button>
          </div>
        </div>
        <!-- End Pagination -->
      </div>
    </main>

    <!-- Pop up -->
    <div
      class="pop-up-bg fixed inset-0 w-full h-full bg-black bg-opacity-50 hidden place-items-center"
    >
      <!-- pop window -->
      <div class="bg-white p-5 py-4 min-w-80 relative">
        <div class="flex justify-between">
          <h1 class="text-xl text-green-500 text-center">
            Ajouter un Enseignatnt
          </h1>
          <button
            class="close-btn px-4 py-2 bg-slate-100 rounded-full hover:bg-red-500 hover:text-white"
          >
            x
          </button>
        </div>
        <form action="#" method="post" enctype="multipart/form-data">
          <div class="block mt-6">
            <h3 class="font-bold mb-2">Information Personnel</h3>

            <!-- Nom et Prenom -->
            <div class="flex gap-x-4">
              <div class="flex flex-col">
                <label for="nom" class="pb-1">Nom</label>
                <input
                  type="text"
                  class="border px-2 py-1"
                  placeholder="Votre nom"
                  name="nom"
                  id="nom"
                  required
                />
              </div>
              <div class="flex flex-col">
                <label for="prenom" class="pb-1">Prénom</label>
                <input
                  type="text"
                  class="border px-2 py-1"
                  placeholder="Votre prénom"
                  name="prenom"
                  id="prenom"
                />
              </div>
            </div>
            <!-- Genre et Date de Naissance -->
            <div class="flex gap-x-4 mt-4">
              <div class="flex flex-col">
                <label for="genre" class="pb-1">Genre</label>
                <select
                  class="border px-2 py-1 min-w-56"
                  name="genre"
                  id="genre"
                  required
                >
                  <option value="Homme">Homme</option>
                  <option value="Femme">Femme</option>
                </select>
              </div>
              <div class="flex flex-col">
                <label for="date" class="pb-1">Date de Naissance</label>
                <input
                  type="date"
                  class="border px-2 py-1"
                  placeholder="Votre prénom"
                  name="dateDeNaissance"
                  id="date"
                />
              </div>
            </div>

            <!-- Photo de profile -->
            <div class="flex gap-x-4 mt-4">
              <div class="flex flex-col">
                <label for="photo" class="pb-1">Photo d'Identité</label>
                <input
                  type="file"
                  class="border px-2 py-1 max-w-56"
                  placeholder="034 xx  xxxx xx"
                  name="Photo"
                  id="photo"
                  required
                />
              </div>
              <div class="flex flex-col">
                <label for="tel" class="pb-1">Télephone</label>
                <input
                  type="text"
                  class="border px-2 py-1"
                  placeholder="034 xx  xxxx xx"
                  name="tel"
                  id="tel"
                  required
                />
              </div>
            </div>
          </div>

          <hr class="mt-4" />
          <!-- Information Professionnel  -->
          <div class="block mt-6">
            <h3 class="font-bold mb-2">Information Professionnel</h3>

            <div class="flex gap-x-4">
              <div class="flex flex-col">
                <label for="matricule" class="pb-1">N° Matricule</label>
                <input
                  type="text"
                  class="border px-2 py-1"
                  placeholder="AXXX"
                  name="matricule"
                  id="nom"
                  required
                />
              </div>
              <div class="flex flex-col">
                <label for="email" class="pb-1">Email professionnel</label>
                <input
                  type="email"
                  class="border px-2 py-1"
                  placeholder="example@example.com"
                  name="email"
                  id="email"
                />
              </div>
            </div>
            <div class="flex gap-x-4 mt-4">
              <div class="flex flex-col">
                <label for="pwd" class="pb-1">Mot de Passe</label>
                <input
                  type="password"
                  class="border px-2 py-1"
                  placeholder="Entrer votre mot de passe"
                  name="pwd"
                  id="pwd"
                  required
                />
              </div>
              <div class="flex flex-col">
                <label for="pwd" class="pb-1">
                  Confirmer votre mot de passe</label
                >
                <input
                  type="password"
                  class="border px-2 py-1"
                  placeholder="Confirmer votre mot de passe"
                  name="pwd"
                  id="pwd"
                  required
                />
              </div>
            </div>
          </div>
          <div class="submit mt-4">
            <input
              class="w-full text-white bg-green-500 py-2 hover:bg-green-600"
              type="submit"
              value="Ajouter"
            />
          </div>
        </form>
      </div>
    </div>
    <script >
    <?= 
      file_get_contents('view/script/pop_up.js')
    ?>
    </script>
  </body>
</html>
