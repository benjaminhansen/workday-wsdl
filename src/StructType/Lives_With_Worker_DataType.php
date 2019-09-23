<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Lives_With_Worker_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: If the dependent lives with worker
 * @subpackage Structs
 */
class Lives_With_Worker_DataType extends AbstractStructBase
{
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: The Effective date for if dependent lives with worker
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Effective_Date;
    /**
     * The Lives_With_Worker
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute identifying if the dependent lives with worker
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Lives_With_Worker;
    /**
     * Constructor method for Lives_With_Worker_DataType
     * @uses Lives_With_Worker_DataType::setEffective_Date()
     * @uses Lives_With_Worker_DataType::setLives_With_Worker()
     * @param string $effective_Date
     * @param bool $lives_With_Worker
     */
    public function __construct($effective_Date = null, $lives_With_Worker = null)
    {
        $this
            ->setEffective_Date($effective_Date)
            ->setLives_With_Worker($lives_With_Worker);
    }
    /**
     * Get Effective_Date value
     * @return string|null
     */
    public function getEffective_Date()
    {
        return $this->Effective_Date;
    }
    /**
     * Set Effective_Date value
     * @param string $effective_Date
     * @return \StructType\Lives_With_Worker_DataType
     */
    public function setEffective_Date($effective_Date = null)
    {
        // validation for constraint: string
        if (!is_null($effective_Date) && !is_string($effective_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effective_Date, true), gettype($effective_Date)), __LINE__);
        }
        $this->Effective_Date = $effective_Date;
        return $this;
    }
    /**
     * Get Lives_With_Worker value
     * @return bool|null
     */
    public function getLives_With_Worker()
    {
        return $this->Lives_With_Worker;
    }
    /**
     * Set Lives_With_Worker value
     * @param bool $lives_With_Worker
     * @return \StructType\Lives_With_Worker_DataType
     */
    public function setLives_With_Worker($lives_With_Worker = null)
    {
        // validation for constraint: boolean
        if (!is_null($lives_With_Worker) && !is_bool($lives_With_Worker)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($lives_With_Worker, true), gettype($lives_With_Worker)), __LINE__);
        }
        $this->Lives_With_Worker = $lives_With_Worker;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Lives_With_Worker_DataType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
