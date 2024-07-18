<?php
  require_once 'header.php';
 ?>
      <!-- Liste des notes  -->

      <!-- Introduction -->
      <div class="p-4 bg-white mt-14">
        <h1 class="text-2xl text-center font-bold mt-4">Liste des Notes</h1>
      </div>

      <!-- Bouton ajout -->
      <div class="px-8 bg-white">
        <button class="open bg-green-500 text-white px-4 py-2">Ajouter</button>
      </div>
      <section class="bg-white p-4">
        <!-- Main  -->
        <div class="pl-4 mt-2 rounded">
          <h2 class="text-xl font-bold">Departements: Mathematiques</h2>

          <!-- List of  Card  -->
          <div class="main grid grid-cols-4 p-4 gap-y-2 gap-x-2">
            <!-- card 1 -->
            <a href="list.html" class="px-4 py-2 bg-blue-200">
              <h3 class="text-lg font-bold">Genie Info GP 1</h3>
              <h6 class="">Nombre d'etudians : 123</h6>
            </a>

            <!-- card 1 -->
            <a href="list.html" class="px-4 py-2 bg-pink-200">
              <h3 class="text-lg font-bold">Genie Info GP 1</h3>
              <h6 class="">Nombre d'etudians : 123</h6>
            </a>

            <!-- card 1 -->
            <a href="list.html" class="px-4 py-2 bg-red-200">
              <h3 class="text-lg font-bold">Genie Info GP 1</h3>
              <h6 class="">Nombre d'etudians : 123</h6>
            </a>

            <!-- card 1 -->
            <a href="list.html" class="px-4 py-2 bg-yellow-200">
              <h3 class="text-lg font-bold">Genie Info GP 1</h3>
              <h6 class="">Nombre d'etudians : 123</h6>
            </a>

            <!-- card 1 -->
            <a href="list.html" class="px-4 py-2 bg-green-200">
              <h3 class="text-lg font-bold">Genie Info GP 1</h3>
              <h6 class="">Nombre d'etudians : 123</h6>
            </a>

            <!-- card 1 -->
            <a href="list.html" class="px-4 py-2 bg-red-200">
              <h3 class="text-lg font-bold">Genie Info GP 1</h3>
              <h6 class="">Nombre d'etudians : 123</h6>
            </a>
          </div>

          <!-- end list card -->
        </div>
      </section>
    </main>

    <!-- Pop up  -->
    <div
      class="hidden bg-pop absolute bg-black bg-opacity-50 inset-0 h-full w-full grid place-items-center"
    >
      <div class="pop-up bg-white p-4 rounded relative">
        <h2 class="text-xl font-bold text-center">Ajouter une Note</h2>

        <!-- form  -->
        <form action="#" method="post" class="mt-2">
          <table>
            <tr>
              <th class="text-start pr-2">Nom du DS :</th>
              <td>
                <input
                  type="text"
                  class="px-2 py-1 border-none bg-slate-100"
                  placeholder="exemple DS 1"
                />
              </td>
            </tr>

            <tr>
              <th class="text-start pr-2">Département</th>
              <td>
                <select name="departements" class="px-2 py-1 w-full">
                  <option value="Genie Info">Genie Informatique</option>
                  <option value="Genie Info">Science et Mad</option>
                </select>
              </td>
            </tr>

            <tr>
              <th class="text-start pr-2">Classe</th>
              <td>
                <select name="classe" class="px-2 py-1 w-full">
                  <option value="Genie info">Genie Info</option>
                  <option value="Resau et Com">Resau et Com</option>
                  <option value="Intelligence Artificielle">
                    Intelligence Artificielle
                  </option>
                </select>
              </td>
            </tr>

            <!-- date  -->
            <tr>
              <th class="text-start pr-2">Date</th>
              <td>
                <input type="date" class="w-full" />
              </td>
            </tr>

            <tr>
              <td class="pt-2 text-center" colspan="2">
                <input
                  type="submit"
                  value="Ajouter"
                  class="w-full bg-green-500 h-8 text-white"
                />
              </td>
            </tr>
          </table>
        </form>
        <button
          class="close rounded-full absolute top-3 hover:text-red-500 right-4"
        >
          X
        </button>
      </div>
    </div>
    <script src="../script/home.js"></script>
  </body>
</html>
