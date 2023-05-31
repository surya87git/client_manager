
<?php //error_reporting(0);
require "vendor/autoload.php";
require("../db/config.php");
?>

<style>
table,
th,
td {
	border: 1px solid black;
	border-collapse: collapse;
}
</style>

<?php

$cid = $_REQUEST['cid'];
$qry = "SELECT * FROM tbl_cost_calculator_new where id = '$cid'";  
$exec = mysqli_query($mysqli, $qry);
$res = mysqli_fetch_array($exec);

echo '<pre>';
    print_r($res);
echo '</pre>';

 //'<!--h2 style="color:#25316D; text-align:center">Anubandh</h2-->';
$html = "";
$html .= '<table style="width:100%">
		<tr>
			<td></td>
			<td colspan="2">Client Name</td>
			<td colspan="4">'.$res["client_name"].'</td>
			<td rowspan="2">Moore Floor</td>
		</tr>
		<tr>
			<td></td>
			<td colspan="2">Date</td>
			<td colspan="4">'.date("l, d M Y", strtotime($res["create_date"])).'</td>
		</tr>
		<tr>
			<td>1</td>
			<td colspan="2">Area Description</td>
			<td colspan="2">Plot Size</td>
			<td>Plot Depth</td>
			<td>Road Facing</td>
			<td>Boundary Wall Height</td>
		</tr>
		<tr>
			<td></td>
			<td colspan="2"></td>
			<td>Width</td>
			<td>Length</td>
			<td>'.$res["depth"].' Feet</td>
			<td>'.$res["road_facing"].' Side</td>
			<td>'.$res["bwall_height"].' Feet</td>
		</tr>
		<tr>
			<td></td>
			<td colspan="2"></td>
			<td>'.$res["width"].'</td>
			<td>'.$res["length"].'</td>
			<td colspan="2" align="right">Total Floor</td>
			<td>'.$res["floor_num"].' Floor</td>
		</tr>';

    $warea = $res["work_area"];
    $warea_arr = explode(",", $warea);
    
    foreach($warea_arr as $k => $v)
    {

        if($k == 0)
        {
            $floor = "Ground Floor";
        }
        else
        {
            $floor = $k." Floor";
        }
        

    }    

	$html .= '<tr>
			<td></td>
			<td colspan="2"></td>
			<td>&nbsp;</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td colspan="2"></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>2</td>
			<td colspan="2">Total SBA</td>
			<td colspan="3">3321 sqft.</td>
			<td> Boundary Lenght RFT</td>
			<td>159 Rft</td>
		</tr>
		<tr>
			<td></td>
			<td colspan="2"></td>
			<td colspan="2">Boundary Wall Sq.ft</td>
			<td>Open Area</td>
			<td>Septic Tank</td>
			<td>Water Tank</td>
		</tr>
		<tr>
			<td></td>
			<td colspan="2"></td>
			<td colspan="2">477 Sq.ft</td>
			<td>695 Sq.ft</td>
			<td>0 sqft.</td>
			<td>36 Sqft.</td>
		</tr>
		<tr>
			<td></td>
			<td colspan="2">Included in package -</td>
			<td colspan="2">No</td>
			<td>Full Tile + Lawn</td>
			<td>No</td>
			<td>Yes</td>
		</tr>
		<tr>
			<td></td>
			<td colspan="2">Rate Selection</td>
			<td>Civil</td>
			<td>Finishing</td>
			<td>Total</td>
			<td>Boundary Wall</td>
			<td>Septic and Water Tank</td>
		</tr>
		<tr>
			<td></td>
			<td colspan="2"></td>
			<td>840Rs/sqft</td>
			<td>912Rs/sqft</td>
			<td>1752Rs/sqft</td>
			<td>135Rs/sqft</td>
			<td>840Rs/sqft</td>
		</tr>
		<tr>
			<td>3</td>
			<td colspan="2">Package selection by client</td>
			<td>Luxury</td>
			<td colspan="2">₹ 1,940 /sqft </td>
			<td>Elevation</td>
			<td>Premium</td>
		</tr>
		<tr>
			<td>4</td>
			<td colspan="2">Final Package after discount</td>
			<td>Custom</td>
			<td colspan="2">1500</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>5</td>
			<td colspan="2">Adition Offer</td>
			<td colspan="2">Modular Kitchen + 1nos</td>
			<td colspan="2">False Ceiling</td>
			<td>Discount</td>
		</tr>
		<tr>
			<td></td>
			<td colspan="2">Value Of the package</td>
			<td colspan="2">120000</td>
			<td colspan="2">120000</td>
			<td>654375</td>
		</tr>
		<tr>
			<td></td>
			<td colspan="2">Included in package</td>
			<td colspan="2">Yes</td>
			<td colspan="2">Yes</td>
			<td></td>
		</tr>
		<tr>
			<td>6</td>
			<td colspan="2">Cost Description</td>
			<td colspan="2">Building</td>
			<td>Elevation</td>
			<td>Boundary</td>
			<td>O.A.D</td>
		</tr>
		<tr>
			<td></td>
			<td colspan="2"></td>
			<td colspan="2">54,98,9877</td>
			<td>18189830</td>
			<td>37226373</td>
			<td>5362263</td>
		</tr>
		<tr>
			<td></td>
			<td colspan="2">Total Cost OF The Project</td>
			<td colspan="5">54,98,9877</td>
		</tr>
		<tr>
			<td></td>
			<td colspan="2"></td>
			<td>&nbsp;</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td colspan="2"></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td colspan="8" style="text-align: center; color:#25316D; font-weight:bolder;">&nbsp;</td>
		</tr>
		<tr>
			<td rowspan="4" style="text-align: center; color:#25316D; font-weight:bolder; writing-mode: vertical-rl">Plinth</td>
			<td colspan="2">Agreement Amount (only drawing work, site layout, juggi work, cctv+net installation, labour setup will done)</td>
			<td colspan="3">As per Total Cost</td>
			<td colspan="2">₹ 708,849</td>
		</tr>
		<tr>
			<td colspan="2">5 days Before Starting Excavation on site</td>
			<td colspan="3" rowspan="2">As per Civil Cost</td>
			<td colspan="2" rowspan="2">₹ 466,545</td>
		</tr>
		<tr>
			<td colspan="2">Footing reinforcement + casting completion</td>
		</tr>
		<tr>
			<td colspan="2">2 days after footing for plinth completion</td>
			<td colspan="3">As per civil cost</td>
			<td colspan="2">₹ 311,030</td>
		</tr>
		<tr>
			<td colspan="8" style="text-align: center; color:#25316D; font-weight:bolder;">&nbsp;</td>
		</tr>
		<tr>
			<td rowspan="4" style="text-align: center; color:#25316D; font-weight:bolder;">Ground Floor</td>
			<td colspan="2">5 days before starting Brick work</td>
			<td colspan="3">As per civil cost</td>
			<td colspan="2">₹ 350,819</td>
		</tr>
		<tr>
			<td colspan="2">5 days before starting Column lapping + casting</td>
			<td colspan="3" rowspan="2">As per civil cost</td>
			<td colspan="2">₹ 389,799</td>
		</tr>
		<tr>
			<td colspan="2">Slab Shuttering + Reinforcement</td>
			<td colspan="2">₹ 389,799</td>
		</tr>
		<tr>
			<td colspan="2">3 days before starting reinforcent work on slab (for Slab Casting)</td>
			<td colspan="3">As per civil cost</td>
			<td colspan="2">₹ 467,759</td>
		</tr>
		<tr>
			<td colspan="8" style="text-align: center; color:#25316D; font-weight:bolder;">&nbsp;</td>
		</tr>
		<tr>
			<td rowspan="4" style="text-align: center; color:#25316D; font-weight:bolder;">1st Floor</td>
			<td colspan="2">5 days before starting Brick work</td>
			<td colspan="3">As per civil cost</td>
			<td colspan="2">₹ 209,035</td>
		</tr>
		<tr>
			<td colspan="2">5 days before starting Column lapping + casting </td>
			<td colspan="3" rowspan="2">As per civil cost</td>
			<td colspan="2">₹ 232,261</td>
		</tr>
		<tr>
			<td colspan="2">Slab Shuttering + Reinforcement </td>
			<td colspan="2">₹ 232,261</td>
		</tr>
		<tr>
			<td colspan="2">3 days before starting reinforcent work on slab (for Slab Casting)</td>
			<td colspan="3">As per civil cost</td>
			<td colspan="2">₹ 278,714</td>
		</tr>
		<tr>
			<td colspan="8" style="text-align: center; color:#25316D; font-weight:bolder;">&nbsp;</td>
		</tr>
		<tr>
			<td rowspan="4" style="text-align: center; color:#25316D; font-weight:bolder;">2nd Floor</td>
			<td colspan="2">5 days before starting Brick work</td>
			<td colspan="3">As per civil cost</td>
			<td colspan="2">₹ 209,035</td>
		</tr>
		<tr>
			<td colspan="2">5 days before starting Column lapping + casting </td>
			<td colspan="3" rowspan="2">As per civil cost</td>
			<td colspan="2">₹ 232,261</td>
		</tr>
		<tr>
			<td colspan="2">Slab Shuttering + Reinforcement </td>
			<td colspan="2">₹ 232,261</td>
		</tr>
		<tr>
			<td colspan="2">3 days before starting reinforcent work on slab (for Slab Casting)</td>
			<td colspan="3">As per civil cost</td>
			<td colspan="2">₹ 278,714</td>
		</tr>
		<tr>
			<td colspan="8" style="text-align: center; color:#25316D; font-weight:bolder;">&nbsp;</td>
		</tr>
		<tr>
			<td rowspan="4" style="text-align: center; color:#25316D; font-weight:bolder;">3rd Floor</td>
			<td colspan="2">5 days before starting Brick work</td>
			<td colspan="3">As per civil cost</td>
			<td colspan="2">₹ 209,035</td>
		</tr>
		<tr>
			<td colspan="2">5 days before starting Column lapping + casting </td>
			<td colspan="3" rowspan="2">As per civil cost</td>
			<td colspan="2">₹ 232,261</td>
		</tr>
		<tr>
			<td colspan="2">Slab Shuttering + Reinforcement </td>
			<td colspan="2">₹ 232,261</td>
		</tr>
		<tr>
			<td colspan="2">3 days before starting reinforcent work on slab (for Slab Casting)</td>
			<td colspan="3">As per civil cost</td>
			<td colspan="2">₹ 278,714</td>
		</tr>
		<tr>
			<td colspan="8" style="text-align: center; color:#25316D; font-weight:bolder;">&nbsp;</td>
		</tr>
		<tr>
			<td rowspan="4" style="text-align: center; color:#25316D; font-weight:bolder;">4th Floor</td>
			<td colspan="2">5 days before starting Brick work</td>
			<td colspan="3">As per civil cost</td>
			<td colspan="2">₹ 209,035</td>
		</tr>
		<tr>
			<td colspan="2">5 days before starting Column lapping + casting </td>
			<td colspan="3" rowspan="2">As per civil cost</td>
			<td colspan="2">₹ 232,261</td>
		</tr>
		<tr>
			<td colspan="2">Slab Shuttering + Reinforcement </td>
			<td colspan="2">₹ 232,261</td>
		</tr>
		<tr>
			<td colspan="2">3 days before starting reinforcent work on slab (for Slab Casting)</td>
			<td colspan="3">As per civil cost</td>
			<td colspan="2">₹ 278,714</td>
		</tr>
		<tr>
			<td colspan="8" style="text-align: center; color:#25316D; font-weight:bolder;">&nbsp;</td>
		</tr>
		<tr>
			<td rowspan="4" style="text-align: center; color:#25316D; font-weight:bolder;">5th Floor</td>
			<td colspan="2">5 days before starting Brick work</td>
			<td colspan="3">As per civil cost</td>
			<td colspan="2">₹ 209,035</td>
		</tr>
		<tr>
			<td colspan="2">5 days before starting Column lapping + casting </td>
			<td colspan="3" rowspan="2">As per civil cost</td>
			<td colspan="2">₹ 232,261</td>
		</tr>
		<tr>
			<td colspan="2">Slab Shuttering + Reinforcement </td>
			<td colspan="2">₹ 232,261</td>
		</tr>
		<tr>
			<td colspan="2">3 days before starting reinforcent work on slab (for Slab Casting)</td>
			<td colspan="3">As per civil cost</td>
			<td colspan="2">₹ 278,714</td>
		</tr>
		<tr>
			<td colspan="8" style="text-align: center; color:#25316D; font-weight:bolder;">&nbsp;</td>
		</tr>
		<tr>
			<td rowspan="4" style="text-align: center; color:#25316D; font-weight:bolder;">6th Floor</td>
			<td colspan="2">5 days before starting Brick work</td>
			<td colspan="3">As per civil cost</td>
			<td colspan="2">₹ 209,035</td>
		</tr>
		<tr>
			<td colspan="2">5 days before starting Column lapping + casting </td>
			<td colspan="3" rowspan="2">As per civil cost</td>
			<td colspan="2">₹ 232,261</td>
		</tr>
		<tr>
			<td colspan="2">Slab Shuttering + Reinforcement </td>
			<td colspan="2">₹ 232,261</td>
		</tr>
		<tr>
			<td colspan="2">3 days before starting reinforcent work on slab (for Slab Casting)</td>
			<td colspan="3">As per civil cost</td>
			<td colspan="2">₹ 278,714</td>
		</tr>
		<tr>
			<td colspan="8" style="text-align: center; color:#25316D; font-weight:bolder;">&nbsp;</td>
		</tr>
		<tr>
			<td rowspan="4" style="text-align: center; color:#25316D; font-weight:bolder;">7th Floor</td>
			<td colspan="2">5 days before starting Brick work</td>
			<td colspan="3">As per civil cost</td>
			<td colspan="2">₹ 209,035</td>
		</tr>
		<tr>
			<td colspan="2">5 days before starting Column lapping + casting </td>
			<td colspan="3" rowspan="2">As per civil cost</td>
			<td colspan="2">₹ 232,261</td>
		</tr>
		<tr>
			<td colspan="2">Slab Shuttering + Reinforcement </td>
			<td colspan="2">₹ 232,261</td>
		</tr>
		<tr>
			<td colspan="2">3 days before starting reinforcent work on slab (for Slab Casting)</td>
			<td colspan="3">As per civil cost</td>
			<td colspan="2">₹ 278,714</td>
		</tr>
		<tr>
			<td colspan="8" style="text-align: center; color:#25316D; font-weight:bolder;">&nbsp;</td>
		</tr>
		<tr>
			<td rowspan="4" style="text-align: center; color:#25316D; font-weight:bolder;">8th Floor</td>
			<td colspan="2">5 days before starting Brick work</td>
			<td colspan="3">As per civil cost</td>
			<td colspan="2">₹ 209,035</td>
		</tr>
		<tr>
			<td colspan="2">5 days before starting Column lapping + casting </td>
			<td colspan="3" rowspan="2">As per civil cost</td>
			<td colspan="2">₹ 232,261</td>
		</tr>
		<tr>
			<td colspan="2">Slab Shuttering + Reinforcement </td>
			<td colspan="2">₹ 232,261</td>
		</tr>
		<tr>
			<td colspan="2">3 days before starting reinforcent work on slab (for Slab Casting)</td>
			<td colspan="3">As per civil cost</td>
			<td colspan="2">₹ 278,714</td>
		</tr>
		<tr>
			<td colspan="8" style="text-align: center; color:#25316D; font-weight:bolder;">&nbsp;</td>
		</tr>
		<tr>
			<td rowspan="5" style="text-align: center; color:#25316D; font-weight:bolder;">Ground Floor</td>
			<td colspan="2">7 days before starting ground floor Inner plaster work </td>
			<td colspan="3" rowspan="3">As per Total cost</td>
			<td colspan="2" rowspan="3">₹ 695,211</td>
		</tr>
		<tr>
			<td colspan="2">1st floor False ceiling channel </td>
		</tr>
		<tr>
			<td colspan="2">1st floor electrical plumbing</td>
		</tr>
		<tr>
			<td colspan="2">5 days before starting GF False ceiling channel work </td>
			<td colspan="3" rowspan="2">As per Finishing cost</td>
			<td colspan="2" rowspan="2">₹ 439,238</td>
		</tr>
		<tr>
			<td colspan="2">GF electrical & plumbing work complete</td>
		</tr>
		<tr>
			<td colspan="8" style="text-align: center; color:#25316D; font-weight:bolder;">&nbsp;</td>
		</tr>
		<tr>
			<td rowspan="5" style="text-align: center; color:#25316D; font-weight:bolder;">First Floor</td>
			<td colspan="2">7 days before starting 1st floor Inner plaster work </td>
			<td colspan="3" rowspan="3">As per Total cost</td>
			<td colspan="2" rowspan="3">₹ 695,211</td>
		</tr>
		<tr>
			<td colspan="2">2nd floor False ceiling channel </td>
		</tr>
		<tr>
			<td colspan="2">2nd floor electrical plumbing</td>
		</tr>
		<tr>
			<td colspan="2">5 days before starting 1st floor False ceiling channel work </td>
			<td colspan="3" rowspan="2">As per Finishing cost</td>
			<td colspan="2" rowspan="2">₹ 439,238</td>
		</tr>
		<tr>
			<td colspan="2">1st floor electrical & plumbing work complete</td>
		</tr>
		<tr>
			<td colspan="8" style="text-align: center; color:#25316D; font-weight:bolder;">&nbsp;</td>
		</tr>
		<tr>
			<td rowspan="5" style="text-align: center; color:#25316D; font-weight:bolder;">Second Floor</td>
			<td colspan="2">7 days before starting 2nd floor Inner plaster work </td>
			<td colspan="3" rowspan="3">As per Total cost</td>
			<td colspan="2" rowspan="3">₹ 695,211</td>
		</tr>
		<tr>
			<td colspan="2">3rd floor False ceiling channel </td>
		</tr>
		<tr>
			<td colspan="2">3rd floor electrical plumbing</td>
		</tr>
		<tr>
			<td colspan="2">5 days before starting 2nd floor False ceiling channel work </td>
			<td colspan="3" rowspan="2">As per Finishing cost</td>
			<td colspan="2" rowspan="2">₹ 439,238</td>
		</tr>
		<tr>
			<td colspan="2">2nd floor electrical & plumbing work complete</td>
		</tr>
		<tr>
			<td colspan="8" style="text-align: center; color:#25316D; font-weight:bolder;">&nbsp;</td>
		</tr>
		<tr>
			<td rowspan="5" style="text-align: center; color:#25316D; font-weight:bolder;">Third Floor</td>
			<td colspan="2">7 days before starting 4th floor Inner plaster work </td>
			<td colspan="3" rowspan="3">As per Total cost</td>
			<td colspan="2" rowspan="3">₹ 695,211</td>
		</tr>
		<tr>
			<td colspan="2">4th floor False ceiling channel </td>
		</tr>
		<tr>
			<td colspan="2">4th floor electrical plumbing</td>
		</tr>
		<tr>
			<td colspan="2">5 days before starting 3rd floor False ceiling channel work </td>
			<td colspan="3" rowspan="2">As per Finishing cost</td>
			<td colspan="2" rowspan="2">₹ 439,238</td>
		</tr>
		<tr>
			<td colspan="2">3rd floor electrical & plumbing work complete</td>
		</tr>
		<tr>
			<td colspan="8" style="text-align: center; color:#25316D; font-weight:bolder;">&nbsp;</td>
		</tr>
		<tr>
			<td rowspan="5" style="text-align: center; color:#25316D; font-weight:bolder;">Forth Floor</td>
			<td colspan="2">7 days before starting 4th floor Inner plaster work </td>
			<td colspan="3" rowspan="3">As per Total cost</td>
			<td colspan="2" rowspan="3">₹ 695,211</td>
		</tr>
		<tr>
			<td colspan="2">5th floor False ceiling channel </td>
		</tr>
		<tr>
			<td colspan="2">5th floor electrical plumbing</td>
		</tr>
		<tr>
			<td colspan="2">5 days before starting 4th floor False ceiling channel work </td>
			<td colspan="3" rowspan="2">As per Finishing cost</td>
			<td colspan="2" rowspan="2">₹ 439,238</td>
		</tr>
		<tr>
			<td colspan="2">4th floor electrical & plumbing work complete</td>
		</tr>
		<tr>
			<td colspan="8" style="text-align: center; color:#25316D; font-weight:bolder;">&nbsp;</td>
		</tr>
		<tr>
			<td rowspan="5" style="text-align: center; color:#25316D; font-weight:bolder;">Fivth Floor</td>
			<td colspan="2">7 days before starting 5th floor Inner plaster work </td>
			<td colspan="3" rowspan="3">As per Total cost</td>
			<td colspan="2" rowspan="3">₹ 695,211</td>
		</tr>
		<tr>
			<td colspan="2">6th floor False ceiling channel </td>
		</tr>
		<tr>
			<td colspan="2">6th floor electrical plumbing</td>
		</tr>
		<tr>
			<td colspan="2">5 days before starting 5th floor False ceiling channel work </td>
			<td colspan="3" rowspan="2">As per Finishing cost</td>
			<td colspan="2" rowspan="2">₹ 439,238</td>
		</tr>
		<tr>
			<td colspan="2">5th floor electrical & plumbing work complete</td>
		</tr>
		<tr>
			<td colspan="8" style="text-align: center; color:#25316D; font-weight:bolder;">&nbsp;</td>
		</tr>
		<tr>
			<td rowspan="5" style="text-align: center; color:#25316D; font-weight:bolder;">Sixth Floor</td>
			<td colspan="2">7 days before starting 6th floor Inner plaster work </td>
			<td colspan="3" rowspan="3">As per Total cost</td>
			<td colspan="2" rowspan="3">₹ 695,211</td>
		</tr>
		<tr>
			<td colspan="2">7th floor False ceiling channel </td>
		</tr>
		<tr>
			<td colspan="2">7th floor electrical plumbing</td>
		</tr>
		<tr>
			<td colspan="2">5 days before starting 6th floor False ceiling channel work </td>
			<td colspan="3" rowspan="2">As per Finishing cost</td>
			<td colspan="2" rowspan="2">₹ 439,238</td>
		</tr>
		<tr>
			<td colspan="2">6th floor electrical & plumbing work complete</td>
		</tr>
		<tr>
			<td colspan="8" style="text-align: center; color:#25316D; font-weight:bolder;">&nbsp;</td>
		</tr>
		<tr>
			<td rowspan="5" style="text-align: center; color:#25316D; font-weight:bolder;">Seventh Floor</td>
			<td colspan="2">7 days before starting 7th floor Inner plaster work </td>
			<td colspan="3" rowspan="3">As per Total cost</td>
			<td colspan="2" rowspan="3">₹ 695,211</td>
		</tr>
		<tr>
			<td colspan="2">8th floor False ceiling channel </td>
		</tr>
		<tr>
			<td colspan="2">8th floor electrical plumbing</td>
		</tr>
		<tr>
			<td colspan="2">5 days before starting 7th floor False ceiling channel work </td>
			<td colspan="3" rowspan="2">As per Finishing cost</td>
			<td colspan="2" rowspan="2">₹ 439,238</td>
		</tr>
		<tr>
			<td colspan="2">7th floor electrical & plumbing work complete</td>
		</tr>
		<tr>
			<td colspan="8" style="text-align: center; color:#25316D; font-weight:bolder;">&nbsp;</td>
		</tr>
		<tr>
			<td rowspan="5" style="text-align: center; color:#25316D; font-weight:bolder;">Eight Floor</td>
			<td colspan="2">7 days before starting 8th floor Inner plaster work </td>
			<td colspan="3" rowspan="3">As per Total cost</td>
			<td colspan="2" rowspan="3">₹ 695,211</td>
		</tr>
		<tr>
			<td colspan="2">9th floor False ceiling channel </td>
		</tr>
		<tr>
			<td colspan="2">9th floor electrical plumbing</td>
		</tr>
		<tr>
			<td colspan="2">5 days before starting 8th floor False ceiling channel work </td>
			<td colspan="3" rowspan="2">As per Finishing cost</td>
			<td colspan="2" rowspan="2">₹ 439,238</td>
		</tr>
		<tr>
			<td colspan="2">8th floor electrical & plumbing work complete</td>
		</tr>
		<tr>
			<td colspan="8" style="text-align: center; color:#25316D; font-weight:bolder;">&nbsp;</td>
		</tr>
		<tr>
			<td rowspan="5" style="text-align: center; color:#25316D; font-weight:bolder;">Whole Project</td>
			<td colspan="2">All SS railing</td>
			<td colspan="3" rowspan="2">As per Total cost</td>
			<td colspan="2" rowspan="2">₹ 208,582</td>
		</tr>
		<tr>
			<td colspan="2">Outer flooring</td>
		</tr>
		<tr>
			<td colspan="2">Complete sanitary fitting</td>
			<td colspan="3" rowspan="3">As per Total Cost</td>
			<td colspan="2" rowspan="3">₹ 106,678</td>
		</tr>
		<tr>
			<td colspan="2">Complete electrical fitting</td>
		</tr>
		<tr>
			<td colspan="2">All Doors fitting</td>
		</tr>
		<tr>
			<td></td>
			<td colspan="2">Final Handover</td>
			<td colspan="5" style="text-align: center;color:#25316D; font-weight:bolder;">₹ 7,088,489</td>
		</tr>
	</table>';
echo $html;
?>