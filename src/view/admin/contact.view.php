<?php 
  require_once 'header.php';
?>
      <!-- Professeurs -->
      <div class="border mt-16 mx-8 bg-white rounded">
        <!-- Header -->
        <div class="flex p-4 justify-between items-center">
          <h3 class="text-xl">Contact des Professeur</h3>

          <!-- Search button -->
          <div class="search-bar flex items-center bg-slate-100">
            <input
              type="text"
              class="bg-transparent pl-2"
              placeholder="Rechercher ... "
              name="search"
              id="search"
            />
            <button class="bg-blue-500 p-2">
              <img
                src="https://img.icons8.com/?size=100&id=132&format=png&color=ffffff"
                alt="search-icon"
                class="w-5"
              />
            </button>
          </div>
        </div>

        <!-- Liste card-->
        <div class="grid px-16 py-4">
          <!-- Card  -->
          <div class="card p-4 shadow rounded w-fit">
            <!--profile picture  -->
            <div class="overflow-hidden rounded-full w-48 h-48 bg-blue-100">
              <img
                src="https://media.sproutsocial.com/uploads/2022/06/profile-picture.jpeg"
                alt="profile-picture"
                class="w-full"
              />
            </div>
            <!-- Info Contact  -->
            <div class="info text-center">
              <h2 class="font-bold text-xl">Davida Berto</h2>
              <h3 class="mt-1 text-gray-700">davidaberto@gmail.com</h3>
              <h3 class="mt-1 text-gray-700">+212 61 072 89</h3>
            </div>
            <!-- lien contact -->
            <div class="link flex gap-x-1 mt-2 justify-center">
              <a
                href="mailto:davidabertho.93@gmail.com"
                class="px-4 py-2 bg-gray-100"
              >
                <img
                  src="https://img.icons8.com/?size=100&id=P7UIlhbpWzZm&format=png&color=000000"
                  alt="gmail-logo"
                  class="w-5"
                />
              </a>
              <a href="tel:+261346422007" class="px-4 py-2 bg-gray-100">
                <img
                  src="https://img.icons8.com/?size=100&id=dvZnjC1SVTyx&format=png&color=000000"
                  alt="call"
                  class="w-5"
                />
              </a>
              <a
                href="https://wa.me/261346422007"
                class="px-4 py-2 bg-gray-100"
              >
                <img
                  src="https://img.icons8.com/?size=100&id=7OeRNqg6S7Vf&format=png&color=000000"
                  alt=""
                  class="w-5"
                />
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Students -->
    </main>
  </body>
</html>
