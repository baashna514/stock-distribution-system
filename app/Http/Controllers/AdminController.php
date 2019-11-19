<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Stock;
use App\User;
use Exception;

class AdminController extends Controller
{
    public function admin_dashboard(){
        if(!Auth::user()){
            return redirect()->route('user-login');
        }
        return view('admin.admin-dashboard');
    }

    public function product_list(){
        $products = Product::with('category')->get();
        return view('admin.product.product-list', ['products'=>$products]);
    }

    public function product_add(){
        $categories = Category::all();
        return view('admin.product.product-add', ['categories'=>$categories]);
    }

    public function product_add_action(Request $request){
        try{
            // dd($request->all());
            
            $product = new Product();
            $product->name = $request->name;
            $product->category_id = $request->category;
            $product->size = $request->size;
            if($request->pet == 'Choose pet'){
                $product->pet = $request->carton;
            }
            elseif($request->carton == 'Choose carton'){
                $product->pet = $request->pet;
            }
            $product->price = $request->price;
            $product->save();
            $notification = array(
                'message' => 'Product added!', 
                'alert-type' => 'success'
            );
        }
        catch(Exception $e){
            $notification = array(
                'message' => 'Error occur!', 
                'alert-type' => 'danger'
            );
        }
       return redirect()->back()->with($notification);
    }

    public function edit_product($id){
        $product = Product::with('category')->where('id', $id)->first();
        $categories = Category::all();
        return view('admin.product.product-edit', ['categories'=>$categories])->with('product', $product);
    }

    public function update_product(Request $request, $id){
        $product = $request->all();
        if($request->pet == null){
            $pet = $request->carton;
        }
        elseif($request->carton == null){
            $pet = $request->pet;
        }
        try{
            Product::where('id', $id)->update([
                'name'=> $product['name'],
                'category_id'=> $product['category'],
                'size'=> $product['size'],
                'pet'=> $pet,
                'price'=> $product['price']
            ]);
            $notification = array(
                'message' => 'Product updated!', 
                'alert-type' => 'success'
            );
        }
        catch(Exception $e){
            return $e->getMessage();
            $notification = array(
                'message' => $e->getMessage(), 
                'alert-type' => 'danger'
            );
        }
        return redirect()->back()->with($notification);
    }

    public function delete_product($id){
        try{
            $product = Product::find($id);
            $product->delete();
            $notification = array(
                'message' => 'Product deleted!', 
                'alert-type' => 'success'
            );
        }
        catch(Exception $e){
            $notification = array(
                'message' => 'Error occur!', 
                'alert-type' => 'danger'
            );
        }
        return redirect()->back()->with($notification);
    }


    // Customer Functions..................................................................................

    public function customer_add(){
        return view('admin.customer.customer-add');
    }

    public function customer_add_action(Request $request){
        try{
            $customer = new User();
            $customer->name = $request->name;
            $customer->email = $request->email;
            $customer->password = bcrypt($request->password);
            $customer->pass = $request->password;
            $customer->phone = $request->phone;
            $customer->address = $request->address;
            $customer->city = $request->city;
            $customer->user_type = 'customer';
            $customer->status = 'approved';
            $customer->save();
            $notification = array(
                'message' => 'Customer registered!', 
                'alert-type' => 'success'
            );
        }
        catch(Exception $e){
            $notification = array(
                'message' => 'Error occur!', 
                'alert-type' => 'danger'
            );
        }
        return redirect()->back()->with($notification);
    }

    public function customer_edit(Request $request, $id){
        $customer = User::find($id);
        return view('admin.customer.customer-edit')->with('customer', $customer);

    }

    public function customer_update(Request $request, $id){
        try{
            $customer_data = $request->all();
            User::where('id', $id)->update([
                'name' => $customer_data['name'],
                'email' => $customer_data['email'],
                'phone' => $customer_data['phone'],
                'address' => $customer_data['address'],
                'city' => $customer_data['city'],
            ]);
            $notification = array(
                'message' => 'Customer updated!', 
                'alert-type' => 'success'
            );

        }
        catch(Exception $e){
            $notification = array(
                'message' => 'Error occur!', 
                'alert-type' => 'danger'
            );
        }
        return redirect()->back()->with($notification);
    }


    public function customer_list(){
        $customers = User::where(['status'=>'approved', 'user_type'=>'customer'])->get();
        return view('admin.customer.customer-list', ['customers'=>$customers]);
    }

