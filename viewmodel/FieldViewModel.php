<?php
require_once 'model/FieldModel.php';

class FieldViewModel {
    private $fieldModel;

    public function __construct() {
        $this->fieldModel = new FieldModel();
    }

    public function getFieldList() {
        return $this->fieldModel->getAll();
    }

    public function getFieldById($id) {
        return $this->fieldModel->getById($id);
    }

    public function addField($data) {
        return $this->fieldModel->create($data);
    }

    public function updateField($id, $data) {
        return $this->fieldModel->update($id, $data);
    }

    public function deleteField($id) {
        return $this->fieldModel->delete($id);
    }
}
?>