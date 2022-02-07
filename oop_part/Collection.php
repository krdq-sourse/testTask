<?php

class Collection
{

    private array $storage;

    public function __construct()
    {
        $this->storage = [];
    }


    public function add(object $key, $data = null): void
    {
        $this->storage[$this->getHash($key)] = ["object" => $key, "data" => $data];
    }

    public function remove(object $key): void
    {
        unset($this->storage[$this->getHash($key)]);
    }

    public function getHash(object $object): string
    {
        $serialized_object = serialize($object);
        return hash("md5", $serialized_object);
    }

    public function current(): ?object
    {
        return end($this->storage)['object'];
    }

    public function getObjectList(): array
    {
        return $this->storage;
    }

    public function check(object $object): bool
    {
        return array_key_exists($this->getHash($object), $this->storage);
    }

    public static function removeAll(Collection $collection): void
    {
        $objects = $collection->getObjectList();
        foreach ($objects as $value) {
            $collection->remove($value['object']);
        }
    }

}