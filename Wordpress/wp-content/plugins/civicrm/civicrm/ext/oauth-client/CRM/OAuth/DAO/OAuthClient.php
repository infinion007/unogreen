<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from oauth-client/xml/schema/CRM/OAuth/OAuthClient.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:7487cf595064832b3d55188b3e48bffc)
 */
use CRM_OAuth_ExtensionUtil as E;

/**
 * Database access object for the OAuthClient entity.
 */
class CRM_OAuth_DAO_OAuthClient extends CRM_Core_DAO {
  const EXT = E::LONG_NAME;
  const TABLE_ADDED = '5.32';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_oauth_client';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = FALSE;

  /**
   * Internal Client ID
   *
   * @var int
   */
  public $id;

  /**
   * Provider
   *
   * @var string
   */
  public $provider;

  /**
   * Client ID
   *
   * @var string
   */
  public $guid;

  /**
   * Client Secret
   *
   * @var text
   */
  public $secret;

  /**
   * Extra override options for the service (JSON)
   *
   * @var text
   */
  public $options;

  /**
   * Is the client currently enabled?
   *
   * @var bool
   */
  public $is_active;

  /**
   * When the client was created.
   *
   * @var timestamp
   */
  public $created_date;

  /**
   * When the client was created or modified.
   *
   * @var timestamp
   */
  public $modified_date;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_oauth_client';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? E::ts('OAuth Clients') : E::ts('OAuth Client');
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => E::ts('Internal Client ID'),
          'description' => E::ts('Internal Client ID'),
          'where' => 'civicrm_oauth_client.id',
          'table_name' => 'civicrm_oauth_client',
          'entity' => 'OAuthClient',
          'bao' => 'CRM_OAuth_DAO_OAuthClient',
          'localizable' => 0,
          'add' => '5.32',
        ],
        'provider' => [
          'name' => 'provider',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Provider'),
          'description' => E::ts('Provider'),
          'required' => TRUE,
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_oauth_client.provider',
          'table_name' => 'civicrm_oauth_client',
          'entity' => 'OAuthClient',
          'bao' => 'CRM_OAuth_DAO_OAuthClient',
          'localizable' => 0,
          'pseudoconstant' => [
            'callback' => 'CRM_OAuth_BAO_OAuthClient::getProviders',
          ],
          'add' => '5.32',
        ],
        'guid' => [
          'name' => 'guid',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Client ID'),
          'description' => E::ts('Client ID'),
          'required' => TRUE,
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_oauth_client.guid',
          'table_name' => 'civicrm_oauth_client',
          'entity' => 'OAuthClient',
          'bao' => 'CRM_OAuth_DAO_OAuthClient',
          'localizable' => 0,
          'add' => '5.32',
        ],
        'secret' => [
          'name' => 'secret',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => E::ts('Client Secret'),
          'description' => E::ts('Client Secret'),
          'where' => 'civicrm_oauth_client.secret',
          'table_name' => 'civicrm_oauth_client',
          'entity' => 'OAuthClient',
          'bao' => 'CRM_OAuth_DAO_OAuthClient',
          'localizable' => 0,
          'add' => '5.32',
        ],
        'options' => [
          'name' => 'options',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => E::ts('Options'),
          'description' => E::ts('Extra override options for the service (JSON)'),
          'where' => 'civicrm_oauth_client.options',
          'table_name' => 'civicrm_oauth_client',
          'entity' => 'OAuthClient',
          'bao' => 'CRM_OAuth_DAO_OAuthClient',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_JSON,
          'add' => '5.32',
        ],
        'is_active' => [
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => E::ts('Is Active'),
          'description' => E::ts('Is the client currently enabled?'),
          'required' => TRUE,
          'where' => 'civicrm_oauth_client.is_active',
          'default' => '1',
          'table_name' => 'civicrm_oauth_client',
          'entity' => 'OAuthClient',
          'bao' => 'CRM_OAuth_DAO_OAuthClient',
          'localizable' => 0,
          'add' => '5.32',
        ],
        'created_date' => [
          'name' => 'created_date',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => E::ts('Created Date'),
          'description' => E::ts('When the client was created.'),
          'required' => TRUE,
          'where' => 'civicrm_oauth_client.created_date',
          'default' => 'CURRENT_TIMESTAMP',
          'table_name' => 'civicrm_oauth_client',
          'entity' => 'OAuthClient',
          'bao' => 'CRM_OAuth_DAO_OAuthClient',
          'localizable' => 0,
          'add' => '5.32',
        ],
        'modified_date' => [
          'name' => 'modified_date',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => E::ts('Modified Date'),
          'description' => E::ts('When the client was created or modified.'),
          'required' => TRUE,
          'where' => 'civicrm_oauth_client.modified_date',
          'default' => 'CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
          'table_name' => 'civicrm_oauth_client',
          'entity' => 'OAuthClient',
          'bao' => 'CRM_OAuth_DAO_OAuthClient',
          'localizable' => 0,
          'add' => '5.32',
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'oauth_client', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'oauth_client', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [
      'UI_provider' => [
        'name' => 'UI_provider',
        'field' => [
          0 => 'provider',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_oauth_client::0::provider',
      ],
      'UI_guid' => [
        'name' => 'UI_guid',
        'field' => [
          0 => 'guid',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_oauth_client::0::guid',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
