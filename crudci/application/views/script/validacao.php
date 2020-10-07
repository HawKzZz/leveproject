<script>

    function formatar(mascara, documento){
        var i = documento.value.length;
        var saida = mascara.substring(0,1);
        var texto = mascara.substring(i);        
        
        if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
        }
    
    }

    function toTitleCase(documento) {
        documento.value = str.toLowerCase().replace(/(?:^|\s)\w/g, function(match) {
            return match.toUpperCase();
        });
    }

    function validateForm() {

        var a = document.forms["myForm"]["nome"].value;
        var b = document.forms["myForm"]["telefone"].value;
        var c = document.forms["myForm"]["cpf"].value;   

        if(valida(a)){
            alert("Nome esta incorreto");
            return false;
        }

        if (!validarCPF(c)) {
            alert("CPF esta incorreto");
            return false;
        }

        if(!isValidPhone(b)){
            alert("Telefone esta incorreto");
            return false;
        }

    }

    function isValidPhone (phone){
        const brazilianPhoneRegex = /^\(\d{2}\) \d{4,5}-\d{4}$/gi;
        return brazilianPhoneRegex.test(phone);
    }

    function valida(nome){
        return !!nome.match(/[A-Z] [a-z]/);
    }       

    function validarCPF(cpf) {	
        cpf = cpf.replace(/[^\d]+/g,'');	
        if(cpf == '') return false;	
        // Elimina CPFs invalidos conhecidos	
        if (cpf.length != 11 || 
            cpf == "00000000000" || 
            cpf == "11111111111" || 
            cpf == "22222222222" || 
            cpf == "33333333333" || 
            cpf == "44444444444" || 
            cpf == "55555555555" || 
            cpf == "66666666666" || 
            cpf == "77777777777" || 
            cpf == "88888888888" || 
            cpf == "99999999999")
                return false;		
        // Valida 1o digito	
        add = 0;	
        for (i=0; i < 9; i ++)		
            add += parseInt(cpf.charAt(i)) * (10 - i);	
            rev = 11 - (add % 11);	
            if (rev == 10 || rev == 11)		
                rev = 0;	
            if (rev != parseInt(cpf.charAt(9)))		
                return false;		
        // Valida 2o digito	
        add = 0;	
        for (i = 0; i < 10; i ++)		
            add += parseInt(cpf.charAt(i)) * (11 - i);	
        rev = 11 - (add % 11);	
        if (rev == 10 || rev == 11)	
            rev = 0;	
        if (rev != parseInt(cpf.charAt(10)))
            return false;		
        return true;   
}


</script>
    

    
    
