<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>FTTH Bill</title>
	<link href="http://203.122.58.66/media/style_march.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="main">
<div class="header"><img alt="alt" src="http://203.122.58.66/media/top_ban_feb.png" /></div>

<div class="content">
<div class="name">
<div class="name_detail1">
<div class="name_detail1_1 style1">$formatter.escapeHTML($accountInfo.getActname())</div>

<div class="name_detail1_1">$formatter.escapeHTMLandBR($accountInfo.getAddress())</div>

<div class="name_detail1_1">$formatter.escapeHTML($accountInfo.getCityname())</div>

<div class="name_detail1_1">Mobile $formatter.escapeHTML($accountInfo.getPhone())</div></div>

<div class="name_detail2">
<div class="name_detail2_1 style1">Customer Account Number (CAN)</div>

<div class="name_detail2_1">Bill Number</div>

<div class="name_detail2_1">Bill Period</div>

<div class="name_detail2_1">Bill Date</div>

<div class="name_detail2_1">Due Date</div>

<div class="name_detail2_1">Plan Name</div>

<div class="name_detail2_1">Plan Description</div>
</div>

<div class="name_detail3">
<div class="name_detail3_1 style1">$formatter.escapeHTML($accountInfo.getActid())</div>

<div class="name_detail3_1">#if($invoice.isTrial()) TRIAL #else $invoice.invoiceNo #end</div>

<div class="name_detail3_1">$formatter.formatDate($invoice.invoiceStart," d MMMM, yyyy") to $formatter.formatDateWithAdjust($invoice.invoiceEnd," d MMMM, yyyy")</div>

<div class="name_detail3_1">$formatter.formatDate($invoice.invoiceDate," d MMMM, yyyy")</div>

<div class="name_detail3_1">$formatter.formatDate($invoice.dueDate," d MMMM, yyyy")</div>

<div class="name_detail3_1">#foreach($subsno in $invoice.getSubscriptionNumbers()) 
$invoice.getRatePlanId($subsno) 
<br />
#end</div>

<div class="name_detail3_1">#foreach($subsno in $invoice.getSubscriptionNumbers()) 
$invoice.getRatePlanDescription($subsno) 
<br />
#end</div></div>
</div>

<div class="account">
<div class="account_1"><span class="font_si">Account Summary</span></div>

<div class="account_2">
<table border="1" cellpadding="0" cellspacing="0" style="border-color:#bcbec0;" width="100%">
	<tbody>
		<tr align="center">
			<td bgcolor="#e6e7e8" class="style1" height="32" scope="col" width="14.28%">Previous Balance</td>
			<td bgcolor="#e6e7e8" class="style1" scope="col" width="14.28%">Last Payment</td>
			<td bgcolor="#e6e7e8" class="style1" scope="col" width="14.28%">Adjustment</td>
			<td bgcolor="#e6e7e8" class="style1" scope="col" width="14.28%">Current Bill Charges</td>
			<td bgcolor="#e6e7e8" scope="col" width="14.28%"><span class="style1 color_ch1">Amount Payable</span></td>
			<td bgcolor="#e6e7e8" scope="col" width="14.28%"><span class="style1 color_ch1">Due Date</span></td>
			<td bgcolor="#e6e7e8" scope="col" width="14.28%"><span class="style1 color_ch1">Amount Payble After Due Date</span></td>
		</tr>
		<tr align="center">
			<td height="34"><span class="style3">R</span> $formatter.formatNumber($invoice.getOpeningBalance())
</td>
			<td><span class="style3">R</span> $formatter.formatNumber($invoice.getPaymentsSinceLastInvoice()) 
</td>
			<td><span class="style3">R</span> 0.00</td>
			<td><span class="style3">R</span> $formatter.formatNumber($invoice.getInvoiceTotal(false))
</td>
			<td class="style1"><span class="style3">R</span> $formatter.formatNumber($invoice.getInvoiceTotal(true))
</td>
			<td class="style1">$formatter.formatDate($invoice.dueDate," d MMMM, yyyy")
</td>
			<td class="style1"><span class="style3">R</span> $formatter.formatNumber($invoice.totalDueAfterDueDate())
</td>
		</tr>
	</tbody>
</table>
</div>
</div>

<div class="bill_summary">
<div class="account_1"><span class="font_si">Bill Summary</span></div>

