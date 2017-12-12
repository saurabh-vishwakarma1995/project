<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice</title>

            <script type="text/javascript">
        function printContent(el)
        {
            var r=document.body.innerHTML;
            var p=document.getElementById(el).innerHTML;
            document.body.innerHTML = p;
            window.print();
            document.body.innerHTML=r;
        }
    
        /*    console.log("prtContent", prtContent.innerHTML);
            var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
            WinPrint.document.write(prtContent.innerHTML);
            WinPrint.document.close();
            WinPrint.focus();
            WinPrint.print();
            WinPrint.close();*/
        
</script>
    <style>
    .invoice-box{
        max-width:1200px;
        margin:auto;
        padding:30px;
        border:1px solid #eee;
        box-shadow:0 0 10px rgba(0, 0, 0, .15);
        font-size:16px;
        line-height:24px;
        font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color:#555;
        margin-left: 34px;
    }

    .invoice-box table{
        width:100%;
        line-height:inherit;
        text-align:left;
    }

    .invoice-box table td{
        padding:5px;
        vertical-align:top;
    }

    .invoice-box table tr td:nth-child(2){
        text-align:right;
    }

    .invoice-box table tr.top table td{
        padding-bottom:20px;
    }

    .invoice-box table tr.top table td.title{
        font-size:45px;
        line-height:45px;
        color:#333;
    }

    .invoice-box table tr.information table td{
        padding-bottom:40px;
    }

    .invoice-box table tr.heading td{
        background:#eee;
        border-bottom:1px solid #ddd;
        font-weight:bold;
    }

    .invoice-box table tr.details td{
        padding-bottom:20px;
    }

    .invoice-box table tr.item td{
        border-bottom:1px solid #eee;
    }

    .invoice-box table tr.item.last td{
        border-bottom:none;
    }

    .invoice-box table tr.total td:nth-child(2){
        border-top:2px solid #eee;
        font-weight:bold;
    }

    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td{
            width:100%;
            display:block;
            text-align:center;
        }

        .invoice-box table tr.information table td{
            width:100%;
            display:block;
            text-align:center;
        }
    }
    .printinvoice {margin-left: 1150px;}
    
    .invoice-box  
    {
        background-image: url("gnf.png"); 
        opacity: 0.75;
        background-repeat: no-repeat;
        background-size: 100%;
        color: black;
        font-weight: bold;
    }


    </style>
</head>

<body>

<div class="printinvoice">
<h1>
    <div>
        <td>
            <button onclick="printContent('div1')">Print Invoice</button>
        </td>    
    </div>
 </h1>   
</div>

    <div id="div1" class="invoice-box" align="center" >
        <img src="letterhead.png" width="1100" hspace="50" height="150">
        <br><br><br><br><br>
        <table cellpadding="0" cellspacing="0" align="center" border="1">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="/Media/gnf_logo.png" style="width:100%; max-width:300px;">
                            </td>

                            
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table style="background-size: 100%;">
                        <tr>
                            
                            <td>
                                <br>
                                <br>
                                  Patient Name: {{billDetails.patient_name}}
                                <br><br>
                                Mobile Number: {{billDetails.mobile_no}}
                                <br>
                                <br>
                                Age: {{billDetails.patient_age}}
                                <br>
                                <br>
                            </td>
                            
                            <td>
                                <br>
                                <br>
                                Bill No. #: {{billDetails.bill_no}}
                                <br>
                                <br>
                                Token: {{billDetails.token}}
                                <br>
                                <br>
                                OP No.: {{billDetails.op_no}}
                                <br>
                                <br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

<!--             <tr class="heading">
                <td>
                    Payment Method
                </td>

                <td>
                    Check #
                </td>
            </tr>

            <tr class="details">
                <td>
                    Check
                </td>

                <td>
                    1000
                </td>
            </tr>
 -->
            <tr class="heading">
                <td align="center">
                    Particulars
                </td>

                <td>
                    Price
                </td>
            </tr>
            <tr class="item">
                <td>
                <br>
                    {{billDetails.particulars}}
                    <br>
                </td>

                <td>
                <br>
                    {{billDetails.amount}}
                    <br>
                </td>
            </tr>

        </table>

    </div>
</body>




</html>
