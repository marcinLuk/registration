

let formValidation =  {

    checkIfIsvalid : function(input, format){
        if (input.value.match(format)){
            return true;
        } else {
            return false;
        }
    },

    dataIsCorrect : function(input) {
        // this.enableForm();
        input.style.backgroundColor = "rgba(0,0,0,0)";
        this.removeErrorMessage(input);
        
    },

    dataIsIncorrect : function(input, erorrMessage){
        // this.disableForm();
        input.style.backgroundColor = "rgba(220,53,69,.25)";
        this.displayErrorMessage(input, erorrMessage);
    },

    displayErrorMessage : function(input, message){
        input.nextElementSibling.innerHTML = message;
    },

    removeErrorMessage : function(input){
        input.nextElementSibling.innerHTML = "";
    },

    disableForm : function() {
        jQuery('form button').prop('disabled', true);
    },

    enableForm : function() {
        jQuery('form button').prop('disabled', false);
    },

    checkEmail : function(email) {
        let emailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/ ;
        if(this.checkIfIsvalid(email , emailFormat)) {
            this.dataIsCorrect(email);
            return true;
        } else {
            this.dataIsIncorrect(email, "email is incorrect");
            return false;
        }
    },

    checkName : function(name) {
        let nameFormat = /^[a-zA-Z1-9 ]{2,20}$/ ;
        if(this.checkIfIsvalid(name , nameFormat)) {
            this.dataIsCorrect(name);
            return true;
        } else {
            this.dataIsIncorrect(name, "name is incorrect");
        }
    },

    checkPass : function(pass) {
        let passFormat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/ ;
        if(this.checkIfIsvalid(pass , passFormat)) {
            this.dataIsCorrect(pass);
            return true;
        } else {
            this.dataIsIncorrect(pass, "password is incorrect");
        }
    },

    checkIfPasswordIsTheSame : function (pass1, pass2) {
        if(pass1[0].value === pass2.value) {
            this.dataIsCorrect(pass2);
            return true;
        } else {
            this.dataIsIncorrect(pass2, "both password are diffrent");
        }
    },

    validateForm : function( obj ) {
        if (this.checkIfAllIsTrue(obj)) {
            this.enableForm();
        } else {
            this.disableForm();
        }
    },

    checkIfAllIsTrue: function (obj) {
       if(Object.values(obj).every(item => item === true)) {
           return true;
       } else {
           return false;
       }
    },

}

