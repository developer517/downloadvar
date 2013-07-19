<?php



/**
 * This class defines the structure of the 'second_category' table.
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
class SecondCategoryTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'downloadvar.map.SecondCategoryTableMap';

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
        $this->setName('second_category');
        $this->setPhpName('SecondCategory');
        $this->setClassname('SecondCategory');
        $this->setPackage('downloadvar');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('persian_name', 'PersianName', 'VARCHAR', true, 50, null);
        $this->addColumn('english_name', 'EnglishName', 'VARCHAR', true, 50, null);
        $this->addColumn('description', 'Description', 'VARCHAR', true, 255, null);
        $this->addColumn('tag', 'Tag', 'VARCHAR', true, 255, null);
        $this->addForeignKey('one_category_id', 'OneCategoryId', 'INTEGER', 'one_category', 'id', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('OneCategory', 'OneCategory', RelationMap::MANY_TO_ONE, array('one_category_id' => 'id', ), 'SET NULL', 'CASCADE');
        $this->addRelation('ThirdCategory', 'ThirdCategory', RelationMap::ONE_TO_MANY, array('id' => 'second_category_id', ), 'SET NULL', 'CASCADE', 'ThirdCategorys');
    } // buildRelations()

} // SecondCategoryTableMap
