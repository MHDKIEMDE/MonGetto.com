@extends('dashboard.layouts.appAdmin')
@section('titre', 'Order invoice')
@section('contents')
    <div class="dashboard_content">
        <h2 class="dashboard_title">order invoice</h2>
        <div class="dashboard_order_invoice_area mt_20">
            <a class="back_btn common_btn" href="{{ route('admin.order') }}"><i class="far fa-long-arrow-left"></i> Go
                Back <span></span></a>
            <div class="dashboard_order_invoice wow fadeInUp" data-wow-duration="1.5s">
                <div class="dashboard_invoice_logo_area">
                    <div class="invoice_logo">
                        <img src="{{ asset('assets/images/logo_1.png') }}" alt="logo" class="img-fluid w-100">
                    </div>
                    <div class="text">
                        <h2>invoice</h2>
                        <p>invoice no: #4574</p>
                        <p>date: 16-10-2024</p>
                    </div>
                </div>
                <div class="dashboard_invoice_header">
                    <div class="text">
                        <h2>Bill To</h2>
                        <p>7232 Broadway Suite 308, Jackson Heights, 11372, NY, United States</p>
                        <p>+1347-430-9510</p>
                        <p>example@gmail.com</p>
                    </div>
                    <div class="text">
                        <h2>Ship To</h2>
                        <ul>
                            <li><span>Name:</span> Koile Lavendra</li>
                            <li><span>Email:</span> example@yahoo.com</li>
                            <li><span>Phone:</span> (123) - 222 -1452</li>
                            <li><span>Address:</span> 441, 4th street, Washington DC, USA</li>
                        </ul>
                    </div>
                </div>
                <div class="invoice_table dashboard_order">
                    <div class="table-responsive">
                        <table>
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                                <tr>
                                    <td>Lemon Meat Bone</td>
                                    <td>$25.00</td>
                                    <td>01</td>
                                    <td>$25.00</td>
                                </tr>
                                <tr>
                                    <td>Fresh Red Seedless</td>
                                    <td>$30.00</td>
                                    <td>02</td>
                                    <td>$60.00</td>
                                </tr>
                                <tr>
                                    <td>Carrot Vegetables</td>
                                    <td>$50.00</td>
                                    <td>01</td>
                                    <td>$50.00</td>
                                </tr>
                                <tr>
                                    <td colspan="3"><b>Subtotal</b></td>
                                    <td><b>$440.00</b></td>
                                </tr>
                                <tr>
                                    <td colspan="3">Delivery Charge</td>
                                    <td>$10.00</td>
                                </tr>
                                <tr>
                                    <td colspan="3"><b>Total</b></td>
                                    <td><b>$135.00</b></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="dashboard_invoice_footer">
                    <h4>Notes</h4>
                    <p>Thanks for your purchase</p>
                    <a class="common_btn" href="#"><i class="far fa-print"></i> Print
                        PDF<span></span></a>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!--=========================
            DASHBOARD INFO END
        ==========================-->
@endsection
