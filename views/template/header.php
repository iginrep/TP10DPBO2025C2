<!DOCTYPE html>
<html>

<head>
    <title>Mini Soccer Management</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f8d7da;
            /* Light red background */
            font-family: 'Arial', sans-serif;
        }

        nav {
            background-color: #c82333;
            /* Liverpool red */
        }

        nav h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }

        nav ul li a {
            color: white;
            font-size: 1.2rem;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #f5c6cb;
            /* Lighter red */
        }

        .container {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        button {
            background-color: #c82333;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #a71d2a;
            /* Darker red */
        }
    </style>
</head>

<body class="bg-gray-100">
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mini Soccer Management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?entity=booking&action=list">Booking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?entity=field&action=list">Field</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?entity=user&action=list">User</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mx-auto p-4">