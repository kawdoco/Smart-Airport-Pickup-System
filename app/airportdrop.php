<style>
    
#country_list_id  , #country_list_id1
{
    position: absolute; cursor: default;z-index:300000000 !important;
    background-color: #fff;
    padding: 8px;
    list-style: none;      



}
#country_list_id  li
{

    padding: 8px; 
  


}

#country_list_id1  li
{

    padding: 8px;     


}
</style>
<form action="" method="POST" name="form3" onsubmit="return validateForm2()" id="form3">

    <div class="row" style="padding:0 16px 0 16px;">
        <div class="col-md-12"  style="background-color: #fff; ">

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group"  style="margin-top: 20px;">
                        <label style="margin-bottom: 10px;">Drop Location</label>
                        <input type="text" name="drop" placeholder="Air Port" value="Air Port" class="form-control2 nw1" readonly>
<!--                                            <input type="text" name="pickup"  class="form-control1 nw1" placeholder="city, distirct or specific airpot" />-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group" >
                        <label  style="margin-bottom: 10px;">Pick Up Location</label>
                        <input type="text" name="dropoff" id="dropoff" class="form-control2 nw1" placeholder="city, distirct or specific airpot" onkeyup="autodrop()"  onclick="(this.value = '')" />
                        <input type="hidden" name="dropoff1" id="dropoff1"  />

                        <ul id="country_list_id1"></ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label  style="margin-top: 20px; margin-bottom: 10px;">Pick-Up Date</label>
                            <div class="datepicker-wrap ck">
                                <input type="text" id="dpdrop" name="dpdrop" class="form-control2 nw1" placeholder="dd/mm/yy" />

                            </div>
                        </div>
                        <div class="col-sm-12 pickuptime" >
                             <label  style="margin-top: 20px; margin-bottom: 10px;">Pick-Up Time</label>
                            <div class="selectParent">
                                <select class="form-control2 time" name="ontime" id="time" value="">
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
                <div class="col-sm-12 form-group check" >

                    

                    <button class="btn btn-default btn-block btn-group-justified bb" style="margin-top: 10px;" type="submit" value="submit" id="submit"  name="submit" >SEARCH NOW</button>                
<i class="fa fa-check btnchk" style="margin-top: 10px;"></i>
                </div>
            </div>


        </div>
    </div>
</form>

<script type="text/javascript">
    function validateForm2() {
        var x = document.forms["form3"]["dropoff"].value;
        if (x == null || x == "") {
            alert("Please Select Drop Off Destination");
            return false;
        }

        var y = document.forms["form3"]["dpdrop"].value;
        if (y == null || y == "") {
            alert("Please Select Pick Up Date");
            return false;
        }

        var z = document.forms["form3"]["ontime"].value;
        if (z == null || z == "") {
            alert("Please Select Pick Up Time");
            return false;
        }

    }
</script> 