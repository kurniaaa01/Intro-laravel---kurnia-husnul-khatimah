<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>list data</title>
</head>
<body>

    <table border="1">
        <thead>
            <tr>
                <th>no</th>
                <th>nama</nama>
                <th>umur</nama>
                <th>bio</nama>
                <th>view</nama>
                </tr>
        </thead>
        <tbody>
            <?php foreach ($casts as $cast) { ?>
                <tr>
                    <td><?= $cast->id ?></td>
                    <td><?= $cast->nama ?></td>
                    <td><?= $cast->umur ?></td>
                    <td><?= $cast->bio ?></td>
                    <td><a href="/cast/<?= $cast->id ?>">View</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    
    <a href="/cast/create">Tambah cast</a>
</body>
</html>