<?php
class Cookie implements iWorkData
{
	public function saveData($key, $val)
	{
		setcookie($key, $val, time()+3600);
	}
    public function getData($key)
	{
		if (isset($_COOKIE[$key])) {
			return $_COOKIE[$key];
		}
	}
	public function deleteData($key)
	{
		if (isset($_COOKIE[$key])) {
			setcookie($key, '');
		}
	}
}