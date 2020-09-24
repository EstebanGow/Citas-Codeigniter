$('document').ready(function(){
    $('#btn1').mousedown(function(){
            $('#btn1').css("box-shadow","-2px -3px 22px #000000");
    });

    $('#btn1').mouseup(function(){
        $('#btn1').css("box-shadow","4px 4px 23px #000000");
    });

    $('#btn2').mousedown(function(){
        $('#btn2').css("box-shadow","-2px -3px 22px #000000");
    });

    $('#btn2').mouseup(function(){
    $('#btn2').css("box-shadow","4px 4px 23px #000000");
    });
})


$(document).ready(function() {
    $("#basic-form").validate({
      rules: {
        name : {
          required: true,
          minlength: 3
        },
        age: {
          required: true,
          number: true,
          min: 18
        },
        email: {
          required: true,
          email: true
        },
        weight: {
          required: {
            depends: function(elem) {
              return $("#age").val() > 50
            }
          },
          number: true,
          min: 0
        }
      },
      messages : {
        name: {
          minlength: "Name should be at least 3 characters"
        },
        age: {
          required: "Please enter your age",
          number: "Please enter your age as a numerical value",
          min: "You must be at least 18 years old"
        },
        email: {
          email: "The email should be in the format: abc@domain.tld"
        },
        weight: {
          required: "People with age over 50 have to enter their weight",
          number: "Please enter your weight as a numerical value"
        }
      }
    });

    $("#datenac").datepicker({
      changeMonth:true,
      changeYear: true
    });

    $('#icono').click(function() {
      $("#datenac").focus();
    });

    $("#datecite").datepicker({
      changeMonth:true,
      changeYear: true
    });

    $('#icono2').click(function() {
      $("#datecite").focus();
    });

  });