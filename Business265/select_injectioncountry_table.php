<html> <head>
<title> Display selected country Information</Sect></title>
</head>
<body>
<?php
require
"connect.php";
if
(isset($_GET["countryName"]))
{
    $strcountryName =
$_GET["countryName"];

    echo "<br>" .
"strcountryName111 = " .$strcountryName;   

    $sql = "SELECT * FROM country where
countryName = '" . $strcountryName . "'";

    echo "<br>" . " sql =
" .$sql . "<br>";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC) ; 
    print_r($result);
}
?>
<table width="300" border="1">
  <tr>
    <th width="325">รหัสประเทศ</th>
    <td width="240"><?php echo $result["CountryCode"]; ?></td>
  </tr>

  <tr>
    <th width="130">ชื่อประเทศ</th>
    <td><?php echo $result["CountryName"]; ?></td>
  </tr>

  </table>
<?php
$conn = null;
?>
</body>
</html>
