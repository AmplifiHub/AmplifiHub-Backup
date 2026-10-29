<?= $this->html->link('/fhttps://s3.us-east-2.amazonaws.com/amplifihub/Stores/photo/'.$dashboard[0]['email']) ;?><br>
<?php
// foreach ($pix as $profile) {
//   # code...
//   echo $profile.'<br>';
//   //echo $profile['stores'][0]['beat_name'].'<br>';
// };
foreach ($dashboard as $profile) {
  # code...
  $pix = $profile['email'];
  echo $pix.'<br>';
  /*$bio = '';*/
  foreach ($profile['stores'] as $stores) {
    # code...
    //var_dump($stores);
    $beats = $stores['user_id'];
    echo $beats.'<br>';
    $genre = $stores['genre']['genre'];
    echo $genre.'<br>';
  }

  $beat_sold = '';
}

//var_dump($dashboard[0]['stores'][0]['music_genre']);
?>
