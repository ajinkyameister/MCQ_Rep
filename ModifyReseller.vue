<template>
	<div>
		<div>
			<h1>
				<a @click="displayResellerName" > Hello World </a>
			</h1>
		
				<li v-if="showResellerList" v-for="name in allResellerNames">
						<a @click="mymethod"> {{name}}</a>
				</li>	
				<slot> </slot>

		</div>

	</div>

</template>

<script>
	
	export default{

		props:{

			reseller:Array,
		},

		data(){

			return {

				showResellerList:true,

				// allResellerNames:{
				// 	name:[]
				// },
				allResellerNames:[],

			}
		},

		methods:{

			displayResellerName(){

				this.resellersName = this.reseller;

				this.resellersName.forEach(names => {

					// console.log(names);
					
					// this.allResellerNames.name.push(names.name) ;

					this.allResellerNames.push(names.name) ;
				
				});
				
				// console.log(this.allResellerNames.name);	
			},

			mymethod(){

				alert("hi");
			}
		}

	}

</script>	
