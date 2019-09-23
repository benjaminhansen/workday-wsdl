<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Assign_Establishment_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The request element containing all necessary information to manually assign an establishment to a worker position
 * @subpackage Structs
 */
class Assign_Establishment_DataType extends AbstractStructBase
{
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: The date upon which this establishment assignment becomes active for the specified worker position
     * - maxOccurs: 1
     * @var string
     */
    public $Effective_Date;
    /**
     * The Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: The worker who is to be assigned the specified establishment on the specified date
     * @var \WorkdayWsdl\\StructType\WorkerObjectType
     */
    public $Worker_Reference;
    /**
     * The Position_Reference
     * Meta information extracted from the WSDL
     * - documentation: The position of the worker for which the establishment is taking effect
     * @var \WorkdayWsdl\\StructType\Position_ElementObjectType
     */
    public $Position_Reference;
    /**
     * The Establishment_Reference
     * Meta information extracted from the WSDL
     * - documentation: The establishment we wish to assign to the specified worker position
     * @var \WorkdayWsdl\\StructType\EstablishmentObjectType
     */
    public $Establishment_Reference;
    /**
     * Constructor method for Assign_Establishment_DataType
     * @uses Assign_Establishment_DataType::setEffective_Date()
     * @uses Assign_Establishment_DataType::setWorker_Reference()
     * @uses Assign_Establishment_DataType::setPosition_Reference()
     * @uses Assign_Establishment_DataType::setEstablishment_Reference()
     * @param string $effective_Date
     * @param \WorkdayWsdl\\StructType\WorkerObjectType $worker_Reference
     * @param \WorkdayWsdl\\StructType\Position_ElementObjectType $position_Reference
     * @param \WorkdayWsdl\\StructType\EstablishmentObjectType $establishment_Reference
     */
    public function __construct($effective_Date = null, \WorkdayWsdl\\StructType\WorkerObjectType $worker_Reference = null, \WorkdayWsdl\\StructType\Position_ElementObjectType $position_Reference = null, \WorkdayWsdl\\StructType\EstablishmentObjectType $establishment_Reference = null)
    {
        $this
            ->setEffective_Date($effective_Date)
            ->setWorker_Reference($worker_Reference)
            ->setPosition_Reference($position_Reference)
            ->setEstablishment_Reference($establishment_Reference);
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
     * @return \WorkdayWsdl\\StructType\Assign_Establishment_DataType
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
     * Get Worker_Reference value
     * @return \WorkdayWsdl\\StructType\WorkerObjectType|null
     */
    public function getWorker_Reference()
    {
        return $this->Worker_Reference;
    }
    /**
     * Set Worker_Reference value
     * @param \WorkdayWsdl\\StructType\WorkerObjectType $worker_Reference
     * @return \WorkdayWsdl\\StructType\Assign_Establishment_DataType
     */
    public function setWorker_Reference(\WorkdayWsdl\\StructType\WorkerObjectType $worker_Reference = null)
    {
        $this->Worker_Reference = $worker_Reference;
        return $this;
    }
    /**
     * Get Position_Reference value
     * @return \WorkdayWsdl\\StructType\Position_ElementObjectType|null
     */
    public function getPosition_Reference()
    {
        return $this->Position_Reference;
    }
    /**
     * Set Position_Reference value
     * @param \WorkdayWsdl\\StructType\Position_ElementObjectType $position_Reference
     * @return \WorkdayWsdl\\StructType\Assign_Establishment_DataType
     */
    public function setPosition_Reference(\WorkdayWsdl\\StructType\Position_ElementObjectType $position_Reference = null)
    {
        $this->Position_Reference = $position_Reference;
        return $this;
    }
    /**
     * Get Establishment_Reference value
     * @return \WorkdayWsdl\\StructType\EstablishmentObjectType|null
     */
    public function getEstablishment_Reference()
    {
        return $this->Establishment_Reference;
    }
    /**
     * Set Establishment_Reference value
     * @param \WorkdayWsdl\\StructType\EstablishmentObjectType $establishment_Reference
     * @return \WorkdayWsdl\\StructType\Assign_Establishment_DataType
     */
    public function setEstablishment_Reference(\WorkdayWsdl\\StructType\EstablishmentObjectType $establishment_Reference = null)
    {
        $this->Establishment_Reference = $establishment_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Assign_Establishment_DataType
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
