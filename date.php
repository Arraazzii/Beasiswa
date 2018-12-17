<!DOCTYPE html>
<html>
<head>
<title>Date Picker</title>
<link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="bootstrap/dist/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
<link href="bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
</head>

<body>

                <div class="input-group date form_date col-md-5" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="10" type="text" name="dari">
     <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
    <input type="hidden" id="dtp_input2" value="" class="form_date"/>



<script type="text/javascript" src="jquery/jquery-1.8.3.min.js" ></script>
<script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="date/js/bootstrap-datetimepicker.js" ></script>
<script type="text/javascript" src="date/js/locales/bootstrap-datetimepicker.id.js"></script>
 <script type="text/javascript">

 $('.form_date').datetimepicker({

        language:  'id',

        weekStart: 1,

        todayBtn:  1,

  autoclose: 1,

  todayHighlight: 1,

  startView: 2,

  minView: 2,

  forceParse: 0

    });

</script>

</body>
</html>
