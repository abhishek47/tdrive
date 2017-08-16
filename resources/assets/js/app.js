
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

require('./theme');

//import TurbolinksAdapter from 'vue-turbolinks'

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

//document.addEventListener('turbolinks:load', () => {

	const app = new Vue({
	    el: '#app',

	    methods: {
	    	deleteVehicle(id)
	    	{
	    		var r = confirm("Are you sure, you want to delete the vehicle?");
				if (r == true) {
				    axios.delete('/vehicles/' + id, {
					    id: id,
					  })
					  .then(function (response) {
					  	$('#vehicle-' + id).hide(); 
					    console.log(response);
					  })
					  .catch(function (error) {
					    console.log(error);
					  });
				} else {
				   
				}
	    	}

	    }

	});


//});
