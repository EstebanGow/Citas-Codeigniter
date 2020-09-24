$('document').ready(function(){

    $("#newData").validate({
        rules:{
          ident: {
            required: true,
            number: true,
            min: 5
          }, 
        phone: {
            required: true,
            number: true,
            minlength: 10
            },
        datenac: {
            required: true,
        }
            
        },
        messages: {
          ident: {
            minlength: "Debe tener al menos 5 caracteres y deben ser numericos",
            number: "su Identificación debe ser númerica",
            required: "Este campo es requerido"
          },
          phone: {
            minlength: "Debe tener 10 caracteres y deben ser numericos",
            number: "su numero de celular debe ser númerico",
            required: "Este campo es requerido"
          },
          firstname: {
            required: "Este campo es requerido",
            minlength: "Debe tener al menos  3 caracteres "
          },
          lastname: {
            required: "Este campo es requerido",
            minlength: "Debe tener al menos  3 caracteres "
          },
          city: {
            required: "Este campo es requerido",
            minlength: "Debe tener al menos  3 caracteres "
          },
          direction: {
            required: "Este campo es requerido",
            minlength: "Debe tener al menos  3 caracteres "
          },
          datenac: {
            required: "Este campo es requerido"
          },
          datecite: {
            required: "Este campo es requerido"
          },
          motive: {
            required: "Este campo es requerido, selecciona una opción"
          },
        }
    });          
});