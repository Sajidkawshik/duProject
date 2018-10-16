<?php
if (isset($_POST['regno']) && isset($_POST['acyr'])) {
	$xml = "Nothing";
	echo '<div class="row">' .
		'<section class="col-lg-12 connectedSortable">' .
		'<div class="box box-info">' .
		'<div class="box-header">' .
		'<h3 class="box-title"></h3>' .
		'<div class="pull-right box-tools">' .
		'</div>' .
		'</div>' .
		'<div class="box-body">' .
		$xml .
		'</div>' .
		'<div class="box-footer clearfix">' .

		'</div>' .
		'</div>' .
		'</section>' .
		'</div>';
}
?>