<?php


/**
 * Base class that represents a row from the 'second_category' table.
 *
 *
 *
 * @package    propel.generator.downloadvar.om
 */
abstract class BaseSecondCategory extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'SecondCategoryPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SecondCategoryPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the persian_name field.
     * @var        string
     */
    protected $persian_name;

    /**
     * The value for the english_name field.
     * @var        string
     */
    protected $english_name;

    /**
     * The value for the description field.
     * @var        string
     */
    protected $description;

    /**
     * The value for the tag field.
     * @var        string
     */
    protected $tag;

    /**
     * The value for the one_category_id field.
     * @var        int
     */
    protected $one_category_id;

    /**
     * @var        OneCategory
     */
    protected $aOneCategory;

    /**
     * @var        PropelObjectCollection|ThirdCategory[] Collection to store aggregation of ThirdCategory objects.
     */
    protected $collThirdCategorys;
    protected $collThirdCategorysPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $thirdCategorysScheduledForDeletion = null;

    /**
     * Get the [id] column value.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the [persian_name] column value.
     *
     * @return string
     */
    public function getPersianName()
    {
        return $this->persian_name;
    }

    /**
     * Get the [english_name] column value.
     *
     * @return string
     */
    public function getEnglishName()
    {
        return $this->english_name;
    }

    /**
     * Get the [description] column value.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get the [tag] column value.
     *
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Get the [one_category_id] column value.
     *
     * @return int
     */
    public function getOneCategoryId()
    {
        return $this->one_category_id;
    }

    /**
     * Set the value of [id] column.
     *
     * @param int $v new value
     * @return SecondCategory The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = SecondCategoryPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [persian_name] column.
     *
     * @param string $v new value
     * @return SecondCategory The current object (for fluent API support)
     */
    public function setPersianName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->persian_name !== $v) {
            $this->persian_name = $v;
            $this->modifiedColumns[] = SecondCategoryPeer::PERSIAN_NAME;
        }


        return $this;
    } // setPersianName()

    /**
     * Set the value of [english_name] column.
     *
     * @param string $v new value
     * @return SecondCategory The current object (for fluent API support)
     */
    public function setEnglishName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->english_name !== $v) {
            $this->english_name = $v;
            $this->modifiedColumns[] = SecondCategoryPeer::ENGLISH_NAME;
        }


        return $this;
    } // setEnglishName()

    /**
     * Set the value of [description] column.
     *
     * @param string $v new value
     * @return SecondCategory The current object (for fluent API support)
     */
    public function setDescription($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->description !== $v) {
            $this->description = $v;
            $this->modifiedColumns[] = SecondCategoryPeer::DESCRIPTION;
        }


        return $this;
    } // setDescription()

    /**
     * Set the value of [tag] column.
     *
     * @param string $v new value
     * @return SecondCategory The current object (for fluent API support)
     */
    public function setTag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->tag !== $v) {
            $this->tag = $v;
            $this->modifiedColumns[] = SecondCategoryPeer::TAG;
        }


        return $this;
    } // setTag()

    /**
     * Set the value of [one_category_id] column.
     *
     * @param int $v new value
     * @return SecondCategory The current object (for fluent API support)
     */
    public function setOneCategoryId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->one_category_id !== $v) {
            $this->one_category_id = $v;
            $this->modifiedColumns[] = SecondCategoryPeer::ONE_CATEGORY_ID;
        }

        if ($this->aOneCategory !== null && $this->aOneCategory->getId() !== $v) {
            $this->aOneCategory = null;
        }


        return $this;
    } // setOneCategoryId()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->persian_name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->english_name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->description = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->tag = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->one_category_id = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);
            return $startcol + 6; // 6 = SecondCategoryPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating SecondCategory object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

        if ($this->aOneCategory !== null && $this->one_category_id !== $this->aOneCategory->getId()) {
            $this->aOneCategory = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(SecondCategoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = SecondCategoryPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aOneCategory = null;
            $this->collThirdCategorys = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(SecondCategoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SecondCategoryQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(SecondCategoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                SecondCategoryPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aOneCategory !== null) {
                if ($this->aOneCategory->isModified() || $this->aOneCategory->isNew()) {
                    $affectedRows += $this->aOneCategory->save($con);
                }
                $this->setOneCategory($this->aOneCategory);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            if ($this->thirdCategorysScheduledForDeletion !== null) {
                if (!$this->thirdCategorysScheduledForDeletion->isEmpty()) {
                    ThirdCategoryQuery::create()
                        ->filterByPrimaryKeys($this->thirdCategorysScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->thirdCategorysScheduledForDeletion = null;
                }
            }

            if ($this->collThirdCategorys !== null) {
                foreach ($this->collThirdCategorys as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = SecondCategoryPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SecondCategoryPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SecondCategoryPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(SecondCategoryPeer::PERSIAN_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`persian_name`';
        }
        if ($this->isColumnModified(SecondCategoryPeer::ENGLISH_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`english_name`';
        }
        if ($this->isColumnModified(SecondCategoryPeer::DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`description`';
        }
        if ($this->isColumnModified(SecondCategoryPeer::TAG)) {
            $modifiedColumns[':p' . $index++]  = '`tag`';
        }
        if ($this->isColumnModified(SecondCategoryPeer::ONE_CATEGORY_ID)) {
            $modifiedColumns[':p' . $index++]  = '`one_category_id`';
        }

        $sql = sprintf(
            'INSERT INTO `second_category` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id`':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`persian_name`':
                        $stmt->bindValue($identifier, $this->persian_name, PDO::PARAM_STR);
                        break;
                    case '`english_name`':
                        $stmt->bindValue($identifier, $this->english_name, PDO::PARAM_STR);
                        break;
                    case '`description`':
                        $stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
                        break;
                    case '`tag`':
                        $stmt->bindValue($identifier, $this->tag, PDO::PARAM_STR);
                        break;
                    case '`one_category_id`':
                        $stmt->bindValue($identifier, $this->one_category_id, PDO::PARAM_INT);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggreagated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            // We call the validate method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aOneCategory !== null) {
                if (!$this->aOneCategory->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aOneCategory->getValidationFailures());
                }
            }


            if (($retval = SecondCategoryPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collThirdCategorys !== null) {
                    foreach ($this->collThirdCategorys as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }


            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = SecondCategoryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getId();
                break;
            case 1:
                return $this->getPersianName();
                break;
            case 2:
                return $this->getEnglishName();
                break;
            case 3:
                return $this->getDescription();
                break;
            case 4:
                return $this->getTag();
                break;
            case 5:
                return $this->getOneCategoryId();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['SecondCategory'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SecondCategory'][$this->getPrimaryKey()] = true;
        $keys = SecondCategoryPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getPersianName(),
            $keys[2] => $this->getEnglishName(),
            $keys[3] => $this->getDescription(),
            $keys[4] => $this->getTag(),
            $keys[5] => $this->getOneCategoryId(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aOneCategory) {
                $result['OneCategory'] = $this->aOneCategory->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collThirdCategorys) {
                $result['ThirdCategorys'] = $this->collThirdCategorys->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = SecondCategoryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setPersianName($value);
                break;
            case 2:
                $this->setEnglishName($value);
                break;
            case 3:
                $this->setDescription($value);
                break;
            case 4:
                $this->setTag($value);
                break;
            case 5:
                $this->setOneCategoryId($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = SecondCategoryPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setPersianName($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setEnglishName($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDescription($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setTag($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setOneCategoryId($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SecondCategoryPeer::DATABASE_NAME);

        if ($this->isColumnModified(SecondCategoryPeer::ID)) $criteria->add(SecondCategoryPeer::ID, $this->id);
        if ($this->isColumnModified(SecondCategoryPeer::PERSIAN_NAME)) $criteria->add(SecondCategoryPeer::PERSIAN_NAME, $this->persian_name);
        if ($this->isColumnModified(SecondCategoryPeer::ENGLISH_NAME)) $criteria->add(SecondCategoryPeer::ENGLISH_NAME, $this->english_name);
        if ($this->isColumnModified(SecondCategoryPeer::DESCRIPTION)) $criteria->add(SecondCategoryPeer::DESCRIPTION, $this->description);
        if ($this->isColumnModified(SecondCategoryPeer::TAG)) $criteria->add(SecondCategoryPeer::TAG, $this->tag);
        if ($this->isColumnModified(SecondCategoryPeer::ONE_CATEGORY_ID)) $criteria->add(SecondCategoryPeer::ONE_CATEGORY_ID, $this->one_category_id);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(SecondCategoryPeer::DATABASE_NAME);
        $criteria->add(SecondCategoryPeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of SecondCategory (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setPersianName($this->getPersianName());
        $copyObj->setEnglishName($this->getEnglishName());
        $copyObj->setDescription($this->getDescription());
        $copyObj->setTag($this->getTag());
        $copyObj->setOneCategoryId($this->getOneCategoryId());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getThirdCategorys() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addThirdCategory($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return SecondCategory Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return SecondCategoryPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new SecondCategoryPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a OneCategory object.
     *
     * @param             OneCategory $v
     * @return SecondCategory The current object (for fluent API support)
     * @throws PropelException
     */
    public function setOneCategory(OneCategory $v = null)
    {
        if ($v === null) {
            $this->setOneCategoryId(NULL);
        } else {
            $this->setOneCategoryId($v->getId());
        }

        $this->aOneCategory = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the OneCategory object, it will not be re-added.
        if ($v !== null) {
            $v->addSecondCategory($this);
        }


        return $this;
    }


    /**
     * Get the associated OneCategory object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return OneCategory The associated OneCategory object.
     * @throws PropelException
     */
    public function getOneCategory(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aOneCategory === null && ($this->one_category_id !== null) && $doQuery) {
            $this->aOneCategory = OneCategoryQuery::create()->findPk($this->one_category_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aOneCategory->addSecondCategorys($this);
             */
        }

        return $this->aOneCategory;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('ThirdCategory' == $relationName) {
            $this->initThirdCategorys();
        }
    }

    /**
     * Clears out the collThirdCategorys collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return SecondCategory The current object (for fluent API support)
     * @see        addThirdCategorys()
     */
    public function clearThirdCategorys()
    {
        $this->collThirdCategorys = null; // important to set this to null since that means it is uninitialized
        $this->collThirdCategorysPartial = null;

        return $this;
    }

    /**
     * reset is the collThirdCategorys collection loaded partially
     *
     * @return void
     */
    public function resetPartialThirdCategorys($v = true)
    {
        $this->collThirdCategorysPartial = $v;
    }

    /**
     * Initializes the collThirdCategorys collection.
     *
     * By default this just sets the collThirdCategorys collection to an empty array (like clearcollThirdCategorys());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initThirdCategorys($overrideExisting = true)
    {
        if (null !== $this->collThirdCategorys && !$overrideExisting) {
            return;
        }
        $this->collThirdCategorys = new PropelObjectCollection();
        $this->collThirdCategorys->setModel('ThirdCategory');
    }

    /**
     * Gets an array of ThirdCategory objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this SecondCategory is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ThirdCategory[] List of ThirdCategory objects
     * @throws PropelException
     */
    public function getThirdCategorys($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collThirdCategorysPartial && !$this->isNew();
        if (null === $this->collThirdCategorys || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collThirdCategorys) {
                // return empty collection
                $this->initThirdCategorys();
            } else {
                $collThirdCategorys = ThirdCategoryQuery::create(null, $criteria)
                    ->filterBySecondCategory($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collThirdCategorysPartial && count($collThirdCategorys)) {
                      $this->initThirdCategorys(false);

                      foreach($collThirdCategorys as $obj) {
                        if (false == $this->collThirdCategorys->contains($obj)) {
                          $this->collThirdCategorys->append($obj);
                        }
                      }

                      $this->collThirdCategorysPartial = true;
                    }

                    return $collThirdCategorys;
                }

                if($partial && $this->collThirdCategorys) {
                    foreach($this->collThirdCategorys as $obj) {
                        if($obj->isNew()) {
                            $collThirdCategorys[] = $obj;
                        }
                    }
                }

                $this->collThirdCategorys = $collThirdCategorys;
                $this->collThirdCategorysPartial = false;
            }
        }

        return $this->collThirdCategorys;
    }

    /**
     * Sets a collection of ThirdCategory objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $thirdCategorys A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return SecondCategory The current object (for fluent API support)
     */
    public function setThirdCategorys(PropelCollection $thirdCategorys, PropelPDO $con = null)
    {
        $thirdCategorysToDelete = $this->getThirdCategorys(new Criteria(), $con)->diff($thirdCategorys);

        $this->thirdCategorysScheduledForDeletion = unserialize(serialize($thirdCategorysToDelete));

        foreach ($thirdCategorysToDelete as $thirdCategoryRemoved) {
            $thirdCategoryRemoved->setSecondCategory(null);
        }

        $this->collThirdCategorys = null;
        foreach ($thirdCategorys as $thirdCategory) {
            $this->addThirdCategory($thirdCategory);
        }

        $this->collThirdCategorys = $thirdCategorys;
        $this->collThirdCategorysPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ThirdCategory objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ThirdCategory objects.
     * @throws PropelException
     */
    public function countThirdCategorys(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collThirdCategorysPartial && !$this->isNew();
        if (null === $this->collThirdCategorys || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collThirdCategorys) {
                return 0;
            }

            if($partial && !$criteria) {
                return count($this->getThirdCategorys());
            }
            $query = ThirdCategoryQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySecondCategory($this)
                ->count($con);
        }

        return count($this->collThirdCategorys);
    }

    /**
     * Method called to associate a ThirdCategory object to this object
     * through the ThirdCategory foreign key attribute.
     *
     * @param    ThirdCategory $l ThirdCategory
     * @return SecondCategory The current object (for fluent API support)
     */
    public function addThirdCategory(ThirdCategory $l)
    {
        if ($this->collThirdCategorys === null) {
            $this->initThirdCategorys();
            $this->collThirdCategorysPartial = true;
        }
        if (!in_array($l, $this->collThirdCategorys->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddThirdCategory($l);
        }

        return $this;
    }

    /**
     * @param	ThirdCategory $thirdCategory The thirdCategory object to add.
     */
    protected function doAddThirdCategory($thirdCategory)
    {
        $this->collThirdCategorys[]= $thirdCategory;
        $thirdCategory->setSecondCategory($this);
    }

    /**
     * @param	ThirdCategory $thirdCategory The thirdCategory object to remove.
     * @return SecondCategory The current object (for fluent API support)
     */
    public function removeThirdCategory($thirdCategory)
    {
        if ($this->getThirdCategorys()->contains($thirdCategory)) {
            $this->collThirdCategorys->remove($this->collThirdCategorys->search($thirdCategory));
            if (null === $this->thirdCategorysScheduledForDeletion) {
                $this->thirdCategorysScheduledForDeletion = clone $this->collThirdCategorys;
                $this->thirdCategorysScheduledForDeletion->clear();
            }
            $this->thirdCategorysScheduledForDeletion[]= clone $thirdCategory;
            $thirdCategory->setSecondCategory(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->persian_name = null;
        $this->english_name = null;
        $this->description = null;
        $this->tag = null;
        $this->one_category_id = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volumne/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep) {
            if ($this->collThirdCategorys) {
                foreach ($this->collThirdCategorys as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        if ($this->collThirdCategorys instanceof PropelCollection) {
            $this->collThirdCategorys->clearIterator();
        }
        $this->collThirdCategorys = null;
        $this->aOneCategory = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SecondCategoryPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
