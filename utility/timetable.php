<?php


function generateTimetable($subjects, $teachers, $classes)
{
    $startTime = new DateTime('last Monday 9:00');
    $endTime = new DateTime('last Monday 15:00');

    $breakStart = new DateTime('last Monday 11:00');
    $breakEnd = new DateTime('last Monday 11:30');

    $lunchStart = new DateTime('last Monday 12:30');
    $lunchEnd = new DateTime('last Monday 13:00');

    $timetable = [];

    // loop through each day of the week
    for ($day = 0; $day < 5; $day++) {

        $dayTimetable = [];
        $daySubjects = $subjects;

        shuffle($daySubjects);

        // initialize current time to the start of the school day
        $currentTime = clone $startTime;

        // loop until the end of the school day
        while ($currentTime < $endTime) {


            // skipping lunch and break
            if ($currentTime >= $breakStart && $currentTime < $breakEnd) {
                $currentTime = clone $breakEnd;
            } elseif ($currentTime >= $lunchStart && $currentTime < $lunchEnd) {
                $currentTime = clone $lunchEnd;
            }

            // check if the current time exceeds the end of the school day
            $classEnd = clone $currentTime;
            $classEnd->modify('+1 hour');

            if ($classEnd > $endTime) {
                break; // end the loop if the class exceeds the end of the school day
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
                'start_time' => $currentTime->format('H:i'),
                'end_time' => $classEnd->format('H:i')
            ];

            // move to the next hour
            $currentTime = clone $classEnd;
        }

        // add day timetable to weekly timetable
        // by updating everything to the next day
        $timetable[$currentTime->format('l')] = $dayTimetable;
        $startTime->modify('+1 day');
        $endTime->modify('+1 day');
        $breakStart->modify('+1 day');
        $breakEnd->modify('+1 day');
        $lunchStart->modify('+1 day');
        $lunchEnd->modify('+1 day');
    }

    return $timetable;
}

$subjects = ['Maths', 'Science', 'History', 'English', 'Geography', 'Computer Science', 'P.E', 'D.T', 'Art'];
$teachers = ['Mr. Smith', 'Mrs. Johnson', 'Mr. Brown', 'Ms. Davis', 'Mrs. Wilson'];
$classes = ['Class A', 'Class B', 'Class C', 'Class D', 'Class E', 'Class F', 'Class G'];

$weeklyTimetable = generateTimetable($subjects, $teachers, $classes);

foreach ($weeklyTimetable as $day => $dayTimetable) {
    echo "<b>$day:</b><br>";
    foreach ($dayTimetable as $class) {
        echo "{$class['start_time']} - {$class['end_time']}: {$class['subject']} with {$class['teacher']} in {$class['class']}<br>";
    }
    echo "<br>";
}


?>