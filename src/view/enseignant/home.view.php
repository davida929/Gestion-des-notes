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

      <?php if(empty($devoirs)): ?>
        <div class="text-center bg-white ">
          <h1 class="text-2xl"> Vous n'avez pas encore de Note Enregistrée </h1>
        </div>
      <?php 
      endif;?>

      <section class="bg-white p-4">
        <!-- Main  -->
      <?php foreach($all_level AS $level) :
        
          $key = $level['niveu']
        ?>
        <div class="pl-4 mt-2 rounded">
          <h2 class="text-xl font-bold"> <?= $key ?></h2>

          <!-- List of  Card  -->
          <div class="main grid grid-cols-4 p-4 gap-y-2 gap-x-2">
            <!-- card 1 -->
                  <?php  foreach($devoirs[$key] AS $dev):?>

              <a href="/list?dev_id=<?= $dev['id'] ?>&class=<?= $dev['classe'] ?>&titre=<?= $dev['titre'] ?>" class="px-4 py-2 bg-blue-200">
                <h3 class="text-lg font-bold">  <?= $dev['classe'] ?> </h3>
                <h6 class="">DS: <?= $dev['titre'] ?> </h6>
                <h6 class="">Date : <?= $dev['dateNotes'] ?> </h6>
                </a>
                <?php endforeach ;?>

          </div>

          <!-- end list card -->
        </div>
      <?php endforeach;  ?>

      </section>
    </main>

    <!-- Pop up  -->
    <div
      class="hidden bg-pop absolute bg-black bg-opacity-50 inset-0 h-full w-full  place-items-center"
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
                  name="nom_ds"
                  class="px-2 py-1 border-none bg-slate-100"
                  placeholder="exemple DS 1"
                />
              </td>
            </tr>

            <tr>
              <th class="text-start pr-2">Niveau</th>
              <td>
                <select name="niveau" class="px-2 py-1 w-full">
                  <option value="Licence 1">Licence 1</option>
                  <option value="Licence 2">License 2</option>
                  <option value="Licence 3">Licence 3</option>
                  <option value="Master 1">Master 1</option>
                  <option value="Master 1">Master 2</option>
                </select>
              </td>
            </tr>

            <tr>
              <th class="text-start pr-2">Classe</th>
              <td>
                <input
                  type="text"
                  name="classe"
                  class="px-2 py-1 border-none bg-slate-100"
                  placeholder="Nom de la classe"
                />
              </td>
            </tr>

            <!-- date  -->
            <tr>
              <th class="text-start pr-2">Date</th>
              <td>
                <input type="date" name="date_ds" class="w-full" required />
              </td>
            </tr>

            <tr>
              <td class="pt-2 text-center" colspan="2">
                <input
                  type="submit"
                  value="Ajouter"
                  name="ok"
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
    <script>
      <?= file_get_contents('view/script/home.js') ?>
    </script>
  </body>
</html>
