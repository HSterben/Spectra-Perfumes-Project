<?= $this->view('Shared/header'); ?>

<div class='header'>
    Settings
</div>

<body>
    <form method='post' action="/User/updateSettings">
        <table>
            <tr>
                <th>
                    <a href="/ActivityLog/index"><button class=button2>Activity Log</button></a>
                </th>
            </tr>
            <tr>
                <th>
                    <label>Current currency: &nbsp;</label>
                    <select id="currencySelect" name='current_currency'>
                        <option value="CAD" <?= ($user->current_currency === 'CAD') ? 'selected' : '' ?>>CAD</option>
                        <option value="AED" <?= ($user->current_currency === 'AED') ? 'selected' : '' ?>>AED</option>
                    </select>
                </th>
            </tr>
            <tr>
                <th>
                    <label>Theme: &nbsp;</label>
                    <select id="themeSelect" name='theme'>
                        <option value="Dark" <?= ($user->theme === 'Dark') ? 'selected' : '' ?>>Dark</option>
                        <option value="Light" <?= ($user->theme === 'Light') ? 'selected' : '' ?>>Light</option>
                    </select>
                </th>
            </tr>
            <tr>
                <th>
                    <label>Font size: &nbsp;</label>
                    <select id="fontSelect" name='font_size'>
                        <option value="10" <?= ($user->font_size === 10) ? 'selected' : '' ?>>10</option>
                        <option value="12" <?= ($user->font_size === 12) ? 'selected' : '' ?>>12</option>
                        <option value="14" <?= ($user->font_size === 14) ? 'selected' : '' ?>>14</option>
                        <option value="16" <?= ($user->font_size === 16) ? 'selected' : '' ?>>16</option>
                        <option value="18" <?= ($user->font_size === 18) ? 'selected' : '' ?>>18</option>
                    </select>
                </th>
            </tr>
            <th>
                <a href="/User/resetSettings"><input type='button' id='reset'
                        value='Reset to Default Settings'></input></a>
            </th>
            <th>
                <input type='submit' id='save' value='Save changes'>
            </th>
            <th>
                <p>This a font test <?= $user->user_id ?> | <?= $user->font_size ?></p>
                <p>Test: PHP says: <?= $user->theme ?> </p>
                <div id="display">background-color: </div>
            </th>
        </table>
    </form>

    <script>
        var rootStyle = getComputedStyle(document.documentElement);
        document.getElementById("display").textContent += rootStyle.getPropertyValue("--background-color");

        document.addEventListener('DOMContentLoaded', function () {
            updateSettings();
        });

        function updateSettings() {
            var font_size = document.getElementById('fontSelect').value;
            var theme = document.getElementById('themeSelect').value;

            var color = (theme === 'Light' ? '#ffffff' : '#1a1a2e');

            document.documentElement.style.setProperty('--font-size', font_size + 'pt');
            document.documentElement.style.setProperty('--background-color', color);
        }
        
        document.getElementById('save').addEventListener('click', function (event) {
            updateSettings();
            document.forms[0].submit();
        });

        document.getElementById('reset').addEventListener('click', function (event) {
            document.getElementById('fontSelect').value = '12';
            document.getElementById('themeSelect').value = 'Dark';
            updateSettings();
            document.forms[0].submit();
        });
    </script>
</body>
<?= $this->view('Shared/footer'); ?>