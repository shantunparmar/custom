<?php
include 'instagram_class.php';
include 'instagram_config.php';
ini_set('max_execution_time', '1600'); 

$username = '';   // your username
$password = '';   // your password

 
$insta = new instagram();
$response = $insta->Login($username, $password);

#https://piar.me/d1N2s

if(strpos($response[1], "Sorry")) {
    echo "Request failed, there's a chance that this proxy/ip is blocked";
    print_r($response);
    exit();
}        
if(empty($response[1])) {
    echo "Empty response received from the server while trying to login";
    print_r($response);
    exit();
}
 
$search = $searchtag[array_rand($searchtag)];

$res = $insta->SearchTag($search);


$arr=array("Follow","Like","Comment");
$decode = json_decode($res[1], true);
$i=0;

foreach($decode['items'] as $data)  {
       
    $i++;
    $d = explode("_", $data['id']);
    $media_id = $d[0];
    $user_id = $d[1];
    $like_count = $data['like_count'];
    $comment_count = $data['comment_count'];
    $username = $data['user']['username'];
    $haslike = $data['has_liked'];
 
    if ($i<40)  {
        if ($like_count < 20 )  {
            $fakecomment = $hello[array_rand($hello)].' '.'@'. $username . ' ' . $praise[array_rand($praise)];
            $fres=$insta->IsFriend($user_id);
            $friend = json_decode($fres[1], true);
                if (!$haslike) {
                    echo "<br> All auto comment, post, Like";
                    sleep(rand(3,10));
                    $res=$insta->PostLike($media_id);
                    sleep(rand(3,10));
                    $res=$insta->PostComment($fakecomment, $media_id);  
                    sleep(rand(3,10)); 
                } 

            shuffle($arr);

           //  if($arr[0]=='Follow'){

           //  if (!$friend['following'] && !$friend['is_private'] && !$friend['outgoing_request'])  {
           //      $res=$insta->PostFollow($user_id);
           //      echo "<br> after follow";
           //      if (!$haslike) {
           //          echo "<br> All auto comment, post, Like";
           //          sleep(rand(3,10));
           //          $res=$insta->PostLike($media_id);
           //          sleep(rand(3,10));
           //          $res=$insta->PostComment($fakecomment, $media_id);  
           //          sleep(rand(3,10)); 
           //      }              
           //  } else {
           //          if (!$haslike) {
           //          echo "<br> Like only";
           //          sleep(rand(3,10));
           //          $res=$insta->PostLike($media_id);   
           //          }
           //  }

           // } //
        }
    }
    unset($res);   
}
 
exit();
?>