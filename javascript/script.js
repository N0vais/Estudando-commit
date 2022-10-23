class Validator {
    constructor() {
        this.validations = [
            'data-required',
            'data-min-length',
            'data-max-length',
            'data-email-validate',
            'data-only-letters',
            'data-equal',
            'data-password-validate',
            'data-checkbox',
        ]
    }

    // validaçao dos campos
    validate(form) {
        //buscar validaçoes
        let curretValidations = document.querySelectorAll('form .error-validation');

        if (curretValidations.length > 0) {
            this.cleanValidations(curretValidations);
        }

        //pegar os inputs
        let inputs = form.getElementsByTagName('input');

        //trasformar htmlcolection em ->array
        let inputsArray = [...inputs];

        //loop e validaçao dos campos
        inputsArray.forEach(function (input) {

            //loop nas validaçoes  
            for (let i = 0; this.validations.length > i; i++) {
                if (input.getAttribute(this.validations[i]) != null) {

                    //data-min-length ->minlength
                    let method = this.validations[i].replace('data-', '').replace('-', '');

                    //valor do input
                    let value = input.getAttribute(this.validations[i]);

                    //invoca o metodo
                    this[method](input, value);
                }
            }
        }, this);
    }

    //verifica os caracteres minimos 
    minlength(input, minValue) {

        let inputLength = input.value.length;

        let errorMessage = `O campo precisa ter pelo menos ${minValue} caracteres !`;
        if (inputLength < minValue) {
            this.printMessage(input, errorMessage);
        }
    }
    //verificaçao maxima de caracteres
    maxlength(input, maxValue) {

        let inputLength = input.value.length;

        let errorMessage = `O campo precisa ter menos que ${maxValue} caracteres !`;
        if (inputLength > maxValue) {
            this.printMessage(input, errorMessage);
        }
    }

    //validaçao de email
    emailvalidate(input) {

        let re = /\S+@\S+\.\S+/;

        let email = input.value;

        let errorMessage = `Insira um email valido !`;

        if (!re.test(email)) {
            this.printMessage(input, errorMessage);
        }
    }
    //validaçao de caracteres
    onlyletters(input) {

        let re = /^[A-Za-z]+$/;

        let inputValue = input.value;

        let errorMessage = `Esse campo so aceita letras !`;

        if (!re.test(inputValue)) {
            this.printMessage(input, errorMessage);
        }

    }
    //metodo usado para imprimir mensagen de erro na tela para o usuario
    printMessage(input, msg) {

        //ferificaçao de error
        let errorsQty = input.parentNode.querySelector('.error-validation');

        if (errorsQty === null) {

            let templete = document.querySelector('.error-validation').cloneNode(true);

            templete.textContent = msg;

            let inputParent = input.parentNode;

            templete.classList.remove('templete');

            inputParent.appendChild(templete);
        }
    }
    //verifica o campo que nao pode ser vazio
    required(input) {

        let inputValue = input.value;

        if (inputValue === '') {
            let errorMessage = `Este campo é obrigatorio !`;

            this.printMessage(input, errorMessage);
        }
    }
    //verifica a igualdade dos caracteres digitados no password
    equal(input, inputName) {

        let inputToCompare = document.getElementsByName(inputName)[0];

        let errorMessage = `Este campo precisa estar igual ao ${inputName} !`;

        if (input.value != inputToCompare.value) {
            this.printMessage(input, errorMessage);
        }
    }
    //valida senha
    passwordvalidate(input) {
        //transforma string em array
        let charArr = input.value.split("");
        let uppercases = 0;
        let numbers = 0;
        for (let i = 0; charArr.length > i; i++) {
            if (charArr[i] === charArr[i].toUpperCase() && isNaN(parseInt(charArr[i]))) {
                uppercases++;
            } else if (!isNaN(parseInt(charArr[i]))) {
                numbers++;
            }
        }
        if (uppercases === 0 || numbers === 0) {
            let errorMessage = `A senha precisa de um caracter maiuscula e de um numero !`;
            this.printMessage(input, errorMessage);
        }
    }
    //checando o check box
    checkbox(input) {

        let checkbox = document.getElementById('agreement');

        let errorMessage = `È preciso aceitar os termos !!`;

        if (checkbox.checked) {
            ////////////////////////////////////////////////
        } else {
            /////////////////////////////////////
            this.printMessage(input, errorMessage);
        }
    }
    //limpando as validaçoes da tela
    cleanValidations(validations) {
        validations.forEach(el => el.remove());
    }
}
let form = document.getElementById("register-form");
let submit = document.getElementById("btn-submit");
let validator = new Validator();
//evento que dispara as validaçoes
submit.addEventListener('click', function (e) {
    e.preventDefault();
    validator.validate(form);
});
/*VALIDAÇAO DOS CAMPOS ESTAO OK */