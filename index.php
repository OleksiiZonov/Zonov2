<?php require 'connection.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="vendors/jquery-3.5.0.min.js"></script>
    <script src="ajax.js"></script>
</head>
<body>

    


    <form id="Form1">
        <p><b>Полученный доход с проката по состоянию на выбранную дату</b></p>
        <input type="date" name="earnings">
        <p>
            <input type="button" value="Выбрать" onclick="getEarnings();">
            <input type="button" value="Данные из LocalStorage" onclick="getLocal1(this);">
            <input type="button" value="Очистить" onclick="$('#result1').html('')">
        </p>
    </form>
    <ul id="result1"></ul>


    <form id="Form2">
        <p><b>Автомобили с пробегом меньше указанного</b></p>
        <input type="number" name="mileage">
        <p>
            <input type="button" value="Выбрать" onclick="getCars();">
            <input type="button" value="Данные из LocalStorage" onclick="getLocal2(this);">
            <input type="button" value="Очистить" onclick="$('#result2 tbody').html('')">
        </p>
    </form>
    <table id="result2">
        <thead>
            <tr>
                <th>Марка авто</th>
                <th>Пробег</th>
                <th>Год выпуска</th>
                <th>Состояние</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>

    <form id="Form3">
        <p><b>Имеющиеся в данном пункте марки автомобилей</b></p>
        <p>
            <input type="button" value="Вывести марки всех автомобилей" onclick="getModels();">
            <input type="button" value="Данные из LocalStorage" onclick="getLocal3(this);">
            <input type="button" value="Очистить" onclick="$('#result3').html('')">
        </p>
    </form>
    <ul id="result3"></ul>


   
</body>
</html>