const reportTemplate = document.getElementById("reportTemplate");
const dueReports = reportTemplate.parentElement;

for (i=0; i < 20; i++) {
    const newReportEventContents = document.importNode(reportTemplate.content, true);
    const newReportEvent = document.createElement("div");
    newReportEvent.appendChild(newReportEventContents);
    newReportEvent.classList.add("report");

    dueReports.appendChild(newReportEvent);
}

