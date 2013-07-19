<?php



/**
 * This class defines the structure of the 'one_category' table.
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
class OneCategoryTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'downloadvar.map.OneCategoryTableMap';

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
        $this->setName('one_category');
        $this->setPhpName('OneCategory');
        $this->setClassname('OneCategory');
        $this->setPackage('downloadvar');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('persian_name', 'PersianName', 'VARCHAR', true, 50, null);
        $this->addColumn('english_name', 'EnglishName', 'VARCHAR', true, 50, null);
        $this->addColumn('description', 'Description', 'VARCHAR', true, 255, null);
        $this->addColumn('tag', 'Tag', 'VARCHAR', true, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SecondCategory', 'SecondCategory', RelationMap::ONE_TO_MANY, array('id' => 'one_category_id', ), 'SET NULL', 'CASCADE', 'SecondCategorys');
    } // buildRelations()

} // OneCategoryTableMap
