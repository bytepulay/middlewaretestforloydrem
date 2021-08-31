<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <script>
        var d = new Date();
        
    </script>
    <?php
    
    //echo $my_date_time = date("Y-m-d", strtotime("+1 hours"));
    $Date1 =date("Y-m-d");
    echo 'current date is '.$Date1.'<br>';

    $diffWithGMT=6*60*60+30*60; //converting time difference to seconds.
  $dateFormat="Y-m-d";
  $Date=gmdate($dateFormat, time()+$diffWithGMT);//time() function returns the current time measured in the number of seconds since the Unix Epoch. 
  echo 'current date is '.$Date.'<br>';

   

    $dateObject = new DateTime('now', new DateTimeZone('Asia/Yangon'));
    $mydate =$dateObject->format('h:i A');
    $str_arr = explode (" ", $mydate);
    $mTime=$str_arr[0].'<br>';
    $AMPM=$str_arr[1];
    $str_arr1 = explode (":", $mTime);
   echo $mmTime=$str_arr1[0].'<br>';
     $minute=$str_arr1[1];
     if($mmTime==12 && $AMPM=='PM'){
      $mmTime=0;
     }

 if($AMPM=='PM' && $mmTime>=4 && $minute>00){
        echo 'next one day is'. date('Y-m-d', strtotime($Date. ' + 2 days')).'<br>';
        echo 'next two day is'.date('Y-m-d', strtotime($Date. ' + 3 days')).'<br>';
 }else{
        echo 'next one day is'. date('Y-m-d', strtotime($Date. ' + 1 days')).'<br>';
        echo 'next two day is'.date('Y-m-d', strtotime($Date. ' + 2 days')).'<br>';
 }

    ?>
</body>
</html>