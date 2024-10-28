
Class LibroModel{
    public function getLibros($id_libro){
        $db = new PDO('mysql:host=localhost;dbname=BookNest', 'root', '');
        $query = $this->db->prepare("SELECT titulo, autor, precio_diario FROM Libros WHERE id_libro = ?  ");
        $query -> execute([id_libro]);
        return $query->fetch(PDO::FETCH_OBJ);
    }