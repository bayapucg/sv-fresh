<?php include("header.php"); ?>
<div style="background:#f5f5f5;" >
<div class="columns-container count-bac-img" >
    <div class="container" id="columns">
       <div class="row py-3">
			<div class="col-md-6 col-xs-12 col-md-offset-3">
				<div class="card bg-white">
					<div class="card-header  py-4 px-4 text-white" style="background:#57bb14;">
						<div class="row">
							<div class="col-md-6">
								<strong class="h3">March</strong>
							</div>
							<div class="col-md-6">
								<select class="form-control">
									<option>March</option>
									<option>April</option>
								</select>
							</div>
						</div>
					</div>
					<div class="card-body py-4 px-4">
						<form>
							<div class="table-responsive">
								<table class="table">
								  <thead>
									<tr>
									  <th class="h3">Date</th>
									  <th class="h3">Packets</th>
									 
									</tr>
								  </thead>
								  <tbody>
									<tr>
									  <th class="h3">1</th>
									  <td width="30%">
										<div class="input-group">
										  <span class="input-group-btn">
											  <button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quant[1]">
												<span class="glyphicon glyphicon-minus"></span>
											  </button>
										  </span>
										  <input type="text" name="quant[1]" class="form-control input-number" value="0" min="0" max="100">
										  <span class="input-group-btn">
											  <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[1]">
												  <span class="glyphicon glyphicon-plus"></span>
											  </button>
										  </span>
									  </div>
									  </td>
									</tr>
									<tr>
									  <th class="h3">2</th>
									  <td width="30%">
										<div class="input-group">
										  <span class="input-group-btn">
											  <button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quant[2]">
												<span class="glyphicon glyphicon-minus"></span>
											  </button>
										  </span>
										  <input type="text" name="quant[2]" class="form-control input-number" value="0" min="0" max="100">
										  <span class="input-group-btn">
											  <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]">
												  <span class="glyphicon glyphicon-plus"></span>
											  </button>
										  </span>
									  </div>
									  </td>
									</tr>
									<tr>
									  <th class="h3">3</th>
									  <td width="30%">
										<div class="input-group">
										  <span class="input-group-btn">
											  <button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quant[3]">
												<span class="glyphicon glyphicon-minus"></span>
											  </button>
										  </span>
										  <input type="text" name="quant[3]" class="form-control input-number" value="0" min="0" max="100">
										  <span class="input-group-btn">
											  <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[3]">
												  <span class="glyphicon glyphicon-plus"></span>
											  </button>
										  </span>
									  </div>
									  </td>
									</tr>
									<tr>
									  <th class="h3">4</th>
									  <td width="30%">
										<div class="input-group">
										  <span class="input-group-btn">
											  <button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quant[4]">
												<span class="glyphicon glyphicon-minus"></span>
											  </button>
										  </span>
										  <input type="text" name="quant[4]" class="form-control input-number" value="0" min="0" max="100">
										  <span class="input-group-btn">
											  <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[4]">
												  <span class="glyphicon glyphicon-plus"></span>
											  </button>
										  </span>
									  </div>
									  </td>
									</tr>
									
								  </tbody>
								</table>
							</div>
						</form>
					</div>
				</div>
			</div>
	   </div>
        
		
    </div>
	
</div>
</div>
<?php include("footer.php"); ?>
<script>

$('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
</script>