const app = new Vue({
    el:"#app",
    data:{
        estudiantes:[
            {nombre: "Francisco", edad:24},
            {nombre: "Gerardo", edad:24},
            {nombre: "Paula", edad:21},
        ],
        nick:"",

        altura:0,
        base:0,
    },
    computed:{
        areaRectangulo(){
            return this.base*this.altura;
        },
    },
});