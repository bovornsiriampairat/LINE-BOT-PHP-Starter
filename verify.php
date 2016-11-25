<?php
$access_token = 'k7lIczh8p2iRR4BZm0xx0Z+dInJe1GAwpQCFFUWLKlO/kE6gAiKojudTlMEdpblrIlg5BEaZBXp2PZ9/SYecn9gI4zsDZm1TyZPFPBs/Y34AmT1JUIz0lBe2KffF4haNY/azrBeL7g/ZYoSHJmuq+QdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
