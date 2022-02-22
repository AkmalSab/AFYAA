@extends('layouts.app')

@section('content')
<!-- Top card -->
<div class="card">
    <div class="card-body">
        <blockquote class="blockquote">
            <p class="mb-0">Your Stock-In</p>
            <footer class="blockquote-footer">
                You are required to provide all stock-in information to
                calculate.
            </footer>
        </blockquote>
        <form @submit.prevent="storeMultipleItem">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-3 col-xl">
                    <label>Item</label>
                    <div v-for="(item_name, i) in expenseForm.itemName">
                        <input
                            class="form-control mb-2"
                            type="text"
                            v-model="expenseForm.itemName[i]"
                        />
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 col-xl">
                    <label>Category</label>
                    <div v-for="(item_cat, i) in expenseForm.itemCat">
                        <v-select
                            :options="allCategory"
                            v-model="expenseForm.itemCat[i]"
                            class="mb-2"
                        ></v-select>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 col-xl">
                    <label>Per Unit Dealer</label>
                    <div
                        v-for="(unit_price_dealer, i) in expenseForm.unitPriceDealer"
                    >
                        <input
                            class="form-control mb-2"
                            type="number"
                            v-model="expenseForm.unitPriceDealer[i]"
                            min="0"
                        />
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 col-xl">
                    <label>SRP</label>
                    <div v-for="(unit_price, i) in expenseForm.unitPrice">
                        <input
                            class="form-control mb-2"
                            type="number"
                            v-model="expenseForm.unitPrice[i]"
                            min="0"
                        />
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 col-xl">
                    <label>Qty</label>
                    <div v-for="(item_qty, i) in expenseForm.itemQty">
                        <input
                            class="form-control mb-2"
                            type="number"
                            v-model="expenseForm.itemQty[i]"
                            min="0"
                        />
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 col-xl">
                    <label>Total Profit</label>
                    <div v-for="(item_qty, i) in expenseForm.unitPriceDealer">
                        <h4
                            class="form-control mb-2"
                            v-model="expenseForm.totalProfit[i]"
                        >
                            RM
                        </h4>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 col-xl">
                    <label>Total</label>
                    <div v-for="(item_qty, i) in expenseForm.unitPrice">
                        <h4
                            class="form-control mb-2"
                            v-model="expenseForm.total[i]"
                        >
                            RM
                        </h4>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
