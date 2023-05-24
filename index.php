<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi json</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div id="app">
    <div style="background-color: #1D2D3C;">

        <div class="d-flex justify-content-center flex-wrap  ">
            <botton v-for="(elem,index) in data" key="index" class="card mario" type="button" data-bs-toggle="modal" :data-bs-target="`#${index}`">
                <img :src="elem.poster" class="card-img-top giuseppe " :alt="elem.title">
                <div class="card-body">
                    <h3 class="card-text">{{elem.title}}</h3>
                    <h4 class="card-text">{{elem.author}}</h4>
                    <p class="card-text">{{elem.genre}}</p>
                </div>

                <div class="modal fade" :id="index" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">{{elem.title}}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                            <img :src="elem.poster" class="card-img-top giuseppe " :alt="elem.title">
                        <div class="card-body">
                            <h3 class="card-text">{{elem.title}}</h3>
                            <h4 class="card-text">{{elem.author}}</h4>
                            <p class="card-text">{{elem.genre}}</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </botton>
        </div>


    </div>
</div>




<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="main.js"></script>
</body>
</html>