@extends('layouts.checkout')
@section('title', 'NOMADS Checkout')

@section('content')
    <main>
        <!-- Header Background -->
        <section class="section-details-header">
        </section>

        <section class="section-details-content">
            <!-- Breadcrumb -->
            <div class="container">
                <div class="row">
                    <div class="col p-3">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Paket Travel </li>
                                <li class="breadcrumb-item">Details</li>
                                <li class="breadcrumb-item active">Checkout</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Card -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card card-details">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- Card Header -->
                            <h3>Who is Going?</h3>
                            <p>Trip to {{ $item->travel_package->location }}, {{ $item->travel_package->country }}</p>

                            <!-- Card Detail -->
                            <table class="text-center table table-responsive-sm table-borderless member-checkout">

                                <!-- Table Header -->
                                <thead>
                                    <tr>
                                        <th>Picture</th>
                                        <th>Name</th>
                                        <th>Nationality</th>
                                        <th>Visa</th>
                                        <th>Passport</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <!-- Member  -->
                                    @forelse ($item->details as $detail)
                                        <tr>
                                            <td>
                                                <div class="member-photo">
                                                    <img src="https://ui-avatars.com/api/?name={{ $detail->username }}"
                                                        width="60px" height="60px" class="rounded-circle">
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                {{ $detail->username }}
                                            </td>
                                            <td class="align-middle">
                                                {{ $detail->nationality }}
                                            </td>
                                            <td class="align-middle">
                                                {{ $detail->is_visa ? '30 Days' : 'N/A' }}
                                            </td>
                                            <td class="align-middle">
                                                {{ \Carbon\Carbon::createFromDate($detail->doe_passport) > \Carbon\Carbon::now() ? 'Active' : 'Inactive' }}
                                            </td>
                                            <td class="align-middle">
                                                <div class="ic-remove">
                                                    <a href="{{ route('checkout-remove', $detail->id) }}">
                                                        <img src="{{ url('frontend/images/ic_remove.png') }}" width="18px"
                                                            height="18px">
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr></tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">
                                                No Visitor
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>

                            <!-- Add Member -->
                            <div class="add-member mt-3">
                                <h4>Add Member</h4>
                                <form class="form-inline" method="POST"
                                    action="{{ route('checkout-create', $item->id) }}">
                                    @csrf
                                    <label for="username" class="sr-only">Username</label>
                                    <input type="text" id="username" name="username" placeholder="Username"
                                        class="form-control mb-2 mr-2" required>

                                    <label for="nationality" class="sr-only">Nationality</label>
                                    <input type="text" id="nationality" name="nationality" placeholder="Nationality"
                                        class="form-control mb-2 mr-2" style="width: 50px" required>

                                    <label for="is_visa" class="sr-only">Visa</label>
                                    <select name="is_visa" id="is_visa" class="custom-select mb-2 mr-2" required>
                                        <option value="" selected disabled>VISA</option>
                                        <option value="1">30 Days</option>
                                        <option value="0">N/A</option>
                                    </select>

                                    <label for="doe_passport" class="sr-only">DOE Passport</label>
                                    <div class="input-doe mb-2 mr-2">
                                        <input type="text" class="form-control datepicker" id="doe_passport" name="doe_passport"
                                            placeholder="DOE Passport" style="width: 130px">
                                    </div>

                                    <label for="btnAdd" class="sr-only">Add Now</label>
                                    <button class="btn btn-add-now mb-2 mr-2">Add Now</button>
                                </form>
                            </div>

                            <!-- Note -->
                            <div class="note mt-2">
                                <h5>Note</h5>
                                <p>You are only able to invite member that has registered in Nomads.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-2 mt-sm-2 mt-md-2 mt-lg-0">
                        <div class="card card-informations">

                            <!-- Checkout Informations -->
                            <h5>Checkout Informations</h5>
                            <table>
                                <tr>
                                    <th width="50%">Members</th>
                                    <td width="50% text-right">{{ $item->details->count() }} Person</td>
                                </tr>
                                <tr>
                                    <th width="50%">Additional VISA</th>
                                    <td width="50% text-right">$ {{ $item->additional_visa }},00</td>
                                </tr>
                                <tr>
                                    <th width="50%">Trip Price</th>
                                    <td width="50% text-right">$ {{ $item->travel_package->price }},00 / person</td>
                                </tr>
                                <tr>
                                    <th width="50%">Sub Total</th>
                                    <td width="50% text-right">$ {{ $item->transaction_total }},00</td>
                                </tr>
                                <tr>
                                    <th width="50%">Total (+Unique Code)</th>
                                    <td width="50% text-right"><span class="text-blue">$ {{ $item->transaction_total }},
                                        </span><span class="text-orange">{{ mt_rand(0, 99) }}</span></td>
                                </tr>
                            </table>

                            <hr>

                            <div class="payment-instructions">
                                <h5>Payment Instructions</h5>
                                <p>Please complete your payment before to
                                    continue the wonderful trip</p>
                            </div>
                            <div class="payment-method flex">
                                <div class="bank-item mb-2">
                                    <img src="{{ url('frontend/images/ic_bank.png') }}" width="45px" height="45px"
                                        class="rounded-circle bank-icon">
                                    <div class="description">
                                        <h5>PT Nomads ID</h5>
                                        <p>
                                            0881 8829 8800 <br>
                                            Bank Central Asia</p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="bank-item-mb-2">
                                        <img src="{{ url('frontend/images/ic_bank.png') }}" width="45px" height="45px"
                                            class="rounded-circle bank-icon">
                                        <div class="description">
                                            <h5>PT Nomads ID</h5>
                                            <p>
                                                0881 8829 8800 <br>
                                                Bank HSBC</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="join-container">
                            <div class="justify-content-center row mt-2">
                                <a href="{{ route('checkout-success', $item->id) }}" class="btn btn-join">
                                    I Have Made Payment
                                </a>
                            </div>
                            <div class="justify-content-center row mt-2">
                                <a href="{{ route('detail', $item->travel_package->slug) }}" class="btn btn-cancel">
                                    Cancel Booking
                                </a>
                            </div>
                        </div>                        
                    </div>
                </div>
        </section>
    </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/styles/details.css') }}">
@endpush

@push('addon-script')
    <script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd',
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon: '<img src="{{ url('frontend/images/ic_doe.png') }}" >',
                }
            });
        });

    </script>
@endpush
