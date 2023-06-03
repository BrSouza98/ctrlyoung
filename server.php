<?php

$nomeCorreto = "BrunoSouza";
$senhaCorreta = "123abc";

print_r($_POST);

/*if($_POST['nome'] == $nomeCorreto){
    echo("<h1> Nome correto! </h1>");
} else {
    echo("<h1 style='color: red;'> Nome incorreto! </h1>");
}

if($_POST['senha'] == $senhaCorreta){
    echo("<h1> Senha correta! </h1>");
} else {
    echo("<h1 style='color: red;'> Senha incorreta! </h1>");
}*/

if ($_POST['nome'] == $nomeCorreto and $_POST['senha'] == $senhaCorreta) {
    echo ("<h1> Login efetuado com sucesso </h1>");
} else {
    echo ("<h1> 
             <a href='index.html' style='color: red;'>
               Usuário e senha incorretos, tente novamente!   
             </a> 
           </h1>");
}
