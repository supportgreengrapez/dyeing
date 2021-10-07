@extends('client.layout.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <form method="post" action="{{url('/')}}/search/dyeing" enctype="multipart/form-data">
        @if($errors->any())
        <div class="alert alert-danger"> <strong></strong> {{$errors->first()}} </div>
        @endif
        {{csrf_field()}}
        <div class="row">
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>Start Date</label>
              <div class="input-group date datepicker" data-date-format="dd-mm-yyyy">
              <input class="form-control" type="text" name="s_date" autocomplete="off"/>
              <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>End Date</label>
              <div class="input-group date datepicker" data-date-format="dd-mm-yyyy">
              <input class="form-control" type="text" name="e_date" autocomplete="off"/>
              <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>Sender Name</label>
              <select class="js-example-basic-single form-control" name="s_name">
                <option value="" disable="true" selected="true" >---Select Sender---</option>
                
                    
          @if(count($result)>0)
          @foreach($result as $results)
                        
                        
                
                <option value="{{$results->send_to}}">{{$results->send_to}}</option>
                
                
                        
                    @endforeach
                    @endif
              
              </select>
            </div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>Receiver Name</label>
              <select class="js-example-basic-single form-control" name="r_name">
                <option value="" disable="true" selected="true" >---Select Sender---</option>
                
                    
          @if(count($result)>0)
          @foreach($result as $results)
                        
                        
                
                <option value="{{$results->recieved_from}}">{{$results->recieved_from}}</option>
                
                
                        
                    @endforeach
                    @endif
              
              </select>
            </div>
          </div>
          
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="form-group">
                <button type="submit" class="btn btn-default btnn">Search</button>
            </div>
          </div>
        </div>
      </form>
      
      <div class="content_salogan">
        <h2>Issue Dyeing List</h2>
      </div>
      <a class="btn btn-default btnn" href="{{url('/')}}/add/dyeing/form" style="margin-bottom:10px;">Issue Dyeing</a>
     
      <div class="table-responsive oder_form" id="order_form">
        <table id="example" class="table table-striped table-bordered display nowrap" cellspacing="0" width="100%"  style="color:black;">
          <thead>
            <tr>
              <th>LOT NO</th>
              <th>Tahn</th>
              <th>Date</th>
              <th>Weight</th>
              <th>Qauality</th>
              <th>Quantity</th>
              <th>Unit</th>
              <th>Send To</th>
              <th>Color</th>
              <th>System Lot No</th>
              <th>Action</th>
              <th>Challan No /GP No</th>
              <th>Folding</th>
              <th>Cut Piece</th>
              <th>Dyeing Lot</th>
              <th>Party Lot No</th>
              <th>Material</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
          
          @if(count($result)>0)
          @foreach($result as $results)
          <tr>
            <td>{{$results->pk_id}}</td>
            <td>{{$results->tahn}}</td>
            <td>{{$results->date}}</td>
            <td>{{$results->weight}}</td>
            <td>{{$results->quality}}</td>
            <td>{{$results->quantity}}</td>
            <td>{{$results->unit}}</td>
            <td>{{$results->send_to}}</td>
            <td>{{$results->color}}</td>
            <td>{{$results->bl}}</td>
            <td><a href="{{url('/')}}/update/dyeing/{{$results->pk_id}}" class="">Received</a> | <a href="{{url('/')}}/view/dyeing/detail/{{$results->pk_id}}" class="">View</a></td>
            
            <td>{{$results->challan_no}}</td>
            <td>{{$results->folding}}</td>
            <td>{{$results->cut_piece}}</td>
            <td>{{$results->dyeing_lot}}</td>
            <td>{{$results->party_lot_no}}</td>
            <td>{{$results->material}}</td>
            
            <td>@if($results->status==0) <span class="label label-warning">Open</span> @endif
                @if($results->status==1) <span class="label label-success">Complete</span> @endif
                @if($results->status==2) <span class="label label-primary">Return</span> @endif
                </td>
          </tr>
          @endforeach
          @endif
            </tbody>
          
        </table>
      </div>
      
      
      
      
      
      <div class="content_salogan">
        <h2>Received for Dyeing List</h2>
      </div>
      <a class="btn btn-default btnn" href="{{url('/')}}/received/dyeing/form" style="margin-bottom:10px;">Received for Dyeing</a>
      <div class="table-responsive oder_form" id="order_form">
        <table id="example3" class="table table-striped table-bordered display nowrap" cellspacing="0" width="100%"  style="color:black;">
          <thead>
            <tr>
              <th>LOT NO</th>
              <th>Tahn</th>
              <th>Date</th>
              <th>Weight</th>
              <th>Qauality</th>
              <th>Quantity</th>
              <th>Unit</th>
              <th>Received From</th>
              <th>Color</th>
              <th>System Lot No</th>
              <th>Action</th>
              <th>Challan No /GP No</th>
              <th>Folding</th>
              <th>Cut Piece</th>
              <th>Dyeing Lot</th>
              <th>Party Lot No</th>
              <th>Material</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
          
          @if(count($result2)>0)
          @foreach($result2 as $results)
          <tr>
            <td>{{$results->pk_id}}</td>
            <td>{{$results->tahn}}</td>
            <td>{{$results->date}}</td>
            <td>{{$results->weight}}</td>
            <td>{{$results->quality}}</td>
            <td>{{$results->quantity}}</td>
            <td>{{$results->unit}}</td>
            <td>{{$results->recieved_from}}</td>
            <td>{{$results->color}}</td>
            <td>{{$results->bl}}</td>
            <td>
                @if($results->status == "0")
                <a href="{{url('/')}}/move/to/dyeing/{{$results->pk_id}}" class="">Move to Dyeing</a>
                @else
                <p>already moved</p>
                @endif
            </td>
            
            <td>{{$results->challan_no}}</td>
            <td>{{$results->folding}}</td>
            <td>{{$results->cut_piece}}</td>
            <td>{{$results->dyeing_lot}}</td>
            <td>{{$results->party_lot_no}}</td>
            <td>{{$results->material}}</td>
            
            <td>@if($results->status==0) <span class="label label-warning">Open</span> @endif
                @if($results->status==1) <span class="label label-success">Complete</span> @endif
                @if($results->status==2) <span class="label label-primary">Return</span> @endif
                </td>
          </tr>
          @endforeach
          @endif
            </tbody>
          
        </table>
      </div>
    </div>
  </div>
</div>
@endsection