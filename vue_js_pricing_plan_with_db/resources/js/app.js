/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

const { template } = require('lodash');

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('plan-template', {
    template: "#plan-template",
    props: {
        name:     {type:String},
        price:    {type:Number},
        storage:  {type:Number},
        mail_inc: {type:String}
    },
    methods: {
        // store() {
        store: function(){
            axios.post('/', {
                name:     this.name,
                price:    this.price,
                storage:  this.storage,
                mail_inc: this.mail_inc
            })
            .then(response => {
                alert("Your plan is paid");
              })
            .catch(error => {
            console.log(error);
            });

            // console.log(this.name);
        }
    }
});

Vue.component('pricing-plan', {
    template: '#pricing-plan',
    data() {
        return {
            plans:  [
                {
                    name:    'basic', 
                    price:    50,
                    storage:  100,
                    mail_inc: 'no'
                },

                {
                    name:    'premium', 
                    price:    80,
                    storage:  250,
                    mail_inc: 'yes'
                },

                {
                    name:     'pro', 
                    price:    100,
                    storage:  500,
                    mail_inc: 'yes'
                },

            ],
        }
    }
});


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
