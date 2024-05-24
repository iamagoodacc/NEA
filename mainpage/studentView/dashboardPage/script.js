const assignmentTemplate = document.getElementById("assignmentTemplate")
const dueAssignments = assignmentTemplate.parentElement

for (i=0; i < 15; i++) {
    const newAssignmentContents = document.importNode(assignmentTemplate.content, true);
    const newAssignment = document.createElement("div")
    newAssignment.appendChild(newAssignmentContents)
    newAssignment.classList.add("assignment")
    dueAssignments.appendChild(newAssignment);
}

const noticeTemplate = document.getElementById("noticeTemplate")
const recentNotices = noticeTemplate.parentElement

for (i=0; i < 5; i++) {
    const newNoticeContents = document.importNode(noticeTemplate.content, true);
    const newNotice = document.createElement("div")
    newNotice.appendChild(newNoticeContents)
    newNotice.classList.add("notice")
    recentNotices.appendChild(newNotice);
}

var data = 80 //need to round it cus santosh has attendance of 99.99999%
data = [data, 100-data]
$('.attendanceValue').html(`${data[0]}%`)

const ringCTX = document.querySelector(".attendanceChart").getContext('2d');

var ringChart = new Chart(ringCTX, {
    type: 'doughnut',
    data: {
        datasets: [{
            data: data,
            backgroundColor: function(context) {
                var chart = context.chart;
                var gradient = ringCTX.createLinearGradient(0, 0, 0, chart.height);
                gradient.addColorStop(0, '#36D7FD');
                gradient.addColorStop(1, '#1D1F84');

                return context.dataIndex === 0 ? gradient : 'rgba(0, 0, 0, 0)';
            },
            borderRadius: (!data.includes(100)) ? 20 : 0,
            borderColor: ['transparent', 'transparent'],
            borderJoinStyle: 'round',
            hoverBackgroundColor: ['#b9d1fc', 'rgba(0, 0, 0, 0)'],
        }]
    },
    options: {
        rotation:  27 * Math.PI, // just to rotate it
        plugins: {
            legend: {
                display: false
            },
            tooltip: {
                enabled: false
            }
        },
        cutout: '85%', // how big the hole is
        responsive: true,
        maintainAspectRatio: true,
        animation: {
            animateRotate: true,
            animateScale: true,
        },
        plugins: {
            doughnutlabel: { 
                labels: [{
                    text: data[0] + '%',
                    font: {
                        size: 30,
                        weight: 'bold'
                    },
                    color: '#333', 
                }]
            }
        }
    }
});