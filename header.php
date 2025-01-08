<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord avec Login et Liste des Produits</title>
    <!-- Lien vers Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f7fa;
            font-family: Arial, sans-serif;
        }

        .navbar-custom {
            background-color: #1E2A38;
        }

        .navbar-custom a {
            color: #fff;
            font-weight: bold;
        }

        .navbar-custom a:hover {
            color: #ff6f61;
        }

        .login-box {
            width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        .login-box h3 {
            text-align: center;
            margin-bottom: 20px;
            color: #1E2A38;
        }

        .login-box input {
            margin-bottom: 15px;
        }

        .login-box button {
            background-color: #1E2A38;
            color: #fff;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .login-box button:hover {
            background-color: #ff6f61;
        }

        .dashboard-content {
            margin-top: 50px;
        }

        h2 {
            text-align: center;
            color: #1E2A38;
        }

        table {
            width: 100%;
            margin-top: 30px;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #1E2A38;
            color: #fff;
            font-weight: bold;
        }

        td {
            background-color: #f9f9f9;
        }

        tr:hover td {
            background-color: #f1f1f1;
        }

        .actions-btn {
            display: flex;
            justify-content: space-around;
        }

        .btn-custom {
            background-color: #ff6f61;
            color: #fff;
            border: none;
            padding: 5px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-custom:hover {
            background-color: #e03e31;
        }
        
    .card {
      border-radius: 10px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .card-title {
      font-size: 1.5rem;
      font-weight: bold;
      color: #007bff;
    }

    .card-text {
      font-size: 1rem;
      color: #555;
    }

    .card-footer {
      background-color: #fff;
      border-top: 0;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #004085;
    }

    .product-list {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
    }

    .product-card {
      flex: 1 1 calc(33.333% - 20px);
      max-width: calc(33.333% - 20px);
      text-align: center;
    }
    </style>
</head>
<body>
    
</body>
</html>