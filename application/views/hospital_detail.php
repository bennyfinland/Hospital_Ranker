<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $data->hospital_name;?></title>
	<link rel="icon" href="/static/img/favicon.png" type="image/x-icon" />
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
	<style>
	.header {
		text-align: center;
		color: black;
	}
	table {
		color: #666;
	}
	</style>
</head>
<body>
<table class="table table-striped table-bordered table-hover">
<tr>
	<th colspan="2" class="header" style="background: #66CC66;">Basic Information</th>
</tr>
<tr>
	<th>Name</th>
	<th><?php echo $data->hospital_name;?></th>
</tr>
<tr>
	<th>State</th>
	<th><?php echo $data->state;?></th>
</tr>
<tr>
	<th>City</th>
	<th><?php echo $data->city;?></th>
</tr>
<tr>
	<th>County</th>
	<th><?php echo $data->county_name;?></th>
</tr>
<tr>
	<th>Address</th>
	<th><?php echo $data->address_1;?></th>
</tr>
<tr>
	<th>ZIP Code</th>
	<th><?php echo $data->zip_code;?></th>
</tr>
<tr>
	<th>Phone Number</th>
	<th><?php echo $data->phone_number;?></th>
</tr>
<tr>
	<th colspan="2" class="header" style="background: #66CCFF;">Statistic Information of Heart Attack</th>
</tr>
<tr>
	<th>Hospital 30-Day Death (Mortality) Rates from Heart Attack</th>
	<th><?php echo $data->HA_D_A;?></th>
</tr>
<tr>
	<th>Comparison to U.S. Rate - Hospital 30-Day Death (Mortality) Rates from Heart Attack</th>
	<th><?php echo $data->HA_D_B;?></th>
</tr>
<tr>
	<th>Lower Mortality Estimate - Hospital 30-Day Death (Mortality) Rates from Heart Attack</th>
	<th><?php echo $data->HA_D_C;?></th>
</tr>
<tr>
	<th>Upper Mortality Estimate - Hospital 30-Day Death (Mortality) Rates from Heart Attack</th>
	<th><?php echo $data->HA_D_D;?></th>
</tr>
<tr>
	<th>Number of Patients - Hospital 30-Day Death (Mortality) Rates from Heart Attack</th>
	<th><?php echo $data->HA_D_E;?></th>
</tr>
<tr>
	<th>Footnote - Hospital 30-Day Death (Mortality) Rates from Heart Attack</th>
	<th><?php echo $data->HA_D_F;?></th>
</tr>
<tr>
	<th>Hospital 30-Day Readmission Rates from Heart Attack</th>
	<th><?php echo $data->HA_R_A;?></th>
</tr>
<tr>
	<th>Comparison to U.S. Rate - Hospital 30-Day Readmission Rates from Heart Attack</th>
	<th><?php echo $data->HA_R_B;?></th>
</tr>
<tr>
	<th>Lower Readmission Estimate - Hospital 30-Day Readmission Rates from Heart Attack</th>
	<th><?php echo $data->HA_R_C;?></th>
</tr>
<tr>
	<th>Upper Readmission Estimate - Hospital 30-Day Readmission Rates from Heart Attack</th>
	<th><?php echo $data->HA_R_D;?></th>
</tr>
<tr>
	<th>Number of Patients - Hospital 30-Day Readmission Rates from Heart Attack</th>
	<th><?php echo $data->HA_R_E;?></th>
</tr>
<tr>
	<th>Footnote - Hospital 30-Day Readmission Rates from Heart Attack</th>
	<th><?php echo $data->HA_R_F;?></th>
</tr>
<tr>
	<th colspan="2" class="header" style="background: #66CCFF;">Statistic Information of Heart Failure</th>
</tr>
<tr>
	<th>Hospital 30-Day Death (Mortality) Rates from Heart Failure</th>
	<th><?php echo $data->HF_D_A;?></th>
</tr>
<tr>
	<th>Comparison to U.S. Rate - Hospital 30-Day Death (Mortality) Rates from Heart Failure</th>
	<th><?php echo $data->HF_D_B;?></th>
