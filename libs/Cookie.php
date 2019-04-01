<?
class Cookie implements iWorkData {
	public function saveData($key, $val) {
		setcookie($key, $val);
	}
    public function getData($key) {
		if (isset($_COOKIE[$key])) {
			return $_COOKIE[$key];
		}
	}
	public function deleteData($key) {
		if (isset($_COOKIE[$key])) {
			setcookie($key, '');
		}
	}
}