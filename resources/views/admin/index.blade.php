@extends('admin.admin_layout.app')

@section('content')
  <!--/.span3-->
  <div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>
                    Profit Chart</h3>
            </div>
            <div class="module-body">
                <div class="chart inline-legend grid">
                    <div id="placeholder2" class="graph" style="height: 500px">
                    </div>
                </div>
            </div>
        </div>
        <!--/.module-->
        <div class="module hide">
            <div class="module-head">
                <h3>
                    Adjust Budget Range</h3>
            </div>
            <div class="module-body">
                <div class="form-inline clearfix">
                    <a href="#" class="btn pull-right">Update</a>
                    <label for="amount">
                        Price range:</label>
                    &nbsp;
                    <input type="text" id="amount" class="input-" />
                </div>
                <hr />
                <div class="slider-range">
                </div>
            </div>
        </div>
        <div class="module">
            <div class="module-head">
                <h3>
                    DataTables
                </h3>
            </div>
            <div class="module-body table">
                <table cellpadding="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                    width="100%">
                    <thead>
                        <tr>
                            <th>
                                Rendering engine
                            </th>
                            <th>
                                Browser
                            </th>
                            <th>
                                Platform(s)
                            </th>
                            <th>
                                Engine version
                            </th>
                            <th>
                                CSS grade
                            </th>
                        </tr>
                    </thead>
                    
                    <tfoot>
                        <tr>
                            <th>
                                Rendering engine
                            </th>
                            <th>
                                Browser
                            </th>
                            <th>
                                Platform(s)
                            </th>
                            <th>
                                Engine version
                            </th>
                            <th>
                                CSS grade
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <!--/.module-->
    </div>
    <!--/.content-->
  </div>
  <!--/.span9-->
@endsection