<?php namespace Cjhbtn\Periscopr\Models;

abstract class BaseModel {

    public static function create(array $object = [ ]) {
        $className = get_called_class();
        return unserialize(sprintf(
            'O:%d:"%s"%s',
            strlen($className),
            $className,
            strstr(serialize($object), ':')
        ));
    }
}