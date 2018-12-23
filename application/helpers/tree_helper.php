<?php
function rImage($id,$pos){
	global $count;
	global $comitAmt;
	global $comitConAmt;
	$ci =& get_instance();
	$detail = $ci->r_model->getById($id);
	$res = $ci->t_model->getByPlaceId($id);
	if($res->num_rows() > 0){
		if((strlen($res->row()->left1) > 0) && (strlen($res->row()->right1) > 0)){
			$left = $res->row()->left1;
			$dataLeft = countRoot($left);
			$leftVal = $dataLeft['count'];
			$leftComitAmt = $dataLeft['comitAmt'];
			$leftComitConAmt = $dataLeft['comitConAmt'];
			$count = 0;
			$comitAmt = 0;
			$comitConAmt = 0;

			$right = $res->row()->right1;
			$dataRight = countRoot($right);
			$rightVal = $dataRight['count'];
			$rightComitAmt = $dataRight['comitAmt'];
			$rightComitConAmt = $dataRight['comitConAmt'];
			$count = 0;
			$comitAmt = 0;
			$comitConAmt = 0;
			echo '<div class="'.$pos.'">
					<div style="border:1px solid #098;">
						<div style="background:#098;color:#FFF;">
							NAME : '.$detail->row()->name.'
						</div>
						<div>
							USER ID : '.$detail->row()->user_id.'
						</div>
						<div>
							SPONSER ID : '.$detail->row()->sponser_id.'
						</div>
						<div>
							COMMITMENT : '.$detail->row()->comit_amount.'
						</div>
						<div style="background:#098;color:#FFF;">
							LEFT COUNT : '.$leftVal.'
						</div>
						<div>
							RIGHT COUNT : '.$rightVal.'
						</div>
						<div style="background:#098;color:#FFF;">
							LEFT COMMITMENT : '.$leftComitAmt.'
						</div>
						<div>
							RIGHT COMMITMENT : '.$rightComitAmt.'
						</div>
						<div style="background:#098;color:#FFF;">
							LEFT CONFIRMED : '.$leftComitConAmt.'
						</div>
						<div>
							RIGHT CONFIRMED : '.$rightComitConAmt.'
						</div>
					</div>
				</div>
					<a href="'.base_url().'apanel/tree/'.$detail->row()->user_id.'"><img alt="" src="'.base_url().'assets/images/green.png" height="70">
					<br/>
					'.$detail->row()->name.' ('.$detail->row()->user_id.')
				</a>';
			$ids[0] = $res->row()->left1;
			$ids[1] = $res->row()->right1;
		}elseif((strlen($res->row()->left1) > 0) &&  (strlen($res->row()->right1) <= 0)){
			$left = $res->row()->left1;
			$dataLeft = countRoot($left);
			$leftVal = $dataLeft['count'];
			$leftComitAmt = $dataLeft['comitAmt'];
			$leftComitConAmt = $dataLeft['comitConAmt'];
			$count = 0;
			$comitAmt = 0;
			$comitConAmt = 0;
			echo '<div class="'.$pos.'">
					<div style="border:1px solid #098;">
						<div style="background:#098;color:#FFF;">
							NAME : '.$detail->row()->name.'
						</div>
						<div>
							USER ID : '.$detail->row()->user_id.'
						</div>
						<div>
							SPONSER ID : '.$detail->row()->sponser_id.'
						</div>
						<div>
							COMMITMENT : '.$detail->row()->comit_amount.'
						</div>
						<div style="background:#098;color:#FFF;">
							LEFT COUNT : '.$leftVal.'
						</div>
						<div>
							RIGHT COUNT : 0
						</div>
						<div style="background:#098;color:#FFF;">
							LEFT COMMITMENT : '.$leftComitAmt.'
						</div>
						<div>
							RIGHT COMMITMENT : 0
						</div>
						<div style="background:#098;color:#FFF;">
							LEFT CONFIRMED : '.$leftComitConAmt.'
						</div>
						<div>
							RIGHT CONFIRMED : 0
						</div>
					</div>
				</div>
					<a href="'.base_url().'apanel/tree/'.$detail->row()->user_id.'"><img alt="" src="'.base_url().'assets/images/red.png" height="70">
					<br/>
					'.$detail->row()->name.' ('.$detail->row()->user_id.')
				</a>';
			$ids[0] = $res->row()->left1;
			$ids[1] = "";
		}elseif((strlen($res->row()->left1) <= 0) &&  (strlen($res->row()->right1) > 0)){
			
			$right = $res->row()->right1;
			$dataRight = countRoot($right);
			$rightVal = $dataRight['count'];
			$rightComitAmt = $dataRight['comitAmt'];
			$rightComitConAmt = $dataRight['comitConAmt'];
			$count = 0;
			$comitAmt = 0;
			$comitConAmt = 0;
			echo '<div class="'.$pos.'">
					<div style="border:1px solid #098;">
						<div style="background:#098;color:#FFF;">
							NAME : '.$detail->row()->name.'
						</div>
						<div>
							USER ID : '.$detail->row()->user_id.'
						</div>
						<div>
							SPONSER ID : '.$detail->row()->sponser_id.'
						</div>
						<div>
							COMMITMENT : '.$detail->row()->comit_amount.'
						</div>
						<div style="background:#098;color:#FFF;">
							LEFT COUNT : 0
						</div>
						<div>
							RIGHT COUNT : '.$rightVal.'
						</div>
						<div style="background:#098;color:#FFF;">
							LEFT COMMITMENT : 0
						</div>
						<div>
							RIGHT COMMITMENT : '.$rightComitAmt.'
						</div>
						<div style="background:#098;color:#FFF;">
							LEFT CONFIRMED : 0
						</div>
						<div>
							RIGHT CONFIRMED : '.$rightComitConAmt.'
						</div>
					</div>
				</div>
					<a href="'.base_url().'apanel/tree/'.$detail->row()->user_id.'"><img alt="" src="'.base_url().'assets/images/red.png" height="70">
					<br/>
					'.$detail->row()->name.' ('.$detail->row()->user_id.')
				</a>';
			$ids[0] = "";
			$ids[1] = $res->row()->right1;
		}else{
			$count = 0;
			echo '<div class="'.$pos.'">
					<div style="border:1px solid #098;">
						<div style="background:#098;color:#FFF;">
							NAME : '.$detail->row()->name.'
						</div>
						<div>
							USER ID : '.$detail->row()->user_id.'
						</div>
						<div>
							SPONSER ID : '.$detail->row()->sponser_id.'
						</div>
						<div>
							COMMITMENT : '.$detail->row()->comit_amount.'
						</div>
						<div style="background:#098;color:#FFF;">
							LEFT COUNT : 0
						</div>
						<div>
							RIGHT COUNT : 0
						</div>
						<div style="background:#098;color:#FFF;">
							LEFT COMMITMENT : 0
						</div>
						<div>
							RIGHT COMMITMENT : 0
						</div>
						<div style="background:#098;color:#FFF;">
							LEFT CONFIRMED : 0
						</div>
						<div>
							RIGHT CONFIRMED : 0
						</div>
					</div>
				</div>
					<a href="'.base_url().'apanel/tree/'.$detail->row()->user_id.'"><img alt="" src="'.base_url().'assets/images/inActive.png" height="70">
					<br/>
					'.$detail->row()->name.' ('.$detail->row()->user_id.')
				</a>';
			$ids[0] = "";
			$ids[1] = "";
		}
	}else{
		echo '<img alt="" src="'.base_url().'assets/images/noId.png" height="70">';
		$ids[0] = "";
		$ids[1] = "";
	}
	return $ids;
}

