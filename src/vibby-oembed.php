<?php /*

**************************************************************************

Plugin Name:  Vibby oEmbed
Version:      1.0.0
Description:  Whitelists <a href="https://www.vibby.com">Vibby</a> domains to enable vib embeds via pasting URL to visual editor.
Author:       Vibby
Author URI:   https://www.vibby.com
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html

**************************************************************************/

wp_oembed_add_provider('#https?://(www.)?vibby.com/.*#i', 'https://www.vibby.com/api/data/services/oembed?type={format}', true);
wp_oembed_add_provider('#https?://(www.)?vib.by/.*#i', 'https://www.vibby.com/api/data/services/oembed?type={format}', true);
?>
