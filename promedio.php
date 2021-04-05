<?php
$nombre=$_GET['nombre'];
echo "<h1>Notas de ".$nombre."</h1>";
echo "<a href=home.php?ci=".$ci."&color=d60502&nombre=".$nombre.">";
echo "<button>Atras</button>";
echo "</a>";
?>
<table border="1" bordercolor="020202" cellpadding="2" cellspacing="2" >
<tr>
    <td>SIGLAS </td>

    <td> CH </td>

</tr>


<?php
$ci=$_GET['ci'];
include "conneccion.inc.php";

$consulta=" 	SELECT n.sigla sigla, AVG(n.nota_final) XPROM
FROM nota n, persona p
WHERE n.ci=p.ci and p.departamento='101'
GROUP BY n.sigla";
$resuk=mysqli_query($con, $consulta);


while ($fila = mysqli_fetch_array($resuk))
{
    echo "<tr>";
    echo "<td>".$fila['sigla']."    "."</td>";
    echo "<td>".$fila['XPROM']."    "."</td>";

    echo "</tr>";
}
echo "</br>";
?>

<table border="1" bordercolor="020202" cellpadding="2" cellspacing="2" >
<tr>
    <td>SIGLAS </td>
    <td> LP </td>

</tr>
<?php
$ci=$_GET['ci'];
include "conneccion.inc.php";

$consulta=" 	SELECT n.sigla sigla, AVG(n.nota_final) XPROM
FROM nota n, persona p
WHERE n.ci=p.ci and p.departamento='102'
GROUP BY n.sigla";
$resuk=mysqli_query($con, $consulta);

while ($fila = mysqli_fetch_array($resuk))
{
    echo "<tr>";
    echo "<td>".$fila['sigla']."    "."</td>";
    echo "<td>".$fila['XPROM']."    "."</td>";

    echo "</tr>";
}
echo "</br>";
?>

<table border="1" bordercolor="020202" cellpadding="2" cellspacing="2" >
<tr>
    <td>SIGLAS </td>
    <td> CB </td>

</tr>
<?php
$ci=$_GET['ci'];
include "conneccion.inc.php";

$consulta=" 	SELECT n.sigla sigla, AVG(n.nota_final) XPROM
FROM nota n, persona p
WHERE n.ci=p.ci and p.departamento='103'
GROUP BY n.sigla";
$resuk=mysqli_query($con, $consulta);

while ($fila = mysqli_fetch_array($resuk))
{
    echo "<tr>";
    echo "<td>".$fila['sigla']."    "."</td>";
    echo "<td>".$fila['XPROM']."    "."</td>";

    echo "</tr>";
}
echo "</br>";
?>

<table border="1" bordercolor="020202" cellpadding="2" cellspacing="2" >
<tr>
    <td>SIGLAS </td>
    <td> OR </td>

</tr>
<?php
$ci=$_GET['ci'];
include "conneccion.inc.php";

$consulta=" 	SELECT n.sigla sigla, AVG(n.nota_final) XPROM
FROM nota n, persona p
WHERE n.ci=p.ci and p.departamento='104'
GROUP BY n.sigla";
$resuk=mysqli_query($con, $consulta);

while ($fila = mysqli_fetch_array($resuk))
{
    echo "<tr>";
    echo "<td>".$fila['sigla']."    "."</td>";
    echo "<td>".$fila['XPROM']."    "."</td>";

    echo "</tr>";
}
echo "</br>";
?>

<table border="1" bordercolor="020202" cellpadding="2" cellspacing="2" >
<tr>
    <td>SIGLAS </td>
    <td> PT </td>

</tr>
<?php
$ci=$_GET['ci'];
include "conneccion.inc.php";

$consulta=" 	SELECT n.sigla sigla, AVG(n.nota_final) XPROM
FROM nota n, persona p
WHERE n.ci=p.ci and p.departamento='105'
GROUP BY n.sigla";
$resuk=mysqli_query($con, $consulta);

while ($fila = mysqli_fetch_array($resuk))
{
    echo "<tr>";
    echo "<td>".$fila['sigla']."    "."</td>";
    echo "<td>".$fila['XPROM']."    "."</td>";

    echo "</tr>";
}
echo "</br>";
?>

<table border="1" bordercolor="020202" cellpadding="2" cellspacing="2" >
<tr>
    <td>SIGLAS </td>
    <td> TJ </td>

</tr>
<?php
$ci=$_GET['ci'];
include "conneccion.inc.php";

$consulta=" 	SELECT n.sigla sigla, AVG(n.nota_final) XPROM
FROM nota n, persona p
WHERE n.ci=p.ci and p.departamento='106'
GROUP BY n.sigla";
$resuk=mysqli_query($con, $consulta);

while ($fila = mysqli_fetch_array($resuk))
{
    echo "<tr>";
    echo "<td>".$fila['sigla']."    "."</td>";
    echo "<td>".$fila['XPROM']."    "."</td>";

    echo "</tr>";
}
echo "</br>";
?>

<table border="1" bordercolor="020202" cellpadding="2" cellspacing="2" >
<tr>
    <td>SIGLAS </td>
    <td> SC </td>

</tr>
<?php
$ci=$_GET['ci'];
include "conneccion.inc.php";

$consulta=" 	SELECT n.sigla sigla, AVG(n.nota_final) XPROM
FROM nota n, persona p
WHERE n.ci=p.ci and p.departamento='107'
GROUP BY n.sigla";
$resuk=mysqli_query($con, $consulta);

while ($fila = mysqli_fetch_array($resuk))
{
    echo "<tr>";
    echo "<td>".$fila['sigla']."    "."</td>";
    echo "<td>".$fila['XPROM']."    "."</td>";

    echo "</tr>";
}
echo "</br>";
?>

<table border="1" bordercolor="020202" cellpadding="2" cellspacing="2" >
<tr>
    <td>SIGLAS </td>
    <td> BE </td>

</tr>
<?php
$ci=$_GET['ci'];
include "conneccion.inc.php";

$consulta=" 	SELECT n.sigla sigla, AVG(n.nota_final) XPROM
FROM nota n, persona p
WHERE n.ci=p.ci and p.departamento='108'
GROUP BY n.sigla";
$resuk=mysqli_query($con, $consulta);

while ($fila = mysqli_fetch_array($resuk))
{
    echo "<tr>";
    echo "<td>".$fila['sigla']."    "."</td>";
    echo "<td>".$fila['XPROM']."    "."</td>";

    echo "</tr>";
}
echo "</br>";
?>

<table border="1" bordercolor="020202" cellpadding="2" cellspacing="2" >
<tr>
    <td>SIGLAS </td>
    <td> PD </td>

</tr>
<?php
$ci=$_GET['ci'];
include "conneccion.inc.php";

$consulta=" 	SELECT n.sigla sigla, AVG(n.nota_final) XPROM
FROM nota n, persona p
WHERE n.ci=p.ci and p.departamento='109'
GROUP BY n.sigla";
$resuk=mysqli_query($con, $consulta);

while ($fila = mysqli_fetch_array($resuk))
{
    echo "<tr>";
    echo "<td>".$fila['sigla']."    "."</td>";
    echo "<td>".$fila['XPROM']."    "."</td>";

    echo "</tr>";
}
echo "</br>";
?>


<?php
echo "<style>";
echo "  body {background-color:f57527;}";
echo "</style";
?>
</table>