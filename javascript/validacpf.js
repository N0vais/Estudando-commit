function mascara_cpf() {

    var cpf = document.getElementById('cpfcnpj')

    if(cpfcnpj.value.length == 3 || cpfcnpj.value.length == 7) {
        cpfcnpj.value += "."        
        
    }else if(
        cpfcnpj.value.length == 11){
            cpfcnpj.value += '-'
           this.printMessage(input, errorMessage); 
        }
        
    }

    function mascara_telefone(){
        var tel =document.getElementById('telefone')

        if(telefone.value.length == 2  ){
            telefone.value += "("
        }else if(telefone.value.length == 5){
            telefone.value += ")"
        }else if(telefone.value.length == 11){
            telefone.value +="-"
        }
    }
     
    var state = false;

    function toggle(){
        
        if(state){
            document.getElementById("password").setAttribute("type","password");
            document.getElementById("olho");
            state = false;
        }else{
            document.getElementById("password").setAttribute("type","text");
            document.getElementById("olho");
            state = true;
        }
    }
    /*validação dos campos cpf e telefone ok*/