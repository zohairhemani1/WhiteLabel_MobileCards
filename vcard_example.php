<?php
/*
* Filename.......: vcard_example.php
* Author.........: Troy Wolf [troy@troywolf.com]
* Last Modified..: 2005/07/14 13:30:00
* Description....: An example of using Troy Wolf's class_vcard.
*/

/*
Modify the path according to your system.
*/

include 'headers/connect_to_mysql.php';	
include 'headers/_user-details.php';
include 'headers/referrals.php';

require_once('headers/class_vcard.php');

/*
Instantiate a new vcard object.
*/
$vc = new vcard();

/*
filename is the name of the .vcf file that will be sent to the user if you
call the download() method. If you leave this blank, the class will 
automatically build a filename using the contact's data.
*/
#$vc->filename = "";

/*
If you leave this blank, the current timestamp will be used.
*/
#$vc->revision_date = "";

/*
Possible values are PUBLIC, PRIVATE, and CONFIDENTIAL. If you leave class
blank, it will default to PUBLIC.
*/
#$vc->class = "PUBLIC";

/*
Contact's name data.
If you leave display_name blank, it will be built using the first and last name.
*/
#$vc->data['display_name'] = "";
$vc->data['first_name'] = $_fname;
$vc->data['last_name'] = $_lname;
#$vc->data['additional_name'] = ""; //Middle name
#$vc->data['name_prefix'] = "";  //Mr. Mrs. Dr.
#$vc->data['name_suffix'] = ""; //DDS, MD, III, other designations.
#$vc->data['nickname'] = "TJ";

/*
Contact's company, department, title, profession
*/
$vc->data['company'] = $_company;
#$vc->data['department'] = "";
$vc->data['title'] = $_jobTitle;
#$vc->data['role'] = "";

/*
Contact's work address
*/
#$vc->data['work_po_box'] = "";
#$vc->data['work_extended_address'] = "";
#$vc->data['work_address'] = "7027 N. Hickory";
#$vc->data['work_city'] = "Kansas City";
#$vc->data['work_state'] = "MO";
#$vc->data['work_postal_code'] = "64118";
#$vc->data['work_country'] = "United States of America";

/*
Contact's home address
*/
#$vc->data['home_po_box'] = "";
#$vc->data['home_extended_address'] = "";
#$vc->data['home_address'] = "7027 N. Hickory";
#$vc->data['home_city'] = "Kansas City";
#$vc->data['home_state'] = "MO";
#$vc->data['home_postal_code'] = "64118";
#$vc->data['home_country'] = "United States of America";

/*
Contact's telephone numbers.
*/
$vc->data['office_tel'] = $_office;
#$vc->data['home_tel'] = "";
$vc->data['cell_tel'] = $_mobile;
#$vc->data['fax_tel'] = "";
#$vc->data['pager_tel'] = "";

/*
Contact's email addresses
*/
$vc->data['email1'] = $_email;
#$vc->data['email2'] = "";

/*
Contact's website
*/
$vc->data['url'] = $_website;

/*
Some other contact data.
*/

$vc->data['photo'] = $_profilePic; 

#$vc->data['birthday'] = "1971-08-13";
#$vc->data['timezone'] = "-06:00";

/*
If you leave this blank, the class will default to using last_name or company.
*/
#$vc->data['sort_string'] = "";

/*
Notes about this contact.
*/

$desc = "http://www.bizsocialetc.info/". $username . "\n" . $_description;

$vc->data['note'] = "";

/*
Generate card and send as a .vcf file to user's browser for download.
*/
$vc->download();


?>