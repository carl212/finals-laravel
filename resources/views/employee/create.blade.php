<!-- resources/views/employee/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Container styles */
        .container {
            width: 50%;
            margin: auto;
            padding: 20px;
        }

        /* Row styles */
        .row {
            margin-bottom: 15px;
        }

        /* Column styles */
        .col-25 {
            float: left;
            width: 25%;
            padding: 0 10px;
            box-sizing: border-box;
        }

        .col-75 {
            float: left;
            width: 75%;
            padding: 0 10px;
            box-sizing: border-box;
        }

        /* Input styles */
        input[type="text"],
        input[type="email"],
        input[type="number"],
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        /* Submit button styles */
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Submit button hover effect */
        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Navigation bar styles */
        .navbar {
            background-color: #333;
            overflow: hidden;
            position: relative; /* Added position relative */
        }

        .navbar img {
            display: block;
            float: left;
            height: 40px; /* Adjust the height as needed */
            margin-right: 10px; /* Add some space between the logo and links */
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Change the color of links on hover */
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Position logout link to the right */
        .logout-link {
            position: absolute;
            top: 0;
            right: 0;
            padding: 14px 16px;
            color: #f2f2f2;
            text-decoration: none;
        }
    </style>
</head>
<body>

<!-- Navigation bar -->
<div class="navbar">
    <img src="{{ asset('loggo.png') }}" alt="Logo"> <!-- Add your logo image source -->
    <a href="{{ route('dashboard') }}">Dashboard</a>
    <a href="{{ route('employee.index') }}">Employee List</a>
    <!-- Logout form -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="logout-link">Logout</a>
</div>

<div class="container">
    <h1>Add Employee</h1>

    <form action="{{ route('employee.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-25">
                <label for="name">Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="name" name="name" placeholder="Your name.." required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="email">Email</label>
            </div>
            <div class="col-75">
                <input type="email" id="email" name="email" placeholder="Your email.." required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="address">Address</label>
            </div>
            <div class="col-75">
                <input type="text" id="address" name="address" placeholder="Your address.." required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="age">Age</label>
            </div>
            <div class="col-75">
                <input type="number" id="age" name="age" placeholder="Your age.." required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="sex">Sex</label>
            </div>
            <div class="col-75">
                <select id="sex" name="sex" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="status">Status</label>
            </div>
            <div class="col-75">
                <input type="text" id="status" name="status" placeholder="Your status.." required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="insurance">Insurance</label>
            </div>
            <div class="col-75">
                <input type="text" id="insurance" name="insurance" placeholder="Your insurance.." required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="mobile_number">Mobile Number</label>
            </div>
            <div class="col-75">
                <input type="text" id="mobile_number" name="mobile_number" placeholder="Your mobile number.." required>
            </div>
        </div>

        <div class="row">
            <input type="submit" value="Submit">
        </div>
    </form>
</div>

</body>
</html>
