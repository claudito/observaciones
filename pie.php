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
$query  = "SELECT u.nombre,t.nombre as tematica,count(t.nombre) as cantidad
FROM observaciones as o 
INNER JOIN tematica as t ON o.tematica=t.codigo 
INNER JOIN usuarios as u ON o.registro=u.registro
WHERE u.registro='".$_POST['usuario']."'
group by t.nombre;";
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
$query  = "SELECT u.nombre,e.nombre as elemento,count(e.nombre) as cantidad
FROM observaciones as o 
INNER JOIN elementos as e ON o.tematica=e.codigo 
INNER JOIN usuarios as u ON o.registro=u.registro
WHERE u.registro='".$_POST['usuario']."'
group by e.nombre;";
        $result = $db->query($query); 
        while ($fila = mysqli_fetch_array($result)) {
        ?>
        ['<?php echo $fila['elemento']; ?>', <?php echo $fila['cantidad']; ?>],
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
$query  = "SELECT u.nombre,s.nombre as sub,count(s.nombre) as cantidad
FROM observaciones as o 
INNER JOIN sub as s ON o.tematica=s.codigo 
INNER JOIN usuarios as u ON o.registro=u.registro
WHERE u.registro='".$_POST['usuario']."'
group by s.nombre";
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