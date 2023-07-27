<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <title> operadores </title>
</head>
<body>
  <div>
    <?php
      $per1 = isset($_GET["p1"])?($_GET["p1"]):0;
      $per2 = isset($_GET["p2"])?($_GET["p2"]):0;
      $per3 = isset($_GET["p3"])?($_GET["p3"]):0;
      $per4 = isset($_GET["p4"])?($_GET["p4"]):0;
      $per5 = isset($_GET["p5"])?($_GET["p5"]):0;
      $per6 = isset($_GET["p6"])?($_GET["p6"]):0;
      $per7 = isset($_GET["p7"])?($_GET["p7"]):0;
      $per8 = isset($_GET["p8"])?($_GET["p8"]):0;

      $acertos = 0;
      $erros = 0;
      echo "<h4>questão 1:</h4>";
      if ($per1 == 1){
         echo "<p> voce acertou, a computação em nuvem serve para armazenar arquivos em servidores </p>";
        $acertos++;
      } else {
        echo "<p> voce errou, a nuvem serve para armazenar arquivos em servidores </p>";
        $erros++;
      }
     
      echo "<h4>questão 2:</h4>";
      if ($per2 == 3){
         echo "<p> voce acertou, a tela touchscreen é padrão para os celulares </p>";
         $acertos++;
      } else {
        echo "<p> voce errou, a tela touchscreen é sensivel ao toque e por isso é contralado pelos dedos na tela </p>";
        $erros++;
      }
     echo "<h4>questão 3:</h4>";
     if ($per3 == 2){
         echo "<p> voce acertou, o whatsap web serve para usar  o whatsap do celular no computador </p>";
        $acertos++;
      } else {
        echo "<p> voce errou, o whatsap web serve para usar  o whatsap do celular no computador </p>";
       $erros++;
      }
    echo "<h4>questão 4:</h4>";
    if ($per4 == 4){
         echo "<p> voce acertou, são teclas que realizam ações que o mouse pode realizar, porem mais rapidamente </p>";
         $acertos++;
      } else {
        echo "<p> voce errou, são teclas que realizam ações que o mouse pode realizar, porem mais rapidamente </p>";
        $erros++;
      }

    echo "<h4>questão 5:</h4>";
    if ($per5 == 1){
         echo "<p> voce acertou, são caracteres apenas acessiveis por uma sequencia de teclas </p>";
         $acertos++;
      } else {
        echo "<p> voce errou, são caracteres apenas acessiveis por uma sequencia de teclas </p>";
        $erros++;
      }
    echo "<h4>questão 6:</h4>";
    if ($per6 == 3){
         echo "<p> voce acertou, unidade de medida de informação </p>";
         $acertos++;
      } else {
        echo "<p> voce errou, unidade de medida de informação </p>";
        $erros++;
      }
    echo "<h4>questão 7:</h4>";
    if ($per7 == 1){
         echo "<p> voce acertou, as mensagens não armazenam dados no celular </p>";
         $acertos++;
      } else {
        echo "<p> voce errou, as mensagens não armazenam dados no celular </p>";
        $erros++;
      }

    echo "<h4>questão 8:</h4>";
    if ($per8 == 1){
         echo "<p> voce acertou, é usado para gerar textos </p>";
         $acertos++;
      } else {
        echo "<p> voce errou, é usado para gerar textos </p>";
        $erros++;
      }

    $total = ($acertos+$erros);
    echo "<h4> nota </h4>";
    $nota = ($acertos/$total)*10;
    #$arredondado = number_format($total,2,",",".")
    echo "<p> acertou: $acertos , errou: $erros ,sua nota é: ",
number_format($nota,2,",","."),"</p>";
    ?>
    
    <br>
    <a href="index.html"> voltar </a>
  </div>