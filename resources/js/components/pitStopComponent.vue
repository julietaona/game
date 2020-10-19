<template>
    
    <div v-if="startplay">

      <img id="logo-boxes" src="img/logo.jpg" alt="Pit stop game" class="animate__animated animate__lightSpeedInLeft">

      <h2 id="name" v-if="startGame">
        Hola {{ startplay }} ¿Estás listo para jugar?
      </h2>    
      
      <div>
        
        <draggable :list="position" :options="{animation:200, group:'status'}" :element="'div'" :id="position.index" v-for="(position,index) in positionsList">
          <div v-for="(pos, index) in position"></div>
        </draggable>
        
        <img id="car" src="img/car.png" alt="Car" class="animate__animated animate__lightSpeedInLeft">
      
      </div>

      <draggable :list="mechanics" :options="{animation:200, group:'status'}" :element="'div'" id="mechanics">
          <h3>Equipo de mecánicos</h3>
          <img v-for="(mechanic, index) in mechanics" :src="'/img/' + mechanic.img" class="mechanic">
      </draggable>

    </div>

</template>

<script>
    import draggable from 'vuedraggable'

    export default {
      props:['startplay'],
        components: {
            draggable
        },
        data() {
            return {
                mechanics:[],
                positions:[],
                positionsList:[],
            }
        },
        created: function(){
          
            this.startGame();
            this.getMechanics();
            this.getPositions();
          
        },
        methods:{
          getMechanics: function()
          {
            var urlKeeps = '/getMechanics';
            
            axios.get(urlKeeps).then(response => 
            {
                this.mechanics = response.data;
            });
          },
          getPositions: function()
          {
            /*var urlKeeps = '/getPositions';
            
            axios.get(urlKeeps).then(response => 
            {
                this.positions = response.data;
            
                var _this = this;

                $(this.positions).each(function(value,key){
                  _this.positionsList.push({id:key});
                });

            });*/
          },
          startGame: function()
          {
            var urlKeeps = '/startGame';
            
            axios.get(urlKeeps).then(response => 
            {
              return response.data.status;
            });
          },
        }
    }
</script>