<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        let phi = {
            name : 'Phi',
            age: 18
        }

        let jsonString = `
            {
                "name" : "PHi",
                "age"  : 18
            }
        `;

        jsonString = JSON.parse(jsonString);

        console.log( jsonString.name );


        //JSON: Javascript Object Notation
    </script>

    <?php
    
            $json = '
                {
                    "name" : "PHi",
                    "age"  : 18
                }
            ';
    ?>



</body>
</html>