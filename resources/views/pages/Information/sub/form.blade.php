<!-- Name -->
<div class="row mt-2 align-center">
    <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label" for="inp_name">Complete Name <b class="text-danger">*</b></label>
            <span class="form-note">Specify your Name here.</span>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="form-control-wrap">
            <input type="text" class="form-control" id="inp_name" name="inp_name"
                placeholder="Enter your Name here..." required>
        </div>
    </div>
</div>

<!-- Contact Number -->
<div class="row mt-2 align-center">
    <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label" for="inp_contact_num">Contact Number <b class="text-danger">*</b></label>
            <span class="form-note">Specify your Contact Number here.</span>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="form-control-wrap">
            <input type="number" class="form-control" id="inp_contact_num" name="inp_contact_num"
                placeholder="Enter your Contact Number here..." required>
        </div>
    </div>
</div>

<!-- Address -->
<div class="row mt-2 align-center">
    <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label" for="inp_address">Complete Address <b class="text-danger">*</b></label>
            <span class="form-note">Specify your Address here.</span>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="form-control-wrap">
            <input type="text" class="form-control" id="inp_address" name="inp_address"
                placeholder="Enter your Address here..." required>
        </div>
    </div>
</div>

<!-- Civil Status -->
<div class="row mt-2 align-center">
    <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label" for="inp_civil_status">Civil Status <b class="text-danger">*</b></label>
            <span class="form-note">Specify your Civil Status here.</span>
        </div>
    </div>
    <div class="col-lg-2">
        <div class="form-control-wrap">
            <select name="inp_civil_status" required id="inp_civil_status" class="form-select">
                <option value="" selected disabled>- CIVIL STATUS -</option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Separated">Separated</option>
                <option value="Widower">Widower</option>
                <option value="Widow">Widow</option>
            </select>
        </div>
    </div>
    <div class="col-lg-1">
        <div class="form-group">
            <label class="form-label" for="inp_religion">Religion <b class="text-danger">*</b></label>
            <span class="form-note">Specify your here.</span>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-control-wrap">
            <input type="text" class="form-control" id="inp_religion" name="inp_religion"
                placeholder="Enter your Religion here..." required>
        </div>
    </div>
</div>

<!-- Blood Type -->
<div class="row mt-2 align-center">
    <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label" for="inp_bloodtype">Blood Type <b class="text-danger">*</b></label>
            <span class="form-note">Specify your Blood Type here.</span>
        </div>
    </div>
    <div class="col-lg-2">
        <div class="form-control-wrap">
            <select class="form-control select2-single-no-ajax validate-form personalFormStep1" id="inp_bloodtype"
                name="inp_bloodtype" style="width:100%" required>
                <option value="" selected disabled>- BLOOD TYPE -</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
        </div>
    </div>
    <div class="col-lg-1">
        <div class="form-group">
            <label class="form-label" for="inp_birthdate">Birthdate <b class="text-danger">*</b></label>
            <span class="form-note">Specify your here.</span>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-control-wrap">
            <input type="date" class="form-control" max="{{ date('Y-m-d') }}" id="inp_birthdate"
                name="inp_birthdate" placeholder="Enter your Age here..." required>
        </div>
    </div>
    <div class="col-lg-1">
        <div class="form-group">
            <label class="form-label" for="inp_birthdate">Patient Age <b class="text-danger">*</b></label>
            <span class="form-note">Computed Age</span>
        </div>
    </div>
    <div class="col-lg-1">
        <div class="form-control-wrap">
            <input type="number" readonly class="form-control text-center bg-white" id="inp_age" name="inp_age"
                placeholder="Age" required>
        </div>
    </div>
</div>

