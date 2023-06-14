<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week</title>
    <link rel="stylesheet" href="week.css">
    <style>
    .highlight {
        background-color: yellow;
    }
    </style>
</head>
<body>
    <main><header><logo>fitness</logo></br><logo>milestone</logo></header>
    <?php
$user = 'root';
$pass = 'Toshtemirov04*';
$dbName = 'web_project';

$db = new mysqli('localhost', $user, $pass, $dbName) or die("Unable to connect!");
$selectedDay = $_GET['selected_day'];
$startDay = date('Y-m-d', strtotime('-3 days', strtotime($selectedDay)));
$endDay = date('Y-m-d', strtotime('+3 days', strtotime($selectedDay)));
$startDateTime = new DateTime($startDay);
$endDateTime = new DateTime($endDay);
?>
<h1>Week View</h1>
<?php
$currentDateTime = clone $startDateTime;
while ($currentDateTime <= $endDateTime) {
    $currentDay = $currentDateTime->format('Y-m-d');
    $highlightClass = ($currentDay === $selectedDay) ? 'highlight' : '';

    echo '<table class="day-table ' . $highlightClass . '">';
    echo '<caption><a href="day.php?selected_day=' . $currentDay . '">' . $currentDateTime->format('l, F j, Y') . '</a></caption>';
    echo '<tr><th>Exercise</th><th>Weight</th><th>Sets</th><th>Reps</th><th>Rests</th></tr>';

    $query = "SELECT * FROM exercise_track WHERE Day = '$currentDay'";
    $result = mysqli_query($db, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['Exercise'] . '</td>';
        echo '<td>' . $row['Weight'] . '</td>';
        echo '<td>' . $row['Sets'] . '</td>';
        echo '<td>' . $row['Reps'] . '</td>';
        echo '<td>' . $row['Rest'] . '</td>';
        echo '</tr>';
    }

    echo '</table>';

    // Move to the next day
    $currentDateTime->modify('+1 day');
}?>
    </main>
    <footer>Murmur, inc. 2023</footer>
</body>
</html>