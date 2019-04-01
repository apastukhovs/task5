<?
class Session implements iWorkData {
	public function saveData($key, $val) {
		$_SESSION[$key] = $val;
	}
    public function getData($key) {
		if (isset($_SESSION[$key])){
			return $_SESSION[$key];
		}
	}
	public function deleteData($key) {
		if (isset($_SESSION[$key])){
			unset($_SESSION[$key]);
		}
	}
}