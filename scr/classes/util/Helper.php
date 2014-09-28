<?php

class Helper {

    /**
     * @param String $path Pfad zur ini-Datei
     * @param String $partOfArray z.B. Index (Base-knote)
     * @return array
     */
    public static function parse_ini_file($path, $partOfArray) {
        $array = parse_ini_file($path, true);
        if ($partOfArray == NULL) {
            return $array;
        } else {
            $array = parse_ini_file($path, true);
            return $array[$partOfArray];
        }
    }
}

?>
