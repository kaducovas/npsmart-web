<body>
    <nav class="navbar navbar-custom">
        <div class="container-fluid">
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle collapsed" id="toggleButton" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://support.huawei.com"><img src="/npsmart/images/huawei_logo_icon.png" style="padding:0px; top:0px; width:30px; margin-top:-15%; height:30px;"/></a>
               
                <a class="navbar-brand" id="aTitleVersion" href="/npsmart/" style="width:170px;"><span id="aTitle">NPSmart</span>&nbsp; <span id="sVersion" style="font-size:12px; font-family:Calibri;">
                     v2.1</span></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" id="mainMenu">
                    <li id="menuItemnqi" class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Performance<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="menuItemnqi"><a href="/npsmart/umts/">Main KPIs</a></li>
                            <li class="menuItemnqi"><a onclick='selectreportname(this)'>AMX NQI HS</a></li>
                            <li class="menuItemnqi"><a onclick='selectreportname(this)'>AMX NQI CS</a></li>
                            <li class="menuItemnqi"><a href="/npsmart/umts/tx_integrity">TX Integrity</a></li>
                            <li class="menuItemnqi"><a href="/npsmart/umts/overshooters">Overshooters</a></li>
                            <li class="menuItemnqi"><a href="/npsmart/umts/radar">AMX Radar</a></li>
							<li class="menuItemnqi"><a href="/npsmart/umts/kpis_anatel_weekly">Anatel KPIs</a></li>
                        </ul>
                    </li>
                    <li id="menuItemwaf" class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Capacity<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
						<li class="menuItemnqi"><a href="/npsmart/umts/capacity">Cell & NodeB Capacity</a></li>
						<li class="menuItemnqi"><a href="/npsmart/umts/rnc_capacity">RNC Capacity</a></li> 
 						<li class="menuItemnqi"><a href="/npsmart/umts/unbalance">EE/Load Unbalance</a></li>
                        </ul>
					</li>	
                    <li id="menuItemwaf" class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">RNP<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
						<li class="menuItemnqi"><a href="/npsmart/main_map/map_region_lte">Network Overview</a></li>
                            <li class="menuItemnqi"><a href="/npsmart/umts/rfpar">Cells Database</a></li>
                            <li><a href="/npsmart/umts/cfg">RNC & Cell Configuration</a></li>
                            <li class="menuItemnqi"><a href="/npsmart/umts/nodebcfg">NodeB Configuration</a></li>  
                            <li class="menuItemnqi"><a href="/npsmart/umts/srancfg">Single-RAN Configuration</a></li>  
							<li class="menuItemnqi"><a href="/npsmart/umts/inventory">Inventory</a></li>							  
							<li class="menuItemnqi"><a href="/npsmart/umts/gis">GIS</a></li>	
							<li class="menuItemnqi"><a href="/npsmart/umts/alarm">Alarm</a></li>	
                        </ul>
                    </li>	
                    <li id="menuItemwaf" class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Consistency Check<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
							<li class="menuItemnqi"><a href="/npsmart/umts/baseline_nodeb">Baseline NodeB Audit</a></li>
                            <li class="menuItemnqi"><a href="/npsmart/umts/baseline">Baseline Cell & RNC Audit</a></li>
							<li class="menuItemnqi"><a href="/npsmart/umts/baseline">Neighbor Audit</a></li>
                        </ul>
                    </li>
					<li class="menuItemnqi"><a href="/npsmart/umts/triage">Cell Mapping</a></li>
					<li id="menuItemwaf" class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Settings<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li class="menuItemnqi"><a href="/npsmart/lte/baseline_configuration">Baseline Configuration</a></li>
							<li class="disabled"><a href="#">Counters</a></li>
							<li class="menuItemnqi"><a href="/npsmart/umts/process_monitoring">Database Process Monitoring</a></li>
							<li class="disabled"><a href="#">KPIs Target</a></li>
                        </ul>
					</li>
                    <li class="disabled"><a href="#">Log</a></li>
					<li><a href="/npsmart/quickreport">Quick Report</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
					<li class="dropdown" id="dateMenu1">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">LTE<span class="glyphicon glyphicon-phone pull-left" style="margin-top:2px;margin-right:4px;"></span><span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li class="disabled"><a href="#">GSM</a></li>
							<li id="menuItemwaf"><a href="/npsmart/umts/baseline_configuration">UMTS</a></li>
							<li id="menuItemwaf"><a href="/npsmart/lte/baseline_configuration">LTE</a></li>
						</ul>
					</li>
                </ul>
            </div>
        </div>
    </nav>
</body>