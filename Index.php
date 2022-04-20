
<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
        <title>Exame de Colesterol</title>
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1" class="item">

        <style>
                  .flex{
                      max-width: flex;
                      padding: 20px;
                      border: 2px solid black;
                      color: WHITE;
                      display: flex;
                      background-color: #101055;
                      align-self:flex;
                  }

                  .item{
                      background-color: #C0C0C0;
                      margin: 10px;
                      font-family: impact;
                      font-size:14;
                      margin: 20px;
                      border: 6px solid NAVY;
                      color: black;

                  }
              </style>

</head>

<body>
      <p class="item">FORMULÁRIO PARA EXIBIR RESULTADO DE EXAMES</p>
<form action="script.php" method="post" class="item">


  <p class= "flex">Seu nome: <input type="text" name="nome"/></p>
    <p class= "flex">Sua idade: <input type="text" name="idade"/></p>
    <p class= "flex">Seu resultado: <input type="text" name="resultado"/></p>
      <p class= "flex"><input type="Submit" value="Enviar dados do Exame" class="item"/></p>

</form>
</body>


</html>
