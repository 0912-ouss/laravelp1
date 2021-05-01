<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <form class="form" action="" method="GET">
    
        <a href="AjMod" id="aj"> Ajouter une detali</a>

    <ul>
        <li>
            <p>Designation</p>
            <p>Unite</p>
            <p>Prix Unitaire</p>
            <p>Quantite</p>
            <p>Prix Totale</p>
            <p>
                <span> Action</span>
            </p>
        </li>
        @foreach ($dt as $s)
        <li>
            <p style="display:none;">{{ $s->numDF }}</p>
            <p>{{ $s->designation }}</p>
            <p>{{ $s->unite }}</p>
            <p>{{ $s->prixUnite }}</p>
            <p>{{ $s->qte }}</p>
            <p>{{ $s->prixTotal }}</p>
            <p class="action">
                <a href="SuDFact/{{ $s->numDF }}" name="delate">DELETE</a>
                <a href="UpDFact/{{ $s->numDF }}" name="update">UPDATE</a>
            </p>
        </li>
        @endforeach
    </ul>
    
    </form>




</body>
</html>