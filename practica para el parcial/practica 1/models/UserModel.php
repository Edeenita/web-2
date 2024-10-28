

Class UserModel{
    public function getUserById($id_usuario){
        $db = new PDO('mysql:host=localhost;dbname=BookNest', 'root', '');
        $query = $this->db->prepare("SELECT id_usuario FROM Usuarios WHERE membresia_activa = true AND id_usuario = ?");
        $query -> execute([id_usuario]);
        return $query->fetch(PDO::FETCH:OBJ);
}