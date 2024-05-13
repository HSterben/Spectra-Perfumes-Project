<?= $this->view('Shared/header'); ?>

<div class='header'>
    <?= __('Settings') ?>
</div>

<body>
    <form method='post' action="/User/updateSettings?lang=<?= $user->lang ?>">
        <table>
            <tr>
                <th>
                    <a href="/ActivityLog/index" style='color: yellow'><?= __('Activity Log') ?></a>
                </th>
            </tr>
            <tr>
                <th>
                    <label><?= __('Current currency') ?>: &nbsp;</label>
                    <select id="currencySelect" name='current_currency'>
                        <option value="CAD" <?= ($user->current_currency === 'CAD') ? 'selected' : '' ?>>CAD</option>
                        <option value="AED" <?= ($user->current_currency === 'AED') ? 'selected' : '' ?>>AED</option>
                    </select>
                </th>
            </tr>
            <tr>
                <th>
                    <label><?= __('Theme: ') ?>&nbsp;</label>
                    <select id="themeSelect" name='theme'>
                        <option value="Dark" <?= ($user->theme === 'Dark') ? 'selected' : '' ?>>Dark</option>
                        <option value="Light" <?= ($user->theme === 'Light') ? 'selected' : '' ?>>Light</option>
                    </select>
                </th>
            </tr>
            <tr>
                <th>
                    <label><?= __('Font size: ') ?>&nbsp;</label>
                    <select id="fontSelect" name='font_size'>
                        <option value="10" <?= ($user->font_size === 10) ? 'selected' : '' ?>>10</option>
                        <option value="12" <?= ($user->font_size === 12) ? 'selected' : '' ?>>12</option>
                        <option value="14" <?= ($user->font_size === 14) ? 'selected' : '' ?>>14</option>
                        <option value="16" <?= ($user->font_size === 16) ? 'selected' : '' ?>>16</option>
                        <option value="18" <?= ($user->font_size === 18) ? 'selected' : '' ?>>18</option>
                    </select>
                </th>
            </tr>
            <tr>
                <th>
                    <label><?= __('Date format: ') ?>&nbsp;</label>
                    <select id="dateSelect" name='date_format'>
                        <option value="M d, Y" <?= ($user->date_format === 'M d, Y') ? 'selected' : '' ?>>Sep 29, 2022
                        </option>
                        <option value="Y-m-d" <?= ($user->date_format === 'Y-m-d') ? 'selected' : '' ?>>2022-09-29</option>
                        <option value="m/d/Y" <?= ($user->date_format === 'm/d/Y') ? 'selected' : '' ?>>09/29/2022</option>
                        <option value="d/m/Y" <?= ($user->date_format === 'd/m/Y') ? 'selected' : '' ?>>29/09/2022</option>
                    </select>
                </th>
            </tr>
            <th>
                <label><?= __('Language: ') ?>&nbsp;</label>
                <select id="langSelect" name='lang'>
                    <option value="English" <?= ($user->lang === 'en') ? 'selected' : '' ?>>English</option>
                    <option value="Français" <?= ($user->lang === 'fr') ? 'selected' : '' ?>>Français</option>
                </select>
            </th>
            </tr>
            <th>
                <a href="/User/resetSettings"><input type='button' id='reset'
                        value='<?= __('Reset to Default Settings') ?>'></input></a>
            </th>
            <th>
                <input type='submit' id='save' value='<?= __('Save changes') ?>'>
            </th>
            <th>
                <p>This a font test <?= $user->user_id ?> | <?= $user->font_size ?></p>
                <p><?= __('Theme: ') ?><?= $user->theme ?> </p>
            </th>
        </table>
    </form>

    <script>
        var rootStyle = getComputedStyle(document.documentElement);

        document.addEventListener('DOMContentLoaded', function () {
            updateSettings();
        });

        function updateSettings() {
            var font_size = document.getElementById('fontSelect').value;
            var theme = document.getElementById('themeSelect').value;
            var language = document.getElementById('langSelect').value;
            theme = (theme === 'Light' ? '#ffffff' : '#1a1a2e');

            document.documentElement.style.setProperty('--font-size', font_size + 'pt');
            document.documentElement.style.setProperty('--background-color', theme);
        }

        document.getElementById('save').addEventListener('click', function (event) {
            var language = "<?php echo $user->lang; ?>";

            updateSettings();
            document.forms[0].submit();

        });

        document.getElementById('reset').addEventListener('click', function (event) {
            document.getElementById('fontSelect').value = '12';
            document.getElementById('themeSelect').value = 'Dark';
            document.getElementById('langSelect').value = 'English';
            updateSettings();
            document.forms[0].submit();
        });
    </script>
</body>
<?= $this->view('Shared/footer'); ?>