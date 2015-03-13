<?php

namespace MyWeather;

class NwsAlerts
{
    /**
     * The raw data.
     *
     * @var array
     */
    protected $data;

    /**
     * Create a new alert instance.
     *
     * @param array $data
     *
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

}
