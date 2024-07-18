<?php 
  require_once 'header.php';
?>
      <!-- Main -->

      <div class="mt-12 p-4 bg-white">
        <h1 class="text-2xl">Account Settings</h1>

        <!-- Form  -->
        <form action="#" class="mt-8 pl-4 w-fit">
          <!-- User name -->
          <div class="username flex flex-col">
            <label for="username" class="font-bold">Username </label>
            <input
              type="text"
              value="admin"
              name="username"
              id="username"
              class="bg-slate-100 p-2"
            />
          </div>

          <!-- Ancien Password -->
          <div class="username flex flex-col">
            <label for="username" class="font-bold">Ancien Mot de Passe </label>
            <input
              type="password"
              value="admin"
              placeholder="Nouveau mot de passe"
              name="lastPwd"
              id="lastPwd"
              class="bg-slate-100 p-2"
            />
          </div>

          <!-- Nouveau Password -->
          <div class="username flex flex-col">
            <label for="newPwd" class="font-bold">Nouvea Mot de passe</label>
            <input
              type="password"
              placeholder="Nouveau mot de passe"
              name="newPwd"
              id="newPwd"
              class="bg-slate-100 p-2"
            />
          </div>

          <!-- Confirmation Nouveau Password -->
          <div class="username flex flex-col">
            <label for="newPwd2" class="font-bold">
              Confirmer votre Nouveau Mot de passe
            </label>
            <input
              type="password"
              placeholder="Nouveau mot de passe"
              name="newPwd2"
              id="newPwd2"
              class="bg-slate-100 p-2"
            />
          </div>

          <!-- div checkboxes -->
          <div class="mt-2">
            <input type="checkbox" name="show" id="show" />
            <label for="show">Afficher les mots de passe </label>
          </div>

          <div class="text-end">
            <input
              class="px-4 py-2 bg-blue-500 text-white mt-4 hover:bg-blue-800"
              type="submit"
              value="Enregistrer"
            />
          </div>
        </form>
      </div>
    </main>
    <script src="../script/settings.js"></script>
  </body>
</html>
