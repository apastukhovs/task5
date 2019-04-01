<?   
include 'config.php';
include 'libs/iWorkData.php';
include 'libs/Json.php';
include 'libs/Ini.php';
include 'libs/Cookie.php';
include 'libs/Session.php';
include 'libs/Sql.php';


$iniData = (new Ini())->saveData('xml', '9');
$iniData2 = (new Ini())->saveData('php', '12');
$iniData3 = (new Ini())->saveData('html', '12');
$deleteIni = (new Ini())->deleteData('html');
$jsonData2 = (new Json())->saveData('luck', '12');
$jsonGetData = (new Json())->getData('need');
$cookData = (new Cookie())->saveData('Hello', 'Jack');
$cookGetData = (new Cookie())->getData('Hello');
$sessionData = (new Session())->saveData('Hello', 'Mickel');
$sessionGetData = (new Session())->getData('Hello');

$sqlConnect= new Sql(DB_NAME, DB_HOST, DB_USER, DB_PASS);

$sqlConnect->saveData('12', 'Ricky');
$sqlGetData = $sqlConnect->getData('12');

var_dump($sqlGetData);
var_dump($jsonGetData);



//var_dump($cookGetData);
//var_dump($sessionGetData);

include 'template/index.php';
?>