@extends('client.layout.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="content_salogan">
        <h2>Dyeing List</h2>
      </div>
      <a class="btn btn-default btnn" href="{{url('/')}}/add/dyeing/form" style="margin-bottom:10px;">Add Dyeing</a>
      <div class="table-responsive oder_form" id="order_form">
        <table id="example3" class="table table-striped table-bordered display nowrap" cellspacing="0" width="100%"  style="color:black;">
          <thead>
            <tr>
              <th>LOT NO</th>
              <th>Tahn</th>
              <th>Date</th>
              <th>Received Date</th>
              <th>Weight</th>
              <th>Quality</th>
              <th>Quantity</th>
              <th>Unit</th>
              <th>Send From</th>
              <th>Recieved From</th>
              <th>Action</th>
              <th>Color</th>
              <th>BL</th>
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
            <td>{{$results->received_date}}</td>
            <td>{{$results->weight}}</td>
            <td>{{$results->quality}}</td>
            <td>{{$results->quantity}}</td>
            <td>{{$results->unit}}</td>
            <td>{{$results->send_to}}</td>
            <td>{{$results->recieved_from}}</td>
            <td><a href="{{url('/')}}/update/dyeing/{{$results->pk_id}}" class="">Update</a></td>
            <td>{{$results->color}}</td>
            <td>{{$results->bl}}</td>
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
    
    
    
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="content_salogan">
        <h2>Received Dyeing List</h2>
      </div>
      <div class="table-responsive oder_form">
        <table id="example" class="table table-striped table-bordered display nowrap" cellspacing="0" width="100%"  style="color:black;">
          <thead>
            <tr>
              <th>LOT NO</th>
              <th>Tahn</th>
              <th>Date</th>
              <th>Received Date</th>
              <th>Weight</th>
              <th>Quality</th>
              <th>Quantity</th>
              <th>Unit</th>
              <th>Send To</th>
              <th>Recieved From</th>
              <th>Action</th>
              <th>Color</th>
              <th>BL</th>
              <th>Challan No /GP No</th>
              <th>Cut Piece</th>
              <th>Shortage</th>
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
            <td>{{$results->lot_no}}</td>
            <td>{{$results->tahn}}</td>
            <td>{{$results->date}}</td>
            <td>{{$results->received_date}}</td>
            <td>{{$results->weight}}</td>
            <td>{{$results->quality}}</td>
            <td>{{$results->quantity}}</td>
            <td>{{$results->unit}}</td>
            <td>{{$results->send_to}}</td>
            <td>{{$results->recieved_from}}</td>
            <td>{{$results->color}}</td>
            <td>{{$results->bl}}</td>
            <td>{{$results->challan_no}}</td>
            <td>{{$results->folding}}</td>
            <td>{{$results->cut_piece}}</td>
            <td>{{$results->shortage}}</td>
            <td>{{$results->dyeing_lot}}</td>
            <td>{{$results->party_lot_no}}</td>
            <td>{{$results->material}}</td>
            
            <td>@if($results->status==0) <a href="{{url('/')}}/folding/dyeing/{{$results->pk_id}}" class="">Move to Folding</a>@endif
                @if($results->status==1) <span class="label label-success">Folding</span> @endif
                </td>
          </tr>
          @endforeach
          @endif
            </tbody>
        </table>
        
      </div>
    </div>
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_content" style="width:80%;">
                <div class="member-left-side">
                   <div class="member-email clearfix"> <b>Cut Piece</b> <span>{{$cut_piece}}</span> </div>
                   <div class="member-email clearfix"> <b>Shortage</b> <span>{{$shortage}}</span> </div>
                    @if(count($remaining_quantity)>0)
                    @foreach($remaining_quantity as $results)
                   <div class="member-email clearfix"> <b>Remaining Quantity</b> <span>{{$results->remaining_quantity}}</span> </div>
                   @endforeach
                   @endif
                </div>
              </div>
            </div>
          </div>
  </div>
</div>
@endsection