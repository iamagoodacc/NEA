var options = document.querySelector(".options");
var selectionBox = document.querySelector(".selectionBox");

function lerp(start, end, t) {
    return start * (1 - t) + end * t;
}

Array.from(options.children).forEach(function(option) {
    option.addEventListener('mouseover', function() {
        selectionBox.style.display = "flex";
        const matchRect = option.getBoundingClientRect();
        const selectionRect = selectionBox.getBoundingClientRect();

        const centerYPosition = matchRect.top + (matchRect.height / 2);
        const selectionCenterY = selectionRect.height / 2;

        const topPosition = centerYPosition - selectionCenterY;

        selectionBox.style.top = topPosition + 'px';
        console.log(selectionBox.style.top)

    });

    option.addEventListener('mouseout', function() {
      selectionBox.style.display = "none"
    });
    
    //box.style.transform = 'scale(1.5)'
});
