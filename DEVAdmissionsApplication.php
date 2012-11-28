<?php
//******  DEV Version  ******//

require_once "/htdocs/cmsphp/Admin/Includes/FunctionsCommon.php";
CORE_SetSessionTimeout((60*60), 'nmugradapp');

define("Const_SelfName", "DEVAdmissionsApplication.php");
define("Const_AdmissionsAppEditLink", "https://www.nmu.edu/admissions/apply/dev_application.shtml");

session_start();
define("Const_AdmissionsApplication", "admissionsapplication");


function Main()
{
	try
	{
		if(!isset($_REQUEST[Const_Action]) && CORE_GetQueryStringVar(Const_Action) == "")
		{
			CORE_ClearSessions();
			Display_ApplicationPage1();
		}

		if(CORE_GetQueryStringVar(Const_Action) == Const_AdmissionsApplication && CORE_GetQueryStringVar(Const_Phase) == Const_Phase1)
			Display_ApplicationPage1();

		if(CORE_GetQueryStringVar(Const_Action) == Const_AdmissionsApplication && CORE_GetQueryStringVar(Const_Phase) == Const_Phase2)
			Display_ApplicationPage2();

		if(CORE_GetQueryStringVar(Const_Action) == Const_AdmissionsApplication && CORE_GetQueryStringVar(Const_Phase) == Const_Phase3)
			Display_ApplicationPage3();

		if(CORE_GetQueryStringVar(Const_Action) == Const_AdmissionsApplication && CORE_GetQueryStringVar(Const_Phase) == Const_Phase4)
			Display_ApplicationPage4();

		if(CORE_GetQueryStringVar(Const_Action) == Const_AdmissionsApplication && CORE_GetQueryStringVar(Const_Phase) == Const_Phase5)
			Display_ApplicationPage5();

		if(CORE_GetQueryStringVar(Const_Action) == Const_AdmissionsApplication && CORE_GetQueryStringVar(Const_Phase) == Const_Phase6)
			Display_ApplicationPage6();
			
		if(CORE_GetQueryStringVar(Const_Action) == Const_AdmissionsApplication && CORE_GetQueryStringVar(Const_Phase) == Const_Phase7)
			Display_ApplicationPage7();
			
		if(CORE_GetQueryStringVar(Const_Action) == Const_AdmissionsApplication && CORE_GetQueryStringVar(Const_Phase) == Const_Phase8)
			Display_ApplicationPage8();
			
		if(CORE_GetQueryStringVar(Const_Action) == Const_AdmissionsApplication && CORE_GetQueryStringVar(Const_Phase) == Const_Phase9)
			Display_ApplicationPage9();

		if(CORE_GetQueryStringVar(Const_Action) == Const_AdmissionsApplication && CORE_GetQueryStringVar(Const_Phase) == Const_Phase10)
			Display_ApplicationPage10();		

		if(isset($_REQUEST[Const_Action]))
		{
			if($_REQUEST[Const_Action] == Const_AdmissionsApplication && $_REQUEST[Const_Phase] == Const_Phase1)
				ProcessForm_Page1();

			if($_REQUEST[Const_Action] == Const_AdmissionsApplication && $_REQUEST[Const_Phase] == Const_Phase2)
				ProcessForm_Page2();

			if($_REQUEST[Const_Action] == Const_AdmissionsApplication && $_REQUEST[Const_Phase] == Const_Phase3)
				ProcessForm_Page3();

			if($_REQUEST[Const_Action] == Const_AdmissionsApplication && $_REQUEST[Const_Phase] == Const_Phase4)
				ProcessForm_Page4();
				
			if($_REQUEST[Const_Action] == Const_AdmissionsApplication && $_REQUEST[Const_Phase] == Const_Phase5)
				ProcessForm_Page5();
				
			if($_REQUEST[Const_Action] == Const_AdmissionsApplication && $_REQUEST[Const_Phase] == Const_Phase6)
				ProcessForm_Page6();
				
			if($_REQUEST[Const_Action] == Const_AdmissionsApplication && $_REQUEST[Const_Phase] == Const_Phase7)
				ProcessForm_Page7();
				
			if($_REQUEST[Const_Action] == Const_AdmissionsApplication && $_REQUEST[Const_Phase] == Const_Phase8)
				ProcessForm_Page8();
				
			if($_REQUEST[Const_Action] == Const_AdmissionsApplication && $_REQUEST[Const_Phase] == Const_Phase9)
				ProcessForm_Page9();
		}
	}
	catch (Exception $ex)
	{
		print Const_emSQLError.": <BR>".$ex->getMessage();
	}
}

//thank you page
function Display_ApplicationPage10()
{
	try
	{
		CORE_DisplayPageHead();
		$strThankYouHTMLStart = '<div style="background-color:#e5e5e5;"><div style="width:600px; margin:0 auto; padding:10px; background-color:#fff; position:relative;">';
		$strThankYouHTMLEnd = '</div></div>';
		$strThankYouBanner = '<img src="https://www.nmu.edu/applications/elements/email_header.jpg" style="width:600px; height:122px;" alt="Northern Michigan University" />';
		$strThankYouFooter = '<img src="https://www.nmu.edu/applications/elements/email_footer.jpg" style="width:600px; height:107px;" alt="Northern Michigan University" />';
		$strThankYouSocial = '<div style="position:absolute; bottom:50px; right:40px;">
								<a title="NMU on Facebook" href="http://www.facebook.com/NorthernMichiganU"><img style="border:0;width:25px;height:25px;" border="0" align="" src="http://www.nmu.edu/sites/all/themes/nmu/images/facebook.png" alt="NMU on Facebook"></a> 
								<a title="NMU on Twitter" href="http://twitter.com/NorthernMichU"><img style="border:0;width:25px;height:25px;" border="0" align="" src="http://www.nmu.edu/sites/all/themes/nmu/images/twitter.png" alt="NMU on Twitter"></a> 
								<a title="NMU on Youtube" href="http://www.youtube.com/user/NorthernMichiganU"><img style="border:0;width:25px;height:25px;" border="0" align="" src="http://www.nmu.edu/sites/all/themes/nmu/images/youtube_32x32.png" alt="NMU on YouTube"></a> 
								<a style="text-decoration:none;" rel="publisher" href="https://plus.google.com/108944201288990482543?prsrc=3"><img style="border:0;width:25px;height:25px;" alt="NMU on Google Plus" src="https://ssl.gstatic.com/images/icons/gplus-32.png"></a>
								</div>';
		$strThankYouMsg = '<p><strong>Your application to Northern Michigan University has been successfully submitted.  Thank you for your application!</strong></p>';
		$strThankYouMsg .= '<p>Please be sure to complete your application process by:</p>';
		$strThankYouMsg .= '<ul>';
		$strThankYouMsg .= '<li>Paying your $30 application fee in one of these ways:  1) pay by credit card through our <a href="https://aditweb.nmu.edu/admissions/AppFee/Student/admit_fee.php?Level=U">secure online payment form</a>; 2) mail your check or money order made payable to Northern Michigan      University to the Admissions Office at 1401 Presque Isle Ave., Marquette,      MI, 49855; 3) call us at 906-227-2650 or 1-800-682-9797 and we can take your      credit card information over the phone; <br /><br /></li>';
		$strThankYouMsg .= '<li>Requesting that your official transcripts are sent to NMU, including college work completed during high school;<br /><br /></li>';
		$strThankYouMsg .= '<li>Requesting that your official ACT/SAT scores are sent to NMU (from testing agency or on an official high school transcript) if required for your application type and program (<a href="http://www.nmu.edu/admissions/requirements">Admissions Requirements</a>)<br /><br /></li>';
		$strThankYouMsg .= '<li>Sending in any additional information you feel would give us a better understanding of you and your academic history. (Personal essay, letters of recommendation, etc. - OPTIONAL);<br /><br /></li>';
		$strThankYouMsg .= '<li>HIGH SCHOOL STUDENTS: Print out and give the <a href="http://www.nmu.edu/printableforms/admission_counselors_form.pdf" target="_blank">counselor\'s section</a> to your high school counselor to fill out and mail to Northern Michigan University (An electronic Secondary School Report-eSSR-through Parchment/Docufide or Michigan College Access Portal is also acceptable);<br /><br /></li>';
		if($_SESSION['us_citizen'] =="No")
			$strThankYouMsg .= '<li>INTERNATIONAL STUDENTS: Print the <a href="http://www.nmu.edu/admissions/certificationoffinances">Certification of Finances</a>, complete it with information and signatures, and mail as directed.  Also, please note any <a href="http://www.nmu.edu/admissions/internationalstudents">additional requirements</a>;<br /><br /></li>';
		$strThankYouMsg .= '<li><strong>For security purposes, please close this browser window when you are done.</strong></li>';
		$strThankYouMsg .= '</ul>';
		$strThankYouMsg .= '<p>We will begin processing your application on the next business day and will send you your NMU Identification Number (NMU IN) via mail.  You may check your application status at <a href="www.nmu.edu/appcheck">www.nmu.edu/appcheck</a> once you have your NMU IN. We will notify you of your admission status as soon as we have received all of the necessary information.  During peak application times, October through December, it may take us 10-14 days before these additional documents are processed.</p>';
		$strThankYouMsg .= '<p>If you have any questions, please <a href="mailto:admiss@nmu.edu">e-mail us</a> or call  us at 906-227-2650 (or 1-800-682-9797).</p>';
		$strThankYouMsg .= '<p>Thank you for your interest in <a href="http://www.nmu.edu">Northern Michigan University</a>!</p>';

		$strSubject = 'Your Northern Michigan University Admissions Application Has Been Received';
		$strSender = 'admiss@nmu.edu';
		$strReplyTo = 'admiss@nmu.edu';
		$aCCs = '';
		
		$ip = $_SERVER['REMOTE_ADDR'];
		
		//send a message to the person completing the application
		if(isset($_SESSION['contact_email']) && $_SESSION['contact_email'] != '')
		{
			$aRecipients = $_SESSION['contact_email'];
			$strEmailMsg = $strThankYouHTMLStart.$strThankYouBanner.$strThankYouMsg.$strThankYouFooter.$strThankYouSocial.$strThankYouHTMLEnd;
			
			if ($ip == "198.110.203.107") //don't send if I am testing the app	
				echo '<h3 style="color:red;">Stopping message send to: '.$_SESSION['contact_email'].'</h3>';
			else
				CORE_SendMailMsg($strSubject, $strEmailMsg, $aRecipients, $aCCs, $strSender, $strReplyTo);
		}
		/* else
		{
			$aRecipientsError = 'edesign@nmu.edu';
			
			$strThankYouError = '<strong>An e-mail confirmation for the DEV admissions application was trying to send without a contact e-mail being provided</strong><br /><br />';
			$strThankYouError .= 'submitter ip: '.$ip.'<br />';
			$strThankYouError .= 'first_name: '.$_SESSION['first_name'].'<br />';
			$strThankYouError .= 'last_name: '.$_SESSION['last_name'].'<br />';
			$strThankYouError .= 'date_of_birth: '.$_SESSION['FirstSelectMonth'].' '.$_SESSION['FirstSelectDay'].' '.$_SESSION['FirstSelectYear'].'<br />';
			$strThankYouError .= 'us_citizen: '.$_SESSION['us_citizen'];
			
			CORE_SendMailMsg($strSubject, $strThankYouError, $aRecipientsError, $aCCs, $strSender, $strReplyTo);
		}*/
			
		//print out the thank you page
		echo $strThankYouMsg;

	}
	catch (Exception $ex)
	{
		throw new Exception($ex->getMessage());
	}
}

//initals page
function Display_ApplicationPage9()
{
	try
	{
		CORE_DisplayPageHead();

		$strURL = str_replace("Admin/Components", "AdmissionsApp", CORE_GetURL(Const_RawURL, CORE_GetQueryStringVar(Const_Action), CORE_GetQueryStringVar(Const_Phase), "", CORE_GetQueryStringVar(Const_Subaction), ""));
		HTML_AddForm($strURL, "");

		print '<h3><span style="color:red;">DEV</span></h3>';
		//fill in every possible session variable for my computer to auto-generate a complete form
		$ip = $_SERVER['REMOTE_ADDR'];
		if ($ip =="198.110.203.107") 
		{
			if($_SESSION['testing_application'] != true) //this allows me to change the sample form after I load the session info the first time
			{
				$_SESSION['testing_application'] = true; $_SESSION['submitter_ip'] = '198.110.203.107'; $_SESSION['first_name'] = 'Eric'; $_SESSION['last_name'] = 'Johnson'; $_SESSION['middle_name'] = 'Scott'; $_SESSION['pref_first_name'] = 'Enrique'; $_SESSION['other_name'] = 'Gus'; $_SESSION['date_of_birth'] = 'January 1 2002'; $_SESSION['gender'] = 'Male'; $_SESSION['marital_status'] = 'Married'; $_SESSION['veteran_status'] = 'Non-Veteran'; $_SESSION['hispanic_latino'] = 'No'; $_SESSION['race'] = 'American Indian or Alaska Native, Asian, Black or African American, Native Hawaiian or Other Pacific Islander, White'; $_SESSION['native_affiliation'] = 'Apache'; $_SESSION['us_citizen'] = 'Yes'; $_SESSION['state_residence'] = 'Michigan'; $_SESSION['county_residence'] = 'Marquette'; $_SESSION['county_resident_since'] = 'January 2012'; $_SESSION['ssn'] = 'CyhcyXI6pCwrh2L6BycvwQ=='; $_SESSION['family_alum'] = 'Father'; $_SESSION['us_resident'] = 'Yes'; $_SESSION['alien_reg_number'] = '11223344'; $_SESSION['country_citizenship'] = 'Andorra'; $_SESSION['visa_type'] = 'C-4'; $_SESSION['country_residence'] = 'United States'; $_SESSION['city_country_birth'] = 'Escanaba, United States'; $_SESSION['contact_street'] = '1401 Presque Isle Ave'; $_SESSION['contact_city'] = 'Marquette'; $_SESSION['contact_state'] = 'Michigan'; $_SESSION['contact_zip'] = '49855'; $_SESSION['contact_country'] = 'United States'; $_SESSION['contact_phone'] = '906 227 2313'; $_SESSION['contact_cell_phone'] = '906 227 2720'; $_SESSION['contact_parent_phone'] = '906 227 1122'; $_SESSION['contact_email'] = 'ericjohn@nmu.edu'; $_SESSION['contact_parent_email'] = 'johns996@msu.edu'; $_SESSION['permanent_street'] = '1401 Presque Isle Ave'; $_SESSION['permanent_city'] = 'Marquette'; $_SESSION['permanent_state'] = 'Michigan'; $_SESSION['permanent_zip'] = '49855'; $_SESSION['permanent_country'] = 'United States'; $_SESSION['permanent_phone'] = '906 227 2313'; $_SESSION['er_first_name'] = 'Owen'; $_SESSION['er_last_name'] = 'Johnson'; $_SESSION['er_street'] = '600 High St.'; $_SESSION['er_city'] = 'Marquette'; $_SESSION['er_state'] = 'Michigan'; $_SESSION['er_zip'] = '49855'; $_SESSION['er_country'] = 'United States'; $_SESSION['er_phone'] = '906 227 1031'; $_SESSION['er_relationship'] = 'Other Son'; $_SESSION['hs_degree'] = 'Diploma'; $_SESSION['hs_degree_earned'] = 'July 2014'; $_SESSION['high_school_expected_grad_date'] = ' '; $_SESSION['high_school_name_1'] = 'Escanaba Sr. High'; $_SESSION['high_school_city_1'] = 'Escanaba'; $_SESSION['high_school_state_1'] = 'Michigan'; $_SESSION['high_school_zip_1'] = '49829'; $_SESSION['high_school_country_1'] = 'United States'; $_SESSION['high_school_from_1'] = 'February 2013'; $_SESSION['high_school_thru_1'] = 'January 2014'; $_SESSION['high_school_credit_1'] = '123'; $_SESSION['high_school_degree_1'] = 'Diploma'; $_SESSION['high_school_name_2'] = 'Gladstone Sr. High'; $_SESSION['high_school_city_2'] = 'Gladstone'; $_SESSION['high_school_state_2'] = 'Michigan'; $_SESSION['high_school_zip_2'] = '49828'; $_SESSION['high_school_country_2'] = 'United States'; $_SESSION['high_school_from_2'] = 'February 2012'; $_SESSION['high_school_thru_2'] = 'January 2013'; $_SESSION['high_school_credit_2'] = '234'; $_SESSION['high_school_degree_2'] = 'Super Diploma'; $_SESSION['high_school_name_3'] = 'Marquette Sr. High'; $_SESSION['high_school_city_3'] = 'Marquette'; $_SESSION['high_school_state_3'] = 'Michigan'; $_SESSION['high_school_zip_3'] = '49855'; $_SESSION['high_school_country_3'] = 'United States'; $_SESSION['high_school_from_3'] = 'February 2011'; $_SESSION['high_school_thru_3'] = 'January 2012'; $_SESSION['high_school_credit_3'] = '456'; $_SESSION['high_school_degree_3'] = 'Certification'; $_SESSION['additional_hs'] = 'I also attended West Point High School for future rulers of the world.'; $_SESSION['take_act'] = 'Yes'; $_SESSION['act_score'] = '35'; $_SESSION['act_taken'] = 'April 1992'; $_SESSION['act_taken_again'] = 'February 2017'; $_SESSION['act_taken_first'] = ' '; $_SESSION['take_sat'] = 'Yes'; $_SESSION['sat_score'] = '1800'; $_SESSION['sat_taken'] = 'October 1998'; $_SESSION['sat_date_again'] = 'January 2016'; $_SESSION['sat_date_first'] = ' '; $_SESSION['transfer_student'] = 'Yes'; $_SESSION['college_name_1'] = 'Michigan State University'; $_SESSION['college_city_1'] = 'East Lansing '; $_SESSION['college_state_1'] = 'Michigan'; $_SESSION['college_zip_1'] = '49552'; $_SESSION['college_country_1'] = 'United States'; $_SESSION['college_from_1'] = 'April 2011'; $_SESSION['college_thru_1'] = 'April 2009'; $_SESSION['college_credit_1'] = '156'; $_SESSION['college_degree_attained_1'] = 'PhD.'; $_SESSION['college_degree_attained_date_1'] = 'March 2009'; $_SESSION['college_name_2'] = 'Northwestern University'; $_SESSION['college_city_2'] = 'Evanston '; $_SESSION['college_state_2'] = 'Illinois'; $_SESSION['college_zip_2'] = '55626'; $_SESSION['college_country_2'] = 'United States'; $_SESSION['college_from_2'] = 'March 2006'; $_SESSION['college_thru_2'] = 'June 1987'; $_SESSION['college_credit_2'] = '65'; $_SESSION['college_degree_attained_2'] = 'Master\'s'; $_SESSION['college_degree_attained_date_2'] = 'January 2011'; $_SESSION['college_name_3'] = 'University of Wisconsin'; $_SESSION['college_city_3'] = 'Madison'; $_SESSION['college_state_3'] = 'Wisconsin'; $_SESSION['college_zip_3'] = '26898'; $_SESSION['college_country_3'] = 'United States'; $_SESSION['college_from_3'] = 'June 2010'; $_SESSION['college_thru_3'] = 'March 2012'; $_SESSION['college_credit_3'] = '55'; $_SESSION['college_degree_attained_3'] = 'Certificate'; $_SESSION['college_degree_attained_date_3'] = 'January 2012'; $_SESSION['additional_college'] = 'I also attended Northern Michigan University. See below for a reason why I no longer attend.'; $_SESSION['suspended'] = 'Yes'; $_SESSION['suspended_when'] = 'January 2009'; $_SESSION['suspended_school'] = 'Northern Michigan University'; $_SESSION['suspended_explain'] = 'It was determined that I was not entirely human origin and therefore could not attend. '; $_SESSION['course_type_1'] = 'High School'; $_SESSION['course_name_1'] = 'Super Powers and You'; $_SESSION['course_number_1'] = ''; $_SESSION['course_credits_1'] = ''; $_SESSION['course_term_1'] = 'Fall 2012'; $_SESSION['course_type_2'] = 'High School'; $_SESSION['course_name_2'] = 'Underwater Sword Fighting'; $_SESSION['course_number_2'] = ''; $_SESSION['course_credits_2'] = ''; $_SESSION['course_term_2'] = 'Spring 2011'; $_SESSION['course_type_3'] = 'College'; $_SESSION['course_name_3'] = 'Art History'; $_SESSION['course_number_3'] = 'AH 400'; $_SESSION['course_credits_3'] = '4'; $_SESSION['course_term_3'] = 'Winter 2001'; $_SESSION['course_type_4'] = 'College'; $_SESSION['course_name_4'] = 'Modern Dance'; $_SESSION['course_number_4'] = 'PEF 560'; $_SESSION['course_credits_4'] = '2'; $_SESSION['course_term_4'] = 'Winter 2001'; $_SESSION['course_type_5'] = 'College'; $_SESSION['course_name_5'] = 'Minecraft'; $_SESSION['course_number_5'] = 'MTH 101'; $_SESSION['course_credits_5'] = '4'; $_SESSION['course_term_5'] = 'Winter 2002'; $_SESSION['course_type_6'] = 'High School'; $_SESSION['course_name_6'] = 'Football Practice'; $_SESSION['course_number_6'] = ''; $_SESSION['course_credits_6'] = ''; $_SESSION['course_term_6'] = 'Fall 2002'; $_SESSION['course_type_7'] = 'College'; $_SESSION['course_name_7'] = 'MS Excel - Advanced'; $_SESSION['course_number_7'] = 'CS 422'; $_SESSION['course_credits_7'] = '6'; $_SESSION['course_term_7'] = 'Fall 2012'; $_SESSION['additional_course'] = 'I am also enrolled in an advanced internet use course.'; $_SESSION['non_us_school'] = 'Yes'; $_SESSION['credit_eval_agency'] = 'ECE'; $_SESSION['credit_eval_date'] = 'March 2011'; $_SESSION['enrollment_date'] = 'Fall 2016'; $_SESSION['pursue_nondegree'] = 'No'; $_SESSION['cert_type'] = 'Certificate'; $_SESSION['program'] = 'Automotive Service'; $_SESSION['minor'] = 'Welding'; $_SESSION['teaching_cert'] = 'Yes'; $_SESSION['teaching_cert_level'] = 'Elementary'; $_SESSION['comments'] = 'Could you please mail me my degree ASAP.'; $_SESSION['initials'] = 'esj'; $_SESSION['race1'] = 'American Indian or Alaska Native'; $_SESSION['race2'] = 'Asian'; $_SESSION['race3'] = 'Black or African American'; $_SESSION['race4'] = 'Native Hawaiian or Other Pacific Islander'; $_SESSION['race5'] = 'White'; $_SESSION['action'] = 'admissionsapplication'; $_SESSION['phase'] = 'phase8'; $_SESSION['subaction'] = 'quickEdit'; $_SESSION['FirstSelectMonth'] = 'February'; $_SESSION['FirstSelectDay'] = '2'; $_SESSION['FirstSelectYear'] = '2000'; $_SESSION['hisp_lat'] = 'Yes'; $_SESSION['learn_advertising'] = 'Advertising'; $_SESSION['learn_edu_fair'] = 'Education Fair'; $_SESSION['learn_internet'] = 'Internet Search'; $_SESSION['learn_referral'] = 'Personal Referral'; $_SESSION['learn_other'] = 'Other'; $_SESSION['state_1'] = 'Michigan'; $_SESSION['county_resident_since_month'] = 'February'; $_SESSION['county_resident_since_year'] = '2012'; $_SESSION['ssn_1'] = '111'; $_SESSION['ssn_2'] = '22'; $_SESSION['ssn_3'] = '3333'; $_SESSION['contact_phone_1'] = '111'; $_SESSION['contact_phone_2'] = '222'; $_SESSION['contact_phone_3'] = '3333'; $_SESSION['contact_cell_phone_1'] = '333'; $_SESSION['contact_cell_phone_2'] = '444'; $_SESSION['contact_cell_phone_3'] = '5555'; $_SESSION['contact_parent_phone_1'] = '777'; $_SESSION['contact_parent_phone_2'] = '888'; $_SESSION['contact_parent_phone_3'] = '9999'; $_SESSION['state_2'] = 'Michigan'; $_SESSION['permanent_check'] = 'Yes'; $_SESSION['permanent_phone_1'] = '111'; $_SESSION['permanent_phone_2'] = '222'; $_SESSION['permanent_phone_3'] = '3333'; $_SESSION['state_3'] = 'Michigan'; $_SESSION['state_4'] = 'Michigan'; $_SESSION['er_phone_1'] = '555'; $_SESSION['er_phone_2'] = '666'; $_SESSION['er_phone_3'] = '8899'; $_SESSION['er_relationship_other'] = 'Brother'; $_SESSION['earned'] = 'Diploma'; $_SESSION['date_earned_month'] = 'February'; $_SESSION['date_earned_year'] = '2013'; $_SESSION['high_school_from_1mo'] = 'February'; $_SESSION['high_school_from_1yr'] = '2010'; $_SESSION['high_school_thru_1mo'] = 'May'; $_SESSION['high_school_thru_1yr'] = '1945'; $_SESSION['hs1'] = 'No'; $_SESSION['high_school_from_2mo'] = 'February'; $_SESSION['high_school_from_2yr'] = '2010'; $_SESSION['high_school_thru_2mo'] = 'June'; $_SESSION['high_school_thru_2yr'] = '1998'; $_SESSION['hs2'] = 'No'; $_SESSION['high_school_from_3mo'] = 'March'; $_SESSION['high_school_from_3yr'] = '1995'; $_SESSION['high_school_thru_3mo'] = 'June'; $_SESSION['high_school_thru_3yr'] = '1994'; $_SESSION['hs3'] = 'No'; $_SESSION['act_taken_month'] = 'March'; $_SESSION['act_taken_year'] = '2009'; $_SESSION['act_taken_again_month'] = 'February'; $_SESSION['act_taken_again_year'] = '2013'; $_SESSION['act_taken_first_month'] = 'May'; $_SESSION['act_taken_first_year'] = '1996'; $_SESSION['sat_date_month'] = 'March'; $_SESSION['sat_date_year'] = '2005'; $_SESSION['sat_date_again_month'] = 'June'; $_SESSION['sat_date_again_year'] = '2014'; $_SESSION['sat_date_first_month'] = 'June'; $_SESSION['sat_date_first_year'] = '1996'; $_SESSION['col0'] = 'Yes'; $_SESSION['attended_from_mo_1'] = 'March'; $_SESSION['attended_from_yr_1'] = '2007'; $_SESSION['attended_to_mo_1'] = 'March'; $_SESSION['attended_to_yr_1'] = '2003'; $_SESSION['college_degree_attained_mo_1'] = 'May'; $_SESSION['college_degree_attained_yr_1'] = '1998'; $_SESSION['col1'] = 'Yes'; $_SESSION['attended_from_mo_2'] = 'July'; $_SESSION['attended_from_yr_2'] = '1997'; $_SESSION['attended_to_mo_2'] = 'July'; $_SESSION['attended_to_yr_2'] = '2001'; $_SESSION['college_degree_attained_mo_2'] = 'June'; $_SESSION['college_degree_attained_yr_2'] = '2001'; $_SESSION['col2'] = 'Yes'; $_SESSION['attended_from_mo_3'] = 'August'; $_SESSION['attended_from_yr_3'] = '1997'; $_SESSION['attended_to_mo_3'] = 'August'; $_SESSION['attended_to_yr_3'] = '1993'; $_SESSION['college_degree_attained_mo_3'] = 'April'; $_SESSION['college_degree_attained_yr_3'] = '2009'; $_SESSION['col3'] = 'Yes'; $_SESSION['suspended_when_month'] = 'August'; $_SESSION['suspended_when_year'] = '2000'; $_SESSION['select_1'] = 'High School'; $_SESSION['select_2'] = 'High School'; $_SESSION['select_3'] = 'College'; $_SESSION['select_4'] = 'College'; $_SESSION['select_5'] = 'College'; $_SESSION['select_6'] = 'College'; $_SESSION['select_7'] = 'College'; $_SESSION['credit_eval_month'] = 'April'; $_SESSION['credit_eval_year'] = '2004'; $_SESSION['cert'] = 'Associate'; $_SESSION['ifnot_willyou'] = 'Yes'; $_SESSION['which_one'] = 'GED'; $_SESSION['expected_grad_date_month'] = 'April'; $_SESSION['expected_grad_date_year'] = '2006'; $_SESSION['alien_date_month'] = 'August'; $_SESSION['alien_date_year'] = '1997'; $_SESSION['country_resident_since_month'] = 'August'; $_SESSION['country_resident_since_year'] = '2003'; $_SESSION['learn_other_text'] = 'Voices in my head'; $_SESSION['undocumented'] = 'Yes';
			}
		}
		
		//styles
		print '<link href="elements/application.css" rel="stylesheet" type="text/css" />';

		//display all entered content
		print '<div align="right" style="float:right;"><input type="button" value=" Print this page " class="PrintHide" onclick="window.print();return false;" /></div>';
		print '<p><span class="SectionText">Please review your application below.  You can make any necessary changes by clicking on the edit button next to each page section.</span></p>';

//page 1
print '<h3>Personal Information <a class="EditLink" href="'.Const_AdmissionsAppEditLink.'?page=&action=admissionsapplication&phase=phase1&elementid=&subaction=quickEdit">Edit</a></h3>
<p>	<strong>Name:</strong>  '.$_SESSION['first_name'].' '.$_SESSION['middle_name'].'   '.$_SESSION['last_name'].'<br>
	<strong>Preferred first name:</strong> '.$_SESSION['pref_first_name'].'<br />
	<strong>Maiden/previous name:</strong> '.$_SESSION['other_name'].'</p>
<p><strong>Date of birth:</strong>	'.$_SESSION['FirstSelectMonth'].' 
	'.$_SESSION['FirstSelectDay'].'  
	'.$_SESSION['FirstSelectYear'].'<br />
	<strong>Gender: </strong>'.$_SESSION['gender'].'<br />
	<strong>Marital status:</strong> '.$_SESSION['marital_status'].'<br />
	<strong>Veteran status:</strong> '.$_SESSION['veteran_status'].'<br />
	<strong>Hispanic/Latino:</strong> '.$_SESSION['hisp_lat'].'<br />
	
	<strong>Racial Categories: </strong>';
	$arrRaceCats = array();
	(isset($_SESSION['race1']) && $_SESSION['race1'] != '' ? $arrRaceCats[] = $_SESSION['race1'] : false);
	(isset($_SESSION['race2']) && $_SESSION['race2'] != '' ? $arrRaceCats[] = $_SESSION['race2'] : false);
	(isset($_SESSION['race3']) && $_SESSION['race3'] != '' ? $arrRaceCats[] = $_SESSION['race3'] : false);
	(isset($_SESSION['race4']) && $_SESSION['race4'] != '' ? $arrRaceCats[] = $_SESSION['race4'] : false);
	(isset($_SESSION['race5']) && $_SESSION['race5'] != '' ? $arrRaceCats[] = $_SESSION['race5'] : false);
	print implode(", ", $arrRaceCats);
	print '<br />';
	 if($_SESSION['native_affiliation'] != '') print '<strong>Native Affiliation:</strong> '.$_SESSION['native_affiliation'].'<br />';
	print '<br />
	
	<strong>Are you a US citizen:</strong> '.$_SESSION['us_citizen'].'</p>';

//page 2
print '<h3>Where you are from <a class="EditLink" href="'.Const_AdmissionsAppEditLink.'?page=&action=admissionsapplication&phase=phase2&elementid=&subaction=quickEdit">Edit</a></h3>';
if($_SESSION['us_citizen']=="Yes")
{
		print 	'<p><strong>State of legal residence:</strong> '.$_SESSION['state_1'].'<br />
				<strong>County of residence: </strong>'.$_SESSION['county_residence'].'<br />
				<strong>Country of legal residence:</strong> '.$_SESSION['country_residence'].'<br />
				<strong>Resident since:</strong> '.$_SESSION['county_resident_since_month'].' '.$_SESSION['county_resident_since_year'].'<br />
				<strong>Social security number:</strong> ***-**-'.$_SESSION['ssn_3'].'<br />';	
} 
elseif ($_SESSION['us_citizen']=="No")
{
	print '<p><strong>Are you a US resident: </strong>'.$_SESSION['us_resident'].'<br /></p>';
	print '<p>';
	if($_SESSION['us_resident']=="Yes")
	{
		print  '<strong>Permanent resident card number: </strong>A '.$_SESSION['alien_reg_number'].'<br />
				<strong>Date issued: </strong>'.$_SESSION['alien_date_month'].' '.$_SESSION['alien_date_year'].'<br />
				<strong>Social security number:</strong> ***-**-'.$_SESSION['ssn_3'].'<br />';
	}
	else
	{
		print '<strong>Undocumented status: </strong>'.$_SESSION['undocumented'].'<br />';
	}
	print '<strong>Country of citizenship:</strong> '.$_SESSION['country_citizenship'].'<br />';
		   if($_SESSION['undocumented']!="Yes")
		   {
			   print '<strong>Visa type:</strong> '.$_SESSION['visa_type'].'<br />';
		   }
		   print  '<strong>Country of legal residence:</strong> '.$_SESSION['country_residence'].'<br />';
		   if($_SESSION['country_resident_since_year']!="")
		   {
		   		print '<strong>Since: </strong>'.$_SESSION['country_resident_since_month'].' '.$_SESSION['country_resident_since_year'].'<br />';
		   }
		   print '<strong>City and country of birth:</strong> '.$_SESSION['city_country_birth'].'<br />';
}
if ($_SESSION['family_alum']!="")
{
	print '<strong>Are you a dependent of an NMU graduate:</strong> '.$_SESSION['family_alum'].'<br />';
}
print '</p>';

print '<p><strong>How did you learn about NMU:</strong> ';
$arrLearnMethods = array();
(isset($_SESSION['learn_advertising']) && $_SESSION['learn_advertising'] != '' ? $arrLearnMethods[] = $_SESSION['learn_advertising'] : false);
(isset($_SESSION['learn_edu_fair']) && $_SESSION['learn_edu_fair'] != '' ? $arrLearnMethods[] = $_SESSION['learn_edu_fair'] : false);
(isset($_SESSION['learn_internet']) && $_SESSION['learn_internet'] != '' ? $arrLearnMethods[] = $_SESSION['learn_internet'] : false);
(isset($_SESSION['learn_referral']) && $_SESSION['learn_referral'] != '' ? $arrLearnMethods[] = $_SESSION['learn_referral'] : false);
(isset($_SESSION['learn_other']) && $_SESSION['learn_other'] != '' ? $arrLearnMethods[] = $_SESSION['learn_other'] : false);
print implode(", ", $arrLearnMethods);

(isset($_SESSION['learn_other_text']) && $_SESSION['learn_other_text'] != '' ? print '<br /><strong>Other:</strong> '.$_SESSION['learn_other_text'] : false);

//page 3
print '<h3>Contact information <a class="EditLink" href="'.Const_AdmissionsAppEditLink.'?page=&action=admissionsapplication&phase=phase3&elementid=&subaction=quickEdit">Edit</a></h3>
<table border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td><strong>Address:</strong>&nbsp;</td>
		<td>'.$_SESSION['contact_street'].'</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>'.$_SESSION['contact_city'].' '.$_SESSION['state_2'].' '.$_SESSION['contact_zip'].'</td>
	</tr>';
	if($_SESSION['contact_country'] != "")
	print '<tr>
		<td>&nbsp;</td>
		<td>'.$_SESSION['contact_country'].'</td>
	</tr>';
print '</table>';

if($_SESSION['us_citizen'] =='No' && $_SESSION['us_resident'] =='No')
{
	$strPhoneNumber = ($_SESSION['contact_phone']);
	$strPhoneNumberCell = ($_SESSION['contact_cell_phone']);
	$strPhoneNumberParent = ($_SESSION['contact_parent_phone']);
}
else
{
	$strPhoneNumber = ($_SESSION['contact_phone_1'].'-'.$_SESSION['contact_phone_2'].'-'.$_SESSION['contact_phone_3']);
	$strPhoneNumberCell = ($_SESSION['contact_cell_phone_1'].'-'.$_SESSION['contact_cell_phone_2'].'-'.$_SESSION['contact_cell_phone_3']);
	$strPhoneNumberParent = ($_SESSION['contact_parent_phone_1'].'-'.$_SESSION['contact_parent_phone_2'].'-'.$_SESSION['contact_parent_phone_3']);
}
print '<p><strong>Phone:</strong> '.$strPhoneNumber.'<br />';
print '<strong>Cell Phone:</strong> '.$strPhoneNumberCell.'<br />';
print '<strong>Parent Phone:</strong> '.$strPhoneNumberParent.'</p>';


print'<p><strong>Applicant\'s E-mail: </strong>'.$_SESSION['contact_email'].'<br />
		<strong>Parent\'s E-mail: </strong>'.$_SESSION['contact_parent_email'].'<br />
		<strong>Is this your permanent address:</strong> '.$_SESSION['permanent_check'].'<br />
		</p>';
if ($_SESSION['permanent_check']=="No"){
	print '<table border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td><strong>Permanent address:&nbsp;</strong></td>
		<td>'.$_SESSION['permanent_street'].'</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>'.$_SESSION['permanent_city'].' '.$_SESSION['state_3'].' '.$_SESSION['permanent_zip'].'</td>
	</tr>';
	if($_SESSION['permanent_country'] != "")
	print '<tr>
		<td>&nbsp;</td>
		<td>'.$_SESSION['permanent_country'].'</td>
	</tr>';
	print '</table>';
	
	if($_SESSION['us_citizen'] =='No' && $_SESSION['us_resident'] =='No')
		$PhoneNumberP = ($_SESSION['permanent_phone']);
	else
		$PhoneNumberP = ($_SESSION['permanent_phone_1'].'-'.$_SESSION['permanent_phone_2'].'-'.$_SESSION['permanent_phone_3']);
	
	print '<p><strong>Permanent phone:</strong> '.$PhoneNumberP.'<br />
	</p>';
}
print '<p><strong>Emergency contact:</strong> '.$_SESSION['er_first_name'].' '.$_SESSION['er_last_name'].'</p>
<table border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td><strong>Emergency contact address:&nbsp;</strong></td>
		<td>'.$_SESSION['er_street'].'</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>'.$_SESSION['er_city'].' '.$_SESSION['state_4'].' '.$_SESSION['er_zip'].'</td>
	</tr>';
	if($_SESSION['er_country'] != "")
	print '<tr>
		<td>&nbsp;</td>

		<td>'.$_SESSION['er_country'].'</td>
	</tr>';
print '</table>';

if($_SESSION['us_citizen'] =='No' && $_SESSION['us_resident'] =='No')
	$PhoneNumberE = ($_SESSION['er_phone']);
else
	$PhoneNumberE = ($_SESSION['er_phone_1'].'-'.$_SESSION['er_phone_2'].'-'.$_SESSION['er_phone_3']);

print '<p>	<strong>Emergency contact phone:</strong> '.$PhoneNumberE.'<br>
	<strong>Emergency contact relationship to you:</strong> '.$_SESSION['er_relationship'].'<br />';
if ($_SESSION['er_relationship']=="Other"){
	print '<strong>Emergency contact other information:</strong> '.$_SESSION['er_relationship_other'].'<br />';
}
print '</p>';

//page 4
if($_SESSION['us_citizen']=='Yes' || $_SESSION['us_resident']=='Yes' )
{
	$HSNameconv = 'High school';
	$HSNameconvLower = 'high school';
} 
else 
{
	$HSNameconv = 'Secondary school';
	$HSNameconvLower = 'secondary school';
}

print '<h3>'.$HSNameconv.' information <a class="EditLink" href="'.Const_AdmissionsAppEditLink.'?page=&action=admissionsapplication&phase=phase4&elementid=&subaction=quickEdit">Edit</a></h3>';

if($_SESSION['us_citizen']=='Yes' || $_SESSION['us_resident']=='Yes' )
{
	print '<p>	<strong>Have you earned a diploma or GED:</strong> '.$_SESSION['earned'].'<br />';
	if ($_SESSION['earned']!="Neither")
	{
		print '<strong>Date earned:</strong> '.$_SESSION['date_earned_month'].' '.$_SESSION['date_earned_year'].'<br />';
	}
	elseif ($_SESSION['earned']=="Neither")
	{
		print '<strong>Will you earn a diploma or GED before enrolling at NMU:</strong> '.$_SESSION['ifnot_willyou'].'<br />
		<strong>Which one:</strong> '.$_SESSION['which_one'].'<br />
		<strong>When:</strong> '.$_SESSION['expected_grad_date_month'].' '.$_SESSION['expected_grad_date_year'].'<br />';
	}
	print '</p>';
}

print '<p><strong>'.$HSNameconv.' name:</strong> '.$_SESSION['high_school_name_1'].'<br />
	<strong>'.$HSNameconv.' location:</strong> '.$_SESSION['high_school_city_1'].'  '.$_SESSION['high_school_state_1'].'  '.$_SESSION['high_school_zip_1'].' '.$_SESSION['high_school_country_1'].'<br />
	<strong>'.$HSNameconv.' dates attended:</strong> '.$_SESSION['high_school_from_1mo'].' '.$_SESSION['high_school_from_1yr'].' through '.$_SESSION['high_school_thru_1mo'].' '.$_SESSION['high_school_thru_1yr'].'<br />
	<strong>'.$HSNameconv.' credits earned: </strong>'.$_SESSION['high_school_credit_1'].'<br />
	<strong>'.$HSNameconv.' credential earned: </strong>'.$_SESSION['high_school_degree_1'].'<br />
	<strong>Did you attend more than one '.$HSNameconvLower.':</strong> '.$_SESSION['hs1'].'</p>';
if ($_SESSION['hs1']=="Yes"){
	print '<p>	<strong>'.$HSNameconv.' name: </strong>'.$_SESSION['high_school_name_2'].'<br />
	<strong>'.$HSNameconv.' location: </strong>'.$_SESSION['high_school_city_2'].'  '.$_SESSION['high_school_state_2'].'  '.$_SESSION['high_school_zip_2'].' '.$_SESSION['high_school_country_2'].'<br />
	<strong>'.$HSNameconv.' dates attended:</strong> '.$_SESSION['high_school_from_2mo'].' '.$_SESSION['high_school_from_2yr'].' through '.$_SESSION['high_school_thru_2mo'].' '.$_SESSION['high_school_thru_2yr'].'<br />
	<strong>'.$HSNameconv.' credits earned: </strong>'.$_SESSION['high_school_credit_2'].'<br />
	<strong>'.$HSNameconv.' credential earned: </strong>'.$_SESSION['high_school_degree_2'].'<br />
	<strong>Did you attend more than two '.$HSNameconvLower.'s: </strong>'.$_SESSION['hs2'].'<br /></p>';
}
if ($_SESSION['hs2']=="Yes"){
	print '<p><strong>'.$HSNameconv.' name: </strong>'.$_SESSION['high_school_name_3'].'<br />
	<strong>'.$HSNameconv.' location: </strong>'.$_SESSION['high_school_city_3'].'  '.$_SESSION['high_school_state_3'].'  '.$_SESSION['high_school_zip_3'].' '.$_SESSION['high_school_country_3'].'<br />
	<strong>'.$HSNameconv.' dates attended:</strong> '.$_SESSION['high_school_from_3mo'].' '.$_SESSION['high_school_from_3yr'].' through '.$_SESSION['high_school_thru_3mo'].' '.$_SESSION['high_school_thru_3yr'].'<br />
	<strong>'.$HSNameconv.' credits earned: </strong>'.$_SESSION['high_school_credit_3'].'<br />
	<strong>'.$HSNameconv.' credential earned: </strong>'.$_SESSION['high_school_degree_3'].'<br />
	<strong>Did you attend more than three '.$HSNameconvLower.'s: </strong>'.$_SESSION['hs3'].'<br /></p>';
}
if ($_SESSION['hs3']=="Yes"){
	print '<p><strong>Additional '.$HSNameconvLower.' information: </strong>'.$_SESSION['additional_hs'].'<br /></p>';
}

//page 5
print '<h3>Test information <a class="EditLink" href="'.Const_AdmissionsAppEditLink.'?page=&action=admissionsapplication&phase=phase5&elementid=&subaction=quickEdit">Edit</a></h3>
<p><strong>Have you taken the ACT: </strong>'.$_SESSION['take_act'].'<br />';
if($_SESSION['take_act']=='Yes')
{
	print' <strong>Your highest ACT Composite Score: </strong>'.$_SESSION['act_score'].'<br />
	<strong>Date achieved: </strong>'.$_SESSION['act_taken_month'].' '.$_SESSION['act_taken_year'].'<br />';
}
if($_SESSION['act_taken_again_month']!='' && $_SESSION['act_taken_again_month']!='')
	print '<strong>Date you plan on taking the ACT again: </strong>'.$_SESSION['act_taken_again_month'].' '.$_SESSION['act_taken_again_year'].'</p>';
elseif($_SESSION['take_act']=='No')
	if($_SESSION['act_taken_first_month']!='' && $_SESSION['act_taken_first_year']!='')
		print'<strong>Date you plan on taking the ACT: </strong>'.$_SESSION['act_taken_first_month'].' '.$_SESSION['act_taken_first_year'].'</p>';
	
print'<p><strong>Have you taken the SAT: </strong>'.$_SESSION['take_sat'].'<br />';
if($_SESSION['take_sat']=='Yes')
{
	print'<strong>Your highest combined Critical Reading/Math score from one test date: </strong>'.$_SESSION['sat_score'].'<br />
	<strong>Date achieved: </strong>'.$_SESSION['sat_date_month'].' '.$_SESSION['sat_date_year'].'<br />';
}
if($_SESSION['sat_date_again_month']!='' && $_SESSION['sat_date_again_year']!='')
	print'<strong>Date you plan on taking the SAT again: </strong>'.$_SESSION['sat_date_again_month'].' '.$_SESSION['sat_date_again_year'].'</p>';
elseif($_SESSION['take_sat']=='No')
	if($_SESSION['sat_date_first_month']!='' && $_SESSION['sat_date_first_year']!='')
		print'<strong>Date you plan on taking the SAT: </strong>'.$_SESSION['sat_date_first_month'].' '.$_SESSION['sat_date_first_year'].'</p>';

if ($_SESSION['us_citizen']!="Yes" && $_SESSION['us_resident'] != 'Yes')
{
	print '<p><strong>Have you taken an English proficiency	test: </strong>'.$_SESSION['english_prof'].'<br />
	<strong>English proficiency	test: </strong>'.$_SESSION['english_prof_test'].'<br />
	<strong>Date taken or date you will take the test: </strong>'.$_SESSION['english_prof_date_month'].' '.$_SESSION['english_prof_date_year'].'<br />
	</p>';
}

//page 6
if($_SESSION['us_citizen']=="No" && $_SESSION['us_resident'] == 'No')
{
	$NamingConv = "Institution";
	$NamingConvTwo = "a post-secondary institution";
	$NamingConvThree = "secondary school";
}else
{
	$NamingConv = "College";
	$NamingConvTwo = "college";
	$NamingConvThree = "high school";
}
print '<h3>'.$NamingConv.' information <a class="EditLink" href="'.Const_AdmissionsAppEditLink.'?page=&action=admissionsapplication&phase=phase6&elementid=&subaction=quickEdit">Edit</a></h3>
<p>	<strong>Have you attended '.$NamingConvTwo.': </strong>'.$_SESSION['col0'].'</p>';
if ($_SESSION['col0']=="Yes"){
	print '<p>
		<strong>Have you taken college courses after completing '.$NamingConvThree.':</strong> '.$_SESSION['transfer_student'].'<br />
		<strong>'.$NamingConv.' Name:</strong> '.$_SESSION['college_name_1'].'<br />
		<strong>'.$NamingConv.' information: </strong>'.$_SESSION['college_city_1'].'  '.$_SESSION['college_state_1'].' '.$_SESSION['college_zip_1'].' '.$_SESSION['college_country_1'].'<br />
		<strong>Dates attended: </strong>'.$_SESSION['attended_from_mo_1'].' '.$_SESSION['attended_from_yr_1'].' through '.$_SESSION['attended_to_mo_1'].' '.$_SESSION['attended_to_yr_1'].'<br />
		<strong>Credits earned: </strong>'.$_SESSION['college_credit_1'].'<br />
		<strong>Credential attained: </strong>'.$_SESSION['college_degree_attained_1'].'<br />
		<strong>Date credential attained: </strong>'.$_SESSION['college_degree_attained_mo_1'].' '.$_SESSION['college_degree_attained_yr_1'].'<br />
		<strong>Did you attend more than one '.$NamingConv.': </strong>'.$_SESSION['col1'].'<br />
	</p>';
}
if ($_SESSION['col1']=="Yes"){
	print '<p>
		<strong>'.$NamingConv.' name: </strong>'.$_SESSION['college_name_2'].'<br />
		<strong>'.$NamingConv.' information: </strong>'.$_SESSION['college_city_2'].'  '.$_SESSION['college_state_2'].' '.$_SESSION['college_zip_2'].' '.$_SESSION['college_country_2'].'<br />
		<strong>Dates attended: </strong>'.$_SESSION['attended_from_mo_2'].' '.$_SESSION['attended_from_yr_2'].' through '.$_SESSION['attended_to_mo_2'].' '.$_SESSION['attended_to_yr_2'].'<br />
		<strong>Credits earned: </strong>'.$_SESSION['college_credit_2'].'<br />
		<strong>Credential attained: </strong>'.$_SESSION['college_degree_attained_2'].'<br />
		<strong>Date credential attained: </strong>'.$_SESSION['college_degree_attained_mo_2'].' '.$_SESSION['college_degree_attained_yr_2'].'<br />
		<strong>Did you attend more than two '.$NamingConv.'s: </strong>'.$_SESSION['col2'].'<br />
	</p>';
}
if ($_SESSION['col2']=="Yes"){
	print '<p>
		<strong>'.$NamingConv.' name: </strong>'.$_SESSION['college_name_3'].'<br />
		<strong>'.$NamingConv.' information: </strong>'.$_SESSION['college_city_3'].' '.$_SESSION['college_state_3'].' '.$_SESSION['college_zip_3'].' '.$_SESSION['college_country_3'].'<br />
		<strong>Dates attended: </strong>'.$_SESSION['attended_from_mo_3'].' '.$_SESSION['attended_from_yr_3'].' through '.$_SESSION['attended_to_mo_3'].' '.$_SESSION['attended_to_yr_3'].'<br />
		<strong>Credits earned: </strong>'.$_SESSION['college_credit_3'].'<br />
		<strong>Credential attained:</strong> '.$_SESSION['college_degree_attained_3'].'<br />
		<strong>Date credential attained: </strong>'.$_SESSION['college_degree_attained_mo_3'].' '.$_SESSION['college_degree_attained_yr_3'].'<br />
		<strong>Did you attend more than three '.$NamingConv.'s:</strong> '.$_SESSION['col3'].'<br />
	</p>';
}
if ($_SESSION['col3']=="Yes"){
	print '<p>
	<strong>Additional '.$NamingConv.' information: </strong>'.$_SESSION['additional_college'].'<br />
	</p>';
}
if(isset($_SESSION['esl']))
	print '<p><strong>Are you currently enrolled in an ESL program: </strong>'.$_SESSION['esl'].'</p>';
print '<p><strong>Have you ever been suspended or dismissed from any college or university: </strong>'.$_SESSION['suspended'].'<br />';


if ($_SESSION['suspended']=="Yes"){
	print '<strong>When:</strong> '.$_SESSION['suspended_when_month'].' '.$_SESSION['suspended_when_year'].'<br />
	<strong>What school:</strong> '.$_SESSION['suspended_school'].'<br />
	<strong>Explination:</strong> '.$_SESSION['suspended_explain'].'<br />';
}
print '</p>';

//page 7
print '<h3>Current courses <a class="EditLink" href="'.Const_AdmissionsAppEditLink.'?page=&action=admissionsapplication&phase=phase7&elementid=&subaction=quickEdit">Edit</a></h3>';
if ($_SESSION['select_1']=="" && $_SESSION['select_2']=="" && $_SESSION['select_3']=="" && $_SESSION['select_4']=="" && $_SESSION['select_5']=="" && $_SESSION['select_6']=="" && $_SESSION['select_7']=="" && $_SESSION['additional_course']=="" ){
	print '<p>No course information was entered.</p>';
}
else {
	if ($_SESSION['select_1']!=""){
		print '<p><strong>Course type:</strong> '.$_SESSION['select_1'].'<br />
	<strong>Course name: </strong>'.$_SESSION['course_name_1'].'<br />
	<strong>Course number: </strong>'.$_SESSION['course_number_1'].'<br />
	<strong>Course credits: </strong>'.$_SESSION['course_credits_1'].'<br />
	<strong>Course term: </strong>'.$_SESSION['course_term_1'].'</p>';
	}
	if ($_SESSION['select_2']!=""){
		print '<p>	<strong>Course type: </strong>'.$_SESSION['select_2'].'<br />
	<strong>Course name: </strong>'.$_SESSION['course_name_2'].'<br />
	<strong>Course number: </strong>'.$_SESSION['course_number_2'].'<br />
	<strong>Course credits: </strong>'.$_SESSION['course_credits_2'].'<br />
	<strong>Course term:</strong> '.$_SESSION['course_term_2'].'</p>';
	}
	if ($_SESSION['select_3']!=""){
		print '<p>	<strong>Course type:</strong> '.$_SESSION['select_3'].'<br />
	<strong>Course name: </strong>'.$_SESSION['course_name_3'].'<br />
	<strong>Course number: </strong>'.$_SESSION['course_number_3'].'<br />
	<strong>Course credits: </strong>'.$_SESSION['course_credits_3'].'<br />
	<strong>Course term: </strong>'.$_SESSION['course_term_3'].'</p>';
	}
	if ($_SESSION['select_4']!=""){
		print '<p>	<strong>Course type:</strong> '.$_SESSION['select_4'].'<br />
	<strong>Course name: </strong>'.$_SESSION['course_name_4'].'<br />
	<strong>Course number:</strong>	'.$_SESSION['course_number_4'].'<br />
	<strong>Course credits:</strong> '.$_SESSION['course_credits_4'].'<br />
	<strong>Course term: </strong>'.$_SESSION['course_term_4'].'</p>';
	}
	if ($_SESSION['select_5']!=""){
		print '<p>	<strong>Course type:</strong> '.$_SESSION['select_5'].'<br />
	<strong>Course name:</strong> '.$_SESSION['course_name_5'].'<br />
	<strong>Course number: </strong>'.$_SESSION['course_number_5'].'<br />
	<strong>Course credits:</strong> '.$_SESSION['course_credits_5'].'<br />
	<strong>Course term: </strong>'.$_SESSION['course_term_5'].'</p>';
	}
	if ($_SESSION['select_6']!=""){
		print '<p>	<strong>Course type:</strong> '.$_SESSION['select_6'].'<br />
	<strong>Course name:</strong> '.$_SESSION['course_name_6'].'<br />
	<strong>Course number: </strong>'.$_SESSION['course_number_6'].'<br />
	<strong>Course credits:</strong> '.$_SESSION['course_credits_6'].'<br />
	<strong>Course term: </strong>'.$_SESSION['course_term_6'].'</p>';
	}
	if ($_SESSION['select_7']!=""){
		print '<p>	<strong>Course type:</strong> '.$_SESSION['select_7'].'<br />
	<strong>Course name:</strong> '.$_SESSION['course_name_7'].'<br />
	<strong>Course number: </strong>'.$_SESSION['course_number_7'].'<br />
	<strong>Course credits:</strong> '.$_SESSION['course_credits_7'].'<br />
	<strong>Course term: </strong>'.$_SESSION['course_term_7'].'</p>';
	}
	if ($_SESSION['additional_course']!="")
	print '<p><strong>Additional course information:</strong> <br />'.$_SESSION['additional_course'].'</p>';
}
print '<p><strong>Have you attended a non-US school, college or university:</strong> '.$_SESSION['non_us_school'].'</p>';
if ($_SESSION['non_us_school']=="Yes"){
	print '<p><strong>Credential Evaluation Agency:</strong> '.$_SESSION['credit_eval_agency'].'<br />
	<strong>Date sent:</strong> '.$_SESSION['credit_eval_month'].' '.$_SESSION['credit_eval_year'].'<br />
</p>';
}

//page 8
print '<h3>Enrollment information <a class="EditLink" href="'.Const_AdmissionsAppEditLink.'?page=&action=admissionsapplication&phase=phase8&elementid=&subaction=quickEdit">Edit</a></h3>
<p><strong>Expected date of enrollment: </strong>'.$_SESSION['enrollment_date'].'<br />
	<strong>Non-degree student: </strong>'.$_SESSION['pursue_nondegree'].'</p>
	<p><strong>Degree: </strong>'.$_SESSION['cert'].'<br />
	<strong>Major:</strong> '.$_SESSION['program'].'<br />';
if ($_SESSION['pursue_nondegree']=="No"){
	print '<strong>Minor: </strong>'.$_SESSION['minor'].'</p>
	<p><strong>Do you intend to pursue a teaching certificate:</strong> '.$_SESSION['teaching_cert'].'<br />';
		if ($_SESSION['teaching_cert']=="Yes"){
			print '<strong>Teaching certificate level: </strong>'.$_SESSION['teaching_cert_level'];
		}
	print '</p>';
}
print '<p><strong>Comments:</strong> '.$_SESSION['comments'].' </p>';	
		
//closing content
print '<hr /><p><span class="SectionText">Please certify your application.</span></p>
<p>I acknowledge that by putting my initials in the following box (first name initial, middle name initial, last name initial), I am providing them as my signature certifying that the information I provided on this application is true and correct to the best of my knowledge.   My initials also acknowledge that I may be dismissed if the educational or citizenship information I provided on this application is not accurate.</p>
<p><input name="initials" type="text" class="FormFieldTextBox" id="initials" size="4" /></p>
<p>Clery (Crime Statistics):  The Northern Michigan University Annual Security Report includes reportable crime statistics for three previous years.  These crimes either occurred on campus; in certain off-campus buildings owned or controlled by Northern Michigan University; or on public property within, or immediately adjacent to and accessible to campus.  This report also includes institutional policies concerning security, alcohol, drug use, crime prevention, timely warnings, security alerts, sexual assault and other required matters.  You may obtain a copy of this report, as well as NMU\'s annual fire report, from Public Safety and Police Services located at 100 Services Building, or at <a href="http://publicsafety.nmu.edu">http://publicsafety.nmu.edu</a> (<a href="http://www.nmu.edu/crimestats">http://www.nmu.edu/crimestats</a> or <a href="http://www.nmu.edu/firereport">http://www.nmu.edu/firereport</a>).</p>';

print '</form>';
		$strCancelURL = "http://www.nmu.edu";
		HTML_AddButtons('', "Submit", "", "Cancel", $strCancelURL, "", "");
	}
	catch (Exception $ex)
	{
		throw new Exception($ex->getMessage());
	}
}

//when to expect you & degree info
function Display_ApplicationPage8()
{
	try
	{
		CORE_DisplayPageHead();

		$strURL = str_replace("Admin/Components", "AdmissionsApp", CORE_GetURL(Const_RawURL, CORE_GetQueryStringVar(Const_Action), CORE_GetQueryStringVar(Const_Phase), "", CORE_GetQueryStringVar(Const_Subaction), ""));
		HTML_AddForm($strURL, "");
print '<h3><span style="color:red;">DEV</span></h3>';

		//javascript and styles
		print '<link href="elements/application.css" rel="stylesheet" type="text/css" />
		<script language="javaScript" src="elements/wz_tooltip.js" type="text/javascript"></script>';
print '<script type="text/javascript">
	$(document).ready(function() {
		var loadUrl = "/cgi-bin/AdmissionsApp/major_list.php"; //this is the script that creates the menus
		var sessionCert = "'.$_SESSION['cert'].'";
		var sessionProgram = "'.$_SESSION['program'].'";
		
		$(\'#cert\').load(loadUrl, "process=0&cert="+sessionCert+"&program="+sessionProgram, function(){ //load the list of certs (degree types). PHP will select a cert if one is stored in the session.
			ProgramMenuLoader()
		});
		
		NonDegreeOptions(\'Load\'); //used to make the proper selections when session data is present
		TeachingCertCheck(); //used to make the proper selections when session data is present
	
		function ProgramMenuLoader()
		{
			var programToLoad = ($(\'#cert\').prop(\'selectedIndex\')-1);
			$(\'#program\').html(\'<option value="">Loading...</option>\'); //display a loading message in case the server is being slow
			$("#program").load(loadUrl, "process=1&selectedCert="+programToLoad+"&cert="+sessionCert+"&program="+sessionProgram);  //fill up the program menu
			
			if($(\'#cert\').val() == \'Non-degree Seeking\')
			{
				NonDegreeOptions(\'MenuYes\'); //call the non-degree function to disable form fields
				$(\'#pursue_nondegree1\').prop(\'checked\', true); //select yes for non-degree question
				$(\'#pursue_nondegree2\').prop(\'checked\', false); //makes sure that no is not selected
			}
			else
			{
				NonDegreeOptions(\'MenuNo\'); //call the non-degree function to enable form fields
				$(\'#pursue_nondegree1\').prop(\'checked\', false); //makes sure that yes is not selected
				$(\'#pursue_nondegree2\').prop(\'checked\', true); //select no for non-degree question
			}
		}
		function NonDegreeOptions(selectedValue)
		{
			//this function is used in four different ways.  the \'yes\' ways will disable fields, the \'no\' ways will enable them.
			switch(selectedValue)
			{
				case \'Yes\':
					$(\'#cert\').val(\'Non-degree Seeking\');
					ProgramMenuLoader();
		
					$(\'#minor\').prop(\'disabled\', true); 
					$(\'#minor\').prop(\'value\', \'\');		
					$(\'#teaching_cert1, #teaching_cert2, #teaching_cert_level1, #teaching_cert_level2\').prop(\'disabled\', true);
					$(\'#teaching_cert1, #teaching_cert2, #teaching_cert_level1, #teaching_cert_level2\').prop(\'checked\', false);	
					break;
				case \'MenuYes\':	
					$(\'#minor\').prop(\'disabled\', true); 
					$(\'#minor\').prop(\'value\', \'\');		
					$(\'#teaching_cert1, #teaching_cert2, #teaching_cert_level1, #teaching_cert_level2\').prop(\'disabled\', true);
					$(\'#teaching_cert1, #teaching_cert2, #teaching_cert_level1, #teaching_cert_level2\').prop(\'checked\', false);	
					break;
				case \'MenuNo\':
					$(\'#minor, #teaching_cert1, #teaching_cert2\').removeAttr(\'disabled\');
					break;
				case \'Load\':
					if($(\'#pursue_nondegree1\').prop("checked")==true)
						NonDegreeOptions(\'MenuYes\');
					else
						NonDegreeOptions(\'MenuNo\');	
					break;
				default:  // this is for case \'No\'
					$(\'#cert\').val(\'\');
					ProgramMenuLoader();
					$(\'#minor, #teaching_cert1, #teaching_cert2\').removeAttr(\'disabled\');
			}
		}
		
		function TeachingCertCheck()
		{
			if($(\'#teaching_cert1\').prop(\'checked\') == true)
			{
				$(\'#teaching_cert_level1, #teaching_cert_level2\').prop(\'disabled\', false);
			}
			else
			{
				$(\'#teaching_cert_level1, #teaching_cert_level2\').prop(\'disabled\', true);
				$(\'#teaching_cert_level1, #teaching_cert_level2\').prop(\'checked\', false);
			}	
		}
	
		function ExtraInfo()
		{
			if($(\'#cert\').val() == \'Associate\')
				$(\'#moreInformation\').html("(<a href=\"http://webb.nmu.edu/Admissions/SiteSections/Apply/AdmissionsCriteria/NonBacNotes.shtml\" target=\"_blank\">Associate degree requirements</a>)");
			else if($(\'#cert\').val() == \'Baccalaureate\')
				$(\'#moreInformation\').html("(<a href=\"http://webb.nmu.edu/Admissions/SiteSections/Apply/AdmissionsCriteria/AdmissionsCriteria2.shtml\" target=\"_blank\">Baccalaureate degree requirements</a>)");
			else
				$(\'#moreInformation\').html("");
		}
	
		$(\'#cert\').change(function(){
			ProgramMenuLoader();
			ExtraInfo();
		});   
		$(\'input:radio[name=pursue_nondegree]\').change(function(){
			NonDegreeOptions($(\'input:radio[name=pursue_nondegree]:checked\').val()) //returns a yes/no to the function
		});
		$(\'input:radio[name=teaching_cert]\').change(function(){
			TeachingCertCheck();
		});
	
	});
</script>';				
		//content
		print '<p><span class="SectionText">Enrollment information</span></p>
		<p class="FormLabel">Expected semester of enrollment <span class="Required">*</span> <span class="FormHelp">(<a href="#" onClick="return false;" onMouseOver="Tip(\'Winter semester takes place from January to May.  Summer semester takes place from May to August and Fall semester is from August to December.\', WIDTH, 300)">?</a>)</span><br />

			<select name="enrollment_date" id="enrollment_date" class="FormFieldTextBox">						
				<option value=""></option>';
		
				$i=0;
				while($i<=4){
					$year = date("Y")+$i;
					
					if($i==0){
						$thisMonth = date("n");
						$thisNumberDay = date("j");
						
						if($thisMonth < 3){
							print '<option value="Winter '.$year.'"';
								if ($_SESSION['enrollment_date']=='Winter '.$year)
									print ' selected="selected" ';
							print '>Winter '.$year.'</option>';
						}
						if($thisMonth < 8){
							print '<option value="Summer '.$year.'"';
								if ($_SESSION['enrollment_date']=='Summer '.$year)
									print ' selected="selected" ';
							print '>Summer '.$year.'</option>';
						}
						if($thisMonth < 10){
							print '<option value="Fall '.$year.'"';
								if ($_SESSION['enrollment_date']=='Fall '.$year)
									print ' selected="selected" ';
							print '>Fall '.$year.'</option>';
						}
						if($thisMonth == 10 && $thisNumberDay > 15){  //this option was added by request from admissions to show the fall semester only until Oct. 15
							print '<option value="Fall '.$year.'"';
								if ($_SESSION['enrollment_date']=='Fall '.$year)
									print ' selected="selected" ';
							print '>Fall '.$year.'</option>';
						}
					}
					
					else {
					print '<option value="Winter '.$year.'"';
						if ($_SESSION['enrollment_date']=='Winter '.$year)
							print ' selected="selected" ';
					print '>Winter '.$year.'</option>';
					
					print '<option value="Summer '.$year.'"';
						if ($_SESSION['enrollment_date']=='Summer '.$year)
							print ' selected="selected" ';
					print '>Summer '.$year.'</option>';
					
					print '<option value="Fall '.$year.'"';
						if ($_SESSION['enrollment_date']=='Fall '.$year)
							print ' selected="selected" ';
					print '>Fall '.$year.'</option>';
					}
					
					$i++;
				}
		
				print '	
			</select>
			
		</p>
		
		<p><span class="FormLabel">Do you intend to take courses only for personal/professional development (non-degree)</span> <span class="Required">*</span> <span class="FormHelp">(<a href="#" onClick="return false;" onMouseOver="Tip(\'Non-degree students are not eligible for financial aid.  In addition, non-degree students who have <strong>not</strong> obtained a baccalaureate degree are limited to a maximum enrollment of eight semester credit hours during any enrollment period.  Post baccalaureate students cannot be non-degree students.\', WIDTH, 300)">?</a>)</span><br />';
		
			if(isset($_SESSION['pursue_nondegree']) && $_SESSION['pursue_nondegree'] == 'Yes'){
				print '<label><input name="pursue_nondegree" id="pursue_nondegree1" type="radio" class="FormFieldTextBox" value="Yes" checked /> Yes</label><br />
				<label><input name="pursue_nondegree" id="pursue_nondegree2" type="radio" class="FormFieldTextBox" value="No" /> No</label>';
			} 
			elseif (isset($_SESSION['pursue_nondegree']) && $_SESSION['pursue_nondegree'] == 'No'){
				print '<label><input name="pursue_nondegree" id="pursue_nondegree1" type="radio" class="FormFieldTextBox" value="Yes" /> Yes</label><br />
				<label><input name="pursue_nondegree" id="pursue_nondegree2" type="radio" class="FormFieldTextBox" value="No" checked /> No</label>';
			}
			else 
				print '<label><input name="pursue_nondegree" id="pursue_nondegree1" type="radio" class="FormFieldTextBox" value="Yes" /> Yes</label><br />
				<label><input name="pursue_nondegree" id="pursue_nondegree2" type="radio" class="FormFieldTextBox" value="No" /> No</label>';			
			
		print '</p>
		
		
		<p><span class="SectionText">What do you plan on studying at NMU?</span></p>
		<p><span class="FormLabel">Degree <span class="Required">*</span></span> <span id="moreInformation" class="FormHelp"></span><br />
				<select name="cert" class="FormFieldTextBox"  id="cert">
					<option value="'.$_SESSION['cert'].'" selected="selected">- '.$_SESSION['cert'].'</option>';
				print'</select>';	
		print '</p>
		<p><span class="FormLabel">Anticipated Major <span class="Required">*</span></span><br />
				<select name="program" class="FormFieldTextBox" id="program">
					<option value="'.$_SESSION['program'].'" selected="selected">- '.$_SESSION['program'].'</option>
				</select>
		</p>
		<p><span class="FormLabel">Minor</span><span class="FormHelp"> (if known)</span><br />
				<input name="minor" type="text" class="FormFieldTextBox" id="minor" value="'.$_SESSION['minor'].'" />
		</p>
		<p><span class="FormLabel">Do you intend to pursue a teaching certificate?</span><br />';


		if(isset($_SESSION['teaching_cert']) && $_SESSION['teaching_cert'] == 'Yes'){
			print '<label><input name="teaching_cert" id="teaching_cert1" type="radio" class="FormFieldTextBox" value="Yes" checked /> Yes</label><br />
				<label><input name="teaching_cert" id="teaching_cert2" type="radio" class="FormFieldTextBox" value="No" /> No</label>';
		} 
		elseif (isset($_SESSION['teaching_cert']) && $_SESSION['teaching_cert'] == 'No'){
			print '<label><input name="teaching_cert" id="teaching_cert1" type="radio" class="FormFieldTextBox" value="Yes" /> Yes</label><br />
				<label><input name="teaching_cert" id="teaching_cert2" type="radio" class="FormFieldTextBox" value="No" checked /> No</label>';
		}
		else 
			print '<label><input name="teaching_cert" id="teaching_cert1" type="radio" class="FormFieldTextBox" value="Yes" /> Yes</label><br />
				<label><input name="teaching_cert" id="teaching_cert2" type="radio" class="FormFieldTextBox" value="No" /> No</label>';		
						
				
		print '</p>
		<p class="FormSubLabelNoBold">';
		
			
		if($_SESSION['teaching_cert_level'] == 'Elementary'){
				print '<label><input name="teaching_cert_level" id="teaching_cert_level1" type="radio" class="FormFieldTextBox" value="Elementary" checked /> Elementary</label><br />';
			} 
			else 
				print '<label><input name="teaching_cert_level" id="teaching_cert_level1" type="radio" class="FormFieldTextBox" value="Elementary" /> Elementary</label><br />';	
				
			if($_SESSION['teaching_cert_level'] == 'Secondary'){
				print '<label><input name="teaching_cert_level" id="teaching_cert_level2" type="radio" class="FormFieldTextBox" value="Secondary" checked /> Secondary</label>';
			} 
			else 
				print '<label><input name="teaching_cert_level" id="teaching_cert_level2" type="radio" class="FormFieldTextBox" value="Secondary" /> Secondary</label>';	
			
		print '</p>
			<p><span class="SectionText">Do you have additional information that will help us understand your application?</span></p>
			<p><span class="FormLabel">Comments</span> <br />';
			
			
			if($_SESSION['state_1'] == "Not Listed" && $_SESSION['state_2'] == "Not Listed")
			{
				echo '<em style="color:red;">You indicated that your state was <strong>not listed</strong> previously in this application.  Please clarify your state of legal residence in the comment area below.</em>';			
			}
			else
			{	
				if($_SESSION['state_1'] == "Not Listed")
					echo '<em style="color:red;">You indicated that your state was <strong>not listed</strong> in the "State of Legal Residence" selection box.  Please clarify your state of legal residence in the comment area below.</em>';
				if($_SESSION['state_2'] == "Not Listed")
					echo '<em style="color:red;">You indicated that your state was <strong>not listed</strong> on the contact information page.  Please clarify your contact state in the comment area below.</em>';
			}	
				
			print '<textarea name="comments" cols="50" rows="4" id="comments">'.$_SESSION['comments'].'</textarea>
			</p>';
		print '</form>';

		$strBackURL = CORE_GetURL(Const_SelfURL, CORE_GetQueryStringVar(Const_Action), Const_Phase7, "", "", "");
		$strCancelURL = CORE_GetURL(Const_SelfURL, CORE_GetQueryStringVar(Const_Action), Const_Phase9, "", "", "");
		if(CORE_GetQueryStringVar(Const_Subaction) == "quickEdit")
			HTML_AddButtons('', "Submit Change", "", "Cancel", $strCancelURL, "", "");
		else
			HTML_AddButtons('', "Continue", "", "Back", $strBackURL, "", "");
	}
	catch (Exception $ex)
	{
		throw new Exception($ex->getMessage());
	}
}

//current courses
function Display_ApplicationPage7()
{
	try
	{
		CORE_DisplayPageHead();

		$strURL = str_replace("Admin/Components", "AdmissionsApp", CORE_GetURL(Const_RawURL, CORE_GetQueryStringVar(Const_Action), CORE_GetQueryStringVar(Const_Phase), "", CORE_GetQueryStringVar(Const_Subaction), ""));
		HTML_AddForm($strURL, "");
print '<h3><span style="color:red;">DEV</span></h3>';
		$mArray = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		$cArray = array('High School', 'College');
		
		//javascript and styles
		print '<link href="elements/application.css" rel="stylesheet" type="text/css" />
		<script language="javaScript" type="text/javascript" src="elements/wz_tooltip.js"></script>
		<script language="javascript" type="text/javascript">
		<!--
			window.onload = loadfields;
			function loadfields(){
				CoursesSelect();
				CreditEval();
				nonUsToggle();
			}
			
			function nonUsToggle(){
			HiddenDiv = document.getElementById("CreditEval");
				if(document.myForm.non_us_school[0].checked){
					HiddenDiv.style.display = "block";
				}
				else{
					HiddenDiv.style.display = "none";
				}
			}
			
			function CreditEval(){
				try {
				if(document.myForm.credit_eval_agency[0].checked || document.myForm.credit_eval_agency[1].checked || document.myForm.credit_eval_agency[2].checked){
				document.myForm.credit_eval_month.disabled=false;
				document.myForm.credit_eval_year.disabled=false;
				}
				else {
				document.myForm.credit_eval_month.disabled=true;
				document.myForm.credit_eval_year.disabled=true;
				}
				}
				catch(err){
				
				}
			}
			
	var courseids = new Array(\'HiddenCourseDiv1\',\'HiddenCourseDiv2\',\'HiddenCourseDiv3\', \'HiddenCourseDiv4\');

		function showcourse()
		{
			for (var i = 0; i < courseids.length; i++)
			{
				if(document.getElementById(courseids[i]).style.display == "none")
				{
					document.getElementById(courseids[i]).style.display = "";
					break;
				}
			}
			if(i==(courseids.length-1))
			{
			var AddButton = document.getElementById("AddButton");
			AddButton.style.display = "none";
			}
		}
			
	function CoursesSelect(){
				if($("#select1").val() == "College"){
					$("#course_name_1, #course_number_1, #course_credits_1, #course_term_1").removeAttr("disabled");
				} 
				else if($("#select1").val() == "High School"){
					$("#course_name_1, #course_term_1").removeAttr("disabled");
					$("#course_number_1, #course_credits_1).attr("disabled", "disabled");
					$("#course_number_1, #course_credits_1").val('');
				}
				else {
					document.myForm.course_name_1.disabled=true;
					document.myForm.course_name_1.value="";
					document.myForm.course_number_1.disabled=true;
					document.myForm.course_number_1.value="";
					document.myForm.course_credits_1.disabled=true;
					document.myForm.course_credits_1.value="";
					document.myForm.course_term_1.disabled=true;
					document.myForm.course_term_1.value="";
				}
				
		var selectedItem_2 = document.myForm.select_2.selectedIndex;
		var selectedText_2 = document.myForm.select_2.options[selectedItem_2].value;
				if(selectedText_2=="College"){
					document.myForm.course_name_2.disabled=false;
					document.myForm.course_number_2.disabled=false;
					document.myForm.course_credits_2.disabled=false;
					document.myForm.course_term_2.disabled=false;
				} 
				else if (selectedText_2=="High School"){
					document.myForm.course_name_2.disabled=false;
					document.myForm.course_number_2.disabled=true;
					document.myForm.course_number_2.value="";
					document.myForm.course_credits_2.disabled=true;
					document.myForm.course_credits_2.value="";
					document.myForm.course_term_2.disabled=false;
				}
				else {
					document.myForm.course_name_2.disabled=true;
					document.myForm.course_name_2.value="";
					document.myForm.course_number_2.disabled=true;
					document.myForm.course_number_2.value="";
					document.myForm.course_credits_2.disabled=true;
					document.myForm.course_credits_2.value="";
					document.myForm.course_term_2.disabled=true;
					document.myForm.course_term_2.value="";
				}
				
		var selectedItem_3 = document.myForm.select_3.selectedIndex;
		var selectedText_3 = document.myForm.select_3.options[selectedItem_3].value;
				if(selectedText_3=="College"){
					document.myForm.course_name_3.disabled=false;
					document.myForm.course_number_3.disabled=false;
					document.myForm.course_credits_3.disabled=false;
					document.myForm.course_term_3.disabled=false;
				} 
				else if (selectedText_3=="High School"){
					document.myForm.course_name_3.disabled=false;
					document.myForm.course_number_3.disabled=true;
					document.myForm.course_number_3.value="";
					document.myForm.course_credits_3.disabled=true;
					document.myForm.course_credits_3.value="";
					document.myForm.course_term_3.disabled=false;
				}
				else {
					document.myForm.course_name_3.disabled=true;
					document.myForm.course_name_3.value="";
					document.myForm.course_number_3.disabled=true;
					document.myForm.course_number_3.value="";
					document.myForm.course_credits_3.disabled=true;
					document.myForm.course_credits_3.value="";
					document.myForm.course_term_3.disabled=true;
					document.myForm.course_term_3.value="";
				}
			
		var selectedItem_4 = document.myForm.select_4.selectedIndex;
		var selectedText_4 = document.myForm.select_4.options[selectedItem_4].value;
				if(selectedText_4=="College"){
					document.myForm.course_name_4.disabled=false;
					document.myForm.course_number_4.disabled=false;
					document.myForm.course_credits_4.disabled=false;
					document.myForm.course_term_4.disabled=false;
				} 
				else if (selectedText_4=="High School"){
					document.myForm.course_name_4.disabled=false;
					document.myForm.course_number_4.disabled=true;
					document.myForm.course_number_4.value="";
					document.myForm.course_credits_4.disabled=true;
					document.myForm.course_credits_4.value="";
					document.myForm.course_term_4.disabled=false;
				}
				else {
					document.myForm.course_name_4.disabled=true;
					document.myForm.course_name_4.value="";
					document.myForm.course_number_4.disabled=true;
					document.myForm.course_number_4.value="";
					document.myForm.course_credits_4.disabled=true;
					document.myForm.course_credits_4.value="";
					document.myForm.course_term_4.disabled=true;
					document.myForm.course_term_4.value="";
				}
				
		var selectedItem_5 = document.myForm.select_5.selectedIndex;
		var selectedText_5 = document.myForm.select_5.options[selectedItem_5].value;
				if(selectedText_5=="College"){
					document.myForm.course_name_5.disabled=false;
					document.myForm.course_number_5.disabled=false;
					document.myForm.course_credits_5.disabled=false;
					document.myForm.course_term_5.disabled=false;
				} 
				else if (selectedText_5=="High School"){
					document.myForm.course_name_5.disabled=false;
					document.myForm.course_number_5.disabled=true;
					document.myForm.course_number_5.value="";
					document.myForm.course_credits_5.disabled=true;
					document.myForm.course_credits_5.value="";
					document.myForm.course_term_5.disabled=false;
				}
				else {
					document.myForm.course_name_5.disabled=true;
					document.myForm.course_name_5.value="";
					document.myForm.course_number_5.disabled=true;
					document.myForm.course_number_5.value="";
					document.myForm.course_credits_5.disabled=true;
					document.myForm.course_credits_5.value="";
					document.myForm.course_term_5.disabled=true;
					document.myForm.course_term_5.value="";
				}
				
		var selectedItem_6 = document.myForm.select_6.selectedIndex;
		var selectedText_6 = document.myForm.select_6.options[selectedItem_6].value;
				if(selectedText_6=="College"){
					document.myForm.course_name_6.disabled=false;
					document.myForm.course_number_6.disabled=false;
					document.myForm.course_credits_6.disabled=false;
					document.myForm.course_term_6.disabled=false;
				} 
				else if (selectedText_6=="High School"){
					document.myForm.course_name_6.disabled=false;
					document.myForm.course_number_6.disabled=true;
					document.myForm.course_number_6.value="";
					document.myForm.course_credits_6.disabled=true;
					document.myForm.course_credits_6.value="";
					document.myForm.course_term_6.disabled=false;
				}
				else {
					document.myForm.course_name_6.disabled=true;
					document.myForm.course_name_6.value="";
					document.myForm.course_number_6.disabled=true;
					document.myForm.course_number_6.value="";
					document.myForm.course_credits_6.disabled=true;
					document.myForm.course_credits_6.value="";
					document.myForm.course_term_6.disabled=true;
					document.myForm.course_term_6.value="";
				}
				
		var selectedItem_7 = document.myForm.select_7.selectedIndex;
		var selectedText_7 = document.myForm.select_7.options[selectedItem_7].value;
				if(selectedText_7=="College"){
					document.myForm.course_name_7.disabled=false;
					document.myForm.course_number_7.disabled=false;
					document.myForm.course_credits_7.disabled=false;
					document.myForm.course_term_7.disabled=false;
				} 
				else if (selectedText_7=="High School"){
					document.myForm.course_name_7.disabled=false;
					document.myForm.course_number_7.disabled=true;
					document.myForm.course_number_7.value="";
					document.myForm.course_credits_7.disabled=true;
					document.myForm.course_credits_7.value="";
					document.myForm.course_term_7.disabled=false;
				}
				else {
					document.myForm.course_name_7.disabled=true;
					document.myForm.course_name_7.value="";
					document.myForm.course_number_7.disabled=true;
					document.myForm.course_number_7.value="";
					document.myForm.course_credits_7.disabled=true;
					document.myForm.course_credits_7.value="";
					document.myForm.course_term_7.disabled=true;
					document.myForm.course_term_7.value="";
				}
		}
		//-->
		</script>';
		
		//content
		print '<p><span class="SectionText">Please list courses you are currently taking.</span></p>
		<table border="0" cellpadding="5" bgcolor="#FFFFFF">
			<tr>
				<td width="130" class="FormLabel">Course level</td>
				<td width="170" class="FormLabel">Course name or title</td>
				<td width="180" class="FormLabel">College course number</td>
				<td width="170" class="FormLabel">College credits</td>
				<td width="160" class="FormLabel">Term</td>
			</tr>
			<tr>
				<td><label>';

				print'<select name="select_1" id="select1" onClick="CoursesSelect();">				
					<option value=""></option>';
					foreach ($cArray as $value){
						print '<option value="'.$value.'"';
						if($value == $_SESSION['select_1'])
						print ' selected="selected" ';
						print'>'.$value.'</option>';
					}
				
					print '
				</select>
				
				</label></td>
				<td><input name="course_name_1" type="text" class="FormFieldTextBox" id="course_name_1" value="'.$_SESSION['course_name_1'].'" /></td>
				<td><input name="course_number_1" type="text" class="FormFieldTextBox" size="7" id="course_number_1" value="'.$_SESSION['course_number_1'].'" /></td>
				<td><input name="course_credits_1" type="text" class="FormFieldTextBox" size="3" id="course_credits_1" value="'.$_SESSION['course_credits_1'].'" /></td>
				<td><input name="course_term_1" type="text" class="FormFieldTextBox" id="course_term_1" value="'.$_SESSION['course_term_1'].'" /></td>
			</tr>
			<tr>
				<td>';
			
			
				print'<select name="select_2" id="select2" onClick="CoursesSelect();">				
					<option value=""></option>';
					foreach ($cArray as $value){
						print '<option value="'.$value.'"';
						if($value == $_SESSION['select_2'])
						print ' selected="selected" ';
						print'>'.$value.'</option>';
					}
				
					print '
				</select>
				
				</td>
				<td><input name="course_name_2" type="text" class="FormFieldTextBox" id="course_name_2" value="'.$_SESSION['course_name_2'].'" /></td>
				<td><input name="course_number_2" type="text" class="FormFieldTextBox" size="7" id="course_number_2" value="'.$_SESSION['course_number_2'].'" /></td>
				<td><input name="course_credits_2" type="text" class="FormFieldTextBox" size="3" id="course_credits_2" value="'.$_SESSION['course_credits_2'].'" /></td>
				<td><input name="course_term_2" type="text" class="FormFieldTextBox" id="course_term_2" value="'.$_SESSION['course_term_2'].'" /></td>
			</tr>
			<tr>
				<td>';

				print'<select name="select_3" id="select3" onClick="CoursesSelect();">				
					<option value=""></option>';
					foreach ($cArray as $value){
						print '<option value="'.$value.'"';
						if($value == $_SESSION['select_3'])
						print ' selected="selected" ';
						print'>'.$value.'</option>';
					}
				
					print '
				</select></td>
				<td><input name="course_name_3" type="text" class="FormFieldTextBox" id="course_name_3" value="'.$_SESSION['course_name_3'].'" /></td>
				<td><input name="course_number_3" type="text" class="FormFieldTextBox" size="7" id="course_number_3" value="'.$_SESSION['course_number_3'].'" /></td>
				<td><input name="course_credits_3" type="text" class="FormFieldTextBox" size="3" id="course_credits_3" value="'.$_SESSION['course_credits_3'].'" /></td>
				<td><input name="course_term_3" type="text" class="FormFieldTextBox" id="course_term_3" value="'.$_SESSION['course_term_3'].'" /></td>
			</tr>
			<tr>
				<td>';

				print'<select name="select_4" id="select4" onClick="CoursesSelect();">				
					<option value=""></option>';
					foreach ($cArray as $value){
						print '<option value="'.$value.'"';
						if($value == $_SESSION['select_4'])
						print ' selected="selected" ';
						print'>'.$value.'</option>';
					}
				
					print '
				</select></td>
				<td><input name="course_name_4" type="text" class="FormFieldTextBox" id="course_name_4" value="'.$_SESSION['course_name_4'].'" /></td>
				<td><input name="course_number_4" type="text" class="FormFieldTextBox" size="7" id="course_number_4" value="'.$_SESSION['course_number_4'].'" /></td>
				<td><input name="course_credits_4" type="text" class="FormFieldTextBox" size="3" id="course_credits_4" value="'.$_SESSION['course_credits_4'].'" /></td>
				<td><input name="course_term_4" type="text" class="FormFieldTextBox" id="course_term_4" value="'.$_SESSION['course_term_4'].'" /></td>
			</tr>';
			
			if($_SESSION['select_5']=="")
			$DisplayValue5 = "none";
			else
			$DisplayValue5 = "";
			
			print '<tr id="HiddenCourseDiv1" style="display:'.$DisplayValue5.'">
				<td>';

				print'<select name="select_5" id="select5" onClick="CoursesSelect();">				
					<option value=""></option>';
					foreach ($cArray as $value){
						print '<option value="'.$value.'"';
						if($value == $_SESSION['select_5'])
						print ' selected="selected" ';
						print'>'.$value.'</option>';
					}
				
					print '
				</select></td>
				<td><input name="course_name_5" type="text" class="FormFieldTextBox" id="course_name_5" value="'.$_SESSION['course_name_5'].'" /></td>
				<td><input name="course_number_5" type="text" class="FormFieldTextBox" size="7" id="course_number_5" value="'.$_SESSION['course_number_5'].'" /></td>
				<td><input name="course_credits_5" type="text" class="FormFieldTextBox" size="3" id="course_credits_5" value="'.$_SESSION['course_credits_5'].'" /></td>
				<td><input name="course_term_5" type="text" class="FormFieldTextBox" id="course_term_5" value="'.$_SESSION['course_term_5'].'" /></td>
			</tr>';
			
			if($_SESSION['select_6']=="")
			$DisplayValue6 = "none";
			else
			$DisplayValue6 = "";
			
			print '<tr id="HiddenCourseDiv2" style="display:'.$DisplayValue6.'">
				<td>';

				print'<select name="select_6" id="select_6" onClick="CoursesSelect();">				
					<option value=""></option>';
					foreach ($cArray as $value){
						print '<option value="'.$value.'"';
						if($value == $_SESSION['select_6'])
						print ' selected="selected" ';
						print'>'.$value.'</option>';
					}
				
					print '
				</select></td>
				<td><input name="course_name_6" type="text" class="FormFieldTextBox" id="course_name_6" value="'.$_SESSION['course_name_6'].'" /></td>
				<td><input name="course_number_6" type="text" class="FormFieldTextBox" size="7" id="course_number_6" value="'.$_SESSION['course_number_6'].'" /></td>
				<td><input name="course_credits_6" type="text" class="FormFieldTextBox" size="3" id="course_credits_6" value="'.$_SESSION['course_credits_6'].'" /></td>
				<td><input name="course_term_6" type="text" class="FormFieldTextBox" id="course_term_6" value="'.$_SESSION['course_term_6'].'" /></td>
			</tr>';
			
			if($_SESSION['select_7']=="")
			$DisplayValue7 = "none";
			else
			$DisplayValue7 = "";
			
			print '<tr id="HiddenCourseDiv3" style="display:'.$DisplayValue7.'">
				<td>';

				print'<select name="select_7" id="select_7" onClick="CoursesSelect();">				
					<option value=""></option>';
					foreach ($cArray as $value){
						print '<option value="'.$value.'"';
						if($value == $_SESSION['select_7'])
						print ' selected="selected" ';
						print'>'.$value.'</option>';
					}
				
					print '
				</select></td>
				<td><input name="course_name_7" type="text" class="FormFieldTextBox" id="course_name_7" value="'.$_SESSION['course_name_7'].'" /></td>
				<td><input name="course_number_7" type="text" class="FormFieldTextBox" size="7" id="course_number_7" value="'.$_SESSION['course_number_7'].'" /></td>
				<td><input name="course_credits_7" type="text" class="FormFieldTextBox" size="3" id="course_credits_7" value="'.$_SESSION['course_credits_7'].'" /></td>
				<td><input name="course_term_7" type="text" class="FormFieldTextBox" id="course_term_7" value="'.$_SESSION['course_term_7'].'" /></td>
			</tr>';
			
			if($_SESSION['additional_course']=="")
			$DisplayValue8 = "none";
			else
			$DisplayValue8 = "";
			
			print '<tr id="HiddenCourseDiv4" style="display:'.$DisplayValue8.'">
				<td colspan="5">
					<p><span class="FormLabel">Additional course information</span><br />
						<textarea rows="7" cols="60" id="additional_course" name="additional_course"/>'.$_SESSION['additional_course'].'</textarea>
					</p>
				</td>
			</tr>';
			
			if($_SESSION['additional_course']=="" || $_SESSION['select_5']=="" || $_SESSION['select_6']=="" || $_SESSION['select_7']=="")
			$DisplayValue9 = "";
			else
			$DisplayValue9 = "none";
			
			print '<tr id="AddButton" style="display:'.$DisplayValue9.'">
				<td colspan="5">
					<a href="javascript:showcourse();">Add another course</a>
				</td>
			</tr>
		</table>';
		print '<p><span class="FormLabel">Have you attended a non-US school, college or university?</span><br />';
			if(isset($_SESSION['non_us_school']) && $_SESSION['non_us_school'] == 'Yes'){
				print '<label class="FormLabelNoBold"><input type="radio" name="non_us_school" value="Yes" onClick="nonUsToggle();" checked />Yes</label><br />
				<label class="FormLabelNoBold"><input type="radio" name="non_us_school" value="No" onClick="nonUsToggle();" />No</label>';
			} 
			elseif (isset($_SESSION['non_us_school']) && $_SESSION['non_us_school'] == 'No'){
				print '<label class="FormLabelNoBold"><input type="radio" name="non_us_school" value="Yes" onClick="nonUsToggle();" />Yes</label><br />
				<label class="FormLabelNoBold"><input type="radio" name="non_us_school" value="No" onClick="nonUsToggle();" checked />No</label>';
			}
			else 
				print '<label class="FormLabelNoBold"><input type="radio" name="non_us_school" onClick="nonUsToggle();" value="Yes" />Yes</label><br />
				<label class="FormLabelNoBold"><input type="radio" name="non_us_school" value="No" onClick="nonUsToggle();" />No</label>';		
		print'</p>';
		print '<div class="ifYes" id="CreditEval" style="display:none;">
			<p>All educational credentials from non-U.S. / non-Canadian* institutions must be evaluated by an agency specializing in credential evaluation.  Please indicate to which agency you have sent or will send your credentials and on what date they were sent/will be sent. <a href="http://webb.nmu.edu/Admissions/SiteSections/Apply/ApplyByStudentType/International.shtml" target="_blank">More Information</a> <span class="FormHelp">(<a href="#" onClick="return false;" onMouseOver="Tip(\'If you will be graduating from a U.S. high school and some of your high school work was completed at a non-U.S. school, the school conferring the diploma may have already evaluated your non-U.S. academic work and noted those courses, credits and grades on your transcript. If this is the case, NMU will not require an external credential evaluation report.\', WIDTH, 300)">?</a>)</span></p>
			<p><span class="FormLabel">Credential Evaluation Agency </span><br />';
		
			if(isset($_SESSION['credit_eval_agency']) && $_SESSION['credit_eval_agency'] == 'ECE'){
				print '<label><input type="radio" name="credit_eval_agency" value="ECE" onclick="CreditEval()" checked /> ECE</label><br />
					<label><input type="radio" name="credit_eval_agency" value="WES" onclick="CreditEval()" /> WES</label><br />
					<label><input type="radio" name="credit_eval_agency" value="NAEG" onclick="CreditEval()" /> NAEG</label>';
			} 
			elseif (isset($_SESSION['credit_eval_agency']) && $_SESSION['credit_eval_agency'] == 'WES'){
				print '<label><input type="radio" name="credit_eval_agency" value="ECE" onclick="CreditEval()" /> ECE</label><br />
					<label><input type="radio" name="credit_eval_agency" value="WES" onclick="CreditEval()" checked /> WES</label><br />
					<label><input type="radio" name="credit_eval_agency" value="NAEG" onclick="CreditEval()" /> NAEG</label>';
			}
			elseif (isset($_SESSION['credit_eval_agency']) && $_SESSION['credit_eval_agency'] == 'NAEG'){
				print '<label><input type="radio" name="credit_eval_agency" value="ECE" onclick="CreditEval()" /> ECE</label><br />
					<label><input type="radio" name="credit_eval_agency" value="WES" onclick="CreditEval()" /> WES</label><br />
					<label><input type="radio" name="credit_eval_agency" value="NAEG" onclick="CreditEval()" checked /> NAEG</label>';
			}
			else 
				print '<label><input type="radio" name="credit_eval_agency" value="ECE" onclick="CreditEval()" /> ECE</label><br />
					<label><input type="radio" name="credit_eval_agency" value="WES" onclick="CreditEval()" /> WES</label><br />
					<label><input type="radio" name="credit_eval_agency" value="NAEG" onclick="CreditEval()" /> NAEG</label>';				
					
				print '</p>
			<p class="FormLabel">Date Sent <br />
									
					<select name="credit_eval_month" id="credit_eval_month">					
						<option value=""></option>';
						foreach ($mArray as $value){
							print '<option value="'.$value.'"';
							if($value == $_SESSION['credit_eval_month'])
							print ' selected="selected" ';
							print'>'.$value.'</option>';
						}
					
						print '
					</select>
					<select name="credit_eval_year" id="credit_eval_year" class="FormFieldTextBox">						
						<option value=""></option>';
				
						$i=0;
						while($i<=10){
							$year = date("Y")-$i;
							print '<option value="'.$year.'"';
							if ($_SESSION['credit_eval_year']==$year)
							print ' selected="selected" ';
							print '>'.$year.'</option>';
							$i++;
						}
				
						print '	
					</select>
					
			</p>
		</div>';		
				print '</form>';

		$strBackURL = CORE_GetURL(Const_SelfURL, CORE_GetQueryStringVar(Const_Action), Const_Phase6, "", "", "");
		$strCancelURL = CORE_GetURL(Const_SelfURL, CORE_GetQueryStringVar(Const_Action), Const_Phase9, "", "", "");
		if(CORE_GetQueryStringVar(Const_Subaction) == "quickEdit")
			HTML_AddButtons('', "Submit Change", "", "Cancel", $strCancelURL, "", "");
		else
			HTML_AddButtons('', "Continue", "", "Back", $strBackURL, "", "");
	}
	catch (Exception $ex)
	{
		throw new Exception($ex->getMessage());
	}
}

//college info
function Display_ApplicationPage6()
{
	try
	{
		CORE_DisplayPageHead();

		$strURL = str_replace("Admin/Components", "AdmissionsApp", CORE_GetURL(Const_RawURL, CORE_GetQueryStringVar(Const_Action), CORE_GetQueryStringVar(Const_Phase), "", CORE_GetQueryStringVar(Const_Subaction), ""));
		HTML_AddForm($strURL, "");
print '<h3><span style="color:red;">DEV</span></h3>';
		$mArray = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		
		//javascript and styles
		print '<link href="elements/application.css" rel="stylesheet" type="text/css" />
		<script language="javascript" type="text/javascript">
		<!--
			window.onload = loadfields;
			function loadfields(){
				DismissedCheck();
				LoadCols();
				NotATransfer();
				ESLProgram();
			}
			
			function DismissedCheck(){
				if(document.myForm.suspended[0].checked){
					document.myForm.suspended_explain.disabled=false;
					document.myForm.suspended_school.disabled=false;
					document.myForm.suspended_when_month.disabled=false;
					document.myForm.suspended_when_year.disabled=false;
					document.getElementById("SuspendedDiv").style.display = "block";
				}
				else {
					document.myForm.suspended_explain.disabled=true;
					document.myForm.suspended_explain.value="";
					document.myForm.suspended_school.disabled=true;
					document.myForm.suspended_school.value="";
					document.myForm.suspended_when_month.selectedIndex=0;
					document.myForm.suspended_when_year.selectedIndex=0;
					document.myForm.suspended_when_month.disabled=true;
					document.myForm.suspended_when_year.disabled=true;
					document.getElementById("SuspendedDiv").style.display = "none";
				}
			}
		function LoadCols(){
			var oDiv = document.getElementById("ColDiv1");
			var aDiv = document.getElementById("ColDiv2");
			var bDiv = document.getElementById("ColDiv3");
			var cDiv = document.getElementById("ColDiv4");
			
			if (document.myForm.col0[0].checked) 
				oDiv.style.display = "block";
				
			if (document.myForm.col1[0].checked)
			   aDiv.style.display = "block";
			
			if (document.myForm.col2[0].checked)
				bDiv.style.display = "block";
				
			if (document.myForm.col3[0].checked)
			   cDiv.style.display = "block";
		}
		
			
		function ShowHideCol1(){
			var oDiv = document.getElementById("ColDiv1");
			var aDiv = document.getElementById("ColDiv2");
			var bDiv = document.getElementById("ColDiv3");
			var cDiv = document.getElementById("ColDiv4");
			
			if (document.myForm.col0[0].checked) {
			    oDiv.style.display = "block";
				document.myForm.col1[1].checked=true;
				document.myForm.col2[1].checked=true;
				document.myForm.col3[1].checked=true;			
			} else {
				oDiv.style.display = "none";
				aDiv.style.display = "none";
				bDiv.style.display = "none";
				cDiv.style.display = "none";
				document.myForm.col1[1].checked=true;
				document.myForm.col2[1].checked=true;
				document.myForm.col3[1].checked=true;
			}
		}
		
		function ShowHideCol2(){
		var oDiv = document.getElementById("ColDiv2");
		var bDiv = document.getElementById("ColDiv3");
		var cDiv = document.getElementById("ColDiv4");
			if (document.myForm.col1[0].checked) {
			   oDiv.style.display = "block";
				document.myForm.col2[1].checked=true;
				document.myForm.col3[1].checked=true;
				
			} else {
				oDiv.style.display = "none";
				bDiv.style.display = "none";
				cDiv.style.display = "none";
				document.myForm.col2[1].checked=true;
				document.myForm.col3[1].checked=true;
			}
		}
		
		function ShowHideCol3(){
		var oDiv = document.getElementById("ColDiv3");
		var cDiv = document.getElementById("ColDiv4");
			if (document.myForm.col2[0].checked) {
				oDiv.style.display = "block";
				document.myForm.col3[1].checked=true;
				
			} else {
				oDiv.style.display = "none";
				cDiv.style.display = "none";
				document.myForm.col3[1].checked=true;		
			}
		}
		
		function ShowHideCol4(){
		var oDiv = document.getElementById("ColDiv4");
			if (document.myForm.col3[0].checked) {
			   oDiv.style.display = "block";
				
			} else {
				oDiv.style.display = "none";
		
			}
		}
		
		function NotATransfer(){
			if (document.myForm.col0[1].checked){
				document.myForm.transfer_student[1].checked=true;
			}
		}
		
		function ESLProgram(){
			var eslDiv = document.getElementById("ESLDiv");
			document.getElementById("ESLDiv").style.display = "block";
			
			if(document.myForm.esl[0].checked)
				eslDiv.style.display = "block";
			else
				eslDiv.style.display = "none";
		}
		
		//-->
		</script>';
		
		//content
		if($_SESSION['us_citizen'] =='No' && $_SESSION['us_resident'] =='No'){
			print '<p><span class="SectionText">Please provide information for all post-secondary institutions you have attended, including community colleges, career training programs, English-as-a-Second-Language (ESL) programs, and colleges/universities.</span></p>
			<p><span class="FormLabel">Have you attended a college or university?<em> <span class="Required">*</span><br />
			(Failure to list all colleges or universities may result in dismissal.)</em></span><br />';
			$NamingConv = "Institution";
			$NamingConvTwo = "secondary school";
		}else{
			print '<p><span class="SectionText">Tell us about any college experience you have had.</span></p>
				<p><span class="FormLabel">Have you attended a college or university?<em> <span class="Required">*</span><br />
				(Failure to list all colleges or universities may result in dismissal.)</em></span><br />';
				$NamingConv = "College";
				$NamingConvTwo = "high school";
		}
		
			if(isset($_SESSION['col0']) && $_SESSION['col0'] == 'Yes'){
				print '<label><input type="radio" name="col0" id="col0a" value="Yes" onclick="ShowHideCol1();" checked="checked" /> Yes</label><br />
					<label><input name="col0" type="radio" id="col0b" value="No" onclick="ShowHideCol1(); NotATransfer();" /> No</label>';
			} 
			elseif (isset($_SESSION['col0']) && $_SESSION['col0'] == 'No'){
				print '<label><input type="radio" name="col0" id="col0a" value="Yes" onclick="ShowHideCol1();" /> Yes</label><br />
					<label><input name="col0" type="radio" id="col0b" value="No" onclick="ShowHideCol1(); NotATransfer();" checked="checked" /> No</label>';
			}
			else 
				print '<label><input type="radio" name="col0" id="col0a" value="Yes" onclick="ShowHideCol1();" /> Yes</label><br />
					<label><input name="col0" type="radio" id="col0b" value="No" onclick="ShowHideCol1(); NotATransfer();" /> No</label>';	
								
		print '</p>
		<div class="ifYes" id="ColDiv1" style="display:none;">
			<p><span class="FormLabel">Have you taken college courses after completing '.$NamingConvTwo.'?</span> <span class="Required">*</span><br />';
			
			if(isset($_SESSION['transfer_student']) && $_SESSION['transfer_student'] == 'Yes'){
				print '<label><input type="radio" name="transfer_student" id="transfer_studenta" value="Yes" onclick="ShowHideCol1();" checked="checked" /> Yes</label><br />
					<label><input name="transfer_student" type="radio" id="transfer_studentb" value="No" onclick="ShowHideCol1();" /> No</label>';
			} 
			elseif (isset($_SESSION['transfer_student']) && $_SESSION['transfer_student'] == 'No'){
				print '<label><input type="radio" name="transfer_student" id="transfer_studenta" value="Yes" onclick="ShowHideCol1();" /> Yes</label><br />
					<label><input name="transfer_student" type="radio" id="transfer_studentb" value="No" onclick="ShowHideCol1();" checked="checked" /> No</label>';
			}
			else 
				print '<label><input type="radio" name="transfer_student" id="transfer_studenta" value="Yes" onclick="ShowHideCol1();" /> Yes</label><br />
					<label><input name="transfer_student" type="radio" id="transfer_studentb" value="No" onclick="ShowHideCol1();" /> No</label>';	
			
			print '</p>';
			
			print '<p>Please List each institution you have attended starting with
				the most recent, including Northern Michigan University, if applicable.
				Please include any colleges you attended during high school.</p>
			<p><span class="FormLabel">'.$NamingConv.' Name </span><br />
					<input name="college_name_1" size="50" type="text" class="FormFieldTextBox" id="college_name_1" value="'.$_SESSION['college_name_1'].'" />
			</p>
			<table border="0" cellspacing="0">
				<tr>
					<td width="200"><span class="FormLabel">City </span><br />
							<input name="college_city_1" type="text" class="FormFieldTextBox" id="college_city_1" value="'.$_SESSION['college_city_1'].'" size="25" /></td>
					<td width="180"><span class="FormLabel">';
							
							if($_SESSION['us_citizen'] =='No')
							print 'State/Province</span><br /><input name="college_state_1" type="text" class="FormFieldTextBox" id="college_state_1" value="'.$_SESSION['college_state_1'].'" size="20" />';
							else
							{
								$classSqlQuery = new SqlDataQueries();
								print'State</span><br />
								<select name="college_state_1" class="FormFieldTextBox" id="college_state_1">';
										$strQuery = "SELECT StateFullname, StateAbr FROM cms_common_data_states ORDER BY StateFullname";
										$aResults = $classSqlQuery->MySQL_Queries($strQuery);
										HTML_AddOption('college_state_1', "", "");
										foreach($aResults as $aRow)
											HTML_AddOption('college_state_1', $aRow['StateFullname'], $aRow['StateFullname']);
										HTML_AddOption('college_state_1', '----------', '----------');
										HTML_AddOption('college_state_1', "Not Listed", "Not Listed");
								print'</select>';		
							}
									
					print '</td>
					<td width="100"><span class="FormLabel">Zip/Postal code</span> <br />
							<input name="college_zip_1" type="text" class="FormFieldTextBox" id="college_zip_1" value="'.$_SESSION['college_zip_1'].'" size="10" /></td>
				</tr>
			</table>';
			$classSqlQuery = new SqlDataQueries();				
				print'<p><span class="FormLabel">Country</span><br /> 
						<select name="college_country_1" id="college_country_1">';
						HTML_AddOption('college_country_1', "", "");
						HTML_AddOption('college_country_1', "United States", "United States");
						HTML_AddOption('college_country_1', "-", "-");
						$strQuery = "SELECT CountryName FROM cms_common_data_countries ORDER BY CountryName";
						$aResults = $classSqlQuery->MySQL_Queries($strQuery);
						foreach($aResults as $aRow)
						{
							if($aRow['CountryName'] != 'United States')
							HTML_AddOption('college_country_1', $aRow['CountryName'], $aRow['CountryName']);
						}
						HTML_AddOption('college_country_1', '----------', '----------');
						HTML_AddOption('college_country_1', 'Not Listed', 'Not Listed');
				print'</select></p>';
			
			print '<p><span class="FormLabel">Dates attended </span><br />
					<select name="attended_from_mo_1" id="attended_from_mo_1">					
						<option value=""></option>';
						foreach ($mArray as $value){
							print '<option value="'.$value.'"';
							if($value == $_SESSION['attended_from_mo_1'])
							print ' selected="selected" ';
							print'>'.$value.'</option>';
						}
					
						print '
					</select>
					<select name="attended_from_yr_1" id="attended_from_yr_1" class="FormFieldTextBox">						
						<option value=""></option>';
				
						$i=-2;
						while($i<=80){
							$year = date("Y")-$i;
							print '<option value="'.$year.'"';
							if ($_SESSION['attended_from_yr_1']==$year)
							print ' selected="selected" ';
							print '>'.$year.'</option>';
							$i++;
						}
				
						print '	
					</select>
				through
				
				<select name="attended_to_mo_1" id="attended_to_mo_1">					
						<option value=""></option>';
						foreach ($mArray as $value){
							print '<option value="'.$value.'"';
							if($value == $_SESSION['attended_to_mo_1'])
							print ' selected="selected" ';
							print'>'.$value.'</option>';
						}
					
						print '
					</select>
					<select name="attended_to_yr_1" id="attended_to_yr_1" class="FormFieldTextBox">						
						<option value=""></option>';
				
						$i=-2;
						while($i<=80){
							$year = date("Y")-$i;
							print '<option value="'.$year.'"';
							if ($_SESSION['attended_to_yr_1']==$year)
							print ' selected="selected" ';
							print '>'.$year.'</option>';
							$i++;
						}
				
						print '	
				</select>
			</p>
			<p><span class="FormLabel">Credit hours </span><br />
					<input name="college_credit_1" type="text" class="FormFieldTextBox" id="college_credit_1" value="'.$_SESSION['college_credit_1'].'" size="5" />
			</p>
			<p><span class="FormLabel">Credential (degree, diploma, certificate) attained -if any</span><br />
					<input name="college_degree_attained_1" type="text" size="50" id="college_degree_attained_1" value="'.$_SESSION['college_degree_attained_1'].'" />	
			</p>
			<p><span class="FormLabel">Date credential attained</span><br />
					<select name="college_degree_attained_mo_1" id="college_degree_attained_mo_1">					
						<option value=""></option>';
						foreach ($mArray as $value){
							print '<option value="'.$value.'"';
							if($value == $_SESSION['college_degree_attained_mo_1'])
							print ' selected="selected" ';
							print'>'.$value.'</option>';
						}
					
						print '
					</select>
					<select name="college_degree_attained_yr_1" id="college_degree_attained_yr_1" class="FormFieldTextBox">						
						<option value=""></option>';
				
						$i=-2;
						while($i<=80){
							$year = date("Y")-$i;
							print '<option value="'.$year.'"';
							if ($_SESSION['college_degree_attained_yr_1']==$year)
							print ' selected="selected" ';
							print '>'.$year.'</option>';
							$i++;
						}
				
						print '	
					</select>
			</p>
			<p><span class="FormLabel">Did you attend more than one '.$NamingConv.'?</span><br />';
					
			if(isset($_SESSION['col1']) && $_SESSION['col1'] == 'Yes'){
				print '<label><input type="radio" name="col1" id="col1a" value="Yes" onclick="ShowHideCol2();" checked="checked" /> Yes</label><br />
					<label><input name="col1" type="radio" id="col1b" value="No" onclick="ShowHideCol2();" />	No</label>';
			} 
			elseif (isset($_SESSION['col1']) && $_SESSION['col1'] == 'No'){
				print '<label><input type="radio" name="col1" id="col1a" value="Yes" onclick="ShowHideCol2();" /> Yes</label><br />
					<label><input name="col1" type="radio" id="col1b" value="No" onclick="ShowHideCol2();" checked="checked" />	No</label>';
			}
			else 
				print '<label><input type="radio" name="col1" id="col1a" value="Yes" onclick="ShowHideCol2();" /> Yes</label><br />
					<label><input name="col1" type="radio" id="col1b" value="No" checked="checked" onclick="ShowHideCol2();" />	No</label>';	
					
			print '</p>
		</div>
			<div class="ifYes" id="ColDiv2" style="display:none;">
			<p><span class="FormLabel">'.$NamingConv.' Name </span><br />
						<input name="college_name_2" type="text" size="50" class="FormFieldTextBox" id="college_name_2" value="'.$_SESSION['college_name_2'].'" />
				</p>
				<table border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td width="200"><span class="FormLabel">City </span><br />
								<input name="college_city_2" type="text" class="FormFieldTextBox" id="college_city_2" value="'.$_SESSION['college_city_2'].'" size="25" /></td>
						<td width="180"><span class="FormLabel">';
								
							if($_SESSION['us_citizen'] =='No')
							print 'State/Province</span><br /><input name="college_state_2" type="text" class="FormFieldTextBox" id="college_state_2" value="'.$_SESSION['college_state_2'].'" size="20" />';
							else
							{
								$classSqlQuery = new SqlDataQueries();
								print'State</span><br />
								<select name="college_state_2" class="FormFieldTextBox" id="college_state_2">';
										$strQuery = "SELECT StateFullname, StateAbr FROM cms_common_data_states ORDER BY StateFullname";
										$aResults = $classSqlQuery->MySQL_Queries($strQuery);
										HTML_AddOption('college_state_2', "", "");
										foreach($aResults as $aRow)
											HTML_AddOption('college_state_2', $aRow['StateFullname'], $aRow['StateFullname']);
										HTML_AddOption('college_state_2', '----------', '----------');
										HTML_AddOption('college_state_2', "Not Listed", "Not Listed");
								print'</select>';		
							}
								
						print '</td>';				
						print '<td width="100"><span class="FormLabel">Zip/Postal code</span> <br />
								<input name="college_zip_2" type="text" class="FormFieldTextBox" id="college_zip_2" value="'.$_SESSION['college_zip_2'].'" size="10" /></td>
					</tr>
				</table>';
				$classSqlQuery = new SqlDataQueries();				
				print'<p><span class="FormLabel">Country</span><br /> 
						<select name="college_country_2" id="college_country_2">';
						HTML_AddOption('college_country_2', "", "");
						HTML_AddOption('college_country_2', "United States", "United States");
						HTML_AddOption('college_country_2', "-", "-");
						$strQuery = "SELECT CountryName FROM cms_common_data_countries ORDER BY CountryName";
						$aResults = $classSqlQuery->MySQL_Queries($strQuery);
						foreach($aResults as $aRow)
						{
							if($aRow['CountryName'] != 'United States')
								HTML_AddOption('college_country_2', $aRow['CountryName'], $aRow['CountryName']);
						}
						HTML_AddOption('college_country_2', '----------', '----------');
						HTML_AddOption('college_country_2', 'Not Listed', 'Not Listed');
				print'</select></p>';				
				
				print '<p><span class="FormLabel">Dates attended </span><br />
					
					<select name="attended_from_mo_2" id="attended_from_mo_2">					
						<option value=""></option>';
						foreach ($mArray as $value){
							print '<option value="'.$value.'"';
							if($value == $_SESSION['attended_from_mo_2'])
							print ' selected="selected" ';
							print'>'.$value.'</option>';
						}
					
						print '
					</select>
					<select name="attended_from_yr_2" id="attended_from_yr_2" class="FormFieldTextBox">						
						<option value=""></option>';
				
						$i=-2;
						while($i<=80){
							$year = date("Y")-$i;
							print '<option value="'.$year.'"';
							if ($_SESSION['attended_from_yr_2']==$year)
							print ' selected="selected" ';
							print '>'.$year.'</option>';
							$i++;
						}
				
						print '	
					</select>
					
					through
					
					<select name="attended_to_mo_2" id="attended_to_mo_2">					
						<option value=""></option>';
						foreach ($mArray as $value){
							print '<option value="'.$value.'"';
							if($value == $_SESSION['attended_to_mo_2'])
							print ' selected="selected" ';
							print'>'.$value.'</option>';
						}
					
						print '
					</select>
					<select name="attended_to_yr_2" id="attended_to_yr_2" class="FormFieldTextBox">						
						<option value=""></option>';
				
						$i=-2;
						while($i<=80){
							$year = date("Y")-$i;
							print '<option value="'.$year.'"';
							if ($_SESSION['attended_to_yr_2']==$year)
							print ' selected="selected" ';
							print '>'.$year.'</option>';
							$i++;
						}
				
						print '	
					</select>
					
				</p>
				<p><span class="FormLabel">Credit hours </span><br />
						<input name="college_credit_2" type="text" class="FormFieldTextBox" id="college_credit_2" value="'.$_SESSION['college_credit_2'].'" size="5" />
				</p>
				<p><span class="FormLabel">Credential (degree, diploma, certificate) attained -if any</span><br />
						<input name="college_degree_attained_2" size="50" type="text" id="college_degree_attained_2" value="'.$_SESSION['college_degree_attained_2'].'" />
				</p>
				<p><span class="FormLabel">Date credential attained</span><br />
						
					<select name="college_degree_attained_mo_2" id="college_degree_attained_mo_2">					
						<option value=""></option>';
						foreach ($mArray as $value){
							print '<option value="'.$value.'"';
							if($value == $_SESSION['college_degree_attained_mo_2'])
							print ' selected="selected" ';
							print'>'.$value.'</option>';
						}
					
						print '
					</select>
					<select name="college_degree_attained_yr_2" id="college_degree_attained_yr_2" class="FormFieldTextBox">						
						<option value=""></option>';
				
						$i=-2;
						while($i<=80){
							$year = date("Y")-$i;
							print '<option value="'.$year.'"';
							if ($_SESSION['college_degree_attained_yr_2']==$year)
							print ' selected="selected" ';
							print '>'.$year.'</option>';
							$i++;
						}
				
						print '	
					</select>
				</p>
				<p><span class="FormLabel">Did you attend more than two '.$NamingConv.'s?</span><br />';
						
			if(isset($_SESSION['col2']) && $_SESSION['col2'] == 'Yes'){
				print '<label><input type="radio" name="col2" id="col2a" value="Yes" onclick="ShowHideCol3();" checked="checked" /> Yes</label><br />
						<label><input name="col2" type="radio" id="col2b" value="No" onclick="ShowHideCol3();" /> No</label>';
			} 
			elseif (isset($_SESSION['col2']) && $_SESSION['col2'] == 'No'){
				print '<label><input type="radio" name="col2" id="col2a" value="Yes" onclick="ShowHideCol3();" /> Yes</label><br />
						<label><input name="col2" type="radio" id="col2b" value="No" onclick="ShowHideCol3();" checked="checked" /> No</label>';
			}
			else 
				print '<label><input type="radio" name="col2" id="col2a" value="Yes" onclick="ShowHideCol3();" /> Yes</label><br />
						<label><input name="col2" type="radio" id="col2b" value="No" checked="checked" onclick="ShowHideCol3();" />	No</label>';	
						
									
				print '</p>
			</div>
			<div class="ifYes" id="ColDiv3" style="display:none;">
			<p><span class="FormLabel">'.$NamingConv.' Name </span><br />
						<input name="college_name_3" type="text" size="50" class="FormFieldTextBox" id="college_name_3" value="'.$_SESSION['college_name_3'].'" />
				</p>
				<table border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td width="200"><span class="FormLabel">City </span><br />
								<input name="college_city_3" type="text" class="FormFieldTextBox" id="college_city_3" value="'.$_SESSION['college_city_3'].'" size="25" /></td>
						<td width="180"><span class="FormLabel">';
								
								if($_SESSION['us_citizen'] =='No')
							print 'State/Province</span><br /><input name="college_state_3" type="text" class="FormFieldTextBox" id="college_state_3" value="'.$_SESSION['college_state_3'].'" size="20" />';
							else
							{
								$classSqlQuery = new SqlDataQueries();
								print'State</span><br />
								<select name="college_state_3" class="FormFieldTextBox" id="college_state_3">';
										$strQuery = "SELECT StateFullname, StateAbr FROM cms_common_data_states ORDER BY StateFullname";
										$aResults = $classSqlQuery->MySQL_Queries($strQuery);
										HTML_AddOption('college_state_3', "", "");
										foreach($aResults as $aRow)
											HTML_AddOption('college_state_3', $aRow['StateFullname'], $aRow['StateFullname']);
										HTML_AddOption('college_state_3', '----------', '----------');
										HTML_AddOption('college_state_3', "Not Listed", "Not Listed");
								print'</select>';		
							}
		
						print '</td>';		
						print '<td width="100"><span class="FormLabel">Zip/Postal code</span> <br />
								<input name="college_zip_3" type="text" class="FormFieldTextBox" id="college_zip_3" value="'.$_SESSION['college_zip_3'].'" size="10" /></td>
					</tr>
				</table>';
				
				$classSqlQuery = new SqlDataQueries();				
				print'<p><span class="FormLabel">Country</span><br /> 
						<select name="college_country_3" id="college_country_3">';
						HTML_AddOption('college_country_3', "", "");
						HTML_AddOption('college_country_3', "United States", "United States");
						HTML_AddOption('college_country_3', "-", "-");
						$strQuery = "SELECT CountryName FROM cms_common_data_countries ORDER BY CountryName";
						$aResults = $classSqlQuery->MySQL_Queries($strQuery);
						foreach($aResults as $aRow)
						{
							if($aRow['CountryName'] != 'United States')
								HTML_AddOption('college_country_3', $aRow['CountryName'], $aRow['CountryName']);
						}
						HTML_AddOption('college_country_3', '----------', '----------');
						HTML_AddOption('college_country_3', 'Not Listed', 'Not Listed');
				print'</select></p>';	
								
				print '<p><span class="FormLabel">Dates attended </span><br />
										
					<select name="attended_from_mo_3" id="attended_from_mo_3">					
						<option value=""></option>';
						foreach ($mArray as $value){
							print '<option value="'.$value.'"';
							if($value == $_SESSION['attended_from_mo_3'])
							print ' selected="selected" ';
							print'>'.$value.'</option>';
						}
					
						print '
					</select>
					<select name="attended_from_yr_3" id="attended_from_yr_3" class="FormFieldTextBox">						
						<option value=""></option>';
				
						$i=-2;
						while($i<=80){
							$year = date("Y")-$i;
							print '<option value="'.$year.'"';
							if ($_SESSION['attended_from_yr_3']==$year)
							print ' selected="selected" ';
							print '>'.$year.'</option>';
							$i++;
						}
				
						print '	
					</select>
						
					through
					
					<select name="attended_to_mo_3" id="attended_to_mo_3">					
						<option value=""></option>';
						foreach ($mArray as $value){
							print '<option value="'.$value.'"';
							if($value == $_SESSION['attended_to_mo_3'])
							print ' selected="selected" ';
							print'>'.$value.'</option>';
						}
					
						print '
					</select>
					<select name="attended_to_yr_3" id="attended_to_yr_3" class="FormFieldTextBox">						
						<option value=""></option>';
				
						$i=-2;
						while($i<=80){
							$year = date("Y")-$i;
							print '<option value="'.$year.'"';
							if ($_SESSION['attended_to_yr_3']==$year)
							print ' selected="selected" ';
							print '>'.$year.'</option>';
							$i++;
						}
				
						print '	
					</select>
					
				</p>
				<p><span class="FormLabel">Credit hours </span><br />
						<input name="college_credit_3" type="text" class="FormFieldTextBox" id="college_credit_3" value="'.$_SESSION['college_credit_3'].'" size="5" />
				</p>
				<p><span class="FormLabel">Credential (degree, diploma, certificate) attained -if any</span><br />
						<input name="college_degree_attained_3" size="50" type="text" id="college_degree_attained_3" value="'.$_SESSION['college_degree_attained_3'].'" />
				</p>
				<p><span class="FormLabel">Date credential attained</span><br />
						
					<select name="college_degree_attained_mo_3" id="college_degree_attained_mo_3">					
						<option value=""></option>';
						foreach ($mArray as $value){
							print '<option value="'.$value.'"';
							if($value == $_SESSION['college_degree_attained_mo_3'])
							print ' selected="selected" ';
							print'>'.$value.'</option>';
						}
					
						print '
					</select>
					<select name="college_degree_attained_yr_3" id="college_degree_attained_yr_3" class="FormFieldTextBox">						
						<option value=""></option>';
				
						$i=-2;
						while($i<=80){
							$year = date("Y")-$i;
							print '<option value="'.$year.'"';
							if ($_SESSION['college_degree_attained_yr_3']==$year)
							print ' selected="selected" ';
							print '>'.$year.'</option>';
							$i++;
						}
				
						print '	
					</select>
				</p>
				<p><span class="FormLabel">Did you attend more than three '.$NamingConv.'s?</span><br />';
		
		
			if(isset($_SESSION['col3']) && $_SESSION['col3'] == 'Yes'){
				print '<label><input type="radio" name="col3" id="col3a" value="Yes" onclick="ShowHideCol4();" checked="checked" /> Yes</label><br />
						<label><input name="col3" type="radio" id="col3b" value="No" onclick="ShowHideCol4();" /> No</label>';
			} 
			elseif (isset($_SESSION['col3']) && $_SESSION['col3'] == 'No'){
				print '<label><input type="radio" name="col3" id="col3a" value="Yes" onclick="ShowHideCol4();" /> Yes</label><br />
						<label><input name="col3" type="radio" id="col3b" value="No" onclick="ShowHideCol4();" checked="checked" /> No</label>';
			}
			else 
				print '<label><input type="radio" name="col3" id="col3a" value="Yes" onclick="ShowHideCol4();" /> Yes</label><br />
						<label><input name="col3" type="radio" id="col3b" value="No" onclick="ShowHideCol4();" checked="checked" />	No</label>';	
			
				print '</p>
			</div>
			
			<div class="ifYes" id="ColDiv4" style="display:none;">
			<p class="FormLabel">Additional College Information<br />
						<label>
						<textarea name="additional_college" id="additional_college" cols="80" rows="7">'.$_SESSION['additional_college'].'</textarea>
						</label>
				</p>
			</div>';
		
		if($_SESSION['us_citizen']=='No' &&  $_SESSION['us_resident']=='No'){
			print '<p><span class="FormLabel">Are you currently enrolled in an ESL program (English-as-a-Second-Language)?</span><br />';
			
			if(isset($_SESSION['esl']) && $_SESSION['esl'] == 'Yes'){
				print '<label><input name="esl" type="radio" class="FormFieldTextBox" value="Yes" onclick="ESLProgram();" checked /> Yes</label><br />
			<label><input name="suspended" type="radio" class="FormFieldTextBox" value="No" onclick="ESLProgram();" /> No</label>';
			} 
			elseif (isset($_SESSION['esl']) && $_SESSION['esl'] == 'No'){
				print '<label><input name="esl" type="radio" class="FormFieldTextBox" value="Yes" onclick="ESLProgram();" /> Yes</label><br />
			<label><input name="esl" type="radio" class="FormFieldTextBox" value="No" onclick="ESLProgram();" checked /> No</label>';
			}
			else 
				print '<label><input name="esl" type="radio" class="FormFieldTextBox" value="Yes" onclick="ESLProgram();" /> Yes</label><br />
			<label><input name="esl" type="radio" class="FormFieldTextBox" value="No" onclick="ESLProgram();" /> No</label>';	
			print '</p>
			
			<div class="ifYes" id="ESLDiv" style="display:none;">Please ask your ESL program director to send a transcript or letter verifying attendance to: <br /><blockquote>NMU Admissions Office <br />1401 Presque Isle Ave. <br />Marquette, MI, 49855</blockquote></div>';
		}

		
		print '<p><span class="FormLabel">Have you ever been suspended or dismissed from any college or university?</span> <span class="Required">*</span><br />';
		
			if(isset($_SESSION['suspended']) && $_SESSION['suspended'] == 'Yes'){
				print '<label><input name="suspended" type="radio" class="FormFieldTextBox" value="Yes" onclick="DismissedCheck();" checked /> Yes</label><br />
			<label><input name="suspended" type="radio" class="FormFieldTextBox" value="No" onclick="DismissedCheck();" /> No</label>';
			} 
			elseif (isset($_SESSION['suspended']) && $_SESSION['suspended'] == 'No'){
				print '<label><input name="suspended" type="radio" class="FormFieldTextBox" value="Yes" onclick="DismissedCheck();" /> Yes</label><br />
			<label><input name="suspended" type="radio" class="FormFieldTextBox" value="No" onclick="DismissedCheck();" checked /> No</label>';
			}
			else 
				print '<label><input name="suspended" type="radio" class="FormFieldTextBox" value="Yes" onclick="DismissedCheck();" /> Yes</label><br />
			<label><input name="suspended" type="radio" class="FormFieldTextBox" value="No" onclick="DismissedCheck();" /> No</label>';	
			
			print '</p>
		<div class="ifYes" id="SuspendedDiv" style="display:none;">
			<p class="FormLabel">When?<br />
					
					<select name="suspended_when_month" id="suspended_when_month">					
							<option value=""></option>';
							foreach ($mArray as $value){
								print '<option value="'.$value.'"';
								if($value == $_SESSION['suspended_when_month'])
								print ' selected="selected" ';
								print'>'.$value.'</option>';
							}
						
							print '
						</select>
						<select name="suspended_when_year" id="suspended_when_year" class="FormFieldTextBox">						
							<option value=""></option>';
					
							$i=0;
							while($i<=80){
								$year = date("Y")-$i;
								print '<option value="'.$year.'"';
								if ($_SESSION['suspended_when_year']==$year)
								print ' selected="selected" ';
								print '>'.$year.'</option>';
								$i++;
							}
					
							print '	
						</select>
					
			</p>
			<p class="FormLabel">What school?<br />
					<input name="suspended_school" type="text" class="FormFieldTextBox" size="40" id="suspended_school" value="'.$_SESSION['suspended_school'].'" />
			</p>
			<p class="FormLabel">Please explain<br />
					<textarea name="suspended_explain" cols="60" rows="4" class="FormFieldTextBox" id="suspended_explain">'.$_SESSION['suspended_explain'].'</textarea>
			</p>
		</div>';
		
				print '</form>';

		$strBackURL = CORE_GetURL(Const_SelfURL, CORE_GetQueryStringVar(Const_Action), Const_Phase5, "", "", "");
		$strCancelURL = CORE_GetURL(Const_SelfURL, CORE_GetQueryStringVar(Const_Action), Const_Phase9, "", "", "");
		if(CORE_GetQueryStringVar(Const_Subaction) == "quickEdit")
			HTML_AddButtons('', "Submit Change", "", "Cancel", $strCancelURL, "", "");
		else
			HTML_AddButtons('', "Continue", "", "Back", $strBackURL, "", "");
	}
	catch (Exception $ex)
	{
		throw new Exception($ex->getMessage());
	}
}

//test scores
function Display_ApplicationPage5()
{
	try
	{
		CORE_DisplayPageHead();

		$strURL = str_replace("Admin/Components", "AdmissionsApp", CORE_GetURL(Const_RawURL, CORE_GetQueryStringVar(Const_Action), CORE_GetQueryStringVar(Const_Phase), "", CORE_GetQueryStringVar(Const_Subaction), ""));
		HTML_AddForm($strURL, "");
print '<h3><span style="color:red;">DEV</span></h3>';

		//javascript and styles
		print '<link href="elements/application.css" rel="stylesheet" type="text/css" />
		<script language="javascript" type="text/javascript">
		<!--
			window.onload = loadfields;
			function loadfields(){
				actToggle();
				satToggle();
			}
			
			function actToggle(){
				if(document.myForm.take_act[0].checked){
					document.getElementById("ACTTest").style.display = "block";
					document.getElementById("ACTTestNo").style.display = "none";
					document.myForm.act_taken_first_month.selectedIndex=0;
					document.myForm.act_taken_first_year.selectedIndex=0;
					}
				if(document.myForm.take_act[1].checked){
					document.getElementById("ACTTest").style.display = "none";
					document.myForm.act_score.value="";
					document.myForm.act_taken_month.selectedIndex=0;
					document.myForm.act_taken_year.selectedIndex=0;
					document.myForm.act_taken_again_month.selectedIndex=0;
					document.myForm.act_taken_again_year.selectedIndex=0;
					document.getElementById("ACTTestNo").style.display = "block";
				}
			}
			
			function satToggle(){
				if(document.myForm.take_sat[0].checked){
					document.getElementById("SATTest").style.display = "block";
					document.getElementById("SATTestNo").style.display = "none";
					document.myForm.sat_date_first_month.selectedIndex=0;
					document.myForm.sat_date_first_year.selectedIndex=0;
					}
				if(document.myForm.take_sat[1].checked){
					document.getElementById("SATTest").style.display = "none";
					document.myForm.sat_score.value="";
					document.myForm.sat_date_month.selectedIndex=0;
					document.myForm.sat_date_year.selectedIndex=0;
					document.myForm.sat_date_again_month.selectedIndex=0;
					document.myForm.sat_date_again_year.selectedIndex=0;
					document.getElementById("SATTestNo").style.display = "block";
				}
			}
			
		//-->
		</script>';	
		
		//content
		$mArray = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		print '<p><span class="SectionText">Please provide your standardized testing information.</span></p>

		<p><span class="FormLabel">Have you taken the ACT?</span><br />';
					
			if(isset($_SESSION['take_act']) && $_SESSION['take_act'] == 'Yes'){
				print '<label class="FormLabelNoBold"><input type="radio" name="take_act" value="Yes" onClick="actToggle();" checked />Yes</label><br />
			<label class="FormLabelNoBold"><input type="radio" name="take_act" value="No" onClick="actToggle();" />No</label>';
			} 
			elseif (isset($_SESSION['take_act']) && $_SESSION['take_act'] == 'No'){
				print '<label class="FormLabelNoBold"><input type="radio" name="take_act" value="Yes" onClick="actToggle();" />Yes</label><br />
			<label class="FormLabelNoBold"><input type="radio" name="take_act" value="No" onClick="actToggle();" checked />No</label>';
			}
			else 
				print '<label class="FormLabelNoBold"><input type="radio" name="take_act" onClick="actToggle();" value="Yes" />Yes</label><br />
			<label class="FormLabelNoBold"><input type="radio" name="take_act" value="No" onClick="actToggle();" />No</label>';		
			
			
		print'<div class="ifYes" id="ACTTest" style="display:none;">
		<p><span class="FormLabel">What is your highest ACT Composite Score?</span><br />
			<input name="act_score" type="text" class="FormFieldTextBox" id="act_score" value="'.$_SESSION['act_score'].'" size="4" />
		</p>
		<p class="FormLabel">Please indicate the month/year when you took the ACT and achieved the score listed above.<br />
		
		<select name="act_taken_month" id="act_taken_month">					
			<option value=""></option>';
			foreach ($mArray as $value){
				print '<option value="'.$value.'"';
				if($value == $_SESSION['act_taken_month'])
				print ' selected="selected" ';
				print'>'.$value.'</option>';
			}
			print '
		</select>	
	
		<select name="act_taken_year" id="act_taken_year" class="FormFieldTextBox">						
			<option value=""></option>';
	
			$i=0;
			while($i<=20){
				$year = date("Y")-$i;
				print '<option value="'.$year.'"';
				if ($_SESSION['act_taken_year']==$year)
				print ' selected="selected" ';
				print '>'.$year.'</option>';
				$i++;
			}
	
			print '	
		</select>
		</p>
		
		<p class="FormLabel">If you plan on taking the ACT again, indicate the month/year when you plan on taking the test.<br />
			<select name="act_taken_again_month" id="act_taken_again_month">					
				<option value=""></option>';
				foreach ($mArray as $value){
					print '<option value="'.$value.'"';
					if($value == $_SESSION['act_taken_again_month'])
					print ' selected="selected" ';
					print'>'.$value.'</option>';
				}
				print '
			</select>	
			
			<select name="act_taken_again_year" id="act_taken_again_year" class="FormFieldTextBox">						
				<option value=""></option>';
		
				$i='-5';
				while($i<=0){
					$year = date("Y")-$i;
					print '<option value="'.$year.'"';
					if ($_SESSION['act_taken_again_year']==$year)
					print ' selected="selected" ';
					print '>'.$year.'</option>';
					$i++;
				}
		
				print '	
			</select>
		</p>
		</div>
		<div class="ifYes" id="ACTTestNo" style="display:none;">
		<p class="FormLabel">If you plan on taking the ACT, indicate the month/year when you plan on taking the test.<br />
			<select name="act_taken_first_month" id="act_taken_first_month">					
				<option value=""></option>';
				foreach ($mArray as $value){
					print '<option value="'.$value.'"';
					if($value == $_SESSION['act_taken_first_month'])
					print ' selected="selected" ';
					print'>'.$value.'</option>';
				}
				print '
			</select>	
			
			<select name="act_taken_first_year" id="act_taken_first_year" class="FormFieldTextBox">						
				<option value=""></option>';
		
				$i='-5';
				while($i<=0){
					$year = date("Y")-$i;
					print '<option value="'.$year.'"';
					if ($_SESSION['act_taken_first_year']==$year)
					print ' selected="selected" ';
					print '>'.$year.'</option>';
					$i++;
				}
		
				print '	
			</select>
		</p>
		</div>';

		print'<p><span class="FormLabel">Have you taken the SAT?</span><br />';
		
			if(isset($_SESSION['take_sat']) && $_SESSION['take_sat'] == 'Yes'){
				print '<label class="FormLabelNoBold"><input type="radio" name="take_sat" value="Yes" onClick="satToggle();" checked />Yes</label><br />
			<label class="FormLabelNoBold"><input type="radio" name="take_sat" value="No" onClick="satToggle();" />No</label>';
			} 
			elseif (isset($_SESSION['take_sat']) && $_SESSION['take_sat'] == 'No'){
				print '<label class="FormLabelNoBold"><input type="radio" name="take_sat" onClick="satToggle();" value="Yes" />Yes</label><br />
			<label class="FormLabelNoBold"><input type="radio" name="take_sat" value="No" onClick="satToggle();" checked />No</label>';
			}
			else 
				print '<label class="FormLabelNoBold"><input type="radio" name="take_sat" onClick="satToggle();" value="Yes" />Yes</label><br />
			<label class="FormLabelNoBold"><input type="radio" name="take_sat" value="No" onClick="satToggle();" />No</label>';	


		print'<div class="ifYes" id="SATTest"  style="display:none;">
		<p><span class="FormLabel">What is your highest combined Critical Reading/Math score from one test date?</span><br />
			<input name="sat_score" type="text" class="FormFieldTextBox" id="sat_score" value="'.$_SESSION['sat_score'].'" size="4" />
		</p>
		<p class="FormLabel">Please indicate the month/year when you took the SAT and achieved the score listed above.<br />
		
		
			<select name="sat_date_month" id="sat_date_month">					
					<option value=""></option>';
					foreach ($mArray as $value){
						print '<option value="'.$value.'"';
						if($value == $_SESSION['sat_date_month'])
						print ' selected="selected" ';
						print'>'.$value.'</option>';
					}
					print '
				</select>	
			
			<select name="sat_date_year" id="sat_date_year" class="FormFieldTextBox">						
				<option value=""></option>';
		
				$i=0;
				while($i<=20){
					$year = date("Y")-$i;
					print '<option value="'.$year.'"';
					if ($_SESSION['sat_date_year']==$year)
					print ' selected="selected" ';
					print '>'.$year.'</option>';
					$i++;
				}
		
				print '	
			</select>
		</p>
		<p class="FormLabel">If you plan on taking the SAT again, indicate the month/year when you plan on taking the test.<br />
		<select name="sat_date_again_month" id="sat_date_again_month">					
			<option value=""></option>';
			foreach ($mArray as $value){
				print '<option value="'.$value.'"';
				if($value == $_SESSION['sat_date_again_month'])
				print ' selected="selected" ';
				print'>'.$value.'</option>';
			}
			print '
		</select>	
		
		<select name="sat_date_again_year" id="sat_date_again_year" class="FormFieldTextBox">						
			<option value=""></option>';
	
			$i='-5';
			while($i<=0){
				$year = date("Y")-$i;
				print '<option value="'.$year.'"';
				if ($_SESSION['sat_date_again_year']==$year)
				print ' selected="selected" ';
				print '>'.$year.'</option>';
				$i++;
			}
	
			print '	
		</select>
		</p>
		</div>
		<div class="ifYes" id="SATTestNo"  style="display:none;">
			<p class="FormLabel">If you plan on taking the SAT , indicate the month/year when you plan on taking the test.<br />
				<select name="sat_date_first_month" id="sat_date_first_month">					
					<option value=""></option>';
					foreach ($mArray as $value){
						print '<option value="'.$value.'"';
						if($value == $_SESSION['sat_date_first_month'])
						print ' selected="selected" ';
						print'>'.$value.'</option>';
					}
					print '
				</select>	
				
				<select name="sat_date_first_year" id="sat_date_first_year" class="FormFieldTextBox">						
					<option value=""></option>';
			
					$i='-5';
					while($i<=0){
						$year = date("Y")-$i;
						print '<option value="'.$year.'"';
						if ($_SESSION['sat_date_first_year']==$year)
						print ' selected="selected" ';
						print '>'.$year.'</option>';
						$i++;
					}
			
					print '	
				</select>
			</p>
		</div>';
			
			//only for non US citizens and non US residents
			if($_SESSION['us_citizen'] != 'Yes' && $_SESSION['us_resident'] != 'Yes'){
				print '<p><span class="SectionText">English proficiency</span></p>';
				print '<div class="ifYes" id="ProfTest">
					<p><span class="FormLabel">Have you completed an English proficiency test?</span><br />';

					if(isset($_SESSION['english_prof']) && $_SESSION['english_prof'] == 'Yes'){
						print '<label class="FormLabelNoBold"><input type="radio" name="english_prof" value="Yes" checked />Yes</label><br />
						<label class="FormLabelNoBold"><input type="radio" name="english_prof" value="No" />No</label>';
					} 
					elseif (isset($_SESSION['english_prof']) && $_SESSION['english_prof'] == 'No'){
						print '<label class="FormLabelNoBold"><input type="radio" name="english_prof" value="Yes" />Yes</label><br />
						<label class="FormLabelNoBold"><input type="radio" name="english_prof" value="No" checked />No</label>';
					}
					else 
						print '<label class="FormLabelNoBold"><input type="radio" name="english_prof" value="Yes" />Yes</label><br />
						<label class="FormLabelNoBold"><input type="radio" name="english_prof" value="No" />No</label>';

						print '</p>
					<p><span class="FormLabel">Please indicate the test you have taken or will take:</span><br />';
					
					
					if(isset($_SESSION['english_prof_test']) && $_SESSION['english_prof_test'] == 'TOEFL'){
						print '<label class="FormLabelNoBold"><input type="radio" name="english_prof_test" value="TOEFL" checked />TOEFL</label><br />
						<label class="FormLabelNoBold"><input type="radio" name="english_prof_test" value="IELTS" />IELTS<br /></label>
						<label class="FormLabelNoBold"><input type="radio" name="english_prof_test" value="MELAB" />MELAB</label></p>';
					} 
					elseif (isset($_SESSION['english_prof_test']) && $_SESSION['english_prof_test'] == 'IELTS'){
						print '<label class="FormLabelNoBold"><input type="radio" name="english_prof_test" value="TOEFL" />TOEFL</label><br />
						<label class="FormLabelNoBold"><input type="radio" name="english_prof_test" value="IELTS" checked />IELTS<br /></label>
						<label class="FormLabelNoBold"><input type="radio" name="english_prof_test" value="MELAB" />MELAB</label></p>';
					}
					elseif (isset($_SESSION['english_prof_test']) && $_SESSION['english_prof_test'] == 'MELAB'){
						print '<label class="FormLabelNoBold"><input type="radio" name="english_prof_test" value="TOEFL" />TOEFL</label><br />
						<label class="FormLabelNoBold"><input type="radio" name="english_prof_test" value="IELTS" />IELTS<br /></label>
						<label class="FormLabelNoBold"><input type="radio" name="english_prof_test" value="MELAB" checked />MELAB</label></p>';
					}
					else 
						print '<label class="FormLabelNoBold"><input type="radio" name="english_prof_test" value="TOEFL" />TOEFL</label><br />
						<label class="FormLabelNoBold"><input type="radio" name="english_prof_test" value="IELTS" />IELTS<br /></label>
						<label class="FormLabelNoBold"><input type="radio" name="english_prof_test" value="MELAB" />MELAB</label></p>';

						
					print '<p><span class="FormLabel">Date taken, or date you will take the test:</span><br />
					
					<select name="english_prof_date_month" id="english_prof_date_month">					
					<option value=""></option>';
					foreach ($mArray as $value){
						print '<option value="'.$value.'"';
						if($value == $_SESSION['english_prof_date_month'])
						print ' selected="selected" ';
						print'>'.$value.'</option>';
					}
					print '
				</select>	
			
			<select name="english_prof_date_year" id="english_prof_date_year" class="FormFieldTextBox">						
				<option value=""></option>';
		
				$i='-5';
				while($i<=20){
					$year = date("Y")-$i;
					print '<option value="'.$year.'"';
					if ($_SESSION['english_prof_date_year']==$year)
					print ' selected="selected" ';
					print '>'.$year.'</option>';
					$i++;
				}
		
				print '	
			</select>
					</p></div>';
			}
					print '</form>';

		$strBackURL = CORE_GetURL(Const_SelfURL, CORE_GetQueryStringVar(Const_Action), Const_Phase4, "", "", "");
		$strCancelURL = CORE_GetURL(Const_SelfURL, CORE_GetQueryStringVar(Const_Action), Const_Phase9, "", "", "");
		if(CORE_GetQueryStringVar(Const_Subaction) == "quickEdit")
			HTML_AddButtons('', "Submit Change", "", "Cancel", $strCancelURL, "", "");
		else
			HTML_AddButtons('', "Continue", "", "Back", $strBackURL, "", "");
	}
	catch (Exception $ex)
	{
		throw new Exception($ex->getMessage());
	}
}

//high school info
function Display_ApplicationPage4()
{
	try
	{
		CORE_DisplayPageHead();

		$strURL = str_replace("Admin/Components", "AdmissionsApp", CORE_GetURL(Const_RawURL, CORE_GetQueryStringVar(Const_Action), CORE_GetQueryStringVar(Const_Phase), "", CORE_GetQueryStringVar(Const_Subaction), ""));
		HTML_AddForm($strURL, "");
print '<h3><span style="color:red;">DEV</span></h3>';

		//javascript and styles
		print '<link href="elements/application.css" rel="stylesheet" type="text/css" />
		<script language="javascript" type="text/javascript">
		<!--
		window.onload = loadfields;
		function loadfields()
		{
			LoadHS();
			NeitherCheck();
			NoDegreeYet();
		}
				
		function NeitherCheck()
		{
			try
			{
				var oDiv = document.getElementById("NoDegree");
				var earnedDiv = document.getElementById("date_earned_div");
				var earnedSpanReq = document.getElementById("earned_which");
				if(document.myForm.earned[2].checked)
				{
					document.myForm.date_earned_month.disabled=true;
					document.myForm.date_earned_year.disabled=true;
					document.myForm.date_earned_month.selectedIndex=0;
					document.myForm.date_earned_year.selectedIndex=0;
					document.myForm.ifnot_willyou[0].disabled=false;
					document.myForm.ifnot_willyou[1].disabled=false;
					oDiv.style.display = "block";
					earnedDiv.style.display = "none";
					earnedSpanReq.style.display = "none";
				}
				else 
				{
					document.myForm.date_earned_month.disabled=false;
					document.myForm.date_earned_year.disabled=false;
					document.myForm.ifnot_willyou[0].disabled=true;
					document.myForm.ifnot_willyou[0].checked=false;
					document.myForm.ifnot_willyou[1].disabled=true;
					document.myForm.ifnot_willyou[1].checked=false;
					document.myForm.which_one.disabled=true;
					document.myForm.which_one.selectedIndex=0;
					document.myForm.expected_grad_date_month.disabled=true;
					document.myForm.expected_grad_date_year.disabled=true;
					document.myForm.expected_grad_date_month.selectedIndex=0;
					document.myForm.expected_grad_date_year.selectedIndex=0;
					oDiv.style.display = "none";
					earnedDiv.style.display = "block";
				}
			}
			catch(err)
			{
			return false;
			}
		}
				
		function NoDegreeYet()
		{
			var earnedSpanReq = document.getElementById("earned_which");
			try
			{
				if(document.myForm.ifnot_willyou[0].checked)
				{
					document.myForm.which_one.disabled=false;
					document.myForm.expected_grad_date_month.disabled=false;
					document.myForm.expected_grad_date_year.disabled=false;
					earnedSpanReq.style.display = "inline";
				}
				else 
				{
					document.myForm.which_one.disabled=true;
					document.myForm.expected_grad_date_month.disabled=true;
					document.myForm.expected_grad_date_year.disabled=true;
					document.myForm.expected_grad_date_month.selectedIndex=0;
					document.myForm.expected_grad_date_year.selectedIndex=0;
					document.myForm.which_one.selectedIndex=0;
					earnedSpanReq.style.display = "none";
				}
			}
			catch(err)
			{
			return false;
			}
		}
			
		function LoadHS()
		{
			var aDiv = document.getElementById("hsDiv1");
			var bDiv = document.getElementById("hsDiv2");
			var cDiv = document.getElementById("hsDiv3");
			
			if (document.myForm.hs1[0].checked) 
				aDiv.style.display = "block";
				
			if (document.myForm.hs2[0].checked)
			   bDiv.style.display = "block";
			
			if (document.myForm.hs3[0].checked)
				cDiv.style.display = "block";
		}
	
		function ShowHideHS1()
		{
			var aDiv = document.getElementById("hsDiv1");
			var bDiv = document.getElementById("hsDiv2");
			var cDiv = document.getElementById("hsDiv3");
	
			if (document.myForm.hs1[0].checked) 
			{
				aDiv.style.display = "block";
				document.myForm.hs2[1].checked=true;
				document.myForm.hs3[1].checked=true;
			} 
			else 
			{
				aDiv.style.display = "none";
				bDiv.style.display = "none";
				cDiv.style.display = "none";
				document.myForm.hs2[1].checked=true;
				document.myForm.hs3[1].checked=true;
			}
		}
			
		function ShowHideHS2()
		{
			var aDiv = document.getElementById("hsDiv1");
			var bDiv = document.getElementById("hsDiv2");
			var cDiv = document.getElementById("hsDiv3");
	
			if (document.myForm.hs2[0].checked) 
			{
				bDiv.style.display = "block";
				document.myForm.hs3[1].checked=true;				
			} 
			else 
			{
				bDiv.style.display = "none";
				cDiv.style.display = "none";
				document.myForm.hs3[1].checked=true;
			}
		}
			
		function ShowHideHS3()
		{
			var aDiv = document.getElementById("hsDiv1");
			var bDiv = document.getElementById("hsDiv2");
			var cDiv = document.getElementById("hsDiv3");
	
			if (document.myForm.hs3[0].checked) 
			{
				cDiv.style.display = "block";
			} 
			else 
			{
				cDiv.style.display = "none";
			}
		}			
	//-->
	</script>';
		
//content
if(isset($_SESSION['us_citizen']) || $_SESSION['us_citizen'] != "")
{
	if($_SESSION['us_citizen'] == 'Yes')
	{
	$strHSNameVarCaps = "High School";
	$strHSNameVar = "high school";
	} else {
	$strHSNameVarCaps = "High School/Secondary School";
	$strHSNameVar = "high school/secondary school";
	}
	
	if($_SESSION['us_citizen'] == 'Yes')
		{		
			print '<p><span class="SectionText">Please provide your '.$strHSNameVar.' information.</span></p>';
			print '<p><span class="FormLabel">Which have you earned?</span> <span class="Required">*</span><br />';
			
			if(isset($_SESSION['earned']) && $_SESSION['earned'] == 'Diploma'){
				print '<label><input name="earned" type="radio" class="FormFieldTextBox" onclick="NeitherCheck();" value="Diploma" checked /> Diploma</label> <br />
					<label><input name="earned" type="radio" class="FormFieldTextBox" onclick="NeitherCheck();" value="GED" /> GED</label> <br />
					<label><input name="earned" type="radio" class="FormFieldTextBox" onclick="NeitherCheck();" value="Neither" />	Neither</label>';
			} 
			elseif (isset($_SESSION['earned']) && $_SESSION['earned'] == 'GED'){
				print '<label><input name="earned" type="radio" class="FormFieldTextBox" onclick="NeitherCheck();" value="Diploma" /> Diploma</label> <br />
					<label><input name="earned" type="radio" class="FormFieldTextBox" onclick="NeitherCheck();" value="GED" checked /> GED</label> <br />
					<label><input name="earned" type="radio" class="FormFieldTextBox" onclick="NeitherCheck();" value="Neither" />	Neither</label>';
			}
			elseif (isset($_SESSION['earned']) && $_SESSION['earned'] == 'Neither'){
				print '<label><input name="earned" type="radio" class="FormFieldTextBox" onclick="NeitherCheck();" value="Diploma" /> Diploma</label> <br />
					<label><input name="earned" type="radio" class="FormFieldTextBox" onclick="NeitherCheck();" value="GED" /> GED</label> <br />
					<label><input name="earned" type="radio" class="FormFieldTextBox" onclick="NeitherCheck();" value="Neither" checked />	Neither</label>';
			}
			else 
				print '<label><input name="earned" type="radio" class="FormFieldTextBox" onclick="NeitherCheck();" value="Diploma" /> Diploma</label> <br />
					<label><input name="earned" type="radio" class="FormFieldTextBox" onclick="NeitherCheck();" value="GED" /> GED</label> <br />
					<label><input name="earned" type="radio" class="FormFieldTextBox" onclick="NeitherCheck();" value="Neither" />	Neither</label>';
			
					
			print '</p>';
			print '<div id="date_earned_div"><p class="FormSubLabel">Date earned<br />						
						<select name="date_earned_month" id="date_earned_month">					
							<option value=""></option>';
							$mArray = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
							foreach ($mArray as $value){
								print '<option value="'.$value.'"';
								if($value == $_SESSION['date_earned_month'])
								print ' selected="selected" ';
								print'>'.$value.'</option>';
							}
						print '</select>';					
						print '<select name="date_earned_year" id="date_earned_year" class="FormFieldTextBox">						
								<option value=""></option>';									
									$i=-2;
									while($i<=80){
										$year = date("Y")-$i;
										print '<option value="'.$year.'"';
										if ($_SESSION['date_earned_year']==$year)
										print ' selected="selected" ';
										print '>'.$year.'</option>';
										$i++;
									}
						print '</select>
					</p></div>';
			print '<div class="ifNo" id="NoDegree" style="display:none;">
			<p class="FormLabel">Will you earn a high school diploma or GED prior to enrolling at NMU? <span class="Required">*</span><br />';
			
			if(isset($_SESSION['ifnot_willyou']) && $_SESSION['ifnot_willyou'] == 'Yes'){
				print '<label><input name="ifnot_willyou" type="radio" class="FormFieldTextBox" value="Yes" onclick="NoDegreeYet();" checked /> Yes</label><br />
						<label><input name="ifnot_willyou" type="radio" class="FormFieldTextBox" value="No" onclick="NoDegreeYet();" /> No</label>';
			} 
			elseif (isset($_SESSION['ifnot_willyou']) && $_SESSION['ifnot_willyou'] == 'No'){
				print '<label><input name="ifnot_willyou" type="radio" class="FormFieldTextBox" value="Yes" onclick="NoDegreeYet();" /> Yes</label><br />
						<label><input name="ifnot_willyou" type="radio" class="FormFieldTextBox" value="No" onclick="NoDegreeYet();" checked /> No</label>';
			}
			else 
				print '<label><input name="ifnot_willyou" type="radio" class="FormFieldTextBox" value="Yes" onclick="NoDegreeYet();" /> Yes</label><br />
						<label><input name="ifnot_willyou" type="radio" class="FormFieldTextBox" value="No" onclick="NoDegreeYet();" /> No</label>';
						
						
			print '</p>
				<p class="FormLabel">Which one <span class="Required" id="earned_which">*</span><br />
						<select name="which_one" class="FormFieldTextBox" id="which_one">
							<option value=""></option>';
						
							$oArray = array('Diploma', 'GED');
							foreach ($oArray as $value){
								print '<option value="'.$value.'"';
								if($value == $_SESSION['which_one'])
								print ' selected="selected" ';
								print'>'.$value.'</option>';
							}
						
							print '
						
						</select>
				</p>
				<p class="FormLabel">When<br />
						<select name="expected_grad_date_month" id="expected_grad_date_month">					
							<option value=""></option>';
							
						
							$mArray = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
							foreach ($mArray as $value){
								print '<option value="'.$value.'"';
								if($value == $_SESSION['expected_grad_date_month'])
								print ' selected="selected" ';
								print'>'.$value.'</option>';
							}
							
							print '
						</select>				
						
						<select name="expected_grad_date_year" id="expected_grad_date_year" class="FormFieldTextBox">						
							<option value=""></option>';
											
							$i=-2;
							while($i<=80){
								$year = date("Y")-$i;
								print '<option value="'.$year.'"';
								if ($_SESSION['expected_grad_date_year']==$year)
								print ' selected="selected" ';
								print '>'.$year.'</option>';
								$i++;
							}
							
							print '	
						</select>
						
				</p>
			</div>
			</p>';
		}
		print '<p><span class="SectionText">List the most recent '.$strHSNameVar.' you\'ve attended.</span></p>
		<p><span class="FormLabel">School Name </span><br />
				<input name="high_school_name_1" type="text" class="FormFieldTextBox" id="high_school_name_1" value="'.$_SESSION['high_school_name_1'].'" size="40" />
		</p>
		<table border="0" cellspacing="0">
			<tr>
				<td width="200"><span class="FormLabel">City </span><br />
						<input name="high_school_city_1" type="text" class="FormFieldTextBox" id="high_school_city_1" value="'.$_SESSION['high_school_city_1'].'" size="25" /></td>';
				

				if($_SESSION['us_citizen'] == 'Yes')
				{
					$classSqlQuery = new SqlDataQueries();
					print'<td width="200"><span class="FormLabel">State</span><br />
							<select name="high_school_state_1" class="FormFieldTextBox" id="high_school_state_1">';
							$strQuery = "SELECT StateFullname, StateAbr FROM cms_common_data_states ORDER BY StateFullname";
							$aResults = $classSqlQuery->MySQL_Queries($strQuery);
							HTML_AddOption('high_school_state_1', "", "");
							foreach($aResults as $aRow)
								HTML_AddOption('high_school_state_1', $aRow['StateFullname'], $aRow['StateFullname']);
							HTML_AddOption('high_school_state_1', '----------', '----------');
							HTML_AddOption('high_school_state_1', "Not Listed", "Not Listed");
					print'</select></td>';
				} else {
					print '<td width="180"><span class="FormLabel">State/Province</span><br />
					<input name="high_school_state_1" type="text" class="FormFieldTextBox" id="high_school_state_1" value="'.$_SESSION['high_school_state_1'].'" size="18" />
					</td>';
				}
				
				print '<td width="100"><span class="FormLabel">Zip/Postal code</span> <br />
						<input name="high_school_zip_1" type="text" class="FormFieldTextBox" id="high_school_zip_1" value="'.$_SESSION['high_school_zip_1'].'" size="10" /></td>
			</tr>
		</table>';
			$classSqlQuery = new SqlDataQueries();				
			print'<p><span class="FormLabel">Country</span><br /> 
					<select name="high_school_country_1" id="high_school_country_1">';
					HTML_AddOption('high_school_country_1', "", "");
					HTML_AddOption('high_school_country_1', "United States", "United States");
					HTML_AddOption('high_school_country_1', "-", "-");
						$strQuery = "SELECT CountryName FROM cms_common_data_countries ORDER BY CountryName";
						$aResults = $classSqlQuery->MySQL_Queries($strQuery);
						foreach($aResults as $aRow)
						{
							if($aRow['CountryName'] != 'United States')
								HTML_AddOption('high_school_country_1', $aRow['CountryName'], $aRow['CountryName']);
						}
					HTML_AddOption('high_school_country_1', '----------', '----------');
					HTML_AddOption('high_school_country_1', 'Not Listed', 'Not Listed');
				print'</select></p>';
		
		print '<p><span class="FormLabel">Dates attended </span><br />
			
			<select name="high_school_from_1mo" id="high_school_from_1mo">					
				<option value=""></option>';

				$mArray = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
				foreach ($mArray as $value){
					print '<option value="'.$value.'"';
					if($value == $_SESSION['high_school_from_1mo'])
					print ' selected="selected" ';
					print'>'.$value.'</option>';
				}
			
				print '
			</select>
			<select name="high_school_from_1yr" id="high_school_from_1yr" class="FormFieldTextBox">						
				<option value=""></option>';
		
				$i=-2;
				while($i<=80){
					$year = date("Y")-$i;
					print '<option value="'.$year.'"';
					if ($_SESSION['high_school_from_1yr']==$year)
					print ' selected="selected" ';
					print '>'.$year.'</option>';
					$i++;
				}
		
				print '	
			</select>

			through
			
			<select name="high_school_thru_1mo" id="high_school_thru_1mo">					
				<option value=""></option>';

				$mArray = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
				foreach ($mArray as $value){
					print '<option value="'.$value.'"';
					if($value == $_SESSION['high_school_thru_1mo'])
					print ' selected="selected" ';
					print'>'.$value.'</option>';
				}
			
				print '
			</select>
			<select name="high_school_thru_1yr" id="high_school_thru_1yr" class="FormFieldTextBox">						
				<option value=""></option>';
		
				$i=-2;
				while($i<=80){
					$year = date("Y")-$i;
					print '<option value="'.$year.'"';
					if ($_SESSION['high_school_thru_1yr']==$year)
					print ' selected="selected" ';
					print '>'.$year.'</option>';
					$i++;
				}
		
				print '	
			</select>
		
		</p>
		<p><span class="FormLabel">Credit hours </span><br />
				<input name="high_school_credit_1" type="text" class="FormFieldTextBox" id="high_school_credit_1" value="'.$_SESSION['high_school_credit_1'].'" size="10" />
		</p>
		<p><span class="FormLabel">Credential (diploma, degree, etc.) earned or to be received </span><br />
				<input name="high_school_degree_1" type="text" class="FormFieldTextBox" id="high_school_degree_1" value="'.$_SESSION['high_school_degree_1'].'" size="30" />
		</p>
		<p><span class="FormLabel">Did you attend more than one '.$strHSNameVar.'?</span><br />';
			
		if(isset($_SESSION['hs1']) && $_SESSION['hs1'] == 'Yes'){
			print '<label><input type="radio" name="hs1" id="hs1_1" value="Yes" onclick="ShowHideHS1();" checked /> Yes</label><br />
			<label><input name="hs1" type="radio" id="hs1_1" value="No" onclick="ShowHideHS1();" />	No</label>';
		} 
		elseif (isset($_SESSION['hs1']) && $_SESSION['hs1'] == 'No'){
			print '<label><input type="radio" name="hs1" id="hs1_1" value="Yes" onclick="ShowHideHS1();" /> Yes</label><br />
			<label><input name="hs1" type="radio" id="hs1_1" value="No" onclick="ShowHideHS1();" checked />	No</label>';
		}
		else 
			print '<label><input type="radio" name="hs1" id="hs1_1" value="Yes" onclick="ShowHideHS1();" /> Yes</label><br />
			<label><input name="hs1" type="radio" id="hs1_1" value="No" onclick="ShowHideHS1();" checked />	No</label>';
			
			
		print '</p>
		<div class="ifYes" id="hsDiv1" style="display:none;">
			<p><span class="FormLabel">School Name </span><br />
				<input name="high_school_name_2" type="text" class="FormFieldTextBox" id="high_school_name_2" value="'.$_SESSION['high_school_name_2'].'" size="40" />
			</p>
			<table border="0" cellspacing="0">
				<tr>
					<td width="200"><span class="FormLabel">City </span><br />
							<input name="high_school_city_2" type="text" class="FormFieldTextBox" id="high_school_city_2" value="'.$_SESSION['high_school_city_2'].'" size="25" /></td>';
				if($_SESSION['us_citizen'] == 'Yes')
				{
					$classSqlQuery = new SqlDataQueries();
					print'<td width="200"><span class="FormLabel">State</span><br />
							<select name="high_school_state_2" class="FormFieldTextBox" id="high_school_state_2">';
							$strQuery = "SELECT StateFullname, StateAbr FROM cms_common_data_states ORDER BY StateFullname";
							$aResults = $classSqlQuery->MySQL_Queries($strQuery);
							HTML_AddOption('high_school_state_2', "", "");
							foreach($aResults as $aRow)
								HTML_AddOption('high_school_state_2', $aRow['StateFullname'], $aRow['StateFullname']);
							HTML_AddOption('high_school_state_2', '----------', '----------');
							HTML_AddOption('high_school_state_2', "Not Listed", "Not Listed");
					print'</select></td>';
				} else {
					print '<td width="180"><span class="FormLabel">State/Province</span><br />
					<input name="high_school_state_2" type="text" class="FormFieldTextBox" id="high_school_state_2" value="'.$_SESSION['high_school_state_2'].'" size="18" />
					</td>';
				}
					print '<td width="100"><span class="FormLabel">Zip/Postal code</span> <br />
							<input name="high_school_zip_2" type="text" class="FormFieldTextBox" id="high_school_zip_2" value="'.$_SESSION['high_school_zip_2'].'" size="10" /></td>
				</tr>
			</table>';
				$classSqlQuery = new SqlDataQueries();				
				print'<p><span class="FormLabel">Country</span><br /> 
						<select name="high_school_country_2" id="high_school_country_2">';
						HTML_AddOption('high_school_country_2', "", "");
						HTML_AddOption('high_school_country_2', "United States", "United States");
						HTML_AddOption('high_school_country_2', "-", "-");
						$strQuery = "SELECT CountryName FROM cms_common_data_countries ORDER BY CountryName";
						$aResults = $classSqlQuery->MySQL_Queries($strQuery);
					foreach($aResults as $aRow)
					{
						if($aRow['CountryName'] != 'United States')
							HTML_AddOption('high_school_country_2', $aRow['CountryName'], $aRow['CountryName']);
					}
						HTML_AddOption('high_school_country_2', '----------', '----------');
						HTML_AddOption('high_school_country_2', 'Not Listed', 'Not Listed');
					print'</select></p>';
			
			print '<p><span class="FormLabel">Dates attended </span><br />
					<select name="high_school_from_2mo" id="high_school_from_2mo">					
				<option value=""></option>';

				$mArray = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
				foreach ($mArray as $value){
					print '<option value="'.$value.'"';
					if($value == $_SESSION['high_school_from_2mo'])
					print ' selected="selected" ';
					print'>'.$value.'</option>';
				}
			
				print '
			</select>
			<select name="high_school_from_2yr" id="high_school_from_2yr" class="FormFieldTextBox">						
				<option value=""></option>';
		
				$i=-2;
				while($i<=80){
					$year = date("Y")-$i;
					print '<option value="'.$year.'"';
					if ($_SESSION['high_school_from_2yr']==$year)
					print ' selected="selected" ';
					print '>'.$year.'</option>';
					$i++;
				}
		
				print '	
			</select>

			through
			
			<select name="high_school_thru_2mo" id="high_school_thru_2mo">					
				<option value=""></option>';

				$mArray = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
				foreach ($mArray as $value){
					print '<option value="'.$value.'"';
					if($value == $_SESSION['high_school_thru_2mo'])
					print ' selected="selected" ';
					print'>'.$value.'</option>';
				}
			
				print '
			</select>
			<select name="high_school_thru_2yr" id="high_school_thru_2yr" class="FormFieldTextBox">						
				<option value=""></option>';
		
				$i=-2;
				while($i<=80){
					$year = date("Y")-$i;
					print '<option value="'.$year.'"';
					if ($_SESSION['high_school_thru_2yr']==$year)
					print ' selected="selected" ';
					print '>'.$year.'</option>';
					$i++;
				}
		
				print '	
			</select>
			</p>
			<p><span class="FormLabel">Credit hours </span><br />
					<input name="high_school_credit_2" type="text" class="FormFieldTextBox" id="high_school_credit_2" value="'.$_SESSION['high_school_credit_2'].'" size="10" />
			</p>
			<p><span class="FormLabel">Credential (diploma, degree, etc.) earned or to be received </span><br />
					<input name="high_school_degree_2" type="text" class="FormFieldTextBox" id="high_school_degree_2" value="'.$_SESSION['high_school_degree_2'].'" size="30" />
			</p>
			<p><span class="FormLabel">Did you attend more than two '.$strHSNameVar.'s?</span><br />';
		
		if(isset($_SESSION['hs2']) && $_SESSION['hs2'] == 'Yes'){
			print '<label><input type="radio" name="hs2" id="hs2_1" value="Yes" onclick="ShowHideHS2();" checked /> Yes</label><br />
					<label><input name="hs2" type="radio" id="hs2_2" value="No" onclick="ShowHideHS2();" /> No</label>';
		} 
		elseif (isset($_SESSION['hs2']) && $_SESSION['hs2'] == 'No'){
			print '<label><input type="radio" name="hs2" id="hs2_1" value="Yes" onclick="ShowHideHS2();" /> Yes</label><br />
					<label><input name="hs2" type="radio" id="hs2_2" value="No" onclick="ShowHideHS2();" checked /> No</label>';
		}
		else 
			print '<label><input type="radio" name="hs2" id="hs2_1" value="Yes" onclick="ShowHideHS2();" /> Yes</label><br />
					<label><input name="hs2" type="radio" id="hs2_2" value="No" onclick="ShowHideHS2();" checked /> No</label>';	
			
		print '</p>
		</div>
		<div class="ifYes" id="hsDiv2" style="display:none;">
			<p><span class="FormLabel">School Name </span><br />
					<input name="high_school_name_3" type="text" class="FormFieldTextBox" id="high_school_name_3" value="'.$_SESSION['high_school_name_3'].'" size="40" />
			</p>
			<table border="0" cellspacing="0">
				<tr>
					<td width="200"><span class="FormLabel">City </span><br />
							<input name="high_school_city_3" type="text" class="FormFieldTextBox" id="high_school_city_3" value="'.$_SESSION['high_school_city_3'].'" size="25" /></td>';
				if($_SESSION['us_citizen'] == 'Yes')
				{
					$classSqlQuery = new SqlDataQueries();
					print'<td width="200"><span class="FormLabel">State</span><br />
							<select name="high_school_state_3" class="FormFieldTextBox" id="high_school_state_3">';
							$strQuery = "SELECT StateFullname, StateAbr FROM cms_common_data_states ORDER BY StateFullname";
							$aResults = $classSqlQuery->MySQL_Queries($strQuery);
							HTML_AddOption('high_school_state_3', "", "");
							foreach($aResults as $aRow)
								HTML_AddOption('high_school_state_3', $aRow['StateFullname'], $aRow['StateFullname']);
							HTML_AddOption('high_school_state_3', '----------', '----------');
							HTML_AddOption('high_school_state_3', "Not Listed", "Not Listed");
					print'</select></td>';
				} else {
					print '<td width="180"><span class="FormLabel">State/Province</span><br />
					<input name="high_school_state_3" type="text" class="FormFieldTextBox" id="high_school_state_3" value="'.$_SESSION['high_school_state_3'].'" size="18" />
					</td>';
				}
					print '<td width="100"><span class="FormLabel">Zip/Postal code</span> <br />
							<input name="high_school_zip_3" type="text" class="FormFieldTextBox" id="high_school_zip_3" value="'.$_SESSION['high_school_zip_3'].'" size="10" /></td>
				</tr>
			</table>';
				
				$classSqlQuery = new SqlDataQueries();				
				print'<p><span class="FormLabel">Country</span><br /> 
						<select name="high_school_country_3" id="high_school_country_3">';
						HTML_AddOption('high_school_country_3', "", "");
						HTML_AddOption('high_school_country_3', "United States", "United States");
						HTML_AddOption('high_school_country_3', "-", "-");
						$strQuery = "SELECT CountryName FROM cms_common_data_countries ORDER BY CountryName";
						$aResults = $classSqlQuery->MySQL_Queries($strQuery);
						foreach($aResults as $aRow)
						{
							if($aRow['CountryName'] != 'United States')
								HTML_AddOption('high_school_country_3', $aRow['CountryName'], $aRow['CountryName']);
						}
						HTML_AddOption('high_school_country_3', '----------', '----------');
						HTML_AddOption('high_school_country_3', 'Not Listed', 'Not Listed');
					print'</select></p>';	
			
			print'<p><span class="FormLabel">Dates attended </span><br />
<select name="high_school_from_3mo" id="high_school_from_3mo">					
				<option value=""></option>';

				$mArray = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
				foreach ($mArray as $value){
					print '<option value="'.$value.'"';
					if($value == $_SESSION['high_school_from_3mo'])
					print ' selected="selected" ';
					print'>'.$value.'</option>';
				}
			
				print '
			</select>
			<select name="high_school_from_3yr" id="high_school_from_3yr" class="FormFieldTextBox">						
				<option value=""></option>';
		
				$i=-2;
				while($i<=80){
					$year = date("Y")-$i;
					print '<option value="'.$year.'"';
					if ($_SESSION['high_school_from_3yr']==$year)
					print ' selected="selected" ';
					print '>'.$year.'</option>';
					$i++;
				}
		
				print '	
			</select>

			through
			
			<select name="high_school_thru_3mo" id="high_school_thru_3mo">					
				<option value=""></option>';

				$mArray = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
				foreach ($mArray as $value){
					print '<option value="'.$value.'"';
					if($value == $_SESSION['high_school_thru_3mo'])
					print ' selected="selected" ';
					print'>'.$value.'</option>';
				}
			
				print '
			</select>
			<select name="high_school_thru_3yr" id="high_school_thru_3yr" class="FormFieldTextBox">						
				<option value=""></option>';
		
				$i=-2;
				while($i<=80){
					$year = date("Y")-$i;
					print '<option value="'.$year.'"';
					if ($_SESSION['high_school_thru_3yr']==$year)
					print ' selected="selected" ';
					print '>'.$year.'</option>';
					$i++;
				}
		
				print '	
			</select>
			</p>
			<p><span class="FormLabel">Credit hours </span><br />
					<input name="high_school_credit_3" type="text" class="FormFieldTextBox" id="high_school_credit_3" value="'.$_SESSION['high_school_credit_3'].'" size="10" />
			</p>
			<p><span class="FormLabel">Credential (diploma, degree, etc.) earned or to be received </span><br />
					<input name="high_school_degree_3" type="text" class="FormFieldTextBox" id="high_school_degree_3" value="'.$_SESSION['high_school_degree_3'].'" size="30" />
			</p>
			<p><span class="FormLabel">Did you attend more than three '.$strHSNameVar.'s?</span><br />';
		
		if(isset($_SESSION['hs3']) && $_SESSION['hs3'] == 'Yes'){
			print '<label><input type="radio" name="hs3" id="hs3_1" value="Yes" onclick="ShowHideHS3();" checked /> Yes</label><br />
					<label><input name="hs3" type="radio" id="hs3_2" value="No" onclick="ShowHideHS3();" /> No</label>';
		} 
		elseif (isset($_SESSION['hs3']) && $_SESSION['hs3'] == 'xxx'){
			print '<label><input type="radio" name="hs3" id="hs3_1" value="Yes" onclick="ShowHideHS3();" /> Yes</label><br />
					<label><input name="hs3" type="radio" id="hs3_2" value="No" onclick="ShowHideHS3();" checked /> No</label>';
		}
		else 
			print '<label><input type="radio" name="hs3" id="hs3_1" value="Yes" onclick="ShowHideHS3();" /> Yes</label><br />
					<label><input name="hs3" type="radio" id="hs3_2" value="No" onclick="ShowHideHS3();" checked /> No</label>';
		
					
		print '</p>
		</div>
		<div class="ifYes" id="hsDiv3" style="display:none;">
			<p class="FormLabel">Additional '.$strHSNameVarCaps.' Information<br />
				<label>
					<textarea name="additional_hs" id="additional_hs" cols="80" rows="7">'.$_SESSION['additional_hs'].'</textarea>
				</label>
			</p>
		</div>';
		
} else {
	print '<p>You must indicate if you are a US citizen or not.  Please return to page 1 of the application and make the appropriate selection.</p>';
}

		print '</form>';

		$strBackURL = CORE_GetURL(Const_SelfURL, CORE_GetQueryStringVar(Const_Action), Const_Phase3, "", "", "");
		$strCancelURL = CORE_GetURL(Const_SelfURL, CORE_GetQueryStringVar(Const_Action), Const_Phase9, "", "", "");
		if(CORE_GetQueryStringVar(Const_Subaction) == "quickEdit")
			HTML_AddButtons('', "Submit Change", "", "Cancel", $strCancelURL, "", "");
		else
			HTML_AddButtons('', "Continue", "", "Back", $strBackURL, "", "");
	}
	catch (Exception $ex)
	{
		throw new Exception($ex->getMessage());
	}
}

//contact info
function Display_ApplicationPage3()
{
	try
	{
		CORE_DisplayPageHead();

		$strURL = str_replace("Admin/Components", "AdmissionsApp", CORE_GetURL(Const_RawURL, CORE_GetQueryStringVar(Const_Action), CORE_GetQueryStringVar(Const_Phase), "", CORE_GetQueryStringVar(Const_Subaction), ""));
		HTML_AddForm($strURL, "");
print '<h3><span style="color:red;">DEV</span></h3>';

		//javascript and styles
		print'<link href="elements/application.css" rel="stylesheet" type="text/css" />
		<script language="javaScript" type="text/javascript" src="elements/wz_tooltip.js"></script>
<script language="javascript" type="text/javascript">
<!--
	window.onload = loadfields;
	function loadfields(){
		startToggle();
		OtherCheck();
	}
	
	function startToggle(){
		if(document.myForm.permanent_check[0].checked){
			document.myForm.permanent_street.value = document.myForm.contact_street.value;
			document.myForm.permanent_city.value = document.myForm.contact_city.value;
			document.myForm.state_3.value = document.myForm.state_2.value;
			document.myForm.permanent_zip.value = document.myForm.contact_zip.value;
			document.myForm.permanent_country.selectedIndex =document.myForm.contact_country.selectedIndex;';
			if($_SESSION['us_citizen']=='No' && $_SESSION['us_resident']=='No')
				print 'document.myForm.permanent_phone.value = document.myForm.contact_phone.value;';
			else
				print 'document.myForm.permanent_phone_1.value = document.myForm.contact_phone_1.value;
				document.myForm.permanent_phone_2.value = document.myForm.contact_phone_2.value;
				document.myForm.permanent_phone_3.value = document.myForm.contact_phone_3.value;';
			print '
		}
		if(document.myForm.permanent_check[1].checked){
			document.getElementById("ifNo").style.display = "block";
		}
	}
	function toggleAddress(){
		if(document.myForm.permanent_check[0].checked){
			document.myForm.permanent_street.value = document.myForm.contact_street.value;
			document.myForm.permanent_city.value = document.myForm.contact_city.value;
			document.myForm.state_3.value = document.myForm.state_2.value;
			document.myForm.permanent_zip.value = document.myForm.contact_zip.value;
			document.myForm.permanent_country.selectedIndex =document.myForm.contact_country.selectedIndex;';
			if($_SESSION['us_citizen']=='No' && $_SESSION['us_resident']=='No')
				print 'document.myForm.permanent_phone.value = document.myForm.contact_phone.value;';
			else
				print 'document.myForm.permanent_phone_1.value = document.myForm.contact_phone_1.value;
				document.myForm.permanent_phone_2.value = document.myForm.contact_phone_2.value;
				document.myForm.permanent_phone_3.value = document.myForm.contact_phone_3.value;';
			print '
			document.getElementById("ifNo").style.display = "none";
		}
		else{
			document.myForm.permanent_street.value = "";
			document.myForm.permanent_city.value = "";
			document.myForm.state_3.value = "";
			document.myForm.permanent_zip.value = "";
			document.myForm.permanent_country.selectedIndex ="0";';
			if($_SESSION['us_citizen']=='No' && $_SESSION['us_resident']=='No')
				print 'document.myForm.permanent_phone.value = "";';
			else
				print 'document.myForm.permanent_phone_1.value = "";
				document.myForm.permanent_phone_2.value = "";
				document.myForm.permanent_phone_3.value = "";';
			print '
			document.getElementById("ifNo").style.display = "block";
		}
	}
	
	function OtherCheck(){
		if(document.myForm.er_relationship.value == "Other"){
			document.myForm.er_relationship_other.disabled=false;
			document.getElementById("OtherCheckDiv").style.display = "block";
		}
		else {
			document.myForm.er_relationship_other.value="";
			document.myForm.er_relationship_other.disabled=true;
			document.getElementById("OtherCheckDiv").style.display = "none";
		}
	}
//-->
</script>';	

	//content		
	print '<p><span class="SectionText">How can we contact you?</span></p>';
	print '<table width="" border="0" cellspacing="0">
			<tr>
				<td width="225">
				<span class="FormLabel">Applicant\'s E-mail address</span> <span class="Required">*</span><br />
				<input name="contact_email" type="text" class="FormFieldTextBox" id="contact_email" value="'.$_SESSION['contact_email'].'" size="25"  tabindex="1" />
				</td>
			
				<td width="225">
				<span class="FormLabel">Parent\'s E-mail address </span><br />
				<input name="contact_parent_email" type="text" class="FormFieldTextBox" id="contact_parent_email" value="'.$_SESSION['contact_parent_email'].'" size="25"  tabindex="2" />
				</td>
			</tr>
		</table>';	

	print '<br />
	<table width="" border="0" cellspacing="0">
		<tr>
			<td width="200">
			
			<span class="FormLabel">Current telephone number </span><br />';
				if($_SESSION['us_citizen'] =='No' && $_SESSION['us_resident'] =='No')
				print '<input name="contact_phone" type="text" class="FormFieldTextBox" id="contact_phone" value="'.$_SESSION['contact_phone'].'" size="20" tabindex="3" />';
				else
				print '<input name="contact_phone_1" type="text" class="FormFieldTextBox" id="contact_phone_1" value="'.$_SESSION['contact_phone_1'].'" size="3" maxlength="3" tabindex="3" /> - 
				<input name="contact_phone_2" type="text" class="FormFieldTextBox" id="contact_phone_2" value="'.$_SESSION['contact_phone_2'].'" size="3" maxlength="3" tabindex="4" /> - 
				<input name="contact_phone_3" type="text" class="FormFieldTextBox" id="contact_phone_3" value="'.$_SESSION['contact_phone_3'].'" size="4" maxlength="10" tabindex="5" />';
				print' </td>
			<td width="200">';
				print'<span class="FormLabel">Cell phone number </span><br />';
				if($_SESSION['us_citizen'] =='No' && $_SESSION['us_resident'] =='No')
				print '<input name="contact_cell_phone" type="text" class="FormFieldTextBox" id="contact_cell_phone" value="'.$_SESSION['contact_cell_phone'].'" size="20" tabindex="6" />';
				else
				print '<input name="contact_cell_phone_1" type="text" class="FormFieldTextBox" id="contact_cell_phone_1" value="'.$_SESSION['contact_cell_phone_1'].'" size="3" maxlength="3" tabindex="6" /> - 
				<input name="contact_cell_phone_2" type="text" class="FormFieldTextBox" id="contact_cell_phone_2" value="'.$_SESSION['contact_cell_phone_2'].'" size="3" maxlength="3" tabindex="7" /> - 
				<input name="contact_cell_phone_3" type="text" class="FormFieldTextBox" id="contact_cell_phone_3" value="'.$_SESSION['contact_cell_phone_3'].'" size="4" maxlength="10" tabindex="8" />';
				print '</td>
			<td width="200">';
				print'<span class="FormLabel">Parent phone number </span><br />';
				if($_SESSION['us_citizen'] =='No' && $_SESSION['us_resident'] =='No')
				print '<input name="contact_parent_phone" type="text" class="FormFieldTextBox" id="contact_parent_phone" value="'.$_SESSION['contact_parent_phone'].'" size="20" tabindex="9" />';
				else
				print '<input name="contact_parent_phone_1" type="text" class="FormFieldTextBox" id="contact_parent_phone_1" value="'.$_SESSION['contact_parent_phone_1'].'" size="3" maxlength="3" tabindex="9" /> - 
				<input name="contact_parent_phone_2" type="text" class="FormFieldTextBox" id="contact_parent_phone_2" value="'.$_SESSION['contact_parent_phone_2'].'" size="3" maxlength="3" tabindex="10" /> - 
				<input name="contact_parent_phone_3" type="text" class="FormFieldTextBox" id="contact_parent_phone_3" value="'.$_SESSION['contact_parent_phone_3'].'" size="4" maxlength="10" tabindex="11" />';
				print '</td>
			</tr>
	</table>';

	
	print '<p><span class="FormLabel">Street address <em>(including apartment number)</em></span> <span class="Required">*</span><br />
		<input name="contact_street" type="text" class="FormFieldTextBox" id="contact_street" value="'.$_SESSION['contact_street'].'" size="55" tabindex="12" />
	</p>
	<table width="" border="0" cellspacing="0">
		<tr>
			<td width="200"><span class="FormLabel">City</span> <span class="Required">*</span><br />
				<input name="contact_city" type="text" class="FormFieldTextBox" id="contact_city" value="'.$_SESSION['contact_city'].'" size="25" tabindex="13" /></td>';
			
			if($_SESSION['us_citizen']=='Yes' || $_SESSION['us_resident']=='Yes'){
				
			$classSqlQuery = new SqlDataQueries();
			print'<td width="150"><span class="FormLabel">State</span> <span class="Required">*</span><br />
					<select name="state_2" id="state_2" class="FormFieldTextBox" tabindex="14">';
					$strQuery = "SELECT StateFullname, StateAbr FROM cms_common_data_states ORDER BY StateFullname";
					$aResults = $classSqlQuery->MySQL_Queries($strQuery);
					HTML_AddOption('state_2', "", "");
					foreach($aResults as $aRow)
						HTML_AddOption('state_2', $aRow['StateFullname'], $aRow['StateFullname']);
					HTML_AddOption('state_2', "", "");
					HTML_AddOption('state_2', "Not Listed", "Not Listed");
			print'</select></td>';
			
			}
			else
				print '<td width="150"><span class="FormLabel">State/Province</span> <span class="Required">*</span><br />
				<input name="state_2" type="text" class="FormFieldTextBox" id="state_2" value="'.$_SESSION['state_2'].'" size="18" tabindex="15" />
			</td>';
			
			print '<td width="110"><span class="FormLabel">Zip/Postal code</span> <span class="Required">*</span><br />
				<input name="contact_zip" type="text" class="FormFieldTextBox" id="contact_zip" value="'.$_SESSION['contact_zip'].'" size="10" tabindex="16" /></td></tr>';
			
			$classSqlQuery = new SqlDataQueries();				
			print'<tr><td colspan="3"><p><span class="FormLabel">Nation</span><br /> 
					<select name="contact_country" id="contact_country" tabindex="17">';
					HTML_AddOption('contact_country', "", "");
					HTML_AddOption('contact_country', "United States", "United States");
					HTML_AddOption('contact_country', "-", "-");
					$strQuery = "SELECT CountryName FROM cms_common_data_countries ORDER BY CountryName";
					$aResults = $classSqlQuery->MySQL_Queries($strQuery);
					foreach($aResults as $aRow)
					{
						if($aRow['CountryName'] != 'United States')
							HTML_AddOption('contact_country', $aRow['CountryName'], $aRow['CountryName']);
					}
					HTML_AddOption('contact_country', '----------', '----------');
					HTML_AddOption('contact_country', 'Not Listed', 'Not Listed');
				print'</select></p>';
			print '</td></tr>';
	print'</table>';

	print'<p><span class="FormLabel">Is this also your permanent address?</span> <span class="FormHelp">(<a href="#" onClick="return false;" onMouseOver="Tip(\'If you are a non-U.S. citizen/permanent resident living in the U.S. on a visa, your permanent address is most likely in your home country.\', WIDTH, 300)">?</a>)</span><br />';
		
	if(isset($_SESSION['permanent_check']) && $_SESSION['permanent_check'] == 'Yes'){
					print '<label><input name="permanent_check" type="radio" class="FormFieldTextBox"  onclick="toggleAddress();" value="Yes" checked tabindex="18" /> Yes</label><br />
		<label><input name="permanent_check" type="radio" class="FormFieldTextBox" onclick="toggleAddress();" value="No" tabindex="19" />	No</label>';
					} 
					elseif (isset($_SESSION['permanent_check']) && $_SESSION['permanent_check'] == 'No'){
					print '<label><input name="permanent_check" type="radio" class="FormFieldTextBox"  onclick="toggleAddress();" value="Yes" tabindex="18" /> Yes</label><br />
		<label><input name="permanent_check" type="radio" class="FormFieldTextBox" onclick="toggleAddress();" value="No" checked tabindex="19" />	No</label>';
					}
					else 
					print '<label><input name="permanent_check" type="radio" class="FormFieldTextBox"  onclick="toggleAddress();" value="Yes" tabindex="18" /> Yes</label><br />
		<label><input name="permanent_check" type="radio" class="FormFieldTextBox" onclick="toggleAddress();" value="No" tabindex="19" />	No</label>';		
		
	print '</p>';
	print '<div class="ifNo" id="ifNo" style="display:none;">';
		
		print '<p><span class="FormLabel">Permanent telephone number </span><br />';
		if($_SESSION['us_citizen'] =='No' && $_SESSION['us_resident'] =='No')
			print '<input name="permanent_phone" type="text" class="FormFieldTextBox" id="permanent_phone" value="'.$_SESSION['permanent_phone'].'" size="20" tabindex="20" />';
		else
			print '<input name="permanent_phone_1" type="text" class="FormFieldTextBox" id="permanent_phone_1" value="'.$_SESSION['permanent_phone_1'].'" size="3" maxlength="3"  tabindex="20"/> - 
		
		<input name="permanent_phone_2" type="text" class="FormFieldTextBox" id="permanent_phone_2" value="'.$_SESSION['permanent_phone_2'].'" size="3" maxlength="3"  tabindex="21"/> - 
		<input name="permanent_phone_3" type="text" class="FormFieldTextBox" id="permanent_phone_3" value="'.$_SESSION['permanent_phone_3'].'" size="4" maxlength="10"  tabindex="22"/>';
		print '</p>';
		
		print '<p><span class="FormLabel">Permanent Street address <em>(including apartment number)</em></span><br />
			<input name="permanent_street" type="text" class="FormFieldTextBox" id="permanent_street" value="'.$_SESSION['permanent_street'].'" size="55" tabindex="23" />
		</p>
		<table border="0" cellspacing="0">
			<tr>
				<td width="200"><span class="FormLabel">Permanent City </span><br />
					<input name="permanent_city" type="text" class="FormFieldTextBox" id="permanent_city" value="'.$_SESSION['permanent_city'].'" size="25" tabindex="24" /></td>';
				
			if($_SESSION['us_citizen']=='Yes' || $_SESSION['us_resident']=='Yes'){			
				$classSqlQuery = new SqlDataQueries();
				print'<td width="150"><span class="FormLabel">State</span><br />
				<select name="state_3" class="FormFieldTextBox" id="state_3"  tabindex="25">';
						$strQuery = "SELECT StateFullname, StateAbr FROM cms_common_data_states ORDER BY StateFullname";
						$aResults = $classSqlQuery->MySQL_Queries($strQuery);
						HTML_AddOption('state_3', "", "");
						foreach($aResults as $aRow)
							HTML_AddOption('state_3', $aRow['StateFullname'], $aRow['StateFullname']);
						HTML_AddOption('state_3', "", "");
						HTML_AddOption('state_3', "Not Listed", "Not Listed");
				print'</select></td>';
				
			}
			else
				print '<td width="150"><span class="FormLabel">State/Province</span><br />
				<input name="state_3" type="text" class="FormFieldTextBox" id="state_3" value="'.$_SESSION['state_3'].'" size="18" tabindex="25" />
				</td>';
				
			print '<td width="100"><span class="FormLabel">Postal code</span> <br />
				<input name="permanent_zip" type="text" class="FormFieldTextBox" id="permanent_zip" value="'.$_SESSION['permanent_zip'].'" size="10" tabindex="26" /></td>';		
			print '</tr>
		</table>';
		
				$classSqlQuery = new SqlDataQueries();				
				print'<p><span class="FormLabel">Nation</span><br /> 
					<select name="permanent_country" id="permanent_country" tabindex="27">';
					HTML_AddOption('permanent_country', "", "");
					HTML_AddOption('permanent_country', "United States", "United States");
					HTML_AddOption('permanent_country', "-", "-");
					$strQuery = "SELECT CountryName FROM cms_common_data_countries ORDER BY CountryName";
					$aResults = $classSqlQuery->MySQL_Queries($strQuery);
					foreach($aResults as $aRow)
					{
						if($aRow['CountryName'] != 'United States')
							HTML_AddOption('permanent_country', $aRow['CountryName'], $aRow['CountryName']);
					}
					HTML_AddOption('permanent_country', '----------', '----------');
					HTML_AddOption('permanent_country', 'Not Listed', 'Not Listed');
				print'</select></p>';
		
	print' </div>
	<p><span class="SectionText">Who should we contact in an emergency?</span></p>
	<table border="0" cellspacing="0">
		<tr>
			<td width="220"><span class="FormLabel">First name</span><br />
				<input name="er_first_name" type="text" class="FormFieldTextBox" id="er_first_name" value="'.$_SESSION['er_first_name'].'" size="27" tabindex="28" />&nbsp;&nbsp;</td>
			<td width=""><span class="FormLabel">Last name</span> <br />
				<input name="er_last_name" type="text" class="FormFieldTextBox" id="er_last_name" value="'.$_SESSION['er_last_name'].'" size="35" tabindex="29" /></td>
		</tr>
	</table>
	<p><span class="FormLabel">Street address <em>(including apartment number)</em></span><br />
		<input name="er_street" type="text" class="FormFieldTextBox" id="er_street" value="'.$_SESSION['er_street'].'" size="55" tabindex="30" />
	</p>
	<table border="0" cellspacing="0">
		<tr>
			<td width="200"><span class="FormLabel">City </span><br />
				<input name="er_city" type="text" class="FormFieldTextBox" id="er_city" value="'.$_SESSION['er_city'].'" size="25" tabindex="31" /></td>';
			
			
			
			if($_SESSION['us_citizen']=='Yes' || $_SESSION['us_resident']=='Yes'){
				
				$classSqlQuery = new SqlDataQueries();
				print'<td width="150"><span class="FormLabel">State</span><br />
				<select name="state_4" class="FormFieldTextBox" id="state_4" tabindex="32">';
						$strQuery = "SELECT StateFullname, StateAbr FROM cms_common_data_states ORDER BY StateFullname";
						$aResults = $classSqlQuery->MySQL_Queries($strQuery);
						HTML_AddOption('state_4', "", "");
						foreach($aResults as $aRow)
							HTML_AddOption('state_4', $aRow['StateFullname'], $aRow['StateFullname']);
						HTML_AddOption('state_4', "", "");
						HTML_AddOption('state_4', "Not Listed", "Not Listed");
				print'</select></td>';
			}
			else
				print '<td width="150"><span class="FormLabel">State/Province</span><br />
				<input name="state_4" type="text" class="FormFieldTextBox" id="state_4" value="'.$_SESSION['state_4'].'" size="18" tabindex="32" />
				</td>';
				
				print '<td width="100"><span class="FormLabel">Zip/Postal code</span> <br />
				<input name="er_zip" type="text" class="FormFieldTextBox" id="er_zip" value="'.$_SESSION['er_zip'].'" size="10" tabindex="33" /></td>';	
			
			print '</tr>
	</table>';
	
			$classSqlQuery = new SqlDataQueries();				
				print'<p><span class="FormLabel">Country</span><br /> 
					<select name="er_country" id="er_country"  tabindex="34">';
					HTML_AddOption('er_country', "", "");
					HTML_AddOption('er_country', "United States", "United States");
					HTML_AddOption('er_country', "-", "-");
					$strQuery = "SELECT CountryName FROM cms_common_data_countries ORDER BY CountryName";
					$aResults = $classSqlQuery->MySQL_Queries($strQuery);
					foreach($aResults as $aRow)
					{
						if($aRow['CountryName'] != 'United States')
							HTML_AddOption('er_country', $aRow['CountryName'], $aRow['CountryName']);
					}
					HTML_AddOption('er_country', '----------', '----------');
					HTML_AddOption('er_country', 'Not Listed', 'Not Listed');
				print'</select></p>';
	
	print'<p><span class="FormLabel">Telephone number </span><br />';
		if($_SESSION['us_citizen'] =='No' && $_SESSION['us_resident'] =='No')
		print '<input name="er_phone" type="text" class="FormFieldTextBox" id="er_phone" value="'.$_SESSION['er_phone'].'" size="20" tabindex="35" />';
		else
		print '<input name="er_phone_1" type="text" class="FormFieldTextBox" id="er_phone_1" value="'.$_SESSION['er_phone_1'].'" size="3" maxlength="3" tabindex="35" /> - 
		<input name="er_phone_2" type="text" class="FormFieldTextBox" id="er_phone_2" value="'.$_SESSION['er_phone_2'].'" size="3" maxlength="3" tabindex="36" /> - 
		<input name="er_phone_3" type="text" class="FormFieldTextBox" id="er_phone_3" value="'.$_SESSION['er_phone_3'].'" size="4" maxlength="10" tabindex="37" />';
		
		print '
		
		</p>
		<p><span class="FormLabel">Relationship to you </span><br />
		<select name="er_relationship" class="FormFieldTextBox" id="er_relationship" onClick="OtherCheck();"  tabindex="38">
			<option value=""></option>';

			$fArray = array('Father', 'Mother', 'Guardian', 'Spouse', 'Other');
			foreach ($fArray as $value){
				print '<option value="'.$value.'"';
				if($value == $_SESSION['er_relationship'])
				print ' selected="selected" ';
				print'>'.$value.'</option>';
			}
		
			print '	
		</select>
		
		
	</p>
	<div class="ifYes" id="OtherCheckDiv" style="display:none;">
	<p class="FormLabel">If \'Other\', please describe<br />
		<input name="er_relationship_other" type="text" class="FormFieldTextBox" id="er_relationship_other" value="'.$_SESSION['er_relationship_other'].'" size="50" tabindex="39" />
	</p>
	</div>';

		print '</form>';

		$strBackURL = CORE_GetURL(Const_SelfURL, CORE_GetQueryStringVar(Const_Action), Const_Phase2, "", "", "");
		$strCancelURL = CORE_GetURL(Const_SelfURL, CORE_GetQueryStringVar(Const_Action), Const_Phase9, "", "", "");
		if(CORE_GetQueryStringVar(Const_Subaction) == "quickEdit")
			HTML_AddButtons('', "Submit Change", "", "Cancel", $strCancelURL, "", "");
		else
			HTML_AddButtons('', "Continue", "", "Back", $strBackURL, "", "");
	}
	catch (Exception $ex)
	{
		throw new Exception($ex->getMessage());
	}
}

//citizenship info
function Display_ApplicationPage2()
{
	try
	{
		CORE_DisplayPageHead();

		$strURL = str_replace("Admin/Components", "AdmissionsApp", CORE_GetURL(Const_RawURL, CORE_GetQueryStringVar(Const_Action), CORE_GetQueryStringVar(Const_Phase), "", CORE_GetQueryStringVar(Const_Subaction), ""));
		HTML_AddForm($strURL, "");
print '<h3><span style="color:red;">DEV</span></h3>';
		
		if(isset($_SESSION['us_citizen']) || $_SESSION['us_citizen'] != "")
		{
			if($_SESSION['us_citizen'] == 'Yes')
			{
			//javascript & styles
			print '<link href="elements/application.css" rel="stylesheet" type="text/css" />
			<script language="javaScript" type="text/javascript" src="elements/wz_tooltip.js"></script>';

			//content
			print '<p><span class="SectionText">Tell us about where you are from.</span></p>
			<table width="600" border="0" cellspacing="0">
				<tr>';
					
				$classSqlQuery = new SqlDataQueries();
				print'<td><span class="FormLabel">U.S. state of legal residence</span>  <span class="Required">*</span><br />
						<select name="state_1" class="FormFieldTextBox" id="state_1" tabindex="9">';
						$strQuery = "SELECT StateFullname, StateAbr FROM cms_common_data_states ORDER BY StateFullname";
						$aResults = $classSqlQuery->MySQL_Queries($strQuery);
						HTML_AddOption('state_1', "", "");
						foreach($aResults as $aRow)
							HTML_AddOption('state_1', $aRow['StateFullname'], $aRow['StateFullname']);
						HTML_AddOption('state_1', '----------', '----------');
						HTML_AddOption('state_1', "Not Listed", "Not Listed");
				print'</select></td>';
					
					print'<td><span class="FormLabel">Your state\'s county/parish/borough where you reside</span> <span class="FormHelp">(<a href="#" onClick="return false;" onMouseOver="Tip(\'Residents of Alaska, list your borough of legal residence.  Residents of Louisiana, list your parish of legal residence.\', WIDTH, 500)">?</a>)</span><br />
								<input name="county_residence" type="text" class="FormFieldTextBox" id="county_residence" value="'.$_SESSION['county_residence'].'" size="30" /></td>
				</tr>';
				print'</table>';
				
				$classSqlQuery = new SqlDataQueries();				
				print'<p><span class="FormLabel">Nation of legal residence</span><br /> 
						<select name="country_residence" id="country_residence">';
						HTML_AddOption('country_residence', "", "");
						HTML_AddOption('country_residence', "United States", "United States");
						HTML_AddOption('country_residence', "-", "-");
						$strQuery = "SELECT CountryName FROM cms_common_data_countries ORDER BY CountryName";
						$aResults = $classSqlQuery->MySQL_Queries($strQuery);
						foreach($aResults as $aRow)
						{
							if($aRow['CountryName'] != 'United States')
								HTML_AddOption('country_residence', $aRow['CountryName'], $aRow['CountryName']);
						}
						HTML_AddOption('country_residence', '----------', '----------');
						HTML_AddOption('country_residence', 'Not Listed', 'Not Listed');
					print'</select></p>';		

				print'<p><span class="FormLabel">Since what date?</span>  <span class="Required">*</span><br />
					
					<select name="county_resident_since_month" id="county_resident_since_month">
						<option value=""></option>';
					
					
						$mArray = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
						foreach ($mArray as $value){
							print '<option value="'.$value.'"';
							if($value == $_SESSION['county_resident_since_month'])
							print ' selected="selected" ';
							print'>'.$value.'</option>';
						}
					
						print '
					</select>	
					
					<select name="county_resident_since_year" id="county_resident_since_year" class="FormFieldTextBox">
						<option value=""></option>';
				
						$i=0;
						while($i<=80){
							$year = date("Y")-$i;
							print '<option value="'.$year.'"';
							if ($_SESSION['county_resident_since_year']==$year)
							print ' selected="selected" ';
							print '>'.$year.'</option>';
							$i++;
						}
				
						print '	
					</select>
					
					</p>
					<p><span class="FormLabel">Social security number </span><span class="FormHelp">(<a href="#" onClick="return false;" onMouseOver="Tip(\'Your social security number will not be considered in determining admissibility. The social security number is required to apply for financial aid, federal tax credits, and/or campus employment, but otherwise is optional. The social security number is not used as a university identification number. NMU is a member of the National Association for College Admission Counseling and endorses the principles in the NACAC Statement of Principles of Good Practice.\', WIDTH, 500)">?</a>)</span><br />
						<input name="ssn_1" type="text" autocomplete="off" class="FormFieldTextBox" id="ssn_1" value="'.$_SESSION['ssn_1'].'" size="3" maxlength="3" />
						-
						<input name="ssn_2" type="text" autocomplete="off" class="FormFieldTextBox" id="ssn_2" value="'.$_SESSION['ssn_2'].'" size="2" maxlength="2" />
						-
						<input name="ssn_3" type="text" autocomplete="off" class="FormFieldTextBox" id="ssn_3" value="'.$_SESSION['ssn_3'].'" size="4" maxlength="4" />
					</p>
					<p><span class="FormLabel">Are you a dependent of an NMU graduate?  If so, select which one from the list below. <span class="FormHelp">(<a href="#" onClick="return false;" onMouseOver="Tip(\'If you are a dependent of more than one graduate, just select one from the list below.\', WIDTH, 300)">?</a>)</span><br />
						<select name="family_alum" id="family_alum" class="FormFieldTextBox">

				<option value=""></option>';
				$fArray = array('Father', 'Mother', 'Brother', 'Sister', 'Grandparent', 'Aunt/Uncle', 'Legal Guardian');
				foreach ($fArray as $fvalue){
					print '<option value="'.$fvalue.'"';
					if($fvalue == $_SESSION['family_alum'])
					print ' selected="selected" ';
					print'>'.$fvalue.'</option>';
				}
			
				print '
			</select>
			</span></p>';
			
			}
			elseif($_SESSION['us_citizen'] == 'No')
			{
			//javascript & styles
			print '<link href="elements/application.css" rel="stylesheet" type="text/css" />
			<script language="javaScript" type="text/javascript" src="elements/wz_tooltip.js"></script>
			<script type="text/javascript" language="javascript">
			<!--
				window.onload = loadfields;
				function loadfields()
				{
					ShowHide();
					NotRequired();
				}			
			function NotRequired()
			{
				var aItem = document.getElementById("reqSince");
				var vItem = document.getElementById("visaDiv");
				aItem.style.display = "inline";	
				
				if (document.myForm.undocumented[0].checked)
				{
					aItem.style.display = "none";	
					vItem.style.display = "none";
					document.myForm.visa_type.selectedIndex=0;
				}
				else if (document.myForm.undocumented[1].checked)
				{
					aItem.style.display = "inline";
					vItem.style.display = "block";
				}
				else 
				{
					aItem.style.display = "inline";	
					vItem.style.display = "block";
				}
			}			
			function ShowHide()
			{
				var oDiv = document.getElementById("ifNo");
				var xDiv = document.getElementById("ifYes");
				var aItem = document.getElementById("reqSince");
				aItem.style.display = "inline";	
				
				var otherDiv = document.getElementById("learn_other_div");
				
				if (document.myForm.us_resident[0].checked) 
				{
				   oDiv.style.display = "none";
				   xDiv.style.display = "block";
				   document.myForm.undocumented[0].checked=0;
				   document.myForm.undocumented[1].checked=0;
					
				} 
				else if (document.myForm.us_resident[1].checked) 
				{
					xDiv.style.display = "none";
					oDiv.style.display = "block";
					document.myForm.alien_reg_number.value="";
					
					document.myForm.alien_date_year.selectedIndex=0;
					document.myForm.alien_date_month.selectedIndex=0;
					
					document.myForm.ssn_1.value="";
					document.myForm.ssn_2.value="";
					document.myForm.ssn_3.value="";
			
				} 
				else
				{
					xDiv.style.display = "none";
					oDiv.style.display = "none";
					document.myForm.alien_reg_number.value="";
					
					document.myForm.alien_date_year.selectedIndex=0;
					document.myForm.alien_date_month.selectedIndex=0;
					
					document.myForm.ssn_1.value="";
					document.myForm.ssn_2.value="";
					document.myForm.ssn_3.value="";
				}
				
				if(document.myForm.learn_other.checked)
					otherDiv.style.display = "block";
				else
				{
					otherDiv.style.display = "none";
					document.myForm.learn_other_text.value="";
				}
			}
			
			//-->
			</script>';
			
			//content
			print '<p><span class="SectionText">Tell us about where you are from.</span></p>
	<p><span class="FormLabel">If not a U.S. citizen, are you a \'Lawful Permanent Resident\'?</span> <span class="Required">*</span><br />';
	
		if(isset($_SESSION['us_resident']) && $_SESSION['us_resident'] == 'Yes'){
				print '<label><input name="us_resident" type="radio" class="FormFieldTextBox" onclick="ShowHide();" value="Yes" checked />	Yes</label><br />
		<label><input name="us_resident" type="radio" class="FormFieldTextBox" onclick="ShowHide();" value="No" /> No</label>';
				} 
				elseif (isset($_SESSION['us_resident']) && $_SESSION['us_resident'] == 'No'){
				print '<label><input name="us_resident" type="radio" class="FormFieldTextBox" onclick="ShowHide();" value="Yes" />	Yes</label><br />
		<label><input name="us_resident" type="radio" class="FormFieldTextBox" onclick="ShowHide();" value="No" checked /> No</label>';
				}
				else 
				print '<label><input name="us_resident" type="radio" class="FormFieldTextBox" onclick="ShowHide();" value="Yes" />	Yes</label><br />
		<label><input name="us_resident" type="radio" class="FormFieldTextBox" onclick="ShowHide();" value="No" /> No</label>';
			
		print '</p>
	<div class="ifYes" id="ifYes" style="display:none;">
		<p class="FormLabel">If yes, please enter the number from your Permanent Resident Card and mail a photocopy of both sides of the card to the <a href="#address" onmouseover="Tip(\'<strong>Send to:</strong><br />NMU Admissions Office<br />1401 Presque Isle Avenue<br />Marquette, Michigan, USA 49855-5372\');">NMU Admissions Office</a>.<br />
			A
			<input name="alien_reg_number" type="text" id="alien_reg_number" value="'.$_SESSION['alien_reg_number'].'" />
		</p>
		<p><span class="FormLabel">Date Issued<br />
			</span>			
			
					<select name="alien_date_month" id="alien_date_month">
						<option value=""></option>';
					
					
						$m1Array = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
						foreach ($m1Array as $value1){
							print '<option value="'.$value1.'"';
							if($value1 == $_SESSION['alien_date_month'])
							print ' selected="selected" ';
							print'>'.$value1.'</option>';
						}
					
						print '
					</select>
					
					<select name="alien_date_year" id="alien_date_year" class="FormFieldTextBox">
						<option value=""></option>';
				
						$x=0;
						while($x<=80){
							$yearx = date("Y")-$x;
							print '<option value="'.$yearx.'"';
							if ($_SESSION['alien_date_year']==$yearx)
							print ' selected="selected" ';
							print '>'.$yearx.'</option>';
							$x++;
						}
				
						print '	
					</select>
			
			
			
		</p>
		<p><span class="FormLabel">Social security number </span><span class="FormHelp">(<a href="#" onClick="return false;" onMouseOver="Tip(\'Your social security number will not be considered in determining admissibility. The social security number is required to apply for financial aid, federal tax credits, and/or campus employment, but otherwise is optional. The social security number is not used as a university identification number. NMU is a member of the National Association for College Admission Counseling and endorses the principles in the NACAC Statement of Principles of Good Practice.\', WIDTH, 500)">?</a>)</span><br />
			<input name="ssn_1" type="text" autocomplete="off" class="FormFieldTextBox" id="ssn_1" value="'.$_SESSION['ssn_1'].'" size="3" maxlength="3" />
			-
			<input name="ssn_2" type="text" autocomplete="off" class="FormFieldTextBox" id="ssn_2" value="'.$_SESSION['ssn_2'].'" size="2" maxlength="2" />
			-
			<input name="ssn_3" type="text" autocomplete="off" class="FormFieldTextBox" id="ssn_3" value="'.$_SESSION['ssn_3'].'" size="4" maxlength="4" />
			</p>
	</div>
	
	<div class="ifNo" id="ifNo" style="display:none;">';
	print '<p><span class="FormLabel">If you are not a U.S. citizen or Lawful Permanent Resident, nor a U.S. Visa Holder, but you are residing in the United States, are you in "undocumented" status?: </span> 
	<span class="FormHelp">(<a href="#" onClick="return false;" onMouseOver="Tip(\'Undocumented status will not adversely impact admission.\', WIDTH, 300)">?</a>)</span><br />';

				if(isset($_SESSION['undocumented']) && $_SESSION['undocumented'] == 'Yes'){
					print '<label><input name="undocumented" type="radio" class="FormFieldTextBox" value="Yes" onclick="NotRequired();" checked />	Yes</label><br />
					<label><input name="undocumented" type="radio" class="FormFieldTextBox" value="No" onclick="NotRequired();" /> No</label>';
					} 
				elseif (isset($_SESSION['undocumented']) && $_SESSION['undocumented'] == 'No'){
					print '<label><input name="undocumented" type="radio" class="FormFieldTextBox" value="Yes" onclick="NotRequired();" />	Yes</label><br />
					<label><input name="undocumented" type="radio" class="FormFieldTextBox"  value="No" onclick="NotRequired();" checked /> No</label>';
					}
				else 
					print '<label><input name="undocumented" type="radio" class="FormFieldTextBox" value="Yes" onclick="NotRequired();" />	Yes</label><br />
					<label><input name="undocumented" type="radio" class="FormFieldTextBox" value="No" onclick="NotRequired();" /> No</label>';
	print '</div>';
	
			$classSqlQuery = new SqlDataQueries();				
				print'<p><span class="FormLabel">Please select the country of your citizenship:</span>  <span class="Required">*</span><br />
						<select name="country_citizenship" class="FormFieldTextBox">';
						HTML_AddOption('country_citizenship', "", "");
						HTML_AddOption('country_citizenship', "United States", "United States");
						HTML_AddOption('country_citizenship', "-", "-");
						$strQuery = "SELECT CountryName FROM cms_common_data_countries ORDER BY CountryName";
						$aResults = $classSqlQuery->MySQL_Queries($strQuery);
						foreach($aResults as $aRow)
						{
							if($aRow['CountryName'] != 'United States')
								HTML_AddOption('country_citizenship', $aRow['CountryName'], $aRow['CountryName']);
						}
						HTML_AddOption('country_citizenship', '----------', '----------');
						HTML_AddOption('country_citizenship', 'Not Listed', 'Not Listed');
					print'</select></p>';			
	
	print '<div id="visaDiv">
		<p><span class="FormLabel">If you are living in the United States under a non-immigrant visa status, please select the type of visa you hold.  In addition, mail a photocopy of both sides of the card to the <a href="#address" onmouseover="Tip(\'<strong>Send to:</strong><br /><br />NMU Admissions Office<br />1401 Presque Isle Avenue<br />Marquette, Michigan, USA 49855-5372\');">NMU Admissions Office</a>.<br />
		<select name="visa_type" class="FormFieldTextBox">
			<option value="'.$_SESSION['visa_type'].'">'.$_SESSION['visa_type'].'</option>
	
			';
			if($_SESSION['visa_type'] !="")
				print '<option value=""></option>';
				print '<option>A-1</option>
			<option>A-2</option>
			<option>A-3</option>
			<option>B-1</option>
			<option>B-2</option>
			<option>C-1</option>
			<option>C-1D</option>
			<option>C-2</option>
			<option>C-3</option>
			<option>C-4</option>
			<option>D-1</option>
			<option>D-2</option>
			<option>E-1</option>
			<option>E-2</option>
			<option>F-1</option>
			<option>F-2</option>
			<option>G-1</option>
			<option>G-2</option>
			<option>G-3</option>
			<option>G-4</option>
			<option>G-5</option>
			<option>H-1B</option>
			<option>H-1C</option>
			<option>H-2A</option>
			<option>H-2B</option>
			<option>H-3</option>
			<option>H-4</option>
			<option>I</option>
			<option>J-1</option>
			<option>J-2</option>
			<option>K-1</option>
			<option>K-2</option>
			<option>K-3</option>
			<option>K-4</option>
			<option>L-1A</option>
			<option>L-1B</option>
			<option>L-2</option>
			<option>M-1</option>
			<option>M-2</option>
			<option>N-8</option>
			<option>N-9</option>
			<option>NAFTA</option>
			<option>NATO-1</option>
			<option>NATO-2</option>
			<option>NATO-3</option>
			<option>NATO-4</option>
			<option>NATO-5</option>
			<option>NATO-6</option>
			<option>NATO-7</option>
			<option>0-1</option>
			<option>0-2</option>
			<option>0-3</option>
			<option>P-1</option>
			<option>P-2</option>
			<option>P-3</option>
			<option>P-4</option>
			<option>Q-1</option>
			<option>Q-2</option>
			<option>Q-3</option>
			<option>R-1</option>
			<option>R-2</option>
			<option>S-5</option>
			<option>S-6</option>
			<option>T</option>
			<option>T-1</option>
			<option>T-2</option>
			<option>T-3</option>
			<option>T-4</option>
			<option>TN</option>
			<option>TD</option>
			<option>TWOV</option>
			<option>U</option>
			<option>U-1</option>
			<option>U-2</option>
			<option>U-3</option>
			<option>U-4</option>
			<option>V-1</option>
			<option>V-2</option>
			<option>V-3</option>
			<option>TPS</option>
		</select>
		</span></p></div>';

	print '</p>
	<table border="0" cellspacing="0">
		<tr>
			<td>';
				$classSqlQuery = new SqlDataQueries();				
				print'<span class="FormLabel">Country of legal residence</span>  <span class="Required">*</span><br />
						<select name="country_residence" id="country_residence" class="FormFieldTextBox">';
						HTML_AddOption('country_residence', "", "");
						HTML_AddOption('country_residence', "United States", "United States");
						HTML_AddOption('country_residence', "-", "-");
						$strQuery = "SELECT CountryName FROM cms_common_data_countries ORDER BY CountryName";
						$aResults = $classSqlQuery->MySQL_Queries($strQuery);
						foreach($aResults as $aRow)
						{
							if($aRow['CountryName'] != 'United States')
								HTML_AddOption('country_residence', $aRow['CountryName'], $aRow['CountryName']);
						}
						HTML_AddOption('country_residence', '----------', '----------');
						HTML_AddOption('country_residence', 'Not Listed', 'Not Listed');
					print'</select>&nbsp;&nbsp;';					
				
			print'</td>
				<td><span class="FormLabel">Since what date?</span>  <span id="reqSince" class="Required">*</span><br />
					<select name="country_resident_since_month" id="country_resident_since_month">
						<option value=""></option>';
						$mArray = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
						foreach ($mArray as $value){
							print '<option value="'.$value.'"';
							if($value == $_SESSION['country_resident_since_month'])
							print ' selected="selected" ';
							print'>'.$value.'</option>';
						}
					print '</select>&nbsp;&nbsp;';
					
					print'<select name="country_resident_since_year" id="country_resident_since_year" class="FormFieldTextBox">
						<option value=""></option>';
						$i=0;
						while($i<=80){
							$year = date("Y")-$i;
							print '<option value="'.$year.'"';
							if ($_SESSION['country_resident_since_year']==$year)
							print ' selected="selected" ';
							print '>'.$year.'</option>';
							$i++;
						}
					print '</select>';

				print'</td>
		</tr>
	</table>
	<p><span class="FormLabel">City and Country of Birth</span><span class="FormLabel"><br />
		</span>
		<input name="city_country_birth" type="text" class="FormFieldTextBox" id="city_country_birth" value="'.$_SESSION['city_country_birth'].'" size="50" />
</p>
	<p></p>
	<p><span class="FormLabel">Are you a dependent of an NMU graduate?  If so, select which one from the list below. <span class="FormHelp">(<a href="#" onClick="return false;" onMouseOver="Tip(\'If you are a dependent of more than one graduate, just select one from the list below.\', WIDTH, 300)">?</a>)</span><br />
			<select name="family_alum" id="family_alum" class="FormFieldTextBox">

				<option value=""></option>';
				$fArray = array('Father', 'Mother', 'Brother', 'Sister', 'Grandparent', 'Aunt/Uncle', 'Legal Guardian');
				foreach ($fArray as $fvalue){
					print '<option value="'.$fvalue.'"';
					if($fvalue == $_SESSION['family_alum'])
					print ' selected="selected" ';
					print'>'.$fvalue.'</option>';
				}
			
				print '
			</select>
		</span></p>';
		$learn1Check = (isset($_SESSION['learn_advertising']) && $_SESSION['learn_advertising'] != '' ? 'checked' : '');
		$learn2Check = (isset($_SESSION['learn_edu_fair']) && $_SESSION['learn_edu_fair'] != '' ? 'checked' : '');
		$learn3Check = (isset($_SESSION['learn_internet']) && $_SESSION['learn_internet'] != '' ? 'checked' : '');
		$learn4Check = (isset($_SESSION['learn_referral']) && $_SESSION['learn_referral'] != '' ? 'checked' : '');
		$learn5Check = (isset($_SESSION['learn_other']) && $_SESSION['learn_other'] != '' ? 'checked' : '');
		
		print '<p><strong>How did you learn about Northern Michigan University (check all that apply)?</strong><br />
				<label><input type="checkbox" name="learn_advertising" value="Advertising" '.$learn1Check.' /> Advertising</label><br />
				<label><input type="checkbox" name="learn_edu_fair" value="Education Fair" '.$learn2Check.' /> Education Fair</label><br />
				<label><input type="checkbox" name="learn_internet" value="Internet Search" '.$learn3Check.' /> Internet Search</label><br />
				<label><input type="checkbox" name="learn_referral" value="Personal Referral" '.$learn4Check.' /> Personal Referral</label><br />
				<label><input type="checkbox" name="learn_other" value="Other" id="learn_other_checkbox" onclick="ShowHide();" '.$learn5Check.' /> Other</label></p>';
				
		print '<div id="learn_other_div" class="ifYes">
				<p><strong>Other</strong><br />
				<input type="text" name="learn_other_text" size="35" value="'.$_SESSION['learn_other_text'].'" /></p>
				</div>';
			}
		}
		else
			print '<p>You must indicate if you are a US citizen or not.  Please return to page 1 of the application and make the appropriate selection.</p>';
		
		print '</form>';

		$strBackURL = CORE_GetURL(Const_SelfURL, CORE_GetQueryStringVar(Const_Action), Const_Phase1, "", "", "");
		$strCancelURL = CORE_GetURL(Const_SelfURL, CORE_GetQueryStringVar(Const_Action), Const_Phase9, "", "", "");
		if(CORE_GetQueryStringVar(Const_Subaction) == "quickEdit")
			HTML_AddButtons('', "Submit Change", "", "Cancel", $strCancelURL, "", "");
		else
			HTML_AddButtons('', "Continue", "", "Back", $strBackURL, "", "");
	}
	catch (Exception $ex)
	{
		throw new Exception($ex->getMessage());
	}
}

//name and personal info
function Display_ApplicationPage1()
{
	try
	{
		CORE_DisplayPageHead();

		$strURL = str_replace("Admin/Components", "AdmissionsApp", CORE_GetURL(Const_RawURL, Const_AdmissionsApplication, Const_Phase1, "", CORE_GetQueryStringVar(Const_Subaction), ""));
		HTML_AddForm($strURL, "");
print '<h3><span style="color:red;">DEV</span></h3>';

		//javascripts and styles
		print'<link href="elements/application.css" rel="stylesheet" type="text/css" />
				<script language="javaScript" type="text/javascript" src="elements/wz_tooltip.js"></script>
				<script language="javascript" type="text/javascript">
				<!--
					window.onload = loadfields;
					function loadfields(){
						NativeCheck();
						cookieChecker();
					}
					
					function NativeCheck(){				
						if(document.myForm.race1.checked){
							document.myForm.native_affiliation.disabled=false;
							document.getElementById("NativeOtherDiv").style.display = "block";
						}else{
							document.myForm.native_affiliation.disabled=true;
							document.getElementById("NativeOtherDiv").style.display = "none";
						}
					}
					function cookieChecker()
					{
						document.cookie = "AppCookieCheck=admissions";
						var allcookies = document.cookie;
						var pos = allcookies.indexOf("AppCookieCheck=");
						if (pos==-1)
						{
							alert("This application requires cookies to be enabled in your browser.  " + \'\n\n\' + "Please enable cookies before continuing or download a printable version of the application using the link provided.");
						}
					}
				
				//-->
				</script>';

		//content
		print '<noscript><p style="color:red;">This application requires JavaScript and cookies to be enabled in order to work properly.  
				Please make sure that both features of your browser are enabled before continuing.  You can also download a 
				printable version of the application using the link below.</p></noscript>';
		print '<p><strong>Applicants (domestic and international) for graduate programs should complete the <a href="http://www.nmu.edu/gradapp">Application for Graduate Admission</a>.</strong></p>';
		print '<p>This application has been divided into multiple pages in order to help you provide the necessary information.  
				The final page of the application will allow you to review, edit and print your application before submitting it.  
				Please note that you cannot save your application.  If you close your browser before submitting the application, all entered information will be cleared.  
				You can also download a <a href="http://webb.nmu.edu/Admissions/SiteSections/Apply/PrintableForms.shtml">printable version</a> of the application.  
				Questions?  Call us a 1-800-682-9797.</p>';
		
		if(date("m")==04||date("m")==05)
			print '<p><strong>Students currently attending another college and interested in enrolling as "guest students" for summer '.date('Y').', 
					please complete the <a href="http://www.nmu.edu/guestapp">guest application</a>.</strong></p>';

		print '<p class="FormHelp">
				<span class="Required">*</span> - Required<br />
				(<a href="#" onClick="return false;" onMouseOver="Tip(\'Click on any of the question marks for additional information.\', WIDTH, 300);">?</a>) - Click for additional information</p>';
		print '<p> <span class="SectionText">Please provide your name as it appears on your Social Security card or passport.</span></p>
		<table border="0" cellspacing="0">
			<tr>
				<td><span class="FormLabel">First name <span class="Required">*</span></span><br />
						<input name="first_name" type="text" class="FormFieldTextBox" id="first_name" size="27" tabindex="1" value="'.$_SESSION['first_name'].'" />&nbsp;&nbsp;</td>
				<td><span class="FormLabel">Last name</span> <span class="Required">*</span><br />
						<input name="last_name" type="text" class="FormFieldTextBox" id="last_name" tabindex="2" value="'.$_SESSION['last_name'].'" size="35" />&nbsp;&nbsp;</td>
				<td><span class="FormLabel">Middle name </span><br />
						<input name="middle_name" type="text" class="FormFieldTextBox" id="middle_name" tabindex="3" value="'.$_SESSION['middle_name'].'" size="25" /></td>
			</tr>
			<tr>
				<td><span class="FormLabel">Preferred first name</span><br />
						<input name="pref_first_name" type="text" class="FormFieldTextBox" id="pref_first_name" tabindex="4" value="'.$_SESSION['pref_first_name'].'" size="27" />&nbsp;&nbsp;</td>
				<td><span class="FormLabel">Maiden/previous name</span><br />
						<input name="other_name" type="text" class="FormFieldTextBox" id="other_name" tabindex="5" value="'.$_SESSION['other_name'].'" size="35" /></td>
				<td>&nbsp;</td>
			</tr>
		</table>
		<p><span class="FormLabel">Date of birth</span> <span class="FormHelp">(<a href="#" onClick="return false;" onMouseOver="Tip(\'Your date of birth will not be considered in determining admissibility.\', WIDTH, 300)">?</a>)</span> <br />
				<select name="FirstSelectMonth" class="FormFieldTextBox" tabindex="6">
					<option value=""></option>';
	
					$mArray = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
					foreach ($mArray as $value){
						print '<option value="'.$value.'"';
						if($value == $_SESSION['FirstSelectMonth'])
						print ' selected="selected" ';
						print'>'.$value.'</option>';
					}
				
					print '
				</select>

				<select name="FirstSelectDay" class="FormFieldTextBox" tabindex="7">			
					<option value=""></option>';
			
					$i=01;
					while($i<=31){
						print '<option value="'.$i.'"';
						if ($_SESSION['FirstSelectDay']==$i)
						print ' selected="selected" ';
						print '>'.$i.'</option>';
						$i++;
					}
			
					print '	
				</select>
				
				<select name="FirstSelectYear" class="FormFieldTextBox" tabindex="8">				
					<option value=""></option>';
			
					$i=10;
					while($i<=80){
						$year = date("Y")-$i;
						print '<option value="'.$year.'"';
						if ($_SESSION['FirstSelectYear']==$year)
						print ' selected="selected" ';
						print '>'.$year.'</option>';
						$i++;
					}
			
					print '	
				</select>
				
		</p>';
		print '<p><span class="FormLabel">Gender</span> <span class="FormHelp">(<a href="#" onClick="return false;" onMouseOver="Tip(\'Your gender will not be considered in determining admissibility.\', WIDTH, 300)">?</a>)</span><br />';
		if(isset($_SESSION['gender']) && $_SESSION['gender'] == 'Female'){
				print '<label><input name="gender" type="radio" class="FormFieldTextBox" value="Female" tabindex="9" checked /> Female</label>
						<label><input name="gender" type="radio" class="FormFieldTextBox" value="Male" tabindex="10" />	Male</label>';
				} 
				elseif (isset($_SESSION['gender']) && $_SESSION['gender'] == 'Male'){
				print '<label><input name="gender" type="radio" class="FormFieldTextBox" value="Female" tabindex="9" /> Female</label>
						<label><input name="gender" type="radio" class="FormFieldTextBox" value="Male" tabindex="10" checked />	Male</label>';
				}
				else 
				print '<label><input name="gender" type="radio" class="FormFieldTextBox" value="Female" tabindex="9" /> Female</label>
						<label><input name="gender" type="radio" class="FormFieldTextBox" value="Male" tabindex="10" />	Male</label>';
		
		print '</p>
		<p><span class="FormLabel">Marital status</span> <span class="FormHelp">(<a href="#" onClick="return false;" onMouseOver="Tip(\'Your marital status will not be considered in determining admissibility.\', WIDTH, 300)">?</a>)</span><br />';

		if(isset($_SESSION['marital_status']) && $_SESSION['marital_status'] == 'Single'){
				print '<label><input name="marital_status" type="radio" class="FormFieldTextBox" value="Single" tabindex="11" checked /> Single</label>
				<label><input name="marital_status" type="radio" class="FormFieldTextBox" value="Married" tabindex="12" /> Married</label>';
				} 
				elseif (isset($_SESSION['marital_status']) && $_SESSION['marital_status'] == 'Married'){
				print '<label><input name="marital_status" type="radio" class="FormFieldTextBox" value="Single" tabindex="11" /> Single</label>
				<label><input name="marital_status" type="radio" class="FormFieldTextBox" value="Married" tabindex="12" checked /> Married</label>';
				}
				else 
				print '<label><input name="marital_status" type="radio" class="FormFieldTextBox" value="Single" tabindex="11" /> Single</label>
				<label><input name="marital_status" type="radio" class="FormFieldTextBox" value="Married" tabindex="12" /> Married</label>';		
		
		print '</p>';
		
		print '<p><span class="FormLabel">Are you a veteran?</span><br />';

		if(isset($_SESSION['veteran_status']) && $_SESSION['veteran_status'] == 'Veteran'){
				print '<label><input name="veteran_status" type="radio" class="FormFieldTextBox" value="Veteran" tabindex="13" checked /> Yes</label>
				<label><input name="veteran_status" type="radio" class="FormFieldTextBox" value="Non-Veteran" tabindex="14" /> No</label>';
				} 
				elseif (isset($_SESSION['veteran_status']) && $_SESSION['veteran_status'] == 'Non-Veteran'){
				print '<label><input name="veteran_status" type="radio" class="FormFieldTextBox" value="Veteran" tabindex="13" /> Yes</label>
				<label><input name="veteran_status" type="radio" class="FormFieldTextBox" value="Non-Veteran" tabindex="14" checked /> No</label>';
				}
				else 
				print '<label><input name="veteran_status" type="radio" class="FormFieldTextBox" value="Veteran" tabindex="13" /> Yes</label>
				<label><input name="veteran_status" type="radio" class="FormFieldTextBox" value="Non-Veteran" tabindex="14" /> No</label>';		
		
		print '</p>';
		
			print '<p><strong>Are you Hispanic or Latino:</strong> <span class="FormHelp">(<a href="#" onClick="return false;" onMouseOver="Tip(\'Supplying information regarding race is optional. It will not be used for admission purposes. It is used to satisfy state and federal reporting requirements and other purposes allowed by law.\', WIDTH, 300)">?</a>)</span> <br />';

					if(isset($_SESSION['hisp_lat']) && $_SESSION['hisp_lat'] == 'Yes'){
				print '<label><input name="hisp_lat" type="radio" class="FormFieldTextBox" value="Yes" tabindex="13" checked /> Yes</label><br />
				<label><input name="hisp_lat" type="radio" class="FormFieldTextBox" value="No" tabindex="14" /> No</label>';
				} 
				elseif (isset($_SESSION['hisp_lat']) && $_SESSION['hisp_lat'] == 'No'){
				print '<label><input name="hisp_lat" type="radio" class="FormFieldTextBox" value="Yes" tabindex="13" /> Yes</label><br />
				<label><input name="hisp_lat" type="radio" class="FormFieldTextBox" value="No" tabindex="14" checked /> No</label>';
				}
				else 
				print '<label><input name="hisp_lat" type="radio" class="FormFieldTextBox" value="Yes" tabindex="13" /> Yes</label><br />
				<label><input name="hisp_lat" type="radio" class="FormFieldTextBox" value="No" tabindex="14" /> No</label>';
			
			print '</p>
			<div class="ifYes">
			<p><strong>In addition, select one or more of the following racial categoires to describe yourself:</strong> <span class="FormHelp">(<a href="#" onClick="return false;" onMouseOver="Tip(\'Supplying information regarding race is optional. It will not be used for admission purposes. It is used to satisfy state and federal reporting requirements and other purposes allowed by law.\', WIDTH, 300)">?</a>)</span><br />';
				
				if(isset($_SESSION['race1']) && $_SESSION['race1'] != '')
					$race1Check = 'checked';
				if(isset($_SESSION['race2']) && $_SESSION['race2'] != '')
					$race2Check = 'checked';
				if(isset($_SESSION['race3']) && $_SESSION['race3'] != '')
					$race3Check = 'checked';
				if(isset($_SESSION['race4']) && $_SESSION['race4'] != '')
					$race4Check = 'checked';
				if(isset($_SESSION['race5']) && $_SESSION['race5'] != '')
					$race5Check = 'checked';
					
				print '
				<label><input name="race1" id="race1" type="checkbox" value="American Indian or Alaska Native" onClick="NativeCheck();" '.$race1Check.' />American Indian or Alaska Native (including Central and South America)</label><br />
				<label><input name="race2" id="race2" type="checkbox" value="Asian" '.$race2Check.' />Asian</label><br />
				<label><input name="race3" id="race3" type="checkbox" value="Black or African American" '.$race3Check.' />Black or African American</label><br />
				<label><input name="race4" id="race4" type="checkbox" value="Native Hawaiian or Other Pacific Islander" '.$race4Check.' />Native Hawaiian or Other Pacific Islander</label><br />
				<label><input name="race5" id="race5" type="checkbox" value="White" '.$race5Check.' />White</label><br />
				
			</p>';
			print '<div class="ifYes" id="NativeOtherDiv" style="display:none;">
			<p class="FormLabel">If American Indian, please specify tribal affiliation.<br />
					<input name="native_affiliation" type="text" class="FormFieldTextBox" id="native_affiliation" tabindex="" value="'.$_SESSION['native_affiliation'].'" size="45" />
			</p>
			</div>
		</div>';
		
		print '<p><span class="FormLabel">Are you a U.S. citizen?</span> <span class="Required">*</span><br />';
		
		if(isset($_SESSION['us_citizen']) && $_SESSION['us_citizen'] == 'Yes'){
				print '<label><input name="us_citizen" type="radio" class="FormFieldTextBox" value="Yes" tabindex="18" checked /> Yes</label><br />
				<label><input name="us_citizen" type="radio" class="FormFieldTextBox" value="No" tabindex="19" /> No</label>';
				} 
				elseif (isset($_SESSION['us_citizen']) && $_SESSION['us_citizen'] == 'No'){
				print '<label><input name="us_citizen" type="radio" class="FormFieldTextBox" value="Yes" tabindex="18" /> Yes</label><br />
				<label><input name="us_citizen" type="radio" class="FormFieldTextBox" value="No" checked tabindex="19" /> No</label>';
				}
				else 
				print '<label><input name="us_citizen" type="radio" class="FormFieldTextBox" value="Yes" tabindex="18" /> Yes</label><br />
				<label><input name="us_citizen" type="radio" class="FormFieldTextBox" value="No" tabindex="19" /> No</label>';
	
		print '</p>';
		print '</form>';	

		$strBackURL = CORE_GetURL(Const_SelfURL, CORE_GetQueryStringVar(Const_Action), Const_Phase1, "", "", "");
		$strCancelURL = CORE_GetURL(Const_SelfURL, CORE_GetQueryStringVar(Const_Action), Const_Phase9, "", "", "");
		if(CORE_GetQueryStringVar(Const_Subaction) == "quickEdit")
			HTML_AddButtons('', "Submit Change", "", "Cancel", $strCancelURL, "", "");
		else
			HTML_AddButtons('', "Continue", "", "", "", "", "");
	}
	catch (Exception $ex)
	{
		throw new Exception($ex->getMessage());
	}
}

function ProcessForm_Page9()
{
	try
	{
		ValidateFormVars_Page9();
		SaveFormToDB_Page9();

		//after sending to the DB, go to a thank you page
		header("Location: ".CORE_GetURL(Const_ParentURL, $_REQUEST[Const_Action], Const_Phase10, "", "", ""));
	}
	catch (Exception $ex)
	{
		CORE_ErrorHandler($ex->getMessage(), '', '', '');
	}
}

function ValidateFormVars_Page9()
{
	$_SESSION['cmsAdmin_ErrMsgArray']="";
	$_SESSION['cmsAdmin_WrnMsgArray']="";

	$ip = $_SERVER['REMOTE_ADDR']; //don't make my mac do the final validation check
	if ($ip !="198.110.203.107") 
	{
		if($_REQUEST['initials'] == "")
			$aIssues[] = 'You must certify your application by entering your initials in the appropriate box at the bottom of this page.';
			
		if($_SESSION['enrollment_date'] == "")
			$aIssues[] = "Enrollment date".Const_emRequiredItem;
			
		if($_SESSION['pursue_nondegree'] == "")
			$aIssues[] = 'Please indicate if you intend to take courses only for personal/professional development.';
			
		if($_SESSION['cert'] == "")
			$aIssues[] = "Degree type".Const_emRequiredItem;
			
		if($_SESSION['program'] == "")
			$aIssues[] = "Your anticipated major".Const_emRequiredItem;
			
		if($_SESSION['suspended'] == "")
			$aIssues[] = 'Please indicate if you have or have not been suspended from college.';

		if($_SESSION['contact_street'] == "")
			$aIssues[] = "Your street address".Const_emRequiredItem;
	
		if($_SESSION['contact_city'] == "")
			$aIssues[] = "Your city".Const_emRequiredItem;
			
		if($_SESSION['state_2'] == "")
			$aIssues[] = "Your state".Const_emRequiredItem;
			
		if($_SESSION['contact_zip'] == "")
			$aIssues[] = "Your zip/postal code".Const_emRequiredItem;
		
		if($_SESSION['us_citizen'] == 'Yes')
		{
			if($_SESSION['state_1'] == "")
			$aIssues[] = 'Please select your state of legal residence.';
			
			if($_SESSION['county_resident_since_month'] == "" || $_SESSION['county_resident_since_year'] == "")
			$aIssues[] = 'Please indicate how long you have lived in this state.';
			
			if($_SESSION['county_residence'] == "United States" || $_SESSION['county_residence'] == "USA" || $_SESSION['county_residence'] == "U.S.A." || $_SESSION['county_residence'] == "united states" || $_SESSION['county_residence'] == "America" || $_SESSION['county_residence'] == "america")
			$aIssues[] = 'Please provide your <strong>county</strong> of residence, not your country.';
		}
		elseif($_SESSION['us_citizen'] != 'Yes')
		{				
			if($_SESSION['us_resident'] == "")
			$aIssues[] = "Your residency".Const_emRequiredItem;
	
			if($_SESSION['country_citizenship'] == "")
			$aIssues[] = 'Please select your country of citizenship.';
	
			if($_SESSION['country_residence'] == "")
			$aIssues[] = 'Please select your country of legal residence.';
			
			if($_SESSION['undocumented'] != 'Yes')
				if($_SESSION['country_resident_since_month'] == "" || $_SESSION['country_resident_since_year'] == "")
				$aIssues[] = 'Please indicate how long you have lived in your country of legal residence.';
		}
	
		if($_SESSION['first_name'] == "")
			$aIssues[] = 'Please enter your first name.';
			
		if($_SESSION['last_name'] == "")
			$aIssues[] = 'Please enter your last name.';
	
		if($_SESSION['us_citizen'] == "")
			$aIssues[] = 'Please select if you are a U.S. citizen or not.';
	}
	
	if(isset($aIssues) && $aIssues != "")
	{
		$_SESSION['cmsAdmin_ErrMsgArray'] = $aIssues;
		throw new Exception(Const_emCorrectItems);
	}
}


function SaveFormToDB_Page9()
{
	foreach($_REQUEST as $strFieldname=>$strFieldValue)
		$_SESSION[$strFieldname] = $strFieldValue;
		
	//encrypt the SSN
	$crypto = new phpFreaksCrypto();
	$ssn1 = $_SESSION['ssn_1'];
	$ssn2 = $_SESSION['ssn_2'];
	$ssn3 = $_SESSION['ssn_3'];
	$ssn = $ssn1 . $ssn2 . $ssn3;

	if ($ssn != '')
		$ssn_encrypted = $crypto->encrypt($ssn);

	$arrPossibleRaces = array();
	(isset($_SESSION['race1']) && $_SESSION['race1'] != '' ? $arrPossibleRaces[] = $_SESSION['race1'] : false);
	(isset($_SESSION['race2']) && $_SESSION['race2'] != '' ? $arrPossibleRaces[] = $_SESSION['race2'] : false);
	(isset($_SESSION['race3']) && $_SESSION['race3'] != '' ? $arrPossibleRaces[] = $_SESSION['race3'] : false);
	(isset($_SESSION['race4']) && $_SESSION['race4'] != '' ? $arrPossibleRaces[] = $_SESSION['race4'] : false);
	(isset($_SESSION['race5']) && $_SESSION['race5'] != '' ? $arrPossibleRaces[] = $_SESSION['race5'] : false);
	$race_list = implode(", ", $arrPossibleRaces);
	
	$arrLearnMethods = array();
	(isset($_SESSION['learn_advertising']) && $_SESSION['learn_advertising'] != '' ? $arrLearnMethods[] = $_SESSION['learn_advertising'] : false);
	(isset($_SESSION['learn_edu_fair']) && $_SESSION['learn_edu_fair'] != '' ? $arrLearnMethods[] = $_SESSION['learn_edu_fair'] : false);
	(isset($_SESSION['learn_internet']) && $_SESSION['learn_internet'] != '' ? $arrLearnMethods[] = $_SESSION['learn_internet'] : false);
	(isset($_SESSION['learn_referral']) && $_SESSION['learn_referral'] != '' ? $arrLearnMethods[] = $_SESSION['learn_referral'] : false);
	(isset($_SESSION['learn_other']) && $_SESSION['learn_other'] != '' ? $arrLearnMethods[] = $_SESSION['learn_other'] : false);
	$learn_about_nmu_list = implode(", ", $arrLearnMethods);
			
	$classSqlQuery = new SqlDataQueries();
	$classSqlQuery->SpecifyDB(Const_connHostWWW, Const_connDBWWW, Const_connUserWWW, Const_connPSWWWW);

	$ip = $_SERVER['REMOTE_ADDR'];
	$phpSubmitTime = date("Y-m-d g:i:s A");

	if($_SESSION['us_citizen']=='No' &&  $_SESSION['us_resident']=='No')
	{
		$strQuery = "INSERT INTO admissions_applications_international_dev SET 
					php_timestamp='".$phpSubmitTime."',
					submitter_ip='".$ip."',
					first_name='".addslashes($_SESSION['first_name'])."',
					last_name='".addslashes($_SESSION['last_name'])."',
					middle_name='".addslashes($_SESSION['middle_name'])."',
					pref_first_name='".addslashes($_SESSION['pref_first_name'])."',
					other_name='".addslashes($_SESSION['other_name'])."',
					date_of_birth='".addslashes($_SESSION['FirstSelectMonth']).' '.addslashes($_SESSION['FirstSelectDay']).' '.addslashes($_SESSION['FirstSelectYear'])."',
					gender='".addslashes($_SESSION['gender'])."',
					marital_status='".addslashes($_SESSION['marital_status'])."',
					veteran_status='".addslashes($_SESSION['veteran_status'])."',
					hispanic_latino='".addslashes($_SESSION['hisp_lat'])."',
					race='".addslashes($race_list)."',
					native_affiliation='".addslashes($_SESSION['native_affiliation'])."',
					us_citizen='".addslashes($_SESSION['us_citizen'])."',
					
					us_resident='".addslashes($_SESSION['us_resident'])."', 
					undocumented='".addslashes($_SESSION['undocumented'])."',
					alien_number='".addslashes($_SESSION['alien_reg_number'])."', 
					alien_date='".addslashes($_SESSION['alien_date_month']).' '.addslashes($_SESSION['alien_date_year'])."', 
					ssn='$ssn_encrypted', 
					country_citizenship='".addslashes($_SESSION['country_citizenship'])."', 
					visa_status='".addslashes($_SESSION['visa_type'])."', 
					country_legal_residence='".addslashes($_SESSION['country_residence'])."',
					country_resident_since='".addslashes($_SESSION['country_resident_since_month']).' '.addslashes($_SESSION['country_resident_since_year'])."', 
					place_of_birth='".addslashes($_SESSION['city_country_birth'])."', 
					family_alum='".addslashes($_SESSION['family_alum'])."',

					learn_about_nmu='".addslashes($learn_about_nmu_list)."',
					learn_about_nmu_other='".addslashes($_SESSION['learn_other_text'])."',
					
					contact_street='".addslashes($_SESSION['contact_street'])."', 
					contact_city='".addslashes($_SESSION['contact_city'])."', 
					contact_state='".addslashes($_SESSION['state_2'])."', 
					contact_country='".addslashes($_SESSION['contact_country'])."', 
					contact_postal_code='".addslashes($_SESSION['contact_zip'])."', 
					contact_phone='".addslashes($_SESSION['contact_phone'])."',
					contact_cell_phone='".addslashes($_SESSION['contact_cell_phone'])."', 
					contact_parent_phone='".addslashes($_SESSION['contact_parent_phone'])."',  
					contact_email='".addslashes($_SESSION['contact_email'])."', 
					contact_parent_email='".addslashes($_SESSION['contact_parent_email'])."', 
					permanent_street='".addslashes($_SESSION['permanent_street'])."', 
					permanent_city='".addslashes($_SESSION['permanent_city'])."', 
					permanent_state='".addslashes($_SESSION['state_3'])."', 
					permanent_country='".addslashes($_SESSION['permanent_country'])."', 
					permanent_postal_code='".addslashes($_SESSION['permanent_zip'])."', 
					permanent_phone='".addslashes($_SESSION['permanent_phone'])."', 
					er_first_name='".addslashes($_SESSION['er_first_name'])."', 
					er_last_name='".addslashes($_SESSION['er_last_name'])."', 
					er_street='".addslashes($_SESSION['er_street'])."', 
					er_city='".addslashes($_SESSION['er_city'])."', 
					er_state='".addslashes($_SESSION['state_4'])."', 
					er_country='".addslashes($_SESSION['er_country'])."', 
					er_postal_code='".addslashes($_SESSION['er_zip'])."', 
					er_phone='".addslashes($_SESSION['er_phone'])."', 
					er_relationship='".addslashes($_SESSION['er_relationship']).' '.addslashes($_SESSION['er_relationship_other'])."',
					
					high_school_name_1='".addslashes($_SESSION['high_school_name_1'])."', 
					high_school_city_1='".addslashes($_SESSION['high_school_city_1'])."', 
					high_school_state_1='".addslashes($_SESSION['high_school_state_1'])."', 
					high_school_zip_1='".addslashes($_SESSION['high_school_zip_1'])."',
					high_school_country_1='".addslashes($_SESSION['high_school_country_1'])."',  
					high_school_from_1='".addslashes($_SESSION['high_school_from_1mo']).' '.addslashes($_SESSION['high_school_from_1yr'])."', 
					high_school_thru_1='".addslashes($_SESSION['high_school_thru_1mo']).' '.addslashes($_SESSION['high_school_thru_1yr'])."', 
					high_school_credit_1='".addslashes($_SESSION['high_school_credit_1'])."', 
					high_school_degree_1='".addslashes($_SESSION['high_school_degree_1'])."',
					high_school_name_2='".addslashes($_SESSION['high_school_name_2'])."', 
					high_school_city_2='".addslashes($_SESSION['high_school_city_2'])."', 
					high_school_state_2='".addslashes($_SESSION['high_school_state_2'])."', 
					high_school_zip_2='".addslashes($_SESSION['high_school_zip_2'])."', 
					high_school_country_2='".addslashes($_SESSION['high_school_country_2'])."', 
					high_school_from_2='".addslashes($_SESSION['high_school_from_2mo']).' '.addslashes($_SESSION['high_school_from_2yr'])."', 
					high_school_thru_2='".addslashes($_SESSION['high_school_thru_2mo']).' '.addslashes($_SESSION['high_school_thru_2yr'])."', 
					high_school_credit_2='".addslashes($_SESSION['high_school_credit_2'])."', 
					high_school_degree_2='".addslashes($_SESSION['high_school_degree_2'])."',
					high_school_name_3='".addslashes($_SESSION['high_school_name_3'])."', 
					high_school_city_3='".addslashes($_SESSION['high_school_city_3'])."', 
					high_school_state_3='".addslashes($_SESSION['high_school_state_3'])."', 
					high_school_zip_3='".addslashes($_SESSION['high_school_zip_3'])."',
					high_school_country_3='".addslashes($_SESSION['high_school_country_3'])."',  
					high_school_from_3='".addslashes($_SESSION['high_school_from_3mo']).' '.addslashes($_SESSION['high_school_from_3yr'])."', 
					high_school_thru_3='".addslashes($_SESSION['high_school_thru_3mo']).' '.addslashes($_SESSION['high_school_thru_3yr'])."', 
					high_school_credit_3='".addslashes($_SESSION['high_school_credit_3'])."', 
					high_school_degree_3='".addslashes($_SESSION['high_school_degree_3'])."', 
					additional_hs='".addslashes($_SESSION['additional_hs'])."',  
					
					take_act='".addslashes($_SESSION['take_act'])."', 
					act_score='".addslashes($_SESSION['act_score'])."', 
					act_taken='".addslashes($_SESSION['act_taken_month']).' '.addslashes($_SESSION['act_taken_year'])."', 
					act_taken_again='".addslashes($_SESSION['act_taken_again_month']).' '.addslashes($_SESSION['act_taken_again_year'])."', 
					act_taken_first='".addslashes($_SESSION['act_taken_first_month']).' '.addslashes($_SESSION['act_taken_first_year'])."', 
					take_sat='".addslashes($_SESSION['take_sat'])."', 
					sat_score='".addslashes($_SESSION['sat_score'])."', 
					sat_taken='".addslashes($_SESSION['sat_date_month']).' '.addslashes($_SESSION['sat_date_year'])."', 
					sat_date_again='".addslashes($_SESSION['sat_date_again_month']).' '.addslashes($_SESSION['sat_date_again_year'])."', 
					sat_date_first='".addslashes($_SESSION['sat_date_first_month']).' '.addslashes($_SESSION['sat_date_first_year'])."', 
					english_prof='".addslashes($_SESSION['english_prof'])."', 
					english_prof_test='".addslashes($_SESSION['english_prof_test'])."', 
					english_prof_date='".addslashes($_SESSION['english_prof_date_month']).' '.addslashes($_SESSION['english_prof_date_year'])."',
					
					transfer_student='".addslashes($_SESSION['transfer_student'])."', 
					school_name_1='".addslashes($_SESSION['college_name_1'])."', 
					school_city_1='".addslashes($_SESSION['college_city_1'])."', 
					school_state_1='".addslashes($_SESSION['college_state_1'])."', 
					school_zip_1='".addslashes($_SESSION['college_zip_1'])."',
					school_country_1='".addslashes($_SESSION['college_country_1'])."',  
					school_from_1='".addslashes($_SESSION['attended_from_mo_1']).' '.addslashes($_SESSION['attended_from_yr_1'])."', 
					school_thru_1='".addslashes($_SESSION['attended_to_mo_1']).' '.addslashes($_SESSION['attended_to_yr_1'])."', 
					school_credit_1='".addslashes($_SESSION['college_credit_1'])."', 
					school_degree_1='".addslashes($_SESSION['college_degree_attained_1'])."', 
					school_degree_attained_date_1='".addslashes($_SESSION['college_degree_attained_mo_1']).' '.addslashes($_SESSION['college_degree_attained_yr_1'])."', 
					school_name_2='".addslashes($_SESSION['college_name_2'])."', 
					school_city_2='".addslashes($_SESSION['college_city_2'])."', 
					school_state_2='".addslashes($_SESSION['college_state_2'])."', 
					school_zip_2='".addslashes($_SESSION['college_zip_2'])."', 
					school_country_2='".addslashes($_SESSION['college_country_2'])."', 
					school_from_2='".addslashes($_SESSION['attended_from_mo_2']).' '.addslashes($_SESSION['attended_from_yr_2'])."', 
					school_thru_2='".addslashes($_SESSION['attended_to_mo_2']).' '.addslashes($_SESSION['attended_to_yr_2'])."', 
					school_credit_2='".addslashes($_SESSION['college_credit_2'])."', 
					school_degree_2='".addslashes($_SESSION['college_degree_attained_2'])."', 
					school_degree_attained_date_2='".addslashes($_SESSION['college_degree_attained_mo_2']).' '.addslashes($_SESSION['college_degree_attained_yr_2'])."', 
					school_name_3='".addslashes($_SESSION['college_name_3'])."', 
					school_city_3='".addslashes($_SESSION['college_city_3'])."', 
					school_state_3='".addslashes($_SESSION['college_state_3'])."', 
					school_zip_3='".addslashes($_SESSION['college_zip_3'])."', 
					school_country_3='".addslashes($_SESSION['college_country_3'])."', 
					school_from_3='".addslashes($_SESSION['attended_from_mo_3']).' '.addslashes($_SESSION['attended_from_yr_3'])."', 
					school_thru_3='".addslashes($_SESSION['attended_to_mo_3']).' '.addslashes($_SESSION['attended_to_yr_3'])."', 
					school_credit_3='".addslashes($_SESSION['college_credit_3'])."', 
					school_degree_3='".addslashes($_SESSION['college_degree_attained_3'])."', 
					school_degree_attained_date_3='".addslashes($_SESSION['college_degree_attained_mo_3']).' '.addslashes($_SESSION['college_degree_attained_yr_3'])."', 
					additional_school='".addslashes($_SESSION['additional_college'])."', 
					esl='".addslashes($_SESSION['esl'])."', 
					suspended='".addslashes($_SESSION['suspended'])."', 
					suspended_when='".addslashes($_SESSION['suspended_when_month']).' '.addslashes($_SESSION['suspended_when_year'])."', 
					suspended_school='".addslashes($_SESSION['suspended_school'])."', 
					suspended_explain='".addslashes($_SESSION['suspended_explain'])."', 
					
					course_type_1='".addslashes($_SESSION['select_1'])."',
					course_name_1='".addslashes($_SESSION['course_name_1'])."', 
					course_number_1='".addslashes($_SESSION['course_number_1'])."', 
					course_credits_1='".addslashes($_SESSION['course_credits_1'])."', 
					course_term_1='".addslashes($_SESSION['course_term_1'])."',
					course_type_2='".addslashes($_SESSION['select_2'])."',
					course_name_2='".addslashes($_SESSION['course_name_2'])."', 
					course_number_2='".addslashes($_SESSION['course_number_2'])."', 
					course_credits_2='".addslashes($_SESSION['course_credits_2'])."', 
					course_term_2='".addslashes($_SESSION['course_term_2'])."',
					course_type_3='".addslashes($_SESSION['select_3'])."',
					course_name_3='".addslashes($_SESSION['course_name_3'])."', 
					course_number_3='".addslashes($_SESSION['course_number_3'])."', 
					course_credits_3='".addslashes($_SESSION['course_credits_3'])."', 
					course_term_3='".addslashes($_SESSION['course_term_3'])."', 
					course_type_4='".addslashes($_SESSION['select_4'])."',
					course_name_4='".addslashes($_SESSION['course_name_4'])."', 
					course_number_4='".addslashes($_SESSION['course_number_4'])."', 
					course_credits_4='".addslashes($_SESSION['course_credits_4'])."', 
					course_term_4='".addslashes($_SESSION['course_term_4'])."', 
					course_type_5='".addslashes($_SESSION['select_5'])."',
					course_name_5='".addslashes($_SESSION['course_name_5'])."', 
					course_number_5='".addslashes($_SESSION['course_number_5'])."', 
					course_credits_5='".addslashes($_SESSION['course_credits_5'])."', 
					course_term_5='".addslashes($_SESSION['course_term_5'])."', 		
					course_type_6='".addslashes($_SESSION['select_6'])."',
					course_name_6='".addslashes($_SESSION['course_name_6'])."', 
					course_number_6='".addslashes($_SESSION['course_number_6'])."', 
					course_credits_6='".addslashes($_SESSION['course_credits_6'])."', 
					course_term_6='".addslashes($_SESSION['course_term_6'])."', 
					course_type_7='".addslashes($_SESSION['select_7'])."',

					course_name_7='".addslashes($_SESSION['course_name_7'])."', 
					course_number_7='".addslashes($_SESSION['course_number_7'])."', 
					course_credits_7='".addslashes($_SESSION['course_credits_7'])."', 
					course_term_7='".addslashes($_SESSION['course_term_7'])."', 
					additional_course='".addslashes($_SESSION['additional_course'])."', 
					non_us_school='".addslashes($_SESSION['non_us_school'])."', 
					credit_eval_agency='".addslashes($_SESSION['credit_eval_agency'])."', 
					credit_eval_date='".addslashes($_SESSION['credit_eval_month']).' '.addslashes($_SESSION['credit_eval_year'])."', 
					
					enrollment_date='".addslashes($_SESSION['enrollment_date'])."', 
					pursue_nondegree='".addslashes($_SESSION['pursue_nondegree'])."', 
					cert_type='".addslashes($_SESSION['cert'])."', 
					program='".addslashes($_SESSION['program'])."', 
					minor='".addslashes($_SESSION['minor'])."', 
					teaching_cert='".addslashes($_SESSION['teaching_cert'])."', 
					teaching_cert_level='".addslashes($_SESSION['teaching_cert_level'])."',
					comments='".addslashes($_SESSION['comments'])."', 
					
					initials='".addslashes($_SESSION['initials'])."'";
					
		/********************************************************************************/
		// ORACLE CONNECTION INFO
		$classOracleQuery = new OracleDataQueries(Const_SportsOracleDBUSER, Const_SportsOracleDBPW, Const_SportsOracleDBConn);
		$strOracleQuery = "INSERT INTO NMU_UGRAD_APPLICATIONS
					(php_timestamp, submitter_ip, first_name, last_name, middle_name, pref_first_name, other_name, date_of_birth, gender, marital_status, veteran_status, hispanic_latino, race, native_affiliation, us_citizen, us_resident, undocumented, alien_reg_number, alien_reg_issued, ssn, country_citizenship, visa_status, country_residence, country_resident_since, city_country_birth, family_alum, learn_about_nmu, learn_about_nmu_other, contact_street, contact_city, contact_state, contact_country, contact_zip, contact_phone, contact_cell_phone, contact_parent_phone, contact_email, contact_parent_email, permanent_street, permanent_city, permanent_state, permanent_country, permanent_zip, permanent_phone, er_first_name, er_last_name, er_street, er_city, er_state, er_country, er_zip, er_phone, er_relationship, 
					high_school_name_1, high_school_city_1, high_school_state_1, high_school_zip_1, high_school_country_1, high_school_from_1, high_school_thru_1, high_school_credit_1, high_school_degree_1, high_school_name_2, high_school_city_2, high_school_state_2, high_school_zip_2, high_school_country_2, high_school_from_2, high_school_thru_2, high_school_credit_2, high_school_degree_2, high_school_name_3, high_school_city_3, high_school_state_3, high_school_zip_3, high_school_country_3, high_school_from_3, high_school_thru_3, high_school_credit_3, high_school_degree_3, additional_hs, take_act, act_score, act_taken, act_taken_again, act_taken_first, take_sat, sat_score, sat_taken, sat_date_again, sat_date_first, english_prof, english_prof_test, english_prof_date, transfer_student, 
					college_name_1, college_city_1, college_state_1, college_zip_1, college_country_1, college_from_1, college_thru_1, college_credit_1, college_degree_attained_1, college_degree_attained_date_1, college_name_2, college_city_2, college_state_2, college_zip_2, college_country_2, college_from_2, college_thru_2, college_credit_2, college_degree_attained_2, college_degree_attained_date_2, college_name_3, college_city_3, college_state_3, college_zip_3, college_country_3, college_from_3, college_thru_3, college_credit_3, college_degree_attained_3, college_degree_attained_date_3, additional_college, esl, suspended, suspended_when, suspended_school, suspended_explain, course_type_1, course_name_1, course_number_1, course_credits_1, course_term_1, course_type_2, course_name_2, course_number_2, course_credits_2, course_term_2, course_type_3, course_name_3, course_number_3, course_credits_3, course_term_3, course_type_4, course_name_4, course_number_4, course_credits_4, course_term_4, course_type_5, course_name_5, course_number_5, course_credits_5, course_term_5, course_type_6, course_name_6, course_number_6, course_credits_6, course_term_6, course_type_7,  course_name_7, course_number_7, course_credits_7, course_term_7, additional_course, 
					non_us_school, credit_eval_agency, credit_eval_date, enrollment_date, pursue_nondegree, cert_type, program, minor, teaching_cert, teaching_cert_level, comments, initials)
					Values (q'[".$phpSubmitTime."]', q'[".$ip."]', q'[".$_SESSION['first_name']."]', q'[".$_SESSION['last_name']."]', q'[".$_SESSION['middle_name']."]', q'[".$_SESSION['pref_first_name']."]', q'[".$_SESSION['other_name']."]', q'[".$_SESSION['FirstSelectMonth'].' '.$_SESSION['FirstSelectDay'].' '.$_SESSION['FirstSelectYear']."]', q'[".$_SESSION['gender']."]', q'[".$_SESSION['marital_status']."]', q'[".$_SESSION['veteran_status']."]', q'[".$_SESSION['hisp_lat']."]', q'[".$race_list."]', q'[".$_SESSION['native_affiliation']."]', q'[".$_SESSION['us_citizen']."]', q'[".$_SESSION['us_resident']."]', q'[".$_SESSION['undocumented']."]', q'[".$_SESSION['alien_reg_number']."]', q'[".$_SESSION['alien_date_month'].' '.$_SESSION['alien_date_year']."]', q'[".$ssn_encrypted."]', q'[".$_SESSION['country_citizenship']."]', q'[".$_SESSION['visa_type']."]', q'[".$_SESSION['country_residence']."]', q'[".$_SESSION['country_resident_since_month'].' '.$_SESSION['country_resident_since_year']."]', q'[".$_SESSION['city_country_birth']."]', q'[".$_SESSION['family_alum']."]', q'[".$learn_about_nmu_list."]', q'[".$_SESSION['learn_other_text']."]', q'[".$_SESSION['contact_street']."]', q'[".$_SESSION['contact_city']."]', q'[".$_SESSION['state_2']."]', q'[".$_SESSION['contact_country']."]', q'[".$_SESSION['contact_zip']."]', q'[".$_SESSION['contact_phone']."]', q'[".$_SESSION['contact_cell_phone']."]', q'[".$_SESSION['contact_parent_phone']."]',  q'[".$_SESSION['contact_email']."]', q'[".$_SESSION['contact_parent_email']."]', q'[".$_SESSION['permanent_street']."]', q'[".$_SESSION['permanent_city']."]', q'[".$_SESSION['state_3']."]', q'[".$_SESSION['permanent_country']."]', q'[".$_SESSION['permanent_zip']."]', q'[".$_SESSION['permanent_phone']."]', q'[".$_SESSION['er_first_name']."]', q'[".$_SESSION['er_last_name']."]', q'[".$_SESSION['er_street']."]', q'[".$_SESSION['er_city']."]', q'[".$_SESSION['state_4']."]', q'[".$_SESSION['er_country']."]', q'[".$_SESSION['er_zip']."]', q'[".$_SESSION['er_phone']."]', q'[".$_SESSION['er_relationship'].' '.$_SESSION['er_relationship_other']."]',
					q'[".$_SESSION['high_school_name_1']."]', q'[".$_SESSION['high_school_city_1']."]', q'[".$_SESSION['high_school_state_1']."]', q'[".$_SESSION['high_school_zip_1']."]', q'[".$_SESSION['high_school_country_1']."]',  q'[".$_SESSION['high_school_from_1mo'].' '.$_SESSION['high_school_from_1yr']."]', q'[".$_SESSION['high_school_thru_1mo'].' '.$_SESSION['high_school_thru_1yr']."]', q'[".$_SESSION['high_school_credit_1']."]', q'[".$_SESSION['high_school_degree_1']."]', q'[".$_SESSION['high_school_name_2']."]', q'[".$_SESSION['high_school_city_2']."]', q'[".$_SESSION['high_school_state_2']."]', q'[".$_SESSION['high_school_zip_2']."]', q'[".$_SESSION['high_school_country_2']."]', q'[".$_SESSION['high_school_from_2mo'].' '.$_SESSION['high_school_from_2yr']."]', q'[".$_SESSION['high_school_thru_2mo'].' '.$_SESSION['high_school_thru_2yr']."]', q'[".$_SESSION['high_school_credit_2']."]', q'[".$_SESSION['high_school_degree_2']."]', q'[".$_SESSION['high_school_name_3']."]', q'[".$_SESSION['high_school_city_3']."]', q'[".$_SESSION['high_school_state_3']."]', q'[".$_SESSION['high_school_zip_3']."]', q'[".$_SESSION['high_school_country_3']."]',  q'[".$_SESSION['high_school_from_3mo'].' '.$_SESSION['high_school_from_3yr']."]', q'[".$_SESSION['high_school_thru_3mo'].' '.$_SESSION['high_school_thru_3yr']."]', q'[".$_SESSION['high_school_credit_3']."]', q'[".$_SESSION['high_school_degree_3']."]', q'[".$_SESSION['additional_hs']."]',  q'[".$_SESSION['take_act']."]', q'[".$_SESSION['act_score']."]', q'[".$_SESSION['act_taken_month'].' '.$_SESSION['act_taken_year']."]', q'[".$_SESSION['act_taken_again_month'].' '.$_SESSION['act_taken_again_year']."]', q'[".$_SESSION['act_taken_first_month'].' '.$_SESSION['act_taken_first_year']."]', q'[".$_SESSION['take_sat']."]', q'[".$_SESSION['sat_score']."]', q'[".$_SESSION['sat_date_month'].' '.$_SESSION['sat_date_year']."]', q'[".$_SESSION['sat_date_again_month'].' '.$_SESSION['sat_date_again_year']."]', q'[".$_SESSION['sat_date_first_month'].' '.$_SESSION['sat_date_first_year']."]', q'[".$_SESSION['english_prof']."]', q'[".$_SESSION['english_prof_test']."]', q'[".$_SESSION['english_prof_date_month'].' '.$_SESSION['english_prof_date_year']."]', q'[".$_SESSION['transfer_student']."]', 
					q'[".$_SESSION['college_name_1']."]', q'[".$_SESSION['college_city_1']."]', q'[".$_SESSION['college_state_1']."]', q'[".$_SESSION['college_zip_1']."]', q'[".$_SESSION['college_country_1']."]',  q'[".$_SESSION['attended_from_mo_1'].' '.$_SESSION['attended_from_yr_1']."]', q'[".$_SESSION['attended_to_mo_1'].' '.$_SESSION['attended_to_yr_1']."]', q'[".$_SESSION['college_credit_1']."]', q'[".$_SESSION['college_degree_attained_1']."]', q'[".$_SESSION['college_degree_attained_mo_1'].' '.$_SESSION['college_degree_attained_yr_1']."]', q'[".$_SESSION['college_name_2']."]', q'[".$_SESSION['college_city_2']."]', q'[".$_SESSION['college_state_2']."]', q'[".$_SESSION['college_zip_2']."]', q'[".$_SESSION['college_country_2']."]', q'[".$_SESSION['attended_from_mo_2'].' '.$_SESSION['attended_from_yr_2']."]', q'[".$_SESSION['attended_to_mo_2'].' '.$_SESSION['attended_to_yr_2']."]', q'[".$_SESSION['college_credit_2']."]', q'[".$_SESSION['college_degree_attained_2']."]', q'[".$_SESSION['college_degree_attained_mo_2'].' '.$_SESSION['college_degree_attained_yr_2']."]', q'[".$_SESSION['college_name_3']."]', q'[".$_SESSION['college_city_3']."]', q'[".$_SESSION['college_state_3']."]', q'[".$_SESSION['college_zip_3']."]', q'[".$_SESSION['college_country_3']."]', q'[".$_SESSION['attended_from_mo_3'].' '.$_SESSION['attended_from_yr_3']."]', q'[".$_SESSION['attended_to_mo_3'].' '.$_SESSION['attended_to_yr_3']."]', q'[".$_SESSION['college_credit_3']."]', q'[".$_SESSION['college_degree_attained_3']."]', q'[".$_SESSION['college_degree_attained_mo_3'].' '.$_SESSION['college_degree_attained_yr_3']."]', q'[".$_SESSION['additional_college']."]', q'[".$_SESSION['esl']."]', q'[".$_SESSION['suspended']."]', q'[".$_SESSION['suspended_when_month'].' '.$_SESSION['suspended_when_year']."]', q'[".$_SESSION['suspended_school']."]', q'[".$_SESSION['suspended_explain']."]', q'[".$_SESSION['select_1']."]', q'[".$_SESSION['course_name_1']."]', q'[".$_SESSION['course_number_1']."]', q'[".$_SESSION['course_credits_1']."]', q'[".$_SESSION['course_term_1']."]', q'[".$_SESSION['select_2']."]', q'[".$_SESSION['course_name_2']."]', q'[".$_SESSION['course_number_2']."]', q'[".$_SESSION['course_credits_2']."]', q'[".$_SESSION['course_term_2']."]', q'[".$_SESSION['select_3']."]', q'[".$_SESSION['course_name_3']."]', q'[".$_SESSION['course_number_3']."]', q'[".$_SESSION['course_credits_3']."]', q'[".$_SESSION['course_term_3']."]', q'[".$_SESSION['select_4']."]', q'[".$_SESSION['course_name_4']."]', q'[".$_SESSION['course_number_4']."]', q'[".$_SESSION['course_credits_4']."]', q'[".$_SESSION['course_term_4']."]', q'[".$_SESSION['select_5']."]', q'[".$_SESSION['course_name_5']."]', q'[".$_SESSION['course_number_5']."]', q'[".$_SESSION['course_credits_5']."]', q'[".$_SESSION['course_term_5']."]', q'[".$_SESSION['select_6']."]', q'[".$_SESSION['course_name_6']."]', q'[".$_SESSION['course_number_6']."]', q'[".$_SESSION['course_credits_6']."]', q'[".$_SESSION['course_term_6']."]', q'[".$_SESSION['select_7']."]', q'[".$_SESSION['course_name_7']."]', q'[".$_SESSION['course_number_7']."]', q'[".$_SESSION['course_credits_7']."]', q'[".$_SESSION['course_term_7']."]', q'[".$_SESSION['additional_course']."]', 
					q'[".$_SESSION['non_us_school']."]', q'[".$_SESSION['credit_eval_agency']."]', q'[".$_SESSION['credit_eval_month'].' '.$_SESSION['credit_eval_year']."]', q'[".$_SESSION['enrollment_date']."]', q'[".$_SESSION['pursue_nondegree']."]', q'[".$_SESSION['cert']."]', q'[".$_SESSION['program']."]', q'[".$_SESSION['minor']."]', q'[".$_SESSION['teaching_cert']."]', q'[".$_SESSION['teaching_cert_level']."]', q'[".$_SESSION['comments']."]', q'[".$_SESSION['initials']."]')";
		$aResults = $classOracleQuery->Oracle_Queries($strOracleQuery, "ignorenumberedrows");
		//printR($aResults);
		/*********************************************************************************/
		
	}
	else
	{
		$strQuery = "INSERT INTO admissions_applications_domestic_dev SET 
						php_timestamp='".$phpSubmitTime."',
						submitter_ip='".$ip."',
						first_name='".addslashes($_SESSION['first_name'])."',
						last_name='".addslashes($_SESSION['last_name'])."',
						middle_name='".addslashes($_SESSION['middle_name'])."',
						pref_first_name='".addslashes($_SESSION['pref_first_name'])."',
						other_name='".addslashes($_SESSION['other_name'])."',
						date_of_birth='".addslashes($_SESSION['FirstSelectMonth']).' '.addslashes($_SESSION['FirstSelectDay']).' '.addslashes($_SESSION['FirstSelectYear'])."',
						gender='".addslashes($_SESSION['gender'])."',
						marital_status='".addslashes($_SESSION['marital_status'])."',
						veteran_status='".addslashes($_SESSION['veteran_status'])."',
						hispanic_latino='".addslashes($_SESSION['hisp_lat'])."',
						race='".addslashes($race_list)."',
						native_affiliation='".addslashes($_SESSION['native_affiliation'])."',
						us_citizen='".addslashes($_SESSION['us_citizen'])."',
						
						state_residence='".addslashes($_SESSION['state_1'])."', 
						county_residence='".addslashes($_SESSION['county_residence'])."', 
						county_resident_since='".addslashes($_SESSION['county_resident_since_month']).' '.addslashes($_SESSION['county_resident_since_year'])."', 
						ssn='$ssn_encrypted',
						family_alum='".addslashes($_SESSION['family_alum'])."', 
						
						us_resident='".addslashes($_SESSION['us_resident'])."', 
						alien_reg_number='".addslashes($_SESSION['alien_reg_number'])."', 
						alien_reg_issued='".addslashes($_SESSION['alien_date_month']).' '.addslashes($_SESSION['alien_date_year'])."', 
						country_citizenship='".addslashes($_SESSION['country_citizenship'])."', 
						visa_type='".addslashes($_SESSION['visa_type'])."', 
						country_residence='".addslashes($_SESSION['country_residence'])."', 
						country_resident_since='".addslashes($_SESSION['country_resident_since_month']).' '.addslashes($_SESSION['country_resident_since_year'])."', 
						city_country_birth='".addslashes($_SESSION['city_country_birth'])."', 
						
						contact_street='".addslashes($_SESSION['contact_street'])."', 
						contact_city='".addslashes($_SESSION['contact_city'])."', 
						contact_state='".addslashes($_SESSION['state_2'])."', 
						contact_zip='".addslashes($_SESSION['contact_zip'])."',
						contact_country='".addslashes($_SESSION['contact_country'])."', 
						contact_phone='".addslashes($_SESSION['contact_phone_1']).' '.addslashes($_SESSION['contact_phone_2']).' '.addslashes($_SESSION['contact_phone_3'])."', 
						contact_cell_phone='".addslashes($_SESSION['contact_cell_phone_1']).' '.addslashes($_SESSION['contact_cell_phone_2']).' '.addslashes($_SESSION['contact_cell_phone_3'])."',
						contact_parent_phone='".addslashes($_SESSION['contact_parent_phone_1']).' '.addslashes($_SESSION['contact_parent_phone_2']).' '.addslashes($_SESSION['contact_parent_phone_3'])."', 
						contact_email='".addslashes($_SESSION['contact_email'])."', 
						contact_parent_email='".addslashes($_SESSION['contact_parent_email'])."', 
						permanent_street='".addslashes($_SESSION['permanent_street'])."', 
						permanent_city='".addslashes($_SESSION['permanent_city'])."', 
						permanent_state='".addslashes($_SESSION['state_3'])."', 
						permanent_zip='".addslashes($_SESSION['permanent_zip'])."',
						permanent_country='".addslashes($_SESSION['permanent_country'])."',  
						permanent_phone='".addslashes($_SESSION['permanent_phone_1']).' '.addslashes($_SESSION['permanent_phone_2']).' '.addslashes($_SESSION['permanent_phone_3'])."', 
						er_first_name='".addslashes($_SESSION['er_first_name'])."', 
						er_last_name='".addslashes($_SESSION['er_last_name'])."', 
						er_street='".addslashes($_SESSION['er_street'])."', 
						er_city='".addslashes($_SESSION['er_city'])."', 
						er_state='".addslashes($_SESSION['state_4'])."', 
						er_zip='".addslashes($_SESSION['er_zip'])."',
						er_country='".addslashes($_SESSION['er_country'])."', 
						er_phone='".addslashes($_SESSION['er_phone_1']).' '.addslashes($_SESSION['er_phone_2']).' '.addslashes($_SESSION['er_phone_3'])."', 
						er_relationship='".addslashes($_SESSION['er_relationship']).' '.addslashes($_SESSION['er_relationship_other'])."', 
						
						hs_degree='".addslashes($_SESSION['earned'])."', 
						hs_degree_earned='".addslashes($_SESSION['date_earned_month']).' '.addslashes($_SESSION['date_earned_year'])."', 
						hs_degree_future='".addslashes($_SESSION['ifnot_willyou'])."', 
						which_degree='".addslashes($_SESSION['which_one'])."', 
						high_school_expected_grad_date='".addslashes($_SESSION['expected_grad_date_month']).' '.addslashes($_SESSION['expected_grad_date_year'])."', 
						high_school_name_1='".addslashes($_SESSION['high_school_name_1'])."', 
						high_school_city_1='".addslashes($_SESSION['high_school_city_1'])."', 
						high_school_state_1='".addslashes($_SESSION['high_school_state_1'])."', 
						high_school_zip_1='".addslashes($_SESSION['high_school_zip_1'])."',
						high_school_country_1='".addslashes($_SESSION['high_school_country_1'])."',  
						high_school_from_1='".addslashes($_SESSION['high_school_from_1mo']).' '.addslashes($_SESSION['high_school_from_1yr'])."', 
						high_school_thru_1='".addslashes($_SESSION['high_school_thru_1mo']).' '.addslashes($_SESSION['high_school_thru_1yr'])."', 
						high_school_credit_1='".addslashes($_SESSION['high_school_credit_1'])."', 
						high_school_degree_1='".addslashes($_SESSION['high_school_degree_1'])."',
						high_school_name_2='".addslashes($_SESSION['high_school_name_2'])."', 
						high_school_city_2='".addslashes($_SESSION['high_school_city_2'])."', 
						high_school_state_2='".addslashes($_SESSION['high_school_state_2'])."', 
						high_school_zip_2='".addslashes($_SESSION['high_school_zip_2'])."', 
						high_school_country_2='".addslashes($_SESSION['high_school_country_2'])."', 
						high_school_from_2='".addslashes($_SESSION['high_school_from_2mo']).' '.addslashes($_SESSION['high_school_from_2yr'])."', 
						high_school_thru_2='".addslashes($_SESSION['high_school_thru_2mo']).' '.addslashes($_SESSION['high_school_thru_2yr'])."', 
						high_school_credit_2='".addslashes($_SESSION['high_school_credit_2'])."', 
						high_school_degree_2='".addslashes($_SESSION['high_school_degree_2'])."',
						high_school_name_3='".addslashes($_SESSION['high_school_name_3'])."', 
						high_school_city_3='".addslashes($_SESSION['high_school_city_3'])."', 
						high_school_state_3='".addslashes($_SESSION['high_school_state_3'])."', 
						high_school_zip_3='".addslashes($_SESSION['high_school_zip_3'])."',
						high_school_country_3='".addslashes($_SESSION['high_school_country_3'])."',  
						high_school_from_3='".addslashes($_SESSION['high_school_from_3mo']).' '.addslashes($_SESSION['high_school_from_3yr'])."', 
						high_school_thru_3='".addslashes($_SESSION['high_school_thru_3mo']).' '.addslashes($_SESSION['high_school_thru_3yr'])."', 
						high_school_credit_3='".addslashes($_SESSION['high_school_credit_3'])."', 
						high_school_degree_3='".addslashes($_SESSION['high_school_degree_3'])."', 
						additional_hs='".addslashes($_SESSION['additional_hs'])."', 
						
						take_act='".addslashes($_SESSION['take_act'])."', 
						act_score='".addslashes($_SESSION['act_score'])."', 
						act_taken='".addslashes($_SESSION['act_taken_month']).' '.addslashes($_SESSION['act_taken_year'])."', 
						act_taken_again='".addslashes($_SESSION['act_taken_again_month']).' '.addslashes($_SESSION['act_taken_again_year'])."', 
						act_taken_first='".addslashes($_SESSION['act_taken_first_month']).' '.addslashes($_SESSION['act_taken_first_year'])."', 
						take_sat='".addslashes($_SESSION['take_sat'])."', 
						sat_score='".addslashes($_SESSION['sat_score'])."', 
						sat_taken='".addslashes($_SESSION['sat_date_month']).' '.addslashes($_SESSION['sat_date_year'])."', 
						sat_date_again='".addslashes($_SESSION['sat_date_again_month']).' '.addslashes($_SESSION['sat_date_again_year'])."', 
						sat_date_first='".addslashes($_SESSION['sat_date_first_month']).' '.addslashes($_SESSION['sat_date_first_year'])."', 						
						
						transfer_student='".addslashes($_SESSION['transfer_student'])."', 
						college_name_1='".addslashes($_SESSION['college_name_1'])."', 
						college_city_1='".addslashes($_SESSION['college_city_1'])."', 
						college_state_1='".addslashes($_SESSION['college_state_1'])."', 
						college_zip_1='".addslashes($_SESSION['college_zip_1'])."',
						college_country_1='".addslashes($_SESSION['college_country_1'])."',   
						college_from_1='".addslashes($_SESSION['attended_from_mo_1']).' '.addslashes($_SESSION['attended_from_yr_1'])."', 
						college_thru_1='".addslashes($_SESSION['attended_to_mo_1']).' '.addslashes($_SESSION['attended_to_yr_1'])."', 
						college_credit_1='".addslashes($_SESSION['college_credit_1'])."', 
						college_degree_attained_1='".addslashes($_SESSION['college_degree_attained_1'])."', 
						college_degree_attained_date_1='".addslashes($_SESSION['college_degree_attained_mo_1']).' '.addslashes($_SESSION['college_degree_attained_yr_1'])."', 
						college_name_2='".addslashes($_SESSION['college_name_2'])."', 
						college_city_2='".addslashes($_SESSION['college_city_2'])."', 
						college_state_2='".addslashes($_SESSION['college_state_2'])."', 
						college_zip_2='".addslashes($_SESSION['college_zip_2'])."',
						college_country_2='".addslashes($_SESSION['college_country_2'])."',   
						college_from_2='".addslashes($_SESSION['attended_from_mo_2']).' '.addslashes($_SESSION['attended_from_yr_2'])."', 
						college_thru_2='".addslashes($_SESSION['attended_to_mo_2']).' '.addslashes($_SESSION['attended_to_yr_2'])."', 
						college_credit_2='".addslashes($_SESSION['college_credit_2'])."', 
						college_degree_attained_2='".addslashes($_SESSION['college_degree_attained_2'])."', 
						college_degree_attained_date_2='".addslashes($_SESSION['college_degree_attained_mo_2']).' '.addslashes($_SESSION['college_degree_attained_yr_2'])."', 
						college_name_3='".addslashes($_SESSION['college_name_3'])."', 
						college_city_3='".addslashes($_SESSION['college_city_3'])."', 
						college_state_3='".addslashes($_SESSION['college_state_3'])."', 
						college_zip_3='".addslashes($_SESSION['college_zip_3'])."',
						college_country_3='".addslashes($_SESSION['college_country_3'])."',   
						college_from_3='".addslashes($_SESSION['attended_from_mo_3']).' '.addslashes($_SESSION['attended_from_yr_3'])."', 
						college_thru_3='".addslashes($_SESSION['attended_to_mo_3']).' '.addslashes($_SESSION['attended_to_yr_3'])."', 
						college_credit_3='".addslashes($_SESSION['college_credit_3'])."', 
						college_degree_attained_3='".addslashes($_SESSION['college_degree_attained_3'])."', 
						college_degree_attained_date_3='".addslashes($_SESSION['college_degree_attained_mo_3']).' '.addslashes($_SESSION['college_degree_attained_yr_3'])."', 
						additional_college='".addslashes($_SESSION['additional_college'])."', 
						suspended='".addslashes($_SESSION['suspended'])."', 
						suspended_when='".addslashes($_SESSION['suspended_when_month']).' '.addslashes($_SESSION['suspended_when_year'])."', 
						suspended_school='".addslashes($_SESSION['suspended_school'])."', 
						suspended_explain='".addslashes($_SESSION['suspended_explain'])."', 
						
						course_type_1='".addslashes($_SESSION['select_1'])."',
						course_name_1='".addslashes($_SESSION['course_name_1'])."', 
						course_number_1='".addslashes($_SESSION['course_number_1'])."', 
						course_credits_1='".addslashes($_SESSION['course_credits_1'])."', 
						course_term_1='".addslashes($_SESSION['course_term_1'])."',
						course_type_2='".addslashes($_SESSION['select_2'])."',
						course_name_2='".addslashes($_SESSION['course_name_2'])."', 
						course_number_2='".addslashes($_SESSION['course_number_2'])."', 
						course_credits_2='".addslashes($_SESSION['course_credits_2'])."', 
						course_term_2='".addslashes($_SESSION['course_term_2'])."',
						course_type_3='".addslashes($_SESSION['select_3'])."',
						course_name_3='".addslashes($_SESSION['course_name_3'])."', 
						course_number_3='".addslashes($_SESSION['course_number_3'])."', 
						course_credits_3='".addslashes($_SESSION['course_credits_3'])."', 
						course_term_3='".addslashes($_SESSION['course_term_3'])."', 
						course_type_4='".addslashes($_SESSION['select_4'])."',
						course_name_4='".addslashes($_SESSION['course_name_4'])."', 
						course_number_4='".addslashes($_SESSION['course_number_4'])."', 
						course_credits_4='".addslashes($_SESSION['course_credits_4'])."', 
						course_term_4='".addslashes($_SESSION['course_term_4'])."', 
						course_type_5='".addslashes($_SESSION['select_5'])."',
						course_name_5='".addslashes($_SESSION['course_name_5'])."', 
						course_number_5='".addslashes($_SESSION['course_number_5'])."', 
						course_credits_5='".addslashes($_SESSION['course_credits_5'])."', 
						course_term_5='".addslashes($_SESSION['course_term_5'])."', 		
						course_type_6='".addslashes($_SESSION['select_6'])."',
						course_name_6='".addslashes($_SESSION['course_name_6'])."', 
						course_number_6='".addslashes($_SESSION['course_number_6'])."', 
						course_credits_6='".addslashes($_SESSION['course_credits_6'])."', 
						course_term_6='".addslashes($_SESSION['course_term_6'])."', 
						course_type_7='".addslashes($_SESSION['select_7'])."',
						course_name_7='".addslashes($_SESSION['course_name_7'])."', 
						course_number_7='".addslashes($_SESSION['course_number_7'])."', 
						course_credits_7='".addslashes($_SESSION['course_credits_7'])."', 
						course_term_7='".addslashes($_SESSION['course_term_7'])."', 
						additional_course='".addslashes($_SESSION['additional_course'])."', 
						non_us_school='".addslashes($_SESSION['non_us_school'])."', 
						credit_eval_agency='".addslashes($_SESSION['credit_eval_agency'])."', 
						credit_eval_date='".addslashes($_SESSION['credit_eval_month']).' '.addslashes($_SESSION['credit_eval_year'])."', 
						
						enrollment_date='".addslashes($_SESSION['enrollment_date'])."', 
						pursue_nondegree='".addslashes($_SESSION['pursue_nondegree'])."', 
						cert_type='".addslashes($_SESSION['cert'])."', 
						program='".addslashes($_SESSION['program'])."', 
						minor='".addslashes($_SESSION['minor'])."', 
						teaching_cert='".addslashes($_SESSION['teaching_cert'])."', 
						teaching_cert_level='".addslashes($_SESSION['teaching_cert_level'])."', 
						comments='".addslashes($_SESSION['comments'])."', 
						
						initials='".addslashes($_SESSION['initials'])."'";

		/********************************************************************************/
		// ORACLE CONNECTION INFO
		$classOracleQuery = new OracleDataQueries(Const_SportsOracleDBUSER, Const_SportsOracleDBPW, Const_SportsOracleDBConn);
		$strOracleQuery = "INSERT INTO NMU_UGRAD_APPLICATIONS
						(php_timestamp, submitter_ip, first_name, last_name, middle_name, pref_first_name, other_name, date_of_birth, gender, marital_status, veteran_status, hispanic_latino, race, native_affiliation, us_citizen, state_residence, county_residence, county_resident_since, ssn, family_alum, us_resident, alien_reg_number, alien_reg_issued, country_citizenship, visa_type, country_residence, country_resident_since, city_country_birth, contact_street, contact_city, contact_state, contact_zip, contact_country, contact_phone, contact_cell_phone, contact_parent_phone, contact_email, contact_parent_email, permanent_street, permanent_city, permanent_state, permanent_zip, permanent_country, permanent_phone, er_first_name, er_last_name, er_street, er_city, er_state, er_zip, er_country, er_phone, er_relationship, hs_degree, hs_degree_earned, hs_degree_future, which_degree, high_school_expected_grad_date, 
						high_school_name_1, high_school_city_1, high_school_state_1, high_school_zip_1, high_school_country_1, high_school_from_1, high_school_thru_1, high_school_credit_1, high_school_degree_1, high_school_name_2, high_school_city_2, high_school_state_2, high_school_zip_2, high_school_country_2, high_school_from_2, high_school_thru_2, high_school_credit_2, high_school_degree_2, high_school_name_3, high_school_city_3, high_school_state_3, high_school_zip_3, high_school_country_3, high_school_from_3, high_school_thru_3, high_school_credit_3, high_school_degree_3, additional_hs, take_act, act_score, act_taken, act_taken_again, act_taken_first, take_sat, sat_score, sat_taken, sat_date_again, sat_date_first, transfer_student, 
						college_name_1, college_city_1, college_state_1, college_zip_1, college_country_1, college_from_1, college_thru_1, college_credit_1, college_degree_attained_1, college_degree_attained_date_1, college_name_2, college_city_2, college_state_2, college_zip_2, college_country_2, college_from_2, college_thru_2, college_credit_2, college_degree_attained_2, college_degree_attained_date_2, college_name_3, college_city_3, college_state_3, college_zip_3, college_country_3, college_from_3, college_thru_3, college_credit_3, college_degree_attained_3, college_degree_attained_date_3, additional_college, suspended, suspended_when, suspended_school, suspended_explain, course_type_1, course_name_1, course_number_1, course_credits_1, course_term_1, course_type_2, course_name_2, course_number_2, course_credits_2, course_term_2, course_type_3, course_name_3, course_number_3, course_credits_3, course_term_3, course_type_4, course_name_4, course_number_4, course_credits_4, course_term_4, course_type_5, course_name_5, course_number_5, course_credits_5, course_term_5, course_type_6, course_name_6, course_number_6, course_credits_6, course_term_6, course_type_7, course_name_7, course_number_7, course_credits_7, course_term_7, additional_course, 
						non_us_school, credit_eval_agency, credit_eval_date, enrollment_date, pursue_nondegree, cert_type, program, minor, teaching_cert, teaching_cert_level, comments, initials)
						Values (q'[".$phpSubmitTime."]', q'[".$ip."]', q'[".$_SESSION['first_name']."]', q'[".$_SESSION['last_name']."]', q'[".$_SESSION['middle_name']."]', q'[".$_SESSION['pref_first_name']."]', q'[".$_SESSION['other_name']."]', q'[".$_SESSION['FirstSelectMonth'].' '.$_SESSION['FirstSelectDay'].' '.$_SESSION['FirstSelectYear']."]', q'[".$_SESSION['gender']."]', q'[".$_SESSION['marital_status']."]', q'[".$_SESSION['veteran_status']."]', q'[".$_SESSION['hisp_lat']."]', q'[".$race_list."]', q'[".$_SESSION['native_affiliation']."]', q'[".$_SESSION['us_citizen']."]', q'[".$_SESSION['state_1']."]', q'[".$_SESSION['county_residence']."]', q'[".$_SESSION['county_resident_since_month'].' '.$_SESSION['county_resident_since_year']."]', q'[".$ssn_encrypted."]', q'[".$_SESSION['family_alum']."]', q'[".$_SESSION['us_resident']."]', q'[".$_SESSION['alien_reg_number']."]', q'[".$_SESSION['alien_date_month'].' '.$_SESSION['alien_date_year']."]', q'[".$_SESSION['country_citizenship']."]', q'[".$_SESSION['visa_type']."]', q'[".$_SESSION['country_residence']."]', q'[".$_SESSION['country_resident_since_month'].' '.$_SESSION['country_resident_since_year']."]', q'[".$_SESSION['city_country_birth']."]', q'[".$_SESSION['contact_street']."]', q'[".$_SESSION['contact_city']."]', q'[".$_SESSION['state_2']."]', q'[".$_SESSION['contact_zip']."]', q'[".$_SESSION['contact_country']."]', q'[".$_SESSION['contact_phone_1'].' '.$_SESSION['contact_phone_2'].' '.$_SESSION['contact_phone_3']."]', q'[".$_SESSION['contact_cell_phone_1'].' '.$_SESSION['contact_cell_phone_2'].' '.$_SESSION['contact_cell_phone_3']."]', q'[".$_SESSION['contact_parent_phone_1'].' '.$_SESSION['contact_parent_phone_2'].' '.$_SESSION['contact_parent_phone_3']."]', q'[".$_SESSION['contact_email']."]', q'[".$_SESSION['contact_parent_email']."]', q'[".$_SESSION['permanent_street']."]', q'[".$_SESSION['permanent_city']."]', q'[".$_SESSION['state_3']."]', q'[".$_SESSION['permanent_zip']."]', q'[".$_SESSION['permanent_country']."]', q'[".$_SESSION['permanent_phone_1'].' '.$_SESSION['permanent_phone_2'].' '.$_SESSION['permanent_phone_3']."]', q'[".$_SESSION['er_first_name']."]', q'[".$_SESSION['er_last_name']."]', q'[".$_SESSION['er_street']."]', q'[".$_SESSION['er_city']."]', q'[".$_SESSION['state_4']."]', q'[".$_SESSION['er_zip']."]', q'[".$_SESSION['er_country']."]', q'[".$_SESSION['er_phone_1'].' '.$_SESSION['er_phone_2'].' '.$_SESSION['er_phone_3']."]', q'[".$_SESSION['er_relationship'].' '.$_SESSION['er_relationship_other']."]', q'[".$_SESSION['earned']."]', q'[".$_SESSION['date_earned_month'].' '.$_SESSION['date_earned_year']."]', q'[".$_SESSION['ifnot_willyou']."]', q'[".$_SESSION['which_one']."]', q'[".$_SESSION['expected_grad_date_month'].' '.$_SESSION['expected_grad_date_year']."]', 
						q'[".$_SESSION['high_school_name_1']."]', q'[".$_SESSION['high_school_city_1']."]', q'[".$_SESSION['high_school_state_1']."]', q'[".$_SESSION['high_school_zip_1']."]', q'[".$_SESSION['high_school_country_1']."]', q'[".$_SESSION['high_school_from_1mo'].' '.$_SESSION['high_school_from_1yr']."]', q'[".$_SESSION['high_school_thru_1mo'].' '.$_SESSION['high_school_thru_1yr']."]', q'[".$_SESSION['high_school_credit_1']."]', q'[".$_SESSION['high_school_degree_1']."]', q'[".$_SESSION['high_school_name_2']."]', q'[".$_SESSION['high_school_city_2']."]', q'[".$_SESSION['high_school_state_2']."]', q'[".$_SESSION['high_school_zip_2']."]', q'[".$_SESSION['high_school_country_2']."]', q'[".$_SESSION['high_school_from_2mo'].' '.$_SESSION['high_school_from_2yr']."]', q'[".$_SESSION['high_school_thru_2mo'].' '.$_SESSION['high_school_thru_2yr']."]', q'[".$_SESSION['high_school_credit_2']."]', q'[".$_SESSION['high_school_degree_2']."]', q'[".$_SESSION['high_school_name_3']."]', q'[".$_SESSION['high_school_city_3']."]', q'[".$_SESSION['high_school_state_3']."]', q'[".$_SESSION['high_school_zip_3']."]', q'[".$_SESSION['high_school_country_3']."]', q'[".$_SESSION['high_school_from_3mo'].' '.$_SESSION['high_school_from_3yr']."]', q'[".$_SESSION['high_school_thru_3mo'].' '.$_SESSION['high_school_thru_3yr']."]', q'[".$_SESSION['high_school_credit_3']."]', q'[".$_SESSION['high_school_degree_3']."]', q'[".$_SESSION['additional_hs']."]', q'[".$_SESSION['take_act']."]', q'[".$_SESSION['act_score']."]', q'[".$_SESSION['act_taken_month'].' '.$_SESSION['act_taken_year']."]', q'[".$_SESSION['act_taken_again_month'].' '.$_SESSION['act_taken_again_year']."]', q'[".$_SESSION['act_taken_first_month'].' '.$_SESSION['act_taken_first_year']."]', q'[".$_SESSION['take_sat']."]', q'[".$_SESSION['sat_score']."]', q'[".$_SESSION['sat_date_month'].' '.$_SESSION['sat_date_year']."]', q'[".$_SESSION['sat_date_again_month'].' '.$_SESSION['sat_date_again_year']."]', q'[".$_SESSION['sat_date_first_month'].' '.$_SESSION['sat_date_first_year']."]', q'[".$_SESSION['transfer_student']."]', 
						q'[".$_SESSION['college_name_1']."]', q'[".$_SESSION['college_city_1']."]', q'[".$_SESSION['college_state_1']."]', q'[".$_SESSION['college_zip_1']."]', q'[".$_SESSION['college_country_1']."]', q'[".$_SESSION['attended_from_mo_1'].' '.$_SESSION['attended_from_yr_1']."]', q'[".$_SESSION['attended_to_mo_1'].' '.$_SESSION['attended_to_yr_1']."]', q'[".$_SESSION['college_credit_1']."]', q'[".$_SESSION['college_degree_attained_1']."]', q'[".$_SESSION['college_degree_attained_mo_1'].' '.$_SESSION['college_degree_attained_yr_1']."]', q'[".$_SESSION['college_name_2']."]', q'[".$_SESSION['college_city_2']."]', q'[".$_SESSION['college_state_2']."]', q'[".$_SESSION['college_zip_2']."]', q'[".$_SESSION['college_country_2']."]', q'[".$_SESSION['attended_from_mo_2'].' '.$_SESSION['attended_from_yr_2']."]', q'[".$_SESSION['attended_to_mo_2'].' '.$_SESSION['attended_to_yr_2']."]', q'[".$_SESSION['college_credit_2']."]', q'[".$_SESSION['college_degree_attained_2']."]', q'[".$_SESSION['college_degree_attained_mo_2'].' '.$_SESSION['college_degree_attained_yr_2']."]', q'[".$_SESSION['college_name_3']."]', q'[".$_SESSION['college_city_3']."]', q'[".$_SESSION['college_state_3']."]', q'[".$_SESSION['college_zip_3']."]', q'[".$_SESSION['college_country_3']."]', q'[".$_SESSION['attended_from_mo_3'].' '.$_SESSION['attended_from_yr_3']."]', q'[".$_SESSION['attended_to_mo_3'].' '.$_SESSION['attended_to_yr_3']."]', q'[".$_SESSION['college_credit_3']."]', q'[".$_SESSION['college_degree_attained_3']."]', q'[".$_SESSION['college_degree_attained_mo_3'].' '.$_SESSION['college_degree_attained_yr_3']."]', q'[".$_SESSION['additional_college']."]', q'[".$_SESSION['suspended']."]', q'[".$_SESSION['suspended_when_month'].' '.$_SESSION['suspended_when_year']."]', q'[".$_SESSION['suspended_school']."]', q'[".$_SESSION['suspended_explain']."]', q'[".$_SESSION['select_1']."]', q'[".$_SESSION['course_name_1']."]', q'[".$_SESSION['course_number_1']."]', q'[".$_SESSION['course_credits_1']."]', q'[".$_SESSION['course_term_1']."]', q'[".$_SESSION['select_2']."]', q'[".$_SESSION['course_name_2']."]', q'[".$_SESSION['course_number_2']."]', q'[".$_SESSION['course_credits_2']."]', q'[".$_SESSION['course_term_2']."]', q'[".$_SESSION['select_3']."]', q'[".$_SESSION['course_name_3']."]', q'[".$_SESSION['course_number_3']."]', q'[".$_SESSION['course_credits_3']."]', q'[".$_SESSION['course_term_3']."]', q'[".$_SESSION['select_4']."]', q'[".$_SESSION['course_name_4']."]', q'[".$_SESSION['course_number_4']."]', q'[".$_SESSION['course_credits_4']."]', q'[".$_SESSION['course_term_4']."]', q'[".$_SESSION['select_5']."]', q'[".$_SESSION['course_name_5']."]', q'[".$_SESSION['course_number_5']."]', q'[".$_SESSION['course_credits_5']."]', q'[".$_SESSION['course_term_5']."]', q'[".$_SESSION['select_6']."]', q'[".$_SESSION['course_name_6']."]', q'[".$_SESSION['course_number_6']."]', q'[".$_SESSION['course_credits_6']."]', q'[".$_SESSION['course_term_6']."]', q'[".$_SESSION['select_7']."]', q'[".$_SESSION['course_name_7']."]', q'[".$_SESSION['course_number_7']."]', q'[".$_SESSION['course_credits_7']."]', q'[".$_SESSION['course_term_7']."]', q'[".$_SESSION['additional_course']."]', 
						q'[".$_SESSION['non_us_school']."]', q'[".$_SESSION['credit_eval_agency']."]', q'[".$_SESSION['credit_eval_month'].' '.$_SESSION['credit_eval_year']."]', q'[".$_SESSION['enrollment_date']."]', q'[".$_SESSION['pursue_nondegree']."]', q'[".$_SESSION['cert']."]', q'[".$_SESSION['program']."]', q'[".$_SESSION['minor']."]', q'[".$_SESSION['teaching_cert']."]', q'[".$_SESSION['teaching_cert_level']."]', q'[".$_SESSION['comments']."]', q'[".$_SESSION['initials']."]')";
		$aResults = $classOracleQuery->Oracle_Queries($strOracleQuery, "ignorenumberedrows");
		/*********************************************************************************/
		
		//these are states/types we have counselors assigned to, but are not broken down by zip
		$aCoveredStates = array('California','New York','New Jersey','Florida','International');
		//these are states we do not have counselors assigned to
		$aOtherStates = array('Alabama', 'Alaska', 'Arizona', 'Arkansas', 'Colorado', 'Connecticut', 'Delaware', 'District of Columbia', 'Georgia', 'Hawaii', 'Idaho', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Missouri', 'Mississippi', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Mexico', 'North Dakota', 'North Carolina', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wyoming');
		
			if($_SESSION['transfer_student'] == 'Yes')
			{
				if(in_array($_SESSION['state_2'], $aOtherStates))
				{
				//selects the transfer counselor assigned to all other states not assigned a counselor
					$strQuery2 = "SELECT admissions_counselors.counselor_email AS counselor_email, admissions_regions.region_code, admissions_regions.region_state
					FROM (admissions_counselors INNER JOIN admissions_regions ON admissions_counselors.counselor_id = admissions_regions.region_counselor) 
					WHERE admissions_regions.region_state='Other' AND admissions_regions.student_type='Transfer';";
				}
				else
				{
				//selects a counselor based on the state entered in the app, the only applies to covered states.  all other should be covered by the previous query
					$strQuery2 = "SELECT admissions_counselors.counselor_email AS counselor_email, admissions_regions.region_code, admissions_regions.region_state
					FROM (admissions_counselors INNER JOIN admissions_regions ON admissions_counselors.counselor_id = admissions_regions.region_counselor) 
					WHERE admissions_regions.region_state='".addslashes($_SESSION['state_2'])."' AND admissions_regions.student_type='Transfer';";
				}
			}
			else //not a transfer student
			{				
				if(in_array($_SESSION['state_2'], $aCoveredStates))
				{
				//selects a counselor based on the state that is listed in the drop down box, only for the states not broken down by zip that we have a counselor assigned to
					$strQuery2 = "SELECT admissions_counselors.counselor_email AS counselor_email, admissions_regions.region_code, admissions_regions.region_state
					FROM (admissions_counselors INNER JOIN admissions_regions ON admissions_counselors.counselor_id = admissions_regions.region_counselor) 
					WHERE admissions_regions.region_state='".addslashes($_SESSION['state_2'])."' AND admissions_regions.student_type='First Year';";
				}
				else if(in_array($_SESSION['state_2'], $aOtherStates))
				{
				//selects a counselor assigned to all other states not specificaly covered
					$strQuery2 = "SELECT admissions_counselors.counselor_email AS counselor_email, admissions_regions.region_code, admissions_regions.region_state
					FROM (admissions_counselors INNER JOIN admissions_regions ON admissions_counselors.counselor_id = admissions_regions.region_counselor) 
					WHERE admissions_regions.region_state='Other' AND admissions_regions.student_type='First Year';";
				}
				else
				{		
				//select a counselor based on the provided zip code.   this should just hit the regional states mi, wi, ill, ind, mnn and ohio
					$strQuery2 = "SELECT admissions_counselors.counselor_email AS counselor_email, admissions_regions.region_code, admissions_regions_zipcodes.zip_code
					FROM (admissions_counselors INNER JOIN admissions_regions ON admissions_counselors.counselor_id = admissions_regions.region_counselor) 
					INNER JOIN admissions_regions_zipcodes ON admissions_regions.region_code = admissions_regions_zipcodes.region
					WHERE admissions_regions_zipcodes.zip_code='".addslashes($_SESSION['contact_zip'])."';";
				}
			}
		}
		
		$classSqlQuery->MySQL_Queries($strQuery);
		
		if($strQuery2 != "")
			$aResult = $classSqlQuery->MySQL_Queries($strQuery2);
		
		//send e-mail to admissions	
		$strSubject = 'Application received';
		$strSender = 'edesign@nmu.edu';
		$strReplyTo = 'edesign@nmu.edu';
		$aCCs = '';
		
		$strMsg = '<strong>Admission application submitted by:</strong> '.$_SESSION['first_name'].' '.$_SESSION['last_name'].'<br /><br />';
		$strMsg .= '<strong>Term:</strong> '.$_SESSION['enrollment_date'].'<br />';
		$strMsg .= '<strong>Applicant\'s e-mail:</strong> <a href="mailto:'.$_SESSION['contact_email'].'">'.$_SESSION['contact_email'].'</a><br />';
		$strMsg .= '<strong>Applicant\'s phone number:</strong> '.$_SESSION['contact_phone_1'].'-'.$_SESSION['contact_phone_2'].'-'.$_SESSION['contact_phone_3'].'<br />';	
		$strMsg .= '<strong>Applicant\'s cell phone number:</strong> '.$_SESSION['contact_cell_phone_1'].'-'.$_SESSION['contact_cell_phone_2'].'-'.$_SESSION['contact_cell_phone_3'].'<br />';	
		$strMsg .= '<strong>Applicant\'s zip code:</strong> '.$_SESSION['contact_zip'].'<br /><br />';
		
		$strMsg .= '<strong>Applicant\'s state:</strong> '.$_SESSION['state_2'].'<br />';
		$strMsg .= '<strong>Transfer student:</strong> '.$_SESSION['transfer_student'].'<br /><br />';
		
		$strMsg .= '<strong>Most Recent High School Information</strong><br />';
		$strMsg .= '<strong>School name:</strong> '.$_SESSION['high_school_name_1'].'<br />';
		$strMsg .= '<strong>City:</strong> '.$_SESSION['high_school_city_1'].'<br />';
		$strMsg .= '<strong>State:</strong> '.$_SESSION['high_school_state_1'].'<br />';
		$strMsg .= '<strong>Zip/Postal code:</strong> '.$_SESSION['high_school_zip_1'].'<br />';
		$strMsg .= '<strong>Attended from:</strong> '.$_SESSION['high_school_from_1mo'].' '.$_SESSION['high_school_from_1yr'].' <strong>through</strong> '.$_SESSION['high_school_thru_1mo'].' '.$_SESSION['high_school_thru_1yr'].'<br />';
		$strMsg .= '<strong>Credit hours:</strong> '.$_SESSION['high_school_credit_1']. '<br /><br />';
		
		$strMsg .= '<strong>Most Recent College Information</strong><br />';
		$strMsg .= '<strong>College name:</strong> '.$_SESSION['college_name_1'].'<br />'; 
		$strMsg .= '<strong>College city:</strong> '.$_SESSION['college_city_1'].'<br />'; 
		$strMsg .= '<strong>College state:</strong> '.$_SESSION['college_state_1'].'<br />'; 
		$strMsg .= '<strong>College zip:</strong> '.$_SESSION['college_zip_1'].'<br />';   
		$strMsg .= '<strong>Attended from:</strong> '.$_SESSION['attended_from_mo_1'].' '.$_SESSION['attended_from_yr_1'].' <strong>through</strong> '.$_SESSION['attended_to_mo_1'].' '.$_SESSION['attended_to_yr_1'].'<br />'; 
		$strMsg .= '<strong>Credits earned:</strong> '.$_SESSION['college_credit_1'].'<br />'; 
		$strMsg .= '<strong>Credential attained:</strong> '.$_SESSION['college_degree_attained_1'].'<br />'; 
		$strMsg .= '<strong>Credential attained date:</strong> '.$_SESSION['college_degree_attained_mo_1'].' '.$_SESSION['college_degree_attained_yr_1']; 
	
	if($_SESSION['cert'] == 'Post-Baccalaureate')
	{
		$strQuery = "SELECT admissions_counselors.counselor_email AS counselor_email
		FROM (admissions_counselors INNER JOIN admissions_regions ON admissions_counselors.counselor_id = admissions_regions.region_counselor) 
		WHERE admissions_regions.region_code='POST';";
		
		$aResult = $classSqlQuery->MySQL_Queries($strQuery);
		
		$aRecipients = $aResult[0]['counselor_email'];
	}
	else
	{
		if($_SESSION['transfer_student'] == 'Yes')
		{
			if($_SESSION['state_2'] == "Michigan")
			{
				$up_zips = array("49710","49715","49719","49724","49725","49726","49728","49736","49745","49748","49752","49757","49760","49762","49768","49774","49775","49778","49780","49781","49783","49789","49790","49793","49801","49802","49805","49806","49807","49808","49812","49813","49814","49815","49816","49817","49818","49819","49820","49821","49822","49825","49826","49827","49829","49831","49833","49834","49835","49836","49837","49838","49839","49840","49841","49843","49845","49847","49848","49849","49852","49853","49854","49855","49858","49861","49862","49863","49864","49865","49866","49868","49869","49871","49872","49873","49874","49876","49877","49878","49879","49880","49881","49883","49884","49885","49886","49887","49890","49891","49892","49893","49894","49895","49896","49901","49902","49903","49905","49908","49909","49910","49911","49912","49913","49915","49916","49917","49918","49919","49920","49921","49922","49924","49925","49927","49929","49930","49931","49934","49935",
								 "49938","49942","49943","49945","49946","49947","49948","49950","49952","49953","49955","49958","49959","49960","49961","49962","49963","49964","49965","49967","49968","49969","49970","49971","49972");
			
				if(in_array($_SESSION['contact_zip'], $up_zips))
				{
					$strQuery3 = "SELECT admissions_counselors.counselor_email AS counselor_email, admissions_regions.region_code, admissions_regions.region_state
					FROM (admissions_counselors INNER JOIN admissions_regions ON admissions_counselors.counselor_id = admissions_regions.region_counselor) 
					WHERE admissions_regions.region_state='Upper Michigan' AND admissions_regions.student_type='Transfer';";
					
					$aResult = $classSqlQuery->MySQL_Queries($strQuery3);
					
					$aRecipients = $aResult[0]['counselor_email'];	
									
				} 
				else //not a UP student
				{
					$strQuery3 = "SELECT admissions_counselors.counselor_email AS counselor_email, admissions_regions.region_code, admissions_regions.region_state
					FROM (admissions_counselors INNER JOIN admissions_regions ON admissions_counselors.counselor_id = admissions_regions.region_counselor) 
					WHERE admissions_regions.region_state='Lower Michigan' AND admissions_regions.student_type='Transfer';";
					
					$aResult = $classSqlQuery->MySQL_Queries($strQuery3);
					
					$aRecipients = $aResult[0]['counselor_email'];
				}
					
			}
			else //a non-michigan transfer student
			{
				if($aResult[0]['counselor_email'] == '')
					$aRecipients = 'admiss@nmu.edu';
				else
					$aRecipients = $aResult[0]['counselor_email'];
			}		
			
		}
		else //not a transfer student -- this also applies to international students
		{
			if($aResult[0]['counselor_email'] == '')
			{
				if($_SESSION['us_citizen']=='No' &&  $_SESSION['us_resident']=='No')
				{
					$aRecipients = 'ipo@nmu.edu';
								
					$strMsg = '<strong>Admission application submitted by:</strong> '.$_SESSION['first_name'].' '.$_SESSION['last_name'].'<br /><br />';
					$strMsg .= '<strong>Term:</strong> '.$_SESSION['enrollment_date'].'<br />';
					$strMsg .= '<strong>Applicant\'s e-mail:</strong> <a href="mailto:'.$_SESSION['contact_email'].'">'.$_SESSION['contact_email'].'</a><br />';
					$strMsg .= '<strong>Applicant\'s phone number:</strong> '.$_SESSION['contact_phone'].'<br />';	
					$strMsg .= '<strong>Applicant\'s cell phone number:</strong> '.$_SESSION['contact_cell_phone'].'<br /><br />';	
					
					$strMsg .= '<strong>Most Recent Secondary School Information</strong><br />';
					$strMsg .= '<strong>School name:</strong> '.$_SESSION['high_school_name_1'].'<br />';
					$strMsg .= '<strong>School city:</strong> '.$_SESSION['high_school_city_1'].'<br />';
					$strMsg .= '<strong>School state:</strong> '.$_SESSION['high_school_state_1'].'<br />';
					$strMsg .= '<strong>School zip/Postal code:</strong> '.$_SESSION['high_school_zip_1'].'<br />';
					$strMsg .= '<strong>School country:</strong> '.$_SESSION['high_school_country_1'].'<br />';
					$strMsg .= '<strong>Attended from:</strong> '.$_SESSION['high_school_from_1mo'].' '.$_SESSION['high_school_from_1yr'].' <strong>through</strong> '.$_SESSION['high_school_thru_1mo'].' '.$_SESSION['high_school_thru_1yr'].'<br />';
					$strMsg .= '<strong>Credit hours:</strong> '.$_SESSION['high_school_credit_1'].'<br /><br />';
					
					if(isset($_SESSION['learn_advertising']) && $_SESSION['learn_advertising'] != '' ||
					isset($_SESSION['learn_edu_fair']) && $_SESSION['learn_edu_fair'] != '' ||
					isset($_SESSION['learn_internet']) && $_SESSION['learn_internet'] != '' ||
					isset($_SESSION['learn_referral']) && $_SESSION['learn_referral'] != '' ||
					isset($_SESSION['learn_other']) && $_SESSION['learn_other'] != '' ||
					isset($_SESSION['learn_other_text']) && $_SESSION['learn_other_text'] != '')
					{
						$strMsg .= '<strong>How did you learn about NMU:</strong> ';
						$arrLearnMethods = array();
						(isset($_SESSION['learn_advertising']) && $_SESSION['learn_advertising'] != '' ? $arrLearnMethods[] = $_SESSION['learn_advertising'] : false);
						(isset($_SESSION['learn_edu_fair']) && $_SESSION['learn_edu_fair'] != '' ? $arrLearnMethods[] = $_SESSION['learn_edu_fair'] : false);
						(isset($_SESSION['learn_internet']) && $_SESSION['learn_internet'] != '' ? $arrLearnMethods[] = $_SESSION['learn_internet'] : false);
						(isset($_SESSION['learn_referral']) && $_SESSION['learn_referral'] != '' ? $arrLearnMethods[] = $_SESSION['learn_referral'] : false);
						(isset($_SESSION['learn_other']) && $_SESSION['learn_other'] != '' ? $arrLearnMethods[] = $_SESSION['learn_other'] : false);
						$strMsg .= implode(", ", $arrLearnMethods).'<br />';
						$strMsg .= (isset($_SESSION['learn_other_text']) && $_SESSION['learn_other_text'] != '' ? '<br /><strong>Other:</strong> '.$_SESSION['learn_other_text'].'<br /><br />' : '<br />');
					}
					
					$strMsg .= '<strong>Most Recent College Information</strong><br />';
					$strMsg .= '<strong>College name:</strong> '.$_SESSION['college_name_1'].'<br />';
					$strMsg .= '<strong>College city:</strong> '.$_SESSION['college_city_1'].'<br />';
					$strMsg .= '<strong>College state:</strong> '.$_SESSION['college_state_1'].'<br />';
					$strMsg .= '<strong>College zip:</strong> '.$_SESSION['college_zip_1'].'<br />';
					$strMsg .= '<strong>College country:</strong> '.$_SESSION['college_country_1'].'<br />';
					$strMsg .= '<strong>Attended from:</strong> '.$_SESSION['attended_from_mo_1'].' '.$_SESSION['attended_from_yr_1'].'<br />';
					$strMsg .= '<strong>Attended through:</strong> '.$_SESSION['attended_to_mo_1'].' '.$_SESSION['attended_to_yr_1'].'<br />';
					$strMsg .= '<strong>Credits earned:</strong> '.$_SESSION['college_credit_1'].'<br />';
					$strMsg .= '<strong>Credential attained:</strong> '.$_SESSION['college_degree_attained_1'].'<br />';
					$strMsg .= '<strong>Credential attained date:</strong> '.$_SESSION['college_degree_attained_mo_1'].' '.$_SESSION['college_degree_attained_yr_1'].'<br /><br />';
					
					$strMsg .= '<strong>US Citizen:</strong> '.$_SESSION['us_citizen'].'<br />';
					$strMsg .= '<strong>US Resident:</strong> '.$_SESSION['us_resident'].'<br />';
					$strMsg .= '<strong>Country of Citizenship:</strong> '.$_SESSION['country_citizenship'].'<br />';
					$strMsg .= '<strong>Country of Residence:</strong> '.$_SESSION['country_residence'].'<br />';
					$strMsg .= '<strong>Intended major:</strong> '.$_SESSION['program'];
				}
				else
				$aRecipients = 'admiss@nmu.edu';
			}
			else
				$aRecipients = $aResult[0]['counselor_email'];
		}
	}

	//send a copy of the message to me instead of the counselor
	$ip = $_SERVER['REMOTE_ADDR'];
	if ($ip =="198.110.203.107") 
	{
		$strMsg .= '<br /><br /><strong>Sending to:</strong> '.$aRecipients.'<br />';
		$strMsg .= '<strong>Based on applicant\'s state:</strong> '.$_SESSION['state_2'].'<br />';
		$strMsg .= '<strong>applicant\'s zip:</strong> '.$_SESSION['contact_zip'].'<br />';
		$strMsg .= '<strong>US citizen status:</strong> '.$_SESSION['us_citizen'].'<br />';
		$strMsg .= '<strong>US resident status:</strong> '.$_SESSION['us_resident'].'<br />';
		$strMsg .= '<strong>and transfer student status:</strong> '.$_SESSION['transfer_student'];
		$aRecipientsOverride = 'ericjohn@nmu.edu';
		CORE_SendMailMsg($strSubject, $strMsg, $aRecipientsOverride, $aCCs, $strSender, $strReplyTo);
		//echo $strMsg;
		//exit;
	}
	else
	{
		$strMsg .= '<br /><br /><strong>someone not from my computer filled out the dev app.</strong>';
		$aRecipientsOverride = 'ericjohn@nmu.edu';
		CORE_SendMailMsg($strSubject, $strMsg, $aRecipientsOverride, $aCCs, $strSender, $strReplyTo);
	}
}

function ProcessForm_Page8()
{
	try
	{
		SaveFormToSessions_Page8();
		ValidateFormVars_Page8();

		if($_REQUEST[Const_Subaction] == "quickEdit")
			header("Location: ".CORE_GetURL(Const_ParentURL, $_REQUEST[Const_Action], Const_Phase9, "", "", ""));
		else
			header("Location: ".CORE_GetURL(Const_ParentURL, $_REQUEST[Const_Action], Const_Phase9, "", "", ""));
	} 
	catch (Exception $ex)
	{
		CORE_ErrorHandler($ex->getMessage(), '', '', '');
	}
}


function SaveFormToSessions_Page8()
{
	foreach($_REQUEST as $strFieldname=>$strFieldValue)
		$_SESSION[$strFieldname] = $strFieldValue;
}


function ValidateFormVars_Page8()
{
	$_SESSION['cmsAdmin_ErrMsgArray']="";
	$_SESSION['cmsAdmin_WrnMsgArray']="";

	if($_REQUEST['enrollment_date'] == "")
		$aIssues[] = "Enrollment date".Const_emRequiredItem;
		
	if($_REQUEST['pursue_nondegree'] == "")
		$aIssues[] = 'Please indicate if you intend to take courses only for personal/professional development.';
		
	if($_REQUEST['cert'] == "")
		$aIssues[] = "Degree type".Const_emRequiredItem;
		
	if($_REQUEST['program'] == "")
		$aIssues[] = "Your anticipated major".Const_emRequiredItem;

	if(isset($aIssues) && $aIssues != "")
	{
		$_SESSION['cmsAdmin_ErrMsgArray'] = $aIssues;
		throw new Exception(Const_emCorrectItems);
	}
}

function ProcessForm_Page7()
{
	try
	{
		SaveFormToSessions_Page7();
		ValidateFormVars_Page7();

		if($_REQUEST[Const_Subaction] == "quickEdit")
			header("Location: ".CORE_GetURL(Const_ParentURL, $_REQUEST[Const_Action], Const_Phase9, "", "", ""));
		else
			header("Location: ".CORE_GetURL(Const_ParentURL, $_REQUEST[Const_Action], Const_Phase8, "", "", ""));
	}
	catch (Exception $ex)
	{
		CORE_ErrorHandler($ex->getMessage(), '', '', '');
	}
}


function SaveFormToSessions_Page7()
{
	foreach($_REQUEST as $strFieldname=>$strFieldValue)
		$_SESSION[$strFieldname] = $strFieldValue;
}


function ValidateFormVars_Page7()
{
	$_SESSION['cmsAdmin_ErrMsgArray']="";
	$_SESSION['cmsAdmin_WrnMsgArray']="";

//	if($_REQUEST['xxxx'] == "")
//		$aIssues[] = "XXX XXXXX".Const_emRequiredItem;

	if(isset($aIssues) && $aIssues != "")
	{
		$_SESSION['cmsAdmin_ErrMsgArray'] = $aIssues;
		throw new Exception(Const_emCorrectItems);
	}
}

function ProcessForm_Page6()
{
	try
	{
		SaveFormToSessions_Page6();
		ValidateFormVars_Page6();

		if($_REQUEST[Const_Subaction] == "quickEdit")
			header("Location: ".CORE_GetURL(Const_ParentURL, $_REQUEST[Const_Action], Const_Phase9, "", "", ""));
		else
			header("Location: ".CORE_GetURL(Const_ParentURL, $_REQUEST[Const_Action], Const_Phase7, "", "", ""));
	}
	catch (Exception $ex)
	{
		CORE_ErrorHandler($ex->getMessage(), '', '', '');
	}
}


function SaveFormToSessions_Page6()
{
	foreach($_REQUEST as $strFieldname=>$strFieldValue)
		$_SESSION[$strFieldname] = $strFieldValue;
}


function ValidateFormVars_Page6()
{
	$_SESSION['cmsAdmin_ErrMsgArray']="";
	$_SESSION['cmsAdmin_WrnMsgArray']="";

		if($_SESSION['us_citizen'] =='No' && $_SESSION['us_resident'] =='No'){
			$NamingConv = "a school, college or university";
			$NamingConvTwo = "secondary school";
		}else{
			$NamingConv = "college";
			$NamingConvTwo = "high school";
		}
	
		
	if($_REQUEST['col0'] == "")
		$aIssues[] = 'Please indicate if you have attended '.$NamingConv.'.';
	
	if($_REQUEST['col0'] == "Yes" && $_REQUEST['transfer_student'] == "")
		$aIssues[] = 'Please indicate if you have attended college after '.$NamingConvTwo.'.';
	
	
	if($_REQUEST['suspended'] == "")
		$aIssues[] = 'Please indicate if you have or have not been suspended from college.';

	if(isset($aIssues) && $aIssues != "")
	{
		$_SESSION['cmsAdmin_ErrMsgArray'] = $aIssues;
		throw new Exception(Const_emCorrectItems);
	}
}

function ProcessForm_Page5()
{
	try
	{
		SaveFormToSessions_Page5();
		ValidateFormVars_Page5();

		if($_REQUEST[Const_Subaction] == "quickEdit")
			header("Location: ".CORE_GetURL(Const_ParentURL, $_REQUEST[Const_Action], Const_Phase9, "", "", ""));
		else
			header("Location: ".CORE_GetURL(Const_ParentURL, $_REQUEST[Const_Action], Const_Phase6, "", "", ""));
	}
	catch (Exception $ex)
	{
		CORE_ErrorHandler($ex->getMessage(), '', '', '');
	}
}


function SaveFormToSessions_Page5()
{
	foreach($_REQUEST as $strFieldname=>$strFieldValue)
		$_SESSION[$strFieldname] = $strFieldValue;
}


function ValidateFormVars_Page5()
{
	$_SESSION['cmsAdmin_ErrMsgArray']="";
	$_SESSION['cmsAdmin_WrnMsgArray']="";



	if(isset($aIssues) && $aIssues != "")
	{
		$_SESSION['cmsAdmin_ErrMsgArray'] = $aIssues;
		throw new Exception(Const_emCorrectItems);
	}
}

function ProcessForm_Page4()
{
	try
	{
		SaveFormToSessions_Page4();
		ValidateFormVars_Page4();

		if($_REQUEST[Const_Subaction] == "quickEdit")
			header("Location: ".CORE_GetURL(Const_ParentURL, $_REQUEST[Const_Action], Const_Phase9, "", "", ""));
		else
			header("Location: ".CORE_GetURL(Const_ParentURL, $_REQUEST[Const_Action], Const_Phase5, "", "", ""));
	}
	catch (Exception $ex)
	{
		CORE_ErrorHandler($ex->getMessage(), '', '', '');
	}
}


function SaveFormToSessions_Page4()
{
	foreach($_REQUEST as $strFieldname=>$strFieldValue)
		$_SESSION[$strFieldname] = $strFieldValue;
}


function ValidateFormVars_Page4()
{
	$_SESSION['cmsAdmin_ErrMsgArray']="";
	$_SESSION['cmsAdmin_WrnMsgArray']="";

	if($_SESSION['us_citizen'] == 'Yes')
	{
		if($_REQUEST['earned'] == "")
			$aIssues[] = "Please select diploma, GED or neither.";
		if($_REQUEST['earned'] == "Neither")
		{
			if($_REQUEST['ifnot_willyou'] == "")
			{
				$aIssues[] = "Please indicate if you will earn a high school diploma or GED prior to enrolling at NMU.";
			}
			if($_REQUEST['ifnot_willyou'] == "Yes")
			{
				if($_REQUEST['which_one'] == "")
				{
					$aIssues[] = "You indicated that you will earn a high school diploma or GED prior to enrolling at NMU.  Please select which one you will earn.";
				}
			}
		}
	}	
	
	if(isset($aIssues) && $aIssues != "")
	{
		$_SESSION['cmsAdmin_ErrMsgArray'] = $aIssues;
		throw new Exception(Const_emCorrectItems);
	}
}

function ProcessForm_Page3()
{
	try
	{
		SaveFormToSessions_Page3();
		ValidateFormVars_Page3();

		if($_REQUEST[Const_Subaction] == "quickEdit")
			header("Location: ".CORE_GetURL(Const_ParentURL, $_REQUEST[Const_Action], Const_Phase9, "", "", ""));
		else
		{
			header("Location: ".CORE_GetURL(Const_ParentURL, $_REQUEST[Const_Action], Const_Phase4, "", "", ""));
		}
	}
	catch (Exception $ex)
	{
		CORE_ErrorHandler($ex->getMessage(), '', '', '');
	}
}


function SaveFormToSessions_Page3()
{
	foreach($_REQUEST as $strFieldname=>$strFieldValue)
		$_SESSION[$strFieldname] = $strFieldValue;
}


function ValidateFormVars_Page3()
{
	$_SESSION['cmsAdmin_ErrMsgArray']="";
	$_SESSION['cmsAdmin_WrnMsgArray']="";

	if($_REQUEST['contact_street'] == "")
		$aIssues[] = "Your street address".Const_emRequiredItem;

	if($_REQUEST['contact_city'] == "")
		$aIssues[] = "Your city".Const_emRequiredItem;
		
	if($_REQUEST['state_2'] == "")
		$aIssues[] = "Your state".Const_emRequiredItem;
		
	if($_REQUEST['contact_zip'] == "")
		$aIssues[] = "Your zip/postal code".Const_emRequiredItem;
	
	$aIssues = CORE_ValidateEmail($_REQUEST['contact_email'], "Applicant's E-mail address", $aIssues);

	if(isset($aIssues) && $aIssues != "")
	{
		$_SESSION['cmsAdmin_ErrMsgArray'] = $aIssues;
		throw new Exception(Const_emCorrectItems);
	}
}

function ProcessForm_Page2()
{
	try
	{
		SaveFormToSessions_Page2();
		ValidateFormVars_Page2();

		if($_REQUEST[Const_Subaction] == "quickEdit")
			header("Location: ".CORE_GetURL(Const_ParentURL, $_REQUEST[Const_Action], Const_Phase9, "", "", ""));
		else
			header("Location: ".CORE_GetURL(Const_ParentURL, $_REQUEST[Const_Action], Const_Phase3, "", "", ""));
	}
	catch (Exception $ex)
	{
		CORE_ErrorHandler($ex->getMessage(), '', '', '');
	}
}


function SaveFormToSessions_Page2()
{
	//this clears all the checkboxes in the session.  without this, once a box is checked, that session is never cleared.
	$_SESSION["learn_advertising"] = "";
	$_SESSION["learn_edu_fair"] = "";
	$_SESSION["learn_internet"] = "";
	$_SESSION["learn_referral"] = "";
	$_SESSION["learn_other"] = "";

	foreach($_REQUEST as $strFieldname=>$strFieldValue)
		$_SESSION[$strFieldname] = $strFieldValue;
}


function ValidateFormVars_Page2()
{
	$_SESSION['cmsAdmin_ErrMsgArray']="";
	$_SESSION['cmsAdmin_WrnMsgArray']="";

	//domestic & international will need to be validated separately
	if($_SESSION['us_citizen'] == 'Yes'){
	
		if($_REQUEST['state_1'] == "")
		$aIssues[] = 'Please select your state of legal residence.';
		
		if($_REQUEST['county_resident_since_month'] == "" || $_REQUEST['county_resident_since_year'] == "")
		$aIssues[] = 'Please indicate how long you have lived in this state.';
		
		if($_REQUEST['county_residence'] == "United States" || $_REQUEST['county_residence'] == "USA" || $_REQUEST['county_residence'] == "U.S.A." || $_REQUEST['county_residence'] == "united states" || $_REQUEST['county_residence'] == "America" || $_REQUEST['county_residence'] == "america")
		$aIssues[] = 'Please provide your <strong>county</strong> of residence, not your country.';
	
	} elseif($_SESSION['us_citizen'] != 'Yes'){
					
		if($_REQUEST['us_resident'] == "")
		$aIssues[] = "Your residency".Const_emRequiredItem;
		
		if($_REQUEST['country_citizenship'] == "")
		$aIssues[] = 'Please select your country of citizenship.';
		
		if($_REQUEST['country_residence'] == "")
		$aIssues[] = 'Please select your country of legal residence.';
		
		if($_REQUEST['undocumented'] != "Yes")
		{
			if($_REQUEST['country_resident_since_month'] == "" || $_REQUEST['country_resident_since_year'] == "")
			$aIssues[] = 'Please indicate how long you have lived in your country of legal residence.';
		}
		
	}

	if(isset($aIssues) && $aIssues != "")
	{
		$_SESSION['cmsAdmin_ErrMsgArray'] = $aIssues;
		throw new Exception(Const_emCorrectItems);
	}
}

function ProcessForm_Page1()
{
	try
	{
		SaveFormToSessions_Page1();
		ValidateFormVars_Page1();

		if($_REQUEST[Const_Subaction] == "quickEdit")
			header("Location: ".CORE_GetURL(Const_ParentURL, $_REQUEST[Const_Action], Const_Phase9, "", "", ""));
		else
			header("Location: ".CORE_GetURL(Const_ParentURL, $_REQUEST[Const_Action], Const_Phase2, "", "", ""));
	}
	catch (Exception $ex)
	{
		CORE_ErrorHandler($ex->getMessage(), '', '', '');
	}
}


function SaveFormToSessions_Page1()
{
	//this clears all the save race sessions to ensure that only the ones that are checked will be stored.  without this, once a box is checked, that session is never cleared.
	$_SESSION["race1"] = "";
	$_SESSION["race2"] = "";
	$_SESSION["race3"] = "";
	$_SESSION["race4"] = "";
	$_SESSION["race5"] = "";

	foreach($_REQUEST as $strFieldname=>$strFieldValue)
		$_SESSION[$strFieldname] = $strFieldValue;
}


function ValidateFormVars_Page1()
{
	$_SESSION['cmsAdmin_ErrMsgArray']="";
	$_SESSION['cmsAdmin_WrnMsgArray']="";

	if($_REQUEST['first_name'] == "")
		$aIssues[] = 'Please enter your first name.';
		
	if($_REQUEST['last_name'] == "")
		$aIssues[] = 'Please enter your last name.';

	if($_REQUEST['us_citizen'] == "")
		$aIssues[] = 'Please select if you are a U.S. citizen or not.';

	if(isset($aIssues) && $aIssues != "")
	{
		$_SESSION['cmsAdmin_ErrMsgArray'] = $aIssues;
		throw new Exception(Const_emCorrectItems);
	}
}

Main();

?>