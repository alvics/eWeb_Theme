<!-- Main Footer -->
<footer id="main-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div id="footer-sidebar1">
					<?php
					if(is_active_sidebar('footer-1')){
						dynamic_sidebar('footer-1');
					}
					?>
				</div>
			</div>

			<div class="col-md-3">
				<div id="footer-sidebar2">
					<?php
					if(is_active_sidebar('footer-2')){
						dynamic_sidebar('footer-2');
					}
					?>
				</div>
			</div>

			<div class="col-md-3">
				<div id="footer-sidebar3">
					<?php
					if(is_active_sidebar('footer-3')){
						dynamic_sidebar('footer-3');
					}
					?>
				</div>
			</div>

			<div class="col-md-3">
				<div id="footer-sidebar4">
					<?php
					if(is_active_sidebar('footer-4')){
						dynamic_sidebar('footer-4');
					}
					?>
				</div>
			</div>
		</div>
	</div>

</footer>

<!-- Bottom Footer -->
<footer id="bottom-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-center">© <?php echo date("Y")?> e_Web Start your Theme</div>
			<div class="col-md-6 text-center">Made with <i class="fas fa-heart"></i> on the Gold Coast</div>
		</div>
	</div>
</footer>
