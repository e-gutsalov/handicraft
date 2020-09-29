<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" href="../css/bootstrap.css" rel="stylesheet">
    <link type="text/css" href="../css/bootstrap-theme.css" rel="stylesheet">
    <link type="text/css" href="../css/style.css" rel="stylesheet">
    <script type="text/javascript" src="../js/jquery-3.5.0.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/vue.js"></script>
    <title>Wanna Buy</title>
</head>
<body>

<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img alt="Wanna Buy" src="...">
                </a>
            </div>
            <div class="container">
                <ul class="nav navbar-nav">
                    <li class=""><a href="index.html">Главная</a></li>
                    <li class="active"><a href="#">Поиск<span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Документация</a></li>
                    <li><a href="download.html">Загрузка</a></li>
                    <li><a href="#">О нас</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="jumbotron">
    <div class="container">
        <p>WannaBuy инновационный сервис для поиска и покупки товаров по самой низкой цене</p>
        <p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Узнать о проекте
                <span class="glyphicon glyphicon-info-sign" aria-hidden="true"> </span>
            </a>
        </p>
    </div>
</div>

<div class="container-fluid">
    <div class="col-md-6 col-md-offset-3">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Поиск товара...">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button">Найти
                    <span class="glyphicon glyphicon-search" aria-hidden="true"> </span>
                </button>
              </span>
        </div>
    </div>
</div>



<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div class="list-group">
                <a href="#" class="list-group-item">Dapibus ac facilisis in<div class="switch-btn"></div></a>
                <button type="button" class="list-group-item">Телевизор Samsung</button>
                <button type="button" class="list-group-item">Телевизор LG</button>
                <button type="button" class="list-group-item">Телевизор Sony</button>
                <button type="button" class="list-group-item">Телевизор Philips</button>
                <button type="button" class="list-group-item">Телевизор Panasonic</button>
            </div>
        </div>

        <br>

        <div class="col-md-8">
            <table class="table">
                <tr>
                    <th>Наименование товара</th>
                    <th>Цена</th>
                    <th>График изменения цены</th>
                    <th>Пометить как не прочитанное</th>
                </tr>
                <tr id="app" v-bind:class="styleCSS">
                    <td>{{message}}</td>
                    <td>{{price}}</td>
                    <td>
                        <form action="#" method="GET">
                            <input type="hidden" name="mark_read" value="">
                            <input v-on:click="styleCSS='success'" type="button" class="btn btn-success" value="Посмотреть">
                        </form>
                    </td>
                    <td>
                        <form action="#" method="GET">
                            <input type="hidden" name="mark_unread" value="">
                            <input v-on:click="styleCSS=''" type="button" class="btn btn-danger" value="Следить за ценой">
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <p>&copy; 2019 Company, Inc.</p>
    </div>
</footer>

<script>

    $('.switch-btn').click(function(){
        $(this).toggleClass('switch-on');
    });

    let app = new Vue({
        el: '#app',
        data: {
            message: 'Телевизор',
            price: '25000',
            styleCSS: '',
            btn: 'switch-btn'
        },
        methods: {
        }
    });
</script>

</body>
</html>