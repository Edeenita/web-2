

Class AlquilerModel{
    public function getAlquilerByUserId($id_usuario){
    $db = new PDO('mysql:host=localhost;dbname=BookNest', 'root', '');
    $query = $this->db->prepare("SELECT id_libro,fecha_inicio, fecha_fin FROM Alquileres WHERE id_usuario = ?" );
    $query -> execute([id_usuario]);
    return $query->fetchAll(PDO::FETCH:OBJ);
}