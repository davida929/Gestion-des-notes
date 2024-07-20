<?php 
  require_once 'partial/head.php';
?>
  <body class="container bg-blue-300 grid place-items-center min-h-screen">
    <div class="bg-white p-5 py-6 min-w-80">
      <h1 class="text-xl text-blue-500 text-center">Espace Admin</h1>

      <?php if(!empty($error)): ?>
      <div class="erreur p-3 text-red-800 bg-red-100 mt-6 rounded">
        Mot de passe ou Email incorrrects
      </div>
      <?php endif; ?>


      <form action="#" method="post" class="pt-1">
        <div class="flex flex-col">
          <label for="username" class="font-bold pb-1">Username</label>
          <input
            type="text"
            class="border px-2 py-1"
            placeholder="example@example.com"
            name="username"
            id="username"
            required
          />
        </div>
        <div class="flex flex-col pt-2">
          <label for="password" class="font-bold pb-1">Password</label>
          <input
            type="password"
            class="border px-2 py-1"
            placeholder="yourpassword"
            name="password"
            id="password"
            required
          />
        </div>
        <div class="mt-4">
          <input
            class="w-full text-white bg-blue-500 py-2 hover:bg-blue-600"
            type="submit"
            name="connexion"
            value="Se connecter"
          />
        </div>
      </form>
    </div>
  </body>
<?php 
  require_once 'partial/footer.php';
?>