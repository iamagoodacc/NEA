document.querySelectorAll(".dropDownIcon").forEach(function(viewMoreToggle) {
    $(viewMoreToggle).click(function() {   
        var description = viewMoreToggle.parentElement 
        var expanded = description.querySelector(".text") == null;

        if (!expanded) {
            viewMoreToggle.classList.add("expand")
            viewMoreToggle.classList.remove("expand")
            var textBox = description.querySelector(".text")
            textBox.classList.remove("text")
            textBox.classList.add("expandedText")
        } else if (expanded) {
            viewMoreToggle.classList.add("expand")
            viewMoreToggle.classList.remove("expand")
            var textBox = description.querySelector(".expandedText")
            textBox.classList.remove("expandedText")
            textBox.classList.add("text")
        }
    }); 
});