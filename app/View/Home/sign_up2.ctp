<!DOCTYPE html>
<html lang="en" class="fuelux">
<head>
	<meta charset="utf-8">
	<title>Fuel UX 2</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php echo $this->Html->css('fuelux/fuelux.css') ?>
<?php echo $this->Html->script('fuelux/require.js'); 
	echo $this->Html->script('bwizard/jquery.min.js'); ?>



	<style type="text/css">
		body {
			padding-bottom: 200px;
		}

		.pillbox {
			border: 1px solid #bbb;
			margin-bottom: 10px;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			border-radius: 4px;
			width: 251px;
		}

		.container > div, .container > table {
			margin: 20px;
		}

		.tree {
			width: 430px;
			height: 350px;
		}

		.static-loader {
			margin-left: 30px;
		}

		.step-content {
			border: 1px solid #D4D4D4;
			border-top: 0;
			border-radius: 0 0 4px 4px;
			padding: 10px;
			margin-bottom: 10px;
		}
	</style>

	<script>
		requirejs.config({
			paths: {
				'jquery': '/4thumpire/js/require',
				'underscore': 'http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.3.3/underscore-min',
				'bootstrap': '/4thumpire/js/vendor/src',
				'fuelux': 'src'
			}
		});

		require(['/4thumpire/js/jquery', '/4thumpire/js/data', '/4thumpire/js/datasource', '/4thumpire/js/datasourcetree', '/4thumpire/js/fuelux/all'], function ($, sampleData, StaticDataSource, DataSourceTree) {

			// WIZARD
			$('#MyWizard').on('change', function(e, data) {
				console.log('change');
				if(data.step===3 && data.direction==='next') {
					// return e.preventDefault();
				}
			});
			$('#MyWizard').on('changed', function(e, data) {
				console.log('changed');
			});
			$('#MyWizard').on('finished', function(e, data) {
				console.log('finished');
			});
			$('#btnWizardPrev').on('click', function() {
				$('#MyWizard').wizard('previous');
			});
			$('#btnWizardNext').on('click', function() {
				$('#MyWizard').wizard('next','foo');
			});
			$('#btnWizardStep').on('click', function() {
				var item = $('#MyWizard').wizard('selectedItem');
				console.log(item.step);
			});

		});
	</script>


</head>

<body>

<div class="container">


	<!-- WIZARD -->
	<div>
		<div id="MyWizard" class="wizard">
			<ul class="steps">
				<li data-target="#step1" class="active"><span class="badge badge-info">1</span>Step 1<span class="chevron"></span></li>
				<li data-target="#step2"><span class="badge">2</span>Step 2<span class="chevron"></span></li>
				<li data-target="#step3"><span class="badge">3</span>Step 3<span class="chevron"></span></li>
				<li data-target="#step4"><span class="badge">4</span>Step 4<span class="chevron"></span></li>
				<li data-target="#step5"><span class="badge">5</span>Step 5<span class="chevron"></span></li>
			</ul>
			<div class="actions">
				<button class="btn btn-mini btn-prev"> <i class="icon-arrow-left"></i>Prev</button>
				<button class="btn btn-mini btn-next" data-last="Finish">Next<i class="icon-arrow-right"></i></button>
			</div>
		</div>
		<div class="step-content">
			<div class="step-pane active" id="step1">This is step 1</div>
			<div class="step-pane" id="step2">This is step 2</div>
			<div class="step-pane" id="step3">This is step 3</div>
			<div class="step-pane" id="step4">This is step 4</div>
			<div class="step-pane" id="step5">This is step 5</div>
		</div>

		<input type="button" class="btn btn-mini" id="btnWizardPrev" value="prev">
		<input type="button" class="btn btn-mini" id="btnWizardNext" value="next">
		<input type="button" class="btn btn-mini" id="btnWizardStep" value="current step">
	</div>

</div>

</body>
</html>