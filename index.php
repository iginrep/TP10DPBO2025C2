<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'viewmodel/BookingViewModel.php';
require_once 'viewmodel/UserViewModel.php';
require_once 'viewmodel/FieldViewModel.php';

$entity = isset($_GET['entity']) ? $_GET['entity'] : 'booking';
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

if ($entity === 'booking') {
    $viewModel = new BookingViewModel();
    if ($action == 'list') {
        $bookings = $viewModel->getBookingList();
        require_once 'views/booking_list.php';
    } elseif ($action == 'add' || $action == 'edit') {
        $usersViewModel = new UserViewModel();
        $fieldsViewModel = new FieldViewModel();
        $users = $usersViewModel->getUserList();
        $fields = $fieldsViewModel->getFieldList();

        if ($action == 'edit') {
            $bookingId = $_GET['id'];
            $booking = $viewModel->getBookingById($bookingId);
        }

        require_once 'views/booking_form.php';
    } elseif ($action == 'save' || $action == 'update') {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($action == 'save') {
                $viewModel->addBooking($_POST);
            } else {
                $viewModel->updateBooking($_GET['id'], $_POST);
            }
            header('Location: index.php?entity=booking&action=list');
            exit;
        }
    } elseif ($action == 'delete') {
        $viewModel->deleteBooking($_GET['id']);
        header('Location: index.php?entity=booking&action=list');
        exit;
    }
} elseif ($entity === 'user') {
    $viewModel = new UserViewModel();
    if ($action == 'list') {
        $users = $viewModel->getUserList();
        require_once 'views/user_list.php';
    } elseif ($action == 'add' || $action == 'edit') {
        if ($action == 'edit') {
            $userId = $_GET['id'];
            $user = $viewModel->getUserById($userId);
        }
        require_once 'views/user_form.php';
    } elseif ($action == 'save' || $action == 'update') {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($action == 'save') {
                $viewModel->addUser($_POST);
            } else {
                $viewModel->updateUser($_GET['id'], $_POST);
            }
            header('Location: index.php?entity=user&action=list');
            exit;
        }
    } elseif ($action == 'delete') {
        $viewModel->deleteUser($_GET['id']);
        header('Location: index.php?entity=user&action=list');
        exit;
    }
} elseif ($entity === 'field') {
    $viewModel = new FieldViewModel();
    if ($action == 'list') {
        $fields = $viewModel->getFieldList();
        require_once 'views/field_list.php';
    } elseif ($action == 'add' || $action == 'edit') {
        if ($action == 'edit') {
            $fieldId = $_GET['id'];
            $field = $viewModel->getFieldById($fieldId);
        }
        require_once 'views/field_form.php';
    } elseif ($action == 'save' || $action == 'update') {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($action == 'save') {
                $viewModel->addField($_POST);
            } else {
                $viewModel->updateField($_GET['id'], $_POST);
            }
            header('Location: index.php?entity=field&action=list');
            exit;
        }
    } elseif ($action == 'delete') {
        $viewModel->deleteField($_GET['id']);
        header('Location: index.php?entity=field&action=list');
        exit;
    }
}
