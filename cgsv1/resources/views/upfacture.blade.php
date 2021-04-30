<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update facture</title>
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
   


    <div class="wrapper">


        <div class="quote-wrapper">
            <blockquote>
                <p>
                    "Paradise isn't a place. <br> It's a feeling"
                </p>
                <p class="author">- L. Boyer</p>
            </blockquote>
        </div>
        <!-- end quote-wrapper -->

        <div class="form-wrapper">
            <h1 class="form-title">update FACTURE</h1>

            <form method="GET" action="save">
                @php
                if(isset($o)){
                    
                    $nume=$o->numF;
                    $objet=$o->objet;
                  $date=$o->dateF;
                 $client= $o->client;
                 $tva= $o->tauxTva;
                 
                } 
              @endphp
                @csrf
                <div class="form-group">
                    <label for="username">num facture</label>
                    <input type="text" name="numf" id="username" class="w-100"  value="{{ $nume }}">
                    <span class="check-icon"></span>
                </div>

                <div class="form-group">
                    <label for="email">date</label>
                    <input type="date"name="date" id="email" class="w-100" value="{{ $date}}">
                    <span class="check-icon"></span>
                </div>

                <div class="form-group ">
                    <label for="password">client</label>
                    <input type="text" name="client" id="password" class="w-100" title="Must contain characters" value="{{ $client }}">
                    <span class="check-icon"></span>
                </div>
                <div class="form-group">
                    <label for="username">tva</label>
                    <input type="text" name="tva" id="username" class="w-100" autofocus value="{{ $tva }}" title="Must be longer than 4 characters">
                    <span class="check-icon"></span>
                </div>
                <div class="form-group">
                    <label for="username">objet</label>
                    <input type="text" name="objet" id="username" class="w-100" autofocus value="{{ $objet }}" title="Must be longer than 4 characters">
                    <span class="check-icon"></span>
                </div>


                <div class="form-group mb-0">
                    <button class="btn" name="se"> save</button>
                </div>
            </form>

            
        </div>
        <!-- end form-wrapper -->
    </div>
    <!-- end wrapper -->
    <script src="login.js"></script>
</body>

</html>