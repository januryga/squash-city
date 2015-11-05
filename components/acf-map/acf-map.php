<?php

$google_map = get_field('google_map');

if( !empty($google_map) ):
?>


<div class="acf-map">
	<div class="marker"
         data-lat="<?php echo $google_map['lat']; ?>"
         data-lng="<?php echo $google_map['lng']; ?>">
    </div>
</div>


<?php
endif;
?>
