<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grand Casiana Realty</title>
</head>
<body>
    <table style="margin-left:auto;margin-right:auto;margin-top:20%;">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Project</th>
            <th>Position</th>
            <th>Unit type</th>
            <th>Price</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost","root","","grandcasianarealty");
        if ($conn-> connect_error){
            die ("Connection failed:".$conn-> connect_error);
        }
        $sql = "SELECT sales_id, name, project, position, unit_type, price FROM agent a
        INNER JOIN sales s ON a.agent_id = s.agent_id INNER JOIN project p ON p.project_id = s.project_id";
        $result = $conn-> query ($sql);

        if ($result-> num_rows > 0){
            while($row = $result-> fetch_assoc()){
                echo "<tr><td>".$row["sales_id"]."</td><td>".$row["name"]."</td><td>".$row["project"].
                "</td><td>".$row["position"]."</td><td>".$row["unit_type"]."</td><td>".$row["price"]."</td></tr>";
            }
            echo "</table>";
        }
        ?>
    </table>
    <div class="testing">TRESTSTSTST</div>
    <div class="ivan">saahsjhashashs</div>
</body>
</html>