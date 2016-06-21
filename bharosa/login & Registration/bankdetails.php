
<div id="faq-tab-3" class="tab-pane fade">
  <form class="form-horizontal" id="sample-form">
    <div id="faq-list-3" class="panel-group accordion-style1 accordion-style2">
      <div class="panel panel-default">
        <div class="panel-heading"> <a href="#faq-3-1" data-parent="#faq-list-3" data-toggle="collapse" class="accordion-toggle collapsed"> <i class="ace-icon fa fa-minus smaller-80" data-icon-hide="ace-icon fa fa-minus" data-icon-show="ace-icon fa fa-plus"></i>&nbsp;Primary Bank (1) </a> </div>
        <div class="panel-collapse" id="faq-3-1">
          <div class="panel-body">
            <div class="form-group">
              <label for="radAcType" class="col-xs-12 col-sm-3 control-label no-padding-right">Account Type</label>
              <div class="col-xs-12 col-sm-3"> <span class="input-icon block input-icon-right">
                <select class="input-medium width-100" id="radAcType" name="radAcType">
                  <option value="UID">Savings</option>
                  <option value="PAS">Current</option>
                  <option value="VOT">Cash Credit</option>
                  <option value="DL">O/D</option>
                  <option value="DL">NRE</option>
                  <option value="DL">NRO</option>
                  <option value="DL">FCNR</option>
                  <option value="DL">NRSR</option>
                  <option value="OTH">Others</option>
                </select>
                </span> </div>
              <div class="col-xs-12 col-sm-2"> <span class="input-icon block input-icon-right">
                <input type="text" id="txtOcc" class="width-100" placeholder="Please specify if others"/>
                </span> </div>
            </div>
            <div class="form-group has-warning">
              <label for="txtAccnt" class="col-xs-12 col-sm-3 control-label no-padding-right">Account Number</label>
              <div class="col-xs-12 col-sm-5"> <span class="input-icon block input-icon-right">
                <input type="text" id="txtAccnt" class="width-100" />
                <i data-rel="popover" data-trigger="hover" data-placement="right" data-content="Required for making your investments" class="ace-icon fa fa-info-circle"></i> </span> </div>
            </div>
            <div class="form-group has-warning">
              <label for="txtIfsc" class="col-xs-12 col-sm-3 control-label no-padding-right">IFSC / MICR Code</label>
              <div class="col-xs-12 col-sm-4"> <span class="input-icon block input-icon-right">
                <input type="text" id="txtIfsc" class="width-100" />
                <i data-rel="popover" data-trigger="hover" data-placement="right" data-content="11 Digit IFSC and 9 Digit MICR code found on your cheque" class="ace-icon fa fa-info-circle"></i> </span> </div>
              <div class="col-xs-12 col-sm-1"> <span class="input-icon block input-icon-right">
                <button class="btn btn-white btn-info btn-bold"> <i class="ace-icon fa fa-search bigger-120 blue"></i> Get Details </button>
                <a href="#my-modal"  class="" data-toggle="modal"> get details </a>
                <div id="my-modal" class="modal fade " tabindex="-1" >
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 class="smaller lighter blue no-margin">Get IFSC / MICR Code</h3>
                      </div>
                      <div class="modal-body">
                      
                      <iframe src="https://www.cvlkra.com/kycpaninquiry.aspx" height="300" width="100%"></iframe>
                       </div>
                      
                    </div>
                    <!-- /.modal-content --> 
                  </div>
                  <!-- /.modal-dialog --> 
                </div>
                </span> </div>
            </div>
            <div class="form-group  has-warning">
              <label for="txtResAdd" class="col-xs-12 col-sm-3 control-label no-padding-right"></label>
              <div class="col-xs-12 col-sm-5"> <span class="input-icon block input-icon-right">
                <textarea readonly="" class="form-control limited" id="txtResAdd" maxlength="50"></textarea>
                </span> </div>
            </div>
            <div class="form-group has-warning">
              <label for="radOpMode" class="col-xs-12 col-sm-3 control-label no-padding-right">Mode of Operation</label>
              <div class="col-xs-12 col-sm-5"> <span class="input-icon block input-icon-right">
                <input name="radOpMode" value="S" type="checkbox" class="ace input-lg" />
                <span class="lbl"> Single</span>
                <input name="radOpMode" value="M" type="checkbox" class="ace input-lg" />
                <span class="lbl"> Joint</span> </span> </div>
            </div>
            <div class="form-group">
              <label for="txtJoint" class="col-xs-12 col-sm-3 control-label no-padding-right">Joint Account Holder Name</label>
              <div class="col-xs-12 col-sm-5"> <span class="input-icon block input-icon-right">
                <input type="text" id="txtJoint" class="width-100" />
                <i data-rel="popover" data-trigger="hover" data-placement="right" data-content="Mandatory if this is a joint account" class="ace-icon fa fa-info-circle"></i> </span> </div>
            </div>
            <div class="form-group has-warning">
              <label for="radPrint" class="col-xs-12 col-sm-3 control-label no-padding-right">Names printed on Cheque?</label>
              <div class="col-xs-12 col-sm-5"> <span class="input-icon block input-icon-right">
                <input name="radPrint" value="S" type="checkbox" class="ace input-lg" />
                <span class="lbl"> Yes</span>
                <input name="radPrint" value="M" type="checkbox" class="ace input-lg" />
                <span class="lbl"> No</span> </span> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading"> <a href="#faq-3-2" data-parent="#faq-list-3" data-toggle="collapse" class="accordion-toggle collapsed"> <i class="ace-icon fa fa-plus smaller-80" data-icon-hide="ace-icon fa fa-minus" data-icon-show="ace-icon fa fa-plus"></i>&nbsp;Additional Bank (2) </a> </div>
        <div class="panel-collapse collapse" id="faq-3-2">
          <div class="panel-body">
            <div class="form-group">
              <label for="radAcType" class="col-xs-12 col-sm-3 control-label no-padding-right">Account Type</label>
              <div class="col-xs-12 col-sm-3"> <span class="input-icon block input-icon-right">
                <select class="input-medium width-100" id="radAcType" name="radAcType">
                  <option value="UID">Savings</option>
                  <option value="PAS">Current</option>
                  <option value="VOT">Cash Credit</option>
                  <option value="DL">O/D</option>
                  <option value="DL">NRE</option>
                  <option value="DL">NRO</option>
                  <option value="DL">FCNR</option>
                  <option value="DL">NRSR</option>
                  <option value="OTH">Others</option>
                </select>
                </span> </div>
              <div class="col-xs-12 col-sm-2"> <span class="input-icon block input-icon-right">
                <input type="text" id="txtOcc" class="width-100" placeholder="Please specify if others"/>
                </span> </div>
            </div>
            <div class="form-group has-warning">
              <label for="txtAccnt" class="col-xs-12 col-sm-3 control-label no-padding-right">Account Number</label>
              <div class="col-xs-12 col-sm-5"> <span class="input-icon block input-icon-right">
                <input type="text" id="txtAccnt" class="width-100" />
                <i data-rel="popover" data-trigger="hover" data-placement="right" data-content="Required for making your investments" class="ace-icon fa fa-info-circle"></i> </span> </div>
            </div>
            <div class="form-group has-warning">
              <label for="txtIfsc" class="col-xs-12 col-sm-3 control-label no-padding-right">IFSC / MICR Code</label>
              <div class="col-xs-12 col-sm-4"> <span class="input-icon block input-icon-right">
                <input type="text" id="txtIfsc" class="width-100" />
                <i data-rel="popover" data-trigger="hover" data-placement="right" data-content="11 Digit IFSC and 9 Digit MICR code found on your cheque" class="ace-icon fa fa-info-circle"></i> </span> </div>
              <div class="col-xs-12 col-sm-1"> <span class="input-icon block input-icon-right">
                <button class="btn btn-white btn-info btn-bold"> <i class="ace-icon fa fa-search bigger-120 blue"></i> Get Details </button>
                </span> </div>
            </div>
            <div class="form-group  has-warning">
              <label for="txtResAdd" class="col-xs-12 col-sm-3 control-label no-padding-right"></label>
              <div class="col-xs-12 col-sm-5"> <span class="input-icon block input-icon-right">
                <textarea readonly="" class="form-control limited" id="txtResAdd" maxlength="50"></textarea>
                </span> </div>
            </div>
            <div class="form-group has-warning">
              <label for="radOpMode" class="col-xs-12 col-sm-3 control-label no-padding-right">Mode of Operation</label>
              <div class="col-xs-12 col-sm-5"> <span class="input-icon block input-icon-right">
                <input name="radOpMode" value="S" type="checkbox" class="ace input-lg" />
                <span class="lbl"> Single</span>
                <input name="radOpMode" value="M" type="checkbox" class="ace input-lg" />
                <span class="lbl"> Joint</span> </span> </div>
            </div>
            <div class="form-group">
              <label for="txtJoint" class="col-xs-12 col-sm-3 control-label no-padding-right">Joint Account Holder Name</label>
              <div class="col-xs-12 col-sm-5"> <span class="input-icon block input-icon-right">
                <input type="text" id="txtJoint" class="width-100" />
                <i data-rel="popover" data-trigger="hover" data-placement="right" data-content="Mandatory if this is a joint account" class="ace-icon fa fa-info-circle"></i> </span> </div>
            </div>
            <div class="form-group has-warning">
              <label for="radPrint" class="col-xs-12 col-sm-3 control-label no-padding-right">Names printed on Cheque?</label>
              <div class="col-xs-12 col-sm-5"> <span class="input-icon block input-icon-right">
                <input name="radPrint" value="S" type="checkbox" class="ace input-lg" />
                <span class="lbl"> Yes</span>
                <input name="radPrint" value="M" type="checkbox" class="ace input-lg" />
                <span class="lbl"> No</span> </span> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading"> <a href="#faq-3-3" data-parent="#faq-list-3" data-toggle="collapse" class="accordion-toggle collapsed"> <i class="ace-icon fa fa-plus smaller-80" data-icon-hide="ace-icon fa fa-minus" data-icon-show="ace-icon fa fa-plus"></i>&nbsp;Additional Bank (3) </a> </div>
        <div class="panel-collapse collapse" id="faq-3-3">
          <div class="panel-body">
            <div class="form-group">
              <label for="radAcType" class="col-xs-12 col-sm-3 control-label no-padding-right">Account Type</label>
              <div class="col-xs-12 col-sm-3"> <span class="input-icon block input-icon-right">
                <select class="input-medium width-100" id="radAcType" name="radAcType">
                  <option value="UID">Savings</option>
                  <option value="PAS">Current</option>
                  <option value="VOT">Cash Credit</option>
                  <option value="DL">O/D</option>
                  <option value="DL">NRE</option>
                  <option value="DL">NRO</option>
                  <option value="DL">FCNR</option>
                  <option value="DL">NRSR</option>
                  <option value="OTH">Others</option>
                </select>
                </span> </div>
              <div class="col-xs-12 col-sm-2"> <span class="input-icon block input-icon-right">
                <input type="text" id="txtOcc" class="width-100" placeholder="Please specify if others"/>
                </span> </div>
            </div>
            <div class="form-group has-warning">
              <label for="txtAccnt" class="col-xs-12 col-sm-3 control-label no-padding-right">Account Number</label>
              <div class="col-xs-12 col-sm-5"> <span class="input-icon block input-icon-right">
                <input type="text" id="txtAccnt" class="width-100" />
                <i data-rel="popover" data-trigger="hover" data-placement="right" data-content="Required for making your investments" class="ace-icon fa fa-info-circle"></i> </span> </div>
            </div>
            <div class="form-group has-warning">
              <label for="txtIfsc" class="col-xs-12 col-sm-3 control-label no-padding-right">IFSC / MICR Code</label>
              <div class="col-xs-12 col-sm-4"> <span class="input-icon block input-icon-right">
                <input type="text" id="txtIfsc" class="width-100" />
                <i data-rel="popover" data-trigger="hover" data-placement="right" data-content="11 Digit IFSC and 9 Digit MICR code found on your cheque" class="ace-icon fa fa-info-circle"></i> </span> </div>
              <div class="col-xs-12 col-sm-1"> <span class="input-icon block input-icon-right">
                <button class="btn btn-white btn-info btn-bold"> <i class="ace-icon fa fa-search bigger-120 blue"></i> Get Details </button>
                </span> </div>
            </div>
            <div class="form-group  has-warning">
              <label for="txtResAdd" class="col-xs-12 col-sm-3 control-label no-padding-right"></label>
              <div class="col-xs-12 col-sm-5"> <span class="input-icon block input-icon-right">
                <textarea readonly="" class="form-control limited" id="txtResAdd" maxlength="50"></textarea>
                </span> </div>
            </div>
            <div class="form-group has-warning">
              <label for="radOpMode" class="col-xs-12 col-sm-3 control-label no-padding-right">Mode of Operation</label>
              <div class="col-xs-12 col-sm-5"> <span class="input-icon block input-icon-right">
                <input name="radOpMode" value="S" type="checkbox" class="ace input-lg" />
                <span class="lbl"> Single</span>
                <input name="radOpMode" value="M" type="checkbox" class="ace input-lg" />
                <span class="lbl"> Joint</span> </span> </div>
            </div>
            <div class="form-group">
              <label for="txtJoint" class="col-xs-12 col-sm-3 control-label no-padding-right">Joint Account Holder Name</label>
              <div class="col-xs-12 col-sm-5"> <span class="input-icon block input-icon-right">
                <input type="text" id="txtJoint" class="width-100" />
                <i data-rel="popover" data-trigger="hover" data-placement="right" data-content="Mandatory if this is a joint account" class="ace-icon fa fa-info-circle"></i> </span> </div>
            </div>
            <div class="form-group has-warning">
              <label for="radPrint" class="col-xs-12 col-sm-3 control-label no-padding-right">Names printed on Cheque?</label>
              <div class="col-xs-12 col-sm-5"> <span class="input-icon block input-icon-right">
                <input name="radPrint" value="S" type="checkbox" class="ace input-lg" />
                <span class="lbl"> Yes</span>
                <input name="radPrint" value="M" type="checkbox" class="ace input-lg" />
                <span class="lbl"> No</span> </span> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix form-actions">
      <div class="col-md-offset-3 col-md-9">
        <button class="btn btn-info" type="button"> <i class="ace-icon fa fa-check bigger-110"></i> Save </button>
        &nbsp; &nbsp; &nbsp;
        <button class="btn" type="reset"> <i class="ace-icon fa fa-undo bigger-110"></i> Reset </button>
      </div>
    </div>
  </form>
</div>
