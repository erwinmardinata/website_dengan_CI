<script src="<?php echo base_url('assets/highcharts/highcharts.js'); ?>"></script>
<h3><span class="glyphicon glyphicon-list-alt"></span> Hasil Poling</h3><hr>
<script>
$(function () { 
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Polilng Tentang Website ini'
        },
        xAxis: {
            categories: ['Bagus Sekali','Bagus','Kurang Bagus','Jelek','Sangat Jelek']
        },
        yAxis: {
            title: {
                text: 'Polilng Tentang Website ini'
            }
        },
        series: [{
            name: 'Poling',
            data: [<?php echo "$a->a, $b->b, $c->c, $d->d, $e->e"; ?>]
        }]
    });
});
</script>
<div id="container" style="width:100%; height:400px;"></div>