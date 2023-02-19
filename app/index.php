<?php

require_once __DIR__ . '/../vendor/autoload.php';
// include_once __DIR__ . '/../vendor/';


use DOMPDF;

use app\config\Db;


$d = new Db();
$pdo = $d->connect();

$q = "SELECT * FROM `users`";
$sts = $pdo->prepare($q);
$sts->execute();
$data = $sts->fetchAll(PDO::FETCH_OBJ);

// $count = $sts->rowCount();

// echo "<pre>";
// print_r($data);

// echo $count;
// exit;


$html = '
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<style>
    span {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        text-align: center;
    }

    table {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
    }

    td,
    th {
        border: 1px solid #444;
    }
</style>

<body class"bg-secondary">
    <div class="d-flex align-items-center justify-content-center ">
 
 
    <table>
    <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                </tr>
            </thead>
            <tbody class="fs-6">
            ';

foreach ($data as $row) {

    $html .= '<tr>
    <td>' . $row->id . '</td>
    <td>' . $row->name . '</td>
    <td>' . $row->email . '</td>
    <td>' . $row->email . '</td>
</tr>';
}


$html .= '
</tbody>
<tr>
    <th colspan="3" class="my-table">GST(18%)
    <th>45</th>
    </th>
</tr>

<tr>
    <th colspan="3" class="my-table">Grand total</th>
    <th>450</th>
</tr>

<tr>
    <th colspan="3" class="my-table">Grand total Round Fig</th>
    <th>450</th>
</tr>

<tr>
    <td colspan="5" id="sign">signature</td>
</tr>

</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>';


echo $html;


$dompdf = new Dompdf();
$dompdf->load_html($html);
$dompdf->set_paper('A4', 'portrait');
// $dompdf->set_paper('A4','landscape');

$dompdf->render();

/* file name download */
// $dompdf->stream('invoice.pdf');


/* to render pdf into new tab */
$dompdf->stream('invoice.pdf', ['Attachment' => 0]);
