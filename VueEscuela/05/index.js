const app = new Vue({
    el:"#app",
    data:{
        
        tiempo:0,

        busqueda:'',

        usuario:{
            username:"frangersal",
            role:"admin"

        },
        tareas:[
            {nombre:"Estudiar", tiempo:23},
            {nombre:"Descansar", tiempo:45},
            {nombre:"Aseo", tiempo:3},
            {nombre:"Comer", tiempo:12},
        ]
    },
    computed: {
        filtroTareas(){
            return this.tareas.filter(tarea =>
                {
                    return tarea.tiempo <= this.tiempo && tarea.nombre.includes(this.busqueda);
                }
            )
        }
    },
   
});
Vue.config.devtools = true;