<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="author" content="Akash Saravanan">
	<title>H.A.C.C 2017</title>
	<!-- Material Icons -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" />
	<!-- Custom style -->
	<link href="css/main.css" rel="stylesheet">
	<!-- firebase -->
	<script src="scripts/login.js" charset="utf-8"></script>
	<script src="https://www.gstatic.com/firebasejs/4.3.0/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/4.3.0/firebase-auth.js"></script>
	<script src="https://www.gstatic.com/firebasejs/4.3.0/firebase-database.js"></script>
	<script src="https://www.gstatic.com/firebasejs/4.3.0/firebase-messaging.js"></script>

	<script src="https://www.gstatic.com/firebasejs/4.3.0/firebase.js"></script>
	<script>
	// Initialize Firebase
	var config = {
		apiKey: "AIzaSyAioAAU8OQR-LqHtM11Db6oLKvvzYt_on4",
		authDomain: "hackathon-341ba.firebaseapp.com",
		databaseURL: "https://hackathon-341ba.firebaseio.com",
		projectId: "hackathon-341ba",
		storageBucket: "",
		messagingSenderId: "785944354937"
	};
	firebase.initializeApp(config);
	var database = firebase.database();
	</script>

	<!-- Instamoji https://imjo.in/GYYyVm -->
	<script src="https://js.instamojo.com/v1/checkout.js"></script>
