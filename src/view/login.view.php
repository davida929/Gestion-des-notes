<?php 
  require_once 'partial/head.php';
?>
<body class="container bg-green-300 grid place-items-center min-h-screen">
  <div class="bg-white p-5 py-6 min-w-80">
    <h1 class="text-xl text-green-500 text-center">Connexion</h1>

    <?php if($isError): ?>
    <div class="erreur p-3 text-red-800 bg-red-100 mt-6 rounded">
      Mot de passe ou Email incorrrects
    </div>
    <?php endif; ?>

    <form action="#" method="post" class="pt-1">
      <div class="flex flex-col">
        <label for="email" class="font-bold pb-1">Email</label>
        <input
          type="email"
          class="border px-2 py-1"
          placeholder="example@example.com"
          name="email"
          id="email"
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
      <div class="py-2 pt-4">
        <a href="#" class="text-xm text-green-500">Mot de passe oublié ?</a>
      </div>
      <div>
        <input
          class="w-full text-white bg-green-500 py-2 hover:bg-green-600"
          type="submit"
          name ="ok"
          value="Se connecter"
        />
      </div>
      <div class="py-2 pt-4">
        Vous n'avez pas un compte ?
        <a href="/signup" class="text-xm text-green-500">
          Créer un compte
        </a>
      </div>
    </form>
  </div>
</body>
<?php 
  require_once 'partial/footer.php';
?>