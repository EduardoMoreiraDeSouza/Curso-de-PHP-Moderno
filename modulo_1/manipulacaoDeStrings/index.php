<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Strings PHP</title>
</head>
<body>

    <?php

        // Double Quoted and Single Quoted

            $stringDoubleQuoted = "PHP \u{1F418}"; // Double quoted
            $stringSingleQuoted = 'PHP \u{1F418}'; // Single quoted

            echo "
                $stringDoubleQuoted Double quoted <br/><br/>
                $stringSingleQuoted Single quoted
            ";


        // Não interpretação de funções e constantes dentro de aspas
        
            const ESTADO = "RJ";
            echo "<br/><br/> Moro no ". ESTADO;     

            echo "<br/><br/>";
            
            $nome = "Rodrigo";
            $sobrenome = "Nogueira";
            echo "$nome \"Minotauro\" $sobrenome";

        /* Sequência de escape 

            \n Nova linha
            \t Tabulação horizontal
            \\ Barra invertida
            \$ Sinal de cifrão
            \u{} Codepoint unicode
        
        */



        /* Sintaxe Heredoc 
        
            $curso = "PHP";
            $ano = date('Y');

            echo <<< FRASE
            
                Olá galera do curso $php no ano de $ano

            FRASE;
        
        */

        
        
        /* Sintaxe Nowdoc 
        
            $curso = "PHP";
            $ano = date('Y');

            echo <<< 'FRASE'
            
                Olá galera do curso $php no ano de $ano

            FRASE;
        
        */

    ?>

</body>
</html>