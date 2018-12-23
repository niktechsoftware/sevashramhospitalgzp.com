<?php $this->load->view("header");?>
<div class="page-header pattern-bg" >
	<div class="container" style="background-color:#e4e4e4;">
    	<div class="row">
        	<div class="span6">
            	<h2>Gallery</h2>
            </div>
          
        </div>
    </div>
</div>

<!-- header end //-->

<style>
.main-content-block{
	margin-top:0px;
}
</style>
<style>
.data-table table tr:nth-child(odd) {background-color:#eeeeee;}
.data-table table tr:nth-child(even) {background-color:#e4e4e4;}
.data-table table td {padding-left:10px;}

.data-table ul li {
	list-style-image: url('images/check.png');
	margin-left:30px;
	line-height:20px;
	margin-bottom:10px;
	margin-right: 35px;
}

.button-new {
	background-color: #95c23d;
	color:#fff;
	line-height: 24px;
	padding:10px 20px;
	margin: 1px;
	margin-left: 20px;
	overflow: hidden;
	display: block;
</style>
			
<!--main content start //-->
<div class="main-content" style="background: #fff;min-height:400px;">
    <div class="container" style="margin-top:40px;margin-bottom:40px;">
        <div class="row">
			<!-- Page Content start //-->
			<div class="span12" style="border:1px solid;">
			<div class="image-row">
				<div class="image-row">
				<div class="image-set" >
				<?php $t =$this->db->get("gallery");
				if($t->num_rows() >0){
				$i=1;
				foreach($t->result() as $ta):
				?>
				<a class="example-image-link" href="<?php echo base_url();?>AdminPanel/assets/images/<?php echo $ta->image; ?>" data-lightbox="example-set" data-title="welcome."><img class="example-image" src="<?php echo base_url();?>AdminPanel/assets/images/<?php echo $ta->image; ?>" alt="" style="width: 230px; height: 220px;padding: 10px;"/></a>
				<?php $i++; endforeach;
				}
				
				else{
				echo "No Photo Uploaded";}?>
					
							
				</div>
			</div>
			</div>
        </div>
    </div>    
</div>
<!--main content end //-->
<?php $this->load->view("footer");?>
