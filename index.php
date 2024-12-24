<!--<?php
include "config.php";
?>--><!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title><?=$site_name?></title>
    <link rel="stylesheet" type="text/css" href="/css/style/index.css" />
    <link id="color-theme" rel="stylesheet" type="text/css" href="/css/color/index-<?=$_COOKIE['color_theme'] ?? 'light'?>.css" />
    <link rel="stylesheet" href="https://cdn.w3cbus.com/library/ionicons/2.0.1/css/ionicons.min.css" />
</head>
<body>
    <script>
        function get_color_scheme() {
            return (window.matchMedia && window.matchMedia("(prefers-color-scheme: dark)").matches);
        }

        function getCookieKeyValuePair () {
            return Object.fromEntries(document.cookie.split(";").map(i => i.split("=")));
        }

        if(!getCookieKeyValuePair().color_theme) {
            document.cookie = "color_theme=auto";
        }

        if(getCookieKeyValuePair().color_theme === "auto") {
            document.getElementById("color-theme").href = `/css/color/index-${get_color_scheme() ? "dark" : "light"}.css`
        }
    </script>
	<header class="header">
        <div class="open-type" function-name="open-type"><ion-icon name="chevron-expand-outline"></ion-icon></div>
		<div class="title">
			<?=$site_name?>
		</div>
        <div class="color-theme" function-name="toggle-theme"><ion-icon name="color-palette-outline"></ion-icon></div>
	</header>
    <header class="type">
        <div type-id="home">主页</div>
    </header>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        document.querySelectorAll("[function-name]").forEach(i => {
            nameFunction(i.getAttribute("function-name"));
        });
        function nameFunction (functionName) {
            let functions = {
                "open-type": function () {
                    
                },
                "toggle-theme": function () {
                    
                }
            };
        }
    </script>
</body>
</html>
