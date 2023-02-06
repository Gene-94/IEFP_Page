<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>
  
  

  <!-- BANNER -->
  <header class="bg-white shadow">
      <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Form</h1>
      </div>
  </header>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <div class="px-4 py-6 sm:px-0">
        <div class="h-96 rounded-lg border-4 border-dashed border-gray-200">


                    <!-- component -->
            <form action="/home" method="get" class="">
                <!-- <div class="min-h-screen w-full flex items-center justify-center bg-gray-00"> -->
                <div>
                    <h1 class="mb-1 font-bold text-3xl flex gap-1 items-baseline font-mono">Formulario de inscrição<span class="text-sm text-green-700">IEFP Barlavento</sm></h1>
                <div class="grid max-w-3xl gap-2 py-10 px-8 sm:grid-cols-2 bg-white rounded-md border-t-4 border-green-900">
                <div class="grid">
                    <div class="bg-white flex min-h-[60px] flex-col-reverse justify-center rounded-md border border-gray-300 px-3 py-2 shadow-sm focus-within:shadow-inner">
                    <input type="text" name="first-name" id="first-name" class="peer block w-full border-0 p-0 text-base text-gray-900 placeholder-gray-400 focus:ring-0" placeholder="Nome" />
                    <label html="first-name" class="block transform text-xs font-bold uppercase text-gray-400 transition-opacity, duration-200 peer-placeholder-shown:h-0 peer-placeholder-shown:-translate-y-full peer-placeholder-shown:opacity-0">Nome Comleto</label>
                    </div>
                </div>
                <div class="grid">
                    <div class="bg-white first:flex min-h-[60px] flex-col-reverse justify-center rounded-md border border-gray-300 px-3 py-2 shadow-sm focus-within:shadow-inner">
                    <input type="text" name="last-name" id="last-name" class="peer block w-full border-0 p-0 text-base text-gray-900 placeholder-gray-400 focus:ring-0" placeholder="Last name" />
                    <label html="last-name" class="block transform text-xs font-bold uppercase text-gray-400 transition-opacity, duration-200 peer-placeholder-shown:h-0 peer-placeholder-shown:-translate-y-full peer-placeholder-shown:opacity-0">Last name</label>
                    </div>
                </div>
                    <div class="grid">
                    <div class="bg-white flex min-h-[60px] flex-col-reverse justify-center rounded-md border border-gray-300 px-3 py-2 shadow-sm focus-within:shadow-inner">
                    <input type="text" list="cityname" name="last-name" id="last-name" class="peer block w-full border-0 p-0 text-base text-gray-900 placeholder-gray-400 focus:ring-0" placeholder="Company" />
                        <datalist id="cityname">
                            <option value="Boston">
                            <option value="Cambridge">
                        </datalist>
                    <label html="company" class="block transform text-xs font-bold uppercase text-gray-400 transition-opacity, duration-200 peer-placeholder-shown:h-0 peer-placeholder-shown:-translate-y-full peer-placeholder-shown:opacity-0">Company</label>
                    </div>
                </div>
                <div class="grid">
                    <div class="bg-white flex min-h-[60px] flex-col-reverse justify-center rounded-md border border-gray-300 px-3 py-2 shadow-sm focus-within:shadow-inner">
                    <input type="email" name="email" id="email" class="peer block w-full border-0 p-0 text-base text-gray-900 placeholder-gray-400 focus:ring-0" placeholder="E-mail" />
                    <label html="email" class="block transform text-xs font-bold uppercase text-gray-400 transition-opacity, duration-200 peer-placeholder-shown:h-0 peer-placeholder-shown:-translate-y-full peer-placeholder-shown:opacity-0">E-mail</label>
                    </div>
                </div>
                        <button type="submit" class=" mt-4 bg-green-700 text-white py-2 px-6 rounded-md hover:bg-green-900 ">< anterior</button>
                        <button type="submit" class=" mt-4 bg-green-700 text-white py-2 px-6 rounded-md hover:bg-green-900 ">seguinte ></button>
                </div>
                <!-- </div> -->
             </form>

        </div>
      </div>
    </div>
  </main>


  <?php require('partials/footer.php'); ?>