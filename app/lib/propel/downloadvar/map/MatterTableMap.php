<?php



/**
 * This class defines the structure of the 'matter' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.downloadvar.map
 */
class MatterTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'downloadvar.map.MatterTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('matter');
        $this->setPhpName('Matter');
        $this->setClassname('Matter');
        $this->setPackage('downloadvar');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('main_subject', 'MainSubject', 'VARCHAR', true, 255, null);
        $this->addColumn('short_subject', 'ShortSubject', 'VARCHAR', true, 100, null);
        $this->addColumn('long_desc', 'LongDesc', 'LONGVARCHAR', true, null, null);
        $this->addColumn('short_desc', 'ShortDesc', 'LONGVARCHAR', false, null, null);
        $this->addColumn('english_desc', 'EnglishDesc', 'LONGVARCHAR', false, null, null);
        $this->addColumn('help_desc', 'HelpDesc', 'LONGVARCHAR', false, null, null);
        $this->addColumn('download_link', 'DownloadLink', 'LONGVARCHAR', true, null, null);
        $this->addColumn('tag_keywords', 'TagKeywords', 'VARCHAR', false, 255, null);
        $this->addColumn('tag_desc', 'TagDesc', 'VARCHAR', false, 255, null);
        $this->addColumn('view_count', 'ViewCount', 'INTEGER', false, null, null);
        $this->addColumn('order', 'Order', 'INTEGER', true, null, null);
        $this->addColumn('need', 'Need', 'INTEGER', true, null, null);
        $this->addColumn('spicial', 'Spicial', 'INTEGER', true, null, null);
        $this->addColumn('download_count', 'DownloadCount', 'INTEGER', false, null, null);
        $this->addColumn('date', 'Date', 'VARCHAR', true, 255, null);
        $this->addColumn('publisher', 'Publisher', 'INTEGER', true, null, null);
        $this->addForeignKey('user_id', 'UserId', 'INTEGER', 'user', 'id', true, null, null);
        $this->addForeignKey('third_category_id', 'ThirdCategoryId', 'INTEGER', 'third_category', 'id', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('User', 'User', RelationMap::MANY_TO_ONE, array('user_id' => 'id', ), 'SET NULL', 'CASCADE');
        $this->addRelation('ThirdCategory', 'ThirdCategory', RelationMap::MANY_TO_ONE, array('third_category_id' => 'id', ), 'SET NULL', 'CASCADE');
        $this->addRelation('Comment', 'Comment', RelationMap::ONE_TO_MANY, array('id' => 'matter_id', ), 'SET NULL', 'CASCADE', 'Comments');
    } // buildRelations()

} // MatterTableMap
