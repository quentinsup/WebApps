<?php /* Smarty version Smarty-3.1.18, created on 2017-08-10 20:24:52
         compiled from "views\overshootday.html" */ ?>
<?php /*%%SmartyHeaderCode:6471598ca4f41be3e7-80510452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '238e5139fb2951952d25e417641cc5e1ee220f61' => 
    array (
      0 => 'views\\overshootday.html',
      1 => 1502389045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6471598ca4f41be3e7-80510452',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_598ca4f41e1677_35065488',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598ca4f41e1677_35065488')) {function content_598ca4f41e1677_35065488($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<title>The Overshoot Day</title>
<meta charset="utf-8" />
<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900|Open+Sans:400,700,900|Lato:400,700,900" />
<link type="text/css" rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="assets/css/animate.css" />
<link type="text/css" rel="stylesheet" href="assets/css/overshootday.css" />
</head>
<body>
	<div id="preloader"></div>
	<div id="loading"></div>
	
	<div id="view">
		<select data-bind="value: selectedCountry, optionsCaption: 'Choose...', options: countries(), optionsText: 'value'">

		</select>
		<div id="globalOvershootDay">
			<span data-bind="text: globalOvershootDayString"></span>
		</div>
		
<!-- ko if: region -->
		<div id="regions_detail" data-bind="with: region">
			<div class="dialog">
			<div class="dialog-head">
				<div class="dialog-head-title">
					<img data-bind="attr: { 'src' : 'assets/images/flags/' + (iso || '').toLowerCase() + '.png' }" />&nbsp;<span data-bind="text: countryName"></span>
				</div>
			</div>
			<div class="dialog-body">
				<div class="dialog-body-content">
					<!-- ko if: isDataLoaded() -->
					<!-- ko with: data() -->
					<div class="line animated counter" data-animation="fadeInDown" data-delay="1000">
					<div class="row">
						<div class="col-sm-12 col-md-5">
							<div class="text-center">
								<span class="bigger" data-bind="text: overshootDayString"></span>
							</div>
						</div>
						<div class="col-sm-12 col-md-5">
							Overshoot day
							<p>
							The day when all the resources that the earth can produce would have been consumed, if every countries consume like this country. 
							</p>	
						</div>
					</div>
					</div>
					<div class="line animated counter" data-animation="fadeInDown" data-delay="1400">
					<div class="row">
						<div class="col-sm-12 col-md-5">
							<div class="text-center">
								<div class="bigger value" data-from="0" data-decimals="1" data-to="" data-bind="attr: { 'data-to': numberOfEarths }"></div>
								<div class="earth-prog" data-bind="attr: { 'style': 'width:' + (numberOfEarths * 30) + 'px' }"></div>
							</div>
						</div>
						<div class="col-sm-12 col-md-7">
							Number of earths
							<p>
							The number of earths that humanity would needed if every countries consume like this country.
							</p>	
						</div>
					</div>
					</div>
					<div class="line animated counter" data-animation="fadeInDown" data-delay="1800">
					<div class="row">
						<div class="col-sm-12 col-md-5">
							<div class="text-center">
								<span class="bigger value" data-from="0" data-decimals="1" data-to="" data-bind="attr: { 'data-to': EFConsPerCap }"></span><br />
								<span class="smaller">gha / h</span>
							</div>
						</div>
						<div class="col-sm-12 col-md-7">
							Ecological Footprint (of consumption)
							<p>
							A measure of how much area of biologically productive land and water an individual, population, or activity requires to produce all the resources it consumes and to absorb the waste it generates, using prevailing technology and resource management practices.
							</p>	
						</div>
					</div>
					</div>
					<div class="line animated counter" data-animation="fadeInDown" data-delay="2100">
					<div class="row">
						<div class="col-sm-12 col-md-5">
							<div class="text-center">
								<span class="bigger value" data-from="0" data-decimals="1" data-to="" data-bind="attr: { 'data-to': BiocapPerCap }"></span><br />
								<span class="smaller">gha / h</span>
							</div>
						</div>
						<div class="col-sm-12 col-md-7">
							Biocapacity
							<p>
							The biocapacity of a surface represents its ability to renew what people demand.
							Biocapacity can change from year to year due to climate, management, and proportion considered useful inputs to the human economy. 
							</p>
						</div>
					</div>
					</div>
					<!-- /ko -->
					<!-- /ko -->
				</div>
			</div>
			</div>
		</div>
		<!-- /ko -->
		
	</div>
	
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.2/knockout-min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="assets/js/jquery/jquery.appear.js"></script>
	<script type="text/javascript" src="assets/js/jquery/jquery.countTo.js"></script>
	<script type="text/javascript" src="assets/js/commons.js"></script>
	<script type="text/javascript" src="assets/js/overshootday.js"></script>

</body>
</html><?php }} ?>
