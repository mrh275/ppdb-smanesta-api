/*
 * Author: Abdullah A Almsaeed
 * Date: 4 Jan 2014
 * Description:
 *      This is a demo file used only for the main dashboard (index.html)
 **/

/* global moment:false, Chart:false, Sparkline:false */

$(function () {
    "use strict";

    // Make the dashboard widgets sortable Using jquery UI
    $(".connectedSortable").sortable({
        placeholder: "sort-highlight",
        connectWith: ".connectedSortable",
        handle: ".card-header, .nav-tabs",
        forcePlaceholderSize: true,
        zIndex: 999999,
    });
    $(".connectedSortable .card-header").css("cursor", "move");

    // jQuery UI sortable for the todo list
    $(".todo-list").sortable({
        placeholder: "sort-highlight",
        handle: ".handle",
        forcePlaceholderSize: true,
        zIndex: 999999,
    });

    // bootstrap WYSIHTML5 - text editor
    $(".textarea").summernote();

    $(".daterange").daterangepicker(
        {
            ranges: {
                Today: [moment(), moment()],
                Yesterday: [
                    moment().subtract(1, "days"),
                    moment().subtract(1, "days"),
                ],
                "Last 7 Days": [moment().subtract(6, "days"), moment()],
                "Last 30 Days": [moment().subtract(29, "days"), moment()],
                "This Month": [
                    moment().startOf("month"),
                    moment().endOf("month"),
                ],
                "Last Month": [
                    moment().subtract(1, "month").startOf("month"),
                    moment().subtract(1, "month").endOf("month"),
                ],
            },
            startDate: moment().subtract(29, "days"),
            endDate: moment(),
        },
        function (start, end) {
            // eslint-disable-next-line no-alert
            alert(
                "You chose: " +
                    start.format("MMMM D, YYYY") +
                    " - " +
                    end.format("MMMM D, YYYY")
            );
        }
    );

    /* jQueryKnob */
    $(".knob").knob();

    // The Calender
    $("#calendar").datetimepicker({
        format: "L",
        inline: true,
        locale: "id",
    });

    // SLIMSCROLL FOR CHAT WIDGET
    $("#chat-box").overlayScrollbars({
        height: "250px",
    });

    /* Chart.js Charts */
    var dataTahap1 = {
        labels: [
            "6 Juni 2022",
            "7 Juni 2022",
            "8 Juni 2022",
            "9 Juni 2022",
            "10 Juni 2022",
        ],
        datasets: [
            {
                label: "Afirmasi",
                backgroundColor: "#22c55e",
                borderColor: "#16a34a",
                pointRadius: false,
                pointColor: "#16a34a",
                pointStrokeColor: "#16a34a",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "#16a34a",
                data: [28, 48, 40, 19, 86],
            },
            {
                label: "Prestasi",
                backgroundColor: "#0ea5e9",
                borderColor: "#0ea5e9",
                pointRadius: false,
                pointColor: "#0ea5e9",
                pointStrokeColor: "#0284c7",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "#0284c7",
                data: [65, 59, 80, 81, 56],
            },
            {
                label: "Perpindahan/Guru",
                backgroundColor: "#f59e0b",
                borderColor: "#f59e0b",
                pointRadius: false,
                pointColor: "#f59e0b",
                pointStrokeColor: "#d97706",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "#d97706",
                data: [65, 59, 80, 81, 56],
            },
        ],
    };

    var dataTahap2 = {
        labels: [
            "23 Juni 2022",
            "24 Juni 2022",
            "25 Juni 2022",
            "26 Juni 2022",
            "27 Juni 2022",
            "28 Juni 2022",
            "29 Juni 2022",
            "30 Juni 2022",
        ],
        datasets: [
            {
                label: "Zonasi",
                backgroundColor: "#6366f1",
                borderColor: "#6366f1",
                pointRadius: false,
                pointColor: "#6366f1",
                pointStrokeColor: "#4f46e5",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "#4f46e5",
                data: [65, 59, 80, 81, 56, 55, 76, 120],
            },
        ],
    };

    var areaChartOptions = {
        maintainAspectRatio: false,
        responsive: true,
        legend: {
            display: false,
        },
        scales: {
            xAxes: [
                {
                    gridLines: {
                        display: false,
                    },
                },
            ],
            yAxes: [
                {
                    gridLines: {
                        display: false,
                    },
                },
            ],
        },
    };

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $("#tahap-1").get(0).getContext("2d");
    var barChartData = $.extend(true, {}, dataTahap1);
    var temp0 = dataTahap1.datasets[0];
    var temp1 = dataTahap1.datasets[1];
    barChartData.datasets[0] = temp1;
    barChartData.datasets[1] = temp0;

    var barChartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        datasetFill: false,
    };

    new Chart(barChartCanvas, {
        type: "bar",
        data: barChartData,
        options: barChartOptions,
    });

    var barChartCanvas1 = $("#tahap-2").get(0).getContext("2d");
    var barChartData1 = $.extend(true, {}, dataTahap2);
    var temp01 = dataTahap2.datasets[0];
    barChartData1.datasets[0] = temp01;

    var barChartOptions1 = {
        responsive: true,
        maintainAspectRatio: false,
        datasetFill: false,
    };

    new Chart(barChartCanvas1, {
        type: "bar",
        data: barChartData1,
        options: barChartOptions1,
    });
});
