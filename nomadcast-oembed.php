<?php /*

**************************************************************************

Plugin Name:  NomadCast oEmbed
Version:      1.0.3
Description:  Add NomadCast.com to the available oEmbed providers.
Author:       NomadCast
Author URI:   https://www.nomadcast.com
License:      GPL2

**************************************************************************/

wp_oembed_add_provider( '#https?://www.nomadcast.com/(stream|recording)/.*#i', 'https://www.nomadcast.com/oembed.{format}', true);
?>
