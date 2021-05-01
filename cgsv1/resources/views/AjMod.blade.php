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
    
<form action="AjFact" method="GET" class="AjMod">
@php
if(isset($d))
{
   // $des=$d->qte;
    $op="update";
}
else 
{
  $op="ajouter";  
}
@endphp

    <div class="par">

        <span>Designation</span><input type="text" name="des" id="">
        <span>Unite</span><input type="text" name="uni" id="">
        <span>Qte</span><input type="text" name="qte" id="" >
    
        <span>Prix Unitaire</span><input type="text" name="pu" id="">
        <span>Prix Totale</span><input type="text" name="pt" id="">
        <div>    
            <button type="submit" name="save"> {{ $op }}</button>
            <a href="AjMod" name="Rest">Rest</a>
            <a href="Detaillfact" name="end">End</a>
        </div>
    </div>

</form>

</body>
</html>