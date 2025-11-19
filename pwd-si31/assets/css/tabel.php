<!DOCTYPE html>
<html>
<head>
    <title>Tabel Kebenaran 2 Input (A, B)</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin: auto; }
        th, td { border: 1px solid #333; text-align: center; padding: 8px; }
        th { background-color: #007bff; color: white; }
        h2 { text-align: center; }
        body { background-color: #eef3f7; font-family: Arial, sans-serif; }
    </style>
</head>
<body>
    <h2>Tabel Kebenaran 2 Input (A, B)</h2>
    <table>
        <tr>
            <th>A</th>
            <th>B</th>
            <th>¬A</th>
            <th>¬B</th>
            <th>A ∧ B</th>
            <th>A ∨ B</th>
            <th>A → B</th>
            <th>A ↔ B</th>
        </tr>
        <?php
        $values = [1, 0];
        foreach ($values as $A) {
            foreach ($values as $B) {
                $notA = !$A;
                $notB = !$B;
                $and  = $A && $B;
                $or   = $A || $B;
                $implikasi = (!$A) || $B;    // A → B
                $biimplikasi   = ($A && $B) || (!$A && !$B); // A ↔ B

                echo "<tr>";
                echo "<td>$A</td>";
                echo "<td>$B</td>";
                echo "<td>" . (int)$notA . "</td>";
                echo "<td>" . (int)$notB . "</td>";
                echo "<td>" . (int)$and . "</td>";
                echo "<td>" . (int)$or . "</td>";
                echo "<td>" . (int)$implikasi . "</td>";
                echo "<td>" . (int)$biimplikasi . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
    <p style="text-align:center; margin-top:10px;">
        Keterangan: 1 = Benar (True), 0 = Salah (False)
    </p>
</body>
</html>