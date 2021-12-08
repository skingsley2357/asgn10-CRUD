<?php 
require_once('../../private/initialize.php');
$page_title = 'Create Salamander'; 
include(SHARED_PATH . '/salamanderHeader.php'); 
?>

  <a href="<?= url_for('index.php'); ?>">&laquo; Home</a>

    <h1>Create Salamander</h1>

    <form action="<?= url_for('salamanders/create.php'); ?>" method="post" id="new">
    <dl>
        <dt>Salamander Name</dt>
        <dd><textarea form="new" name="salamanderName" value="" rows="4" cols="75"></textarea></dd>
      </dl>
      <dl>
        <dt>Salamander Habitat</dt>
        <dd><textarea form="new" name="salamanderHabitat" value="" rows="4" cols="75"></textarea></dd>
      </dl>
      <dl>
        <dt>Salamander Description</dt>
        <dd><textarea form="new" name="salamanderDescription" value="" rows="4" cols="75"></textarea></dd>
      </dl>
        <input type="submit" value="Create Salamander">
    </form>

<?php include(SHARED_PATH . '/salamanderFooter.php'); ?>
