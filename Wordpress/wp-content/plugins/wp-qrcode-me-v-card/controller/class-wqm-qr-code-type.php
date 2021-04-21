<?php
/**
 * The plugin custom post type class.
 *
 * Register new post type and it handlers
 *
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'WQM_QR_Code_Type' ) ) {

	class   WQM_QR_Code_Type {

		/**
		 * Post type slug
		 */
		const POST_TYPE_SLUG = 'qrcode-card';

		/**
		 * @var array Post type card fields
		 */
		public static $custom_post_fields = array(
			'wqm_n',
			'wqm_nickname',
			'wqm_sound',
			'wqm_tel',
			'wqm_tel_av',
			'wqm_email',
			'wqm_adr',
			'wqm_bday',
			'wqm_title',
			'wqm_org',
			'wqm_url',
			'wqm_note',
		);

		/**
		 * @var array Post type card settings field
		 */
		public static $qr_code_settings_fields = array(
			'wqm_type',
			'wqm_margin',
			'wqm_correction_level',
			'wqm_label',
			'wqm_logo_id',
			'wqm_logo_width',
			'wqm_logo_height',
		);

		/**
		 * Initialization post type
		 */
		public static function run() {
			add_action( 'init', __CLASS__ . '::create_post_type' );
			add_action( 'save_post_' . self::POST_TYPE_SLUG, __CLASS__ . '::save_post', 10, 2 );
		}

		/**
		 * Registers the custom post type
		 */
		public static function create_post_type() {
			if ( ! post_type_exists( self::POST_TYPE_SLUG ) ) {
				$post_type_params = self::get_post_type_params();
				$post_type        = register_post_type( self::POST_TYPE_SLUG, $post_type_params );

				add_filter( 'manage_' . self::POST_TYPE_SLUG . '_posts_columns', function () {
					$columns = array(
						'cb'             => '<input type="checkbox" />',
						'title'          => __( 'Title' ),
						'featured_image' => __( 'QR code', WQM_Common::PLUGIN_SYSTEM_NAME ),
						'shortcode'      => __( 'Shortcode', WQM_Common::PLUGIN_SYSTEM_NAME ),
						'url'            => __( 'Direct url', WQM_Common::PLUGIN_SYSTEM_NAME ),
						'date'           => __( 'Date' ),
					);

					return $columns;
				} );

				add_action( 'manage_' . self::POST_TYPE_SLUG . '_posts_custom_column', function ( $column, $post_id ) {
					switch ( $column ) {
						case 'featured_image':
							echo get_the_post_thumbnail( $post_id, 'full' );
							break;
						case 'shortcode':
							echo '[' . WQM_Shortcode::SHORTCODE_NAME . ' card_id="' . $post_id . '"]';
							break;
						case 'url':
							$is_static = get_post_meta( $post_id, 'wqm_is_static', true );
							if ( $is_static ) {
								echo get_the_post_thumbnail_url( $post_id, 'full' );
							} else {
								$url = admin_url( 'admin-ajax.php' ) . '?action=wqm_make_permanent&post_id=' . $post_id;
								echo '<a href="javascript:;" onclick="_this=this;jQuery.get(\'' . $url . '\', function(r) {
											if (r.success === false || (r.success === true && r.data === false)) {
											console.log(r);
												jQuery(_this).parent().html(\'Error: \' + r.data + \'<br>\' + jQuery(_this).parent().html());
												return;
											}
											jQuery(_this).parent().html(r.data);
										})">' .
								     __( 'Create permanent url', WQM_Common::PLUGIN_SYSTEM_NAME ) .
								     '</a>';
							}
							break;
					}
				}, 10, 2 );


				add_filter( 'admin_post_thumbnail_size', __CLASS__ . '::custom_admin_thumb_size', 10, 3 );

				if ( is_wp_error( $post_type ) ) {
					WQM_Common::print_error( $post_type );
				}
			}
		}


		/**
		 * Add filter to show full sidebar width featured image thumbnail
		 *
		 * @param $thumb_size
		 * @param $thumbnail_id
		 * @param $post
		 *
		 * @return array
		 */
		public static function custom_admin_thumb_size( $thumb_size, $thumbnail_id, $post ) {
			if ( self::POST_TYPE_SLUG === $post->post_type ) {
				return array( 266, 266 );
			}

			return $thumb_size;
		}

		/**
		 * Defines the parameters for the custom post type
		 *
		 * @return array
		 */
		protected static function get_post_type_params() {
			$labels = array(
				'name'               => __( 'MeCard/vCard QR codes', WQM_Common::PLUGIN_SYSTEM_NAME ),
				'all_items'          => __( 'All QR codes', WQM_Common::PLUGIN_SYSTEM_NAME ),
				'singular_name'      => __( 'QR code MeCard/vCard card', WQM_Common::PLUGIN_SYSTEM_NAME ),
				'add_new'            => __( 'Add New', WQM_Common::PLUGIN_SYSTEM_NAME ),
				'add_new_item'       => __( 'Add New MeCard/vCard card', WQM_Common::PLUGIN_SYSTEM_NAME ),
				'edit'               => __( 'Edit', WQM_Common::PLUGIN_SYSTEM_NAME ),
				'edit_item'          => __( 'Edit MeCard/vCard card', WQM_Common::PLUGIN_SYSTEM_NAME ),
				'new_item'           => __( 'New MeCard/vCard card', WQM_Common::PLUGIN_SYSTEM_NAME ),
				'view'               => __( 'View MeCard/vCard card', WQM_Common::PLUGIN_SYSTEM_NAME ),
				'view_item'          => __( 'View MeCard/vCard card', WQM_Common::PLUGIN_SYSTEM_NAME ),
				'search_items'       => __( 'Search QR code MeCard/vCard cards', WQM_Common::PLUGIN_SYSTEM_NAME ),
				'not_found'          => __( 'No MeCard/vCard cards found', WQM_Common::PLUGIN_SYSTEM_NAME ),
				'not_found_in_trash' => __( 'No MeCard/vCard cards found in Trash', WQM_Common::PLUGIN_SYSTEM_NAME ),
				'parent'             => __( 'Parent MeCard/vCard card', WQM_Common::PLUGIN_SYSTEM_NAME ),
			);

			$post_type_params = array(
				'labels'               => $labels,
				'singular_label'       => __( 'QR code MeCard/vCard card', WQM_Common::PLUGIN_SYSTEM_NAME ),
				'public'               => false,
				'exclude_from_search'  => true,
				'publicly_queryable'   => false,
				'show_ui'              => true,
				'show_in_menu'         => true,
				'register_meta_box_cb' => __CLASS__ . '::add_custom_post_fields',
				'menu_position'        => 20,
				'hierarchical'         => true,
				'capability_type'      => 'post',
				'has_archive'          => false,
				'rewrite'              => false,
				'query_var'            => false,
				'menu_icon'            => plugins_url( 'static/images/qr-code-16-icon.png', dirname( __FILE__ ) ),
				'supports'             => array( 'title', 'thumbnail', 'revisions' )
			);

			return apply_filters( 'wqm_post-type-params', $post_type_params );
		}

		/**
		 * Adds meta box for custom post type
		 *
		 * @mvc Controller
		 */
		public static function add_custom_post_fields() {
			add_meta_box(
				'wqm_custom-post-box-settings',
				__( 'QR code settings', WQM_Common::PLUGIN_SYSTEM_NAME ),
				__CLASS__ . '::markup_meta_box_settings',
				self::POST_TYPE_SLUG,
				'normal',
				'core'
			);
			add_meta_box(
				'wqm_custom-post-box-fields',
				__( 'Card fields', WQM_Common::PLUGIN_SYSTEM_NAME ),
				__CLASS__ . '::markup_meta_box_fields',
				self::POST_TYPE_SLUG,
				'normal',
				'core'
			);
		}

		/**
		 * Builds the markup for meta box fields
		 *
		 * @param object $post
		 */
		public static function markup_meta_box_fields( $post ) {

			$variables = self::get_card_metas( $post->ID );

			echo WQM_Common::render( 'card-fields-form.php', $variables );
		}

		/**
		 * Builds the markup for meta box settings
		 *
		 * @param object $post
		 */
		public static function markup_meta_box_settings( $post ) {

			$variables = self::get_qr_code_settings_metas( $post->ID );

			echo WQM_Common::render( 'settings-form.php', $variables );
		}

		/**
		 * Read all post type fields
		 *
		 * @param $post_id
		 *
		 * @return array
		 */
		public static function get_card_metas( $post_id ) {
			$variables = array();
			foreach ( self::$custom_post_fields as $field ) {
				$variables[ $field ] = get_post_meta( $post_id, $field, true );
			}

			return $variables;
		}

		/**
		 * Read all post type settings
		 *
		 * @param $post_id
		 *
		 * @return array
		 */
		public static function get_qr_code_settings_metas( $post_id ) {
			$variables = array();
			foreach ( self::$qr_code_settings_fields as $field ) {
				$variables[ $field ] = get_post_meta( $post_id, $field, true );
				if ( 'wqm_logo_id' == $field ) {
					$variables['wqm_logo_path'] = get_attached_file( $variables[ $field ] );
				}
			}

			return $variables;
		}

		/**
		 * Saves values of the the custom post type's extra fields
		 *
		 * @param int $post_id
		 * @param WP_Post $post
		 */
		public static function save_post( $post_id, $post ) {

			$ignored_actions = array( 'trash', 'untrash', 'restore' );

			if ( isset( $_GET['action'] ) && in_array( $_GET['action'], $ignored_actions ) ) {
				return;
			}

			if ( ! $post ) {
				return;
			}

			if ( ! current_user_can( 'edit_post', $post_id ) ) {
				return;
			}

			if ( ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) || 'auto-draft' == $post->post_status ) {
				return;
			}

			$post_data = self::sanitize_validate_post_data( $_POST );

			self::save_custom_fields( $post_id, $post_data );
		}

		/**
		 * Validates and saves values of the the custom post type's extra fields
		 *
		 * @mvc Model
		 *
		 * @param int $post_id
		 * @param array $new_values
		 */
		protected static function save_custom_fields( $post_id, $new_values ) {
			foreach ( $new_values as $key => $val ) {
				update_post_meta( $post_id, $key, $val );
			}

			$atid = get_post_thumbnail_id( $post_id );

			$is_static = get_post_meta( $post_id, 'wqm_is_static', true );
			if ( $is_static ) {
				$att_meta = wp_get_attachment_metadata( $atid );
				if ( empty( $att_meta ) ) {
					$is_static = false;
				} else {
					$upload    = wp_get_upload_dir();
					$is_static = $upload['basedir'] . '/' . $att_meta['file'];
				}
			}

			// generate new QR code
			$params = array_merge(
				self::get_card_metas( $post_id ),
				self::get_qr_code_settings_metas( $post_id ),
				array( 'wqm_is_static' => $is_static )
			);
			$file   = ( new WQM_Qr_Code_Generator( $params ) )->build();
			if ( $file ) {
				if ( ! $is_static ) {
					// remove exists
					if ( ! empty( $atid ) ) {
						wp_delete_attachment( $atid, true );
					}
					// save new QR code
					$media_id = self::upload_media( $file, $post_id, null );
					update_post_meta( $post_id, '_thumbnail_id', $media_id );
				} else {
					wp_create_image_subsizes( $file, $atid );
				}
			}
		}

		/**
		 * Upload generated QR code handler
		 *
		 * @param $file
		 * @param $post_id
		 * @param $desc
		 *
		 * @return int|WP_Error
		 */
		private static function upload_media( $file, $post_id, $desc ) {
			$filename = explode( '/', $file );

			$file_array = array(
				'name'     => array_pop( $filename ),
				'tmp_name' => $file,
			);

			// Do the validation and storage stuff.
			$id = media_handle_sideload( $file_array, $post_id, $desc );

			// If error storing permanently, unlink.
			if ( is_wp_error( $id ) ) {
				@unlink( $file_array['tmp_name'] );
			}

			return $id;
		}

		public static function sanitize_validate_post_data( $post ) {
			$result = array();

			foreach ( $post as $item => $value ) {
				if ( ! in_array( $item, self::$custom_post_fields ) && ! in_array( $item, self::$qr_code_settings_fields ) ) {
					continue;
				}

				switch ( $item ) {
					case 'wqm_tel':
					case 'wqm_tel_av':
						$result[ $item ] = preg_replace( '@[^\d\+\)\(]+@si', '', $value );
						break;
					case 'wqm_email':
						$email           = filter_var( $value, FILTER_SANITIZE_EMAIL );
						$result[ $item ] = sanitize_email( $email );
						break;
					case 'wqm_bday':
						$value = trim( $value );
						if ( preg_match( '@\d{4}\-\d{2}\-\d{2}@si', $value ) ) {
							$result[ $item ] = $value;
						}
						break;
					case 'wqm_logo_id':
						$value = WQM_Common::clear_digits( $value );
						$url   = wp_get_attachment_image_url( $value, array( 100, 100 ) );
						if ( ! empty( $url ) && WQM_Common::is_url_exists( $url ) ) {
							$result[ $item ] = $value;
						} else {
							$result[ $item ] = false;
							$result['wqm_logo_path'] = false;
						}
						break;
					case 'wqm_logo_width':
					case 'wqm_logo_height':
						$result[ $item ] = preg_replace( '@[^\d%]+@si', '', $value );
						break;
					case 'wqm_url':
						$url             = filter_var( $value, FILTER_SANITIZE_URL );
						$result[ $item ] = esc_url_raw( $url );
						break;
					case 'wqm_type':
						if ( in_array( $value, array( 'mecard', 'vcard' ) ) ) {
							$result[ $item ] = $value;
						}
						break;
					case 'wqm_margin':
						$margin          = preg_replace( '@[^\d]+@si', '', $value );
						$result[ $item ] = $margin;
						break;
					case 'wqm_correction_level':
						if ( in_array( $value, array( 'LOW', 'MEDIUM', 'QUARTILE', 'HIGH' ) ) ) {
							$result[ $item ] = $value;
						}
						break;
					default:
						$def             = filter_var( $value, FILTER_SANITIZE_STRING );
						$result[ $item ] = sanitize_text_field( $def );
						break;
				}
			}

			return $result;
		}

		/**
		 * Ajax request to make QR code imag url permanent for direct link
		 */
		public static function wqm_make_url_permanent() {
			if ( empty( $_REQUEST['post_id'] ) ) {
				wp_send_json_error( 'post_id missing' );
			}

			$post_id = WQM_Common::clear_digits( $_REQUEST['post_id'] );
			if ( ! $post = get_post( $post_id ) ) {
				wp_send_json_error( 'post not found' );
			}

			update_post_meta( $post_id, 'wqm_is_static', true );
			wp_send_json_success( get_the_post_thumbnail_url( $post_id, 'full' ) );
		}
	}
}