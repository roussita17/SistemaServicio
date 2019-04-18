function modificar(valor){
    //alert("me has mandado a llamar");
    document.getElementById('Formulario').style.display='block';
    $.ajax({
        data : {"Id" : valor},
        url: 'PHP/seleccionar.php',
        type: 'POST' , 
        beforeSend : function(){
            //$("#equivocado").html("Procesando...Espere Porfavor");
            //alert("procesamd");
        },
        success: function(response){
            console.log(response);
            //alert("Exito???");
            $("#frmmodi").html(response);
            //alert(response);
            //alert($("#equivocado").val());  
        }
    });
}
function inserta(){
    if($("#Monto").val()>24000){
        alert("El monto a registrar excede el limite") ;
        return ;
    }
    $.ajax({
        data : {"NumPart" : $("#NumPart").val(),"Desc" : $("#Desc").val()},
        url: 'PHP/Insertar.php',
        type: 'POST' , 
        beforeSend : function(){
            console.log("Usted esta realizando una transaccion en linea == tiene alkguna idea de lo que esta haciendo ?");
        },
        success: function(response){
            console.log(response); 
            if(response == "Partida Registrada Con Exito"){
                alert("Registro Con Exito!!");
                $(location).attr('href',"Index.php");
            }
        }
    });
}
function actualiza(){
    ////NumPart Monto Desc NumFact NomEmp
    //alert($("#NumPart").val());
    $.ajax({
        data : {"NumPart" : $("#NumPart").val(),"Desc" : $("#Desc").val()},
        url: 'PHP/Actualizar.php',
        type: 'POST' , 
        beforeSend : function(){
            console.log("Usted esta realizando una transaccion en linea == tiene alkguna idea de lo que esta haciendo ?");
        },
        success: function(response){
            console.log(response);
            //alert("Exito???");
            $("#resultados").html(response);
            alert('Datos Modificados Con Exito!!!');
            location.reload();
            //alert(response);
            //alert($("#equivocado").val());  
        }
    });

}
function cierraFormulario(){
    onclick="document.getElementById('Formulario').style.display='none'";
}
