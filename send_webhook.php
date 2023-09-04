<?php

$webhookUrl = 'discord_webhook_here';

$userAgent = $_SERVER['HTTP_USER_AGENT'];
$ipAddress = $_SERVER['REMOTE_ADDR'];

$timestamp = date('Y-m-d H:i:s');
$data = [
    'embeds' => [
        [
            'title' => 'Website Visit',
            'color' => 0xFFFFFF,
            'description' => "User Agent: $userAgent\nIP Address: $ipAddress\nTime: $timestamp",
            
        ],
    ],
];
$jsonData = json_encode($data);
$ch = curl_init($webhookUrl);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
if (curl_errno($ch)) {
    error_log('Error sending data to Discord: ' . curl_error($ch));
}
curl_close($ch);
?>
