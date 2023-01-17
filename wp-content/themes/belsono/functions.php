<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

// ******************ПОДКЛЮЧЕНИЕ СТИЛЕЙ И СКРИПТОВ**************
add_action('wp_enqueue_scripts',  function () {


  wp_enqueue_style('swipe', "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css?_v=20221206070947");
  wp_enqueue_style('style-name', get_template_directory_uri() . "/assets/css/style.min.css");
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/app.min.js', true);
  wp_enqueue_script('new_scripts', get_template_directory_uri() . '/assets/js/new_scripts.js');
  wp_enqueue_script('pagination_scripts', get_template_directory_uri() . '/assets/js/pagination.js');
  wp_enqueue_script('local_storage_city', get_template_directory_uri() . '/assets/js/storage.js');
  if (strpos($_SERVER['REQUEST_URI'], "onlinesign") !== false){
	wp_enqueue_script('sign_script', get_template_directory_uri() . '/assets/js/sign_script.js');
  }
 
  
});


// ******************ДУБЛИРОВАНИЕ ПОСТОВ**************
function true_duplicate_post_as_draft(){
 
	if( empty( $_GET[ 'post' ] ) ) {
		wp_die( 'Нечего дублировать!' );
	}
 
	// проверка одноразовых чисел, куда без неё
	if ( ! isset( $_GET[ 'true_duplicate_nonce' ] ) || ! wp_verify_nonce( $_GET[ 'true_duplicate_nonce' ], basename( __FILE__ ) ) ) {
		return;
	}
 
	// получаем ID оригинального поста
	$post_id = absint( $_GET[ 'post' ] );
 
	// затем получили объект поста
	$post = get_post( $post_id );
 
	/*
	 * если вы не хотите, чтобы текущий автор был автором нового поста
	 * тогда замените следующие две строчки на: $new_post_author = $post->post_author;
	 * при замене этих строк автор будет копироваться из оригинального поста
	 */
	$current_user = wp_get_current_user();
	$new_post_author = $current_user->ID;
 
	/*
	 * если пост существует, создаем его дубликат
	 */
	if ( $post ) {
 
		// массив данных нового поста
		$args = array(
			'comment_status' => $post->comment_status,
			'ping_status'    => $post->ping_status,
			'post_author'    => $new_post_author,
			'post_content'   => $post->post_content,
			'post_excerpt'   => $post->post_excerpt,
			'post_parent'    => $post->post_parent,
			'post_name'      => $post->post_name,
			'post_password'  => $post->post_password,
			'post_status'    => 'draft', // черновик, если хотите сразу публиковать - замените на publish
			'post_title'     => $post->post_title,
			'post_type'      => $post->post_type,
			'to_ping'        => $post->to_ping,
			'menu_order'     => $post->menu_order
		);
 
		// создаем пост при помощи функции wp_insert_post()
		$new_post_id = wp_insert_post( $args );
 
		// присваиваем новому посту все элементы таксономий (рубрики, метки и т.д.) старого
		$taxonomies = get_object_taxonomies( $post->post_type ); // возвращает массив названий таксономий, используемых для указанного типа поста, например array("category", "post_tag");
		foreach ( $taxonomies as $taxonomy ) {
			$post_terms = wp_get_object_terms( $post_id, $taxonomy, array( 'fields' => 'slugs' ) );
			wp_set_object_terms( $new_post_id, $post_terms, $taxonomy, false );
		}
 
		// дублируем все произвольные поля
		$post_meta = get_post_meta( $post_id );
		if( $post_meta ) {
			foreach ( $post_meta as $meta_key => $meta_values ) {
				if( '_wp_old_slug' == $meta_key ) { // это лучше не трогать
					continue;
				}
				foreach ( $meta_values as $meta_value ) {
					add_post_meta( $new_post_id, $meta_key, $meta_value );
				}
			}
		}
 
		// и наконец, перенаправляем пользователя на страницу редактирования нового поста
		wp_safe_redirect( add_query_arg( array( 'action' => 'edit', 'post' => $new_post_id ), admin_url( 'post.php' ) ) );
		exit;
	} else {
		wp_die( 'Ошибка создания поста, не могу найти оригинальный пост с ID=: ' . $post_id );
	}
}
 
add_action( 'admin_action_true_duplicate_post_as_draft', 'true_duplicate_post_as_draft' );
 
// Добавляем ссылку дублирования поста для post_row_actions
add_filter( 'post_row_actions', 'true_duplicate_post_link', 10, 2 );
function true_duplicate_post_link( $actions, $post ) {
	if ( current_user_can( 'edit_posts' ) ) {
		$actions[ 'duplicate' ] = '<a href="' . wp_nonce_url( add_query_arg( array( 'action' => 'true_duplicate_post_as_draft', 'post' => $post->ID ), 'admin.php' ), basename(__FILE__), 'true_duplicate_nonce' ) . '">Дублировать</a>';
	}
	return $actions;
}



// ******************УБРАТЬ ИЗ КОНСОЛИ JQMIGRATE: Migrate is installed, version 3.3.2**************
add_action('wp_default_scripts', function ($scripts) {
	if (!empty($scripts->registered['jquery'])) {
	  $scripts->registered['jquery']->deps = array_diff($scripts->registered['jquery']->deps, ['jquery-migrate']);
	}
  });


?>
