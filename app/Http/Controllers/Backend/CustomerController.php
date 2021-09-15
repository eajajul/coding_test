<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function Index()
    {
        $customer = Customer::paginate(10);

        return view('customer.index', compact('customer'));
    }

    /**
     * Add new customer.
     *
     * @return view
     */
    public function Add()
    {
        return view('customer.add');
    }

    /**
     * Insert.
     *
     * @param mixed $request
     *
     * @return view
     */
    public function Insert(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users,email',
            'name' => 'required',
            'phone' => 'required|numeric|unique:users,phone',
            'password' => 'required|confirmed|min:6',
        ]);

        $customer = new Customer();
        $customer->email = $request->email;
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->password = Hash::make($request->password);
        $customer->save();

        Session::flash('success', 'customer added successfully');

        return redirect()->route('Customer.index');
    }

    /**
     * Search.
     *
     * @param mixed $request
     *
     * @return matched result
     */
    public function Search(Request $request)
    {
        $search = str_replace(' ', '%', $request->search_term);
        $customer_all = Customer::query();
        $customer_match = $customer_all->where(function ($query) use ($search) {
            return $query->where('name', 'LIKE', '%'.$search.'%')
                    ->orWhere('email', 'LIKE', '%'.$search.'%')
                    ->orWhere('phone', 'LIKE', '%'.$search.'%');
        });
        $customer = $customer_match->paginate(10);
        $customer_table = view('customer.customer-table', compact('customer'))->render();
        $pagination = view('customer.pagination', compact('customer'))->render();

        return response()->json(['customer_table' => $customer_table, 'pagination' => $pagination], 200);
    }

    public function CsvUpload()
    {
        return view('csv.index');
    }

    public function CsvStore(Request $request)
    {
        $this->validate($request, [
            'customer_data' => 'required|mimes:csv,txt',
        ]);

        if ($request->hasFile('customer_data')) {
            $file = $request->customer_data;
            $name = time().'-'.$file->getClientOriginalName();
            // Moves file to folder on server
           $file_path= $file->move(public_path().'/customer', $name);
           $customerArray = $this->csvToArray($file_path);
           foreach ($customerArray as $key => $customer_data) {
                    $customer = new Customer();
                    $customer->email = $customer_data['email'];
                    $customer->name = $customer_data['name'];
                    $customer->phone = $customer_data['phone'];
                    $customer->password = Hash::make($customer_data['password']);
                    $customer->save();
           }
        }
        Session::flash('success', 'customer dta stored in db successfully');
        return back();


    }

    public function csvToArray($filename = '', $delimiter = ',')
    {
        if (!file_exists($filename) || !is_readable($filename)) {
            return false;
        }

        $header = null;
        $data = [];
        if (($handle = fopen($filename, 'r')) !== false) {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false) {
                if (!$header) {
                    $header = $row;
                } else {
                    $data[] = array_combine($header, $row);
                }
            }
            fclose($handle);
        }

        return $data;
    }
}
