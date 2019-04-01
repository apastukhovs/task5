<?
class Json implements iWorkData {
    private $data;

    public function __construct() {
        $this->data = [];
    }

    public function getData($key) {
        if (isset($key) && file_get_contents(JSON_FILE)) {
            $key = trim($key);
            $jsonData = file_get_contents(JSON_FILE);
            $decodeData = json_decode($jsonData, true);
            if ($decodeData[$key]){
                return $decodeData[$key];
            }
            return false;
        }
        return false;
    }

    public function saveData($key, $val) {
        if (isset($key)) {
            $key = trim($key);
            $this->data += array($key => $val);
            file_put_contents(JSON_FILE, json_encode($this->data), JSON_FORCE_OBJECT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
            return true;
        }
        return false;
    }

    public function deleteData($key) {
        if (isset($key) && file_get_contents(JSON_FILE)) {
            $key = trim($key);
            $jsonData = file_get_contents(JSON_FILE);
            $decodeData = json_decode($jsonData, true);
            foreach($decodeData as $current => $val)
                {
                    if (in_array($current, $val))
                    {
                        unset($decodeData[$current]);
                        file_put_contents(JSON_FILE, json_encode($decodeData));
                        return true;
                    }
                }
                return false;
        }
        return false;
    }
}