<div class="bill_summary_2">
<div class="bill_summary_21">
<div class="bill_summary_21_1">
<div class="bill_summary_21_1_heading color_ch1 style1">Description</div>

<div class="bill_summary_21_1_heading">
<div class="bill_summary_21_1_box">1.</div>

<div class="bill_summary_21_1_box2">Installation charges</div>
</div>

<div class="bill_summary_21_1_heading">
<div class="bill_summary_21_1_box">2.</div>

<div class="bill_summary_21_1_box2">Monthly charges</div>
</div>

<div class="bill_summary_21_1_heading">
<div class="bill_summary_21_1_box">3.</div>

<div class="bill_summary_21_1_box2">Top Up /VAS / Others</div>
</div>

<div class="bill_summary_21_1_heading">
<div class="bill_summary_21_1_box">4.</div>

<div class="bill_summary_21_1_box2">Advance rental charges</div>
</div>

<div class="bill_summary_21_1_heading">
<div class="bill_summary_21_1_box">5.</div>

<div class="bill_summary_21_1_box2">Discounts</div>
</div>

<div class="bill_summary_21_1_heading">
<div class="bill_summary_21_1_box">6.</div>

<div class="bill_summary_21_1_box2">Last bill period late fee</div>
</div>

<div class="bill_summary_21_1_heading">
<div class="bill_summary_21_1_box">7.</div>

<div class="bill_summary_21_1_box2">Taxes</div>
</div>

<div class="bill_summary_21_1_heading style1">Current Bill Charges</div>
</div>

<div class="bill_summary_21_2">
<div class="bill_summary_21_2_heading color_ch1 style1">Amount <span class="style3">R</span></div>

<div class="bill_summary_21_2_heading">#set( $installationChargeTotal = $formatter.parseFloat("0.0") )
#set( $installationChargeTotalTax = $formatter.parseFloat("0.0") )
#set( $installationChargeDate = "")
#foreach($li in $invoice.filterLineItems(0,"*",-1)) 
#if( $li.getDescription() == "Installation Charge" )
#set( $installationChargeTotal = $installationChargeTotal + $li.getDebit().floatValue() - $li.getCredit().floatValue() - $li.getDiscount().floatValue() )
#set( $installationChargeTotalTax = $installationChargeTotalTax + $li.getTax().floatValue() )
#set( $installationChargeDate = $li.periodStartDt )
#end
#end
$formatter.formatNumber($installationChargeTotal)
</div>

<div class="bill_summary_21_2_heading">#set( $recCharge = $formatter.parseFloat("0.0") )
#foreach($li in $invoice.filterLineItems(1,"*",-1)) 
#if ( ! $li.getDescription().startsWith("Top Up" ) )
#set ( $recCharge = $recCharge + $li.getDebit().floatValue() - $li.getCredit().floatValue() - $li.getDiscount().floatValue() )
#end
#end		
$formatter.formatNumber($recCharge)</div>

<div class="bill_summary_21_2_heading">#set( $topUpTotal = $formatter.parseFloat("0.0") )
#foreach($li in $invoice.filterLineItems(0,"*",-1)) 
#if ( $li.getDescription().startsWith("Top Up" ) )
#set ( $topUpTotal = $topUpTotal + $li.getDebit().floatValue() - $li.getCredit().floatValue() - $li.getDiscount().floatValue() )
#end
#end
#foreach($li in $invoice.filterLineItems(1,"*",-1)) 
#if (  $li.getDescription().startsWith("Top Up" ) )
#set ( $topUpTotal = $topUpTotal + $li.getDebit().floatValue() - $li.getCredit().floatValue() - $li.getDiscount().floatValue() )
#end
#end		
$formatter.formatNumber($topUpTotal)
</div>

<div class="bill_summary_21_2_heading">#set( $otherChargeTotal = $formatter.parseFloat("0.0") )
#foreach($li in $invoice.filterLineItems(0,"*",-1)) 
#if( $li.getDescription() == "Installation Charge" )
#elseif( $li.getDescription() == "Late Fine" )
#elseif (  $li.getDescription().startsWith("Top Up" ) )
#else
#set( $otherChargeTotal = $otherChargeTotal + $li.getDebit().floatValue() - $li.getCredit().floatValue() - $li.getDiscount().floatValue() )
#end
#end
$formatter.formatNumber($otherChargeTotal)
</div>

