$(function() {
    const mois = ["Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Décembre"];

    var day = moment().format("MM/DD/YYYY");

    var current_week, before_week, after_week;
    var div_week = document.getElementById('week_sub');

    var current_month, before_month, after_month;
    var div_month = document.getElementById('month_sub');

    var past_week, before_past_week, after_past_week;
    var div_past_week = document.getElementById('week_past');

    var past_month, before_past_month, after_past_month;
    var div_past_month = document.getElementById('month_past');

    $('#sub_week').val(day);
    $('#sub_month').val(day);
    $('#past_week').val(day);
    $('#past_month').val(day);

    var date_filter = {
        init: function (){

            var val_current = document.getElementById('sub_week').value;

            // if(moment(day, "MM/DD/YYYY").format("MM/DD/YYYY") == moment().format("MM/DD/YYYY")){
            //     $('#after_past_week').attr('disabled', true);
            // }

            // Present Week
            current_week = mois[parseInt(moment(val_current, 'MM/DD/YYYY').format("MM") - 1)];
            div_week.innerHTML = moment(val_current, 'MM/DD/YYYY').format("DD MMM YYYY");

            // Present Month
            current_month = mois[parseInt(moment(val_current, 'MM/DD/YYYY').format("MM") - 1)];
            div_month.innerHTML = moment(val_current, 'MM/DD/YYYY').format("MMMM YYYY");

            // Past Week
            past_week = mois[parseInt(moment(val_current, 'MM/DD/YYYY').format("MM") - 1)];
            div_past_week.innerHTML = moment(val_current, 'MM/DD/YYYY').format("DD MMM YYYY");

            // Past Month
            past_month = mois[parseInt(moment(val_current, 'MM/DD/YYYY').format("MM") - 1)];
            div_past_month.innerHTML = moment(val_current, 'MM/DD/YYYY').format("MMMM YYYY");

            $('#before_sub_week').on('click', function(){
                var before_sub_week = document.getElementById('sub_week').value;
                before_week = moment(before_sub_week, "MM/DD/YYYY").subtract(1, 'week').format("MM/DD/YYYY");

                $('#sub_week').val(before_week);
                div_week.innerHTML = moment(before_week, 'MM/DD/YYYY').format("DD MMM YYYY");
                $value = $('#sub_week').val();

                $.ajax ({
                    type : 'GET',
                    url : "/sudo/reservation-aeroport_filter",
                    data : { 'week' : $value },
                    success : function(data){
                        $('#ListSubWeekBooking').html('');
                        $('#ListSubWeekBooking').html(data);
                    },
                    error : function(){
                        console.log("An error occured !");
                    }
                });
            });

            $('#after_sub_week').on('click', function(){
                var after_sub_week = document.getElementById('sub_week').value;
                after_week = moment(after_sub_week, "MM/DD/YYYY").add(1, 'week').format("MM/DD/YYYY");

                $('#sub_week').val(after_week);
                div_week.innerHTML = moment(after_week, 'MM/DD/YYYY').format("DD MMM YYYY");
                $value = $('#sub_week').val();

                $.ajax ({
                    type : 'GET',
                    url : "/sudo/reservation-aeroport_filter",
                    data : { 'week' : $value },
                    success : function(data){
                        $('#ListSubWeekBooking').html('');
                        $('#ListSubWeekBooking').html(data);
                    },
                    error : function(){
                        console.log("An error occured !");
                    }
                });

            });

            $('#before_sub_month').on('click', function(){
                var before_sub_month = document.getElementById('sub_month').value;
                before_month = moment(before_sub_month, "MM/DD/YYYY").subtract(1, 'month').format("MM/DD/YYYY");

                $('#sub_month').val(before_month);
                div_month.innerHTML = mois[parseInt(moment(before_month, 'MM/DD/YYYY').format("MM") - 1)]+" "+moment(before_month, 'MM/DD/YYYY').format("YYYY");
                $value = $('#sub_month').val();

                $.ajax ({
                    type : 'GET',
                    url : "/sudo/reservation-aeroport_filter",
                    data : { 'month' : $value },
                    success : function(data){
                        $('#ListSubMonthBooking').html('');
                        $('#ListSubMonthBooking').html(data);
                    },
                    error : function(){
                        console.log("An error occured !");
                    }
                });

            });

            $('#after_sub_month').on('click', function(){
                var after_sub_month = document.getElementById('sub_month').value;
                after_month = moment(after_sub_month, "MM/DD/YYYY").add(1, 'month').format("MM/DD/YYYY");

                $('#sub_month').val(after_month);
                div_month.innerHTML = mois[parseInt(moment(after_month, 'MM/DD/YYYY').format("MM") - 1)]+" "+moment(after_month, 'MM/DD/YYYY').format("YYYY");
                $value = $('#sub_month').val();

                $.ajax ({
                    type : 'GET',
                    url : "/sudo/reservation-aeroport_filter",
                    data : { 'month' : $value },
                    success : function(data){
                        $('#ListSubMonthBooking').html('');
                        $('#ListSubMonthBooking').html(data);
                    },
                    error : function(){
                        console.log("An error occured !");
                    }
                });

            });

            $('#before_past_week').on('click', function(){

                // if(moment(day, "MM/DD/YYYY").format("MM/DD/YYYY") > moment().format("MM/DD/YYYY")){
                //     // alert('moment');
                //     $('#after_past_week').attr('disabled', false);
                // }
                var b_past_week = document.getElementById('past_week').value;
                before_past_week = moment(b_past_week, "MM/DD/YYYY").subtract(1, 'week').format("MM/DD/YYYY");

                $('#past_week').val(before_past_week);
                div_past_week.innerHTML = moment(before_past_week, 'MM/DD/YYYY').format("DD MMM YYYY");
                $value = $('#past_week').val();

                $.ajax ({
                    type : 'GET',
                    url : "/sudo/reservation-aeroport_filter",
                    data : { 'past_week' : $value },
                    success : function(data){
                        $('#ListPassWeekBooking').html('');
                        $('#ListPassWeekBooking').html(data);
                    },
                    error : function(){
                        console.log("An error occured !");
                    }
                });
            });

            $('#after_past_week').on('click', function(){
                var a_sub_week = document.getElementById('past_week').value;
                after_past_week = moment(a_sub_week, "MM/DD/YYYY").add(1, 'week').format("MM/DD/YYYY");

                $('#past_week').val(after_past_week);
                div_past_week.innerHTML = moment(after_past_week, 'MM/DD/YYYY').format("DD MMM YYYY");
                $value = $('#past_week').val();

                $.ajax ({
                    type : 'GET',
                    url : "/sudo/reservation-aeroport_filter",
                    data : { 'past_week' : $value },
                    success : function(data){
                        $('#ListPassWeekBooking').html('');
                        $('#ListPassWeekBooking').html(data);
                    },
                    error : function(){
                        console.log("An error occured !");
                    }
                });

            });

            $('#before_past_month').on('click', function(){
                var b_past_month = document.getElementById('past_month').value;
                before_past_month = moment(b_past_month, "MM/DD/YYYY").subtract(1, 'month').format("MM/DD/YYYY");

                $('#past_month').val(before_past_month);
                div_past_month.innerHTML = mois[parseInt(moment(before_past_month, 'MM/DD/YYYY').format("MM") - 1)]+" "+moment(before_past_month, 'MM/DD/YYYY').format("YYYY");
                $value = $('#past_month').val();

                $.ajax ({
                    type : 'GET',
                    url : "/sudo/reservation-aeroport_filter",
                    data : { 'past_month' : $value },
                    success : function(data){
                        $('#ListPastMonthBooking').html('');
                        $('#ListPastMonthBooking').html(data);
                    },
                    error : function(){
                        console.log("An error occured !");
                    }
                });

            });

            $('#after_past_month').on('click', function(){
                var a_past_month = document.getElementById('past_month').value;
                after_past_month = moment(a_past_month, "MM/DD/YYYY").add(1, 'month').format("MM/DD/YYYY");

                $('#past_month').val(after_past_month);
                div_past_month.innerHTML = mois[parseInt(moment(after_past_month, 'MM/DD/YYYY').format("MM") - 1)]+" "+moment(after_past_month, 'MM/DD/YYYY').format("YYYY");
                $value = $('#past_month').val();

                $.ajax ({
                    type : 'GET',
                    url : "/sudo/reservation-aeroport_filter",
                    data : { 'past_month' : $value },
                    success : function(data){
                        $('#ListPastMonthBooking').html('');
                        $('#ListPastMonthBooking').html(data);
                    },
                    error : function(){
                        console.log("An error occured !");
                    }
                });

            });
        }
    }

    date_filter.init();
});
