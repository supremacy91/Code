fillDatabase
<?php
/**
 * Created by PhpStorm.
 * User: maks
 * Date: 17.08.17
 * Time: 15:25
 */

class Web4pro_Ddcdistribution_Model_Observer {

    public function fillDatabase() {


        $installer = new Mage_Eav_Model_Entity_Setup('core_setup');
        $installer->startSetup();


        $checkAttributeSetExists = $installer->getAttributeSet(4, "DDCAttributeSet", 'attribute_set_id');

        if (!$checkAttributeSetExists) {
            $skeletonID = $installer->getAttributeSetId('catalog_product', 'Default');
            $entityTypeId = Mage::getModel('catalog/product')
                ->getResource()
                ->getEntityType()
                ->getId();

            $attributeSet = Mage::getModel('eav/entity_attribute_set')
                ->setEntityTypeId($entityTypeId)
                ->setAttributeSetName("DDCAttributeSet");

            $attributeSet->validate();
            $attributeSet->save();

            $attributeSet->initFromSkeleton($skeletonID)->save();
        }


        $attributeId = Mage::getResourceModel('eav/entity_attribute')->getIdByCode('catalog_product','manufacturer');
        if ($attributeId) {
            $attribute = Mage::getResourceModel('catalog/eav_attribute')->load($attributeId);
            $attribute->setIsGlobal(1)->save();
            $attribute->setApplyTo("simple")->save();
            $attribute->setFrontendLabel("Manufacturer")->save();
            $attribute->setFrontendInput("select")->save();
            $attribute->setbackendType("int")->save();
            $attribute->setIsConfigurable(1)->save();
            $attribute->setIsSearchable(1)->save();
            $attribute->setIsVisibleInAdvancedSearch(1)->save();
            $attribute->setIsComparable(1)->save();
            $attribute->setIsFilterable(1)->save();
        }
        $attribute_set_id = $installer->getAttributeSetId('catalog_product', "DDCAttributeSet");
        $attribute_group_id = $installer->getAttributeGroupId('catalog_product', $attribute_set_id, "General");
        $attribute_id = $installer->getAttributeId('catalog_product', "manufacturer");
        $installer->addAttributeToSet($entityTypeId='catalog_product',$attribute_set_id, $attribute_group_id, $attribute_id);


        $installer->addAttribute('catalog_product', 'condition', array(
            'user_defined'    => 1
        ));
        $attributeId = Mage::getResourceModel('eav/entity_attribute')->getIdByCode('catalog_product','condition');
        if ($attributeId) {
            $attribute = Mage::getResourceModel('catalog/eav_attribute')->load($attributeId);
            $attribute->setIsGlobal(1)->save();
            $attribute->setApplyTo("simple")->save();
            $attribute->setFrontendLabel("Condition")->save();
            $attribute->setFrontendInput("select")->save();
            $attribute->setbackendType("int")->save();
            $attribute->setIsConfigurable(1)->save();
            $attribute->setIsSearchable(1)->save();
            $attribute->setIsVisibleInAdvancedSearch(1)->save();
            $attribute->setIsComparable(1)->save();
            $attribute->setIsFilterable(1)->save();
        }
        $attribute_set_id = $installer->getAttributeSetId('catalog_product', "DDCAttributeSet");
        $attribute_group_id = $installer->getAttributeGroupId('catalog_product', $attribute_set_id, "General");
        $attribute_id = $installer->getAttributeId('catalog_product', "condition");
        $installer->addAttributeToSet($entityTypeId='catalog_product',$attribute_set_id, $attribute_group_id, $attribute_id);


        $installer->addAttribute('catalog_product', 'software', array(
            'user_defined'    => 1
        ));
        $attributeId = Mage::getResourceModel('eav/entity_attribute')->getIdByCode('catalog_product','software');
        if ($attributeId) {
            $attribute = Mage::getResourceModel('catalog/eav_attribute')->load($attributeId);
            $attribute->setIsGlobal(1)->save();
            $attribute->setApplyTo("simple")->save();
            $attribute->setFrontendLabel("Software")->save();
            $attribute->setFrontendInput("select")->save();
            $attribute->setbackendType("int")->save();
            $attribute->setIsConfigurable(1)->save();
            $attribute->setIsSearchable(1)->save();
            $attribute->setIsVisibleInAdvancedSearch(1)->save();
            $attribute->setIsComparable(1)->save();
            $attribute->setIsFilterable(1)->save();
        }
        $attribute_set_id = $installer->getAttributeSetId('catalog_product', "DDCAttributeSet");
        $attribute_group_id = $installer->getAttributeGroupId('catalog_product', $attribute_set_id, "General");
        $attribute_id = $installer->getAttributeId('catalog_product', "software");
        $installer->addAttributeToSet($entityTypeId='catalog_product',$attribute_set_id, $attribute_group_id, $attribute_id);


        $installer->addAttribute('catalog_product', 'keyboard', array(
            'user_defined'    => 1
        ));
        $attributeId = Mage::getResourceModel('eav/entity_attribute')->getIdByCode('catalog_product','keyboard');
        if ($attributeId) {
            $attribute = Mage::getResourceModel('catalog/eav_attribute')->load($attributeId);
            $attribute->setIsGlobal(1)->save();
            $attribute->setApplyTo("simple")->save();
            $attribute->setFrontendLabel("Keyboard")->save();
            $attribute->setFrontendInput("select")->save();
            $attribute->setbackendType("int")->save();
            $attribute->setIsConfigurable(1)->save();
            $attribute->setIsSearchable(1)->save();
            $attribute->setIsVisibleInAdvancedSearch(1)->save();
            $attribute->setIsComparable(1)->save();
            $attribute->setIsFilterable(1)->save();
        }
        $attribute_set_id = $installer->getAttributeSetId('catalog_product', "DDCAttributeSet");
        $attribute_group_id = $installer->getAttributeGroupId('catalog_product', $attribute_set_id, "General");
        $attribute_id = $installer->getAttributeId('catalog_product', "keyboard");
        $installer->addAttributeToSet($entityTypeId='catalog_product',$attribute_set_id, $attribute_group_id, $attribute_id);


        $installer->addAttribute('catalog_product', 'item_category', array(
            'user_defined'    => 1
        ));
        $attributeId = Mage::getResourceModel('eav/entity_attribute')->getIdByCode('catalog_product','item_category');
        if ($attributeId) {
            $attribute = Mage::getResourceModel('catalog/eav_attribute')->load($attributeId);
            $attribute->setIsGlobal(1)->save();
            $attribute->setApplyTo("simple")->save();
            $attribute->setFrontendLabel("ItemCategory")->save();
            $attribute->setFrontendInput("select")->save();
            $attribute->setbackendType("int")->save();
            $attribute->setIsConfigurable(1)->save();
            $attribute->setIsSearchable(1)->save();
            $attribute->setIsVisibleInAdvancedSearch(1)->save();
            $attribute->setIsComparable(1)->save();
            $attribute->setIsFilterable(1)->save();
        }
        $attribute_set_id = $installer->getAttributeSetId('catalog_product', "DDCAttributeSet");
        $attribute_group_id = $installer->getAttributeGroupId('catalog_product', $attribute_set_id, "General");
        $attribute_id = $installer->getAttributeId('catalog_product', "item_category");
        $installer->addAttributeToSet($entityTypeId='catalog_product',$attribute_set_id, $attribute_group_id, $attribute_id);



        $installer->addAttribute('catalog_product', 'item_no', array(
            'user_defined'    => 1
        ));
        $attributeId = Mage::getResourceModel('eav/entity_attribute')->getIdByCode('catalog_product','item_no');
        if ($attributeId) {
            $attribute = Mage::getResourceModel('catalog/eav_attribute')->load($attributeId);
            $attribute->setIsGlobal(1)->save();
            $attribute->setApplyTo("simple")->save();
            $attribute->setFrontendLabel("ItemNo")->save();
            $attribute->setFrontendInput("text")->save();
            $attribute->setbackendType("varchar")->save();
        }
        $attribute_set_id = $installer->getAttributeSetId('catalog_product', "DDCAttributeSet");
        $attribute_group_id = $installer->getAttributeGroupId('catalog_product', $attribute_set_id, "General");
        $attribute_id = $installer->getAttributeId('catalog_product', "item_no");
        $installer->addAttributeToSet($entityTypeId='catalog_product',$attribute_set_id, $attribute_group_id, $attribute_id);


        $installer->addAttribute('catalog_product', 'vendor_item_no', array(
            'user_defined'    => 1
        ));
        $attributeId = Mage::getResourceModel('eav/entity_attribute')->getIdByCode('catalog_product','vendor_item_no');
        if ($attributeId) {
            $attribute = Mage::getResourceModel('catalog/eav_attribute')->load($attributeId);
            $attribute->setIsGlobal(1)->save();
            $attribute->setApplyTo("simple")->save();
            $attribute->setFrontendLabel("VendorItemNo")->save();
            $attribute->setFrontendInput("text")->save();
            $attribute->setbackendType("varchar")->save();
        }
        $attribute_set_id = $installer->getAttributeSetId('catalog_product', "DDCAttributeSet");
        $attribute_group_id = $installer->getAttributeGroupId('catalog_product', $attribute_set_id, "General");
        $attribute_id = $installer->getAttributeId('catalog_product', "vendor_item_no");
        $installer->addAttributeToSet($entityTypeId='catalog_product',$attribute_set_id, $attribute_group_id, $attribute_id);


        $installer->addAttribute('catalog_product', 'warranty', array(
            'user_defined'    => 1
        ));
        $attributeId = Mage::getResourceModel('eav/entity_attribute')->getIdByCode('catalog_product','warranty');
        if ($attributeId) {
            $attribute = Mage::getResourceModel('catalog/eav_attribute')->load($attributeId);
            $attribute->setIsGlobal(1)->save();
            $attribute->setApplyTo("simple")->save();
            $attribute->setFrontendLabel("Warranty")->save();
            $attribute->setFrontendInput("text")->save();
            $attribute->setbackendType("varchar")->save();
        }
        $attribute_set_id = $installer->getAttributeSetId('catalog_product', "DDCAttributeSet");
        $attribute_group_id = $installer->getAttributeGroupId('catalog_product', $attribute_set_id, "General");
        $attribute_id = $installer->getAttributeId('catalog_product', "warranty");
        $installer->addAttributeToSet($entityTypeId='catalog_product',$attribute_set_id, $attribute_group_id, $attribute_id);


        $installer->addAttribute('catalog_product', 'warranty_description', array(
            'user_defined'    => 1
        ));
        $attributeId = Mage::getResourceModel('eav/entity_attribute')->getIdByCode('catalog_product','warranty_description');
        if ($attributeId) {
            $attribute = Mage::getResourceModel('catalog/eav_attribute')->load($attributeId);
            $attribute->setIsGlobal(1)->save();
            $attribute->setApplyTo("simple")->save();
            $attribute->setFrontendLabel("WarrantyDescription")->save();
            $attribute->setFrontendInput("text")->save();
            $attribute->setbackendType("varchar")->save();
        }
        $attribute_set_id = $installer->getAttributeSetId('catalog_product', "DDCAttributeSet");
        $attribute_group_id = $installer->getAttributeGroupId('catalog_product', $attribute_set_id, "General");
        $attribute_id = $installer->getAttributeId('catalog_product', "warranty_description");
        $installer->addAttributeToSet($entityTypeId='catalog_product',$attribute_set_id, $attribute_group_id, $attribute_id);


        $installer->addAttribute('catalog_product', 'dcc_item_category', array(
            'user_defined'    => 1
        ));
        $attributeId = Mage::getResourceModel('eav/entity_attribute')->getIdByCode('catalog_product','dcc_item_category');
        if ($attributeId) {
            $attribute = Mage::getResourceModel('catalog/eav_attribute')->load($attributeId);
            $attribute->setIsGlobal(1)->save();
            $attribute->setApplyTo("simple")->save();
            $attribute->setFrontendLabel("DCCItemCategory")->save();
            $attribute->setFrontendInput("text")->save();
            $attribute->setbackendType("varchar")->save();
        }
        $attribute_set_id = $installer->getAttributeSetId('catalog_product', "DDCAttributeSet");
        $attribute_group_id = $installer->getAttributeGroupId('catalog_product', $attribute_set_id, "General");
        $attribute_id = $installer->getAttributeId('catalog_product', "dcc_item_category");
        $installer->addAttributeToSet($entityTypeId='catalog_product',$attribute_set_id, $attribute_group_id, $attribute_id);


        $installer->addAttribute('catalog_product', 'product_group', array(
            'user_defined'    => 1
        ));
        $attributeId = Mage::getResourceModel('eav/entity_attribute')->getIdByCode('catalog_product','product_group');
        if ($attributeId) {
            $attribute = Mage::getResourceModel('catalog/eav_attribute')->load($attributeId);
            $attribute->setIsGlobal(1)->save();
            $attribute->setApplyTo("simple")->save();
            $attribute->setFrontendLabel("ProductGroup")->save();
            $attribute->setFrontendInput("text")->save();
            $attribute->setbackendType("varchar")->save();
        }
        $attribute_set_id = $installer->getAttributeSetId('catalog_product', "DDCAttributeSet");
        $attribute_group_id = $installer->getAttributeGroupId('catalog_product', $attribute_set_id, "General");
        $attribute_id = $installer->getAttributeId('catalog_product', "product_group");
        $installer->addAttributeToSet($entityTypeId='catalog_product',$attribute_set_id, $attribute_group_id, $attribute_id);


        $installer->addAttribute('catalog_product', 'ean', array(
            'user_defined'    => 1
        ));
        $attributeId = Mage::getResourceModel('eav/entity_attribute')->getIdByCode('catalog_product','ean');
        if ($attributeId) {
            $attribute = Mage::getResourceModel('catalog/eav_attribute')->load($attributeId);
            $attribute->setIsGlobal(1)->save();
            $attribute->setApplyTo("simple")->save();
            $attribute->setFrontendLabel("EAN")->save();
            $attribute->setFrontendInput("text")->save();
            $attribute->setbackendType("varchar")->save();
        }
        $attribute_set_id = $installer->getAttributeSetId('catalog_product', "DDCAttributeSet");
        $attribute_group_id = $installer->getAttributeGroupId('catalog_product', $attribute_set_id, "General");
        $attribute_id = $installer->getAttributeId('catalog_product', "ean");
        $installer->addAttributeToSet($entityTypeId='catalog_product',$attribute_set_id, $attribute_group_id, $attribute_id);


        $installer->addAttribute('catalog_product', 'inventory', array(
            'user_defined'    => 1
        ));
        $attributeId = Mage::getResourceModel('eav/entity_attribute')->getIdByCode('catalog_product','inventory');
        if ($attributeId) {
            $attribute = Mage::getResourceModel('catalog/eav_attribute')->load($attributeId);
            $attribute->setIsGlobal(1)->save();
            $attribute->setApplyTo("simple")->save();
            $attribute->setFrontendLabel("Inventory")->save();
            $attribute->setFrontendInput("text")->save();
            $attribute->setbackendType("varchar")->save();
        }
        $attribute_set_id = $installer->getAttributeSetId('catalog_product', "DDCAttributeSet");
        $attribute_group_id = $installer->getAttributeGroupId('catalog_product', $attribute_set_id, "General");
        $attribute_id = $installer->getAttributeId('catalog_product', "inventory");
        $installer->addAttributeToSet($entityTypeId='catalog_product',$attribute_set_id, $attribute_group_id, $attribute_id);

        $installer->endSetup();


/*
        Input XML-file path: ftp://ftp.dcc.dk/DCCItems2.xml
        Input username: Heksimusltd
        Input password: TPfhxwsrr4vq6dpK
*/

        $resource = Mage::getSingleton('core/resource');
        $writeConnection = $resource->getConnection('core_write');
        $table = $resource->getTableName('ddcdistribution/ddcdistribution');

        $url = Mage::getStoreConfig('dcc/dccGroup/inputURL');
        $user = Mage::getStoreConfig('dcc/dccGroup/inputUsername');
        $password = Mage::getStoreConfig('dcc/dccGroup/inputPassword');

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_USERPWD, $user . ":" . $password);


