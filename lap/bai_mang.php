<?php
echo "<h1>Điểm Danh</h1>";
$diemdanh = [
    [
        'msv' => '01',
        'tensv' => 'sbs',
        'ttdd' => 1,
    ],
    [
        'msv' => '02',
        'tensv' => 'svdvrfb',
    ],
    [
        'msv' => '03',
        'tensv' => 'avdfrn',
        'ttdd' => 1,
    ],
    [
        'msv' => '04',
        'tensv' => 'svdvrfb',
    ],
    [
        'msv' => '05',
        'tensv' => 'svdvrfb',
        'ttdd' => 1,
    ]
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>STT</th>
            <th>MSV</th>
            <th>TENSV</th>
            <th>Trạng Thái Điểm Danh</th>
        </tr>
        <?php foreach ($diemdanh as $key => $value) : ?>
            <tr>
                <th><?php echo ++$key; ?></th>
                <th><?php echo $value['msv']; ?></th>
                <th><?php echo $value['tensv']; ?></th>
                <th>
                    <?= $value['ttdd'] ?? 0 // ngang hàng với sử dụng hàm array_key_exists?> 
                </th>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>