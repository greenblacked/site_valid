function validateUserName(value) {
    var regex = /^([A-Z]{1})+\w+/;
    if(regex.test(value)){
        return true;
    }else{
        alert("Пожалуйста введите имя.Имя должно начинаться с заглавной буквы!");
        return false;
    }
}

function validateUserPassword(value) {
    var regex = /(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z!@#$%^&*]{6,}/;
    if (regex.test(value)){
        return true;
    }else{
        alert("Пароль должен содержать хотя бы одно число" +
            "Пароль должен содержать хотя бы одну букву" + "Пароль должен содержать хотя бы одну латинскую букву в нижнем регистре" +
            "Пароль должен содержать хотя бы одну букву" + "Пароль должен содержать хотя бы одну латинскую букву в верхнем регистре" +
            "Пароль должен состоять не менее, чем из 6 вышеупомянутых символов")
    }

}

function validatePhone(value) {
    var regex = /([+][0-9]{12})/;
    var error = document.getElementById('phone_error');
    if(regex.test(value)){
        return true;
    }else{
        alert("Введите коретный номер телефона в формате +380xxxxxxxxx");
        return false;
    }
}

function validateEmail(value) {
    var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(regex.test(value)){
        return true;
    }else{
        alert("Введите коректный email!");
        return false;
    }
}

function onSubmit(form) {
    var name  = form.name.value;
    var phone = form.phone.value;
    var email = form.email.value;


    if(form.agree.checked){
        if(name === '' || phone === '' || email === ''){
            alert("Все поля должны быть заполнены!");
            return false;
        }else{
            if(validateEmail(email) === true && validatePhone(phone) === true && validateUserName(name)){
                return true;
            }else{
                return false;
            }
        }
    }else{
        alert("Вы не согласились с правилами!");
        return false;
    }
}