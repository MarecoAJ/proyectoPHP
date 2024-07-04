<?php
namespace App;

class Post{
    protected $comentarios = [];
    
    public function agregarComentario(Comentario $comentario){
        $this-> comentarios[] = $comentario;
    }

    public function contarComentarios(){
        return count($this-> comentarios);
    }

    public function obtenerComentarios(){
        return $this-> comentarios;
    }
}
?>