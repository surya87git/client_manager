
<div class="main-content">
<div class="page-content">

<div class="container-fluid">                
    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Cost Calculator</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Calculator</a></li>
                    <li class="breadcrumb-item active">Cost Calculator</li>
                </ol>
            </div>
          </div>
        </div>
    </div>
                <!-- end page title -->

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header align-items-center d-flex">
        <h4 class="card-title mb-0 flex-grow-1">Calculate</h4>
      </div>
      <div class="card-body">
        <form id="frmCalc">
          <div class="live-preview">
            <div class="row gy-4">
              <div class="col-xxl-3 col-md-6">
                  <label for="basiInput" class="form-label" placeholder="Enter Client Name">Client Name</label>
                  <input type="text" class="form-control" name="client_name" placeholder="Enter Client Name" required>
              </div>
              
              <div class="col-xxl-3 col-md-6">
                  <label for="basiInput" class="form-label" placeholder="Enter Client Mobile">Client Mobile</label>
                  <input type="number" class="form-control" name="client_mob" placeholder="Enter Client Mobile" required>
              </div>
              
              <div class="col-xxl-3 col-md-6">
               
                  <label for="labelInput" class="form-label">Location</label>
                  <input type="text" class="form-control" name="client_addr" placeholder="Enter Location" required>
                
              </div>
              <!--end col-->
              <div class="col-xxl-3 col-md-6">
                  <label for="labelInput" class="form-label">Plot Size In Length</label>
                  <input type="number" class="area form-control" id="length" name="length" placeholder="Enter Plot Length" required>
              </div>
              <!--end col-->
              <div class="col-xxl-3 col-md-6">
                  <label for="placeholderInput" class="form-label">Plot Size In Width</label>
                  <input type="number" class="area form-control" id="width" name="width" placeholder="Enter Plot Width" required>
              </div>
              <div class="col-xxl-3 col-md-6">
                <label for="placeholderInput" class="form-label">Plot Depth</label>
                <!--input type="text" class="area form-control" id="depth" name="depth" placeholder="Enter Plot Depth" required-->
                <select class="form-select" id="depth" name="depth" required>
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="1.5">1.5</option>
                  <option value="2">2</option>
                  <option value="2.5">2.5</option>
                  <option value="3">3</option>
                  <option value="3.5">3.5</option>
                  <option value="4">4</option>
                </select>
              </div>
              <div class="col-xxl-3 col-md-6">
                <label for="placeholderInput" class="form-label">Road Face</label>
                <div class="input-group">
                  <label class="input-group-text" for="inputGroupSelect01">Options</label>
                  <select class="form-select" id="road_facing" name="road_facing" required>
                    <option selected>Select</option>
                    <option value="1">One Side</option>
                    <option value="2">Two Side</option>
                    <option value="3">Three Side</option>
                  </select>
                </div>
              </div>

              <div class="col-xxl-3 col-md-6">
                  <label for="labelInput" class="form-label">Boundary wall Length RFT </label>
                  <input type="number" class="form-control" id="rft_rate" name="rft_rate" placeholder="Enter Running Ft." >
              </div>  

              <div class="col-xxl-6 col-md-6">
                  <label for="placeholderInput" class="form-label">Calculation Type</label>
                  <div class="input-group">
                    <label class="input-group-text" for="inputGroupSelect01">Options</label>
                    <select class="form-select" id="calc_type" name="calc_type">
                      <option value="civil">Civil Only</option>
                      <option value="finishing">With Finishing</option>
                    </select>
                  </div>
              </div>
            
              <div class="col-xxl-6 col-md-6">
                <label for="placeholderInput" class="form-label">Number of Floors</label>
                <div class="input-group">
                  <label class="input-group-text" for="inputGroupSelect01">Options</label>
                  <select class="form-select" id="floor_num" name="floor_num">
                    <option value="" selected>Select</option>
                    <option value="1">Ground</option>
                    <option value="2">1</option>
                    <option value="3">2</option>
                    <option value="4">3</option>
                    <option value="5">4</option>
                    <option value="6">5</option>
                    <option value="7">6</option>
                    <option value="8">7</option>
                    <option value="9">8</option>
                    <option value="10">9</option>
                    <option value="11">10</option>
                  </select>
                </div>
              </div>
             
              
              
              <div class="col-xxl-12 col-md-12">
                 <h4>Plot Area:&nbsp;<span id="html_total_area">0 sqft</span></h4>
                 <input type="hidden" id="total_area" name="total_area" value="">
              </div>
          
              <div class="col-xxl-12 col-md-12" id="rate_list" style="display:none">
                <label for="placeholderInput" class="form-label">Rate List</label>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="tbl_list">
                      
                    </table>
                  </div>
                </div>
               
                <div class="col-xxl-3 col-md-6">
                  <h5>Total Floor Price:&nbsp;₹&nbsp;<span id="total_floor_cost_html">0</span></h5>
                  <input type="hidden" name="total_floor_cost" id="total_floor_cost">
                </div>

              </div>
            </div>

          <br>
          <div class="col-xxl-3 col-md-6" id="div_disc" style="display:none;">
              <h4 style="color:#f06548">Discount Price:&nbsp;₹&nbsp;<span id="disc_price_html">0</span></h4>
              <input type="hidden" name="disc_price" id="disc_price">
          </div>

          <br/>
      
      <br/>

