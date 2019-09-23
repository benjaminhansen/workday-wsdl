<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Skill_Item_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Checks to see if the Skill Item name already exists to prevent duplicates. | Contains all the information about the Skill Item.
 * @subpackage Structs
 */
class Skill_Item_DataType extends AbstractStructBase
{
    /**
     * The Category_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to the Skill Item Category associated with the Skill Item.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Skill_Item_CategoryObjectType
     */
    public $Category_Reference;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: The ID of the skill item.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Hide_from_Candidates
     * Meta information extracted from the WSDL
     * - documentation: When true, this Skill Item will not be shown to candidates.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Hide_from_Candidates;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: The name of the skill item.
     * @var string
     */
    public $Name;
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - documentation: When true, the Skill Item is inactive.
     * @var bool
     */
    public $Inactive;
    /**
     * Constructor method for Skill_Item_DataType
     * @uses Skill_Item_DataType::setCategory_Reference()
     * @uses Skill_Item_DataType::setID()
     * @uses Skill_Item_DataType::setHide_from_Candidates()
     * @uses Skill_Item_DataType::setName()
     * @uses Skill_Item_DataType::setInactive()
     * @param \WorkdayWsdl\\StructType\Skill_Item_CategoryObjectType $category_Reference
     * @param string $iD
     * @param bool $hide_from_Candidates
     * @param string $name
     * @param bool $inactive
     */
    public function __construct(\WorkdayWsdl\\StructType\Skill_Item_CategoryObjectType $category_Reference = null, $iD = null, $hide_from_Candidates = null, $name = null, $inactive = null)
    {
        $this
            ->setCategory_Reference($category_Reference)
            ->setID($iD)
            ->setHide_from_Candidates($hide_from_Candidates)
            ->setName($name)
            ->setInactive($inactive);
    }
    /**
     * Get Category_Reference value
     * @return \WorkdayWsdl\\StructType\Skill_Item_CategoryObjectType|null
     */
    public function getCategory_Reference()
    {
        return $this->Category_Reference;
    }
    /**
     * Set Category_Reference value
     * @param \WorkdayWsdl\\StructType\Skill_Item_CategoryObjectType $category_Reference
     * @return \WorkdayWsdl\\StructType\Skill_Item_DataType
     */
    public function setCategory_Reference(\WorkdayWsdl\\StructType\Skill_Item_CategoryObjectType $category_Reference = null)
    {
        $this->Category_Reference = $category_Reference;
        return $this;
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
     * @return \WorkdayWsdl\\StructType\Skill_Item_DataType
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
     * Get Hide_from_Candidates value
     * @return bool|null
     */
    public function getHide_from_Candidates()
    {
        return $this->Hide_from_Candidates;
    }
    /**
     * Set Hide_from_Candidates value
     * @param bool $hide_from_Candidates
     * @return \WorkdayWsdl\\StructType\Skill_Item_DataType
     */
    public function setHide_from_Candidates($hide_from_Candidates = null)
    {
        // validation for constraint: boolean
        if (!is_null($hide_from_Candidates) && !is_bool($hide_from_Candidates)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hide_from_Candidates, true), gettype($hide_from_Candidates)), __LINE__);
        }
        $this->Hide_from_Candidates = $hide_from_Candidates;
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
     * @return \WorkdayWsdl\\StructType\Skill_Item_DataType
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
     * @return \WorkdayWsdl\\StructType\Skill_Item_DataType
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
     * @return \WorkdayWsdl\\StructType\Skill_Item_DataType
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
