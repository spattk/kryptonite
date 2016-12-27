function addSibling() {

	var sibling = '<div class="sibling-box"><div class="form-group"><label>Siblings</label><div class="row"><div class="col-md-10" style="border: 1px dotted black; padding-top: 10px;margin-left: 15px;"><div class="form-group"><div class="row"><div class="col-md-9"><div class="form-group"><label>Name</label><input type="text" name="" class="form-control"></div></div><div class="col-md-3"><div class="form-group"><label>Class</label><input type="text" name="" class="form-control"></div></div></div></div></div><div class="col-md-1"><div class="input-group-btn" style="top: 25px;"><button type="button" class="btn btn-warning" onclick="removeSibling(this)" ><i class="fa fa-minus"></i></button></div></div></div></div></div>';

	$( 'div.sibling-box-placeholder' ).append( sibling );
}

function removeSibling( obj ) {

	$(obj).closest('div.sibling-box').slideUp(function(){
        $(this).remove();
    });
}

function addPerformance() {

	var performance = '<div class="performance-box"><div class="form-group"><label>Previous Performance</label><div class="row"><div class="col-md-7" style="border: 1px dotted black; padding-top: 10px;margin-left: 15px"><div class="form-group"><div class="row"><div class="col-md-6"><div class="form-group"><label>Class</label><input type="number" name="" class="form-control"></div></div><div class="col-md-6"><div class="form-group"><label>Percentage</label><input type="number" name="" class="form-control"></div></div></div></div></div><div class="col-md-1"><div class="input-group-btn" style="top: 25px;"><button type="button" class="btn btn-warning" onclick="removePerformance(this)" ><i class="fa fa-minus"></i></button></div></div></div></div></div>';

	$( 'div.performance-box-placeholder' ).append( performance );
}

function removePerformance( obj ) {

	$(obj).closest('div.performance-box').slideUp(function(){
		$(this).remove();
	});
}