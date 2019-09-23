<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Termination_Status_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Termination Status data for a Worker.
 * @subpackage Structs
 */
class Termination_Status_DataType extends AbstractStructBase
{
    /**
     * The Terminated
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute identifying whether the Worker is currently Terminated.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Terminated;
    /**
     * The Termination_Date
     * Meta information extracted from the WSDL
     * - documentation: Most recent Termination Date.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Termination_Date;
    /**
     * The Termination_Category
     * Meta information extracted from the WSDL
     * - documentation: Most recent termination event Category.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Termination_Category;
    /**
     * The Termination_Reason
     * Meta information extracted from the WSDL
     * - documentation: Most recent termination event Reason.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Termination_Reason;
    /**
     * The Involuntary_Termination
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute identifying whether the Worker was terminated Involuntarily.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Involuntary_Termination;
    /**
     * The Eligible_For_Rehire_Reference
     * Meta information extracted from the WSDL
     * - documentation: The ~worker’s~ rehire eligibility status specified on their most recent exit interview.
     * - minOccurs: 0
     * @var \StructType\Common_Yes_NoObjectType
     */
    public $Eligible_For_Rehire_Reference;
    /**
     * Constructor method for Termination_Status_DataType
     * @uses Termination_Status_DataType::setTerminated()
     * @uses Termination_Status_DataType::setTermination_Date()
     * @uses Termination_Status_DataType::setTermination_Category()
     * @uses Termination_Status_DataType::setTermination_Reason()
     * @uses Termination_Status_DataType::setInvoluntary_Termination()
     * @uses Termination_Status_DataType::setEligible_For_Rehire_Reference()
     * @param bool $terminated
     * @param string $termination_Date
     * @param string $termination_Category
     * @param string $termination_Reason
     * @param bool $involuntary_Termination
     * @param \StructType\Common_Yes_NoObjectType $eligible_For_Rehire_Reference
     */
    public function __construct($terminated = null, $termination_Date = null, $termination_Category = null, $termination_Reason = null, $involuntary_Termination = null, \StructType\Common_Yes_NoObjectType $eligible_For_Rehire_Reference = null)
    {
        $this
            ->setTerminated($terminated)
            ->setTermination_Date($termination_Date)
            ->setTermination_Category($termination_Category)
            ->setTermination_Reason($termination_Reason)
            ->setInvoluntary_Termination($involuntary_Termination)
            ->setEligible_For_Rehire_Reference($eligible_For_Rehire_Reference);
    }
    /**
     * Get Terminated value
     * @return bool|null
     */
    public function getTerminated()
    {
        return $this->Terminated;
    }
    /**
     * Set Terminated value
     * @param bool $terminated
     * @return \StructType\Termination_Status_DataType
     */
    public function setTerminated($terminated = null)
    {
        // validation for constraint: boolean
        if (!is_null($terminated) && !is_bool($terminated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($terminated, true), gettype($terminated)), __LINE__);
        }
        $this->Terminated = $terminated;
        return $this;
    }
    /**
     * Get Termination_Date value
     * @return string|null
     */
    public function getTermination_Date()
    {
        return $this->Termination_Date;
    }
    /**
     * Set Termination_Date value
     * @param string $termination_Date
     * @return \StructType\Termination_Status_DataType
     */
    public function setTermination_Date($termination_Date = null)
    {
        // validation for constraint: string
        if (!is_null($termination_Date) && !is_string($termination_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($termination_Date, true), gettype($termination_Date)), __LINE__);
        }
        $this->Termination_Date = $termination_Date;
        return $this;
    }
    /**
     * Get Termination_Category value
     * @return string|null
     */
    public function getTermination_Category()
    {
        return $this->Termination_Category;
    }
    /**
     * Set Termination_Category value
     * @param string $termination_Category
     * @return \StructType\Termination_Status_DataType
     */
    public function setTermination_Category($termination_Category = null)
    {
        // validation for constraint: string
        if (!is_null($termination_Category) && !is_string($termination_Category)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($termination_Category, true), gettype($termination_Category)), __LINE__);
        }
        $this->Termination_Category = $termination_Category;
        return $this;
    }
    /**
     * Get Termination_Reason value
     * @return string|null
     */
    public function getTermination_Reason()
    {
        return $this->Termination_Reason;
    }
    /**
     * Set Termination_Reason value
     * @param string $termination_Reason
     * @return \StructType\Termination_Status_DataType
     */
    public function setTermination_Reason($termination_Reason = null)
    {
        // validation for constraint: string
        if (!is_null($termination_Reason) && !is_string($termination_Reason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($termination_Reason, true), gettype($termination_Reason)), __LINE__);
        }
        $this->Termination_Reason = $termination_Reason;
        return $this;
    }
    /**
     * Get Involuntary_Termination value
     * @return bool|null
     */
    public function getInvoluntary_Termination()
    {
        return $this->Involuntary_Termination;
    }
    /**
     * Set Involuntary_Termination value
     * @param bool $involuntary_Termination
     * @return \StructType\Termination_Status_DataType
     */
    public function setInvoluntary_Termination($involuntary_Termination = null)
    {
        // validation for constraint: boolean
        if (!is_null($involuntary_Termination) && !is_bool($involuntary_Termination)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($involuntary_Termination, true), gettype($involuntary_Termination)), __LINE__);
        }
        $this->Involuntary_Termination = $involuntary_Termination;
        return $this;
    }
    /**
     * Get Eligible_For_Rehire_Reference value
     * @return \StructType\Common_Yes_NoObjectType|null
     */
    public function getEligible_For_Rehire_Reference()
    {
        return $this->Eligible_For_Rehire_Reference;
    }
    /**
     * Set Eligible_For_Rehire_Reference value
     * @param \StructType\Common_Yes_NoObjectType $eligible_For_Rehire_Reference
     * @return \StructType\Termination_Status_DataType
     */
    public function setEligible_For_Rehire_Reference(\StructType\Common_Yes_NoObjectType $eligible_For_Rehire_Reference = null)
    {
        $this->Eligible_For_Rehire_Reference = $eligible_For_Rehire_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Termination_Status_DataType
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
