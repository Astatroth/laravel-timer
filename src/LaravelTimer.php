<?php

namespace Astatroth\LaravelTimer;

class LaravelTimer
{

    protected $timers;

    /**
     * Sets the timer with the specified name.
     *
     * @param $name
     */
    public function timerStart($name)
    {
        $this->timers[$name]['start'] = microtime(true);
        $this->timers[$name]['count'] = isset($this->timers[$name]['count']) ? ++$this->timers[$name]['count'] : 1;
    }

    /**
     * Reads the timer current time without stopping it.
     *
     * @param $name
     * @return float
     */
    public function timerRead($name)
    {
        if (isset($this->timers[$name]['start'])) {
            $stop = microtime(true);
            $diff = round(($stop - $this->timers[$name]['start']) * 1000, 2);

            if (isset($this->timers[$name]['time'])) {
                $diff += $this->timers[$name]['time'];
            }

            return $diff;
        }

        return $this->timers[$name]['time'];
    }

    public function timerStop($name)
    {
        if (isset($this->timers[$name]['start'])) {
            $stop = microtime(true);
            $diff = round(($stop - $this->timers[$name]['start']) * 1000, 2);

            if (isset($this->timers[$name]['time'])) {
                $this->timers[$name]['time'] += $diff;
            } else {
                $this->timers[$name]['time']  = $diff;
            }

            unset($this->timers[$name]['start']);
        }

        return $this->timers[$name];
    }

}