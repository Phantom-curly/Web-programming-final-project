<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Main</title>
    
</head>
<body>
    <main><header><logo>fitness</logo></br><logo>milestone</logo></header>
  <?php
    $month = date('n');
    $year = date('Y');
    
    $totalDays = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    $firstDay = date('N', strtotime("$year-$month-01"));
    $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    echo '<h2>' . $months[$month - 1] . ' ' . $year . '</h2>';
    echo '<div id="calnote">';
    echo '<div id="cal">';
    echo '<table id="calendar">';
    echo '<tr>';
    echo '<th>Mon</th>';
    echo '<th>Tue</th>';
    echo '<th>Wed</th>';
    echo '<th>Thu</th>';
    echo '<th>Fri</th>';
    echo '<th>Sat</th>';
    echo '<th>Sun</th>';
    echo '</tr>';
    $rows = ceil(($totalDays + $firstDay - 1) / 7);
    for ($row = 0; $row < $rows; $row++) {
        echo '<tr>';
        for ($col = 1; $col <= 7; $col++){
            $dayNumber = $row * 7 - $firstDay + $col + 1;
            if ($dayNumber > 0 && $dayNumber <= $totalDays) {
              echo '<td class="day" data-day="'.$year.'-'.$month.'-'.$dayNumber.'">' . $dayNumber . '</td>';
            } else {
              echo '<td></td>';
            }
        }echo '</tr>';
    }
    echo '</table>';
    echo '</div>';
    ?>
    <script>
    const days = document.querySelectorAll('.day');
    days.forEach(day => {
      day.addEventListener('click', () => {
        const selectedDay = day.dataset.day;
        const url = `week.php?selected_day=${selectedDay}`;
        window.location.href = url;
      });
    });
    </script>
    <div id="monthly_thoughts">
    <label for="monthly_thoughts" style="text-align:center; font-size:25px; height:39px; font-weight: 500px;">Monthly thoughts</label>
    
      <textarea></textarea>
      <textarea></textarea>
      <textarea></textarea>
      <textarea></textarea>
      <textarea></textarea>
      <textarea></textarea>
      <textarea></textarea>
      <textarea></textarea>
      </div>
      
    </div>
    <h3>Monthly goals</h3>
    <monthly_goals id="Monthly_goals">
    <h4>In terms of training</h4>
    <h5>In terms of body</h5>
      <div style="display: grid;
    grid-template-columns: auto auto;">
        
        <div id="training_goals">
          <input type="text">
          <input type="text">
          <input type="text">
          <input type="text">
          <input type="text">
        </div>
        <div id="training_goals">
          <input type="checkbox">
          <input type="checkbox">
          <input type="checkbox">
          <input type="checkbox">
          <input type="checkbox">
        </div> 
      </div>
      <div style="display: grid;
    grid-template-columns: auto auto;"> 
        <div style="display: flex;
    flex-direction: column  ;">
          <input type="text">
          <input type="text">
          <input type="text">
          <input type="text">
          <input type="text">
        </div>
        <div style="display: flex;
    flex-direction: column  ;">
          <input type="checkbox">
          <input type="checkbox">
          <input type="checkbox">
          <input type="checkbox">
          <input type="checkbox">
        </div> 
      </div>
    </monthly_goals>
    <footer>Murmur, inc. 2023</footer>
</body>
</html>