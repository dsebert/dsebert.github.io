function loadContent(page) {
    fetch(page)
        .then(response => {
            if (!response.ok) {
                throw new Error('Netzwerkantwort war nicht ok');
            }
            return response.text();
        })
        .then(data => {
            document.getElementById('content').innerHTML = data;
        })
        .catch(error => {
            console.error('Es gab ein Problem mit der Fetch-Operation:', error);
            document.getElementById('content').innerHTML = '<h1>Fehler</h1><p>Inhalt konnte nicht geladen werden.</p>';
        });
}
