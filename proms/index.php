<?php
    $title = 'proms home';
    $root_path = '../';
    include $root_path . 'theme/header.inc';
?>

<h1>PROVenance Management System</h1>
<p><em>This page is the new homepage for the PROMS family of tools. Currently, the way PROMS Server works and much background context are given in the PROMS wiki:</em></p>
<ul>
    <li><a href="https://promsns.org/wiki/proms">All about PROMS - the PROMS wiki</a></li>
</ul>

<h2>PROMS Server</h2>
<p>PROMS Server is a web API that is used to control provenance data sent to a graph database. The souce code for PROMS is available here:</p>
<table>
    <tr>
        <td><img src="PROMS-logo.png" title="PROMS logo" style="width:100px;"/></td>
        <td style="width:50px;">&nbsp;</td>
        <td><a href="https://promsns.org//repo/proms-server">PROMS Server code in CSIRO's BitBucket</a></td>
    </tr>
</table>

<h2>PROMS instances</h2>
<p>Here are some publicly visible instances of PROMS:</p>
<table>
    <tr>
        <td><a href="https://research.csiro.au/digiscape/"><img src="../theme/img/logo.png" title="CSIRO logo" style="width:100px;"/></a></td>
        <td style="width:50px;">&nbsp;</td>
        <td><a href="http://18.188.14.133/" style="vertical-align:middle;">DigiScape Future Science Platform project - dev instance</a></td>
    </tr>
    <tr>
        <td><a href="http://eudm.csiro.au"><img src="EUDM-logo.png" title="EUDM logo" style="width:100px;"/></a></td>
        <td style="width:50px;">&nbsp;</td>
        <td><a href="http://52.64.5.57/proms/">Energy Use Data Model project - dev instance</a></td>
    </tr>
</table>

<h2>Additional Tools</h2>
<p>Here are some additional tools that have been developed to assist with the use of PROMS:</p>
<table>
    <tr>
        <td><a href="https://promsns.org//repo/proms-reporter-python">PROMS Reporter Python</a> - a Python client for reporting to PROMS</td>
    </tr>
    <tr>
        <td><a href="https://promsns.org//repo/proms-reporter-java">PROMS Reporter Java</a> - a Java client for reporting to PROMS</td>
    </tr>
    <tr>
        <td><a href="https://promsns.org//repo/proms-reporter-dotnet">PROMS Reporter .NET</a> - a .NET client for reporting to PROMS</td>
    </tr>
</table>

<?php include $root_path . 'theme/footer.inc'; ?>
