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
                    
                     <form action="{{route('program')}}" method="post" id="contact-form">  
                        @csrf
                        <div class="controls">
                            <div class="row">
                                 
       
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_name">Name</label> <input id="name" type="text" name="name" class="form-control" placeholder="" required="required" data-error="Firstname is required."> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_lastname">Institute</label> <input id="ins" type="text" name="ins" class="form-control" placeholder="" required="required" data-error="Lastname is required."> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_lastname">Fee</label> <input id="fee" type="text" name="fee" class="form-control" placeholder="" required="required" data-error="Lastname is required."> </div>
                                </div>
                           
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_email">Location</label> <input id="location" type="text" name="location" class="form-control" placeholder=""  data-error="Valid email is required."> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_lastname">Contact</label> <input id="contact" type="text" name="contact" class="form-control" placeholder=""  data-error="Lastname is required."> </div>
                                </div>
                           
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_email">Duration</label> <input id="duration" type="text" name="duration" class="form-control" placeholder="" required="required" data-error="Valid email is required."> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_email">Starting</label> <input id="start" type="text" name="start" class="form-control" placeholder="" required="required" data-error="Valid email is required."> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_email">Seats Total</label> <input id="tseat" type="text" name="tseat" class="form-control" placeholder="" required="required" data-error="Valid email is required."> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_email">Seats Booked</label> <input id="rseat" type="text" name="rseat" class="form-control" placeholder="" required="required" data-error="Valid email is required."> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_email">Status</label> <input id="status" type="text" name="status" class="form-control" placeholder="" required="required" data-error="Valid email is required."> </div>
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
