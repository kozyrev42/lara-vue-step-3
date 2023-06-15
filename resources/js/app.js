import Vue from 'vue';
import PostComponent from "./components/PostComponent";

require('./bootstrap');


// создаем экземпляр Vue, чтобы использовать его в качестве глобального события шины и сделать его доступным для всех компонентов
const app = new Vue({
    el: '#app',

    components: {
        PostComponent
    }
});
