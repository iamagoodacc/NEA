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

function generateData() {
    var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    var data = [];
    for (var i = 0; i < months.length; i++) {
        data.push(Math.floor(Math.random() * 200) + 50);
    }
    return data;
}

var barCTX = document.querySelector(".chartGraphCanvas").getContext('2d');
var barChart = new Chart(barCTX, {
    type: 'bar',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [{
            label: 'Data',
            data: generateData(),
            backgroundColor: '#010f17',
            borderColor: '#b9d1fc',
            borderWidth: 2
        }]
    },
    options: {
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: false
            }
        },
        layout: {
            padding: {
                left: 5,
                top: 20,
            }
        },
        scales: {
            x: {
                ticks: {
                    color: "#b9d1fc",
                    font: {
                        size: 10,
                        family: "Montserrat",
                        weight: "bold"
                    },
                },
                grid: {
                    color: "#b9d1fc",
                    display: false,
                    drawBorder: false
                }
            },
            y: {
                ticks: {
                    color: "#b9d1fc",
                    font: {
                        size: 10,
                        family: "Montserrat",
                        weight: "bold"
                    },
                    stepSize: 25,
                },
                grid: {
                    color: "#b9d1fc",
                    drawBorder: false,
                    display: false
                }
            }
        },

        indexAxis: 'x',
        barPercentage: 0.8,
        categoryPercentage: 0.9
    }
});

const lineCTX = document.querySelector(".lineGraphCanvas").getContext('2d');
let customTicks = [-6, -4, -2, 0, 25, 50, 75, 100, 125, 150, 175];

const lineChart = new Chart(lineCTX, {
    type: 'line',
    data: {
        labels: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20],
        datasets: [{
            label: 'Data',
            data: [15, 20, 12, -2, -1, 8, 13, -2, 20, 13, 18, -3, 12, -2, -1, 8, 13, -1, 22, 12], //[150, 146, 120, -2, -1, 80, 130, -2, 40, 138, 45, 90],
            borderColor: '#b9d1fc',
            borderWidth: 1,
            fill: true,
            backgroundColor: function(context) {
                var chart = context.chart;
                var gradient = lineCTX.createLinearGradient(0, 0, 0, chart.height);
                gradient.addColorStop(0, '#9078E8');
                gradient.addColorStop(0.8, 'rgba(0, 0, 0, 0)');

                return gradient;
            },
        }]
    },
    options: {
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: false
            }
        },
        layout: {
            padding: {
                left: 5,
                top: 20
            }
        },
        scales: {
            x: {
                ticks: {
                    color: "#b9d1fc",
                    font: {
                        size: 10,
                        family: "Montserrat",
                        weight: "bold"
                    },
                },
                grid: {
                    color: "#b9d1fc",
                    display: false,
                    drawBorder: false
                }
            },
            y: {
                //afterBuildTicks: axis => axis.ticks = [-6, -4, -2, 0, 25, 50, 75, 100, 125, 150, 175].map(v => ({ value: v })),
                min: -4,
                max: 24,
                ticks: {
                    color: "#b9d1fc",
                    stepSize: 2,
                    font: {
                        size: 10,
                        family: "Montserrat",
                        weight: "bold"
                    },

                    // callback: function(value, index, values) {
                    //     // Use custom ticks array if index is within bounds
                    //     if (index < customTicks.length) {
                    //         return customTicks[index];
                    //     }
                    //     // Fallback to Chart.js default behavior
                    //     return value;
                    // }
                }, 
                grid: {
                    color: "#b9d1fc",
                    drawBorder: false,
                    display: false,
                }
            }
        }
    }
});
