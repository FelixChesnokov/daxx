<?php

/**
 * Assignment: please refactor this code to be cleaner.
 */

$file = 'activity.json';

if (file_exists($file) && is_readable($file)) {
    try {
        $activities = json_decode(
            file_get_contents($file),
            true,
            JSON_THROW_ON_ERROR
        );

        $score = 0;
        $activityTypes = [
            'CommitEvent' => 2,
            'IssuesEvent' => 3,
            'CreateEvent' => 4,
            'PushEvent'   => 5,
        ];

        foreach ($activities as $activity) {
            if (isset($activity['type'])) {
                $score += $activityTypes[$activity['type']] ?? 1;
            }
        }

        echo "User has a score of {$score}.\n";
    } catch (Exception $e) {
        echo "Exception: {$e->getMessage()} \n";
    }
} else {
    echo "File not found or can not be read\n";
}
