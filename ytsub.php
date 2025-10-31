PHP > 5
`<?php
$arrContextOptions=array(
"ssl"=>array(
"verify_peer"=>false,
"verify_peer_name"=>false,
),
);

$channel_id = " ";
$api_key = " ";
$api_response = file_get_contents('https://www.googleapis.com/youtube/v3/channels?part=statistics&id='.$channel_id.'&fields=items/statistics/subscriberCount&key='.$api_key, false, stream_context_create($arrContextOptions));
$api_response_decoded = json_decode($api_response, true);
echo $api_response_decoded['items'][0]['statistics']['subscriberCount'];
?>`
