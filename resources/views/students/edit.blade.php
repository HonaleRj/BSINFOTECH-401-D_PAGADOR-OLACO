<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Set the body to fill the entire viewport and center the content */
        body {
            background-color: #121212; /* Dark background */
            color: #e0e0e0; /* Light text color */
            height: 100vh; /* Full viewport height */
            display: flex; /* Use flexbox */
            justify-content: center; /* Horizontally center */
            align-items: center; /* Vertically center */
            margin: 0; /* Remove default margin */
        }

        /* Style for the form container */
        .container {
            background-color: #1f1f1f; /* Slightly lighter background for the form */
            padding: 30px;
            border-radius: 8px;
            width: 100%;
            max-width: 500px; /* Limit the max width */
        }

        h1 {
            color: #fff; /* White color for the heading */
        }

        label {
            color: #ccc; /* Lighter color for labels */
        }

        .form-control {
            background-color: #444444; /* Dark background for inputs */
            color: #fff; /* White text color for inputs */
            border: 1px solid #555; /* Subtle border for inputs */
        }

        .form-control:focus {
            background-color: #555555; /* Slightly lighter input on focus */
            border-color: #66afe9; /* Highlight color for focused input */
            color: #fff; /* Ensure text color is white when focused */
        }

        .form-control::placeholder {
            color: #ccc; /* Lighter placeholder color */
        }

        .btn {
            margin-top: 10px;
        }

        .btn-primary {
            background-color: #007bff; /* Primary button color */
            border-color: #007bff;
        }

        .btn-secondary {
            background-color: #6c757d; /* Secondary button color */
            border-color: #6c757d;
        }

        .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Student</h1>
        <form action="{{ route('students.update', $students->id) }}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($students->name) ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($students->email) ?>" required>
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" name="age" class="form-control" value="<?= htmlspecialchars($students->age) ?>" required min="1">
            </div>
            <button type="submit" class="btn btn-primary">Update Student</button>
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>
