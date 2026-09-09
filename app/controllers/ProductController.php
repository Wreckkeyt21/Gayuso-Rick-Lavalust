<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProductController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->call->model('ProductModel');
    }

    // READ - list all products
    public function index()
    {
        $data['products'] = $this->ProductModel->all();
        $this->call->view('products/index', $data);
    }

    // CREATE - show form
    public function create()
    {
        $this->call->view('products/create');
    }

    // CREATE - save new product
    public function store()
    {
        $data = [
            'product_name' => $_POST['product_name'],
            'description'  => $_POST['description'],
            'price'        => $_POST['price'],
            'quantity'     => $_POST['quantity'],
        ];

        $this->ProductModel->insert($data);
        redirect('products');
    }

    // UPDATE - show edit form
    public function edit($id)
    {
        $data['product'] = $this->ProductModel->find($id);
        $this->call->view('products/edit', $data);
    }

    // UPDATE - save changes
    public function update($id)
    {
        $data = [
            'product_name' => $_POST['product_name'],
            'description'  => $_POST['description'],
            'price'        => $_POST['price'],
            'quantity'     => $_POST['quantity'],
        ];

        $this->ProductModel->update($id, $data);
        redirect('products');
    }

    // DELETE
    public function delete($id)
    {
        $this->ProductModel->delete($id);
        redirect('products');
    }
}