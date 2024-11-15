<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>碳足跡指標資料表</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* 頁面基本樣式 */
        body {
            font-family: 'Yu Gothic Light', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: url('https://as1.ftcdn.net/v2/jpg/06/13/75/20/1000_F_613752072_d2ftnzXPjTFsDT05lz6tx4t4GV042DOJ.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #ffffff;
            margin-bottom: 40px;
            font-size: 2.5em;
            font-weight: bold;
            text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);
        }

        /* 表格容器 */
        .table-container {
            background: rgba(255, 255, 255, 0.8);
            border-radius: 14px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin: 0 auto;
            max-width: 1200px;
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        th {
            padding: 18px;
            background-color: #0062c4;
            color: rgb(15, 15, 15);
            font-size: 1.2em;
            font-weight: bold;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
            cursor: pointer;
        }

        th, td {
            padding: 18px;
            text-align: left;
            background: linear-gradient(145deg, #f2f2f2, #e0e0e0);
            border: 0.5px solid #ddd;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #e0e0e0;
            transform: scale(1.03);
        }

        footer {
            text-align: center;
            margin-top: 50px;
            padding: 15px;
            color: #777;
            font-size: 1em;
            background-color: #f4f4f4;
            border-top: 2px solid #ddd;
        }

        footer a {
            color: #0062c4;
            text-decoration: none;
            font-weight: bold;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: #004b99;
        }
    </style>
</head>
<body>
    <h1>碳足跡指標資料表</h1>


    <footer>
        <p>&copy; 2024 台灣碳足跡資訊平台</p>
        <div>
            <a href="https://sdgs.un.org/goals" target="_blank">SDGs Official Website | </a>
            <a href="https://www.un.org/sustainabledevelopment/sustainable-consumption-production/" target="_blank">Sustainable Consumption and Production | </a>
            <a href="https://www.undp.org/sustainable-development-goals" target="_blank">UNDP - SDGs | </a>
        </div>
    </footer>
    
    <input type="text" id="searchInput" class="form-control mb-4" placeholder="搜尋資料..." onkeyup="searchTable()">

    <div class="table-container">
        <table id="carbonTable">
            <thead>
                <tr>
                    <th onclick="sortTable(0)">名稱</th>
                    <th onclick="sortTable(1)">COE</th>
                    <th onclick="sortTable(2)">單位</th>
                    <th onclick="sortTable(3)">部門名稱</th>
                    <th onclick="sortTable(4)">公告年份</th>
                </tr>
            </thead>
            <tbody>
                <!-- 這裡是後端模板語法，可以用實際的數據替換 -->
                @foreach ($observations as $observation)
                    <tr>
                        <td>{{ $observation->name }}</td>
                        <td>{{ $observation->coe }}</td>
                        <td>{{ $observation->unit }}</td>
                        <td>{{ $observation->department_name }}</td>
                        <td>{{ $observation->announcement_year }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    

    <script>
        // 搜尋功能
        function searchTable() {
            let input = document.getElementById("searchInput");
            let filter = input.value.toUpperCase();
            let table = document.getElementById("carbonTable");
            let rows = table.getElementsByTagName("tr");

            for (let i = 1; i < rows.length; i++) { // 跳過表頭
                let cells = rows[i].getElementsByTagName("td");
                let match = false;

                for (let j = 0; j < cells.length; j++) {
                    if (cells[j]) {
                        if (cells[j].textContent.toUpperCase().indexOf(filter) > -1) {
                            match = true;
                            break;
                        }
                    }
                }

                rows[i].style.display = match ? "" : "none";  // 顯示或隱藏行
            }
        }

        // 排序功能
        function sortTable(n) {
            let table = document.getElementById("carbonTable");
            let rows = table.rows;
            let switching = true;
            let dir = "asc";  // 預設按升序排序
            let switchcount = 0;

            while (switching) {
                switching = false;
                let rowsArr = Array.from(rows).slice(1);  // 排除表頭

                for (let i = 0; i < rowsArr.length - 1; i++) {
                    let x = rowsArr[i].getElementsByTagName("TD")[n];
                    let y = rowsArr[i + 1].getElementsByTagName("TD")[n];

                    if (dir === "asc" && x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase() || 
                        dir === "desc" && x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                        rowsArr[i].parentNode.insertBefore(rowsArr[i + 1], rowsArr[i]);
                        switching = true;
                        switchcount++;
                        break;
                    }
                }

                if (switchcount === 0 && dir === "asc") {
                    dir = "desc";
                    switching = true;
                }
            }
        }
    </script>

</body>
</html>
