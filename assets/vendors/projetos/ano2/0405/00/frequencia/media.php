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
  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-light text-dark" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
              <h2 class="card-title p-2">Sua frequência está na Média!</h2>
              
              <h4 class="card-text">Tente melhorar a sua frequência nas aulas!</p>
                <div class="card-text p-5">
                  <div class="flex-column ps-2">
                    <h4 class="card-text">
                      Nome: <?php echo $nome?>
                    </h4>
                  </div>
                  <div class="flex-column py-2">
                    <h4 class="card-text">
                      Frequência: <?php echo $freq?>
                    </h4>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>