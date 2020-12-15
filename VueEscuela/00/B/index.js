const app = new Vue({
    el:"#app",
    data:{
        base:0, 
        altura:0,
        alumnos:[
            {nombre:"Francisco",edad:24},
            {nombre:"Paula",edad:21},
        ],
        nick:"",
        
    },
    computed:{
        areaRectangulo(){
            return this.base*this.altura;
        }
    }
});

Vue.config.devtools = true;