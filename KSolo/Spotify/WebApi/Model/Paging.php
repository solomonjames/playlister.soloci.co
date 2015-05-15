<?php

namespace KSolo\Spotify\WebAPI\Model;

/**
 * @see https://developer.spotify.com/web-api/object-model/#paging-object
 */
class Paging
{
    use Traits\HrefTrait;

    private $items;

    private $limit;

    private $next;

    private $offset;

    private $previous;

    private $total;

    public function setItems(array $items)
    {
        $this->items = $items;
        return $this;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    public function getLimit()
    {
        return $this->limit;
    }

    public function setNext($next)
    {
         $this->next = $next;
         return $this;
    }

    public function getNext()
    {
        return $this->next;
    }

    public function setOffset($offset)
    {
         $this->offset = $offset;
         return $this;
    }

    public function getOffset()
    {
        return $this->offset;
    }

    public function setPrevious($previous)
    {
         $this->previous = $previous;
         return $this;
    }

    public function getPrevious()
    {
        return $this->previous;
    }

    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }

    public function getTotal()
    {
        return $this->total;
    }
}
