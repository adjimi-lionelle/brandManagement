
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toplists</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .brand {
            border: 1px solid #ddd;
            margin: 10px;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }
        .brand img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Toplists</h1>
        <div id="toplists">
            <!-- Contenu des toplists chargé dynamiquement depuis l'API -->
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            // Appeler l'API pour récupérer les données des marques
            $.get('/api/brands', function(data) {
                // Manipuler les données pour afficher les toplists
                data.forEach(function(brand) {
                    $('#toplists').append('<div class="brand">' +
                        '<h2>' + brand.brand_name + '</h2>' +
                        '<img src="' + brand.brand_image + '" alt="' + brand.brand_name + '">' +
                        '<p>Rating: ' + brand.rating + '</p>' +
                        '</div>');
                });
            });
        });
    </script>
</body>
</html>