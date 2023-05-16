<!DOCTYPE html>
<html>
<head>
    <title>Daily Routine</title>
</head>
<body>
    <?php
   
    $dayOfWeek = date('l'); 

    switch ($dayOfWeek) {
        case 'Monday':
            echo "<h1>Monday Routine</h1>";
            echo "<p>Wake up early.</p>";
            echo "<p>Go to college.</p>";
            echo "<p>Attend classes.</p>";
            echo "<p>Complete pending Assignment.</p>";
            break;

        case 'Tuesday':
            echo "<h1>Tuesday Routine</h1>";
            echo "<p>Wake up on 5.00 o'clocl.</p>";
            echo "<p>Work on Naan mudalvan.</p>";
            echo "<p>Prepare Exam.</p>";
            break;

        case 'Wednesday':
            echo "<h1>Wednesday Routine</h1>";
            echo "<p>Wake up early.</p>";
            echo "<p>Work on new ideas.</p>";
            echo "<p>Attend typing classes.</p>";
            echo "<p>Review progress.</p>";
            break;

        case 'Thursday':
            echo "<h1>Thursday Routine</h1>";
            echo "<p>Wake up early.</p>";
            echo "<p>heping mom.</p>";
            echo "<p>playing games.</p>";
            echo "<p>Checking emails.</p>";
            break;

        case 'Friday':
            echo "<h1>Friday Routine</h1>";
            echo "<p>Wake up early.</p>";
            echo "<p>Prepare for presentations.</p>";
            echo "<p>present the ppt.</p>";
            echo "<p>Wrap up pending class.</p>";
            break;

        default:
            echo "<h1>Weekend Routine</h1>";
            echo "<p>Enjoy the weekend!</p>";
            break;
    }
    ?>
</body>
</html>
