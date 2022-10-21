@extends('layouts.webapp')

@section('header_title', 'first week')

@section('today')
<p class="number">{{$time}}</p>
@endsection

@section('month')
<p class="number">{{$month}}</p>
@endsection

@section('total')
<p class="number">{{$total}}</p>
@endsection

@section('year', '2022年8月')

@section('script')
<script>
    // ここからグラフ

function drawChart() {
    let column = document.getElementById("column");
    let data;
    let options = {
        width: 620,
        height: 450,
        colors: ["#0171b8"],
        animation: {
            startup: true,
            duration: 400,
            easing: "inAndout",
        },
        enableInteractivity: false,
        legend: "none",
        chartArea: { width: "80%", height: "60%" },
    };
    let chart = new google.visualization.ColumnChart(column);
    data = new google.visualization.arrayToDataTable([
        ["day", "time"],
        {{$study_time}}
    ]);

    chart.draw(data, options);

    let column2 = document.getElementById("column-2");
    let data4;
    let options4 = {
        width: 305,
        height: 140,
        colors: ["#0171b8"],
        animation: {
            startup: true,
            duration: 400,
            easing: "inAndout",
        },
        enableInteractivity: false,
        legend: "none",
        chartArea: { width: "90%", height: "70%" },
    };
    let chart4 = new google.visualization.ColumnChart(column2);
    data4 = new google.visualization.arrayToDataTable([
        ["day", "time"],
        {{$study_time}}
    ]);

    chart4.draw(data4, options4);

    let pie1 = document.getElementById("pie-1");
    let data2;
    let options2 = {
        width: 280,
        height: 580,
        title: "学習言語",
        pieHole: 0.5,
        colors: {!! $language_color !!},
        legend: { position: "bottom" },
        chartArea: { width: "100%", height: "80%" },
        enableInteractivity: false,
        pieSliceTextStyle: { fontSize: 10 },
    };
    let chart2 = new google.visualization.PieChart(pie1);

    data2 = new google.visualization.arrayToDataTable([
        ["学習言語", "time"],
        {!! $language_data !!}
    ]);

    chart2.draw(data2, options2);

    let pie2 = document.getElementById("pie-2");
    let data3;
    let options3 = {
        width: 280,
        height: 580,
        title: "学習コンテンツ",
        pieHole: 0.5,
        colors: {!! $content_color !!},
        legend: { position: "bottom" },
        chartArea: { width: "100%", height: "80%" },
        enableInteractivity: false,
        pieSliceTextStyle: { fontSize: 10 },
    };
    let chart3 = new google.visualization.PieChart(pie2);

    data3 = new google.visualization.arrayToDataTable([
        ["学習コンテンツ", "time"],
        {!! $content_data !!}
    ]);

    chart3.draw(data3, options3);

    let pie3 = document.getElementById("pie-3");
    let data5;
    let options5 = {
        width: 150,
        height: 210,
        title: "学習言語",
        pieHole: 0.5,
        colors: {!! $language_color !!},
        legend: { position: "bottom" },
        chartArea: { width: "80%", height: "80%" },
        enableInteractivity: false,
        pieSliceTextStyle: { fontSize: 10 },
    };
    let chart5 = new google.visualization.PieChart(pie3);

    data5 = new google.visualization.arrayToDataTable([
        ["学習言語", "time"],
        {!! $language_data !!}
    ]);

    chart5.draw(data5, options5);

    let pie4 = document.getElementById("pie-4");
    let data6;
    let options6 = {
        width: 150,
        height: 210,
        title: "学習コンテンツ",
        pieHole: 0.5,
        colors: {!! $content_color !!},
        legend: { position: "bottom" },
        chartArea: { width: "80%", height: "80%" },
        enableInteractivity: false,
        pieSliceTextStyle: { fontSize: 10 },
    };
    let chart6 = new google.visualization.PieChart(pie4);

    data6 = new google.visualization.arrayToDataTable([
        ["学習コンテンツ", "time"],
        {!! $content_data !!}
    ]);

    chart6.draw(data6, options6);
}

google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawChart);
</script>
@endsection


