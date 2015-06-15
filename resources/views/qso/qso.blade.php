@extends('layout.master')

@section('content')
<div class="row">

  @if (count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

<div class="col-md-5">

		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Add QSO</h3>
			</div>

			<div class="panel-body">
          <form class="form-horizontal" action="/qso" method="post">
          {!! csrf_field() !!}

					<div class="form-group">
						<label for="inputDate" class="col-sm-2 control-label input-sm">Date</label>
						<div class="col-sm-4">
							<input type="text" class="form-control input-sm" name="date" id="inputDate" value="<?php echo date('d-m-Y'); ?>">
						</div>
						<label for="inputTime" class="sr-only">Time</label>
						<div class="col-sm-3">
							<input type="text" class="form-control input-sm" name="time" id="inputTime" value="<?php echo date('H:i:s'); ?>">
						</div>
					</div>

					<div class="form-group">
						<label for="selectMode" class="input-sm col-sm-2 control-label">Mode</label>
						<div class="col-sm-4">
							<select name="mode" id="selectMode" class="input-sm form-control control-mode">
								<option value="SSB" <?php if(Session::get('qso_current_mode') == "" || Session::get('qso_current_mode') == "SSB") { echo "selected=\"selected\""; } ?>>SSB</option>
								<option value="AM" <?php if(Session::get('qso_current_mode') == "AM") { echo "selected=\"selected\""; } ?>>AM</option>
								<option value="FM" <?php if(Session::get('qso_current_mode') == "FM") { echo "selected=\"selected\""; } ?>>FM</option>
								<option value="CW" <?php if(Session::get('qso_current_mode') == "CW") { echo "selected=\"selected\""; } ?>>CW</option>
								<option value="RTTY" <?php if(Session::get('qso_current_mode') == "RTTY") { echo "selected=\"selected\""; } ?>>RTTY</option>
								<option value="PSK31" <?php if(Session::get('qso_current_mode') == "PSK31") { echo "selected=\"selected\""; } ?>>PSK31</option>
								<option value="PSK63" <?php if(Session::get('qso_current_mode') == "PSK63") { echo "selected=\"selected\""; } ?>>PSK63</option>
								<option value="JT65" <?php if(Session::get('qso_current_mode') == "JT65") { echo "selected=\"selected\""; } ?>>JT65</option>
								<option value="JT65B" <?php if(Session::get('qso_current_mode') == "JT65B") { echo "selected=\"selected\""; } ?>>JT65B</option>
								<option value="JT6C" <?php if(Session::get('qso_current_mode') == "JT6C") { echo "selected=\"selected\""; } ?>>JT6C</option>
								<option value="JT6M" <?php if(Session::get('qso_current_mode') == "JT6M") { echo "selected=\"selected\""; } ?>>JT6M</option>
								<option value="JT9-1" <?php if(Session::get('qso_current_mode') == "JT9-1") { echo "selected=\"selected\""; } ?>>JT9-1</option>
								<option value="FSK441" <?php if(Session::get('qso_current_mode') == "FSK441") { echo "selected=\"selected\""; } ?>>FSK441</option>
								<option value="JTMS" <?php if(Session::get('qso_current_mode') == "JTMS") { echo "selected=\"selected\""; } ?>>JTMS</option>
								<option value="ISCAT" <?php if(Session::get('qso_current_mode') == "ISCAT") { echo "selected=\"selected\""; } ?>>ISCAT</option>
								<option value="PKT" <?php if(Session::get('qso_current_mode') == "PKT") { echo "selected=\"selected\""; } ?>>PKT</option>
								<option value="SSTV" <?php if(Session::get('qso_current_mode') == "SSTV") { echo "selected=\"selected\""; } ?>>SSTV</option>
							</select>
						</div>

						<label for="selectBand" class="input-sm col-sm-2 control-label">Band</label>
						<div class="col-sm-4">
							<select name="band" id="selectBand" class="input-sm form-control control-band">
								<option value="160m" <?php if(Session::get('qso_current_band') == "160m") { echo "selected=\"selected\""; } ?>>160m</option>
								<option value="80m" <?php if(Session::get('qso_current_band') == "80m") { echo "selected=\"selected\""; } ?>>80m</option>
								<option value="60m" <?php if(Session::get('qso_current_band') == "60m") { echo "selected=\"selected\""; } ?>>60m</option>
								<option value="40m" <?php if(Session::get('qso_current_band') == "40m") { echo "selected=\"selected\""; } ?>>40m</option>
								<option value="30m" <?php if(Session::get('qso_current_band') == "30m") { echo "selected=\"selected\""; } ?>>30m</option>
								<option value="20m" <?php if(Session::get('qso_current_band') == "20m") { echo "selected=\"selected\""; } ?>>20m</option>
								<option value="17m" <?php if(Session::get('qso_current_band') == "17m") { echo "selected=\"selected\""; } ?>>17m</option>
								<option value="15m" <?php if(Session::get('qso_current_band') == "15m") { echo "selected=\"selected\""; } ?>>15m</option>
								<option value="12m" <?php if(Session::get('qso_current_band') == "12m") { echo "selected=\"selected\""; } ?>>12m</option>
								<option value="10m" <?php if(Session::get('qso_current_band') == "10m") { echo "selected=\"selected\""; } ?>>10m</option>
								<option value="6m" <?php if(Session::get('qso_current_band') == "6m") { echo "selected=\"selected\""; } ?>>6m</option>
								<option value="4m" <?php if(Session::get('qso_current_band') == "4m") { echo "selected=\"selected\""; } ?>>4m</option>
								<option value="2m" <?php if(Session::get('qso_current_band') == "2m") { echo "selected=\"selected\""; } ?>>2m</option>
								<option value="70cm" <?php if(Session::get('qso_current_band') == "70cm") { echo "selected=\"selected\""; } ?>>70cm</option>
								<option value="23cm" <?php if(Session::get('qso_current_band') == "23cm") { echo "selected=\"selected\""; } ?>>23cm</option>
								<option value="13cm" <?php if(Session::get('qso_current_band') == "14cm") { echo "selected=\"selected\""; } ?>>13cm</option>
								<option value="9cm" <?php if(Session::get('qso_current_band') == "9cm") { echo "selected=\"selected\""; } ?>>9cm</option>
								<option value="3cm" <?php if(Session::get('qso_current_band') == "3cm") { echo "selected=\"selected\""; } ?>>3cm</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label for="inputCallsign" class="col-sm-3 control-label">Callsign</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="callsign" id="inputCallsign" placeholder="Callsign">
						</div>
					</div>

					<div class="form-group">
						<label for="inputRSTS" class="col-sm-3 control-label">RST (S)</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" name="rst_sent" id="inputRSTS" value="59">
						</div>

						<label for="inputRSTR" class="col-sm-3 control-label">RST (R)</label>

						<div class="col-sm-3">
							<input type="text" class="form-control" name="rst_recv" id="inputRSTR" value="59">
						</div>
					</div>

					<div class="form-group">
						<label for="inputName" class="col-sm-3 control-label">Name</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="name" id="inputName" placeholder="Name">
						</div>
					</div>

					<div class="form-group">
						<label for="inputLocation" class="col-sm-3 control-label">Location</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="location" id="inputLocation" placeholder="Locator">
						</div>
					</div>

					<div class="form-group">
						<label for="inputLocator" class="col-sm-3 control-label">Locator</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="locator" id="inputLocator" placeholder="Locator">
						</div>
					</div>

					<div class="form-group">
						<label for="inputComment" class="col-sm-3 control-label">Comment</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="comment" id="inputComment" placeholder="Comment">
						</div>
					</div>

					<p>
						<span id="refCountry"></span>
						<input type="hidden" id="inputCountry" name="country" value="">
						<input type="hidden" id="inputDXCCNumber" name="DXCCNumber" value="">
						<input type="hidden" id="inputCQZ" name="CQZ" value="">
						<input type="hidden" id="inputContinent" name="Continent" value="">
						<input type="hidden" id="inputLat" name="Lat" value="">
						<input type="hidden" id="inputLon" name="Lon" value="">
					</p>

					<!-- Nav tabs -->
					<ul id="qsoTabsGeneralItems" class="nav nav-tabs">
					  <li class="active"><a href="#general" data-toggle="tab">General</a></li>
					  <li><a href="#station" data-toggle="tab">Station</a></li>
					  <?php if(Auth::user()->satellite_ops) { ?>
					  <li><a href="#satellites" data-toggle="tab">Satellites</a></li>
					  <?php } ?>
					  <li><a href="#qsl" data-toggle="tab">QSL</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
					  <!-- General Items -->
						<div class="tab-pane active" id="general">
						<p>
							<div class="form-group">
								<label for="inputIOTARef" class="col-sm-3 control-label">IOTA Ref</label>
								<div class="col-sm-9">
									<div id="the-basics">
									<input type="text" class="form-control" name="iota_ref" id="inputIOTARef" placeholder="EU-005">
									</div>
								</div>
							</div>
						</p>
					  </div>

						<!-- Station Panel -->
						<div class="tab-pane" id="station">
							<p>
								<div class="form-group">
									<label for="inputFrequency" class="col-sm-3 control-label">Frequency</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="frequency" id="inputFrequency">
									</div>
								</div>
							</p>
						</div>

					  <!-- Satellite panel -->
					  <?php if(Auth::user()->satellite_ops) { ?>
						<div class="tab-pane" id="satellites">
							<p>
							<div class="form-group">
								<label for="inputSatelliteName" class="col-sm-3 control-label">Sat Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="sat_name" id="inputSatelliteName" value="<?php if(Session::get('qso_current_satname')) { echo Session::get('qso_current_satname'); } ?>" placeholder="AO-73">
							</div>
							</div>

							<div class="form-group">
								<label for="inputSatelliteMode" class="col-sm-3 control-label">Sat Mode</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="sat_mode" id="inputSatelliteMode" value="<?php if(Session::get('qso_current_satmode')) { echo Session::get('qso_current_satmode'); } ?>"placeholder="U/V">
							</div>
							</div>
							</p>
						</div>
					  <?php } ?>
						<div class="tab-pane" id="qsl">
						<p>
							<div class="form-group">
								<label for="selectOutgoingMethod" class="col-sm-5 control-label">Outgoing QSL</label>
								<div class="col-sm-4">
									<select id="selectOutgoingMethod" name="selectOutgoingMethod" class="form-control">
										<option value="" selected="selected"></option>
										<option value="Bureau">Bureau</option>
										<option value="Direct">Direct</option>
										<option value="LoTW">LoTW</option>
										<option value="eQSL">eQSL</option>
									</select>
								</div>
							</div>
						</p>
					  </div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-9">
							<button id="saveQSO" type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Add QSO</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>

  <!-- Logbook Past QSOs -->
  <div class="col-md-7">
    <div class="panel panel-info">
      <div class="panel-heading">
  		    <h3 class="panel-title">Last QSOs</h3>
  		</div>

  		<div class="panel-body">
  		    <div class="table-responsive">
  			       <table class="table">
                 <thead>
                   <tr>
                     <th>Time</th>
                     <th>Callsign</th>
                     <th>Mode</th>
                     <th>RST (S)</th>
                     <th>RST (R)</th>
                     <th>Band</th>
                   </tr>
                 </thead>
               </table>
          </div>
      </div>
    </div>
  </div>

</div>
@endsection
