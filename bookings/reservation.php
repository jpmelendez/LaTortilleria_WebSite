$(function() {
      $( "#datepicker" ).datepicker({dateFormat:"D, d M",minDate:0,
      onSelect: function(dateText, inst) { 
          var date = $(this).datepicker('getDate'),
          day  = date.getDate(),  
          month = date.getMonth() + 1,              
          year =  date.getFullYear();
          var date_datepicker = day + '-' + month + '-' + year;
          document.getElementById('date_datepicker').value = date_datepicker;
        },beforeShowDay: function(date) {
        var day = date.getDay();
        var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
        return [(day != 1 && (array.indexOf(string) == -1))];
      }
      });
    });
  </script>
  <link href="css/reservation_form.css" rel="stylesheet" />
  <style>
    #ui-datepicker-div{
      font: 62.5% "Trebuchet MS", sans-serif;
    }
  </style>
</head>
<body>
 
 <?php include 'header-content.php' ?>
<div id="wrapper">
  <div class="reservation_content">
    <div id="reservation-search" class="form">
      <form method="POST" action="reservation.php">
        <input type="hidden" id="date_datepicker" name="date_datepicker" value="" />
        <div class="form_content">
          <div class="grid_1 start">
            <span class="form_label">Make a Reservation</span>
          </div>
          <div class="grid_1">
            <span class="form_label">Date</span>
            <input type="text" name="date" id="datepicker" size="30" required="" style="box-sizing: border-box;" />
          </div>
          <div class="grid_1">
            <span class="form_label">Time</span>
            <div style="background: url('img/input-select2.png') no-repeat right center;display: block;overflow: hidden;width: 150px;border-radius: 5px 5px 5px 5px;border-right:1px solid #AED0EA;background-color: rgba(0, 0, 0, 0);">
              <div style="background-image: linear-gradient(#FFFFFF 0%, #F6F6F6 50%, #EEEEEE 52%, #F4F4F4 100%); width:123px;">
                <select class="form_select" id="id_time" name="time">
                  <option value="1200">12:00 PM</option>
                  <option value="1250">12:30 PM</option>
                  <option value="1300">1:00 PM</option>
                  <option value="1350">1:30 PM</option>
                  <option value="1400">2:00 PM</option>
                  <option value="1800">6:00 PM</option>
                  <option value="1850">6:30 PM</option>
                  <option value="1900">7:00 PM</option>
                  <option value="1950">7:30 PM</option>
                  <option value="2000">8:00 PM</option>
                  <option value="2050">8:30 PM</option>
                  <option value="2100">9:00 PM</option>
                </select>
              </div>
            </div>
          </div>
          <div class="grid_1">
            <span class="form_label">Party Size</span>
            <div style="background: url('img/input-select2.png') no-repeat right center;display: block;overflow: hidden;width: 150px;border-radius: 5px 5px 5px 5px;border-right:1px solid #AED0EA;background-color: rgba(0, 0, 0, 0);">
              <div style="background-image: linear-gradient(#FFFFFF 0%, #F6F6F6 50%, #EEEEEE 52%, #F4F4F4 100%); width:123px;">
                <select class="form_select" id="id_guests" name="guests">
                  <option value="2">2 guests</option>
                  <option value="3">3 guests</option>
                  <option value="4">4 guests</option>
                  <option value="5">5 guests</option>
                  <option value="6">6 guests</option>
                  <option value="7">7 guest</option>
                  <option value="8">8 guests</option>
                  <option value="9">9 guests</option>
                  <option value="10">10 guests</option>
                </select>
              </div>
            </div>
          </div>
          <div class="grid_2">
            <input type="submit" value="Check For Reservation" class="form_submit" />
          </div>
        </div>
      </form>
    </div>
  </div>