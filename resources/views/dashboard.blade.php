<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
    
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

       
        .navbar {
            background-color: #333;
            overflow: hidden;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
        }

        .navbar img {
            height: 40px; 
            margin-right: 10px; 
        }

        .navbar a {
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

       
        .logout-link {
            color: #f2f2f2;
            text-decoration: none;
        }

        
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        
        #employee-list {
            display: none;
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

        
        .large-photo {
            width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

       
        @media screen and (max-width: 600px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar a, .logout-link {
                width: 100%;
                padding: 10px;
                text-align: left;
            }
        }
    </style>
</head>
<body>


<div class="navbar">
    <img src="{{ asset('loggo.png') }}" alt="Logo"> <!-- Add your logo image source -->
    <a href="{{ route('employee.index') }}" onclick="toggleEmployeeList()">Employee List</a>
    <a href="{{ route('employee.create') }}">Add Employee</a>
    
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="logout-link">Logout</a>
</div>


<img src="{{ asset('1.jpg') }}" alt="Large Photo" class="large-photo"> <!-- Replace 'path/to/your/photo.jpg' with the actual path to your image -->


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
                   
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


<h1>Welcome to the Dashboard!</h1>


<script>
    function toggleEmployeeList() {
        var employeeList = document.getElementById('employee-list');
        if (employeeList.style.display === 'none' || employeeList.style.display === '') {
            employeeList.style.display = 'block';
        } else {
            employeeList.style.display = 'none';
        }
    }
</script>

</body>
</html>
