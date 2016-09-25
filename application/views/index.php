<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="keywords" content="Hospital Ranker" /> 
	<meta name="description" content="This is a temporary interview works, DO NOT use it formally." />
	<title>Welcome to Hospital Ranker</title>
	<link rel="icon" href="/static/img/favicon.png" type="image/x-icon" />
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
	<link href="static/css/rangeSlider.css" rel="stylesheet" />
	<style type="text/css">
	body {
		background: url(/static/img/index-bg-1.jpg) no-repeat;
		background-attachment: fixed;
		background-size: cover;
	}
	.bg-warning {
		text-align: center;
		height: 30px;
		line-height: 30px;
		color: red;
	}
	.title {
		color: white;
		text-shadow:-2px 0 2px #006600;
	}
	h5 {
		color: #666;
	}
	div {
		text-align: center;
	}
	.selection-parent {
		margin-top: 8%;
	}
	select, .range-parent {
		width: 800px;
	}
	.range-parent {
		margin: 0 auto;
		margin-top: -20px;
	}
	.select2-container .select2-selection--single,
	.select2-container--default .select2-selection--single .select2-selection__arrow {
		height: 32px;
	}
	.select2-container--default .select2-selection--single .select2-selection__rendered	{
		line-height: 32px;
	}
	.select2-search__field {
		text-align: center;
	}
	footer {
		position: fixed;
		left: 0;
		right: 0;
		bottom: 8px;
		z-index: -999;
	}
	footer p {
		text-align: center;
		color: #999;
	}
	#submit {
		outline: none;
		padding: 10px 12px;
		transition: .5s;
		border-radius: 0;
		margin-top: 20px;
		width: 20%;
	}
	#submit:hover {
		outline: none;
		transition: .5s;
		border-radius: 2em;
		box-shadow:0px 0px 20px white;
	}
	</style>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
	<script type="text/javascript" src="static/js/rangeSlider.js"></script>
</head>
<body>
<div class="bg-warning">This is a temporary interview works, DO NOT use it formally.</div>
<div class="selection-parent">
<h1 class="title">Hospital Ranker</h1>
<h3>Please select a category below</h3>
<select class="category-select">
  <option></option>
  <optgroup label="Heart Attack">
    <option value="HA_D_A">Hospital 30-Day Death (Mortality) Rates from Heart Attack</option>
    <option value="HA_D_C">Lower Mortality Estimate - Hospital 30-Day Death (Mortality) Rates from Heart Attack</option>
	<option value="HA_D_D">Upper Mortality Estimate - Hospital 30-Day Death (Mortality) Rates from Heart Attack</option>
	<option value="HA_D_E">Number of Patients - Hospital 30-Day Death (Mortality) Rates from Heart Attack</option>
	<option value="HA_R_D">Hospital 30-Day Readmission Rates from Heart Attack</option>
	<option value="HA_R_D">Lower Readmission Estimate - Hospital 30-Day Readmission Rates from Heart Attack</option>
	<option value="HA_R_D">Upper Readmission Estimate - Hospital 30-Day Readmission Rates from Heart Attack</option>
	<option value="HA_R_E">Number of Patients - Hospital 30-Day Readmission Rates from Heart Attack</option>
  </optgroup>
  <optgroup label="Heart Failure">
    <option value="HF_D_A">Hospital 30-Day Death (Mortality) Rates from Heart Failure</option>
    <option value="HF_D_C">Lower Mortality Estimate - Hospital 30-Day Death (Mortality) Rates from Heart Failure</option>
	<option value="HF_D_D">Upper Mortality Estimate - Hospital 30-Day Death (Mortality) Rates from Heart Failure</option>
	<option value="HF_D_E">Number of Patients - Hospital 30-Day Death (Mortality) Rates from Heart Failure</option>
	<option value="HF_R_D">Hospital 30-Day Readmission Rates from Heart Failure</option>
	<option value="HF_R_D">Lower Readmission Estimate - Hospital 30-Day Readmission Rates from Heart Failure</option>
	<option value="HF_R_D">Upper Readmission Estimate - Hospital 30-Day Readmission Rates from Heart Failure</option>
	<option value="HF_R_E">Number of Patients - Hospital 30-Day Death (Mortality) Rates from Heart Failure</option>
  </optgroup>
  <optgroup label="Pneumonia">
    <option value="P_D_A">Hospital 30-Day Death (Mortality) Rates from Pneumonia</option>
    <option value="P_D_C">Lower Mortality Estimate - Hospital 30-Day Death (Mortality) Rates from Pneumonia</option>
	<option value="P_D_D">Upper Mortality Estimate - Hospital 30-Day Death (Mortality) Rates from Pneumonia</option>
	<option value="P_R_E">Number of Patients - Hospital 30-Day Death (Mortality) Rates from Pneumonia</option>
	<option value="P_R_D">Hospital 30-Day Readmission Rates from Pneumonia</option>
	<option value="P_R_D">Lower Readmission Estimate - Hospital 30-Day Readmission Rates from Pneumonia</option>
	<option value="P_R_D">Upper Readmission Estimate - Hospital 30-Day Readmission Rates from Pneumonia</option>
	<option value="P_R_E">Number of Patients - Hospital 30-Day Death (Mortality) Rates from Pneumonia</option>
  </optgroup>
