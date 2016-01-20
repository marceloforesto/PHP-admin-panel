<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1>
    HOME
  </h1>
  <style type = "text/css" media = "screen">
        label {display: block;}
    </style> 

	<?php $id = 48; echo form_open('dashboard_includes/home/update_title/' . $id); ?>
    <p>
    	<label for = "title" > First title of navbar </label>
    	<input type = "text" name = "title" id = "title" />
    </p>
    <p>
    	<input type = "submit" value = "Submit" />
    </p>
    <?php echo form_close(); ?>

    <?php $id = 49; echo form_open('dashboard_includes/home/update_title/' . $id); ?>
    <p>
        <label for = "title" > Second title of navbar </label>
        <input type = "text" name = "title" id = "title" />
    </p>
    <p>
        <input type = "submit" value = "Submit" />
    </p>
    <?php echo form_close(); ?>

    <?php $id = 50; echo form_open('dashboard_includes/home/update_title/' . $id); ?>
    <p>
        <label for = "title" > Third title of navbar </label>
        <input type = "text" name = "title" id = "title" />
    </p>
    <p>
        <input type = "submit" value = "Submit" />
    </p>
    <?php echo form_close(); ?>

    <?php $id = 51; echo form_open('dashboard_includes/home/update_title/' . $id); ?>
    <p>
    	<label for = "title" > Fourth title of navbar </label>
    	<input type = "text" name = "title" id = "title" />
    </p>
    <p>
    	<input type = "submit" value = "Submit" />
    </p>
    <?php echo form_close(); ?>

    <?php $id = 52; echo form_open('dashboard_includes/home/update_title/' . $id); ?>
    <p>
        <label for = "title" > Fifth title of navbar </label>
        <input type = "text" name = "title" id = "title" />
    </p>
    <p>
        <input type = "submit" value = "Submit" />
    </p>
    <?php echo form_close(); ?>

    <?php $id = 53; echo form_open('dashboard_includes/home/update_title/' . $id); ?>
    <p>
        <label for = "title" > Sixth title of navbar </label>
        <input type = "text" name = "title" id = "title" />
    </p>
    <p>
        <input type = "submit" value = "Submit" />
    </p>
    <?php echo form_close(); ?>

    <?php $id = 47; echo form_open('dashboard_includes/home/update_title/' . $id); ?>
    <p>
        <label for = "title" > Credits of the developer </label>
        <input type = "text" name = "title" id = "title" />
    </p>
    <p>
        <input type = "submit" value = "Submit" />
    </p>
    <?php echo form_close(); ?>

    <?php $id = 2; echo form_open_multipart('dashboard_includes/home/update_image/' . $id); ?>
    <p>
    	<label for = "title" > Left image </label>
        <?php echo form_upload('pic'); ?>
    </p>
    <p>
        <input type = "submit" value = "Submit" />
    </p>
    <?php echo form_close(); ?>

    <?php $id = 3; echo form_open_multipart('dashboard_includes/home/update_image/' . $id); ?>
    <p>
    	<label for = "title" > Right image </label>
        <?php echo form_upload('pic'); ?>
    </p>
    <p>
        <input type = "submit" value = "Submit" />
    </p>
    <?php echo form_close(); ?>

    <?php $id = 1; echo form_open_multipart('dashboard_includes/home/update_image/' . $id); ?>
    <p>
    	<label for = "title" > Logo image </label>
        <?php echo form_upload('pic'); ?>
    </p>
    <p>
        <input type = "submit" value = "Submit" />
    </p>
    <?php echo form_close(); ?>

    <?php $id = 8; echo form_open_multipart('dashboard_includes/home/update_image/' . $id); ?>
    <p>
        <label for = "title" > Favicon image </label>
        <?php echo form_upload('pic'); ?>
    </p>
    <p>
        <input type = "submit" value = "Submit" />
    </p>
    <?php echo form_close(); ?>
</div>