<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/javascript.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"></script>
    <title>PHP - Clima</title>
</head>

<body>
    <form method="get" action="resposta.php">
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-light text-dark" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                                <div class="mb-md-5 mt-md-4 pb-5">

                                    <h1 class='mb-md-5 mt-md-3'>Defina o Clima<h1>


                                            <div class="optionbox">
                                                <select name="clima">
                                                    <option selected disabled>Escolha...</option>
                                                    <option id="sol" name="sol" value="1">Está sol</option>
                                                    <option id="shopping" name="shopping" value="2">Tempo fechado</option>
                                                    <option id="casa" name="casa" value="3">Está chovendo</option>
                                                </select>
                                            </div>



                                </div>
                                <button class="btn btn-outline-dark btn-lg px-5" type="submit" name="smtbt">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

</html>