<div class="tabset">
  <!-- Tab 1 -->
  <input type="radio" name="tabset" id="tab1" aria-controls="utama" checked>
  <label for="tab1">Utama</label>
  <!-- Tab 2 -->
  <input type="radio" name="tabset" id="tab2" aria-controls="recti">
  <label for="tab2">Recti</label>
  <!-- Tab 3 -->
  <input type="radio" name="tabset" id="tab3" aria-controls="ups">
  <label for="tab3">UPS</label>

  <div class="tab-panels">
    <section id="utama" class="tab-panel">
      <button type="button" class="btn btn-success btnDownload mb-2 btn-lg" data-bs-toggle="modal"
        data-bs-target="#modalDownload">Download</button>
      <div class="row mb-3">
        <div class="col-lg-3">
          <div id="pueCard" class="card">
            <div class="card-header text-center">
              <h3 class="card-title fw-bold">PUE</h3>
            </div>
            <div class="card-body text-center">
              <h1 class="display-1 fw-bold my-4"><span id="pue">0</span></h1>
            </div>
            <div class="card-footer text-center">
              <small>Last updated <span id="pueDate">0</span></small>
            </div>
          </div>
        </div>
        <div class="col-lg-9">
          <canvas id="pueChart"></canvas>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-lg-3"></div>
        <div class="col-lg-9">
          <div id="pueChartButton" class="btn-group" role="group" aria-label="Chart Control">
            <button type="button" class="btn btn-outline-danger active" id="pueHour">1 Jam</button>
            <button type="button" class="btn btn-outline-danger" id="pueDay">1 Hari</button>
            <button type="button" class="btn btn-outline-danger" id="pueWeek">1 Minggu</button>
          </div>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-lg-3 mb-3">
          <div id="lvmdpCard" class="card">
            <div class="card-header text-center">
              <h3 class="card-title fw-bold">LVMDP</h3>
            </div>
            <div class="card-body">
              <table style="width: 100%;">
                <colgroup>
                  <col style="width: 45%;">
                  <col style="width: 10%;">
                  <col style="width: 45%;">
                </colgroup>
                <tbody>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Load</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="lvmdpLoad">0</span> kVA
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Voltage</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="lvmdpVoltage">0</span> V
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Current</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="lvmdpCurrent">0</span> A
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Frequency</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="lvmdpFreq">0</span> Hz
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer text-center">
              <small>Last updated <span id="lvmdpDate">0</span></small>
            </div>
          </div>
        </div>
        <div class="col-lg-9">
          <canvas id="lvmdpChart"></canvas>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-lg-3"></div>
        <div class="col-lg-9">
          <div id="lvmdpChartButton" class="btn-group" role="group" aria-label="Chart Control">
            <button type="button" class="btn btn-outline-danger active" id="lvmdpHour">1 Jam</button>
            <button type="button" class="btn btn-outline-danger" id="lvmdpDay">1 Hari</button>
            <button type="button" class="btn btn-outline-danger" id="lvmdpWeek">1 Minggu</button>
          </div>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-3 mb-3">
          <div id="itCard" class="card">
            <div class="card-header text-center">
              <h3 class="card-title fw-bold">IT (Recti + UPS)</h3>
            </div>
            <div class="card-body">
              <table style="width: 100%;">
                <colgroup>
                  <col style="width: 45%;">
                  <col style="width: 10%;">
                  <col style="width: 45%;">
                </colgroup>
                <tbody>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Load</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="itLoad">0</span> kVA
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Voltage</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="itVoltage">0</span> V
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Current</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="itCurrent">0</span> A
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Frequency</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="itFreq">0</span> Hz
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer text-center">
              <small>Last updated <span id="itDate">0</span></small>
            </div>
          </div>
        </div>
        <div class="col-lg-9">
          <canvas id="itChart"></canvas>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-9">
          <div id="itChartButton" class="btn-group" role="group" aria-label="Chart Control">
            <button type="button" class="btn btn-outline-danger active" id="itHour">1 Jam</button>
            <button type="button" class="btn btn-outline-danger" id="itDay">1 Hari</button>
            <button type="button" class="btn btn-outline-danger" id="itWeek">1 Minggu</button>
          </div>
        </div>
      </div>
    </section>
    <section id="recti" class="tab-panel">
      <div class="row mb-2">
        <div class="col-lg-3 mb-3">
          <div id="rectiCard" class="card">
            <div class="card-header">
              <h3 class="card-title fw-bold">Rectifier</h3>
            </div>
            <div class="card-body">
              <table style="width: 100%;">
                <colgroup>
                  <col style="width: 45%;">
                  <col style="width: 10%;">
                  <col style="width: 45%;">
                </colgroup>
                <tbody>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Load</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="rectiLoad">0</span> kVA
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Voltage</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="rectiVoltage">0</span> V
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Current</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="rectiCurrent">0</span> A
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Frequency</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="rectiFreq">0</span> Hz
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer">
              <small>Last updated <span id="rectiDate">0</span></small>
            </div>
          </div>
        </div>
        <div class="col-lg-9">
          <canvas id="rectiChart"></canvas>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 mb-3">
          <div id="p205Card" class="card">
            <div class="card-header">
              <h3 class="card-title fw-bold">Panel 2.05</h3>
            </div>
            <div class="card-body">
              <table style="width: 100%;">
                <colgroup>
                  <col style="width: 45%;">
                  <col style="width: 10%;">
                  <col style="width: 45%;">
                </colgroup>
                <tbody>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Load</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="p205Load">0</span> kVA
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Voltage</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="p205Voltage">0</span> V
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Current</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="p205Current">0</span> A
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Frequency</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="p205Freq">0</span> Hz
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer">
              <small>Last updated <span id="p205Date">0</span></small>
            </div>
          </div>
        </div>
        <div class="col-lg-9">
          <canvas id="panelRectiChart"></canvas>
        </div>
        <div class="col-lg-3 mb-3">
          <div id="p236Card" class="card">
            <div class="card-header">
              <h3 class="card-title fw-bold">Panel 2.36</h3>
            </div>
            <div class="card-body">
              <table style="width: 100%;">
                <colgroup>
                  <col style="width: 45%;">
                  <col style="width: 10%;">
                  <col style="width: 45%;">
                </colgroup>
                <tbody>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Load</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="p236Load">0</span> kVA
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Voltage</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="p236Voltage">0</span> V
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Current</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="p236Current">0</span> A
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Frequency</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="p236Freq">0</span> Hz
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer">
              <small>Last updated <span id="p236Date">0</span></small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-3">
          <div id="p305Card" class="card">
            <div class="card-header">
              <h3 class="card-title fw-bold">Panel 3.05</h3>
            </div>
            <div class="card-body">
              <table style="width: 100%;">
                <colgroup>
                  <col style="width: 45%;">
                  <col style="width: 10%;">
                  <col style="width: 45%;">
                </colgroup>
                <tbody>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Load</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="p305Load">0</span> kVA
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Voltage</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="p305Voltage">0</span> V
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Current</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="p305Current">0</span> A
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Frequency</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="p305Freq">0</span> Hz
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer">
              <small>Last updated <span id="p305Date">0</span></small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-3">
          <div id="p310Card" class="card">
            <div class="card-header">
              <h3 class="card-title fw-bold">Panel 3.10</h3>
            </div>
            <div class="card-body">
              <table style="width: 100%;">
                <colgroup>
                  <col style="width: 45%;">
                  <col style="width: 10%;">
                  <col style="width: 45%;">
                </colgroup>
                <tbody>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Load</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="p310Load">0</span> kVA
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Voltage</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="p310Voltage">0</span> V
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Current</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="p310Current">0</span> A
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Frequency</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="p301Freq">0</span> Hz
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer">
              <small>Last updated <span id="p310Date">0</span></small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-3">
          <div id="p429Card" class="card">
            <div class="card-header">
              <h3 class="card-title fw-bold">Panel 4.29</h3>
            </div>
            <div class="card-body">
              <table style="width: 100%;">
                <colgroup>
                  <col style="width: 45%;">
                  <col style="width: 10%;">
                  <col style="width: 45%;">
                </colgroup>
                <tbody>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Load</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="p429Load">0</span> kVA
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Voltage</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="p429Voltage">0</span> V
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Current</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="p429Current">0</span> A
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Frequency</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="p429Freq">0</span> Hz
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer">
              <small>Last updated <span id="p429Date">0</span></small>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="ups" class="tab-panel">
      <div class="row mb-2">
        <div class="col-lg-3 mb-3">
          <div id="upsCard" class="card">
            <div class="card-header">
              <h3 class="card-title fw-bold">UPS</h3>
            </div>
            <div class="card-body">
              <table style="width: 100%;">
                <colgroup>
                  <col style="width: 45%;">
                  <col style="width: 10%;">
                  <col style="width: 45%;">
                </colgroup>
                <tbody>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Load</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="upsLoad">0</span> kVA
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Voltage</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="upsVoltage">0</span> V
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Current</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="upsCurrent">0</span> A
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Frequency</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="upsFreq">0</span> Hz
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer">
              <small>Last updated <span id="upsDate">0</span></small>
            </div>
          </div>
        </div>
        <div class="col-lg-9">
          <canvas id="upsChart"></canvas>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 mb-3">
          <div id="ups202Card" class="card">
            <div class="card-header">
              <h3 class="card-title fw-bold">UPS 2.02</h3>
            </div>
            <div class="card-body">
              <table style="width: 100%;">
                <colgroup>
                  <col style="width: 45%;">
                  <col style="width: 10%;">
                  <col style="width: 45%;">
                </colgroup>
                <tbody>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Load</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="ups202Load">0</span> kVA
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Voltage</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="ups202Voltage">0</span> V
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Current</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="ups202Current">0</span> A
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Frequency</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="ups202Freq">0</span> Hz
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer">
              <small>Last updated <span id="ups202Date">0</span></small>
            </div>
          </div>
        </div>
        <div class="col-lg-9">
          <canvas id="panelUpsChart"></canvas>
        </div>
        <div class="col-lg-3 mb-3">
          <div id="ups203Card" class="card">
            <div class="card-header">
              <h3 class="card-title fw-bold">UPS 2.03</h3>
            </div>
            <div class="card-body">
              <table style="width: 100%;">
                <colgroup>
                  <col style="width: 45%;">
                  <col style="width: 10%;">
                  <col style="width: 45%;">
                </colgroup>
                <tbody>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Load</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="ups203Load">0</span> kVA
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Voltage</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="ups203Voltage">0</span> V
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Current</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="ups203Current">0</span> A
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Frequency</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="ups203Freq">0</span> Hz
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer">
              <small>Last updated <span id="ups203Date">0</span></small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-3">
          <div id="ups301Card" class="card">
            <div class="card-header">
              <h3 class="card-title fw-bold">UPS 3.01</h3>
            </div>
            <div class="card-body">
              <table style="width: 100%;">
                <colgroup>
                  <col style="width: 45%;">
                  <col style="width: 10%;">
                  <col style="width: 45%;">
                </colgroup>
                <tbody>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Load</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="ups301Load">0</span> kVA
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Voltage</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="ups301Voltage">0</span> V
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Current</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="ups301Current">0</span> A
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Frequency</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="ups301Freq">0</span> Hz
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer">
              <small>Last updated <span id="ups301Date">0</span></small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-3">
          <div id="ups302Card" class="card">
            <div class="card-header">
              <h3 class="card-title fw-bold">UPS 3.02</h3>
            </div>
            <div class="card-body">
              <table style="width: 100%;">
                <colgroup>
                  <col style="width: 45%;">
                  <col style="width: 10%;">
                  <col style="width: 45%;">
                </colgroup>
                <tbody>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Load</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="ups302Load">0</span> kVA
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Voltage</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="ups302Voltage">0</span> V
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Current</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="ups302Current">0</span> A
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Frequency</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="fups302Freq">0</span> Hz
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer">
              <small>Last updated <span id="ups302Date">0</span></small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-3">
          <div id="ups501Card" class="card">
            <div class="card-header">
              <h3 class="card-title fw-bold">UPS 5A</h3>
            </div>
            <div class="card-body">
              <table style="width: 100%;">
                <colgroup>
                  <col style="width: 45%;">
                  <col style="width: 10%;">
                  <col style="width: 45%;">
                </colgroup>
                <tbody>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Load</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="ups501Load">0</span> kVA
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Voltage</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="ups501Voltage">0</span> V
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Current</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="ups501Current">0</span> A
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Frequency</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="ups501Freq">0</span> Hz
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer">
              <small>Last updated <span id="ups501Date">0</span></small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-3">
          <div id="ups502Card" class="card">
            <div class="card-header">
              <h3 class="card-title fw-bold">UPS 5B</h3>
            </div>
            <div class="card-body">
              <table style="width: 100%;">
                <colgroup>
                  <col style="width: 45%;">
                  <col style="width: 10%;">
                  <col style="width: 45%;">
                </colgroup>
                <tbody>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Load</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="ups502Load">0</span> kVA
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Voltage</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="ups502Voltage">0</span> V
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Current</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="ups502Current">0</span> A
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-bottom: 10px; font-size: large;">Frequency</td>
                    <td style="padding-bottom: 10px; font-size: large;">:</td>
                    <td style="padding-bottom: 10px; font-size: large;">
                      <span id="ups502Freq">0</span> Hz
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer">
              <small>Last updated <span id="ups502Date">0</span></small>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <div class="modal fade" action="#" id="modalDownload" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="deleteLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="downloadData" action="#" method="GET" class="needs-validation" novalidate>
          <div class="modal-header">
            <h5 class="modal-title">Download Data</h5>
          </div>
          <div class="modal-body">
            <div>
              <select class="form-select" id="dataSelect" name="table" required>
                <option value="" selected disabled>Pilih Jenis Tabel</option>
                <option value="1" data-action="data/electric/download1">PUE, IT, dan Facility</option>
                <option value="2" data-action="data/electric/download2">PUE, LVMDP, Recti, dan UPS</option>
              </select>
              <div class="invalid-feedback">
                  Pilih Jenis Tabel
                </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="validationCustom02" class="form-label">Enter Start Date:</label>
                <input type="date" id="validationCustom02" name="startDate" class="form-control" required>
                <div class="invalid-feedback">
                  masukkan tanggal awal
                </div>
              </div>
              <div class="col">
                <label for="validationCustom03" class="form-label">Enter End Date:</label>
                <input type="date" id="validationCustom03" name="endDate" class="form-control" required>
                <div class="invalid-feedback">
                  masukkan tanggal akhir
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <input class="btn btn-success" type="submit" value="Download">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Kembali</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>