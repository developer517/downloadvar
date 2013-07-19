<?php


/**
 * Base class that represents a query for the 'matter' table.
 *
 *
 *
 * @method MatterQuery orderById($order = Criteria::ASC) Order by the id column
 * @method MatterQuery orderByMainSubject($order = Criteria::ASC) Order by the main_subject column
 * @method MatterQuery orderByShortSubject($order = Criteria::ASC) Order by the short_subject column
 * @method MatterQuery orderByLongDesc($order = Criteria::ASC) Order by the long_desc column
 * @method MatterQuery orderByShortDesc($order = Criteria::ASC) Order by the short_desc column
 * @method MatterQuery orderByEnglishDesc($order = Criteria::ASC) Order by the english_desc column
 * @method MatterQuery orderByHelpDesc($order = Criteria::ASC) Order by the help_desc column
 * @method MatterQuery orderByDownloadLink($order = Criteria::ASC) Order by the download_link column
 * @method MatterQuery orderByTagKeywords($order = Criteria::ASC) Order by the tag_keywords column
 * @method MatterQuery orderByTagDesc($order = Criteria::ASC) Order by the tag_desc column
 * @method MatterQuery orderByViewCount($order = Criteria::ASC) Order by the view_count column
 * @method MatterQuery orderByOrder($order = Criteria::ASC) Order by the order column
 * @method MatterQuery orderByNeed($order = Criteria::ASC) Order by the need column
 * @method MatterQuery orderBySpicial($order = Criteria::ASC) Order by the spicial column
 * @method MatterQuery orderByDownloadCount($order = Criteria::ASC) Order by the download_count column
 * @method MatterQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method MatterQuery orderByPublisher($order = Criteria::ASC) Order by the publisher column
 * @method MatterQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method MatterQuery orderByThirdCategoryId($order = Criteria::ASC) Order by the third_category_id column
 *
 * @method MatterQuery groupById() Group by the id column
 * @method MatterQuery groupByMainSubject() Group by the main_subject column
 * @method MatterQuery groupByShortSubject() Group by the short_subject column
 * @method MatterQuery groupByLongDesc() Group by the long_desc column
 * @method MatterQuery groupByShortDesc() Group by the short_desc column
 * @method MatterQuery groupByEnglishDesc() Group by the english_desc column
 * @method MatterQuery groupByHelpDesc() Group by the help_desc column
 * @method MatterQuery groupByDownloadLink() Group by the download_link column
 * @method MatterQuery groupByTagKeywords() Group by the tag_keywords column
 * @method MatterQuery groupByTagDesc() Group by the tag_desc column
 * @method MatterQuery groupByViewCount() Group by the view_count column
 * @method MatterQuery groupByOrder() Group by the order column
 * @method MatterQuery groupByNeed() Group by the need column
 * @method MatterQuery groupBySpicial() Group by the spicial column
 * @method MatterQuery groupByDownloadCount() Group by the download_count column
 * @method MatterQuery groupByDate() Group by the date column
 * @method MatterQuery groupByPublisher() Group by the publisher column
 * @method MatterQuery groupByUserId() Group by the user_id column
 * @method MatterQuery groupByThirdCategoryId() Group by the third_category_id column
 *
 * @method MatterQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method MatterQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method MatterQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method MatterQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method MatterQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method MatterQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method MatterQuery leftJoinThirdCategory($relationAlias = null) Adds a LEFT JOIN clause to the query using the ThirdCategory relation
 * @method MatterQuery rightJoinThirdCategory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ThirdCategory relation
 * @method MatterQuery innerJoinThirdCategory($relationAlias = null) Adds a INNER JOIN clause to the query using the ThirdCategory relation
 *
 * @method MatterQuery leftJoinComment($relationAlias = null) Adds a LEFT JOIN clause to the query using the Comment relation
 * @method MatterQuery rightJoinComment($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Comment relation
 * @method MatterQuery innerJoinComment($relationAlias = null) Adds a INNER JOIN clause to the query using the Comment relation
 *
 * @method Matter findOne(PropelPDO $con = null) Return the first Matter matching the query
 * @method Matter findOneOrCreate(PropelPDO $con = null) Return the first Matter matching the query, or a new Matter object populated from the query conditions when no match is found
 *
 * @method Matter findOneByMainSubject(string $main_subject) Return the first Matter filtered by the main_subject column
 * @method Matter findOneByShortSubject(string $short_subject) Return the first Matter filtered by the short_subject column
 * @method Matter findOneByLongDesc(string $long_desc) Return the first Matter filtered by the long_desc column
 * @method Matter findOneByShortDesc(string $short_desc) Return the first Matter filtered by the short_desc column
 * @method Matter findOneByEnglishDesc(string $english_desc) Return the first Matter filtered by the english_desc column
 * @method Matter findOneByHelpDesc(string $help_desc) Return the first Matter filtered by the help_desc column
 * @method Matter findOneByDownloadLink(string $download_link) Return the first Matter filtered by the download_link column
 * @method Matter findOneByTagKeywords(string $tag_keywords) Return the first Matter filtered by the tag_keywords column
 * @method Matter findOneByTagDesc(string $tag_desc) Return the first Matter filtered by the tag_desc column
 * @method Matter findOneByViewCount(int $view_count) Return the first Matter filtered by the view_count column
 * @method Matter findOneByOrder(int $order) Return the first Matter filtered by the order column
 * @method Matter findOneByNeed(int $need) Return the first Matter filtered by the need column
 * @method Matter findOneBySpicial(int $spicial) Return the first Matter filtered by the spicial column
 * @method Matter findOneByDownloadCount(int $download_count) Return the first Matter filtered by the download_count column
 * @method Matter findOneByDate(string $date) Return the first Matter filtered by the date column
 * @method Matter findOneByPublisher(int $publisher) Return the first Matter filtered by the publisher column
 * @method Matter findOneByUserId(int $user_id) Return the first Matter filtered by the user_id column
 * @method Matter findOneByThirdCategoryId(int $third_category_id) Return the first Matter filtered by the third_category_id column
 *
 * @method array findById(int $id) Return Matter objects filtered by the id column
 * @method array findByMainSubject(string $main_subject) Return Matter objects filtered by the main_subject column
 * @method array findByShortSubject(string $short_subject) Return Matter objects filtered by the short_subject column
 * @method array findByLongDesc(string $long_desc) Return Matter objects filtered by the long_desc column
 * @method array findByShortDesc(string $short_desc) Return Matter objects filtered by the short_desc column
 * @method array findByEnglishDesc(string $english_desc) Return Matter objects filtered by the english_desc column
 * @method array findByHelpDesc(string $help_desc) Return Matter objects filtered by the help_desc column
 * @method array findByDownloadLink(string $download_link) Return Matter objects filtered by the download_link column
 * @method array findByTagKeywords(string $tag_keywords) Return Matter objects filtered by the tag_keywords column
 * @method array findByTagDesc(string $tag_desc) Return Matter objects filtered by the tag_desc column
 * @method array findByViewCount(int $view_count) Return Matter objects filtered by the view_count column
 * @method array findByOrder(int $order) Return Matter objects filtered by the order column
 * @method array findByNeed(int $need) Return Matter objects filtered by the need column
 * @method array findBySpicial(int $spicial) Return Matter objects filtered by the spicial column
 * @method array findByDownloadCount(int $download_count) Return Matter objects filtered by the download_count column
 * @method array findByDate(string $date) Return Matter objects filtered by the date column
 * @method array findByPublisher(int $publisher) Return Matter objects filtered by the publisher column
 * @method array findByUserId(int $user_id) Return Matter objects filtered by the user_id column
 * @method array findByThirdCategoryId(int $third_category_id) Return Matter objects filtered by the third_category_id column
 *
 * @package    propel.generator.downloadvar.om
 */
