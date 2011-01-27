<?php
/**
 * FOAF
 * 
 * @package ElggTabbedProfile
 */

if (elgg_get_page_owner_guid()) {
?>
	<link rel="meta" type="application/rdf+xml" title="FOAF" href="<?php echo full_url(); ?>?view=foaf" />
<?php

}