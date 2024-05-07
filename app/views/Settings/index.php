<?= $this->view('Shared/header'); ?>
<div class='header'>
    Settings
</div>

<body>
    <table>
        <tr>
            <th>
                <a href="/ActivityLog/index"><button class=button2>Activity Log</button></a>
            </th>
        </tr>
        <tr>
            <th><label>Current currency: &nbsp;</label><input type='button' id='money' value='CAD'
                    onclick=convert()></input>
            </th>
        </tr>
        <tr>
            <th><label>Theme: &nbsp;</label> <!--Not sure how we want to make the theme work-->
        </tr>
        <tr>
            <th><label>Font size: &nbsp;</label> <!--Maybe make it a form?-->
        </tr>
        <th><input type='button' id='reset' value='Reset to Default Settings' onclick=reset()></input>
        </th>
    </table>
</body>
<script>

    function convert() {
        var button = document.getElementById('money');
        if (button.value === 'CAD') {
            //Change the boolean for the currency in the user table to false which will then change the currency of the app -> AED
            button.value = 'AED';
        } else {
            //Change the boolean for the currency in the user table to true -> bringing back the currency to CAD
            button.value = 'CAD';
        }
    }

    function reset() {
        //Set the user settings to the first record (which will be the default ones)
    }

</script>

<?= $this->view('Shared/footer'); ?>