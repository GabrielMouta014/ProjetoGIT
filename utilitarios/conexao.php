<?php
class Conexao{
    public static $conn;
    static function conectar(){
        $endereco = "mysql:host=localhost:3306;dbname=projetosafra";
        $usuariobd = "root";
        $senhabd = "user";
        self::$conn =  new PDO($endereco, $usuariobd, $senhabd);
    }

    static function executar($query){
        if(self::$conn == null)
            self::conectar();
        $stmt = self::$conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    static function executarComParametros($query, $parametros){
        if(self::$conn == null)
            self::conectar();
        $stmt = self::$conn->prepare($query);
        $stmt->execute($parametros);
        return $stmt;
    }


}
?>