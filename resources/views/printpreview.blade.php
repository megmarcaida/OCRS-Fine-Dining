@extends('layouts.master')

@section('title')
    #OCRS :: Billing Transaction
@endsection

@section('content')
<body class="bg-steel">
    <div class="app-bar fixed-top darcula" data-role="appbar">
        <a class="app-bar-element branding">OCRS</a>
        <span class="app-bar-divider"></span>
        <ul class="app-bar-menu">
            <li><a href="dashboard">Dashboard</a></li>
            <li>
                <a href="" class="dropdown-toggle">Master File</a>
                <ul class="d-menu" data-role="dropdown">
                    <li><a href="">Sample</a></li>
                    <li class="divider"></li>
                    <li>
                        <a href="" class="dropdown-toggle">Sample</a>
                        <ul class="d-menu" data-role="dropdown">
                            <li><a href="">Sample 1</a></li>
                            <li><a href="">Sample 2</a></li>
                            <li><a href="">Sample 3</a></li>
                            <li class="divider"></li>
                            <li><a href="">Sample list</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="billing">Billing</a></li>
            <li><a href="">Users</a></li>
            <li>
                <a href="" class="dropdown-toggle">Help</a>
                <ul class="d-menu" data-role="dropdown">
                    <li><a href="">FAQ</a></li>
                    <li><a href="">Community support</a></li>
                    <li class="divider"></li>
                    <li><a href="">About</a></li>
                </ul>
            </li>
        </ul>

        <div class="app-bar-element place-right">
            <span class="dropdown-toggle"><span class="mif-cog"></span>Welcome Admin</span>
            <div class="app-bar-drop-container padding10 place-right no-margin-top block-shadow fg-dark" data-role="dropdown" data-no-close="true" style="width: 220px">
                <h4 class="text-light">Quick settings</h4>
                <ul class="unstyled-list fg-dark">
                    <li><a href="" class="fg-white1 fg-hover-yellow">Profile</a></li>
                    <li><a href="" class="fg-white2 fg-hover-yellow">Settings</a></li>
                    <li><a href="" class="fg-white3 fg-hover-yellow">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="flex-grid no-responsive-future" style="height: 100%;">
            <div class="row" style="height: 100%">
                <div class="cell size-x200" id="cell-sidebar" style="background-color: #71b1d1; height: 100%">
                    <ul class="sidebar">
                        <li><a href="#">
                            <span class="mif-cart icon"></span>
                            <span class="title">all items</span>
                            <span class="counter">0</span>
                        </a></li>
                        <li><a href="#">
                            <span class="mif-list icon"></span>
                            <span class="title">Menus</span>
                            <span class="counter">0</span>
                        </a></li>
                        <li><a href="#">
                            <span class="mif-shopping-basket icon"></span>
                            <span class="title">Meals</span>
                            <span class="counter">0</span>
                        </a></li>
                        <li><a href="#">
                            <span class="mif-users icon"></span>
                            <span class="title">Users</span>
                            <span class="counter">0</span>
                        </a></li>
                        <li class="active"><a href="billing">
                            <span class="mif-coins icon"></span>
                            <span class="title">Transactions</span>
                            <span class="counter">2</span>
                        </a></li>
                        <li><a href="#">
                            <span class="mif-star-full icon"></span>
                            <span class="title">Promos</span>
                            <span class="counter">0</span>
                        </a></li>
                    </ul>
                </div>
                <div class="cell auto-size padding20 bg-white" id="cell-content">
                    <h1 class="text-light">Invoice <a href="billing"><button class="button rounded place-right">Back</button></a></h1>
                    <hr class="thin bg-grayLighter">
                     @if (count($printPreview) > 0)

                     <table class="table table-hover table-condensed">
                              <thead>
                                  <th>Selling Price</th>
                                  <th>Amount</th>
                                  <th>&nbsp;&nbsp;</th>
                              </thead>

                              <!-- Table Body -->
                              <tbody>
                                  @foreach ($printPreview as $print)
                                      <tr>
                                          <td>{{ $print->selling_price }}</td>
                                          <td >{{ $print->amount }}</td>
                                          <td class="text-right">
                                            <input type="submit" value="Edit" name="submit" class="btn btn-primary">
                                            <input type="submit" value="Delete" name="submit" class="btn btn-danger">
                                          </td>
                                      </tr>
                                  @endforeach
                              </tbody>
                          </table>
                      
                  @endif

                </div>
            </div>
        </div>
    </div>
</body>
@endsection