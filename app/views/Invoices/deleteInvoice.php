<html>

<head>
    <title>
        <?= $name ?> view
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/app/styles.css">
</head>

<body>

    <div class='container'><br>
        <h1>Delete Invoice</h1>
        <p>Do you want to proceed with deletion of this invoice?</p>
        <dl>
            <dt>Invoice Title:</dt>
            <dd>
                <?= $data->invoice_title ?>
            </dd><br>

            <dt>Business Name:</dt>
            <dd>
                <?= $data->invoice_business_name ?>
            </dd>
            <br>
            <dt>Phone Number:</dt>
            <dd>
                <?= $data->phone_number ?>
            </dd><br>
            <dt>Return Quantity:</dt>
            <dd>
                <?= $data->return_quantity ?>
            </dd>
            <br>
            <dt>Perfume Code:</dt>
            <dd>
                <?= $data->perfume_code ?>
            </dd>
            <br>
            <dt>Perfume Price:</dt>
            <dd>
                <?= $data->perfume_price ?>
            </dd>
            <br>
        </dl><br>
        <form method="post" action=''>
            <input type="submit" name="action" class="btn" value="Delete"><br><br>
            <a href='/Invoice/home' class="btntwo">Cancel</a>
        </form>
    </div>
</body>

</html>