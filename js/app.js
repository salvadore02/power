var lista2 = function(){
          var table = $("#dt_cliente").DataTable({
              "ajax":{
                  "method":"POST",
                  "url":"scripts/empleados.php"
                  },
          "columns":[
              {"data":"idp"},
              {"data":"nombre"},
              {"data":"apaterno"},
              {"data":"amaterno"},
              {"data":"email"},
              {"data":"direccion"}
                          
                  ]
                      
      });

/*
function ajaxEmpleados(accion,url,formulario){
    var datos =$(formulario).serializeArray();
    datos.push({name:'accion',value:accion});
    $.ajax({
        url:"scripts/empleados.php",
        data:datos,  
        type:"POST",
        dataType:"json",
        success:function(response){
            if(response.empleados !== null){
                $.each(response.empleados,function(index,empleados){
                    $("#resultado").append(
                    "<td>"+
                        "<td>"+empleados.idp+"</td>"+
                        "<td>"+empleados.nombre+"</td>"+
                        "<td>"+empleados.apaterno+"</td>"+
                        "<td>"+empleados.amaterno+"</td>"+
                        "<td>"+empleados.email+"</td>"+
                        "<td>"+empleados.direccion+"</td>"+
                        "<td>"
                    );
                });
            }
        }
    });
}
*/