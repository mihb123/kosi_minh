<?php
class AddressController
{
    function getDistricts()
    {
        $province_id = $_GET['province_id'];
        $districtRepo = new DistrictRepo;
        $districts = $districtRepo->getByProvince($province_id);
        $arr = $this->convertToArray($districts);
        echo json_encode($arr);
    }

    function getWards()
    {
        $district_id = $_GET['district_id'];
        $wardRepo = new WardRepo;
        $wards = $wardRepo->getByDistrict($district_id);
        $arr = $this->convertToArray($wards);
        echo json_encode($arr);
    }

    function convertToArray($objects)
    {
        $array = array();
        foreach ($objects as $object) {
            $array[] = array("id" => $object->getId(), "name" => $object->getName());
        }
        return $array;
    }
}