</head>
<body>
	<!-- Navbar
	================================================== -->
	<div class="navbar-fixed">
		<nav id="navbar" class="white">
			<div class="nav-wrapper">
				<a class="center nexaRust brand-logo blue-text text-darken-2 flow-text">H.A.C.C 2017</a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons blue-text">menu</i></a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="index.html" class="blue-text text-darken-2 waves-effect waves-light nav-special-effect">Home</a></li>
					<li><a href="register.html" class="blue-text text-darken-2 waves-effect waves-light nav-special-effect">Register</a></li>
				</ul>
			</div>
		</nav>
	</div>
	<ul class="side-nav" id="mobile-demo">
		<li><a href="index.html" class="blue-text text-darken-2">Home</a></li>
		<li><a href="register.html" class="blue-text text-darken-2">Register</a></li>
	</ul>

	<div id="signup" class="container">
		<div class="row">
			<form id="regform" class="col s12 xl8 offset-xl2"  action="login.php" method="POST">
				<p class="flow-text">Registration Fee: Rs. 100 for each Member</p>
				<ul class="collapsible blue-text" data-collapsible="accordion">
					<li>
						<div class="collapsible-header active">Team Information*</div>
						<div class="collapsible-body">
							<div class="row">
								<div class="input-field col s12 m8">
									<i class="material-icons prefix white-text text-darken-2 background-icon">people</i>
									<input id="team_name" name="teamName"type="text" class="validate" data-length="20">
									<label for="team_name">Team Name</label>
								</div>
								<div class="input-field col s12 m4">
									<select name="option">
										<option value="" disabled selected>No. of Members</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
									</select>
									<label>No. of Members</label>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="collapsible-header">Member 1 Information*</div>
						<div class="collapsible-body">
							<div class="row">
								<div class="input-field col s12 m6">
									<i class="material-icons prefix white-text text-darken-2 background-icon">person</i>
									<input id="member1_first_name" name="member1_first_name" type="text" class="validate" data-length="20">
									<label for="member1_first_name">First Name</label>
								</div>
								<div class="input-field col s12 m6">
									<i class="material-icons prefix white-text text-darken-2 background-icon">person</i>
									<input id="member1_last_name" name="member1_last_name"type="text" class="validate" data-length="20">
									<label for="member1_last_name">Last Name</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<i class="material-icons prefix white-text text-darken-2 background-icon">school</i>
									<input id="member1_college" name="member1_college"type="text" class="validate" data-length="50">
									<label for="member1_college">College Name</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12 m6">
									<i class="material-icons prefix white-text text-darken-2 background-icon">email</i>
									<input id="member1_email" name="member1_email"type="email" class="validate" data-length="35">
									<label for="member1_email">Email</label>
								</div>
								<div class="input-field col s12 m6">
									<i class="material-icons prefix white-text text-darken-2 background-icon">local_phone</i>
									<input id="member1_phone" name="member1_phone"type="tel" class="validate"  data-length="10">
									<label for="member1_phone">Phone Number</label>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="collapsible-header">Member 2 Information*</div>
						<div class="collapsible-body">
							<div class="row">
								<div class="input-field col s12 m6">
									<i class="material-icons prefix white-text text-darken-2 background-icon">person</i>
									<input id="member2_first_name" name="member2_first_name"type="text" class="validate" data-length="20">
									<label for="member2_first_name">First Name</label>
								</div>
								<div class="input-field col s12 m6">
									<i class="material-icons prefix white-text text-darken-2 background-icon">person</i>
									<input id="member2_last_name" name="member2_last_name" type="text" class="validate" data-length="20">
									<label for="member2_last_name">Last Name</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<i class="material-icons prefix white-text text-darken-2 background-icon">school</i>
									<input id="member2_college" name="member2_college" type="text" class="validate" data-length="50">
									<label for="member2_college">College Name</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12 m6">
									<i class="material-icons prefix white-text text-darken-2 background-icon">email</i>
									<input id="member2_email" name="member2_email" type="email" class="validate" data-length="35">
									<label for="member2_email">Email</label>
								</div>
								<div class="input-field col s12 m6">
									<i class="material-icons prefix white-text text-darken-2 background-icon">local_phone</i>
									<input id="member2_phone" name="member2_phone"type="tel" class="validate"  data-length="10">
									<label for="member2_phone">Phone Number</label>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="collapsible-header">Member 3 Information</div>
						<div class="collapsible-body">
							<div class="row">
								<div class="input-field col s12 m6">
									<i class="material-icons prefix white-text text-darken-2 background-icon">person</i>
									<input id="member3_first_name" type="text" class="validate" data-length="20">
									<label for="member3_first_name">First Name</label>
								</div>
								<div class="input-field col s12 m6">
									<i class="material-icons prefix white-text text-darken-2 background-icon">person</i>
									<input id="member3_last_name" type="text" class="validate" data-length="20">
									<label for="member3_last_name">Last Name</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<i class="material-icons prefix white-text text-darken-2 background-icon">school</i>
									<input id="member3_college" type="text" class="validate" data-length="50">
									<label for="member3_college">College Name</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12 m6">
									<i class="material-icons prefix white-text text-darken-2 background-icon">email</i>
									<input id="member3_email" type="email" class="validate" data-length="35">
									<label for="member3_email">Email</label>
								</div>
								<div class="input-field col s12 m6">
									<i class="material-icons prefix white-text text-darken-2 background-icon">local_phone</i>
									<input id="member3_phone" type="tel" class="validate"  data-length="10">
									<label for="member3_phone">Phone Number</label>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="collapsible-header">Member 4 Information</div>
						<div class="collapsible-body">
							<div class="row">
								<div class="input-field col s12 m6">
									<i class="material-icons prefix white-text text-darken-2 background-icon">person</i>
									<input id="member4_first_name" type="text" class="validate" data-length="20">
									<label for="member4_first_name">First Name</label>
								</div>
								<div class="input-field col s12 m6">
									<i class="material-icons prefix white-text text-darken-2 background-icon">person</i>
									<input id="member4_last_name" type="text" class="validate" data-length="20">
									<label for="member4_last_name">Last Name</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<i class="material-icons prefix white-text text-darken-2 background-icon">school</i>
									<input id="member4_college" type="text" class="validate" data-length="50">
									<label for="member4_college">College Name</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12 m6">
									<i class="material-icons prefix white-text text-darken-2 background-icon">email</i>
									<input id="member4_email" type="email" class="validate" data-length="35">
									<label for="member4_email">Email</label>
								</div>
								<div class="input-field col s12 m6">
									<i class="material-icons prefix white-text text-darken-2 background-icon">local_phone</i>
									<input id="member4_phone" type="tel" class="validate"  data-length="10">
									<label for="member4_phone">Phone Number</label>
								</div>
							</div>
						</div>
					</li>
				</ul>
				<!--Payment-->
				<div class="row">
					<div class="input-field col s6">
						<button type="submit" onclick="writeto();" class="waves-effect waves-light btn blue modal-trigger">
							<i class="material-icons right">done</i>Register!
						</button>
						<!-- <a id="instamojo-link" href="https://www.instamojo.com/@svceacm/lf827255a3ba0407080b849c27585a946/" rel="im-checkout" data-behaviour="remote" hidden></a> -->
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- Compiled and minified JQuery -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"
	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous"></script>
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
	<!-- Custom scripts -->
	<script src="scripts/scripts.js"></script>
	<!--
	================================================== -->

<script src="https://js.instamojo.com/v1/button.js"></script>
</body>
</html>
