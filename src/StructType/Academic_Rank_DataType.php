<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Academic_Rank_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for all the detail information about the Academic Rank
 * @subpackage Structs
 */
class Academic_Rank_DataType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: A Reference ID for the Academic Rank generated by Workday and used for internal purposes only
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Academic_Rank_Title_Name
     * Meta information extracted from the WSDL
     * - documentation: The Name of the Academic Rank
     * - maxOccurs: 1
     * @var string
     */
    public $Academic_Rank_Title_Name;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: The description of the Academic Rank
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Emeritus
     * Meta information extracted from the WSDL
     * - documentation: Academic Rank Emeritus Status
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Emeritus;
    /**
     * The Rank_Order
     * Meta information extracted from the WSDL
     * - documentation: Academic Rank Order
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 3
     * @var float
     */
    public $Rank_Order;
    /**
     * The Job_Profile_Reference
     * Meta information extracted from the WSDL
     * - documentation: Validation Error: Occurs when Job Profile that is selected is inactive | Job Profiles to be associated with the Academic Rank
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Job_ProfileObjectType[]
     */
    public $Job_Profile_Reference;
    /**
     * The Metadata_Academic_Rank_Reference
     * Meta information extracted from the WSDL
     * - documentation: Metadata Academic Rank Reference
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Academic_Rank_MappingObjectType
     */
    public $Metadata_Academic_Rank_Reference;
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether or not the Academic Rank is considered Inactive. If set, the static text (inactive) will be appended to the Academic Rank's default display ID (Academic Rank Name).
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Inactive;
    /**
     * Constructor method for Academic_Rank_DataType
     * @uses Academic_Rank_DataType::setID()
     * @uses Academic_Rank_DataType::setAcademic_Rank_Title_Name()
     * @uses Academic_Rank_DataType::setDescription()
     * @uses Academic_Rank_DataType::setEmeritus()
     * @uses Academic_Rank_DataType::setRank_Order()
     * @uses Academic_Rank_DataType::setJob_Profile_Reference()
     * @uses Academic_Rank_DataType::setMetadata_Academic_Rank_Reference()
     * @uses Academic_Rank_DataType::setInactive()
     * @param string $iD
     * @param string $academic_Rank_Title_Name
     * @param string $description
     * @param bool $emeritus
     * @param float $rank_Order
     * @param \WorkdayWsdl\\StructType\Job_ProfileObjectType[] $job_Profile_Reference
     * @param \WorkdayWsdl\\StructType\Academic_Rank_MappingObjectType $metadata_Academic_Rank_Reference
     * @param bool $inactive
     */
    public function __construct($iD = null, $academic_Rank_Title_Name = null, $description = null, $emeritus = null, $rank_Order = null, array $job_Profile_Reference = array(), \WorkdayWsdl\\StructType\Academic_Rank_MappingObjectType $metadata_Academic_Rank_Reference = null, $inactive = null)
    {
        $this
            ->setID($iD)
            ->setAcademic_Rank_Title_Name($academic_Rank_Title_Name)
            ->setDescription($description)
            ->setEmeritus($emeritus)
            ->setRank_Order($rank_Order)
            ->setJob_Profile_Reference($job_Profile_Reference)
            ->setMetadata_Academic_Rank_Reference($metadata_Academic_Rank_Reference)
            ->setInactive($inactive);
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \WorkdayWsdl\\StructType\Academic_Rank_DataType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get Academic_Rank_Title_Name value
     * @return string|null
     */
    public function getAcademic_Rank_Title_Name()
    {
        return $this->Academic_Rank_Title_Name;
    }
    /**
     * Set Academic_Rank_Title_Name value
     * @param string $academic_Rank_Title_Name
     * @return \WorkdayWsdl\\StructType\Academic_Rank_DataType
     */
    public function setAcademic_Rank_Title_Name($academic_Rank_Title_Name = null)
    {
        // validation for constraint: string
        if (!is_null($academic_Rank_Title_Name) && !is_string($academic_Rank_Title_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($academic_Rank_Title_Name, true), gettype($academic_Rank_Title_Name)), __LINE__);
        }
        $this->Academic_Rank_Title_Name = $academic_Rank_Title_Name;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \WorkdayWsdl\\StructType\Academic_Rank_DataType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Emeritus value
     * @return bool|null
     */
    public function getEmeritus()
    {
        return $this->Emeritus;
    }
    /**
     * Set Emeritus value
     * @param bool $emeritus
     * @return \WorkdayWsdl\\StructType\Academic_Rank_DataType
     */
    public function setEmeritus($emeritus = null)
    {
        // validation for constraint: boolean
        if (!is_null($emeritus) && !is_bool($emeritus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($emeritus, true), gettype($emeritus)), __LINE__);
        }
        $this->Emeritus = $emeritus;
        return $this;
    }
    /**
     * Get Rank_Order value
     * @return float|null
     */
    public function getRank_Order()
    {
        return $this->Rank_Order;
    }
    /**
     * Set Rank_Order value
     * @param float $rank_Order
     * @return \WorkdayWsdl\\StructType\Academic_Rank_DataType
     */
    public function setRank_Order($rank_Order = null)
    {
        // validation for constraint: float
        if (!is_null($rank_Order) && !(is_float($rank_Order) || is_numeric($rank_Order))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($rank_Order, true), gettype($rank_Order)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($rank_Order) && mb_strlen(mb_substr($rank_Order, mb_strpos($rank_Order, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($rank_Order, true), mb_strlen(mb_substr($rank_Order, mb_strpos($rank_Order, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($rank_Order) && $rank_Order < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($rank_Order, true)), __LINE__);
        }
        // validation for constraint: totalDigits(3)
        if (!is_null($rank_Order) && mb_strlen(preg_replace('/(\D)/', '', $rank_Order)) > 3) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 3 digits, "%d" given', var_export($rank_Order, true), mb_strlen(preg_replace('/(\D)/', '', $rank_Order))), __LINE__);
        }
        $this->Rank_Order = $rank_Order;
        return $this;
    }
    /**
     * Get Job_Profile_Reference value
     * @return \WorkdayWsdl\\StructType\Job_ProfileObjectType[]|null
     */
    public function getJob_Profile_Reference()
    {
        return $this->Job_Profile_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_Profile_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_Profile_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_Profile_ReferenceForArrayConstraintsFromSetJob_Profile_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $academic_Rank_DataTypeJob_Profile_ReferenceItem) {
            // validation for constraint: itemType
            if (!$academic_Rank_DataTypeJob_Profile_ReferenceItem instanceof \WorkdayWsdl\\StructType\Job_ProfileObjectType) {
                $invalidValues[] = is_object($academic_Rank_DataTypeJob_Profile_ReferenceItem) ? get_class($academic_Rank_DataTypeJob_Profile_ReferenceItem) : sprintf('%s(%s)', gettype($academic_Rank_DataTypeJob_Profile_ReferenceItem), var_export($academic_Rank_DataTypeJob_Profile_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Profile_Reference property can only contain items of type \WorkdayWsdl\\StructType\Job_ProfileObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Profile_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Job_ProfileObjectType[] $job_Profile_Reference
     * @return \WorkdayWsdl\\StructType\Academic_Rank_DataType
     */
    public function setJob_Profile_Reference(array $job_Profile_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($job_Profile_ReferenceArrayErrorMessage = self::validateJob_Profile_ReferenceForArrayConstraintsFromSetJob_Profile_Reference($job_Profile_Reference))) {
            throw new \InvalidArgumentException($job_Profile_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Job_Profile_Reference = $job_Profile_Reference;
        return $this;
    }
    /**
     * Add item to Job_Profile_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Job_ProfileObjectType $item
     * @return \WorkdayWsdl\\StructType\Academic_Rank_DataType
     */
    public function addToJob_Profile_Reference(\WorkdayWsdl\\StructType\Job_ProfileObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Job_ProfileObjectType) {
            throw new \InvalidArgumentException(sprintf('The Job_Profile_Reference property can only contain items of type \WorkdayWsdl\\StructType\Job_ProfileObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Profile_Reference[] = $item;
        return $this;
    }
    /**
     * Get Metadata_Academic_Rank_Reference value
     * @return \WorkdayWsdl\\StructType\Academic_Rank_MappingObjectType|null
     */
    public function getMetadata_Academic_Rank_Reference()
    {
        return $this->Metadata_Academic_Rank_Reference;
    }
    /**
     * Set Metadata_Academic_Rank_Reference value
     * @param \WorkdayWsdl\\StructType\Academic_Rank_MappingObjectType $metadata_Academic_Rank_Reference
     * @return \WorkdayWsdl\\StructType\Academic_Rank_DataType
     */
    public function setMetadata_Academic_Rank_Reference(\WorkdayWsdl\\StructType\Academic_Rank_MappingObjectType $metadata_Academic_Rank_Reference = null)
    {
        $this->Metadata_Academic_Rank_Reference = $metadata_Academic_Rank_Reference;
        return $this;
    }
    /**
     * Get Inactive value
     * @return bool|null
     */
    public function getInactive()
    {
        return $this->Inactive;
    }
    /**
     * Set Inactive value
     * @param bool $inactive
     * @return \WorkdayWsdl\\StructType\Academic_Rank_DataType
     */
    public function setInactive($inactive = null)
    {
        // validation for constraint: boolean
        if (!is_null($inactive) && !is_bool($inactive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inactive, true), gettype($inactive)), __LINE__);
        }
        $this->Inactive = $inactive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Academic_Rank_DataType
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
