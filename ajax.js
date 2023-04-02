// + ожидать загрузки страницы
// + найти форму
// + повешаем обработчик события отправки формы
// + убираем действие по умолчанию
    // + пишем отправку
    // + отправка запроса fetch
        // + получить ответ
        // + преобразовать ответ
    // + формируем formData
    // + отправить в теле запроса
    // полученные данные разместить на странице
    // получить место размещения

document.addEventListener("DOMContentLoaded", function () {

    let form = document.querySelector('#numberForm');

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        // fetch("handler.php").then(function (response) {
        //     response.text().then(function (text) {
        //         alert(text);
        //     });
        //     // response.json();
        // });

        let data = new FormData(form);

        fetch("handler.php", {
            body: data,
            // method: "GET"
            method: "POST"
        }).then(function (response) {
            response.text().then(function (text) {
                // alert(text);
                // console.log(text.age);
                // console.log(text.name);
                // let span = document.querySelector("#result");
                // span.innerHTML = text;
            });
            // response.json();
        });
    });





});