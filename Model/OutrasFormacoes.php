<?php
    class OutrasFormacoes
    {
        private $id;
        private $idusuario;
        private $inicio;
        private $fim;
        private $descricao;

        //ID
        public function setID($id){
        $this->id = $id;
        }
        public function getID(){
        return $this->id;
        }

        //idusuario
        public function setIdUsuario($idusuario){
        $this->idusuario = $idusuario;
        }
        public function getIdUsuario(){
        return $this->idusuario;
        }

        //inicio
        public function setInicio($inicio){
            $this->inicio = $inicio;
        }
        public function getInicio(){
            return $this->inico;
        }

        //fim
        public function setFim($fim){
            $this->fim = $fim;
        }
        public function getFim(){
            return $this->fim;
        }

        //Descrição
        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }
        public function getDescricao(){
            return $this->descricao;
        }
        
        public function inserirBD(){
            require_once 'ConexaoBD.php';
            
            $con = new ConexaoBD();
            $conn = $con->conectar();
            if ($conn->connect_error){
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "INSERT INTO experienciaprofissional (idusuario, inicio, fim, descricao)
            VALUES ('".$this->idusuario."','".$this->inicio."','".$this->fim."','".$this->descricao."')";

            if ($conn->query($sql) === TRUE){
                $this->id = mysqli_insert_id($conn);
                $conn->close();
                return TRUE;
            } else {
                $conn->close();
                return FALSE;
            }
        }

        public function excluirBD($id){
            require_once 'ConexaoBD.php';

            $con = new ConexaoBD();
            $conn = $con->conectar();
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "DELETE FROM experienciaprofissional WHERE idoutrasformacoes = '".$id."';";
            
            if ($conn->query($sql) === TRUE) {
                $conn->close();
                return TRUE;
            } else {
                $conn->close();
                return FALSE;
            }
        }
?>