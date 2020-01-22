<?php include("header.php"); ?>

<div class="comment-form-wrap pt-5">
    <div style="margin-top:35px; margin-left:20px">
        <h1 style="color:rgb(3,63,255); font-weight: bolder">CS.</h1>
        <!-- <h4 class="mb-5" style="margin-left: 20px">InterCollege Photography Competition</h4> -->
    </div>
    <form action="../competition.php" class="p-5 bg-light">
        <!-- Name -->
        <div class="form-group">
            <label for="name">Name *</label>
            <input type="text" class="form-control" id="name" name="entry.558749190" required>
        </div>

        <!--  College  -->
        <div class="input-group">
                <b class="bold">College</b><br>
                <!-- <input type="text" list="colleges" id="interCollege" name="entry.1957620844" onchange="setVisibility()"
                    placeholder="College name" required>
                <span class="bar"></span>
                <datalist id="colleges">
                    <option>St. Francis Institute of Technology</option>
                </datalist> -->
                <b class="bold"><input class="custom-radio" type="radio" name="entry.1957620844" value="SFIT" id="sfit">SFIT</b>
                <b class="bold"><input type="radio" name="entry.1957620844" value="Other" id="other">Other</b>

            </div>

        <div id="sfitian">
            <div class="form-group">
                <label for="year">Year *</label>
                <select class="form-control" name="entry.1591931841" id="year">
                    <option value="none">&nbsp;</option>
                    <option value="fe">FE</option>
                    <option value="se">SE</option>
                    <option value="te">TE</option>
                    <option value="be">BE</option>
                </select>
            </div>
            <div class="form-group">
                <label for="department">Department *</label>
                <select class="form-control" name="entry.941060304" id="dept">
                    <option value="none">&nbsp;</option>
                    <option value="comp">COMPUTER</option>
                    <option value="it">IT</option>
                    <option value="extc">EXTC</option>
                    <option value="elec">Electrical</option>
                    <option value="mech">Mechanical</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pid">PID *</label>
                <input type="number" class="form-control" id="pid" name="entry.462139172"  required>
            </div>
        </div>

        <!-- Number -->
        <div class="form-group">
            <label for="contact">Number *</label>
            <input type="number" class="form-control" id="contact" name="entry.207598181"  required>
        </div>
        
       <div class="form-group">
       <button class="btn py-3 px-4 btn-primary" onclick="return sendMessage();">Register</button>
        </div>
    </form>
</div>


<script>
    function sendMessage() {
        let name = document.querySelector('#name').value;
        let college = "SFIT";
        let year = $("#year option:selected").text();
        let dept = $("#dept option:selected").text();
        let pid = document.querySelector('#pid').value;
        let groupCount = document.querySelector('#pid').value;
        let phoneNumber = document.querySelector('#contact').value;

        console.log('hi');
          if(document.getElementById("other").checked){
        college = document.querySelector('#collegeName').value;
        }

        $.ajax({
            url: "https://docs.google.com/forms/d/e/1FAIpQLSfvV499yHOOSiM1cjh7Ve9y8UMzNDAAEQbXQ_diO7mP8sMaSA/formResponse?",
            data: {"entry.558749190": name, "entry.1577977678": college, "entry.1591931841": year,
             "entry.941060304": dept, "entry.462139172":pid,"entry.207598181":phoneNumber},
            type: "POST",
            dataType: "xml",
            success: function(d){
                console.log("success");
                window.location.href="../competitions.php";
            },
            error: function(x, y, z) {
                console.log("error");
                window.location.href="../competitions.php";
            }
        });
        return false;   
    }
</script>

<?php include("footer.php") ?>
