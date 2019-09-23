<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Development_ItemType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the reference to the Development Item and the Development Item details
 * @subpackage Structs
 */
class Worker_Development_ItemType extends AbstractStructBase
{
    /**
     * The Development_Item_Reference
     * Meta information extracted from the WSDL
     * - documentation: The reference to the Development Item
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Development_ItemObjectType
     */
    public $Development_Item_Reference;
    /**
     * The Development_Item_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Development_Item_Version_DataType
     */
    public $Development_Item_Data;
    /**
     * Constructor method for Worker_Development_ItemType
     * @uses Worker_Development_ItemType::setDevelopment_Item_Reference()
     * @uses Worker_Development_ItemType::setDevelopment_Item_Data()
     * @param \WorkdayWsdl\\StructType\Development_ItemObjectType $development_Item_Reference
     * @param \WorkdayWsdl\\StructType\Development_Item_Version_DataType $development_Item_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Development_ItemObjectType $development_Item_Reference = null, \WorkdayWsdl\\StructType\Development_Item_Version_DataType $development_Item_Data = null)
    {
        $this
            ->setDevelopment_Item_Reference($development_Item_Reference)
            ->setDevelopment_Item_Data($development_Item_Data);
    }
    /**
     * Get Development_Item_Reference value
     * @return \WorkdayWsdl\\StructType\Development_ItemObjectType|null
     */
    public function getDevelopment_Item_Reference()
    {
        return $this->Development_Item_Reference;
    }
    /**
     * Set Development_Item_Reference value
     * @param \WorkdayWsdl\\StructType\Development_ItemObjectType $development_Item_Reference
     * @return \WorkdayWsdl\\StructType\Worker_Development_ItemType
     */
    public function setDevelopment_Item_Reference(\WorkdayWsdl\\StructType\Development_ItemObjectType $development_Item_Reference = null)
    {
        $this->Development_Item_Reference = $development_Item_Reference;
        return $this;
    }
    /**
     * Get Development_Item_Data value
     * @return \WorkdayWsdl\\StructType\Development_Item_Version_DataType|null
     */
    public function getDevelopment_Item_Data()
    {
        return $this->Development_Item_Data;
    }
    /**
     * Set Development_Item_Data value
     * @param \WorkdayWsdl\\StructType\Development_Item_Version_DataType $development_Item_Data
     * @return \WorkdayWsdl\\StructType\Worker_Development_ItemType
     */
    public function setDevelopment_Item_Data(\WorkdayWsdl\\StructType\Development_Item_Version_DataType $development_Item_Data = null)
    {
        $this->Development_Item_Data = $development_Item_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Worker_Development_ItemType
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
