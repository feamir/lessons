<html>

<head>
    <title>
        Космические пришельцы похищали меня - сообщение о похищении
    </title>
</head>
<body>
<h2>Космические пришельцы похищали меня - сообщение о похищении</h2>
<?php

$whenItHappened = $_POST["whenithappend"] ?? '';
$howLong = $_POST["howlong"] ?? '';
$alienDescription = $_POST['аliеndеsсriрtiОn'] ?? '';
$fangSpotted = $_POST['fangspotted'] ?? $fangSpotted = 'пусто';

$email = $_POST['email'] ?? '';

echo 'Спасибо за заполнение формы.<br/>';
echo 'Вы были похищены <b>' . $whenItHappened .'</b>';
echo ' и отсутствовали в течение <b>' . $howLong . '</b></br>';
echo 'Опишите их: <b>' . $alienDescription . '</b></br>';
echo 'Видели ли вы мою собаку Фэнга? <b>' . $fangSpotted . '</b></br>';
echo 'Ваш адрес электронной почты: <b>' . $email . '</b>';


echo '<input type="text" name="sdfdsf"/>';


?>


</body>
</html>