<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Php facul</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php 
        $ano_nascimento = 1989;
        $pi = 3.14159265;
        $texto = 'O PHP � uma linguagem.';
        $produto = 'pizza';
        $texto = "Ele \"comprou\" uma $produto hoje.";
        $sim = true;
        $nao = false;
        define("constant1", "constant");
        $x = 1;
        function Teste(){
            echo $x; 
        }
        Teste();
        $a = 1;
        $b = 2;
        function soma(){
            global $a, $b;
            $b = $a + $b;
        }
        soma();
        echo $b;
        $var1 = 10;
        $var2 = (boolean)$var1;
        $x = true;
        if($x){
            echo '� verdade';
        }else{
            echo '� mentira';
        }
        echo $x ? '� verdade' : '� mentira';
        switch ($x) {
            case true:
                echo '� verdade';
                break;
            default:
                echo '� mentira';
                break;
        }
        $i = 1;
        while ($i <= 10) {
            $i++;
        }
        foreach (array(1,2,3) as $value) {
            echo $value;
        }
        
        function quadrado($lado1, $lado2){
            return $lado1 * $lado2;
        }
        $area = quadrado(5,5);
        $whatIsArray = 'Um array no PHP � na verdade um mapa ordenado. Um mapa � um tipo que relaciona valores a chaves. Este tipo � otimizado para v�rias usos diferentes: ele pode ser tratado como um array, uma lista (vetor), hashtable (que � uma implementa��o de mapa), dicion�rio, cole��o, pilha, fila e provavelmente mais. Assim como existe a possibilidade dos valores do array serem outros arrays, �rvores e arrays multidimensionais.';
        $whatIsObject = 'Um objeto � uma estrutura de dados de tempo de execu��o com espa�o alocado em memoria';
        $whatIsNull = 'O valor especial NULL representa uma vari�vel sem valor. NULL � o �nico valor poss�vel do tipo null.';
    ?>    

    <p>O valor de pi � <?php echo $pi; ?></p>
    <p>Constant definida: <?php echo FOO; ?></p>
    <p>Ol� <?php echo htmlspecialchars($_POST['nome']) ?></p>

    <p><?php echo $whatIsArray; ?></p>
    <p><?php echo $whatIsObject; ?></p>
    <p><?php echo $whatIsNull; ?></p>
    <form action="index.php" method="post">
        <input type="text" name="nome"/>
        <input type="submit" value="enviar"/>
    </form>
</body>
</html>