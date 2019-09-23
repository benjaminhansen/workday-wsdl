<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Person_Military_Service_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: You can't assign a Military Status to a worker when their Hire Date is before the Effective Date of the Location | The Military Service Type specified is not valid for Country from Military Status. | The Military Rank specified is
 * not valid for Military Service Type or Country from Military Status. | Wrapper element for the military service information for the person.
 * @subpackage Structs
 */
class Person_Military_Service_DataType extends AbstractStructBase
{
    /**
     * The Status_Reference
     * Meta information extracted from the WSDL
     * - documentation: Inactive military statuses are not allowed in this request. | Person's Military Status.
     * @var \WorkdayWsdl\\StructType\Military_StatusObjectType
     */
    public $Status_Reference;
    /**
     * The Discharge_Date
     * Meta information extracted from the WSDL
     * - documentation: Date the person was discharged from the Military.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Discharge_Date;
    /**
     * The Status_Begin_Date
     * Meta information extracted from the WSDL
     * - documentation: Begin Date for Military Service status.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Status_Begin_Date;
    /**
     * The Military_Service_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Military Service Type.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Military_Service_TypeObjectType
     */
    public $Military_Service_Type_Reference;
    /**
     * The Military_Rank_Reference
     * Meta information extracted from the WSDL
     * - documentation: Military Rank for Military Service Type.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Military_RankObjectType
     */
    public $Military_Rank_Reference;
    /**
     * The Notes
     * Meta information extracted from the WSDL
     * - documentation: Notes for Military Service.
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Notes;
    /**
     * The Military_Service_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for Military Service.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Military_Service_ReferenceObjectType
     */
    public $Military_Service_Reference;
    /**
     * Constructor method for Person_Military_Service_DataType
     * @uses Person_Military_Service_DataType::setStatus_Reference()
     * @uses Person_Military_Service_DataType::setDischarge_Date()
     * @uses Person_Military_Service_DataType::setStatus_Begin_Date()
     * @uses Person_Military_Service_DataType::setMilitary_Service_Type_Reference()
     * @uses Person_Military_Service_DataType::setMilitary_Rank_Reference()
     * @uses Person_Military_Service_DataType::setNotes()
     * @uses Person_Military_Service_DataType::setMilitary_Service_Reference()
     * @param \WorkdayWsdl\\StructType\Military_StatusObjectType $status_Reference
     * @param string $discharge_Date
     * @param string $status_Begin_Date
     * @param \WorkdayWsdl\\StructType\Military_Service_TypeObjectType $military_Service_Type_Reference
     * @param \WorkdayWsdl\\StructType\Military_RankObjectType $military_Rank_Reference
     * @param string $notes
     * @param \WorkdayWsdl\\StructType\Military_Service_ReferenceObjectType $military_Service_Reference
     */
    public function __construct(\WorkdayWsdl\\StructType\Military_StatusObjectType $status_Reference = null, $discharge_Date = null, $status_Begin_Date = null, \WorkdayWsdl\\StructType\Military_Service_TypeObjectType $military_Service_Type_Reference = null, \WorkdayWsdl\\StructType\Military_RankObjectType $military_Rank_Reference = null, $notes = null, \WorkdayWsdl\\StructType\Military_Service_ReferenceObjectType $military_Service_Reference = null)
    {
        $this
            ->setStatus_Reference($status_Reference)
            ->setDischarge_Date($discharge_Date)
            ->setStatus_Begin_Date($status_Begin_Date)
            ->setMilitary_Service_Type_Reference($military_Service_Type_Reference)
            ->setMilitary_Rank_Reference($military_Rank_Reference)
            ->setNotes($notes)
            ->setMilitary_Service_Reference($military_Service_Reference);
    }
    /**
     * Get Status_Reference value
     * @return \WorkdayWsdl\\StructType\Military_StatusObjectType|null
     */
    public function getStatus_Reference()
    {
        return $this->Status_Reference;
    }
    /**
     * Set Status_Reference value
     * @param \WorkdayWsdl\\StructType\Military_StatusObjectType $status_Reference
     * @return \WorkdayWsdl\\StructType\Person_Military_Service_DataType
     */
    public function setStatus_Reference(\WorkdayWsdl\\StructType\Military_StatusObjectType $status_Reference = null)
    {
        $this->Status_Reference = $status_Reference;
        return $this;
    }
    /**
     * Get Discharge_Date value
     * @return string|null
     */
    public function getDischarge_Date()
    {
        return $this->Discharge_Date;
    }
    /**
     * Set Discharge_Date value
     * @param string $discharge_Date
     * @return \WorkdayWsdl\\StructType\Person_Military_Service_DataType
     */
    public function setDischarge_Date($discharge_Date = null)
    {
        // validation for constraint: string
        if (!is_null($discharge_Date) && !is_string($discharge_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($discharge_Date, true), gettype($discharge_Date)), __LINE__);
        }
        $this->Discharge_Date = $discharge_Date;
        return $this;
    }
    /**
     * Get Status_Begin_Date value
     * @return string|null
     */
    public function getStatus_Begin_Date()
    {
        return $this->Status_Begin_Date;
    }
    /**
     * Set Status_Begin_Date value
     * @param string $status_Begin_Date
     * @return \WorkdayWsdl\\StructType\Person_Military_Service_DataType
     */
    public function setStatus_Begin_Date($status_Begin_Date = null)
    {
        // validation for constraint: string
        if (!is_null($status_Begin_Date) && !is_string($status_Begin_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status_Begin_Date, true), gettype($status_Begin_Date)), __LINE__);
        }
        $this->Status_Begin_Date = $status_Begin_Date;
        return $this;
    }
    /**
     * Get Military_Service_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Military_Service_TypeObjectType|null
     */
    public function getMilitary_Service_Type_Reference()
    {
        return $this->Military_Service_Type_Reference;
    }
    /**
     * Set Military_Service_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Military_Service_TypeObjectType $military_Service_Type_Reference
     * @return \WorkdayWsdl\\StructType\Person_Military_Service_DataType
     */
    public function setMilitary_Service_Type_Reference(\WorkdayWsdl\\StructType\Military_Service_TypeObjectType $military_Service_Type_Reference = null)
    {
        $this->Military_Service_Type_Reference = $military_Service_Type_Reference;
        return $this;
    }
    /**
     * Get Military_Rank_Reference value
     * @return \WorkdayWsdl\\StructType\Military_RankObjectType|null
     */
    public function getMilitary_Rank_Reference()
    {
        return $this->Military_Rank_Reference;
    }
    /**
     * Set Military_Rank_Reference value
     * @param \WorkdayWsdl\\StructType\Military_RankObjectType $military_Rank_Reference
     * @return \WorkdayWsdl\\StructType\Person_Military_Service_DataType
     */
    public function setMilitary_Rank_Reference(\WorkdayWsdl\\StructType\Military_RankObjectType $military_Rank_Reference = null)
    {
        $this->Military_Rank_Reference = $military_Rank_Reference;
        return $this;
    }
    /**
     * Get Notes value
     * @return string|null
     */
    public function getNotes()
    {
        return $this->Notes;
    }
    /**
     * Set Notes value
     * @param string $notes
     * @return \WorkdayWsdl\\StructType\Person_Military_Service_DataType
     */
    public function setNotes($notes = null)
    {
        // validation for constraint: string
        if (!is_null($notes) && !is_string($notes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notes, true), gettype($notes)), __LINE__);
        }
        $this->Notes = $notes;
        return $this;
    }
    /**
     * Get Military_Service_Reference value
     * @return \WorkdayWsdl\\StructType\Military_Service_ReferenceObjectType|null
     */
    public function getMilitary_Service_Reference()
    {
        return $this->Military_Service_Reference;
    }
    /**
     * Set Military_Service_Reference value
     * @param \WorkdayWsdl\\StructType\Military_Service_ReferenceObjectType $military_Service_Reference
     * @return \WorkdayWsdl\\StructType\Person_Military_Service_DataType
     */
    public function setMilitary_Service_Reference(\WorkdayWsdl\\StructType\Military_Service_ReferenceObjectType $military_Service_Reference = null)
    {
        $this->Military_Service_Reference = $military_Service_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Person_Military_Service_DataType
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
