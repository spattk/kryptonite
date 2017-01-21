var memberCount = 1;

function addTeaching(obj) {

	var teaching = '<div class="teaching-box" ><div class="form-group" style="padding-left: 25px;padding-top: 10px; padding-bottom: 10px"><div class="row" style="padding-bottom: 10px;"><div class="col-md-11" style="border: 1px dotted black;padding: 10px; "><div class="form-group"><div class="row"><div class="col-md-6"><label>Name of the student (if specific) </label><input type="text" name="sname['+ $(obj).attr('data-name') +'][]" class="form-control"></div><div class="col-md-6"><label>Class taught </label><input type="text" name="sclass['+ $(obj).attr('data-name') +'][]" class="form-control"></div></div></div><div class="form-group"><div class="row"><div class="col-md-6"><label>Name of chapter taught </label><input type="text" name="schapter['+ $(obj).attr('data-name') +'][]" class="form-control"></div><div class="col-md-6"><label>Name of subject taught</label><input type="text" name="ssubject['+ $(obj).attr('data-name') +'][]" class="form-control"></div></div></div><div class="form-group"><label for="">Remark</label><input type="text" name="sremark['+ $(obj).attr('data-name') +'][]" class="form-control"></div></div><div class="col-md-1" style="top: 205px;padding: 5px;"><div class="input-group-btn"><button type="button" class="btn btn-warning" onclick="removeTeaching(this)" ><i class="fa fa-minus"></i></button></div></div></div></div></div>';

	 $(obj).parents('div.teaching-container').append( teaching );
}

function removeTeaching( obj ) {

	$(obj).closest('div.teaching-box').slideUp(function(){
        $(this).remove();
    });
}

function addMember(obj) {

	var member = '<div class="member-box"><div class="form-group" ><div class="row" style="padding-bottom: 10px"><div class="col-md-11" style="border: 2px solid black;padding: 10px;"><div class="form-group"><div class="row"><div class="col-md-6"><label>Name of the member</label><input type="text" name="tname[]" class="form-control"></div><div class="col-md-6"><label>Year of study</label><input type="text" name="tyear[]" class="form-control"></div></div></div><strong>Teaching</strong><div class="teaching-container"><div class="teaching-box" ><div class="form-group" style="padding-left: 25px;padding-top: 10px; padding-bottom: 10px"><div class="row" style="padding-bottom: 10px;"><div class="col-md-11" style="border: 1px dotted black;padding: 10px; "><div class="form-group"><div class="row"><div class="col-md-6"><label>Name of the student (if specific) </label><input type="text" name="sname[' + memberCount + '][]" class="form-control"></div><div class="col-md-6"><label>Class taught </label><input type="text" name="sclass[' + memberCount + '][]" class="form-control"></div></div></div><div class="form-group"><div class="row"><div class="col-md-6"><label>Name of chapter taught </label><input type="text" name="schapter[' + memberCount + '][]" class="form-control"></div><div class="col-md-6"><label>Name of subject taught</label><input type="text" name="ssubject[' + memberCount + '][]" class="form-control"></div></div></div><div class="form-group"><label for="">Remark</label><input type="text" name="sremark['+ memberCount +'][]" class="form-control"></div></div><div class="col-md-1" style="top: 205px;padding: 5px;"><div class="input-group-btn"><button type="button" data-name="'+ memberCount +'" class="btn btn-warning" onclick="addTeaching(this)" ><i class="fa fa-plus"></i></button></div></div></div></div></div></div><!-- This is the problem so it needs to be added to the end of respective objects. --></div><div class="col-md-1" style=";padding-left: 5px;padding-right: 5px; top: 360px;"><div class="input-group top-padding" ><div class="input-group-btn"><button type="button" data-name="" class="btn btn-primary" onclick="removeMember(this)"><i class="fa fa-minus"></i></button></div></div></div></div></div></div>';

	memberCount++;

	$( '.member-container' ).append( member );

	var i,count = $( 'input[name="count0"]' ).val();

	for( i=1;i<count;i++ ) {
		
		$( '.member-container' ).append( '<div class="member-box"><div class="form-group" ><div class="row" style="padding-bottom: 10px"><div class="col-md-11" style="border: 2px solid black;padding: 10px;"><div class="form-group"><div class="row"><div class="col-md-6"><label>Name of the member</label><input type="text" name="tname[]" class="form-control"></div><div class="col-md-6"><label>Year of study</label><input type="text" name="tyear[]" class="form-control"></div></div></div><strong>Teaching</strong><div class="teaching-container"><div class="teaching-box" ><div class="form-group" style="padding-left: 25px;padding-top: 10px; padding-bottom: 10px"><div class="row" style="padding-bottom: 10px;"><div class="col-md-11" style="border: 1px dotted black;padding: 10px; "><div class="form-group"><div class="row"><div class="col-md-6"><label>Name of the student (if specific) </label><input type="text" name="sname[' + memberCount + '][]" class="form-control"></div><div class="col-md-6"><label>Class taught </label><input type="text" name="sclass[' + memberCount + '][]" class="form-control"></div></div></div><div class="form-group"><div class="row"><div class="col-md-6"><label>Name of chapter taught </label><input type="text" name="schapter[' + memberCount + '][]" class="form-control"></div><div class="col-md-6"><label>Name of subject taught</label><input type="text" name="ssubject[' + memberCount + '][]" class="form-control"></div></div></div><div class="form-group"><label for="">Remark</label><input type="text" name="sremark['+ memberCount +'][]" class="form-control"></div></div><div class="col-md-1" style="top: 205px;padding: 5px;"><div class="input-group-btn"><button type="button" data-name="'+ memberCount +'" class="btn btn-warning" onclick="addTeaching(this)" ><i class="fa fa-plus"></i></button></div></div></div></div></div></div><!-- This is the problem so it needs to be added to the end of respective objects. --></div><div class="col-md-1" style=";padding-left: 5px;padding-right: 5px; top: 360px;"><div class="input-group top-padding" ><div class="input-group-btn"><button type="button" data-name="" class="btn btn-primary" onclick="removeMember(this)"><i class="fa fa-minus"></i></button></div></div></div></div></div></div>' );
		memberCount++;
	}
}

function removeMember(obj) {

	$(obj).closest('div.member-box').slideUp(function(){
        $(this).remove();
    });

    memberCount--;
}