<!-------------Start Collapse--------------->
  <div id="div_next" style="display:none;">
          <div class="row">

            <div class="col-xxl-6 col-md-6">
              <label for="placeholderInput" class="form-label">Open Area</label>
              <div class="input-group">
                <input type="text" class="form-control" id="open_area" name="open_area" placeholder="Enter Open area" required>
              </div>
            </div>

            <div class="col-xxl-6 col-md-6">
              <label for="placeholderInput" class="form-label">Open Area Type</label>
              <div class="input-group">
                <select class="form-select" id="open_area_type" name="open_area_type" required>
                  <option selected>Choose...</option>
                  <option value="65">Lawn</option>
                  <option value="400">Full Tile</option>
                  <option value="325">Full Tile + Lawn</option>
                  <option value="0">No Work</option>
                </select>
              </div>
            </div>

          </div>
            
          <br>
            <!--end col-->

            <div class="row">

                <div class="col-xxl-3 col-md-3">
                    <label for="placeholderInput" class="form-label">Boundary Wall </label>
                    <div class="input-group">
                      <label class="input-group-text" for="inputGroupSelect01">Height</label>
                      <select class="form-select" id="bwall_height" name="bwall_height">
                        <option selected>Select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                    </div>
                </div>
                
                <div class="col-xxl-3 col-md-3">
                <label for="placeholderInput" class="form-label">Boundary Wall Rate </label>
                   
                      <input type="number" class="form-control" name="bwall_rate" id="bwall_rate" placeholder="Enter Boundary rate">
                    
                </div>


              <!--div class="col-xxl-6 col-md-6">
                <label for="placeholderInput" class="form-label">Elevation</label>
                <div class="input-group">
                  <select class="form-select" id="elev_rate" name="elev_rate">
                    <option selected>Choose...</option>
                    <option disabled>BASIC</option>
                    <option value="0.5">Basic 1 Side</option>
                    <option value="1">Basic 2 Side</option>
                    <option value="2">Basic 3 Side</option>
                    <option disabled>DESIGN (RCC)</option>
                    <option value="2">Design (RCC) 1 Side</option>
                    <option value="3.5">Design (RCC) 2 Side</option>
                    <option value="3">Design (RCC) 3 Side</option>
                    <option disabled>PREMIUM</option>
                    <option value="3.5">Premium 1 Side</option>
                    <option value="6">Premium 2 Side</option>
                    <option value="8">Premium 3 Side</option>
                  </select>
                </div>
              </div-->
                

            <div class="col-lg-6  col-md-3">
              <label class="control-label col-md-6 col-sm-6 col-xs-12">Elevation</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select id="elev_rate" name="elev_rate[]" class=" js-example-basic-multiple select2_single form-control" multiple="multiple" placeholder="Select" tabindex="-1">
                
                <option disabled>BASIC</option>
                <option value="0.5">Basic 1 Side</option>
                <option value="1">Basic 2 Side</option>
                <option value="2">Basic 3 Side</option>
                <option disabled>DESIGN (RCC)</option>
                <option value="2">Design (RCC) 1 Side</option>
                <option value="3.5">Design (RCC) 2 Side</option>
                <option value="3">Design (RCC) 3 Side</option>
                <option disabled>PREMIUM</option>
                <option value="3.5">Premium 1 Side</option>
                <option value="6">Premium 2 Side</option>
                <option value="8">Premium 3 Side</option>
                </select>
              </div>
            </div>



            </div>
        
        
            <br/><hr/>
          <h5>Additionals</h5>
          <br/>
          <div class="row">          
          <div class="col-xxl-3 col-md-6">               
              <label for="placeholderInput" class="form-label">Septic Tank</label>
              <small style="color:#f06548;">(Capacity 25 Years)</small>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-check form-radio-primary mb-3">
                      <input class="form-check-input stank_rb" type="radio" name="is_stank" value="yes" id="stank_rb1">
                      <label class="form-check-label" for="stank_rb1"> Required </label>
                    </div>
                  </div>
                  
                <div class="col-md-4">
                  <div class="form-check form-radio-primary mb-6">
                    <input class="form-check-input stank_rb" type="radio" name="is_stank" value="no" id="stank_rb2">
                    <label class="form-check-label" for="stank_rb2"> Not Required </label>
                  </div>
                </div>
              </div>

              <div class="form-check mb-3" id="stank_disc" style="display:none;">
                <input type="checkbox" id="chk1" name="stank_disc" value="yes" class="form-check-input">
                <label class="form-check-label" for="chk1">
                    Is it in discount?
                </label>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <input type="number" style="display:none;" class="form-control" id="stank_area" name="stank_area" placeholder="Enter Tank Area">
                </div>
                <div class="col-md-4">
                  <input type="number" class="form-control" style="display:none;"  id="stank_rate" name="stank_rate" placeholder="Enter Rate">
                </div>
              </div>
          </div>



          <div class="col-xxl-3 col-md-6">
            
            <label for="placeholderInput" class="form-label">Water Tank</label>
            <small style="color:#f06548;">(Capacity 3000 ltr.)</small>
                         
            <div class="row">
              <div class="col-md-4">
                  <div class="form-check form-radio-primary mb-3">
                    <input class="form-check-input wtank_rb" type="radio" name="is_wtank" value="yes" id="wtank_rb1">
                    <label class="form-check-label" for="wtank_rb1"> Required </label>
                  </div>
                </div>

              <div class="col-md-4">
                <div class="form-check form-radio-primary mb-3">
                  <input class="form-check-input wtank_rb" type="radio" name="is_wtank" value="no" id="wtank_rb2">
                  <label class="form-check-label" for="wtank_rb2"> Not Required </label>
                </div>
                </div>
              </div>

              <div class="form-check mb-3" id="wtank_disc" style="display:none;">
                  <input id="chk2" type="checkbox" name="wtank_disc" value="yes" class="form-check-input">
                  <label class="form-check-label" for="chk2">
                      Is it in discount?
                  </label>
              </div>

              <div class="row">
                <div class="col-md-4">
                    <input type="number" style="display:none;" class="form-control" id="wtank_area" name="wtank_area" placeholder="Enter Tank Area">
                </div>
                <div class="col-md-4">
                    <input type="number" style="display:none;" class="form-control" id="wtank_rate" name="wtank_rate" placeholder="Enter Rate" >
                </div>
              </div>

            </div>

          </div>

            <div class="row">
              <div class="col-xxl-3 col-md-6">
                <div>
                  <label for="placeholderInput" class="form-label">Modular Kitchen</label>                  
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-check form-radio-primary mb-3">
                          <input class="form-check-input mkit_rb" type="radio" name="is_mkitchen" value="yes" id="mkit_rb1">
                          <label class="form-check-label" for="mkit_rb1"> Required </label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-check form-radio-primary mb-3">
                          <input class="form-check-input mkit_rb" type="radio" name="is_mkitchen" value="no" id="mkit_rb2">
                          <label class="form-check-label" for="mkit_rb2"> Not Required </label>
                        </div>
                      </div>
                  </div>

                  <div class="form-check mb-3" id="mkitchen_cost" style="display:none;">
                    <input type="checkbox" id="chk3" name="mk_disc" value="yes" class="form-check-input">
                    <label class="form-check-label" for="chk3">
                       Is it in discount ?
                    </label>
                    <input type="number" class="form-control" name="mkitchen_cost" placeholder="Enter Modular Kitchen Cost">
                  </div>

                </div>
            </div>

              <div class="col-xxl-3 col-md-6">

                <label for="placeholderInput" class="form-label">False Ceiling</label>
                <br>
                <!--span class="text-primary">Included in Package</span-->

                <div class="row">
                  <div class="col-md-4">
                    <div class="form-check form-radio-primary mb-3">
                      <input class="form-check-input fceling_rb" type="radio" name="is_fceling" value="yes" id="fceling_rb1">
                      <label class="form-check-label" for="fceling_rb1"> Required </label>
                    </div>
                  </div>                  
                  <div class="col-md-4">
                    <div class="form-check form-radio-primary mb-3">
                      <input class="form-check-input fceling_rb" type="radio" name="is_fceling" value="no" id="fceling_rb2">
                      <label class="form-check-label" for="fceling_rb2"> Not Required </label>
                    </div>
                    </div>
                  </div>
                  <div class="form-check mb-3" id="fc_disc" style="display:none;">
                    <input type="checkbox" name="fc_disc" value="yes" id="chk4" class="form-check-input">
                    <label class="form-check-label" for="chk4">
                       Is it in discount?
                    </label>
                  </div>
                </div>
              </div>
            <br>
        </div>
    <hr/>

