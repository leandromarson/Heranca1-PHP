<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css"> 
        <title>Livro PHP Poo</title>
    </head>
    <body>
        <div id = "interface">
            <header id ="cabecalho">
            	<hgroup>
                    <h1>Site Herança</h1>
                        <h2>POO em PHP</h2>
		</hgroup>						
            </header>
            <pre>
            <?php
                require_once 'Pessoa.php';
                require_once 'Aluno.php';
                require_once 'Professor.php';
                require_once 'Funcionario.php';
                
                $p = new Pessoa("Jamiro",20,"m");
                $a = new Aluno("Romiro",17,"m",1123,"ADM");
                $f = new Funcionario("Rosimeire",40,"f","Estoque");
                $pr = new Professor("Aristeu",65,"m","Fisica",2944.93);
                
                $a->fazerAniver();
                $f->setTrabalhando();
                $pr->receberAumento(700);
                $a->cancelarMatricula();
                
                
                $p->status();
                $a->status();
                $f->status();
                $pr->status();
                
                print_r($p);
                print_r($a);
                print_r($f);
                print_r($pr);
                
                
            ?>
            </pre>
            <footer id= "rodape">
			<p>2020 - by Leandro Marson Ribeiro<br>
            </footer> 
        </div>    
    </body>
</html>
