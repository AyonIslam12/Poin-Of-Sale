@extends('ecommerce.master')

@section('title')
Point-Of-Sale
@stop
@section('content')
<div class="row" style="margin: 10px 0px;">
    <div class="col-12">
        <h2 class="text-center font-weight-bold text-uppercase py-3">Point Of Sale</h2>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <input
                                @keyup="search_product($event.target.value)"
                                type="text"
                                placeholder="search by name, price"
                                class="form-control">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-4 mb-4" v-for="product in products.data" :key="product.id">
                                <product-body
                                :product ="product"
                                :add_product_to_pos_list ="add_product_to_pos_list"
                                >

                                </product-body>

                            </div>
                            <div>
                                <pagination :show-disabled="true" :data="products" @pagination-change-page="get_product_pagination">
                                    <span slot="prev-nav">&lt; Previous</span>
                                    <span slot="next-nav">Next &gt;</span>
                                </pagination>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th class="text-center">Quantity</th>
                                            <th class="text-right">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="product in pos_product_list" :key="product.id">
                                            <th>
                                                <div class="d-flex">

                                                 @{{ product.name }}
                                                </div>
                                            </th>
                                            <td style="width: 145px;">
                                                <div class="qty text-center">
                                                    <input
                                                    @change="update_pos_qty(product,$event.target.value)"
                                                    @keyup="update_pos_qty(product,$event.target.value)"
                                                    style="width: 50px"
                                                    :value="product.qty"
                                                    min="1"
                                                    type="number">
                                                    <i @click="update_pos_qty(product,1)" class="fa fa-recycle btn-sm btn-warning"></i>
                                                    <i  @click="remove_pos_product(product)"   class="fa fa-trash btn-sm btn-danger"></i>
                                                </div>
                                            </td>
                                            <td style="width: 80px;" class="text-right"><h6>$ @{{ product.price * product.qty }}</h6></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="2" class="text-right">Total</th>
                                            <th class="text-right"><h6>$ @{{ get_total_pos_price }}</h6></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div



@stop
