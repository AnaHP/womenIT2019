function datos(){
  $.ajax({
    url: config.url+'Index/getData',
    type:'GET',
    success: function(data){
      data = JSON.parse(data);
      inst = data[0];
      rol = data[1];
      fuen = data[2];
      $("#institutioninput").html(inst);
      $("#occupationInput").html(rol);
      $("#eventInput").html(fuen);
      /* $("#online").html(online);
      $("#grupo").html(grupo);*/
    }
  });
}

function notificacion_(texto, titulo){
  $("#ventana").css("top","60px");
  $("#texto").html(titulo);
  $("#texto-p").html(texto);
  setTimeout(function(){
   $("#ventana").css("top","-100%");
 }, 3500);
}

function registrar(){
  boton = $("#register")
  $("#register").attr( "disabled", true );
  $("#register").prop("onclick", null).off("click");

  var nombre = $("#nameInput").val();
  var apellidos = $("#lastNameInput").val();
  var fechaNac = $("#dateInput").val();
  var correo = $("#emailInput").val();
  var rol = $("#occupationInput").val();
  var insti = $("#institutioninput").val();
  var info = $("#eventInput").val();
  /*var online = $("#onlineInput").val(); -> Si estara en linea*/
  /*var grupo = $("#grupoInput).val(); -> grupos en el que se*/
      if (checkEmpty($("#nameInput")) || checkEmpty($("#lastNameInput")) || checkEmpty($("#dateInput")) || checkEmpty($("#emailInput")) || checkEmpty($("#occupationInput")) || checkEmpty($("#institutioninput")) || checkEmpty($("#eventInput"))) {
        notificacion_("Revisa los campos faltantes", "Completar campos");
        $("#register").attr( "disabled", false );
        $("#register").attr("onclick", "registrar()");

        return null;
      }
      if (!validateMail($("#correo"))) {
        notificacion_("Ingresa un correo válido", "Verifica");
        return null;
      }

      boton.innerHTML = 'REGISTRANDO...';
      $.ajax({
        url:config.url+'Index/registro',
        type:'POST',
        data:{nombre:nombre, apellidos:apellidos, fechaNacimiento:fechaNac, correo:correo, rol:rol, institucion:insti, informacion:info},
        success: function(data){
        // console.log(data);
          switch(parseInt(data)){
            case 4:
              notificacion_("Correo ya registrado", "Verifica");
              $("#register").attr( "disabled", false );
              $("#register").attr("onclick", "registrar()");
              break;
            case 3:
              notificacion_("Ingresa un correo válido", "Verifica");
              $("#register").attr( "disabled", false );
              $("#register").attr("onclick", "registrar()");
              break;
            case 1:
              notificacion_( "Revisa tu bandeja de entrada para confirmar tu correo, llegará en máximo 24hrs.", "Registro exitoso");
              setTimeout(function(){location.reload(); },4000);
              break;
            case 0:
              notificacion_( "Error general", "Intenta más tarde");
              $("#register").attr( "disabled", false );
              $("#register").attr("onclick", "registrar()");
              break;
            default:
               notificacion_( "Error", "Intenta más tarde");
               $("#register").attr( "disabled", false );
               $("#register").attr("onclick", "registrar()");
              break;
          }
        }

      });
    }

function cargar(estudiantes,profesoras, empresas, otros){
      est = estudiantes + "%";
      $("#estudiantes").css("width",estudiantes+"%");
      $("#empresas").css("width",empresas+"%");
      $("#profesoras").css("width",profesoras+"%");
      $("#otros").css("width",otros+"%");
    }

    function busqueda(){
      cont = "<tr id='primero'><td>Nombre</td><td>Código</td><td>Correo</td><td>Institución</td><td></td></tr>"
      dato = $("#busqueda").val();
      if(dato != ""){
        $.ajax({
          url: config.url+'Administrador/buscar',
          type:'POST',
          data:{datos : dato},
          success: function(data){
            $("#participantes").html(data);
          }
        });
      }else{
        $("#participantes").html(cont);
      }
    }

    function contador(){
        dato = $("#institucion").val();
        // alert(dato);
        $.ajax({
          url: config.url+'Administrador/contador',
          type:'POST',
          data:{datos : dato},
          success: function(data){
            // alert(data)
            // console.log(data);
            $("#cantidad").html(data)
          }
        });
    }

    function confirmar(id){
      // alert(id);
      $.ajax({
        url:config.url+'Administrador/confirmar',
        type:'POST',
        data: {id : id},
        success:function(data){
          //console.log(data);
          id = "#"+id;
          //alert(id);
          if (data == "listo"){
            notificacion_("Ha sido confirmada la asistencia","Listo");
            // alert($("#"+id).val());
            $(id).addClass("aplicada");
            setTimeout(function(){location.reload(); },2000)
          }
          else {
            notificacion_("Prueba de nuevo","Ha ocurrido un error");
          }
        }
      });
    }
  function descarga(){

    $.ajax({
      url:config.url+'Administrador/obtener_datos',
      type:'POST',
      success:function(data){
        alert("hola");
       console.log(data);

      }
    });
}
