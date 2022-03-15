<html>
<head>
    <title>Update Programs</title>
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
                    
                     <form action="{{url('updatepro/'.$program->id)}}" method="post" id="contact-form">  
                        @csrf
                        <div class="controls">
                            <div class="row">
                                 
       
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_name">Name</label> <input id="name" type="text" name="name" class="form-control" placeholder="" required="required" data-error="Firstname is required."  value="{{$program->name}}"> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_lastname">Institute</label> <input id="ins" type="text" name="ins" class="form-control" placeholder="" required="required" data-error="Lastname is required." value="{{$program->ins}}"> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_lastname">Fee</label> <input id="fee" type="text" name="fee" class="form-control" placeholder="" required="required" data-error="Lastname is required." value="{{$program->fee}}"> </div>
                                </div>
                           
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_email">Location</label> <input id="location" type="text" name="location" class="form-control" placeholder=""   value="{{$program->location}}"> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_lastname">Contact</label> <input id="contact" type="text" name="contact" class="form-control" placeholder=""   value="{{$program->contact}}"> </div>
                                </div>
                           
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_email">Duration</label> <input id="duration" type="text" name="duration" class="form-control" placeholder="" required="required"  value="{{$program->duration}}"> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_email">Starting</label> <input id="start" type="text" name="start" class="form-control" placeholder="" required="required"  value="{{$program->start}}"> </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_email">Seats Total</label> <input id="tseat" type="text" name="tseat" class="form-control" placeholder="" required="required" value="{{$program->tseat}}" > </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_email">Seats Booked</label> <input id="rseat" type="text" name="rseat" class="form-control" placeholder="" required="required" value="{{$program->rseat}}" > </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_email">Status</label> <input id="status" type="text" name="status" class="form-control" placeholder="" required="required"  value="{{$program->status}}"> </div>
                                </div>
                               
                                {{-- <div class="col-md-6">
                                    <div class="form-group"> <label for="form_need">What are you sending</label> <select id="need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                                            <option value="" selected disabled>--Select Your Issue--</option>
                                            <option value="Gifts">Gifts</option>
                                            <option value="Electronics">Electronics</option>
                                            <option value="Accessories">Accessories</option>
                                            <option value="Food">Food</option>
                                            <option value="Documents">Documents</option>
                                       
                                        </select> </div>
                                </div> --}}
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
