<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>factures </title>
    <link rel="stylesheet" href="css/produit.css">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="css/forni.css">
</head>

<body>
    <header>
        <div class="header-top">
            <ul>
                <li>
                    <p>+12463783399393</p>
                </li>
                <li>
                    <p>yourmail@email.com</p>
                </li>
                <li>
                    <p>3 business day dilevvery & free return </p>
                </li>
            </ul>
        </div>
       
    </header>
    <main>
        <div class="main-title">

            <p>home cart</p>
            <span> my cart</span>

        </div>
        <form class="forni">
            <ul>
                <li>
                    <p id="p1">action</p>
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
                        <div id="p1" class="action">
                           <a href="deletefacture/{{$o->numF  }}"> supp</a>
                           <a href="updatefacture/{{$o->numF  }}"> update</a>
                        </div>
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
        <form class="order">
           
            <a href="ajfature" class="btn"> ajouter facture</a>
      
        </form>

    </main>
    <footer>
        <ul>
            <li>
                <p>Vegefoods</p>
            </li>
            <li>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </li>
            <li>
                <div class="social">
                    <span><i class="fab fa-twitter"></i></span>
                    <span><i class="fab fa-facebook"></i></span>
                    <span><i class="fab fa-google-plus-square"></i></span>

                </div>
            </li>
        </ul>
        <ul>
            <li>
                <p>menu</p>
            </li>
            <li>
                <p>shop</p>
            </li>
            <li>
                <p>about</p>
            </li>
            <li>
                <p>journal</p>
            </li>
            <li>
                <p>contact us</p>
            </li>
        </ul>
        <ul>
            <li>
                <p>help</p>
            </li>
            <li>
                <p>shipping information</p>
            </li>
            <li>
                <p>return & exchange</p>
            </li>
            <li>
                <p>teams and condition</p>
            </li>
            <li>
                <p>privacy policy</p>
            </li>
        </ul>
        <ul>
            <li>
                <p>Have a Questions?</p>
            </li>
            <li>
                <p>203 Fake St. Mountain View, San Francisco, California, USA</p>
            </li>
            <li>
                <p>+2 392 3929 210</p>
            </li>
            <li>
                <p>teams and condition</p>
            </li>
            <li>
                <p>info@yourdomain.com</p>
            </li>
        </ul>
        <div class="text">
            <p>Copyright ©2021 All rights reserved | This template is made with by Neabuzz</p>
        </div>
    </footer>

</body>

</html>