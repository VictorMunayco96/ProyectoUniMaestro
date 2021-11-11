var tabla;

function init(){


Listar();

$("#Formulario").on("submit",function(e){

    GuardaryEditar(e);

})


$("#local").prop('disabled', true);




}
function limpiar(){

$("#idProducto").val("");
$("#cantidad").val("");


}




function Listar(){

    var fecha=$("#fecha").val();
    console.log(fecha);

tabla=$("#tbllistado").dataTable(
    
    {
    "aProcessing": true,
    "aServerSide": true,
    dom: 'Bfrtip',
    buttons:[
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdf'


    ],

    "ajax":{

        url: '../Ajax/AIngresoQuiebre.php?op=listar&fecha='+fecha,
        type : "get",
        dataType :"json",
        error: function(e){
            console.log(e.responseText);
        }

    },
    "bDestroy":true,
    "iDisplayLength":5,
    "order":[[0,"desc"]]

}).DataTable();

}

function GuardaryEditar(e){

e.preventDefault();

var formData= new FormData($("#Formulario")[0]);

$.ajax({

url: "../Ajax/AIngresoQuiebre.php?op=guardaryeditar",
type: "POST",
data: formData,
contentType: false,
processData: false,

success: function(datos){

    bootbox.alert(datos);
 
    tabla.ajax.reload();

}


});

limpiar();
}



function eliminar(idQuiebre){

bootbox.confirm("¿ESTA SEGURO DE DESACTIVAR EL QUIEBRE?", function(result){

if(result){

    $.post("../Ajax/AIngresoQuiebre.php?op=eliminar",{idQuiebre : idQuiebre}, function(e){

        bootbox.alert(e);
        tabla.ajax.reload();

    });


}

})


}







init();

$("#fecha").change(function(){
   Listar();
});

