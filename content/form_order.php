<?php
    // Sandi hadiansyah
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Detail</title>
    <link rel="stylesheet" href="../assets/css/form_order.css">
</head>
<body>
    <div class="container_input">
    <form action="">
        <div class="input_groups">
        <div class="box_input direction">
            <h3>Dari</h3>
            <div class="input_group">
                <label for="from">From</label>
                <input id="from" type="text" name="from" onfocus="showDropdown(dropDownFrom)" onblur="hideDropdown(dropDownFrom)">
            </div>
        </div>
        <span> == </span>
        <div clas="box_input direction">
            <h3>Ke</h3>
            <div class="input_group">
                <label for="to">To</label>
                <input id="to" type="text" name="to" onfocus="showDropdown(dropDownTo)" onblur="hideDropdown(dropDownTo)">
            </div>
        </div>
        </div>
        <div class="input_groups">
        <div class="box_input">
            <h3>Tanggal Pergi</h3>
            <div class="input_group">
                <label for="Go">Go</label>
                <input id="Go" type="date" name="Go">
            </div>
        </div>
        <div clas="box_input">
            <div class="input_group_0">
            <input type="checkbox">
            <h3>Pulang Pergi ?</h3>
            </div>
            <div class="input_group">
                <label for="PP">PP</label>
                <input id="PP" type="date" name="to">
            </div>
        </div>
        <div class="box_input">
            <h3>Jumlah Kursi</h3>
            <div class="input_group">
                <label for="sheat">Jml</label>
                <input id="sheat" type="text" name="sheat" onfocus="showDropdown(dropDownSheat)" onblur="hideDropdown(dropDownSheat)">
            </div>
        </div>
        <button>Cari Buss</button>
        </div>
    </form>

    <div class="dropdown dropdown_from" id="dropDownFrom">
        <ul>
            <li onclick="selectOption(from, this)">Bandung</li>
            <li onclick="selectOption(from, this)">Jakarta</li>
            <li onclick="selectOption(from, this)">Bali</li>
            <li onclick="selectOption(from, this)">Banten</li>
        </ul>
    </div>
    <div class="dropdown dropdown_to" id="dropDownTo">
        <ul>
            <li onclick="selectOption(to, this)">Bandung</li>
            <li onclick="selectOption(to, this)">Jakarta</li>
            <li onclick="selectOption(to, this)">Bali</li>
            <li onclick="selectOption(to, this)">Banten</li>
        </ul>
    </div>
    <div class="dropdown dropdown_sheat" id="dropDownSheat">
        <ul>
            <li onclick="option(sheat, this)">1</li>
            <li onclick="option(sheat, this)">2</li>
            <li onclick="option(sheat, this)">3</li>
            <li onclick="option(sheat, this)">4</li>
        </ul>
    </div>
</div>

<script src="../assets/js/data.js"></script>
</body>
</html>