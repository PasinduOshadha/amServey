<!doctype html>
<html lang="en">
  <head>
    <title>form temp</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>

  <body class="bg-dark">
    <div class="container-fluid mt-5">
      <div class="row justify-content-center">
        <div class="col-md-10 bg-light rounded pl-0 pr-0">
        <div class="card">
          <div class="card-header">
            <p>
              Tell Us Little More About Your Requirement?
            </p>
          <div class="row">
            <div class="col-md-6">
            <div class="progress" style="height: 2em;" >
              <div id="progressBar" class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
            </div>
            </div>
          </div>
          </div>
          
          <div class="card-body">
            <form>

            <div id="first">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter Your vehicle No</label>
                <input type="text" class="form-control" id="vehicle_no" placeholder="Enter Vehicle No">
                <b class="form-text text-danger" id="vehicle_no_err"></b>
              </div>
              
              
              <button id="next1" class="btn btn-primary">Next Step</button>

            </div>

            <div id="second">
              <div class="form-group">
                <label for="cus_name">Your Name</label>
                <input type="text" class="form-control" id="cus_name" placeholder="Your Name">
                <b id="cus_name_error" class="form-text text-danger"></b>
              </div>
              <div class="form-group">
                <label for="phn_no">Contact No</label>
                <input type="text" class="form-control" id="phn_no" placeholder="Contact No.">
                <b id="cus_phn_no_error" class="form-text text-danger"></b>
              </div>
              
              <div class="form-group">
                  <label for="customer_email">Your Email</label>
                  <input type="email" class="form-control" id="cus_email" placeholder="Your Email"></input>
                  <b id="cus_email_error" class="form-text text-danger"></b>
              </div>
              <div class="form-group">
                <label for="phn_no">NIC No.</label>
                <input type="" class="form-control" id="nic_no" placeholder="Contact No.">
                <b id="nic_error" class="form-text text-danger"></b>
              </div>
              <div class="form-group">
                <label for="cus_name">Vehicle Make Model</label>
                <input type="text" class="form-control" id="make_model" placeholder="Your Name">
                <b id="make_model_error" class="form-text text-danger"></b>
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="details_check">
                <label class="form-check-label" for="exampleCheck1">The above details are correct</label>
                <b id="check_error" class="form-text text-danger"></b>
              </div>
              <button id="prev1" class="btn btn-primary">Prev Step</button>
              <button id="next2" class="btn btn-primary">Next Step</button>

            </div>

            <div id="third">
              <div class="row">
                <div class="col-sm-3">
                  <div class="">
                    <div class="card-body">
                    <label>
                      <input type="radio" name="test" value="small" checked>
                      <img class="img-fluid" src="img/4uBi6ib.png">
                    </label>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="">
                    <div class="card-body">
                      <label>
                      <input type="radio" name="test" value="med">
                        <img class="img-fluid" src="img/4uBi6ib.png">
                      </label>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="">
                    <div class="card-body">
                      <label>
                    <input type="radio" name="test" value="lg">
                      <img class="img-fluid" src="img/4uBi6ib.png">
                    </label>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="">
                    <div class="card-body">
                      <label>
                        <input type="radio" name="test" value="xll">
                          <img class="img-fluid" src="img/4uBi6ib.png">
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Tell Us a bit about our service</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-10">
                <button id="prev2" class="btn btn-primary">Prev Step</button>
                <button class="btn btn-primary" id="next3">Next Step</button>
                
                </div>
              </div>
              
            </div>

            <div id="final">
              <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                <img src="img/krsWHvd.gif" class="check">
                </div>
              </div>
            </div>
            </form>
        </div>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="index.js"></script>
  </body>
</html>