const app = new Vue({
    el:"#app",
    data:{
        alumnos:[
            {nombre:"Francisco",edad:24},
            {nombre:"Paula",edad:21},
        ],
        nick:"",
        base:0,
        altura:0,

    },
    computed:{
        area(){
            return this.base*this.altura;
        }
    },
});