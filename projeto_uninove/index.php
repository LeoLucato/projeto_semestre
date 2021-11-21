
<html>

<head>
    <title>UniSexy</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,700' rel='stylesheet' type='text/css'>
    <link href='css/custom.css' rel='stylesheet' type='text/css'>
</head>

<body>
    <?php
        include "componentes/menu.php";
        include "componentes/fullscreencarousel.php"
    ?>

    <div class="container py-5 text-center">
        <h2>Conheça o interior da nossa loja</h2>
        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!4v1549659615962!6m8!1m7!1sCAoSLEFGMVFpcE5MQzk1NjhjcUdZZ3pQamRNckZPdUVhajV3Mlk4UWlhbDN2NFhz!2m2!1d52.5235145467688!2d13.4012026775124!3f189.51!4f6.3700000000000045!5f1.6084321400865393" width="100%" height="500" frameborder="0" style="border: 0;" allowfullscreen=""></iframe>
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
    </script>
</body>

</html>