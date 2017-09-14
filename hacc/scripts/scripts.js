var member3 = `<li class="member3">
	<div class="collapsible-header">Member 3 Information</div>
	<div class="collapsible-body">
		<div class="row">
			<div class="input-field col s12 m6">
				<i class="material-icons prefix white-text text-darken-2 background-icon">person</i>
				<input id="member3_first_name" name="member3_first_name" type="text" class="validate" data-length="20" pattern="[a-zA-Z]*" title="Names generally have only alphabets" required>
				<label for="member3_first_name">First Name</label>
			</div>
			<div class="input-field col s12 m6">
				<i class="material-icons prefix white-text text-darken-2 background-icon">person</i>
				<input id="member3_last_name" name="member3_last_name"type="text" class="validate" data-length="20" pattern="[a-zA-Z]*" title="Names generally have only alphabets">
				<label for="member3_last_name">Last Name</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<i class="material-icons prefix white-text text-darken-2 background-icon">school</i>
				<input id="member3_college" name="member3_college"type="text" class="validate" data-length="50" pattern="[a-zA-Z,.]*" title="Names generally have only alphabets" required>
				<label for="member3_college">College Name</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12 m6">
				<i class="material-icons prefix white-text text-darken-2 background-icon">email</i>
				<input id="member3_email" name="member3_email"type="email" class="validate" data-length="35" required>
				<label for="member3_email">Email</label>
			</div>
			<div class="input-field col s12 m6">
				<i class="material-icons prefix white-text text-darken-2 background-icon">local_phone</i>
				<input id="member3_phone" name="member3_phone"type="tel" class="validate" minlength="10" pattern="[0-9]{10}" data-length="10" maxlength="10" title="Should be a mobile number." required>
				<label for="member3_phone">Phone Number</label>
			</div>
		</div>
	</div>
</li>`;

var member4 = `<li class="member4">
	<div class="collapsible-header">Member 4 Information</div>
	<div class="collapsible-body">
		<div class="row">
			<div class="input-field col s12 m6">
				<i class="material-icons prefix white-text text-darken-2 background-icon">person</i>
				<input id="member4_first_name" name="member4_first_name" type="text" class="validate" data-length="20" pattern="[a-zA-Z]*" title="Names generally have only alphabets" required>
				<label for="member4_first_name">First Name</label>
			</div>
			<div class="input-field col s12 m6">
				<i class="material-icons prefix white-text text-darken-2 background-icon">person</i>
				<input id="member4_last_name" name="member4_last_name"type="text" class="validate" data-length="20" pattern="[a-zA-Z]*" title="Names generally have only alphabets">
				<label for="member4_last_name">Last Name</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<i class="material-icons prefix white-text text-darken-2 background-icon">school</i>
				<input id="member4_college" name="member4_college"type="text" class="validate" data-length="50" pattern="[a-zA-Z,.]*" title="Names generally have only alphabets" required>
				<label for="member4_college">College Name</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12 m6">
				<i class="material-icons prefix white-text text-darken-2 background-icon">email</i>
				<input id="member4_email" name="member4_email"type="email" class="validate" data-length="35" required>
				<label for="member4_email">Email</label>
			</div>
			<div class="input-field col s12 m6">
				<i class="material-icons prefix white-text text-darken-2 background-icon">local_phone</i>
				<input id="member4_phone" name="member4_phone"type="tel" class="validate" minlength="10" pattern="[0-9]{10}" data-length="10" maxlength="10" title="Should be a mobile number." required>
				<label for="member4_phone">Phone Number</label>
			</div>
		</div>
	</div>
</li>`;

function destroyBoth() {
	if($('.member3'))
		$('.member3').remove();
	if($('.member4'))
		$('.member4').remove();
}

function createMember3() {
	$('.formSections').append(member3);
}

function createBoth() {
	createMember3();
	$('.formSections').append(member4);
}

function createDelete(numberOfMembers) {
	if(numberOfMembers == 2) {
		destroyBoth();
	}
	else if(numberOfMembers == 3) {
		destroyBoth();
		createMember3();
	}
	else if(numberOfMembers == 4){
		destroyBoth();
		createBoth();
	}
}

$(document).ready(function(){
	var numberOfMembers = $('.selectMembers').val();
	createDelete(numberOfMembers);

	$('.selectMembers').change(function() {
		numberOfMembers = $(this).val();
		createDelete(numberOfMembers);
	});

	$('.modal').modal();
	$(".button-collapse").sideNav({
		closeOnClick: true,
		draggable: true,
	});

	$('.scroll-nav').click(function(e) {
		var link = $(this).attr('href');
		$('html, body').animate({
			scrollTop: $(link).offset().top
		}, 900);
		e.preventDefault();
	});

	$('select').material_select();
	$('.collapsible').collapsible();

});
