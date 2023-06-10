<?php

$idade = $_POST['idade'];
$estuda = $_POST['estuda'];
$estaAcompanhado = $_POST['estaAcompanhado'];

$valorIngresso = 21;

if ($idade < 14 and $estaAcompanhado == 'nao') {
    echo ("
    
    <h1> 
        <a href='index.html'> 
            VOCE NAO POSSUI IDADE PARA ESTE FILME, 
            VOLTE COM UM ACOMPANHANTE NA PROXIMA
         </a>
    </h1>
    ");
} else if ($idade < 14 and $estaAcompanhado == 'sim'){
    if ($estuda == 'sim'){
        echo("
        
        <h1>
               Voce ganhou um desconto por ser estudante!
        </h1>   
        ");

        $valorIngresso = $valorIngresso/2;
    }
    
    echo("
    
    <h1>
        <a href='paginaInes.html'>
            Seu ingresso custara $valorIngresso.
        </a>

        Não se esqueça de avisar seu responsavel!
    </h1>   
    "); 
} else {

    if ($estuda == 'sim'){
        echo("
        
        <h1>
               Voce ganhou um desconto por ser estudante!
        </h1>   
        ");

        $valorIngresso = $valorIngresso*0.5;
    }
    
    echo("
    
    <h1>
        <a href='paginaInes.html'>
            Seu ingresso custara $valorIngresso
        </a>
    </h1>   
    "); 
}
