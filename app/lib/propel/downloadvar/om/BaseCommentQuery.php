<?php


/**
 * Base class that represents a query for the 'comment' table.
 *
 *
 *
 * @method CommentQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommentQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method CommentQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method CommentQuery orderByWebsite($order = Criteria::ASC) Order by the website column
 * @method CommentQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method CommentQuery orderByDesc($order = Criteria::ASC) Order by the desc column
 * @method CommentQuery orderByAction($order = Criteria::ASC) Order by the action column
 * @method CommentQuery orderByMatterId($order = Criteria::ASC) Order by the matter_id column
 *
 * @method CommentQuery groupById() Group by the id column
 * @method CommentQuery groupByName() Group by the name column
 * @method CommentQuery groupByEmail() Group by the email column
 * @method CommentQuery groupByWebsite() Group by the website column
 * @method CommentQuery groupByDate() Group by the date column
 * @method CommentQuery groupByDesc() Group by the desc column
 * @method CommentQuery groupByAction() Group by the action column
 * @method CommentQuery groupByMatterId() Group by the matter_id column
 *
 * @method CommentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommentQuery leftJoinMatter($relationAlias = null) Adds a LEFT JOIN clause to the query using the Matter relation
 * @method CommentQuery rightJoinMatter($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Matter relation
 * @method CommentQuery innerJoinMatter($relationAlias = null) Adds a INNER JOIN clause to the query using the Matter relation
 *
 * @method CommentQuery leftJoinGap($relationAlias = null) Adds a LEFT JOIN clause to the query using the Gap relation
 * @method CommentQuery rightJoinGap($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Gap relation
 * @method CommentQuery innerJoinGap($relationAlias = null) Adds a INNER JOIN clause to the query using the Gap relation
 *
 * @method Comment findOne(PropelPDO $con = null) Return the first Comment matching the query
 * @method Comment findOneOrCreate(PropelPDO $con = null) Return the first Comment matching the query, or a new Comment object populated from the query conditions when no match is found
 *
 * @method Comment findOneByName(string $name) Return the first Comment filtered by the name column
 * @method Comment findOneByEmail(string $email) Return the first Comment filtered by the email column
 * @method Comment findOneByWebsite(string $website) Return the first Comment filtered by the website column
 * @method Comment findOneByDate(string $date) Return the first Comment filtered by the date column
 * @method Comment findOneByDesc(string $desc) Return the first Comment filtered by the desc column
 * @method Comment findOneByAction(int $action) Return the first Comment filtered by the action column
 * @method Comment findOneByMatterId(int $matter_id) Return the first Comment filtered by the matter_id column
 *
 * @method array findById(int $id) Return Comment objects filtered by the id column
 * @method array findByName(string $name) Return Comment objects filtered by the name column
 * @method array findByEmail(string $email) Return Comment objects filtered by the email column
 * @method array findByWebsite(string $website) Return Comment objects filtered by the website column
 * @method array findByDate(string $date) Return Comment objects filtered by the date column
 * @method array findByDesc(string $desc) Return Comment objects filtered by the desc column
 * @method array findByAction(int $action) Return Comment objects filtered by the action column
 * @method array findByMatterId(int $matter_id) Return Comment objects filtered by the matter_id column
 *
 * @package    propel.generator.downloadvar.om
 */
