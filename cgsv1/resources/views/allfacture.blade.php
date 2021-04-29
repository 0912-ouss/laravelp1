<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produit admin</title>

</head>

<body>
    
    <main>
        
        <form  method="GEt" action="">
            <ul>
                <li>
                <p>num</p>
                <p>objet</p>
                <p>date</p>
                <p>client</p>
                <p>taux tva</p>
                <p>prix ht</p>
                <p>tva</p>
                <p>prix ttc</p>
            </li>
            @foreach ($dt as $o )
            <li>
                <p>{{ $o->numF }}</p>
                <p>{{ $o->objet }}</p>
                <p>{{ $o->dateF }}</p>
                <p>{{ $o->client }}</p>
                <p>{{ $o->tauxTva }}</p>
                <p>{{ $o->prixHt }}</p>
                <p>{{ $o->tva }}</p>
                <p>{{ $o->prixTtc }}</p>
            </li>
            @endforeach
                

                
             
                
                
                

            </ul>

        </form>
       

    </main>
   

</body>

</html>