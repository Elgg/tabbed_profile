<?php
/**
 * Elgg commentwall annotation view
 * - Just outputs the regular generic_comment view for consistency
 *
 * @uses $vars['annotation']  ElggAnnotation object
 * @uses $vars['full_view']   Display fill view or brief view
 */

echo elgg_view('annotation/generic_comment', $vars);
