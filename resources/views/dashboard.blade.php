@extends('layouts.master')

@section('title')
    #OCRS :: Dashboard
@endsection

@section('content')
<body class="bg-steel">
    @include('includes.header')
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
                        <li class="active"><a href="#">
                            <span class="mif-shopping-basket icon"></span>
                            <span class="title">Meals</span>
                            <span class="counter">2</span>
                        </a></li>
                        <li><a href="#">
                            <span class="mif-users icon"></span>
                            <span class="title">Users</span>
                            <span class="counter">0</span>
                        </a></li>
                        <li><a href="billing">
                            <span class="mif-coins icon"></span>
                            <span class="title">Transactions</span>
                            <span class="counter">0</span>
                        </a></li>
                        <li><a href="#">
                            <span class="mif-star-full icon"></span>
                            <span class="title">Promos</span>
                            <span class="counter">0</span>
                        </a></li>
                    </ul>
                </div>
                <div class="cell auto-size padding20 bg-white" id="cell-content">
                    <h1 class="text-light">Sample <span class="place-right"></span></h1>
                    <hr class="thin bg-grayLighter">
                    <table class="dataTable border bordered" data-role="datatable" data-auto-width="false">
                        <thead>
                        <tr>
                            <td style="width: 20px">
                            </td>
                            <td class="sortable-column sort-asc" style="width: 100px">ID</td>
                            <td class="sortable-column">Sample name</td>
                            
                            <td class="sortable-column" style="width: 20px">Status</td>
                            <td style="width: 20px">Switch</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <label class="input-control checkbox small-check no-margin">
                                    <input type="checkbox">
                                    <span class="check"></span>
                                </label>
                            </td>
                            <td>123890723212</td>
                            <td>Sample number 1</td>
                            
                            <td class="align-center"><span class="mif-checkmark fg-green"></span></td>
                            <td>
                                <label class="switch-original">
                                    <input type="checkbox" checked>
                                    <span class="check"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="input-control checkbox small-check no-margin">
                                    <input type="checkbox">
                                    <span class="check"></span>
                                </label>
                            </td>
                            <td>123890723212</td>
                            <td>Sample number 2</td>
                            
                            <td class="align-center"><span class="mif-stop fg-red"></span></td>
                            <td>
                                <label class="switch-original">
                                    <input type="checkbox">
                                    <span class="check"></span>
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var token = '{{ Session::token() }}';
    </script>
</body>
@endsection