<?
class Ini implements iWorkData {
    public function getData($key = '') {
        if (! self::guardFileExists()) {
            return false;
        }

        $data = $this->getRawData();

        return isset($data[$key])
            ? $data[$key]
            : false;

    }

    public function saveData($key = '', $val = '') {
        if (! self::guardFileExists()) {
            return false;
        }
        $this->deleteData($key);

        $line = "$key = $val\n";
        file_put_contents(INI_FILE, $line, FILE_APPEND);

        return true;
    }

    public function deleteData($key = '') {
        if (! self::guardFileExists()) {
            return false;
        }

        if (! $this->getData($key)) {
            return false;
        }

        $data = $this->getRawData();

        unset($data[$key]);

        $line = '';
        foreach ($data as $kk => $val) {
            $line .= "$kk = $val\n";
        }

        file_put_contents(INI_FILE, $line);

        return true;
    }

    private function getRawData() {
        return parse_ini_file(INI_FILE);
    }

    private static function guardFileExists() {
        return file_exists(INI_FILE);
    }
}

//$data = (new Ini())->saveData('php', '13');

//var_dump($data);