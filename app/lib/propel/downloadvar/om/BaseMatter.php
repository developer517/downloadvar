<?php


/**
 * Base class that represents a row from the 'matter' table.
 *
 *
 *
 * @package    propel.generator.downloadvar.om
 */
abstract class BaseMatter extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'MatterPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        MatterPeer
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
     * The value for the main_subject field.
     * @var        string
     */
    protected $main_subject;

    /**
     * The value for the short_subject field.
     * @var        string
     */
    protected $short_subject;

    /**
     * The value for the long_desc field.
     * @var        string
     */
    protected $long_desc;

    /**
     * The value for the short_desc field.
     * @var        string
     */
    protected $short_desc;

    /**
     * The value for the english_desc field.
     * @var        string
     */
    protected $english_desc;

    /**
     * The value for the help_desc field.
     * @var        string
     */
    protected $help_desc;

    /**
     * The value for the download_link field.
     * @var        string
     */
    protected $download_link;

    /**
     * The value for the tag_keywords field.
     * @var        string
     */
    protected $tag_keywords;

    /**
     * The value for the tag_desc field.
     * @var        string
     */
    protected $tag_desc;

    /**
     * The value for the view_count field.
     * @var        int
     */
    protected $view_count;

    /**
     * The value for the order field.
     * @var        int
     */
    protected $order;

    /**
     * The value for the need field.
     * @var        int
     */
    protected $need;

    /**
     * The value for the spicial field.
     * @var        int
     */
    protected $spicial;

    /**
     * The value for the download_count field.
     * @var        int
     */
    protected $download_count;

    /**
     * The value for the date field.
     * @var        string
     */
    protected $date;

    /**
     * The value for the publisher field.
     * @var        int
     */
    protected $publisher;

    /**
     * The value for the user_id field.
     * @var        int
     */
    protected $user_id;

    /**
     * The value for the third_category_id field.
     * @var        int
     */
    protected $third_category_id;

    /**
     * @var        User
     */
    protected $aUser;

    /**
     * @var        ThirdCategory
     */
    protected $aThirdCategory;

    /**
     * @var        PropelObjectCollection|Comment[] Collection to store aggregation of Comment objects.
     */
    protected $collComments;
    protected $collCommentsPartial;

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
    protected $commentsScheduledForDeletion = null;

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
     * Get the [main_subject] column value.
     *
     * @return string
     */
    public function getMainSubject()
    {
        return $this->main_subject;
    }

    /**
     * Get the [short_subject] column value.
     *
     * @return string
     */
    public function getShortSubject()
    {
        return $this->short_subject;
    }

    /**
     * Get the [long_desc] column value.
     *
     * @return string
     */
    public function getLongDesc()
    {
        return $this->long_desc;
    }

    /**
     * Get the [short_desc] column value.
     *
     * @return string
     */
    public function getShortDesc()
    {
        return $this->short_desc;
    }

    /**
     * Get the [english_desc] column value.
     *
     * @return string
     */
    public function getEnglishDesc()
    {
        return $this->english_desc;
    }

    /**
     * Get the [help_desc] column value.
     *
     * @return string
     */
    public function getHelpDesc()
    {
        return $this->help_desc;
    }

    /**
     * Get the [download_link] column value.
     *
     * @return string
     */
    public function getDownloadLink()
    {
        return $this->download_link;
    }

    /**
     * Get the [tag_keywords] column value.
     *
     * @return string
     */
    public function getTagKeywords()
    {
        return $this->tag_keywords;
    }

    /**
     * Get the [tag_desc] column value.
     *
     * @return string
     */
    public function getTagDesc()
    {
        return $this->tag_desc;
    }

    /**
     * Get the [view_count] column value.
     *
     * @return int
     */
    public function getViewCount()
    {
        return $this->view_count;
    }

    /**
     * Get the [order] column value.
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Get the [need] column value.
     *
     * @return int
     */
    public function getNeed()
    {
        return $this->need;
    }

    /**
     * Get the [spicial] column value.
     *
     * @return int
     */
    public function getSpicial()
    {
        return $this->spicial;
    }

    /**
     * Get the [download_count] column value.
     *
     * @return int
     */
    public function getDownloadCount()
    {
        return $this->download_count;
    }

    /**
     * Get the [date] column value.
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Get the [publisher] column value.
     *
     * @return int
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Get the [user_id] column value.
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Get the [third_category_id] column value.
     *
     * @return int
     */
    public function getThirdCategoryId()
    {
        return $this->third_category_id;
    }

    /**
     * Set the value of [id] column.
     *
     * @param int $v new value
     * @return Matter The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = MatterPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [main_subject] column.
     *
     * @param string $v new value
     * @return Matter The current object (for fluent API support)
     */
    public function setMainSubject($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->main_subject !== $v) {
            $this->main_subject = $v;
            $this->modifiedColumns[] = MatterPeer::MAIN_SUBJECT;
        }


        return $this;
    } // setMainSubject()

    /**
     * Set the value of [short_subject] column.
     *
     * @param string $v new value
     * @return Matter The current object (for fluent API support)
     */
    public function setShortSubject($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->short_subject !== $v) {
            $this->short_subject = $v;
            $this->modifiedColumns[] = MatterPeer::SHORT_SUBJECT;
        }


        return $this;
    } // setShortSubject()

    /**
     * Set the value of [long_desc] column.
     *
     * @param string $v new value
     * @return Matter The current object (for fluent API support)
     */
    public function setLongDesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->long_desc !== $v) {
            $this->long_desc = $v;
            $this->modifiedColumns[] = MatterPeer::LONG_DESC;
        }


        return $this;
    } // setLongDesc()

    /**
     * Set the value of [short_desc] column.
     *
     * @param string $v new value
     * @return Matter The current object (for fluent API support)
     */
    public function setShortDesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->short_desc !== $v) {
            $this->short_desc = $v;
            $this->modifiedColumns[] = MatterPeer::SHORT_DESC;
        }


        return $this;
    } // setShortDesc()

    /**
     * Set the value of [english_desc] column.
     *
     * @param string $v new value
     * @return Matter The current object (for fluent API support)
     */
    public function setEnglishDesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->english_desc !== $v) {
            $this->english_desc = $v;
            $this->modifiedColumns[] = MatterPeer::ENGLISH_DESC;
        }


        return $this;
    } // setEnglishDesc()

    /**
     * Set the value of [help_desc] column.
     *
     * @param string $v new value
     * @return Matter The current object (for fluent API support)
     */
    public function setHelpDesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->help_desc !== $v) {
            $this->help_desc = $v;
            $this->modifiedColumns[] = MatterPeer::HELP_DESC;
        }


        return $this;
    } // setHelpDesc()

    /**
     * Set the value of [download_link] column.
     *
     * @param string $v new value
     * @return Matter The current object (for fluent API support)
     */
    public function setDownloadLink($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->download_link !== $v) {
            $this->download_link = $v;
            $this->modifiedColumns[] = MatterPeer::DOWNLOAD_LINK;
        }


        return $this;
    } // setDownloadLink()

    /**
     * Set the value of [tag_keywords] column.
     *
     * @param string $v new value
     * @return Matter The current object (for fluent API support)
     */
    public function setTagKeywords($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->tag_keywords !== $v) {
            $this->tag_keywords = $v;
            $this->modifiedColumns[] = MatterPeer::TAG_KEYWORDS;
        }


        return $this;
    } // setTagKeywords()

    /**
     * Set the value of [tag_desc] column.
     *
     * @param string $v new value
     * @return Matter The current object (for fluent API support)
     */
    public function setTagDesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->tag_desc !== $v) {
            $this->tag_desc = $v;
            $this->modifiedColumns[] = MatterPeer::TAG_DESC;
        }


        return $this;
    } // setTagDesc()

    /**
     * Set the value of [view_count] column.
     *
     * @param int $v new value
     * @return Matter The current object (for fluent API support)
     */
    public function setViewCount($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->view_count !== $v) {
            $this->view_count = $v;
            $this->modifiedColumns[] = MatterPeer::VIEW_COUNT;
        }


        return $this;
    } // setViewCount()

    /**
     * Set the value of [order] column.
     *
     * @param int $v new value
     * @return Matter The current object (for fluent API support)
     */
    public function setOrder($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->order !== $v) {
            $this->order = $v;
            $this->modifiedColumns[] = MatterPeer::ORDER;
        }


        return $this;
    } // setOrder()

    /**
     * Set the value of [need] column.
     *
     * @param int $v new value
     * @return Matter The current object (for fluent API support)
     */
    public function setNeed($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->need !== $v) {
            $this->need = $v;
            $this->modifiedColumns[] = MatterPeer::NEED;
        }


        return $this;
    } // setNeed()

    /**
     * Set the value of [spicial] column.
     *
     * @param int $v new value
     * @return Matter The current object (for fluent API support)
     */
    public function setSpicial($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->spicial !== $v) {
            $this->spicial = $v;
            $this->modifiedColumns[] = MatterPeer::SPICIAL;
        }


        return $this;
    } // setSpicial()

    /**
     * Set the value of [download_count] column.
     *
     * @param int $v new value
     * @return Matter The current object (for fluent API support)
     */
    public function setDownloadCount($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->download_count !== $v) {
            $this->download_count = $v;
            $this->modifiedColumns[] = MatterPeer::DOWNLOAD_COUNT;
        }


        return $this;
    } // setDownloadCount()

    /**
     * Set the value of [date] column.
     *
     * @param string $v new value
     * @return Matter The current object (for fluent API support)
     */
    public function setDate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->date !== $v) {
            $this->date = $v;
            $this->modifiedColumns[] = MatterPeer::DATE;
        }


        return $this;
    } // setDate()

    /**
     * Set the value of [publisher] column.
     *
     * @param int $v new value
     * @return Matter The current object (for fluent API support)
     */
    public function setPublisher($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->publisher !== $v) {
            $this->publisher = $v;
            $this->modifiedColumns[] = MatterPeer::PUBLISHER;
        }


        return $this;
    } // setPublisher()

    /**
     * Set the value of [user_id] column.
     *
     * @param int $v new value
     * @return Matter The current object (for fluent API support)
     */
    public function setUserId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->user_id !== $v) {
            $this->user_id = $v;
            $this->modifiedColumns[] = MatterPeer::USER_ID;
        }

        if ($this->aUser !== null && $this->aUser->getId() !== $v) {
            $this->aUser = null;
        }


        return $this;
    } // setUserId()

    /**
     * Set the value of [third_category_id] column.
     *
     * @param int $v new value
     * @return Matter The current object (for fluent API support)
     */
    public function setThirdCategoryId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->third_category_id !== $v) {
            $this->third_category_id = $v;
            $this->modifiedColumns[] = MatterPeer::THIRD_CATEGORY_ID;
        }

        if ($this->aThirdCategory !== null && $this->aThirdCategory->getId() !== $v) {
            $this->aThirdCategory = null;
        }


        return $this;
    } // setThirdCategoryId()

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
            $this->main_subject = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->short_subject = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->long_desc = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->short_desc = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->english_desc = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->help_desc = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->download_link = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->tag_keywords = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->tag_desc = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->view_count = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->order = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->need = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->spicial = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->download_count = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->date = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->publisher = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->user_id = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->third_category_id = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);
            return $startcol + 19; // 19 = MatterPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Matter object", $e);
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

        if ($this->aUser !== null && $this->user_id !== $this->aUser->getId()) {
            $this->aUser = null;
        }
        if ($this->aThirdCategory !== null && $this->third_category_id !== $this->aThirdCategory->getId()) {
            $this->aThirdCategory = null;
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
            $con = Propel::getConnection(MatterPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = MatterPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aUser = null;
            $this->aThirdCategory = null;
            $this->collComments = null;

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
            $con = Propel::getConnection(MatterPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = MatterQuery::create()
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
            $con = Propel::getConnection(MatterPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                MatterPeer::addInstanceToPool($this);
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

            if ($this->aUser !== null) {
                if ($this->aUser->isModified() || $this->aUser->isNew()) {
                    $affectedRows += $this->aUser->save($con);
                }
                $this->setUser($this->aUser);
            }

            if ($this->aThirdCategory !== null) {
                if ($this->aThirdCategory->isModified() || $this->aThirdCategory->isNew()) {
                    $affectedRows += $this->aThirdCategory->save($con);
                }
                $this->setThirdCategory($this->aThirdCategory);
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

            if ($this->commentsScheduledForDeletion !== null) {
                if (!$this->commentsScheduledForDeletion->isEmpty()) {
                    CommentQuery::create()
                        ->filterByPrimaryKeys($this->commentsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->commentsScheduledForDeletion = null;
                }
            }

            if ($this->collComments !== null) {
                foreach ($this->collComments as $referrerFK) {
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

        $this->modifiedColumns[] = MatterPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . MatterPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(MatterPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(MatterPeer::MAIN_SUBJECT)) {
            $modifiedColumns[':p' . $index++]  = '`main_subject`';
        }
        if ($this->isColumnModified(MatterPeer::SHORT_SUBJECT)) {
            $modifiedColumns[':p' . $index++]  = '`short_subject`';
        }
        if ($this->isColumnModified(MatterPeer::LONG_DESC)) {
            $modifiedColumns[':p' . $index++]  = '`long_desc`';
        }
        if ($this->isColumnModified(MatterPeer::SHORT_DESC)) {
            $modifiedColumns[':p' . $index++]  = '`short_desc`';
        }
        if ($this->isColumnModified(MatterPeer::ENGLISH_DESC)) {
            $modifiedColumns[':p' . $index++]  = '`english_desc`';
        }
        if ($this->isColumnModified(MatterPeer::HELP_DESC)) {
            $modifiedColumns[':p' . $index++]  = '`help_desc`';
        }
        if ($this->isColumnModified(MatterPeer::DOWNLOAD_LINK)) {
            $modifiedColumns[':p' . $index++]  = '`download_link`';
        }
        if ($this->isColumnModified(MatterPeer::TAG_KEYWORDS)) {
            $modifiedColumns[':p' . $index++]  = '`tag_keywords`';
        }
        if ($this->isColumnModified(MatterPeer::TAG_DESC)) {
            $modifiedColumns[':p' . $index++]  = '`tag_desc`';
        }
        if ($this->isColumnModified(MatterPeer::VIEW_COUNT)) {
            $modifiedColumns[':p' . $index++]  = '`view_count`';
        }
        if ($this->isColumnModified(MatterPeer::ORDER)) {
            $modifiedColumns[':p' . $index++]  = '`order`';
        }
        if ($this->isColumnModified(MatterPeer::NEED)) {
            $modifiedColumns[':p' . $index++]  = '`need`';
        }
        if ($this->isColumnModified(MatterPeer::SPICIAL)) {
            $modifiedColumns[':p' . $index++]  = '`spicial`';
        }
        if ($this->isColumnModified(MatterPeer::DOWNLOAD_COUNT)) {
            $modifiedColumns[':p' . $index++]  = '`download_count`';
        }
        if ($this->isColumnModified(MatterPeer::DATE)) {
            $modifiedColumns[':p' . $index++]  = '`date`';
        }
        if ($this->isColumnModified(MatterPeer::PUBLISHER)) {
            $modifiedColumns[':p' . $index++]  = '`publisher`';
        }
        if ($this->isColumnModified(MatterPeer::USER_ID)) {
            $modifiedColumns[':p' . $index++]  = '`user_id`';
        }
        if ($this->isColumnModified(MatterPeer::THIRD_CATEGORY_ID)) {
            $modifiedColumns[':p' . $index++]  = '`third_category_id`';
        }

        $sql = sprintf(
            'INSERT INTO `matter` (%s) VALUES (%s)',
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
                    case '`main_subject`':
                        $stmt->bindValue($identifier, $this->main_subject, PDO::PARAM_STR);
                        break;
                    case '`short_subject`':
                        $stmt->bindValue($identifier, $this->short_subject, PDO::PARAM_STR);
                        break;
                    case '`long_desc`':
                        $stmt->bindValue($identifier, $this->long_desc, PDO::PARAM_STR);
                        break;
                    case '`short_desc`':
                        $stmt->bindValue($identifier, $this->short_desc, PDO::PARAM_STR);
                        break;
                    case '`english_desc`':
                        $stmt->bindValue($identifier, $this->english_desc, PDO::PARAM_STR);
                        break;
                    case '`help_desc`':
                        $stmt->bindValue($identifier, $this->help_desc, PDO::PARAM_STR);
                        break;
                    case '`download_link`':
                        $stmt->bindValue($identifier, $this->download_link, PDO::PARAM_STR);
                        break;
                    case '`tag_keywords`':
                        $stmt->bindValue($identifier, $this->tag_keywords, PDO::PARAM_STR);
                        break;
                    case '`tag_desc`':
                        $stmt->bindValue($identifier, $this->tag_desc, PDO::PARAM_STR);
                        break;
                    case '`view_count`':
                        $stmt->bindValue($identifier, $this->view_count, PDO::PARAM_INT);
                        break;
                    case '`order`':
                        $stmt->bindValue($identifier, $this->order, PDO::PARAM_INT);
                        break;
                    case '`need`':
                        $stmt->bindValue($identifier, $this->need, PDO::PARAM_INT);
                        break;
                    case '`spicial`':
                        $stmt->bindValue($identifier, $this->spicial, PDO::PARAM_INT);
                        break;
                    case '`download_count`':
                        $stmt->bindValue($identifier, $this->download_count, PDO::PARAM_INT);
                        break;
                    case '`date`':
                        $stmt->bindValue($identifier, $this->date, PDO::PARAM_STR);
                        break;
                    case '`publisher`':
                        $stmt->bindValue($identifier, $this->publisher, PDO::PARAM_INT);
                        break;
                    case '`user_id`':
                        $stmt->bindValue($identifier, $this->user_id, PDO::PARAM_INT);
                        break;
                    case '`third_category_id`':
                        $stmt->bindValue($identifier, $this->third_category_id, PDO::PARAM_INT);
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

            if ($this->aUser !== null) {
                if (!$this->aUser->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUser->getValidationFailures());
                }
            }

            if ($this->aThirdCategory !== null) {
                if (!$this->aThirdCategory->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aThirdCategory->getValidationFailures());
                }
            }


            if (($retval = MatterPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collComments !== null) {
                    foreach ($this->collComments as $referrerFK) {
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
        $pos = MatterPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getMainSubject();
                break;
            case 2:
                return $this->getShortSubject();
                break;
            case 3:
                return $this->getLongDesc();
                break;
            case 4:
                return $this->getShortDesc();
                break;
            case 5:
                return $this->getEnglishDesc();
                break;
            case 6:
                return $this->getHelpDesc();
                break;
            case 7:
                return $this->getDownloadLink();
                break;
            case 8:
                return $this->getTagKeywords();
                break;
            case 9:
                return $this->getTagDesc();
                break;
            case 10:
                return $this->getViewCount();
                break;
            case 11:
                return $this->getOrder();
                break;
            case 12:
                return $this->getNeed();
                break;
            case 13:
                return $this->getSpicial();
                break;
            case 14:
                return $this->getDownloadCount();
                break;
            case 15:
                return $this->getDate();
                break;
            case 16:
                return $this->getPublisher();
                break;
            case 17:
                return $this->getUserId();
                break;
            case 18:
                return $this->getThirdCategoryId();
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
        if (isset($alreadyDumpedObjects['Matter'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Matter'][$this->getPrimaryKey()] = true;
        $keys = MatterPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getMainSubject(),
            $keys[2] => $this->getShortSubject(),
            $keys[3] => $this->getLongDesc(),
            $keys[4] => $this->getShortDesc(),
            $keys[5] => $this->getEnglishDesc(),
            $keys[6] => $this->getHelpDesc(),
            $keys[7] => $this->getDownloadLink(),
            $keys[8] => $this->getTagKeywords(),
            $keys[9] => $this->getTagDesc(),
            $keys[10] => $this->getViewCount(),
            $keys[11] => $this->getOrder(),
            $keys[12] => $this->getNeed(),
            $keys[13] => $this->getSpicial(),
            $keys[14] => $this->getDownloadCount(),
            $keys[15] => $this->getDate(),
            $keys[16] => $this->getPublisher(),
            $keys[17] => $this->getUserId(),
            $keys[18] => $this->getThirdCategoryId(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aUser) {
                $result['User'] = $this->aUser->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aThirdCategory) {
                $result['ThirdCategory'] = $this->aThirdCategory->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collComments) {
                $result['Comments'] = $this->collComments->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = MatterPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setMainSubject($value);
                break;
            case 2:
                $this->setShortSubject($value);
                break;
            case 3:
                $this->setLongDesc($value);
                break;
            case 4:
                $this->setShortDesc($value);
                break;
            case 5:
                $this->setEnglishDesc($value);
                break;
            case 6:
                $this->setHelpDesc($value);
                break;
            case 7:
                $this->setDownloadLink($value);
                break;
            case 8:
                $this->setTagKeywords($value);
                break;
            case 9:
                $this->setTagDesc($value);
                break;
            case 10:
                $this->setViewCount($value);
                break;
            case 11:
                $this->setOrder($value);
                break;
            case 12:
                $this->setNeed($value);
                break;
            case 13:
                $this->setSpicial($value);
                break;
            case 14:
                $this->setDownloadCount($value);
                break;
            case 15:
                $this->setDate($value);
                break;
            case 16:
                $this->setPublisher($value);
                break;
            case 17:
                $this->setUserId($value);
                break;
            case 18:
                $this->setThirdCategoryId($value);
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
        $keys = MatterPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMainSubject($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setShortSubject($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setLongDesc($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setShortDesc($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setEnglishDesc($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setHelpDesc($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDownloadLink($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setTagKeywords($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTagDesc($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setViewCount($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setOrder($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setNeed($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setSpicial($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setDownloadCount($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setDate($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setPublisher($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setUserId($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setThirdCategoryId($arr[$keys[18]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(MatterPeer::DATABASE_NAME);

        if ($this->isColumnModified(MatterPeer::ID)) $criteria->add(MatterPeer::ID, $this->id);
        if ($this->isColumnModified(MatterPeer::MAIN_SUBJECT)) $criteria->add(MatterPeer::MAIN_SUBJECT, $this->main_subject);
        if ($this->isColumnModified(MatterPeer::SHORT_SUBJECT)) $criteria->add(MatterPeer::SHORT_SUBJECT, $this->short_subject);
        if ($this->isColumnModified(MatterPeer::LONG_DESC)) $criteria->add(MatterPeer::LONG_DESC, $this->long_desc);
        if ($this->isColumnModified(MatterPeer::SHORT_DESC)) $criteria->add(MatterPeer::SHORT_DESC, $this->short_desc);
        if ($this->isColumnModified(MatterPeer::ENGLISH_DESC)) $criteria->add(MatterPeer::ENGLISH_DESC, $this->english_desc);
        if ($this->isColumnModified(MatterPeer::HELP_DESC)) $criteria->add(MatterPeer::HELP_DESC, $this->help_desc);
        if ($this->isColumnModified(MatterPeer::DOWNLOAD_LINK)) $criteria->add(MatterPeer::DOWNLOAD_LINK, $this->download_link);
        if ($this->isColumnModified(MatterPeer::TAG_KEYWORDS)) $criteria->add(MatterPeer::TAG_KEYWORDS, $this->tag_keywords);
        if ($this->isColumnModified(MatterPeer::TAG_DESC)) $criteria->add(MatterPeer::TAG_DESC, $this->tag_desc);
        if ($this->isColumnModified(MatterPeer::VIEW_COUNT)) $criteria->add(MatterPeer::VIEW_COUNT, $this->view_count);
        if ($this->isColumnModified(MatterPeer::ORDER)) $criteria->add(MatterPeer::ORDER, $this->order);
        if ($this->isColumnModified(MatterPeer::NEED)) $criteria->add(MatterPeer::NEED, $this->need);
        if ($this->isColumnModified(MatterPeer::SPICIAL)) $criteria->add(MatterPeer::SPICIAL, $this->spicial);
        if ($this->isColumnModified(MatterPeer::DOWNLOAD_COUNT)) $criteria->add(MatterPeer::DOWNLOAD_COUNT, $this->download_count);
        if ($this->isColumnModified(MatterPeer::DATE)) $criteria->add(MatterPeer::DATE, $this->date);
        if ($this->isColumnModified(MatterPeer::PUBLISHER)) $criteria->add(MatterPeer::PUBLISHER, $this->publisher);
        if ($this->isColumnModified(MatterPeer::USER_ID)) $criteria->add(MatterPeer::USER_ID, $this->user_id);
        if ($this->isColumnModified(MatterPeer::THIRD_CATEGORY_ID)) $criteria->add(MatterPeer::THIRD_CATEGORY_ID, $this->third_category_id);

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
        $criteria = new Criteria(MatterPeer::DATABASE_NAME);
        $criteria->add(MatterPeer::ID, $this->id);

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
     * @param object $copyObj An object of Matter (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setMainSubject($this->getMainSubject());
        $copyObj->setShortSubject($this->getShortSubject());
        $copyObj->setLongDesc($this->getLongDesc());
        $copyObj->setShortDesc($this->getShortDesc());
        $copyObj->setEnglishDesc($this->getEnglishDesc());
        $copyObj->setHelpDesc($this->getHelpDesc());
        $copyObj->setDownloadLink($this->getDownloadLink());
        $copyObj->setTagKeywords($this->getTagKeywords());
        $copyObj->setTagDesc($this->getTagDesc());
        $copyObj->setViewCount($this->getViewCount());
        $copyObj->setOrder($this->getOrder());
        $copyObj->setNeed($this->getNeed());
        $copyObj->setSpicial($this->getSpicial());
        $copyObj->setDownloadCount($this->getDownloadCount());
        $copyObj->setDate($this->getDate());
        $copyObj->setPublisher($this->getPublisher());
        $copyObj->setUserId($this->getUserId());
        $copyObj->setThirdCategoryId($this->getThirdCategoryId());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getComments() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addComment($relObj->copy($deepCopy));
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
     * @return Matter Clone of current object.
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
     * @return MatterPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new MatterPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a User object.
     *
     * @param             User $v
     * @return Matter The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUser(User $v = null)
    {
        if ($v === null) {
            $this->setUserId(NULL);
        } else {
            $this->setUserId($v->getId());
        }

        $this->aUser = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the User object, it will not be re-added.
        if ($v !== null) {
            $v->addMatter($this);
        }


        return $this;
    }


    /**
     * Get the associated User object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return User The associated User object.
     * @throws PropelException
     */
    public function getUser(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aUser === null && ($this->user_id !== null) && $doQuery) {
            $this->aUser = UserQuery::create()->findPk($this->user_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUser->addMatters($this);
             */
        }

        return $this->aUser;
    }

    /**
     * Declares an association between this object and a ThirdCategory object.
     *
     * @param             ThirdCategory $v
     * @return Matter The current object (for fluent API support)
     * @throws PropelException
     */
    public function setThirdCategory(ThirdCategory $v = null)
    {
        if ($v === null) {
            $this->setThirdCategoryId(NULL);
        } else {
            $this->setThirdCategoryId($v->getId());
        }

        $this->aThirdCategory = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ThirdCategory object, it will not be re-added.
        if ($v !== null) {
            $v->addMatter($this);
        }


        return $this;
    }


    /**
     * Get the associated ThirdCategory object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return ThirdCategory The associated ThirdCategory object.
     * @throws PropelException
     */
    public function getThirdCategory(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aThirdCategory === null && ($this->third_category_id !== null) && $doQuery) {
            $this->aThirdCategory = ThirdCategoryQuery::create()->findPk($this->third_category_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aThirdCategory->addMatters($this);
             */
        }

        return $this->aThirdCategory;
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
        if ('Comment' == $relationName) {
            $this->initComments();
        }
    }

    /**
     * Clears out the collComments collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Matter The current object (for fluent API support)
     * @see        addComments()
     */
    public function clearComments()
    {
        $this->collComments = null; // important to set this to null since that means it is uninitialized
        $this->collCommentsPartial = null;

        return $this;
    }

    /**
     * reset is the collComments collection loaded partially
     *
     * @return void
     */
    public function resetPartialComments($v = true)
    {
        $this->collCommentsPartial = $v;
    }

    /**
     * Initializes the collComments collection.
     *
     * By default this just sets the collComments collection to an empty array (like clearcollComments());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initComments($overrideExisting = true)
    {
        if (null !== $this->collComments && !$overrideExisting) {
            return;
        }
        $this->collComments = new PropelObjectCollection();
        $this->collComments->setModel('Comment');
    }

    /**
     * Gets an array of Comment objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Matter is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Comment[] List of Comment objects
     * @throws PropelException
     */
    public function getComments($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommentsPartial && !$this->isNew();
        if (null === $this->collComments || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collComments) {
                // return empty collection
                $this->initComments();
            } else {
                $collComments = CommentQuery::create(null, $criteria)
                    ->filterByMatter($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommentsPartial && count($collComments)) {
                      $this->initComments(false);

                      foreach($collComments as $obj) {
                        if (false == $this->collComments->contains($obj)) {
                          $this->collComments->append($obj);
                        }
                      }

                      $this->collCommentsPartial = true;
                    }

                    return $collComments;
                }

                if($partial && $this->collComments) {
                    foreach($this->collComments as $obj) {
                        if($obj->isNew()) {
                            $collComments[] = $obj;
                        }
                    }
                }

                $this->collComments = $collComments;
                $this->collCommentsPartial = false;
            }
        }

        return $this->collComments;
    }

    /**
     * Sets a collection of Comment objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $comments A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Matter The current object (for fluent API support)
     */
    public function setComments(PropelCollection $comments, PropelPDO $con = null)
    {
        $commentsToDelete = $this->getComments(new Criteria(), $con)->diff($comments);

        $this->commentsScheduledForDeletion = unserialize(serialize($commentsToDelete));

        foreach ($commentsToDelete as $commentRemoved) {
            $commentRemoved->setMatter(null);
        }

        $this->collComments = null;
        foreach ($comments as $comment) {
            $this->addComment($comment);
        }

        $this->collComments = $comments;
        $this->collCommentsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Comment objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Comment objects.
     * @throws PropelException
     */
    public function countComments(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommentsPartial && !$this->isNew();
        if (null === $this->collComments || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collComments) {
                return 0;
            }

            if($partial && !$criteria) {
                return count($this->getComments());
            }
            $query = CommentQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByMatter($this)
                ->count($con);
        }

        return count($this->collComments);
    }

    /**
     * Method called to associate a Comment object to this object
     * through the Comment foreign key attribute.
     *
     * @param    Comment $l Comment
     * @return Matter The current object (for fluent API support)
     */
    public function addComment(Comment $l)
    {
        if ($this->collComments === null) {
            $this->initComments();
            $this->collCommentsPartial = true;
        }
        if (!in_array($l, $this->collComments->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddComment($l);
        }

        return $this;
    }

    /**
     * @param	Comment $comment The comment object to add.
     */
    protected function doAddComment($comment)
    {
        $this->collComments[]= $comment;
        $comment->setMatter($this);
    }

    /**
     * @param	Comment $comment The comment object to remove.
     * @return Matter The current object (for fluent API support)
     */
    public function removeComment($comment)
    {
        if ($this->getComments()->contains($comment)) {
            $this->collComments->remove($this->collComments->search($comment));
            if (null === $this->commentsScheduledForDeletion) {
                $this->commentsScheduledForDeletion = clone $this->collComments;
                $this->commentsScheduledForDeletion->clear();
            }
            $this->commentsScheduledForDeletion[]= clone $comment;
            $comment->setMatter(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->main_subject = null;
        $this->short_subject = null;
        $this->long_desc = null;
        $this->short_desc = null;
        $this->english_desc = null;
        $this->help_desc = null;
        $this->download_link = null;
        $this->tag_keywords = null;
        $this->tag_desc = null;
        $this->view_count = null;
        $this->order = null;
        $this->need = null;
        $this->spicial = null;
        $this->download_count = null;
        $this->date = null;
        $this->publisher = null;
        $this->user_id = null;
        $this->third_category_id = null;
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
            if ($this->collComments) {
                foreach ($this->collComments as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        if ($this->collComments instanceof PropelCollection) {
            $this->collComments->clearIterator();
        }
        $this->collComments = null;
        $this->aUser = null;
        $this->aThirdCategory = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(MatterPeer::DEFAULT_STRING_FORMAT);
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
