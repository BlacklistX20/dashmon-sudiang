<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid mx-1 py-1">
   <div id="alert-container" class="alert-floating"></div>
   <div class="text-center">
      <h1 class="fw-bold">Dashboard Monitoring</h1>
      <h2>TTC Sudiang Makassar</h2>
   </div>
   <div>
      <div class="row mt-4 mb-3">
         <div class="col-sm-2 col-lg">
            <div class="card h-100">
               <div class="card-header text-center">
                  <h3 class="card-title fw-bold">PUE</span></h3>
               </div>
               <div class="card-body text-center">
                  <h2 class="display-1 fw-bold"><span id="pueRealTime">0</span></h2>
               </div>
            </div>
         </div>
         <div class="col-sm-2 col-lg">
            <div class="card h-100">
               <div class="card-header text-center">
                  <h3 class="card-title fw-bold">PUE Mingguan </h3>
               </div>
               <div class="card-body text-center">
                  <h2 class="display-1 fw-bold"><span id="pueWeekly">0</span></h2>
               </div>
            </div>
         </div>
         <div class="col-sm-2 col-lg">
            <div class="card h-100">
               <div class="card-header text-center">
                  <h3 class="card-title fw-bold">PUE Minimum</h3>
               </div>
               <div class="card-body text-center">
                  <h2 class="display-1 fw-bold"><span id="pueMin">0</span></h2>
               </div>
            </div>
         </div>
         <div class="col-sm-2 col-lg">
            <div class="card h-100">
               <div class="card-header text-center">
                  <h3 class="card-title fw-bold">PUE Average</h3>
               </div>
               <div class="card-body text-center">
                  <h2 class="display-1 fw-bold"><span id="pueAvg">0</span></h2>
               </div>
            </div>
         </div>
         <div class="col-sm-2 col-lg">
            <div class="card h-100">
               <div class="card-header text-center">
                  <h3 class="card-title fw-bold">PUE Maksimum</h3>
               </div>
               <div class="card-body text-center">
                  <h2 class="display-1 fw-bold"><span id="pueMax">0</span></h2>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-8 mb-4">
            <div class="row my-4">
               <div class="col">
                  <canvas id="pueWeeklyChart" style="height: 20vh;"></canvas>
               </div>
            </div>
            <div class="row my-4">
               <div class="col-lg-4">
                  <canvas id="pueMorningChart" style="height: 20vh;"></canvas>
               </div>
               <div class="col-lg-4">
                  <canvas id="pueNoonChart" style="height: 20vh;"></canvas>
               </div>
               <div class="col-lg-4">
                  <canvas id="pueNightChart" style="height: 20vh;"></canvas>
               </div>
            </div>
         </div>
         <div class="col-4">
            <canvas id="occupancyChart"></canvas>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-3">
            <canvas id="fuelDailyChart"></canvas>
         </div>
         <div class="col-lg-3">
            <canvas id="fuelMonthlyChart"></canvas>
         </div>
         <div class="col-lg-3">
            <canvas id="dcTempChart"></canvas>
         </div>
         <div class="col-lg-3">
            <div id="carouselTemp" class="carousel carousel-dark slide" data-bs-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                     <div id="cardFloor1" class="card text-center">
                        <div class="card-header">
                           <h4 class="card-title fw-bold">Lantai 1</h4>
                        </div>
                        <div class="card-body">
                           <h2 class="display-2 fw-bold"><span id="tempFloor1">0</span>&deg;C</h2>
                           <p class="display-5"><span id="humFloor1">0</span>%</p>
                        </div>
                        <div class="card-footer">
                           <small class="text-grey">Last updated <span id="dateFloor1">0</span></small>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                     <div id="cardFloor2" class="card text-center">
                        <div class="card-header">
                           <h4 class="card-title fw-bold">Lantai 2</h4>
                        </div>
                        <div class="card-body">
                           <h2 class="display-2 fw-bold"><span id="tempFloor2">0</span>&deg;C</h2>
                           <p class="display-5"><span id="humFloor2">0</span>%</p>
                        </div>
                        <div class="card-footer">
                           <small class="text-grey">Last updated <span id="dateFloor2">0</span></small>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                     <div id="cardFloor3" class="card text-center">
                        <div class="card-header">
                           <h4 class="card-title fw-bold">Lantai 3</h4>
                        </div>
                        <div class="card-body">
                           <h2 class="display-2 fw-bold"><span id="tempFloor3">0</span>&deg;C</h2>
                           <p class="display-5"><span id="humFloor3">0</span>%</p>
                        </div>
                        <div class="card-footer">
                           <small class="text-grey">Last updated <span id="dateFloor3">0</span></small>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                     <div id="cardFloor4" class="card text-center">
                        <div class="card-header">
                           <h4 class="card-title fw-bold">Lantai 4</h4>
                        </div>
                        <div class="card-body">
                           <h2 class="display-2 fw-bold"><span id="tempFloor4">0</span>&deg;C</h2>
                           <p class="display-5"><span id="humFloor4">0</span>%</p>
                        </div>
                        <div class="card-footer">
                           <small class="text-grey">Last updated <span id="dateFloor4">0</span></small>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                     <div id="cardFloor5" class="card text-center">
                        <div class="card-header">
                           <h4 class="card-title fw-bold">Lantai 5</h4>
                        </div>
                        <div class="card-body">
                           <h2 class="display-2 fw-bold"><span id="tempFloor5">0</span>&deg;C</h2>
                           <p class="display-5"><span id="humFloor5">0</span>%</p>
                        </div>
                        <div class="card-footer">
                           <small class="text-grey">Last updated <span id="dateFloor5">0</span></small>
                        </div>
                     </div>
                  </div>
               </div>
               <button class="carousel-control-prev" type="button" data-bs-target="#carouselTemp" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#carouselTemp" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
               </button>
            </div>
         </div>
      </div>
   </div>
</div>
</div>

</div>
<!--Container Main end-->

<!-- Custom JS -->
<script type="module" src="<?= base_url('js/home.js'); ?>"></script>
<?= $this->endSection(); ?>

