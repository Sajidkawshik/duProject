<?php

class Body{
	private $body = '<body class="hold-transition skin-blue sidebar-mini">
						<div class="wrapper">';

	public function Body($permission_list){
		foreach($permission_list as $key => $value){
			$this->body .= $permission_list[$key];

		}
	}

	public function getBody(){

		$this->body .= '</div>
		<script src="html/template/bower_components/jquery/dist/jquery.min.js"></script>
		<script src="html/template/bower_components/jquery-ui/jquery-ui.min.js"></script>
		<script>$.widget.bridge("uibutton", $.ui.button)</script>
		<script src="html/template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="html/template/bower_components/raphael/raphael.min.js"></script>
		<script src="html/template/bower_components/morris.js/morris.min.js"></script>
		<script src="html/template/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
		<script src="html/template/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
		<script src="html/template/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
		<script src="html/template/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
		<script src="html/template/bower_components/moment/min/moment.min.js"></script>
		<script src="html/template/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
		<script src="html/template/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
		<script src="html/template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
		<script src="html/template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
		<script src="html/template/bower_components/fastclick/lib/fastclick.js"></script>
		<script src="html/template/dist/js/adminlte.min.js"></script>
		<script src="html/template/dist/js/pages/dashboard.js"></script>
		<script src="html/template/dist/js/demo.js"></script>
		</body>
		</html>';

		return $this->body;
	}
}
?>