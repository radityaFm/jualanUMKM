<?php
namespace App\Http\Controllers;

use App\Models\Customer; // Correct import for the Customer model
use App\Models\Book; // Ensure this import is included if you use Book model
use Illuminate\Http\Request;

class CustomerController extends Controller
{
public function index()
{
    $customers = Customer::all();
    return view('admin/customer', compact('customers'));
}


    public function create()
    {
        return view('admin/createcustomer');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customers',
            'phone' => 'required',
        ]);
    
        Customer::create($validatedData);
    
        return redirect()->route('customers.index')->with('success', 'Customer created successfully!');
    }
    public function borrowBook(Request $request, Customer $customer)
    {
        $book = Book::find($request->book_id);
        
        if ($book && $book->copies > 0) {
            $book->status = $book->copies == 1 ? 'reserved' : 'available';
            $book->copies -= 1;
            $book->save();

            $customer->books()->attach($book);
            return back()->with('success', 'Book borrowed successfully!');
        }
        return back()->with('error', 'Book is not available!');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return back()->with('success', 'Customer deleted successfully!');
    }
    public function edit(Customer $customer)
{
    return view('admin.editcustomer', compact('customer'));
}

public function update(Request $request, Customer $customer)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:customers,email,' . $customer->id,
        'phone' => 'required',
    ]);

    $customer->update($validatedData);
    return redirect()->route('customers.index')->with('success', 'Customer updated successfully!');
}
}
