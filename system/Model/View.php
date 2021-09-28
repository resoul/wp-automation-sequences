<?php
namespace AutomationSequences\Model;

use Exception;

class View
{
	public static function render($view, $params = [], $category = 'admin')
	{
		$params = apply_filters('automation_sequences_view_params', $params, $view);
		foreach ($params as $key => $param) {
			$$key = $param;
		}

		load_plugin_textdomain(TextDomain::DOMAIN);

		include AUTOMATION_SEQUENCES_PLUGIN_DIR . "/templates/$category/$view.php";

		$ob_get_level = ob_get_level();
		ob_start();
		ob_implicit_flush(false);
		extract($params, EXTR_OVERWRITE);
		try {
			require AUTOMATION_SEQUENCES_PLUGIN_DIR . "/templates/$category/$view.php";
			return ob_get_clean();
		} catch (Exception $e) {
			//TODO clean object
		}
	}
}