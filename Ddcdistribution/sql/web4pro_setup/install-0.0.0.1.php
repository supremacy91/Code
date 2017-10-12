<?php


$installer = $this;

$installer->startSetup();

$installer->run("

CREATE TABLE {$this->getTable('ddcdistribution/ddcdistribution')} (
  ItemNo varchar(255) PRIMARY KEY,
  VendorItemNo varchar(255),
  Description varchar(255),
  Manufacturer varchar(255),
  Conditionn varchar(255),
  Warranty varchar(255),
  WarrantyDescription varchar(255),
  Software varchar(255),
  Keyboard varchar(255),
  DCCItemCategory varchar(255),
  ItemCategory varchar(255),
  ProductGroup varchar(255),
  Inventory varchar(255),
  EAN varchar(255),
  Price DECIMAL (10, 4),
  IsInProduct int(1)
);



");

