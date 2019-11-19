<!-- This file is used to markup the public-facing widget. -->
<?php if( strlen( trim($phone) ) > 0 ): ?>
    <div class="sb-info-container">
        <p><span class="sb-contact"><i class="sb-icon fa fa-phone"></i></span> 
        <div><a class="sidebar-link" href="tel:"><?php echo $phone; ?></a></div>
        </p>
    </div>
<?php endif; ?>

<?php if( strlen( trim($email) ) ): ?>
    <div class="sb-info-container">
        <p><span class="sb-contact"><i class="sb-icon fa fa-envelope"></i></span> 
            <div><a class="sidebar-link" href="mailto: info@inhabitent.com"><?php echo $email; ?></a></div>
        </p>
    </div>
<?php endif; ?>

<?php if( strlen( trim($address) ) ): ?>
    <div class="sb-info-container">
        <p><span class="sb-contact"><i class="sb-icon fa fa-map-marker"></i></span> 
        <div>
            <?php echo $address; ?><br><?php echo $city ?> <?php echo $postalcode ?>
        </div>
        </p>
    </div>
<?php endif; ?>