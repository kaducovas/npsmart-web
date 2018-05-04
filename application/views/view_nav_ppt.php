<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<head>
	<style>
	
	</style>
</head>
<body>
	<?php
	$calendarinfo = "Week ".$weeknum;
	$attributes = array('name' => 'reportopt', 'method' => 'post');
	echo form_open('', $attributes);
	?>
	<form>
		<input type="hidden" id="reportyear" name="reportyear" value="" />
		<input type="hidden" id="reportweek" name="reportweek" value="" />
	</form>
	<nav class="navbar navbar-custom">
		<div class="container-fluid">
			<div class="navbar-header" >
				<button type="button" class="navbar-toggle collapsed" id="toggleButton" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"/>
					<span class="icon-bar"/>
					<span class="icon-bar"/>
				</button>
				<a class="navbar-brand" href="http://support.huawei.com">
					<img src="/npsmart/images/huawei_logo_icon.png" style="padding:0px; top:0px; width:30px; margin-top:-15%; height:30px;"/>
				</a>
				<a class="navbar-brand" id="aTitleVersion" href="/npsmart/" style="width:170px;">
					<span id="aTitle">NPSmart</span>&nbsp; <span id="sVersion" style="font-size:12px; font-family:Calibri;">
					v2.1</span>
				</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown" id="dateMenu1">
						<a href="#" id="daterange" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							<span id="spDate">
								<?php echo $calendarinfo;?>
							</span>
							<span class="glyphicon glyphicon-calendar pull-left" style="margin-top:2px;margin-right:4px;"/>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</body>