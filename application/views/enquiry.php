<?php $this->load->view("header");?>
<div id="slideshow2">

		<div class="active">
			<img src="<?php echo base_url();?>assets/images/enquiry.jpg" alt="" />
			
		</div>
</div>





<div class="col-sm-12 voffset9">

</div>



        <div class="container">
        	<div class="row" style="text-align:left; font-size:15px;"><p><a href="<?php echo base_url();?>" style="color:#07784c;">Home  ></a>  <a href="<?php echo base_url();?>" style="color:#07784c;">  </a>  <a href="#">Book an enquiry</a></p></div> 
        </div>
   



		<div class="container">
			<div class="row">
							<h2></h2><br>
				<h2></h2><br>
				<h2>Book An Enquiry</h2><br>
<br>
<form action="<?php echo base_url();?>index.php/welcome/saveEnquery"  method ="post" role="form" class="form-horizontal" id="form">
  
<div class="col-sm-12"><div id="errmsgmsgbox1"></div></div>
				<div class="col-sm-2">
				
                </div>
                <div id="errmsgmsgbox1"></div>
                <div class="col-sm-8 loginBox">
				<!--<div class="col-sm-6">
                        	<div class="loginBoxRow">
				<input type="radio" name="book_type" id="book_for_self" /><label>Book for self</label>
				  </div>
						</div>
					<div class="col-sm-6">
                        	<div class="loginBoxRow">
				<input type="radio" name="book_type" id="book_for_else"/><label>Book for someone else</label>
				  </div>
						</div>-->
                	<div class="col-sm-12">
                   
                   
                    
                    <!-- first name -->
                    	<div class="col-sm-6">
                        	<div class="loginBoxRow">
                            <input name="name" type="text" class="loginTxtBox" placeholder="YOUR NAME" >
							<small id="errormsgfname" class="custom"></small>
                            </div>
						</div>
                    <!-- first name end-->
                        	
							<!-- Old place
                            <div class="loginBoxRow">
                            <input name="l_name" type="text" class="loginTxtBox" placeholder="LAST NAME" id="lname" required tabindex="2" "">
							<small id="errormsglname" class="custom"></small>
                            </div>
                            -->
                           
                           
                           
                     <!-- last name --> 
                        <div class="col-sm-6">
                        <!--Rearranged space -->
                          <div class="loginBoxRow">
                            <input name="fatherName" type="text" class="loginTxtBox" placeholder="FATHER NAME"  required tabindex="4" ">
							<small id="errormsglname" class="custom"></small>
                            </div>
						</div>
                        <!-- last name end -->   
                        
                        

                       
                   
                   
                   	  <!-- Mobile --> 
                        <div class="col-sm-6">	
							 <div class="loginBoxRow">
							<!--<label class="phncodeapp">+91</label> -->
                            <input name="mobileNumber" type="text" class="loginTxtBox" placeholder="Mobile  NUMBER" required tabindex="7"
							">
							<small id="errormsgphone" class="custom"></small>
                            </div>
                            
                        </div>
                        <!-- Mobile end --> 
                   
                   
                   
                   
                   
                    <!-- Email -->
                            <div class="col-sm-6">
                           		 <div class="loginBoxRow">
                            <input name="email" type="text" class="loginTxtBox" placeholder="EMAIL ID" id="email" required tabindex="8"
							">
							<small id="errormsgemail" class="custom"></small>
                            </div>
                             </div>  
                    <!-- Email End -->  
                   
                   
                   
                  
                     
                   
                   
                   
                  
                     
														                   
                    <!-- ADDRESS -->    
                            <div class="col-sm-12">
							  <div class="loginBoxRow">
                            <textarea name="address" cols="" rows="" class="loginTxtBox" placeholder="ADDRESS" style="resize:none; line-height:20px;"  required tabindex="14"></textarea>
							<small id="errormsgappresons" class="custom"></small>
                            </div>
                            </div>
                   
                   
                      
                            
                            
                            <!-- appointment reason end -->    
                            <div class="col-sm-12">
							  <div class="loginBoxRow">
                            <textarea name="reason" cols="" rows="" class="loginTxtBox" placeholder="REASON OF ENQUIRY" style="resize:none; line-height:20px;"  required tabindex="14"></textarea>
							<small id="errormsgappresons" class="custom"></small>
                            </div>
                            </div>
                         
                    
                        
                        <div class="col-sm-12 test-center">
                        <div class="col-sm-3">
                        </div>
                        <div class="col-sm-6">
                      <button type="submit" class="btn btn-blue next-step btn-block">
													Save Enquiry <i class="fa fa-arrow-circle-left"></i>
												</button>
                       </div>
                        <div class="col-sm-3">
                        </div>
                        </div>
                        
                    </div>
					
			    </div>
            
                <div class="col-sm-2">
                </div>
		</div>
	</div>
	
	
	</form>
	
	
	
		<div id="dialog-message" title="Submit Result">
  <p id="dia_content"></p>

</div>
	
	<style>
	.phncodeapp {
    left: 4px;
    position: absolute;
    top: 216px;
}

.bookingcustom {
    float: left;
    left: 192px;
    position: relative;
    width: 200px;
}

label {
    font-weight: normal !important;
}

	</style>
		<script>

$(document).ready(function(){
		$('#getappointment').click(function(){
			if($('#phone').val().length>12){
				$('#phone').val('');
				$('#phone').addClass('error');
				$('#phone').attr('placeholder','Phone no. can not be more than 12 digits');
			}
			
		})
		
	
})

	
	
	
	</script>
<?php $this->load->view("footer");?>