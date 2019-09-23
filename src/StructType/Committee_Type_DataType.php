<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Committee_Type_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Data for Committee Type
 * @subpackage Structs
 */
class Committee_Type_DataType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: Unique Identifier for the committee type. If not entered, one will be generated.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Committee Type Name. Required for add.
     * - maxOccurs: 1
     * @var string
     */
    public $Name;
    /**
     * The Search_Committee
     * Meta information extracted from the WSDL
     * - documentation: Search Committee
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Search_Committee;
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - documentation: A boolean flag to set the committee type inactive.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Inactive;
    /**
     * Constructor method for Committee_Type_DataType
     * @uses Committee_Type_DataType::setID()
     * @uses Committee_Type_DataType::setName()
     * @uses Committee_Type_DataType::setSearch_Committee()
     * @uses Committee_Type_DataType::setInactive()
     * @param string $iD
     * @param string $name
     * @param bool $search_Committee
     * @param bool $inactive
     */
    public function __construct($iD = null, $name = null, $search_Committee = null, $inactive = null)
    {
        $this
            ->setID($iD)
            ->setName($name)
            ->setSearch_Committee($search_Committee)
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
     * @return \WorkdayWsdl\\StructType\Committee_Type_DataType
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
     * @return \WorkdayWsdl\\StructType\Committee_Type_DataType
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
     * Get Search_Committee value
     * @return bool|null
     */
    public function getSearch_Committee()
    {
        return $this->Search_Committee;
    }
    /**
     * Set Search_Committee value
     * @param bool $search_Committee
     * @return \WorkdayWsdl\\StructType\Committee_Type_DataType
     */
    public function setSearch_Committee($search_Committee = null)
    {
        // validation for constraint: boolean
        if (!is_null($search_Committee) && !is_bool($search_Committee)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($search_Committee, true), gettype($search_Committee)), __LINE__);
        }
        $this->Search_Committee = $search_Committee;
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
     * @return \WorkdayWsdl\\StructType\Committee_Type_DataType
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
     * @return \WorkdayWsdl\\StructType\Committee_Type_DataType
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