function countRoot($id){
	$ci =& get_instance();
	global $count;
	global $comitAmt;
	global $comitConAmt;
	$res = $ci->t_model->getByPlaceId($id);
	if($res->num_rows() > 0){
		if((strlen($res->row()->left1) > 0) && (strlen($res->row()->right1) > 0)){
			$ids[0] = $res->row()->left1;
			countRoot($ids[0]);
			$count++;
			$a = $ci->r_model->getById($ids[0]);
			if($a->num_rows() > 0){
				$detail = $a->row();
				$comitAmt += $detail->comit_amount;
			}
			$b = $ci->r_model->getIsApprove($ids[0]);
			if($b->num_rows() > 0){
				$isApprove = $b->row();
				$comitConAmt += $isApprove->comit_amount;
			}
			
			$ids[1] = $res->row()->right1;
			countRoot($ids[1]);
			$count++;
			$c = $ci->r_model->getById($ids[1]);
			if($c->num_rows() > 0){
				$detail = $c->row();
				$comitAmt += $detail->comit_amount;
			}
			$d = $ci->r_model->getIsApprove($ids[1]);
			if($d->num_rows() > 0){
				$isApprove = $d->row();
				$comitConAmt += $isApprove->comit_amount;
			}
		}elseif((strlen($res->row()->left1) > 0) &&  (strlen($res->row()->right1) <= 0)){
			$ids[0] = $res->row()->left1;
			countRoot($ids[0]);
			$count++;
			$e = $ci->r_model->getById($ids[0]);
			if($e->num_rows() > 0){
				$detail = $e->row();
				$comitAmt += $detail->comit_amount;
			}
			$f = $ci->r_model->getIsApprove($ids[0]);
			if($f->num_rows() > 0){
				$isApprove = $f->row();
				$comitConAmt += $isApprove->comit_amount;
			}
			$ids[1] = "";
		}elseif((strlen($res->row()->left1) <= 0) &&  (strlen($res->row()->right1) > 0)){
			$ids[0] = "";
			$ids[1] = $res->row()->right1;
			countRoot($ids[1]);
			$count++;
			$c = $ci->r_model->getById($ids[1]);
			if($c->num_rows() > 0){
				$detail = $c->row();
				$comitAmt += $detail->comit_amount;
			}
			$d = $ci->r_model->getIsApprove($ids[1]);
			if($d->num_rows() > 0){
				$isApprove = $d->row();
				$comitConAmt += $isApprove->comit_amount;
			}
		}elseif((strlen($res->row()->left1) <= 0) &&  (strlen($res->row()->right1) <= 0)){
			$ids[0] = "";
			$ids[1] = "";
			$count++;
			$g = $ci->r_model->getById($id);
			if($g->num_rows() > 0){
				$detail = $g->row();
				$comitAmt += $detail->comit_amount;
			}
			$h = $ci->r_model->getIsApprove($id);
			if($h->num_rows() > 0){
				$isApprove = $h->row();
				$comitConAmt += $isApprove->comit_amount;
			}
		}
	}else{
		echo '<img alt="" src="'.base_url().'assets/images/noId.png" height="70">';
		$ids[0] = "";
		$ids[1] = "";
	}
	$data['count'] = $count;
	$data['comitAmt'] = $comitAmt;
	$data['comitConAmt'] = $comitConAmt;
	return $data;
}

