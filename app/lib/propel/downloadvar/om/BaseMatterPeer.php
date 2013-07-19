<?php


/**
 * Base static class for performing query and update operations on the 'matter' table.
 *
 *
 *
 * @package propel.generator.downloadvar.om
 */
abstract class BaseMatterPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'downloa3_downloadvar';

    /** the table name for this class */
    const TABLE_NAME = 'matter';

    /** the related Propel class for this table */
    const OM_CLASS = 'Matter';

    /** the related TableMap class for this table */
    const TM_CLASS = 'MatterTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 19;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 19;

    /** the column name for the id field */
    const ID = 'matter.id';

    /** the column name for the main_subject field */
    const MAIN_SUBJECT = 'matter.main_subject';

    /** the column name for the short_subject field */
    const SHORT_SUBJECT = 'matter.short_subject';

    /** the column name for the long_desc field */
    const LONG_DESC = 'matter.long_desc';

    /** the column name for the short_desc field */
    const SHORT_DESC = 'matter.short_desc';

    /** the column name for the english_desc field */
    const ENGLISH_DESC = 'matter.english_desc';

    /** the column name for the help_desc field */
    const HELP_DESC = 'matter.help_desc';

    /** the column name for the download_link field */
    const DOWNLOAD_LINK = 'matter.download_link';

    /** the column name for the tag_keywords field */
    const TAG_KEYWORDS = 'matter.tag_keywords';

    /** the column name for the tag_desc field */
    const TAG_DESC = 'matter.tag_desc';

    /** the column name for the view_count field */
    const VIEW_COUNT = 'matter.view_count';

    /** the column name for the order field */
    const ORDER = 'matter.order';

    /** the column name for the need field */
    const NEED = 'matter.need';

    /** the column name for the spicial field */
    const SPICIAL = 'matter.spicial';

    /** the column name for the download_count field */
    const DOWNLOAD_COUNT = 'matter.download_count';

    /** the column name for the date field */
    const DATE = 'matter.date';

    /** the column name for the publisher field */
    const PUBLISHER = 'matter.publisher';

    /** the column name for the user_id field */
    const USER_ID = 'matter.user_id';

    /** the column name for the third_category_id field */
    const THIRD_CATEGORY_ID = 'matter.third_category_id';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of Matter objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Matter[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. MatterPeer::$fieldNames[MatterPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'MainSubject', 'ShortSubject', 'LongDesc', 'ShortDesc', 'EnglishDesc', 'HelpDesc', 'DownloadLink', 'TagKeywords', 'TagDesc', 'ViewCount', 'Order', 'Need', 'Spicial', 'DownloadCount', 'Date', 'Publisher', 'UserId', 'ThirdCategoryId', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'mainSubject', 'shortSubject', 'longDesc', 'shortDesc', 'englishDesc', 'helpDesc', 'downloadLink', 'tagKeywords', 'tagDesc', 'viewCount', 'order', 'need', 'spicial', 'downloadCount', 'date', 'publisher', 'userId', 'thirdCategoryId', ),
        BasePeer::TYPE_COLNAME => array (MatterPeer::ID, MatterPeer::MAIN_SUBJECT, MatterPeer::SHORT_SUBJECT, MatterPeer::LONG_DESC, MatterPeer::SHORT_DESC, MatterPeer::ENGLISH_DESC, MatterPeer::HELP_DESC, MatterPeer::DOWNLOAD_LINK, MatterPeer::TAG_KEYWORDS, MatterPeer::TAG_DESC, MatterPeer::VIEW_COUNT, MatterPeer::ORDER, MatterPeer::NEED, MatterPeer::SPICIAL, MatterPeer::DOWNLOAD_COUNT, MatterPeer::DATE, MatterPeer::PUBLISHER, MatterPeer::USER_ID, MatterPeer::THIRD_CATEGORY_ID, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'MAIN_SUBJECT', 'SHORT_SUBJECT', 'LONG_DESC', 'SHORT_DESC', 'ENGLISH_DESC', 'HELP_DESC', 'DOWNLOAD_LINK', 'TAG_KEYWORDS', 'TAG_DESC', 'VIEW_COUNT', 'ORDER', 'NEED', 'SPICIAL', 'DOWNLOAD_COUNT', 'DATE', 'PUBLISHER', 'USER_ID', 'THIRD_CATEGORY_ID', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'main_subject', 'short_subject', 'long_desc', 'short_desc', 'english_desc', 'help_desc', 'download_link', 'tag_keywords', 'tag_desc', 'view_count', 'order', 'need', 'spicial', 'download_count', 'date', 'publisher', 'user_id', 'third_category_id', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. MatterPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'MainSubject' => 1, 'ShortSubject' => 2, 'LongDesc' => 3, 'ShortDesc' => 4, 'EnglishDesc' => 5, 'HelpDesc' => 6, 'DownloadLink' => 7, 'TagKeywords' => 8, 'TagDesc' => 9, 'ViewCount' => 10, 'Order' => 11, 'Need' => 12, 'Spicial' => 13, 'DownloadCount' => 14, 'Date' => 15, 'Publisher' => 16, 'UserId' => 17, 'ThirdCategoryId' => 18, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'mainSubject' => 1, 'shortSubject' => 2, 'longDesc' => 3, 'shortDesc' => 4, 'englishDesc' => 5, 'helpDesc' => 6, 'downloadLink' => 7, 'tagKeywords' => 8, 'tagDesc' => 9, 'viewCount' => 10, 'order' => 11, 'need' => 12, 'spicial' => 13, 'downloadCount' => 14, 'date' => 15, 'publisher' => 16, 'userId' => 17, 'thirdCategoryId' => 18, ),
        BasePeer::TYPE_COLNAME => array (MatterPeer::ID => 0, MatterPeer::MAIN_SUBJECT => 1, MatterPeer::SHORT_SUBJECT => 2, MatterPeer::LONG_DESC => 3, MatterPeer::SHORT_DESC => 4, MatterPeer::ENGLISH_DESC => 5, MatterPeer::HELP_DESC => 6, MatterPeer::DOWNLOAD_LINK => 7, MatterPeer::TAG_KEYWORDS => 8, MatterPeer::TAG_DESC => 9, MatterPeer::VIEW_COUNT => 10, MatterPeer::ORDER => 11, MatterPeer::NEED => 12, MatterPeer::SPICIAL => 13, MatterPeer::DOWNLOAD_COUNT => 14, MatterPeer::DATE => 15, MatterPeer::PUBLISHER => 16, MatterPeer::USER_ID => 17, MatterPeer::THIRD_CATEGORY_ID => 18, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'MAIN_SUBJECT' => 1, 'SHORT_SUBJECT' => 2, 'LONG_DESC' => 3, 'SHORT_DESC' => 4, 'ENGLISH_DESC' => 5, 'HELP_DESC' => 6, 'DOWNLOAD_LINK' => 7, 'TAG_KEYWORDS' => 8, 'TAG_DESC' => 9, 'VIEW_COUNT' => 10, 'ORDER' => 11, 'NEED' => 12, 'SPICIAL' => 13, 'DOWNLOAD_COUNT' => 14, 'DATE' => 15, 'PUBLISHER' => 16, 'USER_ID' => 17, 'THIRD_CATEGORY_ID' => 18, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'main_subject' => 1, 'short_subject' => 2, 'long_desc' => 3, 'short_desc' => 4, 'english_desc' => 5, 'help_desc' => 6, 'download_link' => 7, 'tag_keywords' => 8, 'tag_desc' => 9, 'view_count' => 10, 'order' => 11, 'need' => 12, 'spicial' => 13, 'download_count' => 14, 'date' => 15, 'publisher' => 16, 'user_id' => 17, 'third_category_id' => 18, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = MatterPeer::getFieldNames($toType);
        $key = isset(MatterPeer::$fieldKeys[$fromType][$name]) ? MatterPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(MatterPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, MatterPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return MatterPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. MatterPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(MatterPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(MatterPeer::ID);
            $criteria->addSelectColumn(MatterPeer::MAIN_SUBJECT);
            $criteria->addSelectColumn(MatterPeer::SHORT_SUBJECT);
            $criteria->addSelectColumn(MatterPeer::LONG_DESC);
            $criteria->addSelectColumn(MatterPeer::SHORT_DESC);
            $criteria->addSelectColumn(MatterPeer::ENGLISH_DESC);
            $criteria->addSelectColumn(MatterPeer::HELP_DESC);
            $criteria->addSelectColumn(MatterPeer::DOWNLOAD_LINK);
            $criteria->addSelectColumn(MatterPeer::TAG_KEYWORDS);
            $criteria->addSelectColumn(MatterPeer::TAG_DESC);
            $criteria->addSelectColumn(MatterPeer::VIEW_COUNT);
            $criteria->addSelectColumn(MatterPeer::ORDER);
            $criteria->addSelectColumn(MatterPeer::NEED);
            $criteria->addSelectColumn(MatterPeer::SPICIAL);
            $criteria->addSelectColumn(MatterPeer::DOWNLOAD_COUNT);
            $criteria->addSelectColumn(MatterPeer::DATE);
            $criteria->addSelectColumn(MatterPeer::PUBLISHER);
            $criteria->addSelectColumn(MatterPeer::USER_ID);
            $criteria->addSelectColumn(MatterPeer::THIRD_CATEGORY_ID);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.main_subject');
            $criteria->addSelectColumn($alias . '.short_subject');
            $criteria->addSelectColumn($alias . '.long_desc');
            $criteria->addSelectColumn($alias . '.short_desc');
            $criteria->addSelectColumn($alias . '.english_desc');
            $criteria->addSelectColumn($alias . '.help_desc');
            $criteria->addSelectColumn($alias . '.download_link');
            $criteria->addSelectColumn($alias . '.tag_keywords');
            $criteria->addSelectColumn($alias . '.tag_desc');
            $criteria->addSelectColumn($alias . '.view_count');
            $criteria->addSelectColumn($alias . '.order');
            $criteria->addSelectColumn($alias . '.need');
            $criteria->addSelectColumn($alias . '.spicial');
            $criteria->addSelectColumn($alias . '.download_count');
            $criteria->addSelectColumn($alias . '.date');
            $criteria->addSelectColumn($alias . '.publisher');
            $criteria->addSelectColumn($alias . '.user_id');
            $criteria->addSelectColumn($alias . '.third_category_id');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(MatterPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            MatterPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(MatterPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(MatterPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return                 Matter
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = MatterPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return MatterPeer::populateObjects(MatterPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement durirectly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MatterPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            MatterPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(MatterPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param      Matter $obj A Matter object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            MatterPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A Matter object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Matter) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Matter object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(MatterPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   Matter Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(MatterPeer::$instances[$key])) {
                return MatterPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool()
    {
        MatterPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to matter
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in CommentPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommentPeer::clearInstancePool();
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = MatterPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = MatterPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = MatterPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                MatterPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (Matter object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = MatterPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = MatterPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + MatterPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = MatterPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            MatterPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related User table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinUser(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(MatterPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            MatterPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(MatterPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(MatterPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(MatterPeer::USER_ID, UserPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related ThirdCategory table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinThirdCategory(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(MatterPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            MatterPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(MatterPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(MatterPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(MatterPeer::THIRD_CATEGORY_ID, ThirdCategoryPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of Matter objects pre-filled with their User objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Matter objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinUser(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(MatterPeer::DATABASE_NAME);
        }

        MatterPeer::addSelectColumns($criteria);
        $startcol = MatterPeer::NUM_HYDRATE_COLUMNS;
        UserPeer::addSelectColumns($criteria);

        $criteria->addJoin(MatterPeer::USER_ID, UserPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = MatterPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = MatterPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = MatterPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                MatterPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = UserPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = UserPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = UserPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    UserPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Matter) to $obj2 (User)
                $obj2->addMatter($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Matter objects pre-filled with their ThirdCategory objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Matter objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinThirdCategory(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(MatterPeer::DATABASE_NAME);
        }

        MatterPeer::addSelectColumns($criteria);
        $startcol = MatterPeer::NUM_HYDRATE_COLUMNS;
        ThirdCategoryPeer::addSelectColumns($criteria);

        $criteria->addJoin(MatterPeer::THIRD_CATEGORY_ID, ThirdCategoryPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = MatterPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = MatterPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = MatterPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                MatterPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ThirdCategoryPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ThirdCategoryPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ThirdCategoryPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ThirdCategoryPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Matter) to $obj2 (ThirdCategory)
                $obj2->addMatter($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(MatterPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            MatterPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(MatterPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(MatterPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(MatterPeer::USER_ID, UserPeer::ID, $join_behavior);

        $criteria->addJoin(MatterPeer::THIRD_CATEGORY_ID, ThirdCategoryPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of Matter objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Matter objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(MatterPeer::DATABASE_NAME);
        }

        MatterPeer::addSelectColumns($criteria);
        $startcol2 = MatterPeer::NUM_HYDRATE_COLUMNS;

        UserPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + UserPeer::NUM_HYDRATE_COLUMNS;

        ThirdCategoryPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ThirdCategoryPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(MatterPeer::USER_ID, UserPeer::ID, $join_behavior);

        $criteria->addJoin(MatterPeer::THIRD_CATEGORY_ID, ThirdCategoryPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = MatterPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = MatterPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = MatterPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                MatterPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined User rows

            $key2 = UserPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = UserPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = UserPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    UserPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Matter) to the collection in $obj2 (User)
                $obj2->addMatter($obj1);
            } // if joined row not null

            // Add objects for joined ThirdCategory rows

            $key3 = ThirdCategoryPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = ThirdCategoryPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = ThirdCategoryPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ThirdCategoryPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Matter) to the collection in $obj3 (ThirdCategory)
                $obj3->addMatter($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related User table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptUser(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(MatterPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            MatterPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(MatterPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(MatterPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(MatterPeer::THIRD_CATEGORY_ID, ThirdCategoryPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related ThirdCategory table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptThirdCategory(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(MatterPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            MatterPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(MatterPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(MatterPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(MatterPeer::USER_ID, UserPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of Matter objects pre-filled with all related objects except User.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Matter objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptUser(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(MatterPeer::DATABASE_NAME);
        }

        MatterPeer::addSelectColumns($criteria);
        $startcol2 = MatterPeer::NUM_HYDRATE_COLUMNS;

        ThirdCategoryPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ThirdCategoryPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(MatterPeer::THIRD_CATEGORY_ID, ThirdCategoryPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = MatterPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = MatterPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = MatterPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                MatterPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined ThirdCategory rows

                $key2 = ThirdCategoryPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ThirdCategoryPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ThirdCategoryPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ThirdCategoryPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Matter) to the collection in $obj2 (ThirdCategory)
                $obj2->addMatter($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Matter objects pre-filled with all related objects except ThirdCategory.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Matter objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptThirdCategory(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(MatterPeer::DATABASE_NAME);
        }

        MatterPeer::addSelectColumns($criteria);
        $startcol2 = MatterPeer::NUM_HYDRATE_COLUMNS;

        UserPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + UserPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(MatterPeer::USER_ID, UserPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = MatterPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = MatterPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = MatterPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                MatterPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined User rows

                $key2 = UserPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = UserPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = UserPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    UserPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Matter) to the collection in $obj2 (User)
                $obj2->addMatter($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(MatterPeer::DATABASE_NAME)->getTable(MatterPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseMatterPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseMatterPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new MatterTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass()
    {
        return MatterPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Matter or Criteria object.
     *
     * @param      mixed $values Criteria or Matter object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MatterPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Matter object
        }

        if ($criteria->containsKey(MatterPeer::ID) && $criteria->keyContainsValue(MatterPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.MatterPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(MatterPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a Matter or Criteria object.
     *
     * @param      mixed $values Criteria or Matter object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MatterPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(MatterPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(MatterPeer::ID);
            $value = $criteria->remove(MatterPeer::ID);
            if ($value) {
                $selectCriteria->add(MatterPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(MatterPeer::TABLE_NAME);
            }

        } else { // $values is Matter object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(MatterPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the matter table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MatterPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            MatterPeer::doOnDeleteSetNull(new Criteria(MatterPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(MatterPeer::TABLE_NAME, $con, MatterPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            MatterPeer::clearInstancePool();
            MatterPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Matter or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Matter object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(MatterPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Matter) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(MatterPeer::DATABASE_NAME);
            $criteria->add(MatterPeer::ID, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(MatterPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            MatterPeer::doOnDeleteSetNull($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                MatterPeer::clearInstancePool();
            } elseif ($values instanceof Matter) { // it's a model object
                MatterPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    MatterPeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            MatterPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * This is a method for emulating ON DELETE SET NULL DBs that don't support this
     * feature (like MySQL or SQLite).
     *
     * This method is not very speedy because it must perform a query first to get
     * the implicated records and then perform the deletes by calling those Peer classes.
     *
     * This method should be used within a transaction if possible.
     *
     * @param      Criteria $criteria
     * @param      PropelPDO $con
     * @return void
     */
    protected static function doOnDeleteSetNull(Criteria $criteria, PropelPDO $con)
    {

        // first find the objects that are implicated by the $criteria
        $objects = MatterPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {

            // set fkey col in related Comment rows to null
            $selectCriteria = new Criteria(MatterPeer::DATABASE_NAME);
            $updateValues = new Criteria(MatterPeer::DATABASE_NAME);
            $selectCriteria->add(CommentPeer::MATTER_ID, $obj->getId());
            $updateValues->add(CommentPeer::MATTER_ID, null);

            BasePeer::doUpdate($selectCriteria, $updateValues, $con); // use BasePeer because generated Peer doUpdate() methods only update using pkey

        }
    }

    /**
     * Validates all modified columns of given Matter object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      Matter $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(MatterPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(MatterPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(MatterPeer::DATABASE_NAME, MatterPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Matter
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = MatterPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(MatterPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(MatterPeer::DATABASE_NAME);
        $criteria->add(MatterPeer::ID, $pk);

        $v = MatterPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Matter[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MatterPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(MatterPeer::DATABASE_NAME);
            $criteria->add(MatterPeer::ID, $pks, Criteria::IN);
            $objs = MatterPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseMatterPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseMatterPeer::buildTableMap();

