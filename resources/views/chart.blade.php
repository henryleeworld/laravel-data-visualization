<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>中華職棒大聯盟 2020 年上半季球隊戰績</title>
    </head>
    <body>
        <div id="chart" style="height: 300px;"></div>
        <!-- Charting library -->
        <script src="https://unpkg.com/echarts@4.8.0/dist/echarts.min.js"></script>
        <!-- Chartisan -->
        <script src="https://unpkg.com/@chartisan/echarts@2.2.3/dist/chartisan_echarts.js"></script>
        <script>
            const chart = new Chartisan({
                el: "#chart",
                url: "@chart('sample_chart')",
                hooks: new ChartisanHooks().colors(['#ECC94B', '#4299E1'])
                                           .legend({ position: 'bottom' })
                                           .title('戰績')
                                           .datasets([{ type: 'line', fill: false }, 'bar']),
            });
        </script>
    </body>
</html>