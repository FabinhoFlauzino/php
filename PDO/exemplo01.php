<?php 

    $conn = new PDO("mysql:dbname:dbphp7;host=localhost", "root","");

    if($conn->connect_error){
        echo "[Erro]: ".$conn->connect_error;
    }

    $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, senha) VALUES('Fabio',1234)");

    $stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
    $stmt->execute();

    $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, senha) VALUES('Fulano',1234)");
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($results as $row) {
        foreach ($row as $key => $value) {
            echo "<strong>".$key.":</strong>".$value."<br/>";
        }
    }
    
    echo "-----------------------------------<br>";

?>