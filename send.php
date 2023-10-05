
<?php
 
$token = "5770865557:AAH0ZkT4BfJnhixZ0LJCZdY2m1j2_xhhk3I"; // token bot

  $apiToken = "5770865557:AAH0ZkT4BfJnhixZ0LJCZdY2m1j2_xhhk3I";
  $data = [
      
      'test'    => 'Hello from PHP!',
      'chat_id' => '-879673548'
  ];
  $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
                                 http_build_query($data));
?>