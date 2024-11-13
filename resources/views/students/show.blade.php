<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Set dark background for the body */
        body {
            background-color: #121212; /* Dark background */
            color: #e0e0e0; /* Light text color for better contrast */
            height: 100vh; /* Full viewport height */
            display: flex; /* Use flexbox */
            justify-content: center; /* Horizontally center */
            align-items: center; /* Vertically center */
            margin: 0; /* Remove default margin */
        }

        /* Style for the container */
        .container {
            background-color: #1f1f1f; /* Slightly lighter background for the form */
            padding: 30px;
            border-radius: 8px;
            width: 100%;
            max-width: 600px; /* Limit the max width of the container */
        }

        h1 {
            color: #fff; /* White color for the heading */
        }

        p {
            color: #ccc; /* Lighter text color for paragraph */
        }

        .btn {
            margin-top: 10px;
        }

        .btn-warning {
            background-color: #f39c12; /* Yellow for Edit button */
            border-color: #f39c12;
        }

        .btn-danger {
            background-color: #e74c3c; /* Red for Delete button */
            border-color: #e74c3c;
        }

        .btn-secondary {
            background-color: #6c757d; /* Gray for Back to List button */
            border-color: #6c757d;
        }

        .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1><?= htmlspecialchars($students->name) ?></h1>
        <p><strong>Email:</strong> <?= htmlspecialchars($students->email) ?></p>
        <p><strong>Age:</strong> <?= htmlspecialchars($students->age) ?></p>
        <a href="{{ route('students.edit', $students->id) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('students.destroy', $students->id) }}" method="POST" style="display:inline;">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
</body>
</html>
