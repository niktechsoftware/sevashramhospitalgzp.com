var allDATA = $('#getAllstrdatesforcloseit').val();
var splitter = allDATA.split('-');
function DisableSpecificDates(date) {
//console.log(date);
    var string = jQuery.datepicker.formatDate('yy/mm/dd', date);
    return [splitter.indexOf(string) == -1];
  }
$(document).ready(function(){
var opentime;var closetime;
$(function(){
$("#dbo").datepicker({dateFormat:'dd-mm-yy',maxDate:'0',changeMonth:true,changeYear:true,yearRange:'1947:2016'});
});
$(function(){
$("#appoin_date").datepicker({dateFormat:'dd-mm-yy',beforeShowDay: DisableSpecificDates});
});
$('#reference_activity').click(function(){
$('#reference').toggle();
});
$('#appoin_time').change(function(){

////////////////////////////////addthis/////////////////////////////
	var d = new Date();
	var time = d.getHours() + ":" + d.getMinutes();
	var hour = d.getHours();
	var minit = d.getMinutes();
    var seconds = (+hour) * 60 * 60 + (+minit) * 60; 
	console.log(seconds+'nowtime');
	var thisTime = $(this).val();
	var a = thisTime.split(':');
	var secondsselected = (+a[0]) * 60 * 60 + (+a[1]) * 60;  
	console.log(secondsselected+'selected');
	var strDate = d.getFullYear() + "/" + (d.getMonth()+1) + "/" + d.getDate();
	var currentMonth = d.getMonth()+1;
	
	var lenmonth = currentMonth.toString().length;
	var convertedMonth = '';
	//console.log(lenmonth+'currentdate');
	var dtpckrdate = $('#appoin_date').val();

	if(lenmonth == 1){
		convertedMonth = '0'+currentMonth;
	}else{
		convertedMonth = currentMonth;
	}
	
	var currentDay = d.getDate();
	var getDaylen = currentDay.toString().length;
	convertedDay = '';
	if(getDaylen == 1){
		convertedDay = '0'+currentDay;
	}else{
		convertedDay = currentDay;
	}
	var theDay = convertedDay+'-'+convertedMonth+'-'+d.getFullYear();
	console.log(thisTime+'selectedtime');
	console.log(time+'currenttime');
	if(dtpckrdate == theDay && secondsselected <= seconds){
		alert('The booking time you have selected is not valid');
		$(this).val('');
	}else{
	/////////////////////////////////////////////////////////////////////


var selectedtime=$('#appoin_time').val();
var opentime=check_opent_time();
var closetime=check_close_time();
console.log(closetime);
console.log(selectedtime);
var selectedtimesegment=selectedtime.split(':');
var selectedhrtosec=selectedtimesegment[0]*3600;
var selectedminsec=selectedtimesegment[1]*60;
console.log('min-'+selectedminsec);
var totalselectedtime=parseInt(selectedhrtosec)+parseInt(selectedminsec);
console.log(selectedminsec);
console.log('select'+totalselectedtime);
var opentimesegment=opentime.split(':');
var opentimehrtosec=opentimesegment[0]*3600;
var opentimeminsec=opentimesegment[1]*60;
var totalopentime=opentimehrtosec+opentimeminsec;
console.log('open'+totalopentime);
var closetimesegment=closetime.split(':');
var closemin=parseInt(closetimesegment[0])+12;
var closetimehrtosec=closetimesegment[0]*3600;
var closetimeminsec=parseInt(closetimesegment[1])-15*60;
var totalclosetime=closetimehrtosec+closetimeminsec;
if(totalselectedtime<totalopentime){
alert("Centre opening time did not matched");
$('#appoin_time').val('');
}
console.log('fff-'+totalclosetime);
if(totalselectedtime>totalclosetime){
alert("The time you have choosen is not available for the respective center!");
$('#appoin_time').val('');
}
}
});
$('#sendmailbutton').click(function(){
if($('#sendmail').val()==''){
alert("Put a mail id");
}else if(!isEmail(
$('#sendmail').val()))
{
alert("Put a valid mail id");
}else{
var siteutl=$('#baseurl').val();
$.ajax({
url:siteutl+'booking/checkforchangepassword',
type:"POST",dataType:"text",
cache:false,
data:{user:$('#sendmail').val()
},
success:function(html){

if(html=="success"){
alert("Please check you mail for password reset link");
window.location.href=siteutl+"login";
$('#result_modal').html('');
}else{
var error='<p>Account Does Not Exist,Please put your registered mail id</p>';
$('#result_modal').html('');
$('#result_modal').html(error);
window.setTimeout(function(){
window.location.href=siteutl+"login";
},5000);}}
});}});
$('#username').keydown(function(){
if($('#username').val().length>=25){
alert('There should be 25 charaecter or less');
}});
$('#first_name').keydown(function(){
if($('#first_name').val().length>=25){
alert('There should be 25 charaecter or less');
}
});
$('#last_name').keydown(function(){
if($('#last_name').val().length>=25){
alert('There should be 25 charaecter or less');
}
});
$('#phone_no').change(function(){
intRegex=/[0-9 -()+]+$/;
if((!$.isNumeric($('#phone_no').val())))
{
alert('Numbers allowed only');
}});
$('#phone_no').change(function(){
if($('#phone_no').val().length<10){
alert('Not less than 10');
}});
$('#email_id').change(function(){
if(!isEmail($('#email_id').val())){
alert('Invalid email');
$('#email_id').val('');
}});
$('#registrationmail').change(function(){
if(!isEmail($('#registrationmail').val()))
{
alert('Invalid email');
$('#registrationmail').val('');
}});
$('#changenow').click(function(){
if($('#keyvalue').val()==''){
alert("Put the mailed key");
}else{
var siteutl=$('#baseurl').val();
$.ajax({
url:siteutl+'booking/finalcheckforchangepass',
type:"POST",
dataType:"text",
cache:false,
data:{user:$('#keyvalue').val()
},success:function(html){
if(html=="success"){
alert('Please check your mail to get your new password');
window.location.href=siteutl+'login';
}else{
$('#add_for_password').html('<p>Key Did Not Matched</p>');
}}
});
}});
$('#dbo').attr('readonly','readonly');
$('#appoin_date').attr('readonly','readonly');
$('#appoin_time').attr('readonly','readonly');
var siteutl=$('#baseurl').val();
$('#loadonpageLoad').load(siteutl+'login/load_header_according_session');
$('#getbtn').load(siteutl+'login/load_header_according_session_for_buy');
$('#addmenu').load(siteutl+'login/add_clinic_menu');
$('#key_close_cross').click(function(){
window.location.href=siteutl+"login";
});
$('.close').click(function(){});

var i = 1;
 $('#appoin_date').click(function(date){

i++;
if(i>2){
return false;
}
	//$('#ui-datepicker-div').css('display','block');
	var getLength = $('.ui-state-disabled .ui-state-default').length;
	$('.ui-state-disabled .ui-state-default').each(function(){
		var className = $(this).html();
		//console.log(className);
		$(this).html('');
		if(className != ''){
	$(this).html('<a href="javascript:void(0)" onclick="get_date_details('+className+')">'+className+'</a>');
	}
	});
	 

	
	
	$('.ui-corner-all').click(function(){
		//$('.ui-state-disabled .ui-state-default').html('');
		$( "#appoin_date" ).datepicker("refresh");
	var getLength = $('.ui-state-disabled .ui-state-default').length;
$('.ui-state-disabled .ui-state-default').each(function(){
		var className = $(this).html();
		$(this).html('');
		//console.log($(this).text());
		if(className != ''){
	$(this).html('<a href="javascript:void(0)" onclick="get_date_details('+className+')">'+className+'</a>');
		}
	});
	
});

});
});



