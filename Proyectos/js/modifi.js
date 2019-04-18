function cierraFormulario(){
    onclick="document.getElementById('Formulario').style.display='none'";
}
//funcion para seleccionar todos los detalles del informe 
function selecInforme(cve){
    ////NumPart Monto Desc NumFact NomEmp
    
    $.ajax({
        data : {"Cvep" : cve},
        url: 'PHP/DetalleProyecto.php',
        type: 'POST' , 
        beforeSend : function(){
            console.log("Usted esta realizando una transaccion en linea == tiene alguna idea de lo que esta haciendo ?");
        },
        success: function(response){
            console.log(response);
            //alert("Exito???");
            document.getElementById('Formulario').style.display='block';
            $("#frmmodi").html(response);

            //alert(response);
            //alert($("#equivocado").val());  
        }
    });
}

function checar(){
    //alert($("#r1").val());
    //alert($('input:radio[name=optradio]:checked').val());
    //alert($("#r1").chequed);
    $.ajax({
        data : {"Opc" : $('input:radio[name=optradio]:checked').val() , "valor" : $("#txtsrch").val() },
        url : 'PHP/Busqueda.php',
        type : 'POST',
        beforeSend: function(){
            console.log("enviando una solicitud uwu");
        },
        success: function(response){
            console.log(response);
            $("#contenidoTabla").html(response);
        }
    });
}