</tr>
<tr>
	<th>Lower Mortality Estimate - Hospital 30-Day Death (Mortality) Rates from Heart Failure</th>
	<th><?php echo $data->HF_D_C;?></th>
</tr>
<tr>
	<th>Upper Mortality Estimate - Hospital 30-Day Death (Mortality) Rates from Heart Failure</th>
	<th><?php echo $data->HF_D_D;?></th>
</tr>
<tr>
	<th>Number of Patients - Hospital 30-Day Death (Mortality) Rates from Heart Failure</th>
	<th><?php echo $data->HF_D_E;?></th>
</tr>
<tr>
	<th>Footnote - Hospital 30-Day Death (Mortality) Rates from Heart Failure</th>
	<th><?php echo $data->HF_D_F;?></th>
</tr>
<tr>
	<th>Hospital 30-Day Readmission Rates from Heart Failure</th>
	<th><?php echo $data->HF_R_A;?></th>
</tr>
<tr>
	<th>Comparison to U.S. Rate - Hospital 30-Day Readmission Rates from Heart Failure</th>
	<th><?php echo $data->HF_R_B;?></th>
</tr>
<tr>
	<th>Lower Readmission Estimate - Hospital 30-Day Readmission Rates from Heart Failure</th>
	<th><?php echo $data->HF_R_C;?></th>
</tr>
<tr>
	<th>Upper Readmission Estimate - Hospital 30-Day Readmission Rates from Heart Failure</th>
	<th><?php echo $data->HF_R_D;?></th>
</tr>
<tr>
	<th>Number of Patients - Hospital 30-Day Readmission Rates from Heart Failure</th>
	<th><?php echo $data->HF_R_E;?></th>
</tr>
<tr>
	<th>Footnote - Hospital 30-Day Readmission Rates from Heart Failure</th>
	<th><?php echo $data->HF_R_F;?></th>
</tr>
<tr>
	<th colspan="2" class="header" style="background: #66CCFF;">Statistic Information of Pneumonia</th>
</tr>
<tr>
	<th>Hospital 30-Day Death (Mortality) Rates from Pneumonia</th>
	<th><?php echo $data->P_D_A;?></th>
</tr>
<tr>
	<th>Comparison to U.S. Rate - Hospital 30-Day Death (Mortality) Rates from Pneumonia</th>
	<th><?php echo $data->P_D_B;?></th>
</tr>
<tr>
	<th>Lower Mortality Estimate - Hospital 30-Day Death (Mortality) Rates from Pneumonia</th>
	<th><?php echo $data->P_D_C;?></th>
</tr>
<tr>
	<th>Upper Mortality Estimate - Hospital 30-Day Death (Mortality) Rates from Pneumonia</th>
	<th><?php echo $data->P_D_D;?></th>
</tr>
<tr>
	<th>Number of Patients - Hospital 30-Day Death (Mortality) Rates from Pneumonia</th>
	<th><?php echo $data->P_D_E;?></th>
</tr>
<tr>
	<th>Footnote - Hospital 30-Day Death (Mortality) Rates from Pneumonia</th>
	<th><?php echo $data->P_D_F;?></th>
</tr>
<tr>
	<th>Hospital 30-Day Readmission Rates from Pneumonia</th>
	<th><?php echo $data->P_R_A;?></th>
</tr>
<tr>
	<th>Comparison to U.S. Rate - Hospital 30-Day Readmission Rates from Pneumonia</th>
	<th><?php echo $data->P_R_B;?></th>
</tr>
<tr>
	<th>Lower Readmission Estimate - Hospital 30-Day Readmission Rates from Pneumonia</th>
	<th><?php echo $data->P_R_C;?></th>
</tr>
<tr>
	<th>Upper Readmission Estimate - Hospital 30-Day Readmission Rates from Pneumonia</th>
	<th><?php echo $data->P_R_D;?></th>
</tr>
<tr>
	<th>Number of Patients - Hospital 30-Day Readmission Rates from Pneumonia</th>
	<th><?php echo $data->P_R_E;?></th>
</tr>
<tr>
	<th>Footnote - Hospital 30-Day Readmission Rates from Pneumonia</th>
	<th><?php echo $data->P_R_F;?></th>
</tr>
</table>
</body>
</html>