function get_date_details(day){
	var siteutl=$('#baseurl').val();
	var month = $('.ui-datepicker-month').text();
	var year = $('.ui-datepicker-year').text();
	var centre = $('#frefered_center').val();
	//console.log(centre);
$("#email").focus();
	if(centre == 0){
$.ajax({
	url:siteutl+'Administrator/get_date_details',
type:"POST",
dataType:"text",
cache:false,
data:{month:month, year:year, day:day},
success:function(html){
	alert(html);
//$('#ui-datepicker-div').hide();
}
});
	}else{
		
		$.ajax({
	url:siteutl+'Administrator/get_holiday_by_centre',
type:"POST",
dataType:"text",
cache:false,
data:{month:month, year:year, day:day, centreID:centre},
success:function(html){
	alert(html);
//$('#ui-datepicker-div').hide();
}
});
	}	
	
}


function signupfun(){
var fname=$('#fname').val();
var lname=$('#lname').val();
var dbo=$('#dbo').val();
var phone=$('#phone').val();
var address=$('#address').val();
var email=$('#email').val();
var aggriment=$('#aggriment').val();
var frefered_center=$('#frefered_center').val();
var genderm=$('#genderm').val();
var genderf=$('#genderf').val();
var city=$('#frefered_city').val();
var ip=$('#mymtnip').val();
var sessID=$('#sessID').val();
var captchaimg=sessID;
var captcha=$('#captcha').val();
console.log(sessID);
intRegex=/[0-9 -()+]+$/;
var gender='';
if($('#genderm').is(':checked')){
gender='male';
}else if($('#genderf').is(':checked')){
gender='female';
}else{
gender='blank';
}
if(aggriment=='on'){
aggriment='yes';
}else if(aggriment=='off'){
aggriment='no';
}
$('.loginTxtBox').removeClass('error');
$('.custom').html('');
if(fname==''){
$('#fname').addClass('error');
$('#fname').attr('placeholder','First Name Required');
}else if(fname.length>20){
$('#fname').addClass('error');
$('#fname').attr('placeholder','Max length 20');
}else if(lname==''){
$('#lname').addClass('error');
$('#lname').attr('placeholder','Last Name Required');
}else if(lname.length>20){
$('#lname').addClass('error');
$('#lname').attr('placeholder','Max length 20');
}else if(dbo==''){
$('#dbo').addClass('error');
$('#dbo').attr('placeholder','Date Of Birth Required');
}else if(city==0){
alert("Please Select Preferred City");
$('#frefered_city').addClass('error');
}else if(frefered_center==0){
alert("Please Select Preferred Center");
$('#frefered_center').addClass('error');
}else if(gender=='blank'){
alert("Please Select gender");
$('#genderm').addClass('error');
$('#genderf').addClass('error');
}else if(phone==''){
$('#phone').addClass('error');
$('#phone').attr('placeholder','Phone No Required');
}else if((!$.isNumeric(phone))){
$('#phone').addClass('error');
$('#phone').attr('placeholder','Invalid Phone No');
}else if(phone.length<10){
$('#phone').addClass('error');
$('#phone').attr('placeholder','Max length 10');
}else if($('#phone').val().length>12){
$('#phone').val('');
$('#phone').addClass('error');
$('#phone').attr('placeholder','Please insert a phone no upto 12 digits');
}else if($('#phone').filter(function(){
return parseInt(this.value,10)!==0;}).length===0){
$('#phone').addClass('error');
$('#phone').attr('placeholder','Check the phone no');
}else if(address==''){
$('#address').addClass('error');
$('#address').attr('placeholder','Address Required');
}else if(email==''){
$('#email').addClass('error');
$('#email').attr('placeholder','Email Required');
}else if(!isEmail(email)){$('#email').addClass('error');
$('#email').attr('placeholder','Email Id is not valid');
}else if(captcha==''){
$('#captcha').val('');
$('#captcha').addClass('error');
$('#captcha').attr('placeholder','Captcha is blank');
}else if(captchaimg!=captcha){$('#captcha').val('');
$('#captcha').addClass('error');
$('#captcha').attr('placeholder','Captcha is invalid');
}else{var siteutl=$('#siteutl').val();
$.ajax({
url:siteutl+'signup/signupsubmit',
type:"POST",
dataType:"text",
cache:false,
data:{fname:fname,lname:lname,dbo:dbo,phone:phone,address:address,email:email,frefered_center:frefered_center,aggriment:aggriment,gender:gender,ip:ip,city:city},
success:function(html){
if(html=="mailed"){
alert('Please verify your registration from your mailbox');
window.location.href=siteutl;
}
if(html=="mail_problem"){
alert('Theres some problem in sending mail now');
window.location.href=siteutl+'signup'
}
if(html=="user_existing"){
alert('A user already exist, please enter another email id');
$('#email').val('');
$('#email').addClass('error');
}}
});
}
$('.error').val('');
$('html, body').animate({
scrollTop:$(".error").offset().top
},2000)
;}
function isEmail(email){
var regex=/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
return regex.test(email);
}
function app_request(){
var resetform=1;
var fname=$('#fname').val();
var lname=$('#lname').val();
var appoin_date=$('#appoin_date').val();
var aptime=$('#appoin_time').val();
var phone=$('#phone').val();
var address=$('#address').val();
var email=$('#email').val();
var frefered_center=$('#frefered_center').val();
var dept=$('#dept').val();
var appresons=$('#appresons').val();
var genderm=$('#genderm').val();
var genderf=$('#genderf').val();
var userIP=$('#userIP').val();
var userID=$('#userID').val();
var bookingmood=$('#booking_mood').val();
var frefered_city=$('#frefered_city').val();
console.log(frefered_center);
console.log(frefered_city);
intRegex=/[0-9 -()+]+$/;
var fnamelength=$('#fname').val().length;
var lnamelength=$('#lname').val().length;
var gender='';
var gendflag=0;
if($('#genderm').is(':checked')){
gender='male';
gendflag=1;
}else if($('#genderf').is(':checked')){
gender='female';
gendflag=1;
}else{
gender='blank';
resetform=0;
gendflag=0;
}
$('.loginTxtBox').removeClass('error');
$('.custom').html('');
if(fname==''){
$('#fname').val('');
$('#fname').addClass('error');
$('#fname').attr('placeholder','First Name Required');
}else if(fnamelength>20){
$('#fname').val('');
$('#fname').addClass('error');
$('#fname').attr('placeholder','First name length should be 20');
}else if(lname==''){
$('#lname').val('');
$('#lname').addClass('error');
$('#lname').attr('placeholder','Last Name Required');
}else if(lnamelength>20){$('#lname').val('');
$('#lname').addClass('error');
$('#lname').attr('placeholder','Last name length should be 20');
}else if(gendflag==0){
alert("Please select your gender");
}else if(phone==''){
$('#phone').val('');
$('#phone').addClass('error');
$('#phone').attr('placeholder','Phone number required');
}else if(!$.isNumeric(phone)){
$('#phone').addClass('error');
$('#phone').attr('placeholder','Invalid Phone number');
}else if($('#phone').filter(function(){
return parseInt(this.value,10)!==0;}).length===0){
$('#phone').addClass('error');
$('#phone').attr('placeholder','Check the phone number');
}else if(phone.length<10||phone.length>12)
{
$('#phone').addClass('error');
$('#phone').attr('placeholder','Number must be 10 to 12 digits');
}else if(email==''){
$('#email').val('');
$('#email').addClass('error');
$('#email').attr('placeholder','Email Required');
}else if(!isEmail(email)){
$('#email').val('');
$('#email').addClass('error');
$('#email').attr('placeholder','Email is not valid');
}else if(frefered_city==0){
$('#frefered_city').addClass('error');
return false;
}else if(frefered_center==0){
$('#frefered_center').addClass('error');
$("#frefered_center option:first").attr('selected','selected');
//$('#errormsgfrefered_center').attr('placeholder','Have To Mention A Centre');
resetform=0;
}else if(frefered_center==null){
$('#frefered_center').addClass('error');
$("#frefered_center option:first").attr('selected','selected');
//$('#errormsgfrefered_center').attr('placeholder','Have To Mention A Centre');
resetform=0;
}else if(dept==0){
$('#dept').addClass('error');
return false;
}else if(appoin_date==''){
$('#appoin_date').val('');
$('#appoin_date').addClass('error');
$('#appoin_date').attr('placeholder','Date Must Not Be Blank');
}else if(address==''){
$('#address').val('');
$('#address').addClass('error');
$('#address').attr('placeholder','Address Required');
}else if(gender===undefined){
$('.gender').addClass('error');
}else if(aptime==0){
$('#appoin_time').val('');
$('#appoin_time').addClass('error');
$('#appoin_time').attr('placeholder','Have To Mention A Time');
}else if(appresons==''){
$('#appresons').addClass('error');
$('#appresons').val();
$('#appresons').attr('placeholder','Have To Mention Reason');
}else if(bookingmood==''){
alert('You need to select a booking mode at the top');
$('#email').val('');
}else if(resetform==0){
return false;
}
else{if(resetform==1){
var lastslug=$('#lastslug').val();
var siteutl=$('#siteutl').val();
var pathname=window.location.pathname;
var getpage=pathname.split('/');
console.log(getpage);
/**********start**********/
/*
New Code Updated Appointment booking button
Change By:SumitR
Date:18/09/2016
Description:Appointment booking button
*/
$('#bookbuttongreen').removeAttr('onclick');
/*************End*************/
$.ajax({
url:siteutl+'booking/save_appoinment',
type:"POST",
dataType:"text",
cache:false,
data:{fname:fname,lname:lname,appoin_date:appoin_date,phone:phone,address:address,email:email,frefered_center:frefered_center,gender:gender,aptime:aptime,appresons:appresons,dept:dept,lastslug:lastslug,userIP:userIP,frefered_city:frefered_city,bookingmood:bookingmood,userID:userID},
success:function(html){
if(html=='mail_sent'){
//alert('Appointment booked Successfully,we will call you for confirmation');
window.location.href=siteutl+getpage[1];
}else if(html == 'holidaydate'){
	
	var month = new Array();
month[1] = "January";
month[2] = "February";
month[3] = "March";
month[4] = "April";
month[5] = "May";
month[6] = "June";
month[7] = "July";
month[8] = "August";
month[9] = "September";
month[10] = "October";
month[11] = "November";
month[12] = "December";

	var daymyear = appoin_date.split('-');
	var day = daymyear[0];
	var monththatneed = month[daymyear[1]];
	var year = daymyear[2];
	$.ajax({
url:siteutl+'Administrator/get_holiday_by_centre',
type:"POST",
dataType:"text",
cache:false,
data:{centreID:frefered_center,day:day,month:monththatneed,year:year}
	}).done(function( msg ) {
   	alert(msg);
	$('#bookbuttongreen').attr('onclick','app_request()');
	$('#appoin_date').val('');
  });
}else if(html == 'secnotmatched'){
	alert('The booking time you have selected is not valid');
	$('#bookbuttongreen').attr('onclick','app_request()');
	$('#appoin_time').val('');
}else if(html == 'opentimenotmatched'){
		alert('The opening time you have selected is not valid');
		$('#bookbuttongreen').attr('onclick','app_request()');
	$('#appoin_time').val('');
}else if(html == 'closetimenotmatched'){
		alert('The closing time you have selected is not valid');
		$('#bookbuttongreen').attr('onclick','app_request()');
	$('#appoin_time').val('');
}else if(html == 'timenot'){
		alert('Time should not be blank');
		$('#bookbuttongreen').attr('onclick','app_request()');
	$('#appoin_time').val('');
}else if(html == 'timedateless'){
		alert('You can not select the time,its over');
		$('#bookbuttongreen').attr('onclick','app_request()');
	$('#appoin_time').val('');
}
}
});
}}
$('.error').val('');}
function get_date(selectedDate){
var curDate=new Date();
var year=curDate.getFullYear();
var month=curDate.getMonth()+1;
var day=curDate.getDate();
var secday=day*(3600*24);
var secmonth=month*(30*3600*24);
var secyear=year*(12*30*3600*24);
var totalSec=secday+secmonth+secyear;
var selectdmy=selectedDate.split('-');
var selcteddsc=selectdmy[0]*(3600*24);
var selctedmsc=selectdmy[1]*(30*3600*24);
var selctedysc=selectdmy[2]*(12*30*3600*24);
var totalselectedtime=selcteddsc+selctedmsc+selctedysc;
console.log('selected:-'+totalselectedtime);
console.log('curr:-'+totalSec);
if(totalselectedtime<totalSec){
alert('Past date can not be selected');
$('#appoin_date').val('');
}}
function get_open_time(id){
var siteutl=$('#siteutl').val();
console.log(siteutl);
$.ajax({
url:siteutl+'booking/opening_time',
type:"POST",
dataType:"text",
cache:false,
data:{timefor:id},
success:function(html){
var mytime=html.split('/');
opentime=mytime[0];
closetime=mytime[1];
}
});
var getPreviousDate = $('#holidayconst').val();
get_holidays_by_centre(id,getPreviousDate);
}
function check_opent_time(selectedtime)
{
return opentime;
}
function check_close_time(selectedtime)
{return closetime;
}
function lets_change_user_password()
{
var changenow=$('#changenow').val();
}
function update_now()
{
var siteutl=$('#baseurl').val();
var password=$('#password').val();
var conpassword=$('#confirmpassword').val();
var key=$('#key').val();
console.log(siteutl);
if(password==conpassword){
$.ajax({
url:siteutl+'booking/nowchange',
type:"POST",
dataType:"text",
cache:false,
data:{password:password,key:key},
success:function(html){
if(html==true){
alert('Please check your mail for new password');
window.location.href=siteutl+"login";
}}
});
}else{
alert('Password & confirm Password does not matched');
}}
onload=function(){
if(e!=undefined)
var e=document.getElementById("refreshed");
if(e.value=="no")
e.value="yes";
else{
e.value="no";
location.reload();
}}
function get_to_product(productid,logedin,user,password,path){
var siteutl=$('#baseurl').val();
if(user==''){
window.location.href=siteutl+'product/'+path+'/'+productid;
}else{
window.location.href=siteutl+'product/index.php?route=account/login&email='+user+'&password='+password+'&product='+productid+'&category='+path;
}}
function get_to_product_by_category(productid,logedin,user,password){
var siteutl=$('#baseurl').val();
if(user==''){
window.location.href=siteutl+'product/index.php?route=product/category&path='+productid;}else{window.location.href=siteutl+'product/index.php?route=account/login&email='+user+'&password='+password+'&category='+productid;
}}

function get_holidays_by_centre(centreID,getPreviousDate){
var siteutl=$('#siteutl').val();
$('#getAllstrdatesforcloseit').val('');
	$.ajax({
url:siteutl+'booking/get_centre_holiday',
type:"POST",
data:{centreID:centreID},
success:function(html){
if(html!=''){
$('#getAllstrdatesforcloseit').val(html);
get_spliter_data();
}else{
$('#getAllstrdatesforcloseit').val(getPreviousDate);
get_spliter_data();
}

}
});
}

function get_spliter_data(){
var allDATA = $('#getAllstrdatesforcloseit').val();
 splitter = allDATA.split('-');

}