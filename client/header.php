<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
</head>
<body>
     <!--Menu Area-->
     <header>
        <div class="mainText">Aurora Banking App</div>
        <nav>
            <ul class="navlinks">
                <li>
                <select name="Profile" id="profileSelect" onchange="navigateProfile()">
                    <option value="?ViewProfile=true">View Profile</option>
                    <option value="?profileSettings=true">Profile Settings</option>
                    <option value="?signUp=true">Sign Up</option>
                    <option value="?login=true">Login</option>
                </select>
                </li>
                <li><a href="?Home=true">Home</a></li>
                <li><a href="?Dasboard=true">Dasboard</a></li>
                <li><a href="?userManagement=true">User Management</a></li>
                <li><a href="?productManagement=true">Product Management</a></li>
                <li><a href="?orders=true">Orders</a></li>
                <li><a href="?reports=true">Reports</a></li>
                <li><a href="?settings=true">Settings</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>