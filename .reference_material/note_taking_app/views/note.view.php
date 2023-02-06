<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>
  
  

  <!-- BANNER -->
  <header class="bg-white shadow">
      <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900"><?= $user['name'] ?>s note</h1>
      </div>
  </header>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <div class="px-4 py-6 sm:px-0">
        <div class="h-96 rounded-lg border-4 border-dashed border-gray-200">

            <P>
                <?=  htmlspecialchars($note['body'])  ?>
            </P>
        


        </div>
        <a href="/notes">   
            <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">  
                Back to all notes  
            </button>   
        </a>
      </div>
    </div>
  </main>


  <?php require('partials/footer.php'); ?>