<?php


/**
 * Base class that represents a query for the 'third_category' table.
 *
 *
 *
 * @method ThirdCategoryQuery orderById($order = Criteria::ASC) Order by the id column
 * @method ThirdCategoryQuery orderByPersianName($order = Criteria::ASC) Order by the persian_name column
 * @method ThirdCategoryQuery orderByEnglishName($order = Criteria::ASC) Order by the english_name column
 * @method ThirdCategoryQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method ThirdCategoryQuery orderByTag($order = Criteria::ASC) Order by the tag column
 * @method ThirdCategoryQuery orderBySecondCategoryId($order = Criteria::ASC) Order by the second_category_id column
 *
 * @method ThirdCategoryQuery groupById() Group by the id column
 * @method ThirdCategoryQuery groupByPersianName() Group by the persian_name column
 * @method ThirdCategoryQuery groupByEnglishName() Group by the english_name column
 * @method ThirdCategoryQuery groupByDescription() Group by the description column
 * @method ThirdCategoryQuery groupByTag() Group by the tag column
 * @method ThirdCategoryQuery groupBySecondCategoryId() Group by the second_category_id column
 *
 * @method ThirdCategoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ThirdCategoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ThirdCategoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ThirdCategoryQuery leftJoinSecondCategory($relationAlias = null) Adds a LEFT JOIN clause to the query using the SecondCategory relation
 * @method ThirdCategoryQuery rightJoinSecondCategory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SecondCategory relation
 * @method ThirdCategoryQuery innerJoinSecondCategory($relationAlias = null) Adds a INNER JOIN clause to the query using the SecondCategory relation
 *
 * @method ThirdCategoryQuery leftJoinMatter($relationAlias = null) Adds a LEFT JOIN clause to the query using the Matter relation
 * @method ThirdCategoryQuery rightJoinMatter($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Matter relation
 * @method ThirdCategoryQuery innerJoinMatter($relationAlias = null) Adds a INNER JOIN clause to the query using the Matter relation
 *
 * @method ThirdCategory findOne(PropelPDO $con = null) Return the first ThirdCategory matching the query
 * @method ThirdCategory findOneOrCreate(PropelPDO $con = null) Return the first ThirdCategory matching the query, or a new ThirdCategory object populated from the query conditions when no match is found
 *
 * @method ThirdCategory findOneByPersianName(string $persian_name) Return the first ThirdCategory filtered by the persian_name column
 * @method ThirdCategory findOneByEnglishName(string $english_name) Return the first ThirdCategory filtered by the english_name column
 * @method ThirdCategory findOneByDescription(string $description) Return the first ThirdCategory filtered by the description column
 * @method ThirdCategory findOneByTag(string $tag) Return the first ThirdCategory filtered by the tag column
 * @method ThirdCategory findOneBySecondCategoryId(int $second_category_id) Return the first ThirdCategory filtered by the second_category_id column
 *
 * @method array findById(int $id) Return ThirdCategory objects filtered by the id column
 * @method array findByPersianName(string $persian_name) Return ThirdCategory objects filtered by the persian_name column
 * @method array findByEnglishName(string $english_name) Return ThirdCategory objects filtered by the english_name column
 * @method array findByDescription(string $description) Return ThirdCategory objects filtered by the description column
 * @method array findByTag(string $tag) Return ThirdCategory objects filtered by the tag column
 * @method array findBySecondCategoryId(int $second_category_id) Return ThirdCategory objects filtered by the second_category_id column
 *
 * @package    propel.generator.downloadvar.om
 */
