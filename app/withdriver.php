<style>
    .selectParent2{
        width:100%;
        overflow:hidden;


    }

    .selectParent2 select{
        width:100%;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        padding: 2px 2px 2px 2px;
        border: none;
       background: transparent url("http://www.srilankacars.lk/image/icon/down.png") no-repeat right center;
    }

    .selectParent3{
        width:100%;
        overflow:hidden;


    }

    .selectParent3 select{
        width:100%;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        padding: 2px 2px 2px 2px;
        border: none;
       background: transparent url("http://www.srilankacars.lk/image/icon/down.png") no-repeat right center;
    }

    .selectParent5{
        width:100%;
        overflow:hidden;


    }

    .selectParent5 select{
        width:100%;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        padding: 2px 2px 2px 2px;
        border: none;
        background: transparent url("http://www.srilankacars.lk/image/icon/down.png") no-repeat right center;
    }

    #dpd11
    {
 background-image: url(http://www.srilankacars.lk/image/icon/calender.jpg);
    background-position: right;
    background-repeat: no-repeat;
    }

    #dpd12
    {
 background-image: url(http://www.srilankacars.lk/image/icon/calender.jpg);
    background-position: right;
    background-repeat: no-repeat;
    }





</style>

<form action="" method="POST" name="form4" id="form4" onsubmit="return validateForm22()">

    <div class="row" style="padding:0 16px 0 16px;">
        <div class="col-md-12"  style="background-color: #fff; ">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group"  style="margin-top: 20px;">
                        <label style="margin-bottom: 10px;">Pick Up Location</label>
                        <div class="selectParent5">
                            <select class="form-control2 nw1 location" name="picklocation" id="picklocation" value="">
                                <option value="" selected="selected"></option>
                                <option value="Air Port">Air Port</option>
                                <option value="Colombo">Colombo</option>
                                <option value="Negombo">Negombo</option>
                            </select></div>
<!--                                            <input type="text" name="picklocation" placeholder="Air Port" value="Air Port" class="form-control2 nw1" readonly>
                        -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                   
                    <div class="form-group row" style="margin-top: 10px;">
                        
                        <div class="col-sm-12">
                             <label  style=" margin-top: 20px;">Pick-Up Date</label>
                            <div class="datepicker-wrap ck">
                                <input type="text" id="dpd11" name="pickdate" class="form-control2 nw1" placeholder="dd/mm/yy" />

                            </div>
                        </div>
                        <div class="col-sm-12 pickuptime" >
                             <label  style=" margin-top: 20px;">Pick-Up Time</label>
                            <div class="selectParent">
                                <select class="form-control2 time" name="picktime" id="picktime" value="">
                                    <option value="" selected="selected"></option>
                                    <option value="00.00">00.00</option>
                                    <option value="00.30">00.30</option>
                                    <option value="01.00">01.00</option>
                                    <option value="01.30">01.30</option>
                                    <option value="02.00">02.00</option>
                                    <option value="02.30">02.30</option>
                                    <option value="03.00">03.00</option>
                                    <option value="03.30">03.30</option>
                                    <option value="04.00">04.00</option>
                                    <option value="04.30">04.30</option>
                                    <option value="05.00">05.00</option>
                                    <option value="05.30">05.30</option>
                                    <option value="06.00">06.00</option>
                                    <option value="06.30">06.30</option>
                                    <option value="07.00">07.00</option>
                                    <option value="07.30">07.30</option>
                                    <option value="08.00">08.00</option>
                                    <option value="08.30">08.30</option>
                                    <option value="09.00">09.00</option>
                                    <option value="09.30">09.30</option>
                                    <option value="10.00">10.00</option>
                                    <option value="10.30">10.30</option>
                                    <option value="11.00">11.00</option>
                                    <option value="11.30">11.30</option>
                                    <option value="12.00">12.00</option>
                                    <option value="12.30">12.30</option>
                                    <option value="13.00">13.00</option>
                                    <option value="13.30">13.30</option>
                                    <option value="14.00">14.00</option>
                                    <option value="14.30">14.30</option>
                                    <option value="15.00">15.00</option>
                                    <option value="15.30">15.30</option>
                                    <option value="16.00">16.00</option>
                                    <option value="16.30">16.30</option>
                                    <option value="17.00">17.00</option>
                                    <option value="17.30">17.30</option>
                                    <option value="18.00">18.00</option>
                                    <option value="18.30">18.30</option>
                                    <option value="19.00">19.00</option>
                                    <option value="19.30">19.30</option>
                                    <option value="20.00">20.00</option>
                                    <option value="20.30">20.30</option>
                                    <option value="21.00">21.00</option>
                                    <option value="21.30">21.30</option>
                                    <option value="22.00">22.00</option>
                                    <option value="22.30">22.30</option>
                                    <option value="23.00">23.00</option>
                                    <option value="23.30">23.30</option>

                                </select>

                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label  style="margin-top: 20px; margin-bottom: 10px;">Return Date</label>
                            <div class="datepicker-wrap ck">
                                <input type="text" id="dpd12" name="returndate" class="form-control2 nw1" placeholder="dd/mm/yy" />

                            </div>
                        </div>
                        <div class="col-sm-12 pickuptime" >
                             <label  style="margin-top: 20px; margin-bottom: 10px;">Return Time</label>
                            <div class="selectParent">
                                <select class="form-control2 time" name="returntime" id="returntime" value="">
                                    <option value="" selected="selected"></option>
                                    <option value="00.00">00.00</option>
                                    <option value="00.30">00.30</option>
                                    <option value="01.00">01.00</option>
                                    <option value="01.30">01.30</option>
                                    <option value="02.00">02.00</option>
                                    <option value="02.30">02.30</option>
                                    <option value="03.00">03.00</option>
                                    <option value="03.30">03.30</option>
                                    <option value="04.00">04.00</option>
                                    <option value="04.30">04.30</option>
                                    <option value="05.00">05.00</option>
                                    <option value="05.30">05.30</option>
                                    <option value="06.00">06.00</option>
                                    <option value="06.30">06.30</option>
                                    <option value="07.00">07.00</option>
                                    <option value="07.30">07.30</option>
                                    <option value="08.00">08.00</option>
                                    <option value="08.30">08.30</option>
                                    <option value="09.00">09.00</option>
                                    <option value="09.30">09.30</option>
                                    <option value="10.00">10.00</option>
                                    <option value="10.30">10.30</option>
                                    <option value="11.00">11.00</option>
                                    <option value="11.30">11.30</option>
                                    <option value="12.00">12.00</option>
                                    <option value="12.30">12.30</option>
                                    <option value="13.00">13.00</option>
                                    <option value="13.30">13.30</option>
                                    <option value="14.00">14.00</option>
                                    <option value="14.30">14.30</option>
                                    <option value="15.00">15.00</option>
                                    <option value="15.30">15.30</option>
                                    <option value="16.00">16.00</option>
                                    <option value="16.30">16.30</option>
                                    <option value="17.00">17.00</option>
                                    <option value="17.30">17.30</option>
                                    <option value="18.00">18.00</option>
                                    <option value="18.30">18.30</option>
                                    <option value="19.00">19.00</option>
                                    <option value="19.30">19.30</option>
                                    <option value="20.00">20.00</option>
                                    <option value="20.30">20.30</option>
                                    <option value="21.00">21.00</option>
                                    <option value="21.30">21.30</option>
                                    <option value="22.00">22.00</option>
                                    <option value="22.30">22.30</option>
                                    <option value="23.00">23.00</option>
                                    <option value="23.30">23.30</option>

                                </select>

                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group" style="margin-top: 20px;">
                        <label style="margin-bottom: 10px;">Number Of Days</label>
                        <input type="text" name="numdays" id="numdays" placeholder="" value="" class="form-control2 nw1" readonly>

                    </div>  
                </div>
            </div>
            <div class="row">
               
                    <div class="col-sm-12 form-group check" >
                        <i class="fa fa-check btnchk" style="margin-top: 20px;"></i>

                        <button class="btn btn-default btn-block btn-group-justified bb" style="margin-top: 20px;"  type="submit" value="submit" id="submit"  name="submit" >SEARCH NOW</button>                

                    </div>
               
            </div>


        </div>
    </div>







</form>
<script type="text/javascript">
    function validateForm22() {
        var k = document.forms["form4"]["picklocation"].value;
        if (k == null || k == "") {
            alert("Please Select Drop Off Pickup Location");
            return false;
        }

        var l = document.forms["form4"]["pickdate"].value;
        if (l == null || l == "") {
            alert("Please Select Pick Up Date");
            return false;
        }

        var m = document.forms["form4"]["picktime"].value;
        if (m == null || m == "") {
            alert("Please Select Pick Up Time");
            return false;
        }

        var n = document.forms["form4"]["returndate"].value;
        if (n == null || n == "") {
            alert("Please Select Return Date");
            return false;
        }

        var o = document.forms["form4"]["returntime"].value;
        if (o == null || o == "") {
            alert("Please Select Return Time");
            return false;
        }

        var p = document.forms["form4"]["numdays"].value;
        if (isNaN(p) || p <= 0) {
            alert("Number of Days must be more than 0 Please Check Pickup Date and Return Date");
            return false;
        }

    }
</script> 


<script>
    $(document).ready(function () {

        $('#dp1').datepicker({
            format: 'dd-mm-yyyy'
        });



        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dpd11').datepicker({

            onRender: function (date) {
                return date.valueOf() < now.valueOf() ? 'disabled' : '';
            }

        }).on('changeDate', function (ev) {
            if (ev.date.valueOf() > checkout.date.valueOf()) {
                //var newDate = new Date(ev.date)
                // newDate.setDate(newDate.getDate() + 1);
                //checkout.setValue(newDate);
            }
            checkin.hide();

        }).data('datepicker');


        var checkout = $('#dpd12').datepicker({

            onRender: function (date) {
                return date.valueOf() < checkin.date.valueOf() ? 'disabled' : '';
            }
        }).on('changeDate', function (ev) {
            checkout.hide();
            dateDifference1();

        }).data('datepicker');




    });

    function dateDifference1() {
// var end = $("#dpd12").datepicker().val()
//var start = $("#dpd11").datepicker().val()

        $("#dpd11").datepicker({dateFormat: 'dd/mm/yyyy'});
        $("#dpd12").datepicker({dateFormat: 'dd/mm/yyyy'});


        var start1 = $('#dpd11').datepicker().val().split("/");
        var start = new Date(start1[1] + "/" + start1[0] + "/" + start1[2]);


        var end1 = $('#dpd12').datepicker().val().split("/");
        var end = new Date(end1[1] + "/" + end1[0] + "/" + end1[2]);
        // var days   = (end - start)/1000/60/60/24;

        var diff = new Date(end - start);
        var days = (diff / 1000 / 60 / 60 / 24) + 1;

        //alert(start); 
//     
        //  $('#numdays').html(days+" nights");
        $('#numdays').val(days);
    }


</script> 