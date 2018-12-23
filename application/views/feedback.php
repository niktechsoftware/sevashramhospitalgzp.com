<?php $this->load->view("header");?>
<style>

textarea {
-moz-box-sizing: border-box;
-webkit-box-sizing: border-box;
box-sizing: border-box;
line-height: 40px;
height: 100px;
padding: 0px 15px;
border: 1px solid #ddd;
float: left;
width: 100%;
margin-bottom: 18px;
}
button {
background:#95c23d;
padding: 10px 25px;
border: 0px;
color: #fff;
cursor:pointer;
}
</style>
<style>
	.page-header p a { color:#fff;}
	.trial a:link {color:#fff;}
	.trial a:hover {color:#9EC64D;}
	.container p.title {
    margin-top: 0px;
    font-size: 18px;
    text-transform: capitalize;
    color: #333;
	background: #e4e4e4;
    padding: 10px 0px;
    padding-left: 10px;
	border-left: 2px solid #1e4671;
	}
</style>
<!-- header end //-->
<!--main content start //-->
<div class="main-content" style="background-color:#fff">
    <div class="container" style="margin-top:40px;margin-bottom:40px;">
        <div class="row">            
             
			<div class="span8" style="margin-bottom:20px;">
			<h2 style="background: #444; width:100%; border-bottom: 1px solid #fff; color:#fff;margin-bottom:10px;font-weight:100;font-size: 20px;">
				<i class="fa fa-newspaper-o" aria-hidden="true" style="padding: 12px;"></i>
				Feedback/Suggestions
				</h2>
				

				
												
                <form name='feedback' action="#" method="post">

				<input type="hidden" value='3' name="feedbackfromid" id="3"/>
				<input type="hidden" value='1' name="feedbacktypeid" id="1"/>
				<input type="hidden" id="thanks_page" name="thanks_page" value="#"  class="textbox"/>
				<input type="hidden" id="error_page" name="error_page" value="#"  class="textbox"/>
				
				<br>
				<input class="" type="text" value="" id="name" name="name" placeholder="Your Name" style="-moz-box-sizing: border-box;-webkit-box-sizing: border-box;box-sizing: border-box;line-height: 40px;height: 40px;padding: 0px 15px;border: 1px solid #ddd;float: left;width: 100%;margin-bottom: 14px;" size="80" required="required">
				<div class="nicdark_space20" style="height:10px;"></div>
				<input class="" type="email" value="" id="email" name="email" placeholder="Your Email" style="-moz-box-sizing: border-box;-webkit-box-sizing: border-box;box-sizing: border-box;line-height: 40px;height: 40px;padding: 0px 15px;border: 1px solid #ddd;float: left;width: 100%;margin-bottom: 14px;" size="80" required="required">
				<div class="nicdark_space20" style="height:10px;"></div>
				<input class="" type="text" value="" id="mobileno" name="mobileno" placeholder="Mobile No." style="-moz-box-sizing: border-box;-webkit-box-sizing: border-box;box-sizing: border-box;line-height: 40px;height: 40px;padding: 0px 15px;border: 1px solid #ddd;float: left;width: 100%;margin-bottom: 14px;" size="80" required="required">
				<div class="nicdark_space20" style="height:10px;"></div>
				<textarea class="" placeholder="Message" name="description" id="description" rows="9" cols="140" required></textarea>
				<button class="hvr-sweep-to-right"  type="submit" name="submit" value="SEND"><i class="icon-ok-sign"></i> Submit</button>
				</form>
			</div>

            <div class="span4">
				<h2 style="background: #444; width:100%; border-bottom: 1px solid #fff; color:#fff;margin-bottom:0px;font-weight:100;font-size: 20px;">
				<i class="fa fa-newspaper-o" aria-hidden="true" style="padding: 12px;"></i>
				Address
				</h2>
					<div class="intro"><br>
						
						<i class="fa fa-hospital-o" aria-hidden="true" style="padding:6px 12px;color:#95c23d;"></i> DDS Manner Higher Seconday School<br>
						<i class="fa fa-thumb-tack" aria-hidden="true" style="padding:6px 12px;color:#95c23d;"></i>  Chiraiyakot, MAU- India 
						<br>
						<i class="fa fa-fax" aria-hidden="true" style="padding:6px 12px;color:#95c23d;"></i> +91-0000000000<br>
						<i class="fa fa-phone-square" aria-hidden="true" style="padding:6px 12px;color:#95c23d;"></i> +91-0000000000<br>
						<i class="fa fa-envelope" aria-hidden="true" style="padding:6px 12px;color:#95c23d;"></i> info@ddsmanner.in,themannerschool@gmail.com
					</div>
            </div>
            <!-- Circulars end //-->
        </div>
    </div>
</div>
<!--main content end //-->
<!-- bottom line start //-->

<?php $this->load->view("footer");?>