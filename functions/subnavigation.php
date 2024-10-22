<?php
/**
 * Get the 
 */
function get_subnavigation($menu_name)
{
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menu_items = wp_get_nav_menu_items($menu->term_id);
    $submenu_items = [];
    if (!empty($menu_items)) {
        $current_item = current(
            wp_filter_object_list($menu_items, ['object_id' => get_queried_object_id()])
        );
        if (empty($current_item) || gettype($current_item) === "boolean") {
            return;
        }
        foreach ($menu_items as $menu_item) {
            $is_child = $menu_item->menu_item_parent == $current_item->menu_item_parent && $current_item->menu_item_parent > 0;
            $is_parent = $menu_item->menu_item_parent == $current_item->ID;
            $is_current = $menu_item->ID == $current_item->ID;
            if ($is_parent || $is_child) {
                $submenu_items[] = (object)[
                    'current' => $is_current,
                    'url' => $menu_item->url,
                    'title' => $menu_item->title
                ];
            }
        }
    }
    return $submenu_items;
}
