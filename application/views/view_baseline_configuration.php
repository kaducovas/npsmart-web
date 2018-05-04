<DOCTYPE html5>
<html>
	<head>
		<title>Baseline Configuration UMTS</title>
	</head>
	<body>
		<!--<div style="color:red">
			<h3>For security reasons the official Baseline table has been temporarily replaced by an unofficial test table. We'll send a new e-mail when the test finish.</h3>
		</div>-->
		<div class="dimmer">

		</div>
		<div class="example">
			<div class="dropdown">
				<button class="dropbtn">Rows Number</button>
				  <div class="dropdown-content">
					<a data-page-size="10">10 Rows</a>
					<a data-page-size="25">25 Rows</a>
					<a data-page-size="50">50 Rows</a>
					<a data-page-size="100">100 Rows</a>
				  </div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Show/Hide Columns</button>
				  <div class="dropdown-content">
					<a id="_rowid" class="columns">Row ID</a>
					<a id="_id" class="columns">ID</a>
					<a id="_mo" class="columns">MO</a>
					<a id="_parameter" class="columns">Parameter</a>
					<a id="_subparameter" class="columns">Sub Parameter</a>
					<a id="_mml" class="columns">MML</a>
					<a id="_operator" class="columns">Operator</a>
					<a id="_value" class="columns">Value</a>
					<a id="_element" class="columns">Element</a>
					<a id="_golden" class="columns">Golden</a>
					<a id="_conditions" class="columns">Conditions</a>
					<a id="_lastdate" class="columns">Last Date</a>
					<a id="_act" class="columns">ACT</a>
					<a id="_automml" class="columns">Auto MML</a>
				  </div>
			</div>			
			<table id="editing-example" class="table" data-paging="true" data-filtering="true" data-sorting="true">
				<thead>
					<tr>
						<th class="rowid" data-name="rowid" data-type="number">Row ID</th>
						<th class="id" data-name="id">ID</th>
						<th class="mo" data-name="mo">MO</th>
						<th class="parameter" data-name="parameter">Parameter</th>
						<th class="subparameter" data-name="subparameter">Sub Parameter</th>
						<th class="mml" data-name="mml">MML</th>
						<th class="operator" data-name="operator">Operator</th>
						<th class="value" data-name="value">Value</th>
						<th class="element" data-name="element">Element</th>
						<th class="golden" data-name="golden">Golden</th>
						<th class="conditions" data-name="conditions">Conditions</th>
						<th class="lastdate" data-name="lastdate">Last Date</th>
						<th class="act" data-name="act">ACT</th>
						<th class="automml" data-name="automml" >Auto MML</th>
						<th class="duplicate" data-name="duplicate" data-ignore="true" data-hide="all"> Duplicate </th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach($main_rules as $row){
					echo "
						<tr>
							<td class='rowid'>".$row->rank."</td>
							<td class='id'>".$row->id."</td>
							<td class='mo'>".$row->mo."</td>
							<td class='parameter'>".$row->parameter."</td>
							<td class='subparameter'>".$row->subparameter."</td>
							<td class='mml'>".$row->mml."</td>
							<td class='operator'>".$row->operator."</td>
							<td class='value'>".$row->value."</td>
							<td class='element'>".$row->element."</td>
							<td class='golden'>".$row->golden."</td>
							<td class='conditions'>".$row->conditions."</td>
							<td class='lastdate'>".$row->last_date."</td>
							<td class='act'>".$row->act."</td>
							<td class='automml'>".$row->automml."</td>
							<td class='duplicate' onclick=\"duplicar(this)\"><a class='btn btn-info btn-sm'><span class='glyphicon glyphicon-duplicate'></span></a></td>
						</tr>
						";
					}
					?>
				</tbody>
			</table>
			
			<div id="loading" style="display:none">
				<p style="text-align:center;"><img src="/npsmart/images/ajax-loading.gif" style="width:150px; height:150px;" alt="Loading" /></p>
			</div>

			<!-- Modal -->
			<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="editor-title">
				<style scoped>
					/* provides a red astrix to denote  fields */
					.form-group.required .control-label:after {
						content:"*";
						color:red;
						margin-left: 4px;
					}
				</style>
				<div class="modal-dialog" role="document">
					<form class="modal-content form-horizontal" id="editor">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="editor-title">Add Row</h4>
						</div>
						<div class="modal-body">
							<!--<input type="number" id="rowid" name="rowid" class="hidden"/>-->
							<div class="form-group">
								<label for="rowid" class="col-sm-3 control-label">Row ID</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="rowid" name="rowid" placeholder="Row ID" disabled>
								</div>
							</div>
							<div class="form-group required">
								<label for="id" class="col-sm-3 control-label">ID</label>
								<div class="col-sm-9">
									<select id="id">
									  <option value="baseline">baseline</option>
									  <option value="baseline_nodeb">baseline_nodeb</option>
									  <option value="enodeb_baseline">enodeb_baseline</option>
									  <option value="enodeb_CA">enodeb_CA</option>
									  <option value="radar_baseline">radar_baseline</option>
									</select></div>
							</div>
							<div class="form-group required">
								<label for="mo" class="col-sm-3 control-label">MO</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="mo" name="mo" placeholder="Type a MO" required>
								</div>
							</div>
							<div class="form-group required">
								<label for="parameter" class="col-sm-3 control-label">Parameter</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="parameter" name="parameter" placeholder="Type a Parameter" required>
								</div>
							</div>
							<div class="form-group required">
								<label for="subparameter" class="col-sm-3 control-label">Sub Parameter</label>
								<div class="col-sm-9">
									<label class="container">True
										<input type="radio" class="form-control" name="subparameter" value="t" required>
										<span class="checkmark"></span>
									</label>
									<label class="container">False
										<input type="radio" class="form-control" name="subparameter" value="f" required>
										<span class="checkmark"></span>
									</label>
								</div>
							</div>
							<div class="form-group required">
								<label for="mml" class="col-sm-3 control-label">MML</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="mml" name="mml" placeholder="Type a MML. Be careful !" required>
								</div>
							</div>
							<div class="form-group required">
								<label for="operator" class="col-sm-3 control-label">Operator</label>
								<div class="col-sm-9">
									<select id="operator" class="testando">
									  <option value="=">=</option>
									  <option value="BETWEEN">BETWEEN</option>
									  <option value="IN">IN</option>
									  <option value="!=">!=</option>
									  <option value="null">null</option>
									</select>
								</div>
							</div>
							<div class="form-group required">
								<label for="value" class="col-sm-3 control-label">Value</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="value" name="value" placeholder="Type a value" required>
								</div>
							</div>
							<div class="form-group required">
								<label for="element" class="col-sm-3 control-label">Element</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="element" name="element" placeholder="Type a element" required>
								</div>
							</div>
							<div class="form-group required">
								<label for="golden" class="col-sm-3 control-label">Golden</label>
								<div class="col-sm-9">
									<label class="container">True
										<input type="radio" class="form-control" name="golden" value="t" required>
										<span class="checkmark"></span>
									</label>
									<label class="container">False
										<input type="radio" class="form-control" name="golden" value="f" required>
										<span class="checkmark"></span>
									</label>
								</div>
							</div>
							<div class="form-group">
								<label for="conditions" class="col-sm-3 control-label">Conditions</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="conditions" name="conditions" placeholder="Type a Condition. This field isn't required.">
								</div>
							</div>
							<div class="form-group required">
								<label for="lastdate" class="col-sm-3 control-label">Last Date</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="lastdate" name="lastdate" placeholder="Choose a Last Date" required>
								</div>
							</div>
							<div class="form-group required">
								<label for="act" class="col-sm-3 control-label">ACT</label>
								<div class="col-sm-9">
									<label class="container">True
										<input type="radio" class="form-control" name="act" value="t" required>
										<span class="checkmark"></span>
									</label>
									<label class="container">False
										<input type="radio" class="form-control" name="act" value="f" required>
										<span class="checkmark"></span>
									</label>
								</div>
							</div>
							<div class="form-group required">
								<label for="automml" class="col-sm-3 control-label">Auto MML</label>
								<div class="col-sm-9">
									<label class="container">True
										<input type="radio" class="form-control" name="automml" value="t" required>
										<span class="checkmark"></span>
									</label>
									<label class="container">False
										<input type="radio" class="form-control" name="automml" value="f" required>
										<span class="checkmark"></span>
									</label>								
								</div>
							</div>						
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary">Save changes</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div id="txtHint1"></div>
		<div class="alert success">
			<span class="closebtn">&times;</span>  
			<strong>Success!</strong> The DataBase has been updated successfuly !
		</div>
		<div class="alert">
		  <span class="closebtn">&times;</span>  
		  <strong>Fail!</strong> The request could not be completed, an error has occurred. Please try again.
		</div>		
	</body>
	<script>	
		var query = "";
		var last_row_id = <?php  echo $last_row_id[0]->rank  ?>;	
		var $modal = $('#modal-edit'),
		$editor = $('#editor'),
		$editorTitle = $('#editor-title'),
		ft = FooTable.init('#editing-example', {
			editing: {
				enabled: true,
				addRow: function(){
					var last_row_id_aux = last_row_id + 1;
					$modal.removeData('row');
					$editor[0].reset();
					$editorTitle.text('Add a new row');
					$editor.find('input#rowid.form-control').val(last_row_id_aux);
					$modal.modal('show');
				},
				editRow: function(row){
					var values = row.val();
					$(row).css('background-color','#ffbd3a');
					$editor.find('#rowid').text(values.rowid);
					$editor.find('#rowid').val(values.rowid);
					$editor.find('span.current:first').text(values.id);
					$editor.find('span.current:first').val(values.id);
					$editor.find('#mo').val(values.mo);
					$editor.find('#parameter').val(values.parameter);
					$editor.find("input[name=subparameter][value='"+values.subparameter+"']").prop("checked",true);
					$editor.find('#mml').val(values.mml);
					$editor.find('div.nice-select.testando span.current').text(values.operator);
					$editor.find('div.nice-select.testando span.current').val(values.operator);
					$editor.find('#value').val(values.value);
					$editor.find('#element').val(values.element);
					$editor.find("input[name=golden][value='"+values.golden+"']").prop("checked",true);
					$editor.find('#conditions').val(values.conditions);
					$editor.find('#lastdate').val(values.lastdate);	
					$editor.find("input[name=act][value='"+values.act+"']").prop("checked",true);
					$editor.find("input[name=automml][value='"+values.automml+"']").prop("checked",true);	
			
					$modal.data('row', row);
					$editorTitle.text('Edit row #' + values.rowid);
					$modal.modal('show');
				},
				deleteRow: function(row){
					
					//SE UMA LINHA FOR DELETADA
					
					var values = row.val();
												
					query = "DELETE FROM umts_baseline.rules WHERE rank = '"+values.rowid+"'";
					
					if (confirm('Are you sure you want to delete the row?')){
						
						var senha = prompt("Please enter the password:");
						if (senha == "huawei1234") {
						
						row.delete();
						fazer_query();
						
						}else{
						alert("Wrong Password !");	
						}	
					}
				}
			}
		}),
		
		uid = 10;

		$editor.on('submit', function(e){
			if (this.checkValidity && !this.checkValidity()) return;
			e.preventDefault();
			var row = $modal.data('row'),
				values = {
					rowid: $editor.find('input#rowid.form-control').val(),
					id: $editor.find('span.current:first').text(),
					mo: $editor.find('#mo').val(),
					parameter: $editor.find('#parameter').val(),
					subparameter: $editor.find('input[name=subparameter]:checked').val(),
					mml: $editor.find('#mml').val(),
					operator: $editor.find('div.nice-select.testando span.current').text(),
					value: $editor.find('#value').val(),
					element: $editor.find('#element').val(),
					golden: $editor.find('input[name=golden]:checked').val(),
					conditions: $editor.find('#conditions').val(),
					lastdate: $editor.find('#lastdate').val(),
					act: $editor.find('input[name=act]:checked').val(),
					automml: $editor.find('input[name=automml]:checked').val()					
					
				};
				
				var rowid = $editor.find('input#rowid.form-control').val();
				var id = $editor.find('span.current:first').text();
				var mo = $editor.find('#mo').val();
				var parameter = $editor.find('#parameter').val();
				var subparameter = $editor.find('input[name=subparameter]:checked').val();
				var mml = $editor.find('#mml').val();
				var operator = $editor.find('div.nice-select.testando span.current').text();
				var value = $editor.find('#value').val();
				var element = $editor.find('#element').val();
				var golden = $editor.find('input[name=golden]:checked').val();
				var conditions = $editor.find('#conditions').val();
				var lastdate = $editor.find('#lastdate').val();
				var act = $editor.find('input[name=act]:checked').val();
				var automml = $editor.find('input[name=automml]:checked').val();
												
			if (row instanceof FooTable.Row){
								
				var senha = prompt("Please enter the password:");
				if (senha == "huawei1234") {
					
					row.val(values);
									
					query = "UPDATE umts_baseline.rules SET id = '"+id+"', mo = '"+mo+"', parameter = '"+parameter+"',subparameter = '"+subparameter+"',mml = '"+mml+"',operator = '"+operator+"',value = '"+value+"',element = '"+element+"',golden = '"+golden+"',conditions = '"+conditions+"',last_date = '"+lastdate+"',act = '"+act+"',automml = '"+automml+"' WHERE rank = "+rowid+"";
					
					fazer_query();
				
				}else{
					alert("Wrong Password !");
				}	
				
			}else {
				
				//SE UMA LINHA FOR CRIADA
				
				var senha = prompt("Please enter the password:");
				if (senha == "huawei1234") {
					
				last_row_id = last_row_id + 1;
								
				ft.rows.add(values);
											
				query = "INSERT INTO umts_baseline.rules (rank,id, mo, parameter, subparameter, mml, operator, value, element, golden, conditions, last_date, act, automml) VALUES ("+last_row_id+",'"+id+"', '"+mo+"', '"+parameter+"', '"+subparameter+"', '"+mml+"', '"+operator+"', '"+value+"', '"+element+"', '"+golden+"', '"+conditions+"', '"+lastdate+"', '"+act+"', '"+automml+"')";
				
				fazer_query();
				
				}else{
					alert("Wrong Password !");
				}	
			}
			
			$modal.modal('hide');
			
		});
				
		$('[data-page-size]').on('click', function(e){
			e.preventDefault();
			var newSize = $(this).data('pageSize');
			if(newSize != 10){
				var g = newSize - 2;
			}else{
				var g = 10;	
			}	
			FooTable.get('#editing-example').pageSize(g);
		});
				
		$('.columns').on('click', function(e){
			var id = $(this).attr('id');
			var str = id.replace('_','');
			if($('.'+str+'').is(':visible') == true){
			$('.'+str+'').hide();
			$(this).css('background-color','#b23737');
			}else{
			$('.'+str+'').show();
			$(this).css('background-color','#f1f1f1');
			}	
		});

		$('table#editing-example tfoot tr td ').find('.footable-show').on('click', function(e){
			
			FooTable.get("#editing-example").columns.get("duplicate").visible = true;
			FooTable.get("#editing-example").draw();
				
		});

		$('table#editing-example tfoot tr td ').find('.footable-hide').on('click', function(e){
			
			FooTable.get("#editing-example").columns.get("duplicate").visible = false;
			FooTable.get("#editing-example").draw();
				
		});			
		
		function duplicar(e){
			
			var senha = prompt("Please enter the password:");
			if (senha == "huawei1234") {	
			last_row_id = last_row_id + 1;
			$editor.find('input#rowid.form-control').val(last_row_id);
			var row = $modal.data('row'),
				values = {
					rowid: last_row_id,
					id: $(e).closest('td').prevAll().eq(12).text(),
					mo: $(e).closest('td').prevAll().eq(11).text(),
					parameter: $(e).closest('td').prevAll().eq(10).text(),
					subparameter: $(e).closest('td').prevAll().eq(9).text(),
					mml: $(e).closest('td').prevAll().eq(8).text(),
					operator: $(e).closest('td').prevAll().eq(7).text(),
					value: $(e).closest('td').prevAll().eq(6).text(),
					element: $(e).closest('td').prevAll().eq(5).text(),
					golden: $(e).closest('td').prevAll().eq(4).text(),
					conditions: $(e).closest('td').prevAll().eq(3).text(),
					lastdate: $(e).closest('td').prevAll().eq(2).text(),
					act: $(e).closest('td').prevAll().eq(1).text(),
					automml: $(e).closest('td').prevAll().eq(0).text(),
					
				};

					var id = $(e).closest('td').prevAll().eq(12).text();
					var mo = $(e).closest('td').prevAll().eq(11).text();
					var parameter = $(e).closest('td').prevAll().eq(10).text();
					var subparameter = $(e).closest('td').prevAll().eq(9).text();
					var mml = $(e).closest('td').prevAll().eq(8).text();
					var operator = $(e).closest('td').prevAll().eq(7).text();
					var value = $(e).closest('td').prevAll().eq(6).text();
					var element = $(e).closest('td').prevAll().eq(5).text();
					var golden = $(e).closest('td').prevAll().eq(4).text();
					var conditions = $(e).closest('td').prevAll().eq(3).text();
					var lastdate = $(e).closest('td').prevAll().eq(2).text();
					var act = $(e).closest('td').prevAll().eq(1).text();
					var automml = $(e).closest('td').prevAll().eq(0).text();
							
					ft.rows.add(values);
					
					query = "INSERT INTO umts_baseline.rules (rank,id, mo, parameter, subparameter, mml, operator, value, element, golden, conditions, last_date, act, automml) VALUES ("+last_row_id+",'"+id+"', '"+mo+"', '"+parameter+"', '"+subparameter+"', '"+mml+"', '"+operator+"', '"+value+"', '"+element+"', '"+golden+"', '"+conditions+"', '"+lastdate+"', '"+act+"', '"+automml+"')";
				
					fazer_query();					
					
			}else{
				alert("Wrong Password !");
			}
		}
				
		$( "#lastdate" ).datepicker({
			showWeek: true,
			format: 'yyyy-mm-dd',
			maxDate: 'today'
		});
				
		$(document).ready(function() {
		  $('select').niceSelect();
		});
			
		function filtrar_colunas(node,coluna){
			
			var filtering = FooTable.get('#editing-example').use(FooTable.Filtering), // get the filtering component for the table
				filter = $(node).val();
				// get the value to filter by
			if (filter == ''){ // if the value is "none" remove the filter
				filtering.removeFilter(coluna);
			} else { // otherwise add/update the filter.
				filtering.addFilter(coluna, filter, [coluna]);
			}
			filtering.filter();
			$(node)[0].focus();
			
		}	
						
		function fazer_query() {
			
			var dimmer = $('.dimmer');
			if (window.XMLHttpRequest) {
				dimmer.show();
				document.getElementById("loading").style.display = "block";
				xmlhttp = new XMLHttpRequest();
			} else {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("txtHint1").innerHTML = this.responseText;
					$('.alert.success').show();
					dimmer.hide();
					document.getElementById("loading").style.display = "none";
				}
				if (xmlhttp.status >= 500){ //SE DER ERRO !
					$('.alert').show();
					dimmer.hide();
					document.getElementById("loading").style.display = "none";
				}				
			};
			xmlhttp.open("GET","/npsmart/umts/ajax_baseline/?q1="+query,true);
			xmlhttp.send();
			
		}
		
		jQuery(window).load(function () {
			
			//$('input').attr('checked', false);
			$('.example').show();
			FooTable.get("#editing-example").columns.get("duplicate").visible = false;
			$( '<tr><td><input class="filtro_column" type="text" id="filter_rowid" onkeyup="filtrar_colunas(this,\'rowid\')" placeholder="Search for RowID"></input></td><td><input class="filtro_column" type="text" id="filter_id" onkeyup="filtrar_colunas(this,\'id\')" placeholder="Search for ID"></input></td><td><input class="filtro_column" type="text" id="filter_mo" onkeyup="filtrar_colunas(this,\'mo\')" placeholder="Search for MO"></input></td><td><input class="filtro_column" type="text" id="filter_parameter" onkeyup="filtrar_colunas(this,\'parameter\')" placeholder="Search for Parameter"></input></td><td><input class="filtro_column" type="text" id="filter_subparameter" onkeyup="filtrar_colunas(this,\'subparameter\')" placeholder="Search for Sub Parameter"></input></td><td><input class="filtro_column" type="text" id="filter_mml" onkeyup="filtrar_colunas(this,\'mml\')" placeholder="Search for MML"></input></td><td><input class="filtro_column" type="text" id="filter_operator" onkeyup="filtrar_colunas(this,\'operator\')" placeholder="Search for Operator"></input></td><td><input class="filtro_column" type="text" id="filter_value" onkeyup="filtrar_colunas(this,\'value\')" placeholder="Search for Value"></input></td><td><input class="filtro_column" type="text" id="filter_element" onkeyup="filtrar_colunas(this,\'element\')" placeholder="Search for Element"></input></td><td><input class="filtro_column" type="text" id="filter_golden" onkeyup="filtrar_colunas(this,\'golden\')" placeholder="Search for Golden"></input></td><td><input class="filtro_column" type="text" id="filter_conditions" onkeyup="filtrar_colunas(this,\'conditions\')" placeholder="Search for Conditions"></input></td><td><input class="filtro_column" type="text" id="filter_last_date" onkeyup="filtrar_colunas(this,\'lastdate\')" placeholder="Search for Last Date"></input></td><td><input class="filtro_column" type="text" id="filter_act" onkeyup="filtrar_colunas(this,\'act\')" placeholder="Search for ACT"></input></td><td><input class="filtro_column" type="text" id="filter_automml" onkeyup="filtrar_colunas(this,\'automml\')"placeholder="Search for Auto MML"></input></td></tr>' ).insertBefore( "tfoot tr:eq(0)" );
			FooTable.get("#editing-example").draw();

		});
		
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
    }
}		
			
	</script>
</html>