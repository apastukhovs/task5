<?   
include 'config.php';
include 'libs/iWorkData.php';
include 'libs/Json.php';
include 'libs/Ini.php';
include 'libs/Cookie.php';
include 'libs/Session.php';
include 'libs/Sql.php';

$coockieData = new Cookie();
$coockieData->saveData('name', 'Jack');
$coockie = $coockieData->getData('name');

$sessionData = (new Session())->saveData('Hello', 'Mickel');
$sessionGetData = (new Session())->getData('Hello');
$iniData = (new Ini())->saveData('xml', '9');
$iniData2 = (new Ini())->saveData('php', '12');
$iniData3 = (new Ini())->saveData('html', '12');
$deleteIni = (new Ini())->deleteData('html');

$jsonData = new Json();
$jsonData->saveData('luck', '12');
$jsonData->saveData('john', '15');

$jsonData3 = (new Json())->getData('john');


/*$objCookie->deleteData('name');
/*$jsonData4 = (new Json())->deleteData('luck');
var_dump($jsonData4);

/*$cookData = (new Cookie())->saveData('Hello', 'Jack');
$cookGetData = (new Cookie())->getData('Hello');


$sqlConnect= new Sql(DB_NAME, DB_HOST, DB_USER, DB_PASS);

$sqlConnect->saveData('12', 'Ricky');
$sqlConnect->saveData('13', 'Jack');
$sqlConnect->saveData('17', 'Rororow');
$sqlGetData = $sqlConnect->getData('17');
$sqlDelete->deleteData('17');


var_dump($jsonData3);
var_dump($jsonGetData);



//var_dump($cookGetData);
//var_dump($sessionGetData);*/

include 'template/index.php';
?>