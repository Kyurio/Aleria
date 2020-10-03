var intranet = new Vue({

  el: '#intranet',

  data: {

    ejemplo: '',
    estado: true,

  },

  mounted: function(){

    this.escribir();

  },

  methods: {

    escribir: function(){

      console.log("test ejemplo");

    },

    alert: function(){

      alertify.alert('Alert Title', 'Alert Message!', function(){ alertify.success('Ok'); });


    },

    ConsultarCategorias: function(){
       capturador = this;
       axios.get('/aleriaVue/pages/SelectCategorys', {
       }).then(function (response) {
         capturador.categorys = response.data;
       });
   },




  },


})
