<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1>
    Contact
  </h1>
  <style type = "text/css" media = "screen">
        label {display: block;}
    </style> 

	<?php $id = 29; echo form_open('dashboard_includes/contact/update_title/' . $id); ?>
    <p>
    	<label for = "title" > Main title </label>
    	<input type = "text" name = "title" id = "title" />
    </p>
    <p>
    	<input type = "submit" value = "Submit" />
    </p>
    <?php echo form_close(); ?>

    <?php $id = 24; echo form_open('dashboard_includes/contact/update_text/' . $id); ?>
    <p>
        <label for = "text" > Text  </label>
        <textarea name = "text" id = "text" rows="4" cols="50"> </textarea>
    </p>
    <p>
        <input type = "submit" value = "Submit" />
    </p>
    <?php echo form_close(); ?>

    <?php $id = 30; echo form_open('dashboard_includes/contact/update_title/' . $id); ?>
    <p>
        <label for = "title" > Title of address </label>
        <input type = "text" name = "title" id = "title" />
    </p>
    <p>
        <input type = "submit" value = "Submit" />
    </p>
    <?php echo form_close(); ?>

    <?php $id = 26; echo form_open('dashboard_includes/contact/update_text/' . $id); ?>
    <p>
        <label for = "text" > Address  </label>
        <textarea name = "text" id = "text" rows="4" cols="50"> </textarea>
    </p>
    <p>
        <input type = "submit" value = "Submit" />
    </p>
    <?php echo form_close(); ?>

    <?php $id = 31; echo form_open('dashboard_includes/contact/update_title/' . $id); ?>
    <p>
        <label for = "title" > Title of phone </label>
        <input type = "text" name = "title" id = "title" />
    </p>
    <p>
        <input type = "submit" value = "Submit" />
    </p>
    <?php echo form_close(); ?>

    <?php $id = 27; echo form_open('dashboard_includes/contact/update_text/' . $id); ?>
    <p>
        <label for = "text" > Phone  </label>
        <textarea name = "text" id = "text" rows="4" cols="50"> </textarea>
    </p>
    <p>
        <input type = "submit" value = "Submit" />
    </p>
    <?php echo form_close(); ?>

    <?php $id = 54; echo form_open('dashboard_includes/contact/update_title/' . $id); ?>
    <p>
        <label for = "title" > E-mail form </label>
        <input type = "text" name = "title" id = "title" />
    </p>
    <p>
        <input type = "submit" value = "Submit" />
    </p>
    <?php echo form_close(); ?>
</div>