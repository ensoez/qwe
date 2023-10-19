<?php
// Обработка отправки формы


if (isset($_POST['saveForm'])) {
    // Оповещение об успешном сохранении
    $notification = 'Данные успешно сохранены';
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ-панель</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .admin-panel {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        .notification {
            margin-top: 16px;
            padding: 8px;
            background-color: #4caf50;
            color: #fff;
            border-radius: 4px;
        }
        
        .cancel-btn, .page-btn, [type="submit"] {
            display: inline-block;
            padding: 8px 16px;
            margin: 8px 0px;
            border: none;
            text-decoration: none;
            font-size: 14px;
            cursor: pointer;
            border-radius: 4px;
            color: #fff;
            transition: background-color 0.3s ease;
        }

        [type="submit"] {
            background-color: #4caf50;
        }
       .cancel-btn {
            background-color: #e74c3c;
        }

    </style>
</head>
<body>

<div class="admin-panel">
    <h2>Админ-панель</h2>

    <?php if (isset($notification)): ?>
        <div class="notification"><?= $notification ?></div>
    <?php endif; ?>

    <form action="#" method="post">
        
        <label>Заголовок страницы</label>
        <input type="text" name="pageTitle" required value="<?= htmlspecialchars($data['pageTitle']) ?>"><br>

        <label>Оглавление</label>
        <input type="text" name="pageIntroduction" required value="<?= htmlspecialchars($data['pageIntroduction']) ?>"><br>

        <label>Вступление/описание</label>
        <input type="text" name="pageDescription" required value="<?= htmlspecialchars($data['pageDescription']) ?>"><br>

        <label>Изменение почты</label>
        <input type="text" name="sendMail" required value="<?= htmlspecialchars($data['sendMail']) ?>"><br>

        <label>Изменение номера телефона</label>
        <input type="text" name="phoneNumber" required value="<?= htmlspecialchars($data['phoneNumber']) ?>"><br>

        <label>Заголовок моей истории</label>
        <input type="text" name="TitleHistory" required value="<?= htmlspecialchars($data['TitleHistory']) ?>"><br>

        <label>История</label>
        <input type="text" name="seo" required value="<?= htmlspecialchars($data['seo']) ?>"><br>

        <label>Часто задаваемый вопрос 1</label>
        <input type="text" name="question1" required value="<?= htmlspecialchars($data['question1']) ?>"><br>

        <label>Ответ на часто задаваемый вопрос 1</label>
        <input type="text" name="answer1" required value="<?= htmlspecialchars($data['answer1']) ?>"><br>

        <label>Часто задаваемый вопрос 2</label>
        <input type="text" name="question2" required value="<?= htmlspecialchars($data['question2']) ?>"><br>

        <label>Ответ на часто задаваемый вопрос 2</label>
        <input type="text" name="answer2" required value="<?= htmlspecialchars($data['answer2']) ?>"><br>

        <label>Часто задаваемый вопрос 3</label>
        <input type="text" name="question3" required value="<?= htmlspecialchars($data['question3']) ?>"><br>

        <label>Ответ на часто задаваемый вопрос 3</label>
        <input type="text" name="answer3" required value="<?= htmlspecialchars($data['answer3']) ?>"><br>

        <label>Название 1 торта</label>
        <input type="text" name="Name1" required value="<?= htmlspecialchars($data['Name1']) ?>"><br>

        <label>Цена 1 торта</label>
        <input type="text" name="price1" required value="<?= htmlspecialchars($data['price1']) ?>"><br>

        <label>Название 2 торта</label>
        <input type="text" name="Name2" required value="<?= htmlspecialchars($data['Name2']) ?>"><br>

        <label>Цена 2 торта</label>
        <input type="text" name="price2" required value="<?= htmlspecialchars($data['price2']) ?>"><br>

        <label>Название 3 торта</label>
        <input type="text" name="Name3" required value="<?= htmlspecialchars($data['Name3']) ?>"><br>

        <label>Цена 3 торта</label>
        <input type="text" name="price3" required value="<?= htmlspecialchars($data['price3']) ?>"><br>

        <label>Название 4 торта</label>
        <input type="text" name="Name4" required value="<?= htmlspecialchars($data['Name4']) ?>"><br>

        <label>Цена 4 торта</label>
        <input type="text" name="price4" required value="<?= htmlspecialchars($data['price4']) ?>"><br>

        <input type="submit" name="saveForm" value="Сохранить">
        
        <a href="template/logout.php" class="cancel-btn">Выйти</a>
    

   </form>
    
</div>
</body>
</html> 


