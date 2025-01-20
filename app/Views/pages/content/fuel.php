<?= $this->extend('layout/template'); ?>

<div class="tank-container">
   <div class="tankDaily text-center cardCustom">
      <h2 class="my-1 fw-bold">Tangki Harian</h2>
      <p>Last Update : <span id="dateDailyTank"></span></p>
      <div class="row">
         <div class="col-6">
            <h3 class="tank-label my-3"><span id="tank1Value">0</span> L / 1500 L</h3>
            <div class="tank-bar">
               <div id="tank1-level" class="tank-level d-flex justify-content-center align-items-center" style="background-color: #007bff;">
                  <h1 class="display-1 fw-bold" id="tank1-percent"></h1>
               </div>
            </div>
         </div>
         <div class="col-6">
            <h3 class="tank-label my-3"><span id="tank2Value">0</span> L / 1500 L</h3>
            <div class="tank-bar">
               <div id="tank2-level" class="tank-level d-flex justify-content-center align-items-center" style="background-color: #007bff;">
                  <h1 class="display-1 fw-bold" id="tank2-percent"></h1>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="tankmonthly text-center cardCustom">
      <h2 class="my-1 fw-bold">Tangki Bulanan</h2>
      <p>Last Update : <span id="dateMonthlyTank"></span></p>
      <div class="row">
         <div class="col-4">
            <h3 class="tank-label my-3"><span id="tank3Value">0</span> L / 10000 L</h3>
            <div class="tank-bar">
               <div id="tank3-level" class="tank-level d-flex justify-content-center align-items-center" style="background-color: #007bff;">
                  <h1 class="display-1 fw-bold" id="tank3-percent"></h1>
               </div>
            </div>
         </div>
         <div class="col-4">
            <h3 class="tank-label my-3"><span id="tank4Value">0</span> L / 10000 L</h3>
            <div class="tank-bar">
               <div id="tank4-level" class="tank-level d-flex justify-content-center align-items-center" style="background-color: #007bff;">
                  <h1 class="display-1 fw-bold" id="tank4-percent"></h1>
               </div>
            </div>
         </div>
         <div class="col-4">
            <h3 class="tank-label my-3"><span id="tank5Value">0</span> L / 10000 L</h3>
            <div class="tank-bar">
               <div id="tank5-level" class="tank-level d-flex justify-content-center align-items-center" style="background-color: #007bff;">
                  <h1 class="display-1 fw-bold" id="tank5-percent"></h1>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>