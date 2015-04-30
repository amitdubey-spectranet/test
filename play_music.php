
<?php
$m = new SWFMovie();
$m->setRate(12.0);
$m->streamMp3(file_get_contents("cut-tera-hone-44.mp3"));
// use your own MP3

// The file is 11.85 seconds at 12.0 fps = 142 frames
$m->setFrames(142);

header('Content-type: application/x-shockwave-flash');
$m->output();
?>

