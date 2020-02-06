
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
// import Vue from 'vue/dist/vue.min.js'
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


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data:{
        corpsenotification:[],
    },
     created(){
         if (window.Laravel.userId) {
             axios.post('/notification/corpsenotification/notification').then(response=>{
                 this.corpsenotification=response.data;
                 timeAgo();
                // console.log(response.data);
             });

             Echo.private('App.User.'+window.Laravel.userId).notification((response)=>{
                var data = {"data":response,'created at':response.corpsenotification.created_at};
                  this.corpsenotification.push(data);
                  timeAgo();
                //   console.log(response.data);
                });

         };
         function timeAgo() {
            Vue.filter('myOwnTime',function(value){return moment(value).fromNow();});

        }
     }


});
