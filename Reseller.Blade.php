<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
</head>
<body>
	<div id="root"></div>

	<div id ="roots">

		<a class="button is-link is-rounded" @click="openModal()">Rounded</a>


		<div id="modal"class="modal is-active" v-if="showModal">
			<div class="modal-background"></div>
			<div class="modal-card">
				<header class="modal-card-head">
					<p class="modal-card-title">Modal title</p>
					<button class="delete" aria-label="close" @click="closeModal()"></button>

				</header>
				<section class="modal-card-body">

					<form method="POST" action="/resellers" @submit.prevent="formSubmit">
						{{csrf_field()}}

						<label> Name:</label>
						<input id="name"type="text" name="name"  v-model="name"> <br> <br>

						<label> Phone Number:</label>
						<input id="phoneNumber"type="integer" name="phone_number" v-model="phone_number"> <br> <br>

						<label> Address:</label>
						<input id="address"type="text" name="address"  v-model="address"> <br> <br>

						<label> Pan Card Details:</label>
						<input id="panCard"type="text" name="pan_card"  v-model="pan_card"> <br> <br>

						<footer class="modal-card-foot">
							<button type="submit" class="button is-success" >Save changes</button>
							<button class="button" @click="closeModal()">Cancel</button>
						</footer>

					</form>	
				</section>

			</div>
		</div>
	</div>

	<!-- <div id="modal" class="modal">
		<div class="modal-background-background-color warning"></div>
		<div class="modal-content">
	
		</div>
		<button  class="modal-close is-large button is-dark" aria-label="close" onclick="closeModal()"></button>
	</div> -->

	<!-- <script type="text/javascript">
		
		function openModal(){

			document.getElementById('modal').className="modal is-active";
		}

		function closeModal(){

			document.getElementById('modal').className="modal";
		}



	</script> -->

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
	<script type="text/javascript" src="/js/app.js"></script>

</body>
</html>
