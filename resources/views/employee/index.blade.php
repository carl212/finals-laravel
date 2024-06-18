

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>
    <style>
      
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

       
        .navbar {
            background-color: #333;
            overflow: hidden;
            position: relative; 
        }

        .navbar img {
            display: block;
            float: left;
            height: 40px; 
            margin-right: 10px; 
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

       
        .logout-link {
            position: absolute;
            top: 0;
            right: 0;
            padding: 14px 16px;
            color: #f2f2f2;
            text-decoration: none;
        }

        
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        
        #employee-list table {
            width: 100%;
            border-collapse: collapse;
        }

        #employee-list th, #employee-list td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        #employee-list th {
            background-color: #f2f2f2;
        }

      
        .crud-buttons a,
        .crud-buttons form {
            display: inline-block;
            margin: 0 5px;
        }

        .crud-buttons button,
        .crud-buttons a {
            padding: 5px 10px;
            text-decoration: none;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            color: #fff;
        }

        .crud-buttons a.edit-button {
            background-color: #4CAF50;
        }

        .crud-buttons a.edit-button:hover {
            background-color: #45a049;
        }

        .crud-buttons form button.delete-button {
            background-color: #f44336;
        }

        .crud-buttons form button.delete-button:hover {
            background-color: #e31e10;
        }
    </style>
</head>
<body>

<div class="navbar">
    <img src="{{ asset('loggo.png') }}" alt="Logo"> <!-- Add your logo image source -->
    <a href="{{ route('dashboard') }}">Dashboard</a>
    <a href="{{ route('employee.create') }}">Add Employee</a>
    <!-- Logout form -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="logout-link">Logout</a>
</div>


<div id="employee-list">
    <h2>Employee List</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Address</th>
                <th>Sex</th>
              
                <th>Actions</th> <!-- Actions column for CRUD buttons -->
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->age }}</td>
                    <td>{{ $employee->address }}</td>
                    <td>{{ $employee->sex }}</td>
                   
                    <td class="crud-buttons">
                        
                        <a href="{{ route('employee.edit', $employee->id) }}" class="edit-button">Edit</a>

                        
                        <form action="{{ route('employee.destroy', $employee->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
