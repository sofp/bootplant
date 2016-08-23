<?php
/**
 * customise contens widget
 */
class Sofp_Contents_Block_Widget extends WP_Widget {
    function __construct() {
        $widget_ops = array('description' => 'content block widget'); /* widget description */
        parent::__construct(
            false,//ウィジェットのIDに任意の名前を設定したければ文字列を指定
            'content block widget',//ウィジェットのタイトル
            $widget_ops
        );
    }

    // widget display process
    function widget($args, $instance) {
        if (intval($instance['contentblock_id']) > 0) {
            $p = get_post(intval($instance['contentblock_id']));
            // print_r($p);
        ?>
        <div class="widget widget-contentblock">
<?php echo $p->post_content ?>
        </div>
<?php
        }
    }

    //
    function update($new_instance, $old_instance) {
        // ウィジェットの設定の更新処理を記述。主にセキュリティを考えたサニタイズ用
        $instance = $old_instance;
        $instance['contentblock_id'] = $new_instance['contentblock_id'];
        
        return $instance;
    }

    function form($instance) {
        // ウィジェットの設定用フォームを記述
        $args['post_type'] = 'contentblock';
        $args['showposts'] = '-1';
        $the_query = new WP_Query( $args );
        echo "<span>Select ContentBlock:</span> ";
        
        if ( $the_query->have_posts() ) {
            echo sprintf("<select name=\"%s\">", $this->get_field_name('contentblock_id'));
            echo '<option value=""></option>';
            while ( $the_query->have_posts() ) {
                $the_query->the_post();

                $selectd = '';
                if (intval($instance['contentblock_id']) > 0 && intval($instance['contentblock_id']) == get_the_ID()) {
                    $selectd = ' selected="selected" ';
                }
                echo sprintf("<option value=\"%d\" %s>%s</option>\n",
                             get_the_ID(), $selectd, get_the_title());
            }
            echo '</select>';

        } else {
            echo __('no contentblock type', 'bootplant');
        }
        wp_reset_postdata();
    }
}

add_action('widgets_init',create_function('', 'return register_widget("Sofp_Contents_Block_Widget");'));


// add custom post_type contentblock
function add_contentblock_type() {
    register_post_type( 'contentblock',
                        array(
                            'label'               => __("Content Block", 'bootplant'),
                            'singular_label'      => __("Content Block", 'bootplant'),
                            // 'exclude_from_search' => true, // Exclude from Search Results
                            'capability_type'     => 'post',
                            // 'public'              => false, // default faluse
                            'show_ui'             => true,
                            // 'show_in_nav_menus'   => false,
                            'rewrite' => array(
                                'slug'       => 'contentblock-view',
                                'with_front' => FALSE,
                            ),
                            'query_var' => 'contentblock', // This goes to the WP_Query schema
                            'menu_icon' =>  'dashicons-welcome-add-page',
                            'supports'  => array(
								'title',
                                'editor',
							)
                        )
	);
}

add_action('init', 'add_contentblock_type');

