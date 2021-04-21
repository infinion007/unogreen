<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Core/Domain.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:6a8de20676ad3eeaca16ea3059958a4e)
 */

/**
 * Database access object for the Domain entity.
 */
class CRM_Core_DAO_Domain extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '1.1';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_domain';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = FALSE;

  /**
   * Domain ID
   *
   * @var int
   */
  public $id;

  /**
   * Name of Domain / Organization
   *
   * @var string
   */
  public $name;

  /**
   * Description of Domain.
   *
   * @var string
   */
  public $description;

  /**
   * The civicrm version this instance is running
   *
   * @var string
   */
  public $version;

  /**
   * FK to Contact ID. This is specifically not an FK to avoid circular constraints
   *
   * @var int
   */
  public $contact_id;

  /**
   * list of locales supported by the current db state (NULL for single-lang install)
   *
   * @var text
   */
  public $locales;

  /**
   * Locale specific string overrides
   *
   * @var text
   */
  public $locale_custom_strings;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_domain';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('Domains') : ts('Domain');
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'contact_id', 'civicrm_contact', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
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
          'title' => ts('Domain ID'),
          'description' => ts('Domain ID'),
          'required' => TRUE,
          'where' => 'civicrm_domain.id',
          'table_name' => 'civicrm_domain',
          'entity' => 'Domain',
          'bao' => 'CRM_Core_BAO_Domain',
          'localizable' => 0,
          'add' => '1.1',
        ],
        'name' => [
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Domain Name'),
          'description' => ts('Name of Domain / Organization'),
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_domain.name',
          'table_name' => 'civicrm_domain',
          'entity' => 'Domain',
          'bao' => 'CRM_Core_BAO_Domain',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '1.1',
        ],
        'description' => [
          'name' => 'description',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Domain Description'),
          'description' => ts('Description of Domain.'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_domain.description',
          'table_name' => 'civicrm_domain',
          'entity' => 'Domain',
          'bao' => 'CRM_Core_BAO_Domain',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '1.1',
        ],
        'version' => [
          'name' => 'version',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('CiviCRM Version'),
          'description' => ts('The civicrm version this instance is running'),
          'maxlength' => 32,
          'size' => CRM_Utils_Type::MEDIUM,
          'where' => 'civicrm_domain.version',
          'table_name' => 'civicrm_domain',
          'entity' => 'Domain',
          'bao' => 'CRM_Core_BAO_Domain',
          'localizable' => 0,
          'add' => '2.0',
        ],
        'contact_id' => [
          'name' => 'contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Domain Contact'),
          'description' => ts('FK to Contact ID. This is specifically not an FK to avoid circular constraints'),
          'where' => 'civicrm_domain.contact_id',
          'table_name' => 'civicrm_domain',
          'entity' => 'Domain',
          'bao' => 'CRM_Core_BAO_Domain',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'add' => '4.3',
        ],
        'locales' => [
          'name' => 'locales',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Supported Languages'),
          'description' => ts('list of locales supported by the current db state (NULL for single-lang install)'),
          'where' => 'civicrm_domain.locales',
          'table_name' => 'civicrm_domain',
          'entity' => 'Domain',
          'bao' => 'CRM_Core_BAO_Domain',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_SEPARATOR_TRIMMED,
          'add' => '2.1',
        ],
        'locale_custom_strings' => [
          'name' => 'locale_custom_strings',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Language Customizations'),
          'description' => ts('Locale specific string overrides'),
          'where' => 'civicrm_domain.locale_custom_strings',
          'table_name' => 'civicrm_domain',
          'entity' => 'Domain',
          'bao' => 'CRM_Core_BAO_Domain',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_PHP,
          'add' => '3.2',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'domain', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'domain', $prefix, []);
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
      'UI_name' => [
        'name' => 'UI_name',
        'field' => [
          0 => 'name',
        ],
        'localizable' => FALSE,
        'unique' => TRUE,
        'sig' => 'civicrm_domain::1::name',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
