@extends('layout.app')
@section('content')
   <div class="container">
   
        <!-- Sign Up Card row -->
        <div class="row">
              <div class="col s8 m8">b 
                <div class="card">
                  <div class="card-content">
                    <span class="card-title"><h5>Employee Create</h5></span>
                      <form class="container" action="{{route('employee.store')}}" method="post">
                      @csrf
                        <div class = "row">

                        <div class="input-field col s12">
                       
                            <select class="browser-default" name="department_id">
                            
                                <option value="" disabled selected>Choose Department</option>
                                @foreach($departments as $index=>$department)
                                    <option value="{{$index}}"> {{$department}}</option>
                                @endforeach
                            </select>
                        
                        </div>
                        
                        <div class="input-field col s12">
                            <input placeholder="Placeholder" id="name" name="name" type="text" class="validate">
                            <label for="name">Employee Name</label>
                        </div>

                        <div class="input-field col s12">
                            <input placeholder="Placeholder" id="nrc" name="nrc" type="text" class="validate">
                            <label for="nrc"> NRC </label>
                        </div>

                        <div class="input-field col s12">
                            <input placeholder="Placeholder" id="birthday" name="birthday" type="date" class="validate">
                            <label for="birthday"> Birthday </label>
                        </div>

                        <div class="input-field col s12">
                            <input placeholder="Placeholder" id="contact" name="contact" type="text" class="validate">
                            <label for="contact">Contact Phone</label>
                        </div>

                        <div class="input-field col s12">
                            <input placeholder="Placeholder" id="address" name="address" type="text" class="validate">
                            <label for="address"> Address </label>
                        </div>

                        <div class="input-field col s12">
                            <input placeholder="Placeholder" id="salary" name="salary" type="text" class="validate">
                            <label for="salary"> Salary </label>
                        </div>

                          <div class="input-field col m6">
                            <button class="btn waves-effect waves-light" type="submit" name="action">
                              Submit 
                            </button>
                          </div>
                        </div>
                      </form>


                  </div>

                </div>
              </div>
            </div><!-- End of Sign Up Card row -->
        

    </div>
@endsection
