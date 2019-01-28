<!doctype html>
<html lang="en">

<head>
	<title>Gallery</title>
</head>

<body>
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Gallery</h3>
					<div class="row">
						<div class="col-md-6">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Web Coding</h3>
								</div>
								<div class="panel-body">
                                   <img src="<?= base_url()?>assets/img/abstract-business-code-270348.jpg" style="width:450px;">
								</div>
							</div>
						</div>
						<div class="col-md-6">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Making Project</h3>
                                </div>
                                <div class="panel-body">
                                <img src="<?= base_url()?>assets/img/computer-connection-data-1181675.jpg" style="width:450px;">
                                </div>
                            </div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Making Application</h3>
                                </div>
                                <div class="panel-body">
                                    <img src="<?= base_url()?>assets/img/app-business-calculator-907489.jpg" style="width:450px;">
                                </div>
                            </div>
						</div>
						<div class="col-md-6">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Use New Language</h3>
                                </div>
                                <div class="panel-body">
                                    <img src="<?= base_url()?>assets/img/code-coder-codes-34600.jpg" style="width:450px;">
                                </div>
                            </div>
						</div>
					</div>
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="<?base_url()?>https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="<?base_url()?>assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?base_url()?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?base_url()?>assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?base_url()?>assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="<?base_url()?>assets/scripts/klorofil-common.js"></script>
	<script>
	$(function() {
		var options;

		var data = {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			series: [
				[200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
			]
		};

		// line chart
		options = {
			height: "300px",
			showPoint: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};

		new Chartist.Line('#demo-line-chart', data, options);

		// bar chart
		options = {
			height: "300px",
			axisX: {
				showGrid: false
			},
		};

		new Chartist.Bar('#demo-bar-chart', data, options);


		// area chart
		options = {
			height: "270px",
			showArea: true,
			showLine: false,
			showPoint: false,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};

		new Chartist.Line('#demo-area-chart', data, options);


		// multiple chart
		var data = {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			series: [{
				name: 'series-real',
				data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
			}, {
				name: 'series-projection',
				data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
			}]
		};

		var options = {
			fullWidth: true,
			lineSmooth: false,
			height: "270px",
			low: 0,
			high: 'auto',
			series: {
				'series-projection': {
					showArea: true,
					showPoint: false,
					showLine: false
				},
			},
			axisX: {
				showGrid: false,

			},
			axisY: {
				showGrid: false,
				onlyInteger: true,
				offset: 0,
			},
			chartPadding: {
				left: 20,
				right: 20
			}
		};

		new Chartist.Line('#multiple-chart', data, options);

	});
	</script>
</body>

</html>
