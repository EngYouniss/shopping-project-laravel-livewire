<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إنشاء حساب | متجرنا</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Tajawal', sans-serif;
        }

        body {
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .register-container {
            background: white;
            width: 100%;
            max-width: 450px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo h2 {
            color: #2c3e50;
            font-size: 24px;
        }

        .input-group {
            margin-bottom: 20px;
            position: relative;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        .input-group input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .input-group input:focus {
            outline: none;
            border-color: #3498db;
        }

        .input-group .icon {
            position: absolute;
            left: 15px;
            top: 40px;
            color: #777;
        }

        .name-fields {
            display: flex;
            gap: 15px;
        }

        .name-fields .input-group {
            flex: 1;
        }

        .register-btn {
            width: 100%;
            padding: 12px;
            background-color: #2ecc71;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
        }

        .register-btn:hover {
            background-color: #27ae60;
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
            color: #555;
        }

        .login-link a {
            color: #3498db;
            text-decoration: none;
        }

        .terms {
            margin-top: 20px;
            font-size: 14px;
            color: #777;
            text-align: center;
        }

        .terms input {
            margin-left: 5px;
        }

        .terms a {
            color: #3498db;
            text-decoration: none;
        }

        @media (max-width: 480px) {
            .name-fields {
                flex-direction: column;
                gap: 0;
            }

            .register-container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
  <livewire:register-component/>
</body>
</html>
