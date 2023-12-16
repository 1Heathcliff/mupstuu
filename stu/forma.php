!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/style.css">
    <title>MUP_STU</title>
</head>
<body>
  <h2>Форма обратной связи на PHP</h2>
  <!--Данные введенные пользователем обрабатываются кодом в mail.php-->
  <form action="./mail.php" method="post">
  <!--Тег используется для группировки связанных элементов в форме-->
  <fieldset>
  <!--Тег задает заголовок для групповых элементов-->
  <legend>Оставьте сообщение:</legend>
  Ваше имя:
  <!--Устанавливает однострочное текстовое поле ввода:-->
  <input type="text" name="name">
  <!--Используется для полей ввода, которые должны содержать адрес электронной почты.-->
  E-mail:
  <input type="text" name="email">
  Номер телефона:
  <input type="text" name="phone">
  Сообщение:
  <!--Тег разрешает многострочный ввод текста.-->
  Текстовая область может содержать неограниченное количество символов
  <textarea rows="10" cols="45" name="message"></textarea>
  <!--Устанавливает кнопку для отправки данных формы в обработчик формы.-->
  <input type="submit" value="Отправить сообщение">
  </fieldset>
  </form>
</body>
</html>