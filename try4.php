	<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	?>
<?php
/**
* This sample script inserts a centered image
 */
require_once 'docxpresso/CreateDocument.inc';
$doc = new Docxpresso\CreateDocument(array('template' => 'test_template.odt'));
$format = '.doc';//.pdf, .doc, .docx, .odt, .rtf
//replace images
$doc->replace(array('myImage' => array('value' => 'prueba.png', 'image' => true)));
//in the second one we will change the original image dimensions
$doc->replace(array('myImage_2' => array('value' => 'prueba.png', 'image' => true, 'width' => '400px', 'height' => '200px',"border"=>"0px")));
//include in the render method the path where you want your document to be saved
$doc->render('replace_image' . $format); 
//echo a link to the generated document
echo 'You may download the generated document from the link below:<br/>';
echo '<a href="' . 'replace_image' . $format . '">Download document</a>'; 