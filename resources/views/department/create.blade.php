@extends('layout.app')
@section('content')
   <div class="container">
   
        <!-- Sign Up Card row -->
        <div class="row">
              <div class="col s8 m8">
                <div class="card">
                  <div class="card-content">
                    <span class="card-title"><h5>Create Department</h5></span>
                      <form class="container" action="{{route('department.store')}}" method="post">
                      @csrf
                        <div class = "row">

                        <div class="input-field col s12">
                            <input placeholder="Placeholder" id="department_name" name="department_name" type="text" class="validate">
                            <label for="department_name">Departmentrst Name</label>
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
