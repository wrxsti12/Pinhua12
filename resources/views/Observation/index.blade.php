<html>
    <head>
        <title>台灣產品碳足跡資訊</title>
    </head>
    <body>
        <h1>台灣產品碳足跡資訊</h1>

        <table border="1">
            @foreach ($observations as $observation)
                <tr>
                    <td>{{ $observation->name }} <td>
                    <td>{{ $observation->coe }} <td>
                    <td>{{ $observation->unit }} <td>
                    <td>{{ $observation->department_name }} <td>
                    <td>{{ $observation->announcement_year }} <td>
                </tr>
            @endforeach
        </table>
        
    </body>
</html>