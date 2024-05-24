const assignmentTemplate = document.getElementById("assignmentTemplate");
const dueAssignments = assignmentTemplate.parentElement;

for (i=0; i < 20; i++) {
    const newAssignmentEventContents = document.importNode(assignmentTemplate.content, true);
    const newAssignmentEvent = document.createElement("div");
    newAssignmentEvent.appendChild(newAssignmentEventContents);
    newAssignmentEvent.classList.add("assignment");

    dueAssignments.appendChild(newAssignmentEvent);

    const rightDetails = newAssignmentEvent.querySelector(".rightDetails");
    const checkBox = rightDetails.querySelector(".checkBox");
    checkBox.addEventListener("click", function() {
        newAssignmentEvent.classList.contains("completedAssignment") ? newAssignmentEvent.classList.remove("completedAssignment") : newAssignmentEvent.classList.add("completedAssignment");
    });
}

