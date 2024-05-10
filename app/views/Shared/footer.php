<script>
    function handleShortcut(event) {
        if (event.shiftKey && event.altKey && event.key === 'C') {
            // Redirect to the "Invoice/create" URL
            window.location.href = "/Invoice/create";
        }
    }
    // Event listener to listen for keydown events
    document.addEventListener('keydown', handleShortcut);

    //font size loading
    document.addEventListener('DOMContentLoaded', function () {
        var fontSize = localStorage.getItem('font_size');
        var theme = localStorage.getItem('theme');
        if (fontSize) {
            document.documentElement.style.setProperty('--font-size', fontSize + 'pt');
        }
        if (theme) {
            document.documentElement.style.setProperty('--background-color', theme);
        }
    });
</script>
</body>

</html>