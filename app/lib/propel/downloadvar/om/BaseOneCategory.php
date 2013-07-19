<?php


/**
 * Base class that represents a row from the 'one_category' table.
 *
 *
 *
 * @package    propel.generator.downloadvar.om
 */
abstract class BaseOneCategory extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'OneCategoryPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        OneCategoryPeer
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
     * @var        PropelObjectCollection|SecondCategory[] Collection to store aggregation of SecondCategory objects.
     */
    protected $collSecondCategorys;
    protected $collSecondCategorysPartial;

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
    protected $secondCategorysScheduledForDeletion = null;

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
     * Set the value of [id] column.
     *
     * @param int $v new value
     * @return OneCategory The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = OneCategoryPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [persian_name] column.
     *
     * @param string $v new value
     * @return OneCategory The current object (for fluent API support)
     */
    public function setPersianName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->persian_name !== $v) {
            $this->persian_name = $v;
            $this->modifiedColumns[] = OneCategoryPeer::PERSIAN_NAME;
        }


        return $this;
    } // setPersianName()

    /**
     * Set the value of [english_name] column.
     *
     * @param string $v new value
     * @return OneCategory The current object (for fluent API support)
     */
    public function setEnglishName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->english_name !== $v) {
            $this->english_name = $v;
            $this->modifiedColumns[] = OneCategoryPeer::ENGLISH_NAME;
        }


        return $this;
    } // setEnglishName()

    /**
     * Set the value of [description] column.
     *
     * @param string $v new value
     * @return OneCategory The current object (for fluent API support)
     */
    public function setDescription($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->description !== $v) {
            $this->description = $v;
            $this->modifiedColumns[] = OneCategoryPeer::DESCRIPTION;
        }


        return $this;
    } // setDescription()

    /**
     * Set the value of [tag] column.
     *
     * @param string $v new value
     * @return OneCategory The current object (for fluent API support)
     */
    public function setTag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->tag !== $v) {
            $this->tag = $v;
            $this->modifiedColumns[] = OneCategoryPeer::TAG;
        }


        return $this;
    } // setTag()

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
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);
            return $startcol + 5; // 5 = OneCategoryPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating OneCategory object", $e);
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
            $con = Propel::getConnection(OneCategoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = OneCategoryPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collSecondCategorys = null;

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
            $con = Propel::getConnection(OneCategoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = OneCategoryQuery::create()
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
            $con = Propel::getConnection(OneCategoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                OneCategoryPeer::addInstanceToPool($this);
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

            if ($this->secondCategorysScheduledForDeletion !== null) {
                if (!$this->secondCategorysScheduledForDeletion->isEmpty()) {
                    SecondCategoryQuery::create()
                        ->filterByPrimaryKeys($this->secondCategorysScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->secondCategorysScheduledForDeletion = null;
                }
            }

            if ($this->collSecondCategorys !== null) {
                foreach ($this->collSecondCategorys as $referrerFK) {
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

        $this->modifiedColumns[] = OneCategoryPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . OneCategoryPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(OneCategoryPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(OneCategoryPeer::PERSIAN_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`persian_name`';
        }
        if ($this->isColumnModified(OneCategoryPeer::ENGLISH_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`english_name`';
        }
        if ($this->isColumnModified(OneCategoryPeer::DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`description`';
        }
        if ($this->isColumnModified(OneCategoryPeer::TAG)) {
            $modifiedColumns[':p' . $index++]  = '`tag`';
        }

        $sql = sprintf(
            'INSERT INTO `one_category` (%s) VALUES (%s)',
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


            if (($retval = OneCategoryPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collSecondCategorys !== null) {
                    foreach ($this->collSecondCategorys as $referrerFK) {
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
        $pos = OneCategoryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        if (isset($alreadyDumpedObjects['OneCategory'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['OneCategory'][$this->getPrimaryKey()] = true;
        $keys = OneCategoryPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getPersianName(),
            $keys[2] => $this->getEnglishName(),
            $keys[3] => $this->getDescription(),
            $keys[4] => $this->getTag(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->collSecondCategorys) {
                $result['SecondCategorys'] = $this->collSecondCategorys->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = OneCategoryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
        $keys = OneCategoryPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setPersianName($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setEnglishName($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDescription($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setTag($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(OneCategoryPeer::DATABASE_NAME);

        if ($this->isColumnModified(OneCategoryPeer::ID)) $criteria->add(OneCategoryPeer::ID, $this->id);
        if ($this->isColumnModified(OneCategoryPeer::PERSIAN_NAME)) $criteria->add(OneCategoryPeer::PERSIAN_NAME, $this->persian_name);
        if ($this->isColumnModified(OneCategoryPeer::ENGLISH_NAME)) $criteria->add(OneCategoryPeer::ENGLISH_NAME, $this->english_name);
        if ($this->isColumnModified(OneCategoryPeer::DESCRIPTION)) $criteria->add(OneCategoryPeer::DESCRIPTION, $this->description);
        if ($this->isColumnModified(OneCategoryPeer::TAG)) $criteria->add(OneCategoryPeer::TAG, $this->tag);

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
        $criteria = new Criteria(OneCategoryPeer::DATABASE_NAME);
        $criteria->add(OneCategoryPeer::ID, $this->id);

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
     * @param object $copyObj An object of OneCategory (or compatible) type.
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

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getSecondCategorys() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSecondCategory($relObj->copy($deepCopy));
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
     * @return OneCategory Clone of current object.
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
     * @return OneCategoryPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new OneCategoryPeer();
        }

        return self::$peer;
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
        if ('SecondCategory' == $relationName) {
            $this->initSecondCategorys();
        }
    }

    /**
     * Clears out the collSecondCategorys collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return OneCategory The current object (for fluent API support)
     * @see        addSecondCategorys()
     */
    public function clearSecondCategorys()
    {
        $this->collSecondCategorys = null; // important to set this to null since that means it is uninitialized
        $this->collSecondCategorysPartial = null;

        return $this;
    }

    /**
     * reset is the collSecondCategorys collection loaded partially
     *
     * @return void
     */
    public function resetPartialSecondCategorys($v = true)
    {
        $this->collSecondCategorysPartial = $v;
    }

    /**
     * Initializes the collSecondCategorys collection.
     *
     * By default this just sets the collSecondCategorys collection to an empty array (like clearcollSecondCategorys());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSecondCategorys($overrideExisting = true)
    {
        if (null !== $this->collSecondCategorys && !$overrideExisting) {
            return;
        }
        $this->collSecondCategorys = new PropelObjectCollection();
        $this->collSecondCategorys->setModel('SecondCategory');
    }

    /**
     * Gets an array of SecondCategory objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this OneCategory is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|SecondCategory[] List of SecondCategory objects
     * @throws PropelException
     */
    public function getSecondCategorys($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collSecondCategorysPartial && !$this->isNew();
        if (null === $this->collSecondCategorys || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSecondCategorys) {
                // return empty collection
                $this->initSecondCategorys();
            } else {
                $collSecondCategorys = SecondCategoryQuery::create(null, $criteria)
                    ->filterByOneCategory($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collSecondCategorysPartial && count($collSecondCategorys)) {
                      $this->initSecondCategorys(false);

                      foreach($collSecondCategorys as $obj) {
                        if (false == $this->collSecondCategorys->contains($obj)) {
                          $this->collSecondCategorys->append($obj);
                        }
                      }

                      $this->collSecondCategorysPartial = true;
                    }

                    return $collSecondCategorys;
                }

                if($partial && $this->collSecondCategorys) {
                    foreach($this->collSecondCategorys as $obj) {
                        if($obj->isNew()) {
                            $collSecondCategorys[] = $obj;
                        }
                    }
                }

                $this->collSecondCategorys = $collSecondCategorys;
                $this->collSecondCategorysPartial = false;
            }
        }

        return $this->collSecondCategorys;
    }

    /**
     * Sets a collection of SecondCategory objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $secondCategorys A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return OneCategory The current object (for fluent API support)
     */
    public function setSecondCategorys(PropelCollection $secondCategorys, PropelPDO $con = null)
    {
        $secondCategorysToDelete = $this->getSecondCategorys(new Criteria(), $con)->diff($secondCategorys);

        $this->secondCategorysScheduledForDeletion = unserialize(serialize($secondCategorysToDelete));

        foreach ($secondCategorysToDelete as $secondCategoryRemoved) {
            $secondCategoryRemoved->setOneCategory(null);
        }

        $this->collSecondCategorys = null;
        foreach ($secondCategorys as $secondCategory) {
            $this->addSecondCategory($secondCategory);
        }

        $this->collSecondCategorys = $secondCategorys;
        $this->collSecondCategorysPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SecondCategory objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related SecondCategory objects.
     * @throws PropelException
     */
    public function countSecondCategorys(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collSecondCategorysPartial && !$this->isNew();
        if (null === $this->collSecondCategorys || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSecondCategorys) {
                return 0;
            }

            if($partial && !$criteria) {
                return count($this->getSecondCategorys());
            }
            $query = SecondCategoryQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOneCategory($this)
                ->count($con);
        }

        return count($this->collSecondCategorys);
    }

    /**
     * Method called to associate a SecondCategory object to this object
     * through the SecondCategory foreign key attribute.
     *
     * @param    SecondCategory $l SecondCategory
     * @return OneCategory The current object (for fluent API support)
     */
    public function addSecondCategory(SecondCategory $l)
    {
        if ($this->collSecondCategorys === null) {
            $this->initSecondCategorys();
            $this->collSecondCategorysPartial = true;
        }
        if (!in_array($l, $this->collSecondCategorys->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddSecondCategory($l);
        }

        return $this;
    }

    /**
     * @param	SecondCategory $secondCategory The secondCategory object to add.
     */
    protected function doAddSecondCategory($secondCategory)
    {
        $this->collSecondCategorys[]= $secondCategory;
        $secondCategory->setOneCategory($this);
    }

    /**
     * @param	SecondCategory $secondCategory The secondCategory object to remove.
     * @return OneCategory The current object (for fluent API support)
     */
    public function removeSecondCategory($secondCategory)
    {
        if ($this->getSecondCategorys()->contains($secondCategory)) {
            $this->collSecondCategorys->remove($this->collSecondCategorys->search($secondCategory));
            if (null === $this->secondCategorysScheduledForDeletion) {
                $this->secondCategorysScheduledForDeletion = clone $this->collSecondCategorys;
                $this->secondCategorysScheduledForDeletion->clear();
            }
            $this->secondCategorysScheduledForDeletion[]= clone $secondCategory;
            $secondCategory->setOneCategory(null);
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
            if ($this->collSecondCategorys) {
                foreach ($this->collSecondCategorys as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        if ($this->collSecondCategorys instanceof PropelCollection) {
            $this->collSecondCategorys->clearIterator();
        }
        $this->collSecondCategorys = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(OneCategoryPeer::DEFAULT_STRING_FORMAT);
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
