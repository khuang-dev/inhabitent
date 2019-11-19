<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">
   <p>
      <label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
   </p>
   <p>
      <label for="<?php echo $this->get_field_id('phone'); ?>">Phone number:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('phone'); ?>" name="<?php echo $this->get_field_name('phone'); ?>" type="text" value="<?php echo $phone; ?>">
   </p>
   <p>
      <label for="<?php echo $this->get_field_id('email'); ?>">Email:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" type="text" value="<?php echo $email; ?>">
   </p>
   <p>
      <label for="<?php echo $this->get_field_id('address'); ?>">Address:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('address'); ?>" name="<?php echo $this->get_field_name('address'); ?>" type="text" value="<?php echo $address; ?>">
   </p>
   <p>
      <label for="<?php echo $this->get_field_id('city'); ?>">City:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('city'); ?>" name="<?php echo $this->get_field_name('city'); ?>" type="text" value="<?php echo $city; ?>">
   </p>
   <p>
      <label for="<?php echo $this->get_field_id('postalcode'); ?>">Postal code:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('postalcode'); ?>" name="<?php echo $this->get_field_name('postalcode'); ?>" type="text" value="<?php echo $postalcode; ?>">
   </p>

</div>
