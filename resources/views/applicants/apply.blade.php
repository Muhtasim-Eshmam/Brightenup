<html>
<head>
    <title>Add Programs</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>


<style>
    body {
    font-family: 'Lato', sans-serif
}

h1 {
    margin-bottom: 40px
}

label {
    color: #333
}

.btn-send {
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    width: 80%;
    margin-left: 3px
}

.help-block.with-errors {
    color: #ff5050;
    margin-top: 5px
}

.card {
    margin-left: 10px;
    margin-right: 10px;
}
    </style>

</head>
<br><br>

<div class="row ">
    <br>
    <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
          
                <div class="container">
                    
                     <form action="{{route('apply.now')}}" method="post" id="contact-form">
                        @csrf
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                     <label for="form_need">Applying for</label>
                                     <select id="for" name="for" class="form-control"  data-error="Please specify your need." >                  
                                        <option value=""></option>
                                            <option value="Programs">Programs</option>
                                            <option value="Events" href="/applyeve">Events</option>
                                            <option value="Advising">Advising</option>           
                                        </select>
                                         </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                     <label for="form_need">Program name</label>
                                     <select id="select" name="select" class="form-control"  data-error="Please specify your need." >                  
                                        <option value="" selected >--Select Your Issue--</option>
                                        @foreach($program as $row)
                                      
                                        <option value="{{$row->name}}">{{$row->name}}</option>
                                            @endforeach        
                                        </select>
                                         </div>
                                </div>

                               <div class="col-md-6">
                                    <div class="form-group">
                                     <label for="form_need">Topic for Event</label>
                                     <select id="select2" name="select2" class="form-control"  data-error="Please specify your need." >                  
                                        <option value="" selected >--Select Your Issue--</option>
                                        @foreach($events as $row)
                                      
                                        <option value="{{$row->topic}}">{{$row->topic}}</option>
                                            @endforeach        
                                        </select>
                                         </div>
                                </div> 





                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_name">Seats</label> <input id="seat" type="text" name="seat" class="form-control" placeholder="" required="required" data-error="Firstname is required."> </div>
                                </div>
                               
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_lastname">Your Name</label> <input id="name" type="text" name="name" class="form-control" placeholder="" required="required" data-error="Lastname is required." value="{{Auth::user()->name}}"> </div>
                                </div>
                           
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_email">Your Email</label> <input id="email" type="text" name="email" class="form-control" placeholder=""  data-error="Valid email is required." value="{{Auth::user()->email}}"> </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_email">Contact</label> <input id="contact" type="text" name="contact" class="form-control" placeholder=""  data-error="Valid email is required."> </div>
                                </div>
                               
                            </div>
                            <br>
                            <div class="row">
                               
                                <div class="col-md-12"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block "> </div>
                            
                            </form>
                            </div>
                        </div>
                  
                </div>
            </div>
        </div> <!-- /.8 -->
    </div> <!-- /.row-->
</div>
