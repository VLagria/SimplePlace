
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Place</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <div class="container">
    <form class="" action="{{ route('storeplace') }}" method="POST">
        @csrf
        <input type="hidden" class="storeInformation" name="store[]">
        <div class="form-group fields-input">
            <div id="fields-container">
                <div id="clone">
                    <div id="input-fields">
                        <label for="exampleFormControlInput1" id="label">Name</label>
                        <input type="hidden" class="desc" id="desc" name="desc[]" value="Name">
                        <input type="text" class="form-control p-info" id="information" name="information[]"  placeholder="Add Information">
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
        
    <div class="container">
        <div class="form-group">
            <button type="submit" id="submit" class="btn btn-success">Insert Data</button>
        </div>
      </form>

      <br>
      <div class="form-group">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add Field
          </button>
    </div>
          
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form class="" action="" method="POST">
                            @csrf
                            <div class="form-group fields-input">
                                <div id="fields-container">
                                    <div id="clone">
                                        <div id="input-fields">
                                            <label for="exampleFormControlInput1" >Add Description Reference</label>
                                            <input type="text" class="form-control p-info" id="description" placeholder="Add Reference Name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary btn-add__field">Save changes</button>
                </div>
              </div>
            </div>
          </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $('#submit').on('click', function(){
            var data = $('.p-info').val();
            var a = $('.storeInformation').val(data);
        });

        $('.btn-add__field').on('click', function(){
            alert('add field');
            var desc = $('#description').val();
            jQuery('#input-fields').last().clone(true).find('#information').val("").end().find("label").text(desc).end().find('#desc').val(desc).end().appendTo('#fields-container').val("");
        });
    </script>
</body>
</html>
