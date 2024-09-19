<?php
require_once "connect.php";

$all_posts=mysqli_query($connect, "SELECT * FROM `posts` ORDER BY `post_id` DESC");

while($row =mysqli_fetch_assoc( $all_posts)){


echo "<div class=card style=margin-top:5vh;width:50%;>
  <div class=card-body>
    <h5 class=card-title><a href=../user/?id="."{$row['user_id']}". " class=link-dark>"."{$row['login']}"."</a></h5>
    <p class=card-text>"."{$row['text']}"."</p>
   <p class=card-text><small class=text-muted><button type=submit id=like data-id="."{$row['post_id']}"." class=btn>
        <img src=heart.svg alt=heart>
    </button>"."{$row['likes']}"."</small></p>
  </div>";

	    $image=$row['img'];

	    if(!empty($image)){

		echo "<img src=$image class=card-img-bottom  alt=image>";
	    }	
echo "</div>";
}