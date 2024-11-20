<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment</title>
    <style>/* General Styles */
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background: linear-gradient(120deg, #84fab0, #8fd3f4);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    color: #333;
}

/* Form Container */
form {
    background: #ffffff;
    padding: 2.5em;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    width: 100%;
    max-width: 400px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

form:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
}

/* Form Heading */
form h2 {
    font-size: 2.5em;
    margin-bottom: 1.5em;
    color: #007bff;
    font-weight: bold;
    animation: fadeInDown 0.8s ease-in-out;
}

/* Input Fields */
form input {
    width: 100%;
    padding: 0.9em;
    margin: 1em 0;
    border: 1px solid #ddd;
    border-radius: 10px;
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
    padding: 1em;
    background: #007bff;
    color: #fff;
    border: none;
    border-radius: 10px;
    font-size: 1.1em;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

form button:hover {
    background: #0056b3;
    transform: translateY(-2px);
}

/* Link Styles */
form a {
    display: inline-block;
    margin-top: 1.5em;
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s ease;
}

form a:hover {
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

/* Responsive Design */
@media (max-width: 768px) {
    form {
        padding: 2em;
    }

    form h2 {
        font-size: 2em;
    }

    form input, form button {
        padding: 0.8em;
    }
}
</style>
</head>
<body>
    <form method="POST">
        <h2>Book an Appointment</h2>
        <input type="text" name="doctor" placeholder="Doctor's Name" required>
        <input type="date" name="appointment_date" required>
        <input type="time" name="appointment_time" required>
        <button type="submit">Book Appointment</button>
        <a href="welcome.php">Book Appointment</a>
    </form>
</body>
</html>
