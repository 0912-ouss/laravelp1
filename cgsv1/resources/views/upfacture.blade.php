<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
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
            <h1 class="form-title">update FACTURE num {{ $o->numF }}</h1>

            <form method="GET" action="ajfact">
                <div class="form-group">
                    <label for="username">num facture</label>
                    <input type="text" name="numf" id="username" class="w-100" autofocus value="">
                    <span class="check-icon"></span>
                </div>

                <div class="form-group">
                    <label for="email">date</label>
                    <input type="date"name="date" id="email" class="w-100" value="">
                    <span class="check-icon"></span>
                </div>

                <div class="form-group ">
                    <label for="password">client</label>
                    <input type="text" name="client" id="password" class="w-100" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" value="">
                    <span class="check-icon"></span>
                </div>
                <div class="form-group">
                    <label for="username">tva</label>
                    <input type="text" name="tva" id="username" class="w-100" autofocus value="" title="Must be longer than 4 characters">
                    <span class="check-icon"></span>
                </div>
                <div class="form-group">
                    <label for="username">objet</label>
                    <input type="text" name="objet" id="username" class="w-100" autofocus value="" title="Must be longer than 4 characters">
                    <span class="check-icon"></span>
                </div>


                <div class="form-group mb-0">
                    <button class="btn" name="save"> save</button>
                </div>
            </form>

            <small>Have an account? <a href="#">Click here</a></small>
        </div>
        <!-- end form-wrapper -->
    </div>
    <!-- end wrapper -->
    <script src="login.js"></script>
</body>

</html>