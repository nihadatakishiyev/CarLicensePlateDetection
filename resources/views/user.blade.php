@extends('layouts.des')

@section('content')
    <div class="container">
    @if ($message = session()->get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif
        <div class="section">
            <div class="row">
                <div class="col s12 m8 offset-m2">
                    <div class="card">
                        <div class="card-image text-center">
                            <img src="{{asset('/images/pp.png')}}">
                        </div>
                        <div class="card-content center">
                           <h5>{{$usr->name}} {{$usr->surname}}</h5>
                            <table class="">
                                <tbody>
                                <tr>
                                    <td>Birthday</td>
                                    <td>{{$usr->birth_date}}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{$usr->email}}</td>
                                </tr>
                                <tr>
                                    <td>Student ID</td>
                                    <td>{{$usr->student_id}}</td>
                                </tr>
                                <tr>
                                    <td>Phone Number</td>
                                    <td>{{$usr->phone_number}}</td>
                                </tr>
                                @if(count($usr["cars"])> 0)
                                    @foreach($usr["cars"] as $arr2)
                                        <tr>
                                            <td>Licence Plate </td>
                                            <td><a href="/car/{{$arr2->licence_plate}}">{{$arr2->licence_plate}}</a></td>
                                        </tr>

                                    @endforeach
                                @endif

                                </tbody>
                            </table>
                            @if(\Illuminate\Support\Facades\Auth::id()==$usr->id)
                                <br/>
                                @if(\App\UserPermission::where("user_id", '=',$usr->id)->count()>0)
                                    <a class="waves-effect waves-light btn modal-trigger" href="#modal1"><i class="material-icons left">add</i>Add Car</a>
                                @else
                                    <a href="" class="red-text center" >&nbsp;Account Not Approved &nbsp; </a>
                                @endif
                            @endif
                        </div>

                    </div>
                    <div id="modal1" class="modal">
                        <div class="modal-content">
                            <h4>Add Car</h4>
                            <form class="col s12"role="form" method="POST" action="{{ route('car.store') }}">
                                @csrf
                                <input name="user_id" type="hidden" value="{{$usr->id}}">
                                <div class="row">
                                    <div class="input-field ">
                                        <input placeholder="Placeholder" id="first_name" type="text" name="licence_plate" class="validate" required>
                                        <label for="first_name">Licence Plate</label>
                                    </div>
                                    <div class="input-field ">
                                        <input placeholder="Placeholder" id="first_name" type="text" name="color"  class="validate" required>
                                        <label for="first_name">Color</label>
                                    </div>
                                    <div class="input-field ">
                                        <input placeholder="Placeholder" id="first_name" type="text" name="model" class="validate" required>
                                        <label for="first_name">Model</label>
                                    </div>
                                    <div class="input-field ">
                                        <button type="submit" name="submit" value="Submit" class="waves-effect waves-light btn white-text "
                                        style=" width: 100%;">
                                        Submit
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection