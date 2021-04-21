<?php
/**
 * QR code generating model.
 */

defined( 'ABSPATH' ) || exit;

use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\LabelAlignment;
use Endroid\QrCode\QrCode;

if ( ! class_exists( 'WQM_Qr_Code_Generator' ) ) {

	class WQM_Qr_Code_Generator {

		/**
		 * @var array Of QR code parameters and fields
		 */
		private $params;

		/**
		 * WQM_Qr_Code_Generator constructor.
		 *
		 * @param array $params
		 */
		public function __construct( $params ) {
			$this->params = $params;
		}

		/**
		 * Generate QR code
		 *
		 * @param bool $just_code
		 *
		 * @return bool|false|string
		 */
		public function build( $just_code = false ) {
			if ( empty( $this->params['wqm_type'] ) ) {
				return false;
			}
			$type = $this->params['wqm_type'];
			switch ( $type ) {
				case 'mecard':
					return $this->generate_mecard( $just_code );
				case 'vcard':
					return $this->generate_vcard( $just_code );
				default:
					return false;
			}
		}

		/**
		 * Generate MeCard QR code
		 *
		 * @param $just_code
		 *
		 * @return false|string
		 */
		private function generate_mecard( $just_code ) {
			$fields = $this->assign_fields();
			$text   = 'MECARD:' . implode( ';', $fields ) . ';';
			if ( $just_code ) {
				return $text;
			}

			$qr_code = new QrCode( $text );

			return $this->generate_qr_code( $qr_code );
		}

		/**
		 * Generate vCard QR code
		 *
		 * @param $just_code
		 *
		 * @return false|string
		 */
		private function generate_vcard($just_code) {
			$fields = $this->assign_fields();
			$fields = implode( "\n", $fields );
			$text   = <<<CARD
BEGIN:VCARD
VERSION:3.0
{$fields}
END:VCARD
CARD;
			if ( $just_code ) {
				return $text;
			}

			$qr_code = new QrCode( $text );

			return $this->generate_qr_code( $qr_code );
		}

		/**
		 * Prepare QR code settings
		 *
		 * @param QrCode $qr_code
		 */
		private function assign_params( QrCode $qr_code ) {

			if ( ! empty( $this->params['wqm_size'] ) ) {
				$qr_code->setSize( $this->params['wqm_size'] );
			}

			if ( empty( $this->params['wqm_img_type'] ) ) {
				$this->params['wqm_img_type'] = 'png';
			}
			$qr_code->setWriterByName( $this->params['wqm_img_type'] );

			if ( isset( $this->params['wqm_margin'] ) ) {
				$qr_code->setMargin( $this->params['wqm_margin'] );
			}

			if ( ! empty( $this->params['wqm_encoding'] ) ) {
				$qr_code->setEncoding( $this->params['wqm_encoding'] );
			}

			if ( ! empty( $this->params['wqm_correction_level'] ) && in_array( $this->params['wqm_correction_level'], array(
					'LOW',
					'MEDIUM',
					'QUARTILE',
					'HIGH'
				) ) ) {
				$qr_code->setErrorCorrectionLevel( ErrorCorrectionLevel::{$this->params['wqm_correction_level']}() );
			}

			if ( ! empty( $this->params['wqm_color_rgba'] ) ) {
				$rgb = array_map( 'trim', explode( ',', $this->params['wqm_color_rgba'] ) );
				if ( 4 == count( $rgb ) ) {
					$qr_code->setForegroundColor( [ 'r' => $rgb[0], 'g' => $rgb[1], 'b' => $rgb[2], 'a' => $rgb[3] ] );
				}
				if ( 3 == count( $rgb ) ) {
					$qr_code->setForegroundColor( [ 'r' => $rgb[0], 'g' => $rgb[1], 'b' => $rgb[2], 'a' => 1 ] );
				}
			}

			if ( ! empty( $this->params['wqm_bg_rgba'] ) ) {
				$rgb = array_map( 'trim', explode( ',', $this->params['wqm_bg_rgba'] ) );
				if ( 4 == count( $rgb ) ) {
					$qr_code->setBackgroundColor( [ 'r' => $rgb[0], 'g' => $rgb[1], 'b' => $rgb[2], 'a' => $rgb[3] ] );
				}
				if ( 3 == count( $rgb ) ) {
					$qr_code->setBackgroundColor( [ 'r' => $rgb[0], 'g' => $rgb[1], 'b' => $rgb[2], 'a' => 1 ] );
				}
			}

			if ( ! empty( $this->params['wqm_label'] ) ) {
				$qr_code->setLabel( $this->params['wqm_label'], 16, null, LabelAlignment::CENTER() );
			}

			if ( ! empty( $this->params['wqm_logo_path'] ) && file_exists( $this->params['wqm_logo_path'] ) ) {
				try {
					$qr_code->setLogoPath( $this->params['wqm_logo_path'] );
				} catch ( Exception $e ) {
					WQM_Common::print_error( $e );
					$this->params['wqm_logo_path'] = false;
				}

			}

			if ( isset( $this->params['wqm_round_block_site'] ) ) {
				$qr_code->setRoundBlockSize( (bool) $this->params['wqm_round_block_site'] );
			}

			$qr_code->setValidateResult( false );
			$qr_code->setWriterOptions( [ 'exclude_xml_declaration' => true ] );

			if ( empty( $this->params['wqm_logo_width'] ) ) {
				$this->params['wqm_logo_width'] = '10%';
			}

			if ( empty( $this->params['wqm_logo_height'] ) ) {
				$this->params['wqm_logo_height'] = '10%';
			}

			if ( ! empty( $this->params['wqm_logo_path'] ) ) {
				$data = $qr_code->getData();

				$logo_width  = $this->params['wqm_logo_width'];
				$logo_height = $this->params['wqm_logo_height'];

				if ( false !== strpos( $logo_width, '%' ) ) { // if size set as percent
					$logo_width = WQM_Common::clear_digits( $logo_width ) * $data['inner_width'] / 100;
				}

				if ( false !== strpos( $logo_height, '%' ) ) { // if size set as percent
					$logo_height = WQM_Common::clear_digits( $logo_height ) * $data['inner_height'] / 100;
				}

				$qr_code->setLogoSize( intval( $logo_width ), intval( $logo_height ) );
			}
		}

		/**
		 * Generate qr-code image
		 *
		 * @param QrCode $code
		 *
		 * @return string|false image path or false on error
		 */
		public function generate_qr_code( QrCode $code ) {
			$this->assign_params( $code );
			$code = apply_filters( 'wqm_generate_qr_code_before', $code );

			// Save it to a file
			if ( $this->params['wqm_is_static'] ) {
				$save_to = $this->params['wqm_is_static'];
			} else {
				$save_to = tempnam( sys_get_temp_dir(), 'qr-' );
				if ( ! $save_to ) {
					$save_to = tempnam( session_save_path(), 'qr-' );
				}
				$save_to .= '.' . $this->params['wqm_img_type'];
			}

			try {
				$code->writeFile( $save_to );
			} catch ( Exception $e ) {
				WQM_Common::print_error( $e );
			}

			return $save_to;
		}

		/**
		 * Prepare QR code fields
		 *
		 * @return array
		 */
		private function assign_fields() {
			$fields = array();
			foreach ( $this->params as $name => $field ) {
				if ( in_array( $name, WQM_QR_Code_Type::$custom_post_fields ) ) {
					$name     = str_replace( '_', '-', str_replace( 'WQM_', '', strtoupper( $name ) ) );
					$fields[] = "{$name}:{$field}";
				}
			}

			return $fields;
		}
	}
}