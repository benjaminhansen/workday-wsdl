<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Committee_Classification_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Data for Committee Classification
 * @subpackage Structs
 */
class Committee_Classification_DataType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: Unique Identifier for the committee classification. If not entered, one will be generated.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Committee Classification Name. Required for add.
     * - maxOccurs: 1
     * @var string
     */
    public $Name;
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - documentation: A boolean flag to set the committee classification inactive.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Inactive;
    /**
     * The Committee_Classification_Group_Reference
     * Meta information extracted from the WSDL
     * - documentation: Committee Classification Group for Classification
     * @var \WorkdayWsdl\\StructType\Committee_Classification_GroupObjectType
     */
    public $Committee_Classification_Group_Reference;
    /**
     * Constructor method for Committee_Classification_DataType
     * @uses Committee_Classification_DataType::setID()
     * @uses Committee_Classification_DataType::setName()
     * @uses Committee_Classification_DataType::setInactive()
     * @uses Committee_Classification_DataType::setCommittee_Classification_Group_Reference()
     * @param string $iD
     * @param string $name
     * @param bool $inactive
     * @param \WorkdayWsdl\\StructType\Committee_Classification_GroupObjectType $committee_Classification_Group_Reference
     */
    public function __construct($iD = null, $name = null, $inactive = null, \WorkdayWsdl\\StructType\Committee_Classification_GroupObjectType $committee_Classification_Group_Reference = null)
    {
        $this
            ->setID($iD)
            ->setName($name)
            ->setInactive($inactive)
            ->setCommittee_Classification_Group_Reference($committee_Classification_Group_Reference);
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
     * @return \WorkdayWsdl\\StructType\Committee_Classification_DataType
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
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \WorkdayWsdl\\StructType\Committee_Classification_DataType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
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
     * @return \WorkdayWsdl\\StructType\Committee_Classification_DataType
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
     * Get Committee_Classification_Group_Reference value
     * @return \WorkdayWsdl\\StructType\Committee_Classification_GroupObjectType|null
     */
    public function getCommittee_Classification_Group_Reference()
    {
        return $this->Committee_Classification_Group_Reference;
    }
    /**
     * Set Committee_Classification_Group_Reference value
     * @param \WorkdayWsdl\\StructType\Committee_Classification_GroupObjectType $committee_Classification_Group_Reference
     * @return \WorkdayWsdl\\StructType\Committee_Classification_DataType
     */
    public function setCommittee_Classification_Group_Reference(\WorkdayWsdl\\StructType\Committee_Classification_GroupObjectType $committee_Classification_Group_Reference = null)
    {
        $this->Committee_Classification_Group_Reference = $committee_Classification_Group_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Committee_Classification_DataType
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
