 <body class="ptrn_a grdnt_a mhover_a">
 	<?php
		include_once("includes/nav.php")
		?>
 	<div class="container">
 		<div class="row">
 			<div class=" columns dash-list">
 				<div class="box_c">
 					<div class="box_c_heading cf box_actions">
 						<div class="box_c_ico"><img src="img/ico/icSw2/16-Abacus.png" alt="" /></div>
 						<p>Statistics</p>
 					</div>
 					<div class="box_c_content">
 						<p class="inner_heading sepH_c">Latest info</p>
 						<ul class="overview_list">
 							<li>
 								<a href="#">
 									<span class="ov_nb">Today's Bookings : </span>
 									<span class="ov_text"> <?= $todaybooking ?> </span>
 								</a>
 							</li>
 							<li>
 								<a href="<?=base_url("Admin/bookings")?>">
 									<span class="ov_nb">All Bookings : </span>
 									<span class="ov_text"> <?= $allbooking ?> </span>
 								</a>
 							</li>
 						</ul>
 					</div>
 				</div>
 			</div>

 		</div>


 	</div>