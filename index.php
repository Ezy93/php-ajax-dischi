<!-- Descrizione:

    Stampare a schermo una decina di dischi musicali (vedi screenshot). Utilizzare: Html, CSS, VueJS, axios, PHP

    Prima Milestone:
    Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.

    Seconda Milestone:
    Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.

    Bonus:
    Attraverso un’altra chiamata api, filtrare gli album per genere 
-->

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- import di vuejs -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <title>php-ajax-dischi</title>
</head>
<body>
    <?php include __DIR__.'/partials/header.php' ?>
    <?php include __DIR__.'/partials/main.php' ?>
    

    <!-- importato file js -->
    <script src="js/script.js"></script>
    <!-- import di axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</body>
</html>
