<?php
require_once 'model/BookingModel.php';
require_once 'model/UserModel.php';
require_once 'model/FieldModel.php';

class BookingViewModel {
    private $bookingModel;
    private $userModel;
    private $fieldModel;

    public function __construct() {
        $this->bookingModel = new BookingModel();
        $this->userModel = new UserModel();
        $this->fieldModel = new FieldModel();
    }

    public function getBookingList() {
        return $this->bookingModel->getAll();
    }

    public function getBookingById($id) {
        return $this->bookingModel->getById($id);
    }

    public function getFieldById($id) {
        return $this->fieldModel->getById($id);
    }

    public function getUserById($id) {
        return $this->userModel->getById($id);
    }

    public function addBooking($data) {
        return $this->bookingModel->create($data);
    }

    public function updateBooking($id, $data) {
        return $this->bookingModel->update($id, $data);
    }

    public function deleteBooking($id) {
        return $this->bookingModel->delete($id);
    }
}
?>