    public function customer_delete($id){
        try{
            $customer = User::find($id);
            $customer->delete();
            $notification = array(
                'message' => 'Customer deleted!', 
                'alert-type' => 'success'
            );
        }
        catch(Exception $e){
            $notification = array(
                'message' => 'Error occur!', 
                'alert-type' => 'danger'
            );
        }
        return redirect()->back()->with($notification);
    }

    public function customers_requests(){
        $customers = User::where(['status'=>'pending', 'user_type'=>'customer'])->get();
        return view('admin.customer.customers-requests', ['customers'=>$customers]);
    }

    public function customers_change_status(Request $request, $id){
        try{
            $customer_data = $request->all();
            User::where('id', $id)->update([
                'status' => $customer_data['status'],
            ]);
            $notification = array(
                'message' => 'Customer approved!', 
                'alert-type' => 'success'
            );
        }
        catch(Exception $e){
            $notification = array(
                'message' => 'Error occur!', 
                'alert-type' => 'danger'
            );
        }
        return redirect()->back()->with($notification);
    }

    public function customer_credentials(){
        $customers = User::where('user_type', 'customer')->get();
        return view('admin.customer.customer-credentials', ['customers'=>$customers]);
    }


    // Distributors Function ..............................................................
    public function distributor_list(){
        $distributors = User::where(['status'=>'approved', 'user_type'=>'distributor'])->get();
        return view('admin.distributor.distributor-list', ['distributors'=>$distributors]);
    }

    public function distributor_delete(Request $request, $id){
        try{
            $distributor = User::find($id);
            $distributor->delete();
            $notification = array(
                'message' => 'Distributor deleted!', 
                'alert-type' => 'success'
            );
        }
        catch(Exception $e){
            $notification = array(
                'message' => 'Error occur!', 
                'alert-type' => 'danger'
            );   
        }
        return redirect()->back()->with($notification);
    }

    public function distributor_requests(){
        $distributors = User::where(['status'=>'pending', 'user_type'=>'distributor'])->get();
        return view('admin.distributor.distributor-requests', ['distributors'=>$distributors]);
    }

    public function distributor_change_status(Request $request, $id){
        try{
            $customer_data = $request->all();
            User::where('id', $id)->update([
                'status' => $customer_data['status'],
            ]);
            $notification = array(
                'message' => 'Distributor approved!', 
                'alert-type' => 'success'
            );
        }
        catch(Exception $e){
            $notification = array(
                'message' => 'Error occur!', 
                'alert-type' => 'danger'
            );
        }
        return redirect()->back()->with($notification);
    }

    public function distributor_add(){
        return view('admin.distributor.distributor-add');
    }

    public function distributor_add_action(Request $request){
        try{
            $customer = new User();
            $customer->name = $request->name;
            $customer->email = $request->email;
            $customer->password = bcrypt($request->password);
            $customer->pass = $request->password;
            $customer->phone = $request->phone;
            $customer->address = $request->address;
            $customer->city = $request->city;
            $customer->user_type = 'distributor';
            $customer->status = 'approved';
            $customer->save();
            $notification = array(
                'message' => 'Distributor registered!', 
                'alert-type' => 'success'
            );
        }
        catch(Exception $e){
            $notification = array(
                'message' => 'Error occur!', 
                'alert-type' => 'danger'
            );
        }
        return redirect()->back()->with($notification);
    }

    public function distributor_edit(Request $request, $id){
        $distributor = User::find($id);
        return view('admin.distributor.distributor-edit')->with('distributor', $distributor);
    }

    public function distributor_update(Request $request, $id){
        try{
            $distributor_data = $request->all();
            User::where('id', $id)->update([
                'name' => $distributor_data['name'],
                'email' => $distributor_data['email'],
                'phone' => $distributor_data['phone'],
                'address' => $distributor_data['address'],
                'city' => $distributor_data['city'],
            ]);
            $notification = array(
                'message' => 'Distributor updated!', 
                'alert-type' => 'success'
            );

        }
        catch(Exception $e){
            $notification = array(
                'message' => 'Error occur!', 
                'alert-type' => 'danger'
            );
        }
        return redirect()->back()->with($notification);
    }

    public function distributor_credentials(){
        $distributors = User::where('user_type', 'distributor')->get();
        return view('admin.distributor.distributor-credentials', ['distributors'=>$distributors]);
    }

    // Stock Functions...................................................................................
    public function add_category(){
        return view('admin.stock.add-category');
    }

