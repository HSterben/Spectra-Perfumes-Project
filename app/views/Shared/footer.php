<?php $user = getUser(); ?>
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

<style>
    :root {
        --font-size: <?= $user->font_size ?> + 'pt';
        --background-color: <?= $user->theme === 'Light' ? '#ffffff' : '#1a1a2e' ?>;
    }
</style>
</body>

</html>