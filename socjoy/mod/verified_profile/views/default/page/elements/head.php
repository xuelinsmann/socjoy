<?php
/**
 * The HTML head
 *
 * @internal It's dangerous to alter this view.
 *
 * @uses $vars['title'] The page title
 * @uses $vars['metas'] Array of meta elements
 * @uses $vars['links'] Array of links
 */

$metas = elgg_extract('metas', $vars, []);
$links = elgg_extract('links', $vars, []);
// linxue
// Customize title
// hard code some of these to move fast.
$page_name = ucfirst(elgg_get_context());
if ($page_name == 'Elgg_connect') {
	$page_name = 'Main';
} else if ($page_name == 'Photos') {
	$page_name = 'Joys';
} else if ($page_name == 'Groups') {
	$page_name = 'Clubs';
}
echo elgg_format_element('title', [], elgg_get_site_entity()->getDisplayName() . ' : ' . $page_name, ['encode_text' => true]);
foreach ($metas as $attributes) {
    echo elgg_format_element('meta', $attributes);
}
foreach ($links as $attributes) {
    echo elgg_format_element('link', $attributes);
}

$stylesheets = elgg_get_loaded_css();

foreach ($stylesheets as $url) {
    echo elgg_format_element('link', ['rel' => 'stylesheet', 'href' => $url]);
}

// A non-empty script *must* come below the CSS links, otherwise Firefox will exhibit FOUC
// See https://github.com/Elgg/Elgg/issues/8328
?>
<script>
	<?php // Do not convert this to a regular function declaration. It gets redefined later. ?>
	require = function () {
		// handled in the view "elgg.js"
		_require_queue.push(arguments);
	};
	_require_queue = [];
</script>
