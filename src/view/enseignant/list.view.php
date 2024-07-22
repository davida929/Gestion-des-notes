<?php
  require_once 'header.php';
 ?>
          <!-- Liste des notes  -->

      <!-- Introduction -->
      <div class="p-4 bg-white mt-14">
        <h1 class="text-2xl text-center font-bold mt-4"> <?= $classe?> - <?= $name?>  </h1>
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
              <th class="text-start p-2 bg-green-100 border">Code Massar</th>
              <th class="text-start p-2 bg-green-100 border">Nom</th>
              <th class="text-start p-2 bg-green-100 border">Prenom</th>
              <th class="text-start px-2 bg-green-100 border w-14">Note</th>
              <th class="text-center px-2   w-14" colspan="2" >Action</th>
            </tr>

            <!-- Body -->
            <?php foreach($notes_all as $nts): 
              $str = http_build_query([
                'modify' => 'ok',
                'code_massar' => $nts['code_massar'],
                'nom' => $nts['nom'],
                'prenom' => $nts['prenom'],
                'note' => $nts['note']
              ]);
              
              ?>
            <tr>
              <td class="p-2 border"> <?= $nts['code_massar'] ?> </td>
              <td class="p-2 border"> <?= $nts['nom'] ?> </td>
              <td class="p-2 border"> <?= $nts['prenom'] ?> </td>
              <td class="p-2 border"> <?= $nts['note'] ?> </td>
              <td class="p-2 text-center w-14 ">
                <a href="/list?<?=$str?>" class="px-2 py-2 bg-blue-400 text-white">Modifier</a>
              </td>
              <td class="p-2  w-14">
                <a href="/delete?id=<?= $nts['id'] ?>" class="px-2 py-2 bg-red-400 text-white">Supprimer</a>
              </td>
            </tr>
            <?php endforeach; ?>

          </table>
          <!-- Search Bar -->
          <div class="w-2/5 text-center sticky">
            <h3 class="font-bold">Barre de Recherche</h3>
            <form action="" class="flex mt-2 px-4 items-center" method="GET">
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
              <input type="submit" name="ok" value="ok"  class="hidden" id="search" />
            </form>

            <!-- ajout d'etudiants -->
            <div class="px-4 py-2">
                <h2 class=" font-bold">Ajouter un Etudiant</h2>
                <form action="#" method="post">
                  <table class="mt-2">
                    <tr>
                      <td class="w-full">Code Massar</td>
                      <td> <input 
                              type="text" 
                              required name="code_massar" 
                              class="bg-slate-100 px-2 py-1"
                              value="<?= $d_code ?>"
                               > 
                        </td>
                    </tr>
                    <tr>
                      <td class="w-full">Nom</td>
                      <td> <input  value="<?= $d_nom ?>"   type="text" name="nom" required  class="bg-slate-100 px-2 py-1" > </td>
                    </tr>
                    <tr>
                      <td class="w-full">Prénom</td>
                      <td> <input  value="<?= $d_prenom ?>" type="text" name="prenom" class="bg-slate-100 px-2 py-1" > </td>
                    </tr>
                    <tr>
                      <td class="w-full">Note</td>
                      <td> <input value="<?= $d_note ?>"  type="number" name="note" class="bg-slate-100 px-2 py-1" > </td>
                    </tr>
                    <?php if (!empty($error)): ?>
                    <tr>
                      <td class="text-red-600 text-xs" colspan="2"><?= $error ?></td>
                    </tr>
                    <?php endif ; ?>

                    <tr>
                      <td colspan="2">
                        <button name="ok" type="submit" class="px-4 py-2 bg-green-400 text-white w-full">Enregistrer</button>
                      </td>
                    </tr>
                  </table>
                </form>

            </div>
          </div>
          <!-- End research -->
          <!-- Modifications -->
        </div>
      </div>
    </main>
  </body>
</html>
