<?php

namespace App\Core;

class File
{
    private $path;
    private $name;
    public $name2;

    // TODO3 : method delete ezafe shavad
    // TODO4 : dar sorat edit ya delete user akas ghadimi profile vey niz hazf 

    public function __construct(string $path, bool $uploaded = false)
    {
        if ($uploaded) {
            $this->name = $path;
            $this->path = $_FILES[$path]['tmp_name'];
            $this->name2 = strtolower(end(explode(".", $_FILES[$path]['name'])));
        } else
            $this->path = $path;
    }

    public static function uploadedFile(string $name)
    {
        return new self($name, true);
    }

    public static function pathToUrl(string $path,$option = '/MVC')
    {
        return strstr($path, $option);
    }

    public function save(string $path)
    {
        $path .= uniqid() . "." . $this->name2;
        move_uploaded_file($this->path, $path);
        return $path;
    }

    public function validate(array $rules, array $success)
    {
        $result = true;
        foreach ($rules as $rule => $params) {
            $result = call_user_func_array([$this, $rule], $params);

            if (!$result)
                break;
        }

        if ($result) {
            return call_user_func_array($success['callback'], $success['params']);
        }
    }

    public static function removeProfile($path)
    {
        $path = File::pathToUrl($path,'storage') ;
        unlink($path) ;
    }

    private function checkSize($max, $min = 0)
    {
        $size = $_FILES[$this->name]['size'] / 1000;

        if ($size > $max || $size < $min)
            return false;

        return true;
    }

    private function checkType($type)
    {
        return !(strpos($_FILES[$this->name]['type'], $type) === false);
    }
}
