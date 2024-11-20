<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>/* General Styles */
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    color: #333;
    overflow: hidden;
}

/* Form Container */
form {
    background: #ffffff;
    padding: 2em;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

form:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
}

/* Form Heading */
form h2 {
    font-size: 2em;
    margin-bottom: 1em;
    color: #007bff;
    animation: fadeInDown 0.8s ease-in-out;
}

/* Input Fields */
form input {
    width: 100%;
    padding: 0.8em;
    margin: 0.8em 0;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 1em;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

form input:focus {
    border-color: #007bff;
    box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
    outline: none;
}

/* Submit Button */
form button {
    width: 100%;
    padding: 0.8em;
    background: #007bff;
    color: #fff;
    border: none;
    border-radius: 8px;
    font-size: 1em;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

form button:hover {
    background: #0056b3;
    transform: translateY(-2px);
}

/* Link Styles */
a {
    display: inline-block;
    margin-top: 1em;
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s ease;
}

a:hover {
    color: #0056b3;
}

/* Animations */
@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
</head>
<body>
    <form action="login.php"method="POST">
        <h2>Login</h2>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <a href="register.php">Login</a>
    </form>
</body>
</html>
