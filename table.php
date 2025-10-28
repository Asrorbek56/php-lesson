<?php
    $people = [
        ['ism' => 'hasan', 'familiya' => 'huanov', 't_yili' => 1990],
        ['ism' => 'shox', 'familiya' => 'Qodirov', 't_yili' => 1985],
        ['ism' => 'elyor', 'familiya' => 'Xudoyberdiyev', 't_yili' => 2000],
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <style>
        /* Page */

        body {
            font-family: "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background: #f4f7fb;
            color: #222;
            margin: 20px;
        }

        /* Table base */
        table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            box-shadow: 0 4px 10px rgba(17, 24, 39, 0.06);
            border-radius: 8px;
            overflow: hidden;
        }

        /* Header */
        thead th {
            background: linear-gradient(180deg, #f0f4ff 0%, #e8eefc 100%);
            color: #0f1724;
            font-weight: 600;
            text-align: left;
            padding: 12px 16px;
            border-bottom: 1px solid rgba(15, 23, 36, 0.06);
        }

        /* Cells */
        tbody td {
            padding: 12px 16px;
            vertical-align: middle;
            color: #233042;
            border-bottom: 1px solid rgba(15, 23, 36, 0.04);
        }

        /* Zebra striping and hover */
        tbody tr:nth-child(even) {
            background: #fbfdff;
        }
        tbody tr:hover {
            background: #f3f8ff;
        }

        /* Slightly round first/last cells to match table radius */
        tbody tr td:first-child {
            padding-left: 18px;
        }
        tbody tr td:last-child {
            padding-right: 18px;
        }

        /* Make table horizontally scrollable on small screens */
        @media (max-width: 640px) {
            table {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
            thead th {
                padding: 10px 12px;
                font-size: 13px;
            }
            tbody td {
                padding: 10px 12px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <table border="1" cellpadding="8" cellspacing="0" style="border-collapse:collapse; width:100%;">
        <thead style="background:#f0f0f0;">
            <tr>
                <th>Ism</th>
                <th>Familiya</th>
                <th>Tug'ilgan yili</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($people as $person): ?>
                <tr>
                    <td><?= htmlspecialchars($person['ism'], ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars($person['familiya'], ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars($person['t_yili'], ENT_QUOTES, 'UTF-8') ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html> 