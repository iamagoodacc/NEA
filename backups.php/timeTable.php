<?php


function generateTimetable($subjects, $teachers, $classes)
{
    // school day start and end
    $startTime = strtotime('last Monday 9:00');
    $endTime = strtotime('last Monday 15:00');

    // times for break and lunch
    $breakStart = strtotime('last Monday 11:00');
    $breakEnd = strtotime('last Monday 11:30');
    $lunchStart = strtotime('last Monday 12:30');
    $lunchEnd = strtotime('last Monday 13:00');
    
    $timetable = [];

    for ($day = 0; $day < 5; $day++) {

        $dayTimetable = [];
        $daySubjects = $subjects;

        // shuffle the subjects list for randomization
        shuffle($daySubjects);

        // initialize current time to the start of the school day
        $currentTime = $startTime;

        // loop until the end of the school day
        while ($currentTime < $endTime) {

            // calculate class end time
            $classEnd = $currentTime + 3600; // class duration is 1 hour

            // check if it's time for break or lunch
            if ($currentTime >= $breakStart && $currentTime < $breakEnd) {
                // skip the break
                $currentTime = $breakEnd;
            } elseif ($currentTime >= $lunchStart && $currentTime < $lunchEnd) {
                // skip lunchtime
                $currentTime = $lunchEnd;
            }

            // check if the current time exceeds the end of the school day
            if ($classEnd > $endTime) {
                break; // End the loop if the class exceeds the end of the school day
            }

            // take the next subject from the shuffled subjects list
            $subject = array_shift($daySubjects);

            // take a random teacher and class for the subject
            $teacher = $teachers[array_rand($teachers)];
            $class = $classes[array_rand($classes)];

            // add class to day timetable
            $dayTimetable[] = [
                'subject' => $subject,
                'teacher' => $teacher,
                'class' => $class,
                'start_time' => date('H:i', $currentTime),
                'end_time' => date('H:i', $classEnd)
            ];

            // move to the next hour
            $currentTime = $classEnd;
        }

        // add day timetable to weekly timetable
        $timetable[date('l', strtotime("+$day days", $startTime))] = $dayTimetable;
    }

    return $timetable;
}

$subjects = ['Maths', 'Science', 'History', 'English', 'Geography', 'Computer Science', 'P.E', 'D.T', 'Art'];
$teachers = ['Mr. Smith', 'Mrs. Johnson', 'Mr. Brown', 'Ms. Davis', 'Mrs. Wilson'];
$classes = ['Class A', 'Class B', 'Class C', 'Class D', 'Class E', 'Class F'];

$weeklyTimetable = generateTimetable($subjects, $teachers, $classes);

foreach ($weeklyTimetable as $day => $dayTimetable) {
    echo "<b>$day:</b><br>";
    foreach ($dayTimetable as $class) {
        echo "{$class['start_time']} - {$class['end_time']}: {$class['subject']} with {$class['teacher']} in {$class['class']}<br>";
    }
    echo "<br>";
}



?>