abstract class BaseThirdCategoryQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseThirdCategoryQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'downloa3_downloadvar', $modelName = 'ThirdCategory', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ThirdCategoryQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     ThirdCategoryQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ThirdCategoryQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ThirdCategoryQuery) {
            return $criteria;
        }
        $query = new ThirdCategoryQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   ThirdCategory|ThirdCategory[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ThirdCategoryPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ThirdCategoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return   ThirdCategory A model object, or null if the key is not found
     * @throws   PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return   ThirdCategory A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `persian_name`, `english_name`, `description`, `tag`, `second_category_id` FROM `third_category` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new ThirdCategory();
            $obj->hydrate($row);
            ThirdCategoryPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return ThirdCategory|ThirdCategory[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|ThirdCategory[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return ThirdCategoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ThirdCategoryPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ThirdCategoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ThirdCategoryPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ThirdCategoryQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(ThirdCategoryPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the persian_name column
     *
     * Example usage:
     * <code>
     * $query->filterByPersianName('fooValue');   // WHERE persian_name = 'fooValue'
     * $query->filterByPersianName('%fooValue%'); // WHERE persian_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $persianName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ThirdCategoryQuery The current query, for fluid interface
     */
    public function filterByPersianName($persianName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($persianName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $persianName)) {
                $persianName = str_replace('*', '%', $persianName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ThirdCategoryPeer::PERSIAN_NAME, $persianName, $comparison);
    }

    /**
     * Filter the query on the english_name column
     *
     * Example usage:
     * <code>
     * $query->filterByEnglishName('fooValue');   // WHERE english_name = 'fooValue'
     * $query->filterByEnglishName('%fooValue%'); // WHERE english_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $englishName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ThirdCategoryQuery The current query, for fluid interface
     */
    public function filterByEnglishName($englishName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($englishName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $englishName)) {
                $englishName = str_replace('*', '%', $englishName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ThirdCategoryPeer::ENGLISH_NAME, $englishName, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%'); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ThirdCategoryQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $description)) {
                $description = str_replace('*', '%', $description);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ThirdCategoryPeer::DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the tag column
     *
     * Example usage:
     * <code>
     * $query->filterByTag('fooValue');   // WHERE tag = 'fooValue'
     * $query->filterByTag('%fooValue%'); // WHERE tag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tag The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ThirdCategoryQuery The current query, for fluid interface
     */
    public function filterByTag($tag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tag)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tag)) {
                $tag = str_replace('*', '%', $tag);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ThirdCategoryPeer::TAG, $tag, $comparison);
    }

    /**
     * Filter the query on the second_category_id column
     *
     * Example usage:
     * <code>
     * $query->filterBySecondCategoryId(1234); // WHERE second_category_id = 1234
     * $query->filterBySecondCategoryId(array(12, 34)); // WHERE second_category_id IN (12, 34)
     * $query->filterBySecondCategoryId(array('min' => 12)); // WHERE second_category_id > 12
     * </code>
     *
     * @see       filterBySecondCategory()
     *
     * @param     mixed $secondCategoryId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ThirdCategoryQuery The current query, for fluid interface
     */
    public function filterBySecondCategoryId($secondCategoryId = null, $comparison = null)
    {
        if (is_array($secondCategoryId)) {
            $useMinMax = false;
            if (isset($secondCategoryId['min'])) {
                $this->addUsingAlias(ThirdCategoryPeer::SECOND_CATEGORY_ID, $secondCategoryId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($secondCategoryId['max'])) {
                $this->addUsingAlias(ThirdCategoryPeer::SECOND_CATEGORY_ID, $secondCategoryId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ThirdCategoryPeer::SECOND_CATEGORY_ID, $secondCategoryId, $comparison);
    }

    /**
     * Filter the query by a related SecondCategory object
     *
     * @param   SecondCategory|PropelObjectCollection $secondCategory The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   ThirdCategoryQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterBySecondCategory($secondCategory, $comparison = null)
    {
        if ($secondCategory instanceof SecondCategory) {
            return $this
                ->addUsingAlias(ThirdCategoryPeer::SECOND_CATEGORY_ID, $secondCategory->getId(), $comparison);
        } elseif ($secondCategory instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ThirdCategoryPeer::SECOND_CATEGORY_ID, $secondCategory->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterBySecondCategory() only accepts arguments of type SecondCategory or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SecondCategory relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ThirdCategoryQuery The current query, for fluid interface
     */
    public function joinSecondCategory($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SecondCategory');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SecondCategory');
        }

        return $this;
    }

    /**
     * Use the SecondCategory relation SecondCategory object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SecondCategoryQuery A secondary query class using the current class as primary query
     */
    public function useSecondCategoryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSecondCategory($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SecondCategory', 'SecondCategoryQuery');
    }

    /**
     * Filter the query by a related Matter object
     *
     * @param   Matter|PropelObjectCollection $matter  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   ThirdCategoryQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByMatter($matter, $comparison = null)
    {
        if ($matter instanceof Matter) {
            return $this
                ->addUsingAlias(ThirdCategoryPeer::ID, $matter->getThirdCategoryId(), $comparison);
        } elseif ($matter instanceof PropelObjectCollection) {
            return $this
                ->useMatterQuery()
                ->filterByPrimaryKeys($matter->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByMatter() only accepts arguments of type Matter or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Matter relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ThirdCategoryQuery The current query, for fluid interface
     */
    public function joinMatter($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Matter');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Matter');
        }

        return $this;
    }

    /**
     * Use the Matter relation Matter object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   MatterQuery A secondary query class using the current class as primary query
     */
    public function useMatterQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinMatter($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Matter', 'MatterQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ThirdCategory $thirdCategory Object to remove from the list of results
     *
     * @return ThirdCategoryQuery The current query, for fluid interface
     */
    public function prune($thirdCategory = null)
    {
        if ($thirdCategory) {
            $this->addUsingAlias(ThirdCategoryPeer::ID, $thirdCategory->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
