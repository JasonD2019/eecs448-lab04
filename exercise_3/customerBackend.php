<?php
$N1 = $_POST["num_iphone"];
$P1 = $N1 * 799;
$N2 = $_POST["num_ipad"];
$P2 = $N2 * 429;
$N3 = $_POST["num_airpod"];
$P3 = $N3 * 159;
$Ship = $_POST["Shipping"];
$username = $_POST["m_username"];
$password = $_POST["m_password"];
$Total =$P1 + $P2 + $P3;

echo "You choose <br>$N1 iphone,<br> $N2 ipad,<br> $N3 airpod.<br><br>";
echo "Your account number is $username<br> Password is => $password<br><br>";
if ($Ship == 1)
{
    echo "You choose Free 7 day shipping.<br>";
}
if ($Ship == 2)
{
    echo "You choose $50.00 over night shipping.<br>";
    $Total += 50;
}
if ($Ship == 3)
{
    echo "You choose $5.00 three day shipping.<br>";
    $Total += 5;
}
echo "<br>Here is your table receipt:";
echo '<table border = "2">';
echo "<tr style=background-color:#99ffd6>";
echo "<td> &nbsp </td>";
echo "<td> Quantity </td>";
echo "<td> Cost Per Item </td>";
echo "<td> Sub Total </td>";
echo "</tr>";
echo "<tr>";
echo "<td style=background-color:#99ffd6> iphone </td>";
echo "<td style=background-color:#d9b3ff> $N1 </td>";
echo "<td style=background-color:#d9b3ff> $799.00 </td>";
echo "<td style=background-color:#d9b3ff> $$P1 </td>";
echo "</tr>";
echo "<tr>";
echo "<td style=background-color:#99ffd6> ipad </td>";
echo "<td style=background-color:#d9b3ff> $N2 </td>";
echo "<td style=background-color:#d9b3ff> $429.00 </td>";
echo "<td style=background-color:#d9b3ff> $$P2 </td>";
echo "</tr>";
echo "<tr>";
echo "<td style=background-color:#99ffd6> Airpod </td>";
echo "<td style=background-color:#d9b3ff> $N3 </td>";
echo "<td style=background-color:#d9b3ff> $159.00 </td>";
echo "<td style=background-color:#d9b3ff> $$P3 </td>";
echo "</tr>";
echo "<tr>";
echo "<td style=background-color:#99ffd6> Shipping </td>";
if ($Ship == 1)
{
    echo "<td colspan = 2 style=background-color:#d9b3ff> 7 days </td>";
    echo "<td style=background-color:#d9b3ff> $0 </td>";
}
if ($Ship == 2)
{
    echo "<td colspan = 2 style=background-color:#d9b3ff> Over Night </td>";
    echo "<td style=background-color:#d9b3ff> $50 </td>";
}
if ($Ship == 3)
{
    echo "<td colspan = 2 style=background-color:#d9b3ff> 3 Days </td>";
    echo "<td style=background-color:#d9b3ff> $5 </td>";
}
echo "</tr>";
echo "<tr style=background-color:#99ffd6>";
echo "<td colspan = 3> Total Cost </td>";
echo "<td> $$Total</td>";
echo "</tr>";
echo "</table>";

?>