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
        if (fontSize) {
            document.documentElement.style.setProperty('--font-size', fontSize + 'pt');
        }
    });

</script>
</body>

</html>