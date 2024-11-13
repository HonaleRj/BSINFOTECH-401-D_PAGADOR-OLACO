<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Student</title>
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Google Font (Roboto for modern look) -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        /* Make sure the body takes full height and has a dark background */
        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #121212; /* Dark background for the page */
            color: #e0e0e0; /* Light gray text to contrast with dark background */
        }

        /* Center the form vertically and horizontally */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            padding: 20px;
        }

        /* Form container styles */
        .form-container {
            background-color: #1f1f1f; /* Dark background for the form */
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 600px;
        }

        /* Heading styles */
        h1 {
            color: #ffffff; /* White text for the heading */
            font-size: 2.4rem;
            font-weight: 500;
            margin-bottom: 20px;
        }

        /* Input field styling */
        .form-group label {
            font-weight: 500;
            font-size: 1rem;
            color: #bbb; /* Lighter label color for contrast */
        }

        .form-control {
            border-radius: 10px;
            border: 1px solid #444; /* Dark border for input fields */
            background-color: #333; /* Dark background for input fields */
            color: #fff; /* White text inside input fields */
            font-size: 1rem;
            padding: 12px;
        }

        .form-control:focus {
            border-color: #007bff; /* Blue border on focus */
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.2);
        }

        /* Button styling */
        .btn {
            border-radius: 10px;
            padding: 12px 20px;
            font-size: 1rem;
            font-weight: 600;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
        }

        .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="form-container">
            <h1 class="text-center">Add New Student</h1>
            <form action="{{ route('students.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <!-- Name Input -->
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                
                <!-- Email Input -->
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                
                <!-- Age Input -->
                <div class="form-group mb-3">
                    <label for="age">Age</label>
                    <input type="number" name="age" class="form-control" required min="1">
                </div>
                
                <!-- Submit and Cancel Buttons -->
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary w-48">Add Student</button>
                    <a href="{{ route('students.index') }}" class="btn btn-secondary w-48">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap 4 JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
