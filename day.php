<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily</title>
    <link rel="stylesheet" href="day.css">
</head>
<body>
    
    <header><logo>fitness</logo></br><logo>milestone</logo></header>
    <h1>Date</h1>
    <?php
    $selectedDay = $_GET['selected_day'] ?? '';
    ?>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"].'?selected_day='.$selectedDay; ?>" style="display: grid; grid-template-columns: auto auto auto auto auto;"> 
        <input type="hidden" name="selected_day" value="<?php echo $selectedDay; ?>">    
        <input type="text" name="exercise" id="exercise" placeholder="Exercise name..." required>
        <input type="text" name="weight" id="weight" placeholder="ex.300kg...">
        <input type="text" name="sets" id="sets" placeholder="ex. 5...">
        <input type="text" name="reps" id="reps" placeholder="ex. 12...">
        <input type="text" name="rest_int" id="rest_int" placeholder="ex. 2(minutes)">
        <label for="trNotes">Training review</label>
        <textarea name="trNotes" id="trNotes"></textarea>
        <button type="submit">Save</button>
    </form>
    <?php
    $user = 'root';
    $pass = 'Toshtemirov04*';
    $db = 'web_project';
    $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect!");
    date_default_timezone_set("Asia/Seoul");
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $selectedDay = $_POST['selected_day'];
        $exercise = $_POST['exercise'];
        $weight = $_POST['weight'];
        $sets = $_POST['sets'];
        $reps = $_POST['reps'];
        $rest_int = $_POST['rest_int'];
        $notes = $_POST['trNotes'];
        $query = "INSERT INTO `exercise_track`(`Day`, `Exercise`, `Weight`, `Sets`, `Reps`, `Rest`, `Notes`)    
        VALUES ('$selectedDay', '$exercise', '$weight', '$sets', '$reps', '$rest_int', '$notes')";
        mysqli_query($db, $query) or die(mysqli_error($db));
        header("Location: ".$_SERVER['PHP_SELF']."?selected_day=".$selectedDay);
        exit();
    }
   
    $query = "SELECT `Exercise`, `Weight`, `Sets`, `Reps`, `Rest`, `Notes` FROM exercise_track WHERE Day='$selectedDay'";
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result) > 0) {
        echo '<table>';
        echo '<tr><th>Exercise</th><th>Weight</th><th>Sets</th><th>Reps</th><th>Rest</th><th>Notes</th></tr>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['Exercise'] . '</td>';
            echo '<td>' . $row['Weight'] . '</td>';
            echo '<td>' . $row['Sets'] . '</td>';
            echo '<td>' . $row['Reps'] . '</td>';
            echo '<td>' . $row['Rest'] . '</td>';
            echo '<td>' . $row['Notes'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo 'No data available.';
    }
    mysqli_close($db);
    
    ?>  
    <footer>Murmur, inc. 2023</footer>
</body>
</html>