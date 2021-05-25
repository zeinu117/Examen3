function calcular(){
    
    
    let sueldo = parseInt($('#sueldo').val());
    if (sueldo < 1) {
        swal("La sueldo debe ser mayor a cero");
        return false;
    }
    let edad = parseInt($('#edad').val());
    if (edad < 1) {
        swal("La edad debe ser mayor a cero");
        return false;
    }
    let tipo = $('#tipo').val();
    if (tipo == "") {
        swal("Debes seleccionar algun sexo!");
        return false;
    }
    let tipo2 = $('#tipo2').val();
    var formulario = document.form;
    var al_menos_uno = false;

    
    //obtenemos el valor del radio
    let antiguedad = $('input:radio[name=antiguedad]:checked').val();
    if (antiguedad == undefined) {
        swal("Debes seleccionar la antiguedad!");
        return false;
    }
    let php = 0;
    php = document.getElementById('php').checked;
    if(php == true ){
        php = 90;
    }
    let java = 0;
    java = document.getElementById('java').checked;
    if(java == true ){
        java = 105;
    }
    let asp =0;
    asp = document.getElementById('asp').checked;
    if(asp == true ){
        asp = 120;
    }
    let oracle = 0;
    oracle = document.getElementById('oracle').checked;
    if(oracle == true ){
        oracle = 180;
    }
    let vb = 0;
    vb = document.getElementById('vb').checked;
    if(vb == true ){
        vb = 165;
    }
    bd = 0;
    bd = document.getElementById('bd').checked;
    if(bd == true ){
        bd = 45;
    }
    let suma = php + java + asp + oracle + vb + bd;
    
    
    

    obtenerResultado = calcularPrecio(sueldo, tipo,tipo2, antiguedad,edad,suma);
    $('#cantidadPagar').val("El bono es: $" + obtenerResultado );
    return false;
}


function calcularPrecio(sueldo, tipo,tipo2, antiguedad,edad,suma) {
    let resultado = 0;
    if(edad < 45){
        if(tipo2 == "nacional"){
            if (tipo == "femenino") {
                switch (antiguedad) {
                    case "1a5":
                        
                        resultado = sueldo * 0.23;
                        resultado = resultado + suma;
                        break;
                    case "6a10":
                        resultado = sueldo * 0.28;
                        resultado = resultado + suma;
                        break;
                    case "mas":
                        
                        resultado = sueldo * 0.33;
                        resultado = resultado + suma;
                        break;
                }
            } else if(tipo == 'masculino'){
                switch(antiguedad){
                    case "1a5":
                        
                        resultado = sueldo * 0.20;
                        resultado = resultado + suma;
                        break;
                    case "6a10":
                        
                        resultado = sueldo * 0.25;
                        resultado = resultado + suma;
                        break;
                    case "mas":
                        resultado = sueldo * 0.30;
                        resultado = resultado + suma;
                        break;
                }
            }
        }else if(tipo2 == "extranjero"){
            if (tipo == "femenino") {
                switch (antiguedad) {
                    case "1a5":
                        
                        resultado = sueldo * 0.18;
                        resultado = resultado + suma;
                        break;
                    case "6a10":
                        
                        resultado = sueldo * 0.23;
                        resultado = resultado + suma;
                        break;
                    case "mas":
                        
                        resultado = sueldo * 0.28;
                        resultado = resultado + suma;
                        break;
                }
            } else if(tipo == 'masculino'){
                switch(antiguedad){
                    case "1a5":
                        
                        resultado = sueldo * 0.15;
                        resultado = resultado + suma;
                        break;
                    case "6a10":
                        
                        resultado = sueldo * 0.20;
                        resultado = resultado + suma;
                        break;
                    case "mas":
                        
                        resultado = sueldo * 0.25;
                        resultado = resultado + suma;
                        break;
                }
            }
        }
    }else{
        if(tipo2 == "nacional"){
            if (tipo == "femenino") {
                switch (antiguedad) {
                    case "1a5":
                        resultado = sueldo * 0.25;
                        resultado = resultado + suma;
                        break;
                    case "6a10":
                        resultado = sueldo * 0.30;
                        resultado = resultado + suma;
                        break;
                    case "mas":
                        resultado = sueldo * 0.35;
                        resultado = resultado + suma;
                        break;
                }
            } else if(tipo == 'masculino'){
                switch(antiguedad){
                    case "1a5":
                        resultado = sueldo * 0.22;
                        resultado = resultado + suma;
                        break;
                    case "6a10":
                        resultado = sueldo * 0.27;
                        resultado = resultado + suma;
                        break;
                    case "mas":
                            resultado = sueldo * 0.32;
                            resultado = resultado + suma;
                        break;
                }
            }
        }else if(tipo2 == "extranjero"){
            if (tipo == "femenino") {
                switch (antiguedad) {
                    case "1a5":
                        resultado = sueldo * 0.20;
                        resultado = resultado + suma;
                        break;
                    case "6a10":
                        resultado = sueldo * 0.25;
                        resultado = resultado + suma;
                        break;
                    case "mas":
                        resultado = sueldo * 0.30;
                        resultado = resultado + suma;
                        break;
                }
            } else if(tipo == 'masculino'){
                switch(antiguedad){
                    case "1a5":
                        resultado = sueldo * 0.17;
                        resultado = resultado + suma;
                        break;
                    case "6a10":
                        resultado = sueldo * 0.22;
                        resultado = resultado + suma;
                        break;
                    case "mas":
                            resultado = sueldo * 0.27;
                            resultado = resultado + suma;
                        break;
                }
            }
        }
    }

    return resultado;
}



function limpiarFormulario(){
    $('#frmDatos')[0].reset();
}