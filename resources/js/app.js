/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('productBody', require('./components/productBody.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

if(document.getElementById('app')){
    const app = new Vue({
        el: '#app',
        created: function(){
            $.get("/json/latest-products-json",(res)=>{
                this.products = res.data;
            })
        },
        data: function(){
            return {
                products: [],
                pos_product_list: []
            }
        },

        methods:{
            //for add product to pos table
            add_product_to_pos_list: function(product){
                let product_check = this.pos_product_list.find((item) => item.id === product.id);
                if(product_check){
                    product_check.qty++;
                }else{
                    let pos_product ={
                        id: product.id,
                        name: product.name,
                        image: product.image,
                        price: product.price,
                        qty: 1,
                    }
                    this.pos_product_list.unshift(pos_product);
                    console.log(product.name);

                }


            },
        },
    });

}
