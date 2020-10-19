require('./bootstrap');

window.Vue = require('vue');

Vue.component('login-component', require('./components/loginComponent.vue').default);
Vue.component('pit-stop-component', require('./components/pitStopComponent.vue').default);
Vue.component('modal-rules-component', require('./components/modalRulesComponent.vue').default);


 const app = new Vue({
   el: '#app',
   data:{
   		startplay: '',
   },
 });