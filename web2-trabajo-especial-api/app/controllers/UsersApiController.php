<?php
require_once './app/models/userAuth.model.php';
require_once './app/controllers/ApiController.php';

class UsersApiController extends ApiController {
    private $model;

    public function __construct() {
        parent::__construct();
        $this->model = new UserAuth_model();
    }

    public function showUsers() {
        $orderBy = isset($_GET['order_by']) ? $_GET['order_by'] : 'id_usuario'; 
        $direction = isset($_GET['direction']) && strtoupper($_GET['direction']) === 'DESC' ? 'DESC' : 'ASC'; 

        $users = $this->model->getAllUsers($orderBy, $direction);
        
        if ($users) {
            $this->view->response($users, 200); 
        } else {
            $this->view->response(['error' => 'No se han encontrado usuarios.'], 404); 
        }
    }
    

    // Obtiene un usuario por su ID
    public function getUserById($request) {
        $id = $request->params->id;
        $user = $this->model->getUserById($id);
        if ($user) {
            $this->view->response($user, 200);
        } else {
            $this->view->response(['error' => 'No se encontro al usuario.'], 404); 
        }
    }

    // Crea un nuevo usuario
    public function addUser($request) {
        if (empty($request->body->email) || empty($request->body->password)) {
            $this->view->response(['error' => 'Datos invalidos.'], 400); 
            return;
        }

        $email = $request->body->email;
        $password = password_hash($request->body->password, PASSWORD_DEFAULT);

        $userCreated = $this->model->addUser($email, $password);

        if ($userCreated) {
            $this->view->response(['status' => 'Usuario creado.'], 201); 
        } else {
            $this->view->response(['error' => 'Email ya regristado.'], 409); 
        }
    }

    // Elimina un usuario por su ID
    public function deleteUser($request) {
        $id = $request->params->id;
        $userDeleted = $this->model->deleteUser($id); 
        
        if ($userDeleted) {
            $this->view->response(['status' => 'Usuario eliminado.'], 200); 
        } else {
            $this->view->response(['error' => 'Usuario no encontrado.'], 404); 
        }
    }
    // Edita un usuario por su ID
    public function updateUser($request) {
        $id = $request->params->id; // Obtiene el ID de los parámetros
        $input = json_decode(file_get_contents('php://input'), true);

        if (!$input || empty($input['email']) || empty($input['password'])) {
            $this->view->response(['error' => 'Faltan datos'], 400);
            return;
        }

        $email = $input['email'];
        $password = $input['password'];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        if ($this->model->updateUser((int)$id, $email, $hashed_password)) {
            $this->view->response(['success' => 'Usuario actualizado correctamente'], 200);
        } else {
            $this->view->response(['error' => 'Error al actualizar el usuario'], 500);
        }
    }
}
