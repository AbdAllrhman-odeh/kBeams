<?php

/**
 * @package     local_greetings
 * @copyright   2023 Your name <your@email>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('../../config.php');

$context = context_system::instance();
$PAGE->set_context($context);
$PAGE->set_url(new moodle_url('/local/greetings/index.php'));
$PAGE->set_pagelayout('standard');
$PAGE->set_title(get_string('pluginname', 'local_greetings'));
$PAGE->set_heading(get_string('pluginname', 'local_greetings'));



echo $OUTPUT->header();

if (isloggedin()) {
    echo '<h3>Greetings, ' . fullname($USER) . '</h3>';
} else {
    echo '<h3>Greetings, user</h3>';
}

echo $OUTPUT->footer();
