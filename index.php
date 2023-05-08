<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>

    <!-- Vue js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="bg-success">
    <div id="app">
        <div class="container">
            <h1 class="my-4 text-center">Albums List</h1>
            <div class="row row-cols-3 justify-content-center">
                <div class="col" v-for="(disco,index) in dischi" :key="index">
                    <div class="m-4 p-4 card text-center bg-secondary">
                        <img class="card-img-top p-3" :src="disco.poster" alt="">
                        <div class="card-body">

                            <div class="fw-bold fs-5">{{disco.title}}</div>
                            <div class="mb-1">{{disco.author}}</div>
                            <div class="fw-semibold fs-5">{{disco.year}}</div>
                        </div>

                    </div>

                </div>
            </div>
        </div>


        <script src="js/script.js"></script>
</body>

</html>