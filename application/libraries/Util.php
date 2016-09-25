<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Util {
	
	public function convert_catagory($catagory)
	{
		switch ($catagory)
		{
			case "HA_D_A":
				return "Hospital 30-Day Death (Mortality) Rates from Heart Attack";
			case "HA_D_B":
				return "Comparison to U.S. Rate - Hospital 30-Day Death (Mortality) Rates from Heart Attack";
			case "HA_D_C":
				return "Lower Mortality Estimate - Hospital 30-Day Death (Mortality) Rates from Heart Attack";
			case "HA_D_D":
				return "Upper Mortality Estimate - Hospital 30-Day Death (Mortality) Rates from Heart Attack";
			case "HA_D_E":
				return "Number of Patients - Hospital 30-Day Death (Mortality) Rates from Heart Attack";
			case "HA_D_F":
				return "Footnote - Hospital 30-Day Death (Mortality) Rates from Heart Attack";
			case "HA_R_A":
				return "Hospital 30-Day Readmission Rates from Heart Attack";
			case "HA_R_B":
				return "Comparison to U.S. Rate - Hospital 30-Day Readmission Rates from Heart Attack";
			case "HA_R_C":
				return "Lower Readmission Estimate - Hospital 30-Day Readmission Rates from Heart Attack";
			case "HA_R_D":
				return "Upper Readmission Estimate - Hospital 30-Day Readmission Rates from Heart Attack";
			case "HA_R_E":
				return "Number of Patients - Hospital 30-Day Readmission Rates from Heart Attack";
			case "HA_R_F":
				return "Footnote - Hospital 30-Day Readmission Rates from Heart Attack";
			case "HF_D_A":
				return "Hospital 30-Day Death (Mortality) Rates from Heart Failure";
			case "HF_D_B":
				return "Comparison to U.S. Rate - Hospital 30-Day Death (Mortality) Rates from Heart Failure";
			case "HF_D_C":
				return "Lower Mortality Estimate - Hospital 30-Day Death (Mortality) Rates from Heart Failure";
			case "HF_D_D":
				return "Upper Mortality Estimate - Hospital 30-Day Death (Mortality) Rates from Heart Failure";
			case "HF_D_E":
				return "Number of Patients - Hospital 30-Day Death (Mortality) Rates from Heart Failure";
			case "HF_D_F":
				return "Footnote - Hospital 30-Day Death (Mortality) Rates from Heart Failure";
			case "HF_R_A":
				return "Hospital 30-Day Readmission Rates from Heart Failure";
			case "HF_R_B":
				return "Comparison to U.S. Rate - Hospital 30-Day Readmission Rates from Heart Failure";
			case "HF_R_C":
				return "Lower Readmission Estimate - Hospital 30-Day Readmission Rates from Heart Failure";
			case "HF_R_D":
				return "Upper Readmission Estimate - Hospital 30-Day Readmission Rates from Heart Failure";
			case "HF_R_E":
				return "Number of Patients - Hospital 30-Day Readmission Rates from Heart Failure";
			case "HF_R_F":
				return "Footnote - Hospital 30-Day Readmission Rates from Heart Failure";
			case "P_D_A":
				return "Hospital 30-Day Death (Mortality) Rates from Pneumonia";
			case "P_D_B":
				return "Comparison to U.S. Rate - Hospital 30-Day Death (Mortality) Rates from Pneumonia";
			case "P_D_C":
				return "Lower Mortality Estimate - Hospital 30-Day Death (Mortality) Rates from Pneumonia";
			case "P_D_D":
				return "Upper Mortality Estimate - Hospital 30-Day Death (Mortality) Rates from Pneumonia";
			case "P_D_E":
				return "Number of Patients - Hospital 30-Day Death (Mortality) Rates from Pneumonia";
			case "P_D_F":
				return "Footnote - Hospital 30-Day Death (Mortality) Rates from Pneumonia";
			case "P_R_A":
				return "Hospital 30-Day Readmission Rates from Pneumonia";
			case "P_R_B":
				return "Comparison to U.S. Rate - Hospital 30-Day Readmission Rates from Pneumonia";
			case "P_R_C":
				return "Lower Readmission Estimate - Hospital 30-Day Readmission Rates from Pneumonia";
			case "P_R_D":
				return "Upper Readmission Estimate - Hospital 30-Day Readmission Rates from Pneumonia";
			case "P_R_E":
				return "Number of Patients - Hospital 30-Day Readmission Rates from Pneumonia";
			case "P_R_F":
				return "Footnote - Hospital 30-Day Readmission Rates from Pneumonia";
		}
	}
	
	public function convert_comparison($comparison)
	{
		switch ($comparison)
		{
			case 0:
				return "Worse than U.S. National Rate";
			case 1:
				return "Better than U.S. National Rate";
			case 2:
				return "No Different than U.S. National Rate";
			case 3:
				return "Number of Cases Too Small";
		}
	}
}