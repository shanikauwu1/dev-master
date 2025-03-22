<?php

function school_register_custom_post_types()
{
    // student CPT
    $student_labels = array(
        'name'                     => _x('Students', 'post type general name', 'school-theme'),
        'singular_name'            => _x('Student', 'post type singular name', 'school-theme'),
        'add_new'                  => _x('Add New', 'student', 'school-theme'),
        'add_new_item'             => __('Add New Student', 'school-theme'),
        'edit_item'                => __('Edit Student', 'school-theme'),
        'new_item'                 => __('New Student', 'school-theme'),
        'view_item'                => __('View Student', 'school-theme'),
        'view_items'               => __('View Students', 'school-theme'),
        'search_items'             => __('Search Students', 'school-theme'),
        'not_found'                => __('No students found.', 'school-theme'),
        'not_found_in_trash'       => __('No students found in Trash.', 'school-theme'),
        'parent_item_colon'        => __('Parent Students:', 'school-theme'),
        'all_items'                => __('All Students', 'school-theme'),
        'archives'                 => __('Student Archives', 'school-theme'),
        'attributes'               => __('Student Attributes', 'school-theme'),
        'insert_into_item'         => __('Insert into student', 'school-theme'),
        'uploaded_to_this_item'    => __('Uploaded to this student', 'school-theme'),
        'featured_image'           => __('Student featured image', 'school-theme'),
        'set_featured_image'       => __('Set student featured image', 'school-theme'),
        'remove_featured_image'    => __('Remove student featured image', 'school-theme'),
        'use_featured_image'       => __('Use as featured image', 'school-theme'),
        'menu_name'                => _x('Students', 'admin menu', 'school-theme'),
        'filter_items_list'        => __('Filter students list', 'school-theme'),
        'items_list_navigation'    => __('Students list navigation', 'school-theme'),
        'items_list'               => __('Students list', 'school-theme'),
        'item_published'           => __('Student published.', 'school-theme'),
        'item_published_privately' => __('Student published privately.', 'school-theme'),
        'item_reverted_to_draft'   => __('Student reverted to draft.', 'school-theme'),
        'item_trashed'             => __('Student trashed.', 'school-theme'),
        'item_scheduled'           => __('Student scheduled.', 'school-theme'),
        'item_updated'             => __('Student updated.', 'school-theme'),
        'item_link'                => __('Student link.', 'school-theme'),
        'item_link_description'    => __('A link to a student.', 'school-theme'),
    );

    $student_args = array(
        'labels'             => $student_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'students'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-welcome-learn-more',
        'supports'           => array('title', 'editor', 'thumbnail'),
        'template'           => array(
            array('core/paragraph', array(
                'placeholder' => 'Write a short biography here...',
            )),
            array('core/button', array(
                'text'        => 'See My Portfolio',
                'url'         => '#',
            )),
        ),
        'template_lock'      => 'all', // Prevent adding, removing, or moving blocks
    );
    register_post_type('fwd-student', $student_args);

    // staff CPT
    $staff_labels = array(
        'name'                     => _x('Staff', 'post type general name', 'school-theme'),
        'singular_name'            => _x('Staff Member', 'post type singular name', 'school-theme'),
        'add_new'                  => _x('Add New', 'staff', 'school-theme'),
        'add_new_item'             => __('Add New Staff Member', 'school-theme'),
        'edit_item'                => __('Edit Staff Member', 'school-theme'),
        'new_item'                 => __('New Staff Member', 'school-theme'),
        'view_item'                => __('View Staff Member', 'school-theme'),
        'view_items'               => __('View Staff Members', 'school-theme'),
        'search_items'             => __('Search Staff Members', 'school-theme'),
        'not_found'                => __('No staff members found.', 'school-theme'),
        'not_found_in_trash'       => __('No staff members found in Trash.', 'school-theme'),
        'parent_item_colon'        => __('Parent Staff Members:', 'school-theme'),
        'all_items'                => __('All Staff Members', 'school-theme'),
        'archives'                 => __('Staff Member Archives', 'school-theme'),
        'attributes'               => __('Staff Member Attributes', 'school-theme'),
        'insert_into_item'         => __('Insert into staff member', 'school-theme'),
        'uploaded_to_this_item'    => __('Uploaded to this staff member', 'school-theme'),
        'featured_image'           => __('Staff Member featured image', 'school-theme'),
        'set_featured_image'       => __('Set staff member featured image', 'school-theme'),
        'remove_featured_image'    => __('Remove staff member featured image', 'school-theme'),
        'use_featured_image'       => __('Use as featured image', 'school-theme'),
        'menu_name'                => _x('Staff', 'admin menu', 'school-theme'),
        'filter_items_list'        => __('Filter staff members list', 'school-theme'),
        'items_list_navigation'    => __('Staff members list navigation', 'school-theme'),
        'items_list'               => __('Staff members list', 'school-theme'),
        'item_published'           => __('Staff member published.', 'school-theme'),
        'item_published_privately' => __('Staff member published privately.', 'school-theme'),
        'item_reverted_to_draft'   => __('Staff member reverted to draft.', 'school-theme'),
        'item_trashed'             => __('Staff member trashed.', 'school-theme'),
        'item_scheduled'           => __('Staff member scheduled.', 'school-theme'),
        'item_updated'             => __('Staff member updated.', 'school-theme'),
        'item_link'                => __('Staff member link.', 'school-theme'),
        'item_link_description'    => __('A link to a staff member.', 'school-theme'),
    );

    $staff_args = array(
        'labels'             => $staff_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'staff'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6, // Adjust the menu position as needed
        'menu_icon'          => 'dashicons-businessperson',
        'supports'           => array('title', 'editor', 'thumbnail'),
        'template'           => array(
            // Block for entering the job title
            array('core/paragraph', array(
                'placeholder' => 'Enter job title here...',
            )),
            // Block for entering the email address
            array('core/paragraph', array(
                'placeholder' => 'Enter email address here...',
            )),
        ),
        'template_lock'      => 'all', // Prevent adding, removing, or moving blocks
    );

    register_post_type('fwd-staff', $staff_args);
}

