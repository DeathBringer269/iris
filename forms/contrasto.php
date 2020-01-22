  <?php include("header.php"); ?>

<div id="wrapper">
    <div class="form-container">
        <div class="form-heading">CONTRASTO</div>
        <div class="form-subheading mb-5">Intercollege Doodling Competition</div>
        <form action="">
            <!-- name -->
            <div class="input-group">
                <!-- <label for="input" class="control-label">Username</label> -->
                <b class="bold">Name</b>
                <input id="name" name="entry.420118953" type="text" placeholder="Full name" required>
                <span class="bar"></span>
            </div>
            <!-- college -->
            <div class="input-group">
                <b class="bold">College</b>
                <input type="text" list="colleges" id="interCollege" name="entry.387717126" onchange="setVisibility()"
                    placeholder="College name" required>
                <span class="bar"></span>
                <datalist id="colleges">
                    <option>St. Francis Institute of Technology</option>
                </datalist>
            </div>
            <div class="input-group">
                <b class="bold">Year </b><br />
                <select class="form-control input-list" name="entry.441805495" id="year">
                    <option value="fe">First Year</option>
                    <option value="se">Second Year</option>
                    <option value="te">Third Year</option>
                    <option value="be">Fourth Year</option>
                </select>
            </div>
            <div id="sfitian">
                <div class="form-group dropdown">
                    <div class="input-group">
                        <b class="bold">Department</b>
                        <select class="form-control" name="entry.1503922811" id="dept">
                            <option value="comp">COMPUTER</option>
                            <option value="it">IT</option>
                            <option value="extc">EXTC</option>
                            <option value="elec">Electrical</option>
                            <option value="mech">Mechanical</option>
                        </select>
                    </div>
                </div>
                <div class="input-group">
                    <b class="bold">Pid</b>
                    <input type="number" placeholder="eg. 1820xx" id="pid" name="entry.1419301628">
                    <span class="bar"></span>
                </div>
            </div>
            <div class="input-group">
                <b class="bold">Phone Number</b>
                <input type="tel" placeholder="xxx-xxx-xxxx" maxlength="10" id="contact" name="entry.1586680497"
                    required>
                <span class="bar"></span>
            </div>
            <!-- submit -->
            <div class="input-group">
                <!--<button>Register</button>-->
                <button class="btn py-3 px-4 btn-primary" onclick="return sendMessage();">Register</button>
            </div>
        </form>
    </div>
</div>

<script>
    function sendMessage() {
        let name = document.querySelector('#name').value;
        let college = document.querySelector('#interCollege').value;
        let year = $("#year option:selected").text();
        let dept = $("#dept option:selected").text();
        let pid = document.querySelector('#pid').value;
        let phoneNumber = document.querySelector('#contact').value;

        console.log('hi');

         $.ajax({
            url: "https://docs.google.com/forms/d/e/1FAIpQLScdm9KAD10OXGKTW4POvBkweqb45PU8M1SyD44c7BLgjMJFpA/formResponse?",
            data: {"entry.420118953": name, "entry.387717126": college, "entry.441805495": year,
             "entry.1503922811": dept, "entry.1419301628":pid, "entry.1604169910":phoneNumber},
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