abstract class BaseCommentQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommentQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'downloa3_downloadvar', $modelName = 'Comment', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     CommentQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommentQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommentQuery) {
            return $criteria;
        }
        $query = new CommentQuery();
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
     * @return   Comment|Comment[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommentPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Comment A model object, or null if the key is not found
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
     * @return   Comment A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `name`, `email`, `website`, `date`, `desc`, `action`, `matter_id` FROM `comment` WHERE `id` = :p0';
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
            $obj = new Comment();
            $obj->hydrate($row);
            CommentPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Comment|Comment[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Comment[]|mixed the list of results, formatted by the current formatter
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
     * @return CommentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommentPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommentPeer::ID, $keys, Criteria::IN);
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
     * @return CommentQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(CommentPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommentQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommentPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommentQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommentPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the website column
     *
     * Example usage:
     * <code>
     * $query->filterByWebsite('fooValue');   // WHERE website = 'fooValue'
     * $query->filterByWebsite('%fooValue%'); // WHERE website LIKE '%fooValue%'
     * </code>
     *
     * @param     string $website The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommentQuery The current query, for fluid interface
     */
    public function filterByWebsite($website = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($website)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $website)) {
                $website = str_replace('*', '%', $website);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommentPeer::WEBSITE, $website, $comparison);
    }

    /**
     * Filter the query on the date column
     *
     * Example usage:
     * <code>
     * $query->filterByDate('fooValue');   // WHERE date = 'fooValue'
     * $query->filterByDate('%fooValue%'); // WHERE date LIKE '%fooValue%'
     * </code>
     *
     * @param     string $date The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommentQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($date)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $date)) {
                $date = str_replace('*', '%', $date);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommentPeer::DATE, $date, $comparison);
    }

    /**
     * Filter the query on the desc column
     *
     * Example usage:
     * <code>
     * $query->filterByDesc('fooValue');   // WHERE desc = 'fooValue'
     * $query->filterByDesc('%fooValue%'); // WHERE desc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $desc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommentQuery The current query, for fluid interface
     */
    public function filterByDesc($desc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($desc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $desc)) {
                $desc = str_replace('*', '%', $desc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommentPeer::DESC, $desc, $comparison);
    }

    /**
     * Filter the query on the action column
     *
     * Example usage:
     * <code>
     * $query->filterByAction(1234); // WHERE action = 1234
     * $query->filterByAction(array(12, 34)); // WHERE action IN (12, 34)
     * $query->filterByAction(array('min' => 12)); // WHERE action > 12
     * </code>
     *
     * @param     mixed $action The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommentQuery The current query, for fluid interface
     */
    public function filterByAction($action = null, $comparison = null)
    {
        if (is_array($action)) {
            $useMinMax = false;
            if (isset($action['min'])) {
                $this->addUsingAlias(CommentPeer::ACTION, $action['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($action['max'])) {
                $this->addUsingAlias(CommentPeer::ACTION, $action['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommentPeer::ACTION, $action, $comparison);
    }

    /**
     * Filter the query on the matter_id column
     *
     * Example usage:
     * <code>
     * $query->filterByMatterId(1234); // WHERE matter_id = 1234
     * $query->filterByMatterId(array(12, 34)); // WHERE matter_id IN (12, 34)
     * $query->filterByMatterId(array('min' => 12)); // WHERE matter_id > 12
     * </code>
     *
     * @see       filterByMatter()
     *
     * @param     mixed $matterId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommentQuery The current query, for fluid interface
     */
    public function filterByMatterId($matterId = null, $comparison = null)
    {
        if (is_array($matterId)) {
            $useMinMax = false;
            if (isset($matterId['min'])) {
                $this->addUsingAlias(CommentPeer::MATTER_ID, $matterId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($matterId['max'])) {
                $this->addUsingAlias(CommentPeer::MATTER_ID, $matterId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommentPeer::MATTER_ID, $matterId, $comparison);
    }

    /**
     * Filter the query by a related Matter object
     *
     * @param   Matter|PropelObjectCollection $matter The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   CommentQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByMatter($matter, $comparison = null)
    {
        if ($matter instanceof Matter) {
            return $this
                ->addUsingAlias(CommentPeer::MATTER_ID, $matter->getId(), $comparison);
        } elseif ($matter instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommentPeer::MATTER_ID, $matter->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return CommentQuery The current query, for fluid interface
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
     * Filter the query by a related Gap object
     *
     * @param   Gap|PropelObjectCollection $gap  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   CommentQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByGap($gap, $comparison = null)
    {
        if ($gap instanceof Gap) {
            return $this
                ->addUsingAlias(CommentPeer::ID, $gap->getCommentId(), $comparison);
        } elseif ($gap instanceof PropelObjectCollection) {
            return $this
                ->useGapQuery()
                ->filterByPrimaryKeys($gap->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGap() only accepts arguments of type Gap or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Gap relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommentQuery The current query, for fluid interface
     */
    public function joinGap($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Gap');

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
            $this->addJoinObject($join, 'Gap');
        }

        return $this;
    }

    /**
     * Use the Gap relation Gap object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   GapQuery A secondary query class using the current class as primary query
     */
    public function useGapQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGap($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Gap', 'GapQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Comment $comment Object to remove from the list of results
     *
     * @return CommentQuery The current query, for fluid interface
     */
    public function prune($comment = null)
    {
        if ($comment) {
            $this->addUsingAlias(CommentPeer::ID, $comment->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