add_action('init', 'school_register_custom_post_types');





function school_register_taxonomies()
{
    // Add Student Category taxonomy
    $labels = array(
        'name'                  => _x('Student Categories', 'taxonomy general name', 'school-theme'),
        'singular_name'         => _x('Student Category', 'taxonomy singular name', 'school-theme'),
        'search_items'          => __('Search Student Categories', 'school-theme'),
        'all_items'             => __('All Student Category', 'school-theme'),
        'parent_item'           => __('Parent Student Category', 'school-theme'),
        'parent_item_colon'     => __('Parent Student Category:', 'school-theme'),
        'edit_item'             => __('Edit Student Category', 'school-theme'),
        'view_item'             => __('View Student Category', 'school-theme'),
        'update_item'           => __('Update Student Category', 'school-theme'),
        'add_new_item'          => __('Add New Student Category', 'school-theme'),
        'new_item_name'         => __('New Student Category Name', 'school-theme'),
        'template_name'         => __('Student Category Archives', 'school-theme'),
        'menu_name'             => __('Student Category', 'school-theme'),
        'not_found'             => __('No student categories found.', 'school-theme'),
        'no_terms'              => __('No student categories', 'school-theme'),
        'items_list_navigation' => __('Student Categories list navigation', 'school-theme'),
        'items_list'            => __('Student Categories list', 'school-theme'),
        'item_link'             => __('Student Category Link', 'school-theme'),
        'item_link_description' => __('A link to a student category.', 'school-theme'),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_in_nav_menu'  => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'student-categories'),
    );
    register_taxonomy('fwd-student-category', array('fwd-student'), $args);
}
add_action('init', 'school_register_taxonomies');

function school_rewrite_flush()
{
    school_register_custom_post_types();
    school_register_taxonomies();
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'school_rewrite_flush');
