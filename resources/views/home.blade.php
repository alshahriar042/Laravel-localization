<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Localization Practice</title>
  <style>
    /* Define styles for the header and toggle button */
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #333;
      color: #fff;
      padding: 10px;
    }

    #toggle {
      background-color: #fff;
      color: #333;
      border: none;
      padding: 5px 10px;
      cursor: pointer;
    }
  </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"
    integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css"
    integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />

</head>
<body>
  <header>
    <h1>Localization</h1>
    <div class="form-check form-switch d-flex align-items-center gap-2 languge-content">
        <p class="language-text">English</p>
        <div>
            <input class="form-check-input language-btn ms-0 mt-0 languageChange" id="languageChange"
                type="checkbox" {{ Session::get('locale') == 'bn' ? 'checked' : '' }} />
        </div>
        <p class="language-text">বাংলা</p>
    </div>
 </header>

  <main class="container">
    <h4 >{{ __('Home') }}</h4>
    <h4>{{ __('Contact') }}</h4>


  </main>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    $('.languageChange').click(function() {
        var mode = $(this).prop('checked');
        if (mode == true) {
            var langVal = 'bn';
        } else {
            var langVal = 'en';
        }

        $.ajax({
            type: 'GET',
            url: '/lang/' + langVal,
            success: function(data) {
                location.reload();
                console.log(langVal);

            },
            error: function(data) {
                console.log('Something went wrong.');
            }
        });
    });
</script>
</body>
</html>
