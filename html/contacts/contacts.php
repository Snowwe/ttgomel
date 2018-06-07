<link rel="stylesheet" href="../../css/contactStyle.css">

<section class="contact">

    <div class="ourContact">
        <h2>Наши контакты</h2>
        <hr>
        <div class="contactAddressContact">
            <img src="../images/footer/footer_adr.png" alt="">
            г.Гомель, ул.Рабочая, 22
        </div>
        <div class="contactTelContact">
            <img src="../images/footer/footer_tel.png" alt="" class="imgTelContact">
            <p>+375 29 7301032</p>
            <p>+375 232 591376</p>
            <p>Ст.тренер: Шутов</p>
            <p>Андрей Васильевич</p>
        </div>

        <div class="contactEmailContact">
            <img src="../images/footer/footer_mail.png" alt="">
            andrey_shutov@mail.ru
        </div>

    </div>
    <div class="payMe">
        <h3>Благотворительный расчетный счет</h3>
        <p> Р/счет № BY89 BPSB 3135 1416 9701 5933 0000 </p>
        <p>ОАО «БПС-Сбербанк» БИК BPSBBY2X</p>
        <p>г. Гомель, ул.Крестьянская, 29</p>
        <p>УНП 490426860</p>
        <p>настольный теннис</p>
    </div>

    <div class="feedback">
        <form method="post" action="http://ttgomel/html/contacts/mail.php" onSubmit="return checkForm(this)">

            <!--            <div class="left">-->
            <label for="name">Имя:</label>
            <input maxlength="30" type="text" name="name"/>

            <label for="phone">Телефон:</label>
            <input maxlength="30" type="tel" name="phone"/>

            <label for="mail">E-mail:</label>
            <input maxlength="30" type="email" name="mail"/>
            <!--            </div>-->
            <!---->
            <!--            <div class="right">-->
            <label for="message">Сообщение:</label>
            <textarea rows="7" cols="50" name="message"></textarea>

            <input type="submit" value="Отправить"/>
            <!--            </div>-->

        </form>
    </div>
    <h3>Расположение клуба</h3>
    <div class="mapClub">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3017.9228323565535!2d30.974184192372476!3d52.45121551076519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46d469bec1d7aecb%3A0xe40ddf4750249a9!2z0JfQsNC7INC90LDRgdGC0L7Qu9GM0L3QvtCz0L4g0YLQtdC90L3QuNGB0LAg0KHQmiAi0JPQvtC80YHQtdC70YzQvNCw0Ygi!5e0!3m2!1sru!2sru!4v1528393712938"
                width="100%" height="380" frameborder="2px " allowfullscreen></iframe>


        <!-- проверка формы. Начало -->
        <script>
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
                // var mail = form.mail.value;
                // var m = mail.match(/^[A-Za-z0-9][A-Za-z0-9\._-]*[A-Za-z0-9_]*@([A-Za-z0-9]+([A-Za-z0-9-]*[A-Za-z0-9]+)*\.)+[A-Za-z]+$/);
                // if (!m) {
                //     alert("E-mail введен неверно, пожалуйста исправьте ошибку");
                //     return false;
                // }
                return true;
            }
        </script>
        <!-- проверка формы. Конец -->
</section>

