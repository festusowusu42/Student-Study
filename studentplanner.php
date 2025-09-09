<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subject = $_POST['subject'];
    $task = $_POST['task'];
    $dueDate = $_POST['due_date'];

    if (!isset($_SESSION['tasks'])) {
        $_SESSION['tasks'] = [];
    }

    $_SESSION['tasks'][] = [
        'subject' => $subject,
        'task' => $task,
        'due_date' => $dueDate
    ];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Study Planner</title>
    <style>
        body {
            background-color: #1a1a1a;
            color: #fff;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #2a2a2a;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
            width: 300px;
            position: relative;
        }
        h1 {
            color: #00ffff;
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            text-shadow: 0 0 10px #00bfff;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #ccc;
        }
        input {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
            box-sizing: border-box;
        }
        input[type="date"] {
            padding: 10px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #8000ff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #6600cc;
        }
        .glow {
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            background: linear-gradient(45deg, #6b00ff, #00ffff);
            border-radius: 20px;
            z-index: -1;
            filter: blur(10px);
            opacity: 0.7;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="glow"></div>
        <h1>Student Study Planner</h1>
        <form method="post" action="">
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" placeholder="e.g. Mathematics" required>
            </div>
            <div class="form-group">
                <label for="task">Task</label>
                <input type="text" id="task" name="task" placeholder="Describe the study task..." required>
            </div>
            <div class="form-group">
                <label for="due_date">Due Date</label>
                <input type="date" id="due_date" name="due_date" required>
            </div>
            <button type="submit">Add To Planner</button>
        </form>
    </div>
</body>
</html>