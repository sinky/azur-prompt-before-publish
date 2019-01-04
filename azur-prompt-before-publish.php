<?php
/*
Plugin Name: Azur Prompt before Publish
Plugin URI: https://my-azur.de
Description: Prompt befor publish article
Author: Marco Krage
Version: 1.0
Author URI: http://my-azur.de
*/



add_action('admin_footer', 'azur_prompt_before_publish');

function azur_prompt_before_publish(){
?>
<script language="javascript" type="text/javascript">
jQuery(document).ready(function() {
  jQuery('#publish').click(function() {
    if(jQuery(this).val() == "Veröffentlichen") {
      if(confirm("Artikel wirklich veröffentlichen")) {
        return true;
      }
      return false;
    }
  });
});
</script>
<?php
}
