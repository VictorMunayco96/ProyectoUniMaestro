var tabla;

function init(){




$("#Formulario").on("submit",function(e){

    GuardaryEditar(e);

})


$("#local").prop('disabled', true);




}


function Listar(){

  

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

        url: '../Ajax/AReporteGestionDetalle.php?op=listar',
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

$("#fecha").change(function(){
   Listar();
});

