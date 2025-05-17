<!DOCTYPE html>
<html>
<head>
    <title>Berhasil</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('thumb-1920-761506.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            margin: 40px auto 20px auto;
            width: 90%;
            max-width: 600px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.3);
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 20px;
        }

        .login-container button {
            padding: 10px 20px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
        }

        .login-container button:hover {
            background-color: #0056b3;
        }

        .content-box {
            background-color: rgba(255, 255, 255, 0.9);
            margin: 20px auto;
            padding: 20px;
            width: 90%;
            max-width: 900px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px;
        }

        .content-item {
            flex: 1 1 250px;
            text-align: center;
        }

        .content-item img {
            width: 100%;
            max-width: 250px;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
        }

        .content-item p {
            margin-top: 10px;
        }

        @media (max-width: 768px) {
            .content-box {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>SELAMAT DATANG DI LIAETHRÁ</h2>
        <br>
        <a href="index.php"><button>Kembali ke Login</button></a>
    </div>

    <div class="content-box">
        <div class="content-item">
            <img src="Little Mushroom.png" alt="Gambar 1">
            <p>Manhua (Hanzi sederhana: 漫画; Hanzi tradisional: 漫畫; Pinyin: Mànhuà [mân.xwä̂]; Jyutping: maan6 waa2) adalah sebutan untuk komik-komik berbahasa Mandarin yang dibuat di Tiongkok Daratan, Hong Kong, dan Taiwan. beberapa manhua terkenal diterbitkan melalui dari platform digital seperti Tencent Comics: Little Mushroom atau 小蘑菇.</p>
        </div>
        <div class="content-item">
            <img src="orv.png" alt="Gambar 2">
            <p>Manhwa (Korean: 만화; Hanja: 漫畵; Ejaan Bahasa Indonesia: [manhwa]) ialah istilah dalam bahasa Korea untuk menyebut komik.
                Di luar wilayah Korea, istilah manhwa mengacu pada komik buatan Korea Selatan. beberapa manhwa terkenal diterbitkan melalui dari platform digital seperti Kakaopage: The way to protect female lead older brother atau 록사나 : 여주인공의 오빠를 지키는 방법. Webtoon : White blood atau 화이트 블러드.</p>
        </div>
        <div class="content-item">
            <img src="one piece.png" alt="Gambar 3">
            <p>Manga (Jepang: 漫画) adalah komik atau novel grafik yang dibuat di Jepang atau menggunakan bahasa Jepang, sesuai dengan gaya yang dikembangkan di sana pada akhir abad ke-19.
                Istilah manga (kanji: 漫画; hiragana: まんが; katakana: マンガ;; bahasa Inggris: /ˈmæŋɡə/ atau /ˈmɑːŋɡə/) di Jepang adalah kata yang digunakan untuk merujuk kepada komik dan kartun. beberapa manga terkenal diterbitkan melalui dari platform digital seperti Cruncychyroll: One Piece atau ワンピース.</p>
        </div>
    </div>
</body>
</html>