<div class="bill_summary_21_2_heading">$formatter.formatNumber($invoice.getSumOfAllDiscounts())</div>

<div class="bill_summary_21_2_heading">#set( $lateFineTotal = $formatter.parseFloat("0.0") )
#foreach($li in $invoice.filterLineItems(0,"*",-1)) 
#if ( $li.getDescription() == "Late Fine" )
#set ( $lateFineTotal = $lateFineTotal + $li.getDebit().floatValue() - $li.getCredit().floatValue() - $li.getDiscount().floatValue() )
#end
#end
$formatter.formatNumber($lateFineTotal)
</div>

<div class="bill_summary_21_2_heading">$formatter.formatNumber($invoice.getSumOfAllTaxes())</div>

<div class="bill_summary_21_2_heading style1">$formatter.formatNumber($invoice.getInvoiceTotal(false))</div>
</div>
<!--<div class="bill_summary_21_nearest"><span class="style1">Nearest Dealer</span><br />
$formatter.escapeHTMLandBR($invoice.getDomainMetaTagValue("nearestDealer",""))</div>--></div>
<a href="https://my.spectranet.in"><img alt="alt" height="351" src="http://203.122.58.66/media/images/New_discover_2015.jpg" width="425" /></a></div>
</div>

<div class="pay">
<div class="pay_1"><span class="font_si">To Pay or Schedule a Collection</span><span class="font_si2"> (collection request will be charged an additional </span><span class="style3">R</span><span class="font_si2"> 25 per visit)</span></div>

<div class="pay_1">
<div class="pay_box2">Online (Credit and Debit Cards only)</div>

<div class="pay_box21">my.spectranet.in</div>
</div>

<div class="pay_1">
<div class="pay_box2">In person (Cash, Credit or Debit Cards only)</div>

<div class="pay_box21">At nearest dealer, details as above</div>
</div>

<div class="pay_1">Service Tax Registration No. AADCC3694EST001<br />
<strong>Corporate Office</strong> : Citycom Networks Pvt. Ltd., Plot No. 21-22, Third Floor, Sector 19, Udyog Vihar, Phase 4, Gurgaon 122015

<p><em>This is a computer generated bill, paper bill will be charged at <span class="style3">R </span>50 per request</em></p>
</div>
</div>
</div>
</div>

<p class="breakhere"> </p>

<div style="clear: both"> </div>

<div class="main">
<div class="header"><img alt="alt" src="http://203.122.58.66/media/top_ban_feb.png" /></div>

<div class="content">
<div class="account">
<div class="account_1 style1"><br />
<span class="font_si">Payment History</span></div>

<div class="account_2">
<table border="0" cellpadding="0" cellspacing="0" style="border-color:#bcbec0;" width="52%">
	<tbody>
		<tr align="center">
			<td bgcolor="#e6e7e8" class="style1" height="32" scope="col" width="18%">Last Payment Mode</td>
			<td bgcolor="#e6e7e8" class="style1" scope="col" width="18%">Date</td>
			<td bgcolor="#e6e7e8" class="style1" scope="col" width="18%">Amount <span class="style3">R</span></td>
		</tr>
		#foreach($tr in $invoice.getLastCreditTransactions(5)) 

		<tr align="center">
			<td height="34">$formatter.escapeHTML($tr.descr)
</td>
			<td>$formatter.formatDate($tr.transactiondt," d MMMM, yyyy")
</td>
			<td>$formatter.formatNumber($tr.amount)
</td>
		</tr>
		#end

	</tbody>
</table>
</div>
</div>

<div class="account">
<div class="account_1 style1"><br />
<span class="font_si">Description of Current Charges</span></div>

<div class="account_2">
<table border="0" cellpadding="5" cellspacing="0" style="border-color:#bcbec0; " width="100%">
	<tbody>
		<tr align="center">
			<td align="left" bgcolor="#e6e7e8" height="30" scope="col" width="182"><span class="style1">Bill Generated on $formatter.formatDate($invoice.invoiceDate," d MMMM, yyyy")<br/> 
 </span><span class="style4">(for period $formatter.formatDate($invoice.invoiceStart," d MMMM, yyyy") to $formatter.formatDateWithAdjust($invoice.invoiceEnd," d MMMM, yyyy"))
 </span></td>
			<td bgcolor="#e6e7e8" class="style1" scope="col" width="76">Amount <span class="style3">R</span></td>
			<td bgcolor="#e6e7e8" class="style1" scope="col" width="78">Taxes <span class="style3">R</span></td>
			<td bgcolor="#e6e7e8" class="style1" scope="col" width="78">Current Bill Charges <span class="style3">R</span></td>
			<td bgcolor="#e6e7e8" class="style1" scope="col" width="78">Opening Balance <span class="style3">R</span></td>
			<td bgcolor="#e6e7e8" class="style1" scope="col" width="78">Net Amount Payable <span class="style3">R</span></td>
			<td bgcolor="#e6e7e8" class="style1" scope="col" width="112">Due Date</td>
		</tr>
		#set ( $serial = 1)
