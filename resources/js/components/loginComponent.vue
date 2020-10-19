<template>
	
	<div>
		
		<img id="logo" src="img/logo.jpg" alt="Pit stop game" class="animate__animated animate__lightSpeedInLeft" v-if="!startGame">

		<div id="loginForm" v-if="!startGame" class="animate__animated animate__lightSpeedInLeft">
			<input type="text" v-model="userName" :maxLength="15" placeholder="Nombre jugador">
			<input type="submit" value="¡Arrancar a jugar!" v-bind:disabled="!userName" v-on:click="startplay()">
			<a id="rules" v-on:click="openRules()">Ver reglas del juego</a>
		</div>

		<modal-rules-component :showModalRules=showModalRules></modal-rules-component>

	</div>

</template>

<script>
	
  export default {

  	data(){

  		return{
  			userName:'',
  			startGame: false,
  			showModalRules: false,
  		}
  	},
  	methods:{
  		openRules: function(){
  			this.showModalRules = true;
  		},
  		startplay: function(){
			this.startGame = !this.startGame;
			this.$emit('startplay', this.userName);  		
  		},
  	}
    
  };
</script>