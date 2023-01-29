<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Link Generate</title>
  <style>
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
  </style>
</head>

<body>
  <table>
    <tr>
      <th>Nama</th>
      <th>Link</th>
      <th></th>
    </tr>
    @foreach ($datas as $item)
      <tr>
        <td>{{ $item->nama }}</td>
        <td><a href="{{ route('happy') . '?nama=' . urlencode($item->nama) }}" target="_blank" rel="noopener noreferrer" class="link">{{ route('happy') . '?nama=' . urlencode($item->nama) }}</a></td>
        <td><button class="copy-text">Coppy</button></td>
      </tr>
    @endforeach
  </table>
  <script>
    // get the text from the DOM Element: 
    const textToCopy = document.querySelector('.link').innerText

    // when someone clicks on the <a class="copy-text"> element 
    // (which should be a <button>), execute the copy command:
    document.querySelector('.copy-text').addEventListener('click', () => {
      navigator.clipboard.writeText(textToCopy).then(
        function() {
          /* clipboard successfully set */
          window.alert('Success! The text was copied to your clipboard')
        },
        function() {
          /* clipboard write failed */
          window.alert('Opps! Your browser does not support the Clipboard API')
        }
      )
    })
  </script>
</body>

</html>
