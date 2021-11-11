var tabla;

function init(){


Listar();

$("#Formulario").on("submit",function(e){

    GuardaryEditar(e);
   

})
$("#local").prop('disabled', true);

}





function Listar(){

    var fecha=$("#fecha").val();
    var fecha2=$("#fecha2").val();


    console.log(fecha);
    console.log(fecha2);


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

        url: '../Ajax/AReporteResumen.php?op=listar&fecha='+fecha+'&fecha2='+fecha2,
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




init();