<!----------End Collapse-------------------------------------->
            <div class="card crm-widget" id="div_calc" style="display:none;">
              <div class="card-body p-0">
                <div class="row row-cols-md-3 row-cols-1">
                  <div class="col col-lg border-end">
                    <div class="py-4 px-3">
                      <h5 class="text-muted text-uppercase fs-13">Building Cost</h5>
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <i class="ri-building-fill display-6 text-muted"></i>
                          </div>
                          <div class="flex-grow-1 ms-3">
                            <h2 class="mb-0">₹ <span class="counter-value" id="building_cost_html">0</span></h2>
                            <input type="hidden" id="building_cost" name="building_cost">
                          </div>
                        </div>
                    </div>
                  </div>
                  <!-- end col -->

                  <div class="col col-lg border-end">
                    <div class="mt-3 mt-md-0 py-4 px-3">
                      <h5 class="text-muted text-uppercase fs-13">Boundary Wall Cost</h5>
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <i class="ri-bar-chart-line display-6 text-muted"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <h2 class="mb-0">₹ <span class="counter-value" data-target="0" id="bwall_cost_html"></span></h2>
                         <input type="hidden" id="bwall_cost" name="bwall_cost">
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- end col -->
                  <div class="col col-lg border-end">
                    <div class="mt-3 mt-md-0 py-4 px-3">
                      <h5 class="text-muted text-uppercase fs-13">Open Area Dev. Cost</h5>
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <i class="ri-building-3-fill display-6 text-muted"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <h2 class="mb-0">₹ <span class="counter-value" data-target="0" id="open_area_cost_html">0</span></h2>
                          <input type="hidden" id="open_area_cost" name="open_area_cost">
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <!-- end col -->
                  <div class="col col-lg border-end">
                    <div class="mt-3 mt-lg-0 py-4 px-3">
                      <h5 class="text-muted text-uppercase fs-13">Elevation Cost</h5>
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <i class="ri-focus-3-fill display-6 text-muted"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <h2 class="mb-0">₹ <span class="counter-value" data-target="0" id="elev_cost_html">0</span></h2>
                          <input type="hidden" id="elev_cost" name="elev_cost">
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col col-lg border-end">
                    <div class="mt-3 mt-lg-0 py-4 px-3">
                      <h5 class="text-muted text-uppercase fs-13">Extra Plinth Work Cost</h5>
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <i class="ri-line-height display-6 text-muted"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <h2 class="mb-0">₹ <span class="counter-value" data-target="0" id="plinth_cost_html">0</span></h2>
                          <input type="hidden" id="plinth_cost" name="plinth_cost">
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- end col -->
                  <div class="col col-lg">
                    <div class="mt-3 mt-lg-0 py-4 px-3">
                      <h5 class="text-muted text-uppercase fs-13"> Total Project Cost: </h5>
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <i class="ri-bank-line display-6 text-muted"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <h2 class="mb-0">₹ <span class="counter-value" data-target="0" id="total_cost_html">0</span>
                            <input type="hidden" id="total_cost" name="total_cost">
                          </h2>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--end col-->

                  <div>
                    <h5 for="">Additoinal Cost: ₹ <span id="add_cost">0</span></h5>
                    <ul id="list" class="text-primary" style="display:none">
                      <li>Spectic Tank: ₹ <span id="stank_cost_html">0</span></li>
                      <li>Water Tank: ₹ <span id="wtank_cost_html">0</span></li>
                      <li>Modular Kitchen: ₹ <span id="mkitchen_cost_html">0</span></li>
                      <li>False Ceiling: ₹ <span id="sum_fceling_cost_html">0</span></li>
                    </ul>
                  </div>

                  <h5 for="">Discount Cost: ₹ <span id="disc_cost">0</span></h5>
                  <h5 for="">Topup Cost: ₹ <span id="topup_cost">0</span></h5>
                  <input type="hidden" id="hdn_disc_cost" name="hdn_disc_cost" value="0">
                  <input type="hidden" id="hdn_add_cost" name="hdn_add_cost" value="0">
                  <input type="hidden" id="hdn_topup_cost" name="hdn_topup_cost" value="0">

                </div>
                <!--end row-->
              </div>
              <!-- end card body-->
            </div>

            <div class="flex-grow-1 ms-3">                
                <input type="checkbox"  id="chkpterm" name="chkpterm" value="yes">
                <label for="chkpterm">Payment terms</label>
            </div>

              <input type="hidden" id="type" name="type" value="save_data">
              <a type="button" class="btn  btn-primary" id="btn_topup" data-bs-toggle="modal" data-bs-target="#myModal">Add Topup</a>
              <button type="submit" class="btn btn-primary" id="btn_calc" value="Calculate">Calculate</button>
              <a href="javascript:void(0);" id="download" class="btn btn-primary" value="Save">Download</a>

            <!--div id="counter"></div-->

            <style>
              .lblres{color:#f06548; font-weight:bold; margin-left:8%; display:inline-block;}
            </style>

                <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="myModalLabel">Top Up Plans</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              <div class="col-lg-12 col-md-12">
                                  <div>
                                      <div class="form-check mb-12">
                                        
                                        
                                      <input type="hidden" class="hdn_topup" id="hdn_topup_1" name="hdn_topup_1">
                                        <div class="input-step step-primary">
                                          <button type="button" class="minus">–</button>
                                          <input type="number" class="product-quantity" id="e_str" name="e_str" value="1" min="1" max="5" readonly>
                                          <button type="button" class="plus">+</button>
                                        </div>
                                      </div>
                                      
                                      <input class="form-check-input chk_topup" type="checkbox" name="floor_str" value="5" id="1">
                                      <label>Extra Floor Stregth<p class="lblres" id="txt_topup_1"></p></label>
                                      <div class="form-check mb-12">
                                          <input class="form-check-input chk_topup" name="tata_steel" value="10" type="checkbox" id="2" >
                                          <label class="form-check-label" for="2">
                                            Tata Steel<p class="lblres" id="txt_topup_2"></p>
                                          </label>
                                          <input type="hidden" class="hdn_topup" id="hdn_topup_2" name="hdn_topup_2">
                                      </div>
                                      <div class="form-check mb-12">
                                          <input class="form-check-input chk_topup" name="jindal_steel" value="5" type="checkbox" id="3" >
                                          <label class="form-check-label" for="3">
                                            Jindal Steel <p class="lblres" id="txt_topup_3"></p>
                                          </label>
                                          <input type="hidden" class="hdn_topup" id="hdn_topup_3" name="hdn_topup_3">
                                      </div>
                                      <div class="form-check">
                                          <input class="form-check-input chk_topup" name="jindal_bricks" value="5" type="checkbox" id="4">
                                          <label class="form-check-label" for="4">
                                              Jindal Bricks<p class="lblres" id="txt_topup_4"></p>
                                          </label>
                                          <input type="hidden" class="hdn_topup" id="hdn_topup_4" name="hdn_topup_4">
                                      </div>

                                      <div class="form-check">
                                          <input class="form-check-input chk_topup" name="exp_brick" value="3.75" type="checkbox" id="10" >
                                          <label class="form-check-label" for="10">
                                            Exposed Bricks elevation<p class="lblres" id="txt_topup_10"></p>
                                          </label>
                                          <input type="hidden" class="hdn_topup" id="hdn_topup_10" name="hdn_topup_10">
                                      </div>

                                      <div class="form-check">
                                          <input class="form-check-input chk_topup" name="marble" value="8.75" type="checkbox" id="5">
                                          <label class="form-check-label" for="5">
                                            Marble<p class="lblres" id="txt_topup_5"></p>
                                          </label>
                                          <input type="hidden" class="hdn_topup" id="hdn_topup_5" name="hdn_topup_5">
                                      </div>
                                      <div class="form-check">
                                          <input class="form-check-input chk_topup" name="wooden_look" value="3.25" type="checkbox" id="6" >
                                          <label class="form-check-label" for="6">
                                              Wooden Look UPVC Window (Premium)<p class="lblres" id="txt_topup_6"></p>
                                          </label>
                                          <input type="hidden" class="hdn_topup" id="hdn_topup_6" name="hdn_topup_6">
                                      </div>

                                        <label for="">Window With Granite</label>
                                        <div class="form-check" >
                                          <select class="form-control photo_frame" name="photo_frame" id="photo_frame">
                                            <option value="0">Select</option>
                                            <option value="4.75">With Photo Frame</option>
                                            <option value="3">Without Photo Frame</option>
                                          </select>
                                          <p class="lblres" id="txt_topup_7"></p>
                                          <input type="hidden" class="hdn_topup" id="hdn_topup_7" name="hdn_topup_7">
                                        </div>

                                      <label for="">Additional Toilet</label>

                                      <div class="input-step step-primary">
                                        <button type="button" class="minus">–</button>
                                        <input type="number" class="product-quantity" id="toilet_qty" name="toilet_qty" value="1" min="1" max="8" readonly>
                                        <button type="button" class="plus">+</button>
                                      </div>

                                      <div class="form-check">
                                        <select class="form-control" name="add_toilet" id="add_toilet">
                                          <option value="">Select</option>
                                          <option value="20000">Basic</option>
                                          <option value="28000">Premium</option>
                                          <option value="36000">Luxury</option>
                                        </select>
                                          <p class="lblres" id="txt_topup_8"></p>
                                        <input type="hidden" class="hdn_topup" id="hdn_topup_8" name="hdn_topup_8">
                                      </div>
                      

                                      <div class="form-check">
                                          <input class="form-check-input chk_topup" name="comp_time" value="10" type="checkbox" id="9" >
                                          <label class="form-check-label" for="9">
                                            Early Work Completion Time <p class="lblres" id="txt_topup_9"></p>
                                          </label>
                                          <input type="hidden" class="hdn_topup" id="hdn_topup_9" name="hdn_topup_9">
                                      </div>

                                  </div>
                              </div>
                            </div>
                            <hr/>
                          <div class="modal-footer">
                              <!--button type="button" class="btn btn-info" id="btn_done" data-bs-dismiss="modal">Done</button-->
                              <button type="submit" class="btn btn-primary" id="btn_calc" data-bs-dismiss="modal" value="Save">Save</button>
                              <input type="hidden" id="last_id" name="last_id" value="">
                            </div>
                      </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
              </div>

        </form>  
<!---------------------END FORM--------------------------------------------->

            <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body text-center p-5">
                    <img src="images/like.gif" colors="primary:#121331,secondary:#08a88a" style="width:120px;height:120px">
                    <div class="mt-4">
                      <h4 class="mb-3 text-primary">Your Plan Is Saved.</h4>
                      <div class="hstack gap-2 justify-content-center">
                        <button type="button" class="btn btn-danger " data-bs-toggle="modal" data-bs-target=".bs-example-modal-sm">Add more Plans</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
          </div>
          <!--end row-->
      </div>
      
    </div>
  </div>
</div>
<!--end col-->
</div>
<!--end row-->

<!--end row-->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="mySmallModalLabel">Small modal</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h6 class="fs-15">Edit your Plan as per your:</h6>
          <br>
          <div class="live-preview">
            <div class="d-flex flex-wrap gap-2">
              <a href="areaeditpage.html">
                <button type="button" class="btn rounded-pill btn-primary waves-effect waves-light">Area</button>
              </a>
              <a href="rateeditpage.html">
                <button type="button" class="btn rounded-pill btn-secondary waves-effect">Rates</button>
              </a>
              <a href="editplan.html">
                <button type="button" class="btn rounded-pill btn-success waves-effect waves-light">Both</button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  </div> <!-- container-fluid -->
</div><!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        Design & Develop By <a href="https://ukcdesigner.in/" target="_blank">UKConcept Designer</a>
                    </div>
                    <div class="col-sm-6">
                      <div class="text-sm-end d-none d-sm-block">
                        Copyright <?php echo date("Y");?> © All Right Reserved. 
                      </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->



<!--start back-to-top-->
<button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
    <i class="ri-arrow-up-line"></i>
</button>
<!--end back-to-top-->

<!-- Theme Settings -->

<!-- JAVASCRIPT -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<script src="assets/libs/feather-icons/feather.min.js"></script>
<script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
<!--script src="assets/js/plugins.js"></script-->

<!-- prismjs plugin -->
<script src="assets/libs/prismjs/prism.js"></script>
<script src="assets/js/pages/form-input-spin.init.js"></script>
<script src="assets/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="assets/js/app.js"></script>

<script type="text/javascript"> 
function num_format(x)
{
  //var x=12345678;
    x=x.toString();
    var lastThree = x.substring(x.length-3);
    var otherNumbers = x.substring(0,x.length-3);
    if(otherNumbers != '')
        lastThree = ',' + lastThree;
    var res = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
    return res;
    //alert(res);
}
$(document).ready(function(){

   $(document).on("click", ".btn_disc", function(){
        
      $("#div_next").slideDown();
    
   });

  $(".js-example-basic-multiple").select2({
    placeholder: "---Select---",
    allowClear: true
  });

/**-----------Save Data------------------ */

$('#frmCalc').validate({
    rules: {     
      client_name:{
        required: true
      },
      client_addr: {
        required: true
      },
      elev_rate: {
        required: true
      },
      open_area: {
        required: true
      },
      b_wall_area:{
        required: true
      },
      floor_num:{
        required: true
      },
      length:{
        required: true
      },
      width:{
        required: true
      }
    },
    messages: {
      client_name:{
        required: 'Enter client name'
      },
      client_addr: {
        required: 'Enter address'
      },
      elev_rate: {
        required: 'Select elevation type'
      },
      open_area: {
        required: 'Enter open area'
      },
      b_wall_area:{
        required: 'Enter Boundary wall area'
      },
      floor_num:{
        required: 'Select number of floor'
      },
      length:{
        required: 'Enter length'
      },
      width:{
        required: '&nbsp;&nbsp;&nbsp;Enter width'
      }  
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    },
    submitHandler: function(form) { 
      $("#type").val("save_data");
       var frmdata = $("#frmCalc").serialize(); //new FormData($('#costForm')[0]);//$("#followupForm").serialize();

        var url = "ajax_cost_calc.php";//"ajax_cost_calc_manual.php"; //form.attr('action');        
            $.ajax({
                type: "POST",
                url: url,
                data: frmdata, 
                success: function(data)
                { 

                  console.log(data);    

                  let res = JSON.parse(data);
                  console.log(res);
                    
                  if(res.status == 1)
                  {                  

                      $("#list").slideDown();
                      $("#last_id").val(res.cid);

                      $("#btn_topup").show();
                      $("#div_calc").slideDown();

                      $("#building_cost").val((res.bwall_cost));
                      $("#building_cost_html").html(num_format(res.total_floor_cost));

                      $("#bwall_cost").val(res.bwall_cost);
                      $("#bwall_cost_html").html(num_format(res.bwall_cost));

                      $("#open_area_cost").val(res.open_area_cost);
                      $("#open_area_cost_html").html(num_format(res.open_area_cost));
                      
                      $("#elev_cost").val(res.elev_cost);
                      $("#elev_cost_html").html(num_format(res.elev_cost));
                      
                      $("#plinth_cost").val(res.extra_plinth_cost);
                      $("#plinth_cost_html").html(num_format(res.extra_plinth_cost));

                      $("#total_cost").val(res.grand_total);
                      $("#total_cost_html").html(num_format(res.grand_total));

                      $("#hdn_add_cost").val(res.add_cost);
                      $("#add_cost").html(num_format(res.add_cost));
                      
                      $("#hdn_disc_cost").val(res.disc_total);
                      $("#disc_cost").html(num_format(res.disc_total));
                      
                      $("#hdn_topup_cost").val(res.topup_cost);
                      $("#topup_cost").html(num_format(res.topup_cost));

                      $("#stank_cost_html").html(num_format(res.stank_cost));
                      $("#wtank_cost_html").html(num_format(res.wtank_cost));
                      $("#mkitchen_cost_html").html(num_format(res.mkitchen_cost));
                      $("#sum_fceling_cost_html").html(num_format(res.sum_fceling_cost));

                      alert("Saved...");

                      $("#btn_topup").show();
                     
                     //var last_id = $("#last_id").val();
                    //window.location.href = "pdf2/anubandh_2.php?cid="+last_id;

                  }
                  else
                  { 
                    alert("Something went wrong...");
                    $("#btn_topup").show();  
                  }
                    
                  }
                
            });
      }

  });

/**--------Download---------- */

$("#download").on("click", function(){

  var last_id = $("#last_id").val();
   
  if(last_id != "")
  {
    window.location.href = "pdf2/anubandh_new.php?cid="+last_id;
  }
  else
  {
    alert("Data not available for download...\n calculate and click on download button");
  }
    
});

/**--------Tou Up --------- */

  /**-------Toilet Qty ------*/
  $("#add_toilet").on("change", function(){

    var id = $(this).attr("id");  
    var value = $(this).val(); 
    var tcost = $("#total_cost").val();
    var strength = $("#toilet_qty").val();
    
    if(value >0)
    {
    $.ajax({
        url: 'ajax_cost_calc.php',
        type: "POST",
        data: ({id:id, value: value, total_cost: tcost, strength: strength, type: "clac_topup2"}),
        success: function(data){

        console.log(data);

        var spl_txt = data.split("~~~");

          if(spl_txt[1]==1)
          {
            var topup_cost = $("#hdn_topup_cost").val();
            var hdn_cost = $("#hdn_topup_8").val();

            if(hdn_cost > 0 && hdn_cost != "")
            {
                $("#txt_topup_8").html("");
                $("#hdn_topup_8").val("");

                var tc = parseFloat(topup_cost)-parseFloat(hdn_cost);  
                $("#topup_cost").html(tc);
                $("#hdn_topup_cost").val(tc);
              
                $("#txt_topup_8").html("₹ "+spl_txt[2]);
                $("#hdn_topup_8").val(spl_txt[2]);
                var topup_cost = $("#hdn_topup_cost").val();

                var tc = parseFloat(topup_cost)+parseFloat(spl_txt[2]);
                $("#topup_cost").html(tc);
                $("#hdn_topup_cost").val(tc);

                

            }
            else
            {

              $("#txt_topup_8").html("₹ "+spl_txt[2]);
              $("#hdn_topup_8").val(spl_txt[2]);
              var topup_cost = $("#hdn_topup_cost").val();

              var tc = parseFloat(topup_cost)+parseFloat(spl_txt[2]);
              $("#topup_cost").html(tc);
              $("#hdn_topup_cost").val(tc);
            

            }

            var t_cost = $("#total_cost").val();
            var total_cost = parseFloat(t_cost)+parseFloat(spl_txt[2]);
            $("#total_cost_html").html(total_cost);
            $("#total_cost").val(total_cost);

          }
          else
          {
              alert("Something went wrong OR Unexpected data");
          }

        }

      });

    }
    else
    {
      //alert(percent);

      var topup_cost = $("#hdn_topup_cost").val();
      var hdn_cost = $("#hdn_topup_8").val();

      if(hdn_cost > 0 && hdn_cost != "")
        {
          $("#txt_topup_8").html("");
          $("#hdn_topup_8").val("");

          var tc = parseFloat(topup_cost)-parseFloat(hdn_cost);  
          $("#topup_cost").html(tc);
          $("#hdn_topup_cost").val(tc);

        }  

        var t_cost = $("#total_cost").val();
        var total_cost = parseFloat(t_cost)-parseFloat(hdn_cost);
        $("#total_cost_html").html(total_cost);
        $("#total_cost").val(total_cost);

    }  

  });

/**---------Photo Frame cost--------- */
  $("#photo_frame").on("change", function(){

    var id = $(this).attr("id");  
    var percent = $(this).val(); 
    var tcost = $("#total_cost").val();
    var strength = 0;
      
    if(percent >0)
    {
    $.ajax({
        url: 'ajax_cost_calc.php',
        type: "POST",
        data: ({id:id, percent: percent, total_cost: tcost, strength: strength, type: "clac_topup"}),
        success: function(data){

        console.log(data);

        var spl_txt = data.split("~~~");

          if(spl_txt[1]==1)
          {
            var topup_cost = $("#hdn_topup_cost").val();
            var hdn_cost = $("#hdn_topup_7").val();

            if(hdn_cost > 0 && hdn_cost != "")
            {
              $("#txt_topup_7").html("");
              $("#hdn_topup_7").val("");

              var tc = parseFloat(topup_cost)-parseFloat(hdn_cost);  
              $("#topup_cost").html(tc);
              $("#hdn_topup_cost").val(tc);
            
            
              $("#txt_topup_7").html("₹ "+spl_txt[2]);
              $("#hdn_topup_7").val(spl_txt[2]);
              var topup_cost = $("#hdn_topup_cost").val();

              var tc = parseFloat(topup_cost)+parseFloat(spl_txt[2]);
              $("#topup_cost").html(tc);
              $("#hdn_topup_cost").val(tc);

            }
            else
            {
              $("#txt_topup_7").html("₹ "+spl_txt[2]);
              $("#hdn_topup_7").val(spl_txt[2]);
              var topup_cost = $("#hdn_topup_cost").val();

              var tc = parseFloat(topup_cost)+parseFloat(spl_txt[2]);
              $("#topup_cost").html(tc);
              $("#hdn_topup_cost").val(tc); 

            }

          }
          else
          {
              alert("Something went wrong OR Unexpected data");
          }

            var t_cost = $("#total_cost").val();
            var total_cost = parseFloat(t_cost)+parseFloat(spl_txt[2]);
            $("#total_cost_html").html(total_cost);
            $("#total_cost").val(total_cost);

        }

      });
    
    }
    else
    {
      

      var topup_cost = $("#hdn_topup_cost").val();
      var hdn_cost = $("#hdn_topup_7").val();

      if(hdn_cost > 0 && hdn_cost != "")
        {
          $("#txt_topup_7").html("");
          $("#hdn_topup_7").val("");

          var tc = parseFloat(topup_cost)-parseFloat(hdn_cost);  
          $("#topup_cost").html(tc);
          $("#hdn_topup_cost").val(tc);
        }
        
        var t_cost = $("#total_cost").val();
        var total_cost = parseFloat(t_cost)-parseFloat(hdn_cost);
        $("#total_cost_html").html(total_cost);
        $("#total_cost").val(total_cost);

    }  
    
});

/**----------Checkbox Code-----------*/
  $(".chk_topup").on("change", function(){

    if($(this).prop('checked')==true)
    {
      
      var id = $(this).attr("id");  
      var tcost = $("#total_cost").val();
      var percent = $(this).val();
      
      if(id==1)
        {
          var strength = $("#e_str").val();
        }
        else
        {
          var strength = 0;
        }

        $.ajax({

          url: 'ajax_cost_calc.php', //This is the current doc
          type: "POST",
          data: ({id:id, percent: percent, total_cost: tcost, strength: strength, type: "clac_topup"}),
          success: function(data){

          console.log(data);

          var spl_txt = data.split("~~~");

            if(spl_txt[1]==1)
            {

              $("#txt_topup_"+id).html("₹ "+spl_txt[2]);
              $("#hdn_topup_"+id).val(spl_txt[2]);
              var topup_cost = $("#hdn_topup_cost").val();

              var tc = parseFloat(topup_cost)+parseFloat(spl_txt[2]);
              $("#topup_cost").html(tc);
              $("#hdn_topup_cost").val(tc); 

              var t_cost = $("#total_cost").val();
              var total_cost = parseFloat(t_cost)+parseFloat(spl_txt[2]);
              $("#total_cost_html").html(total_cost);
              $("#total_cost").val(total_cost);

            }
            else
            {
                alert("Something went wrong OR Unexpected data");
            }

        }

      });

    }
    else{

      var uid = $(this).attr('id');
     
      var topup_cost = $("#hdn_topup_cost").val();

      var hdn_cost = $("#hdn_topup_"+uid).val();

      var tc = parseFloat(topup_cost)-parseFloat(hdn_cost);
      
      $("#topup_cost").html(tc);
      $("#hdn_topup_cost").val(tc);

      $("#txt_topup_"+uid).html("");
      $("#hdn_topup_"+uid).val("");

      var t_cost = $("#total_cost").val();
      var total_cost = parseFloat(t_cost)-parseFloat(hdn_cost);

      $("#total_cost_html").html(total_cost);
      $("#total_cost").val(total_cost);

    }

});

  

/*****---------Average Cost / Total Cost---*/

$(document).on('change', '.price_calc', function(){

  $(".fdisc").val(0);
  $("#disc_price").val(0);
  $("#disc_price_html").html(0);

  //$("#div_disc").slideUp();
 
  var floor_num = $("#floor_num").val();  
  var total_work_area = $("#total_work_area").val();
  var floor_cost = 0;
  var sum_cost = 0;
  var cnt = 0;
  $(".price_calc").each(function(){
    
    cnt++;
    sum_cost += parseFloat(this.value);

    var warea = $("#work_area_"+cnt).val();
    var fprice = $(this).val();
    var tcalc = parseFloat(warea)*parseFloat(fprice);
    //alert(warea+'~~~'+fprice+'~~~'+tcalc);

    //console.log(warea+'~~~'+fprice+'~~~'+tcalc);

    floor_cost += parseFloat(tcalc);
    //console.log(floor_cost);

  });

  
  $("#avg_cost_html").html(sum_cost);
  $("#avg_cost").val(sum_cost);

  $("#total_floor_cost_html").html(floor_cost);
  $("#total_floor_cost").val(floor_cost);
  //console.log(avg_cost+"~~~"+total_floor_cost);

});

/**----First select box select all floor--------- */

$(document).on('change', '#floor_sq_price_1', function(){ 
  
/**------select change all floor------------*/

    var svalue = $(this).val();
    $(".price_calc option[value="+svalue+"]").attr('selected', 'selected'); 

/**------------------------------------------------------------------------- */

  $(".fdisc").val(0);
  $("#disc_price").val(0);
  $("#disc_price_html").html(0);
  
  
 

  var floor_num = $("#floor_num").val();  
  var total_work_area = $("#total_work_area").val();
  var floor_cost = 0;
  var sum_cost = 0;
  var cnt = 0;

  $(".price_calc").each(function(){
    
    cnt++;
    sum_cost += parseFloat(this.value);

    var warea = $("#work_area_"+cnt).val();
    var fprice = $(this).val();
    var tcalc = parseFloat(warea)*parseFloat(fprice);
    //alert(warea+'~~~'+fprice+'~~~'+tcalc);

    console.log(warea+'~~~'+fprice+'~~~'+tcalc);

    floor_cost += parseFloat(tcalc);
    //console.log(floor_cost);

  });

  
  $("#avg_cost_html").html(sum_cost);
  $("#avg_cost").val(sum_cost);

  $("#total_floor_cost_html").html(floor_cost);
  $("#total_floor_cost").val(floor_cost);
  //console.log(avg_cost+"~~~"+total_floor_cost);


    
});

/** Calculate Area------------- */

$(document).on("keyup", ".work_area", function(){
 
  /*$(".fdisc").val(0);
  $("#disc_price").val(0);
  $("#disc_price_html").html(0);
  $("#div_disc").slideUp();*/

  var sum_area = 0;
  var floor_cost = 0;

  var cnt = 0;
  $(".work_area").each(function(){

    cnt++;

    if(this.value != "")
    {
      sum_area += parseFloat(this.value);
    }
    
    var warea = $("#work_area_"+cnt).val();
    var fprice = $("#floor_sq_price_"+cnt).val();
    var tcalc = parseFloat(warea)*parseFloat(fprice);

    //console.log(warea+'~~~'+fprice+'~~~'+tcalc);

    floor_cost += parseFloat(tcalc);

    //console.log(floor_cost);

  });

  
  
  $("#total_work_area_html").html(sum_area+" sqft");
  $("#total_work_area").val(sum_area);
  

  $("#total_floor_cost_html").html(floor_cost);
  $("#total_floor_cost").val(floor_cost);
    
});


$(".area").on("keyup", function(){

if($("#length").val() != "" && $("#width").val() != "")
{
  
  var length = $("#length").val();
  var width = $("#width").val();
  //var depth = $("#depth").val();
  var total_area = parseFloat(length)*parseFloat(width);
   //alert(depth);
  //total_area = (Math.round(total_area * 100) / 100).toFixed(2);

  $("#total_area").val(total_area);
  $("#html_total_area").html(total_area+" sqft");
 
}
else
{
  $("#total_area").val("");
  $("#html_total_area").html("0 sqft");
  //alert("please enter lenght and width");
}

});

/** END Calculate Area--------- */


/*****-------Flor Wise Rate---------- */
$("#floor_num").on("change", function(){
    
    var floor_num = $(this).val();

    var total_area = $("#total_area").val();
    var length = $("#length").val();
    var width = $("#width").val();
    var depth = $("#depth").val();

    if(total_area ==0 || total_area=='')
    {
      alert("Please enter length, width of plot");
      $("#floor_num").val("");
      $("#length").focus();
      return false;
    }

    $.ajax({

      url: 'ajax_cost_calc.php', //This is the current doc
        type: "POST",
        data: ({floor_num: floor_num, length: length, width: width,depth: depth,total_area: total_area, type: "rate_list"}),
        success: function(data){
        $("#tbl_list").html(data);
        var tprice = $("#total_price").val();         
      }

    });

    if($(this).val() == "")
    {
      $("#rate_list").slideUp(); 
    }
    else
    {
      $("#rate_list").slideDown();
    }    

});

});

/***** End Floor wise rate------------ */

/****Calculate Discount----------------*/

$(document).on("keyup", ".fdisc", function(){

   
    $("#btn_disc").show();

    var tfloor = $("#floor_num").val();

   
    var t_disc = 0;
    var cnt = 0;
    $(".price_calc").each(function(){

      cnt++;
      
      var l_farea = $("#work_area_"+cnt).val();
      var l_frate = $("#floor_sq_price_"+cnt).val();

      var l_fdisc = $("#fdisc_"+cnt).val();
       
      if($(this).val().length >= 3)
      {

        if(l_fdisc == "")
        {
          l_fdisc = 0;
        }
        var l_frate_R = parseFloat(l_frate) - parseFloat(l_fdisc);
        var disc_r = parseFloat(l_farea) * parseFloat(l_frate_R);
        t_disc = t_disc+parseFloat(disc_r);
        
      }           
  });
    
  if(t_disc > parseInt(0) && t_disc != "")
  {
    $("#btn_disc").show();
  }
  //$("#disc_price").val(fdisc);
  // $("#disc_price_html").html(fdisc);

});

$(document).on("click", "#btn_disc", function(){

  $("#type").val("calc_discount");
  
  var frmdata = $("#frmCalc").serialize(); 
  var url = "ajax_cost_calc.php";    
  $.ajax({
      type: "POST",
      url: url,
      data: frmdata, 
      success: function(data){
        
        console.log(data);
        var spl_txt = data.split("~~~");
        if(spl_txt[0] == 1)
        {
          $("#div_disc").slideDown();
          $("#disc_price").val(spl_txt[1]);
          $("#disc_price_html").html(spl_txt[1]);
        }
        else
        {
          $("#div_disc").slideUp();
          $("#disc_price").val(0);
          $("#disc_price_html").html(0);
        }
        
      }

    });
  
});


/**-----end------------------ */

/**----------Septic/Water Tank---------*/
//stank_rb1

$(".stank_rb").on("click", function(){

    if($(this).val() == "yes")
    {
      $("#stank_disc").show("slow");
    }
    else
    {
      $("#stank_disc").hide("slow");
      $('#chk1').prop('checked', false);
    }

});

$(".wtank_rb").on("click", function(){
    if($(this).val() == "yes")
    {
      $("#wtank_disc").show("slow");
    }
    else
    {
      $("#wtank_disc").hide("slow");
      $('#chk2').prop('checked', false);
    }
});

$(".mkit_rb").on("change", function(){  

  if($(this).val() == "yes")
    {
      $("#mkitchen_cost").slideDown();     
    }
    else
    {
      $("#mkitchen_cost").val("");
      $("#mkitchen_cost").slideUp();
      $('#chk3').prop('checked', false);
    }

});


$(".fceling_rb").on("click", function(){

if($(this).val() == "yes")
{
  $("#fc_disc").show("slow");
}
else
{
  $("#fc_disc").hide("slow");
  $('#chk4').prop('checked', false);
  //$('input:checkbox[id=chk4]'). attr('checked',true);
}

});

</script>

<?php echo include("footer.php");?>