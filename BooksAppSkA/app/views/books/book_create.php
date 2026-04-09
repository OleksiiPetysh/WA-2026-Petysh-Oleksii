<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> -->
    <title>Document</title>
</head>
<body>
    <div>
        <div>
            <h2>Přidat novou knihu</h2>
            <p>Vyplňte údaje a uložte knihu do databáze.</p>
        </div>
        
        <div>
            <form action="../../controllers/BookController.php" method="post" enctype="multipart/form-data">
                <div>
                    <div>
                        <label for="title">Název knihy <span>*</span></label>
                        <input type="text" id="title" name="title" required>
                    </div>
                    <div>
                        <label for="author">Autor <span>*</span></label>
                        <input type="text" id="author" name="author" placeholder="Příjmení Jméno" required>
                    </div>
                    <div>
                        <label for="isbn">ISBN <span>*</span></label>
                        <input type="text" id="isbn" name="isbn">
                    </div>
                    <div>
                        <label for="category">Kategorie </label>
                        <input type="text" id="category" name="category">
                    </div>
                    <div>
                        <label for="subcategory">Podkategorie </label>
                        <input type="text" id="subcategory" name="subcategory">
                    </div>
                    <div>
                        <label for="year">Rok vydání  <span>*</span></label>
                        <input type="number" id="year" name="year" required>
                    </div>
                    <div>
                        <label for="price">Cena knihy</label>
                        <input type="number" id="price" name="price" step="0.5">
                    </div>
                    <div>
                        <label for="link">Odkaz</label>
                        <input type="text" id="link" name="link">
                    </div>
                    <div>
                        <label for="description">Popis knihy</label>
                        <textarea id="description" name="description" rows="5">Popis knihy: </textarea>
                    </div>    
                    <div>
                        <label >Obrázky (můžete nahrát více)</label>
                        <label>
                            <span>Klikni pro výběr souborů</span>
                            <span>JPG / PNG / WebP – více souborů najednou</span>
                            <input type="file" id="images" name="images[]" multiple accept="image/*" class="hidden">
                        </label>
                    </div>
                    <div>
                        <button type="submit">Uložit knihu do DB</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>