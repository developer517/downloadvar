<?php



/**
 * This class defines the structure of the 'gap' table.
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
class GapTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'downloadvar.map.GapTableMap';

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
        $this->setName('gap');
        $this->setPhpName('Gap');
        $this->setClassname('Gap');
        $this->setPackage('downloadvar');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('desc', 'Desc', 'LONGVARCHAR', true, null, null);
        $this->addColumn('date', 'Date', 'VARCHAR', true, 255, null);
        $this->addForeignKey('comment_id', 'CommentId', 'INTEGER', 'comment', 'id', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Comment', 'Comment', RelationMap::MANY_TO_ONE, array('comment_id' => 'id', ), 'SET NULL', 'CASCADE');
    } // buildRelations()

} // GapTableMap