        $xmlstr = curl_exec ($curl);
        curl_close($curl);
        $movies = new SimpleXMLElement($xmlstr);

            foreach ($movies->Items->Item as $item) {

                $itemNo = (string)$item['ItemNo'];
                $vendorItemNo = (string)$item['VendorItemNo'];
                $description = (string)$item['Description'];
                $manufacturer = (string)$item['Manufacturer'];
                $condition = (string)$item['Condition'];
                $warranty = (string)$item['Warranty'];
                $warrantyDescription = (string)$item['WarrantyDescription'];
                $software = (string)$item['Software'];
                $keyboard = (string)$item['Keyboard'];
                $dCCItemCategory = (string)$item['DCCItemCategory'];
                $itemCategory = (string)$item['ItemCategory'];
                $productGroup = (string)$item['ProductGroup'];
                $inventory = (string)$item['Inventory'];
                $ean = (string)$item['EAN'];

                foreach ($item->Price as $price) {
                    if ($price['Currency'] == "EUR") {
                        $price = ((string)$price['UnitPrice']);
                        break;
                    }
                }
                $writeConnection->insertOnDuplicate(
                    $table,
                    array("ItemNo" => $itemNo, "VendorItemNo" => $vendorItemNo, "Description" => $description,
                        "Manufacturer" => $manufacturer, "Conditionn" => $condition, "Warranty" => $warranty, "WarrantyDescription" => $warrantyDescription,
                        "Software" => $software, "Keyboard" => $keyboard, "DCCItemCategory" => $dCCItemCategory, "ItemCategory" => $itemCategory,
                        "ProductGroup" => $productGroup, "Inventory" => $inventory, "EAN" => $ean, "Price" => $price, "isInProduct" => "0")
                );

        }

    }

    public function importDatabase() {
echo "1_";
        $resource = Mage::getSingleton('core/resource');
        $writeConnection = $resource->getConnection('core_write');
        $readConnection = $resource->getConnection('core_read');
        $table = $resource->getTableName('catalog/product');

        $attributeSet = Mage::getModel('eav/entity_attribute_set');

        $product = Mage::getModel('ddcdistribution/ddcdistribution');

        $attributeSetCollection = $attributeSet->getCollection();
        $productCollection = $product->getCollection();

        foreach ($attributeSetCollection as $curAttributeSet) {
            if ($curAttributeSet['attribute_set_name'] == "DDCAttributeSet"){
                $attributeSetId = $curAttributeSet['attribute_set_id'];

            }
        }


        $x = 0;
        foreach ($productCollection as $curProduct) {


            $checkSku = $readConnection->fetchOne("SELECT entity_id FROM catalog_product_entity where sku=\"{$curProduct['ItemNo']}\"");
            if(!$checkSku) {
                $writeConnection->insertOnDuplicate(
                    $table,
                    array("entity_type_id" => 4, "attribute_set_id" => $attributeSetId,
                        "type_id" => 'simple', "sku" => $curProduct['ItemNo'], "created_at" => date("Y-m-d H:i:s"), "updated_at" => date("Y-m-d H:i:s"))

                );

            }

            $idProduct = $readConnection->fetchOne("SELECT entity_id FROM catalog_product_entity where sku=\"{$curProduct['ItemNo']}\"");
            $idStatus = $readConnection->fetchOne("SELECT attribute_id FROM eav_attribute where attribute_code='status'");
            $idVisibility = $readConnection->fetchOne("SELECT attribute_id FROM eav_attribute where attribute_code='visibility'");
            $idName = $readConnection->fetchOne("SELECT attribute_id FROM eav_attribute where attribute_code='name' and entity_type_id='4'");
            $idDescription = $readConnection->fetchOne("SELECT attribute_id FROM eav_attribute where attribute_code='description' and entity_type_id='4'");
            $idManufacturer = $readConnection->fetchOne("SELECT attribute_id FROM eav_attribute where attribute_code='manufacturer'");
            $idWarranty = $readConnection->fetchOne("SELECT attribute_id FROM eav_attribute where attribute_code='warranty'");
            $idWarrantyDescription = $readConnection->fetchOne("SELECT attribute_id FROM eav_attribute where attribute_code='warranty_description'");
            $idVendorItemNo = $readConnection->fetchOne("SELECT attribute_id FROM eav_attribute where attribute_code='vendor_item_no'");
            $idSoftware = $readConnection->fetchOne("SELECT attribute_id FROM eav_attribute where attribute_code='software'");
            $idCondition = $readConnection->fetchOne("SELECT attribute_id FROM eav_attribute where attribute_code='condition'");
            $idProductGroup = $readConnection->fetchOne("SELECT attribute_id FROM eav_attribute where attribute_code='product_group'");
            $idInventory = $readConnection->fetchOne("SELECT attribute_id FROM eav_attribute where attribute_code='inventory'");
            $idKeyboard = $readConnection->fetchOne("SELECT attribute_id FROM eav_attribute where attribute_code='keyboard'");
            $idDCCItemCategory = $readConnection->fetchOne("SELECT attribute_id FROM eav_attribute where attribute_code='dcc_item_category '");
            $idItemCategory = $readConnection->fetchOne("SELECT attribute_id FROM eav_attribute where attribute_code='item_category'");
            $idItemNo = $readConnection->fetchOne("SELECT attribute_id FROM eav_attribute where attribute_code='item_no'");
            $idWeight = $readConnection->fetchOne("SELECT attribute_id FROM eav_attribute where attribute_code='weight'");
            $idTax = $readConnection->fetchOne("SELECT attribute_id FROM eav_attribute where attribute_code='tax_class_id'");

            $idPrice = $readConnection->fetchOne("SELECT attribute_id FROM eav_attribute where attribute_code='price'");



            $writeConnection->insertOnDuplicate(
                'catalog_product_entity_int',
                array("entity_type_id" => 4, "attribute_id" => $idStatus,
                    "store_id" => 0, "entity_id" => $idProduct, "value" => 1)
            );

            $writeConnection->insertOnDuplicate(
                'catalog_product_entity_int',
                array("entity_type_id" => 4, "attribute_id" => $idVisibility,
                    "store_id" => 0, "entity_id" => $idProduct, "value" => 4)
            );


            $writeConnection->insertOnDuplicate(
                'catalog_product_entity_int',
                array("entity_type_id" => 4, "attribute_id" => $idTax,
                    "store_id" => 0, "entity_id" => $idProduct, "value" => 0)
            );


            $writeConnection->insertOnDuplicate(
                'catalog_product_entity_varchar',
                array("entity_type_id" => 4, "attribute_id" => $idName,
                    "store_id" => 0, "entity_id" => $idProduct, "value" => $curProduct['Description'])
            );

            $writeConnection->insertOnDuplicate(
                'catalog_product_entity_varchar',
                array("entity_type_id" => 4, "attribute_id" => $idWarranty,
                    "store_id" => 0, "entity_id" => $idProduct, "value" => $curProduct['Warranty'])
            );


            $writeConnection->insertOnDuplicate(
                'catalog_product_entity_varchar',
                array("entity_type_id" => 4, "attribute_id" => $idWarrantyDescription,
                    "store_id" => 0, "entity_id" => $idProduct, "value" => $curProduct['WarrantyDescription'])
            );

            $writeConnection->insertOnDuplicate(
                'catalog_product_entity_varchar',
                array("entity_type_id" => 4, "attribute_id" => $idVendorItemNo,
                    "store_id" => 0, "entity_id" => $idProduct, "value" => $curProduct['VendorItemNo'])
            );


            $writeConnection->insertOnDuplicate(
                'catalog_product_entity_varchar',
                array("entity_type_id" => 4, "attribute_id" => $idProductGroup,
                    "store_id" => 0, "entity_id" => $idProduct, "value" => $curProduct['ProductGroup'])
            );

            $writeConnection->insertOnDuplicate(
                'catalog_product_entity_varchar',
                array("entity_type_id" => 4, "attribute_id" => $idInventory,
                    "store_id" => 0, "entity_id" => $idProduct, "value" => $curProduct['Inventory'])
            );



            $writeConnection->insertOnDuplicate(
                'catalog_product_entity_varchar',
                array("entity_type_id" => 4, "attribute_id" => $idSoftware,
                    "store_id" => 0, "entity_id" => $idProduct, "value" => $curProduct['Software'])
            );

            $writeConnection->insertOnDuplicate(
                'catalog_product_entity_varchar',
                array("entity_type_id" => 4, "attribute_id" => $idDCCItemCategory,
                    "store_id" => 0, "entity_id" => $idProduct, "value" => $curProduct['DCCItemCategory'])
            );


            $writeConnection->insertOnDuplicate(
                'catalog_product_entity_varchar',
                array("entity_type_id" => 4, "attribute_id" => $idItemNo,
                    "store_id" => 0, "entity_id" => $idProduct, "value" => $curProduct['ItemNo'])
            );

            $writeConnection->insertOnDuplicate(
                'catalog_product_entity_text',
                array("entity_type_id" => 4, "attribute_id" => $idDescription,
                    "store_id" => 0, "entity_id" => $idProduct, "value" => $curProduct['Description'])
            );


            $option_id = $readConnection->fetchOne("SELECT option_id FROM eav_attribute_option_value where value=\"{$curProduct['Manufacturer']}\"
              and option_id in (select option_id from eav_attribute_option where attribute_id = \"$idManufacturer\")");

            if(!$option_id && trim($curProduct['Manufacturer']) !== "") {

                $writeConnection->insertOnDuplicate(
                    'eav_attribute_option',
                    array("attribute_id" => $idManufacturer, "sort_order" => 0)
                );
                $option_id = Mage::getSingleton('core/resource')->getConnection()->lastInsertId('eav_attribute_option', 'option_id');

                //  $option_id = Mage::getSingleton('core/resource')->getConnection()->lastInsertId('eav_attribute_option', 'option_id');
                //  $idOptionId = $readConnection->fetchOne("SELECT option_id FROM eav_attribute_option where attribute_code='manufacturer'");
                $writeConnection->insertOnDuplicate(
                    'eav_attribute_option_value',
                    array("option_id" => $option_id, "store_id" => 0, "value" => $curProduct['Manufacturer'])
                );
            }

            $option_id = $readConnection->fetchOne("SELECT option_id FROM eav_attribute_option_value where value=\"{$curProduct['Manufacturer']}\"
              and option_id in (select option_id from eav_attribute_option where attribute_id = \"$idManufacturer\")");


                $writeConnection->insertOnDuplicate(
                    'catalog_product_entity_int',
                    array("entity_type_id" => 4, "attribute_id" => $idManufacturer,
                        "store_id" => 0, "entity_id" => $idProduct, "value" => $option_id)
                );


            $option_id_software = $readConnection->fetchOne("SELECT option_id FROM eav_attribute_option_value where value=\"{$curProduct['Software']}\"
              and option_id in (select option_id from eav_attribute_option where attribute_id = \"$idSoftware\")");


            if(!$option_id_software && trim($curProduct['Software']) !== "") {
                $writeConnection->insertOnDuplicate(
                    'eav_attribute_option',
                    array("attribute_id" => $idSoftware, "sort_order" => 0)
                );

                $option_id_software = Mage::getSingleton('core/resource')->getConnection()->lastInsertId('eav_attribute_option', 'option_id');

                $writeConnection->insertOnDuplicate(
                    'eav_attribute_option_value',
                    array("option_id" => $option_id_software, "store_id" => 0, "value" => $curProduct['Software'])
                );
            }

            $option_id_software = $readConnection->fetchOne("SELECT option_id FROM eav_attribute_option_value where value=\"{$curProduct['Software']}\"
              and option_id in (select option_id from eav_attribute_option where attribute_id = \"$idSoftware\")");

            $writeConnection->insertOnDuplicate(
                'catalog_product_entity_int',
                array("entity_type_id" => 4, "attribute_id" => $idSoftware,
                    "store_id" => 0, "entity_id" => $idProduct, "value" => $option_id_software)
            );

            $option_id_condition = $readConnection->fetchOne("SELECT option_id FROM eav_attribute_option_value where value=\"{$curProduct['Conditionn']}\"
              and option_id in (select option_id from eav_attribute_option where attribute_id = \"$idCondition\")");
            //$option_id_condition = $readConnection->fetchOne("SELECT option_id FROM eav_attribute_option_value where value=\"{$curProduct['Conditionn']}\"");
            if(!$option_id_condition && trim($curProduct['Conditionn']) !== "") {
                $writeConnection->insertOnDuplicate(
                    'eav_attribute_option',
                    array("attribute_id" => $idCondition, "sort_order" => 0)
                );

                $option_id_condition = Mage::getSingleton('core/resource')->getConnection()->lastInsertId('eav_attribute_option', 'option_id');

                $writeConnection->insertOnDuplicate(
                    'eav_attribute_option_value',
                    array("option_id" => $option_id_condition, "store_id" => 0, "value" => $curProduct['Conditionn'])
                );
            }

            $option_id_condition = $readConnection->fetchOne("SELECT option_id FROM eav_attribute_option_value where value=\"{$curProduct['Conditionn']}\"
              and option_id in (select option_id from eav_attribute_option where attribute_id = \"$idCondition\")");

            $writeConnection->insertOnDuplicate(
                'catalog_product_entity_int',
                array("entity_type_id" => 4, "attribute_id" => $idCondition,
                    "store_id" => 0, "entity_id" => $idProduct, "value" => $option_id_condition)
            );

            $option_id_keyboard = $readConnection->fetchOne("SELECT option_id FROM eav_attribute_option_value where value=\"{$curProduct['Keyboard']}\"
              and option_id in (select option_id from eav_attribute_option where attribute_id = \"$idKeyboard\")");

            if(!$option_id_keyboard && trim($curProduct['Keyboard']) !== "") {
                $writeConnection->insertOnDuplicate(
                    'eav_attribute_option',
                    array("attribute_id" => $idKeyboard, "sort_order" => 0)
                );

                $option_id_keyboard = Mage::getSingleton('core/resource')->getConnection()->lastInsertId('eav_attribute_option', 'option_id');

                $writeConnection->insertOnDuplicate(
                    'eav_attribute_option_value',
                    array("option_id" => $option_id_keyboard, "store_id" => 0, "value" => $curProduct['Keyboard'])
                );
            }

            $option_id_keyboard = $readConnection->fetchOne("SELECT option_id FROM eav_attribute_option_value where value=\"{$curProduct['Keyboard']}\"
              and option_id in (select option_id from eav_attribute_option where attribute_id = \"$idKeyboard\")");
            $writeConnection->insertOnDuplicate(
                'catalog_product_entity_int',
                array("entity_type_id" => 4, "attribute_id" => $idKeyboard,
                    "store_id" => 0, "entity_id" => $idProduct, "value" => $option_id_keyboard)
            );
            // }

            $option_id_category = $readConnection->fetchOne("SELECT option_id FROM eav_attribute_option_value where value=\"{$curProduct['ItemCategory']}\"
              and option_id in (select option_id from eav_attribute_option where attribute_id = \"$idItemCategory\")");

            if(!$option_id_category && trim($curProduct['ItemCategory']) !== "") {
                $writeConnection->insertOnDuplicate(
                    'eav_attribute_option',
                    array("attribute_id" => $idItemCategory, "sort_order" => 0)
                );

                $option_id_category = Mage::getSingleton('core/resource')->getConnection()->lastInsertId('eav_attribute_option', 'option_id');

                $writeConnection->insertOnDuplicate(
                    'eav_attribute_option_value',
                    array("option_id" => $option_id_category, "store_id" => 0, "value" => $curProduct['ItemCategory'])
                );
            }

            $option_id_category = $readConnection->fetchOne("SELECT option_id FROM eav_attribute_option_value where value=\"{$curProduct['ItemCategory']}\"
              and option_id in (select option_id from eav_attribute_option where attribute_id = \"$idItemCategory\")");

            $writeConnection->insertOnDuplicate(
                'catalog_product_entity_int',
                array("entity_type_id" => 4, "attribute_id" => $idItemCategory,
                    "store_id" => 0, "entity_id" => $idProduct, "value" => $option_id_category)
            );

            $writeConnection->insertOnDuplicate(
                'catalog_product_entity_decimal',
                array("entity_type_id" => 4, "attribute_id" => $idPrice,
                    "store_id" => 0, "entity_id" => $idProduct, "value" => $curProduct['Price'])
            );

            $writeConnection->insertOnDuplicate(
                'catalog_product_entity_decimal',
                array("entity_type_id" => 4, "attribute_id" => $idWeight,
                    "store_id" => 0, "entity_id" => $idProduct, "value" => 1)
            );


            $writeConnection->insertOnDuplicate(
                'cataloginventory_stock_item',
                array("product_id" => $idProduct,
                    "stock_id" => 1, "qty" => $curProduct['Inventory'], "min_qty" => 0, "use_config_min_qty" => 1,
                    "is_qty_decimal" => 0, "backorders" => 0, "use_config_backorders" => 1, "min_sale_qty" => 1, "use_config_min_sale_qty" => 1,
                    "max_sale_qty" => 0, "use_config_max_sale_qty" => 1, "is_in_stock" => 1, "use_config_notify_stock_qty" => 1,
                    "manage_stock" => 0, "use_config_manage_stock" => 1, "stock_status_changed_auto" => 0, "use_config_qty_increments" =>1,
                    "qty_increments" => 0, "use_config_enable_qty_inc" => 1, "enable_qty_increments" => 0, "is_decimal_divided" => 0)
            );


           /*
                UPS - 		Biuro įranga ir reikmenys -> Nepertraukiamos srovės šaltiniai (UPS)
                PC-CPU - 	Kompiuterių komponentai -> Procesoriai (CPU)
                PC-			Kompiuterija -> Stacionarieji kompiuteriai
                PC-OPT,
                SPARE,
                NOTE-OPT - 	Kompiuterių komponentai (all products DISABLED)
                Serv-OPT,
                Serv-CPU,
                Stor-opt - 	Kompiuterių komponentai -> Serverių komponentai
                Server -	Kompiuterija -> Serveriai
                CABLE -		Periferija ir priedai -> Kabeliai ir adapteriai
                KEYBOARD -	Periferija ir priedai -> Klaviatūros
                MONITOR -	Audio ir Video -> Monitoriai
                NETWORK -	Tinklo Įranga (all disabled)
                NOTEBOOK -	Kompiuterija -> Nešiojamieji kompiuteriai
                PRINTER -	Biuro įranga ir reikmenys -> Spausdintuvai
                SOFTWARE -	Programinė įranga (all disabled)
                STORAGE -	Tinklo įranga -> NAS talpyklos
            */

            $categories = array (
                                 'ups' => "Nepertraukiamos srovės šaltiniai (UPS)",
                                 'pc-cpu' => "Procesoriai (CPU)",
                                 'pc' => "Stacionarieji kompiuteriai",
                                 'pc-opt' => "Kompiuterių komponentai",
                                 'spare' => "Kompiuterių komponentai",
                                 'note-opt' => "Kompiuterių komponentai",
                                 'serv-opt' => "Serverių komponentai",
                                 'serv-cpu' => "Serverių komponentai",
                                 'stor-opt' => "Serverių komponentai",
                                 'server' => "Serveriai",
                                 'cable' => 'Kabeliai ir adapteriai',
                                 'keyboard' => 'Klaviatūros',
                                 'monitor' => 'Monitoriai',
                                 'network' => 'Tinklo Įranga',
                                 'notebook' => 'Nešiojamieji kompiuteriai',
                                 'printer' => 'Spausdintuvai',
                                 'software' => 'Programinė įranga',
                                 'storage' => 'NAS talpyklos'
                                );


           var_dump($categories[$curProduct['ItemCategory']]);
           var_dump($curProduct['ItemCategory']);

           // $nameCategory = $readConnection->fetchOne("SELECT entity_id FROM catalog_category_entity_varchar where value='Procesoriai (CPU)'");
            $idCategory = $readConnection->fetchOne("SELECT attribute_id FROM eav_attribute where attribute_code='name' and entity_type_id='3'");
            $categoryName = $categories[mb_strtolower($curProduct['ItemCategory'])];

            if ($categoryName) {
                $idCategoryNumberCustom = $readConnection->fetchOne("SELECT entity_id FROM catalog_category_entity_varchar where attribute_id=$idCategory and value=\"$categoryName\"");
            }

            $idCategoryNumberDefault = $readConnection->fetchOne("SELECT entity_id FROM catalog_category_entity_varchar where attribute_id=$idCategory and value='Default Category'");


            $writeConnection->insertOnDuplicate(
                'catalog_product_website',
                array("product_id" => $idProduct, "website_id" => 1)
            );
            if ($idCategoryNumberCustom) {
                $writeConnection->insertOnDuplicate(
                    'catalog_category_product',
                    array("product_id" => $idProduct, "category_id" => $idCategoryNumberCustom)
                );
            }


            $x++;

            echo "{$x}_";


        }

        $indexCollection = Mage::getModel('index/process')->getCollection();
        foreach ($indexCollection as $index) {
            $index->reindexAll();
        }

        $indexCollection = Mage::getModel('index/process')->getCollection();
        foreach ($indexCollection as $index) {
            $index->reindexAll();
        }

    }
}

