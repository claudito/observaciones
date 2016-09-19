<script type="text/javascript">
$(function () {
    $('#container-tematica').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'Tematica'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Tematica',
              data: [
<?php 
$query  = "SELECT t.nombre as tematica,count(t.nombre) as cantidad,fecha
FROM observaciones as o 
INNER JOIN tematica as t ON o.tematica=t.codigo
WHERE fecha  BETWEEN '".$_POST['fechainicio']."' AND '".$_POST['fechafin']."'
group by t.nombre;
";
$result = $db->query($query); 
while ($fila = mysqli_fetch_array($result)) {
?>
['<?php echo $fila['tematica']; ?>', <?php echo $fila['cantidad']; ?>],
<?php 
}
?>

                
            ]
        }]
    });

      $('#container-elementos').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'Elementos'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Elementos',
        data: [
        <?php 
$query  = "
SELECT e.nombre as elementos,count(e.nombre) as cantidad,fecha
FROM observaciones as o 
INNER JOIN elementos as e ON o.tematica=e.codigo
WHERE fecha  BETWEEN '".$_POST['fechainicio']."' AND '".$_POST['fechafin']."'
group by e.nombre;
";
        $result = $db->query($query); 
        while ($fila = mysqli_fetch_array($result)) {
        ?>
        ['<?php echo $fila['elementos']; ?>', <?php echo $fila['cantidad']; ?>],
        <?php 
        }
        ?>


        ]
        }]
    });


$('#container-sub').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'Sub'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Sub',
            data: [
        <?php 
$query  = "SELECT s.nombre as sub,count(s.nombre) as cantidad,fecha
FROM observaciones as o 
INNER JOIN sub as s ON o.tematica=s.codigo
WHERE fecha  BETWEEN '".$_POST['fechainicio']."' AND '".$_POST['fechafin']."'
group by s.nombre;
";
        $result = $db->query($query); 
        while ($fila = mysqli_fetch_array($result)) {
        ?>
        ['<?php echo $fila['sub']; ?>', <?php echo $fila['cantidad']; ?>],
        <?php 
        }
        ?>


        ]
        }]
    });


});
</script>