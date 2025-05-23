<?php
require_once 'model/UserModel.php';

class UserViewModel {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function getUserList() {
        return $this->userModel->getAll();
    }

    public function getUserById($id) {
        return $this->userModel->getById($id);
    }

    public function addUser($data) {
        return $this->userModel->create($data);
    }

    public function updateUser($id, $data) {
        return $this->userModel->update($id, $data);
    }

    public function deleteUser($id) {
        return $this->userModel->delete($id);
    }
}
?>