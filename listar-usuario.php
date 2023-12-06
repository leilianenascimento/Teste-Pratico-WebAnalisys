
<h1>Lista de Usuário</h1>
<?php

include("config.php");

$sql = "SELECT id, nome, email FROM usuarios";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<table>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
       
        print "<td>" . $row->id . "</td>";
        print "<td>" . $row->nome . "</td>";
        print "<td>" . $row->email . "</td>";

        print "<td> 
                <button onclick=\"location.href='?page=editar&id=" . 
                $row->id . "';\" class='btn btn-success'>Editar</button>  
                <button onclick=\"if(confirm('Tem certeza?'))
                {location.href='?page=salvar&acao=excluir&id=" . 
                  $row->id . "';} else{return false;}\" class='btn btn-danger'>Excluir</button>
        </td>";
        print "</tr>";
    }
    print "</table>";
    print "<br> <button onclick=\"location.href='index.php';\" 
    class='btn btn-primary'>Voltar</button>";
} else {
    print "Não foram encontrados usuários";
}


?>

<style>
    

    h1{
      color: #4682b4;
    }
   
       th {
           background-color: #4682b4;
           color: #4682b4;
       }
   
       tr:nth-child(even) {
           background-color: #f2f2f2;
       }
   
       .btn-success {
           background-color: #4682b4;
           color: #fff;
           border: none;
           padding: 5px 10px;
           cursor: pointer;
       }
   
       .btn-danger {
           background-color: #dc3545;
           color: #fff;
           border: none;
           padding: 5px 10px;
           cursor: pointer;
       }
       .btn-primary {
           background-color: #4682b4;
           color: #fff;
           border: none;
           padding: 10px 20px;
           cursor: pointer;
       }
   </style>