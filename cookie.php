<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $value = 'something from somewhere';

        setcookie("TestCookie", $value);
        //setcookie("TestCookie", $value, time()+3600);  /* expire in 1 hour */
        //setcookie("TestCookie", $value, time()+3600, "/~rasmus/", "example.com", 1);
    ?>

    <script>
        setCookie('ardatest','123456',3);
        //console.log(getCookie('ardatest'));
        //eraseCookie('ardatest');
        console.log(getCookies());

        function setCookie(name,value,days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days*24*60*60*1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "")  + expires + "; path=/";
        }
        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for(var i=0;i < ca.length;i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1,c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
            }
            return null;
        }
        function eraseCookie(name) {   
            document.cookie = name+'=; Max-Age=-99999999;';  
        }

        function getCookies() {
            var cookies = document.cookie.split(';');
            return cookies;
        }
    </script>
</body>
</html> 
