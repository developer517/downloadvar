<?php


/**
 * Base class that represents a query for the 'one_category' table.
 *
 *
 *
 * @method OneCategoryQuery orderById($order = Criteria::ASC) Order by the id column
 * @method OneCategoryQuery orderByPersianName($order = Criteria::ASC) Order by the persian_name column
 * @method OneCategoryQuery orderByEnglishName($order = Criteria::ASC) Order by the english_name column
 * @method OneCategoryQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method OneCategoryQuery orderByTag($order = Criteria::ASC) Order by the tag column
 *
 * @method OneCategoryQuery groupById() Group by the id column
 * @method OneCategoryQuery groupByPersianName() Group by the persian_name column
 * @method OneCategoryQuery groupByEnglishName() Group by the english_name column
 * @method OneCategoryQuery groupByDescription() Group by the description column
 * @method OneCategoryQuery groupByTag() Group by the tag column
 *
 * @method OneCategoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method OneCategoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method OneCategoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method OneCategoryQuery leftJoinSecondCategory($relationAlias = null) Adds a LEFT JOIN clause to the query using the SecondCategory relation
 * @method OneCategoryQuery rightJoinSecondCategory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SecondCategory relation
 * @method OneCategoryQuery innerJoinSecondCategory($relationAlias = null) Adds a INNER JOIN clause to the query using the SecondCategory relation
 *
 * @method OneCategory findOne(PropelPDO $con = null) Return the first OneCategory matching the query
 * @method OneCategory findOneOrCreate(PropelPDO $con = null) Return the first OneCategory matching the query, or a new OneCategory object populated from the query conditions when no match is found
 *
 * @method OneCategory findOneByPersianName(string $persian_name) Return the first OneCategory filtered by the persian_name column
 * @method OneCategory findOneByEnglishName(string $english_name) Return the first OneCategory filtered by the english_name column
 * @method OneCategory findOneByDescription(string $description) Return the first OneCategory filtered by the description column
 * @method OneCategory findOneByTag(string $tag) Return the first OneCategory filtered by the tag column
 *
 * @method array findById(int $id) Return OneCategory objects filtered by the id column
 * @method array findByPersianName(string $persian_name) Return OneCategory objects filtered by the persian_name column
 * @method array findByEnglishName(string $english_name) Return OneCategory objects filtered by the english_name column
 * @method array findByDescription(string $description) Return OneCategory objects filtered by the description column
 * @method array findByTag(string $tag) Return OneCategory objects filtered by the tag column
 *
 * @package    propel.generator.downloadvar.om
 */
abstract class BaseOneCategoryQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseOneCategoryQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'downloa3_downloadvar', $modelName = 'OneCategory', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new OneCategoryQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     OneCategoryQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return OneCategoryQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof OneCategoryQuery) {
            return $criteria;
        }
        $query = new OneCategoryQuery();
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
     * @return   OneCategory|OneCategory[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = OneCategoryPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(OneCategoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   OneCategory A model object, or null if the key is not found
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
     * @return   OneCategory A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `persian_name`, `english_name`, `description`, `tag` FROM `one_category` WHERE `id` = :p0';
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
            $obj = new OneCategory();
            $obj->hydrate($row);
            OneCategoryPeer::addInstanceToPool($obj, (string) $key);
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
     * @return OneCategory|OneCategory[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|OneCategory[]|mixed the list of results, formatted by the current formatter
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
     * @return OneCategoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(OneCategoryPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return OneCategoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(OneCategoryPeer::ID, $keys, Criteria::IN);
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
     * @return OneCategoryQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(OneCategoryPeer::ID, $id, $comparison);
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
     * @return OneCategoryQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OneCategoryPeer::PERSIAN_NAME, $persianName, $comparison);
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
     * @return OneCategoryQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OneCategoryPeer::ENGLISH_NAME, $englishName, $comparison);
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
     * @return OneCategoryQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OneCategoryPeer::DESCRIPTION, $description, $comparison);
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
     * @return OneCategoryQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OneCategoryPeer::TAG, $tag, $comparison);
    }

    /**
     * Filter the query by a related SecondCategory object
     *
     * @param   SecondCategory|PropelObjectCollection $secondCategory  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   OneCategoryQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterBySecondCategory($secondCategory, $comparison = null)
    {
        if ($secondCategory instanceof SecondCategory) {
            return $this
                ->addUsingAlias(OneCategoryPeer::ID, $secondCategory->getOneCategoryId(), $comparison);
        } elseif ($secondCategory instanceof PropelObjectCollection) {
            return $this
                ->useSecondCategoryQuery()
                ->filterByPrimaryKeys($secondCategory->getPrimaryKeys())
                ->endUse();
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
     * @return OneCategoryQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   OneCategory $oneCategory Object to remove from the list of results
     *
     * @return OneCategoryQuery The current query, for fluid interface
     */
    public function prune($oneCategory = null)
    {
        if ($oneCategory) {
            $this->addUsingAlias(OneCategoryPeer::ID, $oneCategory->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
