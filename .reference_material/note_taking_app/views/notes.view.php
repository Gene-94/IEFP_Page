<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>
  
  

  <!-- BANNER -->
  <header class="bg-white shadow">
      <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Notes</h1>
      </div>
  </header>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

      
        <?php if(!$userNotes) :?>
          <h3 class="font-medium leading-tight text-xl mt-0 mb-2 text-gray-600">Nothing to show</h3>
          
        <?php else :?>


          <div class="my-2">
            <ul>
              <?php foreach($userNotes as $note): ?>
                <li>
                  ><a href="/note?id=<?=$note['id']?>" class="text-blue-500 hover:underline">
                    <em><?= htmlspecialchars($note['body'])?></em>
                  </a>
                </li>
              <?php endforeach ?>
            </ul>
          </div>
          
            <div class="mt-10">
              <a href="/notes/new">
                <button class="bg-green-700 hover:bg-green-600 text-white font-bold py-2 px-4 border-b-4 border-green-800 hover:border-green-500 rounded">
                  + New Note
                </button>
              </a>
            </div>
            



          <?php endif ;?>
    </div>
  </main>


  <?php require('partials/footer.php'); ?>