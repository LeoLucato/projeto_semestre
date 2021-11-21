
<html>

<head>
    <title>UniSexy | Contatos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,700' rel='stylesheet' type='text/css'>
    <link href='../css/custom.css' rel='stylesheet' type='text/css'>
</head>

<body>
    
    <?php
        include "../componentes/menu.php";
        include "../componentes/fullscreencarousel.php"
    ?>

    <div id="contatos" class="container text-center border border-secondary mt-5 mb-5 p-4">
        <div class="form-group" style="width: 50%; margin: 0 auto;">
             <form>
                <p>Nome completo: <input class="form-control" type='text' name="nome" required></p>
                <p>E-mail: <input class="form-control" type="email" name="email" required></p>
                <p>Data de Nascimento: <input class="form-control" type="date" name = 'nascimento' value ='data de nascimento' required></p> 
                <p>Recado: </p>
                <textarea class="form-control" name='recado' required></textarea><br>
                <input type="submit" class="btn btn-primary btn-block">       
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
        //Isso faz o carrosel passar de slide ao deslizar o dedo pro lado em dispositivos moveis
        var touchSensitivity = 5;
        $(".carousel").on("touchstart", function (event) {
            var xClick = event.originalEvent.touches[0].pageX;
            $(this).one("touchmove", function (event) {
                var xMove = event.originalEvent.touches[0].pageX;
                if (Math.floor(xClick - xMove) > touchSensitivity) {
                    $(this).carousel('next');
                } else if (Math.floor(xClick - xMove) < -(touchSensitivity)) {
                    $(this).carousel('prev');
                }
            });
            $(".carousel").on("touchend", function () {
                $(this).off("touchmove");
            });
        });

         //Desce a página suavemente até a div contatos produtos usando JQuery
         $(function(){
            $('html, body').animate({
                scrollTop: $('#contatos').offset().top
            }, 1500);
            return false;
        });
    </script>
</body>

</html>