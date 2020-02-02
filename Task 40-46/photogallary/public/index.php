<?php require_once "../includes/initialize.php";?>
<?php
// 1. the current page number ($current_page) Use $_GET to retreive page number
//$page = 1;
//$page = $_GET['page'];
if (!empty($_GET['page'])) {
    $page = $_GET['page'];
}else{
    $page = 1;
}

// 2. records per page ($per_page)
$per_page = 3;

// 3. total record count ($total_count) .. Complete this line below to get total count from Photograph class function count_all
$total_count = Photograph::count_all();

// Find all photos
// use pagination instead
//$photos = Photograph::find_all();

$pagination = new Pagination($page, $per_page, $total_count);
$offset = $pagination->offset(3);

// Instead of finding all records, just find the records
// for this page
/*Completly write the SQL to find the photographs based on Limit and Offset Limit is $per_page and OFFSET is $pagination->offset() */
$sql = "SELECT * FROM photographs ";
$sql .= "LIMIT {$per_page} "; // Write LIMIT Statement
$sql .= "OFFSET {$offset}"; // Write OFFSET Statement
$photos = Photograph::find_by_sql($sql);

// Need to add ?page=$page to all links we want to
// maintain the current page (or store $page in $session)

?>

<?php include_layout_template('header.php'); ?>


<?php foreach ($photos as $photo):
    // Complete this foreach loop to show all images by providing $photo->image_path() in the img src attribute ?>
	  <div style="float: left; margin-left: 20px;">
            <?php echo "<a href='photo.php?id=".$photo->id."'>" ?>
                <?php echo "<img src='".$photo->image_path()."' width='200'>"; ?>
			</a>
	    <p><?php echo $photo->caption; ?> </p>
	  </div>
    <?php endforeach;?>
    
<div id="pagination" style="clear: both;">
<?php
if ($pagination->total_pages() > 1) {

    if ($pagination->has_previous_page()) {
        echo "<a href=\"index.php?page=";
        echo $pagination->previous_page();
        echo "\">&laquo; Previous</a> ";
    }

    for ($i = 1; $i <= $pagination->total_pages(); $i++) {
        if ($i == $page) {
            echo " <span class=\"selected\">{$i}</span> ";
        } else {
            echo " <a href=\"index.php?page={$i}\">{$i}</a> ";
        }
    }

    if ($pagination->has_next_page()) {
        echo " <a href=\"index.php?page=";
        echo $pagination->next_page();
        echo "\">Next &raquo;</a> ";
    }

}

?>
</div>


<?php include_layout_template('footer.php');?>
