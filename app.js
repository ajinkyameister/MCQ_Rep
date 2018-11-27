class Errors{

	constructor(){

		this.errors={};

	}
	get(field){

		if (this.errors[field]){

			return this.errors[field][0];
		}
	}

	record(errors){

		this.errors = errors;

	}
	clear(){

		return this.errors={};
	}

}

// form should be responsible for its fields
// form should execute the Submit Request
// form should handle its own errors 


						// new Vue({

						// 	el:"#root",

						// 	data:{

						// 		name:[]	,
						// 		description:[],
						// 		displayNames:[],		
						// 		errors: new Errors()
						// 	},

						// 	methods:{

						// 		onSubmit(){
									
						// 			this.displayNames.push(this.name);

						// 			axios.post('/projects',{
						// 				'name':this.name, 

						// 				'description':this.description
						// 			})
									
						// 			.then(response => alert("sueccess"))

						// 			.catch(error => this.errors.record(error.response.data.errors));
									

						// 		},

								
						// 	},

							

						// });


new Vue({

	el:"#roots",

	data:{

		name:[],
		phone_number:[],
		address:[],
		pan_card:[],
		showModal:false,
	},

	methods:{

		formSubmit()	{
			// alert(this.$data);
			axios.post('/resellers',{

				name:this.name,
				phone_number:this.phone_number,
				address:this.address,
				pan_card:this.pan_card

			}).then(response=>console.log(response.data));

			this.closeModal();
		},

		closeModal(){

			return this.showModal=false;
		},

		openModal(){

			return this.showModal = true;
		}
	}

});