#foreach($li in $invoice.filterLineItems(1,"*",-1)) 

		<tr align="center">
			<td align="left" height="25">$serial
. #set ( $serial = $serial + 1)
 $formatter.escapeHTML($li.getDescription())
 #set ( $recCharge = $li.getDebit().floatValue() - $li.getCredit().floatValue())
</td>
			<td>$formatter.formatNumber($recCharge)
</td>
			<td>$formatter.formatNumber($li.getTax())
</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
		</tr>
		<tr align="center">
			<td align="left" height="25">Less Discount</td>
			<td>$formatter.formatNumber($li.getDiscount())
</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
		</tr>
		#end		
#foreach($li in $invoice.filterLineItems(0,"*",-1)) 
#if ( $li.getDescription().startsWith("Top Up" ) )

		<tr align="center">
			<td align="left" height="25">$serial
. #set ( $serial = $serial + 1)
 $formatter.escapeHTML($li.getDescription())
 #set ( $topUpTotal = $li.getDebit().floatValue() - $li.getCredit().floatValue() - $li.getDiscount().floatValue() )
</td>
			<td>$formatter.formatNumber($topUpTotal)
</td>
			<td>$formatter.formatNumber($li.getTax())
</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
		</tr>
		#end
#end
#foreach($li in $invoice.filterLineItems(0,"*",-1)) 
#if ( $li.getDescription().startsWith("Top Up" ) )
#elseif ( $li.getDescription().startsWith("Installation" ) )
#elseif ( $li.getDescription().startsWith("Late" ) )
#else

		<tr align="center">
			<td align="left" height="25">$serial
. #set ( $serial = $serial + 1)
 $formatter.escapeHTML($li.getDescription())
 #set ( $vasTotal = $li.getDebit().floatValue() - $li.getCredit().floatValue() - $li.getDiscount().floatValue() )
</td>
			<td>$formatter.formatNumber($vasTotal)
</td>
			<td>$formatter.formatNumber($li.getTax())
</td>
			<td>VAS</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
		</tr>
		#end
#end

		<tr align="center">
			<td align="left" height="25">Gross Bill Value</td>
			<td>#set ( $grossTotal=$invoice.getNetSumOfAllNRC() + $invoice.getNetSumOfAllRC() )
$formatter.formatNumber($grossTotal)
</td>
			<td>$formatter.formatNumber($invoice.getSumOfAllTaxes())
</td>
			<td>$formatter.formatNumber($invoice.getInvoiceTotal(false))
</td>
			<td>$formatter.formatNumber($invoice.getOpeningBalance())
</td>
			<td>$formatter.formatNumber($invoice.getInvoiceTotal(true))
</td>
			<td>$formatter.formatDate($invoice.dueDate, "d MMMM, yyyy")
</td>
		</tr>
	</tbody>
</table>
</div>
#if ( $installationChargeTotal > 0.0 )


<div class="pay_1"><em>*Installation Charge of <span class="style3">R</span> $installationChargeTotal (exclusive of <span class="style3">R</span> $formatter.formatNumber($installationChargeTotalTax) as Taxes) paid on $formatter.formatDate($installationChargeDate," d MMMM, yyyy")
</em></div>
#end


<div class="pay">
<div class="pay_1"><em><span class="font_si">Taxes</span></em></div>

<div class="pay_1">
<div class="pay_box2 style1"><em>Description</em></div>

<div class="pay_box211 style1"><em>Amount<span class="style3">R</span></em></div>
</div>
<em>#set ($totalTax = $invoice.getSumOfAllTaxes())
#set ($ratio = $formatter.parseFloat("1.03"))
#set ($serviceTax = $totalTax.floatValue()/$ratio.floatValue())
</em>

