@extends('layouts.backend.app')

@section('title','Order Invoice')

@push('css')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
@endpush

@section('content')
<div id="invoice">
    <div class="toolbar hidden-print">
        <div class="row" style="justify-content:space-between; margin:0;">
            <div class="text-left">
                <a href="{{ route('backend.orders.index') }}" class="btn-shadow btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fas fa-arrow-circle-left fa-w-20"></i>
                    </span>
                    {{ __('Back to list') }}
                </a>
            </div>
            <div class="text-right">
                <button id="printInvoice" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
                <!-- <button class="btn btn-info"><i class="fa fa-file-pdf-o"></i> Export as PDF</button> -->
            </div>
        </div>
        <hr>
    </div>
    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
            <header>
                <div class="row">
                    <div class="col">
                        <a target="_blank" href="">
                            <!-- <img src="http://lobianijs.com/lobiadmin/version/1.0/ajax/img/logo/lobiadmin-logo-text-64.png" data-holder-rendered="true" /> -->
                            ENSWADESH
                        </a>
                    </div>
                    <div class="col company-details">
                        <div class="row">
                            <div class="col">
                                <h4>ORDER STATUS:</h4>
                            </div>
                            <div class="col">
                                <form action="">
                                    @csrf
                                    <input type="hidden" id="order_id" name="order_id" value="{{ $order->id }}">
                                    <select class="custom-select custom-select-lg changeStatus">
                                        <option value="0" {{ $order->order_status == 0 ? "selected" : "" }}>Pending</option>
                                        <option value="1" {{ $order->order_status == 1 ? "selected" : "" }}>Processing</option>
                                        <option value="2" {{ $order->order_status == 2 ? "selected" : "" }}>Delivery</option>
                                        <option value="3" {{ $order->order_status == 3 ? "selected" : "" }}>Complete</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <main>
                <div class="row contacts">
                    <div class="col invoice-to">
                        <div class="text-gray-light">INVOICE TO:</div>
                        <h2 class="to">{{ $order->billing_name }}</h2>
                        <div class="address">{{ $order->billing_address }}</div>
                        <div class="email"><a href="mailto:{{ $order->billing_email }}">{{ $order->billing_email }}</a></div>
                    </div>
                    <div class="col invoice-details">
                        <h1 class="invoice-id">INVOICE NO: {{ $order->order_no }}</h1>
                        <div class="date">Date of Invoice: {{ $order->created_at->format('d/m/Y') }}</div>
                        <!-- <div class="date">Due Date: 30/10/2018</div> -->
                    </div>
                </div>
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-right">PRICE</th>
                            <th class="text-right">QUANTITY</th>
                            <th class="text-right">TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($items as $k => $item)
                        <tr>
                            <td class="no">{{ $k+1 }}</td>
                            <td class="text-left">
                                <h3><a target="_blank" href="https://www.youtube.com/channel/UC_UMEcP_kF0z4E6KbxCpV1w">Basundhara Ata</a></h3>
                            </td>
                            <td class="unit">$0.00</td>
                            <td class="qty">100</td>
                            <td class="total">$0.00</td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">SUBTOTAL</td>
                            <td>$5,200.00</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">TAX 25%</td>
                            <td>$1,300.00</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">GRAND TOTAL</td>
                            <td>$6,500.00</td>
                        </tr>
                    </tfoot>
                </table>
                <div class="thanks">Thank you!</div>
                <!-- <div class="notices">
                    <div>NOTICE:</div>
                    <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
                </div> -->
            </main>
            <footer>
                Invoice was created on a computer and is valid without the signature and seal.
            </footer>
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
</div>
@endsection

@push('js')

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
     $('#printInvoice').click(function(){
        Popup($('.invoice')[0].outerHTML);
        function Popup(data) 
        {
            window.print();
            return true;
        }
    });



    $('select.changeStatus').change(function(){
        var orderId = $('#order_id').val();

        $.ajax({
            type: 'PUT',
            url: '/backend/orders/' + orderId,
            data: {
                _token:  $('input[name="_token"]').val(),
                order_status: $('select.changeStatus').val()
            },
            success: function(data){
                // alert('Sucessfully changed status');                
                window.location.href = "{{ route('backend.orders.index') }}";                
             }
        });

    });
</script>
@endpush