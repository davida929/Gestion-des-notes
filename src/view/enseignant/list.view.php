<?php
  require_once 'header.php';
 ?>
          <!-- Liste des notes  -->

      <!-- Introduction -->
      <div class="p-4 bg-white mt-14">
        <h1 class="text-2xl text-center font-bold mt-4">Groupe Genie G1</h1>
        <!-- Operation -->
        <div class="p-4 flex justify-start gap-x-2">
          <!-- Exporter en PDF -->
          <button
            class="px-4 py-2 bg-red-400 rounded text-white flex justify-center items-center gap-x-2"
          >
            <img
              src="https://img.icons8.com/?size=100&id=39195&format=png&color=000000"
              class="w-5"
              alt="img"
            />
            Exporter en PDF
          </button>

          <!-- Exporter en PDF -->
          <button
            class="px-4 py-2 bg-green-400 rounded text-white flex justify-center items-center gap-x-2"
          >
            <img
              src="https://img.icons8.com/?size=100&id=BEMhRoRy403e&format=png&color=000000"
              class="w-5"
              alt="img"
            />
            Exporter en Excel
          </button>
        </div>
        <!-- Main -->
        <div class="flex justify-between items-start p-4">
          <!-- Table -->
          <table class="w-full">
            <!-- Header -->
            <tr>
              <th class="text-start p-2 bg-green-100 border">Numero</th>
              <th class="text-start p-2 bg-green-100 border">Nom</th>
              <th class="text-start p-2 bg-green-100 border">Prenom</th>
              <th class="text-start p-2 bg-green-100 border">Code Massar</th>
              <th class="text-start px-2 bg-green-100 border w-14">DS 1</th>
              <th class="text-start px-2 bg-green-100 border w-14">DS 2</th>
              <th class="text-center px-2   w-14" colspan="2" >Action</th>
            </tr>

            <!-- Body -->
            <tr>
              <td class="p-2 border">1</td>
              <td class="p-2 border">John</td>
              <td class="p-2 border">Doe</td>
              <td class="p-2 border">ESTO1204</td>
              <td class="p-2 border">
                <input
                  type="text"
                  name="note_1"
                  value="12"
                  class="pl-2 bg-slate-100 h-full"
                />
              </td>
              <td class="p-2 border">
                <input
                  type="text"
                  name="note_1"
                  value="17"
                  class="pl-2 bg-slate-100"
                />
              </td>
              <td class="p-2">
                <a href="#" class="px-2 py-2 bg-blue-400 text-white">Modifier</a>
              </td>
              <td class="p-2">
                <a href="#" class="px-2 py-2 bg-red-400 text-white">Supprimer</a>
              </td>
            </tr>
          </table>
          <!-- Search Bar -->
          <div class="w-2/5 text-center sticky">
            <!-- ajout d'etudiants -->
            <div class="px-4 py-2">
                <h2 class=" font-bold">Ajouter un Etudiant</h2>
                <form action="/add" method="post">
                  <table class="mt-2">
                    <tr>
                      <td class="w-full">Code Massar</td>
                      <td> <input type="text" name="code_massar" class="bg-slate-100 px-2 py-1" > </td>
                    </tr>
                    <tr>
                      <td class="w-full">Nom</td>
                      <td> <input type="text" name="nom" class="bg-slate-100 px-2 py-1" > </td>
                    </tr>
                    <tr>
                      <td class="w-full">Prénom</td>
                      <td> <input type="text" name="prenom" class="bg-slate-100 px-2 py-1" > </td>
                    </tr>
                    <?php if (!empty($error)): ?>
                    <tr>
                      <td class="text-red-600 text-xs" colspan="2"><?= $error ?></td>
                    </tr>
                    <?php endif ; ?>

                    <tr>
                      <td colspan="2">
                        <button type="submit" class="px-4 py-2 bg-green-400 text-white w-full">Enregistrer</button>
                      </td>
                    </tr>
                  </table>
                </form>

            </div>
            <h3 class="font-bold">Barre de Recherche</h3>
            <form action="#" class="flex mt-2 px-4 items-center" method="GET">
              <input
                type="text"
                name="search_key"
                class="bg-slate-100 pl-2 h-8 w-full"
                id=""
                placeholder="Nom ou code Massar ici"
              />
              <label for="search" class="py-2 px-4 bg-green-400 cursor-pointer">
                <img
                  src="https://img.icons8.com/?size=100&id=132&format=png&color=ffffff"
                  alt="search-icon"
                  srcset=""
                  class="w-5"
                />
              </label>

              <input type="submit" class="hidden" id="search" />
            </form>
            <div class="mt-3 px-2">
              <h2 class="font-bold">Modifications</h2>
              <div class="flex justify-center gap-x-2 mt-2">
                <button class="px-4 py-2 bg-red-200 w-full">Annuler</button>
                <button class="px-4 py-2 bg-green-200 w-full">
                  Sauvegarder
                </button>
              </div>
            </div>
          </div>
          <!-- End research -->
          <!-- Modifications -->
        </div>
      </div>
    </main>
  </body>
</html>
