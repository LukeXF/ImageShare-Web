<?PHP
$path = '/var/www/html/luke/root-images/';
$uri  = 'http://i.luke.sx/';
if (!isset($_FILES['imagedata']['error']) || $_FILES['imagedata']['size'] < 1) {
  echo $uri, 'invalid.png';
  exit;
}
$i = 0;
do {
$filename = substr(md5(time() . $i++), - 4) . '.png';
  $filepath = "$path$filename";
} while ( file_exists($filepath) );
if ( !move_uploaded_file($_FILES['imagedata']['tmp_name'], $filepath) ) {
  echo $uri, 'error.png'; 
  exit;
}
echo $uri, $filename;

?>