function downLine($id){
	global $i;
	$ci =& get_instance();
	$res = $ci->t_model->getByPlaceId($id)->row();
	if(strlen($res->left1) > 0){
		$detail = $ci->r_model->getById($res->left1)->row();
		$color = "";
		if($detail->isApprove == "yes"){
			$color = "#CEF6CE";
		}elseif($detail->isApprove == "reject"){
			$color = "#F6CECE";
		}elseif($detail->isApprove == "painding"){
			$color = "#F5F6CE";
		}elseif($detail->isApprove == "no"){
			$color = "#CEF6F5";
		}
	     ?>
	        <tr style="background: <?php echo $color;?>;">
	             <td><?php echo $i; ?></td>
	             <td>
	             <?php echo $detail->user_id; ?>
	             </td>
	             <td>
	                  <?php echo $detail->name; ?>
	             </td>
	             <td><?php echo $detail->mobile; ?></td>
	             <td><?php echo $detail->register_date; ?></td>
	             <td><?php echo $detail->isApprove; ?></td>
	        </tr>
	   <?php 
	   $i++;
	   downline($res->left1);
	}
	if(strlen($res->right1) > 0){
	   $detail = $ci->r_model->getById($res->right1)->row();
	   $color = "";
	   if($detail->isApprove == "yes"){
	   	$color = "#CEF6CE";
	   }elseif($detail->isApprove == "reject"){
	   	$color = "#F6CECE";
	   }elseif($detail->isApprove == "painding"){
	   	$color = "#F5F6CE";
	   }elseif($detail->isApprove == "no"){
	   	$color = "#CEF6F5";
	   }
	   ?>
	           <tr style="background: <?php echo $color;?>;">
	                <td><?php echo $i; ?></td>
	                <td>
	                <?php echo $detail->user_id; ?>
	             </td>
	             <td>
	                  <?php echo $detail->name; ?>
	             </td>
	             <td><?php echo $detail->mobile; ?></td>
	             <td><?php echo $detail->register_date; ?></td>
	             <td><?php echo $detail->isApprove; ?></td>
	           </tr>
	      <?php 
	      $i++;
		downline($res->right1);
	}
}