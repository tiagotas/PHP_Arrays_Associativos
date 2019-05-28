<?php

// Como se lê? "Há um array chamado alunos com 3 posições. Em cada uma das posições há um
// array associativo com três par-valor. As chaves do array associativo são: nome, dt_nasc
// e cidade. Cada par-valor é serpado por vírgula e para definir o valor de uma chave usa-se
// o operador de associação:   => 
$alunos = array( array("nome" => "Gabriela", "dt_nasc" => "03/02/2003", "cidade" => "Mococa"),  // i 0
                 array("nome" => "Agatha", "dt_nasc" => "22/10/2003", "cidade" => "Mococa"),    // i 1
                 array("nome" => "Allysson", "dt_nasc" => "15/07/2003", "cidade" => "Mococa"),  // i 2
                 array("nome" => "Ana Xavier", "dt_nasc" => "09/10/2002", "cidade" => "Marte")  // i 3
                );


// Como se lê? "Acessando o indice 1 do array alunos. No indice 1 há outro array, um associativo
// onde há uma chave chamada nome e deverá mostrar Agatha".
echo $alunos[1]['nome'];

// Navegando pelos indices do array no navegador: ex: http://localhost:8000?i=3
$indice = $_GET['i'];

// No exemplo acima de i=3 mostraria os dados da quarta posição do array (i = 3)
echo $alunos[ $indice ]['nome'] . "<br />";     // mostraria Ana Xavier
echo $alunos[ $indice ]['dt_nasc'] . "<br />";  // mostraria 09/10/2002
echo $alunos[ $indice ]['cidade'] . "<br />";   // mostraria Marte


// olhe com var_dump para ver como a estrutrua do array se comporta:
//var_dump($alunos);
?>