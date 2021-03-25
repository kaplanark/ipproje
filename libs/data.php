<?php 
function gettagline($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
		$rowcount=mysqli_num_rows($result);
		if ($rowcount==0) {
			echo 'No Tagline!!';
		}
		foreach ($result as $titles => $tagline) {
			echo ''.$tagline['tagline'].'';
		}
	}

	mysqli_close($con);
}
function geticon($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
		$rowcount=mysqli_num_rows($result);
		if ($rowcount==0) {
			echo 'NoIcon';
		}
		foreach ($result as $webicon => $icon) {
			echo ''.$icon['icon'].'';
		}
	}

	mysqli_close($con);
}
function getshortdescription($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
		$rowcount=mysqli_num_rows($result);
		if ($rowcount==0) {
			echo 'No Description!!';
		}
		foreach ($result as $titles => $sdc) {
			echo ''.$sdc['short_description'].'';
		}
	}

	mysqli_close($con);
}
function getcontacts($table,$num){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
		$rowcount=mysqli_num_rows($result);
		if ($rowcount==0) {
			echo 'No Description!!';
		}
		foreach ($result as $titles => $contacts) {
			if ($num==1) {
				echo ''.$contacts['address'].'';
			}
			elseif ($num==2) {
				echo ''.$contacts['email'].'';
			}
			elseif ($num==3) {
				echo ''.$contacts['phone'].'';
			}
			elseif ($num==4) {
				echo ''.$contacts['googlemap'].'';
			}
		
		}
	}

	mysqli_close($con);
}
function getdetaileddescription($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
		$rowcount=mysqli_num_rows($result);
		if ($rowcount==0) {
			echo 'No Description!!';
		}
		foreach ($result as $titles => $sdc) {
			echo ''.$sdc['detailed_description'].'';
		}
	}

	mysqli_close($con);
}
function countcategories(){
	require("database/db_connect.php");
	$sql="SELECT * FROM blog_categories LIMIT 10";
	if ($result=mysqli_query($con,$sql))
	{
		$rowcount=mysqli_num_rows($result);
		if ($rowcount==0) {
			echo 'No Categories!!';
		}
		foreach ($result as $categoriescount => $categorydata) {
			$categoryid=$categorydata['id'];
			$sql="SELECT * FROM blogs WHERE category='$categoryid'";
			if ($result=mysqli_query($con,$sql)) {
				$rowcountcategory=mysqli_num_rows($result);
				$getcatcount=$rowcountcategory;
			}
			echo '<a href="./category.php?id='.$categoryid.'" style="color:unset"><li class="list-group-item d-flex justify-content-between align-items-center">
			'.$categorydata['name'].'
			<span class="badge badge-success badge-pill">'.$rowcountcategory.'</span>
			</li></a>';
		}
	}

	mysqli_close($con);
}
function getbannertext($table,$position){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
		$rowcount=mysqli_num_rows($result);
		if ($rowcount==0) {
			echo 'Hello World!!';
		}
		foreach ($result as $titles => $bannertext) {

			if ($position==1) {

				echo ''.$bannertext['bannertext1'].'';
			}
			elseif ($position==2) {
		
				echo ''.$bannertext['bannertext2'].'';
			}
			elseif ($position==3) {
		
				echo ''.$bannertext['bannertext3'].'';
			}
			elseif ($position==4) {
			
				echo ''.$bannertext['bannertext4'].'';
			}
		}
	}

	mysqli_close($con);
}
function getwebname($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
		$rowcount=mysqli_num_rows($result);
		if ($rowcount==0) {
			echo 'No Name!!';
		}
		foreach ($result as $titles => $blogname) {
			echo ''.$blogname['website_name'].'';
		}
	}

	mysqli_close($con);
}
function getkeywords($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
		$rowcount=mysqli_num_rows($result);
		if ($rowcount==0) {
			echo 'Nothing';
		}
		foreach ($result as $titles => $keywords) {
			echo ''.$keywords['keywords'].'';
		}
	}

	mysqli_close($con);
}
function getlinks($table,$platform){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
		$rowcount=mysqli_num_rows($result);
		if ($rowcount==0) {
			echo '#';
		}
		foreach ($result as $link => $site) {
			if ($platform=="facebook") {
				echo ''.$site['facebook'].'';
			}
			elseif ($platform=="twitter") {
			
				echo ''.$site['twitter'].'';
			}
			elseif ($platform=="googleplus") {
			
				echo ''.$site['googleplus'].'';
			}
			elseif ($platform=="pinterest") {
			
				echo ''.$site['pinterest'].'';
			}
			elseif ($platform=="dribble") {
			
				echo ''.$site['dribble'].'';
			}

		}
	}

	mysqli_close($con);
}
function getcategoriesmenu($table)
{
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
		$rowcount=mysqli_num_rows($result);
		if ($rowcount==0) {
			echo 'No Categories';
		}
		foreach ($result as $blog_categories => $category) {
			echo '<a class="dropdown-item" href="category.php?id='.$category['id'].'">'.$category['name'].'</a>
			<div class="dropdown-divider"></div>';
		}
	}

	mysqli_close($con);
}
function getcategoryblogs($table,$id){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table WHERE category='$id' ORDER BY id DESC LIMIT 10";
	if ($result=mysqli_query($con,$sql))
	{
		$rowcount=mysqli_num_rows($result);
		if ($rowcount==0) {
			echo 'No Blogs To Fetch';
		}
		foreach ($result as $categories => $cdata) {
			echo '<div class="col-md-6 card">
							<a href="single.php?id='.$cdata['id'].'">
								<img src="blogadmin/images/'.$cdata['photo'].'" class="card-img-top img-fluid" alt="fantastic cms" style="width:480px;height:300px">
							</a>
							<div class="card-body">
								<ul class="blog-icons my-4">
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i> '.$cdata['date'].'</a>
									</li>
									<li class="mx-2">
										<a href="#">
											<i class="far fa-user"></i> '.$cdata['author'].'</a>
									</li>
									<li>
										<a href="#">
											<i class="fas fa-tags"></i> '.$cdata['tags'].'</a>
									</li>

								</ul>
								<h5 class="card-title ">
									<a href="single.php?id='.$cdata['id'].'">'.$cdata['title'].'</a>
								</h5>
								<a href="single.php?id='.$cdata['id'].'" class="btn btn-primary read-m">Read More</a>
							</div>
						</div>';
		}
	}

	mysqli_close($con);
}
