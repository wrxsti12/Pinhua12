<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>永續發展目標SDGS</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #000000; /* 保持一致性 */
            font-weight: bold;
            background-image: url('https://imgcdn.stablediffusionweb.com/2024/3/18/6595d56f-65e1-4d29-ac5b-6693c51fc304.jpg'); /* 背景圖片 */
            background-size: cover; /* 讓圖片覆蓋整個背景 */
            background-position: center; /* 背景圖片居中 */
            background-attachment: fixed; /* 背景固定，滾動時不會移動 */
            text-align: center; /* 中央對齊內容 */
        }

        .header {
            background: rgba(92, 90, 90, 0.8); /* 背景顏色帶透明 */
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .header h1 {
            font-weight: bold;
            font-size: 2.5em;
        }

        nav {
            margin: 20px 0;
        }

        nav a {
            margin: 0 15px;
            color: #ffffff;
            text-decoration: none;
            font-weight: bold;
        }

        .content {
            padding: 20px;
            background: rgba(255, 255, 255, 0.5); /* 白色背景，透明度設為 0.9 */
            margin: 20px 0;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }


        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        .footer {
            background: rgb(87, 87, 87); 
            color: white;
            text-align: center;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .content {
            padding: 20px;
            background: whitesmoke;
            margin: 20px 0;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .content:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .content h2 {
            text-align: center;
            color: #35424a;
            font-weight: bold;
        }

        .image-gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
        }

        .image-gallery img {
            height: auto;
            width: 100%;
            max-width: 210px;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .image-gallery img:hover {
            transform: scale(1.05); /* 使圖片放大 */
        }

        .form-container {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
        }

        /* 其他樣式設置略 */
    </style>
</head>

<body class="antialiased">
    <header>
        <h1 style="color: rgb(255, 255, 255);"><br>永續發展目標SDGS</h1>
        <p style="font-weight: bold; color: rgb(255, 251, 251);">2024.11.15</p>
        <nav>
            <a href="#about" style="font-weight:bold;">什麼是SDGS</a>
            <a href="#services" style="font-weight:bold;">SDGs碳足跡碳排放量解析</a>
            <a href="#pricing" style="font-weight:bold;">永續發展的成功案例</a>
            <a href="#contact" style="font-weight:bold;">個人如何減少碳足跡</a>
        </nav>
    </header>

    <div class="content">
        <center>
            <h2>什麼是SDGS？</h2><br>
            <p>SDGs代表了全球各國共同達成的發展目標，這些目標旨在促進全球人民福祉、環境保護以及經濟發展。<br>具體來說，SDGs不僅關注貧困、健康、教育等基本生活條件，也強調了氣候行動、性別平等、清潔水源和環境保護等議題。<br>SDGs的核心理念是“無人被落下”，這意味著所有人無論性別、年齡、民族或地理位置，都應該享有平等發展的機會。

                <P>這17個目標涵蓋了經濟、社會和環境的多方面問題，從消除貧困到應對氣候變遷，目標包括：<P>
                
                    <P>目標1：消除貧困<P>
                    <P>目標2：消除飢餓<P>
                    <P>目標7：可再生能源<P>
                    <P>目標13：氣候行動</p>
        </center>
    </div>

    <div class="content">
        <center><h2>SDGs碳足跡碳排放量解析</h2><br>
        <p>碳足跡是衡量一個人、組織、產品或活動對環境影響的指標，主要關注二氧化碳及其他溫室氣體的排放量。<br>SDGs的第13項目標“氣候行動”強調全球應該減少碳排放，這與碳足跡的概念密切相關。根據國際環保機構的研究，碳足跡是人類活動（如工業製造、交通運輸、能源使用等）<br>所排放的溫室氣體總量的綜合反映。

            碳排放量解析有助於了解各個領域對全球變暖的貢獻，並且能夠指導我們減少排放的策略。<br>企業和個人需要了解他們的碳足跡，並積極採取減碳措施，例如提高能源使用效率、使用可再生能源、選擇低碳產品等。
            
    
        </center>
    </div>

    <div class="content">
        <center><h2>永續發展的成功案例</h2><br>
        <p>丹麥的哥本哈根： 哥本哈根市致力於成為全球首個碳中和城市。<br>城市的公共交通系統和自行車道設施使得市民能夠選擇低碳的出行方式並且在建築和能源消耗方面採用了許多創新技術。<br><br>

            瑞典的回收系統： 瑞典擁有世界上最成功的垃圾回收系統之一。<br>瑞典的回收率高達99%，並且大量垃圾被轉化為能源。能夠通過垃圾焚燒發電來為城市提供能源，實現了資源循環利用。<br><br>
            
            新加坡的城市綠化： 該市大力推動城市綠化，並在建築設計中融入綠色基礎設施。<br>市區內有大量的屋頂花園、綠色長廊及綠色屋頂，這些措施不僅改善了城市的生態環境，還提高了空氣質量，並幫助減少熱島效應。</p></center>
    </div>

    <div class="content">
        <center><h2>個人如何減少碳足跡</h2><br>
        <p>每個人都可以通過一些簡單的行動來減少自己的碳足跡<br>
            <ul>
                <p>1. 選擇公共交通或騎自行車代替開車</p>
                <p>2. 減少肉類消費，選擇更多植物性食物</p>
                <p>3. 節約用電，使用節能燈泡和電器</p>
                <p>4. 減少廢物，進行回收和再利用</p>
            </ul>
        </p></center>
    </div>

    <footer>
        <p>&copy; 2024 台灣碳足跡資訊平台</p>
        <div>
            <a href="https://sdgs.un.org/goals" target="_blank">SDGs Official Website | </a>
            <a href="https://www.un.org/sustainabledevelopment/sustainable-consumption-production/" target="_blank">Sustainable Consumption and Production | </a>
            <a href="https://www.undp.org/sustainable-development-goals" target="_blank">UNDP - SDGs | </a>
        </div>
    </footer>

    <div class="footer">
        <p>© 2024 永續發展與碳足跡</p>
    </div>
</body>
</html>
