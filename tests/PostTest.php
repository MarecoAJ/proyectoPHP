<?php
use PHPUnit\Framework\TestCase;
use App\Post;
use App\Comentario;

class PostTest extends TestCase{
    public function test_agregar_comentario(){
        $post = new Post();
        $comentario = new Comentario();
        $post-> agregarComentario($comentario);  
        
        $this-> assertEquals(1, $post->contarComentarios());
        $this-> assertInstanceOf(Comentario::class, $post->obtenerComentarios()[0]);
    }
}
?>