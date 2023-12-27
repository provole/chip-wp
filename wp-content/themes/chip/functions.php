<?php

@ini_set('upload_max_size', '64M');
@ini_set('post_max_size', '64M');
@ini_set('max_execution_time', '300');

require_once __DIR__ . '/vendor/autoload.php';

if (class_exists('Timber\Timber')) {
    $timber = new Timber\Timber();
}

foreach (glob(__DIR__ . "/acf/*.php") as $filename) {
    require_once $filename;
}

add_theme_support('post-thumbnails');

// Allow custom blocks only
add_filter('allowed_block_types_all', 'allowed_block_types');

function allowed_block_types($allowed_blocks)
{
    $allowedBlocks = [];

    foreach (glob(__DIR__ . "/blocks/*.php") as $filename) {

        if (strpos(pathinfo($filename, PATHINFO_FILENAME), ".") !== false) {
            continue;
        }

        $allowedBlocks[] = "acf/" . pathinfo($filename, PATHINFO_FILENAME);
    }

    return $allowedBlocks;
}

function add_theme_scripts()
{
    wp_enqueue_script('scripts-js', get_template_directory_uri() . '/dist/index.js', array(), false, true);
    wp_enqueue_style('algafont', 'https://use.typekit.net/fau3vuc.css', array());
    wp_enqueue_style('stylesheet', get_template_directory_uri() . '/dist/main.css', array());
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

// Callback function to insert 'styleselect' into the $buttons array
function wpb_mce_buttons_2($buttons)
{
    array_unshift($buttons, 'styleselect');
    return $buttons;
}

add_filter('mce_buttons_2', 'wpb_mce_buttons_2');

add_theme_support('editor-color-palette', array(
    array(
        'name'  => 'Primary',
        'slug'  => 'primary',
        'color' => '#a156b4',
    ),
    array(
        'name'  => 'Red',
        'slug'  => 'secondary',
        'color' => '#d0a5db',
    ),
));

/*
* Callback function to filter the MCE settings
*/
function my_mce_before_init_insert_formats($init_array)
{

    // Define the style_formats array

    $style_formats = array(
        /*
	* Each array child is a format with it's own settings
	* Title is the label which will be visible in Formats menu
	* Block defines whether it is a span, div, selector, or inline style
	* Classes allows you to define CSS classes
	* Wrapper whether or not to add a new block-level element around any selected elements
	*/
        array(
            'title' => 'Underline',
            'block' => 'span',
            'classes' => 'custom-underline',
            'wrapper' => true,
        ),
        array(
            'title' => 'Letter Spacing',
            'block' => 'span',
            'classes' => 'letter-spacing',
            'wrapper' => true,
        ),
    );

    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode($style_formats);

    return $init_array;
}
// Attach callback to 'tiny_mce_before_init' 
add_filter('tiny_mce_before_init', 'my_mce_before_init_insert_formats');


function add_to_context($context)
{
    $context['menu'] = new \Timber\Menu('main');
    $context['footer_menu'] = new \Timber\Menu('footer');

    $context["footer_body"] = get_field('body', 'option');

    $context["newsItems"] = get_posts([
        'numberposts' => 4
    ]);

    return $context;
}

add_filter('timber/context', 'add_to_context');

if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title'     => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'post_id' => 'options',
        'redirect'        => false
    ));

    acf_add_options_sub_page(array(
        'page_title'     => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'    => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'     => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'    => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'     => 'Theme 404 Page Settings',
        'menu_title'    => '404 Page',
        'parent_slug'    => 'theme-general-settings',
    ));
}

add_filter('timber/twig', 'add_to_twig');

function add_to_twig($twig) {
    $twig->addFilter(new Timber\Twig_Filter('contrast_color', function ($hexColor) {
        // hexColor RGB
        $R1 = hexdec(substr($hexColor, 1, 2));
        $G1 = hexdec(substr($hexColor, 3, 2));
        $B1 = hexdec(substr($hexColor, 5, 2));
    
        // Black RGB
        $blackColor = "#000000";
        $R2BlackColor = hexdec(substr($blackColor, 1, 2));
        $G2BlackColor = hexdec(substr($blackColor, 3, 2));
        $B2BlackColor = hexdec(substr($blackColor, 5, 2));
    
        // Calc contrast ratio
        $L1 = 0.2126 * pow($R1 / 255, 2.2) +
            0.7152 * pow($G1 / 255, 2.2) +
            0.0722 * pow($B1 / 255, 2.2);
    
        $L2 = 0.2126 * pow($R2BlackColor / 255, 2.2) +
            0.7152 * pow($G2BlackColor / 255, 2.2) +
            0.0722 * pow($B2BlackColor / 255, 2.2);
    
        $contrastRatio = 0;
        if ($L1 > $L2) {
            $contrastRatio = (int)(($L1 + 0.05) / ($L2 + 0.05));
        } else {
            $contrastRatio = (int)(($L2 + 0.05) / ($L1 + 0.05));
        }
    
        // If contrast is more than 5, return black color
        if ($contrastRatio > 5) {
            return '#000000';
        } else {
            // if not, return white color.
            return '#FFFFFF';
        }
    }));

    return $twig;
}

