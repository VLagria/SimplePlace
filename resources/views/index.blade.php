
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
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" class="form-control p-info" id="information" name="information[]"  placeholder="Add Name">
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
        <div class="form-group">
            <button type="submit" id="submit" class="btn btn-success">Insert Data</button>
        </div>
      </form>

      <br>
      <div class="form-group">
        <button type="button" id="warning" class="btn btn-warning btn-add__field">Add Field</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $('#submit').on('click', function(){
            var data = $('.p-info').val();
            var a = $('.storeInformation').val(data);
        });

        $('.btn-add__field').on('click', function(){
            alert('add field');
            jQuery('#fields-container').last().clone(true).find("input:text").val("").end().appendTo('#input-fields').val("");
        });
    </script>
</body>
</html>
