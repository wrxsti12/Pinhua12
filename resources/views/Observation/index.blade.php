<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>碳足跡指標資料表</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* 將背景圖片設置為外部 URL */
        body {
            font-family: 'Yu Gothic Light', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: url('https://as1.ftcdn.net/v2/jpg/06/13/75/20/1000_F_613752072_d2ftnzXPjTFsDT05lz6tx4t4GV042DOJ.jpg'); /* 使用外部圖片 URL */
            background-size: cover; /* 讓背景圖片覆蓋整個頁面 */
            background-position: center; /* 背景居中 */
            background-attachment: fixed; /* 背景圖片固定，滾動時不動 */
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #ffffff; /* 設置標題為白色 */
            margin-bottom: 40px;
            font-size: 2.5em;
            font-weight: bold;
            text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);
        }

        .table-container {
            background: rgba(255, 255, 255, 0.8); /* 半透明背景 */
            border-radius: 14px;
            padding: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin: 0 auto;
            max-width: 1200px;
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        th {
            padding: 18px;
            background-color: #0062c4;
            color: rgb(15, 15, 15);
            font-size: 1.2em;
            font-weight: bold;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
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

        tr {
            transition: background-color 0.3s ease, transform 0.3s ease;
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

        /* 高亮匹配的行 */
        .highlight {
            background-color: #ffeb3b !important;
        }

    </style>
</head>
<body>
    <h1>碳足跡指標資料表</h1>

    <div class="table-container">
        <table id="carbonTable">
            <thead>
                <tr>
                    <th>名稱</th>
                    <th>COE</th>
                    <th>單位</th>
                    <th>部門名稱</th>
                    <th>公告年份</th>
                </tr>
            </thead>
            <tbody>
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

    <!-- 頁腳 -->
    <footer>
        <p>&copy; 2024 台灣碳足跡資訊平台</p>
        <div>
            <a href="https://sdgs.un.org/goals" target="_blank">SDGs Official Website</a>
            <a href="https://www.un.org/sustainabledevelopment/sustainable-consumption-production/" target="_blank">Sustainable Consumption and Production</a>
            <a href="https://www.undp.org/sustainable-development-goals" target="_blank">UNDP - SDGs</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function searchTable() {
            var input, filter, table, tr, td, i, txtValue, found;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("carbonTable");
            tr = table.getElementsByTagName("tr");
            found = false;

            // 清除之前的高亮
            for (let i = 1; i < tr.length; i++) {
                tr[i].classList.remove("highlight");
            }

            for (i = 1; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td");
                let rowContainsSearchText = false;

                for (let j = 0; j < td.length; j++) {
                    if (td[j]) {
                        txtValue = td[j].textContent || td[j].innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            rowContainsSearchText = true;
                            break;
                        }
                    }
                }

                if (rowContainsSearchText) {
                    tr[i].style.display = "";
                    tr[i].classList.add("highlight");
                    found = true;
                } else {
                    tr[i].style.display = "none";
                }
            }

            if (found) {
            