</select>
<br />
<h3>Please select state (Can select multiple at once)</h3>
<h5>When select mutiple, repeat clicking input area.</h5>
<h5>Leave it blank if you wanna query all states.</h5>
<select class="state-select" multiple="multiple">
    <option value="AL">Alabama(AL)</option>
    <option value="AK">Alaska(AK)</option>
    <option value="AZ">Arizona(AZ)</option>
    <option value="AR">Arkansas(AR)</option>
    <option value="CA">California(CA)</option>
    <option value="CO">Colorado(CO)</option>
    <option value="CT">Connecticut(CT)</option>
    <option value="DE">Delaware(DE)</option>
    <option value="DC">Washington, D.C.(DC)</option>
    <option value="FL">Florida(FL)</option>
    <option value="GA">Georgia(GA)</option>
    <option value="HI">Hawaii(HI)</option>
    <option value="ID">Idaho(ID)</option>
    <option value="IL">Illinois(IL)</option>
    <option value="IN">Indiana(IN)</option>
    <option value="IA">Iowa(IA)</option>
    <option value="KS">Kansas(KS)</option>
    <option value="KY">Kentucky(KY)</option>
    <option value="LA">Louisiana(LA)</option>
    <option value="ME">Maine(ME)</option>
    <option value="MD">Maryland(MD)</option>
    <option value="MA">Massachusetts(MA)</option>
    <option value="MI">Michigan(MI)</option>
    <option value="MN">Minnesota(MN)</option>
    <option value="MS">Mississippi(MS)</option>
    <option value="MO">Missouri(MO)</option>
    <option value="MT">Montana(MT)</option>
    <option value="NE">Nebraska(NE)</option>
    <option value="NV">Nevada(NV)</option>
    <option value="NH">New Hampshire(NH)</option>
    <option value="NJ">New Jersey(NJ)</option>
    <option value="NM">New Mexico(NM)</option>
    <option value="NY">New York(NY)</option>
    <option value="NC">North Carolina(NC)</option>
    <option value="ND">North Dakota(ND)</option>
    <option value="OH">Ohio(OH)</option>
    <option value="OK">Oklahoma(OK)</option>
    <option value="OR">Oregon(OR)</option>
    <option value="PA">Pennsylvania(PA)</option>
    <option value="PR">Puerto Rico(PR)</option>
    <option value="RI">Rhode Island(RI)</option>
    <option value="SC">South Carolina(SC)</option>
    <option value="SD">South Dakota(SD)</option>
    <option value="TN">Tennessee(TN)</option>
    <option value="TX">Texas(TX)</option>
    <option value="UT">Utah(UT)</option>
    <option value="VT">Vermont(VT)</option>
    <option value="VI">Virgin Islands(VI)</option>
    <option value="VA">Virginia(VA)</option>
    <option value="WA">Seattle(WA)</option>
    <option value="WV">West Virginia(WV)</option>
    <option value="WI">Wisconsin(WI)</option>
    <option value="WY">Wyoming(WY)</option>
    <option value="GU">Guam(GU)</option>
</select>
<h3>Please select the rank</h3>
<h5>Drag the pointer below, stay at "-1" will query all.</h5>
<br />
<div class="range-parent">
<input type="text" id="range" />
</div>
<br />
<button id="submit" type="button" class="btn btn-success" disabled="disabled">Search</button>
</div>
<footer>
<p>© 2016 Cheng Jingwen</p>
</footer>
<script type="text/javascript">
$(document).ready(function() {
	var ui = {
		search_btn: $("#submit"),
		catagory_select: $(".category-select"),
		state_select: $(".state-select"),
		range_input: $("#range")
	};
	
	if (ui.catagory_select.val() != "") {
		ui.search_btn.attr("disabled", false);
		ui.search_btn.text("Search");
	}
	
	ui.catagory_select.select2({
		placeholder: "Select a category"
	});
	ui.state_select.select2({
		placeholder: "Type here can speed up the search operation",
		allowClear: true
	});
	ui.range_input.ionRangeSlider({
		min: -1,
		max: 100,
		from: 0,
		hasGrid: true
	});
	
	ui.catagory_select.change(function() {
		ui.search_btn.attr("disabled", false);
	});
	
	ui.search_btn.click(function() {
		ui.search_btn.attr("disabled", true);
		ui.search_btn.text("Waiting...");
		var payload = {
			catagory: ui.catagory_select.val(),
			state: ui.state_select.val().toString() == "" ? "ALL" : ui.state_select.val().toString(),
			range: ui.range_input.val()
		}
		window.location.href = "http://115.29.108.74/hospital/query/" + payload.catagory + "/" + payload.state + "/" + payload.range;
	});
});
</script>
</body>
</html>