abstract class BaseMatterQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseMatterQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'downloa3_downloadvar', $modelName = 'Matter', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MatterQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     MatterQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MatterQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MatterQuery) {
            return $criteria;
        }
        $query = new MatterQuery();
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
     * @return   Matter|Matter[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MatterPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MatterPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Matter A model object, or null if the key is not found
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
     * @return   Matter A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `main_subject`, `short_subject`, `long_desc`, `short_desc`, `english_desc`, `help_desc`, `download_link`, `tag_keywords`, `tag_desc`, `view_count`, `order`, `need`, `spicial`, `download_count`, `date`, `publisher`, `user_id`, `third_category_id` FROM `matter` WHERE `id` = :p0';
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
            $obj = new Matter();
            $obj->hydrate($row);
            MatterPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Matter|Matter[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Matter[]|mixed the list of results, formatted by the current formatter
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
     * @return MatterQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MatterPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MatterQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MatterPeer::ID, $keys, Criteria::IN);
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
     * @return MatterQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(MatterPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the main_subject column
     *
     * Example usage:
     * <code>
     * $query->filterByMainSubject('fooValue');   // WHERE main_subject = 'fooValue'
     * $query->filterByMainSubject('%fooValue%'); // WHERE main_subject LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mainSubject The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatterQuery The current query, for fluid interface
     */
    public function filterByMainSubject($mainSubject = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mainSubject)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mainSubject)) {
                $mainSubject = str_replace('*', '%', $mainSubject);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatterPeer::MAIN_SUBJECT, $mainSubject, $comparison);
    }

    /**
     * Filter the query on the short_subject column
     *
     * Example usage:
     * <code>
     * $query->filterByShortSubject('fooValue');   // WHERE short_subject = 'fooValue'
     * $query->filterByShortSubject('%fooValue%'); // WHERE short_subject LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shortSubject The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatterQuery The current query, for fluid interface
     */
    public function filterByShortSubject($shortSubject = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shortSubject)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $shortSubject)) {
                $shortSubject = str_replace('*', '%', $shortSubject);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatterPeer::SHORT_SUBJECT, $shortSubject, $comparison);
    }

    /**
     * Filter the query on the long_desc column
     *
     * Example usage:
     * <code>
     * $query->filterByLongDesc('fooValue');   // WHERE long_desc = 'fooValue'
     * $query->filterByLongDesc('%fooValue%'); // WHERE long_desc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $longDesc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatterQuery The current query, for fluid interface
     */
    public function filterByLongDesc($longDesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($longDesc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $longDesc)) {
                $longDesc = str_replace('*', '%', $longDesc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatterPeer::LONG_DESC, $longDesc, $comparison);
    }

    /**
     * Filter the query on the short_desc column
     *
     * Example usage:
     * <code>
     * $query->filterByShortDesc('fooValue');   // WHERE short_desc = 'fooValue'
     * $query->filterByShortDesc('%fooValue%'); // WHERE short_desc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shortDesc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatterQuery The current query, for fluid interface
     */
    public function filterByShortDesc($shortDesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shortDesc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $shortDesc)) {
                $shortDesc = str_replace('*', '%', $shortDesc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatterPeer::SHORT_DESC, $shortDesc, $comparison);
    }

    /**
     * Filter the query on the english_desc column
     *
     * Example usage:
     * <code>
     * $query->filterByEnglishDesc('fooValue');   // WHERE english_desc = 'fooValue'
     * $query->filterByEnglishDesc('%fooValue%'); // WHERE english_desc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $englishDesc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatterQuery The current query, for fluid interface
     */
    public function filterByEnglishDesc($englishDesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($englishDesc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $englishDesc)) {
                $englishDesc = str_replace('*', '%', $englishDesc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatterPeer::ENGLISH_DESC, $englishDesc, $comparison);
    }

    /**
     * Filter the query on the help_desc column
     *
     * Example usage:
     * <code>
     * $query->filterByHelpDesc('fooValue');   // WHERE help_desc = 'fooValue'
     * $query->filterByHelpDesc('%fooValue%'); // WHERE help_desc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $helpDesc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatterQuery The current query, for fluid interface
     */
    public function filterByHelpDesc($helpDesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($helpDesc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $helpDesc)) {
                $helpDesc = str_replace('*', '%', $helpDesc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatterPeer::HELP_DESC, $helpDesc, $comparison);
    }

    /**
     * Filter the query on the download_link column
     *
     * Example usage:
     * <code>
     * $query->filterByDownloadLink('fooValue');   // WHERE download_link = 'fooValue'
     * $query->filterByDownloadLink('%fooValue%'); // WHERE download_link LIKE '%fooValue%'
     * </code>
     *
     * @param     string $downloadLink The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatterQuery The current query, for fluid interface
     */
    public function filterByDownloadLink($downloadLink = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($downloadLink)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $downloadLink)) {
                $downloadLink = str_replace('*', '%', $downloadLink);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatterPeer::DOWNLOAD_LINK, $downloadLink, $comparison);
    }

    /**
     * Filter the query on the tag_keywords column
     *
     * Example usage:
     * <code>
     * $query->filterByTagKeywords('fooValue');   // WHERE tag_keywords = 'fooValue'
     * $query->filterByTagKeywords('%fooValue%'); // WHERE tag_keywords LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tagKeywords The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatterQuery The current query, for fluid interface
     */
    public function filterByTagKeywords($tagKeywords = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tagKeywords)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tagKeywords)) {
                $tagKeywords = str_replace('*', '%', $tagKeywords);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatterPeer::TAG_KEYWORDS, $tagKeywords, $comparison);
    }

    /**
     * Filter the query on the tag_desc column
     *
     * Example usage:
     * <code>
     * $query->filterByTagDesc('fooValue');   // WHERE tag_desc = 'fooValue'
     * $query->filterByTagDesc('%fooValue%'); // WHERE tag_desc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tagDesc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatterQuery The current query, for fluid interface
     */
    public function filterByTagDesc($tagDesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tagDesc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tagDesc)) {
                $tagDesc = str_replace('*', '%', $tagDesc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatterPeer::TAG_DESC, $tagDesc, $comparison);
    }

    /**
     * Filter the query on the view_count column
     *
     * Example usage:
     * <code>
     * $query->filterByViewCount(1234); // WHERE view_count = 1234
     * $query->filterByViewCount(array(12, 34)); // WHERE view_count IN (12, 34)
     * $query->filterByViewCount(array('min' => 12)); // WHERE view_count > 12
     * </code>
     *
     * @param     mixed $viewCount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatterQuery The current query, for fluid interface
     */
    public function filterByViewCount($viewCount = null, $comparison = null)
    {
        if (is_array($viewCount)) {
            $useMinMax = false;
            if (isset($viewCount['min'])) {
                $this->addUsingAlias(MatterPeer::VIEW_COUNT, $viewCount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($viewCount['max'])) {
                $this->addUsingAlias(MatterPeer::VIEW_COUNT, $viewCount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatterPeer::VIEW_COUNT, $viewCount, $comparison);
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
     * @return MatterQuery The current query, for fluid interface
     */
    public function filterByOrder($order = null, $comparison = null)
    {
        if (is_array($order)) {
            $useMinMax = false;
            if (isset($order['min'])) {
                $this->addUsingAlias(MatterPeer::ORDER, $order['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($order['max'])) {
                $this->addUsingAlias(MatterPeer::ORDER, $order['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatterPeer::ORDER, $order, $comparison);
    }

    /**
     * Filter the query on the need column
     *
     * Example usage:
     * <code>
     * $query->filterByNeed(1234); // WHERE need = 1234
     * $query->filterByNeed(array(12, 34)); // WHERE need IN (12, 34)
     * $query->filterByNeed(array('min' => 12)); // WHERE need > 12
     * </code>
     *
     * @param     mixed $need The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatterQuery The current query, for fluid interface
     */
    public function filterByNeed($need = null, $comparison = null)
    {
        if (is_array($need)) {
            $useMinMax = false;
            if (isset($need['min'])) {
                $this->addUsingAlias(MatterPeer::NEED, $need['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($need['max'])) {
                $this->addUsingAlias(MatterPeer::NEED, $need['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatterPeer::NEED, $need, $comparison);
    }

    /**
     * Filter the query on the spicial column
     *
     * Example usage:
     * <code>
     * $query->filterBySpicial(1234); // WHERE spicial = 1234
     * $query->filterBySpicial(array(12, 34)); // WHERE spicial IN (12, 34)
     * $query->filterBySpicial(array('min' => 12)); // WHERE spicial > 12
     * </code>
     *
     * @param     mixed $spicial The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatterQuery The current query, for fluid interface
     */
    public function filterBySpicial($spicial = null, $comparison = null)
    {
        if (is_array($spicial)) {
            $useMinMax = false;
            if (isset($spicial['min'])) {
                $this->addUsingAlias(MatterPeer::SPICIAL, $spicial['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spicial['max'])) {
                $this->addUsingAlias(MatterPeer::SPICIAL, $spicial['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatterPeer::SPICIAL, $spicial, $comparison);
    }

    /**
     * Filter the query on the download_count column
     *
     * Example usage:
     * <code>
     * $query->filterByDownloadCount(1234); // WHERE download_count = 1234
     * $query->filterByDownloadCount(array(12, 34)); // WHERE download_count IN (12, 34)
     * $query->filterByDownloadCount(array('min' => 12)); // WHERE download_count > 12
     * </code>
     *
     * @param     mixed $downloadCount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatterQuery The current query, for fluid interface
     */
    public function filterByDownloadCount($downloadCount = null, $comparison = null)
    {
        if (is_array($downloadCount)) {
            $useMinMax = false;
            if (isset($downloadCount['min'])) {
                $this->addUsingAlias(MatterPeer::DOWNLOAD_COUNT, $downloadCount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($downloadCount['max'])) {
                $this->addUsingAlias(MatterPeer::DOWNLOAD_COUNT, $downloadCount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatterPeer::DOWNLOAD_COUNT, $downloadCount, $comparison);
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
     * @return MatterQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MatterPeer::DATE, $date, $comparison);
    }

    /**
     * Filter the query on the publisher column
     *
     * Example usage:
     * <code>
     * $query->filterByPublisher(1234); // WHERE publisher = 1234
     * $query->filterByPublisher(array(12, 34)); // WHERE publisher IN (12, 34)
     * $query->filterByPublisher(array('min' => 12)); // WHERE publisher > 12
     * </code>
     *
     * @param     mixed $publisher The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatterQuery The current query, for fluid interface
     */
    public function filterByPublisher($publisher = null, $comparison = null)
    {
        if (is_array($publisher)) {
            $useMinMax = false;
            if (isset($publisher['min'])) {
                $this->addUsingAlias(MatterPeer::PUBLISHER, $publisher['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($publisher['max'])) {
                $this->addUsingAlias(MatterPeer::PUBLISHER, $publisher['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatterPeer::PUBLISHER, $publisher, $comparison);
    }

    /**
     * Filter the query on the user_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUserId(1234); // WHERE user_id = 1234
     * $query->filterByUserId(array(12, 34)); // WHERE user_id IN (12, 34)
     * $query->filterByUserId(array('min' => 12)); // WHERE user_id > 12
     * </code>
     *
     * @see       filterByUser()
     *
     * @param     mixed $userId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatterQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(MatterPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(MatterPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatterPeer::USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query on the third_category_id column
     *
     * Example usage:
     * <code>
     * $query->filterByThirdCategoryId(1234); // WHERE third_category_id = 1234
     * $query->filterByThirdCategoryId(array(12, 34)); // WHERE third_category_id IN (12, 34)
     * $query->filterByThirdCategoryId(array('min' => 12)); // WHERE third_category_id > 12
     * </code>
     *
     * @see       filterByThirdCategory()
     *
     * @param     mixed $thirdCategoryId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatterQuery The current query, for fluid interface
     */
    public function filterByThirdCategoryId($thirdCategoryId = null, $comparison = null)
    {
        if (is_array($thirdCategoryId)) {
            $useMinMax = false;
            if (isset($thirdCategoryId['min'])) {
                $this->addUsingAlias(MatterPeer::THIRD_CATEGORY_ID, $thirdCategoryId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thirdCategoryId['max'])) {
                $this->addUsingAlias(MatterPeer::THIRD_CATEGORY_ID, $thirdCategoryId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatterPeer::THIRD_CATEGORY_ID, $thirdCategoryId, $comparison);
    }

    /**
     * Filter the query by a related User object
     *
     * @param   User|PropelObjectCollection $user The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   MatterQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByUser($user, $comparison = null)
    {
        if ($user instanceof User) {
            return $this
                ->addUsingAlias(MatterPeer::USER_ID, $user->getId(), $comparison);
        } elseif ($user instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(MatterPeer::USER_ID, $user->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByUser() only accepts arguments of type User or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the User relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MatterQuery The current query, for fluid interface
     */
    public function joinUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('User');

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
            $this->addJoinObject($join, 'User');
        }

        return $this;
    }

    /**
     * Use the User relation User object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UserQuery A secondary query class using the current class as primary query
     */
    public function useUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUser($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'User', 'UserQuery');
    }

    /**
     * Filter the query by a related ThirdCategory object
     *
     * @param   ThirdCategory|PropelObjectCollection $thirdCategory The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   MatterQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByThirdCategory($thirdCategory, $comparison = null)
    {
        if ($thirdCategory instanceof ThirdCategory) {
            return $this
                ->addUsingAlias(MatterPeer::THIRD_CATEGORY_ID, $thirdCategory->getId(), $comparison);
        } elseif ($thirdCategory instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(MatterPeer::THIRD_CATEGORY_ID, $thirdCategory->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByThirdCategory() only accepts arguments of type ThirdCategory or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ThirdCategory relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MatterQuery The current query, for fluid interface
     */
    public function joinThirdCategory($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ThirdCategory');

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
            $this->addJoinObject($join, 'ThirdCategory');
        }

        return $this;
    }

    /**
     * Use the ThirdCategory relation ThirdCategory object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ThirdCategoryQuery A secondary query class using the current class as primary query
     */
    public function useThirdCategoryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinThirdCategory($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ThirdCategory', 'ThirdCategoryQuery');
    }

    /**
     * Filter the query by a related Comment object
     *
     * @param   Comment|PropelObjectCollection $comment  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   MatterQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByComment($comment, $comparison = null)
    {
        if ($comment instanceof Comment) {
            return $this
                ->addUsingAlias(MatterPeer::ID, $comment->getMatterId(), $comparison);
        } elseif ($comment instanceof PropelObjectCollection) {
            return $this
                ->useCommentQuery()
                ->filterByPrimaryKeys($comment->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByComment() only accepts arguments of type Comment or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Comment relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MatterQuery The current query, for fluid interface
     */
    public function joinComment($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Comment');

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
            $this->addJoinObject($join, 'Comment');
        }

        return $this;
    }

    /**
     * Use the Comment relation Comment object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommentQuery A secondary query class using the current class as primary query
     */
    public function useCommentQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinComment($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Comment', 'CommentQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Matter $matter Object to remove from the list of results
     *
     * @return MatterQuery The current query, for fluid interface
     */
    public function prune($matter = null)
    {
        if ($matter) {
            $this->addUsingAlias(MatterPeer::ID, $matter->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
