
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_hpv_dose_1">HPV 1st Dose <b class="text-danger">*</b></label>
            <span class="form-note">Specify the date for the first dose.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="date" class="form-control" id="inp_hpv_dose_1" name="inp_hpv_dose_1" required>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_hpv_dose_2">HPV 2nd Dose <b class="text-danger">*</b></label>
            <span class="form-note">Specify the date for the second dose.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="date" class="form-control" id="inp_hpv_dose_2" name="inp_hpv_dose_2" required>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_hpv_dose_3">HPV 3rd Dose <b class="text-danger">*</b></label>
            <span class="form-note">Specify the date for the third dose.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="date" class="form-control" id="inp_hpv_dose_3" name="inp_hpv_dose_3" required>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_hpv_deworming_date">Deworming Date Given <b class="text-danger">*</b></label>
            <span class="form-note">Specify the date of deworming.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="date" class="form-control" id="inp_hpv_deworming_date" name="inp_hpv_deworming_date" required>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_hpv_lmp">LMP <b class="text-danger">*</b></label>
            <span class="form-note">Specify the Last Menstrual Period (LMP).</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="date" class="form-control" id="inp_hpv_lmp" name="inp_hpv_lmp" required>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_hpv_edc">EDC <b class="text-danger">*</b></label>
            <span class="form-note">Specify the Estimated Date of Confinement (EDC).</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="date" class="form-control" id="inp_hpv_edc" name="inp_hpv_edc" required>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_hpv_birthplan">Birthplan <b class="text-danger">*</b></label>
            <span class="form-note">Specify if there is a birthplan.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <select class="form-select" id="inp_hpv_birthplan" name="inp_hpv_birthplan" required>
            <option value="" disabled selected>-- SELECT --</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5"></div>
    <div class="col-lg-7 justify-end" style="float: right">
        <div class="form-group mt-2 mb-2 justify-end">
            <button type="reset" class="btn btn-light bg-white mx-3">
                <em class="icon ni ni-repeat"></em> Reset
            </button>
            <button type="submit" class="btn btn-primary">
                <em class="icon ni ni-save"></em> Submit Record
            </button>
        </div>
    </div>
</div>
