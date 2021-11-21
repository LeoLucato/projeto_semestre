
<html>

<head>
    <title>UniSexy | Produtos</title>
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

    <div id="produtos" class="container py-5">
        <div class="container">
            <div class="row">
    <?php
        
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $db = "sexshop";
        
        $conn = mysqli_connect($servidor, $usuario, $senha, $db);
         mysqli_set_charset($conn , 'utf8');
        
        if (!$conn){
            die();
        }
        
        $sql = "SELECT * FROM produtos";
        $resultados = mysqli_query($conn, $sql);
        
        while ($linha = mysqli_fetch_assoc($resultados))
        {
            echo "<div class='col-sm-4'><div class='card mb-4'>
                     <img class='card-img-top' src='../imagens/$linha[imagem]' style='width:100%'>
                        <div class='card-body'>
                            <h5 class='card-title'>$linha[nome]</h5>
                            <h6 class='card-subtitle mb-2 text-muted'>R$$linha[preco]</h6>
                            <!-- <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href='#' class='card-link'>Card link</a>
                            <a href='#' class='card-link'>Another link</a> -->
                        </div> 
                    </div>
                </div>";
            
        }
        ?>
    
        </div>
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

        //Desce a página suavemente até a div produtos usando JQuery
        $(function(){
            $('html, body').animate({
                scrollTop: $('#produtos').offset().top
            }, 1500);
            return false;
        });
    </script>
</body>

</html>