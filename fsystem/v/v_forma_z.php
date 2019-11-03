



<form  method="POST">
            <p>Пожалуйста, заполните форму c вашем именем и телефоном чтобы оформить заказ</p>
            <fieldset>
            <legend>Контактная информация</legend>
            <label for = "givenname">Имя</label>
            <input type="text" name="givenname"><br>
            <label for = "telephone">Телефон</label>
            <input type="text"  name="telephone"><br>
            <label for = "col">Количества товара числом</label>
            <input type="text" name="col">
            </fieldset>
            <p><input type = "submit" name="by" value = "Оформить заказ"></p>
            </form>
            <?=$produkt->Product_one();
    
?>