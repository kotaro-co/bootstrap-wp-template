<?php 
$form = '<form role="search" method="get" class="navbar-form navbar-right" action="' . esc_url( home_url( '/' ) ) . '">
	<div class="form-group">
		<input type="text" class="form-control" placeholder="Search" />
	</div>
</form>';
echo $form;
 ?>