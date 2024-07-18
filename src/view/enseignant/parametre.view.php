<?php
  require_once 'header.php';
 ?>
      <section class="mt-14 bg-white h-full px-8 pt-3">
        <h1 class="txt-xl">Paramètres du Compte</h1>
        <form action="#" class="mt-2">
          <table>
            <tr>
              <th>Nom</th>
              <td>
                <input
                  type="text"
                  class="px-2 py-1 bg-slate-100"
                  value="John Doe"
                />
              </td>
            </tr>

            <tr>
              <th>Prénom</th>
              <td>
                <input
                  type="text"
                  class="px-2 py-1 bg-slate-100"
                  value="John Doe"
                />
              </td>
            </tr>

            <tr>
              <th>Adresse émail</th>
              <td>
                <input
                  type="text"
                  class="px-2 py-1 bg-slate-100"
                  value="John Doe"
                />
              </td>
            </tr>
            <tr>
              <td class="text-center" colspan="2">
                <button type="submit" class="bg-green-200 w-full py-2">
                  Modifier
                </button>
              </td>
            </tr>
          </table>
        </form>
      </section>
    </main>
  </body>
</html>
