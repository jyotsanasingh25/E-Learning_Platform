<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:#dbfffe;;
        }

        header {
            background-color:#12c2b9;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        .container {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .sidebar {
            background-color:#12c2b9;
            width: 250px;
            padding: 20px;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            overflow-y: auto;
        }

        .profile-picture img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .profile-info {
            text-align: left;
            margin-bottom: 20px;
        }

        .profile-info p {
            margin: 5px 0;
        }

        .button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            margin-bottom: 10px;
            display: block;
            width: 100%;
            text-align: left;
        }

        .button:hover {
            background-color: #555;
        }

        .profile-content {
            margin-left: 280px;
            padding: 20px;
        }

        .course {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>My Profile</h1>
    </header>
    <div class="container">
        <div class="sidebar">
            <div class="profile-picture">
                <img src="../My_website/IMAGE_FOLDER/ai.jpg" alt="Profile Picture">
            </div>
            <div class="profile-info">
                <h2>Anuj kumar</h2>
                <p>Email: johndoe@example.com</p>
                <p>Education: Bachelor's Degree</p>
                <p>Interests: Programming, Design, Photography</p>
            </div>
            <button class="button" onclick="editProfile()">Edit Profile</button>
            <button class="button" onclick="changePassword()">Change Password</button>
            <a href="../index1.php"><button class="button" onclick="logout()">Logout</button></a>
        </div>
        <main class="profile-content">
            <h2>My Courses</h2>
            <div class="course">
                <h3>Introduction to Programming</h3>
                <p>Progress: 50%</p>
            </div>
            <div class="course">
                <h3>Web Development Fundamentals</h3>
                <p>Progress: 20%</p>
            </div>
            <div class="course">
                <h3>Photography Basics</h3>
                <p>Progress: 75%</p>
            </div>
        </main>
    </div>

    <!-- JavaScript for functionality -->
    <script>
        function editProfile() {
            // Implement functionality to edit profile
            alert("Edit Profile functionality will be implemented here.");
        }

        function changePassword() {
            // Implement functionality to change password
            alert("Change Password functionality will be implemented here.");
        }

        function logout() 
        {
            // Implement logout functionality
            confirm("Logout functionality will be implemented here.");
            
            
        }
    </script>
</body>
</html>