<div class="pay_1">
<div class="pay_box2"><em>Service Tax @ 12%</em></div>

<div class="pay_box211"><em>$formatter.formatNumber($serviceTax)
* </em></div>
<em>#set ($eduCessPer = $formatter.parseFloat("0.02"))
#set ($eduCess = $serviceTax.floatValue()*$eduCessPer.floatValue())
</em>

<div class="pay_1">
<div class="pay_box2"><em>Education Cess @ 2% (On Service Tax)</em></div>

<div class="pay_box211"><em>$formatter.formatNumber($eduCess)
</em></div>
<em>#set ($sheCessPer = $formatter.parseFloat("0.01"))
#set ($sheCess = $serviceTax.floatValue()*$sheCessPer.floatValue())
</em>

<div class="pay_1">
<div class="pay_box2"><em>Secondary and Higher Education Cess @ 1% (On Service Tax)</em></div>

<div class="pay_box211"><em>$formatter.formatNumber($sheCess)
</em></div>

<div class="pay_1">
<div class="pay_box2 style1"><em>Total</em></div>

<div class="pay_box211 style1"><em>$formatter.formatNumber($invoice.getSumOfAllTaxes())
</em></div>
</div>
</div>
<em> </em>

<div style="clear: both"> </div>
<em> </em>

<p class="breakhere"> </p>

<div style="clear: both"> </div>
<em> </em>

<div class="main">
<div class="header"><em><img alt="alt" src="http://203.122.58.66/media/top_ban_feb.png" /></em></div>

<div class="content">
<div class="pay">
<div class="pay_txt"><br />
<em><span class="font_si">General Information</span> </em>

<ol>
	<li><span style="font-size:9.0pt: ">Self care portal is available at http://my.spectranet.in</span></li>
	<li><span style="font-size:9.0pt; ">Customer Technical Support can be reached at care@spectranet.in or 1800 121 5678(toll Free)</span></li>
	<li><span style="font-size:9.0pt; ">There are no additional or hidden charges for changing plans.</span></li>
	<li><span style="font-size:9.0pt; ">Plan can be changed only once per bill cycle, and will get implemented from next billing cycle.</span></li>
	<li><span style="font-size:9.0pt; ">For disconnection of services request needs to be made to Customer Technical Support from Customer's registered email ID or from registered mobile number.</span></li>
	<li><span style="font-size:9.0pt; ">Disconnection request will be processed once the Customer clears all dues and will be implemented from the following bill cycle.</span></li>
	<li><span style="font-size:9.0pt; ">No charges for any services are levied without confirmation (in writing or online) by the Customer.</span></li>
	<li><span style="font-size:9.0pt; ">In case of any disagreement or clarification regarding the charges in this bill, kindly contact Customer Techincal Support within 7 days from the bill date, after which it shall be construed that all charges mentioned in this bill are in order and acceptable.</span></li>
	<li><span style="font-size:9.0pt; ">Customer is requested to make the payment on or before the due date printed on bill to ensure that late payment charge of Rs.100 (plus tax)is not levied and the amazing experience continues uninterrupted.</span></li>
	<li><span style="font-size:9.0pt; ">Your plan has defined data usage volume. If you wish to use more, you can Top Up online on the self care portal</span></li>
	<li><span style="font-size:9.0pt; ">Citycom Networks Pvt. Ltd. reserves the right to change the terms and conditions applicable to any and all tariff plans, at anytime without prior information or communication. Please visit the self care section on<a href="http://my.spectranet.in"><span style="text-underline:none; color:windowtext; text-decoration:none; "> http://my.spectranet.in</span></a> for latest terms and conditions.</span></li>
	<li><span style="font-size:9.0pt; ">Customer is advised to refer to the Acceptable Use Policy (AUP), available online on the self care portal.</span></li>
	<li><span style="font-size:9.0pt; ">Customer may also contact our nodal officer for any service related matter by email at nodal@spectranet.in</span></li>
	<li><span style="font-size:9.0pt; ">In case you do not get a satisfactory response you may highlight the matter to our appellate authority at appeal@spectranet.in</span></li>
	<li><span style="font-size:9.0pt; ">In case of any grievances kinldy contact the grievance cell at grievance@spectranet.in</span></li>
</ol>
<em> </em></div>
</div>
</div>

<div style="clear: both"> </div>

<div style="clear: both"> </div>
</div>
<em> </em></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>

