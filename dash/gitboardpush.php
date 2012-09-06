<?php require("leftronic.php");
// make sure the CAcerts folder is in the same path as these .php files as well!

date_default_timezone_set('Europe/London');

$leftronic = new Leftronic('H60OPzUu4rkA4hvUV57GP9FxlDM4TFCF');

$data = json_decode($_POST['payload']);

echo '<h1>GitHub Commit Hook Receiver</h1>';

foreach ($data->commits as $commit)
{

	echo '<h2>Commit</h2>';

	var_dump($commit);

	$leftronic->pushText('gitstream', $data->repository->name, $commit->author->name . ': ' . $commit->message);
	
	
}

?>
