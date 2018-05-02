<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\OrderDetail;
use App\Order;
use App\Shipping;
use DB;
use App\Payment;
use PDF;
use App\User;

class OrderController extends Controller
{
    public function showOrderInfo() {
//        $orders = Order::all();
        $orders = DB::table('orders')
            ->join('customers', 'orders.customer_id', '=', 'customers.id')
            ->join('payments', 'orders.id', '=', 'payments.order_id')
            ->select('orders.*', 'customers.first_name','customers.last_name', 'payments.payment_type', 'payments.payment_status')
            ->orderBy('id', 'desc')
            ->get();

        return view('admin.order.show-order', ['orders'=>$orders]);
    }
    public function viewOrderDetail($id) {
        $order = Order::find($id);
        $customer = Customer::find($order->customer_id);
        $shipping = Shipping::find($order->shipping_id);
        $payment = Payment::find($order->id);

        $products = OrderDetail::where('order_id', $id)->get();

        return view('admin.order.view-order',[
            'customer' => $customer,
            'shipping' => $shipping,
            'products' => $products,
            'payment' => $payment
        ]);
    }

    public function viewOrderInvoice($id) {
        $order = Order::find($id);
        $customer = Customer::find($order->customer_id);
        $shipping = Shipping::find($order->shipping_id);
        $payment = Payment::find($order->id);
        $products = OrderDetail::where('order_id', $id)->get();

        return view('admin.order.show-invoice', [
            'customer' => $customer,
            'shipping' => $shipping,
            'products' => $products,
            'payment' => $payment,
            'order' => $order
        ]);
    }
    public function myPdf() {
        $users = User::all();
        $pdf = PDF::loadView('pdf', ['users'=>$users]);
        return $pdf->stream('demo.pdf');
    }

    public function downloadOrderInvoice($id) {
        $order = Order::find($id);
        $customer = Customer::find($order->customer_id);
        $shipping = Shipping::find($order->shipping_id);
        $payment = Payment::find($order->id);
        $products = OrderDetail::where('order_id', $id)->get();

        $pdf = PDF::loadView('admin.order.download-invoice', [
            'customer' => $customer,
            'shipping' => $shipping,
            'products' => $products,
            'payment' => $payment,
            'order' => $order
        ]);
        return $pdf->stream('0000'.$order->id.'.pdf');
    }
}
