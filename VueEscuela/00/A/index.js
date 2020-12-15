const app = new Vue({
    el:"#app",
    data:{
        base:0,
        altura:0,

        nick:"",
        alumnos:[
            {nombre:"Francisco", edad:24},
            {nombre:"Paula", edad:21}
        ],

    },
    computed:{
        area(){
            return this.base*this.altura;
        }

    },

});
Vue.config.devtools = true;