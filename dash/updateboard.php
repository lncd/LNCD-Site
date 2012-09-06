<?php require("leftronic.php");
// make sure the CAcerts folder is in the same path as these .php files as well!

date_default_timezone_set('Europe/London');

$leftronic = new Leftronic('H60OPzUu4rkA4hvUV57GP9FxlDM4TFCF');

$people = array(
	'nick' => array(
		'name'		=> 'Nick',
		'email'		=> 'nijackson@lincoln.ac.uk',
		'fs_id'		=> '1552280',
		'fs_token'	=> '1U31V43DQU0FI2CZFUXDS1WAHOS4G20VAGK1VDN01YR1AZN2'
	),
	'jamie' => array(
		'name'		=> 'Jamie',
		'email'		=> 'jmahoney@lincoln.ac.uk',
		'fs_id'		=> '7497892',
		'fs_token'	=> 'XJGAPUK4VUHVUEFJ4BNKPZQBCO4YRPMQFHAFXXUKD3BQJM34'
	),
	'harry' => array(
		'name'		=> 'Harry',
		'email'		=> 'hnewton@lincoln.ac.uk',
	)
);

foreach ($people as $id => $person)
{

	$html = '<img style="float:right;width:50px;height:50px" src="http://www.gravatar.com/avatar/' . md5($person['email']) . '?s=50&r=g&d=retro"><span style="font-size:30px">' . $person['name'] . '</span>';
	
	if (isset($person['fs_id']) AND isset($person['fs_token']))
	{
		if ($fsdata = json_decode(file_get_contents('https://api.foursquare.com/v2/users/' . $person['fs_id'] . '?oauth_token=' . $person['fs_token'] . '&v=20120814')))
		{
			if (isset ($fsdata->meta->code) AND $fsdata->meta->code === 200)
			{
				$checkin = $fsdata->response->user->checkins->items[0];
				
				if (isset($checkin->private) AND $checkin->private == 1)
				{
					$html .= '<p><span style="font-size:1.5em">Off The Grid</span><br><span style="font-size:1.3em">' . date('g.ia, D j M', $checkin->createdAt) . '</p>';
				}
				else
				{
					$html .= '<p><span style="font-size:1.5em">' . $checkin->venue->name . '</span><br><span style="font-size:1.3em">' . date('g.ia, D j M', $checkin->createdAt) . '</p>';
				}
			}
			else
			{
				$html .= '<p style="font-size:1.1em">Foursquare didn\'t return valid data.</p>';
			}
		}
		else
		{
			$html .= '<p style="font-size:1.1em">Unable to retrieve Foursquare data.</p>';
		}
	}

	$leftronic->pushHtml('topbox-' . $id, $html);
}

$hoursremaining = ( strtotime('16:30') - time() ) / 60 / 60;

echo $hoursremaining;

$leftronic->pushNumber('friday', $hoursremaining);

?>
