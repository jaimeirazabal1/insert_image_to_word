	<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	?>
<?php
/**
* This sample script inserts a centered image
 */
require_once 'docxpresso/CreateDocument.inc';
$doc = new Docxpresso\CreateDocument();
$format = '.doc';//.pdf, .doc, .docx, .odt, .rtf
//insert some text
$doc->paragraph(array('text' => 'A centered image:'));
//insert an image
$doc->paragraph()->style('text-align: center;')
		->image(array('src' => 'software-developer-success.jpg','style' => ' margin-top: 6.3cm;width:5cm'));
//insert some text
$doc->paragraph(array('text' => 'A final sentence.'));
//include in the render method the path where you want your document to be saved
$doc->render('simple_centered_image' . $format); 
//echo a link to the generated document
echo 'You may download the generated document from the link below:<br/>';
echo '<a href="' . 'simple_centered_image' . $format . '">Download document</a>';