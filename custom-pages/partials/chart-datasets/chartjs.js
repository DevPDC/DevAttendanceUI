

function getChartJs(type) {
    var config = null;

    if (type === 'line') {
        config = {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "My First dataset",
                    data: [65, 59, 80, 81, 56, 55, 40],
                    borderColor: 'rgba(0, 188, 212, 0.75)',
                    backgroundColor: 'rgba(0, 188, 212, 0.3)',
                    pointBorderColor: 'rgba(0, 188, 212, 0)',
                    pointBackgroundColor: 'rgba(0, 188, 212, 0.9)',
                    pointBorderWidth: 1
                }, {
                        label: "My Second dataset",
                        data: [28, 48, 40, 19, 86, 27, 90],
                        borderColor: 'rgba(233, 30, 99, 0.75)',
                        backgroundColor: 'rgba(233, 30, 99, 0.3)',
                        pointBorderColor: 'rgba(233, 30, 99, 0)',
                        pointBackgroundColor: 'rgba(233, 30, 99, 0.9)',
                        pointBorderWidth: 1
                    }]
            },
            options: {
                responsive: true,
                legend: false
            }
        }
    }
    else if (type === 'bar') {
        config = {
            type: 'bar',
            data: {
                labels: ["Assigned", "Reviewer On", "Created", "Can Be Started", "Pending", "Soon Due", "Over Due"],
                datasets: [{
                    label: "My Overall Tasks",
                    data: [15, 25, 13, 20, 8, 12, 3],
                    backgroundColor: 'rgb(0, 145, 15)'
                }, {
                        label: "This Week's Tasks",
                        data: [2, 8, 3, 5, 8, 10, 3],
                        backgroundColor: 'rgb(207, 110, 0)'
                    }]
            },
            options: {
                responsive: true,
                legend: false
            }
        }
    }
    else if (type === 'radar') {
        config = {
            type: 'radar',
            data: {
                labels: ["Assigned", "Reviewer On", "Created", "Can Be Started", "Pending", "Soon Due", "Over Due"],
                datasets: [{
                    label: "My Overall Tasks",
                    data: [15, 25, 13, 20, 8, 12, 3],
                    borderColor: 'rgb(0, 145, 15)',
                    backgroundColor: 'rgb(0, 145, 15',
                    pointBorderColor: 'rgb(214, 214, 214)',
                    pointBackgroundColor: 'rgba(0, 188, 212, 0.8)',
                    pointBorderWidth: 1
                }, {
                        label: "This Week's Tasks",
                        data: [2, 8, 3, 5, 8, 10, 3],
                        borderColor: 'rgba(233, 30, 99, 0.8)',
                        backgroundColor: 'rgba(233, 30, 99, 0.5)',
                        pointBorderColor: 'rgba(233, 30, 99, 0)',
                        pointBackgroundColor: 'rgba(233, 30, 99, 0.8)',
                        pointBorderWidth: 1
                    }]
            },
            options: {
                responsive: true,
                legend: false
            }
        }
    }
    else if (type === 'pie') {
        config = {
            type: 'pie',
            data: {
                datasets: [{
                    data: [225, 50, 100, 40],
                    backgroundColor: [
                        "rgb(233, 30, 99)",
                        "rgb(255, 193, 7)",
                        "rgb(0, 188, 212)",
                        "rgb(139, 195, 74)"
                    ],
                }],
                labels: [
                    "Pink",
                    "Amber",
                    "Cyan",
                    "Light Green"
                ]
            },
            options: {
                responsive: true,
                legend: false
            }
        }
    }
    return config;
}

$(function () {
    new Chart(document.getElementById("bar_chart").getContext("2d"), getChartJs('bar'));
});