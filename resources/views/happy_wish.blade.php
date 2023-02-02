<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>List Wish</title>
  <style>
    .table-outer {
      background: #e1e1e142;
      max-width: 1320px;
      margin: 0 auto;
      padding: 28px;
      border-radius: 14px;
    }

    table {
      width: 100%;
      background: white;
    }

    td,
    th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #ddd;
    }

    th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #04AA6D;
      color: white;
    }

    .status {
      text-align: center;
      cursor: pointer;
      padding: 16px;
      font-weight: 400;
      font-size: 16px;
      width: 100%;
      border: 0;
      color: white;
    }

    .status.hadir {
      background: #49a568;
    }

    .status.tidak-hadir {
      background: #e24346;
    }
  </style>
</head>

<body>
  <h1 style="text-align: center; margin: 40px 0px">Daftar Wish</h1>
  <div class="table-outer">
    <table cellspacing="0" cellpadding="0">
      <tr>
        <th>Nama</th>
        <th>Pesan</th>
        <th>Status</th>
      </tr>
      @foreach ($datas as $item)
        <tr>
          <td>{{ $item->nama }}</td>
          <td>{{ $item->pesan }}</td>
          <td><button class="status {{ $item->status == 1 ? 'hadir' : 'tidak-hadir' }}">{{ $item->status == 1 ? 'Hadir' : 'Tidak Hadir' }}</button></td>
        </tr>
      @endforeach
    </table>
  </div>
</body>

</html>
