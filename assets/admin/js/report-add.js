function addTeaching(obj) {

	var teaching = '<div class="teaching-box"><div class="form-group" style="border: 1px dotted black;padding-left: 25px;padding-top: 10px; padding-bottom: 10px"><div class="row" style="padding-bottom: 10px;"><div class="col-md-11" style="border: 1px dotted black;padding: 10px; "><div class="form-group"><div class="row"><div class="col-md-6"><label>Name of the student (if specific) </label><input type="text" name="" class="form-control"></div><div class="col-md-6"><label>Class taught </label><input type="text" name="" class="form-control"></div></div></div><div class="form-group"><div class="row"><div class="col-md-6"><label>Name of chapter taught </label><input type="text" name="" class="form-control"></div><div class="col-md-6"><label>Name of subject taught</label><input type="text" name="" class="form-control"></div></div></div></div><div class="col-md-1" style="top: 130px;padding: 5px;"><div class="input-group-btn"><button type="button" class="btn btn-warning" onclick="removeTeaching(this)" ><i class="fa fa-minus"></i></button></div></div></div></div></div>';

	 $( 'div.teaching-box-placeholder' ).append( teaching );
}

function removeTeaching( obj ) {

	$(obj).closest('div.teaching-box').slideUp(function(){
        $(this).remove();
    });
}

function addMember(obj) {

	var member = '<div class="member-box"><div class="form-group" ><div class="row" style="padding-bottom: 10px"><div class="col-md-11" style="border: 2px solid black;padding: 10px;"><div class="form-group"><div class="row"><div class="col-md-6"><label>Name of the member</label><input type="text" name="" class="form-control"></div><div class="col-md-6"><label>Year of study</label><input type="text" name="" class="form-control"></div></div></div><strong>Teaching</strong><div class="teaching-box"><div class="form-group" style="border: 1px dotted black;padding-left: 25px;padding-top: 10px; padding-bottom: 10px"><div class="row" style="padding-bottom: 10px;"><div class="col-md-11" style="border: 1px dotted black;padding: 10px; "><div class="form-group"><div class="row"><div class="col-md-6"><label>Name of the student (if specific) </label><input type="text" name="" class="form-control"></div><div class="col-md-6"><label>Class taught </label><input type="text" name="" class="form-control"></div></div></div><div class="form-group"><div class="row"><div class="col-md-6"><label>Name of chapter taught </label><input type="text" name="" class="form-control"></div><div class="col-md-6"><label>Name of subject taught</label><input type="text" name="" class="form-control"></div></div></div></div><div class="col-md-1" style="top: 130px;padding: 5px;"><div class="input-group-btn"><button type="button" class="btn btn-warning" onclick="addTeaching(this)" ><i class="fa fa-plus"></i></button></div></div></div></div></div><div class="teaching-box-placeholder"></div></div><div class="col-md-1" style=";padding-left: 5px;padding-right: 5px; top: 285px;"><div class="input-group top-padding"><div class="input-group-btn"><button type="button"class="btn btn-primary" onclick="removeMember(this)"><i class="fa fa-minus"></i></button></div></div></div></div></div></div>';

	$( '.member-box-placeholder' ).append( member );

	var i,count = $( 'input[name="count0"]' ).val();

	for( i=1;i<count;i++ ) {
		$( '.member-box-placeholder' ).append( member );
	}
}

function removeMember(obj) {

	$(obj).closest('div.member-box').slideUp(function(){
        $(this).remove();
    });
}