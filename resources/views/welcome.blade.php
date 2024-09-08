<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #333;
        }

        .container {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 40px;
            width: 100%;
            max-width: 800px; /* Adjust width for better appearance */
        }

        .row {
            display: flex;
            justify-content: space-around; /* Change to vertical layout */
            gap: 20px; /* Optional: space between the items */
        }

        p {
            font-size: 1.2em;
            margin-bottom: 30px;
        }

        a {
            text-decoration: none;
            color: white;
            background-color: #007BFF;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #0056b3;
        }

        img {
            margin-bottom: 20px; /* Space between image and heading */
            border-radius: 50%; /* Make the image circular */
            width: 140px; /* Set width for consistency */
            height: 140px; /* Set height for consistency */
            object-fit: cover; /* Ensure the image covers the circular area */
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Welcome To website</h1>
        <div class="row">
            <div class="col">
                <img class="bd-placeholder-img rounded-circle" src="https://images.startups.co.uk/wp-content/uploads/2017/06/Job-offer-new-employee-1.jpg?width=709&height=460&fit=crop" alt="Placeholder Image">
                <h2>List Data Employee</h2>
                <p><a class="btn btn-secondary" href="{{ route('employee.index') }}">View details Employee »</a></p>
            </div>
            <div class="col">
                <img class="bd-placeholder-img rounded-circle" src="https://w7.pngwing.com/pngs/912/661/png-transparent-computer-icons-location-location-icon-map-location-icon-miscellaneous-desktop-wallpaper-map.png" alt="Placeholder Image">
                <h2>List Data Location</h2>
                <p><a class="btn btn-secondary" href="{{ route('location.index') }}">View details Location »</a></p>
            </div>
        </div>
    </div>
</body>

</html>