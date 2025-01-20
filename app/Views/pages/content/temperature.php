<div class="tabset">
   <!-- Tab 1 -->
   <input type="radio" name="tabset" id="tab1" aria-controls="lantai1" checked>
   <label for="tab1">Lantai 1</label>
   <!-- Tab 2 -->
   <input type="radio" name="tabset" id="tab2" aria-controls="lantai2">
   <label for="tab2">Lantai 2</label>
   <!-- Tab 3 -->
   <input type="radio" name="tabset" id="tab3" aria-controls="lantai3">
   <label for="tab3">Lantai 3</label>
   <!-- Tab 4 -->
   <input type="radio" name="tabset" id="tab4" aria-controls="lantai4">
   <label for="tab4">Lantai 4</label>
   <!-- Tab 5 -->
   <input type="radio" name="tabset" id="tab5" aria-controls="lantai5">
   <label for="tab5">Lantai 5</label>

   <div class="tab-panels">
      <section id="lantai1" class="tab-panel">
         <div class="row">
            <div class="col-sm-3 mb-3">
               <div id="cardGenset" class="card">
                  <div class="card-header">
                     <div class="row">
                        <div class="col">
                           <h4 class="card-title fw-bold">Ruang Genset</h4>
                        </div>
                        <div id="disconnected" class="col d-grid justify-content-end invisible">
                           <i class='bx bxs-error-circle bx-lg' style='color:#ff0000' data-bs-toggle="tooltip" title="Disconnected"></i>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <h2 class="display-2 fw-bold"><span id="tempGenset">0</span>&deg;C</h2>
                     <p class="display-5"><span id="humGenset">0</span>%</p>
                  </div>
                  <div class="card-footer">
                     <div class="row">
                        <div class="col">
                           <small>Last updated <span id="dateGenset">0</span></small>
                        </div>
                        <div class="col d-grid justify-content-end">
                           <button class="btn btn-outline-dark" data-bs-toggle="modal" data-id="Genset"
                              data-bs-target="#detailModal">Detail</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-3 mb-3">
               <div id="cardTrafo" class="card">
                  <div class="card-header">
                     <div class="row">
                        <div class="col">
                           <h4 class="card-title fw-bold">Ruang Trafo</h4>
                        </div>
                        <div id="disconnected" class="col d-grid justify-content-end invisible">
                           <i class='bx bxs-error-circle bx-lg' style='color:#ff0000' data-bs-toggle="tooltip" title="Disconnected"></i>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <h2 class="display-2 fw-bold"><span id="tempTrafo">0</span>&deg;C</h2>
                     <p class="display-5"><span id="humTrafo">0</span>%</p>
                  </div>
                  <div class="card-footer">
                     <div class="row">
                        <div class="col">
                           <small>Last updated <span id="dateTrafo">0</span></small>
                        </div>
                        <div class="col d-grid justify-content-end">
                           <button class="btn btn-outline-dark" data-bs-toggle="modal" data-id="Trafo"
                              data-bs-target="#detailModal">Detail</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section id="lantai2" class="tab-panel">
         <div class="row">
            <div class="col-sm-3 mb-3">
               <div id="cardBatt2" class="card">
                  <div class="card-header">
                     <div class="row">
                        <div class="col">
                           <h4 class="card-title fw-bold">Ruang Battery</h4>
                        </div>
                        <div id="disconnected" class="col d-grid justify-content-end invisible">
                           <i class='bx bxs-error-circle bx-lg' style='color:#ff0000' data-bs-toggle="tooltip" title="Disconnected"></i>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <h2 class="display-2 fw-bold"><span id="tempBatt2">0</span>&deg;C</h2>
                     <p class="display-5"><span id="humBatt2">0</span>%</p>
                  </div>
                  <div class="card-footer">
                     <div class="row">
                        <div class="col">
                           <small>Last updated <span id="dateBatt2">0</span></small>
                        </div>
                        <div class="col d-grid justify-content-end">
                           <button class="btn btn-outline-dark" data-bs-toggle="modal" data-id="Battery.2"
                              data-bs-target="#detailModal">Detail</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-3 mb-3">
               <div id="cardRecti2" class="card">
                  <div class="card-header">
                     <div class="row">
                        <div class="col">
                           <h4 class="card-title fw-bold">Ruang Recti</h4>
                        </div>
                        <div id="disconnected" class="col d-grid justify-content-end invisible">
                           <i class='bx bxs-error-circle bx-lg' style='color:#ff0000' data-bs-toggle="tooltip" title="Disconnected"></i>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <h2 class="display-2 fw-bold"><span id="tempRecti2">0</span>&deg;C</h2>
                     <p class="display-5"><span id="humRecti2">0</span>%</p>
                  </div>
                  <div class="card-footer">
                     <div class="row">
                        <div class="col">
                           <small>Last updated <span id="dateRecti2">0</span></small>
                        </div>
                        <div class="col d-grid justify-content-end">
                           <button class="btn btn-outline-dark" data-bs-toggle="modal" data-id="Recti.2"
                              data-bs-target="#detailModal">Detail</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-3 mb-3">
               <div id="cardMsc" class="card">
                  <div class="card-header">
                     <div class="row">
                        <div class="col">
                           <h4 class="card-title fw-bold">Ruang MSC</h4>
                        </div>
                        <div id="disconnected" class="col d-grid justify-content-end invisible">
                           <i class='bx bxs-error-circle bx-lg' style='color:#ff0000' data-bs-toggle="tooltip" title="Disconnected"></i>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <h2 class="display-2 fw-bold"><span id="tempMsc">0</span>&deg;C</h2>
                     <p class="display-5"><span id="humMsc">0</span>%</p>
                  </div>
                  <div class="card-footer">
                     <div class="row">
                        <div class="col">
                           <small>Last updated <span id="dateMsc">0</span></small>
                        </div>
                        <div class="col d-grid justify-content-end">
                           <button class="btn btn-outline-dark" data-bs-toggle="modal" data-id="MSC.2"
                              data-bs-target="#detailModal">Detail</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-3 mb-3">
               <div id="cardCsps" class="card">
                  <div class="card-header">
                     <div class="row">
                        <div class="col">
                           <h4 class="card-title fw-bold">Ruang CSPS</h4>
                        </div>
                        <div id="disconnected" class="col d-grid justify-content-end invisible">
                           <i class='bx bxs-error-circle bx-lg' style='color:#ff0000' data-bs-toggle="tooltip" title="Disconnected"></i>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <h2 class="display-2 fw-bold"><span id="tempCsps">0</span>&deg;C</h2>
                     <p class="display-5"><span id="humCsps">0</span>%</p>
                  </div>
                  <div class="card-footer">
                     <div class="row">
                        <div class="col">
                           <small>Last updated <span id="dateCsps">0</span></small>
                        </div>
                        <div class="col d-grid justify-content-end">
                           <button class="btn btn-outline-dark" data-bs-toggle="modal" data-id="CSPS.2"
                              data-bs-target="#detailModal">Detail</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section id="lantai3" class="tab-panel">
         <div class="row">
            <div class="col-sm-3 mb-3">
               <div id="cardBatt3" class="card">
                  <div class="card-header">
                     <div class="row">
                        <div class="col">
                           <h4 class="card-title fw-bold">Ruang Battery</h4>
                        </div>
                        <div id="disconnected" class="col d-grid justify-content-end invisible">
                           <i class='bx bxs-error-circle bx-lg' style='color:#ff0000' data-bs-toggle="tooltip" title="Disconnected"></i>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <h2 class="display-2 fw-bold"><span id="tempBatt3">0</span>&deg;C</h2>
                     <p class="display-5"><span id="humBatt3">0</span>%</p>
                  </div>
                  <div class="card-footer">
                     <div class="row">
                        <div class="col">
                           <small>Last updated <span id="dateBatt3">0</span></small>
                        </div>
                        <div class="col d-grid justify-content-end">
                           <button class="btn btn-outline-dark" data-bs-toggle="modal" data-id="Battery.3"
                              data-bs-target="#detailModal">Detail</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-3 mb-3">
               <div id="cardRecti3" class="card">
                  <div class="card-header">
                     <div class="row">
                        <div class="col">
                           <h4 class="card-title fw-bold">Ruang Recti</h4>
                        </div>
                        <div id="disconnected" class="col d-grid justify-content-end invisible">
                           <i class='bx bxs-error-circle bx-lg' style='color:#ff0000' data-bs-toggle="tooltip" title="Disconnected"></i>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <h2 class="display-2 fw-bold"><span id="tempRecti3">0</span>&deg;C</h2>
                     <p class="display-5"><span id="humRecti3">0</span>%</p>
                  </div>
                  <div class="card-footer">
                     <div class="row">
                        <div class="col">
                           <small>Last updated <span id="dateRecti3">0</span></small>
                        </div>
                        <div class="col d-grid justify-content-end">
                           <button class="btn btn-outline-dark" data-bs-toggle="modal" data-id="Recti.3"
                              data-bs-target="#detailModal">Detail</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-3 mb-3">
               <div id="cardMkios" class="card">
                  <div class="card-header">
                     <div class="row">
                        <div class="col">
                           <h4 class="card-title fw-bold">Ruang MKIOS</h4>
                        </div>
                        <div id="disconnected" class="col d-grid justify-content-end invisible">
                           <i class='bx bxs-error-circle bx-lg' style='color:#ff0000' data-bs-toggle="tooltip" title="Disconnected"></i>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <h2 class="display-2 fw-bold"><span id="tempMkios">0</span>&deg;C</h2>
                     <p class="display-5"><span id="humMkios">0</span>%</p>
                  </div>
                  <div class="card-footer">
                     <div class="row">
                        <div class="col">
                           <small>Last updated <span id="dateMkios">0</span></small>
                        </div>
                        <div class="col d-grid justify-content-end">
                           <button class="btn btn-outline-dark" data-bs-toggle="modal" data-id="MKIOS.3"
                              data-bs-target="#detailModal">Detail</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-3 mb-3">
               <div id="cardCore" class="card">
                  <div class="card-header">
                     <div class="row">
                        <div class="col">
                           <h4 class="card-title fw-bold">Ruang Core</h4>
                        </div>
                        <div id="disconnected" class="col d-grid justify-content-end invisible">
                           <i class='bx bxs-error-circle bx-lg' style='color:#ff0000' data-bs-toggle="tooltip" title="Disconnected"></i>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <h2 class="display-2 fw-bold"><span id="tempCore">0</span>&deg;C</h2>
                     <p class="display-5"><span id="humCore">0</span>%</p>
                  </div>
                  <div class="card-footer">
                     <div class="row">
                        <div class="col">
                           <small>Last updated <span id="dateCore">0</span></small>
                        </div>
                        <div class="col d-grid justify-content-end">
                           <button class="btn btn-outline-dark" data-bs-toggle="modal" data-id="Core.3"
                              data-bs-target="#detailModal">Detail</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-3 mb-3">
               <div id="cardInvas" class="card">
                  <div class="card-header">
                     <div class="row">
                        <div class="col">
                           <h4 class="card-title fw-bold">Ruang INVAS</h4>
                        </div>
                        <div id="disconnected" class="col d-grid justify-content-end invisible">
                           <i class='bx bxs-error-circle bx-lg' style='color:#ff0000' data-bs-toggle="tooltip" title="Disconnected"></i>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <h2 class="display-2 fw-bold"><span id="tempInvas">0</span>&deg;C</h2>
                     <p class="display-5"><span id="humInvas">0</span>%</p>
                  </div>
                  <div class="card-footer">
                     <div class="row">
                        <div class="col">
                           <small>Last updated <span id="dateInvas">0</span></small>
                        </div>
                        <div class="col d-grid justify-content-end">
                           <button class="btn btn-outline-dark" data-bs-toggle="modal" data-id="INVAS.3"
                              data-bs-target="#detailModal">Detail</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-3 mb-3">
               <div id="cardOcs" class="card">
                  <div class="card-header">
                     <div class="row">
                        <div class="col">
                           <h4 class="card-title fw-bold">Ruang OCS</h4>
                        </div>
                        <div id="disconnected" class="col d-grid justify-content-end invisible">
                           <i class='bx bxs-error-circle bx-lg' style='color:#ff0000' data-bs-toggle="tooltip" title="Disconnected"></i>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <h2 class="display-2 fw-bold"><span id="tempOcs">0</span>&deg;C</h2>
                     <p class="display-5"><span id="humOcs">0</span>%</p>
                  </div>
                  <div class="card-footer">
                     <div class="row">
                        <div class="col">
                           <small>Last updated <span id="dateOcs">0</span></small>
                        </div>
                        <div class="col d-grid justify-content-end">
                           <button class="btn btn-outline-dark" data-bs-toggle="modal" data-id="OCS.3"
                              data-bs-target="#detailModal">Detail</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section id="lantai4" class="tab-panel">
         <div class="row">
            <div class="col-sm-3 mb-3">
               <div id="cardBatt4" class="card">
                  <div class="card-header">
                     <div class="row">
                        <div class="col">
                           <h4 class="card-title fw-bold">Ruang Battery</h4>
                        </div>
                        <div id="disconnected" class="col d-grid justify-content-end invisible">
                           <i class='bx bxs-error-circle bx-lg' style='color:#ff0000' data-bs-toggle="tooltip" title="Disconnected"></i>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <h2 class="display-2 fw-bold"><span id="tempBatt4">0</span>&deg;C</h2>
                     <p class="display-5"><span id="humBatt4">0</span>%</p>
                  </div>
                  <div class="card-footer">
                     <div class="row">
                        <div class="col">
                           <small>Last updated <span id="dateBatt4">0</span></small>
                        </div>
                        <div class="col d-grid justify-content-end">
                           <button class="btn btn-outline-dark" data-bs-toggle="modal" data-id="Battery.4"
                              data-bs-target="#detailModal">Detail</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-3 mb-3">
               <div id="cardRecti4" class="card">
                  <div class="card-header">
                     <div class="row">
                        <div class="col">
                           <h4 class="card-title fw-bold">Ruang Recti</h4>
                        </div>
                        <div id="disconnected" class="col d-grid justify-content-end invisible">
                           <i class='bx bxs-error-circle bx-lg' style='color:#ff0000' data-bs-toggle="tooltip" title="Disconnected"></i>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <h2 class="display-2 fw-bold"><span id="tempRecti4">0</span>&deg;C</h2>
                     <p class="display-5"><span id="humRecti4">0</span>%</p>
                  </div>
                  <div class="card-footer">
                     <div class="row">
                        <div class="col">
                           <small>Last updated <span id="dateRecti4">0</span></small>
                        </div>
                        <div class="col d-grid justify-content-end">
                           <button class="btn btn-outline-dark" data-bs-toggle="modal" data-id="Recti.4"
                              data-bs-target="#detailModal">Detail</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-3 mb-3">
               <div id="cardBss" class="card">
                  <div class="card-header">
                     <div class="row">
                        <div class="col">
                           <h4 class="card-title fw-bold">Ruang BSS</h4>
                        </div>
                        <div id="disconnected" class="col d-grid justify-content-end invisible">
                           <i class='bx bxs-error-circle bx-lg' style='color:#ff0000' data-bs-toggle="tooltip" title="Disconnected"></i>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <h2 class="display-2 fw-bold"><span id="tempBss">0</span>&deg;C</h2>
                     <p class="display-5"><span id="humBss">0</span>%</p>
                  </div>
                  <div class="card-footer">
                     <div class="row">
                        <div class="col">
                           <small>Last updated <span id="dateBss">0</span></small>
                        </div>
                        <div class="col d-grid justify-content-end">
                           <button class="btn btn-outline-dark" data-bs-toggle="modal" data-id="BSS.4"
                              data-bs-target="#detailModal">Detail</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-3 mb-3">
               <div id="cardInter" class="card">
                  <div class="card-header">
                     <div class="row">
                        <div class="col">
                           <h4 class="card-title fw-bold">Ruang Interkoneksi</h4>
                        </div>
                        <div id="disconnected" class="col d-grid justify-content-end invisible">
                           <i class='bx bxs-error-circle bx-lg' style='color:#ff0000' data-bs-toggle="tooltip" title="Disconnected"></i>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <h2 class="display-2 fw-bold"><span id="tempInter">0</span>&deg;C</h2>
                     <p class="display-5"><span id="humInter">0</span>%</p>
                  </div>
                  <div class="card-footer">
                     <div class="row">
                        <div class="col">
                           <small>Last updated <span id="dateInter">0</span></small>
                        </div>
                        <div class="col d-grid justify-content-end">
                           <button class="btn btn-outline-dark" data-bs-toggle="modal" data-id="Interkoneksi.4"
                              data-bs-target="#detailModal">Detail</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-3 mb-3">
               <div id="cardTrans" class="card">
                  <div class="card-header">
                     <div class="row">
                        <div class="col">
                           <h4 class="card-title fw-bold">Ruang Transmisi</h4>
                        </div>
                        <div id="disconnected" class="col d-grid justify-content-end invisible">
                           <i class='bx bxs-error-circle bx-lg' style='color:#ff0000' data-bs-toggle="tooltip" title="Disconnected"></i>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <h2 class="display-2 fw-bold"><span id="tempTrans">0</span>&deg;C</h2>
                     <p class="display-5"><span id="humTrans">0</span>%</p>
                  </div>
                  <div class="card-footer">
                     <div class="row">
                        <div class="col">
                           <small>Last updated <span id="dateTrans">0</span></small>
                        </div>
                        <div class="col d-grid justify-content-end">
                           <button class="btn btn-outline-dark" data-bs-toggle="modal" data-id="Transmisi.4"
                              data-bs-target="#detailModal">Detail</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section id="lantai5" class="tab-panel">
         <div class="row">
            <div class="col-sm-3 mb-3">
               <div id="cardUtilityB" class="card">
                  <div class="card-header">
                     <div class="row">
                        <div class="col">
                           <h4 class="card-title fw-bold">Ruang Utility B</h4>
                        </div>
                        <div id="disconnected" class="col d-grid justify-content-end invisible">
                           <i class='bx bxs-error-circle bx-lg' style='color:#ff0000' data-bs-toggle="tooltip" title="Disconnected"></i>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <h2 class="display-2 fw-bold"><span id="tempUtilityB">0</span>&deg;C</h2>
                     <p class="display-5"><span id="humUtilityB">0</span>%</p>
                  </div>
                  <div class="card-footer">
                     <div class="row">
                        <div class="col">
                           <small>Last updated <span id="dateUtilityB">0</span></small>
                        </div>
                        <div class="col d-grid justify-content-end">
                           <button class="btn btn-outline-dark" data-bs-toggle="modal" data-id="Utility_B.5"
                              data-bs-target="#detailModal">Detail</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-3 mb-3">
               <div id="cardUtilityA" class="card">
                  <div class="card-header">
                     <div class="row">
                        <div class="col">
                           <h4 class="card-title fw-bold">Ruang Utility A</h4>
                        </div>
                        <div id="disconnected" class="col d-grid justify-content-end invisible">
                           <i class='bx bxs-error-circle bx-lg' style='color:#ff0000' data-bs-toggle="tooltip" title="Disconnected"></i>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <h2 class="display-2 fw-bold"><span id="tempUtilityA">0</span>&deg;C</h2>
                     <p class="display-5"><span id="humUtilityA">0</span>%</p>
                  </div>
                  <div class="card-footer">
                     <div class="row">
                        <div class="col">
                           <small>Last updated <span id="dateUtilityA">0</span></small>
                        </div>
                        <div class="col d-grid justify-content-end">
                           <button class="btn btn-outline-dark" data-bs-toggle="modal" data-id="Utility_A.5"
                              data-bs-target="#detailModal">Detail</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-3 mb-3">
               <div id="cardDC" class="card">
                  <div class="card-header">
                     <div class="row">
                        <div class="col">
                           <h4 class="card-title fw-bold">Ruang Data Center</h4>
                        </div>
                        <div id="disconnected" class="col d-grid justify-content-end invisible">
                           <i class='bx bxs-error-circle bx-lg' style='color:#ff0000' data-bs-toggle="tooltip" title="Disconnected"></i>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <h2 class="display-2 fw-bold"><span id="tempDC">0</span>&deg;C</h2>
                     <p class="display-5"><span id="humDC">0</span>%</p>
                  </div>
                  <div class="card-footer">
                     <div class="row">
                        <div class="col">
                           <small>Last updated <span id="dateDC">0</span></small>
                        </div>
                        <div class="col d-grid justify-content-end">
                           <button class="btn btn-outline-dark" data-bs-toggle="modal" data-id="Data_Center.5"
                              data-bs-target="#detailModal">Detail</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-3 mb-3">
               <div id="cardPeng" class="card">
                  <div class="card-header">
                     <div class="row">
                        <div class="col">
                           <h4 class="card-title fw-bold">Ruang Pengembangan</h4>
                        </div>
                        <div id="disconnected" class="col d-grid justify-content-end invisible">
                           <i class='bx bxs-error-circle bx-lg' style='color:#ff0000' data-bs-toggle="tooltip" title="Disconnected"></i>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <h2 class="display-2 fw-bold"><span id="tempPeng">0</span>&deg;C</h2>
                     <p class="display-5"><span id="humPeng">0</span>%</p>
                  </div>
                  <div class="card-footer">
                     <div class="row">
                        <div class="col">
                           <small>Last updated <span id="datePeng">0</span></small>
                        </div>
                        <div class="col d-grid justify-content-end">
                           <button class="btn btn-outline-dark" data-bs-toggle="modal" data-id="Pengembangan.5"
                              data-bs-target="#detailModal">Detail</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-3 mb-3">
               <div id="cardCont" class="card">
                  <div class="card-header">
                     <div class="row">
                        <div class="col">
                           <h4 class="card-title fw-bold">Ruang Containment</h4>
                        </div>
                        <div id="disconnected" class="col d-grid justify-content-end invisible">
                           <i class='bx bxs-error-circle bx-lg' style='color:#ff0000' data-bs-toggle="tooltip" title="Disconnected"></i>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <h2 class="display-2 fw-bold"><span id="tempCont">0</span>&deg;C</h2>
                     <p class="display-5"><span id="humCont">0</span>%</p>
                  </div>
                  <div class="card-footer">
                     <div class="row">
                        <div class="col">
                           <small>Last updated <span id="dateCont">0</span></small>
                        </div>
                        <div class="col d-grid justify-content-end">
                           <button class="btn btn-outline-dark" data-bs-toggle="modal" data-id="Containment.5"
                              data-bs-target="#detailModal">Detail</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
</div>

<!-- Modal Detail-->
<div class="modal fade" id="detailModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="detailBatt4" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="detailName">Detail Sensor</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div id="detailBody" class="modal-body">
         </div>
         <div class="modal-footer">
            <small class="text-dark">Last updated <span id="detailDate"></span></small>
         </div>
      </div>
   </div>
</div>