    public function add_category_action(Request $request){
        try{
            $category = new Category();
            $category->name = $request->name;
            $category->description = $request->description;
            $category->save();
            $notification = array(
                'message' => 'Category added!', 
                'alert-type' => 'success'
            );
        }
        catch(Exception $e){
            $notification = array(
                'message' => 'Error occur!', 
                'alert-type' => 'danger'
            );
        }
        return redirect()->back()->with($notification);
    }

    public function list_category(){
        $categories = Category::all();
        return view('admin.stock.list-category', ['categories'=>$categories]);
    }

    public function delete_category(Request $request, $id){
        try{
            $category = Category::find($id);
            // adding default category to products.....
            $products = Product::where('category_id', $id)->update([
                'category_id' => '9',
            ]);
            $category->delete();
            $notification = array(
                'message' => 'Category delete!', 
                'alert-type' => 'success'
            );
        }
        catch(Exception $e){
            $notification = array(
                'message' => 'Error occur!', 
                'alert-type' => 'danger'
            );
        }
        return redirect()->back()->with($notification);
    }

    public function edit_category(Request $request, $id){
        $category = Category::find($id);
        return view('admin.stock.edit-category')->with('category', $category);
    }

    public function update_category(Request $request, $id){
        try{
            $category_data = $request->all();
            Category::where('id', $id)->update([
                'name' => $category_data['name'],
                'description' => $category_data['description'],
            ]);
            $notification = array(
                'message' => 'Category updated!', 
                'alert-type' => 'success'
            );
        }
        catch(Exception $e){
            $notification = array(
                'message' => 'Error occur!', 
                'alert-type' => 'danger'
            );
        }
        return redirect()->back()->with($notification);
    }

    public function list_order(){
        return view('admin.order.list-order');
    }

    public function add_new_order(){
        $clients = User::where('user_type', 'distributor')->orWhere('user_type', 'customer')->get();
        $products = Product::all();
        return view('admin.order.add-new-order', ['clients'=>$clients, 'products'=>$products]);
    }

    public function add_new_order_action(Request $request){
        try{

            $payment = new Payment();
            $payment->status = $request->payment_status;
            $payment->total_amount = $request->total_amount;
            $payment->received_amount = $request->received_amount;
            $payment->due_amount = $request->due_amount;
            $payment->payment_mode = $request->payment_mode;
            

            $order = new Order();
            // $latestOrder = Order::orderBy('created_at','DESC')->first();
            // $order->order_nr = '#'.str_pad($latestOrder->id + 1, 8, "0", STR_PAD_LEFT);
            $order->code = '1';
            $order->date = $request->date;
            $order->customer_id = $request->client;
            $order->product_id = $request->product;
            $order->quantity = $request->p_quantity;
            $order->discount = $request->p_discount;
            $order->tax = $request->p_tax;
            

        }
        catch(Exception $e){
            $notification = array(
                'message' => 'Error occur!', 
                'alert-type' => 'danger'
            );
        }
    }

    public function add_stock(){
        $categories = Category::all();
        return view('admin.stock.add-new-stock', ['categories'=>$categories]);
    }

    public function add_stock_action(Request $request){
        try{
            $stock_data = $request->all();
            $stock = new Stock();
            $stock->date = $stock_data['date'];
            $stock->product_id = $stock_data['product'];
            $stock->quantity = $stock_data['quantity'];
            $stock->user = 'admin';
            $stock->save();
            $notification = array(
                'message' => 'New Stock added!', 
                'alert-type' => 'success'
            );

        }
        catch(Exception $e){
            // return $e->getMessage();
            $notification = array(
                'message' => 'Error occur!', 
                'alert-type' => 'danger'
            );
        }
        return redirect()->back()->with($notification);
    }

    public function get_category_products(){
        $a = request()->category;
        $products = product::where('category_id', $a)->get();
        $output = '<option value="">Choose Product</option>';
        foreach($products as $row){
        $output .= '<option value="'.$row->id.'">'.$row->name.'</option>';
        }
        return response()->json($output);
    }

    public function get_product_data(Request $request){
        $product_id = $request->get('product');
        $result = Product::where('id', $product_id)->get();
        return response()->json($result);
    }

    public function list_stock(){
        $stocks = Stock::with('product.category')->where('user', 'admin')->get();
        return view('admin.stock.list-stock', ['stocks'=>$stocks]);
    }


}
