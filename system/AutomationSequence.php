<?php
namespace AutomationSequences;

use AutomationSequences\Helper\Translate;
use AutomationSequences\Model\View;

class AutomationSequence
{
    public function run()
    {
	    add_action('init', [$this, 'post_types'], 7);
	    add_action('admin_menu', [$this, 'register_page']);
	    add_action('in_admin_header', [$this, 'top_header']);
    }

	public function top_header()
	{
		$screen = get_current_screen();
		if ($screen->post_type == 'automation-sequences' && $screen->base == 'post' && $screen->action == 'add') {
			View::render('top_header', ['screen' => $screen]);
		}
	}

	public function post_types()
	{
		$params = [
			'labels' => [
				'name' => Translate::text('Automation Sequences'),
				'singular_name' => Translate::text('Automation'),
				'add_new' => Translate::text('Add New'),
				'add_new_item' => Translate::text('Add New Automation'),
				'edit_new_item' => Translate::text('Edit Automation'),
				'new_item' => Translate::text('New Automation'),
				'view_item' => Translate::text('View Automation'),
				'search_items' => Translate::text('Search Automation'),
				'not_found' => Translate::text('No Automations found'),
				'not_found_in_trash' => Translate::text('No Automations found in Trash'),
			],
			'public' => false,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => false,
			'rewrite' => true,
			'query_var' => false,
			'has_archive' => false,
			'capability_type' => 'post',
			'supports' => ['custom-fields']
		];

		register_post_type(
			'automation-sequences',
			$params
		);
	}

	public function register_page()
	{
		$slug = 'edit.php?post_type=automation-sequences';
		add_menu_page(
			'Automation Sequences',
			'Automation Sequences',
			'manage_options',
			$slug,
			false,
			'dashicons-forms',
			23
		);

		add_submenu_page(
			$slug,
			Translate::text('All Automations'),
			Translate::text('All Automations'),
			'manage_options',
			$slug
		);
		add_submenu_page(
			$slug,
			Translate::text('Add New'),
			Translate::text('Add New'),
			'manage_options',
			'post-new.php?post_type=automation-sequences'
		);
		add_submenu_page(
			$slug,
			Translate::text('Marketplace'),
			Translate::text('Marketplace'),
			'manage_options',
			'admin.php?page=automation-sequences-addons'
		);
		add_submenu_page(
			$slug,
			Translate::text('Settings'),
			Translate::text('Settings'),
			'manage_options',
			'post-new.php?post_type=automation-sequences-settings'
		);
	}
}