<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Set dark background for the body */
        body {
            background-color: #121212; /* Dark background for the entire page */
            color: #e0e0e0; /* Light text color to ensure readability */
            font-family: Arial, sans-serif; /* Set a clean, readable font */
        }

        /* Style for the container */
        .container {
            background-color: #1f1f1f; /* Slightly lighter dark background for the container */
            padding: 30px;
            border-radius: 8px;
            max-width: 90%; /* Ensure it takes up 90% of the page width */
            margin: 0 auto; /* Center the container */
        }

        h1 {
            color: #ffffff; /* White color for the heading */
        }

        /* Style for the alert success message */
        .alert-success {
            color: #fff; /* White text for success alert */
            background-color: #28a745; /* Green background for success */
            border-color: #28a745;
        }

        /* Style for table */
        table {
            width: 100%;
            margin-top: 20px;
            background-color: #ffffff; /* White background for table */
            color: #333; /* Dark text for better contrast on white background */
            border-collapse: collapse; /* Collapse table borders */
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            color: #ffffff; /* White color for table headers */
            background-color: #444444; /* Dark background for table headers */
            border-bottom: 2px solid #666; /* Add border below header for better separation */
        }

        td {
            background-color: #f8f8f8; /* Light gray background for table rows */
            border-bottom: 1px solid #ddd; /* Add border below rows for better separation */
        }

        .btn {
            margin-top: 10px;
        }

        .btn-primary {
            background-color: #007bff; /* Blue for Add New Student button */
            border-color: #007bff;
        }

        .btn-info {
            background-color: #17a2b8; /* Info color for View button */
            border-color: #17a2b8;
        }

        .btn-warning {
            background-color: #ffc107; /* Yellow for Edit button */
            border-color: #ffc107;
        }

        .btn-danger {
            background-color: #dc3545; /* Red for Delete button */
            border-color: #dc3545;
        }

        /* Hover effects for buttons */
        .btn:hover {
            opacity: 0.9;
        }

        /* Style for form and input fields */
        input, select, textarea {
            background-color: #444444; /* Dark background for inputs */
            color: #fff; /* Light text for input fields */
            border: 1px solid #666; /* Light border for input fields */
            padding: 10px;
            margin-top: 5px;
            width: 100%;
            border-radius: 4px;
        }

        input:focus, select:focus, textarea:focus {
            background-color: #555555; /* Lighter background for focused inputs */
            border-color: #66afe9; /* Blue border on focus */
            outline: none; /* Remove outline */
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1>Student</h1>
        <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Add New Student</a>

        <?php if (session('success')): ?>
            <div class="alert alert-success"><?= htmlspecialchars(session('success')) ?></div>
        <?php endif; ?>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student): ?>
                    <tr>
                        <td><?= htmlspecialchars($student->name) ?></td>
                        <td><?= htmlspecialchars($student->email) ?></td>
                        <td><?= htmlspecialchars($student->age) ?></td>
                        <td>
                            <a href="{{ route('students.show', $student->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
