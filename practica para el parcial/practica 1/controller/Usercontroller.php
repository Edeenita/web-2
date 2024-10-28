require_once './model/AlquilerModel.php';
require_once './model/LibroModel.php';
require_once './model/UserModel.php';
require_once './view/view.php'

Class UserController{
    private AlquilerModel;
    private LibroModel;
    private UserModel;
    private view;

    public function __construct{
        $this->AlquilerModel = new AlquilerModel();
        $this->LibroModel = new LibroModel();
        $this->UserModel = new UserModel();
        $this->view = new view();
    }

    public function showAlquierByUser{
        if(empty($_GET['id_usuario'])){
            $this->view->showError("Error al cargar el usuario");
            return;
        }
        $id_usuario = $_GET['id_usuario'];
        $usuario = $this->UserModel->getUserById($id_usuario);
        if(empty($usuario)){
            $this->view->showError("Usuario no existente o su membresia ha cadudado");
            return;
        }
        $alquileres = $this->AlquilerModel->getAlquilerByUserId($id_usuario)
        forech($alquileres as $alquier){
            $libros = $this->LibroModel->getLibros(id_libro);
            $alquiler->titulo = $libro->titulo;
            $alquiler->autor = $libro->autor;
            $alquiler->precio_diario = $libro->precio_diario;
        }
        $this->view->showAlquileres($alquileres);
    }
}