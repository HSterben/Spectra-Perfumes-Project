<script>
    function handleShortcut(event) {
        if (event.shiftKey && event.altKey && event.key === 'C') {
            // Redirect to the "Invoice/create" URL
            window.location.href = "/Invoice/create";
        }
    }
    // Event listener to listen for keydown events
    document.addEventListener('keydown', handleShortcut);
</script>

</body>
</html>