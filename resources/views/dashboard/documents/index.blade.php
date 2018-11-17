@extends('dashboard.layouts.app')

@section('notificationCenter')

<div class="header-button-item has-noti js-item-menu">
  <i class="zmdi zmdi-notifications"></i>
  <div class="notifi-dropdown js-dropdown">
      <div class="notifi__title">
          <p>You have 3 Notifications</p>
      </div>
      <div class="notifi__item">
          <div class="bg-c1 img-cir img-40">
              <i class="zmdi zmdi-email-open"></i>
          </div>
          <div class="content">
              <p>You got a email notification</p>
              <span class="date">April 12, 2018 06:50</span>
          </div>
      </div>
      <div class="notifi__item">
          <div class="bg-c2 img-cir img-40">
              <i class="zmdi zmdi-account-box"></i>
          </div>
          <div class="content">
              <p>Your account has been blocked</p>
              <span class="date">April 12, 2018 06:50</span>
          </div>
      </div>
      <div class="notifi__item">
          <div class="bg-c3 img-cir img-40">
              <i class="zmdi zmdi-file-text"></i>
          </div>
          <div class="content">
              <p>You got a new file</p>
              <span class="date">April 12, 2018 06:50</span>
          </div>
      </div>
      <div class="notifi__footer">
          <a href="#">All notifications</a>
      </div>
  </div>
</div>
@endsection

@section('adminname')
  {{$data['admin']['adminName']}}
@endsection

@section('currentpage')
@endsection

@section('content')
<section class="statistic">
  <div class="section__content section__content--p30">
      <div class="container-fluid"  id="example">

          

                {{-- @foreach($data['data'] as $document)
                <tr>
                  <th scope="row">{{$document->id}}</th>
                  <td>
                    @if($document->user)
                      {{$document->user->name}}
                    @endif
                  </td>
                  <td>
                    <a href="{{url('documents/'.$document->source)}}" download>
                      {{$document->source}}
                    </a>
                  </td>
                  <td>
                    <select name="" id="" class="form-control">
                      <option value="0"
                        @if ($document->status == 0)
                          selected
                        @endif
                        >Not read</option>
                      <option value="1" 
                        @if ($document->status == 1)
                          selected
                        @endif
                      >Is reading</option>
                      <option value="2" 
                        @if ($document->status == 2)
                          selected
                        @endif>Done</option>
                    </select>
                  </td>
                  <td>
                    <button class="btn btn-xs btn-success">
                      Update
                    </button>
                    <button class="btn btn-xs btn-danger">
                      Delete
                    </button>
                  </td>
                </tr>
                @endforeach --}}
       
      </div>
      <div class="row">
        <p>Status info 0: is not seen, 1: is reading, 2: has been read</p>
      </div>
  </div>
</section>
@endsection