add_action('acf/init', 'register_blocks');

function renderACFBlock($block)
{

    $context = Timber::get_context();

    $context["data"] = $block["data"];

    $string = Timber::compile(get_template_directory() . "/views/parts/" . str_replace("acf/", "", $block["name"]) . ".twig", $context, false, 'default', true);

    echo $string;
}

function register_blocks()
{
    // file_put_contents(__DIR__ . "/logs.txt", "register_blocks\r\n", FILE_APPEND);

    foreach (glob(__DIR__ . "/blocks/*.php") as $filename) {
        // file_put_contents( __DIR__ . "/logs.txt", print_r( strpos( $filename, "." ) !== false, 1 ), FILE_APPEND );
        if (strpos(pathinfo($filename, PATHINFO_FILENAME), ".") !== false) {
            continue;
        }

        // file_put_contents(__DIR__ . "/logs.txt", print_r($filename, 1) . "\r\n", FILE_APPEND);
        require_once $filename;
    }
}


// Gutenberg custom stylesheet
add_theme_support('editor-styles');
add_editor_style('dist/editor.css'); // make sure path reflects where the file is located


if ($_GET && isset($_GET["debug"])) {
    function wpse33318_tiny_mce_before_init($mce_init)
    {

        $mce_init['cache_suffix'] = "v=" . rand(100000000, 999999999);

        return $mce_init;
    }

    add_filter('tiny_mce_before_init', 'wpse33318_tiny_mce_before_init');
}

add_filter('wpcf7_autop_or_not', '__return_false'); // remove <p> from tags


// Adds default colours for color picker
function klf_acf_input_admin_footer()
{ ?>
    <script type="text/javascript">
        (function($) {
            acf.add_filter('color_picker_args', function(args, $field) {
                // add the hexadecimal codes here for the colors you want to appear as swatches
                args.palettes = ['#abd6ba', '#4b4c60']
                // return colors
                return args;
            });
        })(jQuery);
    </script>
<?php }


//ADDING AN ACTIVE CLASS TO THE CUSTOM POST-TYPE MENU ITEM WHEN VISITING ITS SINGLE POST PAGES
function custom_active_item_classes($classes = array(), $menu_item = false){            
    global $post;

    $classes[] = ($menu_item->url == get_post_type_archive_link($post->post_type)) ? 'current-menu-item active' : '';
    return $classes;
}
add_filter( 'nav_menu_css_class', 'custom_active_item_classes', 10, 2 );

add_theme_support( 'menus' );


// Adds a heading in the backend to display block titles.
add_action('admin_head', 'addBlockName');
function addBlockName() {
     echo '<style>.wp-block:not(.wp-block-post-title, .block-list-appender)::before{content: attr(data-title) !important;display: block;position: static !important;z-index: 1;top: 0 !important;width: 100%;height: auto !important;padding: 10px 10px 10px !important;margin-top: 0;border-top: 1px solid rgba(0,0,0,0.1) !important;font-size: 14px !important; background-color: #006eab;color: #FFFFFF;border-bottom: 1px solid #F49820;}</style>';
}


// Generates WP title and adds ability to Yoast to choose own title.
add_theme_support('title-tag');

//fix for the media uploader missing the styles
function acf_filter_rest_api_preload_paths( $preload_paths ) {
    if ( ! get_the_ID() ) {
        return $preload_paths;
    }
    $remove_path = '/wp/v2/' . get_post_type() . 's/' . get_the_ID() . '?context=edit';
    $v1 =  array_filter(
        $preload_paths,
        function( $url ) use ( $remove_path ) {
            return $url !== $remove_path;
        }
    );
    $remove_path = '/wp/v2/' . get_post_type() . 's/' . get_the_ID() . '/autosaves?context=edit';
    return array_filter(
        $v1,
        function( $url ) use ( $remove_path ) {
            return $url !== $remove_path;
        }
    );
}
add_filter( 'block_editor_rest_api_preload_paths', 'acf_filter_rest_api_preload_paths', 10, 1 );