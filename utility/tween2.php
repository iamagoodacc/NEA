<?php

class Tween
{
  private $from;
  private $to;
  private $change;
  private $steps;
  private $step;
  private $duration;
  private $easeFn;
  private $cb;
  private $startTime;
  private $endTime;
  private $requestId;

  public function __construct($params)
  {
    $this->from = $params['from'];
    $this->to = isset($params['to']) ? $params['to'] : $this->from + $params['change'];
    $this->change = isset($params['change']) ? $params['change'] : $this->to - $this->from;
    $this->steps = $params['steps'];
    $this->step = 0;
    $this->duration = $params['duration'];
    $this->easeFn = isset($params['easeFn']) && is_callable($params['easeFn']) ? $params['easeFn'] : function ($t) {
      return $t;
    };
    $this->cb = isset($params['cb']) && is_callable($params['cb']) ? $params['cb'] : function () {
    };
  }

  private function tick()
  {
    if ($this->step < $this->steps) {
      $this->step++;
    }
  }

  public function update($now)
  {
    if ($now > $this->endTime) {
      $this->stop();
      return;
    }

    $this->requestId = $this->update();

    if ($this->step < ($now / $this->endTime) * $this->steps) {
      $this->tick();
      $this->cb($this->value());
    }
  }

  public function start()
  {
    $this->startTime = microtime(true) * 1000;
    $this->endTime = $this->startTime + $this->duration;
    $this->requestId = $this->update();
  }

  public function value()
  {
    return $this->from + ($this->to - $this->from) * $this->easeFn($this->step / $this->steps);
  }

  public function stop()
  {
    if ($this->requestId) {
      // Not sure about the equivalent of window.cancelAnimationFrame in PHP
      // You might need to handle this accordingly based on your PHP environment
    }
  }
}
