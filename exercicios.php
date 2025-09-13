<?php
$title = "Exercicios";
$h2Header = "Visualização de Exercicio";
include('include/head.php');
?>
<link rel="stylesheet" href="css/exercicios.css">
</head>

<body>
    <?php
        include('include/header.php'); 
        include ('include/breadcrumb.php');
    ?>
    <main>
        <section>
            <div class="container">
                <div class="conteudo">
                    <?php include ('include/conteudo.php')?>
                </div>
            </div>
        </section>
    </main>
    <?php
    include('include/footer.php')
        ?>

</body>