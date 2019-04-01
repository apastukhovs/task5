<?
class Sql implements iWorkData {
	private $pdo;
	private $stmt;
	private $error;
	public function __construct($db, $host, $user, $pass) {
		$link = 'mysql:dbname='.$db.';host='.$host;
		
		try {
			$this->pdo = new PDO($link, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		} catch (PDOException $e) {  
			$this->error = $e->getMessage();  
			
		} 
	}
	public function saveData($key, $val) {
		$stmt = $this->pdo->prepare("insert into user (id, name) values (:key, :val)");
		$stmt->bindParam(':key', $key);
		$stmt->bindParam(':val', $val);
		$stmt->execute();
		var_dump($stmt);
	}
    public function getData($key) {
		$stmt = $this->pdo->prepare("select * from user where id = :key");
		$stmt->bindParam(':key', $key);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	public function deleteData($key) {
		$stmt = $this->pdo->prepare("delete from user where id = :key limit 1");
		$stmt->bindParam(':key', $key);
		$stmt->execute();
	}
	public function CloseConnection() {
		$this->pdo = null;
	}
}