<!-- PhilHealth -->
<div class="row mt-2 align-center">
    <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label" for="inp_philhealth">PhilHealth Member ?<b class="text-danger">*</b></label>
            <span class="form-note">Specify if you have PhilHealth.</span>
        </div>
    </div>
    <div class="col-lg-2">
        <div class="form-control-wrap">
            <select class="form-control select2-single-no-ajax validate-form personalFormStep1" id="inp_philhealth"
                name="inp_philhealth" style="width:100%" required>
                <option value="" selected disabled>ARE YOU A PHIC MEMBER ? </option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
                <option value="NHTS">NHTS</option>
                <option value="Non-NHTS">Non-NHTS</option>
            </select>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="number" class="form-control" id="inp_philhealth_num" name="inp_philhealth_num"
                placeholder="Specify your Phil-Health Number here..." required>
        </div>
    </div>
</div>

<div class="nk-divider divider md"></div>

<!-- Weight -->
<div class="row mt-2 align-center">
    <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label" for="inp_weight">Weight <b class="text-danger">*</b></label>
            <span class="form-note">Specify your Weight here.</span>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-control-wrap">
            <input type="number" class="form-control" id="inp_weight" name="inp_weight"
                placeholder="Enter your Weight here..." required>
        </div>
    </div>
    <div class="col-lg-1">
        <div class="form-group">
            <label class="form-label" for="inp_gavida">Gavida <b class="text-danger">*</b></label>
            <span class="form-note">Specify your here.</span>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-control-wrap">
            <input type="text" class="form-control" id="inp_gavida" name="inp_gavida"
                placeholder="Enter your Gavida here..." required>
        </div>
    </div>
</div>


<!-- Term -->
<div class="row mt-2 align-center">
    <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label" for="inp_term">Term <b class="text-danger">*</b></label>
            <span class="form-note">Specify your Term here.</span>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-control-wrap">
            <input type="text" class="form-control" id="inp_term" name="inp_term"
                placeholder="Enter your Term here..." required>
        </div>
    </div>
    <div class="col-lg-1">
        <div class="form-group">
            <label class="form-label" for="inp_preterm">Preterm <b class="text-danger">*</b></label>
            <span class="form-note">Specify your here.</span>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-control-wrap">
            <input type="text" class="form-control" id="inp_preterm" name="inp_preterm"
                placeholder="Enter your Preterm here..." required>
        </div>
    </div>
</div>

<!-- Abortion -->
<div class="row mt-2 align-center">
    <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label" for="inp_abortion">Abortion <b class="text-danger">*</b></label>
            <span class="form-note">Specify your Abortion here.</span>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-control-wrap">
            <input type="text" class="form-control" id="inp_abortion" name="inp_abortion"
                placeholder="Enter your Abortion here..." required>
        </div>
    </div>
    <div class="col-lg-1">
        <div class="form-group">
            <label class="form-label" for="inp_live">Live <b class="text-danger">*</b></label>
            <span class="form-note">Specify your here.</span>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-control-wrap">
            <input type="text" class="form-control" id="inp_live" name="inp_live"
                placeholder="Enter your Live here..." required>
        </div>
    </div>
</div>

<div class="nk-divider divider md"></div>

<div class="row mt-2 align-center">
    <div class="col-lg-3">
        <!-- Empty for spacing -->
    </div>

    <div class="col-lg-9 d-flex justify-content-end">
        <div class="form-group mt-2 mb-2 justify-end">
            <button type="reset" class="btn btn-light bg-white mx-3">
                <em class="icon ni ni-repeat"></em>&ensp;
                Reset
            </button>
            <button type="submit" class="btn btn-success">
                <em class="icon ni ni-save"></em>&ensp;
                Submit Record
            </button>
        </div>
    </div>
</div>

<script>
    document.getElementById('inp_birthdate').addEventListener('change', function() {
        const birthdate = new Date(this.value);
        const age = calculateAge(birthdate);
        document.getElementById('inp_age').value = age + 1;
    });

    function calculateAge(birthdate) {
        const today = new Date();
        let age = today.getFullYear() - birthdate.getFullYear();
        const monthDiff = today.getMonth() - birthdate.getMonth();

        // Check if the birthday hasn't happened yet this year
        if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthdate.getDate())) {
            age--;
        }

        return age;
    }
</script>
