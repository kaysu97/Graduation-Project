<?php
session_start();
$email = $_SESSION['email'];
include('configcompany.php');

// $email="suekai88@gmail.com";
// $_GET['email'];
// $_POST["view"] = "yes";
$_POST["view"] = "yes";
if(isset($_POST['view'])){

// $conn = mysqli_connect("140.119.19.16", "howard", "ilovehoward", "company");

if($_POST["view"] != ''){
//    $update_query=$conn->query('UPDATE usercomment SET comment_status = 1 WHERE comment_status=0') or die($conn->error);
//   $update_query = "UPDATE usercomment SET comment_status = 1 WHERE comment_status=0";
//    $upquery = mysqli_query($conn,$update_query );
//    $upquery1 = mysqli_num_rows($upquery);
  mysqli_query($conn,"update `usercomment` set comment_status='1' where comment_status='0'");
}

$query = "SELECT * FROM companyarticle INNER JOIN usercomment ON companyarticle.id = usercomment.articleid where companyarticle.user = '$email' ORDER BY usercomment.id DESC LIMIT 5";
// $query = "SELECT * FROM companyarticle
//           where companyarticle.user = '$email'
//            and (SELECT *,'date' as 'time'FROM usercomment
//               where companyarticle.id = usercomment.articleid
//               UNION ALL
//               SELECT *,'time' as `time` FROM favorite
//               where favorite.articleid = companyarticle.id
//               ORDER BY  'time' DESC)";
// $query = "SELECT usercomment.date as T , favorite.time as T , *
//            from usercomment,companyarticle,favorite where companyarticle.user = '$email' ORDER BY  T DESC or companyarticle.id = usercomment.articleid and favorite.articleid = companyarticle.id";
$result = mysqli_query($conn, $query);
$output = '';
// if($row = mysqli_fetch_array($result)){
// foreach ($row['name'] as $key ) {
//   echo $key;
//  }
// }
if(mysqli_num_rows($result)>0){
   while($row = mysqli_fetch_array($result)){
   // if(!empty($row['date'])){
   $output .= '
   <li>
    <a href="company/company-2.php?id='.$row['articleid'].'">
    <strong>'.$row['name'].'在你的公司面試文章上留言：</strong><br/>
   <strong>'.$row['comment'].'</strong>
    </a>
    </li>
  ';
  // }
    // else{
  // $output .= '
  // <li>
  //   <a href="#">
  //   <strong>'.$row['name'].'收藏你的文章</strong><br/>
  //   </a>
  // </li>';
  //        }
     }
  }else{
  $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
  }

  $query1=mysqli_query($conn,"select * from usercomment where comment_status='0'");
  $count = mysqli_num_rows($query1);
  $data = array(
    'notification'   => $output,
    'unseen_notification' => $count
  );
  echo json_encode($data) ;

}

?>
