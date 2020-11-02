<?php
use App\Http\Controllers\Controller;
$companies = Controller::companies();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice</title>
  </head>
<body>
<div>
    <table>
        <tr>
            <td>
              @foreach ($companies as $comp)
                <b>{{$comp->name}}</b> <br>{{$comp->address}}<br>{{$comp->email}}<br>
                {{$comp->mobile}}
                <?php
                  break;
                ?>
              @endforeach
            </td>
        </tr>
        <tr>
            @foreach ($orderdetails as $order)
            <td style="margin-left: 420px;">DT : {{$order->created_at}}</td>
            <?php
              break;
            ?>
            @endforeach
        </tr>
    </table>
    <table border="1" style="padding-top: 5px;padding-left: 5px;">
        <tr>
            <th style="text-align: left">Shipping Address</th>
            <th style="text-align: left;">Billing Address</th>
        </tr>
        <tr>
            @foreach ($orderdetails as $order)
            <td>
                <b>{{$order->customer_name}}</b> <br>{{$order->address}} , {{$order->landmark}}<br>{{$order->email}}<br>
                <?php
                  break;
                ?>
            </td>
            @endforeach
            @foreach ($addressdetails as $address)
            <td>
                <b>{{$address->customer_name}}</b> <br>{{$address->address}} , {{$address->landmark}}<br>{{$address->email}}<br>
                <?php
                  break;
                ?>
            </td>
            @endforeach
        </tr>
    </table>
</div>
<br>
<div>
    <table border="" style="padding-top: 5px;padding-left: 5px;">
        <tr>
            <th>No</th>
            <th>Product Name</th>
            <th>Qty</th>
            <th>Price</th>
        </tr>
        @php
            $i=1;
        @endphp
        @foreach ($orderdetails as $order)
            <tr>
                <td style="text-align: center;">{{$i}}</td>
                <td style="text-align: center;">{{$order->product_name}} ({{$order->ram}},{{$order->storage}})</td>
                <td style="text-align: center;">{{$order->qty}}</td>
                <td style="text-align: center;">{{$order->qty*$order->price}}</td>
                @php
                    $i++;
                @endphp
             </tr>
          @endforeach
    </table>
    <table>
        <tr style="padding-top: 15px;">
             <td colspan="3" style="margin-left: 370px;font-size: 18px;">Shipping Charge:</td>
             @foreach ($orderdetails as $order)
                <td style="text-align: center;;font-size: 16px;">00 /-</td>
                <?php
                  break;
                ?>
                @endforeach
         </tr>
        <tr>
             <td colspan="3" style="margin-left: 370px;font-size: 18px;">Total Amount:</td>
             @foreach ($orderdetails as $order)
                <td style="text-align: center;;font-size: 16px;">{{$order->amount}} /-</td>
                <?php
                  break;
                ?>
             @endforeach
         </tr>
    </table>
</div>
<div id="footer_content">
    <span style="font-size: 14px;">Page No.1/1</span>
</div>

</body>
</html>