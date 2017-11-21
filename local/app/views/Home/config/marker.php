<?php 
// Start XML file, create parent node
$doc = domxml_new_doc("1.0");
$node = $doc->create_element("markers");
$parnode = $doc->append_child($node);


header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each
foreach($this->location as $locations){
  // Add to XML document node
  $node = $doc->create_element("marker");
  $newnode = $parnode->append_child($node);

  $newnode->set_attribute("name", $location->name);
  $newnode->set_attribute("lat",  $location->latitude);
  $newnode->set_attribute("lng",  $location->longitue);
}

$xmlfile = $doc->dump_mem();
echo $xmlfile;

?>