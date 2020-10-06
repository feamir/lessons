<?php
require_once 'report.php';

?>


<p>Расскажите историю О похищении вас космическими пришельцами </p>

<form action="report.php" method="post">;
    <label fоr="firstnате">Имя:</label>
    <input type="text" id="firstname" name="firstname" /><br />
    <label for=" lastname" >Фамилия: </label>
    <input type="text" id=" lastname" name=" lastname" /><br />
    <label fоr="еmаil">Ваш адрес электронной почты:</label>
    <input type="text" id=" email" name=" email" /><br />
    <label fоr="whеnithарреnd">когда это произошло?</label>
        <input type="text" id=" whenithappend" name="whenithappend" /><br />
        <label for="howlong">KaK долго ВЫ отсутствовали?</label>
            <input type="text" id=" howlong" name=" howlong" /><br />
            <label fоr="hоwmаnу">Сколько их было?</label>
                <input type"text" id=" howmany" name=" howmany" /><br />
                <label for=" аliеndеsсriрtiоn">Опишите их:</label>
                    <input type="text" id="aliendescription" name="аliеndеsсriрtiОn" size="З2" /><br />
                    <label fоr="whаtthеуdid">Что они делали с вами?</label>
                        <input type="text" id="whattheydid" name="whattheydid" size="З2" /><br />
                        <label fоr="fаngsроttеd">Видели ли ВЫ мою собаку Фэнга?</label>
                            Да <input id="fangspotted" name="fangspotted" type="radio" value="yes"/>
                            Нет <input id="fangspotted" name="fangspotted" type="radio" value="no"/><br />
                            <img src="img/haski-glavna.jpg" width="100" height="175"
                                 alt="Моя похишенная собака Фэнг.">
                            <label fоr="оthеr">Дополнительная информация:</label>
                                <textarea id=" other" name=" other" /></textarea><br />
    <input type="submit" value="Сообщение о похищении" name="submit">
                                </form>
