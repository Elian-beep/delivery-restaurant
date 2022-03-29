// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})()

//Script para validação de campos multilpos para a senha
function validar(){
    var senha = formclient.senha.value;                             //Pegando o valor digitado no campo "senha"
    var rep_senha = formclient.rep_senha.value;                     

    if(senha != rep_senha){
        alert('Senhas diferentes');
        rep_senha
        return false;
    }
}

//Script para alterar a visibilidade do campo de senha
const senha = document.querySelector('.pass-visibility');           //identifica os campos que serão manipulados
const rep_senha = document.querySelector('.rep-pass-visibility');  
btn = document.querySelector('.btn-visibility');                    //Identifica o elemento que será o botão para manipular

btn.onclick = () =>{
    if(senha.type == 'password' && rep_senha.type == 'password'){   //Se os campos estiverem em formato de senha
        senha.type = 'text';                                        //Mudar os campos para o formato de texto
        rep_senha.type = 'text';
        btn.src = "../../assets/eye-open.png";
    }else{                                                          //Se os campos estiverem em formato de texto    
        senha.type = 'password';                                    //Mudar os campos para o formato de senha
        rep_senha.type = 'password';
        btn.src = "../../assets/eye-close.png";
    }
}

