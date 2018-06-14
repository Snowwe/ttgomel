<!-- проверка формы. Начало -->
    function checkForm(form) {
        var name = form.name.value;
        var n = name.match(/^[A-Za-zА-Яа-я ]*[A-Za-zА-Яа-я ]+$/);
        if (!n) {
            alert("Имя введено неверно, пожалуйста исправьте ошибку");
            return false;
        }
        var phone = form.phone.value;
        var p = phone.match(/^[0-9+][0-9- ]*[0-9- ]+$/);
        if (!p) {
            alert("Телефон введен неверно");
            return false;
        }
        var mail = form.mail.value;
        var m = mail.match(/^[A-Za-z0-9][A-Za-z0-9\._-]*[A-Za-z0-9_]*@([A-Za-z0-9]+([A-Za-z0-9-]*[A-Za-z0-9]+)*\.)+[A-Za-z]+$/);
        if (!m) {
            alert("E-mail введен неверно, пожалуйста исправьте ошибку");
            return false;
        }
        return true;
}
<!-- проверка формы. Конец -->