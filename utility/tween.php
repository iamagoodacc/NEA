<?php

class Tween {

    public function __construct($item, $start, $end, $duration) {
        $this->item = $item;
        $this->start = $start
    }

    public function animate() {
        $box = document.querySelector('.box');
        $start = 0; // start position
        $end = 200; // end position
        duration = 1000; // anim duration in milliseconds
        startTime = performance.now();
      
        function step(timestamp) {
          const elapsed = timestamp - startTime;
          const progress = Math.min(elapsed / duration, 1); // ensure progress is between 0 and 1
          const newPosition = lerp(start, end, progress);
      
          // update element position
          box.style.left = newPosition + 'px';
      
          if (progress < 1) {
            // continue animating
            requestAnimationFrame(step);
          }
        }
      
        // start animation
        requestAnimationFrame(step);
    }
}