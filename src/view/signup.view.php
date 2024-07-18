<?php 
  require_once 'partial/head.php';
?>

  <body class="container bg-green-300 grid place-items-center min-h-screen">
    <div class="bg-white p-5 py-6 min-w-80">
      <h1 class="text-xl text-green-500 text-center">Inscription</h1>
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
            value="S'inscrire"
          />
        </div>
        <div class="py-2 pt-4">
          Vous avez déjà un compte ?
          <a href="login.html" class="text-xm text-green-500"> Se connecter </a>
        </div>
      </form>
    </div>
<?php 
  require_once 'partial/footer.php';
?>
