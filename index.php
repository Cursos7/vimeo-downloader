<?php
require 'vendor/autoload.php';
use Vimeo\Vimeo;

$client = new Vimeo("bc003f6ae6fb5e4e508207d93d9852f192e225b1", "OS11rIHsRvBUP33E6VRB5hAXfdfHuvJUxsQIv/F9H/IqKk4s8lROAfx0cs2uffpf9RGEdEJI/zh4w1V7Cj3lU9ZIVvXeOjmOAMOXMIH6In4d5J/HIu6mXzZTePrrNZVd", "ba5f75402548d8aa7d0adddacefd07cd");

/* Atualizar nome e descrição do vídeo */
/*
$uri = "/videos/489049170"; /// /videos/489049170
$client->request($uri, array(
  'name' => '41001 - Curso de WP-CLI - Introdução',
  'description' => 'Apresentação do Curso de WordPress CLI, a linha de comando do WordPress',
), 'PATCH');

echo 'The title and description for ' . $uri . ' has been edited.';
*/

/* Obter todos os vídeos da Cursos7 */
$uri = "/users/8871249/videos";
$videos = $client->request($uri, array(), 'GET');

echo "<pre>";
print_r($videos);
echo "</pre>";