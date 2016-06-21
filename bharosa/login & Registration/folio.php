
<div id="folio" class="tab-pane fade" aria-multiselectable="true">
  <form class="form-horizontal" id="sample-form">
    <div id="folio-list" class="panel-group accordion-style1 accordion-style2">
    
    
     <!--add folio row-->
     	 <div class="panel panel-default">
        <div class="panel-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#folio-list" href="#folio-1"> <i class="ace-icon fa fa-minus smaller-80" data-icon-hide="ace-icon fa fa-minus" data-icon-show="ace-icon fa fa-plus"></i>&nbsp;Folio 1 </a> </div>
        <div class="panel-collapse in" id="folio-1">
          <div class="panel-body">
            <div class="form-group has-warning">
              <label for="txtAccnt" class="col-xs-12 col-sm-3 control-label no-padding-right">Folio Number<span class="text-danger">*</span></label>
              <div class="col-xs-12 col-sm-5"> <span class="input-icon block input-icon-right">
                <input type="text" id="folioNumber" name="folioNumber" class="width-100" placeholder="Enter Folio Number" />
                </span> </div>
            </div>
            <div class="form-group has-warning">
              <label for="radAcType" class="col-xs-12 col-sm-3 control-label no-padding-right">Fund House<span class="text-danger">*</span></label>
              <div class="col-xs-12 col-sm-5"> <span class="input-icon block input-icon-right">
                <select name="fundHouse" class="margin-reset" id="fundHouse">
                  <option value="">Select an option</option>
                  <option value="1">Axis Mutual Fund</option>
                  <option value="2">Birla Sunlife Mutual Fund</option>
                  <option value="3">DSP Blackrock Mutual Fund</option>
                  <option value="4">Edelweiss Mutual Fund</option>
                  <option value="5">Frankin Templeton Mutual Fund</option>
                  <option value="6">HDFC Mutual Fund</option>
                  <option value="7">ICICI Prudential Mutual Fund</option>
                  <option value="8">IDBI Mutual Fund</option>
                  <option value="9">IDFC Mutual Fund</option>
                  <option value="10">IIFL Mutual Fund</option>
                  <option value="11">Indiabulls Mutual Fund</option>
                  <option value="12">Kotak Mutual Fund</option>
                  <option value="13">L &amp; T Mutual Fund</option>
                  <option value="14">Motilal Oswal Mutual Fund</option>
                  <option value="15">Peerless Mutual Fund</option>
                  <option value="16">PPFAS Mutual Fund</option>
                  <option value="17">Principal Mutual Fund</option>
                  <option value="18">Quantum Mutual Fund</option>
                  <option value="19">Reliance Mutual Fund</option>
                  <option value="20">Religare Mutual Fund</option>
                  <option value="21">SBI Mutual Fund</option>
                  <option value="22">Sundaram Mutual Fund</option>
                  <option value="23">Tata Mutual Fund</option>
                  <option value="24">Taurus Mutual Fund</option>
                  <option value="25">UTI Mutual Fund</option>
                </select>
                </span> </div>
            </div>
            <div class="form-group has-warning">
              <label for="txtDob" class="col-xs-12 col-sm-3 control-label no-padding-right">Mode Of Operation </label>
              <div class="col-xs-12 col-sm-5"> <span class="input-icon block input-icon-right">
                <input name="usergender" value="Male" type="radio" class="ace input-lg" checked="">
                <span class="lbl"> Single</span>
                <input name="usergender" value="Female" type="radio" class="ace input-lg">
                <span class="lbl"> Joint</span> </span> </div>
            </div>
            <div class="form-group has-warning">
              <label for="txtAccnt" class="col-xs-12 col-sm-3 control-label no-padding-right">Joint Folio Holder Name <span class="text-danger">*</span></label>
              <div class="col-xs-12 col-sm-5"> <span class="input-icon block input-icon-right">
                <input type="text" id="jointFolioHolderName" name="jointFolioHolderName" class="width-100" />
                </span> </div>
            </div>
          </div>
        </div>
      </div>
     <!--add folio row-->
      
      <!--add folio button-->
      <div class="form-group has-warning">
        <label for="" class="col-xs-12 col-sm-3 control-label no-padding-right">&nbsp;</label>
        <div class="col-xs-12 col-sm-5">
          <div class="addfoliobtn"> <a class="btn btn-info"  href="#"> <i class="ace-icon fa fa-plus bigger-110"></i> Add Folio </a> </div>
        </div>
      </div>
     	<!--add folio button-->
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
<style type="text/css">
.addfoliobtn{ float:right}
</style>
