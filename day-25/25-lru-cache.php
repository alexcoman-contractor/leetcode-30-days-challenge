<?php
class LRUCache
{
    /**
     * @var int
     */
    public $capacity;
    public $cache = [];
    public $keysOrder = [];

    /**
     * @param Integer $capacity
     */
    function __construct($capacity)
    {
        $this->capacity = $capacity;
    }

    /**
     * @param Integer $key
     * @return Integer
     */
    function get($key)
    {
        if (isset($this->cache[$key])) {
            $this->order($key);
            return $this->cache[$key];
        }

        return -1;
    }

    /**
     * @param Integer $key
     * @param Integer $value
     * @return NULL
     */
    function put($key, $value)
    {
        $this->cache[$key] = $value;
        $this->order($key);
        if (count($this->cache) > $this->capacity) {
            unset($this->cache[array_pop($this->keysOrder)]);
        }
    }

    function order($key)
    {
        $isInArray = array_search($key, $this->keysOrder);

        if ($isInArray !== false) {
            unset($this->keysOrder[$isInArray]);
        }

        array_unshift($this->keysOrder, $key);
    }
}
