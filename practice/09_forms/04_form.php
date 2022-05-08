<html lang="ru">
    <body>
        <form action="/form.php" method="POST">
            <p>Введите имя:<br>
                <input type="text" name="firstname" />
            </p>
            <p>Форма обучения: <br>
                <input type="radio" name="eduform" value="очно" />очно <br>
                <input type="radio" name="eduform" value="заочно" />заочно
            </p>
            <p>Требуется общежитие:<br>
                <input type="checkbox" name="hostel" />Да
            </p>
            <p>Выберите курсы: <br>
                <select name="courses[]">
                    <option value="ASP.NET">ASP.NET</option>
                    <option value="PHP">PHP</option>
                    <option value="Ruby">RUBY</option>
                </select>
            </p>
            <p>Краткий комментарий: <br>
                <textarea name="comment" maxlength="200"></textarea>
            </p>
            <input type="submit" value="Отправить">
        </form>
    </body>
</html>

