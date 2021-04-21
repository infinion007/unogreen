<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Core/Tag.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:1de963194e3e392448445fac3eac82c8)
 */

/**
 * Database access object for the Tag entity.
 */
class CRM_Core_DAO_Tag extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '1.1';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_tag';

  /**
   * Icon associated with this entity.
   *
   * @var string
   */
  public static $_icon = 'fa-tag';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Tag ID
   *
   * @var int
   */
  public $id;

  /**
   * Name of Tag.
   *
   * @var string
   */
  public $name;

  /**
   * Optional verbose description of the tag.
   *
   * @var string
   */
  public $description;

  /**
   * Optional parent id for this tag.
   *
   * @var int
   */
  public $parent_id;

  /**
   * Is this tag selectable / displayed
   *
   * @var bool
   */
  public $is_selectable;

  /**
   * @var bool
   */
  public $is_reserved;

  /**
   * @var bool
   */
  public $is_tagset;

  /**
   * @var string
   */
  public $used_for;

  /**
   * FK to civicrm_contact, who created this tag
   *
   * @var int
   */
  public $created_id;

  /**
   * Hex color value e.g. #ffffff
   *
   * @var string
   */
  public $color;

  /**
   * Date and time that tag was created.
   *
   * @var datetime
   */
  public $created_date;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_tag';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('Tags') : ts('Tag');
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'parent_id', 'civicrm_tag', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'created_id', 'civicrm_contact', 'id');
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
          'title' => ts('Tag ID'),
          'description' => ts('Tag ID'),
          'required' => TRUE,
          'where' => 'civicrm_tag.id',
          'table_name' => 'civicrm_tag',
          'entity' => 'Tag',
          'bao' => 'CRM_Core_BAO_Tag',
          'localizable' => 0,
          'add' => '1.1',
        ],
        'name' => [
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Tag Name'),
          'description' => ts('Name of Tag.'),
          'required' => TRUE,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_tag.name',
          'table_name' => 'civicrm_tag',
          'entity' => 'Tag',
          'bao' => 'CRM_Core_BAO_Tag',
          'localizable' => 0,
          'add' => '1.1',
        ],
        'description' => [
          'name' => 'description',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Description'),
          'description' => ts('Optional verbose description of the tag.'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_tag.description',
          'table_name' => 'civicrm_tag',
          'entity' => 'Tag',
          'bao' => 'CRM_Core_BAO_Tag',
          'localizable' => 0,
          'add' => '1.1',
        ],
        'parent_id' => [
          'name' => 'parent_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Parent Tag'),
          'description' => ts('Optional parent id for this tag.'),
          'where' => 'civicrm_tag.parent_id',
          'default' => 'NULL',
          'table_name' => 'civicrm_tag',
          'entity' => 'Tag',
          'bao' => 'CRM_Core_BAO_Tag',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_Tag',
          'pseudoconstant' => [
            'table' => 'civicrm_tag',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          ],
          'add' => '1.1',
        ],
        'is_selectable' => [
          'name' => 'is_selectable',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Display Tag?'),
          'description' => ts('Is this tag selectable / displayed'),
          'where' => 'civicrm_tag.is_selectable',
          'default' => '1',
          'table_name' => 'civicrm_tag',
          'entity' => 'Tag',
          'bao' => 'CRM_Core_BAO_Tag',
          'localizable' => 0,
          'add' => '2.1',
        ],
        'is_reserved' => [
          'name' => 'is_reserved',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Reserved'),
          'where' => 'civicrm_tag.is_reserved',
          'default' => '0',
          'table_name' => 'civicrm_tag',
          'entity' => 'Tag',
          'bao' => 'CRM_Core_BAO_Tag',
          'localizable' => 0,
          'add' => '3.2',
        ],
        'is_tagset' => [
          'name' => 'is_tagset',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Tagset'),
          'where' => 'civicrm_tag.is_tagset',
          'default' => '0',
          'table_name' => 'civicrm_tag',
          'entity' => 'Tag',
          'bao' => 'CRM_Core_BAO_Tag',
          'localizable' => 0,
          'add' => '3.2',
        ],
        'used_for' => [
          'name' => 'used_for',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Used For'),
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_tag.used_for',
          'default' => 'NULL',
          'table_name' => 'civicrm_tag',
          'entity' => 'Tag',
          'bao' => 'CRM_Core_BAO_Tag',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_COMMA,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'optionGroupName' => 'tag_used_for',
            'optionEditPath' => 'civicrm/admin/options/tag_used_for',
          ],
          'add' => '3.2',
        ],
        'created_id' => [
          'name' => 'created_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Tag Created By'),
          'description' => ts('FK to civicrm_contact, who created this tag'),
          'where' => 'civicrm_tag.created_id',
          'table_name' => 'civicrm_tag',
          'entity' => 'Tag',
          'bao' => 'CRM_Core_BAO_Tag',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'add' => '3.4',
        ],
        'color' => [
          'name' => 'color',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Color'),
          'description' => ts('Hex color value e.g. #ffffff'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_tag.color',
          'default' => 'NULL',
          'table_name' => 'civicrm_tag',
          'entity' => 'Tag',
          'bao' => 'CRM_Core_BAO_Tag',
          'localizable' => 0,
          'add' => '4.7',
        ],
        'created_date' => [
          'name' => 'created_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Tag Created Date'),
          'description' => ts('Date and time that tag was created.'),
          'where' => 'civicrm_tag.created_date',
          'table_name' => 'civicrm_tag',
          'entity' => 'Tag',
          'bao' => 'CRM_Core_BAO_Tag',
          'localizable' => 0,
          'add' => '3.4',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'tag', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'tag', $prefix, []);
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
        'sig' => 'civicrm_tag::1::name',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
