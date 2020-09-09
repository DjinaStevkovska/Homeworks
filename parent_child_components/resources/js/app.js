require('./bootstrap');
window.Vue = require('vue');
import FormComponent from './Components/FormComponent'


const app = new Vue({
    el: '#app',
    components: {FormComponent},
    created() {
        console.log('Vue loaded');
    }
});