<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Generic_Military_Service_Sub_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The Military Rank specified is not valid for Military Service Type or Country from Military Status. | The Military Service Type specified is not valid for Country from Military Status. | Container for military service data for the
 * Person
 * @subpackage Structs
 */
class Generic_Military_Service_Sub_DataType extends AbstractStructBase
{
    /**
     * The Military_Status_Reference
     * Meta information extracted from the WSDL
     * - documentation: Inactive military statuses are not allowed in this request. | Reference for the person's Military status.
     * @var \WorkdayWsdl\\StructType\Military_StatusObjectType
     */
    public $Military_Status_Reference;
    /**
     * The Military_Discharge_Date
     * Meta information extracted from the WSDL
     * - documentation: Military Discharge Date must be greater than Date of Birth. | Date the person was discharged from the Military.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Military_Discharge_Date;
    /**
     * The Military_Status_Begin_Date
     * Meta information extracted from the WSDL
     * - documentation: Military Status Begin Date must be after Date of Birth. | Begin Date for Military Service status.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Military_Status_Begin_Date;
    /**
     * The Military_Service_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Service type for Military Service.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Military_Service_TypeObjectType
     */
    public $Military_Service_Type_Reference;
    /**
     * The Military_Rank_Reference
     * Meta information extracted from the WSDL
     * - documentation: Military Rank for Military Service type.
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
     * Constructor method for Generic_Military_Service_Sub_DataType
     * @uses Generic_Military_Service_Sub_DataType::setMilitary_Status_Reference()
     * @uses Generic_Military_Service_Sub_DataType::setMilitary_Discharge_Date()
     * @uses Generic_Military_Service_Sub_DataType::setMilitary_Status_Begin_Date()
     * @uses Generic_Military_Service_Sub_DataType::setMilitary_Service_Type_Reference()
     * @uses Generic_Military_Service_Sub_DataType::setMilitary_Rank_Reference()
     * @uses Generic_Military_Service_Sub_DataType::setNotes()
     * @param \WorkdayWsdl\\StructType\Military_StatusObjectType $military_Status_Reference
     * @param string $military_Discharge_Date
     * @param string $military_Status_Begin_Date
     * @param \WorkdayWsdl\\StructType\Military_Service_TypeObjectType $military_Service_Type_Reference
     * @param \WorkdayWsdl\\StructType\Military_RankObjectType $military_Rank_Reference
     * @param string $notes
     */
    public function __construct(\WorkdayWsdl\\StructType\Military_StatusObjectType $military_Status_Reference = null, $military_Discharge_Date = null, $military_Status_Begin_Date = null, \WorkdayWsdl\\StructType\Military_Service_TypeObjectType $military_Service_Type_Reference = null, \WorkdayWsdl\\StructType\Military_RankObjectType $military_Rank_Reference = null, $notes = null)
    {
        $this
            ->setMilitary_Status_Reference($military_Status_Reference)
            ->setMilitary_Discharge_Date($military_Discharge_Date)
            ->setMilitary_Status_Begin_Date($military_Status_Begin_Date)
            ->setMilitary_Service_Type_Reference($military_Service_Type_Reference)
            ->setMilitary_Rank_Reference($military_Rank_Reference)
            ->setNotes($notes);
    }
    /**
     * Get Military_Status_Reference value
     * @return \WorkdayWsdl\\StructType\Military_StatusObjectType|null
     */
    public function getMilitary_Status_Reference()
    {
        return $this->Military_Status_Reference;
    }
    /**
     * Set Military_Status_Reference value
     * @param \WorkdayWsdl\\StructType\Military_StatusObjectType $military_Status_Reference
     * @return \WorkdayWsdl\\StructType\Generic_Military_Service_Sub_DataType
     */
    public function setMilitary_Status_Reference(\WorkdayWsdl\\StructType\Military_StatusObjectType $military_Status_Reference = null)
    {
        $this->Military_Status_Reference = $military_Status_Reference;
        return $this;
    }
    /**
     * Get Military_Discharge_Date value
     * @return string|null
     */
    public function getMilitary_Discharge_Date()
    {
        return $this->Military_Discharge_Date;
    }
    /**
     * Set Military_Discharge_Date value
     * @param string $military_Discharge_Date
     * @return \WorkdayWsdl\\StructType\Generic_Military_Service_Sub_DataType
     */
    public function setMilitary_Discharge_Date($military_Discharge_Date = null)
    {
        // validation for constraint: string
        if (!is_null($military_Discharge_Date) && !is_string($military_Discharge_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($military_Discharge_Date, true), gettype($military_Discharge_Date)), __LINE__);
        }
        $this->Military_Discharge_Date = $military_Discharge_Date;
        return $this;
    }
    /**
     * Get Military_Status_Begin_Date value
     * @return string|null
     */
    public function getMilitary_Status_Begin_Date()
    {
        return $this->Military_Status_Begin_Date;
    }
    /**
     * Set Military_Status_Begin_Date value
     * @param string $military_Status_Begin_Date
     * @return \WorkdayWsdl\\StructType\Generic_Military_Service_Sub_DataType
     */
    public function setMilitary_Status_Begin_Date($military_Status_Begin_Date = null)
    {
        // validation for constraint: string
        if (!is_null($military_Status_Begin_Date) && !is_string($military_Status_Begin_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($military_Status_Begin_Date, true), gettype($military_Status_Begin_Date)), __LINE__);
        }
        $this->Military_Status_Begin_Date = $military_Status_Begin_Date;
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
     * @return \WorkdayWsdl\\StructType\Generic_Military_Service_Sub_DataType
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
     * @return \WorkdayWsdl\\StructType\Generic_Military_Service_Sub_DataType
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
     * @return \WorkdayWsdl\\StructType\Generic_Military_Service_Sub_DataType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Generic_Military_Service_Sub_DataType
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
