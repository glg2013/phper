<?php

abstract class DomainObject {
    public static function create()
    {
        return new static();
    }
}