<style>
.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
}
.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
	<?php 
	
	$sql = "select * from post";
	$result = $con->query($sql);
	
	// Count the total records
	$total_posts = mysqli_num_rows($result);
	
	//Using ceil function to divide the total records on per page
	$total_pages = ceil($total_posts / $per_page);
	
	//Going to first page
	echo "
	<center>
	<div class='pagination'>
	<a href='home.php?page=1'>First Page</a>
	";

    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc()){
            echo "<a href='home.php?page=$i'>$row</a>";
        }
    }
	for ($i=1; $i<=$total_pages; $i++) {
	}
	// Going to last page
	echo "<a href='home.php?page=$total_pages'>Last Page</a></center></div>";
	
	?>
