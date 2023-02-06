<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>
  
  

  <!-- BANNER -->
  <header class="bg-white shadow">
      <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">New Note</h1>
      </div>
  </header>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <form action="/notes/new" method="post">
            <div class="mb-6">
                <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900">Write your note: </label>
                <input type="text" name="note_body" id="large-input" required class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500">
            </div>

            <?php if(isset($isEmpty)) : ?>
                <div class="bg-purple-100 rounded-lg py-3 px-6 mb-4 text-base text-purple-700 mb-3" role="alert">
                    There's no poin in an empty note, isn't there? | *Please write something before submiting
                </div>
            <?php endif; ?>
            <a href="/notes"><button type="button" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-1 px-3 mr-1 rounded">
                Back
            </button></a>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-5 rounded">
                Add Note
            </button>
        </form>
    </div>
  </main>


  <?php require('partials/footer.php'); ?>