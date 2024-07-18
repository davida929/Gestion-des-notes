<?php 

    require_once('view/partial/head.php');
?>


<body class="flex min-h-screen bg-gray-100 flex">
    <!-- <nav class="min-h-screen bg-white p-4">
      <div class="mb-6">
        <h1 class="text-2xl">Davida Berto</h1>
      </div>

    </nav> -->
    <main class="min-h-screen w-full mb-16">
      <!-- Header -->
      <div
        class="header p-4 px-8 bg-white border fixed w-full flex justify-between items-center"
      >
        <!-- Navigation  -->
        <ul class="Navigation flex gap-x-4 items-center">
          <li>
            <a href="/home" class="text-blue-500">Acceuil</a>
          </li>
          <li>
            <a href="/note" class="hover:text-blue-500">Notes</a>
          </li>
          <li>
            <a href="/parametre" class="hover:text-blue-500">Parametre</a>
          </li>
        </ul>

        <!-- End Button -->
        <div>
          <span class="username">Bertho</span>
          <a
            href="/login"
            class="ml-2 py-2 px-4 bg-slate-100 hover:bg-red-200"
          >
            Deconnexion
          </a>
        </div>
      </div>