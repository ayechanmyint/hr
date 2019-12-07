@extends('layout.app')
@section('content')
   <div class="container">
    <h3>Department - {{$department->name}}</h3>
    
            <div class="container">
            <div class="row">
            @foreach($employees as $employee)
                <div class="col s12 m6">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text" id="check">
                        <span class="card-title emp-title">Employee Info</span>
                        
                            <p class="emp-text">Name - {{$employee->name}}</p>
                            <p class="emp-text">NRC  - {{$employee->nrc}}</p>
                            <p class="emp-text">Contact - {{$employee->contact}}</p>
                            <p class="emp-text"> Address - {{$employee->address}}</p>

                            <form  onsubmit="return false">
                            <label id="salary">Now Salary</label><input type="text" name="pre_salary" id="textbox1" value="{{$employee->salary}}" readonly>
                            <label id="salary">Increase Salary</label><input type="text" name="add_salary" id="textbox2" value="" name=""/>
                                <label id="salary">Total Salary</label> <input type="text" id="textbox3" value="" readonly>
                                <input id="myBtn"  type="submit" value="ADD" onclick="submitHandler(this.form)">                               
                            </form>

                           
                            
                    </div>
                </div>
                </div>
                
            @endforeach   
            </div>
            </div>
      
    </div>
    

    <script>

    const submitHandler = function(e){  
        const input1 =e.querySelector('#textbox1').value;
        const input2 =e.querySelector('#textbox2').value;    
        const total = parseInt(input1)+parseInt(input2);
        
        e.querySelector('#textbox3').value = total;
       
    };

    </script>
@endsection
