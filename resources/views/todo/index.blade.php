<head>
    <title>Todo</title>
    <!-- JavaScript Bundle with Popper -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-4 offset-4">
            <h1>title</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div id="app">
                <todo-list></todo-list>
            </div>
        </div>

        <div class="col-md-3 col-md-offset-1">
            doing
        </div>

        <div class="col-md-3 col-md-offset-1">
            done
        </div>
    </div>
</div>


<script src="js/app.js"></script>

</body>
