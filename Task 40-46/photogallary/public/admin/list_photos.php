<?php require_once("../../includes/initialize.php"); ?>
<?php if (!$session->is_logged_in()) { redirect_to("login.php"); } ?>
<?php
  // Find all the photos, write code here, to Get Photos you can check photograph class in includes/initialize.php
  $photos = Photograph::find_all();
?>
<?php include_layout_template('admin_header.php'); ?>

<h2>Photographs</h2>

<?php echo output_message($message); ?>
<table class="bordered">
  <tr>
    <th>Image</th>
    <th>Filename</th>
    <th>Caption</th>
    <th>Size</th>
    <th>Type</th>
		<th>Comments</th>
		<th>&nbsp;</th>
  </tr>
<?php if(isset($photos) && !empty($photos)) :  ?>
<?php foreach($photos as $photo):?>
  <tr>
    <td><?php echo "<img src='../".$photo->image_path()."' width='150'>"; ?></td>>
    <td><?php echo $photo->filename; ?></td>
    <td><?php echo $photo->caption; ?></td>
    <td><?php echo $photo->size_as_text(); ?></td>
    <td><?php echo $photo->type; ?></td>
		<td>
		<?php echo "<a href='comments.php?id=".$photo->id."'>"; ?>
    <?php echo count($photo->comments()); ?>
			</a>
		</td>
		<td><?php echo "<a href='delete_photo.php?id=".$photo->id."'>Delete</a>" ?></td>
  </tr>
<?php endforeach; ?>
<?php endif; ?>
</table>
<br />
<a href="photo_upload.php">Upload a new photograph</a>

<?php include_layout_template('admin_footer.php'); ?>
