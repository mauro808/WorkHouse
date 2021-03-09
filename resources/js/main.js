const { default: Axios } = require("axios");

// Codigo personalizado de JS
new Vue({
    el: '#app_login',
    data: {
        usuario: '',
        password: '',
    },
    methods:{
        iniciarSesion: function(){
            axios.post('/iniciar.sesion',{
                usuario:this.usuario,
                password: this.password
            })
            .then(response => {
                console.log(response);
            })
            .catch(error => {
                console.log(error.response.data);
            });
        }
    }
});