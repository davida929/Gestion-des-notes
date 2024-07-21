<?php 
  require_once 'view/partial/head.php';
?>
  <body class="flex min-h-screen bg-gray-100 flex">
    <main class="min-h-screen w-full mb-16">
      <!-- Header -->
      <div
        class="header p-4 px-8 bg-white border fixed w-full flex justify-between items-center"
      >
        <!-- Navigation  -->
        <ul class="Navigation flex gap-x-4 items-center">
          <li>
            <a href="/admin/dashboard" class="hover:text-blue-500">Acceuil</a>
          </li>
          <li>
            <a href="/admin/contact" class="text-blue-500">Contact</a>
          </li>
          <li>
            <a href="/admin/parametre" class="hover:text-blue-500">Parametre</a>
          </li>
        </ul>

        <!-- End Button -->
        <div>
          <span class="username">Bertho</span>
          <a
            href="/admin/logout"
            class="ml-2 py-2 px-4 bg-slate-100 hover:bg-red-200"
          >
            Deconnexion
          </a>
        </div>
      </div>