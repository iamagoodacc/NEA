var behaviourEventTemplate = document.getElementById("behaviourEventTemplate")
var recentBehaviourEvents = behaviourEventTemplate.parentElement
for (i=0; i < 15; i++) {
    var newBehaviourEventContents = document.importNode(behaviourEventTemplate.content, true);
    var newBehaviourEvent = document.createElement("div")
    newBehaviourEvent.appendChild(newBehaviourEventContents)
    newBehaviourEvent.classList.add("behaviourEvent")
    recentBehaviourEvents.appendChild(newBehaviourEvent);
}

document.querySelectorAll(".dropDownIcon").forEach(function(viewMoreToggle) {
    $(viewMoreToggle).click(function() {   
        var description = viewMoreToggle.parentElement 
        var expanded = description.querySelector(".text") == null;

        if (!expanded) {
            viewMoreToggle.style.transform = "rotate(180deg)";
            var textBox = description.querySelector(".text")
            textBox.classList.remove("text")
            textBox.classList.add("expandedText")
        } else if (expanded) {
            viewMoreToggle.style.transform = "rotate(0deg)";
            var textBox = description.querySelector(".expandedText")
            textBox.classList.remove("expandedText")
            textBox.classList.add("text")
        }
    }); 
});