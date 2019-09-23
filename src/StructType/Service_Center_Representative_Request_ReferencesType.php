<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Service_Center_Representative_Request_ReferencesType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Request References
 * @subpackage Structs
 */
class Service_Center_Representative_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Service_Center_Representative_Reference
     * Meta information extracted from the WSDL
     * - documentation: Service Center Representative Reference
     * - maxOccurs: unbounded
     * @var \WorkdayWsdl\\StructType\Service_Center_RepresentativeObjectType[]
     */
    public $Service_Center_Representative_Reference;
    /**
     * Constructor method for Service_Center_Representative_Request_ReferencesType
     * @uses Service_Center_Representative_Request_ReferencesType::setService_Center_Representative_Reference()
     * @param \WorkdayWsdl\\StructType\Service_Center_RepresentativeObjectType[] $service_Center_Representative_Reference
     */
    public function __construct(array $service_Center_Representative_Reference = array())
    {
        $this
            ->setService_Center_Representative_Reference($service_Center_Representative_Reference);
    }
    /**
     * Get Service_Center_Representative_Reference value
     * @return \WorkdayWsdl\\StructType\Service_Center_RepresentativeObjectType[]|null
     */
    public function getService_Center_Representative_Reference()
    {
        return $this->Service_Center_Representative_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setService_Center_Representative_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setService_Center_Representative_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateService_Center_Representative_ReferenceForArrayConstraintsFromSetService_Center_Representative_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $service_Center_Representative_Request_ReferencesTypeService_Center_Representative_ReferenceItem) {
            // validation for constraint: itemType
            if (!$service_Center_Representative_Request_ReferencesTypeService_Center_Representative_ReferenceItem instanceof \WorkdayWsdl\\StructType\Service_Center_RepresentativeObjectType) {
                $invalidValues[] = is_object($service_Center_Representative_Request_ReferencesTypeService_Center_Representative_ReferenceItem) ? get_class($service_Center_Representative_Request_ReferencesTypeService_Center_Representative_ReferenceItem) : sprintf('%s(%s)', gettype($service_Center_Representative_Request_ReferencesTypeService_Center_Representative_ReferenceItem), var_export($service_Center_Representative_Request_ReferencesTypeService_Center_Representative_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Service_Center_Representative_Reference property can only contain items of type \WorkdayWsdl\\StructType\Service_Center_RepresentativeObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Service_Center_Representative_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Service_Center_RepresentativeObjectType[] $service_Center_Representative_Reference
     * @return \WorkdayWsdl\\StructType\Service_Center_Representative_Request_ReferencesType
     */
    public function setService_Center_Representative_Reference(array $service_Center_Representative_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($service_Center_Representative_ReferenceArrayErrorMessage = self::validateService_Center_Representative_ReferenceForArrayConstraintsFromSetService_Center_Representative_Reference($service_Center_Representative_Reference))) {
            throw new \InvalidArgumentException($service_Center_Representative_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Service_Center_Representative_Reference = $service_Center_Representative_Reference;
        return $this;
    }
    /**
     * Add item to Service_Center_Representative_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Service_Center_RepresentativeObjectType $item
     * @return \WorkdayWsdl\\StructType\Service_Center_Representative_Request_ReferencesType
     */
    public function addToService_Center_Representative_Reference(\WorkdayWsdl\\StructType\Service_Center_RepresentativeObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Service_Center_RepresentativeObjectType) {
            throw new \InvalidArgumentException(sprintf('The Service_Center_Representative_Reference property can only contain items of type \WorkdayWsdl\\StructType\Service_Center_RepresentativeObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Service_Center_Representative_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Service_Center_Representative_Request_ReferencesType
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
