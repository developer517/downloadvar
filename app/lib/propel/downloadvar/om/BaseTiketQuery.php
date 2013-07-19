<?php


/**
 * Base class that represents a query for the 'tiket' table.
 *
 *
 *
 * @method TiketQuery orderById($order = Criteria::ASC) Order by the id column
 * @method TiketQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method TiketQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method TiketQuery orderByDesc($order = Criteria::ASC) Order by the desc column
 * @method TiketQuery orderByCategory($order = Criteria::ASC) Order by the category column
 * @method TiketQuery orderByOrder($order = Criteria::ASC) Order by the order column
 * @method TiketQuery orderByAction($order = Criteria::ASC) Order by the action column
 * @method TiketQuery orderByIncrease($order = Criteria::ASC) Order by the increase column
 * @method TiketQuery orderByDate($order = Criteria::ASC) Order by the date column
 *
 * @method TiketQuery groupById() Group by the id column
 * @method TiketQuery groupByName() Group by the name column
 * @method TiketQuery groupByEmail() Group by the email column
 * @method TiketQuery groupByDesc() Group by the desc column
 * @method TiketQuery groupByCategory() Group by the category column
 * @method TiketQuery groupByOrder() Group by the order column
 * @method TiketQuery groupByAction() Group by the action column
 * @method TiketQuery groupByIncrease() Group by the increase column
 * @method TiketQuery groupByDate() Group by the date column
 *
 * @method TiketQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TiketQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TiketQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Tiket findOne(PropelPDO $con = null) Return the first Tiket matching the query
 * @method Tiket findOneOrCreate(PropelPDO $con = null) Return the first Tiket matching the query, or a new Tiket object populated from the query conditions when no match is found
 *
 * @method Tiket findOneByName(string $name) Return the first Tiket filtered by the name column
 * @method Tiket findOneByEmail(string $email) Return the first Tiket filtered by the email column
 * @method Tiket findOneByDesc(string $desc) Return the first Tiket filtered by the desc column
 * @method Tiket findOneByCategory(string $category) Return the first Tiket filtered by the category column
 * @method Tiket findOneByOrder(int $order) Return the first Tiket filtered by the order column
 * @method Tiket findOneByAction(int $action) Return the first Tiket filtered by the action column
 * @method Tiket findOneByIncrease(int $increase) Return the first Tiket filtered by the increase column
 * @method Tiket findOneByDate(string $date) Return the first Tiket filtered by the date column
 *
 * @method array findById(int $id) Return Tiket objects filtered by the id column
 * @method array findByName(string $name) Return Tiket objects filtered by the name column
 * @method array findByEmail(string $email) Return Tiket objects filtered by the email column
 * @method array findByDesc(string $desc) Return Tiket objects filtered by the desc column
 * @method array findByCategory(string $category) Return Tiket objects filtered by the category column
 * @method array findByOrder(int $order) Return Tiket objects filtered by the order column
 * @method array findByAction(int $action) Return Tiket objects filtered by the action column
 * @method array findByIncrease(int $increase) Return Tiket objects filtered by the increase column
 * @method array findByDate(string $date) Return Tiket objects filtered by the date column
 *
 * @package    propel.generator.downloadvar.om
 */
abstract class BaseTiketQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTiketQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'downloa3_downloadvar', $modelName = 'Tiket', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TiketQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     TiketQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TiketQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TiketQuery) {
            return $criteria;
        }
        $query = new TiketQuery();
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
     * @return   Tiket|Tiket[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TiketPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TiketPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Tiket A model object, or null if the key is not found
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
     * @return   Tiket A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `name`, `email`, `desc`, `category`, `order`, `action`, `increase`, `date` FROM `tiket` WHERE `id` = :p0';
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
            $obj = new Tiket();
            $obj->hydrate($row);
            TiketPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Tiket|Tiket[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Tiket[]|mixed the list of results, formatted by the current formatter
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
     * @return TiketQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TiketPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TiketQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TiketPeer::ID, $keys, Criteria::IN);
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
     * @return TiketQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(TiketPeer::ID, $id, $comparison);
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
     * @return TiketQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TiketPeer::NAME, $name, $comparison);
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
     * @return TiketQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TiketPeer::EMAIL, $email, $comparison);
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
     * @return TiketQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TiketPeer::DESC, $desc, $comparison);
    }

    /**
     * Filter the query on the category column
     *
     * Example usage:
     * <code>
     * $query->filterByCategory('fooValue');   // WHERE category = 'fooValue'
     * $query->filterByCategory('%fooValue%'); // WHERE category LIKE '%fooValue%'
     * </code>
     *
     * @param     string $category The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TiketQuery The current query, for fluid interface
     */
    public function filterByCategory($category = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($category)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $category)) {
                $category = str_replace('*', '%', $category);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TiketPeer::CATEGORY, $category, $comparison);
    }

    /**
     * Filter the query on the order column
     *
     * Example usage:
     * <code>
     * $query->filterByOrder(1234); // WHERE order = 1234
     * $query->filterByOrder(array(12, 34)); // WHERE order IN (12, 34)
     * $query->filterByOrder(array('min' => 12)); // WHERE order > 12
     * </code>
     *
     * @param     mixed $order The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TiketQuery The current query, for fluid interface
     */
    public function filterByOrder($order = null, $comparison = null)
    {
        if (is_array($order)) {
            $useMinMax = false;
            if (isset($order['min'])) {
                $this->addUsingAlias(TiketPeer::ORDER, $order['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($order['max'])) {
                $this->addUsingAlias(TiketPeer::ORDER, $order['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TiketPeer::ORDER, $order, $comparison);
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
     * @return TiketQuery The current query, for fluid interface
     */
    public function filterByAction($action = null, $comparison = null)
    {
        if (is_array($action)) {
            $useMinMax = false;
            if (isset($action['min'])) {
                $this->addUsingAlias(TiketPeer::ACTION, $action['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($action['max'])) {
                $this->addUsingAlias(TiketPeer::ACTION, $action['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TiketPeer::ACTION, $action, $comparison);
    }

    /**
     * Filter the query on the increase column
     *
     * Example usage:
     * <code>
     * $query->filterByIncrease(1234); // WHERE increase = 1234
     * $query->filterByIncrease(array(12, 34)); // WHERE increase IN (12, 34)
     * $query->filterByIncrease(array('min' => 12)); // WHERE increase > 12
     * </code>
     *
     * @param     mixed $increase The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TiketQuery The current query, for fluid interface
     */
    public function filterByIncrease($increase = null, $comparison = null)
    {
        if (is_array($increase)) {
            $useMinMax = false;
            if (isset($increase['min'])) {
                $this->addUsingAlias(TiketPeer::INCREASE, $increase['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($increase['max'])) {
                $this->addUsingAlias(TiketPeer::INCREASE, $increase['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TiketPeer::INCREASE, $increase, $comparison);
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
     * @return TiketQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TiketPeer::DATE, $date, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Tiket $tiket Object to remove from the list of results
     *
     * @return TiketQuery The current query, for fluid interface
     */
    public function prune($tiket = null)
    {
        if ($tiket) {
            $this->addUsingAlias(TiketPeer::ID, $tiket->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
