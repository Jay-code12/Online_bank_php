
<?php require_once("layouts/navhead.php"); ?>


<div data-role="panel" id="panel" data-position-fixed="true">

<div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
    <h4><strong>JORDAN BANKING</strong></h4>
    <div style="width: 100px; height: 100px; background: red; border-radius: 100%"></div>
    <h5>Fernando san tos da silver</h5>

    <span><strong>Bal:</strong> $1,000,000</span>
</div>
<br>
<br>
<ul data-role="listview">
    <li data-icon="home">
        <a href="home.php" class="ui-li-icon ui-corner-none">Dashboard</a>
    </li>
    <li data-icon="action">
        <a href="transaction.php" class="ui-li-icon ui-corner-none">Transaction</a>
    </li>
    <li data-icon="forward">
        <a href="transfer.php" class="ui-li-icon ui-corner-none">Transfer</a>
    </li>
    <li data-icon="camera">
        <a href="index.php?page=checkpage" class="ui-li-icon ui-corner-none">Deposit Check</a>
    </li>
</ul>
<br>
<h4>Quick access</h4>
<ul data-role="listview" data-inset="true" class="mt-3">
    <li data-icon="star">
        <a href="#" class="ui-li-icon ui-corner-none">Lifestyle</a>
    </li>
    <li data-icon="shop">
        <a href="#" class="ui-li-icon ui-corner-none">Pay Bill</a>
    </li>
    <li data-icon="tag">
        <a href="#" class="ui-li-icon ui-corner-none">Loan</a>
    </li>
</ul>
<br>
<ul data-role="listview">
    <li data-icon="gear">
        <a href="#" class="ui-li-icon ui-corner-none">Settings</a>
    </li>
    <li data-icon="info">
        <a href="#" class="ui-li-icon ui-corner-none">Help</a>
    </li>

</ul>
</div>