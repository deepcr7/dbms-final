
<?php 
require "./header.php";
    if(isset($_SESSION['userUidOfficer'])){
      if(isset($_GET['error'])){
        if($_GET['error']=="emptyfields"){
          echo'<h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-red-600">
           Empty fields!!       
           </h2>';
        }elseif($_GET['error']=="sqlerror"){
          echo'<h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-red-600">
          sql database connection error!!       
          </h2>';
        }

      }
      echo'


<form action="includes/fir.inc.php" method="post" >
  <section class="text-gray-700 body-font relative">
    <div class="container px-5 my-5 mx-auto">
      <div class="flex flex-col text-center w-full mb-12">
        <h1
          class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900"
        >
          Add an FIR
        </h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
          File an FIR against multiple criminals
        </p>
      </div>
      <div class="lg:w-1/2 md:w-2/3 mx-auto">
        <div class="flex flex-wrap -m-2">
          <div class="p-2 w-1/2">
          <label class="block text-sm leading-5 font-medium text-gray-700"
            >Fir Number</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <input
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base form-input block w-full px-3 h-10"
              placeholder="FIR Number" name="fir_no"
            />
          </div>
        </div>
          <div class="p-2 w-1/2">
          <label class="block text-sm leading-5 font-medium text-gray-700"
            >Date of FIR</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <input
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base form-input block w-full px-3 h-10"
                type="date" name="date_fir"
            />
          </div>
        </div>
          <div class="p-2 w-1/2">
          <label class="block text-sm leading-5 font-medium text-gray-700"
            >Crime</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <select
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base form-input block w-full px-3 h-10"
              placeholder="Jobs" name="crime_done"
            >
            <option  value="Murder">Murder</option>
              <option   value="Rape">Rape</option>
              <option  value="Theft">Theft</option>
              <option  value="Fraud">Fraud</option>
</select>
          </div>
        </div>
          <div class="p-2 w-1/2">
          <label class="block text-sm leading-5 font-medium text-gray-700"
            >Officer ID</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <input
              name="officer_id"
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base form-input block w-full px-3 h-10"
            />
          </div>
        </div>
          <div class="p-2 w-full">
          <label class="block text-sm leading-5 font-medium text-gray-700"
            >Description</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <textarea
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none h-48 focus:border-indigo-500 text-base px-4 py-2 resize-none block"
              placeholder="Description" name="description"
            ></textarea>
          </div>
        </div>

        </div>
      </div>
    </div>
  </section>

  <section class="text-gray-700 body-font relative">
  <div class="container px-5 my-5 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1
        class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900"
      >
        Add a Prisoner
      </h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
        Add a prisoner to the system
      </p>
    </div>
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <div class="flex flex-wrap -m-2">
        <div class="p-2 w-1/2">
          <label class="block text-sm leading-5 font-medium text-gray-700"
            >First Name</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <input name="f_name"
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base form-input block w-full px-3 h-10"
              placeholder="Steve"
            />
          </div>
        </div>
        <div class="p-2 w-1/2">
          <label class="block text-sm leading-5 font-medium text-gray-700"
            >Last Name</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <input
            name="l_name"
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base form-input block w-full px-3 h-10"
              placeholder="Jobs"
            />
          </div>
        </div>

        <div class="p-2 w-1/2">
          <label
            for="price"
            class="block text-sm leading-5 font-medium text-gray-700"
            >Date in</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <input
            name="date_in"
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base form-input block w-full px-3 h-10"
              type="date"
            />
          </div>
        </div>

        <div class="p-2 w-1/2">
          <label
            for="price"
            class="block text-sm leading-5 font-medium text-gray-700"
            >Date Out</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <input
            name="date_out"
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base form-input block w-full px-3 h-10"
              type="date"
            />
          </div>
        </div>

        <div class="p-2 w-1/2">
          <label
            for="price"
            class="block text-sm leading-5 font-medium text-gray-700"
            >DOB</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <input
               name="dob"
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base form-input block w-full px-3 h-10"
              type="date"
            />
          </div>
        </div>
        <div class="p-2 w-1/2">
          <label
            for="price"
            class="block text-sm leading-5 font-medium text-gray-700"
            >Height(in cms)</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <input
              name="height"
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base form-input block w-full px-3 h-10"
              type="text"
            />
          </div>
        </div>
        <div class="p-2 w-1/2">
          <label class="block text-sm leading-5 font-medium text-gray-700"
            >Address</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <input
            name="addr"
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base form-input block w-full px-3 h-10"
              type="text"
            />
          </div>
        </div>
        <div class="p-2 w-1/2">
          <label class="block text-sm leading-5 font-medium text-gray-700"
            >Section ID</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <input
            name="section_id"
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base form-input block w-full px-3 h-10"
              type="text"
            />
          </div>
        </div>
        <!--
        <div class="p-2 w-full">
          <label class="block text-sm leading-5 font-medium text-gray-700"
            >Description</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <textarea
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none h-48 focus:border-indigo-500 text-base px-4 py-2 resize-none block"
              placeholder="Description"
            ></textarea>
          </div>
        </div>
        -->
        <div class="p-2 w-full">
          <button
            name="fir_prisoner_add" type="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"
          >
            Submit
          </button>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
';}else{
echo' <div class="hero bg-gray-100 py-16 h-screen">
      <!-- container -->
      <div class="container px-4 sm:px-8 lg:px-16 xl:px-20 mx-auto">
          <!-- hero wrapper -->
          <div class="hero-wrapper grid grid-cols-1 md:grid-cols-12 gap-8 items-center">

              <!-- hero text -->
              <div class="hero-text col-span-6">
                  <h1 class=" font-bold text-4xl md:text-5xl max-w-xl text-gray-900 leading-tight">Operation Failed</h1>
                  <hr class=" w-12 h-1 bg-indigo-500 rounded-full mt-8">
                  <p class="text-gray-800 text-base leading-relaxed mt-8 font-semibold">Access Denied</p>

              </div>

              <!-- hero image -->
              <div class="hero-image col-span-6">
                  <img src="./failure.svg" alt="">
              </div>
          </div>
      </div>
  </div>';
    }
